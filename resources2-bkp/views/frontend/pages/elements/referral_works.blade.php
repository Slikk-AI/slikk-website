<h2 class="section_title text-center" style="margin-top:60px;margin-bottom:70px">{{$val_data->title}}</h2>
<div class="container" style="padding-bottom: 30px;">
	<div class="row">
	@foreach($element_array as $val_element_array)
		<div class="col-sm-4 card-box">
			@if($val_element_array['element_image']!='')
				<div class="icon"><img src="{{asset('assets/page/'.$val_element_array['element_image'])}}"></div>
			@else
				 <div class="icon"><img src="https://reportindata.com/test/img/Icon open-graph.png"></div>
			@endif
		
			<h2 class="section_title text-center" >{{$val_element_array['element_title']}}</h2>
			
			@php
				$element_desc = $val_element_array['element_description'];
				$element_desc = str_replace('<p','<p style="text-align:center"',$element_desc);
			@endphp
			{!!html_entity_decode($element_desc)!!}
		</div>
		@endforeach
	</div>
</div>