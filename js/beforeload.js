var overlay = document.getElementsByClassName("content");

window.addEventListener('beforeload', function () {
    overlay.style.display = 'none';
})