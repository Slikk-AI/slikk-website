@section('title') 
View Blog
@endsection
@extends('admin.layouts.main')
@section('style')
<!-- Select2 CSS -->
<link href="{{ admin_url.'assets/plugins/select2/select2.min.css' }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">View Blog</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Account</a></li>
        <li class="breadcrumb-item active" aria-current="page">View Blog</li>
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
                    <h5 class="card-title text-black">View Blog</h5>
                </div>
                <div class="card-body">
				
				
						<div class="form-row">
							<div class="form-group col-md-9">
							  <b>Blog Title:</b>
							 
							 {{($report_data)?$report_data->title:''}}
							</div>
							
							<div class="form-group col-md-12">
							  <b for="PlanTitle">Description:</b>
							  
							<br>
							{!!html_entity_decode($report_data->description) !!}
							  
							</div>
						</div>
						<div class="form-row">
						@foreach($reportSectionDetails as $SectionData)
						<div class="form-group col-md-12">
							@if($SectionData->title!='')
							 {{$SectionData->title}}
							@endif
							<br>
							@if($SectionData->section_type=='Content Section')
							 {!!html_entity_decode($SectionData->description) !!}
							@elseif($SectionData->section_type=='Image Section')
								@if($SectionData->image_path!='')
									 <a target="new" href="{{url('assets/blog/media/'.$SectionData->image_path)}}" target="new"><img src="{{url('assets/blog/media/'.$SectionData->image_path)}}" class="img" width="600"></a>	
								@endif
							@endif
						</div>
						@endforeach
						</div>
						
                   
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    </div>    
    <!-- End Row -->
</div>
<!-- End XP Contentbar -->
@endsection
