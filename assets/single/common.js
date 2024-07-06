$(document).ready(function () {
  /********First form submit *******/
  $('#receiveOtp').click(function () {
    var firstName = $('#firstName').val();
    var lastName = $('#lastName').val();
    var mobile = $('#mobile').val();
    var NumberRegex = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/;
    var count = 0;
    $('#firstNameError, #lastNameError, #mobileError').html('');
    if (!(firstName && firstName.match('^[a-zA-Z ]{3,16}$'))) {
      $('#firstNameError').html('Please enter your first name.');
      count = 1;
    }
    if (!(lastName && lastName.match('^[a-zA-Z ]{3,16}$'))) {
      $('#lastNameError').html('Please enter your last name.');
      count = 1;
    }
    if (!(mobile !== null && mobile.length == 10 && NumberRegex.test(mobile))) {
      $('#mobileError').html('Please enter your mobile number.');
      count = 1;
    }
    if (count == 0) {
      /***** Get the otp in mobile number provides */
      get_otp();
    }
  });
  /******* Otp function with validation(if validation confirms enable button)**********/
  OTPInput();
  /*****Second form submit with all details and get the referal id */
  $('#otpButton').click(function () {
    if (countOtp()) {
      let refId = getReferalId();
      join_waitlist(refId);
    } else {
      $('#otpError').html('Enter the correct OTP');
    }
  });
  /******** Third form submit with sharing option with the referal code */
  $('#invite_button').click(function () {
    share();
    $('#success_modal').modal('hide');
  });
});
