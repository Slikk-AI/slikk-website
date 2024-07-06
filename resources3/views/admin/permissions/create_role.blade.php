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
                    <form method="post" action="{{url('submit_role')}}" >
					@csrf
						<div class="form-row">
						
						<div class="form-group col-md-8">
						  <label for="inputEmail4">Name</label>
						  <input type="text" class="form-control" name="Role" id="Role" placeholder="Role Name" value="{{isset($Role->name)?$Role->name:''}}" {{isset($Role->name)?'readonly':''}}>
						  <div class="invalid-data invalid-Role"></div>
						</div>
						<div class="form-group col-md-2">
							<label for="inputEmail4">Sort Order</label>
							  <input type="text" class="form-control" name="SortOrder" id="SortOrder" placeholder="Sort Order" value="{{isset($Role->sort)?$Role->sort:''}}">
							  <div class="invalid-data invalid-SortOrder"></div>
						</div>
						@if(isset($Role->status))
							<div class="form-group col-md-2">
						<label class="form-check-label" for="gridCheck">status</label>
								<div class="form-check">
								
								  <input class="form-check-input" type="checkbox" id="Status" name="Status" value="1" {{$Role->status==1?'checked':''}} style="margin-top: 18px; margin-left: 1px;">
								  
								</div>
							
							</div>
							@else
								<div class="form-group col-md-2">
							<label class="form-check-label" for="gridCheck">status</label>
								<div class="form-check">
								 
								  <input class="form-check-input" type="checkbox" id="Status" name="Status" value="1" style="margin-top: 18px; margin-left: 1px;">
								 
								</div>
							
							</div>
							@endif	
						
							<div class="form-group col-md-8">
								  <label for="inputEmail4">Associated Permission</label>
								  <select class="form-control" name="AssociatedPermission" id="AssociatedPermission" onchange="return associatedPermission(this.value);">
									<option value="1" {{(isset($Role->all) && $Role->all==1)?'selected':''}} >All</option>
									<option value="0" {{(isset($Role->all) && $Role->all==0)?'selected':''}}>Custom</option>
								  </select>
								  <div class="invalid-data invalid-AssociatedPermission"></div>
							</div>
							@php
							$StylePermissionBox='display:none;';
							if(isset($Role->all)){
								if($Role->all==0){
									$StylePermissionBox='';
								}else{
									$StylePermissionBox='display:none;';
								}
							}
							@endphp
							<div class="form-group col-md-12 selectPermissionBox"  style="{{$StylePermissionBox}}">
							  <h4>Choose Permission </h4>
							</div>
							<div class="form-group col-md-12 selectPermissionBox" style="border: 1px solid #ddd; padding: 10px; box-shadow: 5px 10px 18px #888888; {{$StylePermissionBox}}">
							  @foreach($Permissions as $key => $val)
								<div class="row" style="margin-bottom:10px;">
									<div class="col-md-12">
										<h5 style="border-bottom:1px solid #ddd;">{{$val['menu_name']}}</h5>
										<div class="row">
										@foreach($val['sub_permissions'] as $keys => $vals)
											
												<div class="form-group col-md-3">
													<div class="form-check">
													  <input class="form-check-input" type="checkbox" id="SubPermission[]" onchange="return getPermissionValue();" name="SubPermission[]" value="{{$vals['id']}}" {{($vals['status']==1)?'checked':''}}>
													  <label class="form-check-label" for="gridCheck">{{$vals['display_name']}}</label>
													</div>
												
												</div>
										
										@endforeach
										</div>
									</div>
								</div>
								
							  @endforeach
							</div>
							
						</div>
						
						<input type="hidden" id="hid_id" name="hid_id" value="{{isset($Role->id)?$Role->id:''}}" >
						 <input type="hidden" id="sub_permission_change" name="sub_permission_change" value="0">
						<input type="hidden" id="previous_associated_permission" name="previous_associated_permission" value="{{isset($Role->all)?$Role->all:''}}" >
                      <button type="submit" onclick="return validateData();" class="btn btn-primary">Submit</button>
					  <a href="{{url('/roles')}}" class="btn btn-secondary">Back</a>
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
function getPermissionValue(){
	$('#sub_permission_change').val(1);
}
function associatedPermission(permission_type){
	if(permission_type==0)
		$('.selectPermissionBox').show();
	else
		$('.selectPermissionBox').hide();
}
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