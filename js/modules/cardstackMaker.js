function cardstackMaker() {
  $('.cardStack').each(function(){
    var stack = $(this);
    var cards = $(stack).find('.card img');
    var cardLength = cards.length;
    var cardsLoaded = 0;
    var slickSettings = {
      arrows: false,
      speed: ts
    }
    $(cards).each(function(){
      $(this).one('load',function(){
        cardsLoaded++;
        if(cardsLoaded == 1) {
          $(stack).slick(slickSettings).addClass('__loaded')
        }
        if(cardsLoaded == cardLength) {
          //$(stack).slick('unslick');

        }
      });
    });
  });
}
