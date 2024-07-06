@extends('frontend.layouts.master')
@section('content')

    <style>
        /* .cat-menu span {
            background: var(--unnamed-color-6b52f9) 0% 0% no-repeat padding-box;
            background: #6B52F9 0% 0% no-repeat padding-box;
            box-shadow: 0px 3px 6px #00000029;
            border-radius: 48px;
            padding: 10px 50px;
            color: #fff;
        } */

        .base-font-family {
            font-family: 'Roboto', sans-serif !important;

        }

        .card-box {
            margin-top: 60px;
        }


        .post-block {
            width: 99%;
            margin-left: auto;
            margin-right: auto;
            background: #FFFFFF 0% 0% no-repeat padding-box;
            box-shadow: 0px 3px 6px #00000029;
            border: 1px solid #FAE1FF;
            border-radius: 50px;


        }

        .post-cont {
            padding: 30px;
        }



        .post-img img {
            border-radius: 10px 10px 10px 10px;
            height: 250px;
        }

        


        ul.post-p {
            border-top: 1px solid #e2e2e2 !important;
        }

        ul.post-p li {
            text-decoration: none;
            list-style: none;
            width: 50%;
            float: left;
            padding: 10px;
            /* color:#e2e2e2 !important; */
        }

        h3.post-title a {
            letter-spacing: 0px;
            color: #1D2121 !important;
            text-shadow: 0px 3px 6px #00000029;
            text-align: left;
            text-decoration: none;
            font-size: 22px;
        }

        .sub_all {

            letter-spacing: var(--unnamed-character-spacing-0);
            color: var(--unnamed-color-1d2121);
            text-align: left;
            font-size: 14px;
            letter-spacing: 0px;
            color: #1D2121;
        }

        .cat-menu {
            margin-bottom: 30px;
        }
        .backgroundimage{
            background-image: url(https://slikk.ai/img/Group914.png);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
    </style>
 

    <div class="jumbotron text-center top-banner" style="background: transparent url(img/Component%2051%20–%204.png) 0% 0% no-repeat padding-box;
        opacity: 1;
        background-size: cover;
        background-position: bottom;    min-height: 400px;display:none">

        <div class="container">
            <div class="row" style="padding-top: 40px;">
                <div class="col-sm-5">
                    <h1 class="hero_title">Welcome to our journal. Here you can find the latest company news and business
                        articles.</h1>
                    <!-- <p class="hero_desc">We're here to help businesses and employees reach their full performance potential. We equip teams like yours with everything you need to focus on actual work, so there is no need to chase emails, juggle multiple tools, and work on spreadsheets.</p> -->

                </div>

                <div class="col-sm-7">
                    <!-- <img src="https://reportindata.com/test/img/Group 931.png" class="img-responsive" style="width: 400px;" /> -->
                </div>

            </div>

        </div>

    </div>



    <div>
        <div class="container top-banner">

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">

            <style>
                @import url('https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700,800');
                * {
                    box-sizing: border-box;
                }

                .blog-slider {
                    width: 95%;
                    position: relative;
                    max-width: 800px;
                    margin: auto;
                    background: #fff;
                    box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
                    padding: 25px;
                    border-radius: 25px;
                    height: 400px;
                    transition: all 0.3s;
                    margin-bottom: 30px;

                }
                @media screen and (max-width: 992px) {
                    .blog-slider {
                        max-width: 680px;
                        height: 400px;
                    }
                }
                @media screen and (max-width: 768px) {
                    .blog-slider {
                        min-height: 500px;
                        height: auto;
                        margin: 180px auto;
                    }
                }
                @media screen and (max-height: 500px) and (min-width: 992px) {
                    .blog-slider {
                        height: 350px;
                    }
                }
                .blog-slider__item {
                    display: flex;
                    align-items: center;
                }
                @media screen and (max-width: 768px) {
                    .blog-slider__item {
                        flex-direction: column;
                    }
                }
                .blog-slider__item.swiper-slide-active .blog-slider__img img {
                    opacity: 1;
                    transition-delay: 0.3s;
                }
                .blog-slider__item.swiper-slide-active .blog-slider__content > * {
                    opacity: 1;
                    transform: none;
                }
                .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(1) {
                    transition-delay: 0.3s;
                }
                .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(2) {
                    transition-delay: 0.4s;
                }
                .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(3) {
                    transition-delay: 0.5s;
                }
                .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(4) {
                    transition-delay: 0.6s;
                }
                .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(5) {
                    transition-delay: 0.7s;
                }
                .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(6) {
                    transition-delay: 0.8s;
                }
                .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(7) {
                    transition-delay: 0.9s;
                }
                .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(8) {
                    transition-delay: 1s;
                }
                .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(9) {
                    transition-delay: 1.1s;
                }
                .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(10) {
                    transition-delay: 1.2s;
                }
                .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(11) {
                    transition-delay: 1.3s;
                }
                .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(12) {
                    transition-delay: 1.4s;
                }
                .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(13) {
                    transition-delay: 1.5s;
                }
                .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(14) {
                    transition-delay: 1.6s;
                }
                .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(15) {
                    transition-delay: 1.7s;
                }
                .blog-slider__img {
                    width: 470px;
                    flex-shrink: 0;
                    height: 300px;
                    /* background-image: linear-gradient(147deg, #fe8a39 0%, #fd3838 74%); */
                    box-shadow: 4px 13px 30px 1px rgb(20 0 138 / 29%);
                    
                    border-radius: 20px;
                    transform: translateX(-80px);
                    overflow: hidden;
                }
                .blog-slider__img:after {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    /* background-image: linear-gradient(147deg, #fe8a39 0%, #fd3838 74%); */
                    border-radius: 20px;
                    opacity: 0.8;
                }
                .blog-slider__img img {
                    width: 470px;
                    height: 300px;
                    object-fit: cover;
                    display: block;
                    opacity: 0;
                    border-radius: 20px;
                    transition: all 0.3s;
                }
                @media screen and (max-width: 768px) {
                    .blog-slider__img {
                        transform: translateY(-50%);
                        width: 90%;
                    }
                }
                @media screen and (max-width: 576px) {
                    .blog-slider__img {
                        width: 95%;
                    }
                }
                @media screen and (max-height: 500px) and (min-width: 992px) {
                    .blog-slider__img {
                        height: 270px;
                    }
                }
                .blog-slider__content {
                    padding-right: 25px;
                }
                @media screen and (max-width: 768px) {
                    .blog-slider__content {
                        margin-top: -80px;
                        text-align: center;
                        padding: 0 30px;
                    }
                }
                @media screen and (max-width: 576px) {
                    .blog-slider__content {
                        padding: 0;
                    }
                }
                .blog-slider__content > * {
                    opacity: 0;
                    transform: translateY(25px);
                    transition: all 0.4s;
                }
                .blog-slider__code {
                    color: #7b7992;
                    margin-bottom: 15px;
                    display: block;
                    font-weight: 500;
                }
                .blog-slider__title {
                    font-size: 24px;
                    font-weight: 700;
                    color: #0d0925;
                    margin-bottom: 20px;
                }
                .blog-slider__text {
                    color: #4e4a67;
                    margin-bottom: 30px;
                    line-height: 1.5em;
                }
                .blog-slider__button {
                    display: inline-flex;
                    /* background-image: linear-gradient(147deg, #fe8a39 0%, #fd3838 74%); */
                    background: #6b52f9;
                    padding: 15px 35px;
                    border-radius: 50px;
                    color: #fff;
                    /* box-shadow: 0px 14px 80px rgba(252, 56, 56, 0.4); */
                    box-shadow: 4px 13px 30px 1px rgb(20 0 138 / 29%);
                    text-decoration: none;
                    font-weight: 500;
                    justify-content: center;
                    text-align: center;
                    letter-spacing: 1px;
                }
                @media screen and (max-width: 576px) {
                    .blog-slider__button {
                        width: 100%;
                    }
                }
                .blog-slider .swiper-container-horizontal > .swiper-pagination-bullets, .blog-slider .swiper-pagination-custom, .blog-slider .swiper-pagination-fraction {
                    bottom: 10px;
                    left: 0;
                    width: 100%;
                }
                .blog-slider__pagination {
                    position: absolute;
                    z-index: 21;
                    right: 20px;
                    width: 11px !important;
                    text-align: center;
                    left: auto !important;
                    top: 50%;
                    bottom: auto !important;
                    transform: translateY(-50%);
                }
                @media screen and (max-width: 768px) {
                    .blog-slider__pagination {
                        transform: translateX(-50%);
                        left: 50% !important;
                        top: 205px;
                        width: 100% !important;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }
                }
                .blog-slider__pagination.swiper-pagination-bullets .swiper-pagination-bullet {
                    margin: 8px 0;
                }
                @media screen and (max-width: 768px) {
                    .blog-slider__pagination.swiper-pagination-bullets .swiper-pagination-bullet {
                        margin: 0 5px;
                    }
                }
                .blog-slider__pagination .swiper-pagination-bullet {
                    width: 11px;
                    height: 11px;
                    display: block;
                    border-radius: 10px;
                    background: #062744;
                    opacity: 0.2;
                    transition: all 0.3s;
                }
                .blog-slider__pagination .swiper-pagination-bullet-active {
                    opacity: 1;
                    background: #6b52f9;
                    height: 30px;
                    /* box-shadow: 0px 0px 20px rgba(252, 56, 56, 0.3); */
                    box-shadow: 4px 13px 30px 1px rgb(20 0 138 / 29%);
                }

                .blog-slider__button:hover {
                    color:#fff;
                    text-decoration: none;
                }
                @media screen and (max-width: 768px) {
                    .blog-slider__pagination .swiper-pagination-bullet-active {
                        height: 11px;
                        width: 30px;
                    }
                }
    
            </style>
            <div class="blog-slider">
                <div class="blog-slider__wrp swiper-wrapper">
                    @foreach ($AllBlogs as $AllBlogData)
                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                    
                    <img src="{{ asset('assets/blog/' . $AllBlogData->image_path) }}" alt="">
                    </div>
                    <div class="blog-slider__content">
                    <span class="blog-slider__code">{{ $AllBlogData->publish_date }}</span>
                    <div class="blog-slider__title">{{ $AllBlogData->title }}</div>
                    {{-- <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div> --}}
                    <a href="{{ url('blog/' .$AllBlogData->slug.'/'. $AllBlogData->url) }}" class="blog-slider__button">READ MORE</a>
                    </div>
                </div>
                @endforeach
            
                
                
                
                </div>
                <div class="blog-slider__pagination"></div>
            </div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>

            <script>var swiper = new Swiper('.blog-slider', {
                spaceBetween: 30,
                effect: 'fade',
                loop: true,
                autoplay: 5000,
                speed: 800,
                mousewheel: {
                invert: false,
                },
                // autoHeight: true,
                pagination: {
                el: '.blog-slider__pagination',
                clickable: true,
                }
            });</script>

        </div>
    </div>




    <!-- <h2 class="section_title" style="margin-top:60px;margin-bottom:70px">Add visibility to your work</h2>-->

    <div class="container">

        {{-- <div class="row">
            @foreach ($category_data as $category_data)
                <div class="col-sm-2 cat-menu"> <a href="{{ url('blog/' . $category_data->slug) }}"
                        style="color:#fff;cursor:pointer;text-decoration:none;"><span style="">{{ $category_data->category_name }}</span></a>
                </div>
            @endforeach


        </div> --}}

        <div class="row">

            <div class="col-sm-3 marb_50 card-box">
                @foreach ($category_data as $category_data)
                <div class="cat-menu"> 
                    <!--<a href="{{ url('blogs/' . $category_data->slug.'/'. $category_data->id) }}"
                    style="color:#fff;cursor:pointer;text-decoration:none;"><span style="">{{ $category_data->category_name }}</span></a> -->
                    <a href="{{ url('/coming-soon')}}"
                    style="color:#fff;cursor:pointer;text-decoration:none;"><span style="">{{ $category_data->category_name }}</span></a>
            </div>
            @endforeach
            </div>

                <div class="col-sm-9">

        <div class="row marb_50 card-box">
            @foreach ($AllBlogs as $AllBlogData)
                <div class="col-sm-6">

                    <div class="post-block" style="padding-bottom: 20px;">

                        <div class="post-img base-font-family">
                            <img src="{{ asset('assets/blog/' . $AllBlogData->image_path) }}" style="width:100%;object-fit: cover;">

                        </div>

                        <div class="post-cont base-font-family">
                            <h3 class="post-title base-font-family" style="text-align:left;padding-bottom:0px"><a
                                    href="{{ url('blog/' .$AllBlogData->slug.'/'. $AllBlogData->url) }}">
                                
                                @php
                                    $titl = substr(strip_tags($AllBlogData->title), 0, 50);
                                    @endphp
                                    {!! html_entity_decode($titl) !!}..
                                </a></h3>
                            <p class="sub_all"> @php
                                $BlogDate = $AllBlogData->publish_date;
                                $desc = $AllBlogData->description;
                                $desc = preg_replace('/<img[^>]+>/', '', $desc);
                                $desc = preg_replace('/\sstyle=("|\').*?("|\')/i', '', $desc);
                                $desc = substr(strip_tags($desc), 0, 100);
                            @endphp
                                {!! html_entity_decode($desc) !!}...</p>

                            <ul class="post-p" style="margin-top: 20px;">
                                <li>{{ $AllBlogData->category_name }}</li>
                                <li>{{ date('d M Y', strtotime($BlogDate)) }}</li>


                            </ul>

                        </div>
                    </div>


                </div>
            @endforeach

        </div>

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
                <div class="timeline-p">

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

@endsection
