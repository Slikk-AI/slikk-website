@section('title') 
Leads
@endsection
@extends('layouts.main')
@section('style')
<!-- DataTables CSS -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/c3/c3.min.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/css/daterangepicker.css') }}" />
<style>
.nav-link {
    display: block;
    padding: .5rem 1px !important;
    font-size: 12px !important;
    font-weight: bold;
}
</style>
@endsection 

@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Lead By Status</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Marketing Sales Report</a></li>
        <li class="breadcrumb-item active" aria-current="page">Lead By Status</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card m-b-30">
                <div class="card-body">
					<form method="post" action="{{url('lead-by-status-reports')}}">
						@csrf
						<div class="form-row">
							<div class="form-group col-md-4">
								<div class="row">
								<div  class="col-md-3">
									<label for="cconfig-demo" style="margin: auto;">Filter Date: </label>
									</div>
									<div  class="col-md-9">
									<input type="text" id="cconfig-demo" autocomplete="off" value="{{$start_date.' - '.$end_date}}" placeholder="Date" class="form-control ">
									<input type="hidden" name="cstart_date"  id="cstart_date" value="{{$start_date}}">
									<input type="hidden" name="cend_date"  id="cend_date" value="{{$end_date}}">
									</div>
								</div>
							</div>
							<div class="form-group col-md-4">
								<input type="text" class="form-control search_agent" name="EmployeeSearch" value="{{$EmployeeSearch}}" id="EmployeeSearch" placeholder="Search Employee">
								<input type="hidden" class="form-control " name="AgentId" id="AgentId" value="{{$AgentId}}" placeholder="Search Employee">
								
							</div>
							<div class="form-group col-md-4">
								
								<input type="submit" class="btn btn-primary" value="Go" style="margin-left:2px;" >
								<input type="button" class="btn btn-secondary" style="margin-left:2px;" value="Cancel" onclick="return getFilterCancel();">
							</div>
						</div>
					</form>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
				<div class="row">
					<div class="col-md-12">
						<div class="card-header bg-white">
							<h5 class="card-title text-black">Lead By Status</h5>
						</div>
						<div class="card-body">
							 <div id="xp-c3-pie-lead-by-status" style="height:320px;"></div>
							
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
					
					<ul class="nav nav-tabs nav-justified mb-3" id="defaultTabJustified" role="tablist">
					@php
						$TabId = '';
						$AllCount=0;
						$TabCount=0;
						@endphp
						@foreach($TabMenu as $Id=>$TabMenuData)
						@if($Id =='1')
							@php 
							$active = 'active';
							$TabId = $Id;
							$AllCount=$AllCount+$TabMenuData['count'];
							$TabCount=$InProcessCount;
							@endphp
						@else
							@php
							$active = '';
							$AllCount=$AllCount+$TabMenuData['count'];
							$TabCount=$TabMenuData['count'];
							@endphp
						@endif  
						    <li class="nav-item">
								<a class="nav-link {{$active}} tabATAg" id="{{$Id}}-tab-justified" data-toggle="tab" href="#{{$Id}}-justified" role="tab" aria-controls="{{$Id}}" aria-selected="false"><span class="lead_status">{{$TabMenuData['name']}}</span> <span class="{{$Id}}-count {{$TabMenuData['colorClass']}}">{{'('.$TabCount.')'}}</span></a>
							</li>
						@endforeach
					<li class="nav-item">
								<a class="nav-link  tabATAg" id="0-tab-justified" data-toggle="tab" href="#0-justified" role="tab" aria-controls="0" aria-selected="false"><span class="lead_status">All</span> <span class="0-count badge badge-primary">{{'('.$AllCount.')'}}</span></a>
							</li>
                    
                    
                    </ul>
					<input type="hidden" name="SearchValue" id="SearchValue" value="{{$TabId}}">
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

@if(Helper::allow_permission('view-lead-by-status-report')==1)
<script>
$(function() {
	$('#cconfig-demo').daterangepicker({
        timePicker: false,
		autoUpdateInput: false,
        locale :{
			format: 'DD/MM/YYYY'
			},
        ranges: {
            'Today': [moment().hours(0).minutes(0).seconds(0), moment()],
            'Yesterday': [moment().subtract('days', 1).hours(0).minutes(0).seconds(0), moment().subtract('days', 1).hours(23).minutes(59).seconds(59)],
            'Last 7 Days': [moment().subtract('days', 6).hours(0).minutes(0).seconds(0), moment().hours(23).minutes(59).seconds(59)],
            'Last 30 Days': [moment().subtract('days', 29).hours(0).minutes(0).seconds(0), moment().hours(23).minutes(59).seconds(59)],
            'This Month': [moment().startOf('month').hours(0).minutes(0).seconds(0), moment().endOf('month').hours(23).minutes(59).seconds(59)],
            'Last Month': [moment().subtract('month', 1).startOf('month').hours(0).minutes(0).seconds(0), moment().subtract('month', 1).endOf('month').hours(23).minutes(59).seconds(59)]
        }
    },
            function (start, end) {
                crefreshPage(start.format('DD/MM/YYYY'), end.format('DD/MM/YYYY'));
            }).on("apply.daterangepicker", function (e, picker) {
        picker.element.val(picker.startDate.format(picker.locale.format)+' - '+picker.endDate.format(picker.locale.format));
    });
	getLeadByStatusLeadCount(); // Lead By status
	
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
	$('#SearchValue').val(SearchValue);
	getListDatatable(SearchValue);
	});
	var SearchValue = $('#SearchValue').val();
	getListDatatable(SearchValue);
	
	//
	$('.search_agent').autocomplete
	({
		source: function( request, response )
		{
			$('#AgentId').val('');
			$.ajax
			({
				type : "GET", 
				url : "{{url('search_employee')}}",
				dataType: "json",
				data:
					{
					   name_startsWith: request.term,
					   type: 'search'
					},
				success: function( data )
				{
				     //alert(data);
					response( $.map( data, function( item ) 
					{
						//console.log(data);
						return {
							label: item.label,
							id: item.id,
						}
					}));
				},
				
				error: function(data)
				{
					console.log(data);
				}
			});
		},
		select: function( event, ui ) {
			//alert(ui.item.id);
			$('#AgentId').val(ui.item.id);
		},
		autoFocus: true,
		minLength: 2      	
	});
});
function getFilterData(){
	var SearchValue = $('#SearchValue').val();
	//getListDatatable(SearchValue);
	getLeadByStatusLeadCount(); // Lead By status
}
function getFilterCancel(){
	window.location="{{url('lead-by-status-reports')}}";
}


function getLeadByStatusLeadCount(){
	var start_date = $('#cstart_date').val();
	var end_date = $('#cend_date').val();
	var AgentId = $('#AgentId').val();
	$.ajax({
	type:"POST",
    async: false,
	url:"{{url('getLeadByStatusLeadCount')}}",
	data:{
		"_token": "{{ csrf_token() }}",
		start_date:start_date,
		end_date:end_date,
		AgentId:AgentId
		},
		success:function(response){
			//console.log(response);
			var res = $.parseJSON(response);
			//console.log(JSON.stringify(res.x_label));
			//console.log(JSON.stringify(res.column_values));
			$('#lead_status_color_code').val(JSON.stringify(res.lead_status_color_code));
			$('#lead_status_column_values').val(JSON.stringify(res.lead_status_column_values));
			var ColorCode = res.lead_status_color_code;
			var ColumnName = res.lead_status_column_values;
			xpPieChart('xp-c3-pie-lead-by-status', ColorCode,ColumnName);
		},
	});
	//alert(Dateselection);
}
function crefreshPage(start, end) {
	$('#cstart_date').val(start);
	$('#cend_date').val(end);
	//$('#config-demo').val(start+' - '+end);
    //window.location.replace(CURI + '/' + encodeURIComponent(start) + '/' + encodeURIComponent(end));
}
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

function getListDatatable(SearchValue){
	var start_date = $('#cstart_date').val();
	var end_date = $('#cend_date').val();
	var AgentId = $('#AgentId').val();
	//alert(start_date);
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
			   lead_status: SearchValue,
			   CategoryId:'',
			   AgentId:AgentId,
			   date_filter:'',
			   start_date:start_date,
			   end_date:end_date,
			   report:'report'
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
            { "data": "client_emailId_type" },
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

<script src="{{ asset('assets/plugins/d3/d3.min.js') }}"></script>
<script src="{{ asset('assets/plugins/c3/c3.min.js') }}"></script>
<script src="{{ asset('assets/js/init/c3-chart-init-marketing.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/js/daterangepicker.js') }}"></script>
@endsection 