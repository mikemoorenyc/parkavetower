function siteInit() {

  hashUrl = String(window.location.hash);


  if ('addEventListener' in document) {
      document.addEventListener('DOMContentLoaded', function() {
          FastClick.attach(document.body);
      }, false);
  }


  //GLOBALS
  if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
    mobileDetector = false;
  } else {
    mobileDetector = true;
  }

  //jQuery.scrollSpeed(100, 800);



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
  characterCounter();




  pageLoader();
  aspecter();


  lazyLoad();
  //scrollMagic();
  //TURN ON SKROLLR
  if(mobileDetector == false) {
    skroll = skrollr.init();
  }




  //Initialize Everything
  var initializeAll = setInterval(function(){
    if(cssLoaded == true && imagesLoaded == true) {
      clearInterval(initializeAll);
      initializer();

    }
  }, 10);


  $("header").headroom({
    "tolerance": 50,
    "offset": $("header").height()
  });

  $('html').addClass('_page-loaded');
  console.log('scripts loaded');
}
function initializer() {

  galleryMaker();
  viewMaker();
  aspecter();
  backgroundGradient();
  getScrollbarWidth();
  if(mobileDetector == false) {
    skroll.refresh();
  }

  if(!(Modernizr.touchevents)) {
    $('#amenities-gallery').parallax({
      calibrateX: false,
      calibrateY: true
    });
  }
  setTimeout(function(){
    $('html,body').scrollTop(0);
    if(hashUrl && hashUrl !== '#home') {

      linkMover(hashUrl);

    }
    $(window).scroll(function(){
      scrollMagic();
    });


    setTimeout(function(){

    },500)
  },500)


}

function getScrollbarWidth() {
    var outer = document.createElement("div");
    outer.style.visibility = "hidden";
    outer.style.width = "100px";
    outer.style.msOverflowStyle = "scrollbar"; // needed for WinJS apps

    document.body.appendChild(outer);

    var widthNoScroll = outer.offsetWidth;
    // force scrollbars
    outer.style.overflow = "scroll";

    // add innerdiv
    var inner = document.createElement("div");
    inner.style.width = "100%";
    outer.appendChild(inner);

    var widthWithScroll = inner.offsetWidth;

    // remove divs
    outer.parentNode.removeChild(outer);

    //return widthNoScroll - widthWithScroll;
    $('body').append('<style>html.__modal-opened body, html.__modal-opened header{ padding-right: '+(widthNoScroll - widthWithScroll)+'px }</style>');
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
