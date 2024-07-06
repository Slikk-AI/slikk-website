@section('title') 
{{$title}}
@endsection
@extends('layouts.main')
@section('style')

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
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">{{$title}}</h5>
                </div>
                <div class="card-body">
					@if(session()->has('UpdateProfile'))
					<div class="xp-alert">
						<div class="alert alert-success" role="alert">
						{{trans('auth.UpdateProfile')}}
						</div>								 
					</div>
					@endif
					@php
						$CompanySessionValue = Helper::getCompanySession();
					@endphp
					@php
						$LoginSessionValue = Helper::getUserData();
						if($LeadData){
							if($LoginSessionValue->role_id==1 || $LoginSessionValue->role_id==2){
								$DisableField ='';
								$Action ='submit_lead';
							}else{
								$DisableField ='disabled';
								$Action ='submit_agent_lead';
							}
						}else{
							$DisableField ='';
							$Action ='submit_lead';
						}
					@endphp
						@if (count($errors) > 0)
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
									@if($error=='The txt input field is required.')
										<li>The captcha field is required.</li>
									@else
										<li>{{ $error }}</li>
									@endif
									@endforeach
								</ul>
							</div>
						@endif
                    <form method="post" action="{{url($Action)}}" >
					@csrf
						<div class="form-row">
							<div class="form-group col-md-4">
							  <label for="ReportTitle">Report Title <span class="text-red">*</span></label>
							  <input type="text" class="form-control" name="ReportTitle" id="ReportTitle" {{$DisableField}} placeholder="Report Title" value="{{($LeadData)?$LeadData->report_title:''}}">
							  <div class="invalid-data invalid-ReportTitle"></div>
							</div>
							<div class="form-group col-md-4">
								<label for="Category">Category <span class="text-red">*</span></label>
								<select name="Category" class="form-control" id="Category" {{$DisableField}} onchange="return getSelectData(this.value, 'category', 'SubCategory', 'parent_id', 'name', 'id');">
									<option value="">Select Category</option>
									@foreach($CategoryList as $CatList)
									<option value="{{$CatList->id}}" {{(isset($LeadData->report_categoryId) && $LeadData->report_categoryId==$CatList->id)?'selected':''}}>{{$CatList->name}}</option>
									@endforeach
								</select>
								<div class="invalid-data invalid-Category"></div>
							</div>
							<div class="form-group col-md-4">
								<label for="SubCategory">Sub Category </label>
								<select name="SubCategory" class="form-control" {{$DisableField}} id="SubCategory">
									<option value="">Select Sub Category</option>
									@if(isset($SubCategoryList))
									@foreach($SubCategoryList as $SubCatList)
									<option value="{{$SubCatList->id}}" {{(isset($LeadData->report_subcategoryId) && $LeadData->report_subcategoryId==$SubCatList->id)?'selected':''}}>{{$SubCatList->name}}</option>
									@endforeach
									@endif
								</select>
								<div class="invalid-data invalid-SubCategory"></div>
							</div>
							
						</div>
						
						
						<div class="form-row">
							<div class="form-group col-md-4">
							  <label for="ClientName">Client Name <span class="text-red">*</span></label>
							  <input type="text" class="form-control" name="ClientName" {{$DisableField}} id="ClientName" placeholder="Client Name" value="{{($LeadData)?$LeadData->client_name:''}}">
							  <div class="invalid-data invalid-ClientName"></div>
							</div>
							<div class="form-group col-md-4">
							  <label for="Email">Client Email <span class="text-red">*</span></label>
							  <input type="email" class="form-control" name="Email" {{$DisableField}} id="Email" placeholder="Client Email" value="{{($LeadData)?$LeadData->client_emailId:''}}">
							  <div class="invalid-data invalid-Email"></div>
							</div>
							<div class="form-group col-md-4">
							  <label for="PhoneNumber">Client Phone Number <span class="text-red">*</span></label>
							  <input type="text" class="form-control" name="PhoneNumber" {{$DisableField}} id="PhoneNumber" placeholder="Phone Number" value="{{($LeadData)?$LeadData->client_number:''}}">
							  <div class="invalid-data invalid-PhoneNumber"></div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-4">
							  <label for="Company_name">Company </label>
							  <input type="text" class="form-control" name="Company_name" {{$DisableField}} id="Company_name" placeholder="Company" value="{{($LeadData)?$LeadData->company:''}}">
							  <div class="invalid-data invalid-Company_name"></div>
							</div>
							<div class="form-group col-md-4">
								<label for="PublishMode">Publish Mode <span class="text-red">*</span></label>
								<select name="PublishMode" class="form-control" id="PublishMode" {{$DisableField}}>
									<option value="">Select Publish Mode</option>
									<option value="1" {{(isset($LeadData->publish_type) && $LeadData->publish_type==1)?'selected':''}}>Published</option>
									<option value="0" {{(isset($LeadData->publish_type) && $LeadData->publish_type==0)?'selected':''}}>Up Comming</option>
								</select>
								<div class="invalid-data invalid-PublishMode"></div>
							</div>
							<div class="form-group col-md-4">
								<label for="LicenseType">License Type </label>
								<select name="LicenseType" class="form-control" id="LicenseType" {{$DisableField}}>
									<option value="">Select License Type</option>
									<option value="single" {{(isset($LeadData->lecence_type) && $LeadData->lecence_type=='single')?'selected':''}} >Single User Licence</option>
									<option value="multi" {{(isset($LeadData->lecence_type) && $LeadData->lecence_type=='multi')?'selected':''}}>Multi User Lecence</option>
									<option value="corporate" {{(isset($LeadData->lecence_type) && $LeadData->lecence_type=='corporate')?'selected':''}}>Corporate User Lecence</option>
								</select>
								<div class="invalid-data invalid-LicenseType"></div>
							</div>
							
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-4">
							  <label for="QueryType">Query Type <span class="text-red">*</span></label>
							  <input type="text" class="form-control" name="QueryType"  id="QueryType" {{$DisableField}} placeholder="Query Type" value="{{($LeadData)?$LeadData->query_type:''}}">
							  <div class="invalid-data invalid-QueryType"></div>
							</div>
							<div class="form-group col-md-4">
								<label for="Region">Region <span class="text-red">*</span></label>
								<select name="Region" class="form-control" id="Region" {{$DisableField}} onchange="return getSelectData(this.value, 'countries', 'Country', 'continent_code', 'country_name', 'country_code');">
									<option value="">Select Region</option>
									@foreach($RegionList as $RgList)
									<option value="{{$RgList->continent_code}}" {{(isset($LeadData->region_id) && $LeadData->region_id==$RgList->continent_code)?'selected':''}}>{{$RgList->continent_name}}</option>
									@endforeach
								</select>
								<div class="invalid-data invalid-Region"></div>
							</div>
							<div class="form-group col-md-4" >
								<label for="Country"> Country <span class="text-red">*</span></label>
								<select name="Country" class="form-control" id="Country" {{$DisableField}}>
									<option value="">Select Country</option>
									@if(isset($Countrylist))
									@foreach($Countrylist as $CountryData)
									<option value="{{$CountryData->country_code}}" {{(isset($LeadData->country_id) && $LeadData->country_id==$CountryData->country_code)?'selected':''}}>{{$CountryData->country_name}}</option>
									@endforeach
									@endif
								</select>
								<div class="invalid-data invalid-Country"></div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-4">
							  <label for="DealPrice">Deal Price($) <span class="text-red">*</span></label>
							  <input type="text" class="form-control" name="DealPrice" {{$DisableField}} id="DealPrice" placeholder="Deal Price($)" value="{{($LeadData)?$LeadData->report_price:''}}">
							  <div class="invalid-data invalid-DealPrice"></div>
							</div>
							<div class="form-group col-md-4" >
								<label for="AssignTo">Assign To <span class="text-red">*</span></label>
								<select name="AssignTo" class="form-control" id="AssignTo" {{$DisableField}} onchange="return getLeadCountByAgent();">
									<option value="">Select Assign To</option>
									<option value="1" {{(isset($LeadData->assign_to) && $LeadData->assign_to==1)?'selected':''}}>Admin</option>
									@if(isset($Assignlist))	
									@foreach($Assignlist as $AssignData)
									<option value="{{$AssignData->id}}" {{(isset($LeadData->assign_to) && $LeadData->assign_to==$AssignData->id)?'selected':''}}>{{$AssignData->user_name}}</option>
									@endforeach
									@endif
								</select>
								<div class="invalid-data invalid-AssignTo"></div>
								<input type="hidden" name="LeadCountByAgent" id="LeadCountByAgent" value="{{($LeadData)?$LeadCount:0}}">
							</div>
							<div class="form-group col-md-4">
								<label for="LeadStatus">Lead Status <span class="text-red">*</span></label>
								<select name="LeadStatus" class="form-control" id="LeadStatus" >
									<option value="">Select Lead Status</option>
									@foreach($LeadStatusList as $LeadStatus)
									<option value="{{$LeadStatus->id}}" {{(isset($LeadData->lead_status) && $LeadData->lead_status==$LeadStatus->id)?'selected':''}}>{{$LeadStatus->name}}</option>
									@endforeach
								</select>
								<div class="invalid-data invalid-LeadStatus"></div>
								
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="DealStage">Deal Stage <span class="text-red">*</span></label>
								<select name="DealStage" class="form-control" id="DealStage" >
									<option value="">Select Deal Stage</option>
									@foreach($DealStageList as $DealStage)
									<option value="{{$DealStage->id}}" {{(isset($LeadData->deal_stage) && $LeadData->deal_stage==$DealStage->id)?'selected':''}}>{{$DealStage->name}}</option>
									@endforeach
								</select>
								<div class="invalid-data invalid-DealStage"></div>
							</div>
							<div class="form-group col-md-4">
							  <label for="JobTitle">Job Title </label>
							  <input type="text" class="form-control" name="JobTitle" {{$DisableField}} id="JobTitle" placeholder="Job Title" value="{{($LeadData)?$LeadData->job_title:''}}">
							  <div class="invalid-data invalid-JobTitle"></div>
							</div>
							<div class="form-group col-md-4">
								<label for="Company">Assign Company <span class="text-red">*</span></label>
								<select name="CompanyId" class="form-control" id="CompanyId" disabled>
									<option value="">Select Company</option>
									@foreach($CompanyList as $CmList)
									<option value="{{$CmList->id}}" {{ $CmList->id == $CompanySessionValue ? 'selected' : ''}}>{{$CmList->company_name}}</option>
									@endforeach
								</select>
								<input type="hidden" id="Company" name="Company" value="{{$CompanySessionValue}}">
								<div class="invalid-data invalid-Company"></div>
							</div>
							
						</div>
						<div class="form-row">
						<div class="form-group col-md-4" >
								<label for="ClientMessage">Client Message </label>
								<textarea class="form-control" rows="4" name="ClientMessage" {{$DisableField}} id="ClientMessage" placeholder="Client Message" >{{($LeadData)?$LeadData->client_message:''}}</textarea>
								<div class="invalid-data invalid-ClientMessage"></div>
							</div>
						</div>
					  <input type="hidden" id="hid_id" name="hid_id" value="{{($LeadData)?$LeadData->id:''}}">
					  @if(Helper::allow_permission('create-lead-management')==1)
                      <button type="submit" onclick="return validateData();" class="btn btn-primary">Submit</button>
						@endif
					  <a href="{{url('/leads')}}" class="btn btn-secondary">Back</a>
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
function getLeadCountByAgent(){
	var AssignTo = $('#AssignTo').val();
	$.ajax({
	type:"GET",
	url:"{{url('getLeadCountByAssignId')}}",
	data:{
		AssignTo:AssignTo,
		},
		success:function(response){
			$('#LeadCountByAgent').val(response);
		},
	});
}
UserList = 0;
function getSelectData(SelectionValue, TableName, AppendToId, DBColumnId, ShowDBColumnName, ShowDBColumnId){
	$('#'+AppendToId).html('');
	$.ajax({
	type:"GET",
	url:"{{url('getSelectionData')}}",
	data:{
		TableName:TableName,
		SelectionValue:SelectionValue,
		DBColumnId:DBColumnId,
		ShowDBColumnName:ShowDBColumnName,
		ShowDBColumnId:ShowDBColumnId,
		AppendToId:AppendToId
		},
		success:function(response){
			$('#'+AppendToId).html(response);
			if(TableName=='countries'){
				getAssignToData(SelectionValue, 'users', 'AssignTo', 'region_code', 'user_name', 'id');
			}
			
			//console.log(response);
		},
	});
}
function getAssignToData(SelectionValue, TableName, AppendToId, DBColumnId, ShowDBColumnName, ShowDBColumnId){
	$('#'+AppendToId).html('');
	$.ajax({
	type:"GET",
	url:"{{url('getSelectionUserByRegion')}}",
	data:{
		TableName:TableName,
		SelectionValue:SelectionValue,
		DBColumnId:DBColumnId,
		ShowDBColumnName:ShowDBColumnName,
		ShowDBColumnId:ShowDBColumnId,
		AppendToId:AppendToId
		},
		success:function(response){
			$('#'+AppendToId).html(response);
			//console.log(response);
		},
	});
}
function validateData(){
	var flag = false;
	$('.invalid-data').html('');
	var ReportTitle = $('#ReportTitle').val();
	var Category = $('#Category').val();
	var LicenseType = $('#LicenseType').val();
	var ClientName = $('#ClientName').val();
	var Company_name = $('#Company_name').val();
	var Email = $('#Email').val();
	var PhoneNumber = $('#PhoneNumber').val();
	var Company = $('#Company').val();
	var PublishMode = $('#PublishMode').val();
	var QueryType = $('#QueryType').val();
	var DealPrice = $('#DealPrice').val();
	var Region = $('#Region').val();
	var Country = $('#Country').val();
	var JobTitle = $('#JobTitle').val();
	
	var AssignTo = $('#AssignTo').val();
	var LeadStatus = $('#LeadStatus').val();
	var DealStage = $('#DealStage').val();
	var ClientMessage = $('#ClientMessage').val();
	var LeadCountByAgent = $('#LeadCountByAgent').val();
	var AssignName = $("#AssignTo option:selected").text();
	if(parseInt(LeadCountByAgent)>parseInt(10)){
		alert(LeadCountByAgent+' lead is assigned to '+AssignName);
	}
	/*if(ClientMessage==''){
		$('.invalid-ClientMessage').html("{{ trans('auth.FieldRequired') }}");
		$('#ClientMessage').focus();
		flag = true;
	}
	if(JobTitle.length==''){
		$('.invalid-JobTitle').html("{{ trans('auth.FieldRequired') }}");
		$('#JobTitle').focus();
		flag = true;
	}*/
	if(DealStage==''){
		$('.invalid-DealStage').html("{{ trans('auth.FieldRequired') }}");
		$('#DealStage').focus();
		flag = true;
	}
	if(LeadStatus==''){
		$('.invalid-LeadStatus').html("{{ trans('auth.FieldRequired') }}");
		$('#LeadStatus').focus();
		flag = true;
	}
	if(AssignTo==''){
		$('.invalid-AssignTo').html("{{ trans('auth.FieldRequired') }}");
		$('#AssignTo').focus();
		flag = true;
	}
	if(Country==''){
		$('.invalid-Country').html("{{ trans('auth.FieldRequired') }}");
		$('#Country').focus();
		flag = true;
	}
	if(Region==''){
		$('.invalid-Region').html("{{ trans('auth.FieldRequired') }}");
		$('#Region').focus();
		flag = true;
	}
	
	if(DealPrice.length==''){
		$('.invalid-DealPrice').html("{{ trans('auth.FieldRequired') }}");
		$('#DealPrice').focus();
		flag = true;
	}
	if(QueryType.length==''){
		$('.invalid-QueryType').html("{{ trans('auth.FieldRequired') }}");
		$('#QueryType').focus();
		flag = true;
	}
	if(PublishMode==''){
		$('.invalid-PublishMode').html("{{ trans('auth.FieldRequired') }}");
		$('#PublishMode').focus();
		flag = true;
	}
	if(Company==''){
		$('.invalid-Company').html("{{ trans('auth.FieldRequired') }}");
		$('#Company').focus();
		flag = true;
	}
	/*if(Company_name.length==''){
		$('.invalid-Company_name').html("{{ trans('auth.FieldRequired') }}");
		$('#Company_name').focus();
		flag = true;
	}*/
	if(PhoneNumber.length==''){
		$('.invalid-PhoneNumber').html("{{ trans('auth.FieldRequired') }}");
		$('#PhoneNumber').focus();
		flag = true;
	}
	if(Email.length!=''){
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		if (reg.test(Email) == false) 
		{
		   $('.invalid-Email').html("{{ trans('auth.EmailError') }}");
			$('#Email').focus();
			flag = true;
		}
	}
	if(Email.length==''){
		$('.invalid-Email').html("{{ trans('auth.FieldRequired') }}");
		$('#Email').focus();
		flag = true;
	}
	if(ClientName.length==''){
		$('.invalid-ClientName').html("{{ trans('auth.FieldRequired') }}");
		$('#ClientName').focus();
		flag = true;
	}
	/*if(LicenseType==''){
		$('.invalid-LicenseType').html("{{ trans('auth.FieldRequired') }}");
		$('#LicenseType').focus();
		flag = true;
	}*/
	if(Category==''){
		$('.invalid-Category').html("{{ trans('auth.FieldRequired') }}");
		$('#Category').focus();
		flag = true;
	}
	if(ReportTitle.length==''){
		$('.invalid-ReportTitle').html("{{ trans('auth.FieldRequired') }}");
		$('#ReportTitle').focus();
		flag = true;
	}
	
	if(flag)
		return false;
}
</script>
@endsection 