$('#mainNav > a').click(function(){
  var linkPos = $(this).attr('href');

  linkMover(linkPos);
  $('html').removeClass('__menu-opened');
  return false;
});
function linkMover(id) {
  var navOff = $('header').height();
  var scrollTo = $(''+id).offset().top;
  
  $('html, body').stop().animate({scrollTop:(scrollTo-navOff)}, ts);
}
