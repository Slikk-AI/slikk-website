@extends('frontnew.layouts.layout')
@section('frontnew_content')
<style>
    @media(max-width:999px){
                .tab_image-wrapper.is-left{
                    margin-top: 0rem;
                }
                .section-customers{
                    margin-top:-2rem;
                }
                .curly-img{
                    margin-left: -20rem;
                    top: auto;
                    right: auto;
                    width: 20%;
                    bottom: -36%;
                }
            }
    .bottom-section .mb-2 h2{
    /* font-size: .875em;
    line-height: 1.5;
    color: #565359;
    font-weight: bold; */
    padding: 4px;
    font-size: 1.125em;
    line-height: 1.6;
    font-weight: bold;
    font-family: Satoshi,sans-serif;
    }
    .bottom-section .mb-2 p{
    padding: 5px;
    font-size: .9em;
    line-height: 1.6;
    color: #565359;
    margin-top: 8px;
    margin-bottom: 15px;
    font-family: Satoshi,sans-serif;
    }
    .bottom-section .mb-2 p a:link{
        color: blue;
    }
    .bottom-section .mb-2 p a:visited{
        color: #71147e;
    }
    .bottom-section .mb-2 a{
        color: blue
    }
    .bottom-section .mb-2 ul {
        font-size: .9em;
        line-height: 1.6;
        color: #565359;
        margin-top: 8px;
        margin-bottom: 15px;
        font-family: Satoshi,sans-serif;
    }
    @media(min-width:1020px){
        .section-customers{
            margin-top:-4rem;
        }
        .bottom-section {
            margin-top: 4%;
        }
    }
</style>
<style>
    /* New CSS */
    .second-section-div{
        width: 700px;
        margin-left: 11rem;
        margin-top: 5rem;
    }
    .second-section-heading{
        font-size: 50px;
        display:inline-block;
    }
    .second-section-p{
        font-size: 1.125rem;
        line-height: 38px;
        /* font-weight: 600; */
        padding-bottom: 2rem;
        color: #344054;
    }
    .element-section-bg{
        background: #F3F7FE;
        margin-top: 0.2rem;
        border-radius: 50px;
        margin-left: 20px;
        margin-right: 20px;
    }
    .gl-element-bgimage{
        background: url('http://34.221.127.72/assets/frontend/image/bg-g.png');
        background-repeat: no-repeat;
        background-size: 1528px;
        background-size: 1500px 600px;
        margin-top: 10rem;
        margin-bottom: 3rem;
    }
    .buttons-center-banner{
        margin-left: 11rem;
        padding-bottom: 2rem;
    }
    .elements-image-div{
        right: 10rem!important;
        width: 46rem;
        margin-bottom: -5rem;
    }
    .elemets-img{
        height:auto;
        top: 5rem;
        width: 65rem;
    }
    .elements-icon{
        width: 49px;
        height: 49px;
    }
    .elements-row{
        margin-left:2rem; 
        margin-top: 1.5rem;
    }
    .elements-col-10{
        padding: 0px; 
        border-right: 1px solid black;
        max-width: 66.333333%;
    }
    .elements-col-2{
        padding: 0px;
    }
    .elements-row-icon{
        height: 23.26px;
        width: 23.26px;
    }
    .element-listen{
        margin-top: 4rem;
        margin-bottom: 4rem;
    }
    .element-listen-bg{
        border: 3px solid transparent;
        background: linear-gradient(#F3F7FE, #F3F7FE) padding-box, linear-gradient(to right, #71147E, #F99807, #F11170) border-box;
        border-radius: 50px;
    }
    .element-listen-left-div{
        margin-left: -3rem;
        width:50%;
    }
    .element-listen-image-div{
        right: 0.2rem!important;
        width: 46rem;
        margin-bottom: -5rem;
        margin-top: 1.5rem;
    }
    .element-listen-image{
        height:auto;
        top: 2rem;
        width: 45rem;
    }
    /* .mheading-c{
        color:#71147e
    } */
    .second-section-heading, .second-section-heading span{
        color:#71147e
    }
    .elements-row .col-md-4:last-child .elements-col-10{
        border: 1px solid transparent;
    }
    @media(max-width:999px) {
        .gl-element-bgimage{
            background: url('http://34.221.127.72/assets/frontend/image/bg-g.png');
            background-repeat: no-repeat;
            background-size: 1528px;
            background-size: 500px 550px;
            margin-top: 7rem;
        }
        .second-section-div{
            width: auto;
            margin-left: 0rem;
            margin-top: 2rem;
        }
        .second-section-heading{
            font-size: 2em;
            display:inline-block;
        }
        .buttons-center-banner{
            margin-left:0rem;
        }
        .element-section-bg{
            margin-left: 5px;
            margin-right: 5px;
        }
        .elemets-img{
            width: 30rem;
            padding: 1rem;
            top: 0.5rem;
        }
        .elements-image-div{
            right:15rem!important;
            margin-bottom:2rem;
        }
        .elements-col-10{
            border-right: transparent;
        }
        .element-listen-left-div{
            margin-left: 0rem;
            width: auto;
        }
        .element-listen-image{
            width: 25rem;
            top: -2.5rem;
            right: 18rem;
        }
        .margin-top-testimonial-mweb{
            margin-top:0rem;
        }
    }
</style>
@if(request()->is('teams*'))
<style>
    .elements-image-div{
        right: 5rem!important;
        width: 30rem;
        margin-bottom: -5rem;
    }
    .elemets-img {
        height: auto;
        top: 2rem;
        width: 45rem;
    }
    .element-listen-image-div{
        right: -8rem!important;
        width: 30rem;
    }
    @media (max-width: 999px){
        .elements-image-div {
            right: 4rem!important;
            margin-bottom: 2rem;
        }
        .elemets-img {
            width: 30rem;
            padding: 5rem;
            top: -3.5rem;
        }
        .element-listen-image{
            width: 25rem;
            top: -6rem;
            right: 15rem;
            padding: 4rem;
        }
    }
</style>
@endif
@if(request()->is('features/task-management') || request()->is('use-case/strategy-and-okrs') || request()->is('use-case/roadmaps') || request()->is('use-case/collaboration') || request()->is('use-case/productivity'))
<style>
    @media(min-width:1020px) {
        .task-heading1{
            float: left;
        }
        .left-div p{
            float: left;
        }
    }
</style>
@endif
@if(request()->is('features/task-management') || request()->is('features/file-sharing'))
<style>
    .elemets-img {
        height: auto;
        top: 2rem;
        width: 55rem;
        padding: 5rem;
    }
    .element-listen-image{
        top: 1rem;
        padding: 5rem;
    }
    @media (max-width: 999px){
        .elements-image-div {
            right: 20rem!important;
            margin-bottom: -2rem;
        }
        .elemets-img {
            width: 30rem;
            padding: 5rem;
            top: -4.5rem;
        }
        .element-listen-image{
            right: 22rem;
        }
    }
</style>
@endif
@if(request()->is('teams/engineering'))
<style>
    .elemets-img{
        padding: 4rem;
    }
    @media (max-width: 999px){
        .elemets-img{
            padding: 7rem;
        }
    }
</style>
@endif
@if(request()->is('teams/human-resources'))
<style>
    .elemets-img{
        padding: 4rem;
    }
    @media (max-width: 999px){
        .elemets-img{
            padding: 7rem;
        }
    }
</style>
@endif
@if(request()->is('teams/marketing'))
<style>
    .elemets-img{
        height: auto;
        top: 2rem;
        width: 45rem;
        padding: 6rem;
    }
    @media (max-width: 999px){
        .elemets-img {
            width: 28rem;
            padding: 6rem;
            top: -7rem;
        }
    }
</style>
@endif
@if(request()->is('teams/design') || request()->is('teams/operations'))
<style>
    .elemets-img{
        padding: 4rem;
    }
    .element-listen-image{
        padding:3rem;
    }
    @media (max-width: 999px){
        .elemets-img{
            padding: 7rem;
        }
    }
</style>
@endif
@if(request()->is('use-case/strategy-and-okrs'))
<style>
    .elemets-img{
        height: auto;
        top: -4rem;
        width: 65rem;
        padding: 10rem;
    }
    .element-listen-image{
        height: auto;
        top: -6rem;
        width: 45rem;
        padding: 10rem;
    }
    @media (max-width: 999px){
        .elemets-img {
            width: 30rem;
            padding: 6rem;
            top: -2.5rem;
        }
        .elements-image-div{
            right: 20rem!important;
        }
        .element-listen-image {
            width: 25rem;
            top: -6.5rem;
            padding: 5rem;
            right: 22rem;
        }
    }
</style>
@endif
@if(request()->is('use-case/roadmaps'))
<style>
    .elemets-img{
        height: auto;
        top: -4rem;
        width: 65rem;
        padding: 10rem;
    }
    .element-listen-image{
        height: auto;
        top: -4rem;
        width: 45rem;
        padding: 10rem;
    }
    @media (max-width: 999px){
        .elements-image-div {
            right: 20rem!important;
        }
        .elemets-img {
            width: 30rem;
            padding: 6rem;
            top: -3rem;
        }
        .element-listen-image{
            padding: 15rem;
            top: -17rem;
            right: 13rem;
        }
    }
</style>
@endif
@if(request()->is('use-case/collaboration'))
<style>
    .elemets-img{
        height: auto;
        top: -5rem;
        width: 65rem;
        padding: 12rem;
    }
    .element-listen-image{
        top: -5rem;
        padding: 10rem;
    }
    @media (max-width: 999px){
        .elements-image-div {
            right: 12rem!important;
        }
        .elemets-img {
            top: -12rem;
            padding: 16rem;
        }
        .element-listen-image{
            top: -5.5rem;
            right: 22rem;
            padding: 4rem;
        }
    }
</style>
@endif
@if(request()->is('use-case/productivity'))
<style>
    .elemets-img {
        top: -4rem;
        padding: 10rem;
    }
    .element-listen-image{
        top: -5rem;
        padding: 10rem;
    }
    @media (max-width: 999px){
        .elements-image-div {
            right: 20rem!important;
        }
        .elemets-img{
            padding: 5rem;
        }
        .element-listen-image{
            top: -7rem;
            right: 22rem;
            padding: 5rem;
        }
    }
</style>
@endif
@if(request()->is('industry/software-development'))
<style>
    @media(min-width:1020px) {
        .task-heading1{
            float: left;
        }
        .left-div p{
            float: left;
        }
        .right-row .col-md-4:nth-child(2) .elements-col-10{
            height: 4.5rem;
        }
    }
</style>
@endif
@if(request()->is('industry/education'))
<style>
    @media(min-width:1020px) {    
        .left-row:first-of-type .col-md-4:nth-child(2) .elements-col-10{
            height: 4.5rem;
        }
    }
</style>
@endif
@if(request()->is('teams/engineering'))
<style>
    @media(min-width:1020px) {    
        .left-row:first-of-type .col-md-4:nth-child(2) .elements-col-10{
            height: 3rem;
        }
        .left-row:nth-of-type(2) .col-md-4:nth-child(1) .elements-col-10{
            height: 4.5rem;
        }
        .left-row:nth-of-type(2) .col-md-4:nth-child(2) .elements-col-10{
            height: 4.5rem;
        }
    }
</style>
@endif
@if(request()->is('teams/human-resources'))
<style>
    @media(min-width:1020px) {    
        .left-row:first-of-type .col-md-4:nth-child(2) .elements-col-10{
            height: 3rem;
        }
    }
</style>
@endif
@if(request()->is('teams/marketing'))
<style>
    @media(min-width:1020px) {    
        .right-row .col-md-4:nth-child(1) .elements-col-10{
            height: 6rem;
        }
        .left-row:nth-of-type(2) .col-md-4:nth-child(2) .elements-col-10{
            height: 8rem;
        }
    }
</style>
@endif
@if(request()->is('teams/design'))
<style>
    @media(min-width:1020px) {
        .task-heading1{
            float: left;
        }
        .left-div p{
            float: left;
        }
        .left-row:first-of-type .col-md-4:nth-child(2) .elements-col-10{
            height: 3rem;
        }
        .right-row .col-md-4:nth-child(1) .elements-col-10{
            height: 4.5rem;
        }
        .right-row .col-md-4:nth-child(2) .elements-col-10{
            height: 4.5rem;
        }
    }
</style>
@endif
@if(request()->is('teams/operations'))
<style>
    @media(min-width:1020px) {
        .task-heading1{
            float: left;
        }
        .left-div p{
            float: left;
        }
        .right-row .col-md-4:nth-child(2) .elements-col-10{
            height: 3rem;
        }
    }
</style>
@endif
@if(request()->is('features/time-management') || request()->is('features/goal-management') || request()->is('features/kanban-boards') || request()->is('features/gantt-charts') || request()->is('features/reporting-and-analytics') || request()->is('features/nudge-cards') || request()->is('features/schedule-meeting') || request()->is('features/import') || request()->is('use-case/sales') || request()->is('use-case/startup') || request()->is('use-case/remote-work') || request()->is('use-case/hr'))
<style>
    @media (min-width: 1020px) {
        .elemets-img{
        width: 35rem;
        top: 3rem;
        }
        .elements-image-div{
            width: 40rem;
        }
        .faq-heading{
            margin-top: 1rem;
        }
        .elements-row .row{
            margin-bottom: 2rem;
        }
        .elements-col-10 p{
            font-size: 0.9em;
        }
        .element-listen-image-div{
            width: 40rem;
        }
        .element-listen-image{
            width: 40rem;
        }
    }
    @media (max-width: 999px){
        .elements-image-div{
            right: 22rem!important;
        }
        .elemets-img {
            width: 25rem;
        }
        .element-listen-image{
            right: 25rem;
            width: 20rem;
        }
    }
</style>
@endif
<!-- <header class="section-home-header">
    <div class="page-padding">
        <div class="padding-top padding-xxhuge">
            <div class="container-large">
                <div class="home-header_wrapper">
                    <div class="center-wrapper home-header_left-wrapper">
                        <div class="margin-top margin-small">
                            <h1 class="home-header_heading home-head"><span class="text-bg text-color-purple">{{($report_data->banner_title!='')?$report_data->banner_title:$report_data->title}}</span></h1>
                        </div>
                        <div class="margin-vertical margin-custom1">
                            <div class="header-p -head home-p">
                                @php
									$element_desc = $report_data->banner_description;
									$element_desc = str_replace('<p','<p class=""',$element_desc);
								    @endphp
                                    {!!html_entity_decode($element_desc)!!}
                                    <br />
                                
                            </div>
                        </div>
                        <div class="button-wrapper-center buttons-wrapper">
                            <a href="#" class="button w-button watch-btnn" style="background-color:#71147e;color:#fff;"
                                aria-label="open lightbox" aria-haspopup="dialog">
                                <div>Slikk in 2 Min</div>
                            </a>
                            <a href="{{ url('http://34.221.127.72/book-a-demo')}}"
                                target="_blank" class="secondary-button w-button">Book a demo</a>
                        </div>
                        <img src="http://34.221.127.72/assets/frontend/image/curly.svg" class="curly-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header> -->
<!--New-->
<section id="widget" class="section-product-feature gl-element-bgimage">
    <div class="page-padding">
        <div class="container-large">
            <div class="padding-top padding-xhuge">
                <div class="feature_component text-center">
                    <div class="text-center second-section-div">
                            <h1 class="faq-heading second-section-heading text-bg text-color-purple">{{($report_data->banner_title!='')?$report_data->banner_title:$report_data->title}}</h1>
                                    @php
									$element_desc = $report_data->banner_description;
									$element_desc = str_replace('<p','<p class="second-section-p"',$element_desc);
								    @endphp
                                    {!!html_entity_decode($element_desc)!!}
                            <div class="buttons-center-banner buttons-wrapper">
                                <a href="#" class="button w-button watch-btnn header-btn"
                                    aria-label="open lightbox" aria-haspopup="dialog">
                                    <div>Slikk in 2 Min</div>
                                </a>
                                <a href="{{ url('http://34.221.127.72/book-a-demo')}}"
                                    target="_blank" class="secondary-button w-button">Book a demo</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('frontnew.customer')
@include('frontnew.elements.elements')
@include('frontnew.testimonial')
@include('frontnew.cta')
<section class="bottom-section">
    <div class="page-padding">
        <div class="container-large">
            <div class="faq-margin margin-vertical margin-huge">
                    @php
                        $desc = $bottom_content;
                        $desc = preg_replace('/\sstyle=("|\').*?("|\')/i', '', $desc);
                    @endphp
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-2">
                        {!! html_entity_decode($desc) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
</section>
@if (count($reportFaqDetail) > 0)
<section class="section-faqs">
    <div class="page-padding">
        <div class="container-large">
            <div class="margin-top-faq margin-vertical margin-huge">
                <div class="faq-margin margin-bottom margin-xlarge"><h1 class="text-weight-bold faq-h3">FAQ's</h1></div>
                <div class="row">
                    @foreach ($reportFaqDetail as $reportFaqDetailData)
                        @if ($reportFaqDetailData->q1 != '')
                            <div class="col-md-6">
                                <div class="faq-div-border mt-5">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class="fa fa-plus fa-icon" aria-hidden="true"></i>
                                            <i class="fa fa-minus fa-icon display" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-md-10 margin-lef-neg">
                                            <h4 class="faq-h4">{{ $reportFaqDetailData->q1 }}</h4>
                                        </div>
                                    </div>
                                    <p class="faq-p a display">{{ $reportFaqDetailData->a1 }}</p>
                                </div>
                            </div>
                        @endif
                        @if ($reportFaqDetailData->q2 != '')
                            <div class="col-md-6">
                                <div class="faq-div-border mt-5">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class="fa fa-plus fa-icon" aria-hidden="true"></i>
                                            <i class="fa fa-minus fa-icon display" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-md-10 margin-lef-neg">
                                            <h4 class="faq-h4">{{ $reportFaqDetailData->q2 }}</h4>
                                        </div>
                                    </div>
                                    <p class="faq-p a display">{{ $reportFaqDetailData->a2 }}</p>
                                </div>
                            </div>
                        @endif
                        @if ($reportFaqDetailData->q3 != '')
                            <div class="col-md-6">
                                <div class="faq-div-border mt-5">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class="fa fa-plus fa-icon" aria-hidden="true"></i>
                                            <i class="fa fa-minus fa-icon display" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-md-10 margin-lef-neg">
                                            <h4 class="faq-h4">{{ $reportFaqDetailData->q3 }}</h4>
                                        </div>
                                    </div>
                                    <p class="faq-p a display">{{ $reportFaqDetailData->a3 }}</p>
                                </div>
                            </div>
                        @endif
                        @if ($reportFaqDetailData->q4 != '')
                            <div class="col-md-6">
                                <div class="faq-div-border mt-5">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class="fa fa-plus fa-icon" aria-hidden="true"></i>
                                            <i class="fa fa-minus fa-icon display" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-md-10 margin-lef-neg">
                                            <h4 class="faq-h4">{{ $reportFaqDetailData->q4 }}</h4>
                                        </div>
                                    </div>
                                    <p class="faq-p a display">{{ $reportFaqDetailData->a4 }}</p>
                                </div>
                            </div>
                        @endif
                        @if ($reportFaqDetailData->q5 != '')
                            <div class="col-md-6">
                                <div class="faq-div-border mt-5">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class="fa fa-plus fa-icon" aria-hidden="true"></i>
                                            <i class="fa fa-minus fa-icon display" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-md-10 margin-lef-neg">
                                            <h4 class="faq-h4">{{ $reportFaqDetailData->q5 }}</h4>
                                        </div>
                                    </div>
                                    <p class="faq-p a display">{{ $reportFaqDetailData->a5 }}</p>
                                </div>
                            </div>
                        @endif
                        @if ($reportFaqDetailData->q6 != '')
                            <div class="col-md-6">
                                <div class="faq-div-border mt-5">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class="fa fa-plus fa-icon" aria-hidden="true"></i>
                                            <i class="fa fa-minus fa-icon display" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-md-10 margin-lef-neg">
                                            <h4 class="faq-h4">{{ $reportFaqDetailData->q6 }}</h4>
                                        </div>
                                    </div>
                                    <p class="faq-p a display">{{ $reportFaqDetailData->a6 }}</p>
                                </div>
                            </div>
                        @endif
                        @if ($reportFaqDetailData->q7 != '')
                            <div class="col-md-6">
                                <div class="faq-div-border mt-5">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class="fa fa-plus fa-icon" aria-hidden="true"></i>
                                            <i class="fa fa-minus fa-icon display" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-md-10 margin-lef-neg">
                                            <h4 class="faq-h4">{{ $reportFaqDetailData->q7 }}</h4>
                                        </div>
                                    </div>
                                    <p class="faq-p a display">{{ $reportFaqDetailData->a7 }}</p>
                                </div>
                            </div>
                        @endif
                        @if ($reportFaqDetailData->q8 != '')
                            <div class="col-md-6">
                                <div class="faq-div-border mt-5">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class="fa fa-plus fa-icon" aria-hidden="true"></i>
                                            <i class="fa fa-minus fa-icon display" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-md-10 margin-lef-neg">
                                            <h4 class="faq-h4">{{ $reportFaqDetailData->q8 }}</h4>
                                        </div>
                                    </div>
                                    <p class="faq-p a display">{{ $reportFaqDetailData->a8 }}</p>
                                </div>
                            </div>
                        @endif
                        @if ($reportFaqDetailData->q9 != '')
                            <div class="col-md-6">
                                <div class="faq-div-border mt-5">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class="fa fa-plus fa-icon" aria-hidden="true"></i>
                                            <i class="fa fa-minus fa-icon display" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-md-10 margin-lef-neg">
                                            <h4 class="faq-h4">{{ $reportFaqDetailData->q9 }}</h4>
                                        </div>
                                    </div>
                                    <p class="faq-p a display">{{ $reportFaqDetailData->a9 }}</p>
                                </div>
                            </div>
                        @endif
                        @if ($reportFaqDetailData->q10 != '')
                            <div class="col-md-6">
                                <div class="faq-div-border mt-5">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class="fa fa-plus fa-icon" aria-hidden="true"></i>
                                            <i class="fa fa-minus fa-icon display" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-md-10 margin-lef-neg">
                                            <h4 class="faq-h4">{{ $reportFaqDetailData->q10 }}</h4>
                                        </div>
                                    </div>
                                    <p class="faq-p a display">{{ $reportFaqDetailData->a10 }}</p>
                                </div>
                            </div>
                        @endif
                        
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<script>
    $(document).ready(function() {
        $('.faq-div-border').click(function() {
        $(this).children('.row').addClass('q');
        $(this).children('.faq-p').removeClass('display');
        $(this).find('.fa-plus').addClass('display');
        $(this).find('.fa-minus').removeClass('display');
        $(this).find('.fa-minus').addClass('act');
    });
    });
    $(document).ready(function() {
        $('.fa-minus').click(function() {
            setTimeout(function(){
                //alert("ok");
                $('.fa-minus').addClass('display');
                $('.fa-plus').removeClass('display');
                $('.faq-p').addClass('display');
            },1000);
        });
    });
</script>
@endsection