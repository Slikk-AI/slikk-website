<div class="container">

            <div class="row marb_50">
			 @foreach($element_array as $val_element_array)
                <div class="col-sm-4 d-flex align-items-center">
                    <div class="video-cont">
                        <span><i class="fa fa-play-circle" aria-hidden="true"></i><span>
                                <h5>{{$val_element_array['element_title']}}</h5>
                    </div>
                </div>
                @endforeach

            </div>

        </div>