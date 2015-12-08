function letterRepeater() {
    $('.letter-holder').each(function(){

      var activated = 0;
      var lLength = $(this).find('> div').length;
      var divs = $(this).find('> div');
    //  console.log(lLength);
      var interval = 900 / lLength;

      var turner = setInterval(function(){
        if(activated == lLength) {
          setTimeout(function(){
            $(divs).removeClass('activated');
          },2000)
          clearInterval(turner);
        } else {
          $(divs[activated]).addClass('activated');
          activated++;
        }
      },interval);
    });
  }
