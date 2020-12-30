$(document).ready(function () {
    $('#registerform').submit(function (e) {
        if ($("#username").val().length == 0 || $("#password").val().length == 0 || $("#email").val().length == 0) {
            alert('Tên đăng nhập, mật khẩu và email không được rỗng')
            return
        }
        if ($("#username").val().length >= 10 || $("#username").val().length <= 2) {
            alert('Tên đăng nhập phải nằm trong khoảng 2-10')
            return
        }
        if ($("#password").val().length > 35 || $("#password").val().length < 4) {
            alert('Mật khẩu phải nằm trong khoảng 4-35')
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
                if (data == "") {
                    alert("Register successfully!");
                    window.location.href = 'login.php';
                }
                else {
                    if (data == "No space in username!") alert("No space in username!");
                    else if (data == "No space in password!") alert("No space in password!");
                    else if (data == "No space in email!") alert("No space in email!");
                    else if (data == "Email exist") alert("Email exist");
                    else alert("Username exist");
                }
            },
        })
    })
})