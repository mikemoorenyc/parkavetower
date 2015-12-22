$('a.generic-module-popper').click(function(e){
  e.preventDefault();
  var functionRunner = $(this).attr('data-function');
  var theObj = $(this);
  if (typeof window[functionRunner] == 'function') {

    window[functionRunner](theObj);
  } else {

  }


  return false;
});

$('#generic-modal .modal-close').click(function(){
  $('#generic-modal').fadeOut(ts,function(){
    $('#generic-modal').attr('class','');
    $('#generic-modal .container').empty();
    $('#generic-modal .container').unbind();

    $('html').removeClass('__modal-opened');
  });
  return false;
});


function genericFadeIn() {
  $('#generic-modal').fadeIn(ts);
  $('html').addClass('__modal-opened');
}
function genericFullyLoaded() {
  $('#generic-modal').addClass('loaded');
}

function genericModulePanZoom(theLink) {
  $('#generic-modal').addClass('pan-zoom');
  var imgToLoad =$(theLink).attr('href');
  $('#generic-modal .container').append('<img data-src="'+imgToLoad+'" />');
  $('#generic-modal .container').append('<div class="map-interactor" ></div>')
  genericFadeIn();
  $('#generic-modal .container img:first').one('load', function(){
    //MAKE THE PANZOOM
    if(retina == true) {
      var width = $(this).width();
      $(this).width(width / 2);
    }
    //INITIAL TRANSFORM
    var imgw = $(this).width();
    var imgh = $(this).height();
    var wdif = ((windoww-imgw)/2);
    var hdif = ((windowh-imgh)/2);
    var initTrans = 'translate('+wdif+'px,'+hdif+'px)';


/*
    $(this).panzoom({
      disableZoom: true

      ,startTransform: initTrans
    });
    */

    //MIKE'S CUSTOM DRAG FUNCTION
    var imgX = wdif,
        imgY = hdif,
        thresholdX = $('#generic-modal').width()-imgw,
        thresholdY = $('#generic-modal').height()-imgh,
        theImg = $(this);
    $(this).css({
      'transform' : initTrans,
      '-webkit-transform': initTrans,
      '-ms-transform': initTrans
    });
    if(mobileDetector == false) {
      var dragState = false;
      $(document).on('mousedown','#generic-modal .map-interactor',function(event){
        dragState = true;
        cursorX = event.clientX,
        cursorY = event.clientY;
      }).on('mouseup','#generic-modal .map-interactor',function(){
        dragState = false;
      });
      //CURSOR VARIABLES
      var cursorX = 0;
      var cursorY = 0;
      $(document).on('mousemove','#generic-modal .map-interactor',function(event){

        if(dragState === true) {
          positionFinder(event);

        }
        cursorX = event.clientX;
        cursorY = event.clientY;

      });
    } else {
      var dragState = false;
      //CURSOR VARIABLES
      var cursorX = 0;
      var cursorY = 0;

      $(document).on('vmousedown',"#generic-modal .map-interactor", function(event){
        dragState = true;
        cursorX = event.clientX;
        cursorY = event.clientY;


      }).on('vmouseup',"#generic-modal .map-interactor", function(){
        dragState = false;
        cursorX = 0;
        cursorY = 0;
      });
      $( document ).on ( "vmousemove", "#generic-modal .map-interactor", function(event) {
        if(dragState === true) {
          positionFinder(event);

        }
        cursorX = event.clientX;
        cursorY = event.clientY;
      });
    }

    function positionFinder(event) {
      //console.log(event.pageX - cursorX);
      var xDif = event.clientX - cursorX,
          yDif = event.clientY - cursorY,
          newPosX = imgX + xDif,
          newPosY = imgY + yDif;
      if(newPosX <1 && newPosX >= thresholdX) {
        imgX = newPosX
      }
      if(newPosY <1 && newPosY >= thresholdY) {
        imgY = newPosY
      }
      var trans = 'translate('+imgX+'px,'+imgY+'px)';
      $(theImg).css({
        'transform' : trans,
        '-webkit-transform': trans,
        '-ms-transform': trans
      });
    //  $(theImg).panzoom("pan", imgX, imgY, { relative: false})

    }


    genericFullyLoaded();
  });
  $('#generic-modal .container img:first').attr('src', $('#generic-modal .container img:first').attr('data-src'));
}

function genericModuleImage(theLink) {
  $('#generic-modal').addClass('single-image');
  var imgToLoad = $(theLink).attr('href'),
      modalContainer = '#generic-modal .container';


  //Insert New Image
  $(modalContainer).append('<img data-src="'+imgToLoad+'" />');
  genericFadeIn();

  //Create Load Listener
  $(modalContainer+' img:first').one('load', function(){
    genericFullyLoaded();
  });
  //LoaD the image
  $(modalContainer+' img:first').attr('src', $(modalContainer+' img:first').attr('data-src'));
}
