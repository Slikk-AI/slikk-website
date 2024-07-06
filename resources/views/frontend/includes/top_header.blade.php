<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="https://slikk.ai/img/Slikk-Icon.svg">
<title>{{ isset($meta_title) ? strip_tags($meta_title) : '' }}</title>

@php
if(isset($meta_description) !=''){
    $key = strip_tags($meta_description);
}
@endphp

@if(isset($meta_description) !='')
<meta name="keywords" content="{{ $key ?? '' }}">
@endif
<meta name="description" content="{{ isset($meta_keywords) ? strip_tags($meta_keywords) : '' }}">

<meta name="language" content="English">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
<link rel="canonical" href="{{url(''.$actual_link)}}">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://www.emergenresearch.com/js/jquery.js"></script>
  {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> --}}

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
{{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto&display=swap" rel="stylesheet"> --}}
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto:wght@300&display=swap" rel="stylesheet">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W24QW8T');</script>
<!-- End Google Tag Manager -->

  <style>




:root {

/* Colors: */
--unnamed-color-6b52f9: #6B52F9;
--unnamed-color-ededf2: #EDEDF2;
--unnamed-color-ffffff: #FFFFFF;
--unnamed-color-2900ff: #2900FF;
--unnamed-color-6c63ff: #6C63FF;
--unnamed-color-fceeff: #FCEEFF;
--unnamed-color-6253b2: #6253B2;
--unnamed-color-5433ff: #5433FF;
--unnamed-color-1d2121: #1D2121;

/* Font/text values */
--unnamed-font-family-roboto: Roboto;
--unnamed-font-family-scandia: Scandia;
--unnamed-font-family-urbane-rounded: Urbane Rounded;
--unnamed-font-style-normal: normal;
--unnamed-font-weight-300: 300px;
--unnamed-font-weight-normal: normal;
--unnamed-font-weight-medium: medium;
--unnamed-font-weight-bold: bold;
--unnamed-font-size-14: 14px;
--unnamed-font-size-16: 16px;
--unnamed-font-size-18: 18px;
--unnamed-font-size-20: 20px;
--unnamed-font-size-25: 25px;
--unnamed-font-size-30: 30px;
--unnamed-font-size-36: 36px;
--unnamed-font-size-50: 50px;
--unnamed-character-spacing-0: 0px;
--unnamed-line-spacing-19: 19px;
--unnamed-line-spacing-21: 21px;
--unnamed-line-spacing-26: 26px;
--unnamed-line-spacing-30: 30px;
--unnamed-line-spacing-33: 33px;
--unnamed-line-spacing-39: 39px;
--unnamed-line-spacing-44: 44px;
--unnamed-line-spacing-60: 60px;
}

/* Character Styles */
.unnamed-character-style-1 {
font-family: var(--unnamed-font-family-scandia);
font-style: var(--unnamed-font-style-normal);
font-weight: var(--unnamed-font-weight-medium);
font-size: var(--unnamed-font-size-50);
line-height: var(--unnamed-line-spacing-60);
letter-spacing: var(--unnamed-character-spacing-0);
color: var(--unnamed-color-ffffff);
}
.unnamed-character-style-2 {
font-family: var(--unnamed-font-family-urbane-rounded);
font-style: var(--unnamed-font-style-normal);
font-weight: var(--unnamed-font-weight-bold);
font-size: var(--unnamed-font-size-36);
line-height: var(--unnamed-line-spacing-44);
letter-spacing: var(--unnamed-character-spacing-0);
color: var(--unnamed-color-1d2121);
}
.unnamed-character-style-3 {
font-family: var(--unnamed-font-family-urbane-rounded);
font-style: var(--unnamed-font-style-normal);
font-weight: var(--unnamed-font-weight-bold);
font-size: var(--unnamed-font-size-25);
line-height: var(--unnamed-line-spacing-30);
letter-spacing: var(--unnamed-character-spacing-0);
color: var(--unnamed-color-ffffff);
}
.unnamed-character-style-4 {
font-family: var(--unnamed-font-family-roboto);
font-style: var(--unnamed-font-style-normal);
font-weight: var(--unnamed-font-weight-medium);
font-size: var(--unnamed-font-size-20);
line-height: var(--unnamed-line-spacing-26);
letter-spacing: var(--unnamed-character-spacing-0);
color: var(--unnamed-color-ffffff);
}
.unnamed-character-style-5 {
font-family: var(--unnamed-font-family-roboto);
font-style: var(--unnamed-font-style-normal);
font-weight: var(--unnamed-font-weight-300);
font-size: var(--unnamed-font-size-18);
line-height: var(--unnamed-line-spacing-30);
letter-spacing: var(--unnamed-character-spacing-0);
color: var(--unnamed-color-ffffff);
}
.unnamed-character-style-6 {
font-family: var(--unnamed-font-family-roboto);
font-style: var(--unnamed-font-style-normal);
font-weight: var(--unnamed-font-weight-normal);
font-size: var(--unnamed-font-size-25);
line-height: var(--unnamed-line-spacing-33);
letter-spacing: var(--unnamed-character-spacing-0);
color: var(--unnamed-color-1d2121);
}
.unnamed-character-style-7 {
font-family: var(--unnamed-font-family-roboto);
font-style: var(--unnamed-font-style-normal);
font-weight: var(--unnamed-font-weight-normal);
font-size: var(--unnamed-font-size-30);
line-height: var(--unnamed-line-spacing-39);
letter-spacing: var(--unnamed-character-spacing-0);
color: var(--unnamed-color-1d2121);
}
.unnamed-character-style-8 {
font-family: var(--unnamed-font-family-roboto);
font-style: var(--unnamed-font-style-normal);
font-weight: var(--unnamed-font-weight-normal);
font-size: var(--unnamed-font-size-16);
line-height: var(--unnamed-line-spacing-21);
letter-spacing: var(--unnamed-character-spacing-0);
color: var(--unnamed-color-ffffff);
}
.unnamed-character-style-9 {
font-family: var(--unnamed-font-family-urbane-rounded);
font-style: var(--unnamed-font-style-normal);
font-weight: var(--unnamed-font-weight-bold);
font-size: var(--unnamed-font-size-50);
line-height: var(--unnamed-line-spacing-60);
letter-spacing: var(--unnamed-character-spacing-0);
color: var(--unnamed-color-ffffff);
}
.unnamed-character-style-10 {
font-family: var(--unnamed-font-family-roboto);
font-style: var(--unnamed-font-style-normal);
font-weight: var(--unnamed-font-weight-normal);
font-size: var(--unnamed-font-size-25);
line-height: var(--unnamed-line-spacing-33);
letter-spacing: var(--unnamed-character-spacing-0);
color: var(--unnamed-color-ffffff);
}
.unnamed-character-style-11 {
font-family: var(--unnamed-font-family-roboto);
font-style: var(--unnamed-font-style-normal);
font-weight: var(--unnamed-font-weight-normal);
font-size: var(--unnamed-font-size-16);
line-height: var(--unnamed-line-spacing-21);
letter-spacing: var(--unnamed-character-spacing-0);
color: var(--unnamed-color-1d2121);
}
.unnamed-character-style-12 {
font-family: var(--unnamed-font-family-roboto);
font-style: var(--unnamed-font-style-normal);
font-weight: var(--unnamed-font-weight-normal);
font-size: var(--unnamed-font-size-14);
line-height: var(--unnamed-line-spacing-19);
letter-spacing: var(--unnamed-character-spacing-0);
color: var(--unnamed-color-1d2121);
}
.unnamed-character-style-13 {
font-family: var(--unnamed-font-family-roboto);
font-style: var(--unnamed-font-style-normal);
font-weight: var(--unnamed-font-weight-300);
font-size: var(--unnamed-font-size-14);
line-height: var(--unnamed-line-spacing-19);
letter-spacing: var(--unnamed-character-spacing-0);
color: var(--unnamed-color-1d2121);
}

.navclass {
    background:#609CFC 0% 0% no-repeat padding-box !important;
}

.hero_title {
    font: var(--unnamed-font-style-normal) normal var(--unnamed-font-weight-bold) var(--unnamed-font-size-50)/var(--unnamed-line-spacing-60) var(--unnamed-font-family-urbane-rounded);
letter-spacing: var(--unnamed-character-spacing-0);
color: var(--unnamed-color-ffffff);
text-align: left;
font: normal normal bold 35px/42px Urbane Rounded;
letter-spacing: 0px;
color: #FFFFFF;
opacity: 1;
}

.hero_desc {
    font: var(--unnamed-font-style-normal) normal var(--unnamed-font-weight-normal) var(--unnamed-font-size-25)/var(--unnamed-line-spacing-33) var(--unnamed-font-family-roboto);
letter-spacing: var(--unnamed-character-spacing-0);
color: var(--unnamed-color-ffffff);
text-align: left;
font: normal normal normal 20px/23px Roboto;
letter-spacing: 0px;
color: #FFFFFF;
font-weight:100;
opacity: 1;

}

.section_title {
    font: var(--unnamed-font-style-normal) normal var(--unnamed-font-weight-bold) 36px/44px var(--unnamed-font-family-urbane-rounded);
letter-spacing: var(--unnamed-character-spacing-0);
color: var(--unnamed-color-1d2121);
text-align: center;
font: normal normal bold 36px/44px Urbane Rounded;
letter-spacing: 0px;
color: #1D2121;
opacity: 1;
}

.jumbotron {
    padding: 0px;
}

.section_title {
    font-family: 'Roboto', sans-serif;
}
.hero_title{
    font-family: 'Roboto', sans-serif;
}

.icon {
    width: 70px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom:30px;
}

.icon img {
    width: 70px;

}

.icon-about {
    width: 100px;
    margin-left: auto;
    margin-right: auto;
    height: 100px;
    border-radius: 65px;
    box-shadow: 1px 3px 6px #00000029;
    background: #6B52F9 0% 0% no-repeat padding-box;
}

.box-title {
  text-align:center;
  padding-top: 10px;
  padding-bottom:10px;
  margin-right:auto;
  margin-left: auto;
  font-family: 'Roboto', sans-serif;
  font: normal normal normal 22px/26px Roboto;
letter-spacing: 0px;
color: #1D2121;


}

h3.timeline-title {
  text-align:center;
  padding-top: 10px;
  padding-bottom:10px;
  margin-right:auto;
  margin-left: auto;
  font-family: 'Roboto', sans-serif;
  font: normal normal normal 30px/39px Roboto;
letter-spacing: 0px;
color: #1D2121;

}

.timeline-p {
    /* font-weight: 100 !important; */
    font: normal normal normal 18px/27px Roboto;
    color: var(--dark);
}

.icon-cont {
    /* background: transparent url(img/Rectangle 615.png) 0% 0% no-repeat padding-box; */
    box-shadow: 0px 3px 6px #00000029;
    border-radius: 24px;
    padding: 10px;
    margin-right: 10%;
    margin-left: 10%;
    background: #f0f0f0;
}

.position {
 
box-shadow: 0px 3px 6px #00000029;
border-radius: 24px;
}

.open {
  background: #5433FF 0% 0% no-repeat padding-box;
  letter-spacing: var(--unnamed-character-spacing-0);
color: var(--unnamed-color-ffffff);
text-align: center;
font: normal normal normal 14px/16px Roboto;
letter-spacing: 0px;
color: #FFFFFF;
padding: 3px;
width: 100px;
}

.filled {
  background: #636363 0% 0% no-repeat padding-box;
  letter-spacing: var(--unnamed-character-spacing-0);
color: var(--unnamed-color-ffffff);
text-align: center;
font: normal normal normal 14px/16px Roboto;
letter-spacing: 0px;
color: #FFFFFF;
padding: 3px;
width: 150px;
}

.pos_box {
    padding: 10px;
    /* background: #000; */
}

.marb_50 {
  margin-bottom: 50px;
}

.hero_form {
    box-shadow: 9px 9px 4px #0000004f;
    /* border-radius: 0px 100px 0px 144px; */
    background: #fff;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
    padding: 20px;
    min-height: 400px;
}

.hero_form label {
  display:none;
}

.inputbox {
    background: var(--unnamed-color-ffffff) 0% 0% no-repeat padding-box;
    border: 1px solid var(--unnamed-color-ededf2);
    background: #FFFFFF 0% 0% no-repeat padding-box;
    box-shadow: 0px 2px 5px #26334d29;
    border: 1px solid #EDEDF2;
    border-radius: 5px;
    margin-bottom: 15px;
    width: 90%;
    margin-left: auto;
    margin-right: auto;
}

.inputcheck {
    background: var(--unnamed-color-ffffff) 0% 0% no-repeat padding-box;
    border: 1px solid var(--unnamed-color-ededf2);
    background: #FFFFFF 0% 0% no-repeat padding-box !important;
    box-shadow: 0px 2px 5px #26334d29 !important;
    border: 1px solid #EDEDF2 !important;
    border-radius: 5px !important;
    width: 25px;
    height: 20px !important;
    float: left;
    margin-bottom: 20px;
    text-align: left;

    margin-left: 100px;
    margin-right: 10px;
}

.inputtext {
    background: var(--unnamed-color-ffffff) 0% 0% no-repeat padding-box;
    border: 1px solid var(--unnamed-color-ededf2);
    background: #FFFFFF 0% 0% no-repeat padding-box;
    box-shadow: 0px 2px 5px #26334d29;
    border: 1px solid #EDEDF2;
    border-radius: 5px;
    margin-bottom: 15px;
    width: 90%;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
}

.hero_sub {
  background: var(--unnamed-color-5433ff) 0% 0% no-repeat padding-box;
background: #5433FF 0% 0% no-repeat padding-box;
box-shadow: 0px 3px 6px #00000029;
border-radius: 4px;
width: 90%;
margin-left: auto;
    margin-right: auto;
}

      </style>

<style>
            .accordion-content {
                max-width: 100%;
                margin: 0 auto;
                padding: 2rem;
                background: #fff;
                box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.09);
                border-radius: 8px;
            }

            .accordion-item {
                display: flex;
                flex-direction: column;
                padding: 0 1rem;
                border-radius: 5px;
                border: 1px solid #ddd;
                box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.09);
                cursor: pointer;
                background: #fff;
                margin-bottom: 0.5em;
            }

            .item-header {
                display: flex;
                justify-content: space-between;
                column-gap: 0.2em;
                padding: 10px;

            }

            .item-icon {
               
                flex: 0 0 25px;
                display: grid;
                place-items: center;
                font-size: 1.25rem;
                height: 25px;
                width: 25px;
                border-radius: 4px;
                background: #dedede;
                cursor: pointer;
                box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.09);
            }

            .item-icon i {
                transition: all 0.25s cubic-bezier(0.5, 0, 0.1, 1);
            }

            .item-question {
                font-size: 1em;
                line-height: 1;
                font-weight: 500;
            }

            .active .item-icon i {
                transform: rotate(180deg);
            }

            .active .item-question {
                font-weight: 500;
            }

            .item-content {
                max-height: 0;
                overflow: hidden;
                transition: all 300ms ease;
            }

            .item-answer {
                line-height: 150%;
                opacity: 0.8;
            }


            h1,h2,h3 {

font-family: 'Poppins', sans-serif !important;

}

::placeholder {
    color: #958888 !important;
}

input,select,textarea {
    color: #958888!important;
}

.form-control{
    color: #958888 !important;
}

.center-text {
    text-align: center !important;
}

.top-banner {
padding-top: 70px;
}


@media screen and (max-width:800px) {
    .top-banner {
padding-top: 50px;
}

.container {
    padding:10px;
}

.hero_form {
    margin-top: 20px;
    width: 100% !important;
}

.item-header {
    padding: 10px 0px;
}

.item-question {
    font-size: 14px;

}

.item-answer {
    text-align: left;
    font-size: 13px;
}

.accordion-content {
    padding: 10px;
    text-align: left;
}



.accordion-content {

    padding: 10px;

}

.hero_title {

    font: normal normal bold 30px/37px Urbane Rounded;
}

.banner-img {
    width: 100% !important;
}

.card-box {
    margin-bottom: 20px;
}

}

.bottop-cont h1 {
    text-align: left !important;
}


.bottop-cont h3 {
    text-align: left !important;
}

.accordion-item {
    margin-top: 30px;
}

.bottop-cont h2 {
    text-align: left !important;
    /* font-weight: 100 !important; */
    color: #403e3e;
    font-size: 28px;
}



.ftco-section {
    padding: 0px;
}

.hero_desc {

    margin-top: 20px;
}

h3.timeline-title {
    text-align: left;

}

.section_title {

    font: normal normal normal 30px/39px Roboto;
    text-align: left;
}
.timeline-p {
 
    text-align: justify;
}

.timeline-p.bottop-cont {
    padding-bottom: 40px;
}



#customers-testimonials12 .item-details12 p {
    font-size: 14px;
    font-style: italic;
}


.item-question {

    text-align: left;
}

.item-answer {
    text-align: left;
}

.bottop-cont ul li:before {
    width: 20px;
    height: 30px;
    margin-right: 10px;
    vertical-align: middle;
    /* background: url(https://slikk.ai/assets/img/disc.png) no-repeat left center; */
    background-size: contain;
    content: '';
}

.bottop-cont ul li {
    list-style: disc;
    margin-bottom: 10px;
  
   
    font: normal normal normal 18px/27px Roboto;
}



.cat-menu {
    margin-bottom: 30px;
    /* background: #6B52F9 0% 0% no-repeat padding-box; */
    background: #6B52F9 0% 0% no-repeat padding-box;
    box-shadow: 0px 3px 6px #00000029;
    border-radius: 48px;
    padding: 10px 50px;
    color: #fff;
    width: calc(100% - 20px) !important;
    text-align: center;
  
  
    margin-left: 5px;
}


.cat-menu a {
    font-size: 15px;
}


.video-cont span {
    color: #fff;
    font-size: 32px;
    text-align: center;
}

.video-cont {
    background: #7E69F9;
    padding: 70px;
    margin-bottom: 10px;
    border-radius: 70px;
}

.video-cont span i{
text-align: center;
    margin: auto;
    display: block;
    margin-bottom: 20px;
    font-size: 47px;
}

.vid-cont {
    width: 100%;
    display: contents;
}

.video-box {
    border: 1px solid #d9d5d5;
    padding: 40px;
    /* border-radius: 70px; */
    /* background: var(--unnamed-color-ffffff) 0% 0% no-repeat padding-box; */
    background: #FFFFFF 0% 0% no-repeat padding-box;
    box-shadow: 0px 3px 6px #00000029;
    border-radius: 32px;
}

.outside-head {
    padding: 10px;
    text-align: center;
}

.post-block {

    margin-bottom: 20px;
}

.blog-cont {
    margin-right: 10px;
    margin-left: 10px;
    border-radius: 0px;
    background: #fff;
    margin-bottom: 20px;
}


        </style>

        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W24QW8T"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>