<?php

namespace App\Http\Controllers\Auth;

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Common;
use App\Models\Login;
use App\Models\Lead;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Helper;
class LeadController extends Controller
{
    protected $Common;
    protected $Login;
    protected $Lead;
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
    public function __construct(Common $Common,Login $Login,Lead $Lead)
    {
		$this->Common = $Common;
		$this->Login = $Login;
		$this->Lead = $Lead;
		
        //$this->middleware('guest')->except('logout');
    }
	public function index(request $response)
    {
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/');
		  //the key does not exist in the session
		}
		//$TestRes = $this->Lead->checkregriontest();
		$data['User'] = $response->session()->get('user');
		$data['title']= 'Leads';
		return view('admin/lead/index',$data);
    }
	public function export_leads(){
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/');
		  //the key does not exist in the session
		}
		
		
		//$data['RegionList']=$this->Common->getList('regions');
		$data['title']= 'Export Leads';
		return view('admin/lead/export_leads',$data);
	}
	public function submit_export_leads(request $request){
		$LoginUser = $request->session()->get('user');
		$Todate = '';
		$FromDate = '';
		if($request->Todate!='')
			$Todate = date('Y-m-d', strtotime($request->Todate));
		if($request->FromDate!='')
			$FromDate = date('Y-m-d', strtotime($request->FromDate));
		$Results = $this->Lead->export_lead_list($Todate, $FromDate);
		//print_r($Result); exit;
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Lead Id');
        $sheet->setCellValue('B1', 'Lead Date');
		$sheet->setCellValue('C1', 'Name');
        $sheet->setCellValue('D1', 'Email');
        $sheet->setCellValue('E1', 'Phone');
		$sheet->setCellValue('F1', 'Seats');
		$sheet->setCellValue('G1', 'Country');
		$sheet->setCellValue('H1', 'Timezone');
		$sheet->setCellValue('I1', 'Schedule');
		$sheet->setCellValue('J1', 'Meet link');
		$sheet->setCellValue('K1', 'Msg');
		$rows = 2;
	
		
		
		foreach($Results as $Result){
			
			
			$sheet->setCellValue('A' . $rows, $Result->id);
			$sheet->setCellValue('B' . $rows, $Result->timestamp);
			$sheet->setCellValue('C' . $rows, $Result->name);
			$sheet->setCellValue('D' . $rows, $Result->email);
			$sheet->setCellValue('E' . $rows, $Result->phone);
			$sheet->setCellValue('F' . $rows, $Result->address);
			$sheet->setCellValue('G' . $rows, $Result->country);
			$sheet->setCellValue('H' . $rows, $Result->countryTimezon);
			$sheet->setCellValue('I' . $rows, $Result->Schedule);
			$sheet->setCellValue('J' . $rows, $Result->meet_link);
			$sheet->setCellValue('K' . $rows, $Result->msg);
		

		
            $rows++;		
		}	   
	    $fileName = "Lead.xlsx";
		$writer = new Xlsx($spreadsheet);
		/*
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="'.$fileName.'"');
		setlocale(LC_ALL, 'en_US');
		$writer->save('php://output');*/
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$fileName.'"');
		header('Cache-Control: max-age=0');
		$writer->save('php://output');
		die;
		return redirect()->to('export_leads');
        
	}
	public function lead_list(request $response) {
		if (Session::has('user')){
		  // do some thing if the key is exist
		}else{
			return Redirect::to('/');
		  //the key does not exist in the session
		}
			$LoginUser = $response->session()->get('user');
			$ResultCount = $this->Lead->lead_list_new(($response->search)?$response->search:"", '', '', ($response->start_date)?$response->start_date:"", ($response->end_date)?$response->end_date:"");
			$total = $ResultCount->count();
			$data = array();
			//echo $response->start.' '.$response->length; exit;
			$Result = $this->Lead->lead_list_new(($response->search)?$response->search:"", $response->start, $response->length, ($response->start_date)?$response->start_date:"", ($response->end_date)?$response->end_date:"");
			
			if ($Result->count() > 0) {
				foreach ($Result as $row) {
					$Id = $row->id;
					if (strpos($row->email, '@') !== false) {
							$Email = explode('@',$row->email);
							$EmailDomain = $Email[1];
					}else{
						$EmailDomain = $row->email;
					}
					$row_data['id'] = $Id;
					$row_data['created_date'] = $row->created_date;
					$row_data['name'] = $row->name;
					$row_data['email'] = $row->email;
					$row_data['phone'] = $row->phone;
					$row_data['address'] = $row->address;
					$row_data['country'] = $row->country;
					$row_data['countryTimezon'] = $row->countryTimezon;
					$row_data['Schedule'] = $row->Schedule;
					$row_data['meet_link'] = $row->meet_link;
					$row_data['msg'] = $row->msg;
					$row_data['client_emailId_type'] = $EmailDomain;
					$data[] = $row_data;
				}
				
			}
			//$datas = array_map('array_values', $data);
			$DataArray = array('draw'=>$_REQUEST['draw'],'recordsTotal'=>$total ,'recordsFiltered'=>$total, 'data'=> $data);
			echo json_encode($DataArray);
	}
}
