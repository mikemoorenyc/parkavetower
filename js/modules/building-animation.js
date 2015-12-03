function buildingAnimation() {
  function elevatorAnimation() {
    var eleLoad = 1
    var eleLoop = setInterval(function(){
      if(eleLoad > 3) {
        clearInterval(eleLoop);
        return false;
      }
      $('.dt-elevation .e-'+eleLoad).addClass('__activated');


      eleLoad++;
    }, 250);

  }
  var floorCount = $('.dt-elevation .lights .floor').length;
  var floorActive = 1;
  var floorlight = setInterval(function(){
    if(floorActive > floorCount) {
      clearInterval(floorlight);
      elevatorAnimation();
      return false;
    }
    $('.dt-elevation .lights .fl-'+floorActive).addClass('__activated');
    floorActive++;
  },15);
}
