$('#mainNav > a, h1.logo a').click(function(){
  var linkPos = $(this).attr('href');
  linkPos = linkPos.replace('','');
  linkMover(linkPos);
  $('html').removeClass('__menu-opened');
  return false;
});
