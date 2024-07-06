@extends('frontnew.layouts.layout')
@section('frontnew_content')
<div class="section-filler-block-for-banner-3-5rem"></div>
<section class="section-blogpost">
    <div class="page-padding">
        <div class="container-large">
            <div class="padding-top padding-xxlarge">
                <div class="blogpost_wrapper">
                    <h1 class="heading-large max-width-large">{{$BlogDetails[0]->title}}</h1>
                    <div class="blogpost_meta-wrapper max-width-large">
                        <div class="blogpost_meta-left-wrapper">
                            <div class="blogs-thumnail-meta-wrapper">
                                <div class="text-size-xsmall text-color-light-grey">{{$BlogDetails[0]->category_name}}</div>
                                <div class="blogs-thumbnail-meta-divider"></div>
                                <div class="text-size-xsmall text-color-light-grey">{{date('d M Y', strtotime($BlogDetails[0]->publish_date))}}</div>
                                <!-- <div class="blogs-thumbnail-meta-divider"></div>
                                <div class="text-size-xsmall text-color-light-grey">11 mins read</div> -->
                            </div>
                        </div>
                        <div class="blogpost_meta-right-wrapper">
                            <div class="text-size-xsmall text-color-light-grey">Share</div>
                            <div class="social-links-wrapper">
                                <div class="blogpost_social-link-wrapper">
                                    <div class="social-link-icon w-embed">
                                        <a
                                            class="social-link-icon"
                                            target="_blank"
                                            title="Tweet"
                                            onclick="window.open(this.href, 'twitter-share');return false;"
                                            href="#"
                                        >
                                            <div></div>
                                        </a>
                                    </div>
                                    <div class="descriptive-text">Twitter Link</div>
                                </div>
                                <div class="blogpost_social-link-wrapper">
                                    <div class="social-link-icon w-embed">
                                        <a
                                            class="social-link-icon"
                                            target="_blank"
                                            title="Tweet"
                                            onclick="window.open(this.href, 'fb-share');return false;"
                                            href="#"
                                        >
                                            <div></div>
                                        </a>
                                    </div>
                                    <div class="descriptive-text">Facebook Link</div>
                                </div>
                                <div class="blogpost_social-link-wrapper">
                                    <div class="social-link-icon w-embed">
                                        <a
                                            class="social-link-icon"
                                            target="_blank"
                                            title="Tweet"
                                            onclick="window.open(this.href);return false;"
                                            href="#"
                                        >
                                            <div></div>
                                        </a>
                                    </div>
                                    <div class="descriptive-text">Linkedin Link</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        style="background-image: url('{{url('assets/blog/'.$BlogDetails[0]->image_path)}}');"
                        class="blogpost_main-image-wrapper"
                    ></div>
                    <div class="margin-top margin-xlarge">
                        <div class="blogpost_rich-text max-width-large w-richtext">
                            @php $desc = $BlogDetails[0]->description;
                                $desc = preg_replace('/\sstyle=("|\').*?("|\')/i', '', $desc);
                            @endphp
		                    {!!html_entity_decode($desc) !!}
                            @foreach($reportSectionDetails as $reportSectionDetailData)
					            @if($reportSectionDetailData->section_type=='Content Section')
                                <h2>{{$reportSectionDetailData->title}}</h2>
                                {!!html_entity_decode($reportSectionDetailData->description)!!}
                                @endif
                                @if($reportSectionDetailData->section_type=='Image Section')
                                    @if($reportSectionDetailData->image_path!='')
                                        <figure class="blog-figure w-richtext-figure-type-image w-richtext-align-fullwidth" style="max-width: 4713pxpx;">
                                            <div><img src="{{asset('assets/blog/media/'.$reportSectionDetailData->image_path)}}" loading="lazy" alt="{{$reportSectionDetailData->title}}" /></div>
                                        </figure>
                                    @endif
					            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="max-width-large w-condition-invisible">
                        <div class="margin-vertical margin-large"><h3 class="text-weight-bold text-align-center">FAQs</h3></div>
                        <div class="faqs_wrapper">
                            <div class="faqs_item-wrapper w-condition-invisible">
                                <div id="faq-open" class="faqs_item-heading-wrapper">
                                    <h2 class="heading-small text-weight-bold w-dyn-bind-empty"></h2>
                                    <div class="faqs-arrow w-embed" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(180deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.2895 8.45929L5.63955 14.1193C5.54582 14.2122 5.47143 14.3228 5.42066 14.4447C5.36989 14.5666 5.34375 14.6973 5.34375 14.8293C5.34375 14.9613 5.36989 15.092 5.42066 15.2139C5.47143 15.3357 5.54582 15.4463 5.63955 15.5393C5.82691 15.7255 6.08036 15.8301 6.34455 15.8301C6.60873 15.8301 6.86219 15.7255 7.04955 15.5393L12.0495 10.5893L16.9995 15.5393C17.1869 15.7255 17.4404 15.8301 17.7045 15.8301C17.9687 15.8301 18.2222 15.7255 18.4095 15.5393C18.504 15.4467 18.5792 15.3362 18.6307 15.2144C18.6822 15.0925 18.709 14.9616 18.7095 14.8293C18.709 14.697 18.6822 14.5661 18.6307 14.4442C18.5792 14.3223 18.504 14.2119 18.4095 14.1193L12.7595 8.45929C12.6659 8.35778 12.5523 8.27677 12.4258 8.22136C12.2993 8.16596 12.1627 8.13735 12.0245 8.13735C11.8864 8.13735 11.7498 8.16596 11.6233 8.22136C11.4968 8.27677 11.3832 8.35778 11.2895 8.45929Z"
                                                fill="black"
                                            ></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="faqs_paragraph" style="height: 0px;"><p class="w-dyn-bind-empty"></p></div>
                            </div>
                            <div class="faqs_item-wrapper w-condition-invisible">
                                <div class="faqs_item-heading-wrapper">
                                    <h2 class="heading-small text-weight-bold w-dyn-bind-empty"></h2>
                                    <div class="faqs-arrow w-embed" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(180deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.2895 8.45929L5.63955 14.1193C5.54582 14.2122 5.47143 14.3228 5.42066 14.4447C5.36989 14.5666 5.34375 14.6973 5.34375 14.8293C5.34375 14.9613 5.36989 15.092 5.42066 15.2139C5.47143 15.3357 5.54582 15.4463 5.63955 15.5393C5.82691 15.7255 6.08036 15.8301 6.34455 15.8301C6.60873 15.8301 6.86219 15.7255 7.04955 15.5393L12.0495 10.5893L16.9995 15.5393C17.1869 15.7255 17.4404 15.8301 17.7045 15.8301C17.9687 15.8301 18.2222 15.7255 18.4095 15.5393C18.504 15.4467 18.5792 15.3362 18.6307 15.2144C18.6822 15.0925 18.709 14.9616 18.7095 14.8293C18.709 14.697 18.6822 14.5661 18.6307 14.4442C18.5792 14.3223 18.504 14.2119 18.4095 14.1193L12.7595 8.45929C12.6659 8.35778 12.5523 8.27677 12.4258 8.22136C12.2993 8.16596 12.1627 8.13735 12.0245 8.13735C11.8864 8.13735 11.7498 8.16596 11.6233 8.22136C11.4968 8.27677 11.3832 8.35778 11.2895 8.45929Z"
                                                fill="currentColor"
                                            ></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="faqs_paragraph" style="height: 0px;"><p class="w-dyn-bind-empty"></p></div>
                            </div>
                            <div class="faqs_item-wrapper w-condition-invisible">
                                <div class="faqs_item-heading-wrapper">
                                    <h2 class="heading-small text-weight-bold w-dyn-bind-empty"></h2>
                                    <div class="faqs-arrow w-embed" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(180deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.2895 8.45929L5.63955 14.1193C5.54582 14.2122 5.47143 14.3228 5.42066 14.4447C5.36989 14.5666 5.34375 14.6973 5.34375 14.8293C5.34375 14.9613 5.36989 15.092 5.42066 15.2139C5.47143 15.3357 5.54582 15.4463 5.63955 15.5393C5.82691 15.7255 6.08036 15.8301 6.34455 15.8301C6.60873 15.8301 6.86219 15.7255 7.04955 15.5393L12.0495 10.5893L16.9995 15.5393C17.1869 15.7255 17.4404 15.8301 17.7045 15.8301C17.9687 15.8301 18.2222 15.7255 18.4095 15.5393C18.504 15.4467 18.5792 15.3362 18.6307 15.2144C18.6822 15.0925 18.709 14.9616 18.7095 14.8293C18.709 14.697 18.6822 14.5661 18.6307 14.4442C18.5792 14.3223 18.504 14.2119 18.4095 14.1193L12.7595 8.45929C12.6659 8.35778 12.5523 8.27677 12.4258 8.22136C12.2993 8.16596 12.1627 8.13735 12.0245 8.13735C11.8864 8.13735 11.7498 8.16596 11.6233 8.22136C11.4968 8.27677 11.3832 8.35778 11.2895 8.45929Z"
                                                fill="currentColor"
                                            ></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="faqs_paragraph" style="height: 0px;"><p class="w-dyn-bind-empty"></p></div>
                            </div>
                            <div class="faqs_item-wrapper w-condition-invisible">
                                <div class="faqs_item-heading-wrapper">
                                    <h2 class="heading-small text-weight-bold w-dyn-bind-empty"></h2>
                                    <div class="faqs-arrow w-embed" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(180deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.2895 8.45929L5.63955 14.1193C5.54582 14.2122 5.47143 14.3228 5.42066 14.4447C5.36989 14.5666 5.34375 14.6973 5.34375 14.8293C5.34375 14.9613 5.36989 15.092 5.42066 15.2139C5.47143 15.3357 5.54582 15.4463 5.63955 15.5393C5.82691 15.7255 6.08036 15.8301 6.34455 15.8301C6.60873 15.8301 6.86219 15.7255 7.04955 15.5393L12.0495 10.5893L16.9995 15.5393C17.1869 15.7255 17.4404 15.8301 17.7045 15.8301C17.9687 15.8301 18.2222 15.7255 18.4095 15.5393C18.504 15.4467 18.5792 15.3362 18.6307 15.2144C18.6822 15.0925 18.709 14.9616 18.7095 14.8293C18.709 14.697 18.6822 14.5661 18.6307 14.4442C18.5792 14.3223 18.504 14.2119 18.4095 14.1193L12.7595 8.45929C12.6659 8.35778 12.5523 8.27677 12.4258 8.22136C12.2993 8.16596 12.1627 8.13735 12.0245 8.13735C11.8864 8.13735 11.7498 8.16596 11.6233 8.22136C11.4968 8.27677 11.3832 8.35778 11.2895 8.45929Z"
                                                fill="currentColor"
                                            ></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="faqs_paragraph" style="height: 0px;"><p class="w-dyn-bind-empty"></p></div>
                            </div>
                        </div>
                    </div>
                    <div class="blogpost_author-wrapper max-width-large">
                        <div class="blogpost_author-top-wrapper">
                            <div style="background-image: none;" class="blogpost_author-image-wrapper"></div>
                            <div class="blogpost_author-name-wrapper">
                                <div class="text-weight-medium">Admin</div>
                                <div class="margin-top margin-xxsmall"><div class="text-weight-medium text-size-xsmall text-color-medium-grey w-dyn-bind-empty"></div></div>
                            </div>
                        </div>
                        <div class="blogpost_author-bottom-wrapper"><div class="text-size-small text-color-medium-grey text-style-italic w-dyn-bind-empty"></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-blog-share">
    <div class="page-padding">
        <div class="container-large">
            <div class="padding-vertical padding-large">
                <div class="blog-share_wrapper max-width-large">
                    <div class="text-size-xsmall text-color-dark-grey">Like the article? Share it with your friends!</div>
                    <div class="margin-top margin-custom1">
                        <div class="social-links-wrapper">
                            <div class="blogpost_social-link-wrapper">
                                <div class="social-link-icon w-embed">
                                    <a
                                        class="social-link-icon"
                                        target="_blank"
                                        title="Tweet"
                                        onclick="window.open(this.href, 'twitter-share');return false;"
                                        href="#"
                                    >
                                        <div></div>
                                    </a>
                                </div>
                                <div class="descriptive-text">Twitter Link</div>
                            </div>
                            <div class="blogpost_social-link-wrapper">
                                <div class="social-link-icon w-embed">
                                    <a
                                        class="social-link-icon"
                                        target="_blank"
                                        title="Tweet"
                                        onclick="window.open(this.href, 'fb-share');return false;"
                                        href="#"
                                    >
                                        <div></div>
                                    </a>
                                </div>
                                <div class="descriptive-text">Facebook Link</div>
                            </div>
                            <div class="blogpost_social-link-wrapper">
                                <div class="social-link-icon w-embed">
                                    <a
                                        class="social-link-icon"
                                        target="_blank"
                                        title="Tweet"
                                        onclick="window.open(this.href);return false;"
                                        href="#"
                                    >
                                        <div></div>
                                    </a>
                                </div>
                                <div class="descriptive-text">Linkedin Link</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-blog-related">
    <div class="page-padding">
        <div class="container-large">
            <div class="padding-vertical padding-large">
                <h3 class="heading-medium is-blogs">Related articles</h3>
                <div class="margin-top margin-large">
                    <div class="w-dyn-list">
                        <div role="list" class="blogs-all_wrapper w-dyn-items">
                            @foreach($ResultPopularBlogs as $ResultPopularBlogData)
                            <div role="listitem" class="blogs-all_single-wrapper w-dyn-item">
                                <a href="{{ url('blog/' .$ResultPopularBlogData->slug.'/'. $ResultPopularBlogData->url) }}" class="blog-link-wrapper w-inline-block">
                                    <div
                                        style="background-image: url('{{asset('assets/blog/'.$ResultPopularBlogData->image_path)}}');"
                                        class="blogs-thumbnail-image-wrapper"
                                    ></div>
                                    <div class="margin-vertical margin-custom2"><h3 class="heading-xsmall is-blogs">{{$ResultPopularBlogData->title}}</h3></div>
                                    <div class="blogs-thumnail-meta-wrapper">
                                        <div class="text-size-xsmall text-color-light-grey">{{$ResultPopularBlogData->slug}}</div>
                                        <div class="blogs-thumbnail-meta-divider"></div>
                                        <div class="text-size-xsmall text-color-light-grey">{{date('d M Y', strtotime($ResultPopularBlogData->publish_date))}}</div>
                                        <!-- <div class="blogs-thumbnail-meta-divider"></div>
                                        <div class="text-size-xsmall text-color-light-grey">12 mins read</div> -->
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('frontnew.cta')
@endsection