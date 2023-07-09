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
    var bgImage = 'images/burger-g1ef7981ed_1920-150x150.jpg';
    slideshow.style.backgroundImage = 'url(' + bgImage + ')';
    var images = [
        './images/footer1.jpg',
        './images/IMG_8942.jpg',
        './images/burger-g1ef7981ed_1920-150x150.jpg'
    ];
    var currentIndex = 0;

    function changeBackground() {
        slideshow.style.backgroundImage = 'url(' + images[currentIndex] + ')';
        currentIndex = (currentIndex + 1) % images.length;
    }

    setInterval(changeBackground, 3000); 
});
