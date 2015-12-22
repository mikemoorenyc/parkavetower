function stateSender(id) {
  if(history.pushState) {
    window.history.pushState(id,id,id);
  }
  //NAV ACTIVE
  var activator = id.replace('#','');
  $('nav a').removeClass('active');
  $('nav a.'+activator).addClass('active');

  var gaSend = rootPath+id;
  //console.log(gaSend);
  ga('send', 'pageview', gaSend);
}
