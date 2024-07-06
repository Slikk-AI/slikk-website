<style>
	.xp-authenticate-bg {
		background: url(https://www.marketsangle.com/assets/img/photos/privacy-policy.webp) !important;
		position: absolute;
		height: 100%;
		width: 100%;
		top: 0;
		background-repeat: no-repeat !important;
		background-size: cover !important;
	}
		</style>

@section('title') 
{{website_name}} - Reset Password
@endsection
@extends('admin.layouts.main')
@section('style')

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
                <div class="xp-auth-box">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center mt-0 m-b-15">
                                <a href="{{url('/')}}" class="xp-web-logo"><img src="https://www.marketsangle.com/assets/img/logo.webp"></a>
                            </h3>
                            <div class="p-3">                                
                                <form method="post" action="{{url('submit_reset_password')}}">
								@csrf
                                    <div class="text-center mb-3">
                                        <h4 class="text-black">Reset Password</h4>
                                        
                                    </div>
                                    <p class="text-muted text-center m-b-30">To reset your password.</p>
									@if(session()->has('ExpirePasswordLink'))
									<div class="xp-alert">
										<div class="alert alert-danger" role="alert">
										 {!!html_entity_decode(trans('auth.ExpirePasswordLink')) !!}
										</div>								 
									</div>
									@endif
									@if(session()->has('CorrectEmail'))
									<div class="xp-alert">
										<div class="alert alert-danger" role="alert">
										 {!!html_entity_decode(trans('auth.CorrectEmail')) !!}
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
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="Email" id="Email" onchange="return validateEmailId(this.value);" placeholder="Email" required>
										<div class="invalid-data invalid-Email"></div>
                                    </div> 
									<div class="form-group">
										<input type="password" class="form-control" name="Password" id="Password" placeholder="Password" >
										<div class="invalid-data invalid-Password"></div>
									</div>
									<div class="form-group">
										<input type="password" class="form-control" name="ConfirmPassword" id="ConfirmPassword" placeholder="Conform Password" >
										<div class="invalid-data invalid-ConfirmPassword"></div>
									</div>
									<input type="hidden" name="Code" id="Code" value="{{$Code}}">									
                                    <button type="submit" onclick="return validateData();" class="btn btn-primary btn-rounded btn-lg btn-block submit-btn">Send Email</button>
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
				if(response==0){
				$('.invalid-Email').html("{{ trans('auth.CorrectEmail') }}");
				$('.submit-btn').attr('disabled', true);
				}
				//console.log(response);
			},
		});
	}
}
function validateData(){
	var flag = false;
	$('.invalid-data').html('');
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
	
	
	if(flag)
		return false;
}
</script>
@endsection 