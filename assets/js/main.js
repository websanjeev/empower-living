// matchHeight js

    $('.services-block').matchHeight();
    $('.services-block h4').matchHeight();
    $('.services-block p').matchHeight();

    $('.about-ndis-process').matchHeight();
    $('.testimonials-block').matchHeight();

    $('.card-house-wrapp').matchHeight();


    // testimonials js
    $('.testimonials-items').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 3000,

        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 2
            }
          }
        ]

      });
   
    // single house slide js

    $('.house-slide-wrapp').slick({
      infinite: true,
      autoplay: true,
      autoplaySpeed: 3000
    });


     // card house items
   $('.card-house-items').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3,
      autoplay: true,
      autoplaySpeed: 3000,

      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 2
          }
        }
      ]
    });


     // resources js
     $('.resources-items').slick({
      infinite: true,
      slidesToShow: 2,
      slidesToScroll: 2,
      autoplay: true,
      autoplaySpeed: 3000,

      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 2
          }
        }
      ]

    });

    // blogs item js
    $('.blogs-items').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 3000,

        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 2
            }
          }
        ]

      });