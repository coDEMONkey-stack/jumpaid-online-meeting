function zoomIn(event) {
  var pre = document.getElementById("card");
  pre.style.visibility = "visible";
  if ($('#zoom').is(':hover')) {
        var img = document.getElementById("card");
		pre.style.backgroundImage = "url('flyer.jpg')";
    }
  var posX = event.offsetX;
  var posY = event.offsetY;
  pre.style.backgroundPosition=(-posX*2.5)+"px "+(-posY*5.5)+"px";

}

function zoomOut() {
  var pre = document.getElementById("card");
  pre.style.visibility = "hidden";
}