<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="CRM">
        <meta name="keywords" content="CRM">
        <meta name="author" content="Themesbox17">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> @yield('title') </title>
        <!-- Fevicon -->
        <link rel="shortcut icon" href="{{ asset('assets/img/fav.webp')}}">
        <!-- Start CSS -->   
        @yield('style')
        <link href="{{admin_url.'assets/css/bootstrap.min.css'}}" rel="stylesheet" type="text/css">
        <link href="{{admin_url.'assets/css/icons.css'}}" rel="stylesheet" type="text/css">
        <link href="{{admin_url.'assets/css/style.css'}}" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="{{admin_url.'assets/css/jquery-ui.css'}}" type="text/css">
		<link href="https://cdn.materialdesignicons.com/1.9.32/css/materialdesignicons.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://www.tiny.cloud/css/codepen.min.css" rel="stylesheet">
		<style>
        
        /* .xp-rightbar {
            margin-left: 300px;
        }
        
        .xp-leftbar {
            width: 300px;
        } */
        
        
        </style>
        <!-- End CSS -->
    </head>
    <body class="xp-vertical {{ (isset($toggle_menu)) ? $toggle_menu : '' }} ">
        <!-- Start XP Container -->
        <div id="xp-container">  
			@if(session()->has('user'))
				<!-- Start XP Leftbar -->
				@include('admin.layouts.leftbar')
				<!-- End XP Leftbar -->
				<!-- Start XP Rightbar -->
				@include('admin.layouts.rightbar')    
			@endif
                  
            @yield('content')
            <!-- End XP Rightbar -->  
        </div>
        <!-- End XP Container -->
        <!-- Start JS -->        
        <script src="{{admin_url.'assets/js/jquery.min.js'}}"></script>
        <script src="{{admin_url.'assets/js/jquery-ui.js'}}"></script>
        <script src="{{admin_url.'assets/js/popper.min.js'}}"></script>
        <script src="{{admin_url.'assets/js/bootstrap.min.js'}}"></script>
        <script src="{{admin_url.'assets/js/modernizr.min.js'}}"></script>
        <script src="{{admin_url.'assets/js/detect.js'}}"></script>
        <script src="{{admin_url.'assets/js/jquery.slimscroll.js'}}"></script>
        <script src="{{admin_url.'assets/js/sidebar-menu.js'}}"></script> 
        @yield('script')
        <!-- Main JS -->
        <script src="{{admin_url.'assets/js/main.js'}}"></script>
        <!-- End JS -->
    </body>
</html>    