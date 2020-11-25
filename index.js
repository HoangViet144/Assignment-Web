function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("background").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("background").style.width = "0";
}
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
