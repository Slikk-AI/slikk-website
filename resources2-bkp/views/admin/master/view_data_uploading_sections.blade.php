@section('title') 
View Data Uploading
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
        <li class="breadcrumb-item"><a href="#">View Data Uploading</a></li>
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
                    <h5 class="card-title text-black">View Data Uploading</h5>
                    
                </div>
                <div class="card-body">
				<h3>{{$DataResuts[0]->account_name}}</h3>
                    <div class="table-responsive">
						<table id="datatable-buttons" class="table table-striped table-bordered">
							<thead>
							<tr>
								<th> Days</th>
								<th> January</th>
								<th> February</th>
								<th> March</th>
								<th> April</th>
								<th> May</th>
								<th> June</th>
								<th> Jully</th>
								<th> August</th>
								<th> September</th>
								<th> October</th>
								<th> November</th>
								<th> December</th>
								
							</tr>
							</thead>
							<tbody>
							@foreach($SectionResuts as $SectionData)
							<tr>
								<td> {{$SectionData->days}}</td>
								<td> {{$SectionData->January}}</td>
								<td> {{$SectionData->February}}</td>
								<td> {{$SectionData->March}}</td>
								<td> {{$SectionData->April}}</td>
								<td> {{$SectionData->May}}</td>
								<td> {{$SectionData->June}}</td>
								<td> {{$SectionData->Jully}}</td>
								<td> {{$SectionData->August}}</td>
								<td> {{$SectionData->September}}</td>
								<td> {{$SectionData->October}}</td>
								<td> {{$SectionData->November}}</td>
								<td> {{$SectionData->December}}</td>
								
							</tr>
							@endforeach
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