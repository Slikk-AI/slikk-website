@section('title') 
Leads
@endsection
@extends('layouts.main')
@section('style')
<!-- DataTables CSS -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<style>
.nav-link {
    display: block;
    padding: .5rem 0px !important;
    font-size: 11px !important;
    font-weight: bold;
}
</style>
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Leads</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Lead Management</a></li>
        <li class="breadcrumb-item active" aria-current="page">Leads</li>
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
				<div class="row">
					<div class="col-md-6">
						<div class="card-header bg-white">
							<h5 class="card-title text-black">Lead List</h5>
						</div>
					</div>
					<div class="col-md-6" style="text-align:right;">
						<div class="card-header bg-white">
						@if(Helper::allow_permission('create-lead-management')==1)
							<a href="{{url('create_lead')}}" class="btn btn-primary">Create Lead</a>
						@endif
						</div>
						
					</div>
				</div>
              
                <div class="card-body">
					 @if(session()->has('LeadAdded'))
					<div class="xp-alert">
						<div class="alert alert-success" role="alert">
						 {{ Session::get('LeadAdded')}}
						</div>								 
					</div>
					@endif
					 @if(session()->has('LeadUpdated'))
					<div class="xp-alert">
						<div class="alert alert-success" role="alert">
						{{ Session::get('LeadUpdated')}}
						</div>								 
					</div>
					@endif
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="Category">Category</label>
							<select name="Category" class="form-control" id="Category" onchange="return getLeadsByCategory();">
								<option value="">Select Category</option>
								@foreach($CategoryList as $CatList)
								<option value="{{$CatList->id}}" {{(isset($LeadData->report_categoryId) && $LeadData->report_categoryId==$CatList->id)?'selected':''}}>{{$CatList->name}}</option>
								@endforeach
							</select>
							
							<div class="invalid-data invalid-Category"></div>
						</div>
					</div>
					@php
					$SearchValue = '';
					$AllCount=0;
					@endphp
					<ul class="nav nav-tabs nav-justified mb-3" id="defaultTabJustified" role="tablist">
						@foreach($TabMenu as $Id=>$TabMenuData)
						@if($deal_stage=='')
							@if($Id =='1')
								@php 
								$active = 'active';
								$SearchValue = $Id;
								$AllCount=$AllCount+$TabMenuData['count'];
								@endphp
							@else
								@php
								$active = '';
								$AllCount=$AllCount+$TabMenuData['count'];
								@endphp
							@endif  
						@else
							@if($Id ==$deal_stage)
								@php 
								$active = 'active';
								$SearchValue = $Id;
								$AllCount=$AllCount+$TabMenuData['count'];
								@endphp
							@else
								@php
								$active = '';
								$AllCount=$AllCount+$TabMenuData['count'];
								@endphp
							@endif  
						@endif
						
						    <li class="nav-item">
								<a class="nav-link {{$active}} tabATAg" id="{{$Id}}-tab-justified" data-toggle="tab" href="#{{$Id}}-justified" role="tab" aria-controls="{{$Id}}" aria-selected="false"><span class="lead_status">{{$TabMenuData['name']}}</span><br><span class="{{$Id}}-count {{$TabMenuData['colorClass']}}">{{'('.$TabMenuData['count'].')'}}</span></a>
							</li>
						@endforeach
					<li class="nav-item">
								<a class="nav-link  tabATAg" id="0-tab-justified" data-toggle="tab" href="#0-justified" role="tab" aria-controls="0" aria-selected="false"><span class="lead_status">All</span> <span class="0-count badge badge-primary">{{'('.$AllCount.')'}}</span></a>
							</li>
                    
                    
                    </ul>
					<input type="hidden" name="SearchValue" id="SearchValue" value="{{$SearchValue}}">
                    <div class="tab-content" id="defaultTabJustifiedContent">
						<div class="tab-pane fade active show" id="1-justified" role="tabpanel" aria-labelledby="1-tab-justified">
							<div class="table-responsive">
								<table id="datatable-buttons" class="table table-striped table-bordered">
									<thead>
									<tr>
										<th>Client Name</th>
										<th>Query Type</th>
										<th>Report Title</th>
										<th>Company</th>
										<th>Client Email Id</th>
										<th>Client Message</th>
										<!--<th>DealPrice ($)</th>-->
										<th>Deal Stage</th>
										<th>Lead State</th>
										<th>Asign To</th>
										<th>Created At</th>
										<th>Modified At</th>
										<th>Action</th>
									</tr>
									</thead>
									<tbody>
									</tbody>
								</table>
							</div>
						</div>
                    </div>
					
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    </div>
    <!-- End XP Row -->
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')
@if(Helper::allow_permission('lead-by-stages')==1)
<script>
$(function() {
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	$('#tab_1').trigger('click');
	$('.tabATAg').on( 'click', function (e) {
	e.preventDefault();
	
	var hrefId = $(this).attr('href').replace('#','');
	var split_hrefId = hrefId.split('-');
	$('.tab-pane').removeAttr('id');
	$('.tab-pane').attr('id',''+hrefId);
	var SearchValue = split_hrefId[0];
	//alert(SearchValue);
	$('#SearchValue').val(SearchValue);
	getListDatatable(SearchValue);
	});
	var SearchValue = $('#SearchValue').val();
	getListDatatable(SearchValue);
});
function deleteData(Id){
	var con = confirm('Are you sure you want to delete?');
	if(!con)
	{
		return false;
	}
	$.ajax({
	type:"POST",
	url:"{{url('deleteLead')}}",
	data:{
		"_token": "{{ csrf_token() }}",
		id:Id,
		table:'leads'
		},
		success:function(response){
			$("#tr_"+Id).hide();
		},
	});
}
function changeLeadStatus(lead_status, LeadId){
	$.ajax({
	type:"POST",
	url:"{{url('update_lead_status')}}",
	data:{
		"_token": "{{ csrf_token() }}",
		lead_state:lead_status,
		lead_id:LeadId
		},
		success:function(response){
			$('#LeadStatusMsg_'+LeadId).html('Status updated');
		},
	});
}
function changeAgent(agent_id, LeadId){
	$.ajax({
	type:"POST",
	url:"{{url('update_lead_agent')}}",
	data:{
		"_token": "{{ csrf_token() }}",
		agent_id:agent_id,
		lead_id:LeadId
		},
		success:function(response){
			$('#AgentMsg_'+LeadId).html('Agent updated');
		},
	});
}
function getLeadsByCategory(){
	var SearchValue = $('#SearchValue').val();
	var Category = $('#Category').val();
	$.ajax({
	type:"POST",
	url:"{{url('getLeadStageCountByCategory')}}",
	data:{
		"_token": "{{ csrf_token() }}",
		CategoryId:Category,
		},
		success:function(response){
			var res = $.parseJSON(response);
			$.each(res, function(key, val){
				$('.'+key+'-count').text(val.count);
			})
			//console.log(response);
		},
	});
	getListDatatable(SearchValue);
}
function getListDatatable(SearchValue){
	var Category = $('#Category').val();
	//alert(SearchValue);
	$("#datatable-buttons").dataTable().fnDestroy();
	$('#datatable-buttons').DataTable({
		"processing": true,
        "serverSide": true,
		"ordering": false,
		"lengthMenu": [20, 40, 60, 80, 100],
        "pageLength": 50,
        "ajax": {
			'type': 'POST',
            "url": "{{url('lead_list')}}",
			//"dataSrc": "",
            'data': {
			   "_token": "{{ csrf_token() }}",
			   action: 'List',
			   deal_stage: SearchValue,
			   CategoryId:Category
			},
			error: function (xhr, error, code)
            {
                console.log(xhr);
                console.log(code);
                console.log(error);
            },
        },	
        "columns": [
            { "data": "client_name" },
            { "data": "query_type" },
            { "data": "report_title" },
            { "data": "company_name" },
            { "data": "client_emailId" },
            { "data": "client_message" },
            //{ "data": "report_price" },
            { "data": "deal_stage_name" },
            { "data": "lead_status_name" },
            { "data": "user_name" },
            { "data": "created_at" },
            { "data": "updated_at" },
            { "data": "action" },
        ],
		"fnCreatedRow": function( nRow, aData, iDataIndex ) {
			$(nRow).attr('id', 'tr_'+aData['id']);
		},
		dom: 'Bfrtip',
        buttons: [
			{
				 extend: 'copy',
				 exportOptions: {
					columns: [0,1,2,3,4,5,6,7,8,9,10]
				 }
			},
			{
				 extend: 'csv',
				 exportOptions: {
					columns: [0,1,2,3,4,5,6,7,8,9,10]
				 }
			},
			{
				 extend: 'excel',
				 exportOptions: {
					columns: [0,1,2,3,4,5,6,7,8,9,10]
				 }
			}
            //'copy', 'csv', 'excel', 'pdf', 'print'
        ]
		
    });
}
</script>
@endif
<!-- Required Datatable JS -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/init/table-datatable-init.js') }}"></script>
@endsection 