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
{{website_name}} - Forgot Password
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
                                <form method="post" action="{{url('submit_forgot_data')}}">
								@csrf
                                    <div class="text-center mb-3">
                                        <h4 class="text-black">Forgot Password</h4>
                                        <p class="text-muted">Remember Password? <a href="{{url('/')}}">Sign In</a> Here</p>
                                    </div>
                                    <p class="text-muted text-center m-b-30">We’ll send you instructions via email to help you reset your password.</p>
									@if(session()->has('ForgotEmail'))
									<div class="xp-alert">
										<div class="alert alert-success" role="alert">
										 {!!html_entity_decode(trans('auth.ForgotEmail')) !!}
										</div>								 
									</div>
									@endif
									@if(session()->has('InvalidEmail'))
									<div class="xp-alert">
										<div class="alert alert-danger" role="alert">
										{{trans('auth.InvalidEmail')}}
										</div>								 
									</div>
									@endif
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="Email" id="Email" placeholder="Email" required>
										<div class="invalid-data invalid-Email"></div>
                                    </div>                          
                                    <button type="submit" onclick="return validateData();" class="btn btn-primary btn-rounded btn-lg btn-block">Send Email</button>
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