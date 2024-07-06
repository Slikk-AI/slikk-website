<div class="container">
<style>
   .timeline-p li:before {
    display: block;
    flex-shrink: 0;
    width: 33px;
    height: 33px;
    margin-right: 10px;

    vertical-align: middle;

    background: url('https://slikk.ai/assets/img/li.png') no-repeat left center;
    background-size: contain;

    content: '';
}

.timeline-p li {
    list-style: none;
    display: flex;
    margin-bottom:20px;
    font-size: 14px;
}
.mtr-3{
    margin-top: 3rem;
}
</style>
<div class="row marb_50" style="background: #FDF6FF 0% 0% no-repeat padding-box;">

        <div class="col-sm-7 timeline-right text-center">
            @if($val_data->image!='')
				 <img src="{{asset('assets/page/'.$val_data->image)}}" class="zoom mtr-3" style="width:100%;height:auto;">
									
								@else
									  <img src="https://slikk.ai/assets/img/block2.png" class="zoom" style="width:100%;height:auto;">
								@endif
           

        </div>

        <div class="col-sm-5 timeline-left  d-flex align-items-center pad20">
            <div class="timeline-cont">
                <h3 class="timeline-title" style="text-align:left;padding-bottom:0px">{{$val_data->title}}</h3>
                <b class="sub_all">
				 @php
									$desc = $val_data->description;
								@endphp
								{!!html_entity_decode($desc)!!}
				</b>

                <ul class="timeline-p" style="margin-top: 20px;">
					@foreach($element_array as $val_element_array)
                    <li>{{$val_element_array['element_title']}}</li>
					@endforeach
                </ul>

            </div>
        </div>


    </div>
    </div>
