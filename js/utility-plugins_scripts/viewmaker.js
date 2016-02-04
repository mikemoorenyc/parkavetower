function viewMaker(){
  $('#penthouse-gallery .slider').slick({
    arrows: false,
    adaptiveHeight: true,
    infinite: false,
    swipe: false,
    speed: ts
  });
}
$('#penthouse-gallery .btns a').click(function(){
  $('#penthouse-gallery .btns a').removeClass('active');
  $(this).addClass('active');
  var index = $(this).data('index');
  $('#penthouse-gallery .slider').slick('slickGoTo', index);
  return false;
});
