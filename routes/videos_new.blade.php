@extends('frontend.layouts.master')
@section('content')
<script> $(document).ready(function () {
        $('video').mediaelementplayer({
            alwaysShowControls: false,
            videoVolume: 'horizontal',
            features: ['playpause', 'progress', 'volume', 'fullscreen']
        });
    }); </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#show').click(function () {
            $('.menu').toggle("slide");
        });
    });

    // new show hide code here 
    $(document).ready(function () {
        $('#show1').click(function () {
            $('.menu1').toggle("slide");
        });
    });

    // new show hide code here 
    $(document).ready(function () {
        $('#show2').click(function () {
            $('.menu2').toggle("slide");
        });
    });

</script>
<script>
    

document.addEventListener('click',toggleClass);

function toggleClass(){
  document.getElementById("play").classList.toggle('goDown');
}
</script>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>

    <div class="container2">
        <img src="img.svg" alt="Snow" style="width:100%;">

        <div class="centered">
            <div class="text-wrap">
                <h1 class="text-center  text-wrap" id="h1text">See ClickUp in action with a demo.</h1>
                <p class="text-center  text-wrap" id="p-text">Not a ClickUp user, yet? Start for free today.</p>
                <div class="text-center  text-wrap" style="    margin: 20px auto 0;">
                    <button type="button" class="button button1">Get Started</button>
                </div>
            </div>
        </div>
    </div>
    <!-- <section class="bg-image2">
        <div class="wrapper section__wrapper wrapper_1200">
            <div>
                <h1 class="text-center  text-wrap" id="h1text">See ClickUp in action with a demo.</h1>
                <p class="text-center  text-wrap" id="p-text">Not a ClickUp user, yet? Start for free today.</p>
                <div class="text-center  text-wrap" style="    margin: 20px auto 0;">
                    <button type="button" class="button button1">Get Started</button>
                </div>
            </div>
        </div>
    </section> -->

    <!-- img code end  here -->
    <!-- new code start here  -->

    <div class="container" style="padding-top: 5%;">
        <div class="text-center" style="color: #7B68EE;">USE CASE VIDEOS</div>
        <div class="text-center" id="h2-text"> Discover how ClickUp can work for you<span>.</span></div>
        <div class="row row-cols-3" style="border-radius: 60px; background-color: #f8f7fe; gap: 57px;">

            <div class="col" id="up-silde" style="width: 360px;
                background: #fff;
                box-shadow: 0 16.4034px 77.9163px rgb(123 104 238 / 10%);
                border-radius: 14px;
                height: 266px;
                margin-bottom: 42px;
                transition: .2s;
                -webkit-animation: fadein 1s;
                animation: fadein 1s;">
                <div class="embed-responsive embed-responsive-16by9" style="padding: 0 33px; width: 100%;">
                    <iframe class="embed-responsive-item" src="./big_buck_bunny_720p_1mb.mp4" allowfullscreen style="border-radius: 11px;
                    margin-top: -14px;
                    position: absolute;"></iframe>
                    <div style="position: absolute;
                     margin-top: 148px;">
                        <p style="font-size: 23px;"><b>Product Tour</b></p>
                        <p><i class="fa fa-clock-o" style="font-size: 17px;
                            padding-right: 5px;"></i>(14 mins)</p>
                    </div>
                </div>

            </div>
            <div class="col" id="up-silde" style="width: 360px;
            background: #fff;
            box-shadow: 0 16.4034px 77.9163px rgb(123 104 238 / 10%);
            border-radius: 14px;
            margin-bottom: 42px;
            height: 266px;
            transition: .2s;
            -webkit-animation: fadein 1s;
            animation: fadein 1s;">
                <div class="embed-responsive embed-responsive-16by9" style="padding: 0 33px; width: 100%;">
                    <iframe class="embed-responsive-item" src="./big_buck_bunny_720p_1mb.mp4" allowfullscreen style="border-radius: 11px;
                margin-top: -14px;
                position: absolute;"></iframe>
                    <div style="position: absolute;
                 margin-top: 148px;">
                        <p style="font-size: 23px;"><b class="text-wrap">Team Member Day in the Life</b></p>
                        <p><i class="fa fa-clock-o" style="font-size: 17px;
                        padding-right: 5px;"></i>(5 mins)</p>
                    </div>
                </div>

            </div>
            <div class="col" id="up-silde" style="width: 360px;
        background: #fff;
        box-shadow: 0 16.4034px 77.9163px rgb(123 104 238 / 10%);
        border-radius: 14px;
        margin-bottom: 42px;
        height: 266px;
        transition: .2s;
        -webkit-animation: fadein 1s;
        animation: fadein 1s;">
                <div class="embed-responsive embed-responsive-16by9" style="padding: 0 33px; width: 100%;">
                    <iframe class="embed-responsive-item" src="./big_buck_bunny_720p_1mb.mp4" allowfullscreen style="border-radius: 11px;
            margin-top: -14px;
            position: absolute;"></iframe>
                    <div style="position: absolute;
             margin-top: 148px;">
                        <p style="font-size: 23px;"><b>Executive Day in the Life</b></p>
                        <p><i class="fa fa-clock-o" style="font-size: 17px;
                    padding-right: 5px;"></i>(4 mins)</p>
                    </div>
                </div>

            </div>

        </div>

        <div class="container" style=" background-color: #f7f6fe; padding: 0;">
            <div class="col col-row-3"
                style="display: inline-flex; border-radius: 60px; background-color: #f8f7fe; gap: 57px;">
                <div class="col" id="up-silde" style="width: 360px; 
            background: #fff;
            box-shadow: 0 16.4034px 77.9163px rgb(123 104 238 / 10%);
            border-radius: 14px;
            margin-bottom: 42px;
            height: 266px;
            transition: .2s;
            -webkit-animation: fadein 1s;
            animation: fadein 1s;">
                    <div class="embed-responsive embed-responsive-16by9" style="padding: 0 33px; width: 100%;">
                        <iframe class="embed-responsive-item" src="./big_buck_bunny_720p_1mb.mp4" allowfullscreen style="border-radius: 11px;
                margin-top: -14px;
                position: absolute;"></iframe>
                        <div style="position: absolute;
                 margin-top: 148px;">
                            <p style="font-size: 23px;"><b>Team Manager Day in the Life</b></p>
                            <p><i class="fa fa-clock-o" style="font-size: 17px;
                        padding-right: 5px;"></i>(6 mins)</p>
                        </div>
                    </div>
                </div>
                <div class="col" id="up-silde" style="width: 360px;
            background: #fff;
            box-shadow: 0 16.4034px 77.9163px rgb(123 104 238 / 10%);
            border-radius: 14px;
            margin-bottom: 42px;
            height: 266px;
            transition: .2s;
            -webkit-animation: fadein 1s;
            animation: fadein 1s;">
                    <div class="embed-responsive embed-responsive-16by9" style="padding: 0 33px; width: 100%;">
                        <iframe class="embed-responsive-item" src="./big_buck_bunny_720p_1mb.mp4" allowfullscreen style="border-radius: 11px;
                margin-top: -14px;
                position: absolute;"></iframe>
                        <div style="position: absolute;
                 margin-top: 148px;">
                            <p style="font-size: 23px;"><b>ClickUp for Marketing
                                </b></p>
                            <p><i class="fa fa-clock-o" style="font-size: 17px;
                        padding-right: 5px;"></i>(8 mins)</p>
                        </div>
                    </div>
                </div>
                <div class="col" id="up-silde" style="width: 360px;
            background: rgb(107, 74, 236);
            box-shadow: 0 16.4034px 77.9163px rgb(123 104 238 / 10%);
            border-radius: 14px;
            margin-bottom: 42px;
            height: 266px;
            transition: .2s;
            -webkit-animation: fadein 1s;
            animation: fadein 1s;">
                    <!-- <div class="embed-responsive embed-responsive-16by9" style="padding: 0 33px; width: 100%;">
                    <iframe class="embed-responsive-item" src="./big_buck_bunny_720p_1mb.mp4" allowfullscreen style="border-radius: 11px;
                margin-top: -14px;
                position: absolute;"></iframe> -->
                    <div style="text-align:  center;
                 margin-top: 84px; color: #ffffff;">
                        <p style="font-size: 23px; text-align: center;"><b> Looking for more?</b></p>
                        <!-- <p><i class="fa fa-clock-o" style="font-size: 17px;
                        padding-right: 5px;"></i>(4 mins)</p> -->
                        <p> Check out live & previously recorded webinars.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- new code start here -->
    <div class="container">
        <div class="row" style="background-color:#fff2f4;;">
            <div class="col" style="padding: 20px;">
                <div style="color: #fd71af;">ON-DEMAND DEMOS</div>
                <h2 style="font: 800 48px/65px Axiforma,Arial,serif;
              color: #333; width: 60%;">
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
                                <span><i class="bi bi-check" style="padding-right: 15px;">&#x2713;</i></a>You're brand
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
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample12" role="button"
                        aria-expanded="false" aria-controls="multiCollapseExample1" style="background: #ffffff;
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
                                    software and ClickUp.</li></span>
                                <span><a><i class="bi bi-check" style="padding-right: 15px;">&#x2713;</i></a>You want to
                                    learn how to get the absolute most out of the platform and customize it to your
                                    needs.</li></span>
                            </div>
                        </div>
                    </div>
                </div>
                <p>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample123" role="button"
                        aria-expanded="false" aria-controls="multiCollapseExample1" style="  background: #ffffff;
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
                                    software and ClickUp.</li></span>
                                <span><a><i class="bi bi-check" style="padding-right: 15px;">&#x2713;</i></a>You want to
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
                   
                </div>

            </div>
        </div>

    </div>
   
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



@endsection