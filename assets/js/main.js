// matchHeight js

    $('.services-block').matchHeight();
    $('.services-block h4').matchHeight();
    $('.services-block p').matchHeight();

    $('.about-ndis-process').matchHeight();
    $('.testimonials-block').matchHeight();

    $('.card-house-wrapp').matchHeight();


    // testimonials js
    $('.testimonials-items').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 4000
      });
   
    // single house slide js

    $('.house-slide-wrapp').slick({
      infinite: true,
      autoplay: true,
      autoplaySpeed: 3000
    });


     // card house items
   $('.card-house-items').slick({
      infinite: false,
      slidesToShow: 3,
      slidesToScroll: 3,
      autoplay: true,
      autoplaySpeed: 4000
    });