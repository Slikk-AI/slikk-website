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
					@if(session()->has('ReportURL'))
					<div class="xp-alert">
						<div class="alert alert-danger" role="alert">
						{{session('ReportURL')}}
						</div>								 
					</div>
					@endif
                    <form method="post" action="{{url('update_page')}}" enctype="multipart/form-data">
					@csrf
						<div class="form-row">
							<div class="form-group col-md-10">
							  <label for="Title">Title</label>
							  <input name="title" type="text" id="title" class="form-control" placeholder="Title" required value="{{($report_data)?$report_data->title:''}}">
							  <div class="invalid-data invalid-title"></div>
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-7" >
							  <label for="pressurl">URL</label>
							  <input name="url" type="text" class="form-control" id="pressurl" placeholder=" URL" value="{{($report_data)?$report_data->url:''}}"  />
							  <div class="invalid-data invalid-pressurl"></div>
							</div>
						
							
						</div>

						<div class="form-row">
							<div class="form-group col-md-12" >
							  <label for="pressurl">Category</label>

							<select name="category" class="form-control" id="presscat">
<option value="{{($report_data)?$report_data->category:''}}">{{($report_data)?$report_data->category:'Select Categories'}}</option>
<option value="learn">Learn</option>
<option value="features">Features</option>
<option value="use-case">Use Case</option>
<option value="industry">Industry</option>
<option value="teams">Teams</option>
							</select>
							
							  <div class="invalid-data invalid-presscat"></div>
							</div>
						
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="desc">Bottom Description</label>
							  <textarea name="description" rows="15"  id="tiny_bottom" class="form-control tinytextarea" id="xp-tinymce">{{($report_data)?$report_data->description:''}}</textarea>
							  <div class="invalid-data invalid-desc"></div>
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="BannerTitle">Banner Title</label>
							  <input name="BannerTitle" type="text" id="BannerTitle" class="form-control" placeholder="Banner Title" value="{{($report_data)?$report_data->banner_title:''}}">
							  <div class="invalid-data invalid-title"></div>
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="BannerDescription">Banner Description</label>
							  <textarea name="BannerDescription" rows="15" class="form-control tinytextarea" id="BannerDescription">{{($report_data)?$report_data->banner_description:''}}</textarea>
							  <div class="invalid-data invalid-desc"></div>
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
							  <label for="BannerBackgroundImage">Banner Background Image</label>
							  <input type="file" name="BannerBackgroundImage"  id="BannerBackgroundImage" accept="image/*">
							  <div class="invalid-data invalid-BannerBackgroundImage"></div>
							  <input type="hidden" name="HiddenBannerBackgroundImage" id="HiddenBannerBackgroundImage" value="{{($report_data)?$report_data->banner_background_img:''}}">
							</div>
							<div class="form-group col-md-6">
							  <label for="BannerImage">Banner Image</label>
							   <input type="file" name="BannerImage"  id="BannerImage" accept="image/*">
							  <div class="invalid-data invalid-BannerImage"></div>
							  <input type="hidden" name="HiddenBannerImage" id="HiddenBannerImage" value="{{($report_data)?$report_data->banner_image:''}}">
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
						
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="metatitle">Meta Title</label>
							  <textarea name="meta_title" rows="3"  id="tiny_meta_title" class="form-control">{{($report_data)?$report_data->meta_title:''}}</textarea>
							  <div class="invalid-data invalid-metatitle"></div>
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="metadesc">Meta Description</label>
							  <textarea name="meta_description" rows="3"  id="tiny_disc" class="form-control">{{($report_data)?$report_data->meta_description:''}}</textarea>
							  <div class="invalid-data invalid-metadesc"></div>
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="metakeywords">Meta Keywords</label>
							  <textarea name="meta_keywords" rows="3" id="tiny_key" class="form-control">{{($report_data)?$report_data->meta_keywords:''}}</textarea>
							  <div class="invalid-data invalid-metakeywords"></div>
							</div>
							
						</div>


						<div class="form-row">
							<div class="form-group col-md-12">
							  <h3>FAQ</h3>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="q1">Question 1</label>
							  <input name="q1" type="text" class="form-control" id="q1" placeholder="Question 1" value="{{isset($report_faq_data)?$report_faq_data->q1:''}}" />
							  <div class="invalid-data invalid-q1"></div>
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="a1">Answer 1</label>
							  <input name="a1" type="text" class="form-control" id="a1" placeholder="Answer 1" value="{{isset($report_faq_data)?$report_faq_data->a1:''}}" />
							  <div class="invalid-data invalid-a1"></div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="q2">Question 2</label>
							  <input name="q2" type="text" class="form-control" id="q2" placeholder="Question 2" value="{{isset($report_faq_data)?$report_faq_data->q2:''}}" />
							  <div class="invalid-data invalid-q2"></div>
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="a2">Answer 2</label>
							  <input name="a2" type="text" class="form-control" id="a2" placeholder="Answer 2" value="{{isset($report_faq_data)?$report_faq_data->a2:''}}" />
							  <div class="invalid-data invalid-a2"></div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="q3">Question 3</label>
							  <input name="q3" type="text" class="form-control" id="q3" placeholder="Question 3" value="{{isset($report_faq_data)?$report_faq_data->q3:''}}" />
							  <div class="invalid-data invalid-q3"></div>
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="a3">Answer 3</label>
							  <input name="a3" type="text" class="form-control" id="a3" placeholder="Answer 3" value="{{isset($report_faq_data)?$report_faq_data->a3:''}}" />
							  <div class="invalid-data invalid-a3"></div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="q4">Question 4</label>
							  <input name="q4" type="text" class="form-control" id="q4" placeholder="Question 4" value="{{isset($report_faq_data)?$report_faq_data->q4:''}}" />
							  <div class="invalid-data invalid-q4"></div>
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="a4">Answer 4</label>
							  <input name="a4" type="text" class="form-control" id="a4" placeholder="Answer 4" value="{{isset($report_faq_data)?$report_faq_data->a4:''}}" />
							  <div class="invalid-data invalid-a4"></div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="q5">Question 5</label>
							  <input name="q5" type="text" class="form-control" id="q5" placeholder="Question 5" value="{{isset($report_faq_data)?$report_faq_data->q5:''}}" />
							  <div class="invalid-data invalid-q5"></div>
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="a5">Answer 5</label>
							  <input name="a5" type="text" class="form-control" id="a5" placeholder="Answer 5" value="{{isset($report_faq_data)?$report_faq_data->a5:''}}" />
							  <div class="invalid-data invalid-a5"></div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="q6">Question 6</label>
							  <input name="q6" type="text" class="form-control" id="q6" placeholder="Question 6" value="{{isset($report_faq_data)?$report_faq_data->q6:''}}" />
							  <div class="invalid-data invalid-q6"></div>
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="a6">Answer 6</label>
							  <input name="a6" type="text" class="form-control" id="a6" placeholder="Answer 6" value="{{isset($report_faq_data)?$report_faq_data->a6:''}}" />
							  <div class="invalid-data invalid-a6"></div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="q7">Question 7</label>
							  <input name="q7" type="text" class="form-control" id="q7" placeholder="Question 7" value="{{isset($report_faq_data)?$report_faq_data->q7:''}}" />
							  <div class="invalid-data invalid-q7"></div>
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="a7">Answer 7</label>
							  <input name="a7" type="text" class="form-control" id="a7" placeholder="Answer 7" value="{{isset($report_faq_data)?$report_faq_data->a7:''}}" />
							  <div class="invalid-data invalid-a7"></div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="q8">Question 8</label>
							  <input name="q8" type="text" class="form-control" id="q8" placeholder="Question 8" value="{{isset($report_faq_data)?$report_faq_data->q8:''}}" />
							  <div class="invalid-data invalid-q8"></div>
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="a8">Answer 8</label>
							  <input name="a8" type="text" class="form-control" id="a8" placeholder="Answer 8" value="{{isset($report_faq_data)?$report_faq_data->a8:''}}" />
							  <div class="invalid-data invalid-a8"></div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="q9">Question 9</label>
							  <input name="q9" type="text" class="form-control" id="q9" placeholder="Question 9" value="{{isset($report_faq_data)?$report_faq_data->q9:''}}" />
							  <div class="invalid-data invalid-q9"></div>
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="a9">Answer 9</label>
							  <input name="a9" type="text" class="form-control" id="a9" placeholder="Answer 9" value="{{isset($report_faq_data)?$report_faq_data->a9:''}}" />
							  <div class="invalid-data invalid-a9"></div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="q10">Question 10</label>
							  <input name="q10" type="text" class="form-control" id="q10" placeholder="Question 10" value="{{isset($report_faq_data)?$report_faq_data->q10:''}}" />
							  <div class="invalid-data invalid-q10"></div>
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="a10">Answer 10</label>
							  <input name="a10" type="text" class="form-control" id="a10" placeholder="Answer 10" value="{{isset($report_faq_data)?$report_faq_data->a10:''}}" />
							  <div class="invalid-data invalid-a10"></div>
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

	
        tinymce.init({
            selector: "textarea",
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

		tinymce.init({
            selector: "textarea#tiny_disc",
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

		 tinymce.init({
            selector: "textarea#BannerDescription",
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

		

		tinymce.init({
            selector: "textarea#tiny_meta_title",
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

		tinymce.init({
            selector: "textarea#tiny_key",
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

		tinymce.init({
            selector: "textarea#tiny_bottom",
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