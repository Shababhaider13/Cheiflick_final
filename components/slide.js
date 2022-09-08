var widthX = $(window).width();
  if(widthX < 500){
      $(".slick-slider").slick({
      slidesToShow: 1,
      infinite:false,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: true,
      dots: false,
      prevArrow:"<a class='btn btn-primary mb-3 mr-1 left slick-prev'><i class='fa fa-arrow-left'></i></a>",
      nextArrow:"<a class='btn btn-primary mb-3 mr-1 right slick-next'><i class='fa fa-arrow-right'></i></a>"
  });
}
else{
  $(".slick-slider").slick({
   slidesToShow: 4,
   infinite:false,
   slidesToScroll: 1,
   autoplay: true,
   autoplaySpeed: 2000,
   arrows: true,
   dots: false,
   prevArrow:"<a class='btn btn-primary mb-3 mr-1 left slick-prev'><i class='fa fa-arrow-left'></i></a>",
   nextArrow:"<a class='btn btn-primary mb-3 mr-1 right slick-next'><i class='fa fa-arrow-right'></i></a>"
 });
     // dots: false, Boolean
    
  }
