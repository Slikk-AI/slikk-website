@section('title') 
{{$title}}
@endsection
@extends('layouts.main')
@section('style')
<!-- Vertical Timeline CSS -->
<link href="{{ asset('assets/plugins/vertical-timeline/vertical-timeline.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">{{$title}}</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Lead Management</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
      </ol>            
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
    <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="text-center mt-3">
                <h4>{{ $leadDetails->report_title}}</h4>
				<label>Agent Name: <b>{{ $leadDetails->user_name}}</b></label><br>
            </div>
        </div>
        <!-- End XP Col -->
    </div>
   <!-- End XP Row -->            
    <section class="xp-timeline xp-timeline-js">
        <div class="xp-timeline-container">
		@php
			$ArrColor = array('primary', 'success', 'danger','warning','info','secondary');
			$NUM = 0;
		@endphp
			@foreach($FollowUp as $FollowUpDetails)
            <div class="xp-timeline-block xp-block-js">
                <div class="xp-timeline-img xp-timeline-img-{{$ArrColor[$NUM]}} xp-img-js">                    
                </div> 
                <div class="xp-timeline-content xp-content-js">
                    <h4>{{$FollowUpDetails->deal_stage}}</h4>
                    <p>{{$FollowUpDetails->message}}</p>
					<b class="{{($FollowUpDetails->followup_call=='No')?'text-danger':'text-success'}} ">Call: {{$FollowUpDetails->followup_call}}</b>
                    <!--<a href="#" class="xp-timeline-readmore btn btn-primary btn-rounded">Read more</a>-->
                    <span class="xp-timeline-date">{{date('d M Y', strtotime($FollowUpDetails->followup_date))}}</span>
                </div> 
            </div>
            @php
			$NUM++;
			if($NUM==6)
				$NUM = 0;
			@endphp
			@endforeach
        </div>
    </section>
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')
<!-- Timeline JS -->
<script src="{{ asset('assets/plugins/vertical-timeline/vertical-timeline.js') }}"></script>
@endsection 