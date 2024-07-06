<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://hub.slikk.ai/img/Slikk-Icon.svg">
    <title>OKR | Slikk</title>
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
    <style>
        .h1-heading-size{
            font-size: 2.625em;
        }
        @media (max-width: 999px) {
            .h1-heading-size{
            font-size: 2em;
            }
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
        /* background: #F3F7FE; */
        background: linear-gradient(120deg, #D8E8F8, #fff);
        margin-top: 0.2rem;
        /* border-radius: 50px; */
        margin-left: 20px;
        margin-right: 20px;
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
        height: 20rem;
        top: 2rem;
        width: 30rem;
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
    }
</style>
<header class="section-home-header">
    <div class="page-padding">
        <div class="padding-top padding-xxhuge">
            <div class="container-large">
                <div class="home-header_wrapper">
                    <div class="center-wrapper home-header_left-wrapper">
                        <div class="margin-top margin-small">
                            <h1 class="home-header_heading home-head"><span class="text-bg text-color-purple">AI Powered Productivity & Collaboration Tool</span></h1>
                        </div>
                        <div class="margin-vertical margin-custom1">
                            <div class="-head home-p">
                               <p>Plan, Lead & Achieve faster with Slikk AI. You can now collaborate & personalizeworkspace according to your teams.</p> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="listen" class="margin-top-8rem-m section-product-feature element-listen-slikk">
    <div class="page-padding">
        <div class="container-large">
            <div class="padding-top padding-huge">
                <div class="feature_component">
                <div class="">
                        <div class="">
                            <div class="">
                                <img src="https://hub.slikk.ai/assets/frontend/image/Slikk-Logo-Blue.png" alt="" class="elements-icon-slikk">
                            </div>
                            <h1 style="color: #333;" class="h1-heading-size">Objectives & Key Results (OKRs)</h1>
                            <div class="margin-top margin-medium">
                                <p>
                                OKRs are known to be effective in driving predicted growth as they help to convert your strategic ideas into achievable steps and desired results</p>
                                <a class="button mt-4 button-color-th" style="border-radius: 6px;">
                                    Book a demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="listen" class="margin-top-8rem-m section-product-feature element-listen">
    <div class="page-padding element-section-bg">
        <div class="container-large">
            <div class="padding-top padding-huge">
                <div class="feature_component">
                <div class="layout-2-col">
                        <div class="element-listen-left-div">
                            <h1 class="faq-heading mheading-c h1-heading-size">Trusted by 100+ Startups & Enterprises</h1>
                            <div class="margin-top margin-medium">
                                <p>Supercharged 20K+ employees and their teams and still counting...</p>
                            </div>
                        </div>
                        <div class="feature_image-wrapper">
                            <div class="tab_image-wrapper element-listen-image-div">
                                    <img src="https://hub.slikk.ai/assets/frontend/image/icons/7 (1).svg" loading="lazy" width="545" alt="Illustration showing product feature" class="tab_image-1 element-listen-image">
                                    <div class=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="widget" class="section-product-feature mb-4 elements-bg-second">
    <div class="page-padding element-section-bg element-section-bg-1">
        <div class="container-large">
            <div class="padding-top padding-xhuge">
                <div class="feature_component">
                    <div class="layout-2-col is-reverse">
                        <div class="feature_image-wrapper">
                            <div class="tab_image-wrapper is-left elements-image-div">
                                    <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 289815 (1).svg" loading="lazy" width="545" alt="Illustration showing product feature" class="tab_image-1 elemets-img">
                                    <div class=""></div>
                            </div>
                        </div>
                        <div class="">
                            <h1 class="faq-heading mheading-c h1-heading-size">Objectives and Key Results Implementation Process</h1>
                            <div class="margin-top margin-medium">
                                <p>
                                Our approach to implementing OKRs has been successful in several organisations, due to our extensive experience and deep knowledge of the process. Unfortunately, according to statistics, over 90% of businesses don't apply OKRs properly.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="listen" class="margin-top-8rem-m section-product-feature elements-bg-third">
    <div class="page-padding element-section-bg">
        <div class="container-large">
            <div class="padding-top padding-huge">
                <div class="feature_component">
                <div class="layout-2-col">
                        <div class="element-listen-left-div">
                            <h1 class="faq-heading mheading-c h1-heading-size">Customer insight</h1>
                            <div class="margin-top margin-medium">
                                <p>The insights that inspires customers to switch or try your product</p>
                            </div>
                        </div>
                        <div class="feature_image-wrapper">
                            <div class="tab_image-wrapper element-listen-image-div">
                                    <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group (11).svg" loading="lazy" width="545" alt="Illustration showing product feature" class="tab_image-1 element-listen-image">
                                    <div class=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="widget" class="section-product-feature mb-4 elements-bg-fourth">
    <div class="page-padding element-section-bg element-section-bg-1">
        <div class="container-large">
            <div class="padding-top padding-xhuge">
                <div class="feature_component">
                    <div class="layout-2-col is-reverse">
                        <div class="feature_image-wrapper">
                            <div class="tab_image-wrapper is-left elements-image-div">
                                    <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group (12).svg" loading="lazy" width="545" alt="Illustration showing product feature" class="tab_image-1 elemets-img">
                                    <div class=""></div>
                            </div>
                        </div>
                        <div class="">
                            <h1 class="faq-heading mheading-c h1-heading-size">Job to be done</h1>
                            <div class="margin-top margin-medium">
                                <p>
                                Convert non-users to try or win market share from competition
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="listen" class="margin-top-8rem-m section-product-feature elements-bg-third">
    <div class="page-padding element-section-bg">
        <div class="container-large">
            <div class="padding-top padding-huge">
                <div class="feature_component">
                <div class="layout-2-col">
                        <div class="element-listen-left-div">
                            <h1 class="faq-heading mheading-c h1-heading-size">Measure and iterate</h1>
                            <div class="margin-top margin-medium">
                                <p>install regular measurement tracks to optimize your spend</p>
                            </div>
                        </div>
                        <div class="feature_image-wrapper">
                            <div class="tab_image-wrapper element-listen-image-div">
                                    <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 289843.svg" loading="lazy" width="545" alt="Illustration showing product feature" class="tab_image-1 element-listen-image">
                                    <div class=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="widget" class="section-product-feature mb-4 elements-bg-fourth">
    <div class="page-padding element-section-bg element-section-bg-1">
        <div class="container-large">
            <div class="padding-top padding-xhuge">
                <div class="feature_component">
                    <div class="layout-2-col is-reverse">
                        <div class="feature_image-wrapper">
                            <div class="tab_image-wrapper is-left elements-image-div">
                                    <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group (13).svg" loading="lazy" width="545" alt="Illustration showing product feature" class="tab_image-1 elemets-img">
                                    <div class=""></div>
                            </div>
                        </div>
                        <div class="">
                            <h1 class="faq-heading mheading-c h1-heading-size">How do we help you achieve Educating and equipping your team</h1>
                            <div class="margin-top margin-medium">
                                <p>
                                Achieving success with OKRs requires an understanding of what, why and how. Our immersive OKR masterclasses offer your team the basic principles and a strong platform to get started.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="listen" class="margin-top-8rem-m section-product-feature elements-bg-third">
    <div class="page-padding element-section-bg">
        <div class="container-large">
            <div class="padding-top padding-huge">
                <div class="feature_component">
                <div class="layout-2-col">
                        <div class="element-listen-left-div">
                            <h1 class="faq-heading mheading-c h1-heading-size">Set up Ownership</h1>
                            <div class="margin-top margin-medium">
                                <p>It is essential to have a custodian for the OKR process to ensure its successful execution. We provide training and equip the leader with the optimal techniques for introducing and carrying out OKRs within their organization</p>
                            </div>
                        </div>
                        <div class="feature_image-wrapper">
                            <div class="tab_image-wrapper element-listen-image-div">
                                    <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 289844.svg" loading="lazy" width="545" alt="Illustration showing product feature" class="tab_image-1 element-listen-image">
                                    <div class=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="widget" class="section-product-feature mb-4 elements-bg-fourth">
    <div class="page-padding element-section-bg element-section-bg-1">
        <div class="container-large">
            <div class="padding-top padding-xhuge">
                <div class="feature_component">
                    <div class="layout-2-col is-reverse">
                        <div class="feature_image-wrapper">
                            <div class="tab_image-wrapper is-left elements-image-div">
                                    <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 289845.svg" loading="lazy" width="545" alt="Illustration showing product feature" class="tab_image-1 elemets-img">
                                    <div class=""></div>
                            </div>
                        </div>
                        <div class="">
                            <h1 class="faq-heading mheading-c h1-heading-size">Define Right OKRs</h1>
                            <div class="margin-top margin-medium">
                                <p>Crafting well-defined OKRs can help improve focus, alignment, collaboration and setting priorities for your team. We provide workshops that enable founders, leaders and team members to articulate OKRs in line with the organization's goals
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="listen" class="margin-top-8rem-m section-product-feature elements-bg-third">
    <div class="page-padding element-section-bg">
        <div class="container-large">
            <div class="padding-top padding-huge">
                <div class="feature_component">
                <div class="layout-2-col">
                        <div class="element-listen-left-div">
                            <h1 class="faq-heading mheading-c h1-heading-size">Minimize RCAs.</h1>
                            <div class="margin-top margin-medium">
                                <p>With early detection of off-track OKRs it's possible to make estimations regarding the success rate at the end of every quarter. Conduct effective reviews, working sessions, weekly reviews as well as advices on how to optimize your progress.</p>
                            </div>
                        </div>
                        <div class="feature_image-wrapper">
                            <div class="tab_image-wrapper element-listen-image-div">
                                    <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 289846.svg" loading="lazy" width="545" alt="Illustration showing product feature" class="tab_image-1 element-listen-image">
                                    <div class=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="widget" class="section-product-feature mb-4 elements-bg-last">
    <div class="page-padding element-section-bg element-section-bg-1">
        <div class="container-large">
            <div class="padding-top padding-xhuge">
                <div class="feature_component">
                    <div class="layout-2-col is-reverse">
                        <div class="feature_image-wrapper">
                            <div class="tab_image-wrapper is-left elements-image-div">
                                    <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 289847.svg" loading="lazy" width="545" alt="Illustration showing product feature" class="tab_image-1 elemets-img">
                                    <div class=""></div>
                            </div>
                        </div>
                        <div class="">
                            <h1 class="faq-heading mheading-c h1-heading-size">Improvise on Learnings</h1>
                            <div class="margin-top margin-medium">
                                <p>
                                    OKR implementation is an ongoing exercise which needs to be refined and improved based on learnings each quarter. We conduct reflection sessions to recognize areas of improvement. Doing this helps us stay on top of our goals and continue to succeed
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
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