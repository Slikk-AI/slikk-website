@extends('frontend.layouts.master')
@section('custom-style')
@endsection
@section('content')

    <style>
        .highlights {
            width: 70%;
        }

        .left-high {
            color: yellow;
            width: 30%;
            float: left;

        }

        .right-high {
            color: #fff;
            text-align: left;
        }

        .banner-img {
            width: 80%;
        }

        @media screen and (max-width:800px) {
            .banner-img {
                display: none;
            }

        }

        .hero_desc {
            font: var(--unnamed-font-style-normal) normal var(--unnamed-font-weight-normal) var(--unnamed-font-size-25)/var(--unnamed-line-spacing-33) var(--unnamed-font-family-roboto);
            letter-spacing: var(--unnamed-character-spacing-0);
            color: var(--unnamed-color-ffffff);
            text-align: left;
            font: normal normal normal 18px/23px Roboto;
            letter-spacing: 0px;
            color: #FFFFFF;
            padding-top: 30px !important;
            opacity: 1;
            padding-bottom: 30px;
        }

        .banner_button:hover {
            box-shadow: 0px 0px 5px 2px #a7a192;
        }

        .banner_button2:hover {
            box-shadow: 0px 0px 5px 2px #a7a192;
        }

        @media screen and (max-width:800px) {
    .top-banner {
padding-top: 50px;
}
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
.mr-f{
    /* font-size: 13px !important; */
    margin-right: 7px;
}
.goal-icon{
    height: 20px;
    width: 25px;
    margin-left: -6px;
}
    #customers-testimonials12 .item-details12{
        height:300px;
    }
    .test-img{
        width: 60% !important;
    height: 60%;
    /* border-radius: 50%; */
    margin-left:30px;
    }
    .quote-size{
        font-size: 17px;
    margin-right: 10px;
    margin-left: 10px;
    }
    .form-control option {
        color: #495057 !important;
        background:#fff;  
    }
    @media(min-width:1020px){
        .mtt-5{
            margin-top: 3rem!important;
        }
    }
    </style>
    <div class="jumbotron text-center home-banner top-banner" style="background: transparent url(img/Group914.png) 0% 0% no-repeat;
                    opacity: 1;
                    background-size: cover;
                    background-position: bottom;    min-height: 450px;    padding-bottom: 90px;padding-top:70px !important">

        <div class="container">
            <div class="row" style="padding-top: 40px;">
                <div class="col-sm-6" style="text-align:left; padding: 40px;">
                    <h1 class="hero_title">One Platform to Boost Productivity, Performance and Retention</h1>
                    <p class="hero_desc" style="font-weight:100">Slikk helps you get more tasks done in less time. It's
                        everything you need to work faster, communicate better, and improve productivity in a single
                        workspace.
                    </p>

                    <div class="highlights">
                        <div class="left-high"><i class="fa fa-arrow-up mr-f" aria-hidden="true"></i>50% </div>
                        <div class="right-high">Calls And Meetings</div>
                    </div>
                    <div class="highlights">
                        <div class="left-high"><i class="fa fa-arrow-up mr-f" aria-hidden="true"></i>45% </div>
                        <div class="right-high">Goals Achieved</div>
                    </div>
                    <div class="highlights">
                        <div class="left-high"><i class="fa fa-arrow-up mr-f" aria-hidden="true"></i>3X </div>
                        <div class="right-high">Productivity</div>
                    </div>

                    <br>
                    <br>

                    <!-- <button type="button" class="btn btn-primary btn-sm banner_button"
                        style="background:#FFBB00;color:#000;border: none;padding: 7px 10px;margin-right: 20px;">Start a
                        Free Trial</button> -->
                    <button type="button"  id= "popup__toggle" class="btn btn-light btn-sm banner_button2"
                        style="background:#fff;color:#000;border: none;padding: 7px 10px;margin-right: 20px;">Watch a
                        Video</button>
                                        <div class="popup__overlay">
                <div class="popup">
                    <!-- <a href="#" class="popup__close">X</a> -->
                    <iframe id="existing-iframe-example" type="text/html" src="https://www.youtube.com/embed/mi4_8fZo6Dk" frameborder="0" allowfullscreen></iframe>
                </div>
                </div>
                </div>

                <div class="col-sm-6">
                    <img src="https://slikk.ai/img/Hero%20Section%20Graphic.svg" class="img-responsive banner-img" />
                </div>

            </div>

        </div>

    </div>

      <!-- pop script code  -->
      <script>
                    var player = null;
var tag = document.createElement("script");
tag.id = "iframe-api";
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName("script")[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

function onYouTubeIframeAPIReady() {
  player = new YT.Player("existing-iframe-example");
}

var elPopupClose = $(".popup__close");
var elPopupOverlay = $(".popup__overlay");
var elPopupToggle = $("#popup__toggle");

// @see https://developers.google.com/youtube/iframe_api_reference#Playback_controls
// @see http://stackoverflow.com/questions/8667882/how-to-pause-a-youtube-player-when-hiding-the-iframe
function popupDidClose() {
  if (player !== null) {
    player.pauseVideo();
  }
}

elPopupClose.click(function () {
  elPopupOverlay.css({ display: "none", visibility: "hidden", opacity: 0 });
  popupDidClose();
});

elPopupOverlay.click(function (event) {
  event = event || window.event;
  if (event.target === this) {
    elPopupOverlay.css({ display: "none", visibility: "hidden", opacity: 0 });
    popupDidClose();
  }
});

elPopupToggle.click(function () {
  elPopupOverlay.css({ display: "block", visibility: "visible", opacity: 1 });
});

                </script>
<!-- popup script end here  -->

  

    <div class="container" style="padding-bottom: 30px;">

        <h2 class="section_title" style="margin-top:60px;margin-bottom:70px;text-align">Add Visibility To Your Work</h2>
        
        <div class="row">
            <div class="col-sm-4 card-box">
                <div class="icon"><img src="https://slikk.ai/img/home-1.jpg"></div>
                <h3 class="box-title">Work & Forecasting</h3>
                <p style="text-align:center">Dive deep into every variable of task & time management, help your team
                    prioritize, and train new
                    employees on best practices.</p>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p> -->
            </div>
            <div class="col-sm-4 card-box">
                <div class="icon"><img src="https://slikk.ai/img/home-2.jpg"></div>
                <h3 class="box-title">Collaboration Pods</h3>
                <p style="text-align:center">Work faster by organizing your conversations. Collaborate live or control your
                    notifications easily.</p>

            </div>
            <div class="col-sm-4 card-box">
                <div class="icon"><img src="https://slikk.ai/img/home-3.jpg"></div>
                <h3 class="box-title">Strategic Workflows</h3>
                <p style="text-align:center">Drive efficiency and consistency using customized workflows specifically
                    designed for your teams.</p>

            </div>
        </div>
    </div>



    <div class="desk-show" style="background: #F6F5FE 0% 0% no-repeat padding-box;padding-top: 30px;
                margin-bottom: -30px;">

        <div class="container">

            <div class="row">


                <div class="col-sm-10 timeline-left  align-items-center">
                    <div class="timeline-cont">
                        <h2 style="padding-top:20px">Get Work Done Without Chaos<span style="background: var(--yellow);
                    border-radius: 20px;
                    padding: 0px 10px;
                    box-shadow: 2px 2px 6px 5px var(--yellow);display:none">Efficiency</span></h2>

                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>


            <div class="row desk-show" style="background: #F6F5FE 0% 0% no-repeat padding-box;">
                <div class="col-sm-1"></div>

                <div class="col-sm-2 timeline-left  align-items-center">
                    <div class="timeline-cont">


                        <style>
                            .container_au {
                                position: relative;
                                width: 90%;
                                margin: 100px auto;
                                height: 299px;

                            }


                            ul.tabs {
                                margin: 0px;
                                padding: 0px;
                                list-style: none;
                                float: right;
                            }

                            /* ul.tabs li:hover {
                                        background: #8aad00;
                                    } */


                            ul.tabs li {
                                /* background: #82ab06; */
                                color: #fff;
                                /* display: block; */
                                padding: 8px 66px;
                                /* cursor: pointer; */
                                /* border-radius: 8px; */
                                margin: 9px;
                                /* margin-top: 0px; */
                                background: #7E69F9 0% 0% no-repeat padding-box;
                                box-shadow: 0px 3px 6px #00000029;
                                border-radius: 0px 0px 12px 0px;
                                opacity: 1;
                            }

                            ul.tabs li.current {
                                background: #e8ac00;
                                color: #fff;
                            }

                            .tab-content {
                                position: absolute;
                                opacity: 0;
                                visibility: hidden;
                                transition: opacity 3s;
                                color: black;
                                font-size: 21px;
                                line-height: 2;
                                padding-top: 8%;

                                /* width: calc(100% - 216px); */
                                width: calc(100%);
                                padding: 17px;
                                height: 264px;

                            }

                            .tab-content.current {
                                opacity: 1;
                                visibility: visible;
                            }

                            @media screen and (max-width:800px) {
                                .container_au {
                                    position: relative;
                                    width: 100%;
                                    margin: 10px auto;
                                    height: auto;
                                }

                                ul.tabs {
                                    display: flex;
                                    overflow: scroll;
                                    width: 100%;
                                }

                                ul.tabs li {
                                    padding: 8px 30px;
                                }

                            }

                        </style>

                        <div class="container_au">

                            <ul class="tabs">
                                <li class="tab-link current" data-tab="1">Tasks</li>
                                <li class="tab-link" data-tab="2">Pods</li>
                                <li class="tab-link" data-tab="3">Goals</li>
                                <li class="tab-link" data-tab="4">Time</li>
                                <li class="tab-link" data-tab="5">Kanban</li>
                                <li class="tab-link" data-tab="6">Files</li>
                            </ul>



                        </div><!-- container -->




                    </div>
                </div>

                <div class="col-sm-8 timeline-right  d-flex align-items-center">

                    <div id="1" class="tab-content current align-items-center">
                        <div class="row">

                            <div class="col-sm-7 timeline-right">
                                <h3>Tasks</h3>
                                <p class="timeline-p"> Slikk organizes tasks in terms of priority. Each task workflow shows the brief, stakeholders, and deadlines. If the requirement changes anytime, all tasks shuffle accordingly. Further, there is an easy search option and multitask toolbar.</p>
                                <button type="button" class="btn btn-primary btn-sm"
                                    style="background:#5433FF;color:#fff">Know More</button>
                            </div>

                            <div class="col-sm-5 timeline-right  d-flex align-items-center">
                                <img src="https://slikk.ai/img/Group-1017.svg" style="width:100%">
                            </div>

                        </div>

                    </div>
                    <div id="2" class="tab-content align-items-center">
                        <div class="row">

                            <div class="col-sm-7 timeline-right">
                                <h3>Pods</h3>
                                <p class="timeline-p"> Launch faster. Have all your task-related conversations and
                                    collaboration in specific pods. Clear visibility for all stakeholders ensures no time is
                                    lost and consistency is maintained.</p>
                                <button type="button" class="btn btn-primary btn-sm"
                                    style="background:#5433FF;color:#fff">Know More</button>
                            </div>

                            <div class="col-sm-5 timeline-right  d-flex align-items-center">
                                <img src="https://slikk.ai/img/Group-1018.svg" style="width:100%">
                            </div>

                        </div>
                    </div>
                    <div id="3" class="tab-content align-items-center">
                        <div class="row">

                            <div class="col-sm-7 timeline-right">
                                <h3>Goals</h3>
                                <p class="timeline-p"> Setup in minutes, streamline your work, and boost the
                                    productivity of your teams. All team members can track progress with activity history
                                    details for every set goal. All users can focus on clear expectations and performance.
                                </p>
                                <button type="button" class="btn btn-primary btn-sm"
                                    style="background:#5433FF;color:#fff">Know More</button>
                            </div>

                            <div class="col-sm-5 timeline-right  d-flex align-items-center">
                                <img src="https://slikk.ai/img/Group-1019.svg" style="width:100%">
                            </div>

                        </div>
                    </div>
                    <div id="4" class="tab-content align-items-center">
                        <div class="row">

                            <div class="col-sm-7 timeline-right">
                                <h3>Time</h3>
                                <p class="timeline-p"> Find and fix anything that eats time. Slikk continuously learns
                                    what works best for you. The dashboard helps you schedule time, manage team capacity,
                                    organize global calendars, and track milestones at work.</p>
                                <button type="button" class="btn btn-primary btn-sm"
                                    style="background:#5433FF;color:#fff">Know More</button>
                            </div>

                            <div class="col-sm-5 timeline-right  d-flex align-items-center">
                                <img src="https://slikk.ai/img/Group-1020.svg" style="width:100%">
                            </div>

                        </div>
                    </div>
                    <div id="5" class="tab-content align-items-center">
                        <div class="row">

                            <div class="col-sm-7 timeline-right">
                                <h3>Kanban</h3>
                                <p class="timeline-p"> Manage your projects with better task routing and easy workload
                                    planning. With intuitive intake forms and customizable workflows, your team can release
                                    quality products in less time.</p>
                                <button type="button" class="btn btn-primary btn-sm"
                                    style="background:#5433FF;color:#fff">Know More</button>
                            </div>

                            <div class="col-sm-5 timeline-right  d-flex align-items-center">
                                <img src="https://slikk.ai/img/Group-1021.svg" style="width:100%">
                            </div>

                        </div>
                    </div>
                    <div id="6" class="tab-content align-items-center">
                        <div class="row">

                            <div class="col-sm-7 timeline-right">
                                <h3>Files</h3>
                                <p class="timeline-p"> Most digital assets get dropped into some random folder. Now,
                                    have all your files in one secure cloud storage to maintain brand consistency. Repurpose
                                    at scale and regulate with simple permission settings.</p>
                                <button type="button" class="btn btn-primary btn-sm"
                                    style="background:#5433FF;color:#fff">Know More</button>
                            </div>

                            <div class="col-sm-5 timeline-right  d-flex align-items-center">
                                <img src="https://slikk.ai/img/Group-1023.svg" style="width:100%">
                            </div>

                        </div>
                    </div>
                </div>



                <div class="col-sm-1"></div>

            </div>

            <script>
                $(document).ready(function() {
                    function slider() {
                        var tab_id = $('li.current').attr('data-tab');

                        var n_tab_id = parseInt(tab_id) + 1;
                        if (n_tab_id == 7) {
                            n_tab_id = 1;
                        }
                        $('ul.tabs li').removeClass('current');
                        $('.tab-content').removeClass('current');
                        $("ul").find("[data-tab='" + n_tab_id + "']").addClass('current');
                        $("#" + n_tab_id).addClass('current');
                    }

                    var myTimer = setInterval(slider, 18000);



                    $('ul.tabs li').click(function() {
                        var tab_id = $(this).attr('data-tab');

                        $('ul.tabs li').removeClass('current');
                        $('.tab-content').removeClass('current');

                        $(this).addClass('current');
                        $("#" + tab_id).addClass('current');
                    })
                    $('.container_au').mouseover(function() {
                        clearInterval(myTimer);
                    })
                    $('.container_au').mouseout(function() {
                        myTimer = setInterval(slider, 20000);
                    })
                })
            </script>

        </div>

    </div>

    </div>
    <div class="desk-show" style="background: #FFF 0% 0% no-repeat padding-box;padding-top: 30px;
                margin-bottom: -30px;">

        <div class="container">

            <div class="row">

                <div class="col-sm-10 timeline-left  align-items-center">
                    <div class="timeline-cont">
                        <h2 style="padding-top:20px">Use Cases For 1 to 500+ <span style="background: #FF6BA4;
                    border-radius: 20px;
                    padding: 0px 10px;
                    box-shadow: 2px 2px 6px 5px #FF6BA4;">Teams</span></h2>

                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>

            <div class="row desk-show" style="background: #fff 0% 0% no-repeat padding-box;max-height:200px">



                <div class="col-sm-12 timeline-left  align-items-center">
                    <div class="timeline-cont">


                        <style>
                            .container_au1 {
                                position: relative;
                                width: 90%;
                                margin-top: 70px !important;
                                /* height: 299px; */
                                text-align: center;
                                margin: auto;
                            }


                            ul.tabs1 {
                                margin: 0px;
                                padding: 0px;
                                list-style: none;
                                /* float: right; */
                                display: flex;
                            }

                            /* ul.tabs1 li:hover {
                          background: #8aad00;
                        } */


                            ul.tabs1 li {
                                /* background: #82ab06; */
                                color: #000;
                                /* display: block; */
                                padding: 8px 4px;
                                cursor: pointer;
                                /* border-radius: 8px; */
                                margin: 9px;
                                font-weight: bold;
                                /* margin-top: 0px; */
                                /* background: #7E69F9 0% 0% no-repeat padding-box;
                          box-shadow: 0px 3px 6px #00000029;
                          border-radius: 0px 0px 12px 0px; */
                                opacity: 1;
                                font-size: 18px;
                            }

                            ul.tabs1 li.current1 span {
                                /* background: #e8ac00; */
                                /* color: #fff; */
                                padding-top: 5px;
                                border-bottom: 3px solid #FF6BA4;

                            }

                            .tab-content1 {
                                position: absolute;
                                opacity: 0;
                                visibility: hidden;
                                transition: opacity 3s;
                                color: black;
                                font-size: 21px;
                                line-height: 2;
                                padding-top: 8%;

                                /* width: calc(100% - 216px); */
                                width: calc(100%);
                                padding: 17px;
                                /* height: 264px; */
                                height: 100%;

                            }

                            .tab-content1.current1 {
                                opacity: 1;
                                visibility: visible;
                            }

                            @media screen and (max-width:800px) {
                                .container_au1 {
                                    position: relative;
                                    width: 100%;
                                    margin: 10px auto;
                                    height: auto;
                                }

                                ul.tabs1 {
                                    display: flex;
                                    overflow: scroll;
                                    width: 100%;
                                }

                                ul.tabs1 li {
                                    padding: 8px 30px;
                                }

                            }

                            .slide_img {
                                height: 300px;
                                margin: auto;
                            }

                        </style>

                        <div class="container_au1">

                            <ul class="tabs1">
                                <li class="tab-link1 current1" data-tab="7"><span>Project Management</span></li>
                                <li class="tab-link1" data-tab="8"><span>Sales</span></li>
                                <li class="tab-link1" data-tab="9"><span>CRM</span></li>
                                <li class="tab-link1" data-tab="10"><span>CXO's</span></li>
                                <li class="tab-link1" data-tab="11"><span>Remote Work</span></li>
                                <li class="tab-link1" data-tab="12"><span>Marketing</span></li>
                                <li class="tab-link1" data-tab="13"><span>Design</span></li>
                            </ul>



                        </div><!-- container -->




                    </div>
                </div>



            </div>

            <div class="row desk-show" style="background: #fff 0% 0% no-repeat padding-box;min-height:550px">






                <div class="col-sm-10 timeline-right  d-flex align-items-center">



                    <div id="7" class="tab-content1 current1 ">

                        <div class="row">

                            <div class="col-sm-7 timeline-right">
                                <h3>Pods</h3>
                                <p class="timeline-p"> Organize your work communication with all the people, messages, and files related to tasks in one place. Work faster.</p>
                                <br>
                                <h3>Tasks</h3>
                                <p class="timeline-p"> Slikk organizes tasks in terms of priority. Each task workflow shows the brief, stakeholders, and deadlines. If the requirement changes anytime, all tasks shuffle accordingly.</p>

                                    <br>
                                    <h3>Milestones</h3>
                                    <p class="timeline-p"> Celebrate individual wins and those of others. Easily see what a team member is accomplishing at work.</p>
                                
                                <button type="button" class="btn btn-primary btn-sm"
                                    style="background:#5433FF;color:#fff">Know More</button>


                            </div>

                            <div class="col-sm-5 timeline-right  d-flex align-items-center">
                                <img src="https://slikk.ai/img/Homepage-Project-Management-image.svg"
                                    class="slide_img">
                            </div>

                        </div>


                    </div>


                    <div id="8" class="tab-content1 align-items-center">
                        <div class="row">

                            <div class="col-sm-7 timeline-right">
                                <h3>Goals</h3>
                                <p class="timeline-p"> Customizable workflows to streamline your work and boost productivity.</p>
                                    <br>
                                    <h3>Tasks</h3>
                                    <p class="timeline-p"> Get more work done through clear briefs, total visibility to stakeholders, and team-specific workflows.</p>
                                    <br>
                                     <h3>Business Meetings</h3>
                                    <p class="timeline-p"> Reduce meeting time for everyone. When you do have them, clear agendas mean they are focused and shorter.</p>
                                <button type="button" class="btn btn-primary btn-sm"
                                    style="background:#5433FF;color:#fff">Know More</button>
                            </div>

                            <div class="col-sm-5 timeline-right  d-flex align-items-center">
                                <img src="https://slikk.ai/img/Homepage-sales-image.svg" class="slide_img">
                            </div>

                        </div>
                    </div>
                    <div id="9" class="tab-content1 align-items-center">
                        <div class="row">

                            <div class="col-sm-7 timeline-right">
                                <h3>Event Planning</h3>
                                <p class="timeline-p"> Plan events with complete visibility into who's doing what.
                                </p>
                                <br>
                                <h3>Tasks</h3>
                                <p class="timeline-p"> With an easy search option and multitask toolbar, see what matters, focus your time accordingly, and be productive.
                                </p>
                                <br>
                                <h3>Meetings</h3>
                                <p class="timeline-p"> Go with clear and pre-defined agendas, so your meetings are more productive, collaborative, and shorter.
                                </p>
                                <button type="button" class="btn btn-primary btn-sm"
                                    style="background:#5433FF;color:#fff">Know More</button>
                            </div>

                            <div class="col-sm-5 timeline-right  d-flex align-items-center">
                                <img src="https://slikk.ai/img/Homepage-CRM-image.svg" class="slide_img">
                            </div>

                        </div>
                    </div>
                    <div id="10" class="tab-content1 align-items-center">
                        <div class="row">

                            <div class="col-sm-7 timeline-right ">
                                <h3>360 Degree Views</h3>
                                <p class="timeline-p"> See what your employees are doing, how they are feeling, and what you can do to help them be more productive at work.</p>
                                   
                                <h3>People Insights</h3>
                                    <p class="timeline-p"> Understand the sentiments of your employees through nudges and detection metrics. Foster a better culture and stronger values through data on employees' wellbeing.</p>    
                                      
                                <h3>Pod Insights</h3>
                                        <p class="timeline-p"> Get the right metrics that demonstrate the quality of communication, collaboration, and productivity across teams and departments.</p>        
                                <button type="button" class="btn btn-primary btn-sm"
                                    style="background:#5433FF;color:#fff">Know More</button>

                                {{-- <h3>Time</h3>
                                    <p class="timeline-p"> Find and fix anything that eats time. Slikk continuously learns
                                        what works best for you. The dashboard helps you schedule time, manage team capacity,
                                        organize global calendars, and track milestones at work.</p>
                                    <button type="button" class="btn btn-primary btn-sm"
                                        style="background:#5433FF;color:#fff">Know More</button> --}}
                            </div>

                            <div class="col-sm-5 timeline-right  d-flex align-items-center">
                                <img src="https://slikk.ai/img/Homepage-Startup-image.svg" class="slide_img">
                            </div>

                        </div>
                    </div>
                    <div id="11" class="tab-content1 align-items-center">
                        <div class="row">

                            <div class="col-sm-7 timeline-right">
                                <h3>Productivity</h3>
                                <p class="timeline-p"> Not just hours. See the clear picture in terms of outcomes and the impact every employee is creating for the company.</p>
                                    <br>
                                    <h3>Instant Messaging</h3>
                                    <p class="timeline-p"> Take control of communication, collaborate live and get answers related to work instantly from colleagues.</p>  
                                        <br> 
                                        <h3>Task Priorities</h3>
                                        <p class="timeline-p"> Simplify your work. Prioritize tasks according to deadlines, potential impact, and more.</p>                                 
                                <button type="button" class="btn btn-primary btn-sm"
                                    style="background:#5433FF;color:#fff">Know More</button>
                            </div>

                            <div class="col-sm-5 timeline-right  d-flex align-items-center">
                                <img src="https://slikk.ai/img/Homepage-Remote-Work-image.svg" class="slide_img">
                            </div>

                        </div>
                    </div>
                    <div id="12" class="tab-content1 align-items-center">
                        <div class="row">

                            <div class="col-sm-7 timeline-right">
                                <h3>Communication</h3>
                                <p class="timeline-p"> Make communication easy for everyone you work with- both from your and outside your team.</p>
                                <br>
                                <h3>Library</h3>
                                <p class="timeline-p"> Save time, govern your work, and eliminate hours spent finding files with a fully integrated library.</p>
                                    <br>
                                    <h3>Better Collaboration</h3>
                                    <p class="timeline-p"> Respond faster without moving to a new tab, keep the conversation focused in pods and simplify responses, all in one place.</p>    
                                <button type="button" class="btn btn-primary btn-sm"
                                    style="background:#5433FF;color:#fff">Know More</button>
                            </div>

                            <div class="col-sm-5 timeline-right  d-flex align-items-center">
                                <img src="https://slikk.ai/img/Homepage-Marketing-image.svg" class="slide_img">
                            </div>

                        </div>
                    </div>

                    <div id="13" class="tab-content1 align-items-center">
                        <div class="row">

                            <div class="col-sm-7 timeline-right">
                                <h3>Pods </h3>
                                <p class="timeline-p"> Have all your task-related conversations and collaboration with specific stakeholders in one single place.</p>
                                    <br>
                                    <h3>File Sharing</h3>
                                    <p class="timeline-p"> Find what you need in seconds, share in seconds, and empower every employee to find the right files in no time.</p>
                                    <br>
                                    <h3>Team Collaboration</h3>
                                    <p class="timeline-p"> Work on tasks together, coordinate with your colleagues or just communicate about work. Slikk is built for productive conversations.</p>
                                <button type="button" class="btn btn-primary btn-sm"
                                    style="background:#5433FF;color:#fff">Know More</button>
                            </div>

                            <div class="col-sm-5 timeline-right  d-flex align-items-center">
                                <img src="https://slikk.ai/img/Homepage-Design-image.svg" class="slide_img">
                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <div class="col-sm-2 timeline-right  d-flex align-items-center">


            </div>


            <script>
                $(document).ready(function() {
                    function slider1() {
                        var tab_id1 = $('li.current1').attr('data-tab');

                        var n_tab_id1 = parseInt(tab_id1) + 1;
                        if (n_tab_id1 == 13) {
                            n_tab_id1 = 7;
                        }
                        $('ul.tabs1 li').removeClass('current1');
                        $('.tab-content1').removeClass('current1');
                        $("ul").find("[data-tab='" + n_tab_id1 + "']").addClass('current1');
                        $("#" + n_tab_id1).addClass('current1');
                    }

                    var myTimer1 = setInterval(slider1, 3000);



                    $('ul.tabs1 li').click(function() {
                        var tab_id1 = $(this).attr('data-tab');

                        $('ul.tabs1 li').removeClass('current1');
                        $('.tab-content1').removeClass('current1');

                        $(this).addClass('current1');
                        $("#" + tab_id1).addClass('current1');
                    })
                    $('.container_au1').mouseover(function() {
                        clearInterval(myTimer1);
                    })
                    $('.container_au1').mouseout(function() {
                        myTimer1 = setInterval(slider1, 5000);
                    })
                })
            </script>

        </div>
    </div>

    <!------------------------------------ phone slider start ----------------------------------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .testimonials {
            background-color: #F6F5FE;
            position: relative;
            padding-top: 20px;
        }

        .testimonials:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 30%;
            background-color: #F6F5FE;
        }

        #customers-testimonials .item-details {
            background-color: #5433ff;
            color: #fff;
            padding: 20px 10px;
            text-align: left;
        }

        #customers-testimonials .item-details h5 {
            margin: 0 0 15px;
            font-size: 18px;
            line-height: 18px;
        }

        #customers-testimonials .item-details h5 span {
            color: red;
            float: right;
            padding-right: 20px;
        }

        #customers-testimonials .item-details p {
            font-size: 14px;
        }

        #customers-testimonials .item {
            text-align: center;
            margin-bottom: 80px;
        }

        .owl-carousel .owl-nav [class*='owl-'] {
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        .owl-carousel .owl-nav [class*='owl-'].disabled:hover {
            background-color: #d6d6d6;
        }

        .owl-carousel {
            position: relative;
        }

        .owl-carousel .owl-next,
        .owl-carousel .owl-prev {
            width: 50px;
            height: 50px;
            line-height: 50px;
            border-radius: 50%;
            position: absolute;
            top: 30%;
            font-size: 20px;
            color: #fff;
            border: 1px solid #ddd;
            text-align: center;
        }

        .owl-carousel .owl-prev {
            left: -70px;
        }

        .owl-carousel .owl-next {
            right: -70px;
        }


        .row {

            margin-right: 0px;
            margin-left: 0px;
        }

    </style>

    <!-- TESTIMONIALS -->
    <div class="row mob-show" style="background: #F6F5FE 0% 0% no-repeat padding-box;display:none;padding: 20px 10px;">
        <div class="col-sm-1"></div>
        <div class="col-sm-10 timeline-left  align-items-center">
            <div class="timeline-cont">
                <h2 class="section_title" style="">Get work done without chaos</span>
                </h2>

            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
    <section class="testimonials mob-show" style="display:none;">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div id="customers-testimonials" class="owl-carousel">

                        <!--TESTIMONIAL 1 -->
                        <div class="item">
                            <div class="shadow-effect">
                                <img class="img-responsive"
                                    src="https://slikk.ai/img/Group-1017.svg" alt="">
                                <div class="item-details">

                                    <h3>Tasks</h3>
                                    <p>Slikk organizes tasks in terms of priority. Each task workflow shows the brief, stakeholders, and deadlines. If the requirement changes anytime, all tasks shuffle accordingly. Further, there is an easy search option and multitask toolbar.</p>
                                    <button type="button" class="btn btn-primary btn-sm"
                                        style="background:#5433FF;color:#fff">Know More</button>
                                </div>
                            </div>
                        </div>
                        <!--END OF TESTIMONIAL 1 -->
                        <!--TESTIMONIAL 2 -->
                        <div class="item">
                            <div class="shadow-effect">
                                <img class="img-responsive"
                                    src="https://slikk.ai/img/Group-1018.svg" alt="">
                                <div class="item-details">
                                    <h3>Pods</h3>
                                    <p>Launch faster. Have all your task-related conversations and collaboration in
                                        specific pods. Clear visibility for all stakeholders ensures no time is lost and
                                        consistency is maintained.</p>
                                    <button type="button" class="btn btn-primary btn-sm"
                                        style="background:#5433FF;color:#fff">Know More</button>
                                </div>
                            </div>
                        </div>
                        <!--END OF TESTIMONIAL 2 -->
                        <!--TESTIMONIAL 3 -->
                        <div class="item">
                            <div class="shadow-effect">
                                <img class="img-responsive"
                                    src="https://slikk.ai/img/Group-1019.svg" alt="">
                                <div class="item-details">

                                    <h3>Goals</h3>
                                    <p>Setup in minutes, streamline your work, and boost the productivity of your teams.
                                        All team members can track progress with activity history details for every set
                                        goal. All users can focus on clear expectations and performance.</p>
                                    <button type="button" class="btn btn-primary btn-sm"
                                        style="background:#5433FF;color:#fff">Know More</button>
                                </div>
                            </div>
                        </div>
                        <!--END OF TESTIMONIAL 3 -->
                        <!--TESTIMONIAL 4 -->
                        <div class="item">
                            <div class="shadow-effect">
                                <img class="img-responsive"
                                    src="https://slikk.ai/img/Group-1020.svg" alt="">
                                <div class="item-details">
                                    <h3>Time</h3>
                                    <p>Find and fix anything that eats time. Slikk continuously learns what works best
                                        for you. The dashboard helps you schedule time, manage team capacity, organize
                                        global calendars, and track milestones at work.</p>
                                    <button type="button" class="btn btn-primary btn-sm"
                                        style="background:#5433FF;color:#fff">Know More</button>
                                </div>
                            </div>
                        </div>
                        <!--END OF TESTIMONIAL 4 -->
                        <!--TESTIMONIAL 5 -->
                        <div class="item">
                            <div class="shadow-effect">
                                <img class="img-responsive"
                                    src="https://slikk.ai/img/Group-1021.svg" alt="">
                                <div class="item-details">
                                    <h3>Kanban</h3>
                                    <p>Manage your projects with better task routing and easy workload planning. With
                                        intuitive intake forms and customizable workflows, your team can release quality
                                        products in less time.</p>
                                    <button type="button" class="btn btn-primary btn-sm"
                                        style="background:#5433FF;color:#fff">Know More</button>
                                </div>
                            </div>
                        </div>
                        <!--END OF TESTIMONIAL 5 -->

                        <!--TESTIMONIAL 6 -->
                        <div class="item">
                            <div class="shadow-effect">
                                <img class="img-responsive" src="https://slikk.ai/img/Group-1023.svg"
                                    alt="">
                                <div class="item-details">
                                    <h3>Files</h3>
                                    <p>Most digital assets get dropped into some random folder. Now, have all your files
                                        in one secure cloud storage to maintain brand consistency. Repurpose at scale
                                        and regulate with simple permission settings.</p>
                                    <button type="button" class="btn btn-primary btn-sm"
                                        style="background:#5433FF;color:#fff">Know More</button>
                                </div>
                            </div>
                        </div>
                        <!--END OF TESTIMONIAL 6 -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF TESTIMONIALS -->

    <script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js"></script>

    <script>
        jQuery(document).ready(function($) {
            "use strict";
            $('#customers-testimonials').owlCarousel({
                loop: true,
                center: true,
                items: 1,
                margin: 30,
                autoplay: true,
                dots: false,
                nav: false,
                autoplayTimeout: 8500,
                smartSpeed: 450,
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 1
                    },
                    1170: {
                        items: 1
                    }
                }
            });
        });
    </script>

    <!------------------------------- Phone Slider close -------------------------------------------->


    <!------------------------------------ phone slider start ----------------------------------->

    <style>
        .testimonials1 {
            background-color: #F6F5FE;
            position: relative;
            padding-top: 20px;
        }

        .testimonials1:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 30%;
            background-color: #F6F5FE;
        }

        #customers-testimonials1 .item-details1 {
            background-color: #5433ff;
            color: #fff;
            padding: 20px 10px;
            text-align: left;
        }

        #customers-testimonials1 .item-details1 h5 {
            margin: 0 0 15px;
            font-size: 18px;
            line-height: 18px;
        }

        #customers-testimonials1 .item-details1 h5 span {
            color: red;
            float: right;
            padding-right: 20px;
        }

        #customers-testimonials1 .item-details1 p {
            font-size: 14px;
        }

        #customers-testimonials1 .item {
            text-align: center;
            margin-bottom: 80px;
        }

        .owl-carousel .owl-nav [class*='owl-'] {
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        .owl-carousel .owl-nav [class*='owl-'].disabled:hover {
            background-color: #d6d6d6;
        }

        .owl-carousel {
            position: relative;
        }

        .owl-carousel .owl-next,
        .owl-carousel .owl-prev {
            width: 50px;
            height: 50px;
            line-height: 50px;
            border-radius: 50%;
            position: absolute;
            top: 30%;
            font-size: 20px;
            color: #fff;
            border: 1px solid #ddd;
            text-align: center;
        }

        .owl-carousel .owl-prev {
            left: -70px;
        }

        .owl-carousel .owl-next {
            right: -70px;
        }


        .row {

            margin-right: 0px;
            margin-left: 0px;
        }

    </style>

    <!-- TESTIMONIALS -->
    <div class="row mob-show" style="background: #F6F5FE 0% 0% no-repeat padding-box;display:none;padding: 20px 10px;">
        <div class="col-sm-1"></div>
        <div class="col-sm-10 timeline-left  align-items-center">
            <div class="timeline-cont">
                <h2 class="section_title" style="">Use Cases for 1 to 500+ <span
                        style="background: var(--yellow);border-radius: 20px;padding: 0px 10px;box-shadow: 2px 2px 6px 5px #FF6BA4;">Teams</span>
                </h2>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
    <section class="testimonials1 mob-show" style="display:none;">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div id="customers-testimonials1" class="owl-carousel">

                        <!--TESTIMONIAL 1 -->
                        <div class="item1">
                            <div class="shadow-effect">
                                <h3>Project Management</h3>
                                <img class="img-responsive" src="https://slikk.ai/img/Homepage-Project-Management-image.svg"
                                    alt="">
                                <div class="item-details1">
                                    <h4>Pods</h4>
                                    <p> Organize your work communication with all the people, messages, and files related to tasks in one place. Work faster.</p>
                                    <button type="button" class="btn btn-primary btn-sm"
                                        style="background:#5433FF;color:#fff">Know More</button>
                                </div>
                            </div>
                        </div>
                        <!--END OF TESTIMONIAL 1 -->
                        <!--TESTIMONIAL 2 -->
                        <div class="item1">
                            <div class="shadow-effect">
                                <h3>Sales</h3>
                                <img class="img-responsive"
                                    src="https://slikk.ai/img/Homepage-sales-image.svg" alt="">
                                <div class="item-details1">
                                    <h4>Goals</h4>
                                    <p> Customizable workflows to streamline your work and boost productivity.</p>
                                    <button type="button" class="btn btn-primary btn-sm"
                                        style="background:#5433FF;color:#fff">Know More</button>
                                </div>
                            </div>
                        </div>
                        <!--END OF TESTIMONIAL 2 -->
                        <!--TESTIMONIAL 3 -->
                        <div class="item1">
                            <div class="shadow-effect">
                                <h3>CRM</h3>
                                <img class="img-responsive"
                                    src="https://slikk.ai/img/Homepage-CRM-image.svg" alt="">
                                <div class="item-details1">

                                    <h4>Event Planning</h4>
                                    <p> Plan events with complete visibility into who's doing what.
                                    </p>
                                    <button type="button" class="btn btn-primary btn-sm"
                                        style="background:#5433FF;color:#fff">Know More</button>
                                </div>
                            </div>
                        </div>
                        <!--END OF TESTIMONIAL 3 -->
                        <!--TESTIMONIAL 4 -->
                        <div class="item1">
                            <div class="shadow-effect">
                                <h3>CXO's </h3>
                                <img class="img-responsive"
                                    src="https://slikk.ai/img/Homepage-Startup-image.svg" alt="">
                                <div class="item-details1">
                                    <h4>360 Degree Views</h4>
                                    <p> See what your employees are doing, how they are feeling, and what you can do to help them be more productive at work.</p>
                                    <button type="button" class="btn btn-primary btn-sm"
                                        style="background:#5433FF;color:#fff">Know More</button>
                                </div>
                            </div>
                        </div>
                        <!--END OF TESTIMONIAL 4 -->
                        <!--TESTIMONIAL 5 -->
                        <div class="item1">
                            <div class="shadow-effect">
                                <h3>Remote Work </h3>
                                <img class="img-responsive"
                                    src="https://slikk.ai/img/Homepage-Remote-Work-image.svg" alt="">
                                <div class="item-details1">
                                    <h4>Productivity</h4>
                                <p> Not just hours. See the clear picture in terms of outcomes and the impact every employee is creating for the company.</p>
                                    <button type="button" class="btn btn-primary btn-sm"
                                        style="background:#5433FF;color:#fff">Know More</button>
                                </div>
                            </div>
                        </div>
                        <!--END OF TESTIMONIAL 5 -->

                        <!--TESTIMONIAL 6 -->
                        <div class="item1">
                            <div class="shadow-effect">
                                <h3>Marketing</h3>
                                <img class="img-responsive"
                                    src="https://slikk.ai/img/Homepage-Marketing-image.svg" alt="">
                                <div class="item-details1">
                                    <h4>Communication</h4>
                                    <p > Make communication easy for everyone you work with- both from your and outside your team.</p>
                                    <button type="button" class="btn btn-primary btn-sm"
                                        style="background:#5433FF;color:#fff">Know More</button>
                                </div>
                            </div>
                        </div>
                        <!--END OF TESTIMONIAL 6 -->
                        <!--TESTIMONIAL 7 -->
                        <div class="item1">
                            <div class="shadow-effect">
                                <h3>Design</h3>
                                <img class="img-responsive"
                                    src="https://slikk.ai/img/Homepage-Design-image.svg" alt="">
                                <div class="item-details1">
                                    <h4>Pods </h4>
                                    <p> Have all your task-related conversations and collaboration with specific stakeholders in one single place.</p>
                                    <button type="button" class="btn btn-primary btn-sm"
                                        style="background:#5433FF;color:#fff">Know More</button>
                                </div>
                            </div>
                        </div>
                        <!--END OF TESTIMONIAL 7 -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF TESTIMONIALS -->

    <script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js"></script>

    <script>
        jQuery(document).ready(function($) {
            "use strict";
            $('#customers-testimonials1').owlCarousel({
                loop: true,
                center: true,
                items: 1,
                margin: 30,
                autoplay: true,
                dots: false,
                nav: false,
                autoplayTimeout: 8500,
                smartSpeed: 1050,
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 1
                    },
                    1170: {
                        items: 1
                    }
                }
            });
        });
    </script>

    <!------------------------------- Phone Slider close -------------------------------------------->




    <!------------------------------------ contact slider start ----------------------------------->

    <style>
        .testimonials12 {
            background-color: #F6F5FE;
            position: relative;
            padding-top: 20px;
        }

        .testimonials12:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 30%;
            background-color: #F6F5FE;
        }

        #customers-testimonials12 .item-details12 {
            background-color: #fff;
            color: #000;
            padding: 20px 5px;
            text-align: left;
        }

        #customers-testimonials12 .item-details12 h5 {
            margin: 0 0 15px;
            font-size: 18px;
            line-height: 18px;
        }

        #customers-testimonials12 .item-details12 h5 span {
            color: red;
            float: right;
            padding-right: 20px;
        }

        #customers-testimonials12 .item-details12 p {
            font-size: 14px;
        }

        #customers-testimonials12 .item {
            text-align: center;
            margin-bottom: 80px;
        }

        .owl-carousel .owl-nav [class*='owl-'] {
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        .owl-carousel .owl-nav [class*='owl-'].disabled:hover {
            background-color: #d6d6d6;
        }

        .owl-carousel {
            position: relative;
        }

        .owl-carousel .owl-next,
        .owl-carousel .owl-prev {
            width: 50px;
            height: 50px;
            line-height: 50px;
            border-radius: 50%;
            position: absolute;
            top: 30%;
            font-size: 20px;
            color: #fff;
            border: 1px solid #ddd;
            text-align: center;
        }

        /* .owl-carousel .owl-prev {
                 left: -70px;
                }
                 .owl-carousel .owl-next {
                 right: -70px;
                } */


        .row {

            margin-right: 0px;
            margin-left: 0px;
        }

        .owl-carousel.owl-loaded {

            padding: 0px;
        }

        .hero_form {
            box-shadow: none;
            border-radius: 15px;
            background: #14008a;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            padding: 40px 45px 15px;
            min-height: 400px;
            color: #fff;
        }

        .form-control {
            height: 52px;
            background: transparent !important;
            color: #000;
            font-size: 18px;
            border-radius: 0px;
            -webkit-box-shadow: none;
            box-shadow: none;
            border: none !important;
            border-bottom: 1px dotted !important;
        }

        .hero_sub {
            background: var(--unnamed-color-5433ff) 0% 0% no-repeat padding-box;
            background: #5433FF 0% 0% no-repeat padding-box;

            border-radius: 4px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .form-control {
            color: #fff !important;
        }

        ::placeholder {
            color: #fff !important;
        }

    </style>



    <!-- TESTIMONIALS -->

    <div style="background: #F6F5FE 0% 0% no-repeat padding-box;padding: 20px 10px;">

        <div class="container">

            <div class="row">

                <div class="col-sm-8 timeline-left  align-items-center">
                    <div class="timeline-cont">
                        <h2 style="padding-top:20px">Let's Hear it From Them</h2>
                    </div>
                </div>
                <div class="col-sm-5" style="background: #f6f5fe"></div>
            </div>

            <div class="row">
                <div class="col-sm-7 timeline-left  align-items-center" style="padding-right: 0px;">



                    <section class="testimonials12 mtt-5" style="">
                        <div class="container">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div id="customers-testimonials12" class="owl-carousel">

                                        <!--TESTIMONIAL 1 -->
                                        <div class="item12">
                                            <div class="shadow-effect">
                                                <!-- <img class="img-responsive"
                                                    src="https://slikk.ai/img/Homepage-Manager3-image.jpg" alt=""> -->
                                                <div class="item-details12">
                                                <div class="text-center justify-content-center mt-2 mb-4"><img class="test-img" src="{{ url('assets/img/grabguidance.png')}}" alt="company-logo"></div>
                                                <p class="text-center"><span style="font-size: 18px;">Himanshu Puri</span> COO at GrabGuidance</p>
                                                    <!-- <h3>Himanshu Puri</h3>
                                                    <div class="row mt-2">
                                                        <div class="col-md-6 col-6">
                                                            <img src="{{ url('assets/img/grabguidance.png')}}" alt="company-logo">
                                                        </div>
                                                        <div class="col-md-6 col-6">
                                                            <h6 style="font-style:italic;">COO GrabGuidance</h6>
                                                        </div>
                                                    </div> -->
                                                    <p class="mt-4"><i class="fa fa-quote-left quote-size" aria-hidden="true"></i> Slikk is an impressive online tool for managing projects, tasks, workloads, and more, automatically and dynamically scheduling work for your whole team, even as factors change. <i class="fa fa-quote-right quote-size" aria-hidden="true"></i></p>
                                                    
                                                    <!-- <button type="button" class="btn btn-primary btn-sm"
                                                        style="background:#5433FF;color:#fff">Know More</button> -->
                                                </div>
                                            </div>
                                        </div>
                                        <!--END OF TESTIMONIAL 1 -->
                                        <!--TESTIMONIAL 2 -->
                                        <div class="item12">
                                            <div class="shadow-effect">
                                                <!-- <img class="img-responsive"
                                                    src="https://slikk.ai/img/Homepage-manager-image.jpg" alt=""> -->
                                                <div class="item-details12">
                                                <div class="text-center justify-content-center mb-2"><img class="test-img" src="{{ url('assets/img/logorevealer.jpg')}}" alt="company-logo"></div>
                                                <p class="text-center"><span style="font-size: 18px;">Bernard</span> CEO at MyRevealer</p>
                                                    <!--<h3>Bernard</h3>
                                                     <div class="row mt-2">
                                                        <div class="col-md-6 col-6">
                                                            <img src="{{ url('assets/img/logorevealer.jpg')}}" alt="company-logo" style="width:80%;">
                                                        </div>
                                                        <div class="col-md-6 col-6">
                                                            <h6 style="font-style:italic;">CEO MyRevealer</h6>
                                                        </div>
                                                    </div> -->
                                                    <p class="mt-4"><i class="fa fa-quote-left quote-size" aria-hidden="true"></i> Slikk is the solution that I found to be the best fit for how we work. It’s customizable enough for each person on the team to easily see the bigger picture and get things done. <i class="fa fa-quote-right quote-size" aria-hidden="true"></i></p>
                                                    <!-- <button type="button" class="btn btn-primary btn-sm"
                                                        style="background:#5433FF;color:#fff">Know More</button> -->
                                                </div>
                                            </div>
                                        </div>
                                        <!--TESTIMONIAL 3 -->
                                        <div class="item12">
                                            <div class="shadow-effect">
                                                <!-- <img class="img-responsive"
                                                    src="https://slikk.ai/img/Homepage-manager2-image.png" alt=""> -->
                                                <div class="item-details12">
                                                <div class="text-center justify-content-center mt-2 mb-4"><img class="test-img" src="{{ url('assets/img/supersourcing.svg')}}" alt="company-logo"></div>
                                                <p class="text-center"><span style="font-size: 18px;">Mayank Singh</span> CEO at Supersourcing</p>
                                                    <!-- <h3>Mayank Singh</h3>
                                                    <div class="row mt-2">
                                                        <div class="col-md-6 col-6">
                                                            <img src="{{ url('assets/img/supersourcing.svg')}}" alt="company-logo">
                                                        </div>
                                                        <div class="col-md-6 col-6">
                                                            <h6 style="font-style:italic;">CEO Supersourcing</h6>
                                                        </div>
                                                    </div> -->
                                                    <p class="mt-4"><i class="fa fa-quote-left quote-size" aria-hidden="true"></i> We use Slikk to increase our team’s efficiencies and track our projects in each stage of the marketing funnel. It’s been invaluable to track all of our work and conversations in one place. <i class="fa fa-quote-right quote-size" aria-hidden="true"></i></p>
                                                    <!-- <button type="button" class="btn btn-primary btn-sm"
                                                        style="background:#5433FF;color:#fff">Know More</button> -->
                                                </div>
                                            </div>
                                        </div>
                                        <!--END OF TESTIMONIAL 4 -->



                                        <!--TESTIMONIAL 3 -->

                                        <!--END OF TESTIMONIAL 5 -->

                                        <!--TESTIMONIAL 6 -->

                                        <!--END OF TESTIMONIAL 6 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>


                <div class="col-sm-5 timeline-left d-flex align-items-center" style="background: #f6f5fe;">

                    <div class="hero_form" style="width:80%">

                        <h4>Write To Us</h4>
                        <form class="contact-form " method="post" action="{{ url('save_contact') }}">

                            @csrf
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control inputbox" name="name" id="name" placeholder="Your Name"
                                required>
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control inputbox" name="email" id="name"
                                placeholder="Your Email" required>
                            <label for="name">Your Name</label>

                            <select class="form-control inputbox " id="country" name="country" placeholder="Select Country"
                                required>
                                <option value="">Country</option>
                                <option value='us'>United States +(1)</option>
                                <option value='gb'>United Kingdom +(44)</option>
                                <option value='jp'>Japan +(81)</option>
                                <option value='af'>Afghanistan +(93)</option>
                                <option value='al'>Albania +(355)</option>
                                <option value='dz'>Algeria +(213)</option>
                                <option value='as'>American Samoa +(1-684)</option>
                                <option value='ad'>Andorra +(376)</option>
                                <option value='ao'>Angola +(244)</option>
                                <option value='ai'>Anguilla +(1-264)</option>
                                <option value='aq'>Antarctica +(672)</option>
                                <option value='ag'>Antigua and Barbuda +(1-268)</option>
                                <option value='ar'>Argentina +(54)</option>
                                <option value='am'>Armenia +(374)</option>
                                <option value='aw'>Aruba +(297)</option>
                                <option value='au'>Australia +(61)</option>
                                <option value='at'>Austria +(43)</option>
                                <option value='az'>Azerbaijan +(994)</option>
                                <option value='bs'>Bahamas +(1-242)</option>
                                <option value='bh'>Bahrain +(973)</option>
                                <option value='bd'>Bangladesh +(880)</option>
                                <option value='bb'>Barbados +(1-246)</option>
                                <option value='by'>Belarus +(375)</option>
                                <option value='be'>Belgium +(32)</option>
                                <option value='bz'>Belize +(501)</option>
                                <option value='bj'>Benin +(229)</option>
                                <option value='bm'>Bermuda +(1-441)</option>
                                <option value='bt'>Bhutan +(975)</option>
                                <option value='bo'>Bolivia +(591)</option>
                                <option value='ba'>Bosnia and Herzegowina +(387)</option>
                                <option value='bw'>Botswana +(267)</option>
                                <option value='bv'>Bouvet Island +(47)</option>
                                <option value='br'>Brazil +(55)</option>
                                <option value='io'>British Indian Ocean Territory +(246)</option>
                                <option value='bn'>Brunei Darussalam +(673)</option>
                                <option value='bg'>Bulgaria +(359)</option>
                                <option value='bf'>Burkina Faso +(226)</option>
                                <option value='bi'>Burundi +(257)</option>
                                <option value='kh'>Cambodia +(855)</option>
                                <option value='cm'>Cameroon +(237)</option>
                                <option value='ca'>Canada +(1)</option>
                                <option value='cv'>Cape Verde +(238)</option>
                                <option value='ky'>Cayman Islands +(1-345)</option>
                                <option value='cf'>Central African Republic +(236)</option>
                                <option value='td'>Chad +(235)</option>
                                <option value='cl'>Chile +(56)</option>
                                <option value='cn'>China +(86)</option>
                                <option value='cx'>Christmas Island +(61)</option>
                                <option value='cc'>Cocos (Keeling) Islands +(61)</option>
                                <option value='co'>Colombia +(57)</option>
                                <option value='km'>Comoros +(269)</option>
                                <option value='cg'>Congo Democratic Republic of +(242)</option>
                                <option value='ck'>Cook Islands +(682)</option>
                                <option value='cr'>Costa Rica +(506)</option>
                                <option value='ci'>Cote D&#039;Ivoire +(225)</option>
                                <option value='hr'>Croatia +(385)</option>
                                <option value='cu'>Cuba +(53)</option>
                                <option value='cy'>Cyprus +(357)</option>
                                <option value='cz'>Czech Republic +(420)</option>
                                <option value='dk'>Denmark +(45)</option>
                                <option value='dj'>Djibouti +(253)</option>
                                <option value='dm'>Dominica +(1-767)</option>
                                <option value='do'>Dominican Republic +(1-809)</option>
                                <option value='tl'>Timor-Leste +(670)</option>
                                <option value='ec'>Ecuador +(593)</option>
                                <option value='eg'>Egypt +(20)</option>
                                <option value='sv'>El Salvador +(503)</option>
                                <option value='gq'>Equatorial Guinea +(240)</option>
                                <option value='er'>Eritrea +(291)</option>
                                <option value='ee'>Estonia +(372)</option>
                                <option value='et'>Ethiopia +(251)</option>
                                <option value='fk'>Falkland Islands (Malvinas) +(500)</option>
                                <option value='fo'>Faroe Islands +(298)</option>
                                <option value='fj'>Fiji +(679)</option>
                                <option value='fi'>Finland +(358)</option>
                                <option value='fr'>France +(33)</option>
                                <option value='gf'>French Guiana +(594)</option>
                                <option value='pf'>French Polynesia +(689)</option>
                                <option value='tf'>French Southern Territories +(262)</option>
                                <option value='ga'>Gabon +(241)</option>
                                <option value='gm'>Gambia +(220)</option>
                                <option value='ge'>Georgia +(995)</option>
                                <option value='de'>Germany +(49)</option>
                                <option value='gh'>Ghana +(233)</option>
                                <option value='gi'>Gibraltar +(350)</option>
                                <option value='gr'>Greece +(30)</option>
                                <option value='gl'>Greenland +(299)</option>
                                <option value='gd'>Grenada +(1-473)</option>
                                <option value='gp'>Guadeloupe +(590)</option>
                                <option value='gu'>Guam +(1-671)</option>
                                <option value='gt'>Guatemala +(502)</option>
                                <option value='gn'>Guinea +(224)</option>
                                <option value='gw'>Guinea-bissau +(245)</option>
                                <option value='gy'>Guyana +(592)</option>
                                <option value='ht'>Haiti +(509)</option>
                                <option value='hm'>Heard Island and McDonald Islands +(011)</option>
                                <option value='hn'>Honduras +(504)</option>
                                <option value='hk'>Hong Kong +(852)</option>
                                <option value='hu'>Hungary +(36)</option>
                                <option value='is'>Iceland +(354)</option>
                                <option value='in'>India +(91)</option>
                                <option value='id'>Indonesia +(62)</option>
                                <option value='ir'>Iran (Islamic Republic of) +(98)</option>
                                <option value='iq'>Iraq +(964)</option>
                                <option value='ie'>Ireland +(353)</option>
                                <option value='il'>Israel +(972)</option>
                                <option value='it'>Italy +(39)</option>
                                <option value='jm'>Jamaica +(1-876)</option>
                                <option value='jp'>Japan +(81)</option>
                                <option value='jo'>Jordan +(962)</option>
                                <option value='kz'>Kazakhstan +(7)</option>
                                <option value='ke'>Kenya +(254)</option>
                                <option value='ki'>Kiribati +(686)</option>
                                <option value='kp'>Korea, Democratic People&#039;s Republic of +(850)</option>
                                <option value='kr'>South Korea +(82)</option>
                                <option value='kw'>Kuwait +(965)</option>
                                <option value='kg'>Kyrgyzstan +(996)</option>
                                <option value='la'>Lao People&#039;s Democratic Republic +(856)</option>
                                <option value='lv'>Latvia +(371)</option>
                                <option value='lb'>Lebanon +(961)</option>
                                <option value='ls'>Lesotho +(266)</option>
                                <option value='lr'>Liberia +(231)</option>
                                <option value='ly'>Libya +(218)</option>
                                <option value='li'>Liechtenstein +(423)</option>
                                <option value='lt'>Lithuania +(370)</option>
                                <option value='lu'>Luxembourg +(352)</option>
                                <option value='mo'>Macao +(853)</option>
                                <option value='mk'>Macedonia, The Former Yugoslav Republic of +(389)</option>
                                <option value='mg'>Madagascar +(261)</option>
                                <option value='mw'>Malawi +(265)</option>
                                <option value='my'>Malaysia +(60)</option>
                                <option value='mv'>Maldives +(960)</option>
                                <option value='ml'>Mali +(223)</option>
                                <option value='mt'>Malta +(356)</option>
                                <option value='mh'>Marshall Islands +(692)</option>
                                <option value='mq'>Martinique +(596)</option>
                                <option value='mr'>Mauritania +(222)</option>
                                <option value='mu'>Mauritius +(230)</option>
                                <option value='yt'>Mayotte +(262)</option>
                                <option value='mx'>Mexico +(52)</option>
                                <option value='fm'>Micronesia, Federated States of +(691)</option>
                                <option value='md'>Moldova +(373)</option>
                                <option value='mc'>Monaco +(377)</option>
                                <option value='mn'>Mongolia +(976)</option>
                                <option value='ms'>Montserrat +(1-664)</option>
                                <option value='ma'>Morocco +(212)</option>
                                <option value='mz'>Mozambique +(258)</option>
                                <option value='mm'>Myanmar +(95)</option>
                                <option value='na'>Namibia +(264)</option>
                                <option value='nr'>Nauru +(674)</option>
                                <option value='np'>Nepal +(977)</option>
                                <option value='nl'>Netherlands +(31)</option>
                                <option value='an'>Netherlands Antilles +(599)</option>
                                <option value='nc'>New Caledonia +(687 )</option>
                                <option value='nz'>New Zealand +(64)</option>
                                <option value='ni'>Nicaragua +(505)</option>
                                <option value='ne'>Niger +(227)</option>
                                <option value='ng'>Nigeria +(234)</option>
                                <option value='nu'>Niue +(683)</option>
                                <option value='nf'>Norfolk Island +(672)</option>
                                <option value='mp'>Northern Mariana Islands +(1-670)</option>
                                <option value='no'>Norway +(47)</option>
                                <option value='om'>Oman +(968)</option>
                                <option value='pk'>Pakistan +(92)</option>
                                <option value='pw'>Palau +(680)</option>
                                <option value='pa'>Panama +(507)</option>
                                <option value='pg'>Papua New Guinea +(675)</option>
                                <option value='py'>Paraguay +(595)</option>
                                <option value='pe'>Peru +(51)</option>
                                <option value='ph'>Philippines +(63)</option>
                                <option value='pn'>Pitcairn +(64)</option>
                                <option value='pl'>Poland +(48)</option>
                                <option value='pt'>Portugal +(351)</option>
                                <option value='pr'>Puerto Rico +(1-787)</option>
                                <option value='qa'>Qatar +(974)</option>
                                <option value='re'>Reunion +(262)</option>
                                <option value='ro'>Romania +(40)</option>
                                <option value='ru'>Russian Federation +(7)</option>
                                <option value='rw'>Rwanda +(250)</option>
                                <option value='kn'>Saint Kitts and Nevis +(1-869)</option>
                                <option value='lc'>Saint Lucia +(1-758)</option>
                                <option value='vc'>Saint Vincent and the Grenadines +(1-784)</option>
                                <option value='ws'>Samoa +(685)</option>
                                <option value='sm'>San Marino +(378)</option>
                                <option value='st'>Sao Tome and Principe +(239)</option>
                                <option value='sa'>Saudi Arabia +(966)</option>
                                <option value='sn'>Senegal +(221)</option>
                                <option value='sc'>Seychelles +(248)</option>
                                <option value='sl'>Sierra Leone +(232)</option>
                                <option value='sg'>Singapore +(65)</option>
                                <option value='sk'>Slovakia (Slovak Republic) +(421)</option>
                                <option value='si'>Slovenia +(386)</option>
                                <option value='sb'>Solomon Islands +(677)</option>
                                <option value='so'>Somalia +(252)</option>
                                <option value='za'>South Africa +(27)</option>
                                <option value='gs'>South Georgia and the South Sandwich Islands +(500)</option>
                                <option value='es'>Spain +(34)</option>
                                <option value='lk'>Sri Lanka +(94)</option>
                                <option value='sh'>Saint Helena, Ascension and Tristan da Cunha +(290)</option>
                                <option value='pm'>St. Pierre and Miquelon +(508)</option>
                                <option value='sd'>Sudan +(249)</option>
                                <option value='sr'>Suriname +(597)</option>
                                <option value='sj'>Svalbard and Jan Mayen Islands +(47)</option>
                                <option value='sz'>Swaziland +(268)</option>
                                <option value='se'>Sweden +(46)</option>
                                <option value='ch'>Switzerland +(41)</option>
                                <option value='sy'>Syrian Arab Republic +(963)</option>
                                <option value='tw'>Taiwan +(886)</option>
                                <option value='tj'>Tajikistan +(992)</option>
                                <option value='tz'>Tanzania, United Republic of +(255)</option>
                                <option value='th'>Thailand +(66)</option>
                                <option value='tg'>Togo +(228)</option>
                                <option value='tk'>Tokelau +(690)</option>
                                <option value='to'>Tonga +(676)</option>
                                <option value='tt'>Trinidad and Tobago +(1-868)</option>
                                <option value='tn'>Tunisia +(216)</option>
                                <option value='tr'>Turkey +(90)</option>
                                <option value='tm'>Turkmenistan +(993)</option>
                                <option value='tc'>Turks and Caicos Islands +(1-649)</option>
                                <option value='tv'>Tuvalu +(688)</option>
                                <option value='ug'>Uganda +(256)</option>
                                <option value='ua'>Ukraine +(380)</option>
                                <option value='ae'>United Arab Emirates +(971)</option>
                                <option value='gb'>United Kingdom +(44)</option>
                                <option value='us'>United States +(1)</option>
                                <option value='um'>United States Minor Outlying Islands +(246)</option>
                                <option value='uy'>Uruguay +(598)</option>
                                <option value='uz'>Uzbekistan +(998)</option>
                                <option value='vu'>Vanuatu +(678)</option>
                                <option value='va'>Vatican City State (Holy See) +(379)</option>
                                <option value='ve'>Venezuela +(58)</option>
                                <option value='vn'>Vietnam +(84)</option>
                                <option value='vg'>Virgin Islands (British) +(1-284)</option>
                                <option value='vi'>Virgin Islands (U.S.) +(1-340)</option>
                                <option value='wf'>Wallis and Futuna Islands +(681)</option>
                                <option value='eh'>Western Sahara +(212)</option>
                                <option value='ye'>Yemen +(967)</option>
                                <option value='rs'>Serbia +(381)</option>
                                <option value='zm'>Zambia +(260)</option>
                                <option value='zw'>Zimbabwe +(263)</option>
                                <option value='ax'>Aaland Islands +(358)</option>
                                <option value='ps'>Palestine +(970)</option>
                                <option value='me'>Montenegro +(382)</option>
                                <option value='gg'>Guernsey +(44-1481)</option>
                                <option value='im'>Isle of Man +(44-1624)</option>
                                <option value='je'>Jersey +(44-1534)</option>
                                <option value='cw'>Curaçao +(599)</option>
                                <option value='ci'>Ivory Coast +(225)</option>
                                <option value='xk'>Kosovo +(383)</option>
                            </select>

                            <input type="text" class="form-control inputbox" name="phone" id="name"
                                placeholder="Your Phone" required>
                            <label for="name">Your Name</label>
                            <select class="form-control inputbox" name="address" id="users" required>
                                <option value="">How Many Users?</option>
                                <option value="0 - 20">0 - 20</option>
                                <option value="20 - 50">20 - 50</option>
                                <option value="50 - 100">50 - 100</option>
                            </select>
                            <!-- <label for="name">Your Name</label>
                <input type="text" class="form-control inputbox" name="name" id="name"> -->

                            {{-- <input type="checkbox" class="form-control inputcheck" name="accept" id="accept"> I'd like a Live Demo --}}

                            {{-- <label for="name">Your Name</label>
<textarea class="form-control inputtext" name="msg" id="name" placeholder="Your Query" > </textarea> --}}
                            <label for="name">Your Name</label>
                            <input type="submit" anem="submit" value="Book A Demo" class="btn btn-primary book"
                                style="color:#fff!important;width:100%;    border: none;">

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF TESTIMONIALS -->

        <script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js"></script>

        <script>
            jQuery(document).ready(function($) {
                "use strict";
                $('#customers-testimonials12').owlCarousel({
                    loop: true,
                    items: 2,
                    margin: 10,
                    autoplay: false,
                    dots: false,
                    nav: false,
                    autoplayTimeout: 8500,
                    smartSpeed: 450,
                    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        1170: {
                            items: 2
                        }
                    }
                });
            });
        </script>

        <!------------------------------- contact Slider close -------------------------------------------->


        <div class="container">

            @if (count($reportFaqDetail) > 0)
                <div class="row">
                    <div class="col-sm-12 bottom-cont" style="margin-top:30px;">
                        <div class="timeline-cont">
                            <div class="timeline-p">

                                <div class="accordion-content">
                                    <h2>FAQs</h2>


                                    @foreach ($reportFaqDetail as $reportFaqDetailData)
                                        <div class="accordion-item" style="margin-top:30px;">

                                            @if ($reportFaqDetailData->q1 != '')
                                                <header class="item-header">
                                                    <h3 class="item-question">
                                                        {{ $reportFaqDetailData->q1 }}
                                                    </h3>
                                                    <div class="item-icon">
                                                        <i class='bx bx-chevron-down'></i>
                                                    </div>
                                                </header>


                                                <div class="item-content">
                                                    <p class="item-answer">
                                                        {{ $reportFaqDetailData->a1 }}
                                                    </p>
                                                </div>
                                        </div>
                                    @endif

                                    @if ($reportFaqDetailData->q2 != '')
                                        <div class="accordion-item" style="margin-top:30px;">
                                            <header class="item-header">
                                                <h3 class="item-question">
                                                    {{ $reportFaqDetailData->q2 }}
                                                </h3>
                                                <div class="item-icon">
                                                    <i class='bx bx-chevron-down'></i>
                                                </div>
                                            </header>


                                            <div class="item-content">
                                                <p class="item-answer">
                                                    {{ $reportFaqDetailData->a2 }}
                                                </p>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($reportFaqDetailData->q3 != '')
                                        <div class="accordion-item" style="margin-top:30px;">
                                            <header class="item-header">
                                                <h3 class="item-question">
                                                    {{ $reportFaqDetailData->q3 }}
                                                </h3>
                                                <div class="item-icon">
                                                    <i class='bx bx-chevron-down'></i>
                                                </div>
                                            </header>


                                            <div class="item-content">
                                                <p class="item-answer">
                                                    {{ $reportFaqDetailData->a3 }}
                                                </p>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($reportFaqDetailData->q4 != '')
                                        <div class="accordion-item" style="margin-top:30px;">
                                            <header class="item-header">
                                                <h3 class="item-question">
                                                    {{ $reportFaqDetailData->q4 }}
                                                </h3>
                                                <div class="item-icon">
                                                    <i class='bx bx-chevron-down'></i>
                                                </div>
                                            </header>


                                            <div class="item-content">
                                                <p class="item-answer">
                                                    {{ $reportFaqDetailData->a4 }}
                                                </p>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($reportFaqDetailData->q5 != '')
                                        <div class="accordion-item" style="margin-top:30px;">
                                            <header class="item-header">
                                                <h3 class="item-question">
                                                    {{ $reportFaqDetailData->q5 }}
                                                </h3>
                                                <div class="item-icon">
                                                    <i class='bx bx-chevron-down'></i>
                                                </div>
                                            </header>


                                            <div class="item-content">
                                                <p class="item-answer">
                                                    {{ $reportFaqDetailData->a5 }}
                                                </p>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($reportFaqDetailData->q6 != '')
                                        <div class="accordion-item" style="margin-top:30px;">
                                            <header class="item-header">
                                                <h3 class="item-question">
                                                    {{ $reportFaqDetailData->q6 }}
                                                </h3>
                                                <div class="item-icon">
                                                    <i class='bx bx-chevron-down'></i>
                                                </div>
                                            </header>


                                            <div class="item-content">
                                                <p class="item-answer">
                                                    {{ $reportFaqDetailData->a6 }}
                                                </p>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($reportFaqDetailData->q7 != '')
                                        <div class="accordion-item" style="margin-top:30px;">
                                            <header class="item-header">
                                                <h3 class="item-question">
                                                    {{ $reportFaqDetailData->q7 }}
                                                </h3>
                                                <div class="item-icon">
                                                    <i class='bx bx-chevron-down'></i>
                                                </div>
                                            </header>


                                            <div class="item-content">
                                                <p class="item-answer">
                                                    {{ $reportFaqDetailData->a7 }}
                                                </p>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($reportFaqDetailData->q8 != '')
                                        <div class="accordion-item" style="margin-top:30px;">
                                            <header class="item-header">
                                                <h3 class="item-question">
                                                    {{ $reportFaqDetailData->q8 }}
                                                </h3>
                                                <div class="item-icon">
                                                    <i class='bx bx-chevron-down'></i>
                                                </div>
                                            </header>


                                            <div class="item-content">
                                                <p class="item-answer">
                                                    {{ $reportFaqDetailData->a8 }}
                                                </p>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($reportFaqDetailData->q9 != '')
                                        <div class="accordion-item" style="margin-top:30px;">
                                            <header class="item-header">
                                                <h3 class="item-question">
                                                    {{ $reportFaqDetailData->q9 }}
                                                </h3>
                                                <div class="item-icon">
                                                    <i class='bx bx-chevron-down'></i>
                                                </div>
                                            </header>


                                            <div class="item-content">
                                                <p class="item-answer">
                                                    {{ $reportFaqDetailData->a9 }}
                                                </p>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($reportFaqDetailData->q10 != '')
                                        <div class="accordion-item" style="margin-top:30px;">
                                            <header class="item-header">
                                                <h3 class="item-question">
                                                    {{ $reportFaqDetailData->q10 }}
                                                </h3>
                                                <div class="item-icon">
                                                    <i class='bx bx-chevron-down'></i>
                                                </div>
                                            </header>


                                            <div class="item-content">
                                                <p class="item-answer">
                                                    {{ $reportFaqDetailData->a10 }}
                                                </p>
                                            </div>
                                        </div>
                                    @endif
                                </div>
            @endforeach

        </div>

    </div>
    </div>
    </div>
    @endif

    <script>
        const accordionBtns = document.querySelectorAll(".item-header");

        accordionBtns.forEach((accordion) => {
            accordion.onclick = function() {
                this.classList.toggle("active");

                let content = this.nextElementSibling;
                console.log(content);

                if (content.style.maxHeight) {
                    //this is if the accordion is open
                    content.style.maxHeight = null;
                } else {
                    //if the accordion is currently closed
                    content.style.maxHeight = content.scrollHeight + "px";
                    console.log(content.style.maxHeight);
                }
            };
        });
    </script>

</div>

</div>

</div>


<div class="container">
    <div class="row">
        <div class="col-sm-12 bottom-cont" style="text-align:justify;margin-top:30px;">
            <div class="timeline-cont">
                <div class="timeline-p bottop-cont">

                    @php
                        $desc = $bottom_content;
                        $desc = preg_replace('/\sstyle=("|\').*?("|\')/i', '', $desc);
                    @endphp
                    {!! html_entity_decode($desc) !!}

                </div>
            </div>
        </div>

    </div>
    </div>

    </div>


    <!--
                <div class="row">



                <div class="col-sm-12 bottom-cont d-flex" style="text-align:justify;margin-top:30px;">
                  <div class="timeline-cont">
                    <div class="timeline-p">{{ $bottom_content }}</div>
                  </div>
                </div>


                </div>



                  <div class="row">



                <div class="col-sm-12 bottom-cont d-flex" style="text-align:justify;margin-top:30px;">
                  <div class="timeline-cont">
                    <div class="timeline-p">{{ $bottom_content }}</div>
                  </div>
                </div>


                </div> -->




    </div>
@endsection
@section('custom-script')
@endsection
