<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	public function get_list($search_term = '', $startpoint = '', $per_page = '')
	{
		$Users = DB::table('mr_blog')
			->select('mr_blog.title', 'mr_blog.id', 'mr_blog.url', 'mr_categories.slug')
			->join('mr_categories', 'mr_blog.category_id', '=', 'mr_categories.id', 'left');
		if ($search_term['value'] != '') {
			$Users->where(function ($Users)  use ($search_term) {
				$Users = $Users->where('mr_blog.title', 'like', '%' . $search_term['value'] . '%')
					->orWhere('mr_blog.url', 'LIKE', '%' . $search_term['value'] . '%');
			});
		}
		if ($startpoint != '')
			$Users = $Users->offset($startpoint)->limit($per_page);
		$Users = $Users->orderBy('mr_blog.id', 'desc');
		$Users = $Users->get();
		return $Users;
	}
	function getAllBlog($limit = '')
	{

		$Blog = DB::table('mr_blog')
			->select('mr_blog.id', 'mr_blog.title', 'mr_blog.publish_date', 'mr_blog.description', 'mr_blog.meta_title', 'mr_blog.meta_description', 'mr_blog.meta_keywords', 'mr_blog.url', 'mr_blog.image_path', 'mr_categories.category_name', 'mr_categories.slug', 'mr_blog.category_id')
			->join('mr_categories', 'mr_blog.category_id', '=', 'mr_categories.id', 'left')
			->where('mr_blog.status', 'active');
		// if ($FilterCategory != '')
			//$Blog = $Blog->where('mr_blog.category_id',$FilterCategory);
			$Blog = $Blog->orderBy('mr_blog.id', 'desc');
		if ($limit != '') {
			$Blog = $Blog->paginate($limit);
		} else {
			$Blog = $Blog->get();
		}

		return $Blog;
	}


	function getList_cat($FilterCategory = ''){

		 //	print_r($FilterCategory);
 //exit();

		$Blog_cat = DB::table('mr_categories')
		->select('mr_categories.id')
		//->join('mr_categories', 'mr_blog.category_id', '=', 'mr_categories.id', 'left');
		->where('mr_categories.category_name', $FilterCategory);
	
		$Blog_cat = $Blog_cat->get();
// 	print_r($FilterCategory);
// exit();
	return $Blog_cat;

	}

	function getAllBlog_cat($limit = '', $FilterCategory = '')
	{
		// print_r($FilterCategory);
		// exit();
		
		$Blog = DB::table('mr_blog')
			->select('mr_blog.id', 'mr_blog.title', 'mr_blog.publish_date', 'mr_blog.description', 'mr_blog.meta_title', 'mr_blog.meta_description', 'mr_blog.meta_keywords', 'mr_blog.url', 'mr_blog.image_path', 'mr_categories.category_name','mr_categories.slug', 'mr_blog.category_id')
			->join('mr_categories', 'mr_blog.category_id', '=', 'mr_categories.id', 'left');
			//->where('mr_blog.status', 'active');
		if ($FilterCategory != '')
			$Blog = $Blog->where('mr_blog.category_id', $FilterCategory);
		$Blog = $Blog->orderBy('mr_blog.id', 'desc');
		if ($limit != '') {
			$Blog = $Blog->paginate($limit);
		} else {
			$Blog = $Blog->get();
		}

		return $Blog;
	}
	function getPopularBlogs($limit = '')
	{
		//DB::enableQueryLog();
		$Categories = DB::table('mr_blog')
		->select('mr_blog.title', 'mr_blog.id', 'mr_blog.url','mr_blog.image_path','mr_blog.publish_date', 'mr_categories.slug')
		->join('mr_categories', 'mr_blog.category_id', '=', 'mr_categories.id', 'left')
			//->select('id', 'title', 'url', 'publish_date', 'publish_date', 'image_path')
			->where('mr_blog.status', 'active')
			//->where('feature',1)
			->orderBy('id', 'desc');
		if ($limit != '')
			$Categories = $Categories->limit($limit);
		$Categories = $Categories->get();
		//dd(DB::getQueryLog());
		return $Categories;
	}
	function getBlogDetails($Blogid)
	{
		$Blog = DB::table('mr_blog')
			->select('mr_blog.id', 'mr_blog.title', 'mr_blog.url', 'mr_blog.publish_date', 'mr_blog.description', 'mr_blog.meta_title', 'mr_blog.meta_description', 'mr_blog.meta_keywords', 'mr_blog.image_path', 'mr_categories.category_name', 'mr_blog.category_id', 'mr_blog.status')
			->join('mr_categories', 'mr_blog.category_id', '=', 'mr_categories.id', 'left')
			->where('mr_blog.url', $Blogid)
			->where('mr_blog.status', 'active')
			->get();
		return $Blog;
	}

	function getBlogDetails_preview($Blogid)
	{
		$Blog = DB::table('mr_blog')
			->select('mr_blog.id', 'mr_blog.title', 'mr_blog.url', 'mr_blog.publish_date', 'mr_blog.description', 'mr_blog.meta_title', 'mr_blog.meta_description', 'mr_blog.meta_keywords', 'mr_blog.image_path', 'mr_categories.category_name', 'mr_blog.category_id', 'mr_blog.status')
			->join('mr_categories', 'mr_blog.category_id', '=', 'mr_categories.id', 'left')
			->where('mr_blog.url', $Blogid)
			//->where('mr_blog.status','active')
			->get();
		return $Blog;
	}

	function getSetting()
	{
		$Setting = DB::table('mr_setting')
			->select('id', 'name', 'slug', 'value')
			->get();
		return $Setting;
	}

	function getList($TableName, $ColumnId = '', $ColumnValue = '', $OrderBy = '')
	{
		$Res = DB::table($TableName);
		if ($ColumnValue != '')
			$Res->where($ColumnId, $ColumnValue);
		if ($OrderBy != '')
			$Res = $Res->orderBy($OrderBy, 'asc');
		$Res = $Res->get();

		return $Res;
	}

	function deleteDataBySectionId($TableName, $ReportId, $ArrData)
	{
		DB::table($TableName)->where('report_id', $ReportId)->whereNotIn('id', $ArrData)->delete();
	}
	function getData($TableName, $WhrArr, $OrderBy = '')
	{
		$Res = DB::table($TableName);
		$Res->where($WhrArr);
		if ($OrderBy != '')
			$Res = $Res->orderBy($OrderBy, 'asc');
		$Res = $Res->get();

		return $Res;
	}
}
