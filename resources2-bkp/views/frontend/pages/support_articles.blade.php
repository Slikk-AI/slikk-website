@extends('frontend.layouts.master')
@section('content')


<d>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <div>
        <img src="https://slikk.ai/img/Group914.png" alt="Snow" class="bannerimg">
        <div class="bannermobimage">
        <div class="container" id="bg-img">

            <div>
                <h1 class="top-left">How Can We Help?</h1>


                <div class="col-md-6 p-6 mx-auto top-left1 text-wrap" style="position:absolute;">
                    <!-- <div class="small fw-light">search input with icon</div> -->
                    <div class="input-group">
                        <input class="form-control border-end-0 border rounded-pill" type="search" value="search"
                            id="example-search-input">
                        <span class="input-group-append">
                            <button
                                class="btn btn-outline-secondary bg-primary border-bottom-0 border rounded-pill ms-n5"
                                type="button" style=" margin-left: 10px;
                                width: 70px;
                                color: #ffffff;
                                /* border-color: blue; */
                                height: 100%;">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                </span>
                                <!-- <p style="font-size: 20px;">Search</p> -->
                            </button>
                        </span>
                    </div>

                </div>
                <div class="suggetions-list">
                    <ul class="col-md-6 top-left2 suggetions listt" style=" position:absolute;
            display: inline-flex;
            text-align: left;
            margin-left: -12px;
            top: 7%;
            margin-top: 275px;">
                        <li class="text-start ">
                            <p style="font-family: Open Sans, sans-serif;   font-size: 20px;">Suggestions:</p>
                        </li>
                        <li class="text-col"><a href="" class="t-col">SignUp</a></li>
                        <li class="text-col"><a href="" class="t-col">Pricing Plans</a></li>
                        <li class="text-col"> <a href="" class="t-col">Create pods</a></li>
                        <li class="text-col"> <a href="" class="t-col">Integrations</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- end img code  -->
    <div class="container" style="color: #000000; ">
        <div class="row" style="
        /* gap: 36px; */
        margin-top: 20px;">
            <div class="col-md-4  tl-width" style="background-color:#302183;  box-shadow: 1px 0px 11px 1px #888888;
                    margin-top: 20px;
                    margin-bottom: 20px; ">

                <div class="bg-card p-4" id="card-box">
                    <span style="float: right;     margin-top: -20px;"><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-escape" viewBox="0 0 16 16">
                            <path
                                d="M8.538 1.02a.5.5 0 1 0-.076.998 6 6 0 1 1-6.445 6.444.5.5 0 0 0-.997.076A7 7 0 1 0 8.538 1.02Z" />
                            <path
                                d="M7.096 7.828a.5.5 0 0 0 .707-.707L2.707 2.025h2.768a.5.5 0 1 0 0-1H1.5a.5.5 0 0 0-.5.5V5.5a.5.5 0 0 0 1 0V2.732l5.096 5.096Z" />
                        </svg></span>
                    <h2 class="text-start" id=" fnt-fmly">Slikk API</h2>
                    <p class="text-start" id=" fnt-fmly1"> View our documentation for the Slikk API.
                    </p>
                </div>

            </div>
            <div class="col-md-4 tl-width" style="background-color:#302183;  box-shadow: 1px 0px 11px 1px #888888;
                    margin-top: 20px;
                    margin-bottom: 20px;">
                <div class="bg-card p-4">
                    <span style="float: right;     margin-top: -20px;"><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-escape" viewBox="0 0 16 16">
                            <path
                                d="M8.538 1.02a.5.5 0 1 0-.076.998 6 6 0 1 1-6.445 6.444.5.5 0 0 0-.997.076A7 7 0 1 0 8.538 1.02Z" />
                            <path
                                d="M7.096 7.828a.5.5 0 0 0 .707-.707L2.707 2.025h2.768a.5.5 0 1 0 0-1H1.5a.5.5 0 0 0-.5.5V5.5a.5.5 0 0 0 1 0V2.732l5.096 5.096Z" />
                        </svg></span>
                    <h2 class="text-start" id=" fnt-fmly">Slikk Templates</h2>
                    <p class="text-start" id=" fnt-fmly1"> View our documentation for the Slikk API.
                    </p>
                </div>

            </div>
            <div class="col-md-4  tl-width" style="background-color: #302183;   box-shadow: 1px 0px 11px 1px #888888;
                    margin-top: 20px;
                    margin-bottom: 20px;">
                <div class="bg-card p-4">
                    <span style="float: right;     margin-top: -20px;"><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-escape" viewBox="0 0 16 16">
                            <path
                                d="M8.538 1.02a.5.5 0 1 0-.076.998 6 6 0 1 1-6.445 6.444.5.5 0 0 0-.997.076A7 7 0 1 0 8.538 1.02Z" />
                            <path
                                d="M7.096 7.828a.5.5 0 0 0 .707-.707L2.707 2.025h2.768a.5.5 0 1 0 0-1H1.5a.5.5 0 0 0-.5.5V5.5a.5.5 0 0 0 1 0V2.732l5.096 5.096Z" />
                        </svg></span>
                    <h2 class="text-start" id=" fnt-fmly">
                        Slikk Integrations
                    </h2>
                    <p class="text-start" id=" fnt-fmly1">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>

            </div>


        </div>

    </div>
    <!-- end 4 img code  -->


    <!-- top scroll code here  -->

    <button type="button" class="btn btn-white btn-floating btn-lg" id="btn-back-to-top">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
            class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
        </svg>
    </button>

    <!-- javascript code for scrool btn  -->
    <script>
    //Get the button
    let mybutton = document.getElementById("btn-back-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    </script>

    <!-- scroll code end  -->

    <!-- category code statr here -->
    <div class="container" style="color: #000000; margin-top: 20px; ">
        <h2>Category</h2>
        <div class="row" style="gap: 74px;">
            <div class="col-md-5  " style="width: 48% ; background-color:#29188b ;  box-shadow: 1px 0px 11px 1px #888888;
            margin-top: 20px;
            margin-bottom: 20px; ">
                <div class="bg-card p-4" id="card-box">
                    <h2 class="text-start" id=" fnt-fmly">Getting Started With Slikk</h2>
                    <p class="text-start" id=" fnt-fmly1">
                        New to Slikk? Learn the best practices in getting your Workspace set up for success!

                    </p>
                </div>


            </div>
            <div class="col-md-5  " style="width: 48% ; background-color: #29188b ;    box-shadow: 1px 0px 11px 1px #888888;
            margin-top: 20px;
            margin-bottom: 20px; ">
                <div class="bg-card p-4" id="card-box">
                    <h2 class="text-start" id=" fnt-fmly"> Slikk Hierarchy
                    </h2>
                    <p class="text-start" id=" fnt-fmly1">
                        The heart of our platform! The Hierarchy provides an organized way to break work down into
                        easily managed actionable items.


                    </p>
                </div>


            </div>
            <div class="col-md-5 " style="width: 48% ; background-color: #29188b ;      box-shadow: 1px 0px 11px 1px #888888;
            margin-top: 20px;
            margin-bottom: 20px; ">
                <div class="bg-card p-4" id="card-box">
                    <h2 class="text-start" id=" fnt-fmly">Features</h2>
                    <p class="text-start" id=" fnt-fmly1">

                        Details on all the great tools available in Slikk Workspaces.

                    </p>
                </div>


            </div>
            <div class="col-md-5 " style="width: 48% ; background-color: #29188b ;      box-shadow: 1px 0px 11px 1px #888888;
            margin-top: 20px;
            margin-bottom: 20px; ">
                <div class="bg-card p-4" id="card-box">
                    <h2 class="text-start" id=" fnt-fmly">Use Cases</h2>
                    <p class="text-start" id=" fnt-fmly1">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus, laudantium numquam?
                        <!-- Questions about your plan, invoices, and payment options? We have you covered. -->

                    </p>
                </div>


            </div>
            <div class="col-md-5  " style="width: 48% ; background-color:  #29188b ;     box-shadow: 1px 0px 11px 1px #888888;
            margin-top: 20px;
            margin-bottom: 20px; ">
                <div class="bg-card p-4" id="card-box">
                    <h2 class="text-start" id=" fnt-fmly">
                        Mobile
                    </h2>
                    <p class="text-start" id=" fnt-fmly">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        <!-- Customize your Workspace features and experience! -->
                    </p>
                </div>
            </div>
            <div class="col-md-5 " style="width: 48% ; background-color: #29188b ;box-shadow: 1px 0px 11px 1px #888888;
                margin-top: 20px;
                margin-bottom: 20px; ">
                <div class="bg-card p-4" id="card-box">
                    <h2 class="text-start" id=" fnt-fmly">
                        Billing
                    </h2>
                    <p class="text-start" id=" fnt-fmly1">

                        Questions about your plan, invoices, and payment options? We have you covered.

                    </p>
                </div>
            </div>
            <div class="col-md-5 " style="width: 48% ; background-color: #29188b ;box-shadow: 1px 0px 11px 1px #888888;
                margin-top: 20px;
                margin-bottom: 20px; ">
                <div class="bg-card p-4" id="card-box">
                    <h2 class="text-start" id=" fnt-fmly">
                        Security & Privacy
                    </h2>
                    <p class="text-start" id=" fnt-fmly1">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </div>
            <div class="col-md-5  " style="width: 48% ; background-color:  #29188b ;     box-shadow: 1px 0px 11px 1px #888888;
            margin-top: 20px;
            margin-bottom: 20px; ">
                <div class="bg-card p-4" id="card-box">
                    <h2 class="text-start" id=" fnt-fmly">
                        Technical Support
                    </h2>
                    <p class="text-start" id=" fnt-fmly1">

                        Tips on troubleshooting, bug reporting, and feature requests.

                    </p>
                </div>


            </div>

        </div>
    </div>


    <!-- 10 category code end here  -->
    </div>


    <div class="" style="    background-color: #f6fbff;
margin-top: 31px;
padding-top: 20px;">

        <div class="container accordian-container">
            <h2>Most viewed articles</h2>
            <div class="row">

                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header accordian-head" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link " id="show-hide" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                                    id=" fnt-fmly">

                                    Slikk core features

                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body" id=" fnt-fmly1">

                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo nisi excepturi
                                sapiente. Quisquam quae error possimus dolores excepturi autem exercitationem inventore
                                harum laboriosam eveniet, nobis, similique repellendus, molestias modi....
                                <div style="margin-top: 15px;">


                                    <button type="button" id="artical-text" class="btn btn-outline-dark">Read
                                        Article</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header accordian-head" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" id="show-hide" type="button"
                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo" id=" fnt-fmly">

                                    Slikk integrations

                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body" id=" fnt-fmly1">

                                Slikk's Slack integration allows you to do more than just chat with your teammates.
                                Maximize your team's productivi...
                                <div style="margin-top: 15px;">


                                    <button type="button" id="artical-text" class="btn btn-outline-dark">Read
                                        Article</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header accordian-head" id="th5">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" id="show-hide" type="button"
                                    data-toggle="collapse" data-target="#newBtnId2 " aria-expanded="false"
                                    aria-controls="collapseThree" id=" fnt-fmly">


                                    Notification settings

                                </button>
                            </h2>
                        </div>
                        <div id="newBtnId2" class="collapse" aria-labelledby="th5" data-parent="#accordionExample">
                            <div class="card-body" id=" fnt-fmly1">
                                Set granular notification settings to stay on top of whatever matters most to you.
                                Notification settings apply to eac...
                                <div style="margin-top: 15px;">


                                    <button type="button" id="artical-text" class="btn btn-outline-dark">Read
                                        Article</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header accordian-head" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" id="show-hide" type="button"
                                    data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree" id=" fnt-fmly">

                                    Pricing Plans

                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body" id=" fnt-fmly1">

                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti quisquam laudantium
                                ipsam totam! Delectus molestiae accusantium consequatur vitae eum nisi, optio quod
                                dignissimos sed voluptatibus inventore animi. Debitis, asperiores quam?...
                                <div style="margin-top: 15px;">


                                    <button type="button" id="artical-text" class="btn btn-outline-dark">Read
                                        Article</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header accordian-head" id="th4">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" id="show-hide" type="button"
                                    data-toggle="collapse" data-target="#newBtnId1 " aria-expanded="false"
                                    aria-controls="collapseThree" id=" fnt-fmly">

                                    Dashboards overview

                                </button>
                            </h2>
                        </div>
                        <div id="newBtnId1" class="collapse" aria-labelledby="th4" data-parent="#accordionExample">
                            <div class="card-body" id=" fnt-fmly1">

                                Dashboards are the best way to build high-level views of everything going on in your
                                Workspace.
                                Create a visual repre...
                                <div style="margin-top: 15px;">


                                    <button type="button" id="artical-text" class="btn btn-outline-dark">Read
                                        Article</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header accordian-head" id="6">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" id="show-hide" type="button"
                                    data-toggle="collapse" data-target="#newBtnId3 " aria-expanded="false"
                                    aria-controls="collapseThree" id=" fnt-fmly">
                                    Slikk Mobile App
                                </button>
                            </h2>
                        </div>
                        <div id="newBtnId3" class="collapse" aria-labelledby="6" data-parent="#accordionExample">
                            <div class="card-body" id=" fnt-fmly1">


                                Want to create an app that integrates with Slikk? Give your users the ability to sign
                                in using OAuth 2.0!
                                Be sure ...
                                <div style="margin-top: 15px;">


                                    <button type="button" id="artical-text" class="btn btn-outline-dark">Read
                                        Article</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="card">
                        <div class="card-header" id="7">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" id="show-hide" type="button"
                                    data-toggle="collapse" data-target="#newBtnId4 " aria-expanded="false"
                                    aria-controls="collapseThree" id=" fnt-fmly">

                                    Google Calendar Syncing

                                </button>
                            </h2>
                        </div>
                        <div id="newBtnId4" class="collapse" aria-labelledby="7" data-parent="#accordionExample">
                            <div class="card-body" id=" fnt-fmly1">



                                Display your Google calendar events alongside Slikk tasks when using the Slikk
                                Calendar view. You can also sync t...

                                <div style="margin-top: 15px;">


                                    <button type="button" id="artical-text" class="btn btn-outline-dark">Read
                                        Article</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="8">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" id="show-hide" type="button"
                                    data-toggle="collapse" data-target="#newBtnId5" aria-expanded="false"
                                    aria-controls="collapseThree" id=" fnt-fmly">

                                    Slack integration overview

                                </button>
                            </h2>
                        </div>
                        <div id="newBtnId5" class="collapse" aria-labelledby="8" data-parent="#accordionExample">
                            <div class="card-body" id=" fnt-fmly1">

                                Slikk's Slack integration allows you to do more than just chat with your teammates.
                                Maximize your team's productivi...
                                <div style="margin-top: 15px;">


                                    <button type="button" id="artical-text" class="btn btn-outline-dark">Read
                                        Article</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="9">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" id="show-hide" type="button"
                                    data-toggle="collapse" data-target="#newBtnId6 " aria-expanded="false"
                                    aria-controls="collapseThree" id=" fnt-fmly">

                                    Time Tracking overview

                                </button>
                            </h2>
                        </div>
                        <div id="newBtnId6" class="collapse" aria-labelledby="9" data-parent="#accordionExample">
                            <div class="card-body" id=" fnt-fmly1">

                                Whether you're tracking client meetings or simply working on tasks, Slikk provides you
                                with numerous solutions acro...

                                <div style="margin-top: 15px;">


                                    <button type="button" id="artical-text" class="btn btn-outline-dark">Read
                                        Article</button>
                                </div>
                            </div>
                        </div>


                    </div> -->
                </div>

            </div>
            <!-- <div class="container bg-white border py-4">
                <div class="row ">
                    <div class="col-md-6">
                        <div class="slikk-video text-center">
                            <iframe width="320" height="250" src="https://www.youtube.com/embed/mi4_8fZo6Dk">
                            </iframe>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="slikk-video text-center">
                            <iframe width="320" height="250" src="https://www.youtube.com/embed/ZFNAqqEiyqA">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>



        <!-- end code start here  -->


    </div>
    <!--faq code start here -->
    <div style="background: #f6fbff; padding: 20px 10px;">
        <!-- <div class="container">
            <div class="row">
                <div class="menu">
                    <h1 style="font-size: 32px;     padding-bottom: 10px;">FAQs</h1>
                    <div class="question" style=" border-style: solid;
  border-width: thin;">
                        <input type="checkbox" id="type1" class="accordion">
                        <label for="type1" class="faq23">
                            What is an accordion?
                            <div id="icon">
                                <span aria-hidden="true"></span>
                            </div>
                        </label>
                        <ul id="links1" class="faq24">
                            <li>
                                Аccordion is a user interface component that allows the user to hide or reveal content.
                            </li>
                        </ul>
                    </div>
                    <div class="question" style="  border-style: solid;
  border-width: thin;   margin-top: 30px;">
                        <input type="checkbox" id="type2" class="accordion">
                        <label for="type2" class="faq23">
                            When should we use accordion?
                            <div id="icon">
                                <span aria-hidden="true"></span>
                            </div>
                        </label>
                        <ul id="links2" class="faq24">
                            <li>
                                Accordions can be used to navigate through websites and pages. They can group links to
                                help the user navigate through interfaces. This is especially helpful in mobile design
                                as it allows you to collapse information into different sections or pages.
                            </li>
                        </ul>
                    </div>
                    <div class="question" style="   border-style: solid;
  border-width: thin;  margin-top: 30px;">
                        <input type="checkbox" id="type3" class="accordion">
                        <label for="type3" class="faq23">
                            Why accordions are not always a good solution?
                            <div id="icon">
                                <span aria-hidden="true"></span>
                            </div>
                        </label>
                        <ul id="links3" class="faq24">
                            <li>
                                While they can make a web page easier to read, accordions should be used in moderation
                                elements to describe situations or deliver information clearly. If users need to see
                                most or all of the information on a page, it is better to use well-formatted text
                                instead.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
        <!--end faq code -->
        <div class="container cta" style="max-width:1360px; width:100%;">
            <div class="row" style="margin-top: 59px;">
                <div class="text-center" style="       margin: 0 auto;
    padding-top: 46px;
    margin-bottom: 50px;
">
                    <h2>Can't find what you're looking for?</h2>
                    <button type="button" id="last-btn" class="btn btn-primary">Contact Us</button>
                </div>
            </div>
        </div>
    </div>

    <style>
    /* fixing css */
    .accordian-head {
        background: #fff !important;
    }

    #show-hide:hover {
        color: #5433FF;
    }


    .text-center h2 {
        font-size: 30px;
    }

    /* fixing css */
    /*faq code start*/
    :root {
        --black: #4d5974;
        --red: #E07A5F;
        --grey: #e5e5e5;
    }

    h1,
    h2,
    h3 {
        font-family: 'Poppins', sans-serif !important;
    }

    .suggetions li {
        list-style: none;
        margin: 0 6px;
    }

    .menu {
        /*margin: 0 auto;*/
        max-width: 100%;
        /*margin: 0 auto;*/
        padding: 2rem;
        background: #fff;
        box-shadow: 0px 4px 16px rgb(0 0 0 / 9%);
        border-radius: 8px;
    }

    label {
        display: block;
        margin: 0 0 4px 0;
        padding: 15px 15px 15px 0;
        line-height: 1;
        cursor: pointer;
        /*border-bottom: 1px solid var(--grey);*/
    }

    .question {
        position: relative;
    }

    .faq23 {
        font-size: 1em;
        line-height: 1;
        font-size: 18px;
        font-weight: 50;
        font-family: 'Poppins', sans-serif !important;
        padding-left: 10px;
    }

    .faq24 {
        opacity: 0.8;
        text-align: left;
        font: normal normal normal 18px/27px Roboto;
        color: var(--dark);
    }

    input {
        display: none;
    }

    .menu ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .menu li {
        height: 0;
        overflow: hidden;
        transition: all 0.5s;
        font-size: 16px;
    }

    #icon span {
        position: absolute;
        top: 11px;
        right: 11px;
        display: inline-block;
        width: 22px;
        height: 22px;
        border: 1px solid var(--black);
        border-radius: 22px;
    }

    #icon span::before {
        display: block;
        position: absolute;
        content: '';
        top: 10px;
        left: 6px;
        width: 10px;
        height: 2px;
        background: var(--black);
    }

    #icon span::after {
        display: block;
        position: absolute;
        content: '';
        top: 6px;
        left: 10px;
        width: 2px;
        height: 10px;
        background: var(--black);
    }

    /*Open tab*/

    #type1:checked~#links1 li,
    #type2:checked~#links2 li,
    #type3:checked~#links3 li {
        height: 65px;
        opacity: 1;
        padding-top: 15px;
    }

    /*Style open tab*/

    #type1:checked~label #icon span::after,
    #type2:checked~label #icon span::after,
    #type3:checked~label #icon span::after {
        width: 0;
    }

    #type1:checked~label,
    #type2:checked~label,
    #type3:checked~label {
        color: #00000;
        border-bottom: 1px solid #1e5ada;
    }

    #type1:checked~label #icon span::before,
    #type2:checked~label #icon span::before,
    #type3:checked~label #icon span::before {
        background: var(--red);
    }

    #type1:checked~label #icon span,
    #type2:checked~label #icon span,
    #type3:checked~label #icon span {
        border: 1px solid var(--red);
    }

    /*faq code end*/

    /* @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap"); */

    #bg-img {
        /* position: relative; */
        text-align: center;
        color: white;
    }

    .input-group-append {
        position: absolute;
        right: 10px;
        top: 7px;
    }

    .top-left {
        position: absolute;
        top: 143px;
        left: 16px;
    }

    @media (max-width: 720px) {
        .top-left {
            font-size: 32px;
            left: 5px;
            padding-left: 50px;
        }
    }

    @media (min-width: 1200px) {
        .top-left {
            font-size: 50px;
            left: 134px;
        }
    }

    .top-left1 {
        position: absolute;
        top: 1%;
        margin-top: 214px;
    }

    @media (max-width: 720px) {
        .top-left1 {
            font-size: 10px;
            left: 5px;
        }
    }

    @media (min-width: 1200px) {
        .top-left1 {
            font-size: 70px;
            left: 119px;
        }
    }


    .top-left2 {
        position: absolute;
        top: 65%;
        left: 16px;
    }

    @media (max-width: 720px) {
        .top-left2 {
            font-size: 10px;
            left: 5px;
        }
    }

    @media (min-width: 1200px) {
        .top-left2 {
            font-size: 12px;
            left: 119px;
        }
    }

    .suggetions li a {
        font-size: 14px;
    }

    .text-col {
        /* background:#9e9e9e; */
        /* width: 100%; */
        /* color: white; */
        padding-top: 6px;

        /* opacity: 0.6; */
        /* border-radius: 10px;
        width: 89px; */
    }

    .t-col {
        color: white;
        font-size: 12px;
        width: 47px;
        text-decoration: none;
        font-family: "Open Sans", sans-serif;
        /* font-size: 15px; */
        font-size: 3vh;
    }

    .t-col:hover {
        background-color: blueviolet;
        width: 100%;
        height: auto;
        color: white;
        /* font-size: medium; */
    }

    /* img with h1 text code end here  */

    /* new search box code here  */


    .bg-card {
        background-color: white;
        margin-left: -2px;
        margin-right: -12px;
        height: 100%;
        transition: 0.3s;
    }

    .bg-card:hover {
        transform: translate(0, -10px);
    }


    /* scoll bttn  */

    #btn-back-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: none;
    }


    /* show hide code  */


    #show-hide {
        color: black;
        font-size: 20px;
        text-decoration: none;
    }


    #artical-text {
        border-radius: 10px;
    }

    .artical-text:hover {
        color: rgb(15, 15, 109);
        border-color: rgb(18, 18, 92);

    }

    #last-btn {
        background-color: rgba(123, 104, 238, 1);
        border-color: rgb(73, 47, 218);
        font-size: 23px;
        margin-top: 15px;
    }


    #last-btn:hover {
        background-color: rgb(41, 13, 202);
        border-color: rgb(30, 4, 177)
    }

    h1,
    h2,
    h3 {
        font: normal normal normal 22px/26px Roboto;
    }

    #fnt-fmly {
        font: normal normal normal 22px/26px Roboto;
    }

    #fnt-fmly1 {
        font-family: "Open Sans", sans-serif;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529
    }

    p {
        font-family: "Open Sans", sans-serif;
        /* font-size: 15px; */
    }
    .listt{
        position:absolute;
            display: inline-flex;
            text-align: left;
            margin-left: -12px;
            top: 7%;
            margin-top: 275px;
    }
    @media (min-width:1020px){
    .bannerimg{
        width:100%;
    }
    .listt{
        gap: 20px !important;
    }
    .tl-width{
        width:22% !important;
    }
    .accordian-container {
        max-width: 1080px;
        margin: auto !important;
    }
    .card {
    width: 1000px !important;
    }
    }
    @media (max-width:999px){
    .bannerimg{
        display:none;
    }
    .bannermobimage{
        background: transparent url(https://slikk.ai/img/Group914.png) 0% 0% no-repeat padding-box;
    opacity: 1;
    background-size: cover;
    background-position: bottom;
    min-height: 600px;
    }
    .listt{
        gap: 3px;
    }
    .tl-width{
        width:72% !important;
    }
    }
    </style>

    </html>

    @endsection