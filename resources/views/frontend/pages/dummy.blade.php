@extends('frontend.layouts.master')
@section('content')
    <style>
        .timeline-p li:before {
            display: block;
            flex-shrink: 0;
            width: 33px;
            height: 33px;
            margin-right: 10px;

            vertical-align: middle;

            background: url('https://slikk.ai/assets/img/li.png') no-repeat left center;
            background-size: contain;

            content: '';
        }

        .timeline-p li {
            list-style: none;
            display: flex;
            margin-bottom: 20px;
            font-size: 14px;
        }
    </style>

    <div class="jumbotron text-center top-banner" style="background: transparent url(img/Component%2051%20–%204.png) 0% 0% no-repeat padding-box;
        opacity: 1;
        background-size: cover;
        background-position: bottom;    min-height: 400px;">

        <div class="container">
            <div class="row" style="padding-top: 40px;">
                <div class="col-sm-5">
                    <h1 class="hero_title">Explore the various use cases for our product</h1>
                    <p class="hero_desc">We are here to help all kinds of businesses to achieve objectives, goals and
                        boost employee productivity and performance.</p>

                </div>

                <div class="col-sm-7">
                    <img src="https://slikk.ai/img/Use Cases-Hero-Image.svg" class="img-responsive banner-img"
                        style="width: 400px;" />
                </div>

            </div>

        </div>

    </div>

    <!-- <h2 class="section_title" style="margin-top:60px;margin-bottom:70px">Add visibility to your work</h2>-->

    <div class="container">
        <!--<div class="row">
        <div class="col-sm-4 card-box">
          <div class="icon"><img src="https://slikk.ai/assets/img/Icon open-graph.png"></div>
          <h3 class="box-title">Work & Forecasting</h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
        <div class="col-sm-4 card-box">
          <div class="icon"><img src="https://slikk.ai/assets/img/Icon material-group-work.png"></div>
          <h3 class="box-title">Collaboration Pods</h3>

        </div>
        <div class="col-sm-4 card-box">
          <div class="icon"><img src="https://slikk.ai/assets/img/Icon metro-flow-tree.png"></div>
          <h3 class="box-title">Strategic Workflows</h3>

        </div>
      </div> -->



        <div class="row marb_50">
            <div class="col-sm-6 timeline-left  d-flex align-items-center order-12 order-md-1">
                <div class="timeline-cont">
                    <h3 class="timeline-title" style="text-align:left;padding-bottom:0px">Project Management</h3>
                    <b class="sub_all">For The Project Management You Don't Yet Know</b>

                    <ul class="timeline-p" style="margin-top: 20px;">

                        <li>Collaborate with your team</li>
                        <li>Visualise and plan</li>
                        <li>Set priority to the tasks</li>
                        <li>Track progress</li>
                        <li>View tasks in Kanban boards</li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-6 timeline-right order-1 order-md-12">
                <img src="https://slikk.ai/img/projectmanagement.svg" style="width:100%">

            </div>

        </div>


        <div class="row marb_50" style="background: #FDF6FF 0% 0% no-repeat padding-box;">

            <div class="col-sm-6 timeline-right">
                {{-- <img src="https://slikk.ai/assets/img/88830-web-design-people_PosterImage.png" style="width:50%"> --}}
                <img src="https://slikk.ai/img/Sales.svg" style="width:100%">

            </div>

            <div class="col-sm-6 timeline-left  d-flex align-items-center">
                <div class="timeline-cont">
                    <h3 class="timeline-title" style="text-align:left;padding-bottom:0px">Sales</h3>
                    <b class="sub_all">Simply Manage Sales!</b>

                    <ul class="timeline-p" style="margin-top: 20px;">

                        <li>Reduce human dependence</li>
                        <li>Real time reporting</li>
                        <li>In built marketing automation infrastructure</li>
                        <li>Manage accounts with ease</li>

                    </ul>

                </div>
            </div>


        </div>


        <div class="row marb_50">
            <div class="col-sm-6 timeline-left order-md-1 order-12 d-flex align-items-center">
                <div class="timeline-cont">
                    <h3 class="timeline-title" style="text-align:left;padding-bottom:0px">CRM</h3>
                    <b class="sub_all">The Art Of Client Relationship Mangement With Ease</b>

                    <ul class="timeline-p" style="margin-top: 20px;">

                        <li>Run campaigns and generate leads</li>
                        <li>Track opportunities</li>
                        <li>Produce invoices</li>
                        <li>Assign, qualify and convert leads</li>
                        <li>Create a database</li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-6 order-1 order-md-12 timeline-right">
                <img src="https://slikk.ai/img/crm.svg" style="width:100%">

            </div>

        </div>


        <div class="row marb_50" style="background: #FDF6FF 0% 0% no-repeat padding-box;">

            <div class="col-sm-6 timeline-right">
                {{-- <img src="https://slikk.ai/assets/img/86199-business-analytics_PosterImage.png" style="width:50%;    margin-bottom: -50px;"> --}}
                <img src="https://slikk.ai/img/Startup.svg" style="width:100%">

            </div>

            <div class="col-sm-6 timeline-left  d-flex align-items-center">
                <div class="timeline-cont">
                    <h3 class="timeline-title" style="text-align:left;padding-bottom:0px">Startup</h3>
                    <b class="sub_all">Let your startup touch skies with Slikk</b>

                    <ul class="timeline-p" style="margin-top: 20px;">

                        <li>Product roadmaps</li>
                        <li>Track your goals</li>
                        <li>Communicate and share ideas</li>
                        <li>Keep track of expenses and ROI</li>

                    </ul>

                </div>
            </div>


        </div>

        <div class="row marb_50">
            <div class="col-sm-6 order-12 order-md-1 timeline-left  d-flex align-items-center">
                <div class="timeline-cont">
                    <h3 class="timeline-title" style="text-align:left;padding-bottom:0px">Remote Work</h3>
                    <b class="sub_all">Nothing works better than managing your remote employess with Slikk</b>

                    <ul class="timeline-p" style="margin-top: 20px;">

                        <li>Track progress</li>
                        <li>Assiogn tasks to employees and pods</li>
                        <li>Set priorities</li>
                        <li>Schedule meetings</li>
                        <li>Collaborate better with your team</li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-6 order-1 order-md-12 timeline-right">
                {{-- <img src="https://slikk.ai/assets/img/83935-facebook-notification_PosterImage.png" style="width:15%"> --}}
                <img src="https://slikk.ai/img/remotework.svg" style="width:100%">

            </div>

        </div>


        <div class="row marb_50" style="background: #FDF6FF 0% 0% no-repeat padding-box;">

            <div class="col-sm-6 timeline-right">
                {{-- <img src="https://slikk.ai/assets/img/67920-meeting-analytics_PosterImage.png" style="width:50%"> --}}
                <img src="https://slikk.ai/img/marketing.svg" style="width:100%">

            </div>

            <div class="col-sm-6 timeline-left  d-flex align-items-center">
                <div class="timeline-cont">
                    <h3 class="timeline-title" style="text-align:left;padding-bottom:0px">Marketing</h3>
                    <b class="sub_all">Marketing made easy with Slikk!</b>

                    <ul class="timeline-p" style="margin-top: 20px;">

                        <li>Enable better collaboration</li>
                        <li>Set reminders</li>
                        <li>Measure ROI</li>
                        <li>Real time chat</li>

                    </ul>

                </div>
            </div>


        </div>



        <div class="row marb_50">
            <div class="col-sm-6 timeline-left order-12 order-md-1  d-flex align-items-center">
                <div class="timeline-cont">
                    <h3 class="timeline-title" style="text-align:left;padding-bottom:0px">Design</h3>
                    <b class="sub_all">Slikk! Designed with design</b>

                    <ul class="timeline-p" style="margin-top: 20px;">

                        <li>Get approvals faster</li>
                        <li>Manage workload</li>
                        <li>Add comments</li>
                        <li>Map different tasks</li>
                        <li>Add attachments</li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-6 order-1 order-md-12 timeline-right">
                {{-- <img src="https://slikk.ai/assets/img/77218-search-imm_PosterImage.png" style="width:50%"> --}}
                <img src="https://slikk.ai/img/design.svg" style="width:100%">

            </div>

        </div>

       
        <div class="container">

            <div class="row marb_50">
                <div class="col-sm-4 d-flex align-items-center">
                    <div class="video-cont">
                        <span><i class="fa fa-play-circle" aria-hidden="true"></i><span>
                                <h5>The Process of onbording</h5>
                    </div>
                </div>
                <div class="col-sm-4 d-flex align-items-center">
                    <div class="video-cont">
                        <span><i class="fa fa-play-circle" aria-hidden="true"></i><span>
                                <h5>The Process of onbording</h5>
                    </div>

                </div>

                <div class="col-sm-4 d-flex align-items-center">
                    <div class="video-cont">
                        <span><i class="fa fa-play-circle" aria-hidden="true"></i><span>
                                <h5>The Process of onbording</h5>
                    </div>

                </div>

                <div class="col-sm-4 d-flex align-items-center">
                    <div class="video-cont">
                        <span><i class="fa fa-play-circle" aria-hidden="true"></i><span>
                                <h5>The Process of onbording</h5>
                    </div>

                </div>

                <div class="col-sm-4 d-flex align-items-center">
                    <div class="video-cont">
                        <span><i class="fa fa-play-circle" aria-hidden="true"></i><span>
                                <h5>The Process of onbording</h5>
                    </div>

                </div>

                <div class="col-sm-4 d-flex align-items-center">
                    <div class="video-cont">
                        <span><i class="fa fa-play-circle" aria-hidden="true"></i><span>
                                <h5>The Process of onbording</h5>
                    </div>

                </div>

            </div>

        </div>
    </div>


    <div class="container">

        <h2 class="outside-head">The process of onboarding</h2>

        <div class="row marb_50 video-box">

       

            <div class="col-sm-6 d-flex align-items-center">
                
                <div class="info-cont">
                   <p>Setup in minutes, streamline your work and boost the productivity of your teams. Manage your projects with better task routing and easy workload planning. With intuitive intake forms and customizable workflows, your team can release quality products in less time.</p>

                   <p>Setup in minutes, streamline your work and boost the productivity of your teams. Manage your projects with better task routing and easy workload planning. With intuitive intake forms and customizable workflows, your team can release quality products in less time.</p>

                   <p>Setup in minutes, streamline your work and boost the productivity of your teams. Manage your projects with better task routing and easy workload planning. With intuitive intake forms and customizable workflows, your team can release quality products in less time.</p>
                </div>

            </div>

            <div class="col-sm-6 d-flex align-items-center">
                <div class="vid-cont">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/f_exDBcGYnM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

            </div>


        </div>
    </div>
@endsection
