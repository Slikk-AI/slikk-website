<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://hub.slikk.ai/img/Slikk-Icon.svg">
    @if(request()->is('learn/video'))
        <title>Slikk The Ultimate Productivity App | Videos and Tips</title>
    @else
        <title>{{ isset($meta_title) ? strip_tags($meta_title) : '' }}</title>
    @endif
    @php
    if(isset($meta_description) !=''){
        $key = strip_tags($meta_description);
    }
    @endphp

    @if(isset($meta_description) !='')
    <!-- <meta name="keywords" content="{{ $key ?? '' }}"> -->
    @endif
    @if(request()->is('learn/video'))
    <meta name="description" content="Slikk The Ultimate Productivity App | Videos and Tips">
    @else
    <meta name="description" content="{{ isset($meta_keywords) ? strip_tags($meta_keywords) : '' }}">
    @endif

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
<body onload="GenerateCaptcha();">
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
<div class="page-wrapper">
    <!-- header start-->
    @include('frontnew.layouts.includes.header-testing')
    <!-- header end-->
    <main class="main-wrapper">
        <!-- Main Content start-->
        @yield('frontnew_content')
        <!-- Main Content end-->
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