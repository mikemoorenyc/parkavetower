$('.hilights > a, .poplinks li a, .avail-list a').mouseenter(function(){
  $('.hilights > a, .poplinks li a, .avail-list a').removeClass('__hovering');
  var theclass = $(this).attr('class');
  $('.hilights > a.'+theclass+', .poplinks li a.'+theclass).addClass('__hovering');
});
$('.hilights > a, .poplinks li a, .avail-list a').mouseleave(function(){
  $('.hilights > a, .poplinks li a').removeClass('__hovering');
});


$('.hilights > a, .poplinks li a, .avail-list a').click(function(e){
  e.preventDefault();

  var theclass = $(this).attr('class');
  theclass = theclass.replace(' __hovering','');
  var modalContent = $('#modal-content .'+theclass);
  //MAKE the modal
  //$('#workspace-modal .words h2').html($(modalContent).find('.title').html());
  //$('#workspace-modal .words .copy').html($(modalContent).find('.copy').html());
  $('#workspace-modal .slider').empty();

  //ADD THE IMAGES
  var images = $(modalContent).find('.images .single-img');
  $(images).each(function(){
    var src = $(this).find('hr').data('src');
    var title = $(this).find('.title').html();
    var copy = $(this).find('.copy').html();
    $("#workspace-modal .slider").append('<div class="slide"><span class="copy hide">'+copy+'</span><span class="title hide">'+title+'</span><div class="img-container"><img data-src="'+src+'" /></div></div>');
  });

  //LOAD THE IMAGES
  var imgCount = $('#workspace-modal .slide img').length;
  var imgLoaded = 0;
  $('#workspace-modal .slide img').each(function(){
    var theImg = $(this);
    $(theImg).one('load',function(){
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
    function copyUpdate() {
      var copy = $('#workspace-modal .slick-active').find('.copy').html();
      var title = $('#workspace-modal .slick-active').find('.title').html();
      $('#workspace-modal .words h2').html(title);
      $('#workspace-modal .words .copy').html(copy);
      $('#workspace-modal .words').removeClass('__changing');
    }
    $('#workspace-modal .slider').on('init',function(){
      copyUpdate();
    });
    $('#workspace-modal .slider').slick({
      duration: ts,
      nextArrow: '<button type="button" class="slick-next"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#direction202"></use></svg></button>',
      prevArrow: '<button type="button" class="slick-prev"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#direction202"></use></svg></button>'
    });
    $('#workspace-modal .slider').on('beforeChange',function(){
      $('#workspace-modal .words').addClass('__changing');
    });
    $('#workspace-modal .slider').on('afterChange',function(event, slick, currentSlide, nextSlide){
      copyUpdate();
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
