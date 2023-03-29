"use strict";

// crd-list slick slider
$('.discount-crd-list ').slick({
    arrows: true,
    dots:true,
    // infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          }
        },
        {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1 ,
            }
          },
      ]
});