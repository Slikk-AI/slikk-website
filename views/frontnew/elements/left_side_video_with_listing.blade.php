<section id="widget" class="section-product-feature">
    <div class="page-padding">
        <div class="container-large">
            <div class="padding-top padding-xhuge">
                <div class="feature_component">
                    <div class="layout-2-col is-reverse">
                        <div class="feature_image-wrapper">
                            <div class="tab_image-wrapper is-left">
                            @php
                                $emd = $val_data->embed;
                            @endphp
                            {!!html_entity_decode($emd)!!}
                                <div class=""></div>
                            </div>
                        </div>
                        <div class="feature_content-wrapper">
                            <h2 class="faq-heading">{{$val_data->title}}</h2>
                            <div class="margin-top margin-medium">
                                @php
									$desc = $val_data->description;
								@endphp
								{!!html_entity_decode($desc)!!}
                                <ul class="text-ul">
                                    @foreach($element_array as $val_element_array)
                                    <li style="background: url('http://34.221.127.72/assets/frontend/image/work 1.png') no-repeat left center;">{{$val_element_array['element_title']}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>