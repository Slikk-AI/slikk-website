/**
* Template Name: Vesperr - v4.2.0
* Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    if (!header.classList.contains('header-scrolled')) {
      offset -= 20
    }

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },

      1200: {
        slidesPerView: 2,
        spaceBetween: 20
      }
    }
  });

  /**
   * Porfolio isotope and filter
   */
  window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
      });

      let portfolioFilters = select('#portfolio-flters li', true);

      on('click', '#portfolio-flters li', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        portfolioIsotope.on('arrangeComplete', function() {
          AOS.refresh()
        });
      }, true);
    }

  });

  /**
   * Initiate portfolio lightbox 
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfolio-lightbox'
  });

  /**
   * Portfolio details slider
   */
  new Swiper('.portfolio-details-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

    /**
     * Form Validation
     */
    window.addEventListener('load', () => {
        document.getElementById("submit1").onclick = function() {
            let emailVal = document.getElementById("email_1").value;
            const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            
            if(re.test(String(emailVal).toLowerCase())){
                let classes = document.getElementById("email_1").className.split(" ");
                classes = classes.filter((val) => val!='is-invalid');
                classes.push('is-valid');
                classes = classes.reduce((a,b) => a+' '+b, '');
                document.getElementById("email_1").className = classes;
                console.log($('#email_1').val())
                // e.preventDefault()
                $.post('/waitlist', $('#email_1').val(),
                    function(data) {
                //do nothing
                      console.log(data)
                });
                document.getElementById("email_1").value = "";
                $('#confirmModal').modal('show');
            }
            else{
                let classes = document.getElementById("email_1").className.split(" ");
                classes = classes.filter((val) => val!='is-valid');
                classes.push('is-invalid');
                classes = classes.reduce((a,b) => a+' '+b);
                document.getElementById("email_1").className = classes;
            }
        }

        document.getElementById("submit2").onclick = function() {
            let emailVal = document.getElementById("email_2").value;
            const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            
            if(re.test(String(emailVal).toLowerCase())){
                let classes = document.getElementById("email_2").className.split(" ");
                classes = classes.filter((val) => val!='is-invalid');
                classes.push('is-valid');
                classes = classes.reduce((a,b) => a+' '+b, '');
                document.getElementById("email_2").className = classes;
                console.log($('#email_2').val())
                // e.preventDefault()
                $.post('/waitlist', $('#email_2').val(),
                    function(data) {
                //do nothing
                      console.log(data)
                });
                document.getElementById("email_2").value = "";
                $('#confirmModal').show();
            }
            else{
                let classes = document.getElementById("email_2").className.split(" ");
                classes = classes.filter((val) => val!='is-valid');
                classes.push('is-invalid');
                classes = classes.reduce((a,b) => a+' '+b);
                document.getElementById("email_2").className = classes;
            }
        }
    });

    $(window).on('resize', function() {
        if($(window).width() > 575) {
            $('#availableDays').addClass('btn-group');
            $('#availableDays').removeClass('btn-group-vertical');
        }else{
            $('#availableDays').addClass('btn-group-vertical');
            $('#availableDays').removeClass('btn-group');
        }
    });

    if($(window).width() > 575) {
        $('#availableDays').addClass('btn-group');
    }else{
        $('#availableDays').addClass('btn-group-vertical');
    }

})()


$('#modalCross').onclick = () => {
    alert("gre")
    $('myModal').css("display", "none");
}

function CopyToClipboard(id)
{
  var r = document.createRange();
  r.selectNode(document.getElementById(id));
  window.getSelection().removeAllRanges();
  window.getSelection().addRange(r);
  document.execCommand('copy');
  window.getSelection().removeAllRanges();
}

$('#createEventModal').on('shown.bs.modal', function () {
  $('#createEventModal').trigger('focus');
})

$('#modalCross2').onclick = () => {
  alert("gre")
  $('#createEventModal').css("display", "none");
}

$('#calendarModal').on('shown.bs.modal', function () {
  $('#calendarModal').trigger('focus');
})

$('#modalCross3').onclick = () => {
  alert("gre")
  $('#calendarModal').css("display", "none");
}

$('#linkModal').on('shown.bs.modal', function () {
  $('#linkModal').trigger('focus');
})

$('#modalCross4').onclick = () => {
  alert("gre")
  $('#linkModal').css("display", "none");
}

$('#filterModal').on('shown.bs.modal', function () {
  $('#filterModal').trigger('focus');
})

$('#modalCross5').onclick = () => {
  alert("gre")
  $('#filterModal').css("display", "none");
}

$('#close_modal').click(function() {
  $('#confirmModal').modal('hide');
  $('#confirmModal')[0].style.display = 'none';
  console.log('xxxx')
});

$('#modalClose').click(function() {
  $('#confirmModal').modal('hide');
  console.log('yyyy');
  $('#confirmModal')[0].style.display = 'none';
});