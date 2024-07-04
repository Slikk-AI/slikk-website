@section('title') 
Leads
@endsection
@extends('admin.layouts.main')
@section('style')
<!-- DataTables CSS -->
<link href="{{ admin_url.'assets/plugins/datatables/dataTables.bootstrap4.min.css' }}" rel="stylesheet" type="text/css" />
<link href="{{ admin_url.'assets/plugins/datatables/buttons.bootstrap4.min.css' }}" rel="stylesheet" type="text/css" />
<link href="{{ admin_url.'assets/plugins/datatables/responsive.bootstrap4.min.css' }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" media="all" href="{{ admin_url.'assets/css/daterangepicker.css' }}" />
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
					<div class="col-md-6" style="text-align:right; display:none;">
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
							<label for="cconfig-demo" >Filter Date: </label>
							<input type="text" id="cconfig-demo" autocomplete="off" value="" placeholder="Date" class="form-control ">
							<input type="hidden" name="start_date"  id="start_date" value="">
							<input type="hidden" name="end_date"  id="end_date" value="">
						</div>
						<div class="form-group col-md-1" style="margin: auto;">
							<input type="button" name="SearchLead" id="SearchLead" class="btn btn-primary" value="Search" onclick="return getSearchLead();">
						</div>
					</div>
                    <div class="tab-content" id="defaultTabJustifiedContent">
						<div class="tab-pane fade active show" id="1-justified" role="tabpanel" aria-labelledby="1-tab-justified">
							<div class="table-responsive">
								<table id="datatable-buttons" class="table table-striped table-bordered">
									<thead>
									<tr>
										<th>Lead Date</th>
										<th>Client Name</th>
										<th>Email Id</th>
										<th>Phone</th>
										<th>Seats</th>
										<th>Country</th>
										<th>Timezone</th>
										<th>Time</th>
										<th>Meet Link</th>
										<th>Message</th>
										<th>Email Type</th>
									
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
@if(Helper::allow_permission('view-lead-management-list')==1)
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
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	getListDatatable();
});
function crefreshPage(start, end) {
	$('#start_date').val(start);
	$('#end_date').val(end);
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


function getSearchLead(){
	getListDatatable();
}
function getListDatatable(){
	var end_date = $('#end_date').val();
	var start_date = $('#start_date').val();
	$("#datatable-buttons").dataTable().fnDestroy();
	$('#datatable-buttons').DataTable({
		"processing": true,
        "serverSide": true,
		"ordering": false,
		"lengthMenu": [20, 40, 60, 80, 100],
        "pageLength": 20,
        "ajax": {
			'type': 'POST',
            "url": "{{url('lead_list')}}",
			//"dataSrc": "",
            'data': {
			   "_token": "{{ csrf_token() }}",
			   action: 'List',
			   end_date:end_date,
			   start_date:start_date,
			},
			error: function (xhr, error, code)
            {
                console.log(xhr);
                console.log(code);
                console.log(error);
            },
        },
        "columns": [
            { "data": "created_date" },
            { "data": "name" },
            { "data": "email" },
            { "data": "phone" },
			{ "data": "address" },
            { "data": "country" },
            { "data": "countryTimezon" },
            { "data": "Schedule" },
			{ "data": "meet_link" },
            { "data": "msg" },
            { "data": "client_emailId_type" },
         
        ],
		"fnCreatedRow": function( nRow, aData, iDataIndex ) {
			$(nRow).attr('id', 'tr_'+aData['id']);
		},
		dom: 'Bfrtip',
        buttons: [
			{
				 extend: 'copy',
				 exportOptions: {
					columns: [0,1,2,3,4,5,6,7,8]
				 }
			},
			{
				 extend: 'csv',
				 exportOptions: {
					columns: [0,1,2,3,4,5,6,7,8]
				 }
			},
			{
				 extend: 'excel',
				 exportOptions: {
					columns: [0,1,2,3,4,5,6,7,8]
				 }
			}
            //'copy', 'csv', 'excel', 'pdf', 'print'
        ]
		
    });
}
</script>
@endif
<!-- Required Datatable JS -->
<script src="{{ admin_url.'assets/plugins/datatables/jquery.dataTables.min.js' }}"></script>
<script src="{{ admin_url.'assets/plugins/datatables/dataTables.bootstrap4.min.js' }}"></script>
<script src="{{ admin_url.'assets/plugins/datatables/dataTables.buttons.min.js' }}"></script>
<script src="{{ admin_url.'assets/plugins/datatables/buttons.bootstrap4.min.js' }}"></script>
<script src="{{ admin_url.'assets/plugins/datatables/jszip.min.js' }}"></script>
<script src="{{ admin_url.'assets/plugins/datatables/pdfmake.min.js' }}"></script>
<script src="{{ admin_url.'assets/plugins/datatables/vfs_fonts.js' }}"></script>
<script src="{{ admin_url.'assets/plugins/datatables/buttons.html5.min.js' }}"></script>
<script src="{{ admin_url.'assets/plugins/datatables/buttons.print.min.js' }}"></script>
<script src="{{ admin_url.'assets/plugins/datatables/buttons.colVis.min.js' }}"></script>
<script src="{{ admin_url.'assets/plugins/datatables/dataTables.responsive.min.js' }}"></script>
<script src="{{ admin_url.'assets/plugins/datatables/responsive.bootstrap4.min.js' }}"></script>
<script src="{{ admin_url.'assets/js/init/table-datatable-init.js' }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
<script type="text/javascript" src="{{ admin_url.'assets/js/daterangepicker.js' }}"></script>
@endsection 