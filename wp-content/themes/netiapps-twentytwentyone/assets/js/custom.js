$(document).ready(function() {
   
  $(".loader").delay(1500).fadeOut("slow");
  setTimeout(function(){
    fadePreloader();
  },1500)
  
  
  $(".testi").owlCarousel({
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      dots: true,
      autoplay:true,
      loop: true,
      autoplayTimeout:6000,
      autoplayHoverPause:true,
      singleItem:true,
      autoHeight:false,
      items:1,
      smartSpeed:450
    });

    $(".industry_slide").owlCarousel({
        navigation : true, // Show next and prev buttons
        slideSpeed : 300,
        dots: true,
        autoplay:true,
        loop: true,
        autoplayTimeout:6000,
        autoplayHoverPause:true,
        singleItem:true,
        autoHeight:false,
        items:1,
        smartSpeed:450
    });



    // This is for header menu slide up and down 
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('top-header').outerHeight();
    
    $(window).scroll(function(event){
        didScroll = true;
    });
    
    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);
    
    function hasScrolled() {
        var st = $(this).scrollTop();
        
        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta){
          $('.top-header').removeClass('darkHeader');
            return;
        }
       
        if (st > lastScrollTop && st > navbarHeight){
             // Scroll Down
             $('.top-header').addClass('darkHeader')
             if(st >= 400){
                 $('.top-header').removeClass('darkHeader').addClass('hide-menu');
             }
        } else {
            // Scroll Up
            //console.log("ST=="+st);
            if(st == 0){
              $('.top-header').removeClass('darkHeader');
              $('.top-header').removeClass('hide-menu');
            }
            else if(st + $(window).height() < $(document).height()) {
                $('.top-header').removeClass('hide-menu').addClass('darkHeader');
            }
        }
        
        lastScrollTop = st;
    }


  $(".journey-slide").owlCarousel({
      center: true,
      items:1,
      // autoplay:true,
      slideSpeed : 300,
      paginationSpeed : 400,
      autoplayTimeout:5000,
      dots: true,
      responsive:{
        600:{
          items:4
        }
      }
   });


   $(".text-slider").owlCarousel({
    loop:true,
    navigation : true, // Show next and prev buttons
    slideSpeed : 200,
    paginationSpeed : 300,
    singleItem:true,
    nav: true,
    items:1,
    smartSpeed:950,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
  });


  
    $(".owl-carousel").owlCarousel({
        navigation : true, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true,
        nav: true,
        items:1,
        smartSpeed:450,
      });

        $('.counter_val').countUp();
        $(window).scroll(function (event) {
              var scroll = $(window).scrollTop();
              if(scroll >= 4410 && scroll <= 4440 ){
                  $('.counter_val').countUp();
              }
        });


        
          //this for filtering insights
          $('.filters-button-group').on('click',function(){
        
              var $grid = $('.grid').isotope({
              itemSelector: '.element-item',
              layoutMode: 'fitRows'
            });
            // filter functions
            var filterFns = {
              // show if number is greater than 50
              numberGreaterThan50: function() {
                var number = $(this).find('.number').text();
                return parseInt( number, 10 ) > 50;
              },
              // show if name ends with -ium
              ium: function() {
                var name = $(this).find('.name').text();
                return name.match( /ium$/ );
              }
            };
            // bind filter button click
            $('.filters-button-group').on( 'click', 'button', function() {
              var filterValue = $( this ).attr('data-filter');
              // use filterFn if matches value
              flterValue = filterFns[ filterValue ] || filterValue;
              $grid.isotope({ filter: filterValue });
            });
            // change is-checked class on buttons
            $('.button-group').each( function( i, buttonGroup ) {
              var $buttonGroup = $( buttonGroup );
              $buttonGroup.on( 'click', 'button', function() {
                $buttonGroup.find('.is-checked').removeClass('is-checked');
                $( this ).addClass('is-checked');
              });
            });  
          })


     

});

function fadePreloader() {
  var preloaderFadeOutTime = 100;
  var preloader = $('.loader-wrapper');
        preloader.fadeOut(preloaderFadeOutTime);
}


 // Trigger event on tab click
  $('[dd-sidebar-tab]').on('click', function () {
        $('.sidebar-list-menu-active-bar').css('margin-top', ($(this).attr('dd-active-tab') - 1) * $(this).height());
      //  $('.dd-wrapper').css('background', $(this).attr('dd-sidebar-tab'));
        $('.sidebar-list-menu li a').removeClass('active');
        $(this).addClass('active');
        $('html, body').animate({
          scrollTop: $("#content_" + $(this).attr('dd-active-tab')).offset().top
        }, 600);
  });
  // SCroll event
  $(window).scroll(function (event) {
  var scrollPos = $(document).scrollTop();
  $('.sidebar-list-menu li a').each(function () {
    var currLink = $(this);
    var refElement = $(currLink.attr("href"));
    if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
      $('.sidebar-list-menu li a').removeClass("active");
      currLink.addClass('active');
      $('.sidebar-list-menu-active-bar').css('margin-top', (currLink.attr('dd-active-tab') - 1) * currLink.height());
    // $('.dd-wrapper').css('background', currLink.attr('dd-sidebar-tab'));
    }
  });

});



jQuery(function($){
    var Accordion = function(el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        var links = this.el.find('.article-title');
        links.on('click', {
            el: this.el,
            multiple: this.multiple
        }, this.dropdown)
    }

    Accordion.prototype.dropdown = function(e) {
        var $el = e.data.el;
        $this = $(this),
            $next = $this.next();

        $next.slideToggle();
        $this.parent().toggleClass('open');

        if (!e.data.multiple) {
            $el.find('.accordion-content').not($next).slideUp().parent().removeClass('open');
        };
    }
    var accordion = new Accordion($('.accordion-container'), false);
}); 
  