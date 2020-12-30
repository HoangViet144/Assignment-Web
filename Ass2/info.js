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
    $('#adjustform').submit(function (e) {
        if ($("#display_password").val().length == 0 || $("#display_email").val().length == 0) {
            alert('mật khẩu và email không được rỗng')
            return
        }
        e.preventDefault()
        $.ajax({
            type: 'POST',
            url: '/service/auth.php',
            dataType: 'json',
            data: {
                adjust: true,
                username: $("#display_name").val(),
                password: $("#display_password").val(),
                email: $("#display_email").val()
            },
            success: function (data) {
                if (data == "") {
                    alert("Update successfully!");
                }
                else {
                   if (data == "Email exist") alert("Email exist");
                }
            },
        })
    })
})