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

    </style>
    <div class="jumbotron text-center home-banner top-banner" style="background: transparent url(img/Group914.png) 0% 0% no-repeat;
                opacity: 1;
                background-size: cover;
                background-position: bottom;    min-height: 400px;    padding-bottom: 30px;">

        <div class="container">
            <div class="row" style="padding-top: 40px;">
                <div class="col-sm-6" style="text-align:left">
                    <h1 class="hero_title">One platform to communicate, collaborate and get work done</h1>
                    <p class="hero_desc" style="font-weight:100">Slikk helps you get more tasks done in less time. It's
                        everything you need to work faster, communicate better, and improve productivity in a single
                        workspace.
                    </p>

                    <div class="highlights">
                        <div class="left-high">50% </div>
                        <div class="right-high">Calls And Meetings</div>
                    </div>
                    <div class="highlights">
                        <div class="left-high">45% </div>
                        <div class="right-high">Goals Achieved</div>
                    </div>
                    <div class="highlights">
                        <div class="left-high">3X </div>
                        <div class="right-high">Productivity</div>
                    </div>

                    <br>
                    <br>

                    <button type="button" class="btn btn-primary btn-sm banner_button"
                        style="background:#FFBB00;color:#000;border: none;padding: 7px 10px;margin-right: 20px;">Start a
                        Free Trail</button>
                    <button type="button" class="btn btn-light btn-sm banner_button2"
                        style="background:#fff;color:#000;border: none;padding: 7px 10px;margin-right: 20px;">Watch a
                        Video</button>
                </div>

                <div class="col-sm-6">
                    <img src="https://slikk.ai/img/Hero%20Section%20Graphic.svg" class="img-responsive banner-img" />
                </div>

            </div>

        </div>

    </div>

    <h2 class="section_title" style="margin-top:60px;margin-bottom:70px">Add visibility to your work</h2>

    <div class="container" style="padding-bottom: 30px;">
        <div class="row">
            <div class="col-sm-4 card-box">
                <div class="icon"><img src="https://reportindata.com/test/img/Icon open-graph.png"></div>
                <h4 class="box-title">Work & Forecasting</h4>
                <p style="text-align:center">Dive deep into every variable of task & time management, help your team
                    prioritize, and train new
                    employees on best practices.</p>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p> -->
            </div>
            <div class="col-sm-4 card-box">
                <div class="icon"><img src="https://reportindata.com/test/img/Icon material-group-work.png"></div>
                <h4 class="box-title">Collaboration Pods</h4>
                <p style="text-align:center">Work faster by organizing your conversations. Collaborate live or control your
                    notifications easily.</p>

            </div>
            <div class="col-sm-4 card-box">
                <div class="icon"><img src="https://reportindata.com/test/img/Icon metro-flow-tree.png"></div>
                <h4 class="box-title">Strategic Workflows</h4>
                <p style="text-align:center">Drive efficiency and consistency using customized workflows specifically
                    designed for your teams.</p>

            </div>
        </div>
    </div>


	@foreach($PageSectionData as $val_data)
	@php
		$ElementDetails = json_decode( $val_data->element_details, true);
		$array = (array) $ElementDetails;
		$element_array = Helper::sortAssociativeArrayByKey($array, "element_sort", "ASC");
		$iElement = 1;
		$idescElement = 1;
	@endphp
	
	@if($val_data->element_id==3)
		@include('frontend.pages.elements.features')
	@endif
	@if($val_data->element_id==2)
		@include('frontend.pages.elements.testimonials')
		
	@endif
	@if($val_data->element_id==14)
		@include('frontend.pages.elements.top_tab_with_description')
	@endif
	@endforeach
    </div>
    

        <!------------------------------------ phone slider start ----------------------------------->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        

        <script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js"></script>

        

        <!------------------------------- Phone Slider close -------------------------------------------->
            <div class="container">

                @if (count($reportFaqDetail) > 0)
                    <div class="row">
                        <div class="col-sm-12 bottom-cont" style="text-align:justify;margin-top:30px;">
                            <div class="timeline-cont">
                                <div class="timeline-p">

                                    <div class="accordion-content">
                                        <h2>Key questions answered</h2>


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
