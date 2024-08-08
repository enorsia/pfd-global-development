$(document).ready(function () {
    //Owl-carousel For home Page
    $("#img_box .carousel .owl-carousel").owlCarousel({
      loop: true,
      autoplay: true,
      dots: true,
      responsive: {
        0: {
          items: 2,
        },
        576: {
          items: 3,
        },
        992: {
          items: 4,
        },
          1200: {
            items: 5,
          },
          1400: {
            items: 6,
          },
      },
    });


  });


