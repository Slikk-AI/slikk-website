<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Validator;
use App\Models\Common;
use App\Models\Report;
use App\Models\Page;
use Illuminate\Support\Facades\Redirect;
use Helper;
use Illuminate\Support\Facades\Session;
class PageController extends Controller
{
   protected $Common;
   protected $Page;
    public function __construct(Common $Common, Page $Page)
    {
		$this->Common = $Common;
		$this->Page = $Page;
    }
	function aboutus(){

		$url = \Request::segment(1);
        $ReportData = $this->Common->getList('mr_page', 'url', $url);
		$data['report_data'] = $ReportData[0];
       // $Id = $data['report_data']->id;
	   $data['meta_title'] = $data['report_data']->meta_title;
		$data['meta_keywords'] = $data['report_data']->meta_description;
		$data['meta_description'] = $data['report_data']->meta_keywords;
   $data['bottom_content'] = $data['report_data']->description;

   $data['reportFaqDetail'] =  $this->Common->getList('mr_report_faq', 'url', $ReportData[0]->url);
//echo $url;
   //     exit;

		return view('frontend/pages/aboutUs',$data);
    }
	function features(){
		$url = \Request::segment(1);
        $ReportData = $this->Common->getList('mr_page', 'url', $url);
		$data['report_data'] = $ReportData[0];
       // $Id = $data['report_data']->id;
	   $data['meta_title'] = $data['report_data']->meta_title;
		$data['meta_keywords'] = $data['report_data']->meta_description;
		$data['meta_description'] = $data['report_data']->meta_keywords;
   $data['bottom_content'] = $data['report_data']->description;
   $data['reportFaqDetail'] =  $this->Common->getList('mr_report_faq', 'url', $ReportData[0]->url);
//echo $url;
   //     exit;
		return view('frontend/pages/features',$data);
    }

	function use_case(){
		$url = \Request::segment(1);
        $ReportData = $this->Common->getList('mr_page', 'url', $url);
		$data['report_data'] = $ReportData[0];
       // $Id = $data['report_data']->id;
	   $data['meta_title'] = $data['report_data']->meta_title;
		$data['meta_keywords'] = $data['report_data']->meta_description;
		$data['meta_description'] = $data['report_data']->meta_keywords;
   $data['bottom_content'] = $data['report_data']->description;
   $data['reportFaqDetail'] =  $this->Common->getList('mr_report_faq', 'url', $ReportData[0]->url);
//echo $url;
   //     exit;
		return view('frontend/pages/usecase',$data);
    }
	
	function contact(){
		$url = \Request::segment(1);
        $ReportData = $this->Common->getList('mr_page', 'url', $url);
		$data['report_data'] = $ReportData[0];
       // $Id = $data['report_data']->id;
	   $data['meta_title'] = $data['report_data']->meta_title;
		$data['meta_keywords'] = $data['report_data']->meta_description;
		$data['meta_description'] = $data['report_data']->meta_keywords;
		$data['bottom_content'] = $data['report_data']->description;
   
//echo $url;
   //     exit;
		return view('frontend/pages/contact',$data);
    }

	public function getCountryTimezone(request $response){ 
		$List = $this->Common->getTimezoneData($response->country_code);
		//$option='<option value="">Select Timezone</option>';
		$option='';
		foreach($List as $key => $val){
			$option .='<option value="'.$val->zone_name.'">'.$val->zone_name.'(GMT'.$val->zone_msg.')</option>';
		}
		echo $option;
	}
	
    function pricing(){
		$url = \Request::segment(1);
        $ReportData = $this->Common->getList('mr_page', 'url', $url);
		$data['report_data'] = $ReportData[0];
       // $Id = $data['report_data']->id;
	   $data['meta_title'] = $data['report_data']->meta_title;
		$data['meta_keywords'] = $data['report_data']->meta_description;
		$data['meta_description'] = $data['report_data']->meta_keywords;
   $data['bottom_content'] = $data['report_data']->description;
   $data['reportFaqDetail'] =  $this->Common->getList('mr_report_faq', 'url', $ReportData[0]->url);
//echo $url;
   //     exit;
        return view('frontend/pages/pricing',$data);
   }

   function book(){
	$url = \Request::segment(1);
	$ReportData = $this->Common->getList('mr_page', 'url', $url);
	$data['report_data'] = $ReportData[0];
   // $Id = $data['report_data']->id;
   $data['meta_title'] = $data['report_data']->meta_title;
	$data['meta_keywords'] = $data['report_data']->meta_description;
	$data['meta_description'] = $data['report_data']->meta_keywords;
$data['bottom_content'] = $data['report_data']->description;
$data['reportFaqDetail'] =  $this->Common->getList('mr_report_faq', 'url', $ReportData[0]->url);
//echo $url;
//     exit;
		return view('frontend/pages/book',$data);
	}
	function refund(){
		$data['Title'] = 'Refund Policy';
		return view('frontend/pages/refund-policy',$data);
	}
	function terms(){
		$data['Title'] = 'Terms and Conditions';
		return view('frontend/pages/terms-and-conditions',$data);
	}
	function save_contact(request $response){
		$url = \Request::segment(1);
       

		$data['Title'] = 'Contacts';
		$data['name'] = $response->name;
		$data['email'] = $response->email;
		$data['phone'] = $response->phone;
		$data['country'] = $response->country;
		$dataArr= array(
			'name'=>$response->name,
			'email'=>$response->email,
			'phone'=>$response->phone,
			'address'=>$response->address,
			'country'=>$response->country,
			'msg'=>$response->msg,
			'timestamp'=>date('Y-m-d'),
		);
		$this->Common->saveData('contact_form', $dataArr);
		$emailTextHtml = '';
	
		$emailTextHtml .= "<table>";
		// If the field exists in the $fields array, include it in the email
		if (isset($response->name) && $response->name!='') 
			$emailTextHtml .= "<tr><th>Name</th><td>".$response->name."</td></tr>";
		if (isset($response->email) && $response->email!='') 
			$emailTextHtml .= "<tr><th>Email</th><td>".$response->email."</td></tr>";
		if (isset($response->phone) && $response->phone!='') 
			$emailTextHtml .= "<tr><th>Phone</th><td>".$response->phone."</td></tr>";
		if (isset($response->msg) && $response->msg!='') 
			$emailTextHtml .= "<tr><th>Message</th><td>".$response->msg."</td></tr>";
		
		$emailTextHtml .= "</table>";
		
		// an email address that will be in the From field of the email.
		$fromEmail = 'akshay.sole@gmail.com';
		$fromName = 'Support';

		// an email address that will receive the email with the output of the form
		$sendToEmail = 'akshay.sole@gmail.com';
		$sendToName = 'Support';

		$input = array("https://meet.google.com/zxa-ybdn-ugb", "https://meet.google.com/zxa-ybdn-ugb1", "https://meet.google.com/zxa-ybdn-ugb2", "https://meet.google.com/zxa-ybdn-ugb3", "https://meet.google.com/zxa-ybdn-ugb4");
		$rand_keys = array_rand($input, 2);
		$meet_link = $input[$rand_keys[0]] . "\n";

		// subject of the email
		$subject = 'Message from contact form';

		$mail = new PHPMailer;
		
		$mail->setFrom($fromEmail, $fromName);
		$mail->addAddress($sendToEmail, $sendToName); // you can add more addresses by simply adding another line with $mail->addAddress();
		$mail->addReplyTo($response->email);
		
		$mail->isHTML(true);
		
		$mail->CharSet = 'UTF-8';
		
		$mail->Subject = $subject;
		$mail->msgHTML($emailTextHtml); // this will also create a plain-text version of the HTML email, very handy
		
		
		if(!$mail->send()) {
			throw new \Exception('I could not send the email.' . $mail->ErrorInfo);
		}
		
		///////////////////////////////////
		$mail = new PHPMailer;
		$emailTextHtml = '<div style="font-family:arial; font-size:14px;">
				<div class="row">
				<div class="col-sm-12 col-md-12 col-xs-12">
				<div class="col-sm-6 col-md-6 col-xs-6" style="float:left;">
				<img src="https://slikk.ai/assets/img/logo.webp" >
				</div>
				<div class="col-sm-6 col-md-6 col-xs-6" style="float:right;text-align:right;">
				<p style="padding:10px 0px;color:#000">
				<span style="padding: 0px 14px"><i class="fa fa-envelope" aria-hidden="true" style="margin-right:5px"></i>akshay.sole@gmail.com</span>
				</p>
				</div>
				</div>
				<div style="margin:30px 0px; padding:10px 15px 0px 15px; clear:both;">
				<p>Hi <span style="font-weight: bold;">'.ucwords($response->name).'</span>,</p>	<br><br>
				<p style="margin-bottom:10px;">Thank you for Contacting Us.<br>	<br><br>
				
				
			    <p> Our support team will get in touch with you shortly. In case of an urgent query we would request you to either send us a detailed email on <b>akshay.sole@gmail.com </b></p><p><b>Regards,</b><br>Business Development Team,<br>TeamLeap.</p>
				</div>
				</div>
				</div>';
		$mail->setFrom($fromEmail, $fromName);
		$mail->addAddress($response->email, $response->first_name); // you can add more addresses by simply adding another line with $mail->addAddress();
		$mail->addReplyTo($fromEmail);
		
		$mail->isHTML(true);
		
		$mail->CharSet = 'UTF-8';
		
		$mail->Subject = $subject;
		$mail->msgHTML($emailTextHtml); // this will also create a plain-text version of the HTML email, very handy
		
		
		if(!$mail->send()) {
			throw new \Exception('I could not send the email.' . $mail->ErrorInfo);
		}
		/////////////////////////////////////
		$data['meta_title'] = '';
		$data['meta_keywords'] ='';
		$data['meta_description'] = '';
		return view('frontend/pages/thankyou',$data);
	}


	function schedule_call(request $response){
		$url = \Request::segment(1);
        $ReportData = $this->Common->getList('mr_page', 'url', $url);
		$data['report_data'] = $ReportData[0];
       // $Id = $data['report_data']->id;
	   $data['meta_title'] = $data['report_data']->meta_title;
		$data['meta_keywords'] = $data['report_data']->meta_description;
		$data['meta_description'] = $data['report_data']->meta_keywords;
   $data['bottom_content'] = $data['report_data']->description;

   $input = array("https://meet.google.com/zxa-ybdn-ugb", "https://meet.google.com/zxa-ybdn-ugb1", "https://meet.google.com/zxa-ybdn-ugb2", "https://meet.google.com/zxa-ybdn-ugb3", "https://meet.google.com/zxa-ybdn-ugb4");
   $rand_keys = array_rand($input, 2);
   $meet_link = $input[$rand_keys[0]] . "\n";

		$data['Title'] = 'Contacts';
		$dataArr= array(
			'name'=>$response->name,
			'email'=>$response->email,
			'country'=>$response->country,
			'countryTimezon'=>$response->countryTimezon,
			'phone'=>$response->phone,
			'Schedule'=>$response->Schedule,
			'msg'=>$response->msg,
			'meet_link'=>$meet_link,
			'timestamp'=>date('Y-m-d'),
			
		);
		$this->Common->saveData('contact_form', $dataArr);
		$emailTextHtml = '';
		$emailTextHtml .= "<table>";
		// If the field exists in the $fields array, include it in the email
		if (isset($response->name) && $response->name!='') 
			$emailTextHtml .= "<tr><th>Name</th><td>".$response->name."</td></tr>";
		if (isset($response->email) && $response->email!='') 
			$emailTextHtml .= "<tr><th>Email</th><td>".$response->email."</td></tr>";
		if (isset($response->phone) && $response->phone!='') 
			$emailTextHtml .= "<tr><th>Phone</th><td>".$response->phone."</td></tr>";
		if (isset($response->country) && $response->country!='') 
			$emailTextHtml .= "<tr><th>Country</th><td>".$response->country."</td></tr>";
		if (isset($response->countryTimezon) && $response->countryTimezon!='') 
			$emailTextHtml .= "<tr><th>Timezon</th><td>".$response->countryTimezon."</td></tr>";
		if (isset($response->Schedule) && $response->Schedule!='') 
			$emailTextHtml .= "<tr><th>Schedule</th><td>".$response->Schedule."</td></tr>";	
		if (isset($response->msg) && $response->msg!='') 
			$emailTextHtml .= "<tr><th>Message</th><td>".$response->msg."</td></tr>";
		
		$emailTextHtml .= "</table>";
		
		// an email address that will be in the From field of the email.
		$fromEmail = 'akshay.sole@gmail.com';
		$fromName = 'Support';

		// an email address that will receive the email with the output of the form
		$sendToEmail = 'akshay.sole@gmail.com';
		$sendToName = 'Support';

	

		// subject of the email
		$subject = 'Message from contact form';

		$mail = new PHPMailer;
		
		$mail->setFrom($fromEmail, $fromName);
		$mail->addAddress($sendToEmail, $sendToName); // you can add more addresses by simply adding another line with $mail->addAddress();
		$mail->addReplyTo($response->email);
		
		$mail->isHTML(true);
		
		$mail->CharSet = 'UTF-8';
		
		$mail->Subject = $subject;
		$mail->msgHTML($emailTextHtml); // this will also create a plain-text version of the HTML email, very handy
		
		
		if(!$mail->send()) {
			throw new \Exception('I could not send the email.' . $mail->ErrorInfo);
		}
		
		///////////////////////////////////
		$mail = new PHPMailer;
		$emailTextHtml = '<div style="font-family:arial; font-size:14px;">
				<div class="row">
				<div class="col-sm-12 col-md-12 col-xs-12">
				<div class="col-sm-6 col-md-6 col-xs-6" style="float:left;">
				<img src="https://slikk.ai/assets/img/logo.webp" >
				</div>
				<div class="col-sm-6 col-md-6 col-xs-6" style="float:right;text-align:right;">
				<p style="padding:10px 0px;color:#000">
				<span style="padding: 0px 14px"><i class="fa fa-envelope" aria-hidden="true" style="margin-right:5px"></i>akshay.sole@gmail.com</span>
				</p>
				</div>
				</div>
				<div style="margin:30px 0px; padding:10px 15px 0px 15px; clear:both;">
				<p>Hi <span style="font-weight: bold;">'.ucwords($response->name).'</span>,</p>	<br><br>
				<p style="margin-bottom:10px;">Thank you for Schedule Call With Us.<br>	<br><br>
				<p>Please Contact at this Link :  <span style="font-weight: bold;">'.$meet_link.'</span>,</p>	<br><br>
				
			    <p> Our support team will get in touch with you shortly. In case of an urgent query we would request you to either send us a detailed email on <b>akshay.sole@gmail.com </b></p><p><b>Regards,</b><br>Business Development Team,<br>TeamLeap.</p>
				</div>
				</div>
				</div>';
		$mail->setFrom($fromEmail, $fromName);
		$mail->addAddress($response->email, $response->first_name); // you can add more addresses by simply adding another line with $mail->addAddress();
		$mail->addReplyTo($fromEmail);
		
		$mail->isHTML(true);
		
		$mail->CharSet = 'UTF-8';
		
		$mail->Subject = $subject;
		$mail->msgHTML($emailTextHtml); // this will also create a plain-text version of the HTML email, very handy
		
		
		if(!$mail->send()) {
			throw new \Exception('I could not send the email.' . $mail->ErrorInfo);
		}
		/////////////////////////////////////
		return view('frontend/pages/thankyou',$data);
	}
	function save_newsletter(request $response){
		$data['Title'] = 'Newsletter';
		$dataArr= array(
			'email'=>$response->newsletter_email,
		);
		$this->Common->saveData('newsletter', $dataArr);
		$emailTextHtml = "<p>Newsletter is subscribed.</p> <table>";
		// If the field exists in the $fields array, include it in the email
		if (isset($response->newsletter_email) && $response->newsletter_email!='') 
			$emailTextHtml .= "<tr><th>Email</th><td>".$response->newsletter_email."</td></tr>";
		$emailTextHtml .= "</table>";
		
		// an email address that will be in the From field of the email.
		$fromEmail = 'support@marketsangle.com';
		$fromName = 'Support';

		// an email address that will receive the email with the output of the form
		$sendToEmail = 'support@marketsangle.com';
		$sendToName = 'Support';

		// subject of the email
		$subject = 'New Newsletter';

		$mail = new PHPMailer;
		
		$mail->setFrom($fromEmail, $fromName);
		$mail->addAddress($sendToEmail, $sendToName); // you can add more addresses by simply adding another line with $mail->addAddress();
		$mail->addReplyTo($response->newsletter_email);
		
		$mail->isHTML(true);
		
		$mail->CharSet = 'UTF-8';
		
		$mail->Subject = $subject;
		$mail->msgHTML($emailTextHtml); // this will also create a plain-text version of the HTML email, very handy
		
		
		if(!$mail->send()) {
			throw new \Exception('I could not send the email.' . $mail->ErrorInfo);
		}
		
		///////////////////////////////////
		$mail = new PHPMailer;
		$emailTextHtml = '<div style="font-family:arial; font-size:14px;">
				<div class="row">
				<div class="col-sm-12 col-md-12 col-xs-12">
				<div class="col-sm-6 col-md-6 col-xs-6" style="float:left;">
				<img src="https://slikk.ai/assets/img/logo.webp" >
				</div>
				<div class="col-sm-6 col-md-6 col-xs-6" style="float:right;text-align:right;">
				<p style="padding:10px 0px;color:#000">
				<span style="padding: 0px 14px"><i class="fa fa-envelope" aria-hidden="true" style="margin-right:5px"></i>support@marketsangle.com</span>
				</p>
				</div>
				</div>
				<div style="margin:30px 0px; padding:10px 15px 0px 15px; clear:both;">
				<p>Hi <span style="font-weight: bold;">Dear</span>,</p>	<br>
				<p style="margin-bottom:10px;">Thank you for your interest. Your newsletter is subscribed.<br>	<br><br>
			    <p><b>Regards,</b><br>Business Development Team,<br>Markets Angle.</p>
				</div>
				</div>
				</div>';
		$mail->setFrom($fromEmail, $fromName);
		$mail->addAddress($response->newsletter_email, 'Client'); // you can add more addresses by simply adding another line with $mail->addAddress();
		$mail->addReplyTo($fromEmail);
		
		$mail->isHTML(true);
		
		$mail->CharSet = 'UTF-8';
		
		$mail->Subject = $subject;
		$mail->msgHTML($emailTextHtml); // this will also create a plain-text version of the HTML email, very handy
		
		
		if(!$mail->send()) {
			throw new \Exception('I could not send the email.' . $mail->ErrorInfo);
		}
		/////////////////////////////////////
		return view('frontend/pages/thankyou',$data);
	}
	/*********************Section page content**********************************/
	public function add_content_for_page(request $response){
		
		$ReportData = $this->Common->getList('mr_page', 'id', $response->id);
		$data['report_data'] = $ReportData[0];
		$Id = $data['report_data']->id;
		//$data['reportSectionDetails'] =  $this->Blog->getList('mr_blog_sections', 'report_id', $Id, 'section_sequence');
		$data['title']= 'Add Element For Page';
		return view('admin/page/add_content_for_page',$data);
	}
	public function element_list(request $response){
		
		$data['report_data'] = $this->Common->getList('mr_page_content_details', 'page_id', $response->id);
		$data['page_id'] = $response->id;
		//$data['reportSectionDetails'] =  $this->Blog->getList('mr_blog_sections', 'report_id', $Id, 'section_sequence');
		$data['title']= 'Element List';
		return view('admin/page/element_list',$data);
	}
	public function submit_page_content(request $response){
		$data['User'] = $response->session()->get('user');
		$PageSectionId= $response->PageSectionId;
		$ReportStatus = 0;
		if($response->Status)
			$ReportStatus = 1;
		$dataArr= array(
			'page_id'=>$response->PageId,
			'element_id'=>$response->Element,
			'form_type'=>$response->FormType,
			'sort'=>$response->ESort,
			'title'=>$response->ContentTitle,
			//'image'=>$FeatureStatus,
			'description'=>$response->Description,
			'status'=>$ReportStatus,
			//'element_details'=>$response->metadesc,
		);
		if ($response->hasFile('MainImage')) {
			$MainImage = $response->file('MainImage');
			$name = $MainImage->getClientOriginalName();
			$destinationPath = 'assets/page';
			$MainImage->move($destinationPath, $name);
			$dataArr['image']=$name;
			if($response->HidMainImage!=''){
				$filename = 'assets/page/'.$response->HidMainImage;
				if (file_exists($filename)){
				   @unlink($filename);
				}
			}
		}
		
		
		if($PageSectionId==''){
			$dataArr['created_by']=$data['User']->id;
			//$dataArr['updated_by']=$data['User']->id;
			$dataSectionArr = array();
			if(!empty($response->SectionTitle)){
				$SectionTitle = $response->SectionTitle;
				foreach($SectionTitle as $val => $values){
					//echo $key;
					$SectionImage= '';
					if ($response->hasFile("SectionImage")) {
						foreach($response->file('SectionImage') as $key => $file){
							//$fname = $file->getClientOriginalName();
							if($val==$key){
								//$SectionImage = $val.'_'.time().'.'.$file->getClientOriginalExtension();
								$SectionImage = $file->getClientOriginalName();
								//$destinationPath = public_path('/assets/blog/media');
								$destinationPath = 'assets/page';
								$file->move($destinationPath, $SectionImage);
							}
							
						}
					}
					$dataSectionArr[] = array(
						'element_title'=>$values,
						'element_sort'=>$response->ElementSort[$val],
						'element_link'=>$response->ELink[$val],
						'element_image'=>$SectionImage,
						'element_other_details'=>$response->OtherDetails[$val],
						'element_description'=>$response->SectionContent[$val],
					);
				}
			}
			$dataArr['element_details']='';
			if(!empty($dataSectionArr))
				$dataArr['element_details'] = json_encode($dataSectionArr);
			//echo '<pre>';
			//print_r($dataSectionArr);
			//exit;
			$ReportId = $this->Common->saveData('mr_page_content_details', $dataArr);
			$response->session()->flash('ReportMessage', 'Page Element Added');
				return Redirect::to('/element_list/'.$response->PageId);
		}else{
			$dataArr['updated_by']=$data['User']->id;
			$dataSectionArr = array();
			if(!empty($response->SectionTitle)){
				$SectionTitle = $response->SectionTitle;
				foreach($SectionTitle as $val => $values){
					//echo $key;
					$SectionImage= $response->HidSectionImage[$val];
					if ($response->hasFile("SectionImage")) {
						foreach($response->file('SectionImage') as $key => $file){
							//$fname = $file->getClientOriginalName();
							if($val==$key){
								//$SectionImage = $val.'_'.time().'.'.$file->getClientOriginalExtension();
								$SectionImage = $file->getClientOriginalName();
								//$destinationPath = public_path('/assets/blog/media');
								$destinationPath = 'assets/page';
								$file->move($destinationPath, $SectionImage);
							}
							
						}
					}
					$dataSectionArr[] = array(
						'element_title'=>$values,
						'element_sort'=>$response->ElementSort[$val],
						'element_link'=>$response->ELink[$val],
						'element_image'=>$SectionImage,
						'element_other_details'=>$response->OtherDetails[$val],
						'element_description'=>$response->SectionContent[$val],
					);
				}
			}
			$dataArr['element_details']='';
			if(!empty($dataSectionArr))
				$dataArr['element_details'] = json_encode($dataSectionArr);
			$this->Common->updateData('mr_page_content_details', 'id', $PageSectionId, $dataArr);
			$response->session()->flash('ReportMessage', 'Page Element Updated');
			return Redirect::to('/element_list/'.$response->PageId);
		}
	}
	public function get_element_list(request $response) {
		$LoginUser = $response->session()->get('user');
		$Data['PageId'] = $response->PageId;
		$ResultCount = $this->Page->get_element_list($Data, ($response->search)?$response->search:"");
		$total = $ResultCount->count();
		$data = array();
		$Result = $this->Page->get_element_list($Data, ($response->search)?$response->search:"", $response->start, $response->length );
		//$Result = $this->Page->load_element_list($Data );
		//print_r($Result);
		$EditLink = 'edit_page/';
		$ArrElement = Helper::element_type();
		$ArrForm = Helper::form_type();
		if ($Result->count() > 0) {
			foreach ($Result as $row) {
				$Id = $row->id;
				if($row->form_type!='')
					$row_data['element_title'] = $ArrElement[$row->element_id].'('.$ArrForm[$row->form_type].')';
				else
					$row_data['element_title'] = $ArrElement[$row->element_id];
				$row_data['id'] = $Id;
				$row_data['sort'] = $row->sort;
				$row_data['title'] = $row->title;
				//$view_url = '';
				
				
				$edit_url = url('edit_content_for_page/'.$row->page_id.'/'.$Id);
				$row_data['action'] = '<a href="'.$edit_url.'" class="EditData "  title="Edit"><i class="fa fa-edit"></i></a>';
				$data[] = $row_data;
			}
			
		}
		//$datas = array_map('array_values', $data);
		$DataArray = array('draw'=>$_REQUEST['draw'],'recordsTotal'=>$total ,'recordsFiltered'=>$total, 'data'=> $data);
		echo json_encode($DataArray);
	}

	public function edit_content_for_page(request $response){
		$data['page_id'] = $response->page_id;
		$data['section_id'] = $response->section_id;
		$SectionData = $this->Common->getList('mr_page_content_details', 'id', $response->section_id);
		$data['page_section_data'] = $SectionData[0];
		/*$ElementDetails = json_decode($data['page_section_data']->element_details, true);
		$array = (array) $ElementDetails;
		echo '<pre>';
		$inventory = $this->sortAssociativeArrayByKey($array, "element_sort", "ASC");
		print_r($inventory);
		exit;*/
		$ReportData = $this->Common->getList('mr_page', 'id', $response->page_id);
		$data['report_data'] = $ReportData[0];
		//print_r($data['report_data']); exit;
		$Id = $data['report_data']->id;
		//$data['reportSectionDetails'] =  $this->Blog->getList('mr_blog_sections', 'report_id', $Id, 'section_sequence');
		$data['title']= 'Edit Element For Page';
		return view('admin/page/edit_content_for_page',$data);
	}
	public function arrange_page_section_sequence(request $response)
    {
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/login');
		  //the key does not exist in the session
		}
		$Id = $response->id;
		$data['PageId'] =  $Id;
		$data['PageDetails'] =  $this->Page->getList('mr_page', 'id', $Id);
		$data['PageSectionDetails'] =  $this->Page->getList('mr_page_content_details', 'page_id', $Id, 'sort');
		$data['title']= 'Arrange Section Page Sequence';
		return view('admin/page/arrange_page_section_sequence',$data);
    }
	public function submit_page_section_sequence(request $response){
		$data['User'] = $response->session()->get('user');
		$PageId= $response->PageId;
		$SectionSequence= $response->SectionSequence;
		$UpdateArr = array();
		foreach($SectionSequence as $key => $val){
			$ReportSeq = $key+1;
			//echo $ReportSeq.'=>'.$val.'<br>';
			$UpdateArr = array(
				'sort'=>$ReportSeq,
			);
			$this->Common->updateData('mr_page_content_details', 'id', $val, $UpdateArr);
		}
		$response->session()->flash('ReportMessage', 'Page Element Sequence updated');
		return Redirect::to('/page_listing');
	}
	function demo(){
		$url = \Request::segment(1);
        $ReportData = $this->Common->getList('mr_page', 'url', $url);
		$data['page_data'] = $ReportData[0];
		$data['reportFaqDetail'] = array();
		$data['PageSectionData'] = $this->Page->getList('mr_page_content_details', 'page_id', $data['page_data']->id,'sort');
		$data['reportFaqDetail'] =  $this->Common->getList('mr_report_faq', 'url', $data['page_data']->url);
		// $Id = $data['report_data']->id;
		$data['meta_title'] = $data['page_data']->meta_title;
		$data['meta_keywords'] = $data['page_data']->meta_description;
		$data['meta_description'] = $data['page_data']->meta_keywords;
		$data['bottom_content'] = $data['page_data']->description;
		return view('frontend/pages/test',$data);
    }
	/******************End Section page content******************************/
}
