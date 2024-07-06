<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Validator;
use App\Models\Common;
class ToolsController extends Controller
{
   protected $Common;
    public function __construct(Common $Common)
    {
		$this->Common = $Common;
		
    }
	function index(){
		$data['title'] =  'Tools';
		return view('admin/tools/tools',$data);
    }
	
   
    function pagenotfound(){
		$data['all_countries'] = $this->Common->getCountries();
		$data['LatestReports'] = $this->Report->getLatestReports(6);
		$data['meta_title'] = "404 | Market Research and Business Consulting | Reports and Data";
		$data['meta_keywords'] = "404 | Global Market Research, Research and Consulting, Industry Trends, Market Size, Forecast , Company Share,  Reports and Data";
		$data['meta_description'] = "404 | Reports and Data is a market research and consulting firm catering to varied industries. It is a robust platform for premium research reports across different sectors";
        return view('frontend/pages/404',$data);
   }
   
}
