@extends('frontnew.layouts.layout')
@section('frontnew_content')
<style>
    .pricing-plans_tabs-plan-wrapper{
                min-height: 45.5rem;
            }
            @media(max-width:999px){
                .section-pricing-header{
                    margin-top: -2rem;
                }
                .product-header_wrapper{
                    margin-top: -3rem;
                }
                .margin-top-testimonial-mweb{
                    margin-top: 6rem;
                }
                .curly-img{
                    /* margin-left: -20rem; */
                    top: auto;
                    right: auto;
                    width: 20%;
                    bottom: -36%;
                }
                .product-header_image-wrapper{
                    width:22rem;
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
    @media(min-width:1020px){
        .section-pricing-header{
            margin-top: -4rem;
        }
        .padding-price{
            margin-left: 3rem;
        }
        .bottom-section {
            margin-top: 4%;
        }
    }
</style>
<div class="section-filler-block-for-banner-3-5rem"></div>
<section class="section-collect-header">
    <div class="page-padding">
        <div class="product-header_container">
            <div class="padding-vertical padding-xhuge">
                <div class="product-header_wrapper">
                    <div class="product-header_left-wrapper">
                        <div class="margin-top margin-custom1"><h1 class="product-header_heading"><span class="text-bg text-color-purple">Get started now</span></h1>
                        <!-- <p>Try Slikk for 7 days and get unrestricted access</p>
                        <p>No credit card required</p> -->
                        </div>
                        <div class="margin-top margin-custom1">
                            <div class="buttons-wrapper">
                                <a href="#" class="button w-button watch-btnn" style="background-color:#71147e;color:#fff;"
                                    aria-label="open lightbox" aria-haspopup="dialog">
                                    <div>Slikk in 2 Min</div>
                                </a>
                                <a href="http://34.221.127.72/book-a-demo" class="secondary-button w-button">Book a demo</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-header_right-wrapper">
                        <div class="product-header_image-wrapper">
                            <img
                                src="{{ url('assets/frontend/image/online-retailer.svg')}}"
                                loading="lazy"
                                alt="Illustration showing product - collect"
                                class=""
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="http://34.221.127.72/assets/frontend/image/curly.svg" class="curly-img">
    </div>
</section>
<section class="section-pricing-header">
    <div class="page-padding">
        <div class="container-large">
            <div class="padding-t-1-rem padding-vertical padding-xhuge">
                <div class="wrapper_vertical-center-align">
                    <h1 class="heading-large text-weight-medium">Choose the perfect plan for you</h1>
                    <div class="margin-t-1-rem margin-top margin-large"><p class="text-weight-medium text-size-large text-color-medium-grey">Get started with a 14-day free trial. No credit card needed.</p></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-pricing-plans">
    <div class="page-padding">
        <div class="container-large">
            <div class="padding-bottom padding-huge">
                <div data-current="Tab 2" data-easing="ease" data-duration-in="300" data-duration-out="100" class="margin-t-n pricing-plans_tabs-component w-tabs">
                    <div class="pricing-plans_tabs-menu w-tab-menu" role="tablist">
                        <a
                            data-w-tab="Tab 1"
                            class="pricing-plans_tabs-tablink w-inline-block w-tab-link w--current"
                            id="w-tabs-0-data-w-tab-0"
                            href="#w-tabs-0-data-w-pane-0"
                            role="tab"
                            aria-controls="w-tabs-0-data-w-pane-0"
                            aria-selected="true"
                        >
                            <div>Monthly</div>
                        </a>
                        <a
                            data-w-tab="Tab 2"
                            class="pricing-plans_tabs-tablink w-inline-block w-tab-link"
                            id="w-tabs-0-data-w-tab-1"
                            href="#w-tabs-0-data-w-pane-1"
                            role="tab"
                            aria-controls="w-tabs-0-data-w-pane-1"
                            aria-selected="false"
                            tabindex="-1"
                        >
                            <div>Yearly</div>
                            <!-- <div class="pricing-plans_tabs-save10-wrapper"><div>Save 20%</div></div> -->
                        </a>
                    </div>
                    <div class="overflow-none w-tab-content">
                        <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active" id="w-tabs-0-data-w-pane-0" role="tabpanel" aria-labelledby="w-tabs-0-data-w-tab-0" style="opacity: 1; transition: opacity 300ms ease 0s;">
                            <div class="pricing-plans_tabs-content-wrapper">
                                <div class="pricing-plans_tabs-plan-wrapper">
                                    <div class="pricing-plan_tabs-plan-heading-wrapper">
                                        <h1 class="heading-small text-weight-bold">FREE</h1>
                                        <div class="padding-price margin-top margin-custom1">
                                            <p></p>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="pricing-plans_tabs-plan-middle-wrapper is-right">
                                        <div class="heading-small text-weight-bold">Free Trial</div>
                                        <div class="margin-top margin-medium"><a href="#" target="_blank" class="button is-pricing w-button">Try for free</a></div>
                                    </div>
                                    <div class="pricing-plans_tabs-plan-bottom-wrapper">
                                        <div class="small-heading_wrapper">
                                            <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                            <div class="text-color-medium-grey">100MB Storage</div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Unlimited tasks</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Projects</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Kanban Boards<br /></div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Gantt Charts</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Goal Management</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">My Tasks</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Asset Management</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pricing-plans_tabs-plan-wrapper">
                                    <div class="pricing-plans_tabs-plan-top-wrapper">
                                        <div class="pricing-plan_tabs-plan-heading-wrapper">
                                            <h1 class="heading-small text-weight-bold">Startup</h1>
                                            <div class="padding-price margin-top margin-custom1">
                                            <p>Billed Monthly</p>
                                            <p>No Onboarding Fee</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-plans_tabs-plan-middle-wrapper">
                                        <div class="heading-small text-weight-bold">$<span class="pricing-plans_tabs-plan-price">7</span></div>
                                        <div class="margin-vertical margin-xsmall"><div class="text-size-medium text-color-grey">per user</div></div>
                                        <a href="#" class="button is-pricing w-button">Claim now</a>
                                    </div>
                                    <div class="pricing-plans_tabs-plan-bottom-wrapper">
                                        <div class="small-heading_wrapper">
                                            <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                            <div class="text-color-medium-grey">Everything in Free +</div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">500MB Storage</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">3rd Party Integrations</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Subtasks in Multiple Lists</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">OKRs</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Meetings and Calls</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">360 View</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Unlimited Pods</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Real Time Chats</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="w-node-ca85e2d4-6834-a5dd-704f-1771fe92ed1f-a735451a" class="pricing-plans_tabs-plan-wrapper is-highlighted">
                                    <div class="pricing-plans_early-bird-wrapper">Most popular</div>
                                    <div class="pricing-plan_tabs-plan-heading-wrapper">
                                        <div class="pricing-plan_tabs-plan-heading-wrapper">
                                            <h1 class="heading-small text-weight-bold">PRO</h1>
                                            <div class="padding-price margin-top margin-custom1">
                                                <p>Billed Monthly</p>
                                                <p>No Onboarding Fee</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-plans_tabs-plan-middle-wrapper">
                                        <div class="heading-small text-weight-bold">$<span class="pricing-plans_tabs-plan-price">12</span></div>
                                        <div class="margin-vertical margin-xsmall"><div class="text-size-medium text-color-grey">per user</div></div>
                                        <a href="#" class="button is-pricing w-button">Try now</a>
                                    </div>
                                    <div class="pricing-plans_tabs-plan-bottom-wrapper">
                                        <div class="small-heading_wrapper">
                                            <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                            <div class="text-color-medium-grey">Everything in STARTUP +</div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Upto 10GB Storage</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Dashboards</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">People Analytics</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Engagement Scores</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">External Members</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">OKR Implementation</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Polls</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Pulse Surveys</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="pricing-plans_tabs-plan-wrapper">
                                    <div class="pricing-plan_tabs-plan-heading-wrapper">
                                        <h2 class="heading-small text-weight-bold">Enterprise</h2>
                                        <div class="padding-price padding-price margin-top margin-custom1">
                                        <p>Billed Monthly</p>
                                        <p>No Onboarding Fee</p>
                                        </div>
                                    </div>
                                    <div class="pricing-plans_tabs-plan-middle-wrapper is-right">
                                        <div class="heading-small text-weight-bold">Let's talk</div>
                                        <div class="margin-top margin-medium"><a href="book-demo.php" target="_blank" class="button is-pricing w-button">Book a demo</a></div>
                                    </div>
                                    <div class="pricing-plans_tabs-plan-bottom-wrapper">
                                        <div class="small-heading_wrapper">
                                            <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                            <div class="text-color-medium-grey">Everything in Pro</div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Product management support and coaching</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Dedicated customer success manager</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Onboarding and migration help<br /></div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Priority support</div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div data-w-tab="Tab 2" class="w-tab-pane" id="w-tabs-0-data-w-pane-1" role="tabpanel" aria-labelledby="w-tabs-0-data-w-tab-1" style="">
                            <div class="pricing-plans_tabs-content-wrapper is-yearly">
                                <div class="pricing-plans_tabs-plan-wrapper">
                                    <div class="pricing-plan_tabs-plan-heading-wrapper">
                                        <h1 class="heading-small text-weight-bold">Free</h1>
                                        <div class="padding-price margin-top margin-custom1">
                                        <p></p>
                                        <p></p>
                                        </div>
                                    </div>
                                    <div class="pricing-plans_tabs-plan-middle-wrapper is-right">
                                        <div class="heading-small text-weight-bold">Free Trial</div>
                                        <div class="margin-top margin-medium"><a href="#" target="_blank" class="button is-pricing w-button">Try for free</a></div>
                                    </div>
                                    <div class="pricing-plans_tabs-plan-bottom-wrapper">
                                        <div class="small-heading_wrapper">
                                            <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                            <div class="text-color-medium-grey">100MB Storage</div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Unlimited tasks</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Projects</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Kanban Boards<br /></div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Gantt Charts</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Goal Management</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">My Tasks</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Asset Management</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pricing-plans_tabs-plan-wrapper">
                                    <div class="pricing-plan_tabs-plan-heading-wrapper">
                                        <div class="pricing-plan_tabs-plan-heading-wrapper">
                                            <h1 class="heading-small text-weight-bold">Startup</h1>
                                            <div class="padding-price margin-top margin-custom1">
                                            <p>Billed Yearly</p>
                                            <p>No Onboarding Fee</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-plans_tabs-plan-middle-wrapper">
                                        <div class="heading-small text-weight-bold">$<span class="pricing-plans_tabs-plan-price">69</span></div>
                                        <div class="margin-vertical margin-xsmall"><div class="text-size-medium text-color-grey">per user</div></div>
                                        <a href="#" class="button is-pricing w-button">Try now</a>
                                    </div>
                                    <div class="pricing-plans_tabs-plan-bottom-wrapper">
                                        <div class="small-heading_wrapper">
                                            <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                            <div class="text-color-medium-grey">Everything in Free +</div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">500MB Storage</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">3rd Party Integrations</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Subtasks in Multiple Lists</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">OKRs</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Meetings and Calls</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">360 View</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Unlimited Pods</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Real Time Chats</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="w-node-aaba5b09-6f9a-f966-1a16-a32e7ccf07ed-a735451a" class="pricing-plans_tabs-plan-wrapper is-highlighted">
                                    <div class="pricing-plans_early-bird-wrapper">Most popular</div>
                                    <div class="pricing-plan_tabs-plan-heading-wrapper">
                                        <div class="pricing-plan_tabs-plan-heading-wrapper">
                                            <h1 class="heading-small text-weight-bold">PRO</h1>
                                            <div class="padding-price margin-top margin-custom1">
                                                <p>Billed Yearly</p>
                                                <p>No Onboarding Fee</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-plans_tabs-plan-middle-wrapper">
                                        <div class="heading-small text-weight-bold">$<span class="pricing-plans_tabs-plan-price">99</span></div>
                                        <div class="margin-vertical margin-xsmall">
                                            <div class="pricing-plans_info-wrapper">
                                                <div class="text-size-medium text-color-grey">per user</div>
                                                <div data-w-id="93a7ba07-ae67-0500-cfcd-3a3676d32e9a" class="pricing-plans_info-popup-wrapper">
                                                    <div class="pricing-plans_info-icon w-embed">
                                                        <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.00016 14.6663C11.6821 14.6663 14.6668 11.6816 14.6668 7.99967C14.6668 4.31778 11.6821 1.33301 8.00016 1.33301C4.31826 1.33301 1.3335 4.31778 1.3335 7.99967C1.3335 11.6816 4.31826 14.6663 8.00016 14.6663Z"
                                                                stroke="#727377"
                                                                stroke-width="1.4"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            ></path>
                                                            <path d="M8 5.33301V7.99967" stroke="#727377" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M8 10.667H8.00667" stroke="#727377" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </div>
                                                    <div data-w-id="d02ad916-c4b6-31be-96b4-a2a82cc5837c" class="pricing-plans_popup" style="display: none; opacity: 0;">
                                                        <div>We charge only for Creator users. Collabrator users (Developers,Designers, Marketers etc) is always free.</div>
                                                        <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62e3f28571e74299b2a18254_Arrow.svg" alt="" class="pricing-plans_popup-arrow-icon" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="button is-pricing w-button">Try now</a>
                                    </div>
                                    <div class="pricing-plans_tabs-plan-bottom-wrapper">
                                        <div class="small-heading_wrapper">
                                            <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                            <div class="text-color-medium-grey">Everything in STARTUP +</div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Upto 10GB Storage</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Dashboards</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">People Analyticss</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Engagement Scores</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">External Members</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">OKR Implementation</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Polls</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Pulse Surveys</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="pricing-plans_tabs-plan-wrapper">
                                    <div class="pricing-plan_tabs-plan-heading-wrapper">
                                        <h2 class="heading-small text-weight-bold">Enterprise</h2>
                                        <div class="padding-price margin-top margin-custom1">
                                            <p>Billed Monthly</p>
                                            <p>No Onboarding Fee</p>
                                        </div>
                                    </div>
                                    <div class="pricing-plans_tabs-plan-middle-wrapper is-right">
                                        <div class="heading-small text-weight-bold">Let's talk</div>
                                        <div class="margin-top margin-medium">
                                            <a href="book-demo.php" class="button is-pricing w-button">Book a demo</a>
                                        </div>
                                    </div>
                                    <div class="pricing-plans_tabs-plan-bottom-wrapper">
                                        <div class="small-heading_wrapper">
                                            <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                            <div class="text-color-medium-grey">Everything in <a target="_blank" href="#">Pro</a></div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Product management support &amp; coaching</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Dedicated customer success manager</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Onboarding and migration help</div>
                                            </div>
                                        </div>
                                        <div class="margin-top margin-custom3">
                                            <div class="small-heading_wrapper">
                                                <img loading="lazy" src="https://uploads-ssl.webflow.com/62b983cfdc3b4744e063f682/62baa62aa5a9f219596082e9_Check%20Circle%20Purple%20Icon%20Non-filled.svg" alt="Included" />
                                                <div class="text-color-medium-grey">Priority support<br /></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="pricing-save-more_wrapper"><div class="heading-medium text-weight-medium">Save and get more with Slikk.ai</div></div> -->
            </div>
        </div>
    </div>
</section>
@include('frontnew.testimonial')
@include('frontnew.cta')
<section class="bottom-section">
    <div class="page-padding">
        <div class="container-large">
            <div class="faq-margin margin-vertical margin-huge">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-2">
                        @php
                            $desc = $bottom_content;
                            $desc = preg_replace('/\sstyle=("|\').*?("|\')/i', '', $desc);
                        @endphp
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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
                            //$(this).next('faq-p').addClass('display');
                            //$(this).parent().siblings('.faq-p').addClass("display");
                            //$(this).closest('.q').siblings('.faq-p').addClass('display');
                            //$(this).find('.faq-p').addClass('display');
                             //$(this).find('.fa-plus').removeClass('display');
                                // $(this).find('.fa-minus').addClass('display');
                                // $(this).find('.fa-minus').removeClass('act');
                        },1000);
                });
                });
</script>
<script>
                                    $(document).ready(function() {
                                    $('#product-header').click(function() {
                                    $('.product-menu').addClass('prod-menu');
                                    });
                                    });
                                    $(document).ready(function() {
                                    $('#learn-header').click(function() {
                                    $('.learn-menu').addClass('prod-menu');
                                    });
                                    });
                                    $(document).mouseup(function (e) {
                                        $('.product-menu').removeClass('prod-menu');
                                    });
                                    $(document).mouseup(function (e) {
                                        $('.learn-menu').removeClass('prod-menu');
                                    });
</script>
@endsection