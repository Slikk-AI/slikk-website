<div class="container">
   <h2 class="section_title" style="margin-top:60px;margin-bottom:70px;text-align:left;">{{$val_data->title}}</h2>
	<div class="row">

		<!-- <h3 class="section_title_p" style="margin-top:60px;margin-bottom:70px">A high growth company with a people first culture</h3> -->
		@foreach($element_array as $val_element_array)
		<div class="col-sm-4 card-box">
			<div class="icon-cont">
			@if($val_element_array['element_image']!='')
				 <div class="icon-about d-flex align-items-center" style="background: #FFBB00 0% 0% no-repeat padding-box;"><img src="{{asset('assets/page/'.$val_element_array['element_image'])}}"></div>
		@else
			  <div class="icon-about d-flex align-items-center" style="background: #FFBB00 0% 0% no-repeat padding-box;"><img src="https://slikk.ai/assets/img/teamwork.png"></div>
		@endif
			   
				<h3 class="box-title">{{$val_element_array['element_title']}}</h3>
				
				@php
			$element_desc = substr(strip_tags($val_element_array['element_description']),0,150);
			$element_desc = str_replace('<p','<p class="center-text"',$element_desc);
			@endphp
			{!!html_entity_decode($element_desc)!!}
			   
			</div>
		</div>
		@endforeach
	</div>
</div>