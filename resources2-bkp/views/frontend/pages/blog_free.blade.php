@extends('frontend.layouts.master')
@section('content')
    <style>
        /* .col-sm-2.cat-menu span {
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
/* 
        .cat-menu span {
            background: var(--unnamed-color-6b52f9) 0% 0% no-repeat padding-box;
            background: #6B52F9 0% 0% no-repeat padding-box;
            box-shadow: 0px 3px 6px #00000029;
            border-radius: 48px;
            padding: 10px 50px;
            color: #fff;
        } */

    </style>

    <div class="jumbotron text-center top-banner" style="background: transparent url(https://slikk.ai/img/Component%2051%20–%204.png) 0% 0% no-repeat padding-box;
            opacity: 1;
            background-size: cover;
            background-position: bottom;    min-height: 400px;">

        <div class="container">
            <div class="row" style="padding-top: 40px;">
                <div class="col-sm-5">
                    
                    <h1 class="hero_title"> {{$report_data->category_name}}</h1>
                  
                    <!-- <p class="hero_desc">We're here to help businesses and employees reach their full performance potential. We equip teams like yours with everything you need to focus on actual work, so there is no need to chase emails, juggle multiple tools, and work on spreadsheets.</p> -->

                </div>

                <div class="col-sm-7">
                    <!-- <img src="https://reportindata.com/test/img/Group 931.png" class="img-responsive" style="width: 400px;" /> -->
                </div>

            </div>

        </div>

    </div>


 

    <!-- <h2 class="section_title" style="margin-top:60px;margin-bottom:70px">Add visibility to your work</h2>-->

    <div class="container">

        {{-- <div class="row">
            @foreach ($category_data as $category_data)
                <div class="col-sm-3 cat-menu"> <a href="{{ url('blog/' . $category_data->slug) }}"
                        style="color:#fff;cursor:pointer;text-decoration:none;"><span>{{ $category_data->category_name }}</span></a>
                </div>
            @endforeach


        </div> --}}


        <div class="row">

            <div class="col-sm-3 marb_50 card-box">
                @foreach ($category_data as $category_data)
                <div class="cat-menu"> <a href="{{ url('blogs/' . $category_data->slug) }}"
                    style="color:#fff;cursor:pointer;text-decoration:none;"><span style="">{{ $category_data->category_name }}</span></a>
            </div>
            @endforeach
            </div>

                <div class="col-sm-9">

@if (count($AllBlogs) > 0)


        <div class="row marb_50 card-box">
            @foreach ($AllBlogs as $AllBlogData)
                <div class="col-sm-6">

                    <div class="post-block" style="padding-bottom: 20px;">

                        <div class="post-img base-font-family">
                            <img src="{{ asset('assets/blog/' . $AllBlogData->image_path) }}" style="width:100%">

                        </div>

                        <div class="post-cont base-font-family">
                            <h3 class="post-title base-font-family" style="text-align:left;padding-bottom:0px"><a
                                    href="{{ url('blog/' .$AllBlogData->slug.'/'. $AllBlogData->url) }}">{{ $AllBlogData->title }}</a></h3>
                            <p class="sub_all"> @php
                                $BlogDate = $AllBlogData->publish_date;
                                $desc = $AllBlogData->description;
                                $desc = preg_replace('/<img[^>]+>/', '', $desc);
                                $desc = preg_replace('/\sstyle=("|\').*?("|\')/i', '', $desc);
                                $desc = substr(strip_tags($desc), 0, 300);
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

        @else

        <h2 style="text-align: center;
        padding-top: 20%;"> Coming Soon ....</h2>

        @endif

    

    </div>

        </div>
    </div>
@endsection
