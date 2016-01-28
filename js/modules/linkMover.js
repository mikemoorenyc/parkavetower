function linkMover(id) {
  var navOff = $('header').height();
  var pos = id.replace('#','');
  var scrollTo = $('section[data-anchor="'+pos+'"]').offset().top;
  $('html').addClass('__menu-scrolling');
  stateSender(id);
  currentPosition = id;
  $('html, body').stop().animate({scrollTop:(scrollTo-navOff)}, ts, function(){
    setTimeout(function(){
      $('html').removeClass('__menu-scrolling');

    },500);
    setTimeout(function(){
      $('header').removeClass('headroom--unpinned');
    },50);
    $('header').removeClass('headroom--unpinned');


  });
}
