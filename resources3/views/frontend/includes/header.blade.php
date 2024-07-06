

<style>
    /* #Resets
–––––––––––––––––––––––––––––––––––––––––––––––––– */




/* #Universal and Default Styles
–––––––––––––––––––––––––––––––––––––––––––––––––– */
body {


  	font-family: "Open Sans", sans-serif !important;

}
a {text-decoration: none;}


.ul-reset {
	padding-left: 0;
   margin-top: 0;
   margin-bottom: 0;
	list-style: none;
}



/* #Navigation Styles
–––––––––––––––––––––––––––––––––––––––––––––––––– */
nav {
    background: #14008A;
    font-size: 0;
    position: fixed;
    width: 100%;
    z-index: 999;
}
nav > ul > li {
	display: inline-block;
  	font-size: 14px;
  	padding: 0 15px;
  	position: relative;
}
nav > ul > li:first-child {padding-left: 0;}
nav > ul > li:last-child {padding-right: 0;}
nav > ul > li > a {
	color: #fff;
  	display: block;
  	position: relative;
  	padding: 20px 0;

}
nav > ul > li:hover > a {
	color: #69aae0; 
  
}



/* #Mega Menu Styles
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.mega-menu {
	background: transparent;
  	display: none;
  	left: 0;
  	position: absolute;
  	text-align: left;
  	width: 100%;
  	    z-index: 1000;

}
.mega-menu h3 {color: #fff;}
.mega-menu ul {
	float: left;
  	margin-bottom: 20px;
  	margin-right: 40px;
  	width: 205px;
}
.mega-menu ul:last-child {margin-right: 0;}
.mega-menu a {
	border-bottom: 1px solid #ddd;
  	color: #4ea3d8;
  	display: block;
  	padding: 10px 0;
}
.mega-menu a:hover {color: #2d6a91;}



/* #Droppable Class Styles
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.droppable {position: static;}
.droppable > a:after {
	content: "\f107";
  	font-family: FontAwesome;
  	font-size: 12px;
  	padding-left: 6px;
  	position: relative;
  	top: -1px;
}
.droppable:hover .mega-menu {display: block;}



/* #Browser Clearfix
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.cf:before,
.cf:after {
	content: " "; /* 1 */
   display: table; /* 2 */
}
.cf:after {clear: both;}

nav > ul > li {
    display: inline-block;
    font-size: 14px;
    padding: 0 25px;
    position: relative;
    font-size: 15px;
}

.mega-menu ul {
    float: left;
    
    /* margin-right: 40px; */
    width: 20%;
    padding: 20px;
    /* text-align: center; */
}

.mega-menu a {
    border-bottom: none;
    color: #fff;
    display: block;
    padding: 15px 0;
}
.features {
    width: 50%;
    display: block;
    float: left;
        box-shadow: 0px 3px 6px #00000029;
           
}

.features ul {
    width: 40%;
}

.container.cf {
    max-width: 70%;
    margin-left: auto;
    margin-right: auto;
    padding: 0px !important;
    background: #352689;
}

.mega-menu h3 {
    color: #fff;
    box-shadow: 0px 3px 6px #00000029;
    padding: 20px;
}

@media screen and (max-width:800px){

  .desk-show {display:none;}
  .mob-show {display:block !important;}


  .home-banner {
    background: #552df6 url(img/Group914.png) 0% 0% no-repeat !important;
    opacity: 1 !important;
    background-size: cover; 
     background-position: cover;

    padding: 10px !important;;

    width: 100%;
  }
}



/* Important stuff here! Look at the bottom!!! (Line 133 to 136) */
*,
*::after,
*::before {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
 
}

:root {
  --nav-bg: #5433ff;
  --main-clr: #14008A;
  --nav-shadow: 0px 3px var(--main-clr);
}

.nav-mob {
  display: flex;
  align-items: center;
  justify-content: space-around;
  position: fixed;
  width: 100%;
  background: #5433ff;
  box-shadow: var(--nav-shadow);
  z-index: 999;
}

.nav-mob .logo {
  color: #fff;
  text-decoration-color: var(--main-clr);
  font-size: 22px;
  font-family: "Playfair Display", serif;
  font-weight: 100;0px 3px var(--main-clr)
}

.nav-mob ul {
  --padding: 20px;
  --font-size: 17px;
background:#14008A !important;
  list-style: none;
  display: flex;
  align-items: center;
  font-size: var(--font-size);
  overflow-y: hidden;
  transition: 1s cubic-bezier(.68,-0.55,.27,10.55);
  box-shadow: var(--nav-shadow);
}

.nav-mob ul li {
  padding: var(--padding);
}

.nav-mob ul li a {
  color: #fff;
  text-decoration: none;
  position: relative;
}

.nav-mob ul li a::after {
  content: "";
  width: 0%;
  height: 1.7px;
  border-radius: 99px;
  background: var(--main-clr);
  position: absolute;
  bottom: 0;
  left: 0;
  transition: 0.3s ease;
}

.nav-mob ul li a:hover::after {
  width: 100%;
}

.nav-mob .menu {
  width: 22px;
  height: 16px;
  cursor: pointer;
  display: none;
  align-items: center;
  flex-direction: column;
  justify-content: space-between;
  position: relative;
  margin: 20px;
}

.nav-mob .menu span {
  width: 100%;
  height: 2px;
  border-radius: 99px;
  background: #fff;
  transition: 0.3s ease;
  transform-origin: left;
}

.nav-mob .menu.active span {
  background: var(--main-clr);
}

nav .menu.active span:nth-child(1) {
  transform: rotate(40deg);
}
.nav-mob .menu span:nth-child(3) {
  transform-origin: left;
}

.nav-mob .menu.active span:nth-child(3) {
  transform: rotate(-40deg);
}

.nav-mob .menu.active span:nth-child(2) {
  transform: scale(0);
}

@media (max-width: 910px) {

  .nav-mob {
  display: flex !important;
  }
  .nav-mob .menu {
    display: flex;
  }



  .nav-mob ul {
    --height: 0px;

    flex-direction: column;
    background: var(--nav-bg);
    position: absolute;
    width: 100%;
    left: 0;
    top: 56px;
    height: var(--height);
    transition: 1s cubic-bezier(.68,-0.55,.27,1.55);
  }
  .nav-mob ul.active {
    --height: calc(
      (((var(--padding) * 2) + (var(--font-size) * 1.5))) * var(--childenNumber)
    );
    /*   (Block Level Padding + The Font Size) * The Number of Children   */
    
    
    transition: 1s ease;
  }

  .nav-mob ul li {
    width: 100%;
    text-align: center;
  }
  .nav-mob ul li a {
    width: 100%;
    text-transform: capitalize;
  }
}


ul.container.ul-reset {
    width: 50%;
    /* float: left; */
    display: inline-block;
    text-align: left;
    padding-left: 15%;
}

nav > ul > li > a:hover {
    color: #ffbb00 !important;
    text-decoration: none;
}

.mega-menu a:hover {
    color: #ffbb00 !important;
    text-decoration: none;
}

.features button {
border:none !important;
}

.book {
  background: #5433FF;
      padding: 6px 12px;
      border-radius: 5px;
      color:#fff;
}

.book:hover {
  background: hsl(250, 70%, 51%);
  
      color:#fff !important;
}


</style>
<script src="https://use.fontawesome.com/50e4eff350.js"></script>
<nav class="desk-show">
  <ul class="container ul-reset">
    <li style="width:130px"><a href='https://slikk.ai/'><img src="https://slikk.ai/img/Slikk-Logo-Blue.svg" style="width: 100%;"></a></li>
    <li class='droppable'>
      <a href='#'>Learn</a>
      <div class='mega-menu'>
      	<div class="container cf" style="max-width: 60%;">
          <ul class="ul-reset">
          
            <!--<li><a href='#'>Onboarding</a></li>-->
            <!--<li><a href='#'>Hierarchy</a></li>-->
            <li><a href='https://slikk.ai/blog'>Blog</a></li>
            
          </ul><!-- .ul-reset -->
          <ul class="ul-reset">
          
            <!-- <li><a href='https://slikk.ai/videos'>Videos</a></li> -->
            
            <li><a href="{{url ('https://slikk.ai/learn/video')}}">Video</a></li>
            <!--<li><a href='https://slikk.ai/book-a-demo'>On Demand Demo</a></li>-->
            
          </ul><!-- .ul-reset -->
          <ul class="ul-reset">
    
            <li><a href="{{url ('https://slikk.ai/learn/help')}}">Help</a></li>
           
          </ul><!-- .ul-reset -->
          
           <!-- <ul class="ul-reset">
             <li><a href="{{url('https://slikk.ai/learn/Support-Articles')}}">Support Articles</a></li>
           
          </ul>-->
         
        </div><!-- .container -->
      </div><!-- .mega-menu -->
    </li><!-- .droppable -->
    <li class='droppable'>
      <a href='javascript:void(0)'>Product</a>
      <div class='mega-menu'>
        <div class="container cf">
            <div class="features">
                <h3>Features</h3>
              <ul class="ul-reset">
                
                <li><a href='https://slikk.ai/features/360-degree-visibility'>360° Visibility</a></li>
                <li><a href='https://slikk.ai/features/time-management'>Time Management</a></li>
                <li><a href='https://slikk.ai/features/task-management'>Task Management</a></li>
                <li><a href='https://slikk.ai/features/goal-management'>Goal Management</a></li>
                <li><a href='https://slikk.ai/features/kanban-boards'>Kanban Boards</a></li>
                <li><a href='https://slikk.ai/features/gantt-charts'>Gantt Charts</a></li>
              </ul><!-- .ul-reset -->
              <ul class="ul-reset">
              <li><a href='https://slikk.ai/features/file-sharing'>File Sharing</a></li>
                <li><a href='https://slikk.ai/features/reporting-and-analytics'>Reporting & Analytics</a></li>
                <li><a href='https://slikk.ai/features/nudge-cards'>Nudge Cards</a></li>
                <li><a href='https://slikk.ai/features/schedule-meeting'>Schedule Meeting</a></li>
                <li><a href='https://slikk.ai/features/import'>Import</a></li>
                  <li><a href='https://slikk.ai/features/docs'>Docs</a></li>
              </ul><!-- .ul-reset -->

            <button type="button" class="btn btn-primary btn-sm" style="background: #5433FF;color: #fff;margin: auto;width: 60%;margin-bottom: 10px;display: block;"><a href="https://slikk.ai/features" style="padding:0px">View All</a></button>
          </div>
            <div class="features">
                <h3>Use Cases</h3>
              <ul class="ul-reset">
                
                <li><a href='https://slikk.ai/use-case/project-management'>Project Management</a></li>
                <li><a href='https://slikk.ai/use-case/software-development'>Software Development</a></li>
                <li><a href='https://slikk.ai/use-case/sales'>Sales</a></li>
                <li><a href='https://slikk.ai/use-case/startup'>Startup</a></li>
                <li><a></a></li>
                <div style="margin-bottom:3.2rem;"></div>
              </ul><!-- .ul-reset -->
              <ul class="ul-reset">
              
                <li><a href='https://slikk.ai/use-case/remote-work'>Remote Work</a></li>
                <li><a href='https://slikk.ai/use-case/marketing'>Marketing</a></li>
                <li><a href='https://slikk.ai/use-case/designg'>Design</a></li>
                <li><a href='https://slikk.ai/use-case/hr'>HR</a></li>
                <li><a></a></li>
                <div style="margin-bottom:3.2rem;"></div>
              </ul><!-- .ul-reset -->

            <button type="button" class="btn btn-primary btn-sm" style="background: #5433FF;color: #fff;margin: auto;width: 60%;margin-bottom: 10px;display: block;"><a href="https://slikk.ai/use-cases" style="padding:0px">View All</a></button>
          </div><!-- cases -->
        </div><!-- .container -->
      </div><!-- .mega-menu-->
    </li><!-- .droppable -->

    <li><a href='https://slikk.ai/pricing'>Pricing</a></li>

  </ul><!-- .container .ul-reset -->
  <ul class="container ul-reset" style="text-align: right;
  display: inline-block;
  padding-right: 15%;
  padding-left: 0;">

    <li><a href='https://slikk.ai/join-us'>Sign In</a></li>
    <li><a href='https://slikk.ai/book-a-demo' class='book'>Book A Demo</a></li>
  </ul><!-- .container .ul-reset -->
</nav>



<style>

.navigation {
    height: 60px;
    background: #14008A;
    position: fixed;
    top: 0;
    z-index: 1000;
    width: 100%;
}
 .brand {

	 padding-left: 20px;
	 float: left;
	 line-height: 60px;
	 text-transform: uppercase;
	 font-size: 1.4em;
}
 .brand a, .brand a:visited {
	 color: #fff;
	 text-decoration: none;
}
 .nav-container {
	 max-width: 100%;
	 margin: 0 auto;
   display: inline-block;
   width: 100%;
}
 #nav2 {
	 float: right;
   z-index: 10;
}
#nav2 ul {
	 list-style: none;
	 margin: 0;
	 padding: 0;
  padding-bottom: 20px;
  background:#14008A;
  margin-top:58px;

    overflow-y: scroll;
    height: 100vh;

}
ul.nav-dropdown h3 {
  
    font-size: 19px;
    padding: 10px;
    color: yellow !important;
}

ul.nav-dropdown h3 a {
    color: #fff;
    font-size: 19px;
    padding: 10px;
    color: yellow !important;
}

#nav2 ul li {
	 float: left;
	 position: relative;
   padding: 0px !important;
   text-align: center;
}
#nav2 ul li a, #nav2 ul li a:visited {
	 display: block;
	 padding: 0 20px;
	 line-height: 70px;
	 background: #14008A;
	 color: #fff;
	 text-decoration: none;
}
#nav2 ul li a:hover, #nav2 ul li a:visited:hover {
	 background: #2581dc;
	 color: #fff;
}
#nav2 ul li a:not(:only-child):after, #nav2 ul li a:visited:not(:only-child):after {
	 padding-left: 4px;
	 content: ' ▾';
}

#nav2 ul li ul {
  overflow-y: scroll;
    height: 100vh;
}

#nav2 ul li ul li {
	 min-width: 190px;
}

#nav2 ul li ul li a {
	 padding: 15px;
	 line-height: 20px;
}
 .nav-dropdown {
	 position: absolute;
	 display: none;
	 z-index: 1;
	 box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
}
/* Mobile navigation */
.nav-mobile {
    display: none;
    position: fixed;
    top: 0;
    right: 20px;
    background: #14008A;
  
    width: 70px;
}
 @media only screen and (max-width: 798px) {
	 .nav-mobile {
		 display: block;
	}
  #nav2 {
		 
		 /* padding: 70px 0 15px; */
	}
  #nav2 ul {
		 display: none;
	}
  #nav2 ul li {
		 float: none;
     width:100%;
     background: #14008A;
	}

  
  #nav2 ul li a {
		 padding: 15px;
		 line-height: 20px;
	}
  #nav2 ul li ul li a {
		 padding-left: 30px;
	}
	 .nav-dropdown {
		 position: static;
	}
}
 @media screen and (min-width: 799px) {
	 .nav-list {
		 display: block !important;
	}
}
 #nav-toggle {
	 position: absolute;
	 left: 18px;
	 top: 18px;
	 cursor: pointer;
	 padding: 10px 35px 16px 0px;
}
 #nav-toggle span, #nav-toggle span:before, #nav-toggle span:after {
	 cursor: pointer;
	 border-radius: 1px;
	 height: 3px;
	 width: 27px;
	 background: #fff;
	 position: absolute;
	 display: block;
	 content: '';
	 transition: all 300ms ease-in-out;
}
 #nav-toggle span:before {
	 top: -10px;
}
 #nav-toggle span:after {
	 bottom: -10px;
}
 #nav-toggle.active span {
	 background-color: transparent;
}
 #nav-toggle.active span:before, #nav-toggle.active span:after {
	 top: 0;
}
 #nav-toggle.active span:before {
	 transform: rotate(45deg);
}
 #nav-toggle.active span:after {
	 transform: rotate(-45deg);
}
 

.brand a img {
    width: 60%;
}
</style>

<section class="navigation mob-show" style="display:none;">
  <div class="nav-container">
    <div class="brand">
      <a href='https://slikk.ai/'><img src="https://slikk.ai/img/Slikk-Logo-Blue-mobile.png"></a>
    </div>
    <nav id="nav2">
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
     
        <li>
          <a href="#!">Learn</a>
          <ul class="nav-dropdown">
            <li><a href='#'>Onboarding</a></li>
            <li><a href='#'>Hierarchy</a></li>
            <li><a href='https://slikk.ai/blog'>Blog</a></li>

            <li><a href='#'>Videos</a></li>
            <li><a href='https://slikk.ai/book-a-demo'>On Demand Demo</a></li>

            <li><a href="{{url ('https://slikk.ai/learn/help-new')}}">Help</a></li>
            <!-- <li><a href="{{url('https://slikk.ai/learn/Support-Articles')}}">Support Articles</a></li> -->
          </ul>
        </li>

        <li>
          <a href="#!">Product</a>
          
          <ul class="nav-dropdown">
            <h3><a href="https://slikk.ai/features">Features</a></h3>
            <li><a href='https://slikk.ai/features/360-degree-visibility'>360° Visibility</a></li>
            <li><a href='https://slikk.ai/features/time-management'>Time Management</a></li>
            <li><a href='https://slikk.ai/features/task-management'>Task Management</a></li>
            <li><a href='https://slikk.ai/features/goal-management'>Goal Management</a></li>
            <li><a href='https://slikk.ai/features/kanban-boards'>Kanban Boards</a></li>
             <li><a href='https://slikk.ai/features/gantt-charts'>Gantt Charts</a></li>
             <li><a href='https://slikk.ai/features/file-sharing'>File Sharing</a></li>
         
           
            <li><a href='https://slikk.ai/features/reporting-and-analytics'>Reporting & Analytics</a></li>
            <li><a href='https://slikk.ai/features/nudge-cards'>Nudge Cards</a></li>
            <li><a href='https://slikk.ai/features/schedule-meeting'>Schedule Meeting</a></li>
             <li><a href='https://slikk.ai/features/import'>Import</a></li>
              <li><a href='https://slikk.ai/features/docs'>Docs</a></li>
         

                 <li><a href='https://slikk.ai/features' class='book'>View All Features</a></li>

                 <h3><a href="https://slikk.ai/use-cases">Use Cases</a></h3>
                 <li><a href='https://slikk.ai/use-case/project-management'>Project Management</a></li>
                 <li><a href='https://slikk.ai/use-case/software-development'>Software Development</a></li>
                 <li><a href='https://slikk.ai/use-case/sales'>Sales</a></li>
                 <!-- <li><a href='#'>CRM</a></li> -->
                 <li><a href='https://slikk.ai/use-case/startup'>Startup</a></li>
                 <li><a href='https://slikk.ai/use-case/remote-work'>Remote Work</a></li>
                 <li><a href='https://slikk.ai/use-case/marketing'>Marketing</a></li>
                 <!-- <li><a href='#'>Non Profit</a></li> -->
                 <li><a href='https://slikk.ai/use-case/design'>Design</a></li>
                 <li><a href='https://slikk.ai/use-case/hr'>HR</a></li>
                 <!-- <li><a href='#'>Events</a></li> -->

                 <li><a href='https://slikk.ai/use-cases' class='book'>View All Cases</a></li>
          </ul>
        </li>

        
        <li><a href='https://slikk.ai/pricing'>Pricing</a></li>

   
        <li><a href='https://slikk.ai/join-us'>Sign In</a></li>
        <li><a href='https://slikk.ai/book-a-demo' class='book'>Book a Demo</a></li>

        
       
      </ul>
    </nav>
  </div>
</section>


<!-- Just a simple layout -->

{{-- <nav class="mob-show nav-mob" style="display:none;">
  <div>
    <a href="#" class="logo">Slikk.Ai</a>
  </div>
  <div>
    <ul id="nav">
      <li><a href="#">Learn</a>
      <ul class="">
          
        <li><a href='#'>Onboarding</a></li>
        <li><a href='#'>Hierarchy</a></li>
        <li><a href='https://slikk.ai/blogs'>Blog</a></li>
        <li><a href='#'>Videos</a></li>
        <li><a href='#'>On Demand Demo</a></li>
        <li><a href="{{url ('https://slikk.ai/learn/help-new')}}">Help</a></li>
        <!-- <li><a href="{{url('https://slikk.ai/learn/Support-Articles')}}">Support Articles</a></li> -->
        
      </ul><!-- .ul-reset -->
    </li>
      <li><a href="#">Product</a></li>
      <li><a href="#">Pricing</a></li>
      <li><a href="#">Book A Demo</a></li>
      <li><a href="#">Sign In</a></li>
      <li><a href='#' style="background: #2a2067;
        padding: 6px 12px;
        border-radius: 20px;">Try It For Free</a></li>
    </ul>
  </div>
  <div class="menu" id="menu">
    <span></span>
    <span></span>
    <span></span>
  </div>
</nav> --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>


(function($) { // Begin jQuery
  $(function() { // DOM ready
    // If a link has a dropdown, add sub menu toggle.
    $('nav ul li a:not(:only-child)').click(function(e) {
      $(this).siblings('.nav-dropdown').toggle();
      // Close one dropdown when selecting another
      $('.nav-dropdown').not($(this).siblings()).hide();
      e.stopPropagation();
    });
    // Clicking away from dropdown will remove the dropdown class
    $('html').click(function() {
      $('.nav-dropdown').hide();
    });
    // Toggle open and close nav styles on click
    $('#nav-toggle').click(function() {
      $('nav ul').slideToggle();
    });
    // Hamburger to X toggle
    $('#nav-toggle').on('click', function() {
      this.classList.toggle('active');
    });
  }); // end DOM ready
})(jQuery); // end jQuery

  // For toggling and finding number of children and other stuff is done here!

// const navigation = document.getElementById("nav");
// const menu = document.getElementById("menu");

// menu.addEventListener("click", () => {
//   // The navigation.children.length means the following :-
//   // The children inside a parent are basically an array of elements; So, here I'm finding the length of the array aka how many children are inside the nav bar.
//   //   Yup That's all.
//   navigation.style.setProperty("--childenNumber", navigation.children.length);

//   //    Casually Toggling Classes to make them animate on click
//   //   Regular stuff ;)
//   navigation.classList.toggle("active");
//   menu.classList.toggle("active");
// });

</script>