<style>
.xp-authenticate-bg {
    background: url(http://slikk.ai/test/img/Group914.png) !important;
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    background-repeat: no-repeat !important;
    background-size: cover !important;
}
	</style>

@section('title') 
{{website_name}} - Login
@endsection
@extends('admin.layouts.main')
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
                <div class="xp-auth-box">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <a href="{{url('/')}}" class="xp-web-logo"><img src="http://34.221.127.72/img/Slikk-Icon.svg" style="width:50px;"></a>
							</div>
							
                            <div class="p-3">
                                <form method="post" action="{{url('login_data')}}">
								@csrf
                                    <div class="text-center mb-3">
                                        <h1 class="text-black">Sign In !</h1>
                                        <p class="text-muted">New to User? <a href="{{url('/register')}}">Sign Up</a> Here</p>
                                    </div>                                        
                                 
                                    <div class="login-or">
                                        <h6 class="text-muted">OR</h6>
                                    </div>
									@if(session()->has('DeActiveAccount'))
									<div class="xp-alert">
										<div class="alert alert-danger" role="alert">
										{{trans('auth.DeActiveAccount')}}
										</div>								 
									</div>
									@endif
									@if(session()->has('AccountDeleted'))
									<div class="xp-alert">
										<div class="alert alert-danger" role="alert">
										{{trans('auth.AccountDeleted')}}
										</div>								 
									</div>
									@endif
									@if(session()->has('InvalidData'))
									<div class="xp-alert">
										<div class="alert alert-danger" role="alert">
										{{trans('auth.InvalidData')}}
										</div>								 
									</div>
									@endif
									@if(session()->has('InvalidLoginDetails'))
									<div class="xp-alert">
										<div class="alert alert-danger" role="alert">
										{{trans('auth.InvalidLoginDetails')}}
										</div>								 
									</div>
									@endif
									@if(session()->has('ResetPassword'))
									<div class="xp-alert">
										<div class="alert alert-success" role="alert">
										{{trans('auth.ResetPassword')}}
										</div>								 
									</div>
									@endif
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="Email" id="Email" placeholder="Email" required>
										<div class="invalid-data invalid-Email"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="Password" id="Password" placeholder="Password" required>
										<div class="invalid-data invalid-Password"></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-6">
                                            <!--<div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="rememberme">
                                              <label class="custom-control-label" for="rememberme">Remember Me</label>
                                            </div>  -->                              
                                        </div>
                                        <div class="form-group col-6 text-right">
                                          <label class="forgot-psw"> 
                                            <a id="forgot-psw" href="{{url('/forgot-password')}}">Forgot Password?</a>
                                          </label>
                                        </div>
                                    </div>                          
                                  <button type="submit" class="btn btn-primary btn-rounded btn-lg btn-block" onclick="return validateData();">Sign In</button>
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
<script>
function validateData(){
	var flag = false;
	$('.invalid-data').html('');
	var Email = $('#Email').val();
	var Password = $('#Password').val();
	
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
	
	
	if(flag)
		return false;
}
</script>
@endsection 