$(document).ready(function() {
  $(".button-collapse").sideNav({
      menuWidth: 280, // Default is 300
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
        gutter: ($('.dropdown-content').width()*3)/2.6 + 5, // Spacing from edge
        belowOrigin: false, // Displays dropdown below the button
        stopPropagation: true, // Stops event propagation
        alignment: 'left' // Displays dropdown with edge aligned to the left of button
      }
    );
  $(window).on("scroll",function(){
  	var wn = $(window).scrollTop();
    if(wn > 80){
    	$(".nav-primary").addClass('nav-change');
    }
    else{
    	$(".nav-primary").removeClass('nav-change');
    }
  });

  $('.banner-slide').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow:'.prev-hero',
  nextArrow:'.next-hero',
  responsive: [
    {
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
});
