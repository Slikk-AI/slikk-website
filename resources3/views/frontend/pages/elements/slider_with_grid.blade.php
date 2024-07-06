<!------------------------------------ contact slider start ----------------------------------->

        <style>
            

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


        </style>



        <!-- TESTIMONIALS -->

        <div style="background: #fff 0% 0% no-repeat padding-box;padding: 20px 10px;">

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
                    <div class="col-sm-12 timeline-left  align-items-center" style="padding-right: 0px;">
                         <div id="silder_grid" class="owl-carousel">

                                            <!--TESTIMONIAL 1 -->
											@foreach($element_array as $val_element_array)
                                            <div class="item12">
                                                 <div class="icon-cont" style="background:#fff;">
                    
                    
												<div class="d-flex align-items-center"><img
														src="https://reportindata.com/test/img/Icon awesome-user-astronaut.png"
														style="width: 40%;margin-left: auto;margin-right: auto;"></div>
												<h3 class="box-title">{{$val_element_array['element_title']}}</h3>
											</div>
                                            </div>
											 @endforeach
                                            <!--END OF TESTIMONIAL 1 -->
                                            
                                        </div>
                    </div>


                   
                </div>
            </div>
            <!-- END OF TESTIMONIALS -->

            <script>
                jQuery(document).ready(function($) {
                    "use strict";
                    $('#silder_grid').owlCarousel({
                        loop: true,
                        items: 4,
                        autoplay: true,
                        dots: false,
                        nav: true,
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
                                items: 4
                            }
                        }
                    });
                });
            </script>

            <!------------------------------- contact Slider close -------------------------------------------->