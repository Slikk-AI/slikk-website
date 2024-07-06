<?php

namespace App\Models;
use DB;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Helper;
class Lead extends Model
{
	
	
	public function export_lead_list( $Todate='', $FromDate='') //mr_enquiry.report_id = mr_report.id
    {
		$Leads= DB::table('contact_form')
                ->select('contact_form.created_date','contact_form.id','contact_form.timestamp', 'contact_form.name', 'contact_form.email', 'contact_form.phone','contact_form.address', 'contact_form.country', 'contact_form.countryTimezon', 'contact_form.Schedule', 'contact_form.meet_link', 'contact_form.msg');
                
				if($FromDate!='' && $Todate==''){
					$Leads = $Leads->whereDate('contact_form.timestamp',$FromDate);
				}
				if($Todate!='' && $FromDate!=''){
					$Leads = $Leads->whereBetween('contact_form.timestamp', [$FromDate, $Todate]);
				}
				$Leads=$Leads->orderby('contact_form.id', 'desc');
				$Leads=$Leads->get();	
        return $Leads;
	}
	public function lead_list_new($search_term='', $startpoint='', $per_page='', $FromDate='', $Todate='') //mr_enquiry.report_id = mr_report.id
    {
		$Leads= DB::table('contact_form')
                ->select('contact_form.created_date','contact_form.id','contact_form.timestamp', 'contact_form.name','contact_form.email', 'contact_form.phone','contact_form.address', 'contact_form.country', 'contact_form.countryTimezon', 'contact_form.Schedule', 'contact_form.meet_link', 'contact_form.msg');
               
				if($FromDate!='' && $Todate==''){
					$FromDate = str_replace('/', '-', $FromDate);
					$FromDate = date('Y-m-d', strtotime($FromDate));
					$Leads = $Leads->whereDate('contact_form.timestamp',$FromDate);
				}
				if($Todate!='' && $FromDate!=''){
					
					$Todate = str_replace('/', '-', $Todate);
					$Todate = date('Y-m-d', strtotime($Todate));
					$FromDate = str_replace('/', '-', $FromDate);
					$FromDate = date('Y-m-d', strtotime($FromDate));
					$Leads = $Leads->whereBetween(DB::raw('contact_form.timestamp'), array($FromDate, $Todate));
				}
				if($search_term['value']!=''){
					$Leads->where(function ($Leads)  use ( $search_term ) {
						$Leads = $Leads->where('contact_form.name', 'like', '%' . $search_term['value'] . '%');
						// ->orWhere('mr_enquiry.enquiry_type','LIKE','%'.$search_term['value'].'%')
						// ->orWhere('mr_enquiry.reportName','LIKE','%'.$search_term['value'].'%')
						// ->orWhere('mr_enquiry.company_name','LIKE','%'.$search_term['value'].'%')
						// ->orWhere('mr_enquiry.email','LIKE','%'.$search_term['value'].'%')
						// ->orWhere('mr_enquiry.message','LIKE','%'.$search_term['value'].'%')
						// ->orWhere('cat.name','LIKE','%'.$search_term['value'].'%')
						// ->orWhere('mr_enquiry.country','LIKE','%'.$search_term['value'].'%')
						// ->orWhere('mr_enquiry.job_title','LIKE','%'.$search_term['value'].'%')
						// ->orWhere('ct.region_name','LIKE','%'.$search_term['value'].'%');
						
				    });
					
				}
				
				if($startpoint!='')
					$Leads = $Leads->offset($startpoint)->limit($per_page);
				$Leads=$Leads->orderby('contact_form.id', 'desc')->get();	
        return $Leads;
	}
	public function create_enquiry_leads(array $input)
    {
		DB::table('leads')->insert($input);
    }
	
}
