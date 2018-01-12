
// ====================================================================
//  VARIABLES
// ====================================================================     

      let body = $("body")    
      body.removeClass('nojs').addClass('fade-in').css('opacity', 1)


      $('.slider').slick({
        slidesToShow: 1,
        infinite: true,
        arrows: true,
        dots: false,
        autoplay: true,
        autoplaySpeed: 5000,
        useTransform: true,
        cssEase: 'ease',
        adaptiveHeight: true,
        pauseOnHover: false,         
        speed: 1200,
        fade: true, 
        responsive: [
          {
            breakpoint: 930,
            settings: {
              arrows: false,
            },
          },
        ],
      });

      // Trigger the animation on burger icon when clicked
    $('.mobile-menu--trigger').click(function () {
      $(this).toggleClass('active');
    });

    //Init mmenu mobile navigation
    $("#mobile-nav").mmenu({
      "extensions": [
        "border-full",
        "effect-listitems-slide",
        null,
      ],
      "offCanvas": {
        "zposition": "front",
      },
      "classNames": {
        "inset": "rns-button",
      },
      "navbar": {
        "title": "Navigation",
      },
      "navbars": [
        {
          "position": "top",
          "content": [
            "prev",
            "title",
          ],
        },
      ],
    });


    var API = $("#mobile-nav").data("mmenu");
    let trigger = $(".mobile-menu--trigger")

    trigger.click(function () {
      API.open();
      API.close();
    });

    API.bind( "open:finish", function() {
      setTimeout(function() {
        trigger.addClass( "active" );
      }, 0);
   });

   API.bind( "close:finish", function() {
      setTimeout(function() {
        trigger.removeClass( "active" );
      }, 0);
   });

    
            
