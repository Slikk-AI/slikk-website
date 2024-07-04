@php
		$icounter=1;
		$descicounter=1;
		@endphp
		@if(Helper::isMobile())
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
        <div class="row mob-show"
            style="background: #F6F5FE 0% 0% no-repeat padding-box;display:none;padding: 20px 10px;">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 timeline-left  align-items-center">
                <div class="timeline-cont">
                    <h4 style="padding-top:20px;font-size:16px">{{$val_data->title}}<span
                            style="background: var(--yellow);border-radius: 20px;padding: 0px 10px;box-shadow: 2px 2px 6px 5px #FF6BA4;">Teams</span>
                    </h4>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
        <section class="testimonials1 mob-show" style="display:none;">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div id="customers-testimonials1" class="owl-carousel">
						@foreach($element_array as $val_element_array)
                            <!--TESTIMONIAL 1 -->
                            <div class="item1">
                                <div class="shadow-effect">
								@if($val_element_array['element_image']!='')
							<img class="img-responsive" src="{{asset('assets/page/'.$val_element_array['element_image'])}}">
							@else
								<img class="img-responsive" src="https://slikk.ai/Homepage-Project-Management-image.svg">
							@endif
                                    
                                  
                                    <div class="item-details1">
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
        <!-- END OF TESTIMONIALS -->
		 <!------------------------------------ phone slider start ----------------------------------->

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
	@else
		
	<div class="desk-show" style="background: #FFF 0% 0% no-repeat padding-box;padding-top: 30px">

        <div class="container">

            <div class="row">

                <div class="col-sm-10 timeline-left  align-items-center">
                    <div class="timeline-cont">
                        <h2 style="padding-top:20px">{{$val_data->title}} <span style="background: #FF6BA4;
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
                                height: 264px;

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
							@foreach($element_array as $val_element_array)
                                <li class="tab-link1  {{($icounter==1)?'current1':''}}" data-tab="{{$val_data->id.$icounter}}"><span>{{$val_element_array['element_title']}}</span></li>
								@php
$icounter++;
@endphp
					@endforeach
                               
                            </ul>



                        </div><!-- container -->




                    </div>
                </div>



            </div>

            <div class="row desk-show" style="background: #fff 0% 0% no-repeat padding-box;min-height:400px">


                <div class="col-sm-1"></div>



                <div class="col-sm-10 timeline-right  d-flex align-items-center">
					<input type="hidden" id="TopcounterId" value="{{$val_data->id.$icounter-1}}" >
					<input type="hidden" id="Topcounter" value="{{$icounter-2}}" >
					@foreach($element_array as $val_element_array)

                    <div id="{{$val_data->id.$descicounter}}" class="tab-content1 {{($descicounter==1)?'current1':''}} align-items-center">

                        <div class="row">

                            <div class="col-sm-7 timeline-right">
                                <b>{{$val_element_array['element_title']}}</b>
                                <p class="timeline-p"> @php
									$element_desc = $val_element_array['element_description'];
									$element_desc = str_replace('<p','<p class="timeline-p"',$element_desc);
								@endphp
								{!!html_entity_decode($element_desc)!!}</p>
                                <button type="button" class="btn btn-primary btn-sm"
                                    style="background:#5433FF;color:#fff" onclick="window.location.href='{{$val_element_array['element_link']}}'">Know More</button>
                            </div>

                            <div class="col-sm-5 timeline-right  d-flex align-items-center">
								@if($val_element_array['element_image']!='')
									 <img src="{{asset('assets/page/'.$val_element_array['element_image'])}}"
                                    class="slide_img">
								@else
									 <img src="https://slikk.ai/img/Homepage-Project-Management-image.svg"
										class="slide_img">
								@endif
                               
                            </div>

                        </div>


                    </div>
@php
$descicounter++;
@endphp
					@endforeach
                   
                   
                </div>

                <div class="col-sm-1"></div>

            </div>

            <script>
                $(document).ready(function() {
                    function slider1() {
                        var tab_id1 = $('li.current1').attr('data-tab');
						var TopcounterId = $('#TopcounterId').val();
						var Topcounter = $('#Topcounter').val();
                        var n_tab_id1 = parseInt(tab_id1) + 1;
						if (n_tab_id1 > TopcounterId) {
							//console.log(TopcounterId+' dd '+Topcounter);
                            n_tab_id1 = parseInt(TopcounterId)-parseInt(Topcounter);
                        }
						//console.log(n_tab_id1);
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
	
	
	
	
		
	@endif