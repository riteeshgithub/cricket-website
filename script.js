
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slide");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}
setInterval(function() {plusSlides(1)}, 4000);

function landscapeMode() {
  if (screen.orientation) {
    screen.orientation.lock("landscape");
  } else if (screen.mozOrientation) {
    screen.mozOrientation.lock("landscape");
  } else if (screen.msOrientation) {
    screen.msOrientation.lock("landscape");
  }
}

// Function to switch back to portrait mode
function portraitMode() {
  if (screen.orientation) {
    screen.orientation.unlock();
  } else if (screen.mozOrientation) {
    screen.mozOrientation.unlock();
  } else if (screen.msOrientation) {
    screen.msOrientation.unlock();
  }
}

// Get all the video elements on the page
let videos = document.getElementsByTagName("video");

  function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }


