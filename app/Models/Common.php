<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;
use Helper;
class Common extends Model
{
	function check_url($TableName, $ColumnId='', $ColumnValue='', $Id=''){
        $Res= DB::table($TableName);
		if($ColumnValue!='')
			$Res->where($ColumnId,$ColumnValue);
		if($Id!='')
			$Res->whereNotIn('id',[$Id]);
                $Res = $Res->get();
        return $Res;
    }
    function saveData($TableName, $data){
       $saveenquiry =  DB::table($TableName)->insertGetId($data);
       return $saveenquiry;
    }

	function getTimezoneData($isocode){
        $Res= DB::table('mr_timezone');
		if($isocode!='')
			$Res->where('country_code',$isocode);
                $Res = $Res->get();
        return $Res;
    }

	function savepage($TableName, $data){
		$saveenquiry =  DB::table($TableName)->insertGetId($data);
		return $saveenquiry;
	 }

	 function updatepage($TableName, $ColumnId='', $ColumnValue='', $data){
		//DB::enableQueryLog();
		$saveenquiry =   DB::table($TableName)->where($ColumnId, $ColumnValue)->update($data);
	   //dd(DB::getQueryLog());
       return $saveenquiry;
    }

	function saveMultipleData($TableName, $data = array()){
       $saveenquiry =  DB::table($TableName)->insert($data);
       return $saveenquiry;
    }
	function saveUpdateMultipleData($TableName, $data = array()){
       $saveenquiry =  DB::table($TableName)->update($data, 'email_id');
       return $saveenquiry;
    }
	function updateData($TableName, $ColumnId='', $ColumnValue='', $data){
		//DB::enableQueryLog();
       DB::table($TableName)->where($ColumnId, $ColumnValue)->update($data);
	   //dd(DB::getQueryLog());
       //return $saveenquiry;
    }
	function updateDatabyMultipleWhr($TableName, $datawhere, $dataval){
		//DB::enableQueryLog();
       DB::table($TableName)->where($datawhere)->update($dataval);
	   //dd(DB::getQueryLog());
       //return $saveenquiry;
    }
	function deleteData($TableName, $ColumnId='', $ColumnValue=''){
       DB::table($TableName)->where($ColumnId, $ColumnValue)->delete();
    }
	function deleteDataWhr($TableName, $ArrData){
       DB::table($TableName)->where($ArrData)->delete();
    }
	function search_data($search_term){
		/*$ReportDetail= DB::table('mr_blog')
			->select('id', 'blog_type',  \DB::raw('SUBSTRING(title,1,200) as ntitle'), 'slug', 'publish_date', \DB::raw('SUBSTRING(description,1,200) as ndesc'))
			->where('status','active')
			->where('title', 'like', '%' . $search_term . '%')
			->orderBy('id','desc')
			->limit(30)
			->get();
			return $ReportDetail;*/
	}
	function getRoleList($TableName){
		$Res= DB::table($TableName);
			$Res->where('name','<>','Admin');
                $Res = $Res->get();
        return $Res;
	}
	function getList($TableName, $ColumnId='', $ColumnValue=''){
        $Res= DB::table($TableName);
		if($ColumnValue!='')
			$Res->where($ColumnId,$ColumnValue);
                $Res = $Res->get();
        return $Res;
    }
	function getListOrderby($TableName, $ColumnId='', $ColumnValue='', $orderby='', $orderType=''){
        $Res= DB::table($TableName);
		if($ColumnValue!='')
			$Res->where($ColumnId,$ColumnValue);
		if($orderby!='')
			$Res->orderBy($orderby,$orderType);
                $Res = $Res->get();
        return $Res;
    }
	public function get_permission_list($CompanyId, $search_term='',$startpoint='', $per_page='')
    {
		$Users= DB::table('menu as m')
                ->select('m.*', 'u.user_name')
                ->join('users as u', 'u.id', '=', 'm.created_by');
				if($search_term['value']!='')
					$Users = $Users->where('m.menu_name', 'like', '%' . $search_term['value'] . '%');
				if($startpoint!='')
					$Users = $Users->offset($startpoint)->limit($per_page);
				$Users=$Users->orderBy('m.id','desc');
				$Users=$Users->get();	
        return $Users;
	}
	public function getSelectionUserByRegion($RegionCode, $CompanyId)
    {
		$Users= DB::table('users')
                ->select('id', 'user_name')
				->where('status',1)
				->where('company_id',$CompanyId)
				->where('region_code', 'like', '%' . $RegionCode . '%');
				$Users=$Users->get();	
        return $Users;
	}
	function getTableData($TableName){
		//DB::enableQueryLog();
        $Res= DB::table($TableName);
        $Res = $Res->get();
		// dd(DB::getQueryLog());
        return $Res;
    }
	function getData($TableName, $ArrData){
		//DB::enableQueryLog();
        $Res= DB::table($TableName);
		$Res->where($ArrData);
        $Res = $Res->get();
		// dd(DB::getQueryLog());
        return $Res;
    }
	function getDataBySelect($TableName, $ArrData, $SelectData=''){
		//DB::enableQueryLog();
        $Res= DB::table($TableName);
		if($SelectData!='')
		$Res->select($SelectData);
		$Res->where($ArrData);
        $Res = $Res->get();
		 //dd(DB::getQueryLog()); exit;
        return $Res;
    }
	public function get_role_list($CompanyId, $search_term='',$startpoint='', $per_page='')
    {
		$Users= DB::table('roles as m')
                ->select('m.*');
				if($search_term['value']!='')
					$Users = $Users->where('m.name', 'like', '%' . $search_term['value'] . '%');
				if($startpoint!='')
					$Users = $Users->offset($startpoint)->limit($per_page);
				$Users=$Users->orderBy('m.id','desc');
				$Users=$Users->get();
        return $Users;
	}
	public function get_menu_list()
    {
		$Users= DB::table('menu as m')
                ->select('m.*')
				->where('status',1);
				$Users=$Users->orderBy('m.sort_order','asc');
				$Users=$Users->get();
        return $Users;
	}
	public function getPermissionMenuWise($SubPermissionArr)
    {
		$Users= DB::table('permissions as m')
                ->select('m.*')
				->where($SubPermissionArr);
				$Users=$Users->orderBy('m.sort_order','asc');
				$Users=$Users->get();
        return $Users;
	}
	function updateCategoryData($TableName, $CompanyId='', $MainCatId='', $data){
		//DB::enableQueryLog();
       DB::table($TableName)->where('company_id', $CompanyId)->where('main_cat_id', $MainCatId)->update($data);
	   //dd(DB::getQueryLog());
       //return $saveenquiry;
    }
	/******** Start Helper function***************/
	public static function getHelperList($TableName, $ColumnId='', $ColumnValue=''){
        $Res= DB::table($TableName);
		if($ColumnValue!='')
			$Res->where($ColumnId,$ColumnValue);
                $Res = $Res->get();
        return $Res;
    }
	public static function getRolePermission($Id)
    {
		$Users= DB::table('permission_role as m')
                ->select('u.name')
                ->join('permissions as u', 'u.id', '=', 'm.permission_id')
				->where('role_id',$Id)
				->get();	
        return $Users;
	}
	public static function getUserPermission($Id)
    {
		$Users= DB::table('permission_user as m')
                ->select('u.name')
                ->join('permissions as u', 'u.id', '=', 'm.permission_id')
				->where('user_id',$Id)
				->get();	
        return $Users;
	}
	public static function getListValue($TableName, $ColumnId='', $ColumnValue=''){
        $Res= DB::table($TableName);
		if($ColumnValue!='')
			$Res->where($ColumnId,$ColumnValue);
                $Res = $Res->get();
        return $Res;
    }
	public static function getDataHelperFun($TableName, $ArrData){
		//DB::enableQueryLog();
        $Res= DB::table($TableName);
		$Res->where($ArrData);
        $Res = $Res->get();
		// dd(DB::getQueryLog());
        return $Res;
    }
	/******** End Helper function***************/
	public function emplyee_autosearch($Table_name, $UserName)
    {
		$UserData = Helper::getUserData();
		$CompanySessionId = Helper::getCompanySession();
		$Users= DB::table($Table_name)
                ->select('id', 'user_name')
				->where('user_name', 'like', '%' . $UserName . '%')
				->where('region_code', 'like', '%' . $UserData->region_code . '%')
				->where('company_id',$CompanySessionId)
				->get();
        return $Users;
	}
	function checkdatabse($params){
		config(['database.connections.mysql_crm' => [
            'driver' => $params['driver'],
            'host' => $params['host'],
            'database' => $params['dbname'],
            'username' => $params['username'],
            'password' => $params['password'],
			'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
        ]]);

        return DB::connection('mysql_crm');
		/*$config = Config::get('connections.mysql_new');
		$config['driver'] = $params['driver'];
		$config['host'] = $params['host'];
		$config['database'] = $params['dbname'];
		$config['username'] = $params['username'];
		$config['password'] = $params['password'];
		config()->set('connections.mysql_new', $config);
		return DB::connection('mysql_new');*/
	}
	function getData_newconnection($Connection, $TableName, $ArrData){
		//DB::enableQueryLog();
        $Res= $Connection->table($TableName);
		$Res->where($ArrData);
        $Res = $Res->get();
		// dd(DB::getQueryLog());
        return $Res;
    }
	function getList_newconnection($Connection, $TableName, $ColumnId='', $ColumnValue=''){
        $Res= $Connection->table($TableName);
		if($ColumnValue!='')
			$Res->where($ColumnId,$ColumnValue);
                $Res = $Res->get();
        return $Res;
    }
	public function getSelectionUserByRegion_newconnection($Connection, $RegionCode, $CompanyId)
    {
		$Users= $Connection->table('users')
                ->select('id', 'user_name')
				->where('status',1)
				->where('company_id',$CompanyId)
				->where('region_code', 'like', '%' . $RegionCode . '%');
				$Users=$Users->get();	
        return $Users;
	}
	function saveData_newconnection($Connection, $TableName, $data){
		//$Connection->enableQueryLog();
       $saveenquiry =  $Connection->table($TableName)->insertGetId($data);
	   //dd($Connection->getQueryLog());
       return $saveenquiry;
    }
	function getCountries($isocode=''){
        $Res= DB::table('mr_countries');
		if($isocode!='')
			$Res->where('countries_iso_code',$isocode);
                $Res = $Res->get();
        return $Res;
    }
	/******** Start Helper function for header***************/
	 public static function getParentCategoryMenu($categoryId=0, $orderby=''){
        $Categories= DB::table('mr_category')
                            ->select('id', 'name', 'slug', 'image' ,'category_icon')
                            ->where('parent_id',$categoryId)
                            ->where('status','active');
							if($orderby!='')
								$Categories=$Categories->orderBy('home_page_research_sort','asc');
                            $Categories = $Categories->get();
        return $Categories;
    }
	public static function getLatestReportsBycategoryIdforMenu($limit='', $CategoryId=''){
		//DB::enableQueryLog();
        $Categories= DB::table('mr_report')
                ->select('mr_report.id','mr_report.title','mr_report.url','mr_report.single_price','mr_report.publish_date','mr_report.no_of_pages','mr_category.name', 'mr_report.publish_type')
                ->join('mr_category', function ($join) {
					$join->on('mr_category.id', '=', 'mr_report.cat_id');
						 //->orOn('mr_category.id', '=', 'mr_report.sub_cat_id');
				});
                $Categories = $Categories ->where('mr_category.id',$CategoryId);
                $Categories = $Categories ->orderBy(DB::raw('RAND()'));
               
                if($limit !='')
                  $Categories = $Categories->limit($limit);
				$Categories = $Categories->get();
			   //dd(DB::getQueryLog());
        return $Categories;
    }
	public static function get_highest_strategy_plan($UserId)
    {
		$Users= DB::table('strategy as s')
                ->select('s.price', 'sp.strategy_id')
                ->join('strategy_plan as sp', 's.id', '=', 'sp.strategy_id');
				$Users = $Users->where('sp.subscribe_status', '1');
				$Users = $Users->where('sp.payment_status', '1');
				$Users = $Users->where('sp.user_id', $UserId);
				$Users = $Users->offset(0)->limit(1);
				$Users=$Users->orderBy('s.price','desc');
				$Users=$Users->get();	
        return $Users;
	}
	/******** End Helper function***************/
	function getTableDataByLimit($TableName, $id1, $id2){
		//DB::enableQueryLog();
        $Res= DB::table($TableName);
		$Res->whereBetween('id', [$id1, $id2]);
        $Res = $Res->get();
		// dd(DB::getQueryLog());
        return $Res;
    }
	public function get_category_list($search_term = '', $startpoint = '', $per_page = '')
	{
		$Users = DB::table('mr_categories')
			->select('category_name', 'id', 'slug');
		if ($search_term['value'] != '') {
			$Users->where(function ($Users)  use ($search_term) {
				$Users = $Users->where('category_name', 'like', '%' . $search_term['value'] . '%')
					->orWhere('slug', 'LIKE', '%' . $search_term['value'] . '%');
			});
		}
		if ($startpoint != '')
			$Users = $Users->offset($startpoint)->limit($per_page);
		$Users = $Users->orderBy('id', 'desc');
		$Users = $Users->get();
		return $Users;
	}
}
