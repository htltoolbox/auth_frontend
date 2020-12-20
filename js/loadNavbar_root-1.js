$(function () {
    $("#navbar").load("../allSiteElements/Navbar/menu-1.html");
});

$(function () {
    $("#footer").load("../allSiteElements/Footer/footer-1.html");
});

function open() {
    document.getElementById("main").style.marginLeft = "25%";
    document.getElementById("mySidebar").style.width = "25%";
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("openNav").style.display = 'none';
}

function close() {
    document.getElementById("main").style.marginLeft = "0%";
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("openNav").style.display = "inline-block";
}