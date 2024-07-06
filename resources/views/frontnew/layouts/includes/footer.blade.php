<style>
    .use-case-footer{
        display: contents;
    }
    .links-margin-bottom{
        margin-bottom: 5rem;
    }
    .footer-button{
        /* line-height: 1.3;
        font-weight: 500;
        text-align: center;
        font-family: Satoshi,sans-serif; */
        font-size: 1.125em;
        /* transition: .2s;
        color: #fff;
        background-color: transparent;
        border: 1px solid hsla(0, 0%, 100%, .7);
        border-radius: 1rem;
        margin-top: 2rem;
        padding: 0.8rem 1.5rem; */
    }
    .footer-button:hover{
        /* background-color: #71147e;
        border: 1px solid #71147e; */
        color: #fff;
    }
    @media(min-width:1020px){
        .use-case-marginn{
            /* margin-top: 3rem; */
            margin-top: 7.3rem;
        }
    }
    @media(max-width:999px){
        .feature-footer-div{
            margin-top: 12rem;
        }
        .team-footer-div{
            margin-top: 33rem;
        }
        .pages-footer-div{
            margin-top: 50rem;
        }
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<footer class="footer_component wf-section">
            <div class="page-padding">
                <div class="container-large">
                    <div class="footer_wrapper">
                        <div class="footer_column-wrapper">
                            <a href="{{ url('/')}}" aria-current="page" class="footer_brand-link w-inline-block w--current">
                                <img src="{{ url('assets/frontend/image/Slikk-Logo-Blue.svg')}}"
                                    loading="lazy" alt="Slikk Logo" class="footer-logo footer_brand-logo" />
                            </a>
                            <div class="margin-top margin-custom1">
                                <div class="text-color-off-white">
                                Slikk.ai is the easier and efficient Productivity tool for CXOs, Managers and Teams  </div>
                            </div>
                            <div class="margin-top margin-custom3">
                                <div class="text-weight-bold"><span
                                        class="text-weight-medium text-color-off-white">©</span> 2023</div>
                            </div>
                        </div>
                        <div class="footer_column-wrapper margin-left-footer">
                            <div class="footer_column-heading">Company</div>
                            <a href="https://hub.slikk.ai/about-us" class="footer_link">About Us</a><a href="https://hub.slikk.ai/pricing"
                                class="footer_link">Pricing</a>
                            <a href="{{ url('security') }}"
                                target="_blank" class="footer_link">Security</a>
                            <a href="{{ url('privacy-policy') }}" class="footer_link">Privacy Policy</a><a href="{{ url('terms') }}"
                                class="footer_link">Terms of service</a>
                            <a href="{{ url('cookie-policy') }}" class="footer_link">Cookie Policy</a>
                        </div>
                        <div id="w-node-fd549ca5-db11-5bed-6ad0-f413f31f9579-f31f9555"
                            class="footer_column-wrapper is-last-column">
                            <div class="margin-top margin-xxlarge use-case-footer">
                                <div class="footer_column-heading">Industry</div>
                                <a href="https://hub.slikk.ai/industry/startups" class="footer_link">Startups</a>
                                <a href="https://hub.slikk.ai/industry/agencies" class="footer_link">Agencies</a>
                                <a href="https://hub.slikk.ai/industry/ecommerce" class="footer_link">E-commerce</a>
                                <a href="https://hub.slikk.ai/industry/non-profits" class="footer_link">Non-Profits</a>
                                <a href="https://hub.slikk.ai/industry/software-development" class="footer_link">Software development</a>
                                <a href="https://hub.slikk.ai/industry/education" class="footer_link">Education</a>
                            </div>
                            <div class="footer_column-heading use-case-marginn">Connect with us</div>
                            <div class="margin-top margin-custom3 links-margin-bottom">
                                <div class="social-links-wrapper">
                                    <a href="https://twitter.com/Slikk_ai" target="_blank"
                                        class="footer_social-link-wrapper w-inline-block">
                                        <div class="social-link-icon w-embed">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.6425 4.93708C22.8075 5.30708 21.9105 5.55708 20.9675 5.67008C21.9405 5.08787 22.6685 4.17154 23.0155 3.09208C22.1014 3.63507 21.1009 4.01727 20.0575 4.22208C19.3559 3.47294 18.4266 2.9764 17.4138 2.80955C16.4011 2.6427 15.3616 2.81487 14.4568 3.29933C13.5519 3.78379 12.8323 4.55344 12.4097 5.48878C11.9871 6.42412 11.8851 7.47283 12.1195 8.47208C10.2672 8.37907 8.45515 7.89763 6.80095 7.05898C5.14674 6.22034 3.68736 5.04324 2.51752 3.60408C2.11752 4.29408 1.88752 5.09408 1.88752 5.94608C1.88708 6.71307 2.07596 7.46832 2.4374 8.14481C2.79885 8.8213 3.32168 9.39812 3.95952 9.82408C3.2198 9.80054 2.4964 9.60066 1.84952 9.24108V9.30108C1.84945 10.3768 2.22156 11.4195 2.90271 12.2521C3.58386 13.0847 4.53209 13.656 5.58652 13.8691C4.90031 14.0548 4.18086 14.0821 3.48252 13.9491C3.78002 14.8747 4.35952 15.6841 5.13989 16.264C5.92026 16.8439 6.86244 17.1653 7.83452 17.1831C6.18436 18.4785 4.14641 19.1812 2.04852 19.1781C1.6769 19.1782 1.3056 19.1565 0.936523 19.1131C3.066 20.4823 5.54486 21.2089 8.07652 21.2061C16.6465 21.2061 21.3315 14.1081 21.3315 7.95208C21.3315 7.75208 21.3265 7.55008 21.3175 7.35008C22.2288 6.69105 23.0154 5.87497 23.6405 4.94008L23.6425 4.93708V4.93708Z"
                                                    fill="CurrentColor"></path>
                                            </svg>
                                        </div>
                                        <div class="descriptive-text">Twitter Link</div>
                                    </a>
                                    <a href="https://www.linkedin.com/company/slikk-ai" target="_blank"
                                        class="footer_social-link-wrapper w-inline-block">
                                        <div class="social-link-icon w-embed">
                                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M20.7762 2.00014H3.83621C3.64579 1.9975 3.45671 2.03239 3.27978 2.10282C3.10284 2.17326 2.94151 2.27786 2.80501 2.41065C2.6685 2.54344 2.55949 2.70182 2.4842 2.87675C2.40891 3.05167 2.36882 3.23972 2.36621 3.43014V20.5701C2.36882 20.7606 2.40891 20.9486 2.4842 21.1235C2.55949 21.2985 2.6685 21.4568 2.80501 21.5896C2.94151 21.7224 3.10284 21.827 3.27978 21.8975C3.45671 21.9679 3.64579 22.0028 3.83621 22.0001H20.7762C20.9666 22.0028 21.1557 21.9679 21.3326 21.8975C21.5096 21.827 21.6709 21.7224 21.8074 21.5896C21.9439 21.4568 22.0529 21.2985 22.1282 21.1235C22.2035 20.9486 22.2436 20.7606 22.2462 20.5701V3.43014C22.2436 3.23972 22.2035 3.05167 22.1282 2.87675C22.0529 2.70182 21.9439 2.54344 21.8074 2.41065C21.6709 2.27786 21.5096 2.17326 21.3326 2.10282C21.1557 2.03239 20.9666 1.9975 20.7762 2.00014V2.00014ZM8.39621 18.7401H5.39621V9.74014H8.39621V18.7401ZM6.89621 8.48014C6.48247 8.48014 6.08568 8.31578 5.79312 8.02323C5.50057 7.73067 5.33621 7.33388 5.33621 6.92014C5.33621 6.5064 5.50057 6.10961 5.79312 5.81705C6.08568 5.5245 6.48247 5.36014 6.89621 5.36014C7.11591 5.33522 7.33839 5.35699 7.54909 5.42402C7.75978 5.49105 7.95395 5.60183 8.11887 5.7491C8.28379 5.89637 8.41574 6.07682 8.50608 6.27862C8.59643 6.48043 8.64313 6.69904 8.64313 6.92014C8.64313 7.14124 8.59643 7.35985 8.50608 7.56166C8.41574 7.76346 8.28379 7.94391 8.11887 8.09118C7.95395 8.23845 7.75978 8.34923 7.54909 8.41626C7.33839 8.48329 7.11591 8.50505 6.89621 8.48014V8.48014ZM19.2162 18.7401H16.2162V13.9101C16.2162 12.7001 15.7862 11.9101 14.6962 11.9101C14.3589 11.9126 14.0304 12.0184 13.755 12.2133C13.4797 12.4082 13.2707 12.6828 13.1562 13.0001C13.078 13.2352 13.044 13.4827 13.0562 13.7301V18.7301H10.0562C10.0562 18.7301 10.0562 10.5501 10.0562 9.73014H13.0562V11.0001C13.3287 10.5272 13.7251 10.1377 14.2027 9.87334C14.6802 9.60902 15.2208 9.47999 15.7662 9.50014C17.7662 9.50014 19.2162 10.7901 19.2162 13.5601V18.7401Z"
                                                    fill="CurrentColor"></path>
                                            </svg>
                                        </div>
                                        <div class="descriptive-text">Linkedin Link</div>
                                    </a>
                                    <a href="https://www.youtube.com/@Slikkai" target="_blank"
                                        class="footer_social-link-wrapper w-inline-block">
                                        <div class="social-link-icon w-embed">
                                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.3067 9.7095C23.3561 8.27815 23.0431 6.85751 22.3967 5.5795C21.9581 5.05509 21.3494 4.70121 20.6767 4.5795C17.8942 4.32702 15.1002 4.22354 12.3067 4.2695C9.52331 4.22145 6.73938 4.3216 3.96667 4.5695C3.41849 4.66921 2.91119 4.92634 2.50667 5.3095C1.60667 6.1395 1.50667 7.5595 1.40667 8.7595C1.26158 10.9171 1.26158 13.0819 1.40667 15.2395C1.4356 15.9149 1.53616 16.5853 1.70667 17.2395C1.82724 17.7446 2.07119 18.2118 2.41667 18.5995C2.82394 19.003 3.34305 19.2747 3.90667 19.3795C6.06258 19.6456 8.23489 19.7559 10.4067 19.7095C13.9067 19.7595 16.9767 19.7095 20.6067 19.4295C21.1841 19.3311 21.7179 19.059 22.1367 18.6495C22.4166 18.3694 22.6257 18.0266 22.7467 17.6495C23.1043 16.5521 23.2799 15.4036 23.2667 14.2495C23.3067 13.6895 23.3067 10.3095 23.3067 9.7095ZM10.0467 14.8495V8.6595L15.9667 11.7695C14.3067 12.6895 12.1167 13.7295 10.0467 14.8495Z"
                                                    fill="CurrentColor"></path>
                                            </svg>
                                        </div>
                                        <div class="descriptive-text">Youtube Link</div>
                                    </a>
                                    <a href="https://www.facebook.com/slikkprojectmanagement" target="_blank"
                                        class="footer_social-link-wrapper w-inline-block">
                                        <div class="social-link-icon w-embed">
                                            <i class="fa fa-facebook-f"></i>
                                        </div>
                                        <div class="descriptive-text">Facebook Link</div>
                                    </a>
                                    <a href="https://www.instagram.com/slikk.ai/" target="_blank"
                                        class="footer_social-link-wrapper w-inline-block">
                                        <div class="social-link-icon w-embed">
                                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.3066 9.52C11.8161 9.52 11.3367 9.66545 10.9288 9.93795C10.521 10.2105 10.2031 10.5978 10.0154 11.0509C9.82771 11.5041 9.7786 12.0028 9.87429 12.4838C9.96998 12.9649 10.2062 13.4068 10.553 13.7536C10.8998 14.1005 11.3417 14.3367 11.8228 14.4323C12.3039 14.528 12.8025 14.4789 13.2557 14.2912C13.7089 14.1035 14.0962 13.7856 14.3687 13.3778C14.6412 12.97 14.7866 12.4905 14.7866 12C14.7866 11.6743 14.7225 11.3518 14.5979 11.0509C14.4732 10.7501 14.2906 10.4767 14.0603 10.2464C13.83 10.0161 13.5566 9.83341 13.2557 9.70878C12.9548 9.58415 12.6323 9.52 12.3066 9.52V9.52ZM22.2366 7.07C22.2314 6.29776 22.0892 5.53257 21.8166 4.81C21.6159 4.28126 21.3054 3.80109 20.9055 3.40119C20.5055 3.00128 20.0254 2.69072 19.4966 2.49C18.7741 2.21746 18.0089 2.07526 17.2366 2.07C15.9466 2 15.5666 2 12.3066 2C9.04664 2 8.66664 2 7.37664 2.07C6.6044 2.07526 5.83921 2.21746 5.11664 2.49C4.5879 2.69072 4.10773 3.00128 3.70783 3.40119C3.30792 3.80109 2.99736 4.28126 2.79664 4.81C2.5241 5.53257 2.3819 6.29776 2.37664 7.07C2.30664 8.36 2.30664 8.74 2.30664 12C2.30664 15.26 2.30664 15.64 2.37664 16.93C2.3874 17.705 2.52941 18.4725 2.79664 19.2C2.99647 19.7263 3.30677 20.2037 3.70664 20.6C4.10483 21.0023 4.58603 21.3129 5.11664 21.51C5.83921 21.7825 6.6044 21.9247 7.37664 21.93C8.66664 22 9.04664 22 12.3066 22C15.5666 22 15.9466 22 17.2366 21.93C18.0089 21.9247 18.7741 21.7825 19.4966 21.51C20.0273 21.3129 20.5084 21.0023 20.9066 20.6C21.3065 20.2037 21.6168 19.7263 21.8166 19.2C22.0889 18.4739 22.2311 17.7055 22.2366 16.93C22.3066 15.64 22.3066 15.26 22.3066 12C22.3066 8.74 22.3066 8.36 22.2366 7.07V7.07ZM19.6966 15.07C19.6645 15.6871 19.5328 16.295 19.3066 16.87C19.1125 17.3497 18.8239 17.7854 18.458 18.1514C18.0921 18.5173 17.6563 18.8059 17.1766 19C16.5962 19.2136 15.9849 19.3318 15.3666 19.35C14.5766 19.35 14.3666 19.35 12.3066 19.35C10.2466 19.35 10.0366 19.35 9.24664 19.35C8.62837 19.3318 8.01713 19.2136 7.43664 19C6.94074 18.8157 6.49292 18.5217 6.12664 18.14C5.76431 17.7813 5.48448 17.3479 5.30664 16.87C5.0922 16.2901 4.97725 15.6782 4.96664 15.06C4.96664 14.27 4.96664 14.06 4.96664 12C4.96664 9.94 4.96664 9.73 4.96664 8.94C4.97725 8.32183 5.0922 7.70988 5.30664 7.13C5.49092 6.6341 5.78491 6.18628 6.16664 5.82C6.52697 5.45962 6.9599 5.18009 7.43664 5C8.01713 4.78641 8.62837 4.66821 9.24664 4.65V4.65C10.0366 4.65 10.2466 4.65 12.3066 4.65C14.3666 4.65 14.5766 4.65 15.3666 4.65C15.9849 4.66821 16.5962 4.78641 17.1766 5C17.6725 5.18428 18.1204 5.47827 18.4866 5.86C18.849 6.21875 19.1288 6.65213 19.3066 7.13C19.5202 7.71049 19.6384 8.32173 19.6566 8.94C19.6566 9.73 19.6566 9.94 19.6566 12C19.6566 14.06 19.7266 14.27 19.6966 15.06V15.07ZM18.0966 7.63C17.9776 7.30698 17.7899 7.01364 17.5464 6.77021C17.303 6.52678 17.0097 6.33906 16.6866 6.22C16.2431 6.06626 15.776 5.99179 15.3066 6C14.5266 6 14.3066 6 12.3066 6C10.3066 6 10.0866 6 9.30664 6C8.83491 6.00461 8.36771 6.09263 7.92664 6.26C7.60857 6.37366 7.31833 6.55371 7.07522 6.7882C6.83212 7.02269 6.6417 7.30624 6.51664 7.62C6.37142 8.06537 6.30047 8.5316 6.30664 9C6.30664 9.78 6.30664 10 6.30664 12C6.30664 14 6.30664 14.22 6.30664 15C6.31655 15.4712 6.40441 15.9375 6.56664 16.38C6.6857 16.703 6.87343 16.9964 7.11685 17.2398C7.36028 17.4832 7.65362 17.6709 7.97664 17.79C8.40331 17.9469 8.85229 18.0347 9.30664 18.05V18.05C10.0866 18.05 10.3066 18.05 12.3066 18.05C14.3066 18.05 14.5266 18.05 15.3066 18.05C15.7784 18.0454 16.2456 17.9574 16.6866 17.79C17.0097 17.6709 17.303 17.4832 17.5464 17.2398C17.7899 16.9964 17.9776 16.703 18.0966 16.38C18.264 15.9389 18.352 15.4717 18.3566 15C18.3566 14.22 18.3566 14 18.3566 12C18.3566 10 18.3566 9.78 18.3566 9C18.3569 8.5278 18.2687 8.05972 18.0966 7.62V7.63ZM12.3066 15.82C11.8055 15.82 11.3092 15.7211 10.8463 15.529C10.3834 15.3369 9.96294 15.0554 9.60902 14.7005C9.2551 14.3457 8.97467 13.9245 8.78378 13.4611C8.5929 12.9977 8.49532 12.5012 8.49664 12V12C8.49664 11.2441 8.72094 10.5051 9.14113 9.87669C9.56132 9.24828 10.1585 8.75866 10.8571 8.46983C11.5557 8.181 12.3243 8.10594 13.0656 8.25415C13.8068 8.40236 14.4875 8.76717 15.0213 9.30241C15.5552 9.83764 15.9182 10.5192 16.0645 11.2609C16.2107 12.0026 16.1336 12.771 15.843 13.4688C15.5523 14.1666 15.0611 14.7625 14.4316 15.1811C13.8021 15.5996 13.0626 15.822 12.3066 15.82V15.82ZM16.3066 8.93C16.0856 8.9066 15.881 8.80222 15.7323 8.63697C15.5836 8.47172 15.5014 8.25729 15.5014 8.035C15.5014 7.81271 15.5836 7.59828 15.7323 7.43303C15.881 7.26778 16.0856 7.1634 16.3066 7.14V7.14C16.5277 7.1634 16.7323 7.26778 16.881 7.43303C17.0296 7.59828 17.1119 7.81271 17.1119 8.035C17.1119 8.25729 17.0296 8.47172 16.881 8.63697C16.7323 8.80222 16.5277 8.9066 16.3066 8.93Z"
                                                    fill="CurrentColor"></path>
                                            </svg>
                                        </div>
                                        <div class="descriptive-text">Instagram Link</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="w-node-_90528466-4b8c-3d6f-b4ca-cd9ded490732-f31f9555" class="footer_column-wrapper feature-footer-div">
                            <div class="footer_column-heading">Features</div>
                            <a href="https://hub.slikk.ai/features/projects" class="footer_link">Projects</a>
                            <a href="https://hub.slikk.ai/features/pods" class="footer_link">Pods</a>
                            <a href="https://hub.slikk.ai/features/task-management" class="footer_link">Task Management</a>
                            <a href="https://hub.slikk.ai/features/file-sharing" class="footer_link">Files</a>
                            <a href="https://hub.slikk.ai/features/workflows" class="footer_link">Custom Workflows</a>
                            <a href="https://hub.slikk.ai/features/productivity-analytics" class="footer_link">Productivity Analytics</a>
                            <a href="https://hub.slikk.ai/features/docs" class="footer_link">AI Document Hub</a>
                            <a href="https://hub.slikk.ai/features/ai" class="footer_link">AI Employee Assistant</a>
                        </div>
                        <div id="w-node-_90528466-4b8c-3d6f-b4ca-cd9ded490732-f31f9555" class="footer_column-wrapper team-footer-div">
                            <div class="footer_column-heading display">Teams</div>
                            <a href="https://hub.slikk.ai/teams/product-management" class="footer_link display">Product Management</a>
                            <a href="https://hub.slikk.ai/teams/engineering" class="footer_link display">Engineering</a>
                            <a href="https://hub.slikk.ai/teams/human-resources" class="footer_link display">Human Resources</a>
                            <a href="https://hub.slikk.ai/teams/marketing" class="footer_link display">Marketing</a>
                            <a href="https://hub.slikk.ai/teams/design" class="footer_link display">Design</a>
                            <a href="https://hub.slikk.ai/teams/operations" class="footer_link display">Operations</a>
                        </div>
                        <div id="w-node-_90528466-4b8c-3d6f-b4ca-cd9ded490732-f31f9555" class="footer_column-wrapper team-footer-div margin-left-footer">
                            <div class="footer_column-heading">Teams</div>
                            <a href="https://hub.slikk.ai/teams/product-management" class="footer_link">Product Management</a>
                            <a href="https://hub.slikk.ai/teams/engineering" class="footer_link">Engineering</a>
                            <a href="https://hub.slikk.ai/teams/human-resources" class="footer_link">Human Resources</a>
                            <a href="https://hub.slikk.ai/teams/marketing" class="footer_link">Marketing</a>
                            <a href="https://hub.slikk.ai/teams/design" class="footer_link">Design</a>
                            <a href="https://hub.slikk.ai/teams/operations" class="footer_link">Operations</a>
                        </div>
                        <div id="w-node-_90528466-4b8c-3d6f-b4ca-cd9ded490732-f31f9555" class="footer_column-wrapper">
                            <div class="footer_column-heading">Use Cases</div>
                            <a href="https://hub.slikk.ai/use-case/strategy-and-okrs" class="footer_link">Strategy & OKRs</a>
                            <a href="https://hub.slikk.ai/use-case/roadmaps" class="footer_link">Roadmaps</a>
                            <a href="https://hub.slikk.ai/use-case/collaboration" class="footer_link">Collaboration</a>
                            <a href="https://hub.slikk.ai/use-case/productivity" class="footer_link">Productivity</a>
                        </div>
                        <div id="w-node-_90528466-4b8c-3d6f-b4ca-cd9ded490732-f31f9555" class="footer_column-wrapper pages-footer-div">
                            <!-- <div class="footer_column-heading">Pages</div> -->
                            <a class="footer_link footer-button display">View More <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" fill="#cfd5f7"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg></a>
                        </div>
                        <div id="w-node-_90528466-4b8c-3d6f-b4ca-cd9ded490732-f31f9555" class="footer_column-wrapper pages-footer-div margin-left-footer">
                            <!-- <div class="footer_column-heading">Pages</div> -->
                            <a class="footer_link footer-button">View More <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" fill="#cfd5f7"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg></a>
                            <a href="https://hub.slikk.ai/okr" class="footer_link button-link-page display">OKR</a>
                            <a href="https://hub.slikk.ai/startup" class="footer_link button-link-page display">Startup</a>
                            <a href="https://hub.slikk.ai/partner" class="footer_link button-link-page display">Partner</a>
                            <a href="https://hub.slikk.ai/training" class="footer_link button-link-page display">Remote Training</a>
                            <a href="https://hub.slikk.ai/features/360-degree-visibility" class="footer_link button-link-page display">360° Visibility</a>
                            <a href="https://hub.slikk.ai/features/time-management" class="footer_link button-link-page display">Time Management</a>
                            <a href="https://hub.slikk.ai/features/goal-management" class="footer_link button-link-page display">Goal Management</a>
                            <a href="https://hub.slikk.ai/features/kanban-boards" class="footer_link button-link-page display">Kanban Boards</a>
                            <a href="https://hub.slikk.ai/features/gantt-charts" class="footer_link button-link-page display">Gantt Charts</a>
                            <a href="https://hub.slikk.ai/features/reporting-and-analytics" class="footer_link button-link-page display">Reporting & Analytics</a>
                            <a href="https://hub.slikk.ai/features/nudge-cards" class="footer_link button-link-page display">Nudge Cards</a>
                            <a href="https://hub.slikk.ai/features/schedule-meeting" class="footer_link button-link-page display">Schedule Meeting</a>
                            <a href="https://hub.slikk.ai/features/import" class="footer_link button-link-page display">Import</a>
                            <a href="https://hub.slikk.ai/use-case/project-management" class="footer_link button-link-page display">Project Management</a>
                            <a href="https://hub.slikk.ai/use-case/sales" class="footer_link button-link-page display">Sales</a>
                            <a href="https://hub.slikk.ai/use-case/startup" class="footer_link button-link-page display">Startup</a>
                            <a href="https://hub.slikk.ai/use-case/remote-work" class="footer_link button-link-page display">Remote Work</a>
                            <a href="https://hub.slikk.ai/use-case/hr" class="footer_link button-link-page display">HR</a>
                        </div>
                    </div>
                </div>
            </div>
</footer>
<script>
     $(document).ready(function () {
        setTimeout(function(){
        $(".footer-button").click(function(){
                $(".button-link-page").removeClass("display");
                $('.footer-button').addClass('display');
        });
    },1000);
        });
</script>