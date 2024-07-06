@extends('frontend.layouts.master')
@section('content')

 <!-- Template Main CSS File -->
  <!--  <link href="../assets/css_cal/style.css" rel="stylesheet"> -->
    <link href="../assets/css_cal/datepicker2.css" rel="stylesheet">
    <link href="../assets/css_cal/general.css" rel="stylesheet">
    <link href="../assets/css_cal/events.css" rel="stylesheet">

<section class="wrapper">
    <div class="container pt-14 pt-md-16 text-center">
      <div class="row">




        <div class="col-md-10 col-lg-9 col-xl-8 col-xxl-7 mx-auto" style="margin-top:130px;margin-bottom:20px">
          {{-- <h1>Thank You!</h1>
          <i class="fa fa-check main-content__checkmark" id="checkmark" style="font-size:100px;color:#14008A"></i>
          <p class="lead fs-lg mb-6"></p> --}}

          <style>*{
            box-sizing:border-box;
           /* outline:1px solid ;*/
          }
          body{
          background: #ffffff;
          background: linear-gradient(to bottom, #ffffff 0%,#e1e8ed 100%);
          filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e1e8ed',GradientType=0 );
              height: 100%;
                  margin: 0;
                  background-repeat: no-repeat;
                  background-attachment: fixed;
            
          }
          
          .wrapper-1{
            width:100%;
            height:100vh;
            display: flex;
          flex-direction: column;
          }
          .wrapper-2{
            padding :30px;
            text-align:center;
          }
          h1{
              font-family: 'Kaushan Script', cursive;
            font-size:4em;
            letter-spacing:3px;
            color:#14008A ;
            margin:0;
            margin-bottom:20px;
          }
          .wrapper-2 p{
            margin:0;
            font-size:1.3em;
            color:#aaa;
            font-family: 'Source Sans Pro', sans-serif;
            letter-spacing:1px;
          }
          .go-home{
            color:#fff;
            background:#5892FF;
            border:none;
            padding:10px 50px;
            margin:30px 0;
            border-radius:30px;
            text-transform:capitalize;
            box-shadow: 0 10px 16px 1px rgba(174, 199, 251, 1);
          }
          .footer-like{
            margin-top: auto; 
            background:#D7E6FE;
            padding:6px;
            text-align:center;
          }
          .footer-like p{
            margin:0;
            padding:4px;
            color:#5892FF;
            font-family: 'Source Sans Pro', sans-serif;
            letter-spacing:1px;
          }
          .footer-like p a{
            text-decoration:none;
            color:#5892FF;
            font-weight:600;
          }
          
          @media (min-width:360px){
            h1{
              font-size:4.5em;
            }
            .go-home{
              /* margin-bottom:20px; */
            }
          }
          
          @media (min-width:600px){
            .content{
            max-width:1000px;
            margin:0 auto;
          }
            .wrapper-1{
            height: initial;
            max-width:620px;
            margin:0 auto;
            margin-top:50px;
            box-shadow: 4px 8px 40px 8px rgba(88, 146, 255, 0.2);
          }
            
          }</style>

          <div class=content>
            <div class="wrapper-1">
              <div class="wrapper-2">
                <h1>Thank you !</h1>
                <p></p>
                <button class="go-home" style="background:#00d65c">
                Watch a Video
                </button>
                
                <button class="go-home btn btn-warning modal-toggle" id="schedule_call" style="background:#FFBB00 ">
                Schedule a Call
                </button>
              </div>
              <div class="footer-like">
                <p>Have some queries?
                 <a href="#">Click here to msg us</a>
                </p>
              </div>
          </div>
          </div>
          
          
          
          <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
         
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->

      {{-- <div class="row">

        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xxl-6 mx-auto">

          <button type="button" class="btn btn-info">Watch A Video</button>

        </div>

        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xxl-6 mx-auto">

          <button type="button" class="btn btn-warning modal-toggle" id="schedule_call">Schedule A Demo</button>

        </div>

      </div> --}}


<div class="row" id="schedule_block" style="display: none;margin-bottom:20px">
  <div class="col-md-10 col-lg-9 col-xl-8 col-xxl-7 mx-auto" >
        <div class="form_sample">
          
          <h2 class="mt-3 mb-3 px-lg-8">Schedule a Demo </h2>
          <form class="contact-form " method="post" action="{{url('schedule-call')}}" style="border: 1px solid #ded8d8;
          padding: 20px;">
            @csrf
            
            <div class="row" style="display:none">
            <div class="form-group col-md-6">
            <input type="text" class="form-control"  id="name" name="name" value="{{ $name ?? '' }}" placeholder="Your Name" required>
            </div>
            <div class="form-group col-md-6">
            <input type="email" class="form-control"  id="email" name="email" value="{{ $email ?? '' }}" placeholder="Your Email" required>
            </div>
          </div>
            <div class="row">
            <div class="form-group col-md-6">
            <select class="form-control " id="country" name="country" placeholder="Select Country" required onchange="return getCountryTimezone(this.value);">
            <option value="">Select Country</option>
            <option value='us'>United States +(1)</option>
            <option value='gb'>United Kingdom +(44)</option>
            <option value='jp'>Japan +(81)</option>
            <option value='af'>Afghanistan +(93)</option>
            <option value='al'>Albania +(355)</option>
            <option value='dz'>Algeria +(213)</option>
            <option value='as'>American Samoa +(1-684)</option>
            <option value='ad'>Andorra +(376)</option>
            <option value='ao'>Angola +(244)</option>
            <option value='ai'>Anguilla +(1-264)</option>
            <option value='aq'>Antarctica +(672)</option>
            <option value='ag'>Antigua and Barbuda +(1-268)</option>
            <option value='ar'>Argentina +(54)</option>
            <option value='am'>Armenia +(374)</option>
            <option value='aw'>Aruba +(297)</option>
            <option value='au'>Australia +(61)</option>
            <option value='at'>Austria +(43)</option>
            <option value='az'>Azerbaijan +(994)</option>
            <option value='bs'>Bahamas +(1-242)</option>
            <option value='bh'>Bahrain +(973)</option>
            <option value='bd'>Bangladesh +(880)</option>
            <option value='bb'>Barbados +(1-246)</option>
            <option value='by'>Belarus +(375)</option>
            <option value='be'>Belgium +(32)</option>
            <option value='bz'>Belize +(501)</option>
            <option value='bj'>Benin +(229)</option>
            <option value='bm'>Bermuda +(1-441)</option>
            <option value='bt'>Bhutan +(975)</option>
            <option value='bo'>Bolivia +(591)</option>
            <option value='ba'>Bosnia and Herzegowina +(387)</option>
            <option value='bw'>Botswana +(267)</option>
            <option value='bv'>Bouvet Island +(47)</option>
            <option value='br'>Brazil +(55)</option>
            <option value='io'>British Indian Ocean Territory +(246)</option>
            <option value='bn'>Brunei Darussalam +(673)</option>
            <option value='bg'>Bulgaria +(359)</option>
            <option value='bf'>Burkina Faso +(226)</option>
            <option value='bi'>Burundi +(257)</option>
            <option value='kh'>Cambodia +(855)</option>
            <option value='cm'>Cameroon +(237)</option>
            <option value='ca'>Canada +(1)</option>
            <option value='cv'>Cape Verde +(238)</option>
            <option value='ky'>Cayman Islands +(1-345)</option>
            <option value='cf'>Central African Republic +(236)</option>
            <option value='td'>Chad +(235)</option>
            <option value='cl'>Chile +(56)</option>
            <option value='cn'>China +(86)</option>
            <option value='cx'>Christmas Island +(61)</option>
            <option value='cc'>Cocos (Keeling) Islands +(61)</option>
            <option value='co'>Colombia +(57)</option>
            <option value='km'>Comoros +(269)</option>
            <option value='cg'>Congo Democratic Republic of +(242)</option>
            <option value='ck'>Cook Islands +(682)</option>
            <option value='cr'>Costa Rica +(506)</option>
            <option value='ci'>Cote D&#039;Ivoire +(225)</option>
            <option value='hr'>Croatia +(385)</option>
            <option value='cu'>Cuba +(53)</option>
            <option value='cy'>Cyprus +(357)</option>
            <option value='cz'>Czech Republic +(420)</option>
            <option value='dk'>Denmark +(45)</option>
            <option value='dj'>Djibouti +(253)</option>
            <option value='dm'>Dominica +(1-767)</option>
            <option value='do'>Dominican Republic +(1-809)</option>
            <option value='tl'>Timor-Leste +(670)</option>
            <option value='ec'>Ecuador +(593)</option>
            <option value='eg'>Egypt +(20)</option>
            <option value='sv'>El Salvador +(503)</option>
            <option value='gq'>Equatorial Guinea +(240)</option>
            <option value='er'>Eritrea +(291)</option>
            <option value='ee'>Estonia +(372)</option>
            <option value='et'>Ethiopia +(251)</option>
            <option value='fk'>Falkland Islands (Malvinas) +(500)</option>
             <option value='fo'>Faroe Islands +(298)</option>
            <option value='fj'>Fiji +(679)</option>
            <option value='fi'>Finland +(358)</option>
            <option value='fr'>France +(33)</option>
            <option value='gf'>French Guiana +(594)</option>
            <option value='pf'>French Polynesia +(689)</option>
            <option value='tf'>French Southern Territories +(262)</option>
            <option value='ga'>Gabon +(241)</option>
            <option value='gm'>Gambia +(220)</option>
            <option value='ge'>Georgia +(995)</option>
            <option value='de'>Germany +(49)</option>
            <option value='gh'>Ghana +(233)</option>
            <option value='gi'>Gibraltar +(350)</option>
            <option value='gr'>Greece +(30)</option>
            <option value='gl'>Greenland +(299)</option>
            <option value='gd'>Grenada +(1-473)</option>
            <option value='gp'>Guadeloupe +(590)</option>
            <option value='gu'>Guam +(1-671)</option>
            <option value='gt'>Guatemala +(502)</option>
            <option value='gn'>Guinea +(224)</option>
            <option value='gw'>Guinea-bissau +(245)</option>
            <option value='gy'>Guyana +(592)</option>
            <option value='ht'>Haiti +(509)</option>
            <option value='hm'>Heard Island and McDonald Islands +(011)</option>
            <option value='hn'>Honduras +(504)</option>
            <option value='hk'>Hong Kong +(852)</option>
            <option value='hu'>Hungary +(36)</option>
            <option value='is'>Iceland +(354)</option>
            <option value='in'>India +(91)</option>
            <option value='id'>Indonesia +(62)</option>
            <option value='ir'>Iran (Islamic Republic of) +(98)</option>
            <option value='iq'>Iraq +(964)</option>
            <option value='ie'>Ireland +(353)</option>
            <option value='il'>Israel +(972)</option>
            <option value='it'>Italy +(39)</option>
            <option value='jm'>Jamaica +(1-876)</option>
            <option value='jp'>Japan +(81)</option>
            <option value='jo'>Jordan +(962)</option>
            <option value='kz'>Kazakhstan +(7)</option>
            <option value='ke'>Kenya +(254)</option>
            <option value='ki'>Kiribati +(686)</option>
            <option value='kp'>Korea, Democratic People&#039;s Republic of +(850)</option>
            <option value='kr'>South Korea +(82)</option>
            <option value='kw'>Kuwait +(965)</option>
            <option value='kg'>Kyrgyzstan +(996)</option>
            <option value='la'>Lao People&#039;s Democratic Republic +(856)</option>
            <option value='lv'>Latvia +(371)</option>
            <option value='lb'>Lebanon +(961)</option>
            <option value='ls'>Lesotho +(266)</option>
            <option value='lr'>Liberia +(231)</option>
            <option value='ly'>Libya +(218)</option>
            <option value='li'>Liechtenstein +(423)</option>
            <option value='lt'>Lithuania +(370)</option>
            <option value='lu'>Luxembourg +(352)</option>
            <option value='mo'>Macao +(853)</option>
            <option value='mk'>Macedonia, The Former Yugoslav Republic of +(389)</option>
            <option value='mg'>Madagascar +(261)</option>
            <option value='mw'>Malawi +(265)</option>
            <option value='my'>Malaysia +(60)</option>
            <option value='mv'>Maldives +(960)</option>
            <option value='ml'>Mali +(223)</option>
            <option value='mt'>Malta +(356)</option>
            <option value='mh'>Marshall Islands +(692)</option>
            <option value='mq'>Martinique +(596)</option>
            <option value='mr'>Mauritania +(222)</option>
            <option value='mu'>Mauritius +(230)</option>
            <option value='yt'>Mayotte +(262)</option>
            <option value='mx'>Mexico +(52)</option>
            <option value='fm'>Micronesia, Federated States of +(691)</option>
            <option value='md'>Moldova +(373)</option>
            <option value='mc'>Monaco +(377)</option>
            <option value='mn'>Mongolia +(976)</option>
            <option value='ms'>Montserrat +(1-664)</option>
            <option value='ma'>Morocco +(212)</option>
            <option value='mz'>Mozambique +(258)</option>
            <option value='mm'>Myanmar +(95)</option>
            <option value='na'>Namibia +(264)</option>
            <option value='nr'>Nauru +(674)</option>
            <option value='np'>Nepal +(977)</option>
            <option value='nl'>Netherlands +(31)</option>
            <option value='an'>Netherlands Antilles +(599)</option>
            <option value='nc'>New Caledonia +(687	)</option>
            <option value='nz'>New Zealand +(64)</option>
            <option value='ni'>Nicaragua +(505)</option>
            <option value='ne'>Niger +(227)</option>
            <option value='ng'>Nigeria +(234)</option>
            <option value='nu'>Niue +(683)</option>
            <option value='nf'>Norfolk Island +(672)</option>
            <option value='mp'>Northern Mariana Islands +(1-670)</option>
            <option value='no'>Norway +(47)</option>
            <option value='om'>Oman +(968)</option>
            <option value='pk'>Pakistan +(92)</option>
            <option value='pw'>Palau +(680)</option>
            <option value='pa'>Panama +(507)</option>
            <option value='pg'>Papua New Guinea +(675)</option>
            <option value='py'>Paraguay +(595)</option>
            <option value='pe'>Peru +(51)</option>
            <option value='ph'>Philippines +(63)</option>
            <option value='pn'>Pitcairn +(64)</option>
            <option value='pl'>Poland +(48)</option>
            <option value='pt'>Portugal +(351)</option>
            <option value='pr'>Puerto Rico +(1-787)</option>
            <option value='qa'>Qatar +(974)</option>
            <option value='re'>Reunion +(262)</option>
            <option value='ro'>Romania +(40)</option>
            <option value='ru'>Russian Federation +(7)</option>
            <option value='rw'>Rwanda +(250)</option>
            <option value='kn'>Saint Kitts and Nevis +(1-869)</option>
            <option value='lc'>Saint Lucia +(1-758)</option>
            <option value='vc'>Saint Vincent and the Grenadines +(1-784)</option>
            <option value='ws'>Samoa +(685)</option>
            <option value='sm'>San Marino +(378)</option>
            <option value='st'>Sao Tome and Principe +(239)</option>
            <option value='sa'>Saudi Arabia +(966)</option>
            <option value='sn'>Senegal +(221)</option>
            <option value='sc'>Seychelles +(248)</option>
            <option value='sl'>Sierra Leone +(232)</option>
            <option value='sg'>Singapore +(65)</option>
            <option value='sk'>Slovakia (Slovak Republic) +(421)</option>
            <option value='si'>Slovenia +(386)</option>
            <option value='sb'>Solomon Islands +(677)</option>
            <option value='so'>Somalia +(252)</option>
            <option value='za'>South Africa +(27)</option>
            <option value='gs'>South Georgia and the South Sandwich Islands +(500)</option>
            <option value='es'>Spain +(34)</option>
            <option value='lk'>Sri Lanka +(94)</option>
            <option value='sh'>Saint Helena, Ascension and Tristan da Cunha +(290)</option>
            <option value='pm'>St. Pierre and Miquelon +(508)</option>
            <option value='sd'>Sudan +(249)</option>
            <option value='sr'>Suriname +(597)</option>
            <option value='sj'>Svalbard and Jan Mayen Islands +(47)</option>
            <option value='sz'>Swaziland +(268)</option>
            <option value='se'>Sweden +(46)</option>
            <option value='ch'>Switzerland +(41)</option>
            <option value='sy'>Syrian Arab Republic +(963)</option>
            <option value='tw'>Taiwan +(886)</option>
            <option value='tj'>Tajikistan +(992)</option>
            <option value='tz'>Tanzania, United Republic of +(255)</option>
            <option value='th'>Thailand +(66)</option>
            <option value='tg'>Togo +(228)</option>
            <option value='tk'>Tokelau +(690)</option>
            <option value='to'>Tonga +(676)</option>
            <option value='tt'>Trinidad and Tobago +(1-868)</option>
            <option value='tn'>Tunisia +(216)</option>
            <option value='tr'>Turkey +(90)</option>
            <option value='tm'>Turkmenistan +(993)</option>
            <option value='tc'>Turks and Caicos Islands +(1-649)</option>
            <option value='tv'>Tuvalu +(688)</option>
            <option value='ug'>Uganda +(256)</option>
            <option value='ua'>Ukraine +(380)</option>
            <option value='ae'>United Arab Emirates +(971)</option>
            <option value='gb'>United Kingdom +(44)</option>
            <option value='us'>United States +(1)</option>
            <option value='um'>United States Minor Outlying Islands +(246)</option>
            <option value='uy'>Uruguay +(598)</option>
            <option value='uz'>Uzbekistan +(998)</option>
            <option value='vu'>Vanuatu +(678)</option>
            <option value='va'>Vatican City State (Holy See) +(379)</option>
            <option value='ve'>Venezuela +(58)</option>
            <option value='vn'>Vietnam +(84)</option>
            <option value='vg'>Virgin Islands (British) +(1-284)</option>
            <option value='vi'>Virgin Islands (U.S.) +(1-340)</option>
            <option value='wf'>Wallis and Futuna Islands +(681)</option>
            <option value='eh'>Western Sahara +(212)</option>
            <option value='ye'>Yemen +(967)</option>
            <option value='rs'>Serbia +(381)</option>
            <option value='zm'>Zambia +(260)</option>
            <option value='zw'>Zimbabwe +(263)</option>
            <option value='ax'>Aaland Islands +(358)</option>
            <option value='ps'>Palestine +(970)</option>
            <option value='me'>Montenegro +(382)</option>
            <option value='gg'>Guernsey +(44-1481)</option>
            <option value='im'>Isle of Man +(44-1624)</option>
            <option value='je'>Jersey +(44-1534)</option>
            <option value='cw'>Curaçao +(599)</option>
            <option value='ci'>Ivory Coast +(225)</option>
            <option value='xk'>Kosovo +(383)</option>
            </select>
            </div>
            <div class="form-group col-md-6">
            <input type="text" class="form-control" value="{{ $phone ?? '' }}" id="phone" required name="phone" placeholder="Phone Number">
            </div>
            </div>
           
            <div class="form-group" style="display:none">
            <textarea class="form-control" id="msg" name="msg" placeholder="To receive personalized service, please share your needs." rows="3"></textarea>
            </div>
            
            <div class="row">
            <div class="form-group col-md-6">
            <select class="form-control text-height countryTimezon" required id="countryTimezon" name="countryTimezon" onchange="return getCurrentTimezone(this.value);" placeholder="Select Timezone">
            <option value="">Select Timezone</option>
            </select>
            </div>
            <div class="form-group col-md-6">
            <input type="text" autocomplete="off" value="" required class="form-control text-height" id="datetimepicker" name="Schedule" placeholder="Schedule">
            </div>
            </div>

            <button class="btn px-5 btn-submit btn btn-primary submit">Submit</button>
            </form>
  
          </div>
          </div>

      <script type="text/javascript" src="https://www.emergenresearch.com/js/jquery.datetimepicker.full.min.js"></script>
      <script type="text/javascript" src="https://www.emergenresearch.com/js/moment.min.js"></script>
<script type="text/javascript" src="https://www.emergenresearch.com/js/moment-timezone-with-data.js"></script>
<link href="https://www.emergenresearch.com/css/jquery.datetimepicker.min.css" rel="stylesheet" />

<script>




$('.modal-toggle').on('click', function(e) {
  $('#schedule_block').show();
});

  function siteout() {

  document.getElementById('ouibounce-modal').style.display = 'none';
  document.getElementById('mdl').style.display = 'none';
}
$('#ouibounce-modal .modal').on('click', function(e) {
  e.stopPropagation();
});
</script>

<script>
function getDefaultTimezone(){
	var countryTimezon = $('#countryTimezon').val();
	var todaysDate = moment().tz(countryTimezon).toString();
	//var today = new Date();
	//alert(today);
	$('#datetimepicker').datetimepicker({
		minDate:new Date(),
		//ampm: true,
		format: 'd/m/Y A h:i',
        formatTime: 'A h:i',
		validateOnBlur: false,
		startDate: todaysDate
	});
}
function getCurrentTimezone(countryTimezon){
	//var todaysDate = moment().tz(countryTimezon).format('ddd MMM d YYYY hh:mm:ss GMTZZ');
	var todaysDate = moment().tz(countryTimezon).toString();
	//var today = new Date();
	$('#datetimepicker').datetimepicker({
		minDate:new Date(),
		//ampm: true,
		format: 'd/m/Y A h:i',
        formatTime: 'A h:i',
		validateOnBlur: false,
		startDate: todaysDate
	});
}

function getCountryTimezone(CountryCode){
	$('#countryTimezon').html('');
	$.ajax({
	type:"GET",
	url:"{{url('getCountryTimezone')}}",
	data:{
		country_code:CountryCode,
		},
		success:function(response){
			$('#countryTimezon').html(response);
			getDefaultTimezone();
			//console.log(response);
		},
	});
}
</script>
     

    </div>
    <!-- /.container -->
  </section>
  
  
  <section id="booking1" class="booking_sec" style="display: block;">
        <div class="container booking_container">
            <div class="col-12 col-lg-4">
                <div class="row px-lg-0 px-3 events-wrapper-left">
                    <div class="banner-preview d-flex justify-content-center align-items-center">
                        <img id="bannerImg" class="banner-img" src="../static/img/logo.svg" alt="your image">
                    </div>
                    <div class="profile_dets_booking">
                        <img class="profile-user-avatar" src="https://lh3.googleusercontent.com/a-/AOh14GhoevwZV06p9S447cnfcc8dLR0eKZd6gmiQEq2z=s96-c">
                        <span class="name">timelyAI .</span>
                    </div>
                    <span id="eventName0" class="meeting_name">Feedback</span>
                    <span class="separator1"></span>
                    <div class="row">
                        <div class="detail_row">
                            <div class="col-lg-3 col-4 label">Duration</div>
                            <div id="duration" class="col-lg-7 col-8 details">60 min</div>
                        </div>
                        <div class="detail_row">
                            <div class="col-lg-3 col-4 label">Location</div>
                            <div id="location" class="col-lg-7 col-8 details">Google Meet</div>
                        </div>
                        <div id="descriptRow0" class="detail_row d-none">
                            <div class="col-lg-3 col-4 label">Description</div>
                            <div id="desc" class="col-lg-7 col-8 details"></div>
                        </div>
                        <div id="attachmentRow0" class="detail_row d-none">
                            <div class="col-lg-3 col-4 label">Attachment</div>
                            <div id="eventAttachments" class="col-lg-7 col-8 details">
                                <u>No attachments</u>
                            </div>
                        </div>
                    </div>
                    <span class="separator2 mb-0"></span>
                    <span class="disclaimer">Please select a slot from the list</span>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="row date_select">
                        <div class="cal_top">
                            <span id="octsr0" style="cursor: pointer;color: black;width: 50%;" onclick="toggleS_R(0)" class="top1 col-6  ps-lg-3 ps-md-3">Select Date
                                <hr class="hr-t1">
                            </span>
                            
                             <span id="octsrlogo" class="top2" style="display: block;">Scheduled through <img src="../static/img/logo black.svg" alt="" class="timely_logo event-timelyAI-logo"></span> 
                             
                            </div>
                            
                        <div class="calendar_card1 mb-4 select-rem-dp" style="display: block;">
                            <div id="datepicker"><div class="datepicker datepicker-inline"><div class="datepicker-days" style="display: block;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">August 2022</th><th class="next">»</th></tr><tr><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th><th class="dow">Su</th></tr></thead><tbody><tr><td class="old day disabled" data-date="1658707200000">25</td><td class="old day disabled" data-date="1658793600000">26</td><td class="old day disabled" data-date="1658880000000">27</td><td class="old day disabled" data-date="1658966400000">28</td><td class="old day disabled" data-date="1659052800000">29</td><td class="old day disabled" data-date="1659139200000">30</td><td class="old day disabled" data-date="1659225600000">31</td></tr><tr><td class="day disabled" data-date="1659312000000">1</td><td class="today active day" data-date="1659398400000">2</td><td class="day" data-date="1659484800000">3</td><td class="day disabled" data-date="1659571200000">4</td><td class="day" data-date="1659657600000">5</td><td class="day disabled" data-date="1659744000000">6</td><td class="day" data-date="1659830400000">7</td></tr><tr><td class="day disabled" data-date="1659916800000">8</td><td class="day" data-date="1660003200000">9</td><td class="day" data-date="1660089600000">10</td><td class="day disabled" data-date="1660176000000">11</td><td class="day" data-date="1660262400000">12</td><td class="day disabled" data-date="1660348800000">13</td><td class="day" data-date="1660435200000">14</td></tr><tr><td class="day disabled" data-date="1660521600000">15</td><td class="day" data-date="1660608000000">16</td><td class="day" data-date="1660694400000">17</td><td class="day disabled" data-date="1660780800000">18</td><td class="day" data-date="1660867200000">19</td><td class="day disabled" data-date="1660953600000">20</td><td class="day" data-date="1661040000000">21</td></tr><tr><td class="day disabled" data-date="1661126400000">22</td><td class="day" data-date="1661212800000">23</td><td class="day" data-date="1661299200000">24</td><td class="day disabled" data-date="1661385600000">25</td><td class="day" data-date="1661472000000">26</td><td class="day disabled" data-date="1661558400000">27</td><td class="day" data-date="1661644800000">28</td></tr><tr><td class="day disabled" data-date="1661731200000">29</td><td class="day" data-date="1661817600000">30</td><td class="day" data-date="1661904000000">31</td><td class="new day disabled" data-date="1661990400000">1</td><td class="new day" data-date="1662076800000">2</td><td class="new day disabled" data-date="1662163200000">3</td><td class="new day" data-date="1662249600000">4</td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2022</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month">Mar</span><span class="month">Apr</span><span class="month">May</span><span class="month">Jun</span><span class="month">Jul</span><span class="month focused active">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2020-2029</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="year old">2019</span><span class="year">2020</span><span class="year">2021</span><span class="year active focused">2022</span><span class="year">2023</span><span class="year">2024</span><span class="year">2025</span><span class="year">2026</span><span class="year">2027</span><span class="year">2028</span><span class="year">2029</span><span class="year new">2030</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2000-2090</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="decade old">1990</span><span class="decade">2000</span><span class="decade">2010</span><span class="decade active focused">2020</span><span class="decade">2030</span><span class="decade">2040</span><span class="decade">2050</span><span class="decade">2060</span><span class="decade">2070</span><span class="decade">2080</span><span class="decade">2090</span><span class="decade new">2100</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-centuries" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2000-2900</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="century old">1900</span><span class="century active focused">2000</span><span class="century">2100</span><span class="century">2200</span><span class="century">2300</span><span class="century">2400</span><span class="century">2500</span><span class="century">2600</span><span class="century">2700</span><span class="century">2800</span><span class="century">2900</span><span class="century new">3000</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div></div></div>
                        </div>
                        <div class="calendar_card1 mb-4 select-rem-dp" style="display: none;">
                           
                        </div>
                        <div class="timezone px-0">
                            <img class="" src="../static/img/icons/globe.svg" alt="">
                            <span class="timezone_text">Indian Standard Time (IST)</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="row date_select">
                        <div class=" px-lg-5">
                            <ul style="justify-content: space-between;" class="nav ">
                                <li id="select-time-li" style="width: 50%;" class="active"><a class="top1 " data-toggle="tab" href="#timer1" onclick="cleardatesT()">Select Time</a>
                                
                                </li>
                                
                                
                              </ul>
                              <hr class="hr-f">
                           
                        </div>
                        <div class="tab-content">
                            <div id="timer1" class="tab-pane fade in active">
                                <div id="timer" class="row justify-content-center mt-4 events-wrapper1 overflow-auto ">
        <span class="date">Tuesday, 2 August</span>
        <div class="row px-lg-3 px-0 mb-4" id="2022-08-02">
        
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Tuesday, August 02 2022">02:30 PM</a>
        </div>
    
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn time_btn_clrd" onclick="timebtnClick(this)" data-day="Tuesday, August 02 2022">03:30 PM</a>
        </div>
    
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Tuesday, August 02 2022">04:30 PM</a>
        </div>
    </div>
    
        <span class="date">Wednesday, 3 August</span>
        <div class="row px-lg-3 px-0 mb-4" id="2022-08-03">
        
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Wednesday, August 03 2022">11:30 AM</a>
        </div>
    
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Wednesday, August 03 2022">12:30 PM</a>
        </div>
    
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Wednesday, August 03 2022">01:30 PM</a>
        </div>
    </div>
    
        <span class="date">Friday, 5 August</span>
        <div class="row px-lg-3 px-0 mb-4" id="2022-08-05">
        
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Friday, August 05 2022">09:30 AM</a>
        </div>
    
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Friday, August 05 2022">10:30 AM</a>
        </div>
    
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Friday, August 05 2022">11:30 AM</a>
        </div>
    
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Friday, August 05 2022">12:30 PM</a>
        </div>
    
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Friday, August 05 2022">01:30 PM</a>
        </div>
    
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Friday, August 05 2022">02:30 PM</a>
        </div>
    
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Friday, August 05 2022">03:30 PM</a>
        </div>
    
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Friday, August 05 2022">04:30 PM</a>
        </div>
    </div>
    
        <span class="date">Sunday, 7 August</span>
        <div class="row px-lg-3 px-0 mb-4" id="2022-08-07">
        
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Sunday, August 07 2022">01:00 PM</a>
        </div>
    
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Sunday, August 07 2022">02:00 PM</a>
        </div>
    
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Sunday, August 07 2022">03:00 PM</a>
        </div>
    
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Sunday, August 07 2022">04:00 PM</a>
        </div>
    
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Sunday, August 07 2022">05:00 PM</a>
        </div>
    
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Sunday, August 07 2022">06:00 PM</a>
        </div>
    
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Sunday, August 07 2022">07:00 PM</a>
        </div>
    
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Sunday, August 07 2022">08:00 PM</a>
        </div>
    
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Sunday, August 07 2022">09:00 PM</a>
        </div>
    
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Sunday, August 07 2022">10:00 PM</a>
        </div>
    </div>
    
        <span class="date">Tuesday, 9 August</span>
        <div class="row px-lg-3 px-0 mb-4" id="2022-08-09">
        
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Tuesday, August 09 2022">02:00 PM</a>
        </div>
    
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Tuesday, August 09 2022">03:00 PM</a>
        </div>
    
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Tuesday, August 09 2022">04:00 PM</a>
        </div>
    </div>
    
        <span class="date">Wednesday, 10 August</span>
        <div class="row px-lg-3 px-0 mb-4" id="2022-08-10">
        
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Wednesday, August 10 2022">11:30 AM</a>
        </div>
    
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Wednesday, August 10 2022">12:30 PM</a>
        </div>
    
        <div class="col-4 d-flex mt-4 justify-content-center">
            <a class="time_btn" onclick="timebtnClick(this)" data-day="Wednesday, August 10 2022">01:30 PM</a>
        </div>
    </div>
    </div>

                                <div class="col-12 button1">
                                    <div class="col-lg-6 d-flex justify-content-center ps-lg-5 mb-5">
                                        <a class="confirm_btn" onclick="onContinue()">Confirm</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        
                    </div>
                </div>
               
            </div>
            
        </div>
    </section>
    
    
    <!-- Template Main JS File -->
    <script src="../static/js/main.js"></script>
    <script src="../static/js/booking-datepicker.js"></script>
    <script src="../static/js/booking.js"></script>
@endsection 