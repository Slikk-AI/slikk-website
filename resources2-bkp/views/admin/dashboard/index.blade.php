@section('title') 
Dashboard
@endsection 
@extends('admin.layouts.main')
@section('style')
<!-- Chartist Chart CSS -->
<link href="http://localhost/new_main_rnd/admin/assets/plugins/c3/c3.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" media="all" href="http://localhost/new_main_rnd/admin/assets/css/daterangepicker.css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Dashboard</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- End XP Row -->
    <div class="col-md-12 col-lg-12 col-xl-12">
			<div class="row">
				<div class="col-md-4 col-lg-4 col-xl-4 text-center">
					<!-- Danger Card -->
					
					<!--<div class="card text-white bg-danger m-b-30">
						<div class="card-header"><h5>Strategies</h5></div>
						<div class="card-body">
							<h2 id="TotalLeadCount">0</h2>
							<a href="" class="font-size-16 font-color-black"> View </a>
						</div>
					</div>-->
					
					<!-- Danger Card -->  
				</div>
				<div class="col-md-4 col-lg-4 col-xl-4 text-center">
					<!-- info  Card -->
					<!--<div class="card text-white bg-info  m-b-30">
						<div class="card-header"><h5>Tools</h5></div>
						<div class="card-body">
							<h2 >0</h2>
							<a href="" class="font-size-16 font-color-black"> View </a>
						</div>
					</div>-->
					<!-- info  Card -->  
				</div>
				<div class="col-md-4 col-lg-4 col-xl-4 text-center">
					<!-- warning  Card -->
					<!--<div class="card text-white bg-warning  m-b-30">
						<div class="card-header"><h5>Calculator</h5></div>
						<div class="card-body">
							<h2  >0</h2>
							<a href="" class="font-size-16 font-color-black"> View </a>
						</div>
					</div>-->
					<!-- warning  Card -->  
				</div>
				
			</div>
        </div>
	
    </div>
	
    <!-- End XP Row -->
  
</div>
<!-- End XP Contentbar -->
@endsection 
@section('script')
<!-- Chartist Chart JS -->
<script src="http://localhost/new_main_rnd/admin/assets/plugins/d3/d3.min.js"></script>
<script src="http://localhost/new_main_rnd/admin/assets/plugins/c3/c3.min.js"></script>
<script src="http://localhost/new_main_rnd/admin/assets/js/init/c3-chart-init.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
<script type="text/javascript" src="http://localhost/new_main_rnd/admin/assets/js/daterangepicker.js"></script>
@endsection 