@section('title') 
{{$title}}
@endsection
@extends('admin.layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">{{$title}}</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Access Management</a></li>
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
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">{{$title}}</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="{{url('submit_permission')}}" >
					@csrf
						<div class="form-row">
						
						<div class="form-group col-md-10">
							  <label for="inputEmail4">Name</label>
							  <input type="text" class="form-control" name="Menu" id="Menu" placeholder="Menu Name" value="{{isset($Permission->menu_name)?$Permission->menu_name:''}}" {{isset($Permission->menu_name)?'readonly':''}}>
							  <div class="invalid-data invalid-Menu"></div>
							</div>
							<div class="form-group col-md-2">
								<label for="inputEmail4">Sort Order</label>
								  <input type="text" class="form-control" name="SortOrder" id="SortOrder" placeholder="Sort Order" value="{{isset($Permission->sort_order)?$Permission->sort_order:''}}">
								  <div class="invalid-data invalid-SortOrder"></div>
							</div>
							
						
							
							<div class="form-group col-md-12">
							  <label for="inputPassword4">Permission </label>
							</div>
							<div class="form-group col-md-2">
							   <div class="form-check">
									@if(isset($DefaultPermission))
								  <input class="form-check-input" type="checkbox" id="Create" name="Create" value="Create" {{($DefaultPermission['create-'.$MenuKeyword]==1)?'checked':''}} >
									@else
										 <input class="form-check-input" type="checkbox" id="Create" name="Create" value="Create" >
									@endif
								  <label class="form-check-label" for="gridCheck">Create</label>
								</div>
							</div>
							<div class="form-group col-md-2">
							   <div class="form-check">
								@if(isset($DefaultPermission))
								  <input class="form-check-input" type="checkbox" id="Edit" name="Edit" value="Edit" {{($DefaultPermission['edit-'.$MenuKeyword]==1)?'checked':''}}>
									@else
										 <input class="form-check-input" type="checkbox" id="Edit" name="Edit" value="Edit" >
									@endif
								 
								  <label class="form-check-label" for="gridCheck">Edit</label>
								</div>
							</div>
							<div class="form-group col-md-2">
							   <div class="form-check">
									@if(isset($DefaultPermission))
								  <input class="form-check-input" type="checkbox" id="DeleteP" name="DeleteP" value="Delete" {{($DefaultPermission['delete-'.$MenuKeyword]==1)?'checked':''}}>
									@else
										 <input class="form-check-input" type="checkbox" id="DeleteP" name="DeleteP" value="Delete" >
									@endif
								  
								  <label class="form-check-label" for="gridCheck">Delete</label>
								</div>
							</div>
							<div class="form-group col-md-2">
							   <div class="form-check">
							   @if(isset($DefaultPermission))
								  <input class="form-check-input" type="checkbox" id="ViewList" name="ViewList" value="View List" {{($DefaultPermission['view-'.$MenuKeyword.'-list']==1)?'checked':''}}>
									@else
										  <input class="form-check-input" type="checkbox" id="ViewList" name="ViewList" value="View List" >
									@endif
								 
								  <label class="form-check-label" for="gridCheck">View List</label>
								</div>
							</div>
							<div class="form-group col-md-2">
							   <div class="form-check">
									 @if(isset($DefaultPermission))
								  <input class="form-check-input" type="checkbox" id="ViewMenu" name="ViewMenu" value="View Menu" {{($DefaultPermission['view-'.$MenuKeyword.'-menu']==1)?'checked':''}}>
									@else
										   <input class="form-check-input" type="checkbox" id="ViewMenu" name="ViewMenu" value="View Menu" >
									@endif
								 
								  <label class="form-check-label" for="gridCheck">View Menu</label>
								</div>
							</div>
							<div class="form-group col-md-2">
							   <div class="form-check">
							   @if(isset($DefaultPermission))
								  <input class="form-check-input" type="checkbox" id="ViewDetails" name="ViewDetails" value="View Details" {{($DefaultPermission['view-'.$MenuKeyword.'-details']==1)?'checked':''}}>
									@else
										   <input class="form-check-input" type="checkbox" id="ViewDetails" name="ViewDetails" value="View Details" >
									@endif
								  
								  <label class="form-check-label" for="gridCheck">View Details</label>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="inputEmail4">Optional Permission(Add additional permission with comma(,))</label>
							  <input type="text" class="form-control" name="OptionalPermission" id="OptionalPermission" placeholder="Optional Permission" value="{{isset($OptionalPermission)?$OptionalPermission:''}}">
							  <div class="invalid-data invalid-OptionalPermission"></div>
						</div>
						<div class="row">
							@if(isset($Permission->status))
							<div class="form-group col-md-3">
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" id="Status" name="Status" value="1" {{$Permission->status==1?'checked':''}}>
								  <label class="form-check-label" for="gridCheck">status</label>
								</div>
							
							</div>
							@else
								<div class="form-group col-md-3">
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" id="Status" name="Status" value="1" >
								  <label class="form-check-label" for="gridCheck">status</label>
								</div>
							
							</div>
							@endif
						</div>
						<input type="hidden" id="hid_id" name="hid_id" value="{{isset($Permission->id)?$Permission->id:''}}" >
                      <button type="submit" onclick="return validateData();" class="btn btn-primary">Submit</button>
					  <a href="{{url('/permission')}}" class="btn btn-secondary">Back</a>
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
@section('script')
<script>

function validateData(){
	var flag = false;
	$('.invalid-data').html('');
	var Menu = $('#Menu').val();
	
	if(Menu==''){
		$('.invalid-Menu').html("Menu is required.");
		$('#Menu').focus();
		flag = true;
	}
	
	if(flag)
		return false;
}
</script>
@endsection 