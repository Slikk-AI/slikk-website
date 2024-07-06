<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*************************************************
// Admin URL
**************************************************/

Route::get('/cleareverything', function () {
    $clearcache = Artisan::call('cache:clear');
    echo "Cache cleared<br>";

    $clearview = Artisan::call('view:clear');
    echo "View cleared<br>";

    $clearconfig = Artisan::call('config:cache');
    echo "Config cleared<br>";

    $cleardebugbar = Artisan::call('debugbar:clear');
    echo "Debug Bar cleared<br>";
});

Route::get('/logout', function() {
 Session::forget('user');
  if(!Session::has('user'))
   {
     return redirect('/');
   }
 });

Route::get('/public', 'HomeController@index');
/***************User****************************/
Route::get('/admin/auth', 'AuthController@index');
Route::get('/register', 'AuthController@register');
Route::get('/forgot-password', 'AuthController@forgot_password');
Route::get('/getSelectionData', 'AuthController@getSelectionData');
Route::get('/getSelectionCategoryByCompany', 'AuthController@getSelectionCategoryByCompany');
Route::get('/getSelectionUserByRegion', 'AuthController@getSelectionUserByRegion');
Route::get('/checkEmail', 'AuthController@checkEmail');
Route::get('/reset_password/{code}', 'AuthController@reset_password');
Route::post('/register_data', 'AuthController@register_data');
Route::post('/login_data', 'AuthController@login_data');
Route::post('/submit_forgot_data', 'AuthController@submit_forgot_data');
Route::post('/submit_reset_password', 'AuthController@submit_reset_password');
Route::post('/update_profile', 'AuthController@update_profile');
Route::post('/update_user', 'AuthController@update_user');
Route::post('/submit_change_profile', 'AuthController@submit_change_profile');
Route::post('/user_list', 'AuthController@user_list');
Route::get('/profile', 'AuthController@profile');
Route::get('/change_password', 'AuthController@changePassword');
Route::get('/user-management', 'AuthController@user_management');
Route::post('/deleteData', 'AuthController@deleteData');
Route::get('/edit_user/{id}', 'AuthController@edit_user');
Route::get('/view_user_details/{id}', 'AuthController@view_user_details');
Route::get('/create_user', 'AuthController@create_user');
Route::post('/submit_user', 'AuthController@submit_user');
Route::post('/set_company_id', 'AuthController@set_company_id');
Route::get('/search_employee', 'AuthController@search_employee'); 

/**************Permission***************/
Route::get('/allow_permission/{permission_name}', 'AuthController@allow_permission');
Route::get('/permission', 'AuthController@permission');
Route::get('/create_permission', 'AuthController@create_permission');
Route::get('/edit_permission/{id}', 'AuthControsaller@edit_permission');
Route::get('/update_permissions/{id}', 'AuthController@update_permissions');
Route::post('/get_permission_list', 'AuthController@get_permission_list');
Route::post('/submit_permission', 'AuthController@submit_permission');
Route::post('/delete_permission', 'AuthController@delete_permission');
Route::post('/update_permission_data', 'AuthController@update_permission_data');

/**************roles***************/
Route::get('/roles', 'AuthController@roles');
Route::get('/create_role', 'AuthController@create_role');
Route::post('/get_role_list', 'AuthController@get_role_list');
Route::post('/submit_role', 'AuthController@submit_role');
Route::get('/edit_role/{id}', 'AuthController@edit_role');


Route::get('/dashboard', 'DashboardController@index');

/**************Alerts***************/

Route::get('/alerts', 'AlertsController@index');
/**************Tools***************/

Route::get('/tools', 'ToolsController@index');
/**************Strategy***************/
Route::get('/arrange_strategy_section_sequence/{id}', 'StrategyController@arrange_strategy_section_sequence');
Route::post('/submit_strategy_section_sequence', 'StrategyController@submit_strategy_section_sequence');
Route::get('/strategy-management', 'StrategyController@index');
Route::get('/strategy-plan', 'StrategyController@strategy_plan');
Route::get('/pay-plan/{id}', 'StrategyController@pay_plan');
Route::get('/subscribe-plan/{id}', 'StrategyController@Subscribe_plan');
Route::get('/create_strategy', 'StrategyController@create_strategy');
Route::post('/get_strategy_list', 'StrategyController@get_strategy_list');
Route::post('/submit_strategy_payment', 'StrategyController@submit_strategy_payment');
Route::post('/submit_strategy_subscription', 'StrategyController@submit_strategy_subscription');
Route::post('/submit_strategy', 'StrategyController@submit_strategy');
Route::get('/edit_strategy/{id}', 'StrategyController@edit_strategy');
Route::get('/view_strategy/{id}', 'StrategyController@view_strategy');
/**************Data Uploading***************/
Route::post('/delete_data_uploading', 'MasterController@delete_data_uploading');
Route::get('/view_data_uploading_sections/{id}', 'MasterController@view_data_uploading_sections');
Route::get('/edit_data_uploading', 'MasterController@edit_data_uploading');
Route::get('/data_uploading', 'MasterController@data_uploading');
Route::post('/submit_data_uploading', 'MasterController@submit_data_uploading');
Route::post('/get_data_uploading_list', 'MasterController@data_uploading_listing');
/**************Report***************/
Route::get('/arrange_blog_section_sequence/{id}', 'BlogController@arrange_blog_section_sequence');
Route::post('/submit_blog_section_sequence', 'BlogController@submit_blog_section_sequence');
Route::get('/blog_listing', 'BlogController@blog_listing');
Route::post('/blog_list', 'BlogController@blog_list');
Route::get('/create_blog', 'BlogController@create_blog');
Route::get('/edit_blog/{id}', 'BlogController@edit_blog');
Route::post('/submit_blog', 'BlogController@submit_blog');
Route::get('/blog-detail/{slug}', 'BlogController@view_blog');


Route::get('/page_listing', 'BlogController@page_listing');
Route::post('/page_list', 'BlogController@page_list');
Route::get('/create_page', 'BlogController@create_page');
Route::get('/edit_page/{id}', 'BlogController@edit_page');
Route::post('/submit_page', 'BlogController@submit_page');
Route::post('/update_page', 'BlogController@update_page');
Route::get('/page-detail/{slug}', 'BlogController@view_page');

/*************************************************
// Frontend URL
**************************************************/
Route::get('/', 'HomeController@index');
// Route::get('/video', 'VideoController@index');
Route::get('/404', 'PageController@pagenotfound');

// Route::get('/blog/{slug?}', 'BlogController@blog');
// Route::get('/blogs/{category_id?}', 'BlogController@blogs');
//Route::get('/blog-category/{slug?}', 'BlogController@blogs_cat');
Route::get('/preview/{slug?}', 'BlogController@blog_preview');
Route::get('/blog', 'BlogController@blogs');
Route::get('/blogs/{slug?}/{id}', 'BlogController@blogs_cat');
Route::get('/blog/{category_slug}/{slug?}', 'BlogController@post_blog');

Route::get('/videos', 'BlogController@videos_new');

Route::get('/save_contact1', 'PageController@save_contact1');
Route::post('/save_contact', 'PageController@save_contact');
Route::post('/save_newsletter', 'PageController@save_newsletter');
Route::get('/getCountryTimezone', 'PageController@getCountryTimezone');
Route::post('/schedule-call', 'PageController@schedule_call');
Route::get('/join-us', 'PageController@join');
Route::get('/privacy-policy', 'PageController@privacy');
Route::get('/security', 'PageController@security');
Route::get('/terms', 'PageController@terms');
Route::get('/dummy', 'PageController@dummy');



use App\Models\Page;
$pages = Page::getPageUrl();
if(!empty($pages)) 
{
	foreach ($pages as $page)
	{
		//echo '/'.$page->url.'<br>';
	//	Route::get('/'.$page->url, ['name' => $page->url, 'uses' => 'PageController@load_page']);
    Route::get('/'.$page->category.'/'.$page->url, ['name' => $page->url, 'uses' => 'PageController@load_page']);
	}
}
/*Route::get('/about-us', 'PageController@aboutus');
Route::get('/features', 'PageController@features');
Route::get('/demo', 'PageController@demo');
Route::get('/use-cases', 'PageController@use_case');
Route::get('/pricing', 'PageController@pricing');
Route::get('/book-a-demo', 'PageController@book');*/



Route::get('/leads', 'LeadController@index');
Route::get('/export_leads', 'LeadController@export_leads');
Route::post('/submit_export_leads', 'LeadController@submit_export_leads');
Route::post('/lead_list', 'LeadController@lead_list');

Route::get('/add_content_for_page/{id}', 'PageController@add_content_for_page');
Route::get('/edit_content_for_page/{page_id}/{section_id}', 'PageController@edit_content_for_page');
Route::post('/get_element_list', 'PageController@get_element_list');
Route::get('/element_list/{id}', 'PageController@element_list');
Route::post('/submit_page_content', 'PageController@submit_page_content');
Route::get('/arrange_page_section_sequence/{id}', 'PageController@arrange_page_section_sequence');
Route::post('/submit_page_section_sequence', 'PageController@submit_page_section_sequence');

Route::get('/create_category', 'CategoryController@create_category');
Route::get('/edit_category/{id}', 'CategoryController@edit_category');
Route::post('/submit_category', 'CategoryController@submit_category');
Route::post('/category_list', 'CategoryController@category_list');
Route::get('/category_listing', 'CategoryController@category_listing');

