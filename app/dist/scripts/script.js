import 'bootstrap';
import 'lazysizes';
jQuery(document).ready(function($) {

    function sidebarScroll() {

        var navHero = $('.navbar').outerHeight() + $('#hero').outerHeight();
        var scroll =  $(document).scrollTop();
        var aboutOffset = $('#about').offset().top;
        var sidebarOffset = $('#sidebar').offset().top;
        var sidebarHeight = $('#sidebar').height();

        if(scroll > navHero) {
            $('#sidebar').addClass('affix');

            if(sidebarOffset + sidebarHeight >= aboutOffset - 50) {
                $('#sidebar').removeClass('affix').css({
                    'position': 'relative',
                    'top': aboutOffset - sidebarOffset + sidebarHeight
                });
            }

            if(scroll + window.innerHeight < $('#about').offset().top + 25) {
                $('#sidebar').css({
                    'position': 'fixed',
                    'top': 25
                }); // restore when scrolled up
            }

        } else {
            $('#sidebar').removeClass('affix').css({
                'position': 'relative',
                'top': 0
            });
        }

        console.log(scroll + window.innerHeight < $('#about').offset().top + 50);
    }

    if($(window).width() > 768 ) {
        sidebarScroll();
    }

    $(window).scroll(function() {
        if($(window).width() > 768 ) {
           sidebarScroll();
        }
    });

    $(window).on("resize", function() {
        if( $(window).width() > 768 ) {
           sidebarScroll();
        }
    });

    var aboutHeight = $('#about').outerHeight();

    $('.vpr-item').popover({
        placement: "right"
    })
    .on("mouseenter", function () {
        var _this = this;
        $(this).popover("show");

        $(".popover").on("mouseleave", function () {
            $(_this).popover('hide');
        });
    })
    .on("mouseleave", function () {
        var _this = this;
        setTimeout(function () {
            if (!$(".popover:hover").length) {
                $(_this).popover("hide");
            }
        }, 300);
    });




  // $(".navbar a, footer a[href='#myPage'], #tiles a").on('click', function(event) {
  // event.preventDefault();
  // var hash = this.hash;
  // $('html, body').animate({
  //   scrollTop: $(hash).offset().top
  // }, 1000, function(){
  //   window.location.hash = hash;
  //   });
  // });

  // if ( $(".navbar").length ) {

  // /* Adjust Masthead for WP Admin Bar */

  //   if ( $("#wpadminbar").length ) {
  //     $(".navbar").css({
  //       "top" : $("#wpadminbar").height()
  //     })
  //   }

  // }

  // $(window).scroll(function() {

    // $(".slideanim").each(function(){
    //   var pos = $(this).offset().top;

    //   var winTop = $(window).scrollTop();
    //   if (pos < winTop + 600) {
    //     $(this).addClass("slide");
    //   }
    // });

    // var scroll = $(window).scrollTop();
      // if (scroll > 0) {
      //   $(".navbar").addClass("scroll");
      // }

      // else {
      //   $(".navbar").removeClass("scroll");
      // }

      // Cache the Window object
      // var $window = $(window);

      // Parallax Backgrounds

      // Tutorial: http://code.tutsplus.com/tutorials/a-simple-parallax-scrolling-technique--net-27641

      // $('section[data-type="background"]').each(function(){

      //   var $bgobj = $(this); // assigning the object

      // // Scroll the background at var speed
      // // the yPos is a negative value because we're scrolling it UP!
      // var yPos = -($window.scrollTop() / $bgobj.data('speed'));

      // // Put together our final background position
      // var coords = '50% '+ yPos + 'px';

      // // Move the background
      // $bgobj.css({ backgroundPosition: coords });

      // console.log(coords);

    // });

  });

// });