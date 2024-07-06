@section('title') 
Data Uploading
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
    <h4 class="page-title">Data Uploading</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Data Uploading</a></li>
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
                    <h5 class="card-title text-black">Data Uploading Form</h5>
                   
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{url('submit_data_uploading')}}">
					@csrf
                      
                      <div class="form-row">
                      <div class="col-md-4">
                        <label for="DataName">Name</label>
                        <input type="text" class="form-control" id="DataName" name="DataName" required placeholder="Enter Data Name">
						<input type="hidden" class="form-control" id="DataId" name="DataId" >
                        <div class="invalid-data invalid-DataName"></div>
                      </div>
                     
                      
                      <div class="col-md-4">
                        <label for="DataFile">File</label>
                        <input type="file"  id="DataFile" class="form-control" required name="DataFile"  >
                        <div class="invalid-data invalid-DataFile"></div>
                      </div>
					  <div class="col-md-4">
					  
					   <input type="submit" class="btn btn-primary" value="Submit">
                      <a class="btn btn-default" href="{{url('data_uploading')}}">Reset</a>
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
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Data Uploading</h5>
                    
                </div>
                <div class="card-body">
				@if(session()->has('ReportMessage'))
					<div class="xp-alert">
						<div class="alert alert-success" role="alert">
						{{session('ReportMessage')}}
						</div>								 
					</div>
					@endif
                    <div class="table-responsive">
						<table id="datatable-buttons" class="table table-striped table-bordered">
							<thead>
							<tr>
								<th> Name</th>
								<th> Created Date</th>
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
    <!-- End Row -->
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')
<script>
function delete_department(Id){
	var con = confirm('Are you sure you want to delete?');
	if(!con)
	{
		return false;
	}
	$.ajax({
	type:"POST",
	url:"{{url('delete_data_uploading')}}",
	data:{
		"_token": "{{ csrf_token() }}",
		table_name:'data_uploading',
		Id:Id,
		},
		success:function(response){
			$("#tr_"+Id).hide();
		},
	});
}
function edit_data_uploading(Id){
	$.ajax({
	type:"GET",
	url:"{{url('edit_data_uploading')}}",
	data:{
		Id:Id,
		},
		success:function(response){
			//console.log(response);
			var res = $.parseJSON(response);
			//console.log(res.id);
			$('#DataName').val(res.account_name);
			$('#DataId').val(res.id);
		},
	});
}
$(document).ready(function() {
	$('#datatable-buttons').DataTable({
		"processing": true,
        "serverSide": true,
		"ordering": false,
		"lengthMenu": [20, 40, 60, 80, 100],
        "pageLength": 10,
        "ajax": {
			'type': 'POST',
            "url": "{{url('get_data_uploading_list')}}",
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
            { "data": "account_name" },
            { "data": "created_date" },
            { "data": "action" },
        ],
		"fnCreatedRow": function( nRow, aData, iDataIndex ) {
			$(nRow).attr('id', 'tr_'+aData['id']);
		},

		
    });
});
</script>
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