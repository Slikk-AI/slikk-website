<div style="background: #FFF 0% 0% no-repeat padding-box;padding-top: 30px">
<div class="container">
	<h2 class="section_title" style="margin-top:60px;margin-bottom:70px">{{$val_data->title}}</h2>
		<div class="row">
		@php $i=1; @endphp
		@foreach($element_array as $val_element_array)
		@if($i==1)
		  <div class="col-sm-6 card-box " >
			  <h5 class="align-items-center">{{$val_element_array['element_title']}}</h5>
			  <h3 class="align-items-center" style="padding-left:10px;">
			   @php $desc = substr(strip_tags($val_element_array['element_description']),0,100); @endphp
                                    {!! html_entity_decode($desc) !!}
			   			
			 </h3>
		  </div>
		  @else
		  <div class="col-sm-6 card-box highlight-box" style="display:flex;">
				@if($val_element_array['element_image']!='')
					<p class="d-flex align-items-center"><img class="img-responsive"
                                        src="{{asset('assets/page/'.$val_element_array['element_image'])}}" alt=""> </p>
				@else
					<p class="d-flex align-items-center"><img class="img-responsive"
                                        src="http://localhost/slikk/assets/img/avatars/u4.jpg" alt=""> </p>
				@endif
			  
			  <h4 class="d-flex align-items-center" style="padding-left:10px;">{{$val_element_array['element_title']}}
			  </h4>

		  </div>
		  @endif
		  @php $i++; @endphp
		  @endforeach
			
		  
	  </div>
</div>
</div>