function characterCounter() {
  $('.copy-container').each(function(){
    var container = $(this),
        p = $(this).find('p'),
        string = '';
    $(p).each(function(){
      string += $(this).text();
    });
    if(string.length <=200) {
      $(container).addClass("l-605");
    }
    if(string.length > 250 && string.length <=300) {
      $(container).addClass('l-775');
    }
    if(string.length > 300 && string.length <=400) {
      $(container).addClass('l-820');
    }
    if(string.length >400) {
      $(container).addClass('l-860');
    }

  });
}
