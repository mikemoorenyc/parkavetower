function galleryMaker() {

  function slideSizer() {
    if(windoww < dt) {
      $('#location-gallery .slide img').width($('#location-gallery').width());
    } else {
      $('#location-gallery .slide img').attr('style','');
    }
  }
  function titleSizer() {
    if(windoww < dt) {

      var copyW = $('#location-gallery').width() - $('#location-gallery .counter').width();

      $('#location-gallery .gal-footer .copy').css('width', (copyW-1)+'px');
    } else {
      $('#location-gallery .gal-footer .copy').attr('style','');
    }
  }
  function footerUpdate() {
    var newCopy = $('#location-gallery .slide.slick-active').find('.title').text();
    $('#location-gallery .gal-footer .copy').text(newCopy).removeClass('__transitioning');
    $('#location-gallery .gal-footer .counter .current').text($('#location-gallery .slide.slick-active').attr('data-slide-num'));
  }
  slideSizer();
  titleSizer();
  $('#location-gallery .slide').each(function(index,e){
    $(this).attr('data-slide-num', index+1);
    var container = $(this).find('.img-container');
    var img = $(this).find('img');
    $(container).css('background-image', 'url('+$(img).attr('src')+')')
  });

  //Init
  $('#location-gallery .slider').on('init', function(){
    $('#location-gallery .slide.slick-active').addClass('slide-activated');
    footerUpdate();
    setTimeout(function(){
      titleSizer();
    },100)
  });
  $('#location-gallery .slider').on('beforeChange', function(){
    $('#location-gallery .slide.slide-activated').removeClass('slide-activated');
    $('#location-gallery .gal-footer .copy').addClass('__transitioning');
  });
  $('#location-gallery .slider').on('afterChange', function(event,slick, currentSlide){

    $('#location-gallery .slide').removeClass('slide-activated');
    $('#location-gallery .slide[data-slick-index="'+currentSlide+'"]').addClass('slide-activated');
    footerUpdate();
    setTimeout(function(){
      titleSizer();
    },100)
  });


  $('#location-gallery .counter .all').text($('#location-gallery .slide').length);
  $('#location-gallery .slider').slick({
    arrows: false,

    speed: ts,

        centerMode: true,
        variableWidth: true,
        centerPadding: '0px',
        focusOnSelect: true,
        mobileFirst: true,
         slidesToShow: 1,
         responsive: [

           {
             breakpoint:dt,
             centerMode: false,
             variableWidth: false
           }
         ]

  });
  $(window).resize(function(){
    slideSizer();
    titleSizer();
  });
}
