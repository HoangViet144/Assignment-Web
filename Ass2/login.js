$(document).ready(function () {
    $('#loginform').submit(function (e) {
        if ($("#username").val().length == 0 || $("#password").val().length == 0) {
            alert('Tên đăng nhập và mật khẩu không được rỗng')
            return
        }
        e.preventDefault()
        $.ajax({
            type: 'POST',
            url: '/service/auth.php',
            dataType: 'json',
            data: {
                login: true,
                username: $("#username").val(),
                password: $("#password").val()
            },
            success: function (data) {
                if (data == "") window.location.href = 'index.php';
            },
        })
    })
})