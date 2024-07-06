@extends('frontnew.layouts.layout')
@section('frontnew_content')
<style>
        @media(min-width:1020px){
            .row{
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .col-md-7{
            flex: 0 0 58.333333%;
            max-width: 58.333333%;
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }
        .testimonials-components_wrapper{
            column-count:2;
        }
        .col-md-4{
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            flex: 0 0 41.666667%;
            max-width: 41.666667%;
        }
        .section-home-analyze{
            margin-bottom: 4rem;
        }
        .section-customers{
            margin-top: -4rem;
            margin-bottom: -1.5rem;
        }
        }
        @media(max-width:999px){
            .section-home-analyze{
                margin-top: -0.1rem;
            }
            .section-testimonials{
                margin-top: 2rem;
            }
            .curly-img{
                    margin-left: -20rem;
                    top: auto;
                    right: auto;
                    width: 20%;
                    bottom: -36%;
             }
            .section-customers{
                margin-top: -2rem;
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
            .bottom-section{
                margin-top:4%;
            }
            .bottom-section .mb-2 ul{
                font-size: .9em;
                line-height: 1.6;
                color: #565359;
                margin-top: 8px;
                margin-bottom: 15px;
                font-family: Satoshi,sans-serif;
            }
</style>
<header class="section-home-header">
    <div class="page-padding">
        <div class="padding-top padding-xxhuge">
            <div class="container-large">
                <div class="home-header_wrapper">
                    <div class="center-wrapper home-header_left-wrapper">
                        <div class="margin-top margin-small">
                            <h1 class="home-header_heading home-head"><span class="text-bg text-color-purple">AI Powered Productivity & Collaboration Tool</h1>
                        </div>
                        <div class="margin-vertical margin-custom1">
                            <div class="home-head home-p">
                                <p>Plan, Lead & Achieve faster with Slikk AI. You can now collaborate & personalise workspace according to your teams.</p>
                            </div>
                        </div>
                        <div class="text-center header-img">
                            <div class="row">
                                <div class="col-md-4-top"><h4 class="less-call">50% Less</h4><h5 class="f-weight">Calls & Meetings</h5></div>
                                <div class="col-md-4-top"><h4 class="more-goal">45% More</h4><h5 class="f-weight">Goals Achieved</h5></div>
                                <div class="col-md-4-top"><h4 class="x-productivity">3X</h4><h5 class="f-weight">Increase in Productivity</h5></div>
                            </div>
                        </div>
                        <div class="button-wrapper-center buttons-wrapper">
                            <a href="#" class="button w-button watch-btnn" style="background-color:#71147e;color:#fff;"
                                aria-label="open lightbox" aria-haspopup="dialog">
                                <div>Slikk in 2 Min</div>
                            </a>
                            <a href="{{ url('https://hub.slikk.ai/book-a-demo')}}" class="secondary-button w-button">Book a demo</a>
                        </div>
                        <img src="https://hub.slikk.ai/assets/frontend/image/curly.svg" class="curly-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@include('frontnew.customer')
<style>
    .tabs-horizontal-menu{
        border-top-left-radius: 8px;
        border-bottom-left-radius: 8px;
        flex-direction: row;
        justify-content: center;
        padding: 16px 8px;
        display: flex;
    }
    .tab-link-dashboard{
        margin: 4px;
        padding-top: 8px;
        padding-bottom: 8px;
    }
    .tab-link-dashboard{
        color: #14141e;
        background-color: transparent;
        border-radius: 36px;
        margin: 4px;
        padding-top: 8px;
        padding-bottom: 8px;
    }
    .tab-link-dashboard.w--current{
        border: 0.5px solid rgba(204,193,255,.5);
        color: #fff;
        background-color: #71147e;
        border-radius: 36px;
        font-weight: 600;
    }
    .w-tab-link{
        vertical-align: top;
        text-align: left;
        cursor: pointer;
        padding: 9px 30px;
        text-decoration: none;
        display: inline-block;
        position: relative;
    }
    .w-inline-block {
        max-width: 100%;
    }
    .tabs-horizontal-content.white {
        box-shadow: 1px 1px 40px -20px #cfc6ff;
        background-color: #fff;
    }
    .tabs-horizontal-content {
        border: 1px solid rgba(204,193,255,.5);
        border-radius: 16px;
        padding: 64px 72px;
    }
    .w-tab-content {
        display: block;
        position: relative;
        overflow: hidden;
    }
    .w-tab-pane {
        display: block;
        position: relative;
    }
    .w-layout-grid {
        grid-row-gap: 16px;
        grid-column-gap: 16px;
        grid-template-rows: auto auto;
        grid-template-columns: 1fr 1fr;
        grid-auto-columns: 1fr;
        display: grid;
    }
    .title-section {
        color: #ffb800;
        letter-spacing: 1.2px;
        text-transform: uppercase;
        padding-left: 0;
        padding-right: 0;
        font-size: .85rem;
        font-weight: 500;
        line-height: 1.4;
    }
    .heading-h2 {
        color: #1d115a;
        font-size: 2.5em;
        line-height: 120%;
    }
    .paragraph-p {
        color: #14141e;
        padding-left: 0;
        padding-right: 0;
        text-decoration: none;
    }
    .paragraph-p.regular {
        padding-top: 8px;
        padding-bottom: 8px;
    }
    @media(max-width:999px){
        .tabs-horizontal-content{
            padding: 40px 50px;
        }
        .w-layout-grid{
            grid-template-columns: 1fr;
        }
        /* .w-inline-block{
            max-width: 25%;
        } */
        .tab-link-dashboard.w--current{
            color: #71147e;
            background: transparent;
            border: transparent;
        }
        .w-tab-link{
            padding: 9px 10px;
        }
    }
</style>
<section class="section-home-collect" style="margin-bottom: 10rem;">
    <div class="page-padding">
        <div class="container-large">
            <div class="margin-home-div">
                <div class="feature_component">
                    <div class="tabs-horizontal-menu w-tab-menu" role="tablist">
                        <a data-w-tab="Presence" class="tab-link-dashboard w-inline-block w-tab-link w--current" id="w-tabs-0-data-w-tab-0" role="tab" aria-controls="w-tabs-0-data-w-pane-0" aria-selected="true">
                            <div>Industry</div>
                        </a>
                        <a data-w-tab="Livestream" class="tab-link-dashboard w-inline-block w-tab-link" id="w-tabs-0-data-w-tab-1" role="tab" aria-controls="w-tabs-0-data-w-pane-1" aria-selected="false" tabindex="-1">
                            <div>Team</div>
                        </a>
                        <a data-w-tab="Wellness360" class="tab-link-dashboard w-inline-block w-tab-link" id="w-tabs-0-data-w-tab-2" role="tab" aria-controls="w-tabs-0-data-w-pane-2" aria-selected="false" tabindex="-1">
                            <div>Features</div>
                        </a>
                        <a data-w-tab="Activity" class="tab-link-dashboard w-inline-block w-tab-link" id="w-tabs-0-data-w-tab-3" role="tab" aria-controls="w-tabs-0-data-w-pane-3" aria-selected="false" tabindex="-1">
                            <div>Use Cases</div>
                        </a>
                    </div>
                    <div class="tabs-horizontal-content white w-tab-content">
                        <div data-w-tab="Presence" class="w-tab-pane w--tab-active" id="w-tabs-0-data-w-pane-0" role="tabpanel" aria-labelledby="w-tabs-0-data-w-tab-0" style="opacity: 1; transition: opacity 300ms ease 0s;">
                            <div class="w-layout-grid div-grid-2-column">
                                <div>
                                    <h2 class="title-section">Industry</h2>
                                    <h2 class="heading-h2">Get Work Done Without Chaos</h2>
                                    <div>
                                        <p class="paragraph-p regular">Slikk AI organizes tasks in terms of priority. Each task workflow shows the brief, stakeholders, and deadlines. If the requirement changes anytime, all tasks shuffle accordingly. Further, there is an easy search option and multitask toolbar.</p>
                                        <a class="button mt-4">Get Started</a>
                                    </div>
                                </div>
                                <div id="w-node-_19c7936d-9e3b-d45c-5245-3c931c416ec7-c2817d92" class="tab-image-div">
                                    <img src="https://hub.slikk.ai/assets/frontend/image/Tasks.png" alt="" />
                                </div>
                            </div>
                        </div>
                        <div data-w-tab="Livestream" class="w-tab-pane" id="w-tabs-0-data-w-pane-1" role="tabpanel" aria-labelledby="w-tabs-0-data-w-tab-1" style="">
                            <div class="w-layout-grid div-grid-2-column">
                                <div>
                                    <h2 class="title-section">Team</h2>
                                    <h2 class="heading-h2">Get Work Done Without Chaos</h2>
                                    <div>
                                        <p class="paragraph-p regular">Slikk AI organizes tasks in terms of priority. Each task workflow shows the brief, stakeholders, and deadlines. If the requirement changes anytime, all tasks shuffle accordingly. Further, there is an easy search option and multitask toolbar.</p>
                                        <a class="button mt-4">Get Started</a>
                                    </div>
                                </div>
                                <div id="w-node-_19c7936d-9e3b-d45c-5245-3c931c416ec7-c2817d92" class="tab-image-div">
                                    <img src="https://hub.slikk.ai/assets/frontend/image/Pods%20(1).png" alt="" />
                                </div>
                            </div>
                        </div>
                        <div data-w-tab="Wellness360" class="w-tab-pane" id="w-tabs-0-data-w-pane-2" role="tabpanel" aria-labelledby="w-tabs-0-data-w-tab-2" style="">
                            <div class="w-layout-grid div-grid-2-column">
                                <div>
                                    <h2 class="title-section">Features</h2>
                                    <h2 class="heading-h2">Get Work Done Without Chaos</h2>
                                    <div>
                                        <p class="paragraph-p regular">Slikk AI organizes tasks in terms of priority. Each task workflow shows the brief, stakeholders, and deadlines. If the requirement changes anytime, all tasks shuffle accordingly. Further, there is an easy search option and multitask toolbar.</p>
                                        <a class="button mt-4">Get Started</a>
                                    </div>
                                </div>
                                <div id="w-node-_19c7936d-9e3b-d45c-5245-3c931c416ec7-c2817d92" class="tab-image-div">
                                    <img src="https://hub.slikk.ai/assets/frontend/image/Goals (1).png" alt="" />
                                </div>
                            </div>
                        </div>
                        <div data-w-tab="Activity" class="w-tab-pane" id="w-tabs-0-data-w-pane-3" role="tabpanel" aria-labelledby="w-tabs-0-data-w-tab-3" style="">
                            <div class="w-layout-grid div-grid-2-column">
                                <div>
                                    <h2 class="title-section">Use Cases</h2>
                                    <h2 class="heading-h2">Get Work Done Without Chaos</h2>
                                    <div>
                                        <p class="paragraph-p regular">Slikk AI organizes tasks in terms of priority. Each task workflow shows the brief, stakeholders, and deadlines. If the requirement changes anytime, all tasks shuffle accordingly. Further, there is an easy search option and multitask toolbar.</p>
                                        <a class="button mt-4">Get Started</a>
                                    </div>
                                </div>
                                <div id="w-node-_19c7936d-9e3b-d45c-5245-3c931c416ec7-c2817d92" class="tab-image-div">
                                    <img src="https://hub.slikk.ai/assets/frontend/image/Time%20(1).png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-testimonials">
    <div class="page-padding">
        <div class="container-large-testi">
            <div class="testi-contain padding-vertical padding-huge">
                <div id="eb7d6580-4a6e-9b00-3d26-0956fad64233" class="testimonials_wrapper testimonial-widthh-bef">
                    <h2 class="heading-medium text-center">Don't just take our word for it</h2>
                    <div class="margin-top margin-large">
                        <div class="row">
                            <div class="col-4-testi-home mb-4">
                                <div class="hero_form">
                                    <div class="testimonial-wrapper  testi-div">
                                        <img src="{{ url('assets/frontend/image/logorevealer.png')}}" alt="" class="testi-img1">
                                        <h6>  Slikk AI is the solution that I found to be the best fit for how we work. It’s customizable enough for each person on the team to easily see the bigger picture and get things done. </h6>
                                        <p>- Bernard<br/>  CEO at MyRevealer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4-testi-home mb-4">
                                <div class="hero_form testimonial-background">
                                    <div class="testimonial-wrapper testi-div">
                                        <img src="https://hub.slikk.ai/assets/img/grabguidance.png" alt="" class="testi-img2">
                                        <h6>  Slikk AI is an online tool for managing projects, tasks, workloads, and more, automatically and dynamically scheduling work for your whole team, even as factors change. </h6>
                                        <p>- Himanshu Puri<br/> COO at GrabGuidance</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4-testi-home mb-4">
                                <div class="hero_form" style="width:80%">

                                    <h4 class="heading-form">Write To Us</h4>
                                    <form class="contact-form " method="post" action="{{ url('save_contact') }}">
                                        @csrf
                                        <input type="text" class="form-control inputbox" name="name" id="name" placeholder="Your Name" required="">
                                        <input type="email" class="form-control inputbox" name="email" id="name" placeholder="Your Email" required="">
            
                                        <select class="form-control inputbox " id="country"  name="country" placeholder="Select Country" required="">
                                            <option value="">Country</option>
                                            <option value="us">United States +(1)</option>
                                            <option value="gb">United Kingdom +(44)</option>
                                            <option value="jp">Japan +(81)</option>
                                            <option value="af">Afghanistan +(93)</option>
                                            <option value="al">Albania +(355)</option>
                                            <option value="dz">Algeria +(213)</option>
                                            <option value="as">American Samoa +(1-684)</option>
                                            <option value="ad">Andorra +(376)</option>
                                            <option value="ao">Angola +(244)</option>
                                            <option value="ai">Anguilla +(1-264)</option>
                                            <option value="aq">Antarctica +(672)</option>
                                            <option value="ag">Antigua and Barbuda +(1-268)</option>
                                            <option value="ar">Argentina +(54)</option>
                                            <option value="am">Armenia +(374)</option>
                                            <option value="aw">Aruba +(297)</option>
                                            <option value="au">Australia +(61)</option>
                                            <option value="at">Austria +(43)</option>
                                            <option value="az">Azerbaijan +(994)</option>
                                            <option value="bs">Bahamas +(1-242)</option>
                                            <option value="bh">Bahrain +(973)</option>
                                            <option value="bd">Bangladesh +(880)</option>
                                            <option value="bb">Barbados +(1-246)</option>
                                            <option value="by">Belarus +(375)</option>
                                            <option value="be">Belgium +(32)</option>
                                            <option value="bz">Belize +(501)</option>
                                            <option value="bj">Benin +(229)</option>
                                            <option value="bm">Bermuda +(1-441)</option>
                                            <option value="bt">Bhutan +(975)</option>
                                            <option value="bo">Bolivia +(591)</option>
                                            <option value="ba">Bosnia and Herzegowina +(387)</option>
                                            <option value="bw">Botswana +(267)</option>
                                            <option value="bv">Bouvet Island +(47)</option>
                                            <option value="br">Brazil +(55)</option>
                                            <option value="io">British Indian Ocean Territory +(246)</option>
                                            <option value="bn">Brunei Darussalam +(673)</option>
                                            <option value="bg">Bulgaria +(359)</option>
                                            <option value="bf">Burkina Faso +(226)</option>
                                            <option value="bi">Burundi +(257)</option>
                                            <option value="kh">Cambodia +(855)</option>
                                            <option value="cm">Cameroon +(237)</option>
                                            <option value="ca">Canada +(1)</option>
                                            <option value="cv">Cape Verde +(238)</option>
                                            <option value="ky">Cayman Islands +(1-345)</option>
                                            <option value="cf">Central African Republic +(236)</option>
                                            <option value="td">Chad +(235)</option>
                                            <option value="cl">Chile +(56)</option>
                                            <option value="cn">China +(86)</option>
                                            <option value="cx">Christmas Island +(61)</option>
                                            <option value="cc">Cocos (Keeling) Islands +(61)</option>
                                            <option value="co">Colombia +(57)</option>
                                            <option value="km">Comoros +(269)</option>
                                            <option value="cg">Congo Democratic Republic of +(242)</option>
                                            <option value="ck">Cook Islands +(682)</option>
                                            <option value="cr">Costa Rica +(506)</option>
                                            <option value="ci">Cote D'Ivoire +(225)</option>
                                            <option value="hr">Croatia +(385)</option>
                                            <option value="cu">Cuba +(53)</option>
                                            <option value="cy">Cyprus +(357)</option>
                                            <option value="cz">Czech Republic +(420)</option>
                                            <option value="dk">Denmark +(45)</option>
                                            <option value="dj">Djibouti +(253)</option>
                                            <option value="dm">Dominica +(1-767)</option>
                                            <option value="do">Dominican Republic +(1-809)</option>
                                            <option value="tl">Timor-Leste +(670)</option>
                                            <option value="ec">Ecuador +(593)</option>
                                            <option value="eg">Egypt +(20)</option>
                                            <option value="sv">El Salvador +(503)</option>
                                            <option value="gq">Equatorial Guinea +(240)</option>
                                            <option value="er">Eritrea +(291)</option>
                                            <option value="ee">Estonia +(372)</option>
                                            <option value="et">Ethiopia +(251)</option>
                                            <option value="fk">Falkland Islands (Malvinas) +(500)</option>
                                            <option value="fo">Faroe Islands +(298)</option>
                                            <option value="fj">Fiji +(679)</option>
                                            <option value="fi">Finland +(358)</option>
                                            <option value="fr">France +(33)</option>
                                            <option value="gf">French Guiana +(594)</option>
                                            <option value="pf">French Polynesia +(689)</option>
                                            <option value="tf">French Southern Territories +(262)</option>
                                            <option value="ga">Gabon +(241)</option>
                                            <option value="gm">Gambia +(220)</option>
                                            <option value="ge">Georgia +(995)</option>
                                            <option value="de">Germany +(49)</option>
                                            <option value="gh">Ghana +(233)</option>
                                            <option value="gi">Gibraltar +(350)</option>
                                            <option value="gr">Greece +(30)</option>
                                            <option value="gl">Greenland +(299)</option>
                                            <option value="gd">Grenada +(1-473)</option>
                                            <option value="gp">Guadeloupe +(590)</option>
                                            <option value="gu">Guam +(1-671)</option>
                                            <option value="gt">Guatemala +(502)</option>
                                            <option value="gn">Guinea +(224)</option>
                                            <option value="gw">Guinea-bissau +(245)</option>
                                            <option value="gy">Guyana +(592)</option>
                                            <option value="ht">Haiti +(509)</option>
                                            <option value="hm">Heard Island and McDonald Islands +(011)</option>
                                            <option value="hn">Honduras +(504)</option>
                                            <option value="hk">Hong Kong +(852)</option>
                                            <option value="hu">Hungary +(36)</option>
                                            <option value="is">Iceland +(354)</option>
                                            <option value="in">India +(91)</option>
                                            <option value="id">Indonesia +(62)</option>
                                            <option value="ir">Iran (Islamic Republic of) +(98)</option>
                                            <option value="iq">Iraq +(964)</option>
                                            <option value="ie">Ireland +(353)</option>
                                            <option value="il">Israel +(972)</option>
                                            <option value="it">Italy +(39)</option>
                                            <option value="jm">Jamaica +(1-876)</option>
                                            <option value="jp">Japan +(81)</option>
                                            <option value="jo">Jordan +(962)</option>
                                            <option value="kz">Kazakhstan +(7)</option>
                                            <option value="ke">Kenya +(254)</option>
                                            <option value="ki">Kiribati +(686)</option>
                                            <option value="kp">Korea, Democratic People's Republic of +(850)</option>
                                            <option value="kr">South Korea +(82)</option>
                                            <option value="kw">Kuwait +(965)</option>
                                            <option value="kg">Kyrgyzstan +(996)</option>
                                            <option value="la">Lao People's Democratic Republic +(856)</option>
                                            <option value="lv">Latvia +(371)</option>
                                            <option value="lb">Lebanon +(961)</option>
                                            <option value="ls">Lesotho +(266)</option>
                                            <option value="lr">Liberia +(231)</option>
                                            <option value="ly">Libya +(218)</option>
                                            <option value="li">Liechtenstein +(423)</option>
                                            <option value="lt">Lithuania +(370)</option>
                                            <option value="lu">Luxembourg +(352)</option>
                                            <option value="mo">Macao +(853)</option>
                                            <option value="mk">Macedonia, The Former Yugoslav Republic of +(389)</option>
                                            <option value="mg">Madagascar +(261)</option>
                                            <option value="mw">Malawi +(265)</option>
                                            <option value="my">Malaysia +(60)</option>
                                            <option value="mv">Maldives +(960)</option>
                                            <option value="ml">Mali +(223)</option>
                                            <option value="mt">Malta +(356)</option>
                                            <option value="mh">Marshall Islands +(692)</option>
                                            <option value="mq">Martinique +(596)</option>
                                            <option value="mr">Mauritania +(222)</option>
                                            <option value="mu">Mauritius +(230)</option>
                                            <option value="yt">Mayotte +(262)</option>
                                            <option value="mx">Mexico +(52)</option>
                                            <option value="fm">Micronesia, Federated States of +(691)</option>
                                            <option value="md">Moldova +(373)</option>
                                            <option value="mc">Monaco +(377)</option>
                                            <option value="mn">Mongolia +(976)</option>
                                            <option value="ms">Montserrat +(1-664)</option>
                                            <option value="ma">Morocco +(212)</option>
                                            <option value="mz">Mozambique +(258)</option>
                                            <option value="mm">Myanmar +(95)</option>
                                            <option value="na">Namibia +(264)</option>
                                            <option value="nr">Nauru +(674)</option>
                                            <option value="np">Nepal +(977)</option>
                                            <option value="nl">Netherlands +(31)</option>
                                            <option value="an">Netherlands Antilles +(599)</option>
                                            <option value="nc">New Caledonia +(687 )</option>
                                            <option value="nz">New Zealand +(64)</option>
                                            <option value="ni">Nicaragua +(505)</option>
                                            <option value="ne">Niger +(227)</option>
                                            <option value="ng">Nigeria +(234)</option>
                                            <option value="nu">Niue +(683)</option>
                                            <option value="nf">Norfolk Island +(672)</option>
                                            <option value="mp">Northern Mariana Islands +(1-670)</option>
                                            <option value="no">Norway +(47)</option>
                                            <option value="om">Oman +(968)</option>
                                            <option value="pk">Pakistan +(92)</option>
                                            <option value="pw">Palau +(680)</option>
                                            <option value="pa">Panama +(507)</option>
                                            <option value="pg">Papua New Guinea +(675)</option>
                                            <option value="py">Paraguay +(595)</option>
                                            <option value="pe">Peru +(51)</option>
                                            <option value="ph">Philippines +(63)</option>
                                            <option value="pn">Pitcairn +(64)</option>
                                            <option value="pl">Poland +(48)</option>
                                            <option value="pt">Portugal +(351)</option>
                                            <option value="pr">Puerto Rico +(1-787)</option>
                                            <option value="qa">Qatar +(974)</option>
                                            <option value="re">Reunion +(262)</option>
                                            <option value="ro">Romania +(40)</option>
                                            <option value="ru">Russian Federation +(7)</option>
                                            <option value="rw">Rwanda +(250)</option>
                                            <option value="kn">Saint Kitts and Nevis +(1-869)</option>
                                            <option value="lc">Saint Lucia +(1-758)</option>
                                            <option value="vc">Saint Vincent and the Grenadines +(1-784)</option>
                                            <option value="ws">Samoa +(685)</option>
                                            <option value="sm">San Marino +(378)</option>
                                            <option value="st">Sao Tome and Principe +(239)</option>
                                            <option value="sa">Saudi Arabia +(966)</option>
                                            <option value="sn">Senegal +(221)</option>
                                            <option value="sc">Seychelles +(248)</option>
                                            <option value="sl">Sierra Leone +(232)</option>
                                            <option value="sg">Singapore +(65)</option>
                                            <option value="sk">Slovakia (Slovak Republic) +(421)</option>
                                            <option value="si">Slovenia +(386)</option>
                                            <option value="sb">Solomon Islands +(677)</option>
                                            <option value="so">Somalia +(252)</option>
                                            <option value="za">South Africa +(27)</option>
                                            <option value="gs">South Georgia and the South Sandwich Islands +(500)</option>
                                            <option value="es">Spain +(34)</option>
                                            <option value="lk">Sri Lanka +(94)</option>
                                            <option value="sh">Saint Helena, Ascension and Tristan da Cunha +(290)</option>
                                            <option value="pm">St. Pierre and Miquelon +(508)</option>
                                            <option value="sd">Sudan +(249)</option>
                                            <option value="sr">Suriname +(597)</option>
                                            <option value="sj">Svalbard and Jan Mayen Islands +(47)</option>
                                            <option value="sz">Swaziland +(268)</option>
                                            <option value="se">Sweden +(46)</option>
                                            <option value="ch">Switzerland +(41)</option>
                                            <option value="sy">Syrian Arab Republic +(963)</option>
                                            <option value="tw">Taiwan +(886)</option>
                                            <option value="tj">Tajikistan +(992)</option>
                                            <option value="tz">Tanzania, United Republic of +(255)</option>
                                            <option value="th">Thailand +(66)</option>
                                            <option value="tg">Togo +(228)</option>
                                            <option value="tk">Tokelau +(690)</option>
                                            <option value="to">Tonga +(676)</option>
                                            <option value="tt">Trinidad and Tobago +(1-868)</option>
                                            <option value="tn">Tunisia +(216)</option>
                                            <option value="tr">Turkey +(90)</option>
                                            <option value="tm">Turkmenistan +(993)</option>
                                            <option value="tc">Turks and Caicos Islands +(1-649)</option>
                                            <option value="tv">Tuvalu +(688)</option>
                                            <option value="ug">Uganda +(256)</option>
                                            <option value="ua">Ukraine +(380)</option>
                                            <option value="ae">United Arab Emirates +(971)</option>
                                            <option value="gb">United Kingdom +(44)</option>
                                            <option value="us">United States +(1)</option>
                                            <option value="um">United States Minor Outlying Islands +(246)</option>
                                            <option value="uy">Uruguay +(598)</option>
                                            <option value="uz">Uzbekistan +(998)</option>
                                            <option value="vu">Vanuatu +(678)</option>
                                            <option value="va">Vatican City State (Holy See) +(379)</option>
                                            <option value="ve">Venezuela +(58)</option>
                                            <option value="vn">Vietnam +(84)</option>
                                            <option value="vg">Virgin Islands (British) +(1-284)</option>
                                            <option value="vi">Virgin Islands (U.S.) +(1-340)</option>
                                            <option value="wf">Wallis and Futuna Islands +(681)</option>
                                            <option value="eh">Western Sahara +(212)</option>
                                            <option value="ye">Yemen +(967)</option>
                                            <option value="rs">Serbia +(381)</option>
                                            <option value="zm">Zambia +(260)</option>
                                            <option value="zw">Zimbabwe +(263)</option>
                                            <option value="ax">Aaland Islands +(358)</option>
                                            <option value="ps">Palestine +(970)</option>
                                            <option value="me">Montenegro +(382)</option>
                                            <option value="gg">Guernsey +(44-1481)</option>
                                            <option value="im">Isle of Man +(44-1624)</option>
                                            <option value="je">Jersey +(44-1534)</option>
                                            <option value="cw">Curaçao +(599)</option>
                                            <option value="ci">Ivory Coast +(225)</option>
                                            <option value="xk">Kosovo +(383)</option>
                                        </select>
            
                                        <input type="text" class="form-control inputbox" name="phone" id="name" placeholder="Your Phone" required="">
                                        <select class="form-control inputbox" name="address" id="users" required="">
                                            <option value="">How Many Users?</option>
                                            <option value="0 - 20">0 - 20</option>
                                            <option value="20 - 50">20 - 50</option>
                                            <option value="50 - 100">50 - 100</option>
                                        </select>
                                        <input type="submit" anem="submit" value="Book A Demo" class="btn btn-primary book" style="color:#fff!important;width:100%;border: none;border-radius: 150px;">
            
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-faqs">
    <div class="page-padding">
        <div class="container-large">
            <div class="margin-top-faq margin-vertical margin-huge">
                <div class="faq-margin margin-bottom margin-xlarge"><h3 class="text-weight-bold faq-h3">FAQ's</h3></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="faq-div-border mt-5">
                            <div class="row">
                                <div class="col-md-2">
                                    <i class="fa fa-plus fa-icon" aria-hidden="true"></i>
                                    <i class="fa fa-minus fa-icon display" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-10 margin-lef-neg">
                                    <h4 class="faq-h4">How do I know which Slikk AI functionalities are right for my team?</h4>
                                </div>
                            </div>
                            <p class="faq-p a display">We have solutions for hybrid workplaces and their teams. Each feature is suited to different requirements for any size organization. Learn more about each on our pricing page and product page.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="faq-div-border mt-5">
                            <div class="row">
                                <div class="col-md-2">
                                    <i class="fa fa-plus fa-icon" aria-hidden="true"></i>
                                    <i class="fa fa-minus fa-icon display" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-10 margin-lef-neg">
                                    <h4 class="faq-h4">How can I gain from using Slikk?</h4>
                                </div>
                            </div>
                            <p class="faq-p a display">We are built on the fundamentals of work productivity based on focus and collaboration. We are enabling this through blockchain-based rewards, work productivity metrics, a clear picture for managers, stress-busting nudges, employee sentiment analytics, and more.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="faq-div-border mt-5">
                            <div class="row">
                                <div class="col-md-2">
                                    <i class="fa fa-plus fa-icon" aria-hidden="true"></i>
                                    <i class="fa fa-minus fa-icon display" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-10 margin-lef-neg">
                                    <h4 class="faq-h4">How do I know Slikk AI has integrations with my favorite tools?</h4>
                                </div>
                            </div>
                            <p class="faq-p a display">Slikk AI integrates with all your favorite tools that you need accessible from this work productivity tool.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="faq-div-border mt-5">
                            <div class="row">
                                <div class="col-md-2">
                                    <i class="fa fa-plus fa-icon" aria-hidden="true"></i>
                                    <i class="fa fa-minus fa-icon display" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-10 margin-lef-neg">
                                    <h4 class="faq-h4">Do I really need one solution for work management?</h4>
                                </div>
                            </div>
                            <p class="faq-p a display">Yes. Teams finish a task on one tool, communicate on another, and send updates via a third channel. They spend more time juggling tools than actual work. One single app to manage tasks, collaborate with others, and track productivity in Slikk AI is what you need.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('frontnew.cta')
<script>
        $(document).ready(function () {
        setTimeout(function(){
        if ($("#w-tabs-0-data-w-tab-0").hasClass("w--current")) {
            $(".tb-text-1").addClass("display");
            $(".tb-text-2").addClass("display");
            $(".tb-text-3").addClass("display");
            $(".tb-text-4").addClass("display");
            $(".tb-text-5").addClass("display");
        }
        $("#w-tabs-0-data-w-tab-1").click(function(){
            $(".tb-text-1").removeClass("display");
            $('.pod-tab').addClass('img-div1');
            $(".tb-text-0").addClass("display");
            $(".tb-text-2").addClass("display");
            $(".tb-text-3").addClass("display");
            $(".tb-text-4").addClass("display");
            $(".tb-text-5").addClass("display");
        });
        $("#w-tabs-0-data-w-tab-2").click(function(){
            $(".tb-text-2").removeClass("display");
            $('.goal-tab').addClass('img-div2');
            $(".tb-text-1").addClass("display");
            $(".tb-text-0").addClass("display");
            $(".tb-text-3").addClass("display");
            $(".tb-text-4").addClass("display");
            $(".tb-text-5").addClass("display");
        });
        $("#w-tabs-0-data-w-tab-3").click(function(){
            $(".tb-text-3").removeClass("display");
            $('.time-tab').addClass('img-div3');
            $(".tb-text-1").addClass("display");
            $(".tb-text-2").addClass("display");
            $(".tb-text-0").addClass("display");
            $(".tb-text-4").addClass("display");
            $(".tb-text-5").addClass("display");
        });
        $("#w-tabs-0-data-w-tab-4").click(function(){
            $(".tb-text-4").removeClass("display");
            $('.kanban-tab').addClass('img-div4');
            $(".tb-text-1").addClass("display");
            $(".tb-text-2").addClass("display");
            $(".tb-text-0").addClass("display");
            $(".tb-text-3").addClass("display");
            $(".tb-text-5").addClass("display");
        });
        $("#w-tabs-0-data-w-tab-5").click(function(){
            $(".tb-text-5").removeClass("display");
            $('.files-tab').addClass('img-div5');
            $(".tb-text-1").addClass("display");
            $(".tb-text-2").addClass("display");
            $(".tb-text-0").addClass("display");
            $(".tb-text-3").addClass("display");
            $(".tb-text-4").addClass("display");
        });
        $("#w-tabs-0-data-w-tab-0").click(function(){
            $(".tb-text-3").addClass("display");
            $(".tb-text-1").addClass("display");
            $(".tb-text-2").addClass("display");
            $(".tb-text-4").addClass("display");
            $(".tb-text-5").addClass("display");
            $(".tb-text-0").removeClass("display");
        });
        if ($("w-tabs-1-data-w-tab-0").hasClass("w--current")) {
            $(".tb1-text-1").addClass("display");
            $(".tb1-text-2").addClass("display");
            $(".tb1-text-3").addClass("display");
            $(".tb1-text-4").addClass("display");
            $(".tb1-text-5").addClass("display");
            $(".tb1-text-6").addClass("display");
        }
        $("#w-tabs-1-data-w-tab-1").click(function(){
            $(".tb1-text-1").removeClass("display");
            $('.sales-tab').addClass('use-img1');
            $(".tb1-text-0").addClass("display");
            $(".tb1-text-2").addClass("display");
            $(".tb1-text-3").addClass("display");
            $(".tb1-text-4").addClass("display");
            $(".tb1-text-5").addClass("display");
            $(".tb1-text-6").addClass("display");
        });
        $("#w-tabs-1-data-w-tab-2").click(function(){
            $(".tb1-text-2").removeClass("display");
            $('.crm-tab').addClass('use-img2');
            $(".tb1-text-1").addClass("display");
            $(".tb1-text-0").addClass("display");
            $(".tb1-text-3").addClass("display");
            $(".tb1-text-4").addClass("display");
            $(".tb1-text-5").addClass("display");
            $(".tb1-text-6").addClass("display");
        });
        $("#w-tabs-1-data-w-tab-3").click(function(){
            $(".tb1-text-3").removeClass("display");
            $('.cxo-tab').addClass('use-img3');
            $(".tb1-text-1").addClass("display");
            $(".tb1-text-2").addClass("display");
            $(".tb1-text-0").addClass("display");
            $(".tb1-text-4").addClass("display");
            $(".tb1-text-5").addClass("display");
            $(".tb1-text-6").addClass("display");
        });
        $("#w-tabs-1-data-w-tab-4").click(function(){
            $(".tb1-text-4").removeClass("display");
            $('.remote-tab').addClass('use-img4');
            $(".tb1-text-1").addClass("display");
            $(".tb1-text-2").addClass("display");
            $(".tb1-text-0").addClass("display");
            $(".tb1-text-3").addClass("display");
            $(".tb1-text-5").addClass("display");
            $(".tb1-text-6").addClass("display");
        });
        $("#w-tabs-1-data-w-tab-5").click(function(){
            $(".tb1-text-5").removeClass("display");
            $('.marketing-tab').addClass('use-img5');
            $(".tb1-text-1").addClass("display");
            $(".tb1-text-2").addClass("display");
            $(".tb1-text-0").addClass("display");
            $(".tb1-text-3").addClass("display");
            $(".tb1-text-4").addClass("display");
            $(".tb1-text-6").addClass("display");
        });
        $("#w-tabs-1-data-w-tab-6").click(function(){
            $(".tb1-text-6").removeClass("display");
            $('.design-tab').addClass('use-img6');
            $(".tb1-text-1").addClass("display");
            $(".tb1-text-2").addClass("display");
            $(".tb1-text-0").addClass("display");
            $(".tb1-text-3").addClass("display");
            $(".tb1-text-4").addClass("display");
            $(".tb1-text-5").addClass("display");
        });
        $("#w-tabs-1-data-w-tab-0").click(function(){
            $(".tb1-text-3").addClass("display");
            $(".tb1-text-1").addClass("display");
            $(".tb1-text-2").addClass("display");
            $(".tb1-text-4").addClass("display");
            $(".tb1-text-5").addClass("display");
            $(".tb1-text-6").addClass("display");
            $(".tb1-text-0").removeClass("display");
        });
        },1000);
        });

</script>
<script>
    $(document).ready(function () {
        setTimeout(function(){
        if ($("#w-tabs-0-data-w-tab-0").hasClass("w--current")) {
            $("#w-tabs-0-data-w-pane-1").addClass("display");
            $("#w-tabs-0-data-w-pane-2").addClass("display");
            $("#w-tabs-0-data-w-pane-3").addClass("display");
            $("#w-tabs-0-data-w-pane-4").addClass("display");
        }
        $("#w-tabs-0-data-w-tab-1").click(function(){
            $("#w-tabs-0-data-w-pane-0").addClass("display");
            $("#w-tabs-0-data-w-pane-2").addClass("display");
            $("#w-tabs-0-data-w-pane-3").addClass("display");
            $("#w-tabs-0-data-w-pane-4").addClass("display");
            $("#w-tabs-0-data-w-pane-1").removeClass("display");
            $("#w-tabs-0-data-w-tab-1").addClass("w--current");
            $("#w-tabs-0-data-w-tab-0").removeClass("w--current");
            $("#w-tabs-0-data-w-tab-2").removeClass("w--current");
            $("#w-tabs-0-data-w-tab-3").removeClass("w--current");
            $("#w-tabs-0-data-w-tab-4").removeClass("w--current");
        });
        $("#w-tabs-0-data-w-tab-2").click(function(){
            $("#w-tabs-0-data-w-pane-0").addClass("display");
            $("#w-tabs-0-data-w-pane-1").addClass("display");
            $("#w-tabs-0-data-w-pane-3").addClass("display");
            $("#w-tabs-0-data-w-pane-4").addClass("display");
            $("#w-tabs-0-data-w-pane-2").removeClass("display");
            $("#w-tabs-0-data-w-tab-2").addClass("w--current");
            $("#w-tabs-0-data-w-tab-0").removeClass("w--current");
            $("#w-tabs-0-data-w-tab-1").removeClass("w--current");
            $("#w-tabs-0-data-w-tab-3").removeClass("w--current");
            $("#w-tabs-0-data-w-tab-4").removeClass("w--current");
        });
        $("#w-tabs-0-data-w-tab-3").click(function(){
            $("#w-tabs-0-data-w-pane-0").addClass("display");
            $("#w-tabs-0-data-w-pane-2").addClass("display");
            $("#w-tabs-0-data-w-pane-1").addClass("display");
            $("#w-tabs-0-data-w-pane-4").addClass("display");
            $("#w-tabs-0-data-w-pane-3").removeClass("display");
            $("#w-tabs-0-data-w-tab-3").addClass("w--current");
            $("#w-tabs-0-data-w-tab-0").removeClass("w--current");
            $("#w-tabs-0-data-w-tab-2").removeClass("w--current");
            $("#w-tabs-0-data-w-tab-1").removeClass("w--current");
            $("#w-tabs-0-data-w-tab-4").removeClass("w--current");
        });
        $("#w-tabs-0-data-w-tab-4").click(function(){
            $("#w-tabs-0-data-w-pane-0").addClass("display");
            $("#w-tabs-0-data-w-pane-2").addClass("display");
            $("#w-tabs-0-data-w-pane-3").addClass("display");
            $("#w-tabs-0-data-w-pane-1").addClass("display");
            $("#w-tabs-0-data-w-pane-4").removeClass("display");
            $("#w-tabs-0-data-w-tab-4").addClass("w--current");
            $("#w-tabs-0-data-w-tab-0").removeClass("w--current");
            $("#w-tabs-0-data-w-tab-2").removeClass("w--current");
            $("#w-tabs-0-data-w-tab-3").removeClass("w--current");
            $("#w-tabs-0-data-w-tab-1").removeClass("w--current");
        });
        $("#w-tabs-0-data-w-tab-0").click(function(){
            $("#w-tabs-0-data-w-pane-1").addClass("display");
            $("#w-tabs-0-data-w-pane-2").addClass("display");
            $("#w-tabs-0-data-w-pane-3").addClass("display");
            $("#w-tabs-0-data-w-pane-4").addClass("display");
            $("#w-tabs-0-data-w-pane-0").removeClass("display");
            $("#w-tabs-0-data-w-tab-0").addClass("w--current");
            $("#w-tabs-0-data-w-tab-4").removeClass("w--current");
            $("#w-tabs-0-data-w-tab-2").removeClass("w--current");
            $("#w-tabs-0-data-w-tab-3").removeClass("w--current");
            $("#w-tabs-0-data-w-tab-1").removeClass("w--current");
        });
        },1000);
        });
</script>
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