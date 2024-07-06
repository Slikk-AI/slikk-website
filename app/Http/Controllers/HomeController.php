<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Validator;
use App\Models\Common;
class HomeController extends Controller
{
     protected $Common;
    public function __construct(Common $Common)
    {
		$this->Common = $Common;
    }
	
    function get_data_webhook(){
// From URL to get webpage contents.
$url = "https://hookb.in/YV9Wn3rmRNiQERGGdlK9";
 
// Initialize a CURL session.
$ch = curl_init();
 
// Return Page contents.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
//grab URL and pass it to the variable.
curl_setopt($ch, CURLOPT_URL, $url);
 
$result = curl_exec($ch);


 
echo $result;

 exit;
	} 
	function callAPI($method, $url, $data){
   $curl = curl_init();
   switch ($method){
      case "POST":
         curl_setopt($curl, CURLOPT_POST, 1);
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
         break;
      case "PUT":
         curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
         break;
      default:
         if ($data)
            $url = sprintf("%s?%s", $url, http_build_query($data));
   }
   // OPTIONS:
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'APIKEY: 111111111111111111111',
      'Content-Type: application/json',
   ));
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
   // EXECUTE:
   $result = curl_exec($curl);
   if(!$result){die("Connection Failure");}
   curl_close($curl);
   return $result;
}
    function index(){
        $url = url()->current();
        $ReportData = $this->Common->getList('mr_page', 'title', 'home');
		$data['report_data'] = $ReportData[0];
		//print_r($data['report_data']);
		// $Id = $data['report_data']->id;
        $data['meta_title'] = $data['report_data']->meta_title;
		$data['meta_keywords'] = $data['report_data']->meta_description;
		$data['meta_description'] = $data['report_data']->meta_keywords;
		$data['bottom_content'] = $data['report_data']->description;
		$data['reportFaqDetail'] =  $this->Common->getList('mr_report_faq', 'url', $ReportData[0]->url);
		//echo $url;
		//     exit;
		return view('frontnew.homePage',$data);
    }

    function index_old(){
        $url = url()->current();
        $ReportData = $this->Common->getList('mr_page', 'title', 'home');
		$data['report_data'] = $ReportData[0];
		//print_r($data['report_data']);
		// $Id = $data['report_data']->id;
        $data['meta_title'] = $data['report_data']->meta_title;
		$data['meta_keywords'] = $data['report_data']->meta_description;
		$data['meta_description'] = $data['report_data']->meta_keywords;
		$data['bottom_content'] = $data['report_data']->description;
		$data['reportFaqDetail'] =  $this->Common->getList('mr_report_faq', 'url', $ReportData[0]->url);
        return view('frontend/pages/homePage',$data);
    }


    public function profit(request $request) {     
         $x = $request->capital;
         $type = $request->type;
         $p1 = $request->p1;
         $p2 = $request->p2;
         $p3 = $request->p3;
         $p4 = $request->p4;
         $p5 = $request->p5;
        
        

         if ($p1 == 1) {

     

            $x1 = 28.3; // 2019 per

            $y1 = 54; // 2019 date

            $a1 = 49; // 2020 per

            $b1 = 56; // 2020 date

            $r1 = 48.4; // 2021 per

            $s1 = 55; // 2021 date

        } else {

            $x1 = 0;

            $y1 = 0;

            $a1 = 0;

            $b1 = 0;

            $r1 = 0;

            $s1 = 0;

        }

    

        if ($p2 == 1) {

    

            $x2 = 39;

            $y2 = 45;

            $a2 = 40;

            $b2 = 38;

            $r2 = 55;

            $s2 = 43;

        } else {

            $x2 = 0;

            $y2 = 0;

            $a2 = 0;

            $b2 = 0;

            $r2 = 0;

            $s2 = 0;

        }

    

        if ($p3 == 1) {

    

            $x3 = 69;

            $y3 = 61;

            $a3 = 68;

            $b3 = 59;

            $r3 = 52;

            $s3 = 67;


        } else {

            $x3 = 0;

            $y3 = 0;

            $a3 = 0;

            $b3 = 0;

            $r3 = 0;

            $s3 = 0;

        }

    

        if ($p4 == 1) {

    

            $x4 = 50;

            $y4 = 10;

            $a4 = 60;

            $b4 = 10;

            $r4 = 80;

            $s4 = 10;

        } else {

            $x4 = 0;

            $y4 = 0;

            $a4 = 0;

            $b4 = 0;

            $r4 = 0;

            $s4 = 0;

        }

    

        if ($p5 == 1) {

    

            $x5 = 90;

            $y5 = 10;

            $a5 = 10;

            $b5 = 10;

            $r5 = 20;

            $s5 = 10;

        } else {

            $x5 = 0;

            $y5 = 0;

            $a5 = 0;

            $b5 = 0;

            $r5 = 0;

            $s5 = 0;

        }
    
        $per1 = ($x1 + $x2 + $x3 + $x4 + $x5) * $x / 100;
    
        $z1 = $x + $per1;
    
      //  echo 'z1 : ' . $z1;
        //echo '<br>';
      
        if ($type == 1) {
    
            $c1 = $z1;
            $per2 = ($a1 + $a2 + $a3 + $a4 + $a5) * $c1 / 100;
            $z2 = $c1 + $per2;
            $per3 = ($r1 + $r2 + $r3 + $r4 + $r5) * $z2 / 100;
            $z3 = $z2 + $per3;

            $per_y =  $z3 - $x;

            $tot_per = $per_y*100/$x;
    
            //echo 'z2 : ' . $z2;
           // echo '<br>';
            //echo 'z3 : ' . $z3;
           // echo '<br>';
        } else {
    
    
    
            $per2 = ($a1 + $a2 + $a3 + $a4 + $a5) * $x / 100;
            $per3 = ($r1 + $r2 + $r3 + $r4 + $r5) * $x / 100;
            $z2 = $x + $per2;
            $z3 = $x + $per3;

            $tot_per = $x1 + $x2 + $x3 + $x4 + $x5+$a1 + $a2 + $a3 + $a4 + $a5+$r1 + $r2 + $r3 + $r4 + $r5;
    
           // echo 'z2 : ' . $z2;
            //echo '<br>';
            //echo 'z3 : ' . $z3;
            //echo '<br>';
        }
   // } /// submit close
    
    
    if($z1>=$z2 && $z1>=$z3 ){
       
        $max_val = 'z1';
     }
     elseif($z2>=$z1 && $z2>=$z3 ){
        
        $max_val = 'z2';
     }
     elseif($z3>=$z2 && $z3>=$z1 ){
        
        $max_val = 'z3';
     }
    
    if($max_val == 'z1') {
    
        $z1_per = 100;
        $z2_per = ($z2*100/$z1);
        $z3_per = ($z3*100/$z1);
        $double_per1 = ($x*100/$z1)*2;
        $double_per = (100-$double_per1);
    
    }
    
    elseif($max_val == 'z2') {
    
        $z2_per = 100;
        $z1_per = ($z1*100/$z2);
        $z3_per = ($z3*100/$z2);
        $double_per1 = ($x*100/$z2)*2;
        $double_per = (100-$double_per1);
    
    }
    
    elseif($max_val == 'z3') {
    
        $z3_per = 100;
        $z1_per = ($z1*100/$z3);
        $z2_per = ($z2*100/$z3);
        $double_per1 = ($x*100/$z3)*2;
        $double_per = (100-$double_per1);
    
    }

    $y = $y1 + $y2 + $y3 + $y4 + $y5;
    $b = $b1 + $b2 + $b3 + $b4 + $b5;
    $s = $s1 + $s2 + $s3 + $s4 + $s5;

    
 $DataArr = array('z1_per'=>$z1_per,'z2_per'=>$z2_per,'z3_per'=>$z3_per,'z1'=>$z1,'z2'=>$z2,'z3'=>$z3,'double_per'=>$double_per,'y'=>$y,'b'=>$b,'s'=>$s,'tot_per'=>$tot_per);
         echo json_encode($DataArr);
     }

}
