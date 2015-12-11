function cardstackMaker() {
  $('.cardStack').each(function(){
    var stack = $(this);
    var cards = $(stack).find('.card img');
    var cardLength = cards.length;
    var cardsLoaded = 0;
    var slickSettings = {
      nextArrow: '<button type="button" class="slick-next"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#direction202"></use></svg></button>',
      prevArrow: '<button type="button" class="slick-prev"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#direction202"></use></svg></button>',
      speed: ts,
      adaptiveHeight: true
    }
    $(stack).on('init',function(){
      
      $(stack).addClass('__loaded');
    });
    $(cards).each(function(){
      $(this).one('load',function(){
        cardsLoaded++;
        if(cardsLoaded == 1) {
          $(stack).slick(slickSettings);
        }
        if(cardsLoaded == cardLength) {
          //$(stack).slick('unslick');

        }
      });
    });
  });
}
