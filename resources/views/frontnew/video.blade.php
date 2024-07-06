@extends('frontnew.layouts.layout')
@section('frontnew_content')
<style>
    .second-section-div{
        width: 700px;
        margin-left: 11rem;
        margin-top: 5rem;
    }
    .second-section-heading{
        font-size: 50px;
        display:inline-block;
    }
    .second-section-p{
        font-size: 1.125rem;
        line-height: 38px;
        /* font-weight: 600; */
        padding-bottom: 2rem;
        color: #344054;
    }
    .element-section-bg{
        background: #F3F7FE;
        margin-top: 0.2rem;
        border-radius: 50px;
        margin-left: 20px;
        margin-right: 20px;
    }
    .gl-element-bgimage{
        background: url('https://hub.slikk.ai/assets/frontend/image/bg-g.png');
        background-repeat: no-repeat;
        background-size: 1528px;
        background-size: 1500px 440px;
        margin-top: 10rem;
        margin-bottom: 3rem;
    }
    .buttons-center-banner{
        margin-left: 11rem;
        padding-bottom: 2rem;
    }
    .elements-image-div{
        /* right: 7rem!important;
        width: 42rem;
        margin-bottom: -5rem; */
        right: 10rem!important;
        width: 46rem;
        margin-bottom: -5rem;
    }
    .elemets-img{
        height:auto;
        top: 5rem;
        width: 65rem;
    }
    .elements-icon{
        width: 49px;
        height: 49px;
    }
    .elements-row{
        margin-left:2rem; 
        margin-top: 1.5rem;
    }
    .elements-col-10{
        padding: 0px; 
        border-right: 1px solid black;
        max-width: 66.333333%;
    }
    .elements-col-2{
        padding: 0px;
    }
    .elements-row-icon{
        height: 23.26px;
        width: 23.26px;
    }
    .element-listen{
        margin-top: 4rem;
        margin-bottom: 4rem;
    }
    .element-listen-bg{
        border: 3px solid transparent;
        background: linear-gradient(#F3F7FE, #F3F7FE) padding-box, linear-gradient(to right, #71147E, #F99807, #F11170) border-box;
        border-radius: 50px;
    }
    .element-listen-left-div{
        margin-left: -3rem;
        width:50%;
    }
    .element-listen-image-div{
        right: 0.2rem!important;
        width: 46rem;
        margin-bottom: -5rem;
        margin-top: 1.5rem;
    }
    .element-listen-image{
        height:auto;
        top: 2rem;
        width: 45rem;
    }
    /* .mheading-c{
        color:#71147e
    } */
    @media(max-width:999px) {
        .gl-element-bgimage{
            background: url('https://hub.slikk.ai/assets/frontend/image/bg-g.png');
            background-repeat: no-repeat;
            background-size: 1528px;
            background-size: 500px 550px;
            margin-top: 7rem;
        }
        .second-section-div{
            width: auto;
            margin-left: 0rem;
            margin-top: 2rem;
        }
        .second-section-heading{
            font-size: 2em;
            display:inline-block;
        }
        .buttons-center-banner{
            margin-left:0rem;
        }
        .element-section-bg{
            margin-left: 5px;
            margin-right: 5px;
        }
        .elemets-img{
            width: 30rem;
            padding: 1rem;
            top: 0.5rem;
        }
        .elements-image-div{
            right:15rem!important;
            margin-bottom:2rem;
        }
        .elements-col-10{
            border-right: transparent;
        }
        .element-listen-left-div{
            margin-left: 0rem;
            width: auto;
        }
        .element-listen-image{
            width: 25rem;
            top: -2.5rem;
            right: 18rem;
        }
        .margin-top-testimonial-mweb{
            margin-top:0rem;
        }
    }
</style>
<section id="widget" class="section-product-feature gl-element-bgimage">
    <div class="page-padding">
        <div class="container-large">
            <div class="padding-top padding-xhuge">
                <div class="feature_component text-center">
                    <div class="text-center second-section-div">
                            <h1 class="faq-heading second-section-heading text-bg">Slikk's Video Library</h1>
                            <p class="second-section-p">A collection of our favorite videos to help you get started, customize your setup, and rap about project management.</p>

                            <div class="buttons-center-banner buttons-wrapper">
                                <a href="#" class="button w-button watch-btnn header-btn"
                                    aria-label="open lightbox" aria-haspopup="dialog">
                                    <div>Slikk in 2 Min</div>
                                </a>
                                <a href="{{ url('https://hub.slikk.ai/book-a-demo')}}"
                                    target="_blank" class="secondary-button w-button">Book a demo</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .blogcontainer, .blogcontainer-fluid, .blogcontainer-lg, .blogcontainer-md, .blogcontainer-sm, .blogcontainer-xl {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }
    @media (min-width: 576px){
        .blogcontainer, .blogcontainer-sm {
            max-width: 540px;
        }
        .col-sm-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
        .col-sm-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }
    }
    @media (min-width: 768px){
        .blogcontainer, .blogcontainer-md, .blogcontainer-sm {
            max-width: 720px;
        }
    }
    @media (min-width: 992px){
        .blogcontainer, .blogcontainer-lg, .blogcontainer-md, .blogcontainer-sm {
            max-width: 960px;
        }
    }
    @media (min-width: 1200px){
        .blogcontainer, .blogcontainer-lg, .blogcontainer-md, .blogcontainer-sm, .blogcontainer-xl {
            max-width: 1140px;
        }
        .h3-height {
            height: 50px;
            font-size: 1rem;
        }
        .sub_all {
            height: 50px;
        }
    }
    @media(max-width:999px){
        .blogcontainer{
            margin-top: -2rem;
        }
    }
    .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl, .col-xl-auto {
        position: relative;
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
    }
    .card-box {
        margin-top: 60px;
    }
    .marb_50 {
        margin-bottom: 50px;
    }
    .post-block {
        margin-bottom: 20px;
    }
    .post-block {
        width: 360px;
        background: #fff;
        box-shadow: 0 10px 30px rgb(16 30 54 / 10%);
        border-radius: 24px;
        margin-bottom: 30px;
    }
    .post-img {
        padding: 10px;
        width: 100%;
    }
    .post-img img {
        border-radius: 10px 10px 10px 10px;
        /* height: 250px; */
        width: 100%;
        height: 196px;
    }
    .post-cont {
        padding: 20px;
    }
    .sub_all {
        text-align: left;
        font-size: 14px;
        letter-spacing: 0px;
        color: #1D2121;
        color: #344054;
        font: 400 13px/25px Satoshi,sans-serif;
    }
    .post-p {
        border-top: 1px solid #e2e2e2 !important;
        color: #344054;
        font: 400 12px/25px Satoshi,sans-serif;
    }
    .video-component {
        width: 640px;
        height: 290px;
        position: relative;
        background-color: transparent;
        border-radius: 7px;
        overflow: hidden;
        margin: 0 auto;
    }
    .video-component {
        width: 100%;
        border-radius: 16.15px;
        margin-left: auto;
        margin-right: auto;
    }
    .videos__item .video-component {
        width: 100%;
        height: 196px;
    }
    .video-component__poster {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        background-color: transparent;
        border: none;
        border-radius: 7px;
        text-indent: -999em;
        overflow: hidden;
        opacity: 1;
        transition: opacity 0.8s, height 0s;
        transition-delay: 0s, 0s;
        outline: 0;
    }
    .video-component__poster {
        background-size: contain;
        border-radius: 12px;
    }
    .video-component__poster_active {
        opacity: 0;
        height: 0;
        transition-delay: 0s, 0.8s;
    }
    .visually-hidden {
        clip: rect(0 0 0 0);
        -webkit-clip-path: inset(50%);
        clip-path: inset(50%);
        height: 1px;
        overflow: hidden;
        position: absolute;
        white-space: nowrap;
        width: 1px;
    }
    .video-component__poster:before {
        content: "";
        position: absolute;
        top: 40%;
        left: 55%;
        width: 70px;
        height: 70px;
        margin: -50px 0 0 -50px;
        background-color: #fff;
        box-shadow: 0 25px 75px #7b68ee;
        border-radius: 100%;
        transition: background-color 0.3s;
    }
    .videos__item .video-component__poster:before {
        width: 60px;
        height: 60px;
        margin: -30px 0 0 -30px;
    }
    .video-component__poster:after {
        content: "";
        background: url(https://hub.slikk.ai/assets/frontend/image/icon/play-purple.svg) no-repeat center/contain;
        position: absolute;
        top: 35%;
        left: 51%;
        width: 55px;
        height: 60px;
        margin: -23px 0 0 -27px;
    }
    .videos__item .video-component__poster:after {
        width: 34px;
        height: 60px;
        margin: -25px 0 0 -15px;
    }
    @media (min-width: 1020px){
        .videos__item .video-component {
            height: 250px;
        }
    }
</style>
<script type="text/javascript" src="{{ url('https://code.jquery.com/jquery-1.12.1.min.js')}}"></script>
<script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js')}}"></script>
<link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css')}}" />
<script>
    $(document).ready(function ($) {
        $(function() {
            $('.popup-youtube, .popup-vimeo').magnificPopup({
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        });
    });
</script>
<div class="blogcontainer">
    <div class="row">
        <div class="col-sm-12">
            <div class="row marb_50 card-box">
            <?php 
                if(!empty($videoList->items)){ 
                    foreach($videoList->items as $item){ 
                        if(isset($item->id->videoId)){ 
            ?>
                <div class="col-sm-4">
                    <div class="post-block" style="padding-bottom: 20px;">
                        <div class="post-img base-font-family">
                            <div class="video-component" style="background-color: transparent;">
                                <a
                                    href="https://www.youtube.com/watch?v=<?php echo $item->id->videoId; ?>"
                                    class="popup-youtube video-component__poster video-component__poster_active"
                                    style="background-image: url('https://img.youtube.com/vi/{{$item->id->videoId}}/0.jpg'); opacity: 1; height: 100%; background-color: transparent; border: 0; border-radius: 0; background-position: top center; outline: 0;"
                                >
                                    <span class="visually-hidden">Play video.</span>
                                </a>
                            </div>
                        </div>
                        <div class="post-cont base-font-family">
                            <h1 class="post-title base-font-family h3-height" style="text-align: left; padding-bottom: 0px;">
                                <a>
                                    {{$item->snippet->title}}
                                </a>
                            </h1>
                        </div>
                    </div>
                </div>
                <?php 
                                } 
                                    } 
                                }else{ 
                                    echo '<p class="error">'.$apiError.'</p>'; 
                                }
                 ?>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.faq-div-border').click(function() {
        $(this).children('.row').addClass('q');
        $(this).children('.faq-p').removeClass('display');
        $(this).find('.fa-plus').addClass('display');
        $(this).find('.fa-minus').removeClass('display');
        $(this).find('.fa-minus').addClass('act');
    });
    });
    $(document).ready(function() {
        $('.fa-minus').click(function() {
            setTimeout(function(){
                //alert("ok");
                $('.fa-minus').addClass('display');
                $('.fa-plus').removeClass('display');
                $('.faq-p').addClass('display');
                //$(this).next('faq-p').addClass('display');
                //$(this).parent().siblings('.faq-p').addClass("display");
                //$(this).closest('.q').siblings('.faq-p').addClass('display');
                //$(this).find('.faq-p').addClass('display');
                    //$(this).find('.fa-plus').removeClass('display');
                    // $(this).find('.fa-minus').addClass('display');
                    // $(this).find('.fa-minus').removeClass('act');
            },1000);
    });
    });
</script>
<script>
    $(document).ready(function() {
    $('#product-header').click(function() {
    $('.product-menu').addClass('prod-menu');
    });
    });
    $(document).ready(function() {
    $('#learn-header').click(function() {
    $('.learn-menu').addClass('prod-menu');
    });
    });
    $(document).mouseup(function (e) {
        $('.product-menu').removeClass('prod-menu');
    });
    $(document).mouseup(function (e) {
        $('.learn-menu').removeClass('prod-menu');
    });
</script>
@endsection