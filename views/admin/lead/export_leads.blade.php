@section('title') 
{{$title}}
@endsection
@extends('admin.layouts.main')
@section('style')
<!-- DataTables CSS -->
<link href="{{ admin_url.'assets/plugins/datatables/dataTables.bootstrap4.min.css'}}" rel="stylesheet" type="text/css" />
<link href="{{ admin_url.'assets/plugins/datatables/buttons.bootstrap4.min.css' }}" rel="stylesheet" type="text/css" />
<link href="{{ admin_url.'assets/plugins/datatables/responsive.bootstrap4.min.css' }}" rel="stylesheet" type="text/css" />
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
				<div class="row">
					<div class="col-md-6">
						<div class="card-header bg-white">
							<h5 class="card-title text-black">{{$title}}</h5>
						</div>
					</div>
					<div class="col-md-6" style="text-align:right;">
						<div class="card-header bg-white">
						@if(Helper::allow_permission('create-lead-management')==1)
							<!--<a href="{{url('create_lead')}}" class="btn btn-primary">Create Lead</a>-->
						@endif
						</div>
						
					</div>
				</div>
              
                <div class="card-body">
				@if(Helper::allow_permission('export-lead-list')==1)
				<form method="post" action="{{url('submit_export_leads')}}">
					@csrf
					<div class="form-row">
						
						
						<div class="form-group col-md-2">
							<label for="FromDate">From Date </label>
							<input type="date" id="FromDate" name="FromDate" class="form-control">
							<div class="invalid-data invalid-FromDate"></div>
						</div>
						<div class="form-group col-md-2">
							<label for="ToDate">To Date </label>
							<input type="date" id="Todate" name="Todate" class="form-control">
							<div class="invalid-data invalid-ToDate"></div>
						</div>
						
					
						<div class="form-group col-md-2" style="padding-top: 26px;">
						<input type="submit" class="btn btn-primary" name="ExportLeads" id="ExportLeads" value="Export Leads">
						</div>
					</div>
				</form>
				@else
					<h4>Permission not allowed.</h4>
				@endif
					<!--
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
										<th>DealPrice ($)</th>
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
                    </div>-->
					
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