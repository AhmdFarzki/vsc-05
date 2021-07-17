var slides = document.getElementsByClassName("mySlides");
var next = document.getElementById("next");
var prev = document.getElementById("prev");

var slideIndex = 1;

showDivs(slideIndex);

function plusDivs(n) {
  var newIndex = slideIndex += n;

  handleDisabled(newIndex);

  showDivs(newIndex);
}

function showDivs(n) {
  var i;
  if (n > slides.length) {
    slideIndex = 1
  }
  if (n < 1) {
    slideIndex = slides.length
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex - 1].style.display = "block";
}

function handleDisabled(newIndex) {
  prev.disabled = false;
  next.disabled = false;

  if (newIndex === slides.length) {
    next.disabled = true;
  } else if (newIndex === 1) {
    prev.disabled = true;
  }
}