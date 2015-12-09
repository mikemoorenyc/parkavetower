function lazyLoad() {
  var loadCount = $('html').find('img.lazy-load').length;
  var loaded = 0;
  $('img.lazy-load').each(function(){
    var img = $(this),
        realSrc = '',
        dtSrc = $(this).attr('data-dt'),
        mobSrc = $(this).attr('data-mob');
    function srcPick() {
      if(windoww < dt) {
        realSrc = mobSrc;
      } else {
        realSrc = dtSrc;
      }
      $(img).attr('src',realSrc);
    }
    $(img).one('load',function(){
      loaded++;
      
      if(loaded == loadCount) {
        imagesLoaded = true;
        console.log('all images loaded');
      }
    });
    srcPick();
    $(window).resize(function(){
      srcPick();
    })
  });
}
