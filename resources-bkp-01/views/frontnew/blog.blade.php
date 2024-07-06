@extends('frontnew.layouts.layout')
@section('frontnew_content')
<style>
    .bottom-section .mb-2 h2{
    /* font-size: .875em;
    line-height: 1.5;
    color: #565359;
    font-weight: bold; */
    padding: 4px;
    font-size: 1.125em;
    line-height: 1.6;
    font-weight: bold;
    font-family: Satoshi,sans-serif;
    }
    .bottom-section .mb-2 p{
    padding: 5px;
    font-size: .9em;
    line-height: 1.6;
    color: #565359;
    margin-top: 8px;
    margin-bottom: 15px;
    font-family: Satoshi,sans-serif;
    }
    .bottom-section .mb-2 p a:link{
        color: blue;
    }
    .bottom-section .mb-2 p a:visited{
        color: #71147e;
    }
    .bottom-section .mb-2 a{
        color: blue
    }
            @import  url('https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700,800');

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

            @media  screen and (max-width: 992px) {
                .blog-slider {
                    max-width: 680px;
                    height: 400px;
                }
            }

            @media  screen and (max-width: 768px) {
                .blog-slider {
                    min-height: 500px;
                    height: auto;
                    margin: 180px auto;
                }
            }

            @media  screen and (max-height: 500px) and (min-width: 992px) {
                .blog-slider {
                    height: 350px;
                }
            }

            .blog-slider__item {
                display: flex;
                align-items: center;
            }

            @media  screen and (max-width: 768px) {
                .blog-slider__item {
                    flex-direction: column;
                }
            }

            .blog-slider__item.swiper-slide-active .blog-slider__img img {
                opacity: 1;
                transition-delay: 0.3s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>* {
                opacity: 1;
                transform: none;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(1) {
                transition-delay: 0.3s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(2) {
                transition-delay: 0.4s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(3) {
                transition-delay: 0.5s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(4) {
                transition-delay: 0.6s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(5) {
                transition-delay: 0.7s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(6) {
                transition-delay: 0.8s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(7) {
                transition-delay: 0.9s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(8) {
                transition-delay: 1s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(9) {
                transition-delay: 1.1s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(10) {
                transition-delay: 1.2s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(11) {
                transition-delay: 1.3s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(12) {
                transition-delay: 1.4s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(13) {
                transition-delay: 1.5s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(14) {
                transition-delay: 1.6s;
            }

            .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(15) {
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

            @media  screen and (max-width: 768px) {
                .blog-slider__img {
                    transform: translateY(-50%);
                    width: 90%;
                }
            }

            @media  screen and (max-width: 576px) {
                .blog-slider__img {
                    width: 95%;
                }
            }

            @media  screen and (max-height: 500px) and (min-width: 992px) {
                .blog-slider__img {
                    height: 270px;
                }
            }

            .blog-slider__content {
                padding-right: 25px;
            }

            @media  screen and (max-width: 768px) {
                .blog-slider__content {
                    margin-top: -80px;
                    text-align: center;
                    padding: 0 30px;
                }
            }

            @media  screen and (max-width: 576px) {
                .blog-slider__content {
                    padding: 0;
                }
            }

            .blog-slider__content>* {
                opacity: 0;
                /* transform: translateY(25px); */
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
                background: #71147e;
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

            @media  screen and (max-width: 576px) {
                .blog-slider__button {
                    width: 100%;
                }
            }

            .blog-slider .swiper-container-horizontal>.swiper-pagination-bullets,
            .blog-slider .swiper-pagination-custom,
            .blog-slider .swiper-pagination-fraction {
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

            @media  screen and (max-width: 768px) {
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

            @media  screen and (max-width: 768px) {
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
                background: #71147e;
                height: 30px;
                /* box-shadow: 0px 0px 20px rgba(252, 56, 56, 0.3); */
                box-shadow: 4px 13px 30px 1px rgb(20 0 138 / 29%);
            }

            .blog-slider__button:hover {
                color: #fff;
                text-decoration: none;
            }

            .swiper-wrapper {
                position: relative;
                width: 100%;
                height: 100%;
                z-index: 1;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-transition-property: -webkit-transform;
                transition-property: -webkit-transform;
                -o-transition-property: transform;
                transition-property: transform;
                transition-property: transform,-webkit-transform;
                -webkit-box-sizing: content-box;
                box-sizing: content-box;
            }

            .swiper-slide {
                -webkit-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                width: 100%;
                height: 100%;
                position: relative;
                -webkit-transition-property: -webkit-transform;
                transition-property: -webkit-transform;
                -o-transition-property: transform;
                transition-property: transform;
                transition-property: transform,-webkit-transform;
            }

            .swiper-container-fade .swiper-slide {
                /* pointer-events: none; */
                pointer-events: visible;
                -webkit-transition-property: opacity;
                -o-transition-property: opacity;
                transition-property: opacity;
            }

            .blog-slider{
                margin-top: 4rem;
            }

            @media  screen and (max-width: 768px) {
                .blog-slider__pagination .swiper-pagination-bullet-active {
                    height: 11px;
                    width: 30px;
                }
            }
            @media(max-width:999px){
                .blog-slider{
                    margin-top:14rem;
                }
            }
</style>
<div class="blog-slider swiper-container-fade swiper-container-horizontal">
    <div class="blog-slider__wrp swiper-wrapper" style="transition-duration: 0ms;">
        <div class="blog-slider__item swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="11" style="width: 750px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
            <div class="blog-slider__img">
                <img src="http://34.221.127.72/assets/blog/organizational-structure.png" alt="" />
            </div>
            <div class="blog-slider__content">
                <span class="blog-slider__code">2023-11-04</span>
                <div class="blog-slider__title">Top 10 Project Management Tools for 2023</div>

                <a href="http://34.221.127.72/blog/project-management/top-10-project-management-tools-for-2023" class="blog-slider__button">READ MORE</a>
            </div>
        </div>
        @foreach ($AllBlogs as $AllBlogData)
        <div class="blog-slider__item swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 750px; opacity: 1; transform: translate3d(-750px, 0px, 0px); transition-duration: 0ms;">
            <div class="blog-slider__img">
                <img src="{{ asset('assets/blog/' . $AllBlogData->image_path) }}" alt="" />
            </div>
            <div class="blog-slider__content">
                <span class="blog-slider__code">{{ $AllBlogData->publish_date }}</span>
                <div class="blog-slider__title">{{ $AllBlogData->title }}</div>

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
    });
</script>
<!--Top Section End-->
<style>
    .blogcontainer, .blogcontainer-fluid, .blogcontainer-lg, .blogcontainer-md, .blogcontainer-sm, .blogcontainer-xl {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }
    @media (min-width: 576px){
        .blogcontainer, .blogcontainer-sm {
            max-width: 540px;
        }
        .col-sm-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
        .col-sm-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }
    }
    @media (min-width: 768px){
        .blogcontainer, .blogcontainer-md, .blogcontainer-sm {
            max-width: 720px;
        }
    }
    @media (min-width: 992px){
        .blogcontainer, .blogcontainer-lg, .blogcontainer-md, .blogcontainer-sm {
            max-width: 960px;
        }
    }
    @media (min-width: 1200px){
        .blogcontainer, .blogcontainer-lg, .blogcontainer-md, .blogcontainer-sm, .blogcontainer-xl {
            max-width: 1140px;
        }
        .h3-height {
            height: 70px;
            font-size: 1rem;
        }
        .sub_all {
            height: 80px;
        }
    }
    @media(max-width:999px){
        .blogcontainer{
            margin-top: -8rem;
        }
    }
    .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl, .col-xl-auto {
        position: relative;
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
    }
    .card-box {
        margin-top: 60px;
    }
    .marb_50 {
        margin-bottom: 50px;
    }
    .post-block {
        margin-bottom: 20px;
    }
    .post-block {
        width: 360px;
        background: #fff;
        box-shadow: 0 10px 30px rgb(16 30 54 / 10%);
        border-radius: 24px;
        margin-bottom: 30px;
    }
    .post-img {
        padding: 10px;
        width: 100%;
    }
    .post-img img {
        border-radius: 10px 10px 10px 10px;
        /* height: 250px; */
        width: 100%;
        height: 196px;
    }
    .post-cont {
        padding: 20px;
    }
    .sub_all {
        text-align: left;
        font-size: 14px;
        letter-spacing: 0px;
        color: #1D2121;
        color: #344054;
        font: 400 13px/25px Satoshi,sans-serif;
    }
    .post-p {
        border-top: 1px solid #e2e2e2 !important;
        color: #344054;
        font: 400 12px/25px Satoshi,sans-serif;
    }
    .pagination {
    display: inline-block;
    padding-left: 0;
    margin: 0;
    border-radius: 4px;
}

.pagination li {
    display: inline;
}

.pagination a,
.pagination span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #71147e;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
}

.pagination .page-item.active span {
    z-index: 2;
    color: #fff;
    cursor: default;
    background-color: #71147e;
    border-color: #71147e;
}

.pagination .page-item.disabled span,
.pagination .page-item.disabled a {
    color: #777;
    cursor: not-allowed;
    background-color: #fff;
    border-color: #ddd;
}

.pagination .page-item span:hover,
.pagination .page-item a:hover {
    background-color: #eee;
}

.pagination .page-link {
    display: block;
    padding: 10px;
}
.pagination-div{
    text-align:center;
    margin-bottom:6rem;
}

/* Optional: Responsive Styles for Small Screens */
@media only screen and (max-width: 768px) {
    .pagination {
        flex-direction: column;
        align-items: center;
    }

    .pagination li {
        margin: 5px 0;
    }
}
@media(max-width:999px){
    .pagination-div{
        text-align:center;
        margin-bottom:1rem;
        padding: 2rem;
    }
}
</style>
<div class="blogcontainer">
    <div class="row">
        <div class="col-sm-12">
            <div class="row marb_50 card-box">
                @foreach ($AllBlogs as $AllBlogData)
                <div class="col-sm-4">
                    <div class="post-block" style="padding-bottom: 20px;">
                        <div class="post-img base-font-family">
                            <img src="{{ asset('assets/blog/' . $AllBlogData->image_path) }}" style="width: 100%; object-fit: cover;" />
                        </div>
                        <div class="post-cont base-font-family">
                            <h1 class="post-title base-font-family h3-height" style="text-align: left; padding-bottom: 0px;">
                                <a href="{{ url('blog/' .$AllBlogData->slug.'/'. $AllBlogData->url) }}">
                                    @php
                                    $titl = substr(strip_tags($AllBlogData->title), 0, 100);
                                    @endphp
                                    {!! html_entity_decode($titl) !!}
                                </a>
                            </h1>
                            <p class="sub_all">
                                @php
                                    $BlogDate = $AllBlogData->publish_date;
                                    $desc = $AllBlogData->description;
                                    $desc = preg_replace('/<img[^>]+>/', '', $desc);
                                    $desc = preg_replace('/\sstyle=("|\').*?("|\')/i', '', $desc);
                                    $desc = substr(strip_tags($desc), 0, 100);
                                @endphp
                                {!! html_entity_decode($desc) !!}
                            </p>
                            <div class="row post-p">
                                <div class="col-md-6">
                                    {{ $AllBlogData->category_name }}
                                </div>
                                <div class="col-md-6">
                                    {{ date('d M Y', strtotime($BlogDate)) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="pagination-div">
{{ $AllBlogs->links() }}
</div>
<section class="bottom-section">
    <div class="page-padding">
        <div class="container-large">
            <div class="faq-margin margin-vertical margin-huge">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-2">
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
</section>
@if (count($reportFaqDetail) > 0)
<section class="section-faqs">
    <div class="page-padding">
        <div class="container-large">
            <div class="margin-top-faq margin-vertical margin-huge">
                <div class="faq-margin margin-bottom margin-xlarge"><h1 class="text-weight-bold faq-h3">FAQ's</h1></div>
                <div class="row">
                    @foreach ($reportFaqDetail as $reportFaqDetailData)
                        @if ($reportFaqDetailData->q1 != '')
                        <div class="col-md-6">
                            <div class="faq-div-border mt-5">
                                <div class="row">
                                    <div class="col-md-2 col-md-2-faq">
                                        <i class="fa fa-plus fa-icon" aria-hidden="true"></i>
                                        <i class="fa fa-minus fa-icon display" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-10 col-md-10-faq margin-lef-neg">
                                        <h4 class="faq-h4">{{ $reportFaqDetailData->q1 }}</h4>
                                    </div>
                                </div>
                                <p class="faq-p a display">{{ $reportFaqDetailData->a1 }}</p>
                            </div>
                        </div>
                        @endif
                        @if ($reportFaqDetailData->q2 != '')
                        <div class="col-md-6">
                            <div class="faq-div-border mt-5">
                                <div class="row">
                                    <div class="col-md-2 col-md-2-faq">
                                        <i class="fa fa-plus fa-icon" aria-hidden="true"></i>
                                        <i class="fa fa-minus fa-icon display" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-10 col-md-10-faq margin-lef-neg">
                                        <h4 class="faq-h4">{{ $reportFaqDetailData->q2 }}</h4>
                                    </div>
                                </div>
                                <p class="faq-p a display">{{ $reportFaqDetailData->a2 }}</p>
                            </div>
                        </div>
                        @endif
                        @if ($reportFaqDetailData->q3 != '')
                        <div class="col-md-6">
                            <div class="faq-div-border mt-5">
                                <div class="row">
                                    <div class="col-md-2 col-md-2-faq">
                                        <i class="fa fa-plus fa-icon" aria-hidden="true"></i>
                                        <i class="fa fa-minus fa-icon display" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-10 col-md-10-faq margin-lef-neg">
                                        <h4 class="faq-h4">{{ $reportFaqDetailData->q3 }}</h4>
                                    </div>
                                </div>
                                <p class="faq-p a display">{{ $reportFaqDetailData->a3 }}</p>
                            </div>
                        </div>
                        @endif
                        @if ($reportFaqDetailData->q4 != '')
                        <div class="col-md-6">
                            <div class="faq-div-border mt-5">
                                <div class="row">
                                    <div class="col-md-2 col-md-2-faq">
                                        <i class="fa fa-plus fa-icon" aria-hidden="true"></i>
                                        <i class="fa fa-minus fa-icon display" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-10 col-md-10-faq margin-lef-neg">
                                        <h4 class="faq-h4">{{ $reportFaqDetailData->q4 }}</h4>
                                    </div>
                                </div>
                                <p class="faq-p a display">{{ $reportFaqDetailData->a4 }}</p>
                            </div>
                        </div>
                        @endif
                        @if ($reportFaqDetailData->q5 != '')
                        <div class="col-md-6">
                            <div class="faq-div-border mt-5">
                                <div class="row">
                                    <div class="col-md-2 col-md-2-faq">
                                        <i class="fa fa-plus fa-icon" aria-hidden="true"></i>
                                        <i class="fa fa-minus fa-icon display" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-10 col-md-10-faq margin-lef-neg">
                                        <h4 class="faq-h4">{{ $reportFaqDetailData->q5 }}</h4>
                                    </div>
                                </div>
                                <p class="faq-p a display">{{ $reportFaqDetailData->a5 }}</p>
                            </div>
                        </div>
                        @endif
                        @if ($reportFaqDetailData->q6 != '')
                        <div class="col-md-6">
                            <div class="faq-div-border mt-5">
                                <div class="row">
                                    <div class="col-md-2 col-md-2-faq">
                                        <i class="fa fa-plus fa-icon" aria-hidden="true"></i>
                                        <i class="fa fa-minus fa-icon display" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-10 col-md-10-faq margin-lef-neg">
                                        <h4 class="faq-h4">{{ $reportFaqDetailData->q6 }}</h4>
                                    </div>
                                </div>
                                <p class="faq-p a display">{{ $reportFaqDetailData->a6 }}</p>
                            </div>
                        </div>
                        @endif
                        @if ($reportFaqDetailData->q7 != '')
                        <div class="col-md-6">
                            <div class="faq-div-border mt-5">
                                <div class="row">
                                    <div class="col-md-2 col-md-2-faq">
                                        <i class="fa fa-plus fa-icon" aria-hidden="true"></i>
                                        <i class="fa fa-minus fa-icon display" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-10 col-md-10-faq margin-lef-neg">
                                        <h4 class="faq-h4">{{ $reportFaqDetailData->q7 }}</h4>
                                    </div>
                                </div>
                                <p class="faq-p a display">{{ $reportFaqDetailData->a7 }}</p>
                            </div>
                        </div>
                        @endif
                        @if ($reportFaqDetailData->q8 != '')
                        <div class="col-md-6">
                            <div class="faq-div-border mt-5">
                                <div class="row">
                                    <div class="col-md-2 col-md-2-faq">
                                        <i class="fa fa-plus fa-icon" aria-hidden="true"></i>
                                        <i class="fa fa-minus fa-icon display" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-10 col-md-10-faq margin-lef-neg">
                                        <h4 class="faq-h4">{{ $reportFaqDetailData->q8 }}</h4>
                                    </div>
                                </div>
                                <p class="faq-p a display">{{ $reportFaqDetailData->a8 }}</p>
                            </div>
                        </div>
                        @endif
                        @if ($reportFaqDetailData->q9 != '')
                        <div class="col-md-6">
                            <div class="faq-div-border mt-5">
                                <div class="row">
                                    <div class="col-md-2 col-md-2-faq">
                                        <i class="fa fa-plus fa-icon" aria-hidden="true"></i>
                                        <i class="fa fa-minus fa-icon display" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-10 col-md-10-faq margin-lef-neg">
                                        <h4 class="faq-h4">{{ $reportFaqDetailData->q9 }}</h4>
                                    </div>
                                </div>
                                <p class="faq-p a display">{{ $reportFaqDetailData->a9 }}</p>
                            </div>
                        </div>
                        @endif
                        @if ($reportFaqDetailData->q10 != '')
                        <div class="col-md-6">
                            <div class="faq-div-border mt-5">
                                <div class="row">
                                    <div class="col-md-2 col-md-2-faq">
                                        <i class="fa fa-plus fa-icon" aria-hidden="true"></i>
                                        <i class="fa fa-minus fa-icon display" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-10 col-md-10-faq margin-lef-neg">
                                        <h4 class="faq-h4">{{ $reportFaqDetailData->q10 }}</h4>
                                    </div>
                                </div>
                                <p class="faq-p a display">{{ $reportFaqDetailData->a10 }}</p>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.faq-div-border').click(function() {
        $(this).children('.row').addClass('q');
        $(this).children('.faq-p').removeClass('display');
        $(this).find('.fa-plus').addClass('display');
        $(this).find('.fa-minus').removeClass('display');
        $(this).find('.fa-minus').addClass('act');
    });
    });
    $(document).ready(function() {
        $('.fa-minus').click(function() {
            setTimeout(function(){
                //alert("ok");
                $('.fa-minus').addClass('display');
                $('.fa-plus').removeClass('display');
                $('.faq-p').addClass('display');
                //$(this).next('faq-p').addClass('display');
                //$(this).parent().siblings('.faq-p').addClass("display");
                //$(this).closest('.q').siblings('.faq-p').addClass('display');
                //$(this).find('.faq-p').addClass('display');
                    //$(this).find('.fa-plus').removeClass('display');
                    // $(this).find('.fa-minus').addClass('display');
                    // $(this).find('.fa-minus').removeClass('act');
            },1000);
    });
    });
</script>
<script>
    $(document).ready(function() {
    $('#product-header').click(function() {
    $('.product-menu').addClass('prod-menu');
    });
    });
    $(document).ready(function() {
    $('#learn-header').click(function() {
    $('.learn-menu').addClass('prod-menu');
    });
    });
    $(document).mouseup(function (e) {
        $('.product-menu').removeClass('prod-menu');
    });
    $(document).mouseup(function (e) {
        $('.learn-menu').removeClass('prod-menu');
    });
</script>
@endsection