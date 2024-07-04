<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="http://34.221.127.72/img/Slikk-Icon.svg">
    <title>Partner Form | Slikk</title>
    <meta name="keywords" content="{{ $key ?? '' }}">
    <meta name="description" content="Best Project Management Software with 360 degree visibility. Slikk's 360 degree visibility offers a detailed view of your project. Click here to know more!">

    <meta name="language" content="English">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
    <link rel="canonical" href="{{url(''.$actual_link)}}">
    <!-- stylesheet start-->
        @include('frontnew.layouts.includes.stylesheet')
    <!-- stylesheet end-->
    <link href="image/slikk-favicon.png" rel="shortcut icon" type="image/x-icon" />
    <link href="image/slikk-favicon.png" rel="apple-touch-icon" />
    <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-W24QW8T');</script>
    <!-- End Google Tag Manager -->
    <style>
        /*width*/
        ::-webkit-scrollbar {
            width: 4px;
            height: 4px;
        }

        /*thumb*/
        ::-webkit-scrollbar-thumb {
            background: rgb(94, 114, 228);
            border-radius: 10px;
        }
    </style>
</head>
<body>
<div class="global-styles w-embed">
    <style>
        .w-richtext> :first-child {
            margin-top: 0;
        }

        .w-richtext> :last-child,
        .w-richtext ol li:last-child,
        .w-richtext ul li:last-child {
            margin-bottom: 0;
        }

        .clickable-off {
            pointer-events: none;
        }

        .clickable-on {
            pointer-events: auto;
        }

        .div-square::after {
            content: "";
            display: block;
            padding-bottom: 100%;
        }

        main:focus-visible {
            outline: -webkit-focus-ring-color auto 0px;
        }

        .container-medium,
        .container-small,
        .container-large {
            margin-right: auto !important;
            margin-left: auto !important;
        }

        a {
            color: inherit;
            text-decoration: inherit;
            font-size: inherit;
        }

        .text-style-3lines {
            display: -webkit-box;
            overflow: hidden;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }

        .text-style-2lines {
            display: -webkit-box;
            overflow: hidden;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
    </style>
</div>  
<style>
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
        background: rgba(233, 243, 252, 0.45);
        /* background: linear-gradient(120deg, #D8E8F8, #fff); */
        margin-top: 0.2rem;
        /* border-radius: 50px; */
        /* margin-left: 20px;
        margin-right: 20px; */
        margin-bottom: 2rem;
        margin-top: 2rem;
    }
    .element-section-bg-1{
        background: linear-gradient(300deg, #D8E8F8, #fff);
    }
    .gl-element-bgimage{
        background: url('http://34.221.127.72/assets/frontend/image/bg-g.png');
        background-repeat: no-repeat;
        background-size: 1528px;
        background-size: 1500px 440px;
        margin-top: 10rem;
        margin-bottom: 3rem;
    }
    .buttons-center-banner{
        margin-left: 11rem;
        padding-bottom: 2rem;
    }
    .elements-image-div{
        /* right: 7rem!important;
        width: 42rem;
        margin-bottom: -5rem; */
        right: 14rem!important;
        width: 46rem;
        margin-bottom: -5rem;
    }
    .elemets-img{
        /* height:auto;
        top: 5rem;
        width: 65rem; */
        height: 20rem;
        top: 5rem;
        width: 35rem;
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
        border-top: 2px solid pink;
        border-right: 2px solid pink;
        margin-left: 4rem;
        margin-right: 4rem;
        border-bottom: 2px solid pink;
    }
    .element-listen-bg{
        border: 3px solid transparent;
        background: linear-gradient(#F3F7FE, #F3F7FE) padding-box, linear-gradient(to right, #71147E, #F99807, #F11170) border-box;
        border-radius: 50px;
    }
    .element-listen-left-div{
        /* margin-left: -3rem; */
        width:50%;
    }
    .element-listen-image-div{
        right: -7rem!important;
        width: 30rem;
        margin-bottom: -8rem;
        margin-top: 1rem;
    }
    .element-listen-image{
        height: 15rem;
        top: 5rem;
        width: 25rem;
    }
    .elements-icon-slikk{
        width: 120px;
        margin-bottom: 1rem;
    }
    .element-listen-slikk{
        margin-top:8rem;
        margin-bottom:4rem;
    }
    .elements-bg-second{
        border-left: 2px solid pink;
        margin-top: -4rem;
        margin-left: 4rem;
        margin-right: 4rem;
        border-bottom: 2px solid pink;
        padding-top: 1rem;
    }
    .elements-bg-third{
        border-right: 2px solid pink;
        border-bottom: 2px solid pink;
        margin-left: 4rem;
        margin-right: 4rem;
        margin-top: -1rem;
        padding-top: 2rem;
    }
    .elements-bg-fourth{
        border-left: 2px solid pink;
        margin-left: 4rem;
        margin-right: 4rem;
        border-bottom: 2px solid pink;
        padding-top: 1rem;
    }
    .elements-bg-last{
        border-left: 2px solid pink;
        margin-left: 4rem;
        margin-right: 4rem;
        padding-top: 1rem;
    }
    .mheading-c{
        float:left;
    }
    .margin-medium p{
        float:left;
    }
    .card-bgg{
        /* background: url(http://34.221.127.72/assets/frontend/image/icons/Rectangle 4419.svg); */
        background: #71147e;
    }
    /* .mheading-c{
        color:#71147e
    } */
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
            width: 20rem;
            padding: 1rem;
            top: 0.5rem;
            right: 12rem;
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
            width: 20rem;
            top: -2.5rem;
            right: 18rem;
            height: 10rem;
        }
        .margin-top-testimonial-mweb{
            margin-top:0rem;
        }
        .element-listen-slikk{
            margin-top:1rem;
        }
        .element-listen{
            margin-left: 2rem;
            margin-right: 2rem;
        }
        .elements-bg-second{
            margin-left: 2rem;
            margin-right: 2rem;
        }
        .elements-bg-third{
            margin-left: 2rem;
            margin-right: 2rem;
        }
        .elements-bg-fourth{
            margin-left: 2rem;
            margin-right: 2rem;
        }
        .elements-bg-last{
            margin-left: 2rem;
            margin-right: 2rem;
        }
    }
</style>
<div class="page-wrapper">
    <!-- header start-->
    @include('frontnew.layouts.includes.header-testing')
    <!-- header end-->
    <main class="main-wrapper">
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
                .banner2{
                    height: 1600px!important;
                }
                .last-div-banner{
                    margin-top: 1rem!important;
                    height: auto!important;
                }
                .col-md-4{
                    margin-bottom: 1rem;
                }
                .col-div-padding{
                    margin-bottom: -2rem;
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
        .section-customers{
            margin-top:-4rem;
        }
        .banner-padding{
            /* padding-top: 10rem; */
            padding-left: 2rem;
            padding-right: 2rem;
            border: 1px solid #fff;
            border-radius: 0 0 10px 10px;
            box-shadow: 2px 3px 12px 2px rgba(0, 0, 0, 0.05);
        }
        .banner{
            margin-top: -6rem;
            margin-left: 7rem;
        }
        .home-head {
            margin-left: 20px;
            margin-right: 10px;
            text-align: left;
            margin-bottom: 2rem;
            font-family: Satoshi,sans-serif;
        }
        .home-p {
            text-align: left;
            width: 90%;
            /* margin-left: 5%!important; */
            margin-left: 4%!important;
            font-family: Satoshi,sans-serif;
            margin-bottom: 2rem;
        }
        .margin-custom1 a{
            margin-left: 1.5rem;
        }
        .row-div .col-md-4{
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
            padding-right: 15px;
            padding-left: 15px;
            margin-bottom: 2rem;
        }
        .card-div-last{
            margin-left: 10rem;
        }
        .col-div-padding{
            padding-right: 15px;
            padding-left: 15px;
        }
        .last-div-heading{
            margin-top: -10rem;
            margin-bottom: 2rem;
            font-size: 2.5em;
        }
    }
    .home-head{
        color: #71147e;
    }
    .banner2{
        /* background: url('http://34.221.127.72/assets/frontend/image/icons/Rent-A-Car-Instagram-Story-28 2.svg');
        background-color: #cccccc;
        height: 700px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative; */
        background: rgba(233, 243, 252, 0.45);
    }
    .div3{
        text-align: center;
        background: #71147e;
        color: #ffff;
        border-radius: 0.7rem;
        padding: 0.5rem;
    }
    .div3 h1{
        font-size: 2em;
    }
    .div3 p{
        margin-top: 2rem;
        color: rgba(36, 39, 41, 1)
    }
    .row-div{
        padding: 3rem;
        padding-bottom: 1rem;
    }
    .card{
        border: 1px solid rgba(0, 0, 0, 0.14);
        background: #fff;
        border-radius: 1rem;
    }
    .card-div{
        /* padding: 1rem; */
    }
    .card-heading{
        color: #fff;
        font-weight: bold;
        padding: 1rem;
        font-size: 25px;
    }
    .card-span{
        border-left: 4px solid #fff;
        margin-right: 8px;
    }
    .icon {
        width: 25px;
        height: 25px;
        margin-left: 7rem;
    }
    .text-p{
        padding: 2rem;
    }
    .div3a{
        text-align: center;
    }
    .div3a img{
        width: 8rem;
        margin-top: -1rem;
    }
    .last-div{
        padding: 3rem;
    }
    .last-div-card{
        /* background:rgba(233, 243, 252, 1); */
        padding: 2rem;
        margin-top: 4rem;
    }
    .text-div{
        padding: 1rem;
    }
    .second-section{
        margin-top: 5rem;
    }
    .third-section{
        margin-top: 5rem;
    }
    .last-div-banner{
        background:url('http://34.221.127.72/assets/frontend/image/icons/Vector (9).svg');
        height: 500px;
        margin-top: 15rem;
    }
    .other-div-bg{
        background:rgba(245, 249, 255, 1)
    }
    .banner1{
        background: url('http://34.221.127.72/assets/frontend/image/icons/banner 2.svg');
        background-color: #cccccc;
        height: 300px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        width: 114.4%;
        margin-left: -5rem;
        margin-top: -6.2rem;
    }
    .banner1-h3{
        text-align: center;
        padding-top: 6rem;
        color: #fff;
    }
    .banner-textdiv{
        padding: 2rem;
    }
    .banner1-span{
        color:#71147e;
    }
    .col-md-8{
        flex: 0 0 66.666667%;
        max-width: 66%;
    }
    .last-div-ul li{
        margin-bottom:1rem;
    }
    .icon-div{
        width: 35px;
        height: 35px;
        margin-left: -53rem;
        margin-top: 0.5rem;
        margin-bottom: -1.5rem;
    }
    .second-section-last-div{
        margin-left: 15rem;
        margin-top: 3rem;
    }
    .form_div{
        width: 90%;
        margin-left: 2rem;
        border: 1px solid #fff;
        border-radius: 2rem;
        box-shadow: 2px 3px 12px 2px rgba(0, 0, 0, 0.05);
    }
    .form_section{
        padding: 4rem;
    }
    .form-control{
        width: 100%;
    }
    .submit-form{
        width: 75%;
        margin-left: 5rem;
        margin-top: 2rem;
    }
    @media screen and (width: 1517.78px), 
       screen and (height: 376.67px) {
        .banner1{
            width: 128.2%;
            margin-left: -10rem;
        }
    }
    @media(max-width:999px){
        .banner1{
            width: 100%;
            margin-left: 0px;
            margin-top: 0px;
        }
        .row-div{
            padding: 1rem;
        }
        .second-section-last-div{
            margin-left:0px;
        }
        .icon-div{
            margin-left: 1rem;
        }
        .col-md-8{
            flex: 100%;
            max-width: 100%;
        }
        .form_div{
            width: 100%;
            margin-left: 0px;
        }
        .form_section{
            padding:1rem;
        }
        .submit-form{
            margin-left: 1rem;
        }
    }
</style>
<header class="section-home-header">
    <div class="page-padding">
        <div class="padding-top padding-xxhuge banner-padding">
            <div class="container-large">
                <div class="banner1">
                    <h1 class="banner1-h3">AI Powered Productivity & Collaboration Tool</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="widget" class="section-product-feature mb-4 third-section">
    <div class="page-padding">
        <div class="container-large">
            <div class="padding-top padding-xhuge">
                <div class="form_div">
                    <div class="div3">
                        <h1>Partner Program Inquiry Form</h1>
                        <img src="http://34.221.127.72/img/Slikk-Icon.svg" class="icon-div">
                    </div>
                    <div class="form_section">
                        <p>
                            <b>Welcome to the Slikk Partner Program!</b> We're thrilled to connect with you and explore how we can collaborate to bring the power of Slikk to more organizations.
                        </p>
                        <p>
                        Please fill out the form below to express your interest in our Partner Program. Once we receive your submission, a member of our team will reach out to schedule a call to discuss your partnership goals and how Slikk can help you achieve them.
                        </p>
                        <form action="" Method="Post" enctype="multipartform-data">
                            <div class="form-group mt-4 mb-4">
                                <label for="">First name*</label>
                                <input type="text" name="fname" class="form-control" placeholder="Enter Name" required>
                            </div>
                            <div class="form-group mt-4 mb-4">
                                <label for="">Last name*</label>
                                <input type="text" name="lname" class="form-control" placeholder="Enter Name" required>
                            </div>
                            <div class="form-group mt-4 mb-4">
                                <label for="">Work Email*</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                            </div>
                            <div class="form-group mt-4 mb-4">
                                <label for="">Website*</label>
                                <input type="text" name="website" class="form-control" placeholder="Enter Website" required>
                            </div>
                            <div class="form-group mt-4 mb-4">
                                <label for="">Country*</label>
                                <select name="country" id="" class="form-control" required>
                                    <option default disable>Choose Country</option>
                                    <option value="AFG">Afghanistan</option>
                                    <option value="ALA">Åland Islands</option>
                                    <option value="ALB">Albania</option>
                                    <option value="DZA">Algeria</option>
                                    <option value="ASM">American Samoa</option>
                                    <option value="AND">Andorra</option>
                                    <option value="AGO">Angola</option>
                                    <option value="AIA">Anguilla</option>
                                    <option value="ATA">Antarctica</option>
                                    <option value="ATG">Antigua and Barbuda</option>
                                    <option value="ARG">Argentina</option>
                                    <option value="ARM">Armenia</option>
                                    <option value="ABW">Aruba</option>
                                    <option value="AUS">Australia</option>
                                    <option value="AUT">Austria</option>
                                    <option value="AZE">Azerbaijan</option>
                                    <option value="BHS">Bahamas</option>
                                    <option value="BHR">Bahrain</option>
                                    <option value="BGD">Bangladesh</option>
                                    <option value="BRB">Barbados</option>
                                    <option value="BLR">Belarus</option>
                                    <option value="BEL">Belgium</option>
                                    <option value="BLZ">Belize</option>
                                    <option value="BEN">Benin</option>
                                    <option value="BMU">Bermuda</option>
                                    <option value="BTN">Bhutan</option>
                                    <option value="BOL">Bolivia, Plurinational State of</option>
                                    <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="BIH">Bosnia and Herzegovina</option>
                                    <option value="BWA">Botswana</option>
                                    <option value="BVT">Bouvet Island</option>
                                    <option value="BRA">Brazil</option>
                                    <option value="IOT">British Indian Ocean Territory</option>
                                    <option value="BRN">Brunei Darussalam</option>
                                    <option value="BGR">Bulgaria</option>
                                    <option value="BFA">Burkina Faso</option>
                                    <option value="BDI">Burundi</option>
                                    <option value="KHM">Cambodia</option>
                                    <option value="CMR">Cameroon</option>
                                    <option value="CAN">Canada</option>
                                    <option value="CPV">Cape Verde</option>
                                    <option value="CYM">Cayman Islands</option>
                                    <option value="CAF">Central African Republic</option>
                                    <option value="TCD">Chad</option>
                                    <option value="CHL">Chile</option>
                                    <option value="CHN">China</option>
                                    <option value="CXR">Christmas Island</option>
                                    <option value="CCK">Cocos (Keeling) Islands</option>
                                    <option value="COL">Colombia</option>
                                    <option value="COM">Comoros</option>
                                    <option value="COG">Congo</option>
                                    <option value="COD">Congo, the Democratic Republic of the</option>
                                    <option value="COK">Cook Islands</option>
                                    <option value="CRI">Costa Rica</option>
                                    <option value="CIV">Côte d'Ivoire</option>
                                    <option value="HRV">Croatia</option>
                                    <option value="CUB">Cuba</option>
                                    <option value="CUW">Curaçao</option>
                                    <option value="CYP">Cyprus</option>
                                    <option value="CZE">Czech Republic</option>
                                    <option value="DNK">Denmark</option>
                                    <option value="DJI">Djibouti</option>
                                    <option value="DMA">Dominica</option>
                                    <option value="DOM">Dominican Republic</option>
                                    <option value="ECU">Ecuador</option>
                                    <option value="EGY">Egypt</option>
                                    <option value="SLV">El Salvador</option>
                                    <option value="GNQ">Equatorial Guinea</option>
                                    <option value="ERI">Eritrea</option>
                                    <option value="EST">Estonia</option>
                                    <option value="ETH">Ethiopia</option>
                                    <option value="FLK">Falkland Islands (Malvinas)</option>
                                    <option value="FRO">Faroe Islands</option>
                                    <option value="FJI">Fiji</option>
                                    <option value="FIN">Finland</option>
                                    <option value="FRA">France</option>
                                    <option value="GUF">French Guiana</option>
                                    <option value="PYF">French Polynesia</option>
                                    <option value="ATF">French Southern Territories</option>
                                    <option value="GAB">Gabon</option>
                                    <option value="GMB">Gambia</option>
                                    <option value="GEO">Georgia</option>
                                    <option value="DEU">Germany</option>
                                    <option value="GHA">Ghana</option>
                                    <option value="GIB">Gibraltar</option>
                                    <option value="GRC">Greece</option>
                                    <option value="GRL">Greenland</option>
                                    <option value="GRD">Grenada</option>
                                    <option value="GLP">Guadeloupe</option>
                                    <option value="GUM">Guam</option>
                                    <option value="GTM">Guatemala</option>
                                    <option value="GGY">Guernsey</option>
                                    <option value="GIN">Guinea</option>
                                    <option value="GNB">Guinea-Bissau</option>
                                    <option value="GUY">Guyana</option>
                                    <option value="HTI">Haiti</option>
                                    <option value="HMD">Heard Island and McDonald Islands</option>
                                    <option value="VAT">Holy See (Vatican City State)</option>
                                    <option value="HND">Honduras</option>
                                    <option value="HKG">Hong Kong</option>
                                    <option value="HUN">Hungary</option>
                                    <option value="ISL">Iceland</option>
                                    <option value="IND">India</option>
                                    <option value="IDN">Indonesia</option>
                                    <option value="IRN">Iran, Islamic Republic of</option>
                                    <option value="IRQ">Iraq</option>
                                    <option value="IRL">Ireland</option>
                                    <option value="IMN">Isle of Man</option>
                                    <option value="ISR">Israel</option>
                                    <option value="ITA">Italy</option>
                                    <option value="JAM">Jamaica</option>
                                    <option value="JPN">Japan</option>
                                    <option value="JEY">Jersey</option>
                                    <option value="JOR">Jordan</option>
                                    <option value="KAZ">Kazakhstan</option>
                                    <option value="KEN">Kenya</option>
                                    <option value="KIR">Kiribati</option>
                                    <option value="PRK">Korea, Democratic People's Republic of</option>
                                    <option value="KOR">Korea, Republic of</option>
                                    <option value="KWT">Kuwait</option>
                                    <option value="KGZ">Kyrgyzstan</option>
                                    <option value="LAO">Lao People's Democratic Republic</option>
                                    <option value="LVA">Latvia</option>
                                    <option value="LBN">Lebanon</option>
                                    <option value="LSO">Lesotho</option>
                                    <option value="LBR">Liberia</option>
                                    <option value="LBY">Libya</option>
                                    <option value="LIE">Liechtenstein</option>
                                    <option value="LTU">Lithuania</option>
                                    <option value="LUX">Luxembourg</option>
                                    <option value="MAC">Macao</option>
                                    <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                                    <option value="MDG">Madagascar</option>
                                    <option value="MWI">Malawi</option>
                                    <option value="MYS">Malaysia</option>
                                    <option value="MDV">Maldives</option>
                                    <option value="MLI">Mali</option>
                                    <option value="MLT">Malta</option>
                                    <option value="MHL">Marshall Islands</option>
                                    <option value="MTQ">Martinique</option>
                                    <option value="MRT">Mauritania</option>
                                    <option value="MUS">Mauritius</option>
                                    <option value="MYT">Mayotte</option>
                                    <option value="MEX">Mexico</option>
                                    <option value="FSM">Micronesia, Federated States of</option>
                                    <option value="MDA">Moldova, Republic of</option>
                                    <option value="MCO">Monaco</option>
                                    <option value="MNG">Mongolia</option>
                                    <option value="MNE">Montenegro</option>
                                    <option value="MSR">Montserrat</option>
                                    <option value="MAR">Morocco</option>
                                    <option value="MOZ">Mozambique</option>
                                    <option value="MMR">Myanmar</option>
                                    <option value="NAM">Namibia</option>
                                    <option value="NRU">Nauru</option>
                                    <option value="NPL">Nepal</option>
                                    <option value="NLD">Netherlands</option>
                                    <option value="NCL">New Caledonia</option>
                                    <option value="NZL">New Zealand</option>
                                    <option value="NIC">Nicaragua</option>
                                    <option value="NER">Niger</option>
                                    <option value="NGA">Nigeria</option>
                                    <option value="NIU">Niue</option>
                                    <option value="NFK">Norfolk Island</option>
                                    <option value="MNP">Northern Mariana Islands</option>
                                    <option value="NOR">Norway</option>
                                    <option value="OMN">Oman</option>
                                    <option value="PAK">Pakistan</option>
                                    <option value="PLW">Palau</option>
                                    <option value="PSE">Palestinian Territory, Occupied</option>
                                    <option value="PAN">Panama</option>
                                    <option value="PNG">Papua New Guinea</option>
                                    <option value="PRY">Paraguay</option>
                                    <option value="PER">Peru</option>
                                    <option value="PHL">Philippines</option>
                                    <option value="PCN">Pitcairn</option>
                                    <option value="POL">Poland</option>
                                    <option value="PRT">Portugal</option>
                                    <option value="PRI">Puerto Rico</option>
                                    <option value="QAT">Qatar</option>
                                    <option value="REU">Réunion</option>
                                    <option value="ROU">Romania</option>
                                    <option value="RUS">Russian Federation</option>
                                    <option value="RWA">Rwanda</option>
                                    <option value="BLM">Saint Barthélemy</option>
                                    <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                                    <option value="KNA">Saint Kitts and Nevis</option>
                                    <option value="LCA">Saint Lucia</option>
                                    <option value="MAF">Saint Martin (French part)</option>
                                    <option value="SPM">Saint Pierre and Miquelon</option>
                                    <option value="VCT">Saint Vincent and the Grenadines</option>
                                    <option value="WSM">Samoa</option>
                                    <option value="SMR">San Marino</option>
                                    <option value="STP">Sao Tome and Principe</option>
                                    <option value="SAU">Saudi Arabia</option>
                                    <option value="SEN">Senegal</option>
                                    <option value="SRB">Serbia</option>
                                    <option value="SYC">Seychelles</option>
                                    <option value="SLE">Sierra Leone</option>
                                    <option value="SGP">Singapore</option>
                                    <option value="SXM">Sint Maarten (Dutch part)</option>
                                    <option value="SVK">Slovakia</option>
                                    <option value="SVN">Slovenia</option>
                                    <option value="SLB">Solomon Islands</option>
                                    <option value="SOM">Somalia</option>
                                    <option value="ZAF">South Africa</option>
                                    <option value="SGS">South Georgia and the South Sandwich Islands</option>
                                    <option value="SSD">South Sudan</option>
                                    <option value="ESP">Spain</option>
                                    <option value="LKA">Sri Lanka</option>
                                    <option value="SDN">Sudan</option>
                                    <option value="SUR">Suriname</option>
                                    <option value="SJM">Svalbard and Jan Mayen</option>
                                    <option value="SWZ">Swaziland</option>
                                    <option value="SWE">Sweden</option>
                                    <option value="CHE">Switzerland</option>
                                    <option value="SYR">Syrian Arab Republic</option>
                                    <option value="TWN">Taiwan, Province of China</option>
                                    <option value="TJK">Tajikistan</option>
                                    <option value="TZA">Tanzania, United Republic of</option>
                                    <option value="THA">Thailand</option>
                                    <option value="TLS">Timor-Leste</option>
                                    <option value="TGO">Togo</option>
                                    <option value="TKL">Tokelau</option>
                                    <option value="TON">Tonga</option>
                                    <option value="TTO">Trinidad and Tobago</option>
                                    <option value="TUN">Tunisia</option>
                                    <option value="TUR">Turkey</option>
                                    <option value="TKM">Turkmenistan</option>
                                    <option value="TCA">Turks and Caicos Islands</option>
                                    <option value="TUV">Tuvalu</option>
                                    <option value="UGA">Uganda</option>
                                    <option value="UKR">Ukraine</option>
                                    <option value="ARE">United Arab Emirates</option>
                                    <option value="GBR">United Kingdom</option>
                                    <option value="USA">United States</option>
                                    <option value="UMI">United States Minor Outlying Islands</option>
                                    <option value="URY">Uruguay</option>
                                    <option value="UZB">Uzbekistan</option>
                                    <option value="VUT">Vanuatu</option>
                                    <option value="VEN">Venezuela, Bolivarian Republic of</option>
                                    <option value="VNM">Viet Nam</option>
                                    <option value="VGB">Virgin Islands, British</option>
                                    <option value="VIR">Virgin Islands, U.S.</option>
                                    <option value="WLF">Wallis and Futuna</option>
                                    <option value="ESH">Western Sahara</option>
                                    <option value="YEM">Yemen</option>
                                    <option value="ZMB">Zambia</option>
                                    <option value="ZWE">Zimbabwe</option>
                                </select>
                            </div>
                            <div class="form-group mt-4 mb-4">
                                <label for="">State of Province*</label>
                                <select name="state" id="" class="form-control" required>
                                <option default disable>Choose State</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                                </select>
                            </div>
                            <div class="form-group mt-4 mb-4">
                                <label for="">City*</label>
                                <select name="city" id="" class="form-control" required>
                                    <option default disable>Choose City</option>
                                    <option value="Alipur">Alipur</option>
                                    <option value="Bawana">Bawana</option>
                                    <option value="Central Delhi">Central Delhi</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Deoli">Deoli</option>
                                    <option value="East Delhi">East Delhi</option>
                                    <option value="Karol Bagh">Karol Bagh</option>
                                    <option value="Najafgarh">Najafgarh</option>
                                    <option value="Nangloi Jat">Nangloi Jat</option>
                                    <option value="Narela">Narela</option>
                                    <option value="New Delhi">New Delhi</option>
                                    <option value="North Delhi">North Delhi</option>
                                    <option value="North East Delhi">North East Delhi</option>
                                    <option value="North West Delhi">North West Delhi</option>
                                    <option value="Pitampura">Pitampura</option>
                                    <option value="Rohini">Rohini</option>
                                    <option value="South Delhi">South Delhi</option>
                                    <option value="South West Delhi">South West Delhi</option>
                                    <option value="West Delhi">West Delhi</option>
                                </select>
                            </div>
                            <div class="form-group mt-4 mb-4">
                                <label for="">How many Consultants does your company employ ?**</label>
                                <input type="text" name="employee" class="form-control" placeholder="Enter Number" required>
                            </div>
                            <div class="form-group mt-4 mb-4">
                                <label for="">How many current customers do you have?**</label>
                                <input type="text" name="customers" class="form-control" placeholder="Enter Number" required>
                            </div>
                            <button type="submit" class="button submit-form">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
    </main>
    <!-- footer start-->
    @include('frontnew.layouts.includes.footer')
    <!-- footer end-->
</div>
 <!-- js start-->
 @include('frontnew.layouts.includes.js')
<!-- js end-->
<script>
        $('.watch-btnn').click(function(){
            $('#video-watch-div').show();
            $('#video-watch-div').removeClass('display');
        });
        $(document).ready(function () {
            setTimeout(function(){
            $(document).on('click','#close-frame',function(){
                $('#video-watch-div').hide();
                $('#video-watch-div').addClass('display');
            });
        },1000);
        });
</script>
<script type="text/javascript">
        $(function(){
            $('#watch-btn-mobile').click(function(){ 
                if(!$('#iframe').length) {
                        $('#iframeHolder').html('<div class="w-lightbox-backdrop" style="transition: opacity 300ms ease 0s; opacity: 1;"><div class="w-lightbox-container"><div class="w-lightbox-content"><div class="w-lightbox-view" tabindex="0" id="w-lightbox-view" style="opacity: 1;"><iframe id="iframe" src="https://www.youtube.com/embed/mi4_8fZo6Dk" width="700" height="450" class="iframe-height-mobile"></iframe></div><div class="w-lightbox-control w-lightbox-left w-lightbox-inactive" role="button" aria-hidden="true"aria-controls="w-lightbox-view" aria-label="previous image" tabindex="-1"></div><div class="w-lightbox-control w-lightbox-right w-lightbox-inactive" role="button" aria-hidden="true" aria-controls="w-lightbox-view" aria-label="next image" tabindex="-1"></div><div id="close-frame-mobile" class="w-lightbox-control w-lightbox-close" role="button" aria-label="close lightbox" tabindex="0"></div></div><div class="w-lightbox-strip" role="tablist"></div></div></div>');
                }
                $('#iframeHolder').removeClass('display');
                $('#iframeHolder').css("display","block");
            });   
        });
    $(document).ready(function () {
        setTimeout(function(){
            $(document).on('click','#close-frame-mobile',function(){
                $('#iframeHolder').hide();
                $('#iframeHolder').addClass('display');
            });
        },1000);
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
<div id="video-watch-div" class="w-lightbox-backdrop display" style="transition: opacity 300ms ease 0s; opacity: 1;">
        <div class="w-lightbox-container">
            <div class="w-lightbox-content">
                <div class="w-lightbox-view" tabindex="0" id="w-lightbox-view" style="opacity: 1;">
                    <div class="w-lightbox-frame">
                        <figure class="w-lightbox-figure"><img class="w-lightbox-img w-lightbox-image"
                                src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20width=%22940%22%20height=%22528%22/%3E"><iframe
                                class="embedly-embed w-lightbox-embed"
                                src="https://www.youtube.com/embed/mi4_8fZo6Dk"
                                width="854" height="480" scrolling="no" title="YouTube embed" frameborder="0"
                                allow="autoplay; fullscreen" allowfullscreen="true"></iframe></figure>
                    </div>
                </div>
                <div class="w-lightbox-spinner w-lightbox-hide" role="progressbar" aria-live="polite" aria-hidden="true"
                    aria-busy="false" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100"
                    aria-valuetext="Loaded image"></div>
                <div class="w-lightbox-control w-lightbox-left w-lightbox-inactive" role="button" aria-hidden="true"
                    aria-controls="w-lightbox-view" aria-label="previous image" tabindex="-1"></div>
                <div class="w-lightbox-control w-lightbox-right w-lightbox-inactive" role="button" aria-hidden="true"
                    aria-controls="w-lightbox-view" aria-label="next image" tabindex="-1"></div>
                <div id="close-frame" class="w-lightbox-control w-lightbox-close" role="button" aria-label="close lightbox" tabindex="0">
                </div>
            </div>
            <div class="w-lightbox-strip" role="tablist"></div>
        </div>
</div>
<div id="iframeHolder" class="display"></div>
</body>
</html>