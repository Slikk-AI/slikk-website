@extends('frontnew.layouts.layout')
@section('frontnew_content')
<style>
    @media screen and (min-width: 1280px){
                .legal-rich-text ol {
                    font-size: 1.125em;
                    font-weight: 500;
                }
                .legal-rich-text ul {
                    font-size: 1.125em;
                    font-weight: 500;
                }
            }
            .legal-rich-text ol {
                margin-bottom: 1.5rem;
                color: #565359;
            }
            .legal-rich-text ul {
                margin-bottom: 1.5rem;
                color: #565359;
            }
            .bg-background{
                    font-size: 58px;
    /* line-height: 87px; */
    text-align: center;
    background: linear-gradient(89.92deg, #2900FF 7.52%, rgba(255, 1, 1, 0.85) 33.29%, #000000 79.29%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: bold;
                }
            .legal-rich-text p{
                    margin-top: 0!important;
    margin-bottom: 0!important;
    color: #666!important;
    font-size: 1em!important;
    line-height: 1.5!important;
    font-weight: 400!important;
                }
                .legal-rich-text ul{
                    color: #666!important;
    font-size: 1em!important;
    line-height: 1.5!important;
    font-weight: 400!important;
                }
</style>
<style>
    .legal-rich-text h1 {
        margin-top: 0.5rem;
        margin-bottom: 2rem;
        color: #26262b;
        font-size: 2em;
        font-weight: 500;
    }
</style>
<div class="section-filler-block-for-banner-3-5rem"></div>
    <section class="section-legal">
        <div class="page-padding">
            <div class="container-large">
                <div class="padding-vertical padding-xhuge">
                    <h1 class="text-weight-medium text-color-purple"><span class="bg-background">Secur<span>ity</h1>
                    <div class="margin-top margin-xlarge">
                        <div class="legal-rich-text w-richtext">
                            <h1>Security Policy</h1>
                            <p>Keeping our clients' data secure is an absolute top priority at slikk. Our goal is to provide a secure environment, while also being mindful of application performance and the overall user experience. To email us with a vulnerability or other security concern, send an email to security@slikk.ai.</p>
                            <h1>SOC 2 Compliance</h1>
                            <p>Security and trust are integral at slikk. We have achieved audit certification for Service Organization Controls (SOC 2) Trust Services Principles, focused on security. Our continued SOC 2 certification ensures our organizational and technology controls are independently audited at least annually. Please contact sales@slikk.ai for slikk's latest report.</p>
                            <h1>Data Center Security</h1>
                            <p>slikk customer data is hosted by Amazon Web Services (AWS), which is certified SOC 2 Type 2. AWS maintains an impressive list of reports, certifications, and third party assessments to ensure complete and ongoing state-of-the-art data center security.
                                AWS infrastructure is housed in Amazon-controlled data centers throughout the world, and the data centers themselves are secured with a variety of physical controls to prevent unauthorized 
                                access. More information on AWS data centers and their security controls can be found here.</p>
                                
                            <h1>Application Security</h1>
                            <p>All slikk web application communications are encrypted over 256 bit SSL, which cannot be viewed by a third party and is the same level of encryption used by banks and financial institutions. All data for slikk is encrypted at rest using AES-256 encryption.
                                slikk maintains ongoing PCI compliance, abiding by stringent industry standards for storing, processing and transmitting credit card information online.
                                slikk actively monitors ongoing security, performance and availability 24/7/365. We run automated security testing on an ongoing basis. We also contract a third party for penetration testing.</p>
                            <p>Regarding privacy, we are members of the Privacy Shield framework and you can view our full privacy policy here: https://hub.slikk.ai/privacy</p>
                            <h1>Infrastructure Security</h1>
                            <p>slikk's infrastructure is hosted in a fully redundant, secured environment, with access restricted to operations support staff only. This allows us to leverage complete data and access segregation, firewall protection, and other security features.</p>
                            <h1>Security Policy</h1>
                            <p>slikk employs strict security standards and measures throughout the entire organization. Every team member is trained and kept up to date on the latest security protocols. We regularly undergo testing, training, and auditing of our practices and policies.</p>
                            <p>1. Purpose, Scope, and Organization</p>
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
                                <p>1.1. Governance and Evolution</p>
                                <p>This Policy was created in close collaboration with and approved by slikk executives. At least annually, it
                                is reviewed and modified as needed to ensure clarity, sufficiency of scope, concern for customer and personnel
                                interests, and general responsiveness to the evolving security landscape and industry best practices.</p>
                                <p>1.2. Security Team</p>
                                <p>The slikk security team oversees the implementation of this Policy, including</p>
                                <ul>
                                <li>procurement, provisioning, maintenance, retirement, and reclamation of corporate computing resources,</li>
                                <li>all aspects of service development and operation related to security, privacy, access, reliability, and
                                    survivability,</li>
                                <li>ongoing risk assessment, vulnerability management, incident response, and</li>
                                <li>security-related human resources controls and personnel training.</li>
                                </ul>
                                <p>1.3. Risk Management Framework</p>
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
    </section>
@endsection