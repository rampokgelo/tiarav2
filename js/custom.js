$(document).ready(function() {
  $('.modal').modal({
    dismissible: true, // Modal can be dismissed by clicking outside of the modal
    startingTop: '0', // Starting top style attribute
    endingTop: '0',
    opacity: 1
  });
  $('.collapsible').collapsible();
  $('ul.tabs').tabs({
    // swipeable:true
    onShow: function(tab) {
      $('.ben-slick').slick('setPosition');
      //$('.ben-slick').resize();
    }
  });

  $('.parallax').parallax();
  $(".button-collapse").sideNav({
    //menuWidth: 280, // Default is 300
    edge: 'left', // Choose the horizontal origin
    closeOnClick: true
  });
  $('.dropdown-button').dropdown({
    inDuration: 300,
    outDuration: 225,
    constrainWidth: false, // Does not change width of dropdown to that of the activator
    hover: true, // Activate on hover
    gutter: 0, // Spacing from edge
    belowOrigin: true, // Displays dropdown below the button
    alignment: 'left', // Displays dropdown with edge aligned to the left of button
    stopPropagation: true // Stops event propagation
  });

  $('.subdrop').dropdown({
    inDuration: 300,
    outDuration: 225,
    constrain_width: false, // Does not change width of dropdown to that of the activator
    hover: true, // Activate on hover
    gutter: ($('.dropdown-content').width() * 3) / 2.6 + 5, // Spacing from edge
    belowOrigin: false, // Displays dropdown below the button
    stopPropagation: true, // Stops event propagation
    alignment: 'left' // Displays dropdown with edge aligned to the left of button
  });
  $(window).on("scroll", function() {
    var wn = $(window).scrollTop();
    if (wn > 80) {
      $(".nav-primary").addClass('nav-change');
    } else {
      $(".nav-primary").removeClass('nav-change');
    }
  });

  $('.banner-slide').slick({
    dots: false,
    infinite: false,
    speed: 800,
    autoplay: true,
    autoplaySpeed: 2500,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: '.prev-hero',
    nextArrow: '.next-hero',
    responsive: [{
        breakpoint: 1024,
        settings: {
          // slidesToScroll: 3,
          // infinite: true,
          // dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {

        }
      },
      {
        breakpoint: 480,
        settings: {
          // slidesToShow: 1,
          // slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  $('.exp-slick-home').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: true,
    responsive: [{
        breakpoint: 1024,
        settings: {
          // slidesToScroll: 3,
          // infinite: true,
          // dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {

        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.ben-slick').slick({
    dots: false,
    infinite: false,
    speed: 300,
    arrows: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.resources-slick').slick({
    dots: false,
    infinite: false,
    speed: 300,
    arrows: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  // $('.nav-primary').waypoint(function(direction) {
  //   if (direction === 'down') {
  //     $(this).hide().addClass('showup');
  //   } else {
  //     $(this).removeClass('showup');;
  //   }
  // }, {
  //   offset: 'bottom-in-view'
  //   // offset: '100%'
  // });
  $('.forgotshow').on('click tap', function() {
    $('.loginform').removeClass('showup');
    $('.forgot-pass').addClass('showup');
  });
  $("#fakeloader").fakeLoader({
    timeToHide: 1200, //Time in milliseconds for fakeLoader disappear
    zIndex: "999", //Default zIndex
    spinner: "spinner6", //Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'
    bgColor: "#033298", //Hex, RGB or RGBA colors
    //imagePath: "yourPath/customizedImage.gif" //If you want can you insert your custom image
  });
});
