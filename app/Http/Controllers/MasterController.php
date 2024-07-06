<?php

namespace App\Http\Controllers\Auth;

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Common;
use App\Models\Login;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Models\Master;
use Helper;
class MasterController extends Controller
{
    protected $Common;
    protected $Login;
	protected $Master;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Common $Common,Login $Login,Master $Master)
    {
		$this->Common = $Common;
		$this->Login = $Login;
		$this->Master = $Master;
        //$this->middleware('guest')->except('logout');
    }
	
	public function department(request $response)
    {
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$data['title']= 'Departments';
		return view('admin/master/department',$data);
    }
	public function submit_department(request $response){
		$DepartmentId= $response->DepartmentId;
		$dataArr= array(
			'name'=>$response->DepartmentName,
			'status'=>1,
			
		);
		if($DepartmentId==''){
			$Resut = $this->Common->getList('department', 'name', $response->DepartmentName);
			if(empty($Resut[0])){
				$this->Common->saveData('department', $dataArr);
				echo 'Added';
			}else{
				echo 'exist';
			}
			
		}else{
			$this->Common->updateData('department', 'id', $DepartmentId, $dataArr);
		}
	}
	public function get_department_list(request $response) {
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
			$LoginUser = $response->session()->get('user');
			$ResultCount = $this->Master->get_department_list(($response->search)?$response->search:"");
			$total = $ResultCount->count();
			$data = array();
			$Result = $this->Master->get_department_list(($response->search)?$response->search:"", ($response->start)?$response->start:"", ($response->length)?$response->length:"", );
			
			if ($Result->count() > 0) {
				foreach ($Result as $row) {
					$Id = $row->id;
					$row_data['id'] = $Id;
					$row_data['department_name'] = $row->name;
					$url = url('edit_department/'.$Id);
					$row_data['action'] = '<a href="javascript:void(0);" onclick="return edit_department('.$Id.');" class="EditRoom "  title="Edit"><i class="fa fa-edit"></i></a> - <a href="javascript:void(0);" class="DeleteRoom " onclick="return delete_department('.$Id.');" title="Delete"><i class="fa fa-trash"></i></a> ';
					$data[] = $row_data;
				}
				
			}
			//$datas = array_map('array_values', $data);
			$DataArray = array('draw'=>$_REQUEST['draw'],'recordsTotal'=>$total ,'recordsFiltered'=>$total, 'data'=> $data);
			echo json_encode($DataArray);
	}
	public function edit_department(request $response){
		$Id = $response->Id;
		$Resut = $this->Common->getList('department', 'id', $response->Id);
		echo json_encode($Resut[0]);
	}
	public function delete_data(request $response){
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$this->Common->deleteData($response->table_name, 'id', $response->Id);
		echo 'deleted';
	}
	public function importCategories(request $request){
		$CompanyId = $request->id;
		$client = new \GuzzleHttp\Client();
		if($CompanyId==1)
			$response = $client->request('GET', 'https://reportsanddata.com/import_categories', ['verify' => false]);
		if($CompanyId==2)
			$response = $client->request('GET', 'https://www.marketexpertz.com/import_categories', ['verify' => false]);
		if($CompanyId==3)
			$response = $client->request('GET', 'https://www.emergenresearch.com/import_categories', ['verify' => false]);
		
		$DecodeResponse = json_decode($response->getBody());
		//echo '<pre>';
		//print_r($DecodeResponse); exit;
		$input = array();
		foreach($DecodeResponse as $key => $val){
			foreach($val as $val_main){
				$ArrData = array(
					'company_id'=>$CompanyId,
					'main_cat_id'=>$val_main->id,
				);
				$input_array=array(
					//'id'=>$val_main->id,
					'name'=>$val_main->name,
					'slug'=>$val_main->slug,
					'image_path'=>$val_main->image_path,
					'category_icon'=>$val_main->category_icon,
					'cat_type'=>$val_main->cat_type,
					'parent_id'=>$val_main->parent_id,
					'parentnew'=>$val_main->parentnew,
					'is_popular'=>$val_main->is_popular,
					'title'=>$val_main->title,
					'metdakeyword'=>$val_main->metdakeyword,
					'metadata'=>$val_main->metadata,
					'status'=>$val_main->status,
					'catdesc'=>$val_main->catdesc,
					'company_id'=>$CompanyId,
					'main_cat_id'=>$val_main->id,
					'image'=>$val_main->image,
				);
				$ResultCat = $this->Common->getData('category', $ArrData);
				if($ResultCat->count()>0){
					$this->Common->updateCategoryData('category', $CompanyId, $val_main->id, $input_array);
					if(!empty($val_main->subcat)){
						$SubCategories = $val_main->subcat;
						foreach($SubCategories as $key_child => $val_child){
							//echo $val_main->name;
							//print_r($val_child);
							$ParentCatName = $val_child->parent_cat_name;
							$WhrChildData = array(
								'company_id'=>$CompanyId,
								'name'=>$ParentCatName,
							);
							$Resut = $this->Common->getData('category', $WhrChildData);
							$ParentId =0;
							foreach($Resut as $va_pcat){
								$ParentId = $va_pcat->id;
							}
							$input_shild_array=array(
								//'id'=>$val_child->id,
								'name'=>$val_child->name,
								'slug'=>$val_child->slug,
								'image_path'=>$val_child->image_path,
								'category_icon'=>$val_child->category_icon,
								'cat_type'=>$val_child->cat_type,
								'parent_id'=>$ParentId,
								'parentnew'=>$val_child->parentnew,
								'is_popular'=>$val_child->is_popular,
								'title'=>$val_child->title,
								'metdakeyword'=>$val_child->metdakeyword,
								'metadata'=>$val_child->metadata,
								'status'=>$val_child->status,
								'catdesc'=>$val_child->catdesc,
								'company_id'=>$CompanyId,
								'main_cat_id'=>$val_child->id,
								'image'=>$val_child->image,
							);
							$WhrChildExist = array(
								'company_id'=>$CompanyId,
								'main_cat_id'=>$val_child->id,
							);
							$ResultChildCat = $this->Common->getData('category', $WhrChildExist);
							if($ResultChildCat->count()>0){
								$this->Common->updateCategoryData('category', $CompanyId, $val_child->id, $input_shild_array);
							}else{
								$this->Common->saveData('category', $input_shild_array);
							}
						}
					}
				}else{
					$this->Common->saveData('category', $input_array);
					if(!empty($val_main->subcat)){
						$SubCategories = $val_main->subcat;
						foreach($SubCategories as $key_child => $val_child){
							//echo $val_main->name;
							//print_r($val_child);
							$ParentCatName = $val_child->parent_cat_name;
							$WhrChildData = array(
								'company_id'=>$CompanyId,
								'name'=>$ParentCatName,
							);
							$Resut = $this->Common->getData('category', $WhrChildData);
							$ParentId =0;
							foreach($Resut as $va_pcat){
								$ParentId = $va_pcat->id;
							}
							$input_shild_array=array(
								//'id'=>$val_child->id,
								'name'=>$val_child->name,
								'slug'=>$val_child->slug,
								'image_path'=>$val_child->image_path,
								'category_icon'=>$val_child->category_icon,
								'cat_type'=>$val_child->cat_type,
								'parent_id'=>$ParentId,
								'parentnew'=>$val_child->parentnew,
								'is_popular'=>$val_child->is_popular,
								'title'=>$val_child->title,
								'metdakeyword'=>$val_child->metdakeyword,
								'metadata'=>$val_child->metadata,
								'status'=>$val_child->status,
								'catdesc'=>$val_child->catdesc,
								'company_id'=>$CompanyId,
								'main_cat_id'=>$val_child->id,
								'image'=>$val_child->image,
							);
							$WhrChildExist = array(
								'company_id'=>$CompanyId,
								'main_cat_id'=>$val_child->id,
							);
							$ResultChildCat = $this->Common->getData('category', $WhrChildExist);
							if($ResultChildCat->count()>0){
								$this->Common->updateCategoryData('category', $CompanyId, $val_child->id, $input_shild_array);
							}else{
								$this->Common->saveData('category', $input_shild_array);
							}
						}
					}
				}
				
			}
		}
		echo '<h1>Category has been imported</h1>';
	}
	public function masterCategories(request $response)
    {
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$data['title']= 'Departments';
		return view('admin/master/import_categories',$data);
    }
	public function data_uploading(request $response)
    {
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$data['title']= 'Data Uploading';
		return view('admin/master/data_uploading',$data);
    }
	public function data_uploading_listing(request $response) {
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
			$LoginUser = $response->session()->get('user');
			$ResultCount = $this->Master->data_uploading_listing(($response->search)?$response->search:"");
			$total = $ResultCount->count();
			$data = array();
			$Result = $this->Master->data_uploading_listing(($response->search)?$response->search:"", ($response->start)?$response->start:"", ($response->length)?$response->length:"", );
			
			if ($Result->count() > 0) {
				foreach ($Result as $row) {
					$Id = $row->id;
					$row_data['id'] = $Id;
					$row_data['account_name'] = $row->account_name;
					$row_data['created_date'] = date('d-m-Y', strtotime($row->created_date));
					$url = url('view_data_uploading_sections/'.$Id);
					$row_data['action'] = '<a href="javascript:void(0);" onclick="return edit_data_uploading('.$Id.');" class="EditRoom "  title="Edit"><i class="fa fa-edit"></i></a> - <a href="'.$url.'"  class=" "  title="View Data Uploading Section"><i class="fa fa-eye"></i></a> - <a href="javascript:void(0);" class="DeleteRoom " onclick="return delete_department('.$Id.');" title="Delete"><i class="fa fa-trash"></i></a> ';
					$data[] = $row_data;
				}
				
			}
			//$datas = array_map('array_values', $data);
			$DataArray = array('draw'=>$_REQUEST['draw'],'recordsTotal'=>$total ,'recordsFiltered'=>$total, 'data'=> $data);
			echo json_encode($DataArray);
	}
	public function submit_data_uploading(request $response){
		$SaveDataArr = array();
		$DataName= $response->DataName;
		$DataId= $response->DataId;
		$LoginUser = $response->session()->get('user');
		$dataArr= array(
			'account_name'=>$DataName,
		);
		if($DataId==''){
			$dataArr['created_by']=$LoginUser->id;
			$Resut = $this->Common->getList('data_uploading', 'account_name', $DataName);
			if(empty($Resut[0])){
				$Id = $this->Common->saveData('data_uploading', $dataArr);
				if ($response->hasFile('DataFile')) {
					$DataSectionFile = $response->file('DataFile');
					$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
					$spreadsheet = $reader->load($response->file('DataFile'));
					$sheetData = $spreadsheet->getActiveSheet()->toArray();
					//echo '<pre>'; print_r($sheetData); exit;
					if (!empty($sheetData)) {
						for ($i=2; $i<count($sheetData); $i++) {
							if($i<=32){
								//echo '<pre>'; print_r($sheetData[$i]); 	
								/*$Days = $sheetData[$i][0]; // columns
								$Jan = $sheetData[$i][1];
								$Feb = $sheetData[$i][2];
								$Mar = $sheetData[$i][3];
								$Apr = $sheetData[$i][4];
								$May = $sheetData[$i][5];
								$Jun = $sheetData[$i][6];
								$Jul = $sheetData[$i][7];
								$Aug = $sheetData[$i][8];
								$Sep = $sheetData[$i][9];
								$Oct = $sheetData[$i][10];
								$Nov = $sheetData[$i][11];
								$Decm = $sheetData[$i][12];*/
								$SaveDataArr[] = array(
									'account_id'=>$Id,
									'days' => $sheetData[$i][0], // columns
									'January' => ($sheetData[$i][1]=='')?0:$sheetData[$i][1],
									'February' => ($sheetData[$i][2]=='')?0:$sheetData[$i][2],
									'March' => ($sheetData[$i][3]=='')?0:$sheetData[$i][3],
									'April' => ($sheetData[$i][4]=='')?0:$sheetData[$i][4],
									'May' => ($sheetData[$i][5]=='')?0:$sheetData[$i][5],
									'June' => ($sheetData[$i][6]=='')?0:$sheetData[$i][6],
									'Jully' => ($sheetData[$i][7]=='')?0:$sheetData[$i][7],
									'August' => ($sheetData[$i][8]=='')?0:$sheetData[$i][8],
									'September' => ($sheetData[$i][9]=='')?0:$sheetData[$i][9],
									'October' => ($sheetData[$i][10]=='')?0:$sheetData[$i][10],
									'November' => ($sheetData[$i][11]=='')?0:$sheetData[$i][11],
									'December' => ($sheetData[$i][12]=='')?0:$sheetData[$i][12],
								);
							}
						}
					}
						 
				}
			if(!empty($SaveDataArr)){
				$this->Common->saveMultipleData('data_uploading_sections', $SaveDataArr);
			}
			//echo '<pre>';
			//print_r($SaveDataArr);
			//exit;
				$response->session()->flash('ReportMessage', 'Data Added');
				return Redirect::to('/data_uploading');
			}else{
				$response->session()->flash('ReportMessage', 'Already Data Added');
				return Redirect::to('/data_uploading');
			}
		}else{
			$this->Common->updateData('data_uploading', 'id', $DataId, $dataArr);
			$AccountId = $DataId;
			if ($response->hasFile('DataFile')) {
					$DataSectionFile = $response->file('DataFile');
					$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
					$spreadsheet = $reader->load($response->file('DataFile'));
					$sheetData = $spreadsheet->getActiveSheet()->toArray();
					//echo '<pre>'; print_r($sheetData); exit;
					if (!empty($sheetData)) {
						for ($i=2; $i<count($sheetData); $i++) {
							if($i<=32){
								//echo '<pre>'; print_r($sheetData[$i]); 	
								$Days = $sheetData[$i][0]; // columns
								/*$Jan = ($sheetData[$i][1]=='')?0:$sheetData[$i][1];
								$Feb = ($sheetData[$i][2]=='')?0:$sheetData[$i][2];
								$Mar = ($sheetData[$i][3]=='')?0:$sheetData[$i][3];
								$Apr = ($sheetData[$i][4]=='')?0:$sheetData[$i][4];
								$May = ($sheetData[$i][5]=='')?0:$sheetData[$i][5];
								$Jun = ($sheetData[$i][6]=='')?0:$sheetData[$i][6];
								$Jul = ($sheetData[$i][7]=='')?0:$sheetData[$i][7];
								$Aug = ($sheetData[$i][8]=='')?0:$sheetData[$i][8];
								$Sep = ($sheetData[$i][9]=='')?0:$sheetData[$i][9];
								$Oct = ($sheetData[$i][10]=='')?0:$sheetData[$i][10];
								$Nov = ($sheetData[$i][11]=='')?0:$sheetData[$i][11];
								$Decm = ($sheetData[$i][12]=='')?0:$sheetData[$i][12];*/
								$WhereArr = array(
									'account_id'=>$AccountId,
									'days'=>$Days,
								);
								$Resut = $this->Common->getData('data_uploading_sections', $WhereArr);
								if($Resut->count()>0){
									$SaveDataArr = array(
										'January' => ($sheetData[$i][1]=='')?0:$sheetData[$i][1],
										'February' => ($sheetData[$i][2]=='')?0:$sheetData[$i][2],
										'March' => ($sheetData[$i][3]=='')?0:$sheetData[$i][3],
										'April' => ($sheetData[$i][4]=='')?0:$sheetData[$i][4],
										'May' => ($sheetData[$i][5]=='')?0:$sheetData[$i][5],
										'June' => ($sheetData[$i][6]=='')?0:$sheetData[$i][6],
										'Jully' => ($sheetData[$i][7]=='')?0:$sheetData[$i][7],
										'August' => ($sheetData[$i][8]=='')?0:$sheetData[$i][8],
										'September' => ($sheetData[$i][9]=='')?0:$sheetData[$i][9],
										'October' => ($sheetData[$i][10]=='')?0:$sheetData[$i][10],
										'November' => ($sheetData[$i][11]=='')?0:$sheetData[$i][11],
										'December' => ($sheetData[$i][12]=='')?0:$sheetData[$i][12],
									);
									$WhereArrSection = array(
										'account_id'=>$AccountId,
										'days'=>$Days,
									);
									$this->Common->updateDatabyMultipleWhr('data_uploading_sections', $WhereArrSection, $SaveDataArr);
								}else{
									$SaveDataArr = array(
										'account_id'=>$AccountId,
										'days' => $sheetData[$i][0], // columns
										'January' => ($sheetData[$i][1]=='')?0:$sheetData[$i][1],
										'February' => ($sheetData[$i][2]=='')?0:$sheetData[$i][2],
										'March' => ($sheetData[$i][3]=='')?0:$sheetData[$i][3],
										'April' => ($sheetData[$i][4]=='')?0:$sheetData[$i][4],
										'May' => ($sheetData[$i][5]=='')?0:$sheetData[$i][5],
										'June' => ($sheetData[$i][6]=='')?0:$sheetData[$i][6],
										'Jully' => ($sheetData[$i][7]=='')?0:$sheetData[$i][7],
										'August' => ($sheetData[$i][8]=='')?0:$sheetData[$i][8],
										'September' => ($sheetData[$i][9]=='')?0:$sheetData[$i][9],
										'October' => ($sheetData[$i][10]=='')?0:$sheetData[$i][10],
										'November' => ($sheetData[$i][11]=='')?0:$sheetData[$i][11],
										'December' => ($sheetData[$i][12]=='')?0:$sheetData[$i][12],
									);
									$this->Common->saveData('data_uploading', $SaveDataArr);
								}
								
							}
						}
					}
						 
				}
			$response->session()->flash('ReportMessage', 'Data Updated');
				return Redirect::to('/data_uploading');
		}
	}
	public function delete_data_uploading(request $response){
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$this->Common->deleteData($response->table_name, 'id', $response->Id);
		$this->Common->deleteData('data_uploading_sections', 'account_id', $response->Id);
		echo 'deleted';
	}
	public function view_data_uploading_sections(request $response){
		$Id = $response->id;
		$data['DataResuts'] = $this->Common->getList('data_uploading', 'id', $response->Id);
		$data['SectionResuts'] = $this->Common->getListOrderby('data_uploading_sections', 'account_id', $response->Id, 'days', 'asc');
		
		$data['title']= 'Data Uploading';
		return view('admin/master/view_data_uploading_sections',$data);
	}
	public function edit_data_uploading(request $response){
		$Id = $response->Id;
		$Resut = $this->Common->getList('data_uploading', 'id', $response->Id);
		echo json_encode($Resut[0]);
	}
}
