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
    $(".edit_pricing").click(function () {
        window.location.href = 'pricing_admin.php'
    })
    $(".edit_product").click(function () {
        window.location.href = 'example_admin.php'
    })
    $(".edit_member").click(function () {
        window.location.href = 'management.php'
    })
    $('#adjustform').submit(function (e) {
        if ($("#display_password").val().length == 0 || $("#display_email").val().length == 0) {
            alert('mật khẩu và email không được rỗng')
            return
        }
        if ($("#display_password").val().length > 35 || $("#display_password").val().length < 4) {
            alert('Mật khẩu phải nằm trong khoảng 4-35')
            return
        }
        if ($('#display_fullname').val().length > 35) {
            alert('Họ tên phải nằm trong khoảng 0-35')
        }
        var date_time = document.getElementById("display_dob").value;
        var sex = null;
        if (document.getElementById("male").checked == true) {
            sex = document.getElementById("male").value;
        }
        else if (document.getElementById("female").checked == true) {
            sex = document.getElementById("female").value;
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
                email: $("#display_email").val(),
                fullname: $("#display_fullname").val(),
                dob: date_time,
                sex: sex
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