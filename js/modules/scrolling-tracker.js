/*
function scrollingTracker() {
  var acceptableIds = [
    'contact',
    'workspace',
    'location',
    'amenities',
    'building',
    'home'
  ]
if($('html').hasClass('__menu-scrolling') == false){
  //console.log($(document).scrollTop());
  vtop = $(document).scrollTop();
  vbot = vtop + windowh;
  $("#content-wrapper > section").each(function(){
    //Check if in viewport
    var section = $(this);
    var
  });
}
}
scrollingTracker();
$(window).scroll(function(){
  //scrollingTracker();
});
*/
function positionCheck() {
  $('#content-wrapper > section').removeClass("in-viewport");
  $( '#content-wrapper > section:in-viewport( )' ).addClass('in-viewport');

  var posUpdate = $('#content-wrapper > section.in-viewport:first').data('anchor');
  //console.log(posUpdate);
  if($(window).scrollTop() + $(window).height() == $(document).height()) {
    posUpdate = $('#content-wrapper > section:last').data('anchor');
  }
  if(posUpdate !== currentPosition) {
    currentPosition = posUpdate;
    //console.log(currentPosition);
    //document.location.hash = currentPosition ;
    stateSender('#'+currentPosition);
  }

}
var currentPosition = '';
positionCheck();
$(window).scroll(function(){
if($('html').hasClass('__menu-scrolling') == false){
  positionCheck();
}

});
