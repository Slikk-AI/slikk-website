function OTPInput() {
    const inputs = document.querySelectorAll('#otp > *[id]');
    for (let i = 0; i < inputs.length; i++) {
      inputs[i].addEventListener('keyup', function(event) {
        if (event.key === "Backspace") {
          inputs[i].value = '';
          if (i !== 0)
            inputs[i - 1].focus();
        }
        else {
          if (inputs[i]) {
            if (i !== inputs.length - 1)
              inputs[i + 1].focus();
            event.preventDefault();
          }
        }
      });
    }
  }
  function countOtp(){
    var otp = $('input[name^=otp]').map(function(idx, elem) {
      return $(elem).val();
    }).get();
    var count = otp.filter(Boolean).length;
    console.log(count, otp);
    if(count === 6){
      return true;
    }
    else{
      return false;
    }
  }
  function getReferalId(){
    var url = window.location.href;
    l = url.substring(url.lastIndexOf('/') + 1);
    console.log(l);
    return l;
  }
  function share(){
    let ref_id = $('#success_referal').val();
    let shareData = {
        title: 'Flatshare',
        text: constants.share_msg,
        url: constants.share_url+ref_id,
      }
    navigator.share(shareData)
      .then(() =>{
        console.log('Flatshare shared successfully', shareData);
      })
      .catch((e) =>{
        console.log('Error: ' + e + shareData)
      })
  }
      
  function join_waitlist(ref){
    var firstName = $('#firstName').val();
    var lastName = $('#lastName').val();
    var mobile = $('#mobile').val();
    var otp = $('input[name^=otp]').map(function(idx, elem) {
      return $(elem).val();
    }).get().join('');
    var ref_id = ref? ref:'';
    let person = {
      "code": otp,
      "name": {
          "firstName": firstName,
          "lastName": lastName
      },
      "invite": ref_id
    };
    $.ajax({
      url: constants.verifyOtp + mobile,
      type: 'post',
      dataType: 'json',
      contentType: 'application/json',
      success: function (res) {
        if(res.success){
          $('#myModal form')[0].reset();
          $('#success_modal').modal('show');
          $('#otp_modal').modal('hide');
          $('#username').html(res.data.user.data.name.firstName);
          $('#position').html('#'+res.data.user.data.score);
          $('#success_referal').val(res.data.user.data.name.firstName+"."+res.data.user.data.position);
        }else{
          $('#otpError').html(res.message);
        }
      },
      error: function(err){
        var obj = JSON.parse(err.responseText);
        $('#otpError').html(obj.message);
      },
      data: JSON.stringify(person)
  });
  }
  function get_otp(){
    $("#error").html('');
    var mobile = $('#mobile').val();
    var firstName = $('#firstName').val();
    $.ajax({
      url: constants.get_otp + mobile,
      type: 'post',
      dataType: 'json',
      contentType: 'application/json',
      success: function (data) {
          $('#myModal').modal('hide');
          $('#otp_modal').modal('show');
      },
      error: function(err, data){
          var obj = JSON.parse(err.responseText);
          if(obj.message == "User already in waitlist."){
            $('#myModal').modal('hide');
            $('#position').html('#'+obj.data.data.score);
            $('#username').html(obj.data.data.name.firstName);
            $('#myModal form')[0].reset();
            $('#success_referal').val(obj.data.data.name.firstName+"."+obj.data.data.position);
            $('#success_modal').modal('show');
          }
          else{
            $('#mobileError').html(obj.message)
          }
      },
  });
  }
