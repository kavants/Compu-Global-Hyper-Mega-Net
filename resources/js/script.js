$(document).ready(function() {

  // For the sticky navigation
  $(".js--section-skills").waypoint(function(direction) {
    if(direction == "down") {
      $("nav").addClass("sticky");
    } else {
      $("nav").removeClass("sticky");
    }
  }, {
    // will happen 60px before we hit the .js--section-features
    offset: '60px'
  });

  // Scroll on buttons
  // when we click on the button the site scrolls to the top of the element with js--section-plans/js--section-features class with the speed of 1s
  $(".js--scroll-to-plan").click(function() {
    $("html, body").animate({scrollTop: $(".js--section-plans").offset().top}, 1000);
  });

  $(".js--scroll-to-skills").click(function() {
    $("html, body").animate({scrollTop: $(".js--section-skills").offset().top}, 1000);
  });

  $(".js--scroll-to-contact").click(function() {
    $("html, body").animate({scrollTop: $(".js--section-contact").offset().top}, 1000);
  });


  // Navigation scroll
  /*
  // Smooth Scroll with jQuery
  https://css-tricks.com/snippets/jquery/smooth-scrolling/
  */
  // Select all links with hashes
  $(function() {
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000, function() {
            // Callback after animation
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
              return false;
            } else {
              $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
              $target.focus(); // Set focus again
            };
          });
        }
      }
    });
  });

  // Animations on scroll
  // https://daneden.github.io/animate.css/
  $(".js--wp-1").waypoint(function(direction) {
    $(".js--wp-1").addClass("animated fadeIn");
  }, {
    offset: "50%" // half of the page
  })

  $(".js--wp-2").waypoint(function(direction) {
    $(".js--wp-2").addClass("animated fadeInUp");
  }, {
    offset: "50%"
  })

  $(".js--wp-3").waypoint(function(direction) {
    $(".js--wp-3").addClass("animated fadeIn");
  }, {
    offset: "50%"
  })

  $(".js--wp-4").waypoint(function(direction) {
    $(".js--wp-4").addClass("animated pulse");
  }, {
    offset: "50%"
  })


  // Mobile navigation
  $(".js--nav-icon").click(function() {
    var nav = $(".js--main-nav");
    var icon = $(".js--nav-icon i")

    nav.slideToggle(200);

    if(icon.hasClass("ion-navicon-round")) {
      icon.addClass("ion-close-round");
      icon.removeClass("ion-navicon-round");
    } else {
      icon.addClass("ion-navicon-round");
      icon.removeClass("ion-close-round");
    }
  });

  // Maps
  var map = new GMaps({
    div: '.map',
    lat: 41.8,
    lng: -87.6,
    zoom: 12
  });

  // Maps marker
  map.addMarker({
    lat: 41.8,
    lng: -87.6,
    title: 'HQ',
    infoWindow: {
      content: '<p>Our HQ</p>'
    }
  });

});
