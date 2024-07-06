<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Validator;
use App\Models\Common;
use App\Models\Page;
use App\Models\Login;
use Helper;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use DB;

class CategoryController extends Controller
{
	protected $Page;
	protected $Common;
	protected $Login;
    public function __construct(Common $Common,Login $Login, Page $Page)
    {
		$this->Common = $Common;
		$this->Login = $Login;
		$this->Page = $Page;
    }
	/********************************************************
	Backend
	*********************************************************/
	public function category_listing(request $response)
    {
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$data['title']= 'Categories';
		return view('admin/category/index',$data);
    }
	public function create_category(request $response)
    {
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$data['title']= 'Create Category';
		$whrData = array(
			'status'=>1,
			'parent_id'=>0,
		);
		$data['CatList'] = $this->Common->getData('mr_categories', $whrData);
		return view('admin/category/create_category',$data);
    }

	public function submit_category(request $response){
		$data['User'] = $response->session()->get('user');
		$CategoryId= $response->CategoryId;
		$title= $response->title;
		$Breadcum = $response->pressurl;
		$ReportStatus = 0;
		if($response->Status)
			$ReportStatus = 1;
		$pressurl = trim($Breadcum);
		$url = $this->seoUrl($pressurl,'&');
		$dataArr= array(
			'category_name'=>$title,
			'description'=>$response->desc,
			'parent_id'=>$response->ParentCategory,
			'status'=>$ReportStatus,
			'meta_title'=>$response->metatitle,
			'meta_keywords'=>$response->metakeywords,
			'meta_description'=>$response->metadesc,
		);
		if ($response->hasFile('Image')) {
			$image = $response->file('Image');
			$name = $image->getClientOriginalName();
			$destinationPath = 'assets/category';
			$image->move($destinationPath, $name);
			$dataArr['image']=$name;
			if($response->HiddenImage!=''){
				$filename = 'assets/category/'.$response->HiddenImage;
				if (file_exists($filename)){
				   @unlink($filename);
				}
			}
		}
		
		
		if($CategoryId==''){
			$dataArr['slug']=$url;
			$Result = $this->Common->check_url('mr_categories', 'slug', $url);
			if(count($Result)>0){
				$response->session()->flash('ReportMessage', 'URL is already exist');
				return Redirect::to('/category_listing');
			}
			$dataArr['created_by']=$data['User']->id;
			$dataArr['updated_by']=$data['User']->id;
			$CategoryId = $this->Common->saveData('mr_categories', $dataArr);
			
			$response->session()->flash('ReportMessage', 'Category Added');
				return Redirect::to('/category_listing');
		}else{
			$dataArr['slug']=$url;
			$Result = $this->Common->check_url('mr_categories', 'slug', $url, $CategoryId);
			if(count($Result)>0){
				$response->session()->flash('ReportMessage', 'URL is already exist');
				return Redirect::to('/category_listing');
			}
			$dataArr['updated_by']=$data['User']->id;
			$this->Common->updateData('mr_categories', 'id', $CategoryId, $dataArr);
			$response->session()->flash('ReportMessage', 'Category Updated');
			return Redirect::to('/category_listing');
		}
	}
	function seoUrl($str, $replace=array(), $delimiter='-') 
	{	
		if(strlen($str) > 225) {
			$str2 = trim(substr($str,-10));
			$str = trim(substr($str,0,215));			
			$str = $str.'-'.$str2;			
		} else {			
			$str = trim(substr($str,0,225));
		}
		
		if( !empty($replace) ){	$str = str_replace((array)$replace, ' ', $str);	}
		$clean = $str;
		$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
		$clean = strtolower(trim($clean, '-'));
		$clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
		return $clean;
	}
	public function category_list(request $response) {
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$LoginUser = $response->session()->get('user');
		$ResultCount = $this->Common->get_category_list(($response->search)?$response->search:"");
		$total = $ResultCount->count();
		$data = array();
		$Result = $this->Common->get_category_list(($response->search)?$response->search:"", $response->start, $response->length );
		$EditLink = 'edit_category/';
		
		
		if ($Result->count() > 0) {
			foreach ($Result as $row) {
				$Id = $row->id;
				$row_data['id'] = $Id;
				$row_data['title'] = $row->category_name;
				$edit_url = url($EditLink.$Id);
				$view_url = url('blog-category/'.$row->slug);
				$row_data['action'] = '<a href="'.$edit_url.'" class="EditData "  title="Edit"><i class="fa fa-edit"></i></a> - <a target="new" href="'.$view_url.'"class="ViewData " title="View"><i class="fa fa-eye"></i></a> - <a href="javascript:void(0);" class="DeleteRoom " onclick="return deleteData('.$Id.');" title="Delete"><i class="fa fa-trash"></i></a>';
				$data[] = $row_data;
			}
			
		}
		//$datas = array_map('array_values', $data);
		$DataArray = array('draw'=>$_REQUEST['draw'],'recordsTotal'=>$total ,'recordsFiltered'=>$total, 'data'=> $data);
		echo json_encode($DataArray);
	}

	public function edit_category(request $response){
		$Id = $response->id;
		$ReportData = $this->Common->getList('mr_categories', 'id', $Id);
		$data['report_data'] = $ReportData[0];
		$data['title']= 'Edit Category';
		$whrData = array(
			'status'=>1,
			'parent_id'=>0,
		);
		$data['CatList'] = $this->Common->getData('mr_categories', $whrData);
		return view('admin/category/create_category',$data);
	}

	function destroy($id)
	{
		if (Session::has('user')){
			// do some thing if the key is exist
		  }else{
			  return Redirect::to('/login');
			//the key does not exist in the session
		  }
		$delete=DB::table('mr_categories')->where('id',$id)->delete();
		echo 'Record deleted successfully!';
	}

}
