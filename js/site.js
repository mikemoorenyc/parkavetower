function siteInit() {
  if ('addEventListener' in document) {
      document.addEventListener('DOMContentLoaded', function() {
          FastClick.attach(document.body);
      }, false);
  }


  //GLOBALS
  ts = 500,
  tab = 401,
  dt = 801;
  windoww = $(window).width();
  windowh = $(window).height();
  imagesLoaded = false;
  cssLoaded = false;
  orientationClass();
  baseTitle = $("head title").text();
  $(window).resize(function(){
    windoww = $(window).width();
    windowh = $(window).height();
    orientationClass();
  });

  //theHistory();


  //CHECK IF CSS IS LOADED
  var thechecker = setInterval(function(){
    var ztest = $('#css-checker').css('height');

    if(ztest == '1px') {
      cssLoaded = true;
      clearInterval(thechecker);
      console.log('css loaded');
    }
  }, 10);

  //MENU
  $('a.menu-open').click(function(){
    $('html').addClass('__menu-opened');
    return false;
  });
  $('a.menu-close').click(function(){
    $('html').removeClass('__menu-opened');
    return false;
  });

  //HEADER PADDING
  $('#content-wrapper').css('padding-top', $("header").height()+'px');

  $(window).resize(function(){
    $('#content-wrapper').css('padding-top', ($("header").height())+'px');
  });


  function heroImage() {

    var hi = $('#hero-image');
    var img = $(hi).find('img');
    var theSrc;
    $(img).load(function(){
      if($('html').hasClass('__assets-loaded') == false) {
        $('#load-cover').fadeOut(ts);
      }
      $('html').addClass('__assets-loaded');
      $(hi).css('background-image',
        'url('+$(img).attr('src')+')'
      );
    });
    srcPicker();
    function srcPicker() {
      if(windoww <dt) {
        theSrc = $(img).data('mob');
      } else {
        theSrc = $(img).data('dt');
      }
      $(img).attr('src',theSrc);
    }
    $(window).resize(function(){
      srcPicker();
    });

  }
  heroImage();
  backgroundGradient();




  pageLoader();
  aspecter();


  lazyLoad();

  //Initialize Everything
  var initializeAll = setInterval(function(){
    if(cssLoaded == true && imagesLoaded == true) {
      clearInterval(initializeAll);
      initializer();
    }
  }, 10);

  var myElement = document.querySelector("header");
  var headroom  = new Headroom(myElement);
  headroom.init();

  $('html').addClass('_page-loaded');
  console.log('scripts loaded');
}
function initializer() {
  galleryMaker();
  viewMaker();
  aspecter();
  backgroundGradient();
}

$(window).resize(function(){
  backgroundGradient();
});





function orientationClass() {
  if (windoww >= windowh) {
    $('html').addClass('_orientation-landscape').removeClass('_orientation-portrait');
  } else {
    $('html').removeClass('_orientation-landscape').addClass('_orientation-portrait');
  }
}



//DON'T TOUCH
siteScriptsLoaded = true;
siteInit();
