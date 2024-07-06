@extends('frontnew.layouts.layout')
@section('frontnew_content')
<section class="thankyou-section">
    <div class="container-large bg-gradient">
        <div class="align-center thank-main-div">
            <!-- <div class="thank-img-div">
                <img src="image/checkmark.png" alt="">
            </div> -->
            <div class="mb-4 thank-text-div">
                <h4 class="thank-head">Thank you!</h4>
                <div class="underline-bottom"></div>
                <!-- <p>We've sent free report to your inbox so its easy to access. You can find more information on our website and social pages.</p> -->
            </div>
            <div class="row mb-4">
                <div class="col-md-6 col-md-6-thank mb-4">
                    <div class="thank_bottom_div">
                        <h6>Connect with us</h6>
                        <p>@slikk.ai</p>
                        <div class="thank-links-wrapper">
                            <a href="https://www.facebook.com/slikkprojectmanagement" target="_blank"><img src="{{ url('assets/frontend/image/facebook.png')}}" alt=""></a>
                            <a href="https://www.instagram.com/slikk.ai/" target="_blank"><img src="{{ url('assets/frontend/image/instagram.png')}}" alt=""></a>
                            <a href="https://www.linkedin.com/company/slikk-ai" target="_blank"><img src="{{ url('assets/frontend/image/linkedin.png')}}" alt=""></a>
                            <a href="https://twitter.com/Slikk_ai" target="_blank"><img src="{{ url('assets/frontend/image/twitter.png')}}" alt=""></a>
                            <!-- <a href="https://www.youtube.com/@Slikkai" target="_blank"><img src="image/youtube.png" alt=""></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md-6-thank mb-4">
                    <div class="thank_bottom_div thank-div-left">
                        <div class="mb-4 thank-btn-wrapper">
                            <img src="{{ url('assets/frontend/image/slikk-qr-code.png')}}" alt="" class="thank-img">
                            <a href="{{ url('/')}}" class="button w-button thank-a">Visit Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection