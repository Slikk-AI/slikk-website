@section('title') 
{{$title}}
@endsection
@extends('admin.layouts.main')
@section('style')
<!-- DataTables CSS -->
<link href="{{admin_url.'assets/plugins/datatables/dataTables.bootstrap4.min.css' }}" rel="stylesheet" type="text/css" />
<link href="{{admin_url.'assets/plugins/datatables/buttons.bootstrap4.min.css' }}" rel="stylesheet" type="text/css" />
<link href="{{admin_url.'assets/plugins/datatables/responsive.bootstrap4.min.css' }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">{{$title}}</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Tools Management</a></li>
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
							<h5 class="card-title text-black">{{$title}} </h5>
						</div>
					</div>
					<!--<div class="col-md-6" style="text-align:right;">
						<div class="card-header bg-white">
							@if(Helper::allow_permission('create-report-management')==1)
							<a href="{{url('create_report')}}" class="btn btn-primary">Create Report</a>
							@endif
						</div>
						
					</div>-->
				</div>
				
              
                <div class="row">
					<!--@if(session()->has('ReportMessage'))
					<div class="xp-alert">
						<div class="alert alert-success" role="alert">
						{{session('ReportMessage')}}
						</div>								 
					</div>
					@endif -->
					 <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-primary">Growth Calculator</h4>            
                        </div>
                       
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
		 <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-primary">Position Size Calculator</h4>
                                               
                        </div>
                       
                        <div class="clearfix"></div>
                    </div>
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
<!-- Required Datatable JS -->
<script src="{{admin_url.'assets/plugins/datatables/jquery.dataTables.min.js' }}"></script>
<script src="{{admin_url.'assets/plugins/datatables/dataTables.bootstrap4.min.js' }}"></script>
<script src="{{admin_url.'assets/plugins/datatables/dataTables.buttons.min.js' }}"></script>
<script src="{{admin_url.'assets/plugins/datatables/buttons.bootstrap4.min.js' }}"></script>
<script src="{{admin_url.'assets/plugins/datatables/jszip.min.js' }}"></script>
<script src="{{admin_url.'assets/plugins/datatables/pdfmake.min.js' }}"></script>
<script src="{{admin_url.'assets/plugins/datatables/vfs_fonts.js' }}"></script>
<script src="{{admin_url.'assets/plugins/datatables/buttons.html5.min.js' }}"></script>
<script src="{{admin_url.'assets/plugins/datatables/buttons.print.min.js' }}"></script>
<script src="{{admin_url.'assets/plugins/datatables/buttons.colVis.min.js' }}"></script>
<script src="{{admin_url.'assets/plugins/datatables/dataTables.responsive.min.js' }}"></script>
<script src="{{admin_url.'assets/plugins/datatables/responsive.bootstrap4.min.js' }}"></script>
<script src="{{admin_url.'assets/js/init/table-datatable-init.js' }}"></script>
@endsection 