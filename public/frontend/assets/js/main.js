$(document).ready(function () {
    //Owl-carousel For home Page
    $("#img_box .carousel .owl-carousel").owlCarousel({
      loop: true,
      autoplay: true,
      dots: true,
      responsive: {
        0: {
          items: 3,
        },
        768: {
          items: 3,
        },
        992: {
          items: 4,
        },
        1024: {
            items: 5,
          },
          1200: {
            items: 6,
          },
      },
    });


  });


