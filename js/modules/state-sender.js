function stateSender(id) {
  window.history.pushState(id,id,id);
  var gaSend = rootPath+id;
  //console.log(gaSend);
  ga('send', 'pageview', gaSend);
}
