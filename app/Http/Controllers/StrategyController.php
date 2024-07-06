<?php

namespace App\Http\Controllers\Auth;

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Common;
use App\Models\Login;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Models\Blog;
use App\Models\Strategy;
use Helper;
class StrategyController extends Controller
{
    protected $Common;
    protected $Login;
	protected $Strategy;
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
    public function __construct(Common $Common,Login $Login,Strategy $Strategy)
    {
		$this->Common = $Common;
		$this->Login = $Login;
		$this->Strategy = $Strategy;
        //$this->middleware('guest')->except('logout');
    }
	
	public function strategy_plan(request $response){
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$data['strategy_data'] = $this->Common->getList('strategy');
		$data['title']= 'Strategy Plan';
		return view('admin/strategy/strategy_plan',$data);
	}
	public function index(request $response)
    {
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$data['title']= 'Strategy List';
		return view('admin/strategy/strategy_management',$data);
    }
	public function create_strategy(request $response)
    {
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$data['title']= 'Strategy';
		$data['strategy_data'] = array();
		return view('admin/strategy/create_strategy',$data);
    }
	public function submit_strategy(request $response){
		$data['User'] = $response->session()->get('user');
		$ReportId= $response->strategy_id;
		$SectionSequence= $response->SectionSequence;
		$ReportStatus = 'deactive';
		if($response->Status)
			$ReportStatus = 'active';
		$dataArr= array(
			'plan_title'=>$response->PlanTitle,
			'plan_desc'=>$response->desc,
			'status'=>$ReportStatus,
			'price'=>$response->Price,
		);
		if($ReportId==''){
			$dataArr['created_by']=$data['User']->id;
			$dataArr['updated_by']=$data['User']->id;
			$ReportId = $this->Common->saveData('strategy', $dataArr);
			$isSection=0;
			if(!empty($response->SectionSequence)){
			foreach($SectionSequence as $val){
				$Sequence = $val;
				$HiddenSectionType= $response->HiddenSectionType[$val];
				$SectionDesc = '';
				$SectionPrice = 0;
				$SectionFile = '';
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
								$SectionFile = $file->getClientOriginalName();
								//$destinationPath = public_path('/assets/report/media');
								$destinationPath = 'assets/strategy/image';
								$file->move($destinationPath, $SectionFile);
							}
							
						}
						
					}
			
				}else if($HiddenSectionType=='PDF Section'){
					$isSection=1;
					$SectionTitle= $response->PDFTtile[$val];
					if ($response->hasFile("SectionPDF")) {
						foreach($response->file('SectionPDF') as $key => $file){
							//$fname = $file->getClientOriginalName();
							if($val==$key){
								//$SectionPDF = $val.'_'.time().'.'.$file->getClientOriginalExtension();
								$SectionFile = $file->getClientOriginalName();
								//$destinationPath = public_path('/assets/report/media');
								$destinationPath = 'assets/strategy/pdf';
								$file->move($destinationPath, $SectionFile);
							}
							
						}
						
					}
				}else if($HiddenSectionType=='Video Section'){
					$isSection=1;
					$SectionTitle= $response->VideoTtile[$val];
					if ($response->hasFile("SectionVideo")) {
						foreach($response->file('SectionVideo') as $key => $file){
							//$fname = $file->getClientOriginalName();
							if($val==$key){
								//$SectionVideo = $val.'_'.time().'.'.$file->getClientOriginalExtension();
								$SectionFile = $file->getClientOriginalName();
								//$destinationPath = public_path('/assets/report/media');
								$destinationPath = 'assets/strategy/video';
								$file->move($destinationPath, $SectionFile);
							}
							
						}
						
					}
				}
				$dataSectionArr = array(
					'strategy_id'=>$ReportId,
					'section_sequence'=>$Sequence,
					'section_type'=>$HiddenSectionType,
					'title'=>$SectionTitle,
					'description'=>$SectionDesc,
					'file_path'=>$SectionFile,
					'status'=>$ReportSectionStatus,
					'created_by'=>$data['User']->id,
					'updated_by'=>$data['User']->id,
				);
				
				$ReportSectionId = $this->Common->saveData('strategy_sections', $dataSectionArr);
				
			}
			}
			
			$response->session()->flash('StrategyMsg', 'Strategy Added');
				return Redirect::to('/strategy-management');
		}else{
			$dataArr['updated_by']=$data['User']->id;
			$this->Common->updateData('strategy', 'id', $ReportId, $dataArr);
			$isSection=0;
			$ArrSEctionId = array();
			
			if(!empty($response->SectionSequence)){
			foreach($SectionSequence as $val){
				$Sequence = $val;
				$HiddenSectionType= $response->HiddenSectionType[$val];
				$SectionDesc = '';
				$SectionPrice = 0;
				$SectionFile = '';
				$CTASelect = '';
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
					$SectionFile = $response->ReportHiddenImg[$val];
					if ($response->hasFile("SectionImage")) {
						foreach($response->file('SectionImage') as $key => $file){
							//$fname = $file->getClientOriginalName();
							if($val==$key){
								//$SectionImage = $val.'_'.time().'.'.$file->getClientOriginalExtension();
								$SectionFile = $file->getClientOriginalName();
								//$destinationPath = public_path('/assets/report/media');
								$destinationPath = 'assets/strategy/image';
								$file->move($destinationPath, $SectionFile);
								if($response->ReportHiddenImg[$val]!=''){
									//$filename = public_path('/assets/report/media/'.$response->ReportHiddenImg[$val]);
									$filename = 'assets/strategy/image/'.$response->ReportHiddenImg[$val];
									if (file_exists($filename)) {
									  // @unlink($filename);
									}
								}
								break;
							}
							
						}
						
					}
			
				}else if($HiddenSectionType=='PDF Section'){
					$isSection=1;
					$SectionTitle= $response->PDFTtile[$val];
					$SectionFile = $response->ReportHiddenPDF[$val];
					if ($response->hasFile("SectionPDF")) {
						foreach($response->file('SectionPDF') as $key => $file){
							//$fname = $file->getClientOriginalName();
							if($val==$key){
								//$SectionImage = $val.'_'.time().'.'.$file->getClientOriginalExtension();
								$SectionFile = $file->getClientOriginalName();
								//$destinationPath = public_path('/assets/report/media');
								$destinationPath = 'assets/strategy/pdf';
								$file->move($destinationPath, $SectionFile);
								if($response->ReportHiddenPDF[$val]!=''){
									//$filename = public_path('/assets/report/media/'.$response->ReportHiddenImg[$val]);
									$filename = 'assets/strategy/pdf/'.$response->ReportHiddenPDF[$val];
									if (file_exists($filename)) {
									  // @unlink($filename);
									}
								}
								break;
							}
							
						}
						
					}
				}else if($HiddenSectionType=='Video Section'){
					$isSection=1;
					$SectionTitle= $response->VideoTtile[$val];
					$SectionFile = $response->ReportHiddenVideo[$val];
					if ($response->hasFile("SectionVideo")) {
						foreach($response->file('SectionVideo') as $key => $file){
							//$fname = $file->getClientOriginalName();
							if($val==$key){
								//$SectionImage = $val.'_'.time().'.'.$file->getClientOriginalExtension();
								$SectionFile = $file->getClientOriginalName();
								//$destinationPath = public_path('/assets/report/media');
								$destinationPath = 'assets/strategy/video';
								$file->move($destinationPath, $SectionFile);
								if($response->ReportHiddenVideo[$val]!=''){
									//$filename = public_path('/assets/report/media/'.$response->ReportHiddenVideo[$val]);
									$filename = 'assets/strategy/video/'.$response->ReportHiddenVideo[$val];
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
					'strategy_id'=>$ReportId,
					'section_sequence'=>$Sequence,
					'section_type'=>$HiddenSectionType,
					'title'=>$SectionTitle,
					'description'=>$SectionDesc,
					'file_path'=>$SectionFile,
					'status'=>$ReportSectionStatus,
					'created_by'=>$data['User']->id,
					'updated_by'=>$data['User']->id,
				);
				$ReportSectionId = $response->ReportSectionId[$val];
				if($ReportSectionId==''){
					$ReportSectionId = $this->Common->saveData('strategy_sections', $dataSectionArr);
					$ArrSEctionId[] = $ReportSectionId;
				}else{
					$ArrSEctionId[] = $ReportSectionId;
					$this->Common->updateData('strategy_sections', 'id', $ReportSectionId, $dataSectionArr);
				}
				
			}
			}
			
			
			if(!empty($ArrSEctionId)){
				$this->Strategy->deleteDataBySectionId('strategy_sections', $ReportId, $ArrSEctionId);
			}
			
			
			$response->session()->flash('StrategyMsg', 'Strategy Updated');
			return Redirect::to('/strategy-management');
		}
	}
	public function submit_strategy_payment(request $response){
		$data['User'] = $response->session()->get('user');
		$StrategyId= $response->strategy_id;
		
		$dataArr= array(
			'strategy_id'=>$StrategyId,
			'user_id'=>$data['User']->id,
			'payment_status'=>1,
			'subscribe_status'=>1,
			'created_by'=>$data['User']->id,
			'updated_by'=>$data['User']->id,
		);
		$this->Common->saveData('strategy_plan', $dataArr);
		
		$response->session()->flash('StrategyPlanMessage', 'Payment has been successfull.');
			return Redirect::to('/strategy-plan');
	}
	public function submit_strategy_subscription(request $response){
		$data['User'] = $response->session()->get('user');
		$StrategyId= $response->strategy_id;
		$whereArr= array(
			'strategy_id'=>$StrategyId,
			'user_id'=>$data['User']->id,
			'payment_status'=>1,
		);
		$PlanData = $this->Common->getData('strategy_plan', $whereArr);
		if(count($PlanData)>0){
			$dataArr= array(
				'subscribe_status'=>1,
			);
			$this->Strategy->updateStrategyPlanData('strategy_plan', $StrategyId, $data['User']->id, $dataArr);
		}
		$response->session()->flash('StrategyPlanMessage', 'strategy has been subscribed.');
			return Redirect::to('/strategy-plan');
	}
	/*public function submit_strategy(request $response){
		$StrategyId= $response->strategy_id;
		$StrategyStatus = 'deactive';
		if($response->Status)
			$StrategyStatus = 'active';
		$dataArr= array(
			'plan_title'=>$response->PlanTitle,
			'plan_desc'=>$response->desc,
			'status'=>$StrategyStatus,
		);
		$data['User'] = $response->session()->get('user');
		$Folder='strategy/image';
		if ($response->hasFile('Image')) {
			$image = $response->file('Image');
			$name = $image->getClientOriginalName();
			$destinationPath = 'assets/'.$Folder;
			$image->move($destinationPath, $name);
			$dataArr['image_path']=$name;
			if($response->HiddenImage!=''){
				$filename = 'assets/'.$Folder.'/'.$response->HiddenImage;
				//$filename = public_path('/assets/'.$Folder.'/'.$response->HiddenImage);
				if (file_exists($filename)) {
				   @unlink($filename);
				}
			}
		}
		$Folder='strategy/pdf';
		if ($response->hasFile('PDF')) {
			$PDF = $response->file('PDF');
			$name = $PDF->getClientOriginalName();
			$destinationPath = 'assets/'.$Folder;
			$PDF->move($destinationPath, $name);
			$dataArr['pdf']=$name;
			if($response->HiddenPDF!=''){
				$filename = 'assets/'.$Folder.'/'.$response->HiddenPDF;
				//$filename = public_path('/assets/'.$Folder.'/'.$response->HiddenPDF);
				if (file_exists($filename)) {
				   @unlink($filename);
				}
			}
		}
		$Folder='strategy/video';
		if ($response->hasFile('Video')) {
			$Video = $response->file('Video');
			$name = $Video->getClientOriginalName();
			$destinationPath = 'assets/'.$Folder;
			$Video->move($destinationPath, $name);
			$dataArr['video_path']=$name;
			if($response->HiddenVideo!=''){
				$filename = 'assets/'.$Folder.'/'.$response->HiddenVideo;
				//$filename = public_path('/assets/'.$Folder.'/'.$response->HiddenVideo);
				if (file_exists($filename)) {
				   @unlink($filename);
				}
			}
		}
		if($StrategyId==''){
			$dataArr['created_by']=$data['User']->id;
			$dataArr['updated_by']=$data['User']->id;
			$this->Common->saveData('strategy', $dataArr);
			$response->session()->flash('StrategyMsg', 'Strategy Added');
				return Redirect::to('/strategy-management');
		}else{
			$dataArr['updated_by']=$data['User']->id;
			$this->Common->updateData('strategy', 'id', $StrategyId, $dataArr);
			$response->session()->flash('StrategyMsg', 'Strategy Updated');
			return Redirect::to('/strategy-management');
		}
	}*/
	
	public function get_strategy_list(request $response) {
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$LoginUser = $response->session()->get('user');
		$ResultCount = $this->Strategy->get_strategy_list(($response->search)?$response->search:"");
		$total = $ResultCount->count();
		$data = array();
		$Result = $this->Strategy->get_strategy_list(($response->search)?$response->search:"", $response->start, $response->length );
		$EditLink = 'edit_strategy/';
		$ViewDetailsLink = 'view_strategy/';
		
		if ($Result->count() > 0) {
			foreach ($Result as $row) {
				$Id = $row->id;
				$row_data['id'] = $Id;
				$row_data['price'] = 'Rs. '.$row->price;
				$row_data['plan_title'] = $row->plan_title;
				$row_data['status'] = $row->status;
				$row_data['created_date'] = date('d-m-Y', strtotime($row->created_date));
				//$pdf_url = 'assets/strategy/pdf/'.$row->pdf;
				//$row_data['files'] = '<a href="'.$pdf_url.'">View PDF</a>';
				$edit_url = url($EditLink.$Id);
				$view_url = url($ViewDetailsLink.$Id);
				$sequence_url = url('arrange_strategy_section_sequence/'.$Id);
				$edit_link='';
				$view_link='';
				$delete_link='';
				$sequence_link='';
				if(Helper::allow_permission('arrange-strategy-section-sequence')==1)
					$sequence_link = ' - <a href="'.$sequence_url.'" class="EditData "  title="Arrange Section Sequence"><i class="fa fa-sort"></i></a>';
				if(Helper::allow_permission('edit-strategy-management')==1)
					$edit_link = '<a href="'.$edit_url.'" class="EditData "  title="Edit"><i class="fa fa-edit"></i></a>';
				if(Helper::allow_permission('view-strategy-management-details')==1)
					$view_link = '- <a target="new" href="'.$view_url.'"class="ViewData " title="View"><i class="fa fa-eye"></i></a>';
				if(Helper::allow_permission('delete-strategy-management')==1)
					$delete_link = '- <a href="javascript:void(0);" class="DeleteRoom " onclick="return delete_permission('.$Id.');" title="Delete"><i class="fa fa-trash"></i></a>';
				$row_data['action'] = $edit_link.$view_link.$delete_link.$sequence_link;
				$pay_plan='';
				$subscribe_plan='';
				$view_plan='';
				if($LoginUser->role_id==2){
					$whereArr= array(
						'strategy_id'=>$Id,
						'user_id'=>$LoginUser->id,
					);
					$PlanData = $this->Common->getData('strategy_plan', $whereArr);
					if(count($PlanData)>0){
						if($PlanData[0]->payment_status==0){
							$pay_plan_link = url('pay-plan/'.$Id);
							$pay_plan=' <a class="btn btn-primary" href="'.$pay_plan_link.'">Pay</a> ';
							
						}else{
							$pay_plan=' <span class="badge badge-success">Paid</span> ';
							
						}
						
						
						if($PlanData[0]->subscribe_status==1){
							$view_plan_link = url('view_strategy/'.$Id);
							$view_plan=' <a href="'.$view_plan_link.'" ><i class="fa fa-eye"></i></a> ';
							$subscribe_plan=' <span class="badge badge-success">Subscribed</span> ';
						}else{
							$subscribe_plan_link = url('subscribe-plan/'.$Id);
							$subscribe_plan=' <a class="btn btn-primary"  href="'.$subscribe_plan_link.'" >Subscribe</a> ';
						}
						
							
					}else{
						$pay_plan_link = url('pay-plan/'.$Id);
						$pay_plan=' <a class="btn btn-primary" href="'.$pay_plan_link.'">Pay</a> ';
						
						$subscribe_plan_link = url('subscribe-plan/'.$Id);
						$subscribe_plan=' <a class="btn btn-primary"  href="javascript:void(0);" style="opacity:0.5" disabled >Subscribe</a> ';
					}
					
				}
				$row_data['plan_action'] = $pay_plan.$subscribe_plan.$view_plan;
				$data[] = $row_data;
			}
			
		}
		//$datas = array_map('array_values', $data);
		$DataArray = array('draw'=>$_REQUEST['draw'],'recordsTotal'=>$total ,'recordsFiltered'=>$total, 'data'=> $data);
		echo json_encode($DataArray);
	}
	public function edit_strategy(request $response){
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$Id = $response->id;
		$BlogData = $this->Common->getList('strategy', 'id', $Id);
		$data['strategy_data'] = $BlogData[0];
		$data['reportSectionDetails'] =  $this->Strategy->getList('strategy_sections', 'strategy_id', $Id, 'section_sequence');
		$data['title']= 'Strategy';
		return view('admin/strategy/edit_strategy',$data);
	}
	public function pay_plan(request $response){
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$data['strategy_id'] = $Id = $response->id;
		$data['User'] = $response->session()->get('user');
		$data['isPlan']=1;
		if($data['User']->role_id==2){
			$whereArr= array(
				'strategy_id'=>$Id,
				'user_id'=>$data['User']->id,
				'payment_status'=>1,
				'subscribe_status'=>1,
			);
			$PlanData = $this->Common->getData('strategy_plan', $whereArr);
			if(count($PlanData)<=0){
				$data['isPlan']=0;
			}
		}
		$BlogData = $this->Common->getList('strategy', 'id', $Id);
		$data['reportSectionDetails'] =  $this->Strategy->getList('strategy_sections', 'strategy_id', $Id, 'section_sequence');
		$data['strategy_data'] = $BlogData[0];
		$data['title']= 'Strategy';
		$data['pay']= 1;
		return view('admin/strategy/view_strategy',$data);
	}
	public function Subscribe_plan(request $response){
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$data['strategy_id'] = $Id = $response->id;
		$data['User'] = $response->session()->get('user');
		$data['isPlan']=1;
		if($data['User']->role_id==2){
			$whereArr= array(
				'strategy_id'=>$Id,
				'user_id'=>$data['User']->id,
				'payment_status'=>1,
				'subscribe_status'=>1,
			);
			$PlanData = $this->Common->getData('strategy_plan', $whereArr);
			if(count($PlanData)<=0){
				$data['isPlan']=0;
			}
		}
		$BlogData = $this->Common->getList('strategy', 'id', $Id);
		$data['reportSectionDetails'] =  $this->Strategy->getList('strategy_sections', 'strategy_id', $Id, 'section_sequence');
		$data['strategy_data'] = $BlogData[0];
		$data['title']= 'Strategy';
		$data['subscribe']= 1;
		return view('admin/strategy/view_strategy',$data);
	}
	public function view_strategy(request $response){
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$Id = $response->id;
		$data['User'] = $response->session()->get('user');
		$data['isPlan']=1;
		if($data['User']->role_id==2){
			$whereArr= array(
				'strategy_id'=>$Id,
				'user_id'=>$data['User']->id,
				'payment_status'=>1,
				'subscribe_status'=>1,
			);
			$PlanData = $this->Common->getData('strategy_plan', $whereArr);
			if(count($PlanData)<=0){
				$data['isPlan']=0;
			}
		}
		$BlogData = $this->Common->getList('strategy', 'id', $Id);
		$data['reportSectionDetails'] =  $this->Strategy->getList('strategy_sections', 'strategy_id', $Id, 'section_sequence');
		$data['strategy_data'] = $BlogData[0];
		$data['title']= 'Strategy';
		return view('admin/strategy/view_strategy',$data);
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
	public function arrange_strategy_section_sequence(request $response)
    {
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$Id = $response->id;
		$data['ReportId'] =  $Id;
		$data['reportDetails'] =  $this->Common->getList('strategy', 'id', $Id);
		$data['reportSectionDetails'] =  $this->Strategy->getList('strategy_sections', 'strategy_id', $Id, 'section_sequence');
		$data['title']= 'Arrange Section Strategy Sequence';
		return view('admin/strategy/arrange_report_section_sequence',$data);
    }
	public function submit_strategy_section_sequence(request $response){
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
			$this->Common->updateData('strategy_sections', 'id', $val, $UpdateArr);
		}
		$response->session()->flash('StrategyMsg', 'Strategy Section Sequence updated');
		return Redirect::to('/strategy-management');
	}
}
