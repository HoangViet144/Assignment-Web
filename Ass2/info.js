// $(document).ready(function () {
//     $.ajax({
//         type: 'GET',
//         url: '/service/auth.php',
//         dataType: 'json',
//         data: {
//             login: true,
//             username: $("#username").val(),
//             password: $("#password").val()
//         },
//         success: function (data) {
//             if (data == "") window.location.href = 'index.php';
//         },
//     })
// })
$(document).ready(function () {
    $(".edit_contact").click(function () {
        var d = new Date();
        d.setTime(d.getTime() + (60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = 'editmode=true' + ";" + expires + ";path=/";
        window.location.href = 'contact.php'
    })
})