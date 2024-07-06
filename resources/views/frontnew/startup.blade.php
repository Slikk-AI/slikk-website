<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://hub.slikk.ai/img/Slikk-Icon.svg">
    <title>Startup | Slikk</title>
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
            font-size: 1.5em;
        }
        @media (max-width: 999px) {
            .h1-heading-size{
            font-size: 1.25em;
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
        .element-listen-slikk{
            margin-top:1rem;
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
                .banner{
                    height: 450px;
                }
                .margin-top-8rem-m {
                    margin-top: -2rem;
                }
                .pd-1{
                    padding:1rem;
                }
                .a-text{
                    padding: 1rem;
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
        .col-md-8{
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
            padding-right: 0px;
            padding-left: 0px;
        }
        .home-p{
            margin-left: 0%!important;
            margin-bottom: 1rem;
            width: 100%;
        }
        .div1 img {
            margin-bottom: -3rem;
            margin-top:2rem;
        }
        .div2 img {
            margin-bottom: -6rem;
            margin-top: 3rem;
        }
        .div3 img {
            margin-bottom: -8rem;
            margin-top: 3rem;
        }
        .div4 img{
            margin-bottom: -2rem;
            margin-top: 3rem;
        }
        .pde-1{
            padding:1rem;
        }
    }
    .banner {
        background: url('https://hub.slikk.ai/assets/frontend/image/icons/Banner.svg');background-color: #cccccc;
        height: 600px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative; 
    }
    .home-p p {
        color: #fff;
    }
    .margin-custom1 .button{
        background: #fff;
        color: #000;
    }
    .div1{
        margin-top: 1rem;
        background: #F3F7FE;
        padding: 2rem;
    }
    .div1 div p{
        margin-bottom: 0.5rem;
    }
    .div2{
        margin-top: 1rem;
        background: #F2F9F5;
        padding: 2rem;
    }
    .div2 div p{
        margin-bottom: 0.5rem;
    }
    .div3{
        margin-top: 1rem;
        background: rgba(237, 156, 190, 0.14);
        padding: 2rem;
    }
    .div3 div p{
        margin-bottom: 0.5rem;
    }
    .div4{
        margin-top: 1rem;
        background: rgba(240, 184, 9, 0.1);
        padding: 2rem;
    }
    .div4 div p{
        margin-bottom: 0.5rem;
    }
    .mt-2 {
        margin-top: 2rem;
    }
    .mt-1 {
        margin-top: 1rem;
    }
    .mb-2{
        margin-bottom: 2rem;
    }
    .p-1{
        padding:0.5rem
    }
    .a-text:hover p{
        color: #71147e;
    }
</style>
<header class="section-home-header banner">
    <div class="page-padding">
        <div class="padding-top padding-xxhuge">
            <div class="container-large">
                <div class="home-header_wrapper">
                    <div class="center-wrapper home-header_left-wrapper">
                        <div class="margin-top margin-small">
                            <h1 class="home-header_heading home-head" style="color:#fff;">Onboarding And Implementation</h1>
                        </div>
                        <div class="margin-vertical margin-custom1">
                            <div class="-head home-p">
                               <p>Embark on Your Slikk Onboarding Journey</p> 
                            </div>
                            <button class="button">Book a demo</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="margin-top-8rem-m">
    <div class="page-padding">
        <div class="container-large">
            <div class="padding-top padding-huge">
                <div class="row">
                    <div class="col-md-4">
                        <div class="pd-1 pde-1">
                            <a class="p-1 a-text" href="#1" id="a1">
                                <p><b>1. Setting Up Your Slikk Infrastructure</b></p>
                            </a>
                            <a class="p-1 a-text" href="#2" id="a2">
                                <p><b>2. Identifying Key User Roles and Collaborators</b></p>
                            </a>
                            <a class="p-1 a-text" href="#3" id="a3">
                                <p><b>3. Streamlined Communication</b></p>
                            </a>
                            <a class="p-1 a-text" href="#4" id="a4">
                                <p><b>4. Dive into Action</b></p>
                            </a> 
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="pd-1">
                            <h1 class="faq-heading h1-heading-size">Embark on Your Slikk Onboarding Journey</h1>
                            <p>At Slikk, we're dedicated to simplifying your team's tasks and enhancing seamless collaboration. A successful onboarding process is the key to uniting your team, and providing the clarity necessary to centralize your organization around vital work. Just as teams collaborating in Slikk experience an 80% boost in productivity and collaboration, your Slikk journey promises the same.</p>
                        </div>
                        <div id="1">
                            <h1 class="faq-heading mt-2">1. Setting Up Your Slikk Infrastructure</h1>
                            <div class="div1">
                                <p><b>Slikk's design champions flexibility, allowing you to craft your workspace with precision. Our core structure consists of:</b></p>
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 289894.svg" alt="">
                                <p><b>Projects:</b> The heart of your Slikk experience, where your entire team collaborates on tasks.</p>
                                <p><b>Pods:</b> These are the units where you can further break down your projects into smaller, manageable components.</p>
                                <p><b>Tasks:</b> The foundational elements where you track and collaborate on to-do's, complete with descriptions, assignees, statuses, and comments.</p>
                                <p>Collaborate with your team to define how to best utilize projects, pods, and tasks to ensure efficient task management.</p>
                            </div>
                        </div>
                        <div id="2">
                            <h1 class="faq-heading mt-2">2. Identifying Key User Roles and Collaborators</h1>
                            <div class="div2">
                                <p><b>Slikk provides diverse user roles to clarify responsibilities and permissions:</b></p>
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 289895.svg" alt="">
                                <p><b>Task Creator:</b> The individual responsible for initiating tasks</p>
                                <p><b>Assignee:</b> The team member tasked with completing the assigned work.</p>
                                <p><b>Collaborators:</b>  Those actively involved in a task's progress.</p>
                                <p>By clearly defining these roles within your team, you eliminate ambiguity and ensure everyone comprehends their responsibilities.</p>
                            </div>
                        </div>
                        <div id="3">
                            <h1 class="faq-heading mt-2">3. Streamlined Communication</h1>
                            <div class="div3">
                                <p><b>Slikk serves as an all-in-one platform for effective team communication. You can:</b></p>
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 289816 (1).svg" alt="">
                                <p><b>Add comments to tasks and documents,</b> ensuring discussions, requests, feedback, and approvals align with your work. Engage in real-time conversations with the Chat feature, enabling instant collaboration.</p>
                            </div>
                        </div>
                        <div class="mb-2" id="4">
                            <h1 class="faq-heading mt-2">4. Dive into Action</h1>
                            <div class="div4">
                                <p><b>To harness the full potential of Slikk, your team should dive right in. Begin by using our Quick Start template:</b></p>
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 289896.svg" alt="">
                                <ul>
                                    <li>
                                        Create a Project
                                    </li>
                                    <li>
                                        Break it down into Pods
                                    </li>
                                    <li>
                                        Assign tasks to team members
                                    </li>
                                    <li>
                                        Start timer
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        Set due dates
                                    </li>
                                    <li>
                                        Add collaborators on the Task
                                    </li>
                                    <li>
                                        Set Priority
                                    </li>
                                </ul>
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
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const changeColorDiv = document.getElementById("a1");
    const paragraph = changeColorDiv.querySelector("p");

    const div2 = document.getElementById("a2");
    const p2 = div2.querySelector("p");

    const div3 = document.getElementById("a3");
    const p3 = div3.querySelector("p");

    const div4 = document.getElementById("a4");
    const p4 = div4.querySelector("p");

    changeColorDiv.addEventListener("click", function () {
        paragraph.style.color = "#71147e";
        p2.style.color = "#344054";
        p3.style.color = "#344054";
        p4.style.color = "#344054";
    });

    div2.addEventListener("click", function () {
        p2.style.color = "#71147e";
        paragraph.style.color = "#344054";
        p3.style.color = "#344054";
        p4.style.color = "#344054";
    });

    div3.addEventListener("click", function () {
        p3.style.color = "#71147e";
        paragraph.style.color = "#344054";
        p2.style.color = "#344054";
        p4.style.color = "#344054";
    });

    div4.addEventListener("click", function () {
        p4.style.color = "#71147e";
        paragraph.style.color = "#344054";
        p2.style.color = "#344054";
        p3.style.color = "#344054";
    });
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