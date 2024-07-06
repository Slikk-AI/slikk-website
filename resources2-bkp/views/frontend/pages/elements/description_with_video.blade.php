<div class="container">
		 @foreach($element_array as $val_element_array)
        <h2 class="outside-head">{{$val_element_array['element_title']}}</h2>

        <div class="row marb_50 video-box">

       

            <div class="col-sm-6 d-flex align-items-center">
                
                <div class="info-cont">
                   @php
						$element_desc = $val_element_array['element_description'];
						
					@endphp
					{!!html_entity_decode($element_desc)!!}
                </div>

            </div>

            <div class="col-sm-6 d-flex align-items-center">
                <div class="vid-cont">
                    <iframe width="560" height="315" src="{{$val_element_array['element_other_details']}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

            </div>


        </div>
		@endforeach
    </div>