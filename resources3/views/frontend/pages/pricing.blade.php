@extends('frontend.layouts.master')
@section('content')

    <style>
        #elite-pricing-container {
            margin-top: 50px;
            position: relative;
            display: flex;
            align-items: flex-start;
            justify-content: center;
            flex-wrap: wrap;
            box-sizing: border-box;
        }

        #elite-pricing-sales-text {

            padding-right: 80px;
            text-align: right;
            font-size: 24px;
            font-family: 'Raleway', Helvetica, Arial, Lucida, sans-serif;
            color: #555555;
            line-height: 1.5;
            font-weight: 700;
            max-width: 450px;
            padding-top: 90px;
        }

        #elite-pricing-card.price-card {
            max-width: 330px;
            color: white;
            position: relative;
            margin: 0 6px;
            padding: 30px 40px 10px 40px;
            background: url('https://images.unsplash.com/photo-1464639351491-a172c2aa2911?ixlib=rb-0.3.5&s=427721bc23b5d868669d8f0ba09c8710&auto=format&fit=crop&w=1200&q=80') left top no-repeat black;
            box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
        }


        #elite-pricing-card.price-card .price-card--header {
            padding: 0;
            background-color: transparent;
        }

        #elite-pricing-card.price-card .price-card--header h4 {
            font-size: 36px;
            font-weight: 600;
            padding-bottom: 16px;
            margin-bottom: 16px;
            border-bottom: 1px solid #f0c328;

            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-image: -webkit-linear-gradient(top left, #efd100 0, #e2a233 38%, #f0c328 60%, #fff1a3 86%, #ffe13e 100%);
            background-size: 1em 1em;
            color: #fff1a3;
        }

        #elite-pricing-card.price-card #elite-pricing-card--desc {
            padding-bottom: 25px;
        }

        #elite-pricing-card.price-card .price-card--features {
            border-top: 1px solid #f0c328;
        }

        #elite-pricing-card.price-card ul.price-card--features--list {
            padding: 0 11px;
        }

        #elite-pricing-card.price-card .price-card--features--item {
            padding-bottom: 16px;
        }

        #elite-pricing-card.price-card .price-card--features--item:before {
            color: #f0c328 !important;
            left: -12px !important;
        }


        #elite-pricing-card.price-card .price-card--cta--button.btn {
            background-color: #f0c328;
            color: black;
            margin: 0 auto;
        }

        #elite-pricing-card.price-card .price-card--cta--button.btn:hover {
            background-color: white;
        }

        #elite-pricing-card--desc {
            font-size: 16px;
            line-height: 1.5;
            max-width: 400px;
        }


        @media (max-width: 980px) {
            #pricing-cards {
                /* 		display:none !important; */
            }


        }











        /* - - - - - - - - - Tooltips - - - */

        .has-tooltip:not(.tooltip-disabled) {
            cursor: help;
            position: relative;
        }

        .has-tooltip:not(.tooltip-disabled):hover .tooltip-container {
            display: block;
        }

        .has-tooltip .tooltip-container {
            display: none;
            position: absolute;
            background-color: white;
            z-index: 20;
            bottom: calc(100% + 13px);
            left: -10px;
            right: -10px;
            padding: 16px 20px;
            border-radius: 8px;
            box-shadow: 0 6px 55px -10px #777;
        }

        .has-tooltip .tooltip-container:after {
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-top: 10px solid white;
            font-size: 0;
            line-height: 0;
            content: "";
            position: absolute;
            bottom: -10px;
        }

        .has-tooltip .tooltip-container h6 {
            font-weight: 600;
            font-size: 16px;
            margin: 0px;
        }

        .has-tooltip .tooltip-container p {
            color: #555;
            margin-top: 4px;
        }

        /* - - - - - - - End Tooltips - - - */





        #pricing-container * {
            box-sizing: border-box;
        }

        #pricing-container {
            font-family: "Open Sans", Helvetica, Arial, Lucida, sans-serif;
            -webkit-font-smoothing: antialiased;
            max-width: 1080px;
            margin: 0 auto 50px;
            justify-content: center;
            line-height: 1;
            color: #000;
        }



        /* Cards */

        #pricing-cards {
            display: flex;
            font-size: 14px;
        }

        #pricing-container .price-card {
            background-color: white;
            font-family: "Open Sans", Helvetica, Arial, Lucida, sans-serif;
            display: block;
            box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
            transition: all 0.25s;
            position: relative;
            margin: 0 6px;
            flex-grow: 1;
            flex-shrink: 1;
        }

        #pricing-container .price-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.14),
                0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
        }


        /* - - - - - - - - - Header Section - - - */

        #pricing-container .price-card--header {
            background-color: #e8e4ff;
            margin: 0;
            padding: 20px 0;
            text-align: center;
        }

        #pricing-container .price-card--header h4 {
            margin: 0;
            padding: 0;
            font-size: 28px;
            color: #fff;
            font-family: "Raleway", Helvetica, Arial, Lucida, sans-serif;
            font-weight: 700;
        }


        /* - - - - - - - - - Price Section - - - */

        #pricing-container .price-card--price {
            text-align: center;
            padding: 28px 0 6px 0;
        }

        #pricing-container .price-card--price-text {
            font-size: 48px;
        }

        #pricing-container .price-card--price-number {
            font-weight: 500;
            opacity: 0.89;
        }

        .odometer div {
            display: inline-block;
        }

        #pricing-container .price-card--price-number:before {
            content: "$";
            font-size: 24px;
            top: -16px;
            display: inline-block;
            position: relative;
        }

        #pricing-container .price-card--price-number:after {
            content: "/user";
            font-size: 12px;
            display: inline-block;
            color: grey;
        }

        #pricing-container .price-card--price-conditions {
            padding: 14px 0;
            color: #888;
            line-height: 1.5;
        }

        #pricing-container .price-card--onboarding-fee {
            color: green;
        }

        #pricing-container .price-card--onboarding-fee.has-fee {
            color: #888;
        }


        /* - - - - - - - - - CTA Button Section - - - */

        #pricing-container .price-card--cta {
            padding: 0 20px 24px;
            text-align: center;
        }

        #pricing-container .price-card--cta--button.btn {
            min-width: 20px;
            display: block;
            max-width: 183px;
            margin: 0 auto;
        }





        /* - - - - - - - - - Features Section - - - */

        #pricing-container .price-card--features {
            border-top: 1px solid #ddd;
            padding: 16px 0 20px;
        }

        #pricing-container ul.price-card--features--list {
            padding: 0 32px;
            list-style: none;
            margin: 0;
        }

        #pricing-container li.price-card--features--item {
            margin: 8px 0;
            padding-left: 8px;
            line-height: 1.5;
            position: relative;
        }

        #pricing-container li.price-card--features--item:not(.features-disabled):before {
            content: "✓";
            color: green;
            display: block;
            position: absolute;
            left: -8px;
        }

        #pricing-container li.price-card--features--item.features-highlight {
            /* 	font-weight: 600; */
        }

        #pricing-container li.price-card--features--item.features-disabled {
            opacity: 0.1;
            /* 	text-decoration: line-through; */
        }




        /* - - - - - - - - - Mobile Features Toggle - - - */

        #pricing-container .price-card--mobile-features-toggle {
            text-align: center;
            border-top: 1px solid #ddd;
            margin: 24px 0 0;
            padding: 16px 0;
            cursor: pointer;
            display: none;
            color: green;
        }

        #pricing-container .price-card--mobile-features-toggle:after {
            content: "Show All Features ▾";
        }

        #pricing-container .price-card--mobile-features-toggle.hideall:after {
            content: "Hide Features ▴";
        }

        /* - - - - - - - - - Hero Card Styles - - - */

        #pricing-container .price-card--hero {
            margin: -38px 6px 0;
            /* 	width:31%; */
            z-index: 10;
        }

        #pricing-container .price-card--hero-text {
            background-color: #312184;
            height: 38px;
            color: white;
            line-height: 38px;
            text-align: center;
            font-weight: 600;
        }

        /* - - - - - - - - - Only Yearly Basic Styles - - - */

        #pricing-container .only-yearly {
            position: relative;
        }

        #pricing-container .only-yearly .price-card--price-number {
            transition: opacity 0.2s;
        }

        #pricing-container .only-yearly .only-yearly--text {
            position: absolute;
            top: -0.2em;
            left: 0;
            right: 0;
            display: none;
        }

        #pricing-container .only-yearly .only-yearly--text span {
            font-size: 14px;
        }

        #pricing-container .only-yearly.if-monthly .price-card--price-number {
            opacity: 0;
        }

        #pricing-container .only-yearly.if-monthly .only-yearly--text {
            display: block;
        }

        /* - - - - - - - - - Switch Section - - - */

        #pricing-switch {
            margin: 80px auto 100px;
            text-align: center;
            line-height: 1.4;
            position: relative;
            max-width: 1080px;
        }

        #pricing-switch .switch-label {
            display: inline-block;
            width: 200px;
            text-align: center;
            opacity: 0.4;
            font-size: 16px;
            cursor: pointer;
            padding: 0 20px;
        }

        #pricing-switch .switch-label .save-money {
            color: yellow;
            font-style: italic;
            padding-left: 8px;
        }

        #pricing-switch .save-money--mobile {
            color:yellow;
            font-style: italic;
            padding-top: 22px;
            display: none;
        }

        #pricing-switch .switch-label.active {
            font-size: 18px;
            opacity: 1;
        }

        #pricing-switch .switch-label-monthly {
            text-align: right;
        }

        #pricing-switch .switch-label-yearly {
            text-align: left;
        }

        #pricing-switch .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
            vertical-align: -50%;
            margin: 0;
        }

        #pricing-switch .switch input {
            display: none;
        }

        #pricing-switch .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #5433ff;
            border-radius: 34px;
            -webkit-transition: 0.1s;
            transition: 0.1s;
        }

        #pricing-switch .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            border-radius: 50%;
            -webkit-transition: 0.1s;
            transition: 0.1s;
        }

        /* #pricing-switch input:checked + .slider {
     background-color: green;
    } */

        #pricing-switch input:focus+.slider {
            box-shadow: 0 0 1px #2196f3;
        }

        #pricing-switch input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        @media (max-width: 767px) {}




        /* - - - - - - - - - - - - - - - - - - - */
        /* - - - - - - - - - Media Queries - - - */
        /* - - - - - - - - - - - - - - - - - - - */

        @media (max-width: 1280px) {

            /* Tweak the card price font size */
            #pricing-container .price-card--price-text {
                font-size: 32px;
            }

            #pricing-container .price-card--price-number:before {
                top: -10px;
                font-size: 18px;
            }
        }

        @media (min-width: 981px) {

            /* 	always show features when not in mobile view */
            #pricing-container .price-card--features {
                display: block !important;
            }
        }

        @media (max-width: 980px) {
            #pricing-cards {
                display: block;
                padding: 0 24px;
            }

            #pricing-container .price-card {
                max-width: 360px;
                margin: 0 auto 48px;
            }

            #pricing-container .price-card:hover {
                transform: none;
            }

            #pricing-container .price-card-full-width {
                display: block;
            }

            #pricing-container .price-card-full-width .price-card--features--list {
                columns: 1;
            }

            #pricing-container .price-card--price {
                padding: 28px 0 0;
            }

            #pricing-container .price-card--features {
                display: none;
                margin: 26px 0 0 0;
                padding-bottom: 0;
            }

            #pricing-container ul.price-card--features--list {
                max-width: 250px;
                margin: 0 auto;
            }

            #pricing-container li.price-card--features--item.features-disabled {
                display: none;
            }

            #pricing-container .price-card--mobile-features-toggle {
                display: block;
            }

            /* Pricing Switch */
            #pricing-switch {
                margin: 26px 0 52px;
            }

            #pricing-switch .switch-label {
                display: inline-block;
                width: auto;
                font-size: 15px;
                color: #000 !important;
            }

            #pricing-switch .switch-label.active {
                font-size: 16px;
                color: #000 !important;
            }

            #pricing-switch .switch-label .save-money {
                display: none;
            }

            #pricing-switch .save-money--mobile {
                display: block;
            }

            /* Elite Pricing */
            #elite-pricing-container {
                display: block;
                padding: 0 24px
            }

            #elite-pricing-sales-text {
                padding-right: 0;
                padding-bottom: 32px;
                padding-top: 0;
                width: auto;
                max-width: 360px;
                margin: 0 auto;
                text-align: left;
                font-size: 18px;
                line-height: 1.5;
            }

            #elite-pricing-card.price-card .price-card--mobile-features-toggle {
                border-top: none;
                color: #f0c328;
                display: none;
            }

            #elite-pricing-card.price-card .price-card--features {
                display: block;
            }
        }


        @media (max-width: 480px) {
            #pricing-container .price-card {
                max-width: 360px;
                margin: 0 auto 36px;
            }

            #pricing-switch {
                margin: 26px 0 36px;
            }

            #elite-pricing-card.price-card {
                padding: 30px 20px 10px 20px;
            }
        }










        /* ****************** */
        /* Odometer Theme CSS */
        /* ****************** */
        /* https://raw.githubusercontent.com/HubSpot/odometer/master/themes/odometer-theme-default.css */

        .odometer.odometer-auto-theme,
        .odometer.odometer-theme-default {
            display: inline-block;
            vertical-align: middle;
            *vertical-align: auto;
            *zoom: 1;
            *display: inline;
            position: relative;
        }

        .odometer.odometer-auto-theme .odometer-digit,
        .odometer.odometer-theme-default .odometer-digit {
            display: inline-block;
            vertical-align: middle;
            *vertical-align: auto;
            *zoom: 1;
            *display: inline;
            position: relative;
        }

        .odometer.odometer-auto-theme .odometer-digit .odometer-digit-spacer,
        .odometer.odometer-theme-default .odometer-digit .odometer-digit-spacer {
            display: inline-block;
            vertical-align: middle;
            *vertical-align: auto;
            *zoom: 1;
            *display: inline;
            visibility: hidden;
        }

        .odometer.odometer-auto-theme .odometer-digit .odometer-digit-inner,
        .odometer.odometer-theme-default .odometer-digit .odometer-digit-inner {
            text-align: left;
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
        }

        .odometer.odometer-auto-theme .odometer-digit .odometer-ribbon,
        .odometer.odometer-theme-default .odometer-digit .odometer-ribbon {
            display: block;
        }

        .odometer.odometer-auto-theme .odometer-digit .odometer-ribbon-inner,
        .odometer.odometer-theme-default .odometer-digit .odometer-ribbon-inner {
            display: block;
            -webkit-backface-visibility: hidden;
        }

        .odometer.odometer-auto-theme .odometer-digit .odometer-value,
        .odometer.odometer-theme-default .odometer-digit .odometer-value {
            display: block;
            -webkit-transform: translateZ(0);
        }

        .odometer.odometer-auto-theme .odometer-digit .odometer-value.odometer-last-value,
        .odometer.odometer-theme-default .odometer-digit .odometer-value.odometer-last-value {
            position: absolute;
        }

        .odometer.odometer-auto-theme.odometer-animating-up .odometer-ribbon-inner,
        .odometer.odometer-theme-default.odometer-animating-up .odometer-ribbon-inner {
            -webkit-transition: -webkit-transform 2s;
            -moz-transition: -moz-transform 2s;
            -ms-transition: -ms-transform 2s;
            -o-transition: -o-transform 2s;
            transition: transform 2s;
        }

        .odometer.odometer-auto-theme.odometer-animating-up.odometer-animating .odometer-ribbon-inner,
        .odometer.odometer-theme-default.odometer-animating-up.odometer-animating .odometer-ribbon-inner {
            -webkit-transform: translateY(-100%);
            -moz-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
            -o-transform: translateY(-100%);
            transform: translateY(-100%);
        }

        .odometer.odometer-auto-theme.odometer-animating-down .odometer-ribbon-inner,
        .odometer.odometer-theme-default.odometer-animating-down .odometer-ribbon-inner {
            -webkit-transform: translateY(-100%);
            -moz-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
            -o-transform: translateY(-100%);
            transform: translateY(-100%);
        }

        .odometer.odometer-auto-theme.odometer-animating-down.odometer-animating .odometer-ribbon-inner,
        .odometer.odometer-theme-default.odometer-animating-down.odometer-animating .odometer-ribbon-inner {
            -webkit-transition: -webkit-transform 2s;
            -moz-transition: -moz-transform 2s;
            -ms-transition: -ms-transform 2s;
            -o-transition: -o-transform 2s;
            transition: transform 2s;
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }

        .odometer.odometer-auto-theme,
        .odometer.odometer-theme-default {
            font-family: "Helvetica Neue", sans-serif;
            line-height: 1.1em;
        }

        .odometer.odometer-auto-theme .odometer-value,
        .odometer.odometer-theme-default .odometer-value {
            text-align: center;
        }

        /* ************************** */
        /* UPDATES TO CHANGE DURATION */
        /* ************************** */

        .odometer.odometer-auto-theme.odometer-animating-up .odometer-ribbon-inner,
        .odometer.odometer-theme-minimal.odometer-animating-up .odometer-ribbon-inner,
        .odometer.odometer-auto-theme.odometer-animating-down.odometer-animating .odometer-ribbon-inner,
        .odometer.odometer-theme-minimal.odometer-animating-down.odometer-animating .odometer-ribbon-inner {
            -webkit-transition: -webkit-transform 0.4s;
            -moz-transition: -moz-transform 0.4s;
            -ms-transition: -ms-transform 0.4s;
            -o-transition: -o-transform 0.4s;
            transition: transform 0.4s;
            will-change: auto;
        }



        .switch-label {

            color: #fff !important;
        }

        @media screen and (max-width:800px) {

            .pricing-box {
                margin-top: 0px !important;
            }

            .switch-label {
                color: #000 !important;
            }
        }

        #pricing-container .price-card--cta--button.btn {

            background: #5433ff;
            color: #fff;
        }

        

#pricing-container li.price-card--features--item {

    font-size: 13px;
}
    </style>


    <div class="jumbotron text-center top-banner" style="background: transparent url(img/Component%2051%20–%204.png) 0% 0% no-repeat padding-box;
        opacity: 1;
        background-size: cover;
        background-position: bottom;    min-height: 350px;">

        <div class="container">
            <div class="row" style="padding-top: 40px;">
                <div class="col-sm-12">
                    <h1 class="hero_title" style="text-align:center">Get started now, Pick a plan later</h1>
                    <p class="hero_desc" style="text-align:center">Try Slikk for 7 days and get unrestricted access</p>
                    <p class="hero_desc" style="text-align:center">No credit card required</p>
                </div>

                <div class="col-sm-7">
                    <!-- <img src="https://reportindata.com/test/img/Group 931.png" class="img-responsive" style="width: 400px;" /> -->
                </div>

            </div>

        </div>

    </div>

    <!-- <h2 class="section_title" style="margin-top:60px;margin-bottom:70px">Add visibility to your work</h2>-->

    <div class="container pricing-box" style="margin-top: -170px;">
        <!--<div class="row">
        <div class="col-sm-4 card-box">
          <div class="icon"><img src="https://reportindata.com/test/img/Icon open-graph.png"></div>
          <h3 class="box-title">Work & Forecasting</h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
        <div class="col-sm-4 card-box">
          <div class="icon"><img src="https://reportindata.com/test/img/Icon material-group-work.png"></div>
          <h3 class="box-title">Collaboration Pods</h3>

        </div>
        <div class="col-sm-4 card-box">
          <div class="icon"><img src="https://reportindata.com/test/img/Icon metro-flow-tree.png"></div>
          <h3 class="box-title">Strategic Workflows</h3>

        </div>
      </div> -->

        <div class="text-center">

            <section id="pricing-container">

                <div id="pricing-switch">

                    <span class="switch-label switch-label-monthly" onclick="return false;">Monthly</span>
                    <label class="switch" id="">
                        <input type="checkbox" checked="checked">
                        <span class="slider"></span>
                    </label>
                    <span class="switch-label switch-label-yearly active" onclick="return false;">Yearly
                         {{-- <span class="save-money">Save
                            10%</span> --}}
                        </span>
                    <!--
          Use https://codepen.io/raubaca/pen/VejpQP for styled dropdown
          and https://lipis.github.io/flag-icon-css/flags/4x3/us.svg for flags
        -->
                    {{-- <div class="save-money--mobile">Save 10% on Yearly Plans</div> --}}

                </div>
                <!-- end of pricing-switch -->

                <div id="pricing-cards">

                    <!-- ============================= -->
                    <!-- = Premium Subscription Card = -->
                    <!-- ============================= -->
                    <div class="price-card">

                        <div class="price-card--header">
                            <h2>FREE</h2>
                            <!-- <p>for growing your business</p> -->
                        </div>

                        <div class="price-card--price">
                            <div class="price-card--price-text">
                                <div class="price-card--price-number toggle-price-content odometer"
                                    data-price-monthly="0" data-price-yearly="0">
                                    {{-- 2,250 --}}
                                </div>
                            </div>
                            <div class="price-card--price-conditions">
                                <div class="toggle-price-content" data-price-monthly="Billed Monthly"
                                    data-price-yearly="Billed Annually">Billed Annually</div>
                                <div class="price-card--onboarding-fee toggle-price-content"
                                    data-price-monthly="No Onboarding Fee" data-price-yearly="No Onboarding Fee">No
                                    Onboarding Fee</div>
                            </div>
                        </div>

                        <div class="price-card--cta">
                            <a class="price-card--cta--button btn" href="#">Start Free Trail</a>
                        </div>

                        <div class="price-card--features">

                            <ul class="price-card--features--list">

                                <li class="price-card--features--item has-tooltip">100MB Storage
                                    <div class="tooltip-container"><strong>100MB Storage</strong>
                                        {{-- <p>Vendasta's end-to-end sales solution for companies that serve local businesses,
                                            and want to grow digital revenue.</p> --}}
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">Unlimited tasks
                                    <div class="tooltip-container"><strong>Unlimited tasks
                                    </strong>
                                        {{-- <p>Access to award-winning automated needs-assessment and email marketing
                                            automation. Unlimited emails sent to unlimited accounts.</p> --}}
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">Projects
                                    <div class="tooltip-container"><strong>Projects                                    </strong>
                                        {{-- <p>Access to world-class resellable products & services, aimed to fulfilling the
                                            digital marketing needs of your small & medium sized business clients.</p> --}}
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">Kanban Boards
                                    <div class="tooltip-container"><strong>Kanban Boards</strong>
                                        {{-- <p>Portal for your local business clients, featuring your agency’s branding. They
                                            can access the products purchased from your Marketplace.</p> --}}
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">Gantt Charts
                                    <div class="tooltip-container"><strong>Gantt Charts</strong>
                                        <!-- <p>Email and Web Chat support, <br />9am-9pm EST Mon-Fri, <br />2pm-7pm EST Sat-Sun
                                        </p> -->
                                    </div>
                                </li>

                                <li class="price-card--features--item has-tooltip">
                                    Goal Management
                                    <div class="tooltip-container"><strong>Goal Management</strong>
                                        <!-- <p>One-on-one with a Vendasta Success Manager, who will provide sales training so
                                            you reach your goals quickly.</p> -->
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">
                                    My Tasks
                                    <div class="tooltip-container"><strong>My Tasks</strong>
                                        <!-- <p>Fully white-label the platform on your agency's own domains.</p> -->
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">
                                    Asset Management
                                    <div class="tooltip-container"><strong>Asset Management</strong>
                                        <!-- <p>Multi-client agency fulfillment & task management app for teams.</p> -->
                                    </div>
                                </li>
                                <!-- <li class="price-card--features--item has-tooltip tooltip-disabled features-disabled">Brand
                                    Analytics
                                    <div class="tooltip-container"><strong>Brand Analytics</strong>
                                        <p>Access to multi-location brand management app.</p>
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip tooltip-disabled features-disabled">
                                    Managed Digital Ads
                                    <div class="tooltip-container"><strong>Managed Digital Ads</strong>
                                        <p>Access to our managed advertising service. Drive store visits, calls, texts &
                                            form fills for your clients.</p>
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip tooltip-disabled features-disabled">
                                    Access to in-market seminars
                                    <div class="tooltip-container"><strong>Access to in-market seminars</strong>
                                        <p>Face to face training from our experts to yours.</p>
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip tooltip-disabled features-disabled">APIs
                                    & SSO
                                    <div class="tooltip-container"><strong>APIs & SSO</strong>
                                        <p>APIs to use our products in your dashboards.</p>
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip tooltip-disabled features-disabled">
                                    Digital Agency
                                    <div class="tooltip-container"><strong>Digital Agency</strong>
                                        <p>Outsource your work to our fulfillment team.</p>
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip tooltip-disabled features-disabled">100%
                                    white-label
                                    <div class="tooltip-container"><strong>100% white-label</strong>
                                        <p>Digital Agency Email and phone communication under your brand. Customized
                                            workflows and toll-free numbers.</p>
                                    </div>
                                </li> -->

                            </ul>
                        </div>

                        <div class="price-card--mobile-features-toggle"></div>

                    </div>
                    <!-- End of Card -->

                    <!-- ================================ -->
                    <!-- = Enterprise Subscription Card = -->
                    <!-- ================================ -->
                    <div class="price-card price-card--hero">

                        <div class="price-card--header">
                            <h2>STARTUP</h2>
                            <!--                <p>for growing your business</p> -->
                        </div>
                        <div class="price-card--hero-text">
                            Most Popular Plan
                        </div>

                        <div class="price-card--price">
                            <div class="price-card--price-text">
                                <div class="price-card--price-number toggle-price-content odometer"
                                    data-price-monthly="7" data-price-yearly="7">7</div>
                            </div>
                            <div class="price-card--price-conditions">
                                <div class="toggle-price-content" data-price-monthly="Billed Monthly"
                                    data-price-yearly="Billed Annually">Billed Annually</div>
                                <div class="price-card--onboarding-fee toggle-price-content"
                                    data-price-monthly="No Onboarding Fee" data-price-yearly="No Onboarding Fee">No
                                    Onboarding Fee</div>
                            </div>
                        </div>

                        <div class="price-card--cta">
                            <a class="price-card--cta--button btn" href="#">Get in Touch</a>
                        </div>

                        <div class="price-card--features">
                            <ul class="price-card--features--list">

                                <li class="price-card--features--item has-tooltip">Everything in Free +
                                    <div class="tooltip-container"><strong>Everything in Free +                                    </strong>
                                        {{-- <p>Vendasta's end-to-end sales solution for companies that serve local businesses,
                                            and want to grow digital revenue.</p> --}}
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">500MB Storage
                                    <div class="tooltip-container"><strong>500MB Storage                                    </strong>
                                        {{-- <p>Access to award-winning automated needs-assessment and email marketing
                                            automation. Unlimited emails sent to unlimited accounts.</p> --}}
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">3rd Party Integrations
                                    <div class="tooltip-container"><strong>3rd Party Integrations                                    </strong>
                                        {{-- <p>Access to world-class resellable products & services, aimed to fulfilling the
                                            digital marketing needs of your small & medium sized business clients.</p> --}}
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">Subtasks in Multiple Lists
                                    <div class="tooltip-container"><strong>Subtasks in Multiple Lists</strong>
                                        {{-- <p>Portal for your local business clients, featuring your agency’s branding. They
                                            can access the products purchased from your Marketplace.</p> --}}
                                    </div>
                                </li>

                                <li class="price-card--features--item has-tooltip">OKRs
                                    <div class="tooltip-container"><strong>OKRs</strong>
                                        <!-- <p>Phone, Email and Web Chat support, <br />9am-9pm EST Mon-Fri, <br />2pm-7pm EST
                                            Sat-Sun</p> -->
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">Meetings and Calls
                                    <div class="tooltip-container"><strong>Meetings and Calls</strong>
                                        <!-- <p>One-on-one with a Vendasta Success Manager, who will provide sales training so
                                            you reach your goals quickly.</p> -->
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">360 View
                                    <div class="tooltip-container"><strong>360 View</strong>
                                        <!-- <p>Fully white-label the platform on your agency's own domains.</p> -->
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">Unlimited Pods
                                    <div class="tooltip-container"><strong>Unlimited Pods</strong>
                                        <!-- <p>Multi-client agency fulfillment & task management app for teams.</p> -->
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">Real Time Chats
                                    <div class="tooltip-container"><strong>Real Time Chats</strong>
                                        <!-- <p>Access to multi-location brand management app.</p> -->
                                    </div>
                                </li>
                                <!-- <li class="price-card--features--item has-tooltip">Managed Digital Ads
                                    <div class="tooltip-container"><strong>Managed Digital Ads</strong>
                                        <p>Access to our managed advertising service. Drive store visits, calls, texts &
                                            form fills for your clients.</p>
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">Access to in-market seminars
                                    <div class="tooltip-container"><strong>Access to in-market seminars</strong>
                                        <p>Face to face training from our experts to yours.</p>
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip tooltip-disabled features-disabled">APIs
                                    & SSO
                                    <div class="tooltip-container"><strong>APIs & SSO</strong>
                                        <p>APIs to use our products in your dashboards.</p>
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip tooltip-disabled features-disabled">
                                    Digital Agency
                                    <div class="tooltip-container"><strong>Digital Agency</strong>
                                        <p>Outsource your work to our fulfillment team.</p>
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip tooltip-disabled features-disabled">100%
                                    white-label
                                    <div class="tooltip-container"><strong>100% white-label</strong>
                                        <p>Digital Agency Email and phone communication under your brand. Customized
                                            workflows and toll-free numbers.</p>
                                    </div>
                                </li>  -->

                            </ul>
                        </div>

                        <div class="price-card--mobile-features-toggle"></div>

                    </div>
                    <!-- End of Card -->

                    <!-- ========================= -->
                    <!-- = Pro Subscription Card = -->
                    <!-- ========================= -->
                    <div class="price-card">

                        <div class="price-card--header">
                            <h2>PRO</h2>
                            <!--                <p>growing your business</p> -->
                        </div>

                        <div class="price-card--price">
                            <div class="price-card--price-text">
                                <div class="price-card--price-number toggle-price-content odometer"
                                    data-price-monthly="12" data-price-yearly="12">12</div>
                            </div>
                            <div class="price-card--price-conditions">
                                <div class="toggle-price-content" data-price-monthly="Billed Monthly"
                                    data-price-yearly="Billed Annually">Billed Annually</div>
                                <div class="price-card--onboarding-fee toggle-price-content"
                                    data-price-monthly="No Onboarding Fee" data-price-yearly="No Onboarding Fee">No
                                    Onboarding Fee</div>
                            </div>
                        </div>

                        <div class="price-card--cta">
                            <a class="price-card--cta--button btn" href="#">Get Started</a>
                        </div>

                        <div class="price-card--features">
                          

                            <ul class="price-card--features--list">

                                <li class="price-card--features--item has-tooltip">Everything in STARTUP +
                                    <div class="tooltip-container"><strong>Everything in STARTUP +</strong>
                                        {{-- <p>Vendasta's end-to-end sales solution for companies that serve local businesses,
                                            and want to grow digital revenue.</p> --}}
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">Upto 10GB Storage
                                    <div class="tooltip-container"><strong>Upto 10GB Storage                                    </strong>
                                        {{-- <p>Access to award-winning automated needs-assessment and email marketing
                                            automation. Unlimited emails sent to unlimited accounts.</p> --}}
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">Dashboards
                                    <div class="tooltip-container"><strong>Dashboards</strong>
                                        {{-- <p>Access to world-class resellable products & services, aimed to fulfilling the
                                            digital marketing needs of your small & medium sized business clients.</p> --}}
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">People Analytics
                                    <div class="tooltip-container"><strong>People Analytics</strong>
                                        {{-- <p>Portal for your local business clients, featuring your agency’s branding. They
                                            can access the products purchased from your Marketplace.</p> --}}
                                    </div>
                                </li>

                                <li class="price-card--features--item has-tooltip">Engagement Scores
                                    <div class="tooltip-container"><strong>Engagement Scores</strong>
                                        <p>Phone, Email and Web Chat support, <br />9am-9pm EST Mon-Fri, <br />2pm-7pm EST
                                            Sat-Sun</p>
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">External Members
                                    <div class="tooltip-container"><strong>External Members</strong>
                                        <!-- <p>One-on-one with a Vendasta Success Manager, who will provide sales training so
                                            you reach your goals quickly.</p> -->
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">OKR Implementation
                                    <div class="tooltip-container"><strong>OKR Implementation</strong>
                                        <!-- <p>Fully white-label the platform on your agency's own domains.</p> -->
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">Polls
                                    <div class="tooltip-container"><strong>Polls</strong>
                                        <!-- <p>Multi-client agency fulfillment & task management app for teams.</p> -->
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">Pulse Surveys
                                    <div class="tooltip-container"><strong>Pulse Surveys</strong>
                                        <!-- <p>Access to multi-location brand management app.</p> -->
                                    </div>
                                </li>
                                <!-- <li class="price-card--features--item has-tooltip">Managed Digital Ads
                                    <div class="tooltip-container"><strong>Managed Digital Ads</strong>
                                        <p>Access to our managed advertising service. Drive store visits, calls, texts &
                                            form fills for your clients.</p>
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">Access to in-market seminars
                                    <div class="tooltip-container"><strong>Access to in-market seminars</strong>
                                        <p>Face to face training from our experts to yours.</p>
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">APIs & SSO
                                    <div class="tooltip-container"><strong>APIs & SSO</strong>
                                        <p>APIs to use our products in your dashboards.</p>
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">Digital Agency
                                    <div class="tooltip-container"><strong>Digital Agency</strong>
                                        <p>Outsource your work to our fulfillment team.</p>
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip tooltip-disabled features-disabled">100%
                                    white-label
                                    <div class="tooltip-container"><strong>100% white-label</strong>
                                        <p>Digital Agency Email and phone communication under your brand. Customized
                                            workflows and toll-free numbers.</p>
                                    </div>
                                </li> -->

                            </ul>
                        </div>

                        <div class="price-card--mobile-features-toggle"></div>

                    </div>
                    <!-- End of Card -->

                    <!-- =========================== -->
                    <!-- = Basic Subscription Card = -->
                    <!-- =========================== -->
                    <!-- <div class="price-card">

                        <div class="price-card--header">
                            <h2>Business</h2>
                            <p>getting started</p>
                        </div>

                        <div class="price-card--price">
                            <div class="price-card--price-text only-yearly">
                                {{-- <div class="price-card--price-number odometer">
                                    249Customized
                                </div> --}}
                                <div class="price-card--price-number toggle-price-content odometer"
                                    data-price-monthly="999" data-price-yearly="999">999</div>
                            
                                <div class="only-yearly--text"><span>Price will be set based on requirements</span></div>
                            </div>
                            <div class="price-card--price-conditions">
                                <div>Billed Annually</div>
                                <div class="price-card--onboarding-fee">No Onboarding Fee</div>
                            </div>
                        </div>

                        <div class="price-card--cta">
                            <a class="price-card--cta--button btn" href="#">Get in Touch</a>
                        </div>

                        <div class="price-card--features">
                         

                            <ul class="price-card--features--list">
                                <li class="price-card--features--item has-tooltip">UnLimited Users
                                    <div class="tooltip-container"><strong>Limited Users</strong>
                                        {{-- <p>Vendasta's end-to-end sales solution for companies that serve local businesses,
                                            and want to grow digital revenue.</p> --}}
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">Unlimited Custom Fields
                                    <div class="tooltip-container"><strong>Unlimited Custom Fields</strong>
                                        {{-- <p>Access to award-winning automated needs-assessment and email marketing
                                            automation. Unlimited emails sent to unlimited accounts.</p> --}}
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">Unlimited Integrations
                                    <div class="tooltip-container"><strong>Unlimited Integrations</strong>
                                        {{-- <p>Access to world-class resellable products & services, aimed to fulfilling the
                                            digital marketing needs of your small & medium sized business clients.</p> --}}
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">Advanced Dashboard Features
                                    <div class="tooltip-container"><strong>Advanced Dashboard Features</strong>
                                        {{-- <p>Portal for your local business clients, featuring your agency’s branding. They
                                            can access the products purchased from your Marketplace.</p> --}}
                                    </div>
                                </li>

                                {{-- <li class="price-card--features--item has-tooltip">Tech support
                                    <div class="tooltip-container"><strong>Tech support</strong>
                                        <p>Phone, Email and Web Chat support, <br />9am-9pm EST Mon-Fri, <br />2pm-7pm EST
                                            Sat-Sun</p>
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">Partner Success Manager
                                    <div class="tooltip-container"><strong>Partner Success Manager</strong>
                                        <p>One-on-one with a Vendasta Success Manager, who will provide sales training so
                                            you reach your goals quickly.</p>
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">Custom domains
                                    <div class="tooltip-container"><strong>Custom domains</strong>
                                        <p>Fully white-label the platform on your agency's own domains.</p>
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">Concierge
                                    <div class="tooltip-container"><strong>Concierge</strong>
                                        <p>Multi-client agency fulfillment & task management app for teams.</p>
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">Brand Analytics
                                    <div class="tooltip-container"><strong>Brand Analytics</strong>
                                        <p>Access to multi-location brand management app.</p>
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">Managed Digital Ads
                                    <div class="tooltip-container"><strong>Managed Digital Ads</strong>
                                        <p>Access to our managed advertising service. Drive store visits, calls, texts &
                                            form fills for your clients.</p>
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">Access to in-market seminars
                                    <div class="tooltip-container"><strong>Access to in-market seminars</strong>
                                        <p>Face to face training from our experts to yours.</p>
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">APIs & SSO
                                    <div class="tooltip-container"><strong>APIs & SSO</strong>
                                        <p>APIs to use our products in your dashboards.</p>
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">Digital Agency
                                    <div class="tooltip-container"><strong>Digital Agency</strong>
                                        <p>Outsource your work to our fulfillment team.</p>
                                    </div>
                                </li>
                                <li class="price-card--features--item has-tooltip">100% white-label
                                    <div class="tooltip-container"><strong>100% white-label</strong>
                                        <p>Digital Agency Email and phone communication under your brand. Customized
                                            workflows and toll-free numbers.</p>
                                    </div>
                                </li> --}}

                            </ul>
                        </div>

                        <div class="price-card--mobile-features-toggle"></div>

                    </div> -->
                    <!-- End of Card -->

                </div>
                <!--    end of pricing-cards -->



            </section>


            <div class="container" style="padding-top: 60px;padding-bottom: 60px;">
                <div class="row">
                    <div class="col-sm-4 card-box" style="display:flex;">
                        {{-- <div class="icon"><img src="https://reportindata.com/test/img/Icon open-graph.png"></div> --}}
                        {{-- <h3 class="box-title">Work & Forecasting</h3> --}}
                        {{-- <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p> --}}
                        <p class="d-flex align-items-center"><i class="fa fa-steam-square" aria-hidden="true"
                                style="font-size:40px;color: #FFBB00;"></i></p>
                        <P class="d-flex align-items-center" style="padding-left:10px;"> Free training & 24-hour support
                        </P>
                    </div>
                    <div class="col-sm-4 card-box" style="display:flex;">
                        {{-- <div class="icon"><img src="https://reportindata.com/test/img/Icon material-group-work.png"></div> --}}
                        {{-- <h3 class="box-title">Collaboration Pods</h3> --}}

                        <p class="d-flex align-items-center"><i class="fa fa-shield" aria-hidden="true"
                                style="font-size:40px;color: #FFBB00;"></i> </p>
                        <p class="d-flex align-items-center" style="padding-left:10px;"> Serious about security & privacy
                        </p>

                    </div>
                    <div class="col-sm-4 card-box" style="display:flex;">
                        {{-- <div class="icon"><img src="https://reportindata.com/test/img/Icon metro-flow-tree.png"></div> --}}
                        {{-- <h3 class="box-title">Strategic Workflows</h3> --}}

                        <p class="d-flex align-items-center"><i class="fa fa-laptop" aria-hidden="true"
                                style="font-size:40px;color: #FFBB00;"></i></p>
                        <p class="d-flex align-items-center" style="padding-left:10px"> Highest uptime in the last 12
                            months</p>

                    </div>
                </div>
            </div>


        </div>





        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


        <script>
            jQuery.noConflict();
            (function($) {
                $(function() {
                    var toggleSwitch = $("#pricing-switch input");

                    (function() {
                        $(toggleSwitch).change(function() {
                            // Change prices for plans
                            togglePriceContent();

                            // Toggle monthly/yearly style
                            $(".switch-label-monthly, .switch-label-yearly").toggleClass("active");

                            // Basic is only available yearly message
                            $(".only-yearly").toggleClass("if-monthly");

                            // Highlight "No Onboarding" fee
                            $(".price-card--onboarding-fee").toggleClass("has-fee");
                        });

                        $(".switch-label-monthly, .switch-label-yearly").click(function() {
                            // Toggle switch when monthly/yearly is clicked
                            $(toggleSwitch).click();
                        });

                        $(".price-card--mobile-features-toggle").click(function() {
                            // Show/Hide features while in mobile
                            $(this)
                                .siblings(".price-card--features")
                                .slideToggle(200);
                            $(this).toggleClass("hideall");
                        });
                    })();

                    function togglePriceContent() {
                        if ($(toggleSwitch).is(":checked") === true) {
                            // if toggle is yearly
                            $(".toggle-price-content").each(function() {
                                $(this).html($(this).data("price-yearly"));
                            });
                        } else {
                            // if toggle is monthly
                            $(".toggle-price-content").each(function() {
                                $(this).html($(this).data("price-monthly"));
                            });
                        }
                    }
                });
            })(jQuery);

            window.odometerOptions = {
                duration: 400
            };

            // http://github.hubspot.com/odometer/
            // https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.js
            (function() {
                var COUNT_FRAMERATE,
                    COUNT_MS_PER_FRAME,
                    DIGIT_FORMAT,
                    DIGIT_HTML,
                    DIGIT_SPEEDBOOST,
                    DURATION,
                    FORMAT_MARK_HTML,
                    FORMAT_PARSER,
                    FRAMERATE,
                    FRAMES_PER_VALUE,
                    MS_PER_FRAME,
                    MutationObserver,
                    Odometer,
                    RIBBON_HTML,
                    TRANSITION_END_EVENTS,
                    TRANSITION_SUPPORT,
                    VALUE_HTML,
                    addClass,
                    createFromHTML,
                    fractionalPart,
                    now,
                    removeClass,
                    requestAnimationFrame,
                    round,
                    transitionCheckStyles,
                    trigger,
                    truncate,
                    wrapJQuery,
                    _jQueryWrapped,
                    _old,
                    _ref,
                    _ref1,
                    __slice = [].slice;

                VALUE_HTML = '<span class="odometer-value"></span>';

                RIBBON_HTML =
                    '<span class="odometer-ribbon"><span class="odometer-ribbon-inner">' +
                    VALUE_HTML +
                    "</span></span>";

                DIGIT_HTML =
                    '<span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner">' +
                    RIBBON_HTML +
                    "</span></span>";

                FORMAT_MARK_HTML = '<span class="odometer-formatting-mark"></span>';

                DIGIT_FORMAT = "(,ddd).dd";

                FORMAT_PARSER = /^\(?([^)]*)\)?(?:(.)(d+))?$/;

                FRAMERATE = 30;

                DURATION = 2000;

                COUNT_FRAMERATE = 20;

                FRAMES_PER_VALUE = 2;

                DIGIT_SPEEDBOOST = 0.5;

                MS_PER_FRAME = 1000 / FRAMERATE;

                COUNT_MS_PER_FRAME = 1000 / COUNT_FRAMERATE;

                TRANSITION_END_EVENTS =
                    "transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd";

                transitionCheckStyles = document.createElement("div").style;

                TRANSITION_SUPPORT =
                    transitionCheckStyles.transition != null ||
                    transitionCheckStyles.webkitTransition != null ||
                    transitionCheckStyles.mozTransition != null ||
                    transitionCheckStyles.oTransition != null;

                requestAnimationFrame =
                    window.requestAnimationFrame ||
                    window.mozRequestAnimationFrame ||
                    window.webkitRequestAnimationFrame ||
                    window.msRequestAnimationFrame;

                MutationObserver =
                    window.MutationObserver ||
                    window.WebKitMutationObserver ||
                    window.MozMutationObserver;

                createFromHTML = function(html) {
                    var el;
                    el = document.createElement("div");
                    el.innerHTML = html;
                    return el.children[0];
                };

                removeClass = function(el, name) {
                    return (el.className = el.className.replace(
                        new RegExp("(^| )" + name.split(" ").join("|") + "( |$)", "gi"),
                        " "
                    ));
                };

                addClass = function(el, name) {
                    removeClass(el, name);
                    return (el.className += " " + name);
                };

                trigger = function(el, name) {
                    var evt;
                    if (document.createEvent != null) {
                        evt = document.createEvent("HTMLEvents");
                        evt.initEvent(name, true, true);
                        return el.dispatchEvent(evt);
                    }
                };

                now = function() {
                    var _ref, _ref1;
                    return (_ref =
                            (_ref1 = window.performance) != null ?
                            typeof _ref1.now === "function" ? _ref1.now() : void 0 :
                            void 0) != null ?
                        _ref :
                        +new Date();
                };

                round = function(val, precision) {
                    if (precision == null) {
                        precision = 0;
                    }
                    if (!precision) {
                        return Math.round(val);
                    }
                    val *= Math.pow(10, precision);
                    val += 0.5;
                    val = Math.floor(val);
                    return (val /= Math.pow(10, precision));
                };

                truncate = function(val) {
                    if (val < 0) {
                        return Math.ceil(val);
                    } else {
                        return Math.floor(val);
                    }
                };

                fractionalPart = function(val) {
                    return val - round(val);
                };

                _jQueryWrapped = false;

                (wrapJQuery = function() {
                    var property, _i, _len, _ref, _results;
                    if (_jQueryWrapped) {
                        return;
                    }
                    if (window.jQuery != null) {
                        _jQueryWrapped = true;
                        _ref = ["html", "text"];
                        _results = [];
                        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                            property = _ref[_i];
                            _results.push(
                                (function(property) {
                                    var old;
                                    old = window.jQuery.fn[property];
                                    return (window.jQuery.fn[property] = function(val) {
                                        var _ref1;
                                        if (
                                            val == null ||
                                            ((_ref1 = this[0]) != null ? _ref1.odometer : void 0) ==
                                            null
                                        ) {
                                            return old.apply(this, arguments);
                                        }
                                        return this[0].odometer.update(val);
                                    });
                                })(property)
                            );
                        }
                        return _results;
                    }
                })();

                setTimeout(wrapJQuery, 0);

                Odometer = (function() {
                    function Odometer(options) {
                        var e,
                            k,
                            property,
                            v,
                            _base,
                            _i,
                            _len,
                            _ref,
                            _ref1,
                            _ref2,
                            _this = this;
                        this.options = options;
                        this.el = this.options.el;
                        if (this.el.odometer != null) {
                            return this.el.odometer;
                        }
                        this.el.odometer = this;
                        _ref = Odometer.options;
                        for (k in _ref) {
                            v = _ref[k];
                            if (this.options[k] == null) {
                                this.options[k] = v;
                            }
                        }
                        if ((_base = this.options).duration == null) {
                            _base.duration = DURATION;
                        }
                        this.MAX_VALUES =
                            (this.options.duration / MS_PER_FRAME / FRAMES_PER_VALUE) | 0;
                        this.resetFormat();
                        this.value = this.cleanValue(
                            (_ref1 = this.options.value) != null ? _ref1 : ""
                        );
                        this.renderInside();
                        this.render();
                        try {
                            _ref2 = ["innerHTML", "innerText", "textContent"];
                            for (_i = 0, _len = _ref2.length; _i < _len; _i++) {
                                property = _ref2[_i];
                                if (this.el[property] != null) {
                                    (function(property) {
                                        return Object.defineProperty(_this.el, property, {
                                            get: function() {
                                                var _ref3;
                                                if (property === "innerHTML") {
                                                    return _this.inside.outerHTML;
                                                } else {
                                                    return (_ref3 = _this.inside.innerText) !=
                                                        null ?
                                                        _ref3 :
                                                        _this.inside.textContent;
                                                }
                                            },
                                            set: function(val) {
                                                return _this.update(val);
                                            }
                                        });
                                    })(property);
                                }
                            }
                        } catch (_error) {
                            e = _error;
                            this.watchForMutations();
                        }
                        this;
                    }

                    Odometer.prototype.renderInside = function() {
                        this.inside = document.createElement("div");
                        this.inside.className = "odometer-inside";
                        this.el.innerHTML = "";
                        return this.el.appendChild(this.inside);
                    };

                    Odometer.prototype.watchForMutations = function() {
                        var e,
                            _this = this;
                        if (MutationObserver == null) {
                            return;
                        }
                        try {
                            if (this.observer == null) {
                                this.observer = new MutationObserver(function(mutations) {
                                    var newVal;
                                    newVal = _this.el.innerText;
                                    _this.renderInside();
                                    _this.render(_this.value);
                                    return _this.update(newVal);
                                });
                            }
                            this.watchMutations = true;
                            return this.startWatchingMutations();
                        } catch (_error) {
                            e = _error;
                        }
                    };

                    Odometer.prototype.startWatchingMutations = function() {
                        if (this.watchMutations) {
                            return this.observer.observe(this.el, {
                                childList: true
                            });
                        }
                    };

                    Odometer.prototype.stopWatchingMutations = function() {
                        var _ref;
                        return (_ref = this.observer) != null ? _ref.disconnect() : void 0;
                    };

                    Odometer.prototype.cleanValue = function(val) {
                        var _ref;
                        if (typeof val === "string") {
                            val = val.replace(
                                (_ref = this.format.radix) != null ? _ref : ".",
                                "<radix>"
                            );
                            val = val.replace(/[.,]/g, "");
                            val = val.replace("<radix>", ".");
                            val = parseFloat(val, 10) || 0;
                        }
                        return round(val, this.format.precision);
                    };

                    Odometer.prototype.bindTransitionEnd = function() {
                        var event,
                            renderEnqueued,
                            _i,
                            _len,
                            _ref,
                            _results,
                            _this = this;
                        if (this.transitionEndBound) {
                            return;
                        }
                        this.transitionEndBound = true;
                        renderEnqueued = false;
                        _ref = TRANSITION_END_EVENTS.split(" ");
                        _results = [];
                        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                            event = _ref[_i];
                            _results.push(
                                this.el.addEventListener(
                                    event,
                                    function() {
                                        if (renderEnqueued) {
                                            return true;
                                        }
                                        renderEnqueued = true;
                                        setTimeout(function() {
                                            _this.render();
                                            renderEnqueued = false;
                                            return trigger(_this.el, "odometerdone");
                                        }, 0);
                                        return true;
                                    },
                                    false
                                )
                            );
                        }
                        return _results;
                    };

                    Odometer.prototype.resetFormat = function() {
                        var format, fractional, parsed, precision, radix, repeating, _ref, _ref1;
                        format = (_ref = this.options.format) != null ? _ref : DIGIT_FORMAT;
                        format || (format = "d");
                        parsed = FORMAT_PARSER.exec(format);
                        if (!parsed) {
                            throw new Error("Odometer: Unparsable digit format");
                        }
                        (_ref1 = parsed.slice(1, 4)),
                        (repeating = _ref1[0]),
                        (radix = _ref1[1]),
                        (fractional = _ref1[2]);
                        precision = (fractional != null ? fractional.length : void 0) || 0;
                        return (this.format = {
                            repeating: repeating,
                            radix: radix,
                            precision: precision
                        });
                    };

                    Odometer.prototype.render = function(value) {
                        var classes, cls, match, newClasses, theme, _i, _len;
                        if (value == null) {
                            value = this.value;
                        }
                        this.stopWatchingMutations();
                        this.resetFormat();
                        this.inside.innerHTML = "";
                        theme = this.options.theme;
                        classes = this.el.className.split(" ");
                        newClasses = [];
                        for (_i = 0, _len = classes.length; _i < _len; _i++) {
                            cls = classes[_i];
                            if (!cls.length) {
                                continue;
                            }
                            if ((match = /^odometer-theme-(.+)$/.exec(cls))) {
                                theme = match[1];
                                continue;
                            }
                            if (/^odometer(-|$)/.test(cls)) {
                                continue;
                            }
                            newClasses.push(cls);
                        }
                        newClasses.push("odometer");
                        if (!TRANSITION_SUPPORT) {
                            newClasses.push("odometer-no-transitions");
                        }
                        if (theme) {
                            newClasses.push("odometer-theme-" + theme);
                        } else {
                            newClasses.push("odometer-auto-theme");
                        }
                        this.el.className = newClasses.join(" ");
                        this.ribbons = {};
                        this.formatDigits(value);
                        return this.startWatchingMutations();
                    };

                    Odometer.prototype.formatDigits = function(value) {
                        var digit,
                            valueDigit,
                            valueString,
                            wholePart,
                            _i,
                            _j,
                            _len,
                            _len1,
                            _ref,
                            _ref1;
                        this.digits = [];
                        if (this.options.formatFunction) {
                            valueString = this.options.formatFunction(value);
                            _ref = valueString.split("").reverse();
                            for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                                valueDigit = _ref[_i];
                                if (valueDigit.match(/0-9/)) {
                                    digit = this.renderDigit();
                                    digit.querySelector(".odometer-value").innerHTML = valueDigit;
                                    this.digits.push(digit);
                                    this.insertDigit(digit);
                                } else {
                                    this.addSpacer(valueDigit);
                                }
                            }
                        } else {
                            wholePart = !this.format.precision || !fractionalPart(value) || false;
                            _ref1 = value
                                .toString()
                                .split("")
                                .reverse();
                            for (_j = 0, _len1 = _ref1.length; _j < _len1; _j++) {
                                digit = _ref1[_j];
                                if (digit === ".") {
                                    wholePart = true;
                                }
                                this.addDigit(digit, wholePart);
                            }
                        }
                    };

                    Odometer.prototype.update = function(newValue) {
                        var diff,
                            _this = this;
                        newValue = this.cleanValue(newValue);
                        if (!(diff = newValue - this.value)) {
                            return;
                        }
                        removeClass(
                            this.el,
                            "odometer-animating-up odometer-animating-down odometer-animating"
                        );
                        if (diff > 0) {
                            addClass(this.el, "odometer-animating-up");
                        } else {
                            addClass(this.el, "odometer-animating-down");
                        }
                        this.stopWatchingMutations();
                        this.animate(newValue);
                        this.startWatchingMutations();
                        setTimeout(function() {
                            _this.el.offsetHeight;
                            return addClass(_this.el, "odometer-animating");
                        }, 0);
                        return (this.value = newValue);
                    };

                    Odometer.prototype.renderDigit = function() {
                        return createFromHTML(DIGIT_HTML);
                    };

                    Odometer.prototype.insertDigit = function(digit, before) {
                        if (before != null) {
                            return this.inside.insertBefore(digit, before);
                        } else if (!this.inside.children.length) {
                            return this.inside.appendChild(digit);
                        } else {
                            return this.inside.insertBefore(digit, this.inside.children[0]);
                        }
                    };

                    Odometer.prototype.addSpacer = function(chr, before, extraClasses) {
                        var spacer;
                        spacer = createFromHTML(FORMAT_MARK_HTML);
                        spacer.innerHTML = chr;
                        if (extraClasses) {
                            addClass(spacer, extraClasses);
                        }
                        return this.insertDigit(spacer, before);
                    };

                    Odometer.prototype.addDigit = function(value, repeating) {
                        var chr, digit, resetted, _ref;
                        if (repeating == null) {
                            repeating = true;
                        }
                        if (value === "-") {
                            return this.addSpacer(value, null, "odometer-negation-mark");
                        }
                        if (value === ".") {
                            return this.addSpacer(
                                (_ref = this.format.radix) != null ? _ref : ".",
                                null,
                                "odometer-radix-mark"
                            );
                        }
                        if (repeating) {
                            resetted = false;
                            while (true) {
                                if (!this.format.repeating.length) {
                                    if (resetted) {
                                        throw new Error("Bad odometer format without digits");
                                    }
                                    this.resetFormat();
                                    resetted = true;
                                }
                                chr = this.format.repeating[this.format.repeating.length - 1];
                                this.format.repeating = this.format.repeating.substring(
                                    0,
                                    this.format.repeating.length - 1
                                );
                                if (chr === "d") {
                                    break;
                                }
                                this.addSpacer(chr);
                            }
                        }
                        digit = this.renderDigit();
                        digit.querySelector(".odometer-value").innerHTML = value;
                        this.digits.push(digit);
                        return this.insertDigit(digit);
                    };

                    Odometer.prototype.animate = function(newValue) {
                        if (!TRANSITION_SUPPORT || this.options.animation === "count") {
                            return this.animateCount(newValue);
                        } else {
                            return this.animateSlide(newValue);
                        }
                    };

                    Odometer.prototype.animateCount = function(newValue) {
                        var cur,
                            diff,
                            last,
                            start,
                            tick,
                            _this = this;
                        if (!(diff = +newValue - this.value)) {
                            return;
                        }
                        start = last = now();
                        cur = this.value;
                        return (tick = function() {
                            var delta, dist, fraction;
                            if (now() - start > _this.options.duration) {
                                _this.value = newValue;
                                _this.render();
                                trigger(_this.el, "odometerdone");
                                return;
                            }
                            delta = now() - last;
                            if (delta > COUNT_MS_PER_FRAME) {
                                last = now();
                                fraction = delta / _this.options.duration;
                                dist = diff * fraction;
                                cur += dist;
                                _this.render(Math.round(cur));
                            }
                            if (requestAnimationFrame != null) {
                                return requestAnimationFrame(tick);
                            } else {
                                return setTimeout(tick, COUNT_MS_PER_FRAME);
                            }
                        })();
                    };

                    Odometer.prototype.getDigitCount = function() {
                        var i, max, value, values, _i, _len;
                        values = 1 <= arguments.length ? __slice.call(arguments, 0) : [];
                        for (i = _i = 0, _len = values.length; _i < _len; i = ++_i) {
                            value = values[i];
                            values[i] = Math.abs(value);
                        }
                        max = Math.max.apply(Math, values);
                        return Math.ceil(Math.log(max + 1) / Math.log(10));
                    };

                    Odometer.prototype.getFractionalDigitCount = function() {
                        var i, parser, parts, value, values, _i, _len;
                        values = 1 <= arguments.length ? __slice.call(arguments, 0) : [];
                        parser = /^\-?\d*\.(\d*?)0*$/;
                        for (i = _i = 0, _len = values.length; _i < _len; i = ++_i) {
                            value = values[i];
                            values[i] = value.toString();
                            parts = parser.exec(values[i]);
                            if (parts == null) {
                                values[i] = 0;
                            } else {
                                values[i] = parts[1].length;
                            }
                        }
                        return Math.max.apply(Math, values);
                    };

                    Odometer.prototype.resetDigits = function() {
                        this.digits = [];
                        this.ribbons = [];
                        this.inside.innerHTML = "";
                        return this.resetFormat();
                    };

                    Odometer.prototype.animateSlide = function(newValue) {
                        var boosted,
                            cur,
                            diff,
                            digitCount,
                            digits,
                            dist,
                            end,
                            fractionalCount,
                            frame,
                            frames,
                            i,
                            incr,
                            j,
                            mark,
                            numEl,
                            oldValue,
                            start,
                            _base,
                            _i,
                            _j,
                            _k,
                            _l,
                            _len,
                            _len1,
                            _len2,
                            _m,
                            _ref,
                            _results;
                        oldValue = this.value;
                        fractionalCount = this.getFractionalDigitCount(oldValue, newValue);
                        if (fractionalCount) {
                            newValue = newValue * Math.pow(10, fractionalCount);
                            oldValue = oldValue * Math.pow(10, fractionalCount);
                        }
                        if (!(diff = newValue - oldValue)) {
                            return;
                        }
                        this.bindTransitionEnd();
                        digitCount = this.getDigitCount(oldValue, newValue);
                        digits = [];
                        boosted = 0;
                        for (
                            i = _i = 0; 0 <= digitCount ? _i < digitCount : _i > digitCount; i = 0 <=
                            digitCount ? ++_i : --_i
                        ) {
                            start = truncate(oldValue / Math.pow(10, digitCount - i - 1));
                            end = truncate(newValue / Math.pow(10, digitCount - i - 1));
                            dist = end - start;
                            if (Math.abs(dist) > this.MAX_VALUES) {
                                frames = [];
                                incr =
                                    dist / (this.MAX_VALUES + this.MAX_VALUES * boosted * DIGIT_SPEEDBOOST);
                                cur = start;
                                while ((dist > 0 && cur < end) || (dist < 0 && cur > end)) {
                                    frames.push(Math.round(cur));
                                    cur += incr;
                                }
                                if (frames[frames.length - 1] !== end) {
                                    frames.push(end);
                                }
                                boosted++;
                            } else {
                                frames = function() {
                                    _results = [];
                                    for (
                                        var _j = start; start <= end ? _j <= end : _j >= end; start <= end ?
                                        _j++ : _j--
                                    ) {
                                        _results.push(_j);
                                    }
                                    return _results;
                                }.apply(this);
                            }
                            for (i = _k = 0, _len = frames.length; _k < _len; i = ++_k) {
                                frame = frames[i];
                                frames[i] = Math.abs(frame % 10);
                            }
                            digits.push(frames);
                        }
                        this.resetDigits();
                        _ref = digits.reverse();
                        for (i = _l = 0, _len1 = _ref.length; _l < _len1; i = ++_l) {
                            frames = _ref[i];
                            if (!this.digits[i]) {
                                this.addDigit(" ", i >= fractionalCount);
                            }
                            if ((_base = this.ribbons)[i] == null) {
                                _base[i] = this.digits[i].querySelector(".odometer-ribbon-inner");
                            }
                            this.ribbons[i].innerHTML = "";
                            if (diff < 0) {
                                frames = frames.reverse();
                            }
                            for (j = _m = 0, _len2 = frames.length; _m < _len2; j = ++_m) {
                                frame = frames[j];
                                numEl = document.createElement("div");
                                numEl.className = "odometer-value";
                                numEl.innerHTML = frame;
                                this.ribbons[i].appendChild(numEl);
                                if (j === frames.length - 1) {
                                    addClass(numEl, "odometer-last-value");
                                }
                                if (j === 0) {
                                    addClass(numEl, "odometer-first-value");
                                }
                            }
                        }
                        if (start < 0) {
                            this.addDigit("-");
                        }
                        mark = this.inside.querySelector(".odometer-radix-mark");
                        if (mark != null) {
                            mark.parent.removeChild(mark);
                        }
                        if (fractionalCount) {
                            return this.addSpacer(
                                this.format.radix,
                                this.digits[fractionalCount - 1],
                                "odometer-radix-mark"
                            );
                        }
                    };

                    return Odometer;
                })();

                Odometer.options = (_ref = window.odometerOptions) != null ? _ref : {};

                setTimeout(function() {
                    var k, v, _base, _ref1, _results;
                    if (window.odometerOptions) {
                        _ref1 = window.odometerOptions;
                        _results = [];
                        for (k in _ref1) {
                            v = _ref1[k];
                            _results.push(
                                (_base = Odometer.options)[k] != null ?
                                (_base = Odometer.options)[k] :
                                (_base[k] = v)
                            );
                        }
                        return _results;
                    }
                }, 0);

                Odometer.init = function() {
                    var el, elements, _i, _len, _ref1, _results;
                    if (document.querySelectorAll == null) {
                        return;
                    }
                    elements = document.querySelectorAll(
                        Odometer.options.selector || ".odometer"
                    );
                    _results = [];
                    for (_i = 0, _len = elements.length; _i < _len; _i++) {
                        el = elements[_i];
                        _results.push(
                            (el.odometer = new Odometer({
                                el: el,
                                value: (_ref1 = el.innerText) != null ? _ref1 : el.textContent
                            }))
                        );
                    }
                    return _results;
                };

                if (
                    ((_ref1 = document.documentElement) != null ? _ref1.doScroll : void 0) !=
                    null &&
                    document.createEventObject != null
                ) {
                    _old = document.onreadystatechange;
                    document.onreadystatechange = function() {
                        if (document.readyState === "complete" && Odometer.options.auto !== false) {
                            Odometer.init();
                        }
                        return _old != null ? _old.apply(this, arguments) : void 0;
                    };
                } else {
                    document.addEventListener(
                        "DOMContentLoaded",
                        function() {
                            if (Odometer.options.auto !== false) {
                                return Odometer.init();
                            }
                        },
                        false
                    );
                }

                if (typeof define === "function" && define.amd) {
                    define([], function() {
                        return Odometer;
                    });
                } else if (typeof exports !== "undefined" && exports !== null) {
                    module.exports = Odometer;
                } else {
                    window.Odometer = Odometer;
                }
            }.call(this));
        </script>



        <div class="container">

            @if (count($reportFaqDetail) > 0)
                <div class="row">
                    <div class="col-sm-12 bottom-cont" style="text-align:justify;margin-top:30px;">
                        <div class="timeline-cont">
                            <div class="timeline-p">

                                <div class="accordion-content">
                                    <h2>FAQs</h2>


                                    @foreach ($reportFaqDetail as $reportFaqDetailData)
                                        <div class="accordion-item">

                                            @if ($reportFaqDetailData->q1 != '')
                                                <header class="item-header">
                                                    <h3 class="item-question">
                                                        {{ $reportFaqDetailData->q1 }}
                                                    </h3>
                                                    <div class="item-icon">
                                                        <i class='bx bx-chevron-down'></i>
                                                    </div>
                                                </header>


                                                <div class="item-content">
                                                    <p class="item-answer">
                                                        {{ $reportFaqDetailData->a1 }}
                                                    </p>
                                                </div>
                                        </div>
                                    @endif

                                    @if ($reportFaqDetailData->q2 != '')
                                        <div class="accordion-item">
                                            <header class="item-header">
                                                <h3 class="item-question">
                                                    {{ $reportFaqDetailData->q2 }}
                                                </h3>
                                                <div class="item-icon">
                                                    <i class='bx bx-chevron-down'></i>
                                                </div>
                                            </header>


                                            <div class="item-content">
                                                <p class="item-answer">
                                                    {{ $reportFaqDetailData->a2 }}
                                                </p>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($reportFaqDetailData->q3 != '')
                                        <div class="accordion-item">
                                            <header class="item-header">
                                                <h3 class="item-question">
                                                    {{ $reportFaqDetailData->q3 }}
                                                </h3>
                                                <div class="item-icon">
                                                    <i class='bx bx-chevron-down'></i>
                                                </div>
                                            </header>


                                            <div class="item-content">
                                                <p class="item-answer">
                                                    {{ $reportFaqDetailData->a3 }}
                                                </p>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($reportFaqDetailData->q4 != '')
                                        <div class="accordion-item">
                                            <header class="item-header">
                                                <h3 class="item-question">
                                                    {{ $reportFaqDetailData->q4 }}
                                                </h3>
                                                <div class="item-icon">
                                                    <i class='bx bx-chevron-down'></i>
                                                </div>
                                            </header>


                                            <div class="item-content">
                                                <p class="item-answer">
                                                    {{ $reportFaqDetailData->a4 }}
                                                </p>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($reportFaqDetailData->q5 != '')
                                        <div class="accordion-item">
                                            <header class="item-header">
                                                <h3 class="item-question">
                                                    {{ $reportFaqDetailData->q5 }}
                                                </h3>
                                                <div class="item-icon">
                                                    <i class='bx bx-chevron-down'></i>
                                                </div>
                                            </header>


                                            <div class="item-content">
                                                <p class="item-answer">
                                                    {{ $reportFaqDetailData->a5 }}
                                                </p>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($reportFaqDetailData->q6 != '')
                                        <div class="accordion-item">
                                            <header class="item-header">
                                                <h3 class="item-question">
                                                    {{ $reportFaqDetailData->q6 }}
                                                </h3>
                                                <div class="item-icon">
                                                    <i class='bx bx-chevron-down'></i>
                                                </div>
                                            </header>


                                            <div class="item-content">
                                                <p class="item-answer">
                                                    {{ $reportFaqDetailData->a6 }}
                                                </p>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($reportFaqDetailData->q7 != '')
                                        <div class="accordion-item">
                                            <header class="item-header">
                                                <h3 class="item-question">
                                                    {{ $reportFaqDetailData->q7 }}
                                                </h3>
                                                <div class="item-icon">
                                                    <i class='bx bx-chevron-down'></i>
                                                </div>
                                            </header>


                                            <div class="item-content">
                                                <p class="item-answer">
                                                    {{ $reportFaqDetailData->a7 }}
                                                </p>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($reportFaqDetailData->q8 != '')
                                        <div class="accordion-item">
                                            <header class="item-header">
                                                <h3 class="item-question">
                                                    {{ $reportFaqDetailData->q8 }}
                                                </h3>
                                                <div class="item-icon">
                                                    <i class='bx bx-chevron-down'></i>
                                                </div>
                                            </header>


                                            <div class="item-content">
                                                <p class="item-answer">
                                                    {{ $reportFaqDetailData->a8 }}
                                                </p>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($reportFaqDetailData->q9 != '')
                                        <div class="accordion-item">
                                            <header class="item-header">
                                                <h3 class="item-question">
                                                    {{ $reportFaqDetailData->q9 }}
                                                </h3>
                                                <div class="item-icon">
                                                    <i class='bx bx-chevron-down'></i>
                                                </div>
                                            </header>


                                            <div class="item-content">
                                                <p class="item-answer">
                                                    {{ $reportFaqDetailData->a9 }}
                                                </p>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($reportFaqDetailData->q10 != '')
                                        <div class="accordion-item">
                                            <header class="item-header">
                                                <h3 class="item-question">
                                                    {{ $reportFaqDetailData->q10 }}
                                                </h3>
                                                <div class="item-icon">
                                                    <i class='bx bx-chevron-down'></i>
                                                </div>
                                            </header>


                                            <div class="item-content">
                                                <p class="item-answer">
                                                    {{ $reportFaqDetailData->a10 }}
                                                </p>
                                            </div>
                                        </div>
                                    @endif
            @endforeach

        </div>

    </div>
    </div>
    </div>
    @endif

    <script>
        const accordionBtns = document.querySelectorAll(".item-header");

        accordionBtns.forEach((accordion) => {
            accordion.onclick = function() {
                this.classList.toggle("active");

                let content = this.nextElementSibling;
                console.log(content);

                if (content.style.maxHeight) {
                    //this is if the accordion is open
                    content.style.maxHeight = null;
                } else {
                    //if the accordion is currently closed
                    content.style.maxHeight = content.scrollHeight + "px";
                    console.log(content.style.maxHeight);
                }
            };
        });
    </script>
</div>
</div>

<div class="container">
 
    <div class="row">
        <div class="col-sm-12 bottom-cont" style="text-align:justify;margin-top:30px;">
            <div class="timeline-cont">
                <div class="timeline-p bottop-cont">

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



</div>








    </div>
@endsection
