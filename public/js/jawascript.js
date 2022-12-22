("#carousel-slider").slick({
    arrows: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    mobileFirst: true
});

  $(document).ready(function() {
    $(window).scroll(function() {
      if ($(this).scrollTop() > 20) {
        $('#toTopBtn').fadeIn();
      } else {
        $('#toTopBtn').fadeOut();
      }
    });
  
    $('#toTopBtn').click(function() {
      $("html, body").animate({
        scrollTop: 0
      }, 1000);
      return false;
    });
  });

  $('#toTopBtn').click(function(){
    $("hmtl, body").ready
  })