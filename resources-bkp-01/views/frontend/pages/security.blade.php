@extends('frontend.layouts.master')
@section('content')
    <style>
        .col-sm-2.cat-menu span {
            background: var(--unnamed-color-6b52f9) 0% 0% no-repeat padding-box;
            background: #6B52F9 0% 0% no-repeat padding-box;
            box-shadow: 0px 3px 6px #00000029;
            border-radius: 48px;
            padding: 10px 50px;
            color: #fff;
        }

        .base-font-family {
            font-family: 'Roboto', sans-serif !important;

        }

        .card-box {
            margin-top: 60px;
        }


        .post-block {
            width: 99%;
            margin-left: auto;
            margin-right: auto;
            background: #FFFFFF 0% 0% no-repeat padding-box;
            box-shadow: 0px 3px 6px #00000029;
            border: 1px solid #FAE1FF;
            border-radius: 50px;


        }

        .post-cont {
            padding: 30px;
        }



        .post-img img {
            border-radius: 10px 10px 10px 10px;
            height: 200px;
        }

        ul.post-p {
            border-top: 1px solid #e2e2e2 !important;
        }

        ul.post-p li {
            text-decoration: none;
            list-style: none;
            width: 50%;
            float: left;
            padding: 10px;
            /* color:#e2e2e2 !important; */
        }

        h3.post-title a {
            letter-spacing: 0px;
            color: #1D2121 !important;
            text-shadow: 0px 3px 6px #00000029;
            text-align: left;
            text-decoration: none;
            font-size: 22px;
        }

        .sub_all {

            letter-spacing: var(--unnamed-character-spacing-0);
            color: var(--unnamed-color-1d2121);
            text-align: left;
            font-size: 14px;
            letter-spacing: 0px;
            color: #1D2121;
        }

       .cat-menu {
            margin-bottom: 30px;
        }

        .cat-menu span {
            background: var(--unnamed-color-6b52f9) 0% 0% no-repeat padding-box;
            background: #6B52F9 0% 0% no-repeat padding-box;
            box-shadow: 0px 3px 6px #00000029;
            border-radius: 48px;
            padding: 10px 50px;
            color: #fff;
        }

        ul.side_box li {
    display: block;
    position: relative;
    border: 0px;
    font: 400 15px/30px Axiforma,Arial,serif;
    padding: 5px 10px 3px;
    border-bottom: 1px solid #7b68ee;
    border-style: dashed;
    color: rgba(29,29,29,.6);
    font: 15px/1.4em Axiforma,Arial,serif;
    padding: 10px;
}

ul.side_box li:hover {
    background: #6B52F9 0% 0% no-repeat padding-box;
    color:#fff;
}

ul.side_box {
    padding: 20px 30px;
    box-shadow: rgb(0 0 0 / 8%) 0 1px 14px 0;
    background: #fff;
}

ul.side_box li .active{
    background: #292062 0% 0% no-repeat padding-box;
    background: #fff;
}

ul.side_box li:first-child {
    border: 0px !important;
    color: #000;
    font-size: 16px;
}

ul.side_box li:first-child:hover {
   
    color: #000;
   background: #fff !important;
}

ul.side_box li a:hover {

color: #fff !important;

}

ul.side_box li:hover a {

color: #fff !important;

}


    </style>

    <div class="jumbotron text-center top-banner" style="background: transparent url(https://slikk.ai/img/Component%2051%20–%204.png) 0% 0% no-repeat padding-box;
            opacity: 1;
            background-size: cover;
            background-position: bottom;    min-height: 400px;">

        <div class="container">
            <div class="row" style="padding-top: 40px;">
                <div class="col-sm-5">
                    
                    <h1 class="hero_title">Security</h1>
                  
                    <!-- <p class="hero_desc">We're here to help businesses and employees reach their full performance potential. We equip teams like yours with everything you need to focus on actual work, so there is no need to chase emails, juggle multiple tools, and work on spreadsheets.</p> -->

                </div>

                <div class="col-sm-7">
                    <!-- <img src="https://reportindata.com/test/img/Group 931.png" class="img-responsive" style="width: 400px;" /> -->
                </div>

            </div>

        </div>

    </div>


 

    <!-- <h2 class="section_title" style="margin-top:60px;margin-bottom:70px">Add visibility to your work</h2>-->

    <div class="container">

        <div class="row">
           
                <div class="col-sm-3">

                   
<ul class="side_box">
<li> <h3>Policies </h3></li>
    <li class="active"><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
    <li><a href="{{ url('terms') }}">Terms of Uses</a></li>
    <li><a href="{{ url('security') }}">Security</a></li>

</ul>
                </div>

                <div class="col-sm-9">

                    <div class="content_col">
                        
                        <div class="toc-section active" id="purpose-scope-organization">

                            <h2>Security Policy</h2>
<p>Keeping our clients' data secure is an absolute top priority at slikk. Our goal is to provide a secure environment, while also being mindful of application performance and the overall user experience. To email us with a vulnerability or other security concern, send an email to security@slikk.ai.</p>

<h2>SOC 2 Compliance</h2>
<p>Security and trust are integral at slikk. We have achieved audit certification for Service Organization Controls (SOC 2) Trust Services Principles, focused on security. Our continued SOC 2 certification ensures our organizational and technology controls are independently audited at least annually. Please contact sales@slikk.ai for slikk's latest report.</p>

<h2>Data Center Security</h2>
<p>slikk customer data is hosted by Amazon Web Services (AWS), which is certified SOC 2 Type 2. AWS maintains an impressive list of reports, certifications, and third party assessments to ensure complete and ongoing state-of-the-art data center security.
AWS infrastructure is housed in Amazon-controlled data centers throughout the world, and the data centers themselves are secured with a variety of physical controls to prevent unauthorized 
access. More information on AWS data centers and their security controls can be found here.</p>

<h2>Application Security</h2>
<p>All slikk web application communications are encrypted over 256 bit SSL, which cannot be viewed by a third party and is the same level of encryption used by banks and financial institutions. All data for slikk is encrypted at rest using AES-256 encryption.
slikk maintains ongoing PCI compliance, abiding by stringent industry standards for storing, processing and transmitting credit card information online.
slikk actively monitors ongoing security, performance and availability 24/7/365. We run automated security testing on an ongoing basis. We also contract a third party for penetration testing.</p>
<p>Regarding privacy, we are members of the Privacy Shield framework and you can view our full privacy policy here: https://slikk.ai/privacy</p>

<h2>Infrastructure Security</h2>
<p>slikk's infrastructure is hosted in a fully redundant, secured environment, with access restricted to operations support staff only. This allows us to leverage complete data and access segregation, firewall protection, and other security features.</p>

<h2>Security Policy</h2>
<p>slikk employs strict security standards and measures throughout the entire organization. Every team member is trained and kept up to date on the latest security protocols. We regularly undergo testing, training, and auditing of our practices and policies.</p>



                            <div class="section-v2__header section-v2__header_v2" id="section-1">1. Purpose, Scope, and Organization</div>
                            <p><em>What is this document, why does it exist, what does it cover, and who is in charge of it?</em></p>
                            <p>This policy defines behavioral, process, technical, and governance controls pertaining to security at slikk
                              that all personnel are required to implement in order to ensure the confidentiality, integrity, and
                              availability
                              of the slikk service and data (“Policy”). All personnel must review and be familiar with the rules and
                              actions
                              set forth below.</p>
                            <p>This Policy defines security requirements for:</p>
                            <ul>
                              <li>all slikk employees, contractors, consultants and any other third parties providing services to slikk
                                (“personnel”),</li>
                              <li>management of systems, both hardware and software and regardless of locale, used to create, maintain,
                                store,
                                access, process or transmit information on behalf of slikk, including all systems owned by slikk,
                                connected to any network controlled by slikk, or used in service of slikk’s business, including systems
                                owned third party service providers, and</li>
                              <li>circumstances in which slikk has a legal, contractual, or fiduciary duty to protect data or resources in
                                its custody.</li>
                            </ul>
                            <p>In the event of a conflict, the more restrictive measures apply.</p>
                            <div class="section-v2__header section-v2__header_v2" id="section-1.1">1.1. Governance and Evolution</div>
                            <p>This Policy was created in close collaboration with and approved by slikk executives. At least annually, it
                              is reviewed and modified as needed to ensure clarity, sufficiency of scope, concern for customer and personnel
                              interests, and general responsiveness to the evolving security landscape and industry best practices.</p>
                            <div class="section-v2__header section-v2__header_v2" id="section-1.2">1.2. Security Team</div>
                            <p>The slikk security team oversees the implementation of this Policy, including</p>
                            <ul>
                              <li>procurement, provisioning, maintenance, retirement, and reclamation of corporate computing resources,</li>
                              <li>all aspects of service development and operation related to security, privacy, access, reliability, and
                                survivability,</li>
                              <li>ongoing risk assessment, vulnerability management, incident response, and</li>
                              <li>security-related human resources controls and personnel training.</li>
                            </ul>
                            <div class="section-v2__header section-v2__header_v2" id="section-1.3">1.3. Risk Management Framework</div>
                            <p>The security team maintains a Risk Management Framework derived from NIST SP 800-39 - “Managing Information
                              Security Risk: Organization, Mission, and System View” and NIST SP 800-30 - “Guide for Conducting Risk
                              Assessments”. Risk assessment exercises inform prioritization for ongoing improvements to slikk’s security
                              posture, which may include changes to this Policy itself.</p>
                            <p>Our Risk Management Framework incorporates the following:</p>
                            <ul>
                              <li>Identification of relevant, potential threats.</li>
                              <li>A scheme for assessing the strength of implemented controls.</li>
                              <li>A scheme for assessing current risks and evaluating their severity.</li>
                              <li>A scheme for responding to risks.</li>
                            </ul>
                          </div>
                                   </div>

                </div>
   


        </div>






      
    </div>
@endsection
