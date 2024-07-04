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
					<div class="row">
						<div class="col-lg-10">
							<div class=" row col-lg-12">
								<div class="flash-message">
									@foreach (['danger', 'warning', 'success', 'info'] as $msg)
									  @if(Session::has('alert-' . $msg))

									  <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
									  @endif
									@endforeach
								</div> <!-- end .flash-message -->
							</div>
							<div class=" row col-lg-12">
								<h4 class="box-title">{{ $leadDetails->report_title}}</h4>
							</div>
							<div class=" row col-lg-12">
								<span><strong>Report Code :</strong></span><span style="color:blue">
								@if($leadDetails->company_id==1)
								{{ 'RND_'.$leadDetails->report_id}}
								@elseif($leadDetails->company_id==3)
								{{ 'ER_'.$leadDetails->report_id}}
								@else
									{{ $leadDetails->report_id}}
								@endif
							</span> |
								<span><strong> Report Category :</strong></span><span style="color:blue">{{ $leadDetails->report_categoryName}} </span> |
								<span><strong> Report Status :</strong></span><span style="color:blue">
								@if ($leadDetails->publish_type == 1)
									Publish
								@else
									UpComming
								@endif
								</span>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="row">
								<label><b>Query Status:</b></label></br>
								<label class="{{$leadDetails->lead_status_name}}">{{ $leadDetails->lead_status_name}}</label>
							</div>
							<div class="row">
								<label><b>Amount: </b></label></br>
								<label class="">$ {{ $leadDetails->report_price}}</label>
								@if(Helper::allow_permission('create-lead-payment')==1)
									@if($leadDetails->deal_stage=='7' && $leadDetails->payment_flag=='0')
										<a href="javascript:void(0);" data-toggle="modal" data-target="#myModalPayment" >Create Payment</a>
									@endif
								@endif
								@if($leadDetails->payment_flag=='1')
									<span class="badge badge-success">Payment Link created</span>
								@endif
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-lg-8">
						<div class="row">
						<div class="col-lg-7">
						<span><strong>Client Name : </strong></span>
							<span onclick="copy(this)" style="color:blue; cursor: pointer;">{{ $leadDetails->client_name}}</span>  
						</div>
						<div class="col-lg-5">
						<span><strong>Company : </strong></span>
							<span onclick="copy(this)" style="color:blue; cursor: pointer;">{{ $leadDetails->company}}</span> 
						</div>
						<div class="col-lg-7">
						<span><strong>Email Id : </strong></span><span onclick="copy(this)" style="color:blue; cursor: pointer;">{{ $leadDetails->client_emailId}}</span> | {{ $leadDetails->lead_email_type_name}}
						</div>
						<div class="col-lg-5">
							<span><strong>Contact Number : </strong></span><span onclick="copy(this)" style="color:blue; cursor: pointer;">{{ $leadDetails->client_number}}</span>
						</div>
							
						</div>
						</div>
						<div class="col-lg-4 text-right">
							@if(Helper::allow_permission('update-lead-stages')==1)
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="display:none;">
							  Update Stage
							</button>
							@endif
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalLeadStatus" >
							  Update Status
							</button>
							<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalLeadType" >
							  Type of Email Leads
							</button>
						</div>
					</div>
					<hr>
                    <div class="row">
						<div class="col-md-12">
							<h4>Deal Stages</h4>
						</div>
						<div class='col-md-12'>
						@php
						$ArrLabel = array(0=>'info', 1=>'warning', 2=>'secondary', 3=>'primary', 4=>'mustard', 5=>'info', 6=>'success', 7=>'danger', 8=>'pink');
						@endphp
						@if($CompleteDealStages->count()>0)
							<span class="badge badge-info">Introduction</span>
							@foreach($CompleteDealStages as $CompleteDealStageData)
								@if($CompleteDealStageData->deal_stage!='Introduction')
								<span class="badge badge-{{$ArrLabel[$CompleteDealStageData->id]}}">{{$CompleteDealStageData->deal_stage}}</span>
								@endif
							@endforeach
						@else
								<span class="badge badge-info">Introduction</span>
						@endif
							<!--<img width="100%" src="{{asset('assets/images/deal_stage/'.$leadDetails->deal_stage.'.png')}}">-->
						</div>
					</div>
					<hr>
					<div class="row samir-custom">
						<div class="col-md-6 col-lg-6 col-xl-4">
							<!-- Dark Border Card -->
							<div class="card border-dark m-b-30">
								<div class="card-header badge badge-info"><h5 >About Leads</h5></div>
								<div class="card-body text-dark">
									<label>Agent Name: <b>{{ $leadDetails->user_name}}</b></label><br>
									<label>License Type: <b>@if($leadDetails->lecence_type=='single')
							Single User Licence
							@elseif($leadDetails->lecence_type=='multi')
							Multi User Lecence
							@else
								Corporate User Lecence
							@endif</b></label>
							<label>Query Type : <b>{{ $leadDetails->query_type}}</b></label><br>
							<label>Region : <b>{{ $leadDetails->region_id}}</b></label><br>
							<label>Client Country : <b>{{ $leadDetails->country_name}}</b></label><br>
							<label>Client Message :</label><br> <p>{{ $leadDetails->client_message}}</p>
							
							
								</div>
							</div>
							<!-- Dark Border Card -->  
						</div>
						<div class="col-md-6 col-lg-6 col-xl-4">
							<!-- Dark Border Card -->
							<div class="card border-dark m-b-30">
								<div class="card-header badge badge-warning"><h5>Follow up Note</h5></div>
								<div class="card-body text-dark">
									<form method="post" action="{{url('submit_followup')}}">
										<div class="form-group">
											<select name="FollowDealStageId" class="form-control" id="FollowDealStageId">
												@if(isset($DealStages))
												@foreach($DealStages as $DealStageData)
												<option value="{{$DealStageData->id}}" {{($leadDetails->deal_stage==$DealStageData->id)?'selected':''}}>{{$DealStageData->name}}</option>
												@endforeach
												@endif
											</select>
										</div>
										<div class="form-group " style="display:none;">
											<label>Follow Up Date: <span class="text-red">*</span></label>
											<input type="text" class="form-control" name="FollowUpDate" required id="FollowUpDate" value="<?php echo date('d-m-Y'); ?>">
											<div class="invalid-data invalid-FollowUpDate"></div>
										</div>
										<div class="form-group " >
											<label>Call: <span class="text-red">*</span></label>
											<select name="FollowupCall" class="form-control" id="FollowupCall">
												<option value="No">No</option>
												<option value="Yes">Yes</option>
											</select>
											<div class="invalid-data invalid-FollowupCall"></div>
										</div>
										<div class="form-group ">
											<label>Write Note: <span class="text-red">*</span></label>
											<textarea class="form-control" name="followMsg" required id="followMsg"></textarea>
											<div class="invalid-data invalid-followMsg"></div>
										</div>
										
										<input type="hidden" id="lead_id" name="lead_id" value="{{ $leadDetails->id}}">
										<input type="hidden" id="deal_stage" name="deal_stage" value="{{ $leadDetails->deal_stage}}">
										
										@if(Helper::allow_permission('create-lead-follow-up')==1)
										<input type="button" class="btn btn-primary" value="Submit" onclick="return validateData();">
										@endif
									</form>
								</div>
							</div>
							<!-- Dark Border Card -->  
						</div>
						<div class="col-md-6 col-lg-6 col-xl-4">
							<!-- Dark Border Card -->
							<div class="card border-dark m-b-30">
								<div class="card-header badge badge-success"><h5>Follow up Details</h5></div>
								<div class="card-body text-dark">
									<div class="direct-chat-messages" style="height:250px; overflow: scroll;">
										<div class="row">
										@php 
										$NUM = 0;
										@endphp
										@foreach($FollowUp as $FollowUpDetails)
										@if($NUM%2==0)
											<div class="direct-chat-msg col-md-12">
												<div class="direct-chat-info clearfix" style="font-size: 12px;"><span class="direct-chat-name pull-left">{{$FollowUpDetails->user_name}}</span> <span class="direct-chat-timestamp pull-right">{{$FollowUpDetails->created_at}}</span></div>
												<div class="direct-chat-text pull-right badge badge-secondary" style="font-size: 14px;">{{$FollowUpDetails->message}}!</div>
											</div>
											@else		
											<div class="direct-chat-msg right col-md-12">
												<div class="direct-chat-info clearfix" style="font-size: 12px;"><span class="direct-chat-name pull-right">{{$FollowUpDetails->user_name}}</span> <span class="direct-chat-timestamp pull-left">{{$FollowUpDetails->created_at}}</span></div>
												<div class="direct-chat-text badge badge-warning" style="font-size: 14px;">{{$FollowUpDetails->message}}!</div>
											</div>
											@endif
											@php
											$NUM++;
											@endphp
											@endforeach
							
										</div>
									</div>
									<div class="row" style="display:none;">
										<div class="col-md-7" >
											<select name="AssignTo" class="form-control" id="AssignTo">
												
												@if(isset($Assignlist))
												@foreach($Assignlist as $AssignData)
												<option value="{{$AssignData->id}}" {{($leadDetails->assign_to==$AssignData->id)?'selected':''}}>{{$AssignData->user_name}}</option>
												@endforeach
												@endif
											</select>
											<div class="invalid-data invalid-AssignTo"></div>
										</div>
										<div class="col-md-5">
										<button type="submit"  class="btn btn-primary">Assign New</button>
										</div>
									</div>
								</div>
							</div>
							<!-- Dark Border Card -->  
						</div>
						
					</div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    </div>    
    <!-- End Row -->
</div>
<!-- End XP Contentbar -->
<!-- Sages Of Dialog Box -->
		<div class="modal" id="myModalLeadStatus">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <!-- Modal Header -->
			  <div class="modal-header" >
				<h4 class="modal-title" style="float:left">Update Lead Status</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			  </div>
			  <!-- Modal body -->
			  <div class="modal-body">
				<div class="form-group">
					<select name="lead_state" class="form-control" id="lead_state">
						@if(isset($LeadStatusList))
						@foreach($LeadStatusList as $LeadStatus)
						<option value="{{$LeadStatus->id}}" {{($leadDetails->lead_status==$LeadStatus->id)?'selected':''}}>{{$LeadStatus->name}}</option>
						@endforeach
						@endif
					</select>
				</div>
				
			  </div>
			  <!-- Modal footer -->
			  <div class="modal-footer">
				<button type="button" id="UpdateDealStage" onclick="return validateStatus();" class="btn btn-warning btn-flat">Update</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			  </div>

			</div>
		  </div>
		</div>
		<div class="modal" id="myModal">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <!-- Modal Header -->
			  <div class="modal-header" >
				<h4 class="modal-title" style="float:left">Update Stage</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			  </div>
			  <!-- Modal body -->
			  <div class="modal-body">
				<div class="form-group">
					<select name="DealStageId" class="form-control" id="DealStageId">
						@if(isset($DealStages))
						@foreach($DealStages as $DealStageData)
						<option value="{{$DealStageData->id}}" {{($leadDetails->deal_stage==$DealStageData->id)?'selected':''}}>{{$DealStageData->name}}</option>
						@endforeach
						@endif
					</select>
				</div>
				<div class="form-group ">
					<label>Write Note: <span class="text-red">*</span></label>
					<textarea class="form-control" name="DealMsg" required id="DealMsg"></textarea>
					<div class="invalid-data invalid-DealMsg"></div>
				</div>
				
			  </div>
			  <!-- Modal footer -->
			  <div class="modal-footer">
				<button type="button" id="UpdateDealStage" onclick="return validateStage();" class="btn btn-warning btn-flat">Update</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			  </div>

			</div>
		  </div>
		</div>
		<div class="modal" id="myModalLeadType">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <!-- Modal Header -->
			  <div class="modal-header" >
				<h4 class="modal-title" style="float:left">Update Lead Email Type</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			  </div>
			  <!-- Modal body -->
			  <div class="modal-body">
				<div class="form-group">
					<select name="EmailTypeLead" class="form-control" id="EmailTypeLead">
						<option value="">Select</option>
						@if(isset($EmailTypeLead))
						@foreach($EmailTypeLead as $EmailTypeLeadData)
						<option value="{{$EmailTypeLeadData->id}}" {{($LeadData->email_lead_type==$EmailTypeLeadData->id)?'selected':''}}>{{$EmailTypeLeadData->name}}</option>
						@endforeach
						@endif
					</select>
					<div class="invalid-data invalid-EmailTypeLead"></div>
				</div>
				
			  </div>
			  <!-- Modal footer -->
			  <div class="modal-footer">
				<button type="button" id="UpdateDealStage" onclick="return validateLeadTypeEmail();" class="btn btn-warning btn-flat">Update</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			  </div>

			</div>
		  </div>
		</div>
		<div class="modal" id="myModalPayment">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <!-- Modal Header -->
			  <div class="modal-header" >
				<h4 class="modal-title" style="float:left">Update Payment Details</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			  </div>
			  <!-- Modal body -->
			  <div class="modal-body">
				<form method="post" action="{{url('submit_payment_lead')}}" >
					@csrf
						<div class="form-row">
							<div class="form-group col-md-4">
							  <label for="ReportTitle">Report Title <span class="text-red">*</span></label>
							  <input type="text" class="form-control" name="ReportTitle" id="ReportTitle" placeholder="Report Title" value="{{($LeadData)?$LeadData->report_title:''}}">
							  <div class="invalid-data invalid-ReportTitle"></div>
							</div>
							<div class="form-group col-md-4">
								<label for="Category">Category <span class="text-red">*</span></label>
								<select name="Category" class="form-control" id="Category" onchange="return getSelectData(this.value, 'category', 'SubCategory', 'parent_id', 'name', 'id');">
									<option value="">Select Category</option>
									@foreach($CategoryList as $CatList)
									<option value="{{$CatList->id}}" {{(isset($LeadData->report_categoryId) && $LeadData->report_categoryId==$CatList->id)?'selected':''}}>{{$CatList->name}}</option>
									@endforeach
								</select>
								<div class="invalid-data invalid-Category"></div>
							</div>
							<div class="form-group col-md-4">
								<label for="SubCategory">Sub Category </label>
								<select name="SubCategory" class="form-control" id="SubCategory">
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
							  <input type="text" class="form-control" name="ClientName"  id="ClientName" placeholder="Client Name" value="{{($LeadData)?$LeadData->client_name:''}}">
							  <div class="invalid-data invalid-ClientName"></div>
							</div>
							<div class="form-group col-md-4">
							  <label for="Email">Client Email <span class="text-red">*</span></label>
							  <input type="email" class="form-control" name="Email"  id="Email" placeholder="Client Email" value="{{($LeadData)?$LeadData->client_emailId:''}}">
							  <div class="invalid-data invalid-Email"></div>
							</div>
							<div class="form-group col-md-4">
							  <label for="PhoneNumber">Client Phone Number <span class="text-red">*</span></label>
							  <input type="text" class="form-control" name="PhoneNumber"  id="PhoneNumber" placeholder="Phone Number" value="{{($LeadData)?$LeadData->client_number:''}}">
							  <div class="invalid-data invalid-PhoneNumber"></div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-4">
							  <label for="Company_name">Company </label>
							  <input type="text" class="form-control" name="Company_name"  id="Company_name" placeholder="Company" value="{{($LeadData)?$LeadData->company:''}}">
							  <div class="invalid-data invalid-Company_name"></div>
							</div>
							<div class="form-group col-md-4">
								<label for="PublishMode">Publish Mode <span class="text-red">*</span></label>
								<select name="PublishMode" class="form-control" id="PublishMode">
									<option value="">Select Publish Mode</option>
									<option value="1" {{(isset($LeadData->publish_type) && $LeadData->publish_type==1)?'selected':''}}>Published</option>
									<option value="0" {{(isset($LeadData->publish_type) && $LeadData->publish_type==0)?'selected':''}}>Up Comming</option>
								</select>
								<div class="invalid-data invalid-PublishMode"></div>
							</div>
							<div class="form-group col-md-4">
								<label for="LicenseType">License Type</label>
								<select name="LicenseType" class="form-control" id="LicenseType">
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
							  <input type="text" class="form-control" name="QueryType"  id="QueryType" placeholder="Query Type" value="{{($LeadData)?$LeadData->query_type:''}}">
							  <div class="invalid-data invalid-QueryType"></div>
							</div>
							<div class="form-group col-md-4">
								<label for="Region">Region <span class="text-red">*</span></label>
								<select name="Region" class="form-control" id="Region" onchange="return getSelectData(this.value, 'countries', 'Country', 'continent_code', 'country_name', 'country_code');">
									<option value="">Select Region</option>
									@foreach($RegionList as $RgList)
									<option value="{{$RgList->continent_code}}" {{(isset($LeadData->region_id) && $LeadData->region_id==$RgList->continent_code)?'selected':''}}>{{$RgList->continent_name}}</option>
									@endforeach
								</select>
								<div class="invalid-data invalid-Region"></div>
							</div>
							<div class="form-group col-md-4" >
								<label for="Country"> Country <span class="text-red">*</span></label>
								<select name="Country" class="form-control" id="Country">
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
							  <input type="text" class="form-control" name="DealPrice"  id="DealPrice" placeholder="Deal Price($)" value="{{($LeadData)?$LeadData->report_price:''}}">
							  <div class="invalid-data invalid-DealPrice"></div>
							</div>
							<div class="form-group col-md-4" >
								<label for="AssignToLead">Assign To <span class="text-red">*</span></label>
								<select name="AssignToLead" class="form-control" id="AssignToLead">
									<option value="">Select Assign To</option>
									@if(isset($Assignlist))
									@foreach($Assignlist as $AssignData)
									<option value="{{$AssignData->id}}" {{(isset($LeadData->assign_to) && $LeadData->assign_to==$AssignData->id)?'selected':''}}>{{$AssignData->user_name}}</option>
									@endforeach
									@endif
								</select>
								<div class="invalid-data invalid-AssignToLead"></div>
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
						@php
						
						$CompanySessionValue = Helper::getCompanySession();
						@endphp
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
							<div class="form-group col-md-4">
							  <label for="JobTitle">Job Title </label>
							  <input type="text" class="form-control" name="JobTitle"  id="JobTitle" placeholder="Job Title" value="{{($LeadData)?$LeadData->job_title:''}}">
							  <div class="invalid-data invalid-JobTitle"></div>
							</div>
							<div class="form-group col-md-4" >
								<label for="ClientMessage">Client Message </label>
								<textarea class="form-control" rows="4" name="ClientMessage"  id="ClientMessage" placeholder="Client Message" >{{($LeadData)?$LeadData->client_message:''}}</textarea>
								<div class="invalid-data invalid-ClientMessage"></div>
							</div>
						</div>
					  <input type="hidden" id="hid_id" name="hid_id" value="{{($LeadData)?$LeadData->id:''}}">
                      <button type="submit" onclick="return validateLeadData();" class="btn btn-primary">Submit</button>
					  <a href="{{url('/lead_details/'.$LeadData->id)}}" class="btn btn-secondary">Back</a>
                    </form>
			  </div>
			  <!-- Modal footer -->
			  <div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			  </div>

			</div>
		  </div>
		</div>
	<!-- Sages Of Dialog Box -->
@endsection
@section('script')
<style>
</style>
<script>

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
				if(UserList==0)
					getAssignToData(SelectionValue, 'users', 'AssignTo', 'region_code', 'user_name', 'id');
				UserList = 1;
			}
			
			console.log(response);
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
function validateLeadTypeEmail(){
	var flag = false;
	var lead_id = $('#lead_id').val();
	var EmailTypeLead = $('#EmailTypeLead').val();
	$('.invalid-EmailTypeLead').html("");
	if(EmailTypeLead==''){
		$('.invalid-EmailTypeLead').html("{{ trans('auth.FieldRequired') }}");
		$('#EmailTypeLead').focus();
		flag = true;
	}
	if(flag)
		return false;
	$.ajax({
	type:"POST",
	url:"{{url('submit_email_type')}}",
	data:{
		"_token": "{{ csrf_token() }}",
		lead_id:lead_id,
		EmailTypeLead:EmailTypeLead,
		},
		success:function(response){
			alert('Email Type saved successfully');
			location.reload();
		},
	});
}
function validateStatus(){
	var flag = false;
	var AssignTo = $('#AssignTo').val();
	var DealMsg = $('#DealMsg').val();
	var lead_id = $('#lead_id').val();
	var deal_stage = $('#DealStageId').val();
	var lead_state = $('#lead_state').val();
	
	
	if(AssignTo==''){
		$('.invalid-AssignTo').html("{{ trans('auth.FieldRequired') }}");
		$('#AssignTo').focus();
		flag = true;
	}
	if(flag)
		return false;
	$.ajax({
	type:"POST",
	url:"{{url('update_lead_status')}}",
	data:{
		"_token": "{{ csrf_token() }}",
		AssignTo:AssignTo,
		followMsg:DealMsg,
		FollowUpDate:'',
		lead_id:lead_id,
		deal_stage:deal_stage,
		lead_state:lead_state
		},
		success:function(response){
			console.log(response);
			alert('Status saved successfully');
			location.reload();
		},
	});
}
function validateStage(){
	var flag = false;
	var AssignTo = $('#AssignTo').val();
	var DealMsg = $('#DealMsg').val();
	var lead_id = $('#lead_id').val();
	var deal_stage = $('#DealStageId').val();
	var lead_state = $('#lead_state').val();
	
	if(DealMsg.length==''){
		$('.invalid-DealMsg').html("{{ trans('auth.FieldRequired') }}");
		$('#DealMsg').focus();
		flag = true;
	}
	if(AssignTo==''){
		$('.invalid-AssignTo').html("{{ trans('auth.FieldRequired') }}");
		$('#AssignTo').focus();
		flag = true;
	}
	if(flag)
		return false;
	$.ajax({
	type:"POST",
	url:"{{url('submit_followup')}}",
	data:{
		"_token": "{{ csrf_token() }}",
		AssignTo:AssignTo,
		followMsg:DealMsg,
		FollowUpDate:'',
		lead_id:lead_id,
		deal_stage:deal_stage,
		lead_state:lead_state
		},
		success:function(response){
			alert('Stage saved successfully');
			location.reload();
		},
	});
}
function validateStage(){
	var flag = false;
	var AssignTo = $('#AssignTo').val();
	var DealMsg = $('#DealMsg').val();
	var lead_id = $('#lead_id').val();
	var deal_stage = $('#DealStageId').val();
	var lead_state = $('#lead_state').val();
	
	if(DealMsg.length==''){
		$('.invalid-DealMsg').html("{{ trans('auth.FieldRequired') }}");
		$('#DealMsg').focus();
		flag = true;
	}
	if(AssignTo==''){
		$('.invalid-AssignTo').html("{{ trans('auth.FieldRequired') }}");
		$('#AssignTo').focus();
		flag = true;
	}
	if(flag)
		return false;
	$.ajax({
	type:"POST",
	url:"{{url('submit_followup')}}",
	data:{
		"_token": "{{ csrf_token() }}",
		AssignTo:AssignTo,
		followMsg:DealMsg,
		FollowUpDate:'',
		lead_id:lead_id,
		deal_stage:deal_stage,
		lead_state:lead_state
		},
		success:function(response){
			alert('Stage saved successfully');
			location.reload();
		},
	});
}
function validateData(){
	var flag = false;
	var FollowupCall = $('#FollowupCall').val();
	var AssignTo = $('#AssignTo').val();
	var followMsg = $('#followMsg').val();
	var FollowUpDate = $('#FollowUpDate').val();
	var lead_id = $('#lead_id').val();
	var deal_stage = $('#deal_stage').val();
	var FollowDealStageId = $('#FollowDealStageId').val();
	var lead_state = $('#lead_state').val();
	if(FollowUpDate.length==''){
		$('.invalid-FollowUpDate').html("{{ trans('auth.FieldRequired') }}");
		$('#FollowUpDate').focus();
		flag = true;
	}
	if(followMsg.length==''){
		$('.invalid-followMsg').html("{{ trans('auth.FieldRequired') }}");
		$('#followMsg').focus();
		flag = true;
	}
	if(AssignTo==''){
		$('.invalid-AssignTo').html("{{ trans('auth.FieldRequired') }}");
		$('#AssignTo').focus();
		flag = true;
	}
	if(flag)
		return false;
	$.ajax({
	type:"POST",
	url:"{{url('submit_followup')}}",
	data:{
		"_token": "{{ csrf_token() }}",
		AssignTo:AssignTo,
		followMsg:followMsg,
		FollowUpDate:FollowUpDate,
		lead_id:lead_id,
		deal_stage:FollowDealStageId,
		FollowupCall:FollowupCall,
		lead_state:lead_state
		},
		success:function(response){
			alert('Note saved successfully');
			location.reload();
		},
	});
}
function validateLeadData(){
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
	
	var AssignToLead = $('#AssignToLead').val();
	var LeadStatus = $('#LeadStatus').val();
	var ClientMessage = $('#ClientMessage').val();
	if(ClientMessage==''){
		$('.invalid-ClientMessage').html("{{ trans('auth.FieldRequired') }}");
		$('#ClientMessage').focus();
		flag = true;
	}
	if(LeadStatus==''){
		$('.invalid-LeadStatus').html("{{ trans('auth.FieldRequired') }}");
		$('#LeadStatus').focus();
		flag = true;
	}
	if(AssignToLead==''){
		$('.invalid-AssignToLead').html("{{ trans('auth.FieldRequired') }}");
		$('#AssignToLead').focus();
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
	if(Company_name.length==''){
		$('.invalid-Company_name').html("{{ trans('auth.FieldRequired') }}");
		$('#Company_name').focus();
		flag = true;
	}
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
	if(LicenseType==''){
		$('.invalid-LicenseType').html("{{ trans('auth.FieldRequired') }}");
		$('#LicenseType').focus();
		flag = true;
	}
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