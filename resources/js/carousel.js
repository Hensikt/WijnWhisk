var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n)
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("carousel--slide");
    var text   = document.getElementsByClassName("text");
    if(n > slides.length) {slideIndex = 1}
    if(n < 1)             {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++){
        slides[i].style.display = "none";
    }
    for (i = 0; i < text.length; i++){
        text[i].className = text[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    text[slideIndex-1].className += " active";
}