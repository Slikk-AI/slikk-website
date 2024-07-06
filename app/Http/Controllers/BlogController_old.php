<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Validator;
use App\Models\Blog;
use App\Models\Common;
use App\Models\Page;
use App\Models\Login;
use Helper;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class BlogController extends Controller
{
   
    protected $Blog;
	protected $Page;
	protected $Common;
	protected $Login;
    public function __construct(Common $Common,Login $Login, Blog $Blog, Page $Page)
    {
		$this->Blog = $Blog;
		$this->Common = $Common;
		$this->Login = $Login;
		$this->Page = $Page;
    }
	/********************************************************
	Backend
	*********************************************************/
	public function blog_listing(request $response)
    {
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$data['title']= 'Blogs';
		return view('admin/blog/index',$data);
    }

	public function page_listing(request $response)
    {
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$data['title']= 'Pages';
		return view('admin/page/index',$data);
    }
	public function create_blog(request $response)
    {
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$data['title']= 'Create Blog';
		$data['report_data']= array();
		$data['category_data'] = $this->Common->getList('mr_categories', 'status', 1);
		return view('admin/blog/create_blog',$data);
    }

	public function create_page(request $response)
    {
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$data['title']= 'Create Page';
		$data['report_data']= array();
		$data['report_faq_data']= array();
	
	
		// $data['category_data'] = $this->Common->getList('mr_categories', 'status', 1);
		return view('admin/page/create_page',$data);
    }
	
	public function submit_blog(request $response){
		$data['User'] = $response->session()->get('user');
		$ReportId= $response->ReportId;
		$SectionSequence= $response->SectionSequence;
		$PublishDate = date('Y-m-d', strtotime($response->PublishDate));
		$PublishDate1 = date('Y-m-d', strtotime($response->PublishDate));
		if($response->Type=='Upcoming'){
			if($PublishDate!=''){
				$PublishDate = date('Y-m-d', strtotime("+2 months", strtotime($PublishDate)));
			}else{
				$PublishDate = date('Y-m-d');
				$PublishDate = date('Y-m-d', strtotime("+2 months", strtotime($PublishDate)));
			}
		}
		$title= $response->title;
		
		$Breadcum = $response->pressurl;
		$ReportStatus = 'deactive';
		if($response->Status)
			$ReportStatus = 'active';
		$FeatureStatus = 0;
		if($response->FeatureStatus)
			$FeatureStatus = 1;
		$pressurl = trim($Breadcum);
		$url = $this->seoUrl($pressurl,'&');
		$dataArr= array(
			'title'=>$title,
			'breadcum_title'=>$Breadcum,
			'publish_date'=>$PublishDate1,
			'description'=>$response->desc,
			'status'=>$ReportStatus,
			'feature'=>$FeatureStatus,
			'meta_title'=>$response->metatitle,
			'meta_keywords'=>$response->metakeywords,
			'meta_description'=>$response->metadesc,
			'category_id'=>$response->Category,
		);
		if ($response->hasFile('Image')) {
			$image = $response->file('Image');
			$name = $image->getClientOriginalName();
			$destinationPath = 'assets/blog';
			$image->move($destinationPath, $name);
			$dataArr['image_path']=$name;
			if($response->HiddenImage!=''){
				$filename = 'assets/blog/'.$response->HiddenImage;
				if (file_exists($filename)){
				   @unlink($filename);
				}
			}
		}
		
		
		if($ReportId==''){
			$dataArr['url']=$url;
			$Result = $this->Common->check_url('mr_blog', 'url', $url);
			if(count($Result)>0){
				$response->session()->flash('ReportMessage', 'URL is already exist');
				return Redirect::to('/blog_listing');
			}
			$dataArr['timestamp']=date('Y-m-d');
			$dataArr['created_by']=$data['User']->id;
			$dataArr['updated_by']=$data['User']->id;
			$ReportId = $this->Common->saveData('mr_blog', $dataArr);
			$isSection=0;
			if(!empty($response->SectionSequence)){
			foreach($SectionSequence as $val){
				$Sequence = $val;
				$HiddenSectionType= $response->HiddenSectionType[$val];
				$SectionDesc = '';
				$SectionPrice = 0;
				$SectionImage = '';
				$ReportSectionStatus = 0;
				if($response->SectionShow[$val])
					$ReportSectionStatus = 1;
				if($HiddenSectionType=='Content Section'){
					$isSection=1;
					$SectionTitle= $response->SectionTitle[$val];
					$SectionDesc= $response->SectionContent[$val];
					$SectionPrice= $response->SectionPrice[$val];
				}else if($HiddenSectionType=='Image Section'){
					$isSection=1;
					$SectionTitle= $response->ImageTtile[$val];
					if ($response->hasFile("SectionImage")) {
						foreach($response->file('SectionImage') as $key => $file){
							//$fname = $file->getClientOriginalName();
							if($val==$key){
								//$SectionImage = $val.'_'.time().'.'.$file->getClientOriginalExtension();
								$SectionImage = $file->getClientOriginalName();
								//$destinationPath = public_path('/assets/blog/media');
								$destinationPath = 'assets/blog/media';
								$file->move($destinationPath, $SectionImage);
							}
							
						}
						
					}
			
				}
				$dataSectionArr = array(
					'report_id'=>$ReportId,
					'section_sequence'=>$Sequence,
					'section_type'=>$HiddenSectionType,
					'title'=>$SectionTitle,
					'description'=>$SectionDesc,
					'image_path'=>$SectionImage,
					'price'=>$SectionPrice,
					'status'=>$ReportSectionStatus,
					'created_by'=>$data['User']->id,
					'updated_by'=>$data['User']->id,
				);
				
				$ReportSectionId = $this->Common->saveData('mr_blog_sections', $dataSectionArr);
			}
			}
			$dataArrisSection['isSection']=$isSection;
			$this->Common->updateData('mr_blog', 'id', $ReportId, $dataArrisSection);
			$response->session()->flash('ReportMessage', 'Blog Added');
				return Redirect::to('/blog_listing');
		}else{
			$dataArr['url']=$url;
			$Result = $this->Common->check_url('mr_blog', 'url', $url, $ReportId);
			if(count($Result)>0){
				$response->session()->flash('ReportMessage', 'URL is already exist');
				return Redirect::to('/blog_listing');
			}
			$dataArr['updated_by']=$data['User']->id;
			$this->Common->updateData('mr_blog', 'id', $ReportId, $dataArr);
			$isSection=0;
			$ArrSEctionId = array();
			$ArrSEctionGraphId = array();
			if(!empty($response->SectionSequence)){
			foreach($SectionSequence as $val){
				$Sequence = $val;
				$HiddenSectionType= $response->HiddenSectionType[$val];
				$SectionDesc = '';
				$SectionPrice = 0;
				$SectionImage = '';
				$ReportSectionStatus = 0;
				if($response->SectionShow[$val])
					$ReportSectionStatus = 1;
				if($HiddenSectionType=='Content Section'){
					$isSection=1;
					$SectionTitle= $response->SectionTitle[$val];
					$SectionDesc= $response->SectionContent[$val];
					$SectionPrice= $response->SectionPrice[$val];
				}else if($HiddenSectionType=='Image Section'){
					$isSection=1;
					$SectionTitle= $response->ImageTtile[$val];
					$SectionImage = $response->ReportHiddenImg[$val];
					if ($response->hasFile("SectionImage")) {
						foreach($response->file('SectionImage') as $key => $file){
							//$fname = $file->getClientOriginalName();
							if($val==$key){
								//$SectionImage = $val.'_'.time().'.'.$file->getClientOriginalExtension();
								$SectionImage = $file->getClientOriginalName();
								//$destinationPath = public_path('/assets/blog/media');
								$destinationPath = 'assets/blog/media';
								$file->move($destinationPath, $SectionImage);
								if($response->ReportHiddenImg[$val]!=''){
									//$filename = public_path('/assets/blog/media/'.$response->ReportHiddenImg[$val]);
									$filename = 'assets/blog/media/'.$response->ReportHiddenImg[$val];
									if (file_exists($filename)) {
									  // @unlink($filename);
									}
								}
								break;
							}
							
						}
						
					}
			
				}
				$dataSectionArr = array(
					'report_id'=>$ReportId,
					'section_sequence'=>$Sequence,
					'section_type'=>$HiddenSectionType,
					'title'=>$SectionTitle,
					'description'=>$SectionDesc,
					'image_path'=>$SectionImage,
					'price'=>$SectionPrice,
					'status'=>$ReportSectionStatus,
					'created_by'=>$data['User']->id,
					'updated_by'=>$data['User']->id,
				);
				$ReportSectionId = $response->ReportSectionId[$val];
				if($ReportSectionId==''){
					$ReportSectionId = $this->Common->saveData('mr_blog_sections', $dataSectionArr);
					$ArrSEctionId[] = $ReportSectionId;
				}else{
					$ArrSEctionId[] = $ReportSectionId;
					$this->Common->updateData('mr_blog_sections', 'id', $ReportSectionId, $dataSectionArr);
				}
			}
			}
			$dataArrisSection['isSection']=$isSection;
			$this->Common->updateData('mr_blog', 'id', $ReportId, $dataArrisSection);
			
			//print_r($ArrSEctionId); exit;
			if(!empty($ArrSEctionId)){
				$this->Blog->deleteDataBySectionId('mr_blog_sections', $ReportId, $ArrSEctionId);
			}
			
			$response->session()->flash('ReportMessage', 'Blog Updated');
			return Redirect::to('/blog_listing');
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
	public function blog_list(request $response) {
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$LoginUser = $response->session()->get('user');
		$ResultCount = $this->Blog->get_list(($response->search)?$response->search:"");
		$total = $ResultCount->count();
		$data = array();
		$Result = $this->Blog->get_list(($response->search)?$response->search:"", $response->start, $response->length );
		$EditLink = 'edit_blog/';
		
		
		if ($Result->count() > 0) {
			foreach ($Result as $row) {
				$Id = $row->id;
				$row_data['id'] = $Id;
				$row_data['title'] = $row->title;
				$edit_url = url($EditLink.$Id);
				$view_url = url('preview/'.$row->url);
				//$view_url = '';
				$report_sequence_url = url('arrange_blog_section_sequence/'.$Id);
				$row_data['action'] = '<a href="'.$edit_url.'" class="EditData "  title="Edit"><i class="fa fa-edit"></i></a> - <a target="new" href="'.$view_url.'"class="ViewData " title="View"><i class="fa fa-eye"></i></a> - <a target="new" href="'.$report_sequence_url.'"class="ViewData " title="Arrange Report Section Sequence"><i class="fa fa-sort"></i></a> ';
				$data[] = $row_data;
			}
			
		}
		//$datas = array_map('array_values', $data);
		$DataArray = array('draw'=>$_REQUEST['draw'],'recordsTotal'=>$total ,'recordsFiltered'=>$total, 'data'=> $data);
		echo json_encode($DataArray);
	}

	public function page_list(request $response) {
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$LoginUser = $response->session()->get('user');
		$ResultCount = $this->Page->get_list(($response->search)?$response->search:"");
		$total = $ResultCount->count();
		$data = array();
		$Result = $this->Page->get_list(($response->search)?$response->search:"", $response->start, $response->length );
		$EditLink = 'edit_page/';
		
		
		if ($Result->count() > 0) {
			foreach ($Result as $row) {
				$Id = $row->id;
				$row_data['id'] = $Id;
				$row_data['title'] = $row->title;
				$edit_url = url($EditLink.$Id);
				$page_sequence_url = url('arrange_page_section_sequence/'.$Id);
				$add_content_url = url('add_content_for_page/'.$Id);
				$element_list_url = url('element_list/'.$Id);
				//$view_url = url('preview/'.$row->url);
				//$view_url = '';
				//$report_sequence_url = url('arrange_blog_section_sequence/'.$Id);
				$row_data['action'] = '<a href="'.$edit_url.'" class="EditData "  title="Edit"><i class="fa fa-edit"></i></a> - <a target="new" href="'.$page_sequence_url.'"class="ViewData " title="Arrange Page Section Sequence"><i class="fa fa-sort"></i></a> - <a href="'.$add_content_url.'" class="EditData "  title="Edit">Add Element</a> - <a href="'.$element_list_url.'" class="EditData "  title="Edit">Element List</a>';
				$data[] = $row_data;
			}
			
		}
		//$datas = array_map('array_values', $data);
		$DataArray = array('draw'=>$_REQUEST['draw'],'recordsTotal'=>$total ,'recordsFiltered'=>$total, 'data'=> $data);
		echo json_encode($DataArray);
	}
	public function view_blog(request $response){
		
		$ReportData = $this->Common->getList('mr_blog', 'url', $response->slug);
		$data['report_data'] = $ReportData[0];
		$Id = $data['report_data']->id;
		$data['reportSectionDetails'] =  $this->Blog->getList('mr_blog_sections', 'report_id', $Id, 'section_sequence');
		$data['title']= 'View Blog';
		return view('admin/blog/view_blog',$data);
	}
	public function edit_blog(request $response){
		$Id = $response->id;
		$ReportData = $this->Common->getList('mr_blog', 'id', $Id);
		$data['report_data'] = $ReportData[0];
		
		$data['reportSectionDetails'] =  $this->Blog->getList('mr_blog_sections', 'report_id', $Id, 'section_sequence');
		$data['title']= 'Edit Blog';
		$data['category_data'] = $this->Common->getList('mr_categories', 'status', 1);




		return view('admin/blog/edit_blog',$data);
	}

	public function edit_page(request $response){
		$Id = $response->id;
		$ReportData = $this->Common->getList('mr_page', 'id', $Id);
		$data['report_data'] = $ReportData[0];

		$url = $ReportData[0]->url;

		$ReportFaqData = $this->Common->getList('mr_report_faq', 'url', $url);
		if(count($ReportFaqData)>0)
		$data['report_faq_data'] = $ReportFaqData[0];
		
		
		$data['title']= 'Edit Page';
		return view('admin/page/edit_page',$data);
	}
	public function delete_data(request $response){
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$this->Common->deleteData('mr_blog', 'id', $response->Id);
		echo 'deleted';
	}

	public function delete_data_page(request $response){
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$this->Common->deleteData('mr_page', 'id', $response->Id);
		echo 'deleted';
	}
	
	public function arrange_blog_section_sequence(request $response)
    {
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$Id = $response->id;
		$data['ReportId'] =  $Id;
		$data['reportDetails'] =  $this->Blog->getList('mr_blog', 'id', $Id);
		$data['reportSectionDetails'] =  $this->Blog->getList('mr_blog_sections', 'report_id', $Id, 'section_sequence');
		$data['title']= 'Arrange Section Blog Sequence';
		return view('admin/blog/arrange_blog_section_sequence',$data);
    }
	public function submit_blog_section_sequence(request $response){
		$data['User'] = $response->session()->get('user');
		$ReportId= $response->ReportId;
		$SectionSequence= $response->SectionSequence;
		$UpdateArr = array();
		foreach($SectionSequence as $key => $val){
			$ReportSeq = $key+1;
			//echo $ReportSeq.'=>'.$val.'<br>';
			$UpdateArr = array(
				'section_sequence'=>$ReportSeq,
			);
			$this->Common->updateData('mr_blog_sections', 'id', $val, $UpdateArr);
		}
		$response->session()->flash('ReportSectionMsg', 'Report Section Sequence updated');
		return Redirect::to('/blog_listing');
	}
	function blog(request $response){
		
	
		$data['title'] =  'Blog';
		$data['BlogDetails'] = $this->Blog->getBlogDetails($response->slug);
		if(count($data['BlogDetails'])==0){
            return redirect()->to('blogs');
        }
		$data['meta_title'] = $data['BlogDetails'][0]->meta_title;
		$data['meta_keywords'] = $data['BlogDetails'][0]->meta_keywords;
		$data['meta_description'] = $data['BlogDetails'][0]->meta_description;
		$data['ResultPopularBlogs'] = $this->Blog->getPopularBlogs(3);
		$WhrArr = array(
			'report_id'=>$data['BlogDetails'][0]->id,
			'status'=>1
		);

		$data['reportSectionDetails'] =  $this->Blog->getData('mr_blog_sections', $WhrArr, 'section_sequence');
		
		return view('frontend/pages/blog',$data);
    }

	function blog_preview(request $response){
		$data['title'] =  'Blog';
		$data['BlogDetails'] = $this->Blog->getBlogDetails_preview($response->slug);
		if(count($data['BlogDetails'])==0){
            return redirect()->to('blogs');
        }
		$data['meta_title'] = $data['BlogDetails'][0]->meta_title;
		$data['meta_keywords'] = $data['BlogDetails'][0]->meta_keywords;
		$data['meta_description'] = $data['BlogDetails'][0]->meta_description;
		$data['ResultPopularBlogs'] = $this->Blog->getPopularBlogs(5);
		$WhrArr = array(
			'report_id'=>$data['BlogDetails'][0]->id,
			'status'=>1
		);
		$data['reportSectionDetails'] =  $this->Blog->getData('mr_blog_sections', $WhrArr, 'section_sequence');
		return view('frontend/pages/blog',$data);
    }

	
	function blogs(){

		$url = \Request::segment(1);
        $ReportData = $this->Common->getList('mr_page', 'url', $url);
		$data['report_data'] = $ReportData[0];
		$data['meta_title'] = $data['report_data']->meta_title;
		$data['meta_keywords'] = $data['report_data']->meta_description;
		$data['meta_description'] = $data['report_data']->meta_keywords;
		$data['bottom_content'] = $data['report_data']->description;
		$data['title'] =  'Blogs';
		//$data['category_id'] = $FilterCategory = $response->category_id;
		$data['AllBlogs'] = $this->Blog->getAllBlog(12);
		$data['ResultPopularBlogs'] = $this->Blog->getPopularBlogs(4);
		$data['category_data'] = $this->Common->getList('mr_categories', 'status', 1);

		// $url = url()->current();
		// $ReportData = $this->Common->getList('mr_page', 'url', $url);
		// $data['report_data'] = $ReportData[0];
		$data['reportFaqDetail'] =  $this->Common->getList('mr_report_faq', 'url', $ReportData[0]->url);
		return view('frontend/pages/blogs',$data);
    }

	function blogs_cat(request $response){

		// $url = url()->current();
        // $ReportData = $this->Common->getList('mr_page', 'url', $url);
		// $data['report_data'] = $ReportData[0];
		$data['meta_title'] = '';
		$data['meta_keywords'] ='';
		$data['meta_description'] = '';
		$data['bottom_content'] = '';
		$data['title'] =  'Blogs';
		$data['category_id'] = $FilterCategory = $response->slug;
		$data['AllBlogs'] = $this->Blog->getAllBlog_cat(12, $FilterCategory);
		$data['ResultPopularBlogs'] = $this->Blog->getPopularBlogs(4);
		$data['category_data'] = $this->Common->getList('mr_categories', 'status', 1);

		// $url = url()->current();
		// $ReportData = $this->Common->getList('mr_page', 'url', $url);
		// $data['report_data'] = $ReportData[0];
		//$data['reportFaqDetail'] =  $this->Common->getList('mr_report_faq', 'url', $ReportData[0]->url);
		return view('frontend/pages/blog_free',$data);
    }


	function free(request $response){
		$data['title'] =  'Free Statragy';
		$data['category_id'] = $FilterCategory = 1;
		$data['AllBlogs'] = $this->Blog->getAllBlog(12, $FilterCategory);
		$data['ResultPopularBlogs'] = $this->Blog->getPopularBlogs(4);
		$data['category_data'] = $this->Common->getList('mr_categories', 'status', 1);
		return view('frontend/pages/blog_free',$data);
    }


	function submit_page(request $response){
		$data['Title'] = 'Contacts';
		 $Breadcum = $response->url;
		$pressurl = trim($Breadcum);
		$url = $this->seoUrl($pressurl,'&');
		$ReportStatus = 'deactive';
		if($response->Status)
			$ReportStatus = 'active';
		$dataArr= array(
			//'url'=>$response->name,
			'title'=>$response->title,
			'url'=>$url,
			'meta_title'=>$response->meta_title,
			'meta_keywords'=>$response->meta_keywords,
			'meta_description'=>$response->meta_description,
			'description'=>$response->description,
			'status'=>$ReportStatus,
		);
		$title=$response->title;
			$Result = $this->Common->check_url('mr_page', 'url', $url);
			if(count($Result)>0){
			   $response->session()->flash('ReportMessage', 'URL is already exist');
			   return Redirect::to('/page_listing');
		   }
		   else {
		$page_id = $this->Common->savepage('mr_page', $dataArr);
		$data['User'] = $response->session()->get('user');

		
		// 	$ReportId= $Result->id;
			
		$dataReportFaqArr = array(

			

			'url'=>$url,
			'title'=>$title,
			'rid'=>$page_id,
			'q1'=>$response->q1,
			'q2'=>$response->q2,
			'q3'=>$response->q3,
			'q4'=>$response->q4,
			'q5'=>$response->q5,
			'q6'=>$response->q6,
			'q7'=>$response->q7,
			'q8'=>$response->q8,
			'q9'=>$response->q9,
			'q10'=>$response->q10,
			'a1'=>$response->a1,
			'a2'=>$response->a2,
			'a3'=>$response->a3,
			'a4'=>$response->a4,
			'a5'=>$response->a5,
			'a6'=>$response->a6,
			'a7'=>$response->a7,
			'a8'=>$response->a8,
			'a9'=>$response->a9,
			'a10'=>$response->a10,
			'created_by'=>$data['User']->id,
			'updated_by'=>$data['User']->id,
		);
		$this->Common->saveData('mr_report_faq', $dataReportFaqArr);

		$response->session()->flash('ReportMessage', 'Page Created');
			return Redirect::to('/page_listing');
	}
	}

	function update_page(request $response){
		//$data['Title'] = 'Page';
		$data['User'] = $response->session()->get('user');
		 $Breadcum = $response->url;
		$pressurl = trim($Breadcum);
		$url = $this->seoUrl($pressurl,'&');
		$title=$response->title;
		$ReportStatus = 'deactive';
		if($response->Status)
			$ReportStatus = 'active';
		$dataArr= array(
			
			'url'=>$response->name,
			'title'=>$response->title,
			'url'=>$url,
			'meta_title'=>$response->meta_title,
			'meta_keywords'=>$response->meta_keywords,
			'meta_description'=>$response->meta_description,
			'description'=>$response->description,
			'status'=>$ReportStatus,
		);

		$ReportId= $response->ReportId;
		$this->Common->updatepage('mr_page', 'id', $ReportId,$dataArr);


		$dataReportFaqArr = array(
			'url'=>$url,
			'title'=>$title,
			'q1'=>$response->q1,
			'q2'=>$response->q2,
			'q3'=>$response->q3,
			'q4'=>$response->q4,
			'q5'=>$response->q5,
			'q6'=>$response->q6,
			'q7'=>$response->q7,
			'q8'=>$response->q8,
			'q9'=>$response->q9,
			'q10'=>$response->q10,
			'a1'=>$response->a1,
			'a2'=>$response->a2,
			'a3'=>$response->a3,
			'a4'=>$response->a4,
			'a5'=>$response->a5,
			'a6'=>$response->a6,
			'a7'=>$response->a7,
			'a8'=>$response->a8,
			'a9'=>$response->a9,
			'a10'=>$response->a10,
			'created_by'=>$data['User']->id,
			'updated_by'=>$data['User']->id,
		);

		$this->Common->updatepage('mr_report_faq', 'rid', $ReportId,$dataReportFaqArr);

		$response->session()->flash('ReportMessage', 'Page Updated');
			return Redirect::to('/page_listing');
	}

}
