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

    <div class="jumbotron text-center top-banner"
        style="background: transparent url(img/Component%2051%20–%204.png) 0% 0% no-repeat padding-box;opacity: 1;background-size: cover;background-position: bottom;min-height: 400px;">

        <div class="container">
            <div class="row" style="padding-top: 40px;">
                <div class="col-sm-6">
                    <h1 class="hero_title">Transform the way you work with some Slikk functionalities</h1>
                    <p class="hero_desc" style="font-weight:100">Give your teams and leaders total visibility into all
                        tasks, employee performance, and collaboration opportunities. See, for sure, what is happening at
                        work each day, week, or month.
                    </p>
                    <!-- <p class="hero_desc">We're here to help businesses and employees reach their full performance potential. We equip teams like yours with everything you need to focus on actual work, so there is no need to chase emails, juggle multiple tools, and work on spreadsheets.</p> -->

                </div>

                <div class="col-sm-6">
                    <img src="https://slikk.ai/assets/img/feature-banner.svg" class="img-responsive banner-img"
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
                    <h2 class="timeline-title" style="text-align:left;padding-bottom:0px">Task Management</h2>
                    <b class="sub_all">Prioritize tasks, on your own terms. Keep track and never miss a deadline.</b>

                    <ul class="timeline-p" style="margin-top: 20px;">

                        <li>Organize tasks and make quick changes with task management software.</li>
                        <li>Shuffle tasks effortlessly to meet the changing requirements.</li>
                        <li>Enjoy features like filter, search, recurring tasks, multitask toolbar.</li>
                        <li>Prioritize your tasks as high, low, and medium.</li>
                        <li>Assign due time to the tasks with task management tool.</li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-6 timeline-right order-1 order-md-12">
                <img src="https://slikk.ai/assets/img/block1.png" style="width:100%">

            </div>

        </div>


        <div class="row marb_50" style="background: #FDF6FF 0% 0% no-repeat padding-box;">

            <div class="col-sm-6 timeline-right">
                {{-- <img src="https://slikk.ai/assets/img/88830-web-design-people_PosterImage.png" style="width:50%"> --}}
                <img src="https://slikk.ai/assets/img/block2.png" style="width:100%">

            </div>

            <div class="col-sm-6 timeline-left  d-flex align-items-center">
                <div class="timeline-cont">
                    <h2 class="timeline-title" style="text-align:left;padding-bottom:0px">Pod Management</h2>
                    <b class="sub_all">Create pods and stay connected all the time. Manage and assign tasks to pods effortlessly.</b>

                    <ul class="timeline-p" style="margin-top: 20px;">

                        <li>Create pods in no time with task management software.</li>
                        <li>Set the pod status as active or inactive.</li>
                        <li>Readily add or remove team members from the pod.</li>
                        <li>Assign projects to pods easily with project management tool.</li>

                    </ul>

                </div>
            </div>


        </div>


        <div class="row marb_50">
            <div class="col-sm-6 timeline-left order-md-1 order-12 d-flex align-items-center">
                <div class="timeline-cont">
                    <h2 class="timeline-title" style="text-align:left;padding-bottom:0px">Boards and Charts</h2>
                    <b class="sub_all">Customizable boards and charts to give you a better understanding of how you
                        and your team are working towards achieving your goals.</b>

                    <ul class="timeline-p" style="margin-top: 20px;">

                        <li>Manage your projects better with gantt charts and kanban boards.</li>
                        <li>Easily plan, execute and track projects with powerful Gantt charts.</li>
                        <li>Keep track of milestones so that no deadline is ever missed.</li>
                        <li>Easily stay on top of your workflow with reporting & analytics.</li>
                        <li>Manage all communications and workflows in one place.</li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-6 order-1 order-md-12 timeline-right">
                <img src="https://slikk.ai/assets/img/block3.png" style="width:100%">

            </div>

        </div>


        <div class="row marb_50" style="background: #FDF6FF 0% 0% no-repeat padding-box;">

            <div class="col-sm-6 timeline-right">
                {{-- <img src="https://slikk.ai/assets/img/86199-business-analytics_PosterImage.png" style="width:50%;    margin-bottom: -50px;"> --}}
                <img src="https://slikk.ai/assets/img/block4.png" style="width:100%">

            </div>

            <div class="col-sm-6 timeline-left  d-flex align-items-center">
                <div class="timeline-cont">
                    <h2 class="timeline-title" style="text-align:left;padding-bottom:0px">Reporting and Analytics</h2>
                    <b class="sub_all">All you need to do is to pick the data you want to include on your report, set
                        the filters and choose the time period and that’s it!</b>

                    <ul class="timeline-p" style="margin-top: 20px;">

                        <li>Powerful and easy reporting insights.</li>
                        <li>Track the real time status with the help of columns.</li>
                        <li>Filter the data easily reporting & analytics feature.</li>
                        <li>Acquire insights for your entire team as well as for various projects.</li>

                    </ul>

                </div>
            </div>


        </div>

        <div class="row marb_50">
            <div class="col-sm-6 order-12 order-md-1 timeline-left  d-flex align-items-center">
                <div class="timeline-cont">
                    <h2 class="timeline-title" style="text-align:left;padding-bottom:0px">Gentle Reminders</h2>
                    <b class="sub_all">Social Network pages for each Project and gentle Nudge cards as reminders for
                        the tasks and Notifications.</b>

                    <ul class="timeline-p" style="margin-top: 20px;">

                        <li>Never miss a deadline, establish consistency and get work done faster.</li>
                        <li>Get reminders for meetings with nudge card feature.</li>
                        <li>Have all your core tenets function together.</li>
                        <li>Reduce your time-to-market by setting up tasks or campaigns.</li>
                        <li>Speed up the process with a nudge card to help you reach your goal.</li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-6 order-1 order-md-12 timeline-right">
                {{-- <img src="https://slikk.ai/assets/img/83935-facebook-notification_PosterImage.png" style="width:15%"> --}}
                <img src="https://slikk.ai/assets/img/block5.png" style="width:100%">

            </div>

        </div>


        <div class="row marb_50" style="background: #FDF6FF 0% 0% no-repeat padding-box;">

            <div class="col-sm-6 timeline-right">
                {{-- <img src="https://slikk.ai/assets/img/67920-meeting-analytics_PosterImage.png" style="width:50%"> --}}
                <img src="https://slikk.ai/assets/img/block6.png" style="width:100%">

            </div>

            <div class="col-sm-6 timeline-left  d-flex align-items-center">
                <div class="timeline-cont">
                    <h2 class="timeline-title" style="text-align:left;padding-bottom:0px">Better Collaboration</h2>
                    <b class="sub_all">Share files, tasks, and reports instantly. Shorten your feedback process with
                        visual proofing and automated approval systems.</b>

                    <ul class="timeline-p" style="margin-top: 20px;">

                        <li>Create and manage tasks easily with task management software.</li>
                        <li>Import data from Excel and share it with your team.</li>
                        <li>Collaborate easily with instant messaging feature.</li>
                        <li>Get easy access to all files and reports.</li>

                    </ul>

                </div>
            </div>


        </div>



        <div class="row marb_50">
            <div class="col-sm-6 timeline-left order-12 order-md-1  d-flex align-items-center">
                <div class="timeline-cont">
                    <h2 class="timeline-title" style="text-align:left;padding-bottom:0px">Birds Eye View</h2>
                    <b class="sub_all">Eliminate silos with unparalleled visibility across departments. Find
                        information quickly and make decisions in real-time.</b>

                    <ul class="timeline-p" style="margin-top: 20px;">

                        <li>Never miss a deadline, establish consistency and get work done faster.</li>
                        <li>A global calendar keeps track of all planned & scheduled activities.</li>
                        <li>Have all your core tenets function together with 360 degree visibility.</li>
                        <li>Reduce your time-to-market by setting up tasks or campaigns.</li>
                        <li>Manage the entire lifecycle of tasks with visible planning and execution.</li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-6 order-1 order-md-12 timeline-right">
                {{-- <img src="https://slikk.ai/assets/img/77218-search-imm_PosterImage.png" style="width:50%"> --}}
                <img src="https://slikk.ai/assets/img/block7.png" style="width:100%">

            </div>

        </div>


        <div class="container">

            @if (count($reportFaqDetail) > 0)
                <div class="row">
                    <div class="col-sm-12 bottom-cont" style="text-align:justify;margin-top:30px;">
                        <div class="timeline-cont">
                            <div class="timeline-p">

                                <div class="accordion-content">
                                    <h2>FAQs</h2>


                                    @foreach ($reportFaqDetail as $reportFaqDetailData)
                                        <div class="accordion-item">

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
                                        <div class="accordion-item">
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
                                        <div class="accordion-item">
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
                                        <div class="accordion-item">
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
                                        <div class="accordion-item">
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
                                        <div class="accordion-item">
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
                                        <div class="accordion-item">
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
                                        <div class="accordion-item">
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
                                        <div class="accordion-item">
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
                                        <div class="accordion-item">
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

    </div>
  </div>

@endsection
