@extends('frontend.layouts.master')
@section('content')

<style>.icon-about img {
    width: 60%;
    margin: auto;
}

@media screen and (min-width:800px) {
.box-cont{
padding-top: 10%;
}
}
</style>
    <div class="jumbotron text-center top-banner" style="background: transparent url(img/Component%2051%20–%204.png) 0% 0% no-repeat padding-box;
            opacity: 1;
            background-size: cover;
            background-position: bottom;    min-height: 400px;">

        <div class="container">
            <div class="row" style="padding-top: 40px;padding-bottom: 50px;">
                <div class="col-sm-6 box-cont">
                    <h1 class="hero_title">We are Slikk: Your Project Management Software</h1>
                    <p class="hero_desc">We equip you with everything you need to focus on actual work and reach your full performance potential. There is no need to chase via emails, juggle multiple tools, and work on spreadsheets when you have one tool to manage every task or project.</p>

                </div>

                <div class="col-sm-6">
                    <img src="https://slikk.ai/assets/img/about-us-banner.png" class="img-responsive  banner-img"
                        style="width: 400px;" />
                </div>

            </div>

        </div>

    </div>

    <!-- <h2 class="section_title" style="margin-top:60px;margin-bottom:70px">Add visibility to your work</h2>-->

    <div class="container">
        <!--<div class="row">
            <div class="col-sm-4 card-box">
              <div class="icon"><img src="https://reportindata.com/test/img/Icon open-graph.png"></div>
              <h3 class="box-title">Work & Forecasting</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
              <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-sm-4 card-box">
              <div class="icon"><img src="https://reportindata.com/test/img/Icon material-group-work.png"></div>
              <h3 class="box-title">Collaboration Pods</h3>

            </div>
            <div class="col-sm-4 card-box">
              <div class="icon"><img src="https://reportindata.com/test/img/Icon metro-flow-tree.png"></div>
              <h3 class="box-title">Strategic Workflows</h3>

            </div>
          </div> -->



        <div class="row">
            <div class="col-sm-6 timeline-left  d-flex align-items-center">
                <div class="timeline-cont">
                    <h2 class="timeline-title">Our Story</h2>
                    <p class="timeline-p">Some time ago, one of our co-founders had an idea. His team consistently failed to complete tasks on time. After reviewing, he realized that people were trying but only had access to a limited part of a task lifecycle. Without efficient project management software, each team member would spend hours asking others for updates, revised tasks, and reviewing old briefs. It led to the delivery of work going off track, poor performance, and a lack of sync among employees.</p>

                    <p class="timeline-p">Supported by technology and feedback generated from customer conversations, here's the Slikk team solving this exact problem. We help teams finish tasks, track performance, and communicate in the same workspace. Do it all without micromanaging things. Slikk ensures better task management, time management, and goal management. All of these three are the key elements to performing any task. </p>
                    
                    <p class="timeline-p">If you have been struggling with project planning, time management, and goal setting then Slikk is all you need.
                    </p>
                    
                    <p class="timeline-p">Our goal is simple. It is to build a fast-growing company focused on employee performance and empowering businesses.
                    </p>
                </div>
            </div>
            <div class="col-sm-6 timeline-right">
                <img src="https://slikk.ai/assets/img/about-us.png"
                    style="width:100%">

            </div>

        </div>

        <h2 class="section_title" style="margin-top:60px;margin-bottom:70px;text-align:left;">Our Values</h2>
        <div class="row">

            <!-- <h3 class="section_title_p" style="margin-top:60px;margin-bottom:70px">A high growth company with a people first culture</h3> -->

            <div class="col-sm-4 card-box">
                <div class="icon-cont">
                    <div class="icon-about d-flex align-items-center"
                        style="background: #FFBB00 0% 0% no-repeat padding-box;"><img
                            src="https://slikk.ai/assets/img/teamwork.png"></div>
                    <h3 class="box-title">Teamwork</h3>
                    <p class="center-text">A powerful application which enables you to complete your tasks and stay connected with your
                        teammates</p>
                </div>
            </div>
            <div class="col-sm-4 card-box">
                <div class="icon-cont">
                    <div class="icon-about d-flex align-items-center"   style="background: #FFBB00 0% 0% no-repeat padding-box;"><img
                            src="https://slikk.ai/assets/img/communication.png"></div>
                    <h3 class="box-title">Collaboration Pods</h3>
                    <p class="center-text">A powerful application which enables you to complete your tasks and stay connected with your
                        teammates</p>
                </div>
            </div>
            <div class="col-sm-4 card-box">
                <div class="icon-cont">
                    <div class="icon-about d-flex align-items-center"   style="background: #FFBB00 0% 0% no-repeat padding-box;"><img
                            src="https://slikk.ai/assets/img/planing.svg"></div>
                    <h3 class="box-title">Strategic Workflows</h3>
                    <p class="center-text">A powerful application which enables you to complete your tasks and stay connected with your
                        teammates</p>
                </div>
            </div>
        </div>

<!--
        <style>
            p,a,h1,h2,h3,h4 {
	margin: 0;
	padding: 0;
}

.section-team {
	font-family: "Poppins", sans-serif;

}

.section-team .header-section {
	margin-bottom: 50px;
}

.section-team .header-section .small-title {
    margin-bottom: 25px;
	font-size: 16px;
    font-weight: 500;
    color: #3e64ff;
}

.section-team .header-section .title {
    font-weight: 700;
    font-size: 45px;
}

.section-team .single-person {
	margin-top: 30px;
	padding: 30px;
	/* background-color: #f6f9ff; */
	border-radius: 5px;
    /* background: linear-gradient(to right, #016cec, #00b5f7); */

    background: linear-gradient(to right, #96a5b8, #81a8b6)
}

.section-team .single-person:hover {
	background: linear-gradient(to right,#00b5f7 , #016cec);
}

.section-team .single-person .person-image {
    position: relative;
    margin-bottom: 50px;
    border-radius: 50%;
    border: 4px dashed transparent;
    transition: padding .3s;
}

.section-team .single-person:hover .person-image {
	padding: 12px;
    border: 4px dashed #fff;
}

.section-team .single-person .person-image img {
	width: 100%;
    border-radius: 50%;
}

.section-team .single-person .person-image .icon {
	position: absolute;
    bottom: 0;
    left: 50%;
    transform: translate(-50%,50%);
    display: inline-block;
    width: 60px;
    height: 60px;
    line-height: 60px;
    text-align: center;
    background: linear-gradient(to right, #016cec, #00b5f7);
    color: #fff;
    border-radius: 50%;
    font-size: 24px;
}

.section-team .single-person:hover .person-image .icon {
	background: none;
	background-color: #fff;
	color: #016cec;
}

.section-team .single-person .person-info .full-name {
	margin-bottom: 10px;
	font-size: 28px;
    font-weight: 700;
    text-align: center;
}

.section-team .single-person .person-info .speciality {
    text-transform: uppercase;
    font-size: 14px;
    color: #016cec;
    text-align: center;
}

.section-team .single-person:hover .full-name,
.section-team .single-person:hover .speciality {
	color: #fff;
}

.person-info {
    text-align: center;
}


        </style>
    
        <h2 class="section_title" style="margin-top:60px;text-align:left;">Our Team</h2>
        <section class="section-team">
            <div class="container">
                <!-- Start Header Section
                <div class="row justify-content-center text-center">
                    <div class="col-md-8 col-lg-6">
                        {{-- <div class="header-section">
                            <h2 class="section_title" style="text-align:left;">Our Team</h2>
                        
                        </div> --}}
                    </div>
                </div>
                <!-- / End Header Section 
                <div class="row">
                    <!-- Start Single Person 
                    <div class="col-sm-6 col-lg-4 col-xl-4">
                        <div class="single-person">
                            <div class="person-image">
                                <img src="https://slikk.ai/assets/img/Akshay-Photo.png" alt="">
                                {{-- <span class="icon">
                                    <i class="fab fa-html5"></i>
                                </span> --}}
                            </div>
                            <div class="person-info">
                                <h3 class="full-name">Akshay</h3>
                                <span class="speciality">Co Founder</span>
                            </div>
                        </div>
                    </div>
                    <!-- / End Single Person -->
                    <!-- Start Single Person 
                    <div class="col-sm-6 col-lg-4 col-xl-4">
                        <div class="single-person">
                            <div class="person-image">
                                <img src="https://slikk.ai/assets/img/John-Photo.png" alt="">
                                {{-- <span class="icon">
                                    <i class="fab fa-wordpress-simple"></i>
                                </span> --}}
                            </div>
                            <div class="person-info">
                                <h3 class="full-name">John</h3>
                                <span class="speciality">Co Founder</span>
                            </div>
                        </div>
                    </div>
                    <!-- / End Single Person -->
                    <!-- Start Single Person 
                    <div class="col-sm-6 col-lg-4 col-xl-4">
                        <div class="single-person">
                            <div class="person-image">
                                <img src="https://slikk.ai/assets/img/Abhishek.png" alt="">
                                {{-- <span class="icon">
                                    <i class="fab fa-angular"></i>
                                </span> --}}
                            </div>
                            <div class="person-info">
                                <h3 class="full-name">Abhishek</h3>
                                <span class="speciality">Co Founder</span>
                            </div>
                        </div>
                    </div>
                    <!-- / End Single Person 
                   
                </div>
            </div>
        </section> 


     
         <!-- <div class="row">

             <h3 class="section_title_p" style="margin-top:60px;margin-bottom:70px">A high growth company with a people first culture</h3> 

            <div class="col-sm-4 card-box">
                <div class="icon-cont">
                    <h3 class="box-title">Akshay</h3>
                    <p style="text-align:center">Co Founder</p>
                    <div class="d-flex align-items-center"><img
                            src="https://slikk.ai/assets/img/Akshay-Photo.png"
                            style="width: 40%;margin-left: auto;margin-right: auto;box-shadow: 1px 1px 3px 2px #a39595;"></div>

                </div>
            </div>
            <div class="col-sm-4 card-box">
                <div class="icon-cont">
                    <h3 class="box-title">John</h3>
                    <p style="text-align:center">Co Founder</p>
                    <div class="d-flex align-items-center"><img
                            src="https://slikk.ai/assets/img/John-Photo.png"
                            style="width: 40%;margin-left: auto;margin-right: auto;box-shadow: 1px 1px 3px 2px #a39595;"></div>

                </div>
            </div>
            <div class="col-sm-4 card-box">
                <div class="icon-cont">
                    <h3 class="box-title">Abhishek</h3>
                    <p style="text-align:center">Co Founder</p>
                    <div class="d-flex align-items-center"><img
                            src="https://slikk.ai/assets/img/Abhishek.png"
                            style="width: 40%;margin-left: auto;margin-right: auto;box-shadow: 1px 1px 3px 2px #a39595;"></div>

                </div>
            </div>
        </div> -->


        {{-- <h2 class="section_title" style="margin-top:60px;margin-bottom:70px;text-align:left;">Come work for us</h2> --}}
        <div class="row" style="    background: #f0f0f0;
            padding: 20px;display:none">

            <!-- <h3 class="section_title_p" style="margin-top:60px;margin-bottom:70px">A high growth company with a people first culture</h3> -->

            <div class="col-sm-8 card-box">

                <div class="row" style="width: 70%;margin-left: auto;margin-right: auto;">

                    <div class="col-sm-6 pos_box">Developer</div>
                    <div class="col-sm-6 pos_box">
                        <div class="position open">Apply</div>
                    </div>

                    <div class="col-sm-6 pos_box">Developer</div>
                    <div class="col-sm-6 pos_box">
                        <div class="position open">Apply</div>
                    </div>

                    <div class="col-sm-6 pos_box">Developer</div>
                    <div class="col-sm-6 pos_box">
                        <div class="position open">Apply</div>
                    </div>

                    <div class="col-sm-6 pos_box">Developer</div>
                    <div class="col-sm-6 pos_box">
                        <div class="position filled">Position Filled</div>
                    </div>

                </div>
            </div>

            <div class="col-sm-4 card-box">
                <div class="">

                    <div class=""><img src="https://reportindata.com/test/img/Group 41.png"
                            style="width: 100%;margin-left: auto;margin-right: auto;"></div>

                </div>
            </div>

        </div>


        <div class="container">
        @if (count($reportFaqDetail) > 0)
            <div class="row">
                <div class="col-sm-12 bottom-cont" style="text-align:justify;margin-top:30px;">
                    <div class="timeline-cont">
                        <div class="timeline-p">

                            <div class="accordion-content">
                                <h2>Faqs</h2>


                                @foreach ($reportFaqDetail as $reportFaqDetailData)
                                    <div class="accordion-item">

                                        @if ($reportFaqDetailData->q1 != '')
                                            <header class="item-header">
                                              <h3 class="item-question">
                                                    {{ $reportFaqDetailData->q1 }}
                                                </h4>
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
                    </h4>
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
                    {{ $reportFaqDetailData->q3}}
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
                    {{ $reportFaqDetailData->q4}}
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
                    {{ $reportFaqDetailData->q5}}
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
                    {{ $reportFaqDetailData->q6}}
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
                    {{ $reportFaqDetailData->q7}}
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
                    {{ $reportFaqDetailData->q8}}
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
                    {{ $reportFaqDetailData->q9}}
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
                    {{ $reportFaqDetailData->q10}}
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

<div class="container" style="padding-top:30px">
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
