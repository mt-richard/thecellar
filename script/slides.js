var slideIndex = 0;
  showSlides();

  function showSlides() {
    var slides = document.getElementsByClassName("slide");
    for (var i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 2000); 
  }


  // home slide

  window.addEventListener('DOMContentLoaded', function() {
    var slideshow = document.getElementById('myDiv');
    var bgImage = './images/wpcontent/cup-829527_1280-1024x685.jpg';
    var gradientOverlay = 'linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4))';
   
    slideshow.style.backgroundImage = gradientOverlay + ', url(' + bgImage + ')';
    slideshow.style.backgroundImage = gradientOverlay + ', url(' + bgImage + ')';
 
    var images = [
        './images/wpcontent/cup-829527_1280-1024x685.jpg',
        './images/IMG_8942.jpg',
        './images/wpcontent/burger-g1ef7981ed_1920-1536x1024.jpg',
        './images/wpcontent/IMG_8964-1024x720.jpg',
        './images/wpcontent/cup-829527_1280-1024x685.jpg',
        './images/wpcontent/burger-g1ef7981ed_1920-1536x1024.jpg',
    ];
    var currentIndex = 0;

    function changeBackground() {
      slideshow.style.backgroundImage = gradientOverlay + ', url(' + images[currentIndex] + ')';
        currentIndex = (currentIndex + 1) % images.length;
    }

    setInterval(changeBackground, 3000); 

});



// slide for Coffe and supermarket


var openModalBtn = document.getElementById("openModal");
var modal = document.getElementById("myModal");
var closeModalBtn = document.getElementsByClassName("close")[0];
var slideshow = document.getElementById("slideshow");
var prevBtn = document.getElementById("prevBtn");
var nextBtn = document.getElementById("nextBtn");
var currentSlide = 0;

openModalBtn.addEventListener("click", function() {
  modal.style.display = "block";
  showSlide(currentSlide);
});

closeModalBtn.addEventListener("click", function() {
  modal.style.display = "none";
});

window.addEventListener("click", function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
});

prevBtn.addEventListener("click", function() {
  showSlide(currentSlide - 1);
});

nextBtn.addEventListener("click", function() {
  showSlide(currentSlide + 1);
});

function showSlide(index) {
  var slides = slideshow.getElementsByTagName("img");
  var totalSlides = slides.length;

  if (index < 0) {
    index = totalSlides - 1;
  } else if (index >= totalSlides) {
    index = 0;
  }

  for (var i = 0; i < totalSlides; i++) {
    slides[i].style.display = "none";
  }

  slides[index].style.display = "block";
  currentSlide = index;
}


// Live search

