
(function ($) {
    'use strict';

    jQuery(document).ready(function () {

    jQuery(document).ready(function () ä

    jQuery(document).ready(function () {


        /*
         * ----------------------------------------------------------------------------------------
         *  PRELOADER JS
         * ----------------------------------------------------------------------------------------
         */

        var prealoaderOption = jQuery(window);
        prealoaderOption.on("load", function () {
            var preloader = jQuery('.preloader');
            var preloaderArea = jQuery('.preloader-area');
            preloader.fadeOut();
            preloaderArea.delay(1000).fadeOut('fast');
        });




        /*
         * ----------------------------------------------------------------------------------------
         *  CHANGE MENU BACKGROUND JS
         * ----------------------------------------------------------------------------------------
         */

        var headertopoption = jQuery(window);
        var headTop = jQuery('.header-top-area');

        headertopoption.on('scroll', function () {
            if (headertopoption.scrollTop() > 200) {
                headTop.addClass('menu-bg');
            } else {
                headTop.removeClass('menu-bg');
            }
        });


        /*
         * ----------------------------------------------------------------------------------------
         *  MENU JS
         * ----------------------------------------------------------------------------------------
         */
        jQuery(".toggle-btn").on("click", function () {
            jQuery(this).toggleClass("active");
            jQuery(".site-header").toggleClass("active");
        });



            jQuery(window).scroll(function(){                          
            if (jQuery(this).scrollTop() > 500) {
                jQuery('.navbar-color').css('background-color', '#1c1d1dc');
            } else {
               jQuery('.navbar-color').css('background-color', 'transparent');
            }
        });
            

        /*
         * ----------------------------------------------------------------------------------------
         *  SMOTH SCROOL JS
         * ----------------------------------------------------------------------------------------
         */

        jQuery('a.smoth-scroll').on("click", function (e) {
            var anchor = jQuery(this);
            jQuery('html, body').stop().animate({
                scrollTop: jQuery(anchor.attr('href')).offset().top - 50
            }, 1000);
            e.preventDefault();
        });


        /*
         * ----------------------------------------------------------------------------------------
         *  PARALLAX JS
         * ----------------------------------------------------------------------------------------
         */

        var parallaxeffect = jQuery(window);
        parallaxeffect.stellar({
            responsive: true,
            positionProperty: 'position',
            horizontalScrolling: false
        });


        /*
         * ----------------------------------------------------------------------------------------
         *  COUNTER UP JS
         * ----------------------------------------------------------------------------------------
         */

        jQuery('.counter-num').counterUp();


        /*
         * ----------------------------------------------------------------------------------------
         *  WORK JS
         * ----------------------------------------------------------------------------------------
         */

        jQuery('.work-inner').mixItUp();



        /*
         * ----------------------------------------------------------------------------------------
         *  MAGNIFIC POPUP JS
         * ----------------------------------------------------------------------------------------
         */

        var magnifPopup = function () {
            jQuery('.work-popup').magnificPopup({
                type: 'image',
                removalDelay: 300,
                mainClass: 'mfp-with-zoom',
                gallery: {
                    enabled: true
                },
                zoom: {
                    enabled: true, // By default it's false, so don't forget to enable it

                    duration: 300, // duration of the effect, in milliseconds
                    easing: 'ease-in-out', // CSS transition easing function

                    // The "opener" function should return the element from which popup will be zoomed in
                    // and to which popup will be scaled down
                    // By defailt it looks for an image tag:
                    opener: function (openerElement) {
                        // openerElement is the element on which popup was initialized, in this case its <a> tag
                        // you don't need to add "opener" option if this code matches your needs, it's defailt one.
                        return openerElement.is('img') ? openerElement : openerElement.find('img');
                    }
                }
            });
        };
        // Call the functions 
        magnifPopup();





        /*
         * ----------------------------------------------------------------------------------------
         *  TESTIMONIAL JS
         * ----------------------------------------------------------------------------------------
         */

        jQuery(".project-list").owlCarousel({
            items: 3,
            autoPlay: true,
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [980, 1],
            itemsTablet: [768, 1],
            itemsTabletSmall: false,
            itemsMobile: [479, 1],
            pagination: false,
            autoHeight: true,
            navigation: true,
            navigationText : [ '<span class="project-link"> < <span>', '<span class="project-link">></span>' ]

            
        });


         /*
         * ----------------------------------------------------------------------------------------
         *  TYPED JS
         * ----------------------------------------------------------------------------------------
         */



        jQuery('.header-text').typed({
                strings:[" <h2>Hello. <br> I'm Michael J. Stokes. <br> I'm your developer. <br> Let's build something together!</h2> <div class='home-arrow-down'> <i class='fa fa-angle-double-down'> </i>  </div>  "], 
                typeSpeed:50,
                loop:false,
                cursorChar: "|",
                showCursor: true
            });


 





        /*
         * ----------------------------------------------------------------------------------------
         *  EXTRA JS
         * ----------------------------------------------------------------------------------------
         */
        jQuery(document).on('click', '.navbar-collapse.in', function (e) {
            if (jQuery(e.target).is('a') && jQuery(e.target).attr('class') != 'dropdown-toggle') {
                jQuery(this).collapse('hide');
            }
        });
        jQuery('body').scrollspy({
            target: '.navbar-collapse',
            offset: 195
        });



        /*
         * ----------------------------------------------------------------------------------------
         *  WOW JS
         * ----------------------------------------------------------------------------------------
         */
        new WOW().init();



     /*
         * ----------------------------------------------------------------------------------------
         *  AUTO SCROLL
         * ----------------------------------------------------------------------------------------
         */
  
         jQuery('a[href*=#]').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    && location.hostname == this.hostname) {
      var $target = jQuery(this.hash);
      $target = $target.length && $target
      || jQuery('[name=' + this.hash.slice(1) +']');
      if ($target.length) {
        var targetOffset = $target.offset().top;
        jQuery('html,body')
        .animate({scrollTop: targetOffset}, 1000);
       return false;
      }
    }
  });


        /*
         * ----------------------------------------------------------------------------------------
         *  SIDEBAR MENU
         * ----------------------------------------------------------------------------------------
         */

        
        jQuery('#openSlide').click(function(){
            $('#side-menu').css('width', '450px');

        });

        jQuery('#closeSlide').click(function(){
            $('#side-menu').css('width', '0px');
        });

    });


        

})(jQuery);