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
    background: url(https://clickup.com/images/v2/play-purple.svg) no-repeat center/contain;
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
    background: url(https://clickup.com/images/icons/time.svg) no-repeat top left/20px 20px;
    padding-left: 26px;
    font: 400 14px/25px Axiforma,Arial,serif;
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
<script>
$(document).ready(function() {
    $('video').mediaelementplayer({
        alwaysShowControls: false,
        videoVolume: 'horizontal',
        features: ['playpause', 'progress', 'volume', 'fullscreen']
    });
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#show').click(function() {
        $('.menu').toggle("slide");
    });
});

// new show hide code here 
$(document).ready(function() {
    $('#show1').click(function() {
        $('.menu1').toggle("slide");
    });
});

// new show hide code here 
$(document).ready(function() {
    $('#show2').click(function() {
        $('.menu2').toggle("slide");
    });
});
</script>
<script>
document.addEventListener('click', toggleClass);

function toggleClass() {
    document.getElementById("play").classList.toggle('goDown');
}
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    <div class="container2">
        <img src="https://slikk.ai/img/Group914.png" alt="Snow" style="width:100%;">
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


    <!-- img code end  here -->
    <!-- new code start here  -->


    <div class="container" style="padding-top: 5%;">
        <!-- <div class="text-center" style="color: #7B68EE;">USE CASE VIDEOS</div> -->
        <div class="text-center" id="h2-text"> Discover how Slikk can work for you<span>.</span></div>
        <div class="row row-cols-3" style="border-radius: 60px; background-color: #f8f7fe; gap: 67px; padding: 25px;">
        <?php 
                    if(!empty($videoList->items)){ 
                        foreach($videoList->items as $item){ 
                            if(isset($item->id->videoId)){ 
                                ?>
            <div class="col-md-3" id="up-silde" style="width: 360px;
                background: #fff;
                box-shadow: 0 16.4034px 77.9163px rgb(123 104 238 / 10%);
                border-radius: 14px;
                height: auto;
                margin-bottom: 42px;
                transition: .2s;
                -webkit-animation: fadein 1s;
                animation: fadein 1s;">
                <div class="embed-responsive embed-responsive-16by9" style="padding: 0 33px; width: 100%;">
                    <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fmdoalyeAN4" allowfullscreen style="border-radius: 11px;
                    margin-top: -14px;
                    position: absolute;"></iframe> -->

                </div>
                <div>
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/<?php echo $item->id->videoId; ?>" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen style="    border-radius: 11px;"></iframe>
                    <!-- <p>{{$item->snippet->title}}</p> -->
                    <!-- <p style="font-size: 23px;"><b>Product Tour</b></p>
                    <p><i class="fa fa-clock-o" style="font-size: 17px;
                            padding-right: 5px;"></i>(14 mins)</p> -->
                </div>

            </div>
            <?php 
                            } 
                        } 
                    }else{ 
                        echo '<p class="error">'.$apiError.'</p>'; 
                    }
                ?>
            

            <div class="col-md-3" id="up-silde" style="width: 360px;
                    background: rgb(107, 74, 236);
                    box-shadow: 0 16.4034px 77.9163px rgb(123 104 238 / 10%);
                    border-radius: 14px;
                    margin-bottom: 42px;
                    height: 266px;
                    transition: .2s;
                    -webkit-animation: fadein 1s;
                    animation: fadein 1s;">
                <div class="video-component__wrapper">
                    <div class="video-component" style="background-color: transparent;">
                        <button data-button-video-component="" data-modal="wistia-video" data-iframe-src="https://fast.wistia.net/embed/iframe/zwuptn7og3" class="video-component__poster video-component__poster_active" style="background-image: url('https://clickup.com/images/videos/thumbnails/on-demand-demo/pr-tour.png');opacity: 1;height: 100%;background-color: transparent;border: 0;border-radius: 0;background-position: top center;outline: 0;"><span class="visually-hidden">Play video.</span></button>
                    </div>
                </div>
                <div class="cu-usecase-videos__content">
                    <div class="cu-usecase-videos__title">Product Tour</div>
                    <div class="cu-usecase-videos__time">(14 mins)</div>
                </div>

            </div>


        </div>
    </div>
    <!-- new code start here -->

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
        <h2> Most Viewed</h2>
        <div class="col-md-12 col-xs-12" style="display: flex;    padding-top: 20px; gap: 100px;">
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
            </div>
            <div class="col-md-3" id="td-video">
                <iframe width="100%" height="191px" src="https://www.youtube.com/embed/mi4_8fZo6Dk"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
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