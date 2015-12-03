function bwbFloorplanAnimation() {
  setTimeout(function(){
    $('.bwb-graphic .container img:first-child').addClass('__activated');
    setTimeout(function(){
        $('.bwb-graphic .container img:last-child').addClass('__activated');
    },ts);
  },ts/2);
}
