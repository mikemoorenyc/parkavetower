$('#mainNav > a, h1.logo a').click(function(){
  var linkPos = $(this).attr('href');
  linkPos = linkPos.replace('','');
  linkMover(linkPos);
  if($('html').hasClass('__menu-opened') == true) {
    $('html').removeClass('__menu-opened');
    $('.navigation-wrapper').fadeOut(ts);
  }
  return false;
});
