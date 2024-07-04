@section('title') 
Strategy Management
@endsection
@extends('admin.layouts.main')
@section('style')
<!-- DataTables CSS -->
<link href="{{ admin_url.'assets/plugins/datatables/dataTables.bootstrap4.min.css' }}" rel="stylesheet" type="text/css" />
<link href="{{ admin_url.'assets/plugins/datatables/buttons.bootstrap4.min.css' }}" rel="stylesheet" type="text/css" />
<link href="{{ admin_url.'assets/plugins/datatables/responsive.bootstrap4.min.css' }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Strategy Management</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Strategy Management</a></li>
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
							<h5 class="card-title text-black">Strategy List</h5>
						</div>
					</div>
					<div class="col-md-6" style="text-align:right;">
						<div class="card-header bg-white">
						@if(Helper::allow_permission('create-strategy-management')==1)
							<a href="{{url('create_strategy')}}" class="btn btn-primary">Create Strategy</a>
						@endif
						</div>
						
					</div>
				</div>
				
              
                <div class="card-body">
					@if(session()->has('StrategyMsg'))
					<div class="xp-alert">
						<div class="alert alert-success" role="alert">
						{{session('StrategyMsg')}}
						</div>								 
					</div>
					@endif
					
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Plan</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Created At</th>
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
        <!-- End XP Col -->
    </div>
    <!-- End XP Row -->
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')
@if(Helper::allow_permission('view-strategy-management-list')==1)
<script>
function deleteData(Id){
	var con = confirm('Are you sure you want to delete?');
	if(!con)
	{
		return false;
	}
	$.ajax({
	type:"POST",
	url:"{{url('deleteData')}}",
	data:{
		"_token": "{{ csrf_token() }}",
		id:Id,
		table:'users'
		},
		success:function(response){
			$("#tr_"+Id).hide();
		},
	});
}
$(document).ready(function() {
	$('#datatable-buttons').DataTable({
		"processing": true,
        "serverSide": true,
		"ordering": false,
		"lengthMenu": [20, 40, 60, 80, 100],
        "pageLength": 50,
        "ajax": {
			'type': 'POST',
            "url": "{{url('get_strategy_list')}}",
			//"dataSrc": "",
            'data': {
			   "_token": "{{ csrf_token() }}",
			   action: 'List',
			},
			error: function (xhr, error, code)
            {
                console.log(xhr);
                console.log(code);
                console.log(error);
            },
        },
        "columns": [
            { "data": "plan_title" },
            { "data": "price" },
            { "data": "status" },
            { "data": "created_date" },
            { "data": "action" },
        ],
		"fnCreatedRow": function( nRow, aData, iDataIndex ) {
			$(nRow).attr('id', 'tr_'+aData['user_id']);
		},
		dom: 'Bfrtip',
        buttons: [
			{
				 extend: 'copy',
				 exportOptions: {
					columns: [0,1,2,3]
				 }
			},
			{
				 extend: 'csv',
				 exportOptions: {
					columns: [0,1,2,3]
				 }
			},
			{
				 extend: 'excel',
				 exportOptions: {
					columns: [0,1,2,3]
				 }
			}
            //'copy', 'csv', 'excel', 'pdf', 'print'
        ]
		
    });
});
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
@endsection 