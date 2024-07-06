<?php

namespace App\Helpers;
use App\Models\Common;
use App\Models\Thoughtleadership;
use Session;
use Config;
use Redirect;
use DB;
class Helper
{
	/*public static function setConnection($params)
    {

        config(['connections.mysql_new' => [
            'driver' => $params['driver'],
            'host' => $params['host'],
			'database' => $params['dbname'],
            'username' => $params['username'],
            'password' => $params['password'],
			'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
        ]]);
        return DB::connection('mysql_new');
    }*/
	public static  function get_highest_strategy_plan($UserId){
		$List = Common::get_highest_strategy_plan($UserId);
		return $List;
	}
	public static  function getUserName(){
		$data['User'] = Session::get('user');
		return $data['User']->user_name;
	}
	public static  function getUserData(){
		$data['User'] = Session::get('user');
		return $data['User'];
	}
	public static  function checkSession(){
		
		//print_r(Session::get('user')); exit;
		if (Session::has('user')){
			
			$data['User'] = Session::get('user');
			print_r($data['User']); exit;
			if(empty($data['User'])){
				return Redirect::to('/');
			}else{
				return Redirect::to('/dashboard');
			}
		  // do some thing if the key is exist
		}else{
			echo 'ddddd'; exit;
			return Redirect::to('/');
		  //the key does not exist in the session
		}
	}
   
	
    public static  function allow_permission($permission_name){
		//$permission_name = $response->permission_name;
		$data['User'] = Session::get('user');
		$RoleId = $data['User']->role_id;
		$UserId = $data['User']->id;
		$ListPermissionRole = Common::getRolePermission($RoleId);
		$ListPermissionUser = Common::getUserPermission($UserId);
		$ListRole = Common::getListValue('roles', 'id', $RoleId);
		$AssociatedPermission = $ListRole[0]->all;
		if($AssociatedPermission==1){
			return 1;
		}else{
			if(empty($ListPermissionUser)){
				$RoleArr = array();
				foreach($ListPermissionRole as $key => $val){
					$RoleArr[]=$val->name;
				};
				if (in_array($permission_name, $RoleArr))
				  {
						//echo "Match found";
						return 1;
				  }
				else
				  {
					//echo "Match not found";
					return 0;
				  }
			}else{
				$RoleArr = array();
				foreach($ListPermissionRole as $key => $val){
					$RoleArr[]=$val->name;
				};
				
				$UserArr = array();
				foreach($ListPermissionUser as $keys => $vals){
					$UserArr[]=$vals->name;
				};
				$result_merge = array_merge($RoleArr, $UserArr);
				$result_unique = array_unique($result_merge);
				if (in_array($permission_name, $result_unique))
				  {
					//echo "Match found";
					return 1;
				  }
				else
				  {
					//echo "Match not found";
					return 0;
				  }
				/*echo '<pre>';
				print_r($RoleArr);
				print_r($UserArr);
				print_r($result_merge);
				print_r($result_unique);
				exit;*/
			}
		}
		
		
	}
	public static  function show_date_format($DefaultDate){
		return date('M Y', strtotime($DefaultDate));
	}
	public static  function show_upcoming_report_date($DefaultDate){
		return date('M Y', strtotime($DefaultDate));
		//return date('Y-m-d', strtotime("+2 months", strtotime($DefaultDate)));
	}
	public static  function all_category_menu($orderBy=''){
		$Categories = Common::getParentCategoryMenu(0, $orderBy);
		$categorydata = array();
        foreach ($Categories as $categoryDate) {
            $categorydata[$categoryDate->id]['name']= $categoryDate->name;
            //$categorydata[$categoryDate->id]['image']= $categoryDate->image;
            //$categorydata[$categoryDate->id]['image_path']= $categoryDate->image_path;
            $categorydata[$categoryDate->id]['slug'] = $categoryDate->slug;
            $categorydata[$categoryDate->id]['id'] = $categoryDate->id;
            $categorydata[$categoryDate->id]['single_feature_reports'] = Common::getLatestReportsBycategoryIdforMenu(1,$categoryDate->id);
            $categorydata[$categoryDate->id]['category_icon'] = $categoryDate->category_icon;
            //$categorydata[$categoryDate->id]['catdesc'] = $categoryDate->catdesc;

            $SubCategories = Common::getParentCategoryMenu($categoryDate->id);
            $count = 0;
            foreach ($SubCategories as $SubCategoriesData) {
                $thisindex = $count++;
                //$categorydata[$categoryDate->id][$thisindex]['image_path'] = $SubCategoriesData->image_path;
                $categorydata[$categoryDate->id][$thisindex]['name'] = $SubCategoriesData->name;
                //$categorydata[$categoryDate->id][$thisindex]['image'] = $SubCategoriesData->image;
                $categorydata[$categoryDate->id][$thisindex]['slug'] = $SubCategoriesData->slug;
            }
            $categorydata[$categoryDate->id]['countsubarray'] = $count;
        }
        return $categorydata;
		
	}
	public static  function getParentCategoryDetail($CatId){
		$Categories = Common::getListValue('mr_category', 'id', $CatId);
		return $Categories;
	}
	public static  function getReportSectionGraph($ReportId,$ReportSectionId){
		$WhrArr = array(
			'report_id'=>$ReportId,
			'report_section_id'=>$ReportSectionId,
		);
		$Categories = Common::getDataHelperFun('mr_report_graph', $WhrArr);
		return $Categories;
	}
	public static  function CTAbuttons(){
		$ArrCTA = array(
			'sample-enquiry-form'=>'Request A Sample',
			'request-customization-form'=>'Request for customisation',
			'download-summary-form'=>'Download Summary',
			'call-schedule'=>'Schedule a Call',
			'discount-enquiry-form'=>'Ask for Discount',
			'speak-to-analyst-form'=>'Speak to Analyst',
			'inquiry-before-buying'=>'Inquire Before Buying',
		);
		return $ArrCTA;
	}
	public static function getCategoryLogo($name){
		$files = \File::allFiles('assets/category_logo/'.$name);
		$imagesArr = [];
		foreach ($files as $file) {
			$imagesArr[] = $file->getRelativePathname();
		}
		return $imagesArr;
	}
	public static function getThoughtLeadershipSectionGraph($ReportId,$ReportSectionId){
		$WhrArr = array(
			'thought_leadership_id'=>$ReportId,
			'thought_leadership_section_id'=>$ReportSectionId,
		);
		$Categories = Common::getDataHelperFun('mr_thought_leadership_graph', $WhrArr);
		return $Categories;
	}
	public static function getThoughtLeadershipSectionFetureImg($Id, $SectionType='',$limit=''){
		$WhrArr = array(
			'thought_leadership_id'=>$Id,
			'section_type'=>$SectionType,
		);
		$Categories = Thoughtleadership::getThoughtLeadershipSectionFetureImg('mr_thought_leadership_sections', $WhrArr,$limit,'section_sequence');
		return $Categories;
	}
	public static function isMobile() {
		return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
	}
	public static  function element_type(){
		$ArrCTA = array(
			'1'=>'Right Side Form with Description',
			'2'=>'Testimonial',
			'3'=>'Feature',
			'4'=>'Future of Work',
			'5'=>'Image with Description with Grid',
			'6'=>'Image with Description with listing (How do we do this?)',
			'7'=>'Short Grid Box',
			'8'=>'Team Members',
			'9'=>'Stories ',
			'10'=>'Slider with small Grid',
			'11'=>'Referal Works',
			'12'=>'Share the Referral Link 1',
			'13'=>'Share the Referral Link 2',
			'14'=>'Top Tab with Description',
		);
		return $ArrCTA;
	}
	public static  function form_type(){
		$ArrCTA = array(
			'Form A'=>'Form A',
			'Form B'=>'Form B',
			'Form C'=>'Form C',
		);
		return $ArrCTA;
	}
	public static function sortAssociativeArrayByKey($array, $key, $direction){

		switch ($direction){
			case "ASC":
				usort($array, function ($first, $second) use ($key) {
					return $first[$key] <=> $second[$key];
				});
				break;
			case "DESC":
				usort($array, function ($first, $second) use ($key) {
					return $second[$key] <=> $first[$key];
				});
				break;
			default:
				break;
		}

		return $array;
	}
}


