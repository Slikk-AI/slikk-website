@extends('frontnew.layouts.layout')
@section('frontnew_content')
<style>
    @media(min-width:1020px){
                .form-control{
                    height: 42px;
                }
                .book-demo-font{
                    font-size: 58px;
                }
                .day{
                    padding: 0 12.5px;
                    font-size: 11px;
                }
                .date-div .month{
                    font-size: 11px;
                }
                .label-call{
                    font-weight: 400;
                    line-height: 1.5;
                    font-size: 18px;
                    padding-left: 25px;
                }
                .time-button-margin{
                    margin-top: 1.2rem;
                }
                #date-button{
                    margin-top: 0.5rem;
                }
                .checkbox-label-div{
                    flex: 0 0 55%;
                    max-width: 55%;
                }
                .checkbox-input-div{
                    flex: 0 0 45%;
                    max-width: 45%;
                }
                .padding-left-checkbox{
                    padding-left:0px;
                }
                .col-md-7-book {
                    flex: 0 0 66%;
                    max-width: 66%;
                    padding-right: 0px;
                    padding-left: 0px;
                }
                .image-container img{
                        padding: 5rem;
                    margin-top: -8rem;
                    margin-left: 7rem;
                }
            }
            #date-time-btn-confirm{
                display: inline;
                margin-bottom: 1rem;
            }
            #date-time-btn-confirm:hover{
                /* background-color:#5433FF;
                border-color:#5433FF; */
                background-color:transparent;
                border-color:transparent;
                color:#5433FF;
            }
            .date-div .year-header{
                float: none;
            }
            .bottom-section .mb-2 h2{
        font-size: .875em;
    line-height: 1.5;
    color: #565359;
    font-weight: bold;
    padding: 4px;
    }
    .bottom-section .mb-2 p{
        padding: 5px;
        font-size: .875em;
    line-height: 1.5;
    color: #565359;
    }
    @media(max-width:999px){
                .book_form{
                    padding: 0px 0px 0px;
                }
                .day{
                    padding: 0 12px;
                }
                .label-call{
                    padding-left: 13px;
                    font-weight: 500;
                }
                .time-div-margin-mweb{
                    margin-bottom: 2rem;
                }
                .date-div h6{
                    text-align: center;
                }
                .toggle-width{
                    width: 50%;
                    padding-left: 5%;
                }
                .image-container img{
                    margin-top: -3rem;
                    padding: 3rem;
                }
            }
</style>
<section class="section-collect-header book-top-section">
    <div class="page-padding">
        <div class="product-header_container">
            <div class="padding-vertical padding-xhuge">
                <div class="product-header_wrapper">
                    <div class="product-header_left-wrapper">
                        <div class="margin-top margin-custom1"><h1 class="product-header_heading"><span class="text-bg text-color-purple book-demo-font">Ready for</span>
                            <span class="book-demo-font"> a conversation?</span></h1>
                        <p>We're always excited to answer questions. Or talk about employee work management and how we can have a positive impact on business out there.</p>
                        </div>
                    </div>
                    <div class="product-header_right-wrapper">
                        <div class="product-header_image-wrapper">
                            <img
                                src="{{ url('assets/frontend/image/book-banner.jpg')}}"
                                loading="lazy"
                                alt="Illustration showing product - collect"
                                class="product-header_image"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="book-demo-section section-home-collect">
    <div class="container-large">
            <div class="book-demo-heading">
                <h2>Let's talk</h2>
                <div class="horizontal-line-demo"></div>
            </div>
            <form class="contact-form " method="post" action="{{url('schedule-call')}}">
        <div class="row">
            <div class="col-md-4-book">
                <div class="demo_form hero_form mb-4">
                        @csrf
                        <input type="text" class="form-control inputbox" id="name" name="name" value="{{ $name ?? '' }}" placeholder="Your Name" required="">
                        <input type="text" class="form-control inputbox" id="email" name="email" value="{{ $email ?? '' }}" placeholder="Your Email" required="">

                        <select class="form-control inputbox "id="country" name="country" placeholder="Select Country" required onchange="return getCountryTimezone(this.value);">
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
                            <option value='nc'>New Caledonia +(687 )</option>
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

                        <select class="form-control inputbox countryTimezon" required id="countryTimezon" name="countryTimezon" onchange="return getCurrentTimezone(this.value);" placeholder="Select Timezone">
                            <option value="">Select Timezone</option>
                        </select>
                        <input type="hidden" class="form-control inputbox" name="Schedule" placeholder="Schedule" id="datetimepicker" required readonly>

                        <input type="text" class="form-control inputbox" value="{{ $phone ?? '' }}" id="phone" required name="phone" placeholder="Phone Number">
                        <select class="form-control inputbox" name="address" id="users" required="">
                            <option value="">How Many Users?</option>
                            <option value="0 - 20">0 - 20</option>
                            <option value="20 - 50">20 - 50</option>
                            <option value="50 - 100">50 - 100</option>
                            <option value="100 - 500">100 - 500</option>
                            <option value="500 - 1000">500 - 1000</option>
                        </select>
                        <div class="row mt-5 mb-4">
                            <div class="checkbox-label-div col-md-6 col-md-6-checkbox-label">
                                <label for="schedule" class="label-call">Schedule a call</label>
                            </div>
                            <div class="checkbox-input-div col-md-6 col-md-6-checkbox-input">
                                <div class="row">
                                    <div class="col-md-6 col-md-6-checkbox-input">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="checkbox" id="checkbox-yes">
                                            </div>
                                            <div class="col-md-6 padding-left-checkbox">
                                                <label for="vehicle1">Yes</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="checkbox" id="checkbox-no">
                                            </div>
                                            <div class="col-md-6 padding-left-checkbox">
                                                <label for="vehicle1">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <input type="text" class="captch-box form-control inputbox" id="txtCaptcha" readonly>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="txtCompare form-control inputbox" id="txtCompare" placeholder="Enter Captcha" onkeyup="ValidCaptcha();" required>
                                <span id="msg" style="color:red;margin-left: 1rem;"></span>
                            </div>
                            <div class="col-md-2">
                                <i class="fa fa-refresh" id="btnrefresh" aria-hidden="true" onclick="GenerateCaptcha();"></i>
                            </div>
                        </div>
                        <input type="submit" anem="submit" value="Submit" id="submit1" class="btn btn-primary book btn-check" style="color:#000;width:60%;border: none;border-radius: 150px;background: #FAF9FF;margin-left: 4rem;padding: 10px;">

                    
                </div>
            </div>
            <div class="col-md-5 calendar-div show-div display">
                <div class="book_form date-div mb-4">
                    <h6>Select date</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="year month-name" id="monthAndYear"></h3>
                        </div>
                        <div class="col-md-6">
                        <div class="year-header">
                                    <span class="prev fa fa-chevron-right right-button"  aria-hidden="true"> </span>
                                    <span class="fa fa fa-chevron-left left-button"  aria-hidden="true"> </span>
                                </div>
                        </div>
                    </div>
                    <div class="calendar table-calendar" id="calendar" data-lang="en">
                                <table class = "months-table w-100">   
                                    <tbody>  
                                        <tr class = "months-row">  
                                        <td class = "month"> Jan </td>   
                                        <td class = "month"> Feb </td>   
                                        <td class = "month"> Mar </td>   
                                        <td class = "month"> Apr </td>   
                                        <td class = "month"> May </td>   
                                        <td class = "month"> June </td>   
                                        <td class = "month"> July </td>  
                                        <td class = "month"> Aug </td>   
                                        <td class = "month"> Sep </td>   
                                        <td class = "month"> Oct </td>            
                                        <td class = "month"> Nov </td>  
                                        <td class = "month"> Dec </td>  
                                        </tr>  
                                    </tbody>  
                                </table>   
                                <table class = "days-table">   
                                    <td class = "day"> Sun </td>   
                                    <td class = "day"> Mon </td>   
                                    <td class = "day"> Tue </td>   
                                    <td class = "day"> Wed </td>   
                                    <td class = "day"> Thu </td>   
                                    <td class = "day"> Fri </td>   
                                    <td class = "day"> Sat </td>  
                                </table>
                                <div class="frame">
                                    <table class="dates-table w-100">
                                        <tbody class="tbody" id="calendar-body">

                                        </tbody>
                                    </table>
                                </div>
                                <div class="align-center mt-5">
                                    <!-- <button class="button" id="date-button">Select Date</button> -->
                                    <div class = "events-container">  
                                    </div> 
                                    <div class="our-client-div display">
                                        <div id="datetimepickerdiv" class="display">
                                            
                                        </div>
                                    </div>
                                    <button type="button" class="secondary-button w-button" id="date-time-btn-confirm" style="border-style:none;">Add Date & Time</button>
                                    <button type="submit" id="submit2" class="button display">Confirm</button>
                                </div>
                    </div>
                </div>
             </div>
            <div class="col-md-2-book show-div time-div-margin-mweb display">
                <div class="book_form time-div mb-4">
                        <h6 class="align-center mb-4" style="color:#000;font-weight:600;">Pick a Time</h6>
                        <div class="form-container" align="center">
                            <div>
                                <button type="button" class="btn btn-outline-primary btn-c-1" id="time-btn2" value="10.00 AM">10.00 AM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-2" id="time-btn2" value="10.30 AM">10.30 AM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-3" id="time-btn2" value="11.00 AM">11.00 AM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-4" id="time-btn2" value="11.30 AM">11.30 AM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-5" id="time-btn2" value="12.00 PM">12.00 PM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-6" id="time-btn2" value="12.30 PM">12.30 PM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-7" id="time-btn2" value="1.00 PM">1.00 PM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-8" id="time-btn2" value="1.30 PM">1.30 PM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-9" id="time-btn2" value="2.00 PM">2.00 PM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-10" id="time-btn2" value="2.30 PM">2.30 PM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-11" id="time-btn2" value="3.00 PM">3.00 PM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-12" id="time-btn2" value="3.30 PM">3.30 PM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-13" id="time-btn2" value="4.00 PM">4.00 PM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-14" id="time-btn2" value="4.30 PM">4.30 PM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-15" id="time-btn2" value="5.00 PM">5.00 PM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-16" id="time-btn2" value="5.00 PM">5.30 PM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-17" id="time-btn2" value="6.00 PM">6.00 PM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-18" id="time-btn2" value="6.30 PM">6.30 PM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-19" id="time-btn2" value="7.00 PM">7.00 PM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-20" id="time-btn2" value="7.30 PM">7.30 PM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-21" id="time-btn2" value="8.00 PM">8.00 PM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-22" id="time-btn2" value="8.30 PM">8.30 PM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-23" id="time-btn2" value="9.00 PM">9.00 PM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-24" id="time-btn2" value="9.30 PM">9.30 PM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-25" id="time-btn2" value="10.00 PM">10.00 PM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-26" id="time-btn2" value="10.30 PM">10.30 PM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-27" id="time-btn2" value="11.00 PM">11.00 PM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-28" id="time-btn2" value="11.30 PM">11.30 PM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-29" id="time-btn2" value="12.00 AM">12.00 AM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-30" id="time-btn2" value="12.30 AM">12.30 AM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-31" id="time-btn2" value="1.00 AM">1.00 AM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-32" id="time-btn2" value="1.30 AM">1.30 AM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-33" id="time-btn2" value="2.00 AM">2.00 AM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-34" id="time-btn2" value="2.30 AM">2.30 AM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-35" id="time-btn2" value="3.00 AM">3.00 AM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-36" id="time-btn2" value="3.30 AM">3.30 AM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-37" id="time-btn2" value="4.00 AM">4.00 AM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-38" id="time-btn2" value="4.30 AM">4.30 AM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-39" id="time-btn2" value="5.00 AM">5.00 AM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-40" id="time-btn2" value="5.30 AM">5.30 AM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-41" id="time-btn2" value="6.00 AM">6.00 AM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-42" id="time-btn2" value="6.30 AM">6.30 AM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-43" id="time-btn2" value="7.00 AM">7.00 AM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-44" id="time-btn2" value="7.30 AM">7.30 AM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-45" id="time-btn2" value="8.00 AM">8.00 AM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-46" id="time-btn2" value="8.30 AM">8.30 AM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-47" id="time-btn2" value="9.00 AM">9.00 AM</button>
                                <button type="button" class="btn btn-outline-primary btn-c-48" id="time-btn2" value="9.30 AM">9.30 AM</button>
                            </div>
                        </div>
                </div>
                <div class="align-center mt-5">
                    <!-- <button class="button time-button-margin" id="time-button">Select Time</button> -->
                    <div class="time-value" style="display:none"></div>
                 </div>
            </div>
            <div class="col-md-7-book image-container">
                <div>
                    <img src="{{ url('assets/frontend/image/image-container.jpg')}}" alt="">
                </div>
            </div>
        </div>
        </form>
    </div>
</section>
<!--Jump to code-->
<div class="wrapper display">
    <div class="container-calendar">
        <div class="footer-container-calendar">
            <label for="month">Jump To: </label>
            <select id="month" onchange="jump()">
                        <option value=0>Jan</option>
                        <option value=1>Feb</option>
                        <option value=2>Mar</option>
                        <option value=3>Apr</option>
                        <option value=4>May</option>
                        <option value=5>Jun</option>
                        <option value=6>Jul</option>
                        <option value=7>Aug</option>
                        <option value=8>Sep</option>
                        <option value=9>Oct</option>
                        <option value=10>Nov</option>
                        <option value=11>Dec</option>
            </select>
                <select id="year" onchange="jump()"></select>       
        </div>
    </div>
</div>
@include('frontnew.cta')
<script
            src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=62b983cfdc3b4744e063f682"
            type="text/javascript"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"
        ></script>
        <script src="css/test.js" type="text/javascript"></script>
        <script>  
$(document).ready(function(){  
    var date = new Date();  
    var today = date.getDate();  
        $(".right-button").click({date: date}, next_year);  
    $(".left-button").click({date: date}, prev_year);  
    $(".month").click({date: date}, month_click);  
    $("#add-button").click({date: date}, new_event);  
    $(".months-row").children().eq(date.getMonth()).addClass("active-month");  
    init_calendar(date);  
    var events = check_events(today, date.getMonth()+1, date.getFullYear());  
    show_events(events, months[date.getMonth()], today);  
});  
function init_calendar(date) {  
    $(".tbody").empty();  
    $(".events-container").empty();  
    var calendar_days = $(".tbody");  
    var month = date.getMonth();  
    var year = date.getFullYear();  
    var day_count = days_in_month(month, year);  
    var row = $("<tr class='table-row'></tr>");  
    var today = date.getDate();  
    date.setDate(1);  
    var first_day = date.getDay();  
    for(var i=0; i<35+first_day; i++) {  
        var day = i-first_day+1;  
        if(i%7===0) {  
            calendar_days.append(row);  
            row = $("<tr class='table-row'></tr>");  
        }  
                if(i < first_day || day > day_count) {  
            var curr_date = $("<td class='table-date nil'>"+"</td>");  
            row.append(curr_date);  
        }     
        else {  
            var curr_date = $("<td class='table-date'>"+day+"</td>");  
            var events = check_events(day, month+1, year);  
            if(today===day && $(".active-date").length===0) {  
                curr_date.addClass("active-date");  
                show_events(events, months[month], day);  
            }  
            if(events.length!==0) {  
                curr_date.addClass("event-date");  
            }  
                        curr_date.click({events: events, month: months[month], day:day}, date_click);  
            row.append(curr_date);  
        }  
    }  
    calendar_days.append(row);  
    $(".year").text(year);  
}  
function days_in_month(month, year) {  
    var monthStart = new Date(year, month, 1);  
    var monthEnd = new Date(year, month + 1, 1);  
    return (monthEnd - monthStart) / (1000 * 60 * 60 * 24);      
}  
function date_click(event) {  
    $(".events-container").show(250);  
    $("#dialog").hide(250);  
    $(".active-date").removeClass("active-date");  
    $(this).addClass("active-date");  
    show_events(event.data.events, event.data.month, event.data.day);  
};  
function month_click(event) {  
    $(".events-container").show(250);  
    $("#dialog").hide(250);  
    var date = event.data.date;  
    $(".active-month").removeClass("active-month");  
    $(this).addClass("active-month");  
    var new_month = $(".month").index(this);  
    date.setMonth(new_month);  
    init_calendar(date);  
}  
function next_year(event) {  
    $("#dialog").hide(250);  
    var date = event.data.date;  
    var new_year = date.getFullYear()+1;  
    $("year").html(new_year);  
    date.setFullYear(new_year);  
    init_calendar(date);  
}  
function prev_year(event) {  
    $("#dialog").hide(250);  
    var date = event.data.date;  
    var new_year = date.getFullYear()-1;  
    $("year").html(new_year);  
    date.setFullYear(new_year);  
    init_calendar(date);  
}  
function new_event(event) {  
        if($(".active-date").length===0)  
        return;  
    $("input").click(function(){  
        $(this).removeClass("error-input");  
    })  
    $("#dialog input[type=text]").val('');  
    $("#dialog input[type=number]").val('');  
    $(".events-container").hide(250);  
    $("#dialog").show(250);  
        $("#cancel-button").click(function() {  
        $("#name").removeClass("error-input");  
        $("#count").removeClass("error-input");  
        $("#dialog").hide(250);  
        $(".events-container").show(250);  
    });  
    $("#ok-button").unbind().click({date: event.data.date}, function() {  
        var date = event.data.date;  
        var name = $("#name").val().trim();  
        var count = parseInt($("#count").val().trim());  
        var day = parseInt($(".active-date").html());  
        if(name.length === 0) {  
            $("#name").addClass("error-input");  
        }  
        else if(isNaN(count)) {  
            $("#count").addClass("error-input");  
        }  
        else {  
            $("#dialog").hide(250);  
            console.log("new event");  
            new_event_json(name, count, date, day);  
            date.setDate(day);  
            init_calendar(date);  
        }  
    });  
}  
function new_event_json(name, count, date, day) {  
    var event = {  
        "occasion": name,  
        "invited_count": count,  
        "year": date.getFullYear(),  
        "month": date.getMonth()+1,  
        "day": day  
    };  
    event_data["events"].push(event);  
}  
function show_events(events, month, day) {  
    $(".events-container").empty();  
    $(".events-container").show(250);  
    console.log(event_data["events"]);  
    if(events.length===0) {  
        var event_card = $("<div class='event-card'> </div>");  
        var event_name = $("<div class='event-name'>"+month+" "+day+"</div>");  
        $(event_card).css({ "border-left": "0px solid #FF1744" });  
        $(event_name).css({ "color": "transparent" });  
        $(event_card).append(event_name);  
        $(".events-container").append(event_card);  
    }  
    else {  
                for(var i=0; i<events.length; i++) {  
            var event_card = $("<div class='event-card'></div>");  
            var event_name = $("<div class='event-name'>"+events[i]["occasion"]+":</div>");  
            var event_count = $("<div class='event-count'>"+events[i]["invited_count"]+" Invited</div>");  
            if(events[i]["cancelled"]===true) {  
                $(event_card).css({  
                    "border-left": "0px solid #FF1744"  
                });  
                $(event_name).css({  
                    "color": "transparent"  
                });  
                event_count = $("<div class='event-cancelled'>Cancelled</div>");  
            }  
$(event_card).append(event_name).append(event_count);  
            $(".events-container").append(event_card);  
        }  } }  
function check_events(day, month, year) {  
    var events = [];  
    for(var i=0; i<event_data["events"].length; i++) {  
        var event = event_data["events"][i];  
        if(event["day"]===day &&  
            event["month"]===month &&  
            event["year"]===year) {  
                events.push(event);  
            }  
    }  
    return events;  
}  
  
var event_data = {  
    "events": [  
    {  
        "occasion": " Repeated Test Event ",  
        "invited_count": 120,  
        "year": 2017,  
        "month": 5,  
        "day": 10,  
        "cancelled": true  
    },  
    {  
        "occasion": " Repeated Test Event ",  
        "invited_count": 120,  
        "year": 2017,  
        "month": 5,  
        "day": 10,  
        "cancelled": true  
    },  
        {  
        "occasion": " Repeated Test Event ",  
        "invited_count": 120,  
        "year": 2017,  
        "month": 5,  
        "day": 10,  
        "cancelled": true  
    },  
    {  
        "occasion": " Repeated Test Event ",  
        "invited_count": 120,  
        "year": 2017,  
        "month": 5,  
        "day": 10  
    },  
        {  
        "occasion": " Repeated Test Event ",  
        "invited_count": 120,  
        "year": 2017,  
        "month": 5,  
        "day": 10,  
        "cancelled": true  
    },  
    {  
        "occasion": " Repeated Test Event ",  
        "invited_count": 120,  
        "year": 2017,  
        "month": 5,  
        "day": 10  
    },  
        {  
        "occasion": " Repeated Test Event ",  
        "invited_count": 120,  
        "year": 2017,  
        "month": 5,  
        "day": 10,  
        "cancelled": true  
    },  
    {  
        "occasion": " Repeated Test Event ",  
        "invited_count": 120,  
        "year": 2017,  
        "month": 5,  
        "day": 10  
    },  
        {  
        "occasion": " Repeated Test Event ",  
        "invited_count": 120,  
        "year": 2017,  
        "month": 5,  
        "day": 10,  
        "cancelled": true  
    },  
    {  
        "occasion": " Repeated Test Event ",  
        "invited_count": 120,  
        "year": 2017,  
        "month": 5,  
        "day": 10  
    },  
    {  
        "occasion": " Test Event",  
        "invited_count": 120,  
        "year": 2017,  
        "month": 5,  
        "day": 11  
    }  
    ]  
};  
const months = [   
    "January",   
    "February",   
    "March",   
    "April",   
    "May",   
    "June",   
    "July",   
    "August",   
    "September",   
    "October",   
    "November",   
    "December"   
];  
</script>  
<script>
    $(document).ready(function () {
        $('.table-date').click(function() {
        var datevalue= $(this).text();    
        //$('#datetimepicker').val(datevalue);
        $(".table-date").removeClass("active-date");
        $(this).siblings('.table-date').removeClass('active-date').end().addClass('active-date');
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#date-button').click(function() {
            const year=$('.year').text();
            const date=$('.event-name').text();
            const time= $('.time-value').text();
            //alert(date+" "+year);
            $('#datetimepicker').val(date+" "+year+" "+time);
            $('#datetimepickerdiv').text(date+" "+year+" "+time);
            $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        });
        $('#time-button').click(function() {
            const time= $('.time-value').text();
            const year=$('.year').text();
            const date=$('.event-name').text();
            //console.log(finalValue);
            $('#datetimepicker').val(date+ ' ' + year+ ' ' +time);
        });
    });
</script>
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
    $(document).ready(function () {
        if ( $('checkbox_checked').prop( "checked" ) ) {
        // $('.date-div').removeClass('display');
        alert("ok");
    }
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
    $('.btn-c-1').click(function() {
        const year=$('.year').text();
                    const date=$('.event-name').text();
                    const time = $('.btn-c-1').val();
                  //alert(date+" "+year+" "+time);
                $('#datetimepicker').val(date+" "+year+" "+time);
                $('.time-value').text(time);
                $('#datetimepickerdiv').text(date+" "+year+" "+time);
                $('#date-time-btn-confirm').text(date+" "+year+" "+time);
    $('.btn-c-1').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
    $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color":"#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color":"#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });

    $('.btn-c-2').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-2').val();
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
    $('.btn-c-2').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
    $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });

    $('.btn-c-3').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-3').val();
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
    $('.btn-c-3').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
    $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });

    $('.btn-c-4').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-4').val();
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
    $('.btn-c-4').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
    $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });

    $('.btn-c-5').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-5').val();
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
    $('.btn-c-5').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"}); 
    $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });

    $('.btn-c-6').click(function() { 
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-6').val();
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
    $('.btn-c-6').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
    $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });

    $('.btn-c-7').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-7').val();
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
    $('.btn-c-7').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
    $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });

    $('.btn-c-8').click(function() {
    // alert(" If you just want value ==>"  + $('.btn-c-8').val()); 
    const year=$('.year').text();
    const date=$('.event-name').text();
    const time = $('.btn-c-8').val();
    $('.time-value').text(time);
    $('#datetimepicker').val(date+" "+year+" "+time);
    $('#datetimepickerdiv').text(date+" "+year+" "+time);
    $('#date-time-btn-confirm').text(date+" "+year+" "+time);
    $('.btn-c-8').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
    $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });

    $('.btn-c-9').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-9').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-9').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });

    $('.btn-c-10').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-10').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-10').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });

    $('.btn-c-11').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-11').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-11').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });

    $('.btn-c-12').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-12').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-12').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });

    $('.btn-c-13').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-13').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-13').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });

    $('.btn-c-14').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-14').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-14').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });

    $('.btn-c-15').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-15').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-15').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-16').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-16').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-16').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-17').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-17').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-17').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-18').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-18').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-18').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-19').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-19').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-19').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-20').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-20').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-20').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-21').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-21').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-21').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-22').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-22').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-22').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-23').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-23').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-23').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-24').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-24').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-24').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-25').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-25').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-25').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-26').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-26').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-26').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-27').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-27').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-27').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-28').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-28').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-28').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-29').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-29').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-29').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-30').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-30').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-30').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-31').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-31').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-31').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-32').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-32').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-32').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-33').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-33').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-33').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-34').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-34').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-34').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-35').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-35').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-35').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-36').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-36').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-36').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-37').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-37').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-37').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-38').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-38').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-38').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-39').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-39').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-39').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-40').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-40').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-40').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-41').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-41').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-41').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-42').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-42').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-42').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-43').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-43').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-43').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-44').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-44').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-44').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-45').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-45').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-45').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-46').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-46').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-46').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-47').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-47').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-47').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-48').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
    $('.btn-c-48').click(function() {
        const year=$('.year').text();
        const date=$('.event-name').text();
        const time = $('.btn-c-48').val();
    //alert(" If you just want value ==>"  + $('.btn-c-9').val()); 
        $('.btn-c-48').css({"color": "#fff","background-color": "#5433FF","border-color": "#5433FF"});
        $('.time-value').text(time);
        $('#datetimepicker').val(date+" "+year+" "+time);
        $('#datetimepickerdiv').text(date+" "+year+" "+time);
        $('#date-time-btn-confirm').text(date+" "+year+" "+time);
        $('.btn-c-1').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-2').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-3').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-4').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-5').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-6').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-7').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-8').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-9').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-11').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-12').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-13').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-14').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-10').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-15').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-16').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-17').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-18').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-19').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-20').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-21').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-22').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-23').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-24').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-25').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-26').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-27').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-28').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-29').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-30').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-31').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-32').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-33').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-34').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-35').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-36').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-37').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-38').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-39').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-40').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-41').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-42').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-43').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-44').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-45').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-46').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
        $('.btn-c-47').css({"color": "#5433FF","background-color": "#fff","border-color": "#5433FF"});
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.unchecked-div').click(function(){
            $('.unchecked-div').addClass('display');
            $('.unchecked-div').prop('checked', false);
            $('.checked-div').removeClass('display');
            $('.show-div').removeClass('display');
        });
    });
    $(document).ready(function() {
        $('.checked-div').click(function(){
            $('.checked-div').addClass('display');
            $('.unchecked-div').removeClass('display');
            $('.unchecked-div').prop('checked', false);
            $('.show-div').addClass('display');
        });
    });
    $(document).ready(function() {
        $('#checkbox-yes').click(function(){
            $('.show-div').removeClass('display');
            $('#submit1').addClass('display');
            $('#submit2').removeClass('display');
            $('#datetimepickerdiv').removeClass('display');
            $('.image-container').addClass('display');
        });
    });
    $(document).ready(function() {
        $('#checkbox-no').click(function(){
            $('.show-div').addClass('display');
            $('#submit1').removeClass('display');
            $('#datetimepicker').val( );
            $('.image-container').removeClass('display');
        });
    });
</script>
<script>
        function getDefaultTimezone() {
          var countryTimezon = $('#countryTimezon').val();
          var todaysDate = moment().tz(countryTimezon).toString();
          //var today = new Date();
          //alert(today);
          $('#datetimepicker').datetimepicker({
            minDate: new Date(),
            //ampm: true,
            format: 'd/m/Y A h:i',
            formatTime: 'A h:i',
            validateOnBlur: false,
            startDate: todaysDate
          });
        }

        function getCurrentTimezone(countryTimezon) {
          //var todaysDate = moment().tz(countryTimezon).format('ddd MMM d YYYY hh:mm:ss GMTZZ');
          var todaysDate = moment().tz(countryTimezon).toString();
          //var today = new Date();
          $('#datetimepicker').datetimepicker({
            minDate: new Date(),
            //ampm: true,
            format: 'd/m/Y A h:i',
            formatTime: 'A h:i',
            validateOnBlur: false,
            startDate: todaysDate
          });
        }

        function getCountryTimezone(CountryCode) {
          $('#countryTimezon').html('');
          $.ajax({
            type: "GET",
            url: "{{url('getCountryTimezone')}}",
            data: {
              country_code: CountryCode,
            },
            success: function(response) {
              $('#countryTimezon').html(response);
              getDefaultTimezone();
              //console.log(response);
            },
          });
        }
</script>
<script type="text/javascript">  
        /* Function to Generat Captcha */  
        function GenerateCaptcha() {  
            var chr1 = Math.ceil(Math.random() * 10) + '';  
            var chr2 = Math.ceil(Math.random() * 10) + '';  
            var chr3 = Math.ceil(Math.random() * 10) + '';  
  
            var str = new Array(4).join().replace(/(.|$)/g, function () { return ((Math.random() * 36) | 0).toString(36)[Math.random() < .5 ? "toString" : "toUpperCase"](); });  
            var captchaCode = str + chr1 + ' ' + chr2 + ' ' + chr3;  
            document.getElementById("txtCaptcha").value = captchaCode  
        }  
  
        /* Validating Captcha Function */  
        function ValidCaptcha() { 
           //debugger 
             var str1 = removeSpaces(document.getElementById('txtCaptcha').value);  
             var str2 = removeSpaces(document.getElementById('txtCompare').value);  

             //(str2);
             if (str1 != str2) {
                document.getElementsByClassName("btn-check").disabled = true;
                document.getElementById("msg").innerHTML= "Enter Correct Captcha Code";
             } 
             else if(str1 == str2){
                document.getElementsByClassName("btn-check").disabled = false;
                document.getElementById("msg").innerHTML= " ";
             }
        }  
  
        /* Remove spaces from Captcha Code */  
        function removeSpaces(string) {  
            return string.split(' ').join('');  
        }  
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
                            width="940" height="528" scrolling="no" title="YouTube embed" frameborder="0"
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
@endsection