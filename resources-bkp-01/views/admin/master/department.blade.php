@section('title') 
Departments
@endsection
@extends('admin.layouts.main')
@section('style')
<!-- DataTables CSS -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Department</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Master</a></li>
        <li class="breadcrumb-item active" aria-current="page">Department</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Department Form</h5>
                   
                </div>
                <div class="card-body">
                    <form method="post">
                      <div class="form-group">
                        <label for="DepartmentName">Department Name</label>
                        <input type="text" class="form-control" id="DepartmentName" name="DepartmentName"  placeholder="Enter Department">
						<input type="hidden" class="form-control" id="DepartmentId" name="DepartmentId" >
                        <div class="invalid-data invalid-DepartmentName"></div>
                      </div>
                      
                      <button type="button" class="btn btn-primary" onclick="return submitForm();">Submit</button>
                      <a class="btn btn-default" href="{{url('department')}}">Reset</a>
                    </form>
                </div>
            </div>
        </div> 
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Departments</h5>
                    
                </div>
                <div class="card-body">
                    <div class="table-responsive">
						<table id="datatable-buttons" class="table table-striped table-bordered">
							<thead>
							<tr>
								<th>Department Name</th>
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
	url:"{{url('delete_data')}}",
	data:{
		"_token": "{{ csrf_token() }}",
		table_name:'department',
		Id:Id,
		},
		success:function(response){
			$("#tr_"+Id).hide();
		},
	});
}
function edit_department(Id){
	$.ajax({
	type:"GET",
	url:"{{url('edit_department')}}",
	data:{
		Id:Id,
		},
		success:function(response){
			var res = $.parseJSON(response);
			//console.log(res.id);
			$('#DepartmentName').val(res.name);
			$('#DepartmentId').val(res.id);
		},
	});
}

function submitForm(){
	var flag = false;
	$('.invalid-data').html('');
	var DepartmentName = $('#DepartmentName').val();
	var DepartmentId = $('#DepartmentId').val();
	if(DepartmentName.length==''){
		$('.invalid-DepartmentName').html("{{ trans('auth.FieldRequired') }}");
		$('#DepartmentName').focus();
		flag = true;
	}
	if(flag)
		return false;
	$.ajax({
	type:"GET",
	url:"{{url('submit_department')}}",
	data:{
		DepartmentName:DepartmentName,
		DepartmentId:DepartmentId,
		
		},
		success:function(response){
			$('#DepartmentName').val('');
			$('#DepartmentId').val('');
			if(response=='exist'){
				alert('Department is already exist');
			}else if(response=='Added'){
				alert('Department is added');
				location.reload();
			}else{
				$('#tr_'+DepartmentId).find('td:first-child').text(DepartmentName);
				alert('Department is updated');
			}
			//console.log(response);
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
            "url": "{{url('get_department_list')}}",
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
            { "data": "department_name" },
            { "data": "action" },
        ],
		"fnCreatedRow": function( nRow, aData, iDataIndex ) {
			$(nRow).attr('id', 'tr_'+aData['id']);
		},

		
    });
});
</script>
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