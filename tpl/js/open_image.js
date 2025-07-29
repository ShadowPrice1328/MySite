document.getElementById('main-container').addEventListener('click', function(e) {
    let target = e.target;
    if (target.matches(".gallery-image img, .image-big, .image-row, .image-side")) {
        window.open(target.src, '_blank');
    }
});
