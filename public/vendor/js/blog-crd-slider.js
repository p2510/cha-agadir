"use strict";

// crd-list slick slider
$('.crd-slider-list').slick({
    arrows: true,
    dots:true,
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1 ,
            }
          },
      ]
});