document.querySelectorAll(".gallery-image img, .image-big").forEach(img => {
    img.addEventListener("click", function () {
        window.open(this.src, '_blank');
    });
});