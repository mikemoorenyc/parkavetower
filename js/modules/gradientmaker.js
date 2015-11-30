function backgroundGradient() {

  var stopString = '';
  var stopArray = [];
  $('.gradientmaker').each(function(){

    var blockTop = $(this).offset().top;
    var blockH = $(this).height();
    var blockM = blockTop + (blockH / 2);
    var blockB = blockTop + blockH;
    var stops = $(this).find('> .stops > hr');

    function positionValue(string) {
      if (string == 'top') {
        return blockTop;
      }
      if(string == 'middle') {
        return blockM;
      }
      if(string == 'bottom') {
        return blockB;
      }
    }
    $(stops).each(function(){

      var amount = $(this).data('amount'),
          direction = $(this).data('from'),
          position = positionValue($(this).data('position')),
          color = $(this).data('color');
      var operators = {
          'above': function(a, b) { return a - b },
          'below': function(a, b) { return a + b }
      };
      var stopPos = operators[direction](position, amount);
      var stop = {
        'color':color,
        'pos':stopPos
      };
      stopArray.push(stop);

    //  stopString += color+' '+stopPos+'px,';
    });
  });
  stopArray.sort(function(a, b) {
    a = a.pos;
    b = b.pos;
    return a<b ? -1 : a>b ? 1 : 0;
  });
  //console.log(stopArray);
  $(stopArray).each(function(index,e){
    var stop = stopArray[index];
    stopString += stop.color+' '+stop.pos+'px,';
  });

  $('body').css('background', 'linear-gradient(to bottom, #000 0px,'+stopString+'#000 100%)');
}
