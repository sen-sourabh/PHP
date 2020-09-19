
/*############################################ STICKY HEADER/NAVBAR #################################*/
window.onscroll = function() {myFunction()};

var myTopnav = document.getElementById("myTopnav");
var sticky = myTopnav.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    myTopnav.classList.add("sticky")
  } else {
    myTopnav.classList.remove("sticky");
  }
}
/*############################################ RESPONSIVE HEADER #################################*/
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */

function myMenuFunc() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
