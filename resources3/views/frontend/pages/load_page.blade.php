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
		.highlight-box{
			margin: 0 auto;
			padding: 2rem;
			background: #fff;
			box-shadow: 0px 4px 16px rgb(0 0 0 / 9%);
			border-radius: 8px;
			margin-bottom:20px;
		}
        .zoom {
			transition: transform .2s;
			margin: 0 auto;
			position: relative;
			z-index: 1;
		}
		.zoom:hover {
		  transform: scale(1.1);
		}
		.wid100 {
			width:100%;
		}
		.pad20 {
			padding: 20px;
		}
    </style>
	@php
	if($report_data->banner_background_img!='')
		$BannerBackgroundImg = asset('assets/page/'.$report_data->banner_background_img);
	else
		$BannerBackgroundImg = 'img/Group914.png';
	@endphp
	
	<div class="jumbotron text-center home-banner top-banner" style="background: transparent url({{$BannerBackgroundImg}}) 0% 0% no-repeat;
                opacity: 1;
                background-size: cover;
                background-position: bottom;    min-height: 400px;    padding-bottom: 30px;">
        <div class="container">
            <div class="row" style="padding-top: 7%;">
                <div class="col-sm-5 pad20" style="text-align:left">
                    <h1 class="hero_title">{{($report_data->banner_title!='')?$report_data->banner_title:$report_data->title}}</h1>
                     @php
									$element_desc = $report_data->banner_description;
									$element_desc = str_replace('<p','<p class="hero_desc"',$element_desc);
								@endphp
								{!!html_entity_decode($element_desc)!!}

                    <br>
                    <br>

                    {{-- <button type="button" class="btn btn-primary btn-sm banner_button"
                        style="background:#FFBB00;color:#000;border: none;padding: 7px 10px;margin-right: 20px;">Start a
                        Free Trail</button>
                    <button type="button" class="btn btn-light btn-sm banner_button2"
                        style="background:#fff;color:#000;border: none;padding: 7px 10px;margin-right: 20px;">Watch a
                        Video</button> --}}
                </div>

                <div class="col-sm-7">
					@if($report_data->banner_image!='')
				 <img src="{{asset('assets/page/'.$report_data->banner_image)}}" class="img-responsive banner-img zoom wid100 zoom"/>
				@else
					 <img src="https://slikk.ai/img/Hero%20Section%20Graphic.svg" class="img-responsive banner-img zoom wid100 zoom" />
				@endif
				
                   
                </div>

            </div>

        </div>

    </div>
@include('frontend.pages.elements.elements')
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
