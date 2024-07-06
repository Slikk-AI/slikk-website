@if(Helper::isMobile())
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
        <div class="row mob-show"
            style="background: #F6F5FE 0% 0% no-repeat padding-box;display:none;padding: 20px 10px;">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 timeline-left  align-items-center">
                <div class="timeline-cont">
                    <h4 style="font-size: 16px;">{{$val_data->title}}</span>
                    </h4>

                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
        <section class="testimonials mob-show" style="display:none;">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div id="customers-testimonials" class="owl-carousel">
							@foreach($element_array as $val_element_array)
                            <!--TESTIMONIAL 1 -->
                            <div class="item">
                                <div class="shadow-effect">
								@if($val_element_array['element_image']!='')
							 <img class="img-responsive"
                                        src="{{asset('assets/page/'.$val_element_array['element_image'])}}" alt="">
							@else
								 <img class="img-responsive"
                                        src="https://slikk.ai/img/Homepage-Project-Management-image.svg" alt="">
							@endif
                                   
                                    <div class="item-details">

                                        <h5>{{$val_element_array['element_title']}}</h5>
                                        <p>@php
									$element_desc = $val_element_array['element_description'];
									
								@endphp
								{!!html_entity_decode($element_desc)!!}</p>
                                        <button type="button" class="btn btn-primary btn-sm"
                                            style="background:#5433FF;color:#fff" onclick="window.location.href='{{$val_element_array['element_link']}}'">Know More</button>
                                    </div>
                                </div>
                            </div>
                            <!--END OF TESTIMONIAL 1 -->
                           @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
        <!-- END OF TESTIMONIALS -->
		@else
			<div class="desk-show" style="background: #F6F5FE 0% 0% no-repeat padding-box;padding-top: 30px;
            margin-bottom: -30px;">

        <div class="container">

            <div class="row">


                <div class="col-sm-10 timeline-left  align-items-center">
                    <div class="timeline-cont">
                        <h2 style="padding-top:20px">{{$val_data->title}}<span style="background: var(--yellow);
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
							@foreach($element_array as $val_element_array)
                                <li class="tab-link {{($iElement==1)?'current':''}}" data-tab="{{$iElement}}">{{$val_element_array['element_title']}}</li>
								@php
								$iElement++;
								@endphp
							@endforeach
                            </ul>



                        </div><!-- container -->




                    </div>
                </div>

                <div class="col-sm-8 timeline-right  d-flex align-items-center">
					@foreach($element_array as $val_element_array)
                    <div id="{{$idescElement}}" class="tab-content  {{($idescElement==1)?'current':''}} align-items-center">
                        <div class="row">

                            <div class="col-sm-7 timeline-right">
                                <b>{{$val_element_array['element_title']}}</b>
                                <p class="timeline-p">
								@php
									$element_desc = $val_element_array['element_description'];
									$element_desc = str_replace('<p','<p class="timeline-p"',$element_desc);
								@endphp
								{!!html_entity_decode($element_desc)!!}
								</p>
                                <button type="button" class="btn btn-primary btn-sm"
                                    style="background:#5433FF;color:#fff" onclick="window.location.href='{{$val_element_array['element_link']}}'">Know More</button>
                            </div>

                            <div class="col-sm-5 timeline-right  d-flex align-items-center">
							@if($val_element_array['element_image']!='')
                                <img src="{{asset('assets/page/'.$val_element_array['element_image'])}}" style="width:100%">
							@else
								<img src="https://slikk.ai/img/Group-1017.svg" style="width:100%">
							@endif
                            </div>

                        </div>

                    </div>
					@php
						$idescElement++;
					@endphp
                    @endforeach
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

                    var myTimer = setInterval(slider, 3000);



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
                        myTimer = setInterval(slider, 5000);
                    })
                })
            </script>

        </div>

    </div>
		@endif