<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	public function get_list($search_term='',$startpoint='', $per_page='')
    {
		$Users= DB::table('mr_page')
                ->select('title', 'id', 'url');
				if($search_term['value']!=''){
					$Users->where(function ($Users)  use ( $search_term ) {
						$Users = $Users->where('title', 'like', '%' . $search_term['value'] . '%')
							->orWhere('url','LIKE','%'.$search_term['value'].'%');
				    });
				}
				if($startpoint!='')
					$Users = $Users->offset($startpoint)->limit($per_page);
				$Users=$Users->orderBy('id','desc');
				$Users=$Users->get();	
        return $Users;
	}
	function getAllBlog($limit='',$FilterCategory=''){
		
        $Page= DB::table('mr_page')
                ->select('mr_page.id', 'mr_page.title', 'mr_page.url','mr_page.category','mr_page.description','mr_page.meta_description', 'mr_page.meta_keywords')
				// ->join('mr_categories', 'mr_blog.category_id', '=', 'mr_categories.id', 'left')
				->where('mr_page.status','active');
				
                $Page = $Page->orderBy('mr_page.id','desc');
		if($limit !=''){
			$Page = $Page->paginate($limit);
		}else{
			$Page = $Page->get();
		}
        
        return $Page;
    }

	function getPageDetails($Blogid){
        $Page = DB::table('mr_blog')
                            ->select('mr_page.id', 'mr_page.title', 'mr_page.url','mr_page.category','mr_page.description','mr_page.meta_description', 'mr_page.meta_keywords','mr_page.status')
							
                            ->where('mr_page.url',$Blogid)
							->where('mr_page.status','active')
                            ->get();
        return $Page;
    }



	function getSetting(){
        $Setting= DB::table('mr_setting')
                            ->select('id', 'name', 'slug','value')
                            ->get();
        return $Setting;
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
       DB::table($TableName)->where('report_id',$ReportId)->whereNotIn('id',$ArrData)->delete();
    }
	function getData($TableName, $WhrArr,$OrderBy=''){
        $Res= DB::table($TableName);
			$Res->where($WhrArr);
		if($OrderBy!='')
			$Res=$Res->orderBy($OrderBy,'asc');
                $Res = $Res->get();
		
        return $Res;
    }
	public function get_element_list($Data, $search_term='',$startpoint='', $per_page='')
    {
		$PageId = $Data['PageId'];
		$Users= DB::table('mr_page_content_details')
                ->select('*');
				if($search_term['value']!=''){
					$Users->where(function ($Users)  use ( $search_term ) {
						$Users = $Users->where('title', 'like', '%' . $search_term['value'] . '%');
				    });
				}
				$Users = $Users->where('page_id',$PageId);
				if($startpoint!='')
					$Users = $Users->offset($startpoint)->limit($per_page);
				$Users=$Users->orderBy('id','desc');
				$Users=$Users->get();	
        return $Users;
	}
	public static function getPageUrl(){
        $Categories= DB::table('mr_page')
                            ->where('status','active')
                            ->get();
        return $Categories;
    }
}
