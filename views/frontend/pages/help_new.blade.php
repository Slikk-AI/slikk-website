@extends('frontend.layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
</head>
<style>
  body {
    font-family: "Open sans", sans-serif;
  }

  .img {
    position: relative;
  }

  .bottom-left {
    position: absolute;
    bottom: 8px;
    left: 16px;
  }

  .top-left {
    position: absolute;
    top: 8px;
    left: 16px;
  }

  .top-right {
    position: absolute;
    top: 8px;
    right: 16px;
  }

  .bottom-right {
    position: absolute;
    bottom: 8px;
    right: 16px;
  }

  .centered {
    position: absolute;
    top: 39%;
    text-align: center;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  /* Styles for wrapping the search box */

  .main {
    width: 100%;
    margin-top: 21px;
    /* margin: 50px auto; */
  }

  /* Bootstrap 4 text input with search icon */

  .has-search .form-control {
    padding-left: 2.375rem;
  }

  .has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 100%;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
    text-align: right;
    padding: 5px 20px;
  }

  #link {
    color: white;
    text-decoration: none;
  }

  #link1 {
    color: rgb(7, 1, 1);
    text-decoration: none;
  }

  #btn-str {
    text-decoration: none;
    color: #323338;
    font-size: 12px;
    font-weight: 400;
    padding: 2px 10px;
    border: 1px solid #595AD4;
    border-radius: 5px;
    transition: background-color 0.2s ease-out;
  }

  #td-vid {
    box-shadow: rgb(99 99 99 / 20%) 0px 2px 8px 0px;
    border-radius: 24px;
    width: 21%;
    margin-bottom: 10px;
  }

  #td-vid:hover {
    margin-top: -5px;
  }
  .btn-support {background: #5433ff;color: #fff;}

.btn-support:hover {
    background: #fff;
    border: 1px solid #000;
}
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
.mb-5{
  margin-bottom: 2.5rem!important;
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
@media (min-width:1020px){
    .bannerimg{
        width:100%;
    }
    .h2head{
      color: white;
        font-size: 50px;
        font-weight: 700;
        margin-top: 30px;
    }
    .listt{
      margin-top: 21px; display: flex; gap: 25px;
    }
    .culist{
        /*border-radius: 60px; background-color: #f8f7fe;*/ gap: 67px; padding: 25px;display: flex;-webkit-box-pack: center;justify-content: center;width: 100%;flex-wrap: wrap;gap: 30px;
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
    .h2head{
      color: white;
        font-size: 50px;
        font-weight: 700;
        margin-top: 130px;
    }
    .listt{
      margin-top: 21px; display: flex; gap: 20px;
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
        /* border-radius: 60px;
         background-color: #f8f7fe; */
          padding: 25px;
    }
}
</style>

<body>
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
  <div class="img">
    <img src="https://slikk.ai/img/Group914.png" class="bannerimg" />
    <div class="bannermobimage">
    <div class="centered">
      <h2 class="h2head">Hi! How can we help you?</h2>
      <h4 style="font-size: 20px; color: white;">
        Find the resources you need to enhance your slikk.ai experience
      </h4>
      <div class="main">
        <!-- Actual search box -->
        <div class="form-group has-search">
          <span class="form-control-feedback"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
              fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg></span>
          <input type="text" class="form-control" placeholder="Search" style="border-radius: 1.375rem" />
          <div class="listt">
            <h3 style="text-align: left; font-size: 18px; color:#fff;">Top Search</h3>
            <a href="#" id="link">Demo</a>
            <a href="#" id="link">Signup</a>
            <a href="#" id="link">Pricing</a>
            <a href="#" id="link">Integration</a>
          </div>
        </div>

        <!-- end img code  -->
      </div>
    </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <!-- <div class=" col-md-4" >
          <h2>Trending topics</h2>
          <p style="padding-bottom: 0px; font-size: 17px; font-weight: 500">
            Check out what’s popular right now
          </p>
          <img
            src="data:image/jpeg;base64,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"
          />
          <div href="" style="display: flex; padding: 10px">
            <div class="col-3">
              <a href="" id="link1">Videos</a>
            </div>
            <div class="col">
              <a href="" id="link1">slikk Workout</a><br />
              <a style="font-size: 12px"
                >Learn how to collaborate on documents
              </a>
              <p style="font-weight: 400; font-size: 12px; color: #a4a4a4">
                3 min watch
              </p>
            </div>
          </div>
          <img
            src="data:image/png;base64,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"
          />
          <div href="" style="display: flex; padding: 10px">
            <div class="col-4" >
              <a href="" id="link1" style="    font-size: 16px;">Blog Post</a>
            </div>
            <div class="col">
              <a href="" id="link1">Manage Your Projects</a><br />
              <a style="font-size: 12px"
                >Learn how to successfully manage your projects</a
              >
              <p style="font-weight: 400; font-size: 12px; color: #a4a4a4">
                16 min read
              </p>
            </div>
          </div>
        </div> -->
      <div class="col-xs-12 col-sm-8">
        <div style="border-bottom: 1px solid #cecece">
          <h2>Top articles</h2>
          <div style="display: flex"></div>
          <p style="padding-bottom: 12px; font-size: 17px; font-weight: 500">
            Covering slikk.ai products and features
            <a href="#" style="float: right">View Knowledge Base
              <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-arrow-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                </svg></span></a>
          </p>
        </div>
        <div style="border-bottom: 1px solid #cecece;">
          <article style="    margin-top: 25px; padding-bottom: 10px;">
            <p style="font-weight: 600;
              font-size: 17px;
              margin-top:10px;
              ">Getting Started With Slikk</p>
            <p style="    font-weight: 400;
              font-size: 14px;">
              Everything you need to know to get started with slikk.ai
            </p>
            <div style="display: flex;">
              <button type="button" class="btn btn-outline-primary" id="btn-str">Getting Started</button>
              <div class="text-right" style="width: 82%;
              text-align: end;">
                <a href="#" style="float: right">Read Article
                  <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg></span></a>
              </div>
            </div>
          </article>
        </div>
        <div style="border-bottom: 1px solid #cecece;">
          <article style="    margin-top: 25px; padding-bottom: 10px;">
            <p style="font-weight: 600;
              font-size: 17px;
              margin-top:10px;
              ">Slikk For Marketing Teams</p>
            <p style="    font-weight: 400;
              font-size: 14px;">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              <!-- Learn how to import and export Excel data -->
            </p>
            <div style="display: flex;">
              <button type="button" class="btn btn-outline-primary" id="btn-str">Getting Started</button>
              <div class="text-right" style="width: 82%;
              text-align: end;">
                <a href="#" style="float: right">Read Article
                  <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg></span></a>
              </div>
            </div>
          </article>
        </div>
        <div style="border-bottom: 1px solid #cecece;">
          <article style="    margin-top: 25px; padding-bottom: 10px;">
            <p style="font-weight: 600;
              font-size: 17px;
              margin-top:10px;
              ">How to create Pods</p>
            <p style="    font-weight: 400;
              font-size: 14px;">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              <!-- Collaborate on docs in one central place with slikk workdocs -->
            </p>
            <div style="display: flex;">
              <button type="button" class="btn btn-outline-primary" id="btn-str">Getting Started</button>
              <div class="text-right" style="width: 82%;
              text-align: end;">
                <a href="#" style="float: right">Read Article
                  <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg></span></a>
              </div>
            </div>
          </article>
        </div>
        <!-- <div style="border-bottom: 1px solid #cecece;">
            <article style="    margin-top: 25px; padding-bottom: 10px;">
              <p style="font-weight: 600;
              font-size: 17px;
              margin-top:10px;
              ">
              Get started with slikk sales CRM
            </p>
              <p style="    font-weight: 400;
              font-size: 14px;">
              Everything you need to know about using slikk.ai as a CRM
              </p>
              <div style="display: flex;">
              <button type="button" class="btn btn-outline-primary" id="btn-str">Getting Started</button>
              <div class="text-right" style="width: 82%;
              text-align: end;"> 
              <a href="" style="float: right"
                >Read Article 
                <span
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-arrow-right"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"
                    /></svg></span
              ></a>
            </div>
            </div>
            </article>
          </div> -->
      </div>



    </div>
  </div>

  <!-- Featured videos code here  -->

  <div class="container">
    <div class="" style="
    margin-top: 30px;
">
      <h2>Featured videos</h2><br>
      <div style="display: flex;" class="mb-5">
        <p> Tutorials designed to fast-track your success with slikk.ai</p>
        <div class="text-right" style="width: 62%;
              text-align: end;">
          <a href="https://slikk.ai/learn/video" style="float: right; 
              font-weight: 500;
          ">

            Explore all videos
            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
              </svg></span></a>
        </div>

      </div>
      <!-- <div class="row" style="display:flex;     gap: 59px;">
        <div class="col-md col-sm-6" id=td-vid>
          <iframe width="100%" class="mt-4" height="200" src="https://youtube.com/embed/mi4_8fZo6Dk" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen style="    border-radius: 11px;"></iframe>
        </div>
        <div class="col-md col-sm-6" id=td-vid>
          <iframe width="100%" class="mt-4" height="200" src="https://youtube.com/embed/GD4b7m-aSdY" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen style="border-radius: 11px;"></iframe>
        </div>
        <div class="cu-usecase-videos__item">
                <div class="video-component__wrapper">
                    <div class="video-component" style="background-color: transparent;">
                        <a href="https://www.youtube.com/watch?v=mi4_8fZo6Dk"  class="popup-youtube video-component__poster video-component__poster_active" style="background-image: url('https://slikk.ai/img/youtubeimg1.jpg');opacity: 1;height: 100%;background-color: transparent;border: 0;border-radius: 0;background-position: top center;outline: 0;"><span class="visually-hidden">Play video.</span></a>
                    </div>
                </div>
                <div class="cu-usecase-videos__content">
                <p style="text-align: center;"><b>Slikk Introduction | Slikk</b></p>
                </div> 
          </div>
        <div class="cu-usecase-videos__item">
                <div class="video-component__wrapper">
                    <div class="video-component" style="background-color: transparent;">
                        <a href="https://www.youtube.com/watch?v=GD4b7m-aSdY"  class="popup-youtube video-component__poster video-component__poster_active" style="background-image: url('https://slikk.ai/img/youtubeimg1.jpg');opacity: 1;height: 100%;background-color: transparent;border: 0;border-radius: 0;background-position: top center;outline: 0;"><span class="visually-hidden">Play video.</span></a>
                    </div>
                </div>
                <div class="cu-usecase-videos__content">
                <p style="text-align: center;"><b>Your Go To Task Management Software | Slikk</b></p>
                </div> 
          </div>
        <div class="col-md col-sm-6" id=td-vid>
          <iframe width="100%" height="200" src="https://youtube.com/embed/ZFNAqqEiyqA" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen style="border-radius: 11px;"></iframe>
          <p>
            Introduction to Slikk | Best Project Management Software
          </p>
        </div>
        <div class="col-md col-sm-6" id=td-vid>
          <iframe width="100%" height="200" src="https://www.youtube.com/embed/h_EZdPFDBd0" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen style="    border-radius: 11px;"></iframe>
          <p>
            How to use | slikk sales CRM
          </p>
        </div>
        <div class="col-md col-sm-6" id=td-vid>
          <iframe width="100%" height="200" src="https://www.youtube.com/embed/h_EZdPFDBd0" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen style="    border-radius: 11px;"></iframe>
          <p>
            slikk forms
          </p>

        </div>
      </div>-->
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
        </div>

    </div>
  </div>

  <!-- end video code  -->
  <div class="outine-dark" style="    background: #fff;
    height: 250px;     border-radius: 15px 78px 3px 78px;">
    <div class="text-center" style="padding-top: 73px;
      font-weight: 700;
      font-size: 37px;
      color: #0d6efd;">Can't find what you're looking for?</div>
    <div class="text-center" style="    margin-top: 20px;">
      <button type="button" class="btn btn-support">
        Contact Support
        </span>
      </button>
    </div>

  </div>

  </div>
</body>

</html>
@endsection