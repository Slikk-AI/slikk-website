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
        <li class="breadcrumb-item"><a href="#">Category Management</a></li>
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
				@if(Helper::allow_permission('create-category-management')==1)
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
                    <form method="post" action="{{url('submit_category')}}" enctype="multipart/form-data">
					@csrf
						<div class="form-row">
							<div class="form-group col-md-8">
							  <label for="Title">Title</label>
							  <input name="title" type="text" id="title" class="form-control" placeholder="Title" required value="{{isset($report_data)?$report_data->category_name:''}}">
							  <div class="invalid-data invalid-title"></div>
							</div>
							<div class="form-group col-md-4">
							  <label for="ParentCategory">Parent Category</label>
							  <select name="ParentCategory" id="ParentCategory" class="form-control" required >
							  <option value="0">Parent</option>
							  @foreach($CatList as $val_cat)
							  <option value="{{$val_cat->id}}" {{(isset($report_data) && $report_data->parent_id==$val_cat->id)?'selected':''}}>{{$val_cat->category_name}}</option>
							  @endforeach
							  </select>
							  <div class="invalid-data invalid-title"></div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-7" >
							  <label for="pressurl">URL</label>
							  <input name="pressurl" type="text" class="form-control" id="pressurl" placeholder=" URL" value="{{isset($report_data)?$report_data->slug:''}}"  />
							  <div class="invalid-data invalid-pressurl"></div>
							</div>
							
							<div class="form-group col-md-3">
							  <label for="Image">Image</label><br>
							  <input type="file" name="Image"  id="Image">
							  <div class="invalid-data invalid-Image"></div>
							  <input type="hidden" name="HiddenImage" id="HiddenImage" value="">
								@if(isset($report_data))
									@if($report_data->image!='')
										<a href="{{asset('assets/category/'.$report_data->image)}}" target="new">View Image</a>
									@endif
								@endif
							</div>
						</div>
						
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="desc">Description</label>
							  <textarea name="desc" rows="15" class="form-control tinytextarea" id="xp-tinymce">{{isset($report_data)?$report_data->description:''}}</textarea>
							  <div class="invalid-data invalid-desc"></div>
							</div>
							
						</div>
						
						<div class="form-row">
							<div class="form-group col-md-2">
								<div class="form-check">
									@php
										$Status ='checked';
										if(isset($report_data)){
											if($report_data->status==1)
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
							  <textarea name="metatitle" rows="3" class="form-control">{{isset($report_data)?$report_data->meta_title:''}}</textarea>
							  <div class="invalid-data invalid-metatitle"></div>
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="metadesc">Meta Description</label>
							  <textarea name="metadesc" rows="3" class="form-control">{{isset($report_data)?$report_data->meta_description:''}}</textarea>
							  <div class="invalid-data invalid-metadesc"></div>
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
							  <label for="metakeywords">Meta Keywords</label>
							  <textarea name="metakeywords" rows="3" class="form-control">{{isset($report_data)?$report_data->meta_keywords:''}}</textarea>
							  <div class="invalid-data invalid-metakeywords"></div>
							</div>
							
						</div>
						
					  <input type="hidden" id="CategoryId" name="CategoryId" value="{{isset($report_data)?$report_data->id:''}}">
                      <button type="submit" onclick="return validateData();" class="btn btn-primary">Submit</button>
					  <a href="{{url('category_listing')}}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
				@else
					<div class="card-body">
						<label class="label label-danger">You don't have permission to Create Category</label>
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



</script>
@endsection 