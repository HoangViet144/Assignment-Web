$(document).ready(function () {
    $('#registerform').submit(function (e) {
        if ($("#username").val().length == 0 || $("#password").val().length == 0 || $("#email").val().length == 0) {
            alert('Tên đăng nhập, mật khẩu và email không được rỗng')
            return
        }
        e.preventDefault()
        $.ajax({
            type: 'POST',
            url: '/service/auth.php',
            dataType: 'json',
            data: {
                register: true,
                username: $("#username").val(),
                password: $("#password").val(),
                email: $("#email").val()
            },
            success: function (data) {
                if (data == "") window.location.href = 'login.php';
            },
        })
    })
})