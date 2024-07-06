@section('title') 
{{$title}}
@endsection
@extends('admin.layouts.main')
@section('style')
<!-- Select2 CSS -->
<link href="{{ admin_url.'assets/plugins/select2/select2.min.css' }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">{{$title}}</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Strategy Management</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
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
				@if(Helper::allow_permission('edit-strategy-management')==1)
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">{{$title}}</h5>
                </div>
                <div class="card-body">
					
                    <form method="post" action="{{url('submit_strategy')}}" enctype="multipart/form-data">
					@csrf
						<div class="form-row">
							<div class="form-group col-md-9">
							  <label for="PlanTitle">Plan Title<span class="text-red">*</span></label>
							  <input type="text" class="form-control" name="PlanTitle" id="PlanTitle" placeholder="Plan Title" value="{{($strategy_data)?$strategy_data->plan_title:''}}">
							  <div class="invalid-data invalid-PlanTitle"></div>
							</div>
							<div class="form-group col-md-3">
							  <label for="Price">Price<span class="text-red">*</span></label>
							  <input type="text" class="form-control" name="Price" id="Price" placeholder="Plan Price" value="{{($strategy_data)?$strategy_data->price:''}}">
							  <div class="invalid-data invalid-Price"></div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="desc">Description</label>
							  <textarea name="desc" rows="15" class="form-control tinytextarea" id="xp-tinymce">{{($strategy_data)?$strategy_data->plan_desc:''}}</textarea>
							  <div class="invalid-data invalid-desc"></div>
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <h4 >Add Section</h4>
							</div>
						</div>
						<div class="NewSections">
						@include('admin.strategy.edit_report_section')
						</div>
						<div class="SectionType">
						<div class="form-row CopySectionType">
							
							<div class="form-group col-md-10">
							  <label for="SectionType">Section Type</label>
							  <select name="SectionType" id="SectionType" class="form-control" placeholder="Section Type" onchange="addMoreContentSectionData(this.value);">
								<option value="0">Select Section Type</option>
								<option value="Content Section" >Content Section</option>
								<option value="Image Section" >Image Section</option>
								<option value="PDF Section" >PDF Section</option>
								<option value="Video Section" >Video Section</option>
							  </select>
							  <div class="invalid-data invalid-SectionType"></div>
							  @php
							if(count($reportSectionDetails)>0){
								foreach($reportSectionDetails as $SectionData){
									$SectionCounter =$SectionData->section_sequence;
								}
								$Counter = $SectionCounter+1;
							}else{
								$Counter = 1;
							}
							@endphp
							  <input type="hidden" name="Counter" id="Counter" value="{{$Counter}}">
							</div>
							
						</div>
						</div>
						
						
						<div class="form-row">
							
							
							<div class="form-group col-md-2">
								<div class="form-check">
									@php
										$Status ='checked';
										if($strategy_data){
											if($strategy_data->status=='active')
												$Status ='checked';
											else
												$Status ='';
										}
									@endphp
								  <input class="form-check-input" type="checkbox" id="Status" name="Status" value="1" {{$Status}}>
								  <label class="form-check-label" for="gridCheck">
									IsActive
								  </label>
								</div>
							</div>
							
						</div>
						
					  <input type="hidden" id="strategy_id" name="strategy_id" value="{{($strategy_data)?$strategy_data->id:''}}">
                      <button type="submit" onclick="return validateData();" class="btn btn-primary">Submit</button>
					  <a href="{{url('strategy-management')}}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
				@else
					<div class="card-body">
						<label class="label label-danger">You don't have permission to Create Report</label>
					</div>
				@endif
            </div>
        </div>
        <!-- End XP Col -->
    </div>    
    <!-- End Row -->
</div>
<!-- End XP Contentbar -->
@include('admin.strategy.report_section')
@endsection
@section('script')
<!-- Select2 JS -->
<script src="{{ admin_url.'assets/plugins/select2/select2.min.js' }}"></script>
<script src="{{ admin_url.'assets/js/init/form-select-init.js' }}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.datetimepicker.full.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/moment-timezone-with-data.js')}}"></script>
<link href="{{asset('assets/css/jquery.datetimepicker.min.css')}}" rel="stylesheet"/>
<!-- Wysiwig JS -->
<script src="{{ admin_url.'assets/plugins/tinymce/tinymce.min.js' }}"></script>
<script src="{{ admin_url.'assets/js/init/form-editor-init.js' }}"></script>
<script>
$(document).ready(function(e) {
@foreach($reportSectionDetails as $SectionData)
	if($("#SectionContent_{{$SectionData->section_sequence}}").length > 0) {
        tinymce.init({
            selector: "textarea#SectionContent_{{$SectionData->section_sequence}}",
            theme: "modern",
            height:320,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
            style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
            ]
        });
    }
@endforeach
});
</script>
<script>

function addMoreContentSectionData(SectionType){
	if(SectionType=='Content Section'){
		SectionTypeData = 'ContentSectionData';
	}else if(SectionType=='Image Section'){
		SectionTypeData = 'ImageSectionData';
	}else if(SectionType=='PDF Section'){
		SectionTypeData = 'PDFSectionData';
	}else if(SectionType=='Video Section'){
		SectionTypeData = 'VideoSectionData';
	}
	var Counter = $('#Counter').val();
	var $clone = $('.'+SectionTypeData).find('.Copy'+SectionTypeData).clone().attr('id','Copy'+SectionTypeData+'_'+Counter).addClass('SectionBox_'+Counter);
	$clone.find('.SectionCounter').text(Counter);
	$clone.find('.SectionSectionBox').attr('id','SectionSectionBox_'+Counter);
	$clone.find('.SectionSequence').attr('id','SectionSequence_'+Counter).attr('name','SectionSequence['+Counter+']').val(Counter);
	$clone.find('.HiddenSectionType').attr('id','HiddenSectionType_'+Counter).attr('name','HiddenSectionType['+Counter+']').val(SectionType);
	$clone.find('.ReportSectionId').attr('id','ReportSectionId_'+Counter).attr('name','ReportSectionId['+Counter+']');
	$clone.find('.SectionShow').attr('id','SectionShow_'+Counter).attr('name','SectionShow['+Counter+']');
	if(SectionType=='Content Section'){
		$clone.find('.SectionPrice').attr('id','SectionPrice_'+Counter).attr('name','SectionPrice['+Counter+']');
		$clone.find('.SectionTitle').attr('id','SectionTitle_'+Counter).attr('name','SectionTitle['+Counter+']');
		$clone.find('.SectionContent').attr('id','SectionContent_'+Counter).attr('name','SectionContent['+Counter+']');
	}else if(SectionType=='Image Section'){
		$clone.find('.ReportHiddenImg').attr('id','ReportHiddenImg_'+Counter).attr('name','ReportHiddenImg['+Counter+']');
		$clone.find('.ImageTtile').attr('id','ImageTtile_'+Counter).attr('name','ImageTtile['+Counter+']');
		$clone.find('.SectionImage').attr('id','SectionImage_'+Counter).attr('name','SectionImage['+Counter+']');
	}else if(SectionType=='PDF Section'){
		$clone.find('.ReportHiddenPDF').attr('id','ReportHiddenPDF_'+Counter).attr('name','ReportHiddenPDF['+Counter+']');
		$clone.find('.PDFTtile').attr('id','PDFTtile_'+Counter).attr('name','PDFTtile['+Counter+']');
		$clone.find('.SectionPDF').attr('id','SectionPDF_'+Counter).attr('name','SectionPDF['+Counter+']');
	}if(SectionType=='Video Section'){
		$clone.find('.ReportHiddenVideo').attr('id','ReportHiddenVideo_'+Counter).attr('name','ReportHiddenVideo['+Counter+']');
		$clone.find('.VideoTtile').attr('id','VideoTtile_'+Counter).attr('name','VideoTtile['+Counter+']');
		$clone.find('.SectionVideo').attr('id','SectionVideo_'+Counter).attr('name','SectionVideo['+Counter+']');
	}
	$clone.appendTo('.NewSections:last');
	if($("#SectionContent_"+Counter).length > 0) {
        tinymce.init({
            selector: "textarea#SectionContent_"+Counter,
            theme: "modern",
            height:320,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
            style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
            ]
        });
    }
	Counter++;
	$('#Counter').val(Counter);
}

 function removeSection(Obj){
	 var RowId = Obj.id;
	 var SplitId = RowId.split("_");
	 var Id = SplitId[1];
	 $('.SectionBox_'+Id).remove();
 }


 function deleteSurvey(){
	if(!confirm("Are you sure, you want to delete?")){
		return false;
	}
}
counter=1;
 function removeOption(Obj){
     if(!confirm("Are you sure, you want to delete?")){
		return false;
	}
	 $(Obj).parent().parent().parent().remove();
 }

</script>
@endsection 