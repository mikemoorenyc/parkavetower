$('.hilights > a, .poplinks li a').mouseenter(function(){
  $('.hilights > a, .poplinks li a').removeClass('__hovering');
  var theclass = $(this).attr('class');
  $('.hilights > a.'+theclass+', .poplinks li a.'+theclass).addClass('__hovering');
});
$('.hilights > a, .poplinks li a').mouseleave(function(){
  $('.hilights > a, .poplinks li a').removeClass('__hovering');
});


$('.hilights > a, .poplinks li a').click(function(){
  var theclass = $(this).attr('class');
  theclass = theclass.replace(' __hovering','');
  var modalContent = $('#modal-content .'+theclass);
  //MAKE the modal
  $('#workspace-modal .words h2').html($(modalContent).find('.title').html());
  $('#workspace-modal .words .copy').html($(modalContent).find('.copy').html());
  $('#workspace-modal .slider').empty();

  //ADD THE IMAGES
  var images = $(modalContent).find('.images hr');
  $(images).each(function(){
    var src = $(this).data('src');
    $("#workspace-modal .slider").append('<div class="slide"><div class="img-container"><img data-src="'+src+'" /></div></div>');
  });

  //LOAD THE IMAGES
  var imgCount = $('#workspace-modal .slide img').length;
  var imgLoaded = 0;
  $('#workspace-modal .slide img').each(function(){
    var theImg = $(this);
    $(theImg).load(function(){
      imgLoaded++;
      if(imgCount == imgLoaded) {
        fullyLoaded();
      }
    });
    $(theImg).attr('src', $(theImg).attr('data-src'));
  });
  $('#workspace-modal').fadeIn(ts);
  $('html').addClass('__modal-opened');
  function fullyLoaded(){
    $('#workspace-modal .slider').slick({
      nextArrow: '<button type="button" class="slick-next"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#direction202"></use></svg></button>',
      prevArrow: '<button type="button" class="slick-prev"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#direction202"></use></svg></button>'
    });
    $('#workspace-modal').addClass('images-loaded');
  }


  return false;
});

$('#workspace-modal .modal-close').click(function(){
  $('#workspace-modal').fadeOut(ts,function(){
    $('#workspace-modal').removeClass('images-loaded');
    $('#workspace-modal .slider').slick('unslick');
    $('html').removeClass('__modal-opened');
  });
  setTimeout(function(){

  },ts);
  return false;
});
