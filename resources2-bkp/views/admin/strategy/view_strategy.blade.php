@section('title') 
View Strategy
@endsection
@extends('admin.layouts.main')
@section('style')
<!-- Select2 CSS -->
<link href="{{ admin_url.'assets/plugins/select2/select2.min.css' }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">View Strategy</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Account</a></li>
        <li class="breadcrumb-item active" aria-current="page">View Strategy</li>
      </ol>            
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">View Strategy</h5>
                </div>
                <div class="card-body">
				
				@php
				$submit_action = '';
				if(isset($pay))
					$submit_action = 'submit_strategy_payment';
				if(isset($subscribe))
					$submit_action = 'submit_strategy_subscription';
				@endphp
                    <form method="post" action="{{url($submit_action)}}" enctype="multipart/form-data">
					@csrf
					@if($isPlan==1)
						<div class="form-row">
							<div class="form-group col-md-9">
							  <b>Plan Title:</b>
							 
							 {{($strategy_data)?$strategy_data->plan_title:''}}
							</div>
							<div class="form-group col-md-3">
							  <b>Plan Price:</b>
							 
							 {{($strategy_data)?$strategy_data->price:''}}
							</div>
							<div class="form-group col-md-12">
							  <b for="PlanTitle">Description:</b>
							  
							<br>
							{!!html_entity_decode($strategy_data->plan_desc) !!}
							  
							</div>
						</div>
						<div class="form-row">
						@foreach($reportSectionDetails as $SectionData)
						<div class="form-group col-md-12" style="overflow:scroll">
							@if($SectionData->title!='')
							 <h2>{{$SectionData->title}}</h2>
							@endif
							<br>
							@if($SectionData->section_type=='Content Section')
							 {!!html_entity_decode($SectionData->description) !!}
							@elseif($SectionData->section_type=='Image Section')
								@if($SectionData->file_path!='')
									 <a target="new" href="{{url('assets/strategy/image/'.$SectionData->file_path)}}" target="new"><img src="{{url('assets/strategy/image/'.$SectionData->file_path)}}" class="img" width="600"></a>	
								@endif
							@elseif($SectionData->section_type=='PDF Section')
								@if($SectionData->file_path!='')
									<embed src="{{url('assets/strategy/pdf/'.$SectionData->file_path)}}" style="width:900px; height:800px;" frameborder="0">
								@endif
							@elseif($SectionData->section_type=='Video Section')
								@if($SectionData->file_path!='')
								 <video width="320" height="240" controls>
									  <source src="{{url('assets/strategy/video/'.$SectionData->file_path)}}" type="video/mp4">
								</video>
								@endif
							@endif
						</div>
						@endforeach
						</div>
						@else
						
						@if(isset($pay))
							<h1>Strategy Plan not Paid</h1>
							<input type="hidden" name="strategy_id" value="{{$strategy_id}}">
							<input type="submit" class="btn btn-primary" value="submit Payment">
						@endif
						@if(isset($subscribe))
							<h1>Strategy Plan not subscribed</h1>
							<input type="hidden" name="strategy_id" value="{{$strategy_id}}">
							<input type="submit" class="btn btn-primary" value="Subscribe">
						@endif
						@endif
                    </form>
					
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    </div>    
    <!-- End Row -->
</div>
<!-- End XP Contentbar -->
@endsection
