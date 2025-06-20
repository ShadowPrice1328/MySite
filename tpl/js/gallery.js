const images = document.querySelectorAll(".gallery-image");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");

let currentIndex = 0;
const visibleCount = 5;

function showImages() {
    images.forEach((img, i) => {
        img.style.display = (i >= currentIndex && i < currentIndex + visibleCount) ? 'table-cell' : 'none';
    });
}

prevBtn.addEventListener("click", () => {
    if (currentIndex - visibleCount >= 0) {
        currentIndex -= visibleCount;
        showImages();
    }
});

nextBtn.addEventListener("click", () => {
    if (currentIndex + visibleCount < images.length) {
        currentIndex += visibleCount;
        showImages();
    }
});

showImages();