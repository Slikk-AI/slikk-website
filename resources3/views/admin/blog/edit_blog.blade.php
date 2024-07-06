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
        <li class="breadcrumb-item"><a href="#">Blog Management</a></li>
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
				@if(Helper::allow_permission('create-blog-management')==1)
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">{{$title}}</h5>
                </div>
                <div class="card-body">
					@if(session()->has('ReportURL'))
					<div class="xp-alert">
						<div class="alert alert-danger" role="alert">
						{{session('ReportURL')}}
						</div>								 
					</div>
					@endif
                    <form method="post" action="{{url('submit_blog')}}" enctype="multipart/form-data">
					@csrf
						<div class="form-row">
							<div class="form-group col-md-10">
							  <label for="Title">Title</label>
							  <input name="title" type="text" id="title" class="form-control" placeholder="Title" required value="{{($report_data)?$report_data->title:''}}">
							  <div class="invalid-data invalid-title"></div>
							</div>
							<div class="form-group col-md-2">
							  <label for="PublishDate">Publish Date</label>
							  <input name="PublishDate" type="date" class="form-control" id="PublishDate" placeholder=" Publish Date" value="{{($report_data)?date('d-m-Y', strtotime($report_data->publish_date)):''}}"  />
							  <div class="invalid-data invalid-PublishDate"></div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-7" >
							  <label for="pressurl">URL</label>
							  <input name="pressurl" type="text" class="form-control" id="pressurl" placeholder=" URL" value="{{($report_data)?$report_data->breadcum_title:''}}"  />
							  <div class="invalid-data invalid-pressurl"></div>
							</div>
							<div class="form-group col-md-2">
							  <label for="Category">Category</label>
							  <select name="Category" id="Category" class="form-control" placeholder="Category" >
								<option value="0">Select Category</option>
								@foreach($category_data as $category_d)
								<option value="{{$category_d->id}}" {{($report_data && $category_d->id==$report_data->category_id)?'selected':''}}>{{$category_d->category_name}}</option>
								@endforeach
							  </select>
							  <div class="invalid-data invalid-Category"></div>
							</div>
							<div class="form-group col-md-3">
							  <label for="Image">Image</label><br>
							  <input type="file" name="Image"  id="Image">
							  <div class="invalid-data invalid-Image"></div>
							  <input type="hidden" name="HiddenImage" id="HiddenImage" value="{{($report_data)?$report_data->image_path:''}}">
							  @if($report_data && $report_data->image_path!='')
								<a href="{{url('assets/blog/'.$report_data->image_path)}}" target="new">View Image</a>	
							  @endif
							</div>
						</div>
						
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="desc">Description</label>
							  <textarea name="desc" rows="15" class="form-control tinytextarea" id="xp-tinymce">{{($report_data)?$report_data->description:''}}</textarea>
							  <div class="invalid-data invalid-desc"></div>
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <h4 >Add Section</h4>
							</div>
						</div>
						<div class="NewSections">
						@include('admin.blog.edit_blog_section')
						</div>
						<div class="SectionType">
						<div class="form-row CopySectionType">
							
							<div class="form-group col-md-10">
							  <label for="SectionType">Section Type</label>
							  <select name="SectionType" id="SectionType" class="form-control" placeholder="Section Type" onchange="addMoreContentSectionData(this.value);">
								<option value="0">Select Section Type</option>
								<option value="Content Section" >Content Section</option>
								<option value="Image Section" >Image Section</option>
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
										if($report_data){
											if($report_data->status=='active')
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
							<div class="form-group col-md-2">
								<div class="form-check">
									@php
										$FeatureStatus ='';
										if($report_data){
											if($report_data->feature==1)
												$FeatureStatus ='checked';
											else
												$FeatureStatus ='';
										}
									@endphp
								  <input class="form-check-input" type="checkbox" id="FeatureStatus" name="FeatureStatus" value="1" {{$FeatureStatus}}>
								  <label class="form-check-label" for="gridCheck">
									Feature
								  </label>
								</div>
							</div>
						</div>
						
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="metatitle">Meta Title</label>
							  <textarea name="metatitle" rows="3" class="form-control">{{($report_data)?$report_data->meta_title:''}}</textarea>
							  <div class="invalid-data invalid-metatitle"></div>
							</div>
							
						</div>
						<!-- <div class="form-row">
							<div class="form-group col-md-12">
							  <label for="metadesc">Meta Description</label>
							  <textarea name="metadesc" rows="3" class="form-control">{{($report_data)?$report_data->meta_description:''}}</textarea>
							  <div class="invalid-data invalid-metadesc"></div>
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="metakeywords">Meta Keywords</label>
							  <textarea name="metakeywords" rows="3" class="form-control">{{($report_data)?$report_data->meta_keywords:''}}</textarea>
							  <div class="invalid-data invalid-metakeywords"></div>
							</div>	
						</div> -->
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="metadesc">Meta Keywords</label>
							  <textarea name="metadesc" rows="3" class="form-control">{{($report_data)?$report_data->meta_description:''}}</textarea>
							  <div class="invalid-data invalid-metadesc"></div>
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="metakeywords">Meta Description</label>
							  <textarea name="metakeywords" rows="3" class="form-control">{{($report_data)?$report_data->meta_keywords:''}}</textarea>
							  <div class="invalid-data invalid-metakeywords"></div>
							</div>	
						</div>
						
					  <input type="hidden" id="ReportId" name="ReportId" value="{{($report_data)?$report_data->id:''}}">
                      <button type="submit" onclick="return validateData();" class="btn btn-primary">Submit</button>
					  <a href="{{url('blog_listing')}}" class="btn btn-secondary">Back</a>
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
@include('admin.blog.blog_section')
@endsection
@section('script')
<!-- Select2 JS -->
<script src="{{ admin_url.'assets/plugins/select2/select2.min.js' }}"></script>
<script src="{{ admin_url.'assets/js/init/form-select-init.js' }}"></script>
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
			document_base_url: 'http://localhost/n_blog',
			relative_urls: false,
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
				{title : 'H3', block : 'h3'},
				{title : 'H4', block : 'h4'},
				{title : 'H5', block : 'h5'},
				{title : 'H6', block : 'h6'},
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
	}else if(SectionType=='Graph Section'){
		SectionTypeData = 'GraphSectionData';
	}else if(SectionType=='CTA Section'){
		SectionTypeData = 'CTASectionData';
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
	}
	$clone.appendTo('.NewSections:last');
	if($("#SectionContent_"+Counter).length > 0) {
        tinymce.init({
            selector: "textarea#SectionContent_"+Counter,
            theme: "modern",
			document_base_url: 'http://localhost/n_blog',
			relative_urls: false,
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
				{title : 'H3', block : 'h3'},
				{title : 'H4', block : 'h4'},
				{title : 'H5', block : 'h5'},
				{title : 'H6', block : 'h6'},				
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

$(document).ready(function(e) {
	var todaysDate = moment().tz('Asia/Kolkata').toString();
	//var today = new Date();
	$('#PublishDate').datepicker({
		dateFormat: 'dd-mm-yy'
	});
	
});

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

function removeOption(Obj){
    if(!confirm("Are you sure, you want to delete?")){
		return false;
	}
	$(Obj).parent().parent().parent().remove();
}
</script>
@endsection 