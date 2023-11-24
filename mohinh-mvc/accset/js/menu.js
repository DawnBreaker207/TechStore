const slides = document.querySelectorAll('.hero-slide');
let currentIndex = 0;

function showSlide(index) {
    const transformValue = -index * 100 + '%';
    slides.forEach((slide) => {
        slide.style.transform = 'translateX(' + transformValue + ')';
    });
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
}

// Chạy tự động
setInterval(nextSlide, 3000);

// Hiển thị slide đầu tiên
showSlide(currentIndex);


function $(element){
    const selectors = document.querySelectorAll(element);
    return selectors.length > 0 ? selectors[0] : selectors
}

// Menu
$('.user-block').addEventListener("click", function () {
    $('.user-option').classList.toggle('active');
})

//Brand
const slideNext = document.getElementById('slide-next');
const slidePre = document.getElementById('slide-pre');
const brandRow = document.querySelector(".brand-row-wrapper");
const slideCol = document.querySelectorAll(".brand-col");
let currentBrand = 0;

function slideShow(index) {
    const brandColWidth = slideCol[0].offsetWidth;
    const gap = 30;
    const transformValue= -(index * (brandColWidth + gap)) + 'px';
    slideCol.forEach((brand) => {
        brand.style.transform = 'translateX(' + transformValue + ')';
    });
}

function nextItem() {
    console.log("Next");
    currentBrand = (currentBrand + 1) % slideCol.length;
    slideShow(currentBrand);
}  function preItem() {
    console.log("Pre");
    currentBrand = (currentBrand - 1 + slideCol.length) % slideCol.length;
    slideShow(currentBrand);
}

slideNext.addEventListener("click", nextItem);
slidePre.addEventListener("click",preItem);

