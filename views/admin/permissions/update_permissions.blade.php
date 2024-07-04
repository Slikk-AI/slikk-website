@section('title') 
Update Permission
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
    <h4 class="page-title">Update Permission</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Access Management</a></li>
        <li class="breadcrumb-item active" aria-current="page">Update Permission</li>
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
							<h5 class="card-title text-black">Update Permission ({{$Permission->menu_name}})</h5>
						   
						</div>
					</div>
				
				</div>
               
                <div class="card-body">
					
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Sort</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
								@foreach($SubPermission as $key_permission => $val_permission)
									 <tr>
										<td>{{$val_permission->display_name}}</td>
										<td><input type="text" class="form-control" name="sort_{{$val_permission->id}}" id="sort_{{$val_permission->id}}" value="{{$val_permission->sort_order}}"></td>
										<td><input type="checkbox" class="" name="chekbox_{{$val_permission->id}}" id="chekbox_{{$val_permission->id}}" value="1" {{($val_permission->status==1)?'checked':''}}></td>
										<td><input type="button" class="btn btn-primary" value="Update" onclick="return updatePermission({{$val_permission->id}});"></td>
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
    <!-- End XP Row -->
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')
<script>
function updatePermission(Id){
	var SortOrder = $('#sort_'+Id).val();
	var Status = 0;
	if($('#chekbox_'+Id).is(':checked')){
		Status = 1;
	}
	
	$.ajax({
	type:"POST",
	url:"{{url('update_permission_data')}}",
	data:{
		"_token": "{{ csrf_token() }}",
		Id:Id,
		SortOrder:SortOrder,
		Status:Status,
		},
		success:function(response){
			alert('Permission Updated');
		},
	});
}
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