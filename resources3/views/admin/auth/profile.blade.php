@section('title') 
Profile
@endsection
@extends('admin.layouts.main')
@section('style')
<!-- Select2 CSS -->
<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Profile</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Account</a></li>
        <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
                    <h5 class="card-title text-black">Profile</h5>
                    <h6 class="card-subtitle">To update profile details.</h6>
                </div>
                <div class="card-body">
					@if(session()->has('UpdateProfile'))
					<div class="xp-alert">
						<div class="alert alert-success" role="alert">
						{{trans('auth.UpdateProfile')}}
						</div>								 
					</div>
					@endif
					
                    <form method="post" action="{{url('update_profile')}}" >
					@csrf
						<div class="form-row">
							<div class="form-group col-md-4">
							  <label for="inputEmail4">Name</label>
							  <input type="text" class="form-control" name="Username" id="Username" placeholder="Name" value="{{$User->user_name}}">
							  <div class="invalid-data invalid-Username"></div>
							</div>
							<div class="form-group col-md-4">
							  <label for="inputPassword4">Email</label>
							  <input type="email" class="form-control" name="Email" readonly id="Email" placeholder="Email" value="{{$User->email_id}}">
							  <div class="invalid-data invalid-Email"></div>
							</div>
							<div class="form-group col-md-4">
								<label for="inputState">Role</label>
								<select name="Role" class="form-control" id="Role" readonly>
									<option value="">Select Role</option>
									@if($User->role_id==1)
										<option value="1" {{ 1 == $User->role_id ? 'selected' : ''}}>Admin</option>
									@else
										@foreach($RoleList as $RList)
										<option value="{{$RList->id}}" {{ $RList->id == $User->role_id ? 'selected' : ''}}>{{$RList->name}}</option>
										@endforeach
									@endif
									
								</select>
								<div class="invalid-data invalid-Role"></div>
							</div>
						</div>
						
						<div class="form-row ">
							<div class="col-md-4 ">
								 <div class="form-group">
									<label for="MobileNo">Mobile No</label>
									<input type="MobileNo" class="form-control" name="MobileNo" id="MobileNo" placeholder="Mobile No" value="{{$User->mobile_no}}">
									<div class="invalid-data invalid-MobileNo"></div>
								</div>
							</div>
							<div class="col-md-4 ">
								 <div class="form-group">
									<label for="UserAddress">Address</label>
									<textarea class="form-control" name="UserAddress" id="UserAddress" placeholder="Address" >{{$User->user_address}}</textarea>
									<div class="invalid-data invalid-UserAddress"></div>
								</div>
							</div>
							<div class="col-md-3 ">
								<div class="form-group">
									<div class="form-check">
									  <input class="form-check-input" type="checkbox" id="Status" name="Status" value="1" {{ $User->status==1 ? 'checked' : ''}}>
									  <label class="form-check-label" for="gridCheck">
										Active
									  </label>
									</div>
								  </div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-4">
							  <label for="TelegramId">Telegram Id</label>
							  <input type="text" class="form-control" name="TelegramId" id="TelegramId" placeholder="Telegram Id" value="{{$User->TelegramId}}">
							  <div class="invalid-data invalid-TelegramId"></div>
							</div>
							<div class="form-group col-md-4">
							  <label for="FacebookId">Facebook Id</label>
							  <input type="text" class="form-control" name="FacebookId"  id="FacebookId" placeholder="Facebook Id" value="{{$User->FacebookId}}">
							  <div class="invalid-data invalid-FacebookId"></div>
							</div>
							<div class="form-group col-md-4">
							  <label for="TradingviewUsername">Tradingview Username</label>
							  <input type="text" class="form-control" name="TradingviewUsername"  id="TradingviewUsername" placeholder="Tradingview Username" value="{{$User->TradingviewUsername}}">
							  <div class="invalid-data invalid-TradingviewUsername"></div>
							</div>
						</div>
                      <button type="submit" onclick="return validateData();" class="btn btn-primary">Submit</button>
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
@section('script')
<script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/init/form-select-init.js') }}"></script>
<script>

function validateData(){
	var flag = false;
	$('.invalid-data').html('');
	var Username = $('#Username').val();
	var Email = $('#Email').val();
	var Role = $('#Role').val();
	
	if(Role==''){
		$('.invalid-Role').html("{{ trans('auth.RoleError') }}");
		$('#Role').focus();
		flag = true;
	}
	if(Email.length!=''){
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		if (reg.test(Email) == false) 
		{
		   $('.invalid-Email').html("{{ trans('auth.EmailError') }}");
			$('#Email').focus();
			flag = true;
		}
	}
	if(Email.length==''){
		$('.invalid-Email').html("{{ trans('auth.EmailError') }}");
		$('#Email').focus();
		flag = true;
	}
	if(Username.length==''){
		$('.invalid-Username').html("{{ trans('auth.NameError') }}");
		$('#Username').focus();
		flag = true;
	}
	
	if(flag)
		return false;
}
</script>
@endsection 