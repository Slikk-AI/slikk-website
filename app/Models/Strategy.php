<?php

namespace App\Models;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Helper;
use Config;
class Strategy extends Model
{
	
	function checkDetails($TableName, $ArrData){
        $Res= DB::table($TableName);
		$Res->where($ArrData);
        $Res = $Res->get();
        return $Res;
    }
	public function get_strategy_list($search_term='',$startpoint='', $per_page='')
    {
		$Users= DB::table('strategy')
                ->select('id', 'plan_title', 'price', 'status', 'created_date');
				if($search_term['value']!=''){
					$Users = $Users->where('plan_title', 'like', '%' . $search_term['value'] . '%');
				}
				if($startpoint!='')
					$Users = $Users->offset($startpoint)->limit($per_page);
				$Users=$Users->orderBy('id','desc');
				$Users=$Users->get();	
        return $Users;
	}
	function getList($TableName, $ColumnId='', $ColumnValue='',$OrderBy=''){
        $Res= DB::table($TableName);
		if($ColumnValue!='')
			$Res->where($ColumnId,$ColumnValue);
		if($OrderBy!='')
			$Res=$Res->orderBy($OrderBy,'asc');
                $Res = $Res->get();
		
        return $Res;
    }
	function deleteDataBySectionId($TableName, $ReportId, $ArrData){
       DB::table($TableName)->where('strategy_id',$ReportId)->whereNotIn('id',$ArrData)->delete();
    }
	function updateStrategyPlanData($TableName, $StrategyId='', $Userid='', $data){
		//DB::enableQueryLog();
       DB::table($TableName)->where('strategy_id', $StrategyId)->where('user_id', $Userid)->update($data);
	   //dd(DB::getQueryLog());
       //return $saveenquiry;
    }
}
