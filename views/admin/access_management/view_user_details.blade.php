@section('title') 
View User
@endsection
@extends('admin.layouts.main')
@section('style')
<!-- Select2 CSS -->
<link href="{{ admin_url.'assets/plugins/select2/select2.min.css' }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">View User</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Account</a></li>
        <li class="breadcrumb-item active" aria-current="page">View User</li>
      </ol>            
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">View User</h5>
                </div>
                <div class="card-body">
					
                    <form method="post" action="{{url('submit_user')}}" >
					@csrf
						<div class="form-row">
							<div class="form-group col-md-12">
							  <b>Name:</b>
							 
							 {{($user_data)?$user_data->user_name:''}}
							</div>
							<div class="form-group col-md-12">
							  <b>Password:</b>
							 
							 {{($user_data)?$user_data->password:''}}
							</div>
							<div class="form-group col-md-12">
							  <b>Tradingview Username:</b>
							 
							 {{($user_data)?$user_data->TradingviewUsername:''}}
							</div>
							<div class="form-group col-md-12">
							  <b>Email:</b>
							 
							 {{($user_data)?$user_data->email_id:''}}
							</div>
							<div class="form-group col-md-12">
							  <b>Phone Number:</b>
							 
							 {{($user_data)?$user_data->mobile_no:''}}
							</div>
							<div class="form-group col-md-12">
							  <b>Telegram Id:</b>
							 
							 {{($user_data)?$user_data->TelegramId:''}}
							</div>
							<div class="form-group col-md-12">
							  <b>Facebook Id:</b>
							 
							 {{($user_data)?$user_data->FacebookId:''}}
							</div>
						</div>
						
					  <a href="{{url('/user-management')}}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    </div>    
    <!-- End Row -->
</div>
<!-- End XP Contentbar -->
@endsection