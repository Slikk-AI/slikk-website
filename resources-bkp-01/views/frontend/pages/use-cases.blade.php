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
    margin-bottom:20px;
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
                <h1 class="hero_title">Explore the various use cases of Slikk</h1>
                <p class="hero_desc">We are here to help all kinds of businesses to achieve objectives, goals and boost employee productivity and performance.</p>

            </div>

            <div class="col-sm-7">
                 <img src="https://slikk.ai/img/Use Cases-Hero-Image.svg" class="img-responsive banner-img" style="width: 400px;" /> 
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
                <h2 class="timeline-title" style="text-align:left;padding-bottom:0px">Project Management</h2>
                <b class="sub_all">For The Project Management You Don't Yet Know</b>

                <ul class="timeline-p" style="margin-top: 20px;">

                    <li>Collaborate with your team for project planning</li>
                    <li>Visualize and plan with project management</li>
                    <li>Set priority to the tasks and add deadlines</li>
                    <li>Track progress and check the health of your project</li>
                    <li>View tasks in Kanban boards and let your team know about updates</li>
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
                <h2 class="timeline-title" style="text-align:left;padding-bottom:0px">Sales</h2>
                <b class="sub_all">Simply Manage Sales!</b>

                <ul class="timeline-p" style="margin-top: 20px;">

                    <li>Reduce human dependence with sales crm</li>
                    <li>Track sales with real-time reporting to encourage more sales</li>
                    <li>In-built marketing automation infrastructure to funnel sales</li>
                    <li>Effectively manage accounts with Slikk sales crm</li>
                    <li>Use templates for better sales forecasting</li>

                </ul>

            </div>
        </div>


    </div>


    <div class="row marb_50">
        <div class="col-sm-6 timeline-left order-md-1 order-12 d-flex align-items-center">
            <div class="timeline-cont">
                <h2 class="timeline-title" style="text-align:left;padding-bottom:0px">HR</h2>
                <b class="sub_all">Human Resource Management To Engage Top Talent</b>

                <ul class="timeline-p" style="margin-top: 20px;">

                    <li>On-board candidates with Slikk HR Software</li>
                    <li>Human resource planning is now easy with Slikk</li>
                    <li>Slikk takes care of all your HR operations</li>
                    <li>Keep your company policies up to date</li>
                    <li>Optimize and manage recruiting processes easily with Slikk</li>
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
                <h2 class="timeline-title" style="text-align:left;padding-bottom:0px">Startup</h2>
                <b class="sub_all">Let your startup touch skies with Slikk</b>

                <ul class="timeline-p" style="margin-top: 20px;">

                    <li>Build product roadmaps to gain clarity</li>
                    <li>Track your goals and stay ahead of time for your startup project</li>
                    <li>Communicate and share ideas and solve complex tasks</li>
                    <li>Keep track of expenses and ROI for better profitability</li>
                    <li>Meet growth targets by identifying bottlenecks</li>

                </ul>

            </div>
        </div>


    </div>

    <div class="row marb_50">
        <div class="col-sm-6 order-12 order-md-1 timeline-left  d-flex align-items-center">
            <div class="timeline-cont">
                <h2 class="timeline-title" style="text-align:left;padding-bottom:0px">Remote Work</h2>
                <b class="sub_all">Slikk: Best way to manage your remote employees</b>

                <ul class="timeline-p" style="margin-top: 20px;">

                    <li>Track progress of virtual team with Slikk</li>
                    <li>Assign tasks to employees</li>
                    <li>Set priorities and delegate tasks to your team members</li>
                    <li>Schedule meetings and share thoughts and ideas for better task management</li>
                    <li>Collaborate better for effective team management</li>
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
                <h2 class="timeline-title" style="text-align:left;padding-bottom:0px">Marketing</h2>
                <b class="sub_all">Marketing made easy with Slikk!</b>

                <ul class="timeline-p" style="margin-top: 20px;">

                    <li>Enable better team collaboration to manage marketing</li>
                    <li>Set reminders to never miss a meeting or a task deadline</li>
                    <li>Build a better marketing plan to get ROI</li>
                    <li>Better marketing strategy with our marketing analytics</li>
                    <li>Use marketing plan template to know your next move</li>

                </ul>

            </div>
        </div>


    </div>


    
    <div class="row marb_50">
        <div class="col-sm-6 timeline-left order-12 order-md-1  d-flex align-items-center">
            <div class="timeline-cont">
                <h2 class="timeline-title" style="text-align:left;padding-bottom:0px">Design</h2>
                <b class="sub_all">Slikk! Designed with design</b>

                <ul class="timeline-p" style="margin-top: 20px;">

                    <li>Design projects and get faster approvals</li>
                    <li>Manage workload with Slikk design use case</li>
                    <li>Add comments for faster completion of work</li>
                    <li>Map different tasks to different team members</li>
                    <li>Add attachments to help members design project with clarity</li>
                </ul>

            </div>
        </div>
        <div class="col-sm-6 order-1 order-md-12 timeline-right">
        {{-- <img src="https://slikk.ai/assets/img/77218-search-imm_PosterImage.png" style="width:50%"> --}}
            <img src="https://slikk.ai/img/design.svg" style="width:100%">

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

</div>

@endsection 