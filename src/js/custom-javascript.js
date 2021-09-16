// Add your JS customizations here

let slidePosition = 0;
const slides = document.getElementsByClassName("testimonials-card");
const totalSlides = slides.length;

document.getElementById("button-next").addEventListener("click", function() {
    moveToNextSlide();
});
document.getElementById("button-prev").addEventListener("click", function() {
    moveToPrevSlide();
});

function updateSlidePosition() {
    for (let slide of slides) {
        slide.classList.remove('visible');
        slide.classList.add('hidden');
    }
    slides[slidePosition].classList.add("visible");
}

function moveToNextSlide() {
    if (slidePosition == totalSlides - 1) {
        slidePosition = 0;
    } else {
        slidePosition++;
    }
    updateSlidePosition();
}

function moveToPrevSlide() {
    if (slidePosition == 0) {
        slidePosition = totalSlides - 1;
    } else {
        slidePosition--;
    }
    updateSlidePosition();
}