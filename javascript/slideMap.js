/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//sets the display of maps in the block
function openModal() {
    document.getElementById('myMaps').style.display = "block";
}

//sets display to none 
function closeModal() {
    document.getElementById('myMaps').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

//sets one slide next to another
function plusSlides(n) {
    showSlides(slideIndex += n);
}

//function to show current slide
function currentSlide(n) {
    showSlides(slideIndex = n);
}

//function to show slides
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;
}

