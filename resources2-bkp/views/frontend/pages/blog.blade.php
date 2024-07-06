@extends('frontend.layouts.master')
@section('content')

<style>

.timeline-cont h3 {
font-size:25px !important;
margin-bottom: 1.5rem!important;
}

@media screen and (max-width:800px) {
    .timeline-cont {
    width: 100%;
}

.timeline-cont img {
    width: 100%;
}
}
@media (min-width:1020px){
    .desc-box h2{
        font-weight: 300;
    font-size: 40px;
    line-height: 120%;
    margin-bottom: 1.5rem!important;
    padding-top: 1.5rem!important;
    }
    .desc-box p{
        color: #54585a;
    margin: 0 0 10px;
    line-height: 1.8;
    font-size: 14px;
    margin-bottom: 1.5rem!important;
    }
    .desc-box ul li{
        color: #54585a;
    }
    .img-width{
        width: 550px;
        height: 350px;
    object-fit: contain;
    }
}
@media(max-width:999px){
    .desc-box p{
        color: #54585a;
    margin: 0 0 10px;
    line-height: 1.8;
    }
    .desc-box ul li{
        color: #54585a;
    }
}
.backgroundimage{
            background-image: url(https://slikk.ai/img/Group914.png);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
        .white-color{
            color:#fff !important;
        }
</style>
<div class="jumbotron text-center top-banner" style="background: transparent url(https://reportindata.com/test/img/Component%2051%20–%204.png) 0% 0% no-repeat padding-box;
    opacity: 1;
    background-size: cover;
    background-position: bottom;    min-height: 400px;">
    <div class="backgroundimage">
        <div class="container mt-4">
            <div class="row" style="padding-top: 40px;">
                <div class="col-sm-5 blog-hero-text">
                    <h1 class="white-color hero_title">{{$BlogDetails[0]->title}}</h1>
                    <p class="white-color hero_desc"><i class="uil uil-calendar-alt"></i><span>{{date('d M Y', strtotime($BlogDetails[0]->publish_date))}}</span> | <a href="{{$BlogDetails[0]->id}}" class="text-reset" rel="category">{{$BlogDetails[0]->category_name}}</a></p>

                </div>

                <div class="col-sm-7">
                    <img src="{{url('assets/blog/'.$BlogDetails[0]->image_path)}}" class="img-responsive" style="width: 100%" />
                </div>

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
        <div class="offset-md-1 col-md-10 col-sm-12 timeline-left  d-flex align-items-center">
            <div class="timeline-cont desc-box">
                
                 @php $desc = $BlogDetails[0]->description;
		   $desc = preg_replace('/\sstyle=("|\').*?("|\')/i', '', $desc);
		  @endphp
		{!!html_entity_decode($desc) !!}
					@foreach($reportSectionDetails as $reportSectionDetailData)
					 @if($reportSectionDetailData->section_type=='Content Section')
						 <h2>{{$reportSectionDetailData->title}}</h2>
							{!!html_entity_decode($reportSectionDetailData->description)!!}
					 @endif
					 @if($reportSectionDetailData->section_type=='Image Section')
						 <!-- <h4>{{$reportSectionDetailData->title}}</h4> -->
						@if($reportSectionDetailData->image_path!='')
							<img src="{{asset('assets/blog/media/'.$reportSectionDetailData->image_path)}}" alt="{{$reportSectionDetailData->title}}" style="width:100%">
						@endif
					 @endif
					 @endforeach
             
            </div>
        </div>

    </div>
    
    <style>
        .blog-hero-text h1, .blog-hero-text p {
            color: #212529;
        }
        .blog-cont {
            
            margin-right:10px;
            margin-left:10px;
            border-radius: 0px;
                background: #fff;
        }
        .blog-box {
            background:#fff !important;
        }
        @media(min-width:1020px){
            .blog-detail{
                height: 180px;
                object-fit: cover;
            }
            .blog-titlee{
                font-size: 14px !important;
            }
        }
    </style>

    <h2 class="section_title" style="margin-top:60px;margin-bottom:70px;text-align:left;">Popular Posts</h2>
    <div class="row">

      
 {{-- @foreach($ResultPopularBlogs as $ResultPopularBlogData)
        <div class="col-sm-4 card-box blog-box">
            <div class="icon-cont blog-cont">
                <div class="blog-image d-flex align-items-center"><img src="{{asset('assets/blog/'.$ResultPopularBlogData->image_path)}}" style="width:100%"></div>
                
                <h3 class="box-title"><a href="{{url('blog/'.$ResultPopularBlogData->url)}}">{{$ResultPopularBlogData->title}}</a></h3>
                <p>Publish: {{date('d M Y', strtotime($ResultPopularBlogData->publish_date))}}</p>
            </div>
        </div>
        
        	@endforeach --}}


             @foreach($ResultPopularBlogs as $ResultPopularBlogData)
        <div class="col-sm-4 card-box blog-box">
            <div class="icon-cont blog-cont">
                <div class="blog-image d-flex align-items-center"><img class="blog-detail" src="{{asset('assets/blog/'.$ResultPopularBlogData->image_path)}}" style="width:100%"></div>
                
                <h3 class="box-title blog-titlee"><a href="{{ url('blog/' .$ResultPopularBlogData->slug.'/'. $ResultPopularBlogData->url) }}">{{$ResultPopularBlogData->title}}</a></h3>
                <p>Publish: {{date('d M Y', strtotime($ResultPopularBlogData->publish_date))}}</p>
            </div>
        </div>
        
        	@endforeach 
       
    </div>


    

   

</div>


@endsection 