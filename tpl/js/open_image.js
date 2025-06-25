document.querySelectorAll(".gallery-image img, .image-big, .image-row, .image-side").forEach(img => {
    img.addEventListener("click", function () {
        window.open(this.src, '_blank');
    });
});