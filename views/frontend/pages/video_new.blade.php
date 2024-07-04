@extends('frontend.layouts.master')
@section('content')
<style>
.banner-row {
    align-items: center;
    padding: 15px 0;
}

.bnnr-bttn {
    background: #5433FF;
    color: #fff;
}
.get-started {
    text-align: center;
}
.bnnr-bttn:hover {
    background: transparent;
    border: 1px solid #5433ff;
}
.bg-image2 {
    content: '';
    display: block;
    /* position: absolute;
    background: url(./img.svg) no-repeat top center/1700px 460px; */
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}


#h1text {
    text-align: center;
    color: #fff;
    margin-top: 50px;
}

#p-text {
    color: #fff;
    font-size: 14px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
}

#b-text {
    background: #fff;
    box-shadow: 0 10px 45px rgb(75 64 143 / 50%);
    color: #8b3af5;
    margin: 20px auto 0;
}

.button {
    background-color: #8b3af5;
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
    border-radius: 9px;
}

.button1 {
    background: #fff;
    box-shadow: 0 10px 45px rgb(75 64 143 / 50%);
    color: #8b3af5;
}

.button1:hover {
    background-color: #8b3af5;
    color: white;
}

.container2 {
    position: relative;
    text-align: center;
    color: white;
}

.slikk-banner-logo img {
    width: 200px;
    height: 130px;
}

.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

#h2-text {
    font: 800 48px/65px Axiforma, Arial, serif;
    color: #333;
    padding-bottom: 61px;
}

/* video play code  */

.button-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

#up-silde {
    position: relative;
    top: 0;
    transition: top ease 0.5s;
}

#up-silde:hover {
    top: -10px;
}

#td-video {
    width: 360px;
    background: #fff;
    box-shadow: 0 16.4034px 77.9163px rgb(123 104 238 / 10%);
    border-radius: 14px;
    height: 191px;
    margin-bottom: 42px;
    transition: .2s;
    -webkit-animation: fadein 1s;
    animation: fadein 1s;
}

#td-video:hover {
    margin-top: -10px;
}

/* /* this is vidwo play  */

svg#play {
    width: 200px;
    margin: 120px auto;
    display: block;
    cursor: pointer;
    transform-origin: 50% 50%;
}

svg#play #triangle {
    fill: rgba(22, 22, 22, 0);
    transition: 500ms;
    transform-origin: 50% 50%;
}

svg#play:hover #triangle {
    fill: #A3CD3A;
    transform-origin: 50% 50%;
}

svg #lineOne,
svg #lineTwo {
    transform-origin: 50% 50%;
    transition: 1s;
}

svg:hover #lineOne {
    transform: rotate(260deg);
    -webkit-transform: rotate(260deg);
    -moz-transform: rotate(260deg);
    -o-transform: rotate(260deg);
    transform-origin: 50% 50%;
}

svg:hover #lineTwo {
    transform: rotate(-450deg);
    transform-origin: 50% 50%;
}

.embed-responsive-16by9::before {
    padding: 0 !important;
}

/* adjust your icon size, add different breakpoints as needed */
/* @media screen and (max-width: 600px) {
  .video-wrap .play-btn {
    width: 70px;
    height: 70px;
  }
} */
.video-component__wrapper{
    padding: 0 33px;
    width: 100%;
}
.video-component{
    width: 100%;
    height: 197px;
    top: -40px;
    margin-bottom: -40px;
    border-radius: 16.15px;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    overflow: hidden;
    margin: 0 auto;
}
.video-component__poster {
    background-size: contain;
    transition-delay: 0s,.8s;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    transition: opacity .8s,height 0s;
    text-indent: -999em;
    overflow: hidden;
}
.video-component__poster:before {
    width: 63px;
    height: 63px;
    margin: -31px 0 0 -31px;
}
.video-component__poster:before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100px;
    height: 100px;
    margin: -50px 0 0 -50px;
    background-color: #fff;
    box-shadow: 0 25px 75px #7b68ee;
    border-radius: 100%;
    transition: background-color .3s;
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
.video-component__poster:after {
    width: 34px;
    height: 60px;
    margin: -25px 0 0 -15px;
}
.video-component__poster:after {
    content: '';
    background: url(https://slikk.ai/img/play-purple.svg) no-repeat center/contain;
    position: absolute;
    top: 50%;
    left: 50%;
    width: 57px;
    height: 60px;
    margin: -23px 0 0 -27px;
}
.cu-usecase-videos__content {
    padding: 30px 33px 33px 33px;
}
.cu-usecase-videos__title {
    font: 700 29px/1.3 Axiforma,Arial,serif;
    color: #292d34;
    margin-bottom: 15px;
}
.cu-usecase-videos__time {
    color: #292d34;
    background: url(https://slikk.ai/img/time.svg) no-repeat top left/20px 20px;
    padding-left: 26px;
    font: 400 14px/25px Axiforma,Arial,serif;
}
.cu-usecase-videos__item {
    width: 360px;
    background: #fff;
    box-shadow: 0 16.4034px 77.9163px rgb(123 104 238 / 10%);
    border-radius: 14px;
    margin-bottom: 42px;
    transition: .2s;
    -webkit-animation: fadein 1s;
    animation: fadein 1s;
}
         /* popup video player code start here  */ /********************************
            
        */
        .popup__overlay {
  display: none;
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  /* background: rgba(4, 174, 255, 0.95); */
  text-align: center;
  z-index: 100;
}

.popup__overlay:after {
  display: inline-block;
  height: 100%;
  width: 0;
  vertical-align: middle;
  content: "";
}

.popup {
    margin-top: 140px;
  display: inline-block;
  position: relative;
  width: 100%;
  height: 100%;
  max-width: 640px;
  max-height: 480px;
  /* padding: 20px;
  border: 1px solid black;
  background: #14008a; */
  color: white;
  border-radius: 24px;
  vertical-align: middle;
  box-shadow: rgb(0 0 0) 0px 54px 55px, rgb(0 0 0 / 24%) 0px -12px 30px, rgb(0 0 0 / 45%) 0px 4px 6px, rgb(0 0 0 / 17%) 0px 12px 13px, rgb(0 0 0 / 31%) 0px -3px 5px;
  
}

.popup-form__row {
  margin: 1em 0;
}

.popup__close {
 display: block;
    position: absolute;
    top: 22px;
    right: -12px;
    /* width: 12px; */
    /* height: 5px; */
    padding: 17px;
    padding-top: 0px;
    cursor: pointer;
    text-align: center;
    font-size: 42px;
    line-height: 12px;
    color: #f00;
    text-decoration: none;
    font-weight: bold;
}

iframe {
  width: 100%;
  height: 100%;
  outline: 1px solid #00adff1f;
  border-radius: 20px;
}
.cu-usecase-videos__list{
    margin-top: 110px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 100%;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    gap: 30px;
    margin-bottom: -42px;
}
@media (min-width:1020px){
    .bannerimg{
        width:100%;
    }
    .culist{
        border-radius: 60px; background-color: #f8f7fe; gap: 67px; padding: 25px;display: flex;-webkit-box-pack: center;justify-content: center;width: 100%;flex-wrap: wrap;gap: 30px;
    }
}
@media (max-width:999px){
    .bannerimg{
        display:none;
    }
    .bannermobimage{
        background: transparent url(https://slikk.ai/img/Group914.png) 0% 0% no-repeat padding-box;
    opacity: 1;
    background-size: cover;
    background-position: bottom;
    min-height: 600px;
    }
    .culist{
        margin-top: 60px;
        justify-content: space-evenly;
        display: flex;
        -webkit-box-pack: center;
            width: 100%;
            flex-wrap: wrap;
        gap: 30px;
        margin-bottom: -42px;
        border-radius: 60px;
         background-color: #f8f7fe;
          padding: 25px;
    }
    .pdb{
        padding-bottom:15%;
    }
}
</style>
<!-- <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Bootstrap demo</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/mediaelement-and-player.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head> -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script> -->

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />

    <div class="container2">
        <img src="https://slikk.ai/img/Group914.png" alt="Snow" class="bannerimg display">
        <div class="bannermobimage">
        <div class="centered">
            <div class="text-wrap">
                <h1 class="text-center  text-wrap" id="h1text">See Slikk in action with a demo.</h1>
                <p class="text-center  text-wrap" id="p-text">Not a Slikk user, yet? Start for free today.</p>
                <div class="text-center  text-wrap" style="    margin: 20px auto 0;">
                    <button type="button" class="button button1">Get Started</button>
                </div>
            </div>
        </div>
        </div>
    </div>


    <!-- img code end  here -->
    <!-- new code start here  -->


    <div class="container pdb" style="padding-top: 5%;">
        <!-- <div class="text-center" style="color: #7B68EE;">USE CASE VIDEOS</div> -->
        <div class="text-center" id="h2-text"> Discover how Slikk can work for you<span>.</span></div>
        <div class="row culist">
           
            <?php 
                    if(!empty($videoList->items)){ 
                        foreach($videoList->items as $item){ 
                            if(isset($item->id->videoId)){ 
                                ?>
            <div class="cu-usecase-videos__item">
                <div class="video-component__wrapper">
                    <div class="video-component" style="background-color: transparent;">
                        <a href="https://www.youtube.com/watch?v=<?php echo $item->id->videoId; ?>"  class="popup-youtube video-component__poster video-component__poster_active" style="background-image: url('https://img.youtube.com/vi/{{$item->id->videoId}}/0.jpg');opacity: 1;height: 100%;background-color: transparent;border: 0;border-radius: 0;background-position: top center;outline: 0;"><span class="visually-hidden">Play video.</span></a>
                    </div>
                </div>
                <div class="cu-usecase-videos__content">
                <div class="cu-usecase-videos__title">{{$item->snippet->title}}</div>
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
    <!-- new code start here -->

      <!-- pop script code  -->
      <script>
$(function() {
    $('.popup-youtube, .popup-vimeo').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
});
</script>


<!-- popup script end here  -->
    <!-- <div class="container">
            <div class="row" style="background-color: #f4f4f4;">
                <div class="col" style="padding: 20px;">
                    <div style="color: #fd71af;">ON-DEMAND DEMOS</div>
                    <h2 style="font: 800 48px/65px Axiforma,Arial,serif;
              color: #333; width: 63%;">
                        Start with a quick tutorial.
                    </h2>

                    <p>
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button"
                            aria-expanded="false" aria-controls="multiCollapseExample1" style="  background: #ffffff;
                        width: 80%;
                        margin: 20px;
                        text-align: left;
                        color: black; border: none; ">01 BEGNNERS</a>
                    </p>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample1" style="margin-top: -36px;
                        width: 80%;
                        margin-left: 20px;">
                                <div class="card card-body">
                                    <span><i class="bi bi-check" style="padding-right: 15px;">&#x2713;</i></a>You're
                                        brand
                                        new to project management software.</li></span>
                                    <span><a><i class="bi bi-check" style="padding-right: 15px;">&#x2713;</i></a>you're
                                        coming from handwritten notes, emails, and
                                        spreadsheets
                                        to manage your tasks.</li></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p>
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample12"
                            role="button" aria-expanded="false" aria-controls="multiCollapseExample1" style="background: #ffffff;
                        width: 80%;
                        margin: 20px;
                        text-align: left;
                        color: black; border: none;
                        ">02 Intermediate</a>
                    </p>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample12" style="margin-top: -36px;
                        width: 80%;
                        margin-left: 20px;">
                                <div class="card card-body">
                                    <span><i class="bi bi-check" style="padding-right: 15px;">&#x2713;</i></a>You're
                                        experienced with project management
                                        software and SlikkUp.</li></span>
                                    <span><a><i class="bi bi-check" style="padding-right: 15px;">&#x2713;</i></a>You
                                        want to
                                        learn how to get the absolute most out of the platform and customize it to your
                                        needs.</li></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample123"
                            role="button" aria-expanded="false" aria-controls="multiCollapseExample1" style="  background: #ffffff;
                        width: 80%;
                        margin: 20px;
                        text-align: left;
                        color: black; border: none;
                       ">03 Advanced</a>
                    </p>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample123" style="margin-top: -36px;
                        width: 80%;
                        margin-left: 20px;">
                                <div class="card card-body">
                                    <span><i class="bi bi-check" style="padding-right: 15px;">&#x2713;</i></a>You're
                                        experienced with project management
                                        software and SlikkUp.</li></span>
                                    <span><a><i class="bi bi-check" style="padding-right: 15px;">&#x2713;</i></a>You
                                        want to
                                        learn how to get the absolute most out of the platform and customize it to your
                                        needs.</li></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="embed-responsive embed-responsive-16by9" style="margin: 22px;">
                        <iframe class="embed-responsive-item" src="./big_buck_bunny_720p_1mb.mp4" allowfullscreen style="    width: 100%;
                    height: 359px;"></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/DPtrXNrtTQQ"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen style="border-radius: 11px;
                    margin-top: -14px;
                    width: 86%;
                    position: absolute;"></iframe>
                    </div>

                </div>
            </div>

        </div> -->


    <!-- <div class="col-6">
    <svg id="play"  viewBox="0 0 163 163" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"="0px">
    
        <g fill="none">
            <g  transform="translate(2.000000, 2.000000)" stroke-width="4">
                <path d="M10,80 C10,118.107648 40.8923523,149 79,149 L79,149 C117.107648,149 148,118.107648 148,80 C148,41.8923523 117.107648,11 79,11" id="lineOne" stroke="#A5CB43"></path>
                <path d="M105.9,74.4158594 L67.2,44.2158594 C63.5,41.3158594 58,43.9158594 58,48.7158594 L58,109.015859 C58,113.715859 63.4,116.415859 67.2,113.515859 L105.9,83.3158594 C108.8,81.1158594 108.8,76.6158594 105.9,74.4158594 L105.9,74.4158594 Z" id="triangle" stroke="#A3CD3A"></path>
                <path d="M159,79.5 C159,35.5933624 123.406638,0 79.5,0 C35.5933624,0 0,35.5933624 0,79.5 C0,123.406638 35.5933624,159 79.5,159 L79.5,159" id="lineTwo" stroke="#A5CB43"></path>
            </g>
        </g>
    </svg>
    </div> -->
    <div class="container" style="   padding-top:20px; padding-bottom: 30px; background-color: #f8f7fe;
        margin-top: 12px;
    ">
        <h2 class="mb-4"> Most Viewed</h2>
        <div class="row culist">
        <div class="col-md-3" style="width: 360px;
                background: #fff;
                box-shadow: 0 16.4034px 77.9163px rgb(123 104 238 / 10%);
                border-radius: 14px;
                height: 250px;
                margin-bottom: 42px;
                transition: .2s;
                -webkit-animation: fadein 1s;
                animation: fadein 1s;">
                <div class="video-component__wrapper">
                    <div class="video-component" style="background-color: transparent;">
                        <a href="https://www.youtube.com/watch?v=mi4_8fZo6Dk"  class="popup-youtube video-component__poster video-component__poster_active" style="background-image: url('https://slikk.ai/img/youtubeimg1.jpg');opacity: 1;height: 70%;background-color: transparent;border: 0;border-radius: 0;background-position: top center;outline: 0;"><span class="visually-hidden">Play video.</span></a>
                    </div>
                </div>
                <div class="cu-usecase-videos__content" style="margin-top: -40%;">
                <p style="text-align: center;"><b>Slikk Introduction | Slikk</b></p>
                </div> 
          </div>
        <div class="col-md-3" style="width: 360px;
                background: #fff;
                box-shadow: 0 16.4034px 77.9163px rgb(123 104 238 / 10%);
                border-radius: 14px;
                height: 250px;
                margin-bottom: 42px;
                transition: .2s;
                -webkit-animation: fadein 1s;
                animation: fadein 1s;">
                <div class="video-component__wrapper">
                    <div class="video-component" style="background-color: transparent;">
                        <a href="https://www.youtube.com/watch?v=ZFNAqqEiyqA"  class="popup-youtube video-component__poster video-component__poster_active" style="background-image: url('https://slikk.ai/img/youtubeimg1.jpg');opacity: 1;height: 70%;background-color: transparent;border: 0;border-radius: 0;background-position: top center;outline: 0;"><span class="visually-hidden">Play video.</span></a>
                    </div>
                </div>
                <div class="cu-usecase-videos__content" style="margin-top: -40%;">
                <p style="text-align: center;"><b>Introduction to Slikk | Best Project Management Software</b></p>
                </div> 
          </div>
        <div class="col-md-3" style="width: 360px;
                background: #fff;
                box-shadow: 0 16.4034px 77.9163px rgb(123 104 238 / 10%);
                border-radius: 14px;
                height: 250px;
                margin-bottom: 42px;
                transition: .2s;
                -webkit-animation: fadein 1s;
                animation: fadein 1s;">
                <div class="video-component__wrapper">
                    <div class="video-component" style="background-color: transparent;">
                        <a href="https://www.youtube.com/watch?v=GD4b7m-aSdY"  class="popup-youtube video-component__poster video-component__poster_active" style="background-image: url('https://slikk.ai/img/youtubeimg1.jpg');opacity: 1;height: 70%;background-color: transparent;border: 0;border-radius: 0;background-position: top center;outline: 0;"><span class="visually-hidden">Play video.</span></a>
                    </div>
                </div>
                <div class="cu-usecase-videos__content" style="margin-top: -40%;">
                <p style="text-align: center;"><b>Your Go To Task Management Software | Slikk</b></p>
                </div> 
          </div>
            <!-- <div class="col-md-3" id="td-video">
                <iframe width="100%" height="191px" src="https://www.youtube.com/embed/mi4_8fZo6Dk"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-md-3" id="td-video">
                <iframe width="100%" height="191px" src="https://www.youtube.com/embed/mi4_8fZo6Dk"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-md-3" id="td-video">
                <iframe width="100%" height="191px" src="https://www.youtube.com/embed/mi4_8fZo6Dk"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div> -->
            <!-- <div class="cu-usecase-videos__item">
                <div class="video-component__wrapper">
                    <div class="video-component" style="background-color: transparent;">
                        <a href="https://www.youtube.com/watch?v=mi4_8fZo6Dk"  class="popup-youtube video-component__poster video-component__poster_active" style="background-image: url('https://slikk.ai/img/youtubeimg1.jpg');opacity: 1;height: 100%;background-color: transparent;border: 0;border-radius: 0;background-position: top center;outline: 0;"><span class="visually-hidden">Play video.</span></a>
                    </div>
                </div>
                <div class="cu-usecase-videos__content">
                <div class="cu-usecase-videos__title">Slikk Introduction | Slikk</div>
                </div> 
            </div>
            <div class="cu-usecase-videos__item">
                <div class="video-component__wrapper">
                    <div class="video-component" style="background-color: transparent;">
                        <a href="https://www.youtube.com/watch?v=ZFNAqqEiyqA"  class="popup-youtube video-component__poster video-component__poster_active" style="background-image: url('https://slikk.ai/img/youtubeimg1.jpg');opacity: 1;height: 100%;background-color: transparent;border: 0;border-radius: 0;background-position: top center;outline: 0;"><span class="visually-hidden">Play video.</span></a>
                    </div>
                </div>
                <div class="cu-usecase-videos__content">
                <div class="cu-usecase-videos__title">Introduction to Slikk | Best Project Management Software</div>
                </div> 
            </div>
            <div class="cu-usecase-videos__item">
                <div class="video-component__wrapper">
                    <div class="video-component" style="background-color: transparent;">
                        <a href="https://www.youtube.com/watch?v=GD4b7m-aSdY"  class="popup-youtube video-component__poster video-component__poster_active" style="background-image: url('https://slikk.ai/img/youtubeimg1.jpg');opacity: 1;height: 100%;background-color: transparent;border: 0;border-radius: 0;background-position: top center;outline: 0;"><span class="visually-hidden">Play video.</span></a>
                    </div>
                </div>
                <div class="cu-usecase-videos__content">
                <div class="cu-usecase-videos__title">Your Go To Task Management Software | Slikk</div>
                </div> 
            </div> -->
        </div>
    </div>

    <!-- bottom banner -->
    <div class="container bg-gray card my-4 shadow banner-container">
        <div class="row banner-row">
            <div class="col-md-3">
                <div class="slikk-banner-logo">
                    <img src="https://slikk.ai/img/slikk-jpg.png" alt="slikk-logo">
                </div>
            </div>
            <div class="col-md-7">
                <div class="banner-txt">
                    <h2>One Platform to Boost Productivity, Performance and Retention</h2>
                </div>
            </div>
            <div class="col-md-2">
                <div class="get-started">
                    <a href="\book-a-demo" class="btn bnnr-bttn">Get Started</a>
                </div>
            </div>
        </div>
    </div>
    <!-- bottom banner -->

    <!-- pricing services  -->
    <div class="container" style="padding-top: 60px;padding-bottom: 60px;">
        <div class="row">
            <div class="col-sm-4 card-box" style="display:flex;">
                {{-- <div class="icon"><img src="https://reportindata.com/test/img/Icon open-graph.png"></div> --}}
                {{-- <h3 class="box-title">Work & Forecasting</h3> --}}
                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p> --}}
                <p class="d-flex align-items-center"><i class="fa fa-steam-square" aria-hidden="true"
                        style="font-size:40px;color: #FFBB00;"></i></p>
                <P class="d-flex align-items-center" style="padding-left:10px;"> Free training & 24-hour support
                </P>
            </div>
            <div class="col-sm-4 card-box" style="display:flex;">
                {{-- <div class="icon"><img src="https://reportindata.com/test/img/Icon material-group-work.png"></div> --}}
                {{-- <h3 class="box-title">Collaboration Pods</h3> --}}

                <p class="d-flex align-items-center"><i class="fa fa-shield" aria-hidden="true"
                        style="font-size:40px;color: #FFBB00;"></i> </p>
                <p class="d-flex align-items-center" style="padding-left:10px;"> Serious about security & privacy
                </p>

            </div>
            <div class="col-sm-4 card-box" style="display:flex;">
                {{-- <div class="icon"><img src="https://reportindata.com/test/img/Icon metro-flow-tree.png"></div> --}}
                {{-- <h3 class="box-title">Strategic Workflows</h3> --}}

                <p class="d-flex align-items-center"><i class="fa fa-laptop" aria-hidden="true"
                        style="font-size:40px;color: #FFBB00;"></i></p>
                <p class="d-flex align-items-center" style="padding-left:10px"> Highest uptime in the last 12
                    months</p>

            </div>
        </div>
    </div>
    <!-- pricing services  -->


    </body>

    </html>



    @endsection