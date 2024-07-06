<div class="xp-leftbar">
    <!-- Start XP Sidebar -->
    <div class="xp-sidebar">
        <!-- Start XP Logobar -->
        <div class="xp-logobar text-center">
            <a href="{{url('/')}}" class="xp-logo"><!--<img src="assets/images/logo.svg" class="img-fluid" alt="logo">-->{{website_name}}</a>
        </div>
        <!-- End XP Logobar -->
        <!-- Start XP Navigationbar -->
        <div class="xp-navigationbar">
            <ul class="xp-vertical-menu">
                <li class="xp-vertical-header">Navigation</li>
				@php
				$LoginSessionValue = Helper::getUserData();
				if($LoginSessionValue->role_id==2)
				$HighestStrategyPlan = Helper::get_highest_strategy_plan($LoginSessionValue->id);
				@endphp
				
				<li >
                    <a href="javaScript:void();">
                      <i class="mdi mdi-account-location"></i><span>View Dashboard</span><i class="mdi mdi-chevron-right pull-right"></i>
                    </a>
                    <ul class="xp-vertical-submenu">
						<li><a href="{{url('/dashboard')}}">Dashboard</a></li>
                    </ul>
                </li>
				
                <li>
                    <a href="javaScript:void();">
                      <i class="mdi mdi-account-location"></i><span>Account</span><i class="mdi mdi-chevron-right pull-right"></i>
                    </a>
                    <ul class="xp-vertical-submenu">
                        <li><a href="{{url('/profile')}}">Profile</a></li>
                        <li><a href="{{url('/change_password')}}">Change Password</a></li>
                        
                    </ul>
                </li>
				
				@if(Helper::allow_permission('view-access-management-menu')==1)
                 <li>
                    <a href="javaScript:void();">
                      <i class="mdi mdi-account-location"></i><span>Access Management</span><i class="mdi mdi-chevron-right pull-right"></i>
                    </a>
                    <ul class="xp-vertical-submenu">
						@if(Helper::allow_permission('view-user-management-menu')==1)
							<li><a href="{{url('/user-management')}}">User Management </a></li>
						@endif
						@if(Helper::allow_permission('view-permission-management-menu')==1)
                        <li><a href="{{url('/permission')}}">Permission Management</a></li>
						@endif
						@if(Helper::allow_permission('view-role-management-menu')==1)
                        <li><a href="{{url('/roles')}}">Role Management</a></li>
                        @endif
                    </ul>
                </li>
                @endif
				<!--@if(Helper::allow_permission('view-strategy-management-menu')==1)-->
    <!--             <li>-->
    <!--                <a href="javaScript:void();">-->
    <!--                  <i class="mdi mdi-account-location"></i><span>Strategies Management</span><i class="mdi mdi-chevron-right pull-right"></i>-->
    <!--                </a>-->
    <!--                <ul class="xp-vertical-submenu">-->
				<!--		@if(Helper::allow_permission('view-strategy-management-list')==1)-->
				<!--			<li><a href="{{url('/strategy-management')}}">Strategy List </a></li>-->
				<!--		@endif-->
				<!--		@if(Helper::allow_permission('create-strategy-management')==1)-->
    <!--                    <li><a href="{{url('/create_strategy')}}">Create strategy</a></li>-->
				<!--		@endif-->
				<!--		@if(Helper::allow_permission('view-strategy-plan-menu')==1 && $LoginSessionValue->role_id==2)-->
				<!--			<li><a href="{{url('/strategy-plan')}}">Manage Strategies </a></li>-->
				<!--		@endif-->
				<!--		@if(Helper::allow_permission('view-strategy-management-details')==1 && $LoginSessionValue->role_id==2)-->
				<!--			@if(count($HighestStrategyPlan)>0)	-->
				<!--			<li><a href="{{url('/view_strategy/'.$HighestStrategyPlan[0]->strategy_id)}}">View Strategy </a></li>-->
				<!--			@endif-->
				<!--		@endif-->
    <!--                </ul>-->
    <!--            </li>-->
    <!--            @endif-->
				@if(Helper::allow_permission('view-category-management-menu')==1)
                 <li>
                    <a href="javaScript:void();">
                      <i class="mdi mdi-account-location"></i><span>Category Management</span><i class="mdi mdi-chevron-right pull-right"></i>
                    </a>
                    <ul class="xp-vertical-submenu">
						@if(Helper::allow_permission('create-category-management')==1)
							<li><a href="{{url('/create_category')}}">Create Category </a></li>
						@endif
						@if(Helper::allow_permission('view-category-management-list')==1)
                        <li><a href="{{url('/category_listing')}}">Category List</a></li>
						@endif
                    </ul>
                </li>
                @endif
				@if(Helper::allow_permission('view-blog-management-menu')==1)
                 <li>
                    <a href="javaScript:void();">
                      <i class="mdi mdi-account-location"></i><span>Blog Management</span><i class="mdi mdi-chevron-right pull-right"></i>
                    </a>
                    <ul class="xp-vertical-submenu">
						@if(Helper::allow_permission('create-blog-management')==1)
							<li><a href="{{url('/create_blog')}}">Create Blog </a></li>
						@endif
						@if(Helper::allow_permission('view-blog-management-list')==1)
                        <li><a href="{{url('/blog_listing')}}">Blog List</a></li>
						@endif
                    </ul>
                </li>
                @endif
				{{-- @if(Helper::allow_permission('view-alerts-managment-menu')==1)
                 <li>
                    <a href="{{url('/alerts')}}">
                      <i class="mdi mdi-account-location"></i><span>Alerts</span>
                    </a>
                   
                </li>
                @endif
				@if(Helper::allow_permission('view-tools-management-menu')==1)
                 <li>
                    <a href="{{url('/tools')}}">
                      <i class="mdi mdi-account-location"></i><span>Tools</span>
                    </a>
                   
                </li>
                @endif
				@if(Helper::allow_permission('view-data-uploading-managment-menu')==1)
                 <li>
                    <a href="{{url('/data_uploading')}}">
                      <i class="mdi mdi-account-location"></i><span>Data Uploading</span>
                    </a>
                   
                </li>
                @endif --}}

                @if(Helper::allow_permission('view-page-management-menu')==1)
                <li>
                   <a href="javaScript:void();">
                     <i class="mdi mdi-account-location"></i><span>Page Management</span><i class="mdi mdi-chevron-right pull-right"></i>
                   </a>
                   <ul class="xp-vertical-submenu">
                       @if(Helper::allow_permission('create-page-management')==1)
                           <li><a href="{{url('/create_page')}}">Create Page </a></li>
                       @endif
                       @if(Helper::allow_permission('view-page-management-list')==1)
                       <li><a href="{{url('/page_listing')}}">Page List</a></li>
                       @endif
                   </ul>
               </li>
               @endif

               {{-- @if(Helper::allow_permission('view-lead-management-menu')==1) --}}
               <li>
                  <a href="javaScript:void();">
                    <i class="mdi mdi-account-location"></i><span>Lead Management</span><i class="mdi mdi-chevron-right pull-right"></i>
                  </a>
                  <ul class="xp-vertical-submenu">
                      {{-- @if(Helper::allow_permission('export-lead-list')==1) --}}
                          <li><a href="{{url('/export_leads')}}">Export Lead </a></li>
                      {{-- @endif --}}
                      {{-- @if(Helper::allow_permission('view-lead-management-list')==1) --}}
                              <li><a href="{{url('/leads')}}">Lead List</a></li>
                          {{-- @endif --}}
                  </ul>
              </li>
              {{-- @endif --}}
            </ul>
        </div>
        <!-- End XP Navigationbar -->
    </div>
    <!-- End XP Sidebar -->
</div>
<!-- End XP Leftbar -->