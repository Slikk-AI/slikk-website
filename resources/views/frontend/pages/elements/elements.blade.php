@foreach($PageSectionData as $val_data)
	@php
		$ElementDetails = json_decode( $val_data->element_details, true);
		$array = (array) $ElementDetails;
		$element_array = Helper::sortAssociativeArrayByKey($array, "element_sort", "ASC");
		$iElement = 1;
		$idescElement = 1;
	@endphp
	@if($val_data->element_id==2)
		@include('frontend.pages.elements.testimonials')
		
	@endif
	@if($val_data->element_id==3)
		@include('frontend.pages.elements.features')
	@endif
	@if($val_data->element_id==4)
		@include('frontend.pages.elements.future_of_work')
	@endif
	@if($val_data->element_id==5)
		@include('frontend.pages.elements.image_with_description_with_grid')
		
	@endif
	@if($val_data->element_id==7)
		@include('frontend.pages.elements.small_grid')
	@endif	
	@if($val_data->element_id==8)
		@include('frontend.pages.elements.team_members')
		
	@endif
	@if($val_data->element_id==10)
		@include('frontend.pages.elements.slider_with_grid')
	@endif
	@if($val_data->element_id==11)
		@include('frontend.pages.elements.referral_works')
	@endif
	@if($val_data->element_id==13)
		@include('frontend.pages.elements.right_side_image_with_listing')
	@endif
	@if($val_data->element_id==12)
		@include('frontend.pages.elements.left_side_image_with_listing')
	@endif
	@if($val_data->element_id==15)
		@include('frontend.pages.elements.top_tab_with_description')
	@endif
	@if($val_data->element_id==16)
		@include('frontend.pages.elements.description_with_video')
	@endif
	@if($val_data->element_id==17)
	@include('frontend.pages.elements.left_side_video_with_listing')
@endif
	@endforeach