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
                padding: 20px 10px;
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

                padding: 20px;
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
                            <h2 style="padding-top:20px">{{$val_data->title}}</h2>
                        </div>
                    </div>
                    <div class="col-sm-5" style="background: #f6f5fe"></div>
                </div>

                <div class="row">
                    <div class="col-sm-7 timeline-left  align-items-center" style="padding-right: 0px;">
                        <section class="testimonials12" style="">
                            <div class="container">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div id="customers-testimonials12" class="owl-carousel">

                                            <!--TESTIMONIAL 1 -->
											@foreach($element_array as $val_element_array)
                                            <div class="item12">
                                                <div class="shadow-effect">
												@if($val_element_array['element_image']!='')
													<img class="img-responsive" src="{{asset('assets/page/'.$val_element_array['element_image'])}}" alt="">
												@else
													<img class="img-responsive" src="https://slikk.ai/img/Homepage-Manager3-image.jpg" alt="">
												@endif
                                                    
                                                    <div class="item-details12">

                                                        <h5>{{$val_element_array['element_title']}}</h5>
                                                        <p>
														@php
															$element_desc = $val_element_array['element_description'];
														@endphp
														{!!html_entity_decode($element_desc)!!}
														</p>
                                                        <button type="button" class="btn btn-primary btn-sm"
                                                            style="background:#5433FF;color:#fff" onclick="window.location.href='{{$val_element_array['element_link']}}'">Know More</button>
                                                    </div>
                                                </div>
                                            </div>
											 @endforeach
                                            <!--END OF TESTIMONIAL 1 -->
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>


                    <div class="col-sm-5 timeline-left d-flex align-items-center" style="background: #f6f5fe;">
						@if($val_data->form_type=='Form A')
							@include('frontend.pages.form_a')
						@elseif($val_data->form_type=='Form B')
							@include('frontend.pages.form_b')
						@elseif($val_data->form_type=='Form C')
							@include('frontend.pages.form_c')
						@endif
                        
                    </div>
                </div>
            </div>
            <!-- END OF TESTIMONIALS -->

            <script>
                jQuery(document).ready(function($) {
                    "use strict";
                    $('#customers-testimonials12').owlCarousel({
                        loop: true,
                        items: 2,
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