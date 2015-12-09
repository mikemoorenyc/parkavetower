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

    $(this).panzoom({
      disableZoom: true,
      contain:'invert'
      ,startTransform: initTrans
    });

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
