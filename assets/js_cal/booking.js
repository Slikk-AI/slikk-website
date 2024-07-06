console.log(data);
console.log(owner);

if(!owner.status){
    $('#remove-time-li').remove();
    $('#timer2').remove();
    $('#octsr1').remove();
    $('#datepicker2').remove();
    $('.hr-t').remove();
}else{
    $('#octsrlogo').remove();
}

if(data.amount){
    document.getElementById('booking-unpaid').innerHTML = '';
    document.getElementById('paid-value').innerHTML = data.amount;
    document.getElementById('paid-value').value = data.amount;
}else{
    document.getElementById('booking-paid').innerHTML = ''
}

mode = parseInt(mode)
console.log(mode)

var remove_date_mult = [];

var checkbox_remove_list = [];

sections = ["booking1", "booking2", "confirmation","confirmation-removed"];

function toggleSections(toggle) {
    sections.forEach(e => {
        console.log(e);
        if(sections.indexOf(e) == toggle){
           
            document.getElementById(e).style.display = 'block';
        }
        else {
            document.getElementById(e).style.display = 'none';
        }
    });
}

toggleSections(mode);

function onContinue() {
    if (time == '') {
        alert("Please select a time slot to proceed.");
    } else{
        mode += 1;
        console.log(time)
        console.log(mode)
        toggleSections(mode);
    }
}




function onBack(){
    mode -= 1
    toggleSections(mode);
}

$('#redirectForm1').submit(function(event){
    event.preventDefault();
    $('#DoneSpinner')
    .removeClass('d-none')
    .addClass('d-flex')

    var output = {'datetime': date + ' ' + time, 'userid': userid, 'duration': duration, 'description': desc, 'summary': data['eventname'], 'location':data['location'], 'link': timely_link}
    var questions = data['questions']
    console.log(questions)
    var responses = {}
    for(var i=0;i<Object.keys(questions).length;i++){
        var q = questions[i]['label'].toLowerCase().replace(' ','_')
        if(['checkbox','radio'].includes(questions[i]['type'])){
            console.log(q)
            var r = $('input[name="'+(i+1).toString()+'"]:checked').val()
        }
        else{
            console.log('2')
            var r = $('#q-'+i).val()
        }
        responses[q]=r
        console.log(r)
        if(questions[i]['label']=='Phone Number'){
            phone = r;
        }
    }

    output['answers'] = responses;
    console.log(output['answers'])


    $.ajax({
        url: "/pending-meet",
        type: "post",
        contentType: 'application/json',
        data: JSON.stringify(output),
        
        dataType: 'json',

        success: function(response) {
            $('#orderid').val(response['orderid']);
            $('#customerName').val(response['answers']['name']);
            $('#customerEmail').val(response['answers']['email']);
            $('#customerPhone').val(response['answers']['phone_number']);
            $('#paidvalue').val(document.getElementById('paid-value').value);   
            console.log($('#orderid').val())
            document.getElementById("redirectForm").submit();        
        },
    });
    
});

buttons = document.getElementsByClassName('continue_btn')

var date = '', time = '', dpDate = ''
var shortMonths = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

for (var x = 0; x < buttons.length; x++) {
    buttons[x].addEventListener("click", function () {
        onContinue();
    }, false);
}

var selectedDate;
let startDate;
if (data) {
    if (Object.keys(data['datesallowed'])[0] == 'rolling') {
        startDate = data['datesallowed']['rolling']['startDate'].split('-');
        selectedDate = new Date(startDate[0] + '-' + startDate[1] + '-' + startDate[2])
    } else if (Object.keys(data['datesallowed'])[0] == 'range') {
        startDate = data['datesallowed']['range']['startDate'].split('-');
        selectedDate = new Date(startDate[0] + '-' + startDate[1] + '-' + startDate[2])
    } else if (Object.keys(data['datesallowed'])[0] == 'individual') {
        startDate = data['datesallowed']['individual']['dates'][0].split('-');
        selectedDate = new Date(startDate[0] + '-' + startDate[1] + '-' + startDate[2])
    } else {
        selectedDate = new Date();
    }
} else {
    selectedDate = new Date();
}
if (selectedDate < (new Date())) {
    selectedDate = new Date()
}

if (desc == '') {
    $('#descriptRow0').addClass('d-none')
    $('#descriptRow1').addClass('d-none')
} else {
    $('#desc').html($('<div />').html(desc).text())
    $('#desc1').html($('<div />').html(desc).text())
}

console.log(JSON.stringify(data['location']))
if(data['location']['name'].toLowerCase().includes("person")) {
    console.log("true   ")
    $('#location').html(`<a target='_blank' href='${data['location']['link']['gmaps_link']}'><i class="fa fa-map-marker" aria-hidden="true"></i> ${data['location']['link']['address']}</a>` + (data['location']['link']['additionalinfo'] ? '<br>' + '<b style="font-weight:600">Door Number: </b>'+ data['location']['link']['additionalinfo'] : '') + (data['location']['link']['landmark'] ? '<br>' + '<b style="font-weight:600" >Landmark:</b>'+ ' ' + data['location']['link']['landmark'] : ''))
    $('#location1').html(`<a target='_blank' href='${data['location']['link']['gmaps_link']}'><i class="fa fa-map-marker" aria-hidden="true"></i> ${data['location']['link']['address']}</a>` + (data['location']['link']['additionalinfo'] ? '<br>' + '<b style="font-weight:600">Door Number: </b>'+ data['location']['link']['additionalinfo'] : '') + (data['location']['link']['landmark'] ? '<br>' + '<b style="font-weight:600" >Landmark:</b>'+ ' ' + data['location']['link']['landmark'] : ''))
    $('#location').css("text-align","left")
    $('#location1').css("text-align","left")
}

else {
    $('#location').text(data['location']['name'] + ' ' + data['location']['link'])
    $('#location1').text(data['location']['name'] + ' ' + data['location']['link'])
}

if (data['location']['link'] == undefined) {
    $('#location').text(data['location']['name'])
    $('#location1').text(data['location']['name'])
}

$('#duration').text(data['duration'] + ' min')
$('#duration1').text(data['duration'] + ' min')

$('#eventName0').text(data['eventname']);
$('#eventName1').text(data['eventname']);







function cleardatesT(){

    // $('.time_btn').each(function(btn){
    //     $(this).removeClass('time_btn_clrd')
    // });
    // remove_date_mult = [];
    $('#octsr0')[0].click();
}
function cleardatesR(){
    
    // $('.time_btn').each(function(btn){
    //     $(this).removeClass('time_btn_clrd')
    // });
    // remove_date_mult = [];
    $('#octsr1')[0].click();
}


function timebtnClick(elem){
    if(!($('#remove-time-li').hasClass('active')) ){
        $('.time_btn').each(function(btn){
                $(this).removeClass('time_btn_clrd')
            });
            $(elem).addClass('time_btn_clrd')
            time = $(elem).text()
            date = $(elem).data('day')
            $("#datepicker").datepicker("update", new Date(date));
    
    }
    else{
        if($(elem).hasClass('time_btn_clrd')){
            $(elem).removeClass('time_btn_clrd')
            time = $(elem).text()
            date = $(elem).data('day')
            let pop_date = date + ' ' + time;
            let rem_index;
            for (let index = 0; index < remove_date_mult.length; index++) {
                if(remove_date_mult[index]===pop_date){
                    rem_index = index;
                    break;
                }  
            }
            remove_date_mult.splice(rem_index,1);
           
        }
        
        else{
            $(elem).addClass('time_btn_clrd')
            time = $(elem).text()
            date = $(elem).data('day')
            remove_date_mult.push(date + ' ' + time);
           // console.log(remove_date_mult)
        }
    }
    
    console.log(remove_date_mult);
   // console.log(elem);
    
}



function onRemove(){
    $('#DoneSpinner')
        .removeClass('d-none')
        .addClass('d-flex') 
    if(time==''){
        alert("Please select a time slot to proceed.");
    } else{
       
        console.log(time)
        console.log(mode)
        function compare(a, b) {
            let d1 = a.split(',')[1];
            let d2 = b.split(',')[1];
            return new Date(d1) - new Date(d2);
          }

          remove_date_mult.sort(compare);
         
        var output = {'datetime':remove_date_mult, 'userid': userid, 'email': owner.email, 'duration': duration, 'description': data['description'], 'summary': data['eventname'], 'location':data['location'], 'link': timely_link}
   
    console.log(output)
        $.ajax({
            url: "/remove-slots",
            type: "post",
            contentType: 'application/json',
            data: JSON.stringify(output),
            dataType: 'json',
            success: function(response) {
                $('#DoneSpinner')
                    .removeClass('d-flex')
                    .addClass('d-none');

                    // window.location.reload();
                mode = 3;
                toggleSections(mode)
              
            },
        });
    }
}


function createMeet(){
    let phone;

    $('#DoneSpinner')
        .removeClass('d-none')
        .addClass('d-flex')

    var output = { 'datetime': date + ' ' + time, 'userid': userid, 'duration': duration, 'description': desc, 'summary': data['eventname'], 'location': data['location'], 'link': timely_link }
    var questions = data['questions']
    console.log(questions)
    var responses = {}
    for (var i = 0; i < Object.keys(questions).length; i++) {
        var q = questions[i]['label'].toLowerCase().replaceAll(' ', '_')
        if (['checkbox', 'radio'].includes(questions[i]['type'])) {
            console.log(q)
            var r = $('input[name="' + (i + 1).toString() + '"]:checked').val()
        }
        else {
            console.log('2')
            var r = $('#q-' + i).val()
        }
        responses[q] = r
        console.log(r)
        if (questions[i]['label'] == 'Phone Number') {
            phone = r;
        }
    }

    output['answers'] = responses

    $.ajax({
        url: "/create-meet",
        type: "post",
        contentType: 'application/json',
        data: JSON.stringify(output),
        dataType: 'json',
        success: function (response) {
            $('#DoneSpinner')
                .removeClass('d-flex')
                .addClass('d-none')
            mode = 2
            toggleSections(mode)
            $('#getNotifiedOnWhatsApp').attr('href', "https://wa.me/917008981115?text=Hi TimelyAI, I want to get updates here.")
        },
    });
}

var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();
let allowedDatesArr = [];
const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

today = yyyy + '-' + mm + '-' + dd;

const wekdaySchedule = data['schedule']
const duration = data['duration'];
let dt = selectedDate;
let nextNDates = [];
let nextNWeekDays = [];
let nextNDateStrs = [];
const Ndays = 6;


const bannerFilePath = data['banner'];

const attachmentFilesPath = data['attachments'];

var firebaseConfig = {
    apiKey: "AIzaSyArh7I3hm499cC3177bpmADMfp_fTXOQF4",
    authDomain: "timelyai-a7981.firebaseapp.com",
    projectId: "timelyai-a7981",
    storageBucket: "timelyai-a7981.appspot.com",
    messagingSenderId: "694921706184",
    appId: "1:694921706184:web:42f46deb6914f2930483fd",
    measurementId: "G-6QPWHCG591"
};
firebase.initializeApp(firebaseConfig);

let allDayAvailableSlots = {};

Date.prototype.addDays = function (days) {
    var date = new Date(this.valueOf());
    date.setDate(date.getDate() + days);
    return date;
}

const weekday = (val) => {
    if (val == 0) {
        return 'Sunday';
    } else if (val == 1) {
        return 'Monday';
    } else if (val == 2) {
        return 'Tuesday';
    } else if (val == 3) {
        return 'Wednesday';
    } else if (val == 4) {
        return 'Thursday';
    } else if (val == 5) {
        return 'Friday';
    } else if (val == 6) {
        return 'Saturday';
    }
}


const dayScheduleExists = (day) => {
    return (data['schedule'][day].length ? true : false);
}


const allwedDatesLister = () => {
    const allowedDates = data['datesallowed'];
    const allowedDatesKey = Object.keys(allowedDates);

    if (allowedDatesKey.length) {
        if (allowedDatesKey[0] == 'individual') {
            let tempDt;
            for (let tdate of allowedDates['individual']['dates']) {
                tempDt = new Date(tdate.split('-')[0] + '-' + tdate.split('-')[1] + '-' + tdate.split('-')[2]);
                allowedDatesArr.push(tempDt.getFullYear() + '-' + (tempDt.getMonth() + 1).toString().padStart(2, '0') + '-' + tempDt.getDate().toString().padStart(2, '0'));
            }
        } else if (allowedDatesKey[0] == 'range') {
            let sd = allowedDates['range']['startDate'].split('-');
            let ed = allowedDates['range']['endDate'].split('-');
            const stDt = new Date(sd[0] + '-' + sd[1] + '-' + sd[2]);
            const enDt = new Date(ed[0] + '-' + ed[1] + '-' + ed[2]);

            let tempDt = stDt;
            while (tempDt <= enDt) {
                allowedDatesArr.push(tempDt.getFullYear() + '-' + (tempDt.getMonth() + 1).toString().padStart(2, '0') + '-' + tempDt.getDate().toString().padStart(2, '0'));
                tempDt = tempDt.addDays(1);
            }
        } else if (allowedDatesKey[0] == 'rolling') {
            let sd = allowedDates['rolling']['startDate'].split('-');
            const stDt = new Date(sd[0] + '-' + sd[1] + '-' + sd[2]);
            let enDt = new Date(sd[0] + '-' + sd[1] + '-' + sd[2]);
            enDt = enDt.addDays(parseInt(allowedDates['rolling']['interval']));

            let tempDt = stDt;
            while (tempDt <= enDt) {
                allowedDatesArr.push(tempDt.getFullYear() + '-' + (tempDt.getMonth() + 1).toString().padStart(2, '0') + '-' + tempDt.getDate().toString().padStart(2, '0'));
                tempDt = tempDt.addDays(1);
            }
        }
    }
}
allwedDatesLister();

// Creating nextNDates
function dateLister() {
    allowedDatesArr.sort();
    console.log(allowedDatesArr);
    nextNDates = [];
    nextNWeekDays = [];
    allDayAvailableSlots = {};
    nextNDateStrs = []
    let i = 0;
    let skipped = 0;
    while (i - skipped < Ndays) {
        let tempDate = dt.addDays(i);
        let tempDateList = [tempDate.getFullYear(), (tempDate.getMonth() + 1).toString().padStart(2, '0'), tempDate.getDate().toString().padStart(2, '0')];

        if (allowedDatesArr.length && tempDate <= (new Date(allowedDatesArr[allowedDatesArr.length - 1]))) {
            if (dayScheduleExists(weekday(tempDate.getDay())) && allowedDatesArr.includes(tempDateList.join('-'))) {
                nextNDates.push(tempDateList.join('-'));
                nextNWeekDays.push(weekday(tempDate.getDay()));
                nextNDateStrs.push(weekday(tempDate.getDay()) + ', ' + tempDate.getDate() + ' ' + months[parseInt(tempDate.getMonth())]);
            } else {
                skipped++;
            }
        } else if (allowedDatesArr.length == 0) {
            if (dayScheduleExists(weekday(tempDate.getDay()))) {
                nextNDates.push(tempDateList.join('-'));
                nextNWeekDays.push(weekday(tempDate.getDay()));
                nextNDateStrs.push(weekday(tempDate.getDay()) + ', ' + tempDate.getDate() + ' ' + months[parseInt(tempDate.getMonth())]);
            } else {
                skipped++;
            }
        }
        i++;
    }
}

dateLister();


const findAvailableSlots = (date, weekday) => {

    let todayDate = new Date();
    let todayDateStr = todayDate.getFullYear().toString() + '-' + (todayDate.getMonth() + 1).toString().padStart(2, '0') + '-' + todayDate.getDate().toString().padStart(2, '0');
    let hourMinute = todayDate.getHours() * 100 + Math.ceil(todayDate.getHours() / 30) * 30;

    date = date.split('-')[0] + '-' + date.split('-')[1].padStart(2, '0') + '-' + date.split('-')[2].padStart(2, '0');
    let daySchedule = wekdaySchedule[weekday];

    if (daySchedule.length != 0) {

        let availableSlots = [];
        let slotIndexes = [];

        let start = todayDateStr == date ? hourMinute : parseInt(daySchedule[0]['F']);
        let end = parseInt(daySchedule[daySchedule.length - 1]['T']);

        let Allbookings = booked[date];
        let bookings = [];
        if (Allbookings) {
            Allbookings.forEach((c) => {
                if (!JSON.stringify(bookings).includes(JSON.stringify(c))) {
                    bookings.push(c);
                }
            });
        }

        let schInd = 0;
        let bookInd = 0;

        let hourPart;
        let minutePart;

        let slot = start;
        while (slot < end) {
            availableSlots.push(slot);
            hourPart = parseInt(slot / 100) + parseInt(((slot + duration) % 100) / 60);
            minutePart = parseInt(((slot + duration) % 100) % 60);

            slot = hourPart * 100 + minutePart;
            slotIndexes.push(1);
        }

        for (let ind in availableSlots) {
            if (availableSlots[ind] >= daySchedule[schInd]['F'] && availableSlots[ind] < daySchedule[schInd]['T']) {
                slotIndexes[ind] = slotIndexes[ind] & true;
            } else if (availableSlots[ind] >= daySchedule[schInd]['T']) {
                if (schInd + 1 < daySchedule.length) {
                    schInd++;
                    if (availableSlots[ind] < daySchedule[schInd]['F']) {
                        slotIndexes[ind] = slotIndexes[ind] & false;
                    } else {
                        slotIndexes[ind] = slotIndexes[ind] & true;
                    }
                } else {
                    slotIndexes[ind] = slotIndexes[ind] & false;
                }
            } else {
                slotIndexes[ind] = slotIndexes[ind] & false;
            }
        }

        if (bookings && bookings.length) {
            for (let ind in availableSlots) {
                if (availableSlots[ind] >= bookings[bookInd][0] && availableSlots[ind] < bookings[bookInd][1]) {
                    slotIndexes[ind] = slotIndexes[ind] & false;
                } else if (availableSlots[ind] >= bookings[bookInd][1]) {
                    if (bookInd + 1 < bookings.length) {
                        bookInd++;
                        if (availableSlots[ind] < bookings[bookInd][0]) {
                            slotIndexes[ind] = slotIndexes[ind] & true;
                        } else {
                            slotIndexes[ind] = slotIndexes[ind] & false;
                        }
                    } else {
                        slotIndexes[ind] = slotIndexes[ind] & true;
                    }
                } else {
                    slotIndexes[ind] = slotIndexes[ind] & true;
                }
            }
        }

        let finalSlots = [];

        for (let slotInd in slotIndexes) {
            if (slotIndexes[slotInd]) {
                finalSlots.push(availableSlots[slotInd]);
            }
        }

        return finalSlots;
    }
    else {
        return [];
    }

}

var datet = $('template')[0];
var timet = $('template')[1];
var timer = document.getElementById('timer');


var ndates_dp2 = nextNDates.map(h = (e) => new Date(e).toDateString() );
console.log(ndates_dp2);


Date.prototype.addDays = function(days) {
    var date = new Date(this.valueOf());
    date.setDate(date.getDate() + days);
    return date;
}


const allowedDates = data['datesallowed'];
const allowedDatesKey = Object.keys(allowedDates);

$('#datepicker').datepicker({
    weekStart: 1,
    maxViewMode: 2,
    todayHighlight: true,
    toggleActive: true,
    beforeShowDay: function(date){
        let today = new Date();
        let day = weekday(date.getDay());
        let iso_date ;
        let x = date;
        if((x.getMonth()+1).toString().length>1){
            iso_date = x.getFullYear().toString()+'-'+(x.getMonth()+1).toString()+'-'+x.getDate().toString();
           }else{
            iso_date = x.getFullYear().toString()+'-0'+(x.getMonth()+1).toString()+'-'+x.getDate().toString();
           }
        if(date < today.addDays(-1)){
            return false;
        }
        if(data['schedule'][day].length==0){
            return false;
        }
        if(allowedDatesKey.length){
            if(!findAvailableSlots(iso_date, weekday(date.getDay())).length){
                return false;
              }
              else{
            if(allowedDatesKey[0]=='individual'){
                let temp = [date.getDate(), date.getMonth()+1, date.getFullYear()];
                let dt = temp[2]+'-'+temp[1].toString().padStart(2, '0')+"-"+temp[0].toString().padStart(2, '0');
                if(allowedDates['individual']['dates'].includes(dt)){
                    return true;
                }
                else{
                    return false;
                }
            } else if(allowedDatesKey[0]=='range'){
                let sd = allowedDates['range']['startDate'].split('-');
                let ed = allowedDates['range']['endDate'].split('-');
                const stDt = new Date(sd[0]+'-'+sd[1]+'-'+sd[2]);
                const enDt = new Date(ed[0]+'-'+ed[1]+'-'+ed[2]);
                return (date>=stDt & date<=enDt) ? true : false;
            } else if(allowedDatesKey[0]=='rolling'){
                let sd = allowedDates['rolling']['startDate'].split('-');
                const stDt = new Date(sd[0]+'-'+sd[1]+'-'+sd[2]);
                let enDt = new Date(sd[0]+'-'+sd[1]+'-'+sd[2]);
                enDt = enDt.addDays(parseInt(allowedDates['rolling']['interval']));
                return (date>=stDt & date<=enDt) ? true : false;
            } else{
                return true;
            }
        }
        } else{
            return true;
        }
    }
});


$('#datepicker').datepicker().on('changeDate', function (ev) {
    if (ev['date']) {
        dpDate = ev['date'].toString().split(' ').slice(1, 4).join(' ')
        selectedDate = dpDate.split(' ')[2] + '-' + (shortMonths.indexOf(dpDate.split(' ')[0]) + 1).toString().padStart(2, '0') + '-' + dpDate.split(' ')[1]
    } else {
        selectedDate = allowedDatesArr.length ? allowedDatesArr[0] : (new Date()).toISOString().split('T')[0];
    }
    dt = new Date(selectedDate);
    dateLister()
    nextNDateStrs = []
    if (nextNDates.length) {
        for (let ind in nextNDates) {
            if (findAvailableSlots(nextNDates[ind], nextNWeekDays[ind]).length != 0) {
                allDayAvailableSlots[nextNDates[ind]] = findAvailableSlots(nextNDates[ind], nextNWeekDays[ind]);

                let dtDate = new Date(nextNDates[ind]);
                nextNDateStrs.push(nextNWeekDays[ind] + ', ' + dtDate.getDate() + ' ' + months[parseInt(dtDate.getMonth())]);
            }
        }
        $('#timer').empty();
        slotEm();
    } else {
        $('#timer').html(`<div>Event has no new available slot!</div>`)
    }
});



$('#datepicker2').datepicker('destroy');
// console.log(allDayAvailableSlots)
// // console.log( Object.keys(allDayAvailableSlots).length)

// console.log(nextNDates[0], nextNWeekDays[0])
// console.log(findAvailableSlots(nextNDates[0], nextNWeekDays[0]).length)

$('#datepicker2').datepicker({
    weekStart: 1,
    maxViewMode: 2,
    todayHighlight: true,
    toggleActive: true,
    multidate: true,
    beforeShowDay: function(date){
        let iso_date ;
        let x = date;
        if((x.getMonth()+1).toString().length>1){
            iso_date = x.getFullYear().toString()+'-'+(x.getMonth()+1).toString()+'-'+x.getDate().toString();
           }else{
            iso_date = x.getFullYear().toString()+'-0'+(x.getMonth()+1).toString()+'-'+x.getDate().toString();
           }

           try {
               if($(`#rem-all-cb-${iso_date}`)[0].checked){
                   return{
                    classes: 'active'
                   }
               }
           } catch (error) {
            if(ndates_dp2.includes(date.toDateString())){
              if(findAvailableSlots(iso_date, weekday(date.getDay())).length){
                return true;
              }
              else{
                  return false;
              }
            }else{
                return false;
            }
           }
        
        }
        
});

$('#datepicker2').datepicker().on('changeDate', function(ev){
    //let x = ev['date'];

    let d_list = (ev['dates']);
    console.log(d_list)
    let s_date='';
    console.log(nextNDates);
    // for (let i = 0; i < nextNDates.length; i++) {
    //     let inp = ($(`#rem-all-cb-${nextNDates[i]}`)[0]);
    //     if(inp.checked){
    //     inp.click();
    //     }
    // }

    if(d_list.length){
        for (let i = 0; i < d_list.length; i++) {
     x = d_list[i]; 
     console.log(x.getDate().toString())      
    if((x.getMonth()+1).toString().length>1){
        
        if(x.getDate().toString().length>1){
           s_date = x.getFullYear().toString()+'-'+(x.getMonth()+1).toString()+'-'+x.getDate().toString();
        }else{
            s_date = x.getFullYear().toString()+'-'+(x.getMonth()+1).toString()+'-'+x.getDate().toString();
        }
    }else{
        if(x.getDate().toString().length>1){
            s_date = x.getFullYear().toString()+'-0'+(x.getMonth()+1).toString()+'-'+x.getDate().toString();
         }else{
             s_date = x.getFullYear().toString()+'-0'+(x.getMonth()+1).toString()+'-'+x.getDate().toString();
         }
    }

    
    console.log(s_date);
    
    try {
        let inp = ($(`#rem-all-cb-${s_date}`)[0]);
        console.log(inp);

    if(!inp.checked){
       // remove_date_mult = [];
        inp.checked = true;
        removeall(s_date);
    }else{
        inp.click();
    } 
    } catch (error) {
        console.log(error);
        console.log('entity does not exist or expired');
        
    }
   

   }
   }

   $('#datepicker2').datepicker('destroy');

   $('#datepicker2').datepicker({
    weekStart: 1,
    maxViewMode: 2,
    todayHighlight: true,
    toggleActive: true,
    multidate: true,
    beforeShowDay: function(date){
        let iso_date ;
        let x = date;
        if((x.getMonth()+1).toString().length>1){
            iso_date = x.getFullYear().toString()+'-'+(x.getMonth()+1).toString()+'-'+x.getDate().toString();
           }else{
            iso_date = x.getFullYear().toString()+'-0'+(x.getMonth()+1).toString()+'-'+x.getDate().toString();
           }

           try {
               if($(`#rem-all-cb-${iso_date}`)[0].checked){
                   return{
                    classes: 'active'
                   }
               }
           } catch (error) {
            if(ndates_dp2.includes(date.toDateString())){
              if(findAvailableSlots(iso_date, weekday(date.getDay())).length){
                return true;
              }
              else{
                  return false;
              }
            }else{
                return false;
            }
           }
        
        }
        
});

    
    
});


function removeall(i){
   console.log(i);

   let ndates_js = nextNDates.map(h = (e) => new Date(e).toDateString() );
    console.log(ndates_js);
    let ndl =''

    x = new Date(i.toString());
            if((x.getMonth()+1).toString().length>1){
        
                if(x.getDate().toString().length>1){
                    ndl = x.getFullYear().toString()+'-'+(x.getMonth()+1).toString()+'-'+x.getDate().toString();
                }else{
                    ndl = x.getFullYear().toString()+'-'+(x.getMonth()+1).toString()+'-0'+x.getDate().toString();
                }
            }else{
                if(x.getDate().toString().length>1){
                    ndl = x.getFullYear().toString()+'-0'+(x.getMonth()+1).toString()+'-'+x.getDate().toString();
                 }else{
                    ndl = x.getFullYear().toString()+'-0'+(x.getMonth()+1).toString()+'-0'+x.getDate().toString();
                 }
            }

    let remove_child = $('#removetimer').children(`#${ndl}`);


    console.log(remove_child);
    let rmc = remove_child[0].children;

   // console.log(document.getElementById(`rem-all-cb-${i}`).checked);

    for (let index = 0; index < rmc.length; index++) {
        // console.log(rmc[index].getElementsByClassName('time_btn'))
        if(document.getElementById(`rem-all-cb-${i}`).checked){
          //  console.log('control reached checked');
        if(!rmc[index].getElementsByClassName('time_btn')[0].classList.contains('time_btn_clrd')){
          //  console.log('control reached checked not clicked');
        timebtnClick(rmc[index].getElementsByClassName('time_btn')[0])
        }
      }
      else{
        // console.log('control reached unchecked');
         if(rmc[index].getElementsByClassName('time_btn')[0].classList.contains('time_btn_clrd')){
            timebtnClick(rmc[index].getElementsByClassName('time_btn')[0])
         }
    }
    }
     
    $('#datepicker2').datepicker('destroy');



    $('#datepicker2').datepicker({
        weekStart: 1,
        maxViewMode: 2,
        todayHighlight: true,
		toggleActive: true,
        multidate: true,
        beforeShowDay: function(date){
            let iso_date ;
            let x = date;
            if((x.getMonth()+1).toString().length>1){
                iso_date = x.getFullYear().toString()+'-'+(x.getMonth()+1).toString()+'-'+x.getDate().toString();
               }else{
                iso_date = x.getFullYear().toString()+'-0'+(x.getMonth()+1).toString()+'-'+x.getDate().toString();
               }

               try {
                   if($(`#rem-all-cb-${iso_date}`)[0].checked){
                       return{
                        classes: 'active'
                       }
                   }
               } catch (error) {
                if(ndates_js.includes(date.toDateString())){
                  
                    return true;
                }else{
                    return false;
                }
               }
            
            }
            
    });

}

function slotEm(){
    console.log(allDayAvailableSlots)
    for(var day = 0; day < Object.keys(allDayAvailableSlots).length; day++){
        datet.content.querySelector('span').innerText = nextNDateStrs[day];
        datet.content.querySelector('div').id = Object.keys(allDayAvailableSlots)[day];
        timer.appendChild(datet.content.cloneNode(true))
        allDayAvailableSlots[Object.keys(allDayAvailableSlots)[day]].forEach((time) => {
            let timeNormal = time >= 1300 ? time % 1200 : time;
            let timeNormalStr = (parseInt(timeNormal / 100) >= 10 ? parseInt(timeNormal / 100) : '0' + parseInt(timeNormal / 100)) + ':' + (parseInt(timeNormal % 100) >= 10 ? parseInt(timeNormal % 100) : '0' + parseInt(timeNormal % 100));
            let ampm = time >= 1200 ? 'PM' : 'AM';
            timet.content.querySelector('a').innerText = timeNormalStr + ' ' + ampm;
            timet.content.querySelector('a').setAttribute('data-day', nextNWeekDays[day] + ', ' + months[parseInt(Object.keys(allDayAvailableSlots)[day].split('-')[1]) - 1] + ' ' + Object.keys(allDayAvailableSlots)[day].split('-')[2] + ' ' + Object.keys(allDayAvailableSlots)[day].split('-')[0])
            dater = document.getElementById(Object.keys(allDayAvailableSlots)[day])
            dater.appendChild(timet.content.cloneNode(true))
        });
    }

    

    let myDiv = document.getElementById('timer');
    myDiv.scrollTop = 0;
}



nextNDateStrs = []
if (nextNDates.length) {
    for (let ind in nextNDates) {
        if (findAvailableSlots(nextNDates[ind], nextNWeekDays[ind]).length != 0) {
            allDayAvailableSlots[nextNDates[ind]] = findAvailableSlots(nextNDates[ind], nextNWeekDays[ind]);
            let dtDate = new Date(nextNDates[ind]);
            nextNDateStrs.push(nextNWeekDays[ind] + ', ' + dtDate.getDate() + ' ' + months[dtDate.getMonth()]);
        }
    }

    slotEm()
} else {
    $('#timer').html(`<div class="d-flex justify-content-center align-items-center">Event has no new available slot!</div>`)
}


if(owner.status){
    document.getElementById('removetimer').innerHTML = document.getElementById('timer').innerHTML;
    
    let remove_child = $('#removetimer').children();
    
    // console.log(remove_child);
    // console.log(nextNDates)

    let t = 0;
    let ndateslist;

    for (let index = 0; index < remove_child.length; index++) {
        
        if(remove_child[index].classList.contains('date')){
            while (allDayAvailableSlots[nextNDates[t]] === undefined) {
                t++;
                console.log(t);
            }
            x = new Date((nextNDates[t]).toString());
            if((x.getMonth()+1).toString().length>1){
        
                if(x.getDate().toString().length>1){
                    ndateslist = x.getFullYear().toString()+'-'+(x.getMonth()+1).toString()+'-'+x.getDate().toString();
                }else{
                    ndateslist = x.getFullYear().toString()+'-'+(x.getMonth()+1).toString()+'-'+x.getDate().toString();
                }
            }else{
                if(x.getDate().toString().length>1){
                    ndateslist = x.getFullYear().toString()+'-0'+(x.getMonth()+1).toString()+'-'+x.getDate().toString();
                 }else{
                    ndateslist = x.getFullYear().toString()+'-0'+(x.getMonth()+1).toString()+'-'+x.getDate().toString();
                 }
            }

           // console.log(typeof(ndateslist),ndateslist)
            t++;
            remove_child[index].style.display = 'flex'
            remove_child[index].style.justifyContent = 'space-between'
            remove_child[index].innerHTML += `<span><input id='rem-all-cb-${ndateslist}' style="margin-right:8px" class="form-check-input" type="checkbox"  onclick="removeall('${ndateslist}')">Remove all</span>`
        }
    }
    
    }


// Booking Q&A Response js code
let response = {};

const inputChange = (e, label, ind) => {
    if (e.target.type == 'radio') {
        let val = $('#question-' + ind + ' input:checked').attr('value');
        response[label] = val;
        return;
    }

    if (e.target.type == 'checkbox') {
        let options = [];
        $('#question-' + ind + ' input:checked').each((i, v) => {
            options.push(v.value);
        })

        response[label] = options;
        return;
    }

    let re = /^([^]*)$/;

    if (label.toLowerCase().includes('email')) {
        re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    } else if (label.toLowerCase().includes('phone')) {
        re = /^([1-9]{1}\d{9})$/;
    } else if (label.toLowerCase().includes('name')) {
        re = /^([a-zA-Z ]{2,})$/;
    }

    if (re.test(e.target.value)) {
        response[label] = e.target.value;
        $('#question-' + ind + ' input')
            .removeClass('is-invalid')
            .addClass('is-valid');;
    } else {
        $('#question-' + ind + ' input')
            .removeClass('is-valid')
            .addClass('is-invalid');
    }
}

const scheduleEvent = () => {
    let keys = Object.keys(response);
    let allChecked = true;

    $('span[statusrequired]').each((i, v) => {
        let label = v.innerHTML.substring(0, v.innerHTML.length - 2);
        allChecked = allChecked & keys.includes(label);
        if (!keys.includes(label)) {
            alert("Field " + label + " is required !!");
            return false;
        }
    })

    if (allChecked) {
        createMeet();
    }

}


let storageRef;

if (bannerFilePath.length) {
    storageRef = firebase.storage().ref(bannerFilePath.split('/')[0] + '/banner');
    storageRef.child(bannerFilePath.split('/')[2]).getDownloadURL().then((url => {
        $('#bannerImg')
            .attr('src', url)
            .height("100%")
            .width('unset')
            .css('overflow', 'hidden');
    }))
}else{
    if(screen.width<575){
        $('.banner-preview').remove();
    }
}


let attachmentsHtml = '';


if (attachmentFilesPath['url'].length > 0) {
    let promises = attachmentFilesPath['url'].map(attPath => new Promise((res, err) => {
        storageRef = firebase.storage().ref(attPath.split('/')[0] + '/attachments');
        storageRef.child(attPath.split('/')[2]).getDownloadURL().then((url => {
            attachmentsHtml += `<a href="${url}" target="_blank"><img src="../static/img/icons/attachment_icon.svg" alt=""><u>${attPath.split('/')[2]}</u></a><br>`;
            $('#eventAttachments').html(attachmentsHtml);
            $('#eventAttachments1').html(attachmentsHtml);
        }))
    }));
} else {
    $('#attachmentRow0').addClass('d-none');
    $('#attachmentRow1').addClass('d-none');
}



function toggleS_R(index){
    let cl = $('.select-rem-dp');
    let e = $('#octsr0')[0];
    let f = $('#octsr1')[0];
    console.log(e)
    console.log(cl[0])
    console.log(cl[1])
    if(index==1){
    cl[1].style.display = 'block';
    cl[0].style.display = 'none';
    f.style.color = 'black';
    e.style.color = '#c7c7c7';
    $('#remove-time-li')[0].getElementsByTagName('i')[0].style.color = 'black';
    $('.hr-t1')[1].style.opacity = "1";
    $('.hr-t1')[0].style.opacity = "0";
    $('#remove-time-li')[0].getElementsByTagName('a')[0].click();
    }else{
        e.style.color = 'black';
        f.style.color = '#c7c7c7'
        $('#select-time-li')[0].getElementsByTagName('a')[0].click();
        $('#remove-time-li')[0].getElementsByTagName('i')[0].style.color = '#c7c7c7'
        cl[0].style.display = 'block';
        cl[1].style.display = 'none'; 
        $('.hr-t1')[0].style.opacity = "1";
        $('.hr-t1')[1].style.opacity = "0";
    }

}
if(owner.status){
    $('.cal_top')[0].style.padding = "0";
    $('.hr-t1')[0].style.opacity = "1";
    
    $('#octsr1')[0].style.display = "block";
    $('#remove-time-li')[0].style.display = "block";
}else{
    $('#octsrlogo')[0].style.display = "block";
}