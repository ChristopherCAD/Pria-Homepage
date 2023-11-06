let slideIndexRvr = 1;
showSlidesRvr(slideIndexRvr);

function pageRvr(n) {
    showSlidesRvr(slideIndexRvr += n);
}

function showSlidesRvr(n) {
    let i;
    let slides = document.getElementsByClassName("hidden");
    if (n > slides.length) {slideIndexRvr = 1}
    if (n < 1) {slideIndexRvr = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndexRvr-1].style.display = "block";
}

// let slideIndex = 1;
// showSlides(slideIndex);

// function plusSlides(n) {
//     showSlides(slideIndex += n);
// }

// function currentSlide(n) {
//     showSlides(slideIndex = n);
// }

// function showSlides(n) {
//     let i;
//     let slides = document.getElementsByClassName("slidePage");
//     let dots = document.getElementsByClassName("dot");
//     if (n > slides.length) {slideIndex = 1}
//     if (n < 1) {slideIndex = slides.length}
//     for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }

//     for (i = 0; i < dots.length; i++) {
//         dots[i].className = dots[i].className.replace(" active", "");
//     }
//     slides[slideIndex-1].style.display = "block";
//     dots[slideIndex-1].className += " active";
// }