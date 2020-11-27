function openNav() {
    var mySidebar = document.getElementById("mySidebar");
    mySidebar.style.width = "300px";
    document.getElementById("background").style.width = "100%";
    mySidebar.style.border = '1px solid black';
}

function closeNav() {
    var mySidebar = document.getElementById("mySidebar");
    mySidebar.style.width = "0";
    mySidebar.style.border = "none";
    document.getElementById("background").style.width = "0";
}
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
