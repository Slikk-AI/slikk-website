<!-- <section id="widget" class="section-product-feature">
    <div class="page-padding">
        <div class="container-large">
            <div class="padding-top padding-xhuge">
                <div class="feature_component">
                    <div class="layout-2-col is-reverse">
                        <div class="feature_image-wrapper">
                            <div class="tab_image-wrapper is-left">
                            @if($val_data->image!='')
                                <img
                                    src="{{asset('assets/page/'.$val_data->image)}}"
                                    loading="lazy"
                                    width="545"
                                    alt="Illustration showing product feature"
                                    class="tab_image-1"
                                />
                                @else
                                <img
                                    src="https://hub.slikk.ai/assets/img/block2.png"
                                    loading="lazy"
                                    width="545"
                                    alt="Illustration showing product feature"
                                    class="tab_image-1"
                                />
                                @endif
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
                                    <li style="background: url('https://hub.slikk.ai/assets/frontend/image/work 1.png') no-repeat left center;">{{$val_element_array['element_title']}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<style>
    .h1-heading-size{
        font-size: 2.625em;
    }
    @media (max-width: 999px) {
        .h1-heading-size{
        font-size: 2em;
        }
    }
</style>
<section id="widget" class="section-product-feature mb-4">
    <div class="page-padding element-section-bg">
        <div class="container-large">
            <div class="padding-top padding-xhuge">
                <div class="feature_component">
                    <div class="layout-2-col is-reverse">
                        <div class="feature_image-wrapper">
                            <div class="tab_image-wrapper is-left elements-image-div">
                                    @if($val_data->image!='')
                                        <img src="{{asset('assets/page/'.$val_data->image)}}" loading="lazy" width="545" alt="Illustration showing product feature" class="tab_image-1 elemets-img">
                                    @else
                                        <img src="https://hub.slikk.ai/assets/img/block2.png" loading="lazy" width="545" alt="Illustration showing product feature" class="tab_image-1 elemets-img">
                                    @endif
                                    <div class=""></div>
                            </div>
                        </div>
                        <div class="">
                            <div class="text-center">
                            @if(request()->is('industry/startups'))
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 17.svg" alt="" class="elements-icon">
                            @elseif(request()->is('industry/agencies'))
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 18.svg" alt="" class="elements-icon">
                            @elseif(request()->is('industry/ecommerce'))
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 19.svg" alt="" class="elements-icon">
                            @elseif(request()->is('industry/non-profits'))
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 20.svg" alt="" class="elements-icon">
                            @elseif(request()->is('industry/software-development'))
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 21.svg" alt="" class="elements-icon">
                            @elseif(request()->is('industry/education'))
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 22.svg" alt="" class="elements-icon">
                            @elseif(request()->is('teams/product-management'))
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 6.svg" alt="" class="elements-icon">
                            @elseif(request()->is('teams/engineering'))
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Vector.svg" alt="" class="elements-icon">
                            @elseif(request()->is('teams/human-resources'))
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/human resource.svg" alt="" class="elements-icon">
                            @elseif(request()->is('teams/marketing'))
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Icons.svg" alt="" class="elements-icon">
                            @elseif(request()->is('teams/design'))
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Vector (1).svg" alt="" class="elements-icon">
                            @elseif(request()->is('teams/operations'))
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 7.svg" alt="" class="elements-icon">
                            @elseif(request()->is('features/projects'))
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 33.svg" alt="" class="elements-icon">
                            @elseif(request()->is('features/pods'))
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 34.svg" alt="" class="elements-icon">
                            @elseif(request()->is('features/task-management'))
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 35.svg" alt="" class="elements-icon">
                            @elseif(request()->is('features/file-sharing'))
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 36.svg" alt="" class="elements-icon">
                            @elseif(request()->is('features/workflows'))
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 37.svg" alt="" class="elements-icon">
                            @elseif(request()->is('features/productivity-analytics'))
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 38.svg" alt="" class="elements-icon">
                            @elseif(request()->is('features/docs'))
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 39.svg" alt="" class="elements-icon">
                            @elseif(request()->is('features/ai'))
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 40.svg" alt="" class="elements-icon">
                            @elseif(request()->is('use-case/strategy-and-okrs'))
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Vector (2).svg" alt="" class="elements-icon">
                            @elseif(request()->is('use-case/roadmaps'))
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group (10).svg" alt="" class="elements-icon">
                            @elseif(request()->is('use-case/collaboration'))
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 10.svg" alt="" class="elements-icon">
                            @elseif(request()->is('use-case/productivity'))
                                <img src="https://hub.slikk.ai/assets/frontend/image/icons/Group 11.svg" alt="" class="elements-icon">
                            @else
                            @endif
                            </div>
                            <h1 class="faq-heading mheading-c task-heading1 h1-heading-size">{{$val_data->title}}</h1>
                            <div class="margin-top margin-medium left-div">
                                <p>
                                    @php
                                        $desc = $val_data->description;
                                    @endphp
                                    {!!html_entity_decode($desc)!!}
                                </p>
                                <button class="button mt-4 button-color-th">
                                    Get Started
                                </button>
                                <div class="row mt-4 elements-row left-row">
                                @foreach($element_array as $val_element_array)
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-2 elements-col-2">
                                                <img src="https://hub.slikk.ai/assets/frontend/image/Group 31.png" loading="lazy" alt="Image" class="elements-row-icon">
                                            </div>
                                            <div class="col-md-10 elements-col-10">
                                                <p>{{$val_element_array['element_title']}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>