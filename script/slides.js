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
    var bgImage = 'images/IMG_8940-1024x720.jpg';
    slideshow.style.backgroundImage = 'url(' + bgImage + ')';
    var images = [
        './images/coffee-2242213_1280-1024x682.jpg',
        './images/IMG_8942.jpg',
        './images/wpcontent/burger-g1ef7981ed_1920-1536x1024.jpg',
        './images/wpcontent/IMG_8964-1024x720.jpg',
        './images/wpcontent/cup-829527_1280-1024x685.jpg',
        './images/wpcontent/burger-g1ef7981ed_1920-1536x1024.jpg',
    ];
    var currentIndex = 0;

    function changeBackground() {
        slideshow.style.backgroundImage = 'url(' + images[currentIndex] + ')';
        currentIndex = (currentIndex + 1) % images.length;
    }

    setInterval(changeBackground, 3000); 
});


// about us slides
