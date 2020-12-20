var overlay = document.getElementById("load");
var block1 = document.getElementById("remove1");
var block2 = document.getElementById("remove2");


window.addEventListener('load', function () {
    overlay.style.display = 'none';
    block1.setAttribute("style", "display: block;")
    block2.setAttribute("style", "display: block;")
});


