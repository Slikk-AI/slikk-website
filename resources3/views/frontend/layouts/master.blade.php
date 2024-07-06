<!DOCTYPE html>
<html lang="en">

@if (Request::is('join-us*'))
		@include('frontend.includes.join_header')
		@yield('custom-style') 
		@yield('content')
		@include('frontend.includes.join_footer')
		@yield('custom-script')
@else
	@include('frontend.includes.top_header')
	@include('frontend.includes.header')
	@yield('custom-style') 
	@yield('content')
	@include('frontend.includes.footer')
	@include('frontend.includes.js')
	@yield('custom-script') 
	@endif
</body>
</html>