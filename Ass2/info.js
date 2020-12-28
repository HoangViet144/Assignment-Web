$(document).ready(function () {
    $.ajax({
        type: 'GET',
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