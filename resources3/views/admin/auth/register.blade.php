<style>
	.xp-authenticate-bg {
		background: url(http://slikk.ai/test/assets/img/photos/privacy-policy.webp) !important;
		position: absolute;
		height: 100%;
		width: 100%;
		top: 0;
		background-repeat: no-repeat !important;
		background-size: cover !important;
	}
		</style>
		
		@section('title') 
{{website_name}} - Register
@endsection
@extends('admin.layouts.main')
@section('style')
<!-- Select2 CSS -->
<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="xp-authenticate-bg"></div>
<!-- Start XP Container -->
<div id="xp-container" class="xp-container">
    <!-- Start Container -->
    <div class="container">
        <!-- Start XP Row -->
        <div class="row vh-100 align-items-center">
            <!-- Start XP Col -->
            <div class="col-lg-12 ">
                <!-- Start XP Auth Box -->
                <div class="xp-auth-box" style="width:800px;">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center mt-0 m-b-15">
								<!--<a href="{{url('/')}}" class="xp-web-logo"><img src="https://www.marketsangle.com/assets/img/logo.webp"></a>-->
                            </h3>
                            <div class="p-3">
                                <form method="post" action="{{url('register_data')}}">
								@csrf
                                    <div class="text-center mb-3">
                                        <h4 class="text-black">Create New Account</h4>
                                        <p class="text-muted">Already have an account? <a href="{{url('/login')}}">Sign in</a> Here</p>
                                    </div>                                        
                                   
                                    <div class="login-or">
                                        <h6 class="text-muted">OR</h6>
                                    </div>
                                    @if(session()->has('RegistrationSucceessMsg'))
									<div class="xp-alert">
										<div class="alert alert-success" role="alert">
										 {!!html_entity_decode(trans('auth.RegistrationSucceessMsg')) !!}
										</div>								 
									</div>
									@endif
									@if(session()->has('EmailExistMsg'))
									<div class="xp-alert">
										<div class="alert alert-danger" role="alert">
										{{trans('auth.VaildEmailError')}}
										</div>								 
									</div>
									@endif
									<div class="row">
										<div class="col-md-6">
											 <div class="form-group">
												<input type="text" class="form-control" name="Username" id="Username" placeholder="Name" value="">
												<div class="invalid-data invalid-Username"></div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input type="email" class="form-control" name="Email" onchange="return validateEmailId(this.value);" id="Email" placeholder="Email" >
												<div class="invalid-data invalid-Email"></div>
											</div>
										</div>
										
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="password" class="form-control" name="Password" id="Password" placeholder="Password" >
												<div class="invalid-data invalid-Password"></div>
											</div>
										</div>
										<div class="col-md-6">
											 <div class="form-group">
												<input type="password" class="form-control" name="ConfirmPassword" id="ConfirmPassword" placeholder="Conform Password" >
												<div class="invalid-data invalid-ConfirmPassword"></div>
											</div>
										</div>
									</div>
									<div class="row ">
										<div class="col-md-6  ">
											 <div class="form-group">
												<input type="MobileNo" class="form-control" name="MobileNo" id="MobileNo" placeholder="Mobile No" >
												<div class="invalid-data invalid-MobileNo"></div>
											</div>
										</div>
										<div class="col-md-6  ">
											 <div class="form-group">
												<textarea class="form-control" name="UserAddress" id="UserAddress" placeholder="Address" ></textarea>
												<div class="invalid-data invalid-UserAddress"></div>
											</div>
										</div>
									</div>
									
                                   
                                    
                                   
                                    <!--<div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="terms">
                                          <label class="custom-control-label" for="terms">I Agree to Terms & Conditions of Booster</label>
                                        </div> 
                                    </div>  -->                        
                                  <input type="submit" onclick="return validateData();" class="btn btn-primary btn-rounded btn-lg btn-block submit-btn" value="Create an Account">
                                </form>
                            </div>
                        </div>
                    </div>    
                </div>
                <!-- End XP Auth Box -->
            </div>
            <!-- End XP Col -->
        </div>
        <!-- End XP Row -->
    </div>
    <!-- End Container -->
</div>
<!-- End XP Container -->
@endsection 
@section('script')
<script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/init/form-select-init.js') }}"></script>
<script>
function validateEmailId(Email){
	var Email = $('#Email').val();
	$('.submit-btn').attr('disabled', false);
	$('.invalid-Email').html("");
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if (reg.test(Email) == false) 
    {
        $('.invalid-Email').html("{{ trans('auth.EmailError') }}");
        return false;
    }
	if(Email.length!=''){
		$.ajax({
		type:"GET",
		url:"{{url('checkEmail')}}",
		data:{
			Email:Email,
			},
			success:function(response){
				if(response==1){
				$('.invalid-Email').html("{{ trans('auth.VaildEmailError') }}");
				$('.submit-btn').attr('disabled', true);
				}
				console.log(response);
			},
		});
	}
}
function validateData(){
	var flag = false;
	$('.invalid-data').html('');
	var Username = $('#Username').val();
	var Email = $('#Email').val();
	var Password = $('#Password').val();
	var ConfirmPassword = $('#ConfirmPassword').val();
	
	if(Password!=ConfirmPassword){
		$('.invalid-ConfirmPassword').html("{{ trans('auth.ConfirmPasswordError') }}");
		$('#ConfirmPassword').focus();
		flag = true;
	}
	if(ConfirmPassword.length==''){
		$('.invalid-ConfirmPassword').html("{{ trans('auth.ConfirmPasswordError') }}");
		$('#ConfirmPassword').focus();
		flag = true;
	}
	if(Password.length==''){
		$('.invalid-Password').html("{{ trans('auth.PasswordError') }}");
		$('#Password').focus();
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