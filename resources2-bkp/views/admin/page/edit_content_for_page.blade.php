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
        <li class="breadcrumb-item"><a href="#">Page Management</a></li>
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
				@if(Helper::allow_permission('create-page-management')==1)
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">{{$title}}</h5>
                </div>
                <div class="card-body">
					@if(session()->has('ReportMessage'))
					<div class="xp-alert">
						<div class="alert alert-success" role="alert">
						{{session('ReportMessage')}}
						</div>								 
					</div>
					@endif
                    <form method="post" action="{{url('submit_page_content')}}" enctype="multipart/form-data">
					@csrf
						<div class="form-row">
							<div class="form-group col-md-4">
							  <label for="PageTitle">Page Title</label>
							  <input name="PageTitle" type="text" id="PageTitle" readonly class="form-control" placeholder="Page Title" required value="{{$report_data->title}}">
							  <div class="invalid-data invalid-PageTitle"></div>
							</div>
							<div class="form-group col-md-3">
							  <label for="Element">Element</label>
							  @php
								$ArrElement = Helper::element_type();
								@endphp
							  <select name="Element" id="Element" class="form-control" onchange="return showElement(this.value);" placeholder="Element" required >
								<option value="">Select Element</option>
								@foreach($ArrElement as $key => $val)
								<option value="{{$key}}" {{($page_section_data->element_id==$key)?'selected':''}}>{{$val}}</option>
								@endforeach
							  </select>
							  <div class="invalid-data invalid-Element"></div>
							</div>
							<div class="form-group col-md-3">
							  <label for="FormType">Form Type</label>
							  @php
								$ArrForm = Helper::form_type();
								@endphp
							  <select name="FormType" id="FormType" class="form-control" placeholder="Form Type"  >
								<option value="">Select Form Type</option>
								@foreach($ArrForm as $key => $val)
								<option value="{{$key}}" {{($page_section_data->form_type==$key)?'selected':''}}>{{$val}}</option>
								@endforeach
							  </select>
							  <div class="invalid-data invalid-FormType"></div>
							</div>
							<div class="form-group col-md-2">
							  <label for="ESort">Sort</label>
							  <input name="ESort" type="text" id="ESort" class="form-control" placeholder="Sort" required value="{{$page_section_data->sort}}">
							  <div class="invalid-data invalid-ESort"></div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
							  <label for="ContentTitle">Title</label>
							  <input name="ContentTitle" type="text" id="ContentTitle" class="form-control" placeholder="Title" required value="{{$page_section_data->title}}">
							  <div class="invalid-data invalid-ContentTitle"></div>
							</div>
							<div class="form-group col-md-4">
							  <label for="MainImage">Image</label>
							  <input name="MainImage" type="file" id="MainImage" class="form-control" placeholder="Image" value="">
							  <input type="hidden" id="HidMainImage" name="HidMainImage" value="{{$page_section_data->image}}">
							  @if($page_section_data->image!='')
								  <a href="{{url('assets/page/'.$page_section_data->image)}}" target="new">View Image</a>
							  @endif
							  <div class="invalid-data invalid-MainImage"></div>
							</div>
							<div class="form-group col-md-2">
								<div class="form-check">
									@php
										$Status ='';
										if($page_section_data->status==1)
											$Status ='checked';
									@endphp
								  <input class="form-check-input" type="checkbox" id="Status" name="Status" value="1" {{$Status}}>
								  <label class="form-check-label" for="gridCheck">
									IsActive
								  </label>
								</div>
							</div>
							<div class="form-group col-md-12">
							  <label for="Description">Description</label>
							  <textarea name="Description" id="Description" class="form-control Description" placeholder="Element" >{{$page_section_data->description}}</textarea>
							  <div class="invalid-data invalid-Description"></div>
							</div>

							<div class="form-group col-md-12">
								<label for="embed">Embed Video</label>
								<textarea name="embed" id="embed" class="form-control embed" placeholder="Element" >{{$page_section_data->embed}}</textarea>
								<div class="invalid-data invalid-embed"></div>
							  </div>
							
						</div>
						<h3 class="element_heading" style="{{($page_section_data->element_id==1)?'display:none;':''}}">Add Element Contents:</h3>
						<div class="col-md-12 NewContentSectionData" >
						@php
						
						$i=1;
						@endphp
						@if($page_section_data->element_details!='')
						@php
						$ElementDetails = json_decode($page_section_data->element_details);
						
						@endphp
						@foreach($ElementDetails as $val)
							<div class="form-row border-section CopyContentSectionData CopyContentSectionData_{{$i}}" id="CopyContentSectionData_{{$i}}">
							<div class="form-group col-md-12 ">
								<p style="position: absolute;right: 1px;"><a href="javascript:void(0);" class="SectionSectionBox RemoveSectionSectionBox" onclick="return removeSection(this);" id="RemoveSectionSectionBox_{{$i}}" {{($i==1)?'style="display: none;"':''}} >Remove</a></p>
								<p style="position: absolute;right: 65px;"><a href="javascript:void(0);" class="SectionSectionBox" onclick="return addSection(this);">Add</a></p>
								<p style="position: absolute;right: 100px;"><a href="javascript:void(0);" class="FlipSectionBox" onclick="return flipSection(this);" id="FlipSectionBox_{{$i}}">Flip</a></p>
							  <input type="hidden" class="ReportSectionId" id="ReportSectionId_{{$i}}" name="ReportSectionId[{{$i}}]">
							</div>
							<div class="form-group col-md-10 ">
							  <label for="SectionTitle"> Title</label>
							  <input type="text" class="form-control SectionTitle" placeholder=" Title" id="SectionTitle_{{$i}}" name="SectionTitle[{{$i}}]" value="{{$val->element_title}}">
							  <div class="invalid-data invalid-SectionTitle"></div>
							</div>
							<div class="form-group col-md-2">
							  <label for="ElementSort">Sort</label>
							  <input type="text" class="form-control ElementSort" placeholder="Sort" id="ElementSort_{{$i}}" name="ElementSort[{{$i}}]" value="{{$val->element_sort}}">
							  <div class="invalid-data invalid-ElementSort"></div>
							</div>
							<div class="col-md-12 ToggleSection" id="ToggleSection_{{$i}}">
							<div class="row">
							<div class="form-group col-md-4">
							  <label for="ELink">Link</label>
							  <input type="text" class="form-control ELink" placeholder="Link" id="ELink_{{$i}}" name="ELink[{{$i}}]" value="{{$val->element_link}}">
							  <div class="invalid-data invalid-ELink"></div>
							</div>
							<div class="form-group col-md-3">
							  <label for="SectionImage">Image</label>
							  <input type="file" class="form-control SectionImage" placeholder="Image" value="" id="SectionImage_{{$i}}" name="SectionImage[{{$i}}]">
							  <input type="hidden" class="HidSectionImage" id="HidSectionImage_{{$i}}" name="HidSectionImage[{{$i}}]" value="{{$val->element_image}}">
							   @if($val->element_image!='')
								  <a href="{{url('assets/page/'.$val->element_image)}}" target="new">View Image</a>
							  @endif
							  <div class="invalid-data invalid-SectionImage"></div>
							</div>
							<div class="form-group col-md-3">
							  <label for="OtherDetails">Other Details</label>
							  <input type="text" class="form-control OtherDetails" placeholder="Other Details" id="OtherDetails_{{$i}}" name="OtherDetails[{{$i}}]" value="{{$val->element_other_details}}">
							  <div class="invalid-data invalid-OtherDetails"></div>
							</div>
							<div class="form-group col-md-12">
							  <label for="SectionContent"> Content</label>
							   <textarea rows="3" class="form-control tinytextarea SectionContent" id="SectionContent_{{$i}}" name="SectionContent[{{$i}}]" >{{$val->element_description}}</textarea>
							  <div class="invalid-data invalid-SectionContent"></div>
							</div>
							</div>
							</div>
							
							
							</div>
						@php
						$i++;
						@endphp
						@endforeach
						@endif
						</div>
						
					  <input type="hidden" id="Counter" name="Counter" value="{{$i}}">
					  <input type="hidden" id="PageId" name="PageId" value="{{($report_data)?$report_data->id:''}}">
					  <input type="hidden" id="PageSectionId" name="PageSectionId" value="{{isset($page_section_data)?$page_section_data->id:''}}">
                      <button type="submit" onclick="return validateData();" class="btn btn-primary">Submit</button>
					  <a href="{{url('element_list/'.$report_data->id)}}" class="btn btn-secondary">Back</a>
                    </form>
					<div class="col-md-12 ContentSectionData" style="display:none;">
							<div class="form-row border-section CopyContentSectionData" >
							<div class="form-group col-md-12 ">
								<p style="position: absolute;right: 1px;"><a href="javascript:void(0);" class="SectionSectionBox RemoveSectionSectionBox"  onclick="return removeSection(this);">Remove</a></p>
								<p style="position: absolute;right: 65px;"><a href="javascript:void(0);" class="SectionSectionBox"  onclick="return addSection(this);">Add</a></p>
								<p style="position: absolute;right: 100px;"><a href="javascript:void(0);" class="FlipSectionBox"  onclick="return flipSection(this);">Flip</a></p>
							  <input type="hidden" class="ReportSectionId">
							</div>
							<div class="form-group col-md-10 ">
							  <label for="SectionTitle"> Title</label>
							  <input type="text" class="form-control SectionTitle"  placeholder=" Title"   />
							  <div class="invalid-data invalid-SectionTitle"></div>
							</div>
							<div class="form-group col-md-2" >
							  <label for="ElementSort">Sort</label>
							  <input type="text" class="form-control ElementSort"  placeholder="Sort"   />
							  <div class="invalid-data invalid-ElementSort"></div>
							</div>
							<div class="col-md-12 ToggleSection" >
							<div class="row" >
							<div class="form-group col-md-4" >
							  <label for="ELink">Link</label>
							  <input type="text" class="form-control ELink"  placeholder="Link"   />
							  <div class="invalid-data invalid-ELink"></div>
							</div>
							<div class="form-group col-md-3">
							  <label for="SectionImage">Image</label>
							  <input type="file" class="form-control SectionImage" placeholder="Image" value="">
							  <input type="hidden" class="HidSectionImage">
							  <div class="invalid-data invalid-SectionImage"></div>
							</div>
							<div class="form-group col-md-3" >
							  <label for="OtherDetails">Other Details</label>
							  <input type="text" class="form-control OtherDetails"  placeholder="Other Details"   />
							  <div class="invalid-data invalid-OtherDetails"></div>
							</div>
							<div class="form-group col-md-12">
							  <label for="SectionContent"> Content</label>
							   <textarea rows="3" class="form-control tinytextarea SectionContent" ></textarea>
							  <div class="invalid-data invalid-SectionContent"></div>
							</div>
							</div>
							</div>
							
							
							</div>
							
						</div>
                </div>
				@else
					<div class="card-body">
						<label class="label label-danger">You don't have permission to Create Blog</label>
					</div>
				@endif
            </div>
        </div>
        <!-- End XP Col -->
    </div>    
    <!-- End Row -->
</div>
<!-- End XP Contentbar -->
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
var i=1;
@if($page_section_data->element_details!='')
@foreach($ElementDetails as $SectionData)
	if($("#SectionContent_"+i).length > 0) {
        tinymce.init({
            selector: "textarea#SectionContent_"+i,
            theme: "modern",
			document_base_url: 'https://www.reportsanddata.com/',
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
		i++;
    }
@endforeach
@endif
});
</script>
<script>

function showElement(element_value){
	//alert(element_value);
	$('.element_heading').show();
	if(element_value==1){
		$('.element_heading').hide();
	}else{
		addSection();
	}
}
function addSection(){
	//cloneAuthor CopyAuthor NewAuthor
	var Counter = $('#Counter').val();
	var $clone = $('.ContentSectionData').find('.CopyContentSectionData').clone().attr('id','CopyContentSectionData'+'_'+Counter).addClass('CopyContentSectionData_'+Counter);
	if(Counter==1)
		$clone.find('.RemoveSectionSectionBox').hide();
	else
		$clone.find('.RemoveSectionSectionBox').show();
	$clone.find('.RemoveSectionSectionBox').attr('id','RemoveSectionSectionBox_'+Counter);
	$clone.find('.FlipSectionBox').attr('id','FlipSectionBox_'+Counter);
	$clone.find('.ToggleSection').attr('id','ToggleSection_'+Counter);
	$clone.find('.SectionTitle').attr('id','SectionTitle_'+Counter).attr('name', 'SectionTitle['+Counter+']');
	$clone.find('.ELink').attr('id','ELink_'+Counter).attr('name', 'ELink['+Counter+']');
	$clone.find('.SectionImage').attr('id','SectionImage_'+Counter).attr('name', 'SectionImage['+Counter+']');
	$clone.find('.HidSectionImage').attr('id','HidSectionImage_'+Counter).attr('name', 'HidSectionImage['+Counter+']');
	$clone.find('.OtherDetails').attr('id','OtherDetails_'+Counter).attr('name', 'OtherDetails['+Counter+']');
	$clone.find('.ElementSort').attr('id','ElementSort_'+Counter).attr('name', 'ElementSort['+Counter+']');
	$clone.find('.SectionContent').attr('id','SectionContent_'+Counter).attr('name', 'SectionContent['+Counter+']');
	$clone.find('.ReportSectionId').attr('id','ReportSectionId_'+Counter).attr('name', 'ReportSectionId['+Counter+']');
	$clone.appendTo('.NewContentSectionData');
	if($("#SectionContent_"+Counter).length > 0) {
        tinymce.init({
            selector: "textarea#SectionContent_"+Counter,
            theme: "modern",
			document_base_url: 'https://www.reportsanddata.com/',
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
				{title : 'H1', block : 'h1'},
				{title : 'H2', block : 'h2'},
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
 function removeSection(Obj){
	 if(!confirm("Are you sure, you want to delete?")){
		return false;
	}
	 var RowId = Obj.id;
	 var SplitId = RowId.split("_");
	 var Id = SplitId[1];
	 $('.CopyContentSectionData_'+Id).remove();
 }
 function flipSection(Obj){
	 var RowId = Obj.id;
	 var SplitId = RowId.split("_");
	 var Id = SplitId[1];
	 $('#ToggleSection_'+Id).toggle();
 }

$(document).ready(function(e) {
	
	//var today = new Date();
        tinymce.init({
            selector: "textarea#Description",
            theme: "modern",
			document_base_url: 'https://www.reportsanddata.com/',
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
				{title : 'H1', block : 'h1'},
				{title : 'H2', block : 'h2'},
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

		
		
});
</script>
@endsection 