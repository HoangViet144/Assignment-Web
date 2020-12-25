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

$(document).ready(function () {
    $('#section2 .item').click(function () {
        $('.active').removeClass('active');
        $(this).addClass('active');
        $('.examples').addClass('hide');
        var elt = $(this).attr("id");
        $("." + elt).removeClass('hide');
    });
})
var x = document.getElementById("my-table-basic");
var y = document.getElementById("my-table-shopify");
var z = document.getElementById("my-table-advance")

function myFunction1() {
    x.style.display = "block";
    y.style.display = "none";
    z.style.display = "none";
}

function myFunction2() {
    y.style.display = "block";
    x.style.display = "none";
    z.style.display = "none";
}

function myFunction3() {
    z.style.display = "block";
    y.style.display = "none";
    x.style.display = "none";
}