<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://hub.slikk.ai/img/Slikk-Icon.svg">
    <title>Remote Traning | Slikk</title>
    <meta name="keywords" content="{{ $key ?? '' }}">
    <meta name="description" content="Best Project Management Software with 360 degree visibility. Slikk's 360 degree visibility offers a detailed view of your project. Click here to know more!">

    <meta name="language" content="English">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
    <link rel="canonical" href="{{url(''.$actual_link)}}">
    <!-- stylesheet start-->
        @include('frontnew.layouts.includes.stylesheet')
    <!-- stylesheet end-->
    <link href="image/slikk-favicon.png" rel="shortcut icon" type="image/x-icon" />
    <link href="image/slikk-favicon.png" rel="apple-touch-icon" />
    <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-W24QW8T');</script>
    <!-- End Google Tag Manager -->
    <style>
        /*width*/
        ::-webkit-scrollbar {
            width: 4px;
            height: 4px;
        }

        /*thumb*/
        ::-webkit-scrollbar-thumb {
            background: rgb(94, 114, 228);
            border-radius: 10px;
        }
    </style>
</head>
<body>
<div class="global-styles w-embed">
    <style>
        .w-richtext> :first-child {
            margin-top: 0;
        }

        .w-richtext> :last-child,
        .w-richtext ol li:last-child,
        .w-richtext ul li:last-child {
            margin-bottom: 0;
        }

        .clickable-off {
            pointer-events: none;
        }

        .clickable-on {
            pointer-events: auto;
        }

        .div-square::after {
            content: "";
            display: block;
            padding-bottom: 100%;
        }

        main:focus-visible {
            outline: -webkit-focus-ring-color auto 0px;
        }

        .container-medium,
        .container-small,
        .container-large {
            margin-right: auto !important;
            margin-left: auto !important;
        }

        a {
            color: inherit;
            text-decoration: inherit;
            font-size: inherit;
        }

        .text-style-3lines {
            display: -webkit-box;
            overflow: hidden;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }

        .text-style-2lines {
            display: -webkit-box;
            overflow: hidden;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
    </style>
</div>  
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
        background: rgba(233, 243, 252, 0.45);
        /* background: linear-gradient(120deg, #D8E8F8, #fff); */
        margin-top: 0.2rem;
        /* border-radius: 50px; */
        /* margin-left: 20px;
        margin-right: 20px; */
        margin-bottom: 2rem;
        margin-top: 2rem;
    }
    .element-section-bg-1{
        background: linear-gradient(300deg, #D8E8F8, #fff);
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
        right: 14rem!important;
        width: 46rem;
        margin-bottom: -5rem;
    }
    .elemets-img{
        /* height:auto;
        top: 5rem;
        width: 65rem; */
        height: 20rem;
        top: 5rem;
        width: 35rem;
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
        border-top: 2px solid pink;
        border-right: 2px solid pink;
        margin-left: 4rem;
        margin-right: 4rem;
        border-bottom: 2px solid pink;
    }
    .element-listen-bg{
        border: 3px solid transparent;
        background: linear-gradient(#F3F7FE, #F3F7FE) padding-box, linear-gradient(to right, #71147E, #F99807, #F11170) border-box;
        border-radius: 50px;
    }
    .element-listen-left-div{
        /* margin-left: -3rem; */
        width:50%;
    }
    .element-listen-image-div{
        right: -7rem!important;
        width: 30rem;
        margin-bottom: -8rem;
        margin-top: 1rem;
    }
    .element-listen-image{
        height: 15rem;
        top: 5rem;
        width: 25rem;
    }
    .elements-icon-slikk{
        width: 120px;
        margin-bottom: 1rem;
    }
    .element-listen-slikk{
        margin-top:8rem;
        margin-bottom:4rem;
    }
    .elements-bg-second{
        border-left: 2px solid pink;
        margin-top: -4rem;
        margin-left: 4rem;
        margin-right: 4rem;
        border-bottom: 2px solid pink;
        padding-top: 1rem;
    }
    .elements-bg-third{
        border-right: 2px solid pink;
        border-bottom: 2px solid pink;
        margin-left: 4rem;
        margin-right: 4rem;
        margin-top: -1rem;
        padding-top: 2rem;
    }
    .elements-bg-fourth{
        border-left: 2px solid pink;
        margin-left: 4rem;
        margin-right: 4rem;
        border-bottom: 2px solid pink;
        padding-top: 1rem;
    }
    .elements-bg-last{
        border-left: 2px solid pink;
        margin-left: 4rem;
        margin-right: 4rem;
        padding-top: 1rem;
    }
    .mheading-c{
        float:left;
    }
    .margin-medium p{
        float:left;
    }
    .card-bgg{
        /* background: url(https://hub.slikk.ai/assets/frontend/image/icons/Rectangle 4419.svg); */
        background: #71147e;
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
            width: 20rem;
            padding: 1rem;
            top: 0.5rem;
            right: 12rem;
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
            width: 20rem;
            top: -2.5rem;
            right: 18rem;
            height: 10rem;
        }
        .margin-top-testimonial-mweb{
            margin-top:0rem;
        }
        .element-listen-slikk{
            margin-top:1rem;
        }
        .element-listen{
            margin-left: 2rem;
            margin-right: 2rem;
        }
        .elements-bg-second{
            margin-left: 2rem;
            margin-right: 2rem;
        }
        .elements-bg-third{
            margin-left: 2rem;
            margin-right: 2rem;
        }
        .elements-bg-fourth{
            margin-left: 2rem;
            margin-right: 2rem;
        }
        .elements-bg-last{
            margin-left: 2rem;
            margin-right: 2rem;
        }
    }
</style>
<div class="page-wrapper">
    <!-- header start-->
    @include('frontnew.layouts.includes.header-testing')
    <!-- header end-->
    <main class="main-wrapper">
<style>
    @media(max-width:999px){
                .tab_image-wrapper.is-left{
                    margin-top: 0rem;
                }
                .section-customers{
                    margin-top:-2rem;
                }
                .curly-img{
                    margin-left: -20rem;
                    top: auto;
                    right: auto;
                    width: 20%;
                    bottom: -36%;
                }
                .banner2{
                    height: 1600px!important;
                }
                .last-div-banner{
                    margin-top: 1rem!important;
                    height: auto!important;
                }
                .col-md-4{
                    margin-bottom: 1rem;
                }
                .col-div-padding{
                    margin-bottom: -2rem;
                }
            }
    .bottom-section .mb-2 h2{
    /* font-size: .875em;
    line-height: 1.5;
    color: #565359;
    font-weight: bold; */
    padding: 4px;
    font-size: 1.125em;
    line-height: 1.6;
    font-weight: bold;
    font-family: Satoshi,sans-serif;
    }
    .bottom-section .mb-2 p{
    padding: 5px;
    font-size: .9em;
    line-height: 1.6;
    color: #565359;
    margin-top: 8px;
    margin-bottom: 15px;
    font-family: Satoshi,sans-serif;
    }
    .bottom-section .mb-2 p a:link{
        color: blue;
    }
    .bottom-section .mb-2 p a:visited{
        color: #71147e;
    }
    .bottom-section .mb-2 a{
        color: blue
    }
    @media(min-width:1020px){
        .section-customers{
            margin-top:-4rem;
        }
        .banner-padding{
            /* padding-top: 10rem; */
            padding-left: 2rem;
            padding-right: 2rem;
            border: 1px solid #fff;
            border-radius: 0 0 10px 10px;
            box-shadow: 2px 3px 12px 2px rgba(0, 0, 0, 0.05);
        }
        .banner{
            margin-top: -6rem;
            margin-left: 7rem;
        }
        .home-head {
            margin-left: 20px;
            margin-right: 10px;
            text-align: left;
            margin-bottom: 2rem;
            font-family: Satoshi,sans-serif;
        }
        .home-p {
            text-align: left;
            width: 90%;
            /* margin-left: 5%!important; */
            margin-left: 4%!important;
            font-family: Satoshi,sans-serif;
            margin-bottom: 2rem;
        }
        .margin-custom1 a{
            margin-left: 1.5rem;
        }
        .row-div .col-md-4{
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
            padding-right: 15px;
            padding-left: 15px;
            margin-bottom: 2rem;
        }
        .card-div-last{
            margin-left: 10rem;
        }
        .col-div-padding{
            padding-right: 15px;
            padding-left: 15px;
        }
        .last-div-heading{
            margin-top: -10rem;
            margin-bottom: 2rem;
            font-size: 2.5em;
        }
    }
    .home-head{
        color: #71147e;
    }
    .banner2{
        /* background: url('https://hub.slikk.ai/assets/frontend/image/icons/Rent-A-Car-Instagram-Story-28 2.svg');
        background-color: #cccccc;
        height: 700px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative; */
        background: rgba(233, 243, 252, 0.45);
    }
    .div3{
        text-align: center;
        margin-top: 3rem;
    }
    .div3 h1{
        font-size: 2em;
    }
    .div3 p{
        margin-top: 2rem;
        color: rgba(36, 39, 41, 1)
    }
    .row-div{
        padding: 3rem;
        padding-bottom: 1rem;
    }
    .card{
        border: 1px solid rgba(0, 0, 0, 0.14);
        background: #fff;
        border-radius: 1rem;
    }
    .card-div{
        /* padding: 1rem; */
    }
    .card-heading{
        color: #fff;
        font-weight: bold;
        padding: 1rem;
        font-size: 25px;
    }
    .card-span{
        border-left: 4px solid #fff;
        margin-right: 8px;
    }
    .icon {
        width: 25px;
        height: 25px;
        margin-left: 7rem;
    }
    .text-p{
        padding: 2rem;
    }
    .div3a{
        text-align: center;
    }
    .div3a img{
        width: 8rem;
        margin-top: -1rem;
    }
    .last-div{
        padding: 3rem;
    }
    .last-div-card{
        /* background:rgba(233, 243, 252, 1); */
        padding: 2rem;
        margin-top: 4rem;
    }
    .text-div{
        padding: 1rem;
    }
    .second-section{
        margin-top: 5rem;
    }
    .third-section{
        margin-top: 5rem;
    }
    .last-div-banner{
        background:url('https://hub.slikk.ai/assets/frontend/image/icons/Vector (9).svg');
        height: 500px;
        margin-top: 15rem;
    }
    .other-div-bg{
        background:rgba(245, 249, 255, 1)
    }
    .banner1{
        background: url('https://hub.slikk.ai/assets/frontend/image/icons/banner 2.svg');
        background-color: #cccccc;
        height: 300px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        width: 114.4%;
        margin-left: -5rem;
        margin-top: -6.2rem;
    }
    .banner1-h3{
        text-align: center;
        padding-top: 6rem;
        color: #fff;
    }
    .banner-textdiv{
        padding: 2rem;
    }
    .banner1-span{
        color:#71147e;
    }
    .col-md-8{
        flex: 0 0 66.666667%;
        max-width: 66%;
    }
    .last-div-ul li{
        margin-bottom:1rem;
    }
    .icon-div{
        width: 75px;
        height: 75px;
        margin-left: 12rem;
        margin-top: 1rem;
        margin-bottom: -3rem;
    }
    .second-section-last-div{
        margin-left: 15rem;
        margin-top: 3rem;
    }
    @media screen and (width: 1517.78px), 
       screen and (height: 376.67px) {
        .banner1{
            width: 128.2%;
            margin-left: -10rem;
        }
    }
    @media(max-width:999px){
        .banner1{
            width: 100%;
            margin-left: 0px;
            margin-top: 0px;
        }
        .row-div{
            padding: 1rem;
        }
        .second-section-last-div{
            margin-left:0px;
        }
        .icon-div{
            margin-left: 8rem;
        }
        .col-md-8{
            flex: 100%;
            max-width: 100%;
        }
    }
</style>
<header class="section-home-header">
    <div class="page-padding">
        <div class="padding-top padding-xxhuge banner-padding">
            <div class="container-large">
                <div class="banner1">
                    <h1 class="banner1-h3">Slikk Remote Training</h1>
                </div>
                <div class="banner-textdiv">
                    <p>
                    <span class="banner1-span"><b>At Slikk</b></span>, we understand the importance of seamless remote training for our customers. Inspired by cutting-edge advancements in digital learning, we have crafted a comprehensive remote training solution tailored to meet the evolving needs of today's distributed workforce.
                    </p>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="widget" class="section-product-feature mb-4 banner2 third-section">
    <div class="page-padding">
        <div class="container-large">
            <div class="padding-top padding-xhuge">
                <div class="div3">
                    <h1>Benefits of Slikk's Remote Training Solution:</h1>
                </div>
                <div class="row-div">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="card-div">
                                    <div class="card-bgg">
                                        <h1 class="card-heading"><span class="card-span"></span> Increased Employee Productivity</h1>
                                    </div>
                                    <p class="text-p">By providing employees with the knowledge and skills they need to perform their jobs effectively, Slikk helps to boost productivity and reduce time spent on training and support.</p>
                                    <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 289885 (1).svg" alt="" class="icon-div">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="card-div">
                                    <div class="card-bgg">
                                        <h1 class="card-heading"><span class="card-span"></span> Reduced Training Costs</h1>
                                    </div>
                                    <p class="text-p">Slikk's centralized training platform eliminates the need for travel and instructor costs associated with traditional training methods, leading to significant cost savings.</p>
                                    <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 289884.svg" alt="" class="icon-div">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 second-section-last-div">
                            <div class="card">
                                <div class="card-div">
                                    <div class="card-bgg">
                                        <h1 class="card-heading"><span class="card-span"></span> Enhanced Employee Satisfaction</h1>
                                    </div>
                                    <p class="text-p">Slikk's engaging and personalized training experiences contribute to increased employee satisfaction and engagement, fostering a more productive and motivated workforce.</p>
                                    <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 289883.svg" alt="" class="icon-div">
                                </div>
                            </div>
                        </div>      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="listen" class="margin-top-8rem-m section-product-feature last-div-banner">
    <div class="page-padding">
        <div class="container-large">
            <div class="padding-top padding-huge">
                <h1 class="last-div-heading">Our Remote Training Offerings</h1>
                <div class="banner-padding" style="background:#fff;">
                    <div class="row">
                        <div class="col-md-8 col-div-padding">
                            <div class="last-div-card">
                                <ul class="last-div-ul">
                                    <li>
                                        <b>Interactive In-App Guidance:</b> Create interactive walkthroughs that overlay your software applications, providing step-by-step instructions to users in real-time.
                                    </li>
                                    <li>
                                        <b>Personalized Learning Paths:</b> Leverage Slikk's intelligent platform to analyze user activity and performance, creating personalized learning paths tailored to each employee's needs.
                                    </li>
                                    <li>
                                        <b>Real-Time Support:</b> Utilize Slikk's integrated chat and collaboration tools for seamless communication between trainers and employees, enabling real-time assistance and troubleshooting.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-div-padding">
                            <div class="last-div">
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 289888.svg" alt="image"> 
                            </div>
                        </div>
                    </div>
                    <p class="text-div" style="color: #71147e;">
                        At Slikk, we are committed to empowering your workforce with effective remote training solutions, designed to drive user adoption, accelerate training, and enhance productivity within your digital landscape.
                    </p>
            </div>
        </div>
    </div>
</section>
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
            },1000);
        });
    });
</script>
    </main>
    <!-- footer start-->
    @include('frontnew.layouts.includes.footer')
    <!-- footer end-->
</div>
 <!-- js start-->
 @include('frontnew.layouts.includes.js')
<!-- js end-->
<script>
        $('.watch-btnn').click(function(){
            $('#video-watch-div').show();
            $('#video-watch-div').removeClass('display');
        });
        $(document).ready(function () {
            setTimeout(function(){
            $(document).on('click','#close-frame',function(){
                $('#video-watch-div').hide();
                $('#video-watch-div').addClass('display');
            });
        },1000);
        });
</script>
<script type="text/javascript">
        $(function(){
            $('#watch-btn-mobile').click(function(){ 
                if(!$('#iframe').length) {
                        $('#iframeHolder').html('<div class="w-lightbox-backdrop" style="transition: opacity 300ms ease 0s; opacity: 1;"><div class="w-lightbox-container"><div class="w-lightbox-content"><div class="w-lightbox-view" tabindex="0" id="w-lightbox-view" style="opacity: 1;"><iframe id="iframe" src="https://www.youtube.com/embed/mi4_8fZo6Dk" width="700" height="450" class="iframe-height-mobile"></iframe></div><div class="w-lightbox-control w-lightbox-left w-lightbox-inactive" role="button" aria-hidden="true"aria-controls="w-lightbox-view" aria-label="previous image" tabindex="-1"></div><div class="w-lightbox-control w-lightbox-right w-lightbox-inactive" role="button" aria-hidden="true" aria-controls="w-lightbox-view" aria-label="next image" tabindex="-1"></div><div id="close-frame-mobile" class="w-lightbox-control w-lightbox-close" role="button" aria-label="close lightbox" tabindex="0"></div></div><div class="w-lightbox-strip" role="tablist"></div></div></div>');
                }
                $('#iframeHolder').removeClass('display');
                $('#iframeHolder').css("display","block");
            });   
        });
    $(document).ready(function () {
        setTimeout(function(){
            $(document).on('click','#close-frame-mobile',function(){
                $('#iframeHolder').hide();
                $('#iframeHolder').addClass('display');
            });
        },1000);
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
<div id="video-watch-div" class="w-lightbox-backdrop display" style="transition: opacity 300ms ease 0s; opacity: 1;">
        <div class="w-lightbox-container">
            <div class="w-lightbox-content">
                <div class="w-lightbox-view" tabindex="0" id="w-lightbox-view" style="opacity: 1;">
                    <div class="w-lightbox-frame">
                        <figure class="w-lightbox-figure"><img class="w-lightbox-img w-lightbox-image"
                                src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22940%22%20height=%22528%22/%3E"><iframe
                                class="embedly-embed w-lightbox-embed"
                                src="https://www.youtube.com/embed/mi4_8fZo6Dk"
                                width="854" height="480" scrolling="no" title="YouTube embed" frameborder="0"
                                allow="autoplay; fullscreen" allowfullscreen="true"></iframe></figure>
                    </div>
                </div>
                <div class="w-lightbox-spinner w-lightbox-hide" role="progressbar" aria-live="polite" aria-hidden="true"
                    aria-busy="false" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100"
                    aria-valuetext="Loaded image"></div>
                <div class="w-lightbox-control w-lightbox-left w-lightbox-inactive" role="button" aria-hidden="true"
                    aria-controls="w-lightbox-view" aria-label="previous image" tabindex="-1"></div>
                <div class="w-lightbox-control w-lightbox-right w-lightbox-inactive" role="button" aria-hidden="true"
                    aria-controls="w-lightbox-view" aria-label="next image" tabindex="-1"></div>
                <div id="close-frame" class="w-lightbox-control w-lightbox-close" role="button" aria-label="close lightbox" tabindex="0">
                </div>
            </div>
            <div class="w-lightbox-strip" role="tablist"></div>
        </div>
</div>
<div id="iframeHolder" class="display"></div>
</body>
</html>