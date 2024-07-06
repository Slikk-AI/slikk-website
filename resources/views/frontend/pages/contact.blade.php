@extends('frontend.layouts.master')
@section('content')
<section class="wrapper bg-dark text-white">
      <div class="container pt-18 pt-md-20 pb-21 pb-md-21 text-center">
        <div class="row">
          <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 col-xxl-5 mx-auto">
            <h1 class="display-1 text-white mb-3">Get in Touch</h1>
            <p class="lead px-xl-10 px-xxl-10">Have any questions? Reach out to us from our contact form and we will get back to you shortly.</p>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container pb-14 pb-md-16">
        <div class="row">
          <div class="col mt-n19 mb-16">
            <div class="card shadow-lg">
              <div class="row gx-0">
                <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start d-none d-md-block" data-image-src="./assets/img/photos/tm1.jpg">
                </div>
                <!--/column -->
                <div class="col-lg-6">
                  <div class="p-10 p-md-11 p-lg-13">
                    <h2 class="display-4 mb-3">Contact Us</h2>
                    <p class="lead fs-lg">Legends always ask us to communicate more. Because conversation solves most of the problems. We always keep our clients entertained by delivering solutions to most of their problems just by communicating and understanding the situation in a better manner.</p>
                    <p>So, if you have any queries, any sort of problems, or anything which you’re unable to understand regarding our tools, plans, pricing, or strategies then, just don’t hesitate or hang back. Instantly, shoot your queries through the mail. And we’ll get back to you ASAP.   </p>
                   
                  </div>
                  <!--/div -->
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-xl-10 mx-auto">
            <div class="row gy-10 gx-lg-8 gx-xl-12">
              <div class="col-lg-8">
                <form class="contact-form " method="post" action="{{url('save_contact')}}">
				@csrf
                  <div class="messages"></div>
                  <div class="row gx-4">
                    <div class="col-md-6">
                      <div class="form-floating mb-4">
                        <input id="first_name" type="text" name="first_name" class="form-control" placeholder="First Name" required>
                        <label for="first_name">First Name *</label>
                        <div class="valid-feedback"> Looks good! </div>
                        <div class="invalid-feedback"> Please enter your first name. </div>
                      </div>
                    </div>
                    <!-- /column -->
                    <div class="col-md-6">
                      <div class="form-floating mb-4">
                        <input id="surname" type="text" name="surname" class="form-control" placeholder="Last Name" required>
                        <label for="surname">Last Name *</label>
                        <div class="valid-feedback"> Looks good! </div>
                        <div class="invalid-feedback"> Please enter your last name. </div>
                      </div>
                    </div>
                    <!-- /column -->
                    <div class="col-md-6">
                      <div class="form-floating mb-4 skp">
                        <input id="email" type="email" name="email" class="form-control" placeholder="Email" required>
                        <label for="email">Email *</label>
                        <div class="valid-feedback"> Looks good! </div>
                        <div class="invalid-feedback"> Please provide a valid email address. </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating mb-4">
                        <input id="phone" type="text" name="phone" class="form-control" placeholder="Mobile Number">
                        <label for="phone">Mobile Number</label>
                        <div class="valid-feedback"> Looks good! </div>
                        <div class="invalid-feedback"> Please provide a valid Mobile Number. </div>
                      </div>
                    </div>
                    <!-- /column -->
                  <!--  <div class="col-md-6">
                      <div class="form-select-wrapper">
                        <select class="form-select" id="form-select" required>
                          <option selected disabled value="">Select a department</option>
                          <option value="1">Sales</option>
                          <option value="2">Marketing</option>
                          <option value="3">Customer Support</option>
                        </select>
                        <div class="valid-feedback"> Looks good! </div>
                        <div class="invalid-feedback"> Please select a department. </div>
                      </div>
                    </div>-->
                    <!-- /column -->
                    <div class="col-12">
                      <div class="form-floating mb-4">
                        <textarea id="message" name="message" class="form-control" placeholder="Your message" style="height: 150px" required></textarea>
                        <label for="message">Message *</label>
                        <div class="valid-feedback"> Looks good! </div>
                        <div class="invalid-feedback"> Please enter your messsage. </div>
                      </div>
                    </div>
                    <!-- /column -->
                    <div class="col-12">
                      <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" checked required>
                        <label class="form-check-label" for="invalidCheck"> I agree to <a href="https://www.marketsangle.com/terms-and-conditions" class="hover">terms and policy</a>. </label>
                        <div class="invalid-feedback"> You must agree before submitting. </div>
                      </div>
                    </div>
                    <!-- /column -->
                    <div class="col-12">
                      <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3 btn_contact_save" value="Send message" onclick="return saveContact();">
                      <p class="text-muted"><strong>*</strong> These fields are required.</p>
                    </div>
                    <!-- /column -->
                  </div>
                  <!-- /.row -->
                </form>
                <!-- /form -->
              </div>
              <!--/column -->
              <div class="col-lg-4">
                <div class="d-flex flex-row">
                  <div>
                    {{-- <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div> --}}
                  </div>
                  <div>
                    {{-- <h5 class="mb-1">Address</h5>
                    <address>Moonshine St. 14/05 Light City, London, United Kingdom</address> --}}
                  </div>
                </div>
                <div class="d-flex flex-row">
                  <div>
                    {{-- <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div> --}}
                  </div>
                  <div>
                    {{-- <h5 class="mb-1">Phone</h5>
                    <p>00 (123) 456 78 90 <br class="d-none d-md-block" />00 (987) 654 32 10</p> --}}
                  </div>
                </div>
                <div class="d-flex flex-row">
                  <div>
                    <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                  </div>
                  <div>
                    <h5 class="mb-1">E-mail</h5>
                    <p class="mb-0"><a href="mailto:support@marketsangle.com" class="link-body">support@marketsangle.com</a></p>
                   <!-- <p><a href="mailto:help@sandbox.com" class="link-body">help@sandbox.com</a></p>-->
                  </div>
                </div>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
		<h2 class="display-4 mb-3 text-center">FAQ</h2>
        <p class="lead text-center mb-10 px-md-16 px-lg-0">If you don't see an answer to your question, you can send us an email from our contact form.</p>
        <div class="row mb-14 mb-md-18">
          <div class="col-lg-6 mb-0">
            <div id="accordion-1" class="accordion-wrapper">
              <div class="card">
                <div class="card-header" id="accordion-heading-1-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-1" aria-expanded="false" aria-controls="accordion-collapse-1-1">Can I ask for a Refund for One Time Purchase Strategies?</button>
                </div>
                <!-- /.card-header -->
                <div id="accordion-collapse-1-1" class="collapse" aria-labelledby="accordion-heading-1-1" data-bs-target="#accordion-1">
                  <div class="card-body">
                    <p>Generally, all our strategies are tried and tested and have previous years' data to back the authenticity of it. And in One time purchase strategies, we reveal all the aspects and application processes of that and hence make it impossible to refund the amount. But in case, if you’re unable to make any profit in 90 Trading days after applying the exact strategy (as per the expert guidelines mentioned in the strategy), then you can ask for the Refund. For that, you can write us at support@marketsangle.com.</p>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
              <div class="card">
                <div class="card-header" id="accordion-heading-1-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-2" aria-expanded="false" aria-controls="accordion-collapse-1-2">Which Payment Method do you accept?</button>
                </div>
                <!-- /.card-header -->
                <div id="accordion-collapse-1-2" class="collapse" aria-labelledby="accordion-heading-1-2" data-bs-target="#accordion-1">
                  <div class="card-body">
                    <p>We accept Visa, Mastercard, AmEx, Maestro, or Rupay debit or credit cards. And you will also get the option to make the payment through NetBanking with 50+ National Banks. You can also use the option of UPI payment and E-wallets like OLAmoney, PayTM, airtel, Oxigen, Freecharge, and JioMoney. </p>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
              <div class="card">
                <div class="card-header" id="accordion-heading-1-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-3" aria-expanded="false" aria-controls="accordion-collapse-1-3">Is my Debit/Credit Card Information Secure?</button>
                </div>
                <!-- /.card-header -->
                <div id="accordion-collapse-1-3" class="collapse" aria-labelledby="accordion-heading-1-3" data-bs-target="#accordion-1">
                  <div class="card-body">
                    <p>We are using PayU as the Payment gateway to receive the payments from customers. And just to enlighten you regarding PayU, it’s India’s most trusted and Leading Payment Gateway. All the PayU servers are PDI-DSS Compliant and which makes it safest for your Card Information. And if you plan to save your card for the next use, then, the Card Number and Expiry date will be saved in a secured Database but CVV is never saved, you’ll have to enter in manually during each use. </p>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
              
            </div>
            <!-- /.accordion-wrapper -->
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <div id="accordion-2" class="accordion-wrapper">
              <div class="card">
                <div class="card-header" id="accordion-heading-2-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-1" aria-expanded="false" aria-controls="accordion-collapse-2-1">Do you have any Discount offers for People in Need?</button>
                </div>
                <!-- /.card-header -->
                <div id="accordion-collapse-2-1" class="collapse" aria-labelledby="accordion-heading-2-1" data-bs-target="#accordion-2">
                  <div class="card-body">
                    <p>As our motto is to make trading profitable for anyone and everyone without considering their backstory. So, we do have an AMAZING DISCOUNT OFFER for the People in Need. If you’re a trader who has been continuously facing loss for the past 3 months, then you just have to share your Broker Statement with us and you’ll get an EXCLUSIVE 30% DISCOUNT on your first purchase. Just your statement with us at support@marketsangle.com and we’ll get back to you in the next 24 hours.</p>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
              <div class="card">
                <div class="card-header" id="accordion-heading-2-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-2" aria-expanded="false" aria-controls="accordion-collapse-2-2">Do you offer a Free Trial of any Strategy?</button>
                </div>
                <!-- /.card-header -->
                <div id="accordion-collapse-2-2" class="collapse" aria-labelledby="accordion-heading-2-2" data-bs-target="#accordion-2">
                  <div class="card-body">
                    <p>To explain any strategy, we have to explain it completely for expected outcomes. Hence, it isn’t possible to provide Free Trial for the strategies. So, we’re not offering Free Trials for now. </p>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
              <div class="card">
                <div class="card-header" id="accordion-heading-1-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-4" aria-expanded="false" aria-controls="accordion-collapse-1-4">How do I get my Payment Receipt and Invoice?</button>
                </div>
                <!-- /.card-header -->
                <div id="accordion-collapse-1-4" class="collapse" aria-labelledby="accordion-heading-1-4" data-bs-target="#accordion-1">
                  <div class="card-body">
                    <p>You’ll receive the Payment Receipt instantly after making the payment. And we’ll mail you the proper Invoice within 24 hrs of the Payment. </p>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.accordion-wrapper -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      
      <!-- /.map -->
    </section>
    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->
@endsection 
@section('custom-script')
<script>
function saveContact(){
	//$('.btn_contact_save').attr('disabled', true);
}
</script>
@endsection 