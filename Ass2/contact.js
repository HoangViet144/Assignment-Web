$(document).ready(function () {
    var cookie = document.cookie
    cookie = cookie.split('; ');
    var result = {};
    for (var i = 0; i < cookie.length; i++) {
        var cur = cookie[i].split('=');
        result[cur[0]] = cur[1];
    }
    var canEdit = false
    if (('editmode' in result) && result['editmode']) {
        canEdit = true
    }
    $.ajax({
        type: 'GET',
        url: './service/contact.php',
        dataType: 'json',
        success: function (data) {
            var tmp = `<th scope="row" colspan="2" style="font-size: 30px" id="article">
            <span id="article_content">${data.article}</span>`
            if (canEdit) tmp += `<br/>
            <button class='btn edit X_btn' id='edit_article'>Sửa</button>
            <button class='btn del X_btn' id='del_article'>Xóa</button>
            </th>`
            else tmp += `</th>`
            $('#article').replaceWith(tmp)
            tmp = `<td id='content'>
            <span id='content_content'>${data.content}</span>`
            if (canEdit) tmp += `<br/>
            <button class='btn edit X_btn' id='edit_content'>Sửa</button>
            <button class='btn del X_btn' id='del_content'>Xóa</button>
            </td>`
            else tmp += `</td>`
            $('#content').replaceWith(tmp)
            tmp = `<p id='companyname'>
            <span id='companyname_content'>${data.companyname}</span>`
            if (canEdit) tmp += `<br/>
            <button class='btn edit X_btn' id='edit_companyname'>Sửa</button>
            <button class='btn del X_btn' id='del_companyname'>Xóa</button>
            </p>`
            else tmp += `</p>`
            $('#companyname').replaceWith(tmp)
            tmp = `<p id='taxnumber'>
            Mã số thuế: <span id='taxnumber_content'>${data.taxnumber}</span>`
            if (canEdit) tmp += `<br/>
            <button class='btn edit X_btn' id='edit_taxnumber'>Sửa</button>
            <button class='btn del X_btn' id='del_taxnumber'>Xóa</button>
            </p>`
            else tmp += `</p>`
            $('#taxnumber').replaceWith(tmp)
            tmp = `<p id='companyaddr'>
            <i class="fas fa-map-marker-alt"></i> 
            <span id='companyaddr_content'>${data.companyaddr}</span>`
            if (canEdit) tmp += `<br/>
                <button class='btn edit X_btn' id='edit_companyaddr'>Sửa</button>
                <button class='btn del X_btn' id='del_companyaddr'>Xóa</button>
            </p>`
            else tmp += `</p>`
            $('#companyaddr').replaceWith(tmp)
            tmp = `<li class="phone" id='phone'>
            <p><i class="fa fa-phone"></i> 
            <span id='phone_content'>${data.phone}</span>`
            if (canEdit) tmp += ` <br/>
                <button class='btn edit X_btn' id='edit_phone'>Sửa</button>
                <button class='btn del X_btn' id='del_phone'>Xóa</button>
                </p>
            </li>`
            else tmp += "</p></li>"
            $('#phone').replaceWith(tmp)
            tmp = `<li class="mail" id='mail'>
            <p><i class="fa fa-envelope"></i>
            <span id='mail_content'> ${data.mail}</span>`
            if (canEdit) tmp += `<br/>
                <button class='btn edit X_btn' id='edit_mail'>Sửa</button>
                <button class='btn del X_btn' id='del_mail'>Xóa</button>
                </p>
            </li>`
            else tmp += "</p></li>"
            $('#mail').replaceWith(tmp)
            tmp = `<li class="website" id='web'>
            <p><i class="fa fa-globe"></i>
            <span id='web_content'>${data.web}</span>`
            if (canEdit) tmp += `<br/>
                <button class='btn edit X_btn' id='edit_web'>Sửa</button>
                <button class='btn del X_btn' id='del_web'>Xóa</button>
                </p>
            </li>`
            else tmp += "</p></li>"
            $('#web').replaceWith(tmp)
            var basicEle = ['web', 'mail', 'phone', 'taxnumber', 'companyname', 'content', 'article', 'companyaddr']
            for (var fieldname in data) {
                if (!basicEle.includes(fieldname)) {
                    var tmp = `<li  id='${fieldname}'>
                        <p>${fieldname}: <span id='${fieldname}_content'> ${data[fieldname]}</span>`
                    if (canEdit) tmp += `<br/>
                        <button class='btn edit X_btn' id='edit_${fieldname}'>Sửa</button>
                        <button class='btn del X_btn' id='del_${fieldname}'>Xóa</button>
                        </p>
                    </li>`
                    else tmp += "</p></li>"
                    $('#content_list').append(tmp)
                }
            }
            if (canEdit) {
                $('#content_list').append(`
                <div id='new_fieldname_content'>
                    <div>Tên trường(field):</div>
                    <div><textarea class='X_content' id='new_fieldname'></textarea></div>
                    <div>Nội dung:</div>
                    <div><textarea class='X_content' id='new_content'></textarea></div>
                    <div><button class='X_btn' id='newInfor'>Thêm</button></div>
                </div>
                `)
            }

        }
    })

    $.ajax({
        type: 'GET',
        url: '/service/post.php',
        dataType: 'json',
        data: {
            getall: true,
        },
        success: function (data) {
            var posts = {}
            for (var post of data) {
                if (post.postID == -1) posts[post.id] = { ...post, comments: [] }
                else {
                    if (posts[post.postID].comments)
                        posts[post.postID].comments.push({ ...post })
                }
            }
            for (var post in posts) {
                posts[post].comments.sort(function (a, b) {
                    return b.order - a.order
                })
            }
            var cookie = document.cookie
            cookie = cookie.split('; ');
            var result = {};
            for (var i = 0; i < cookie.length; i++) {
                var cur = cookie[i].split('=');
                result[cur[0]] = cur[1];
            }
            var username = "Khách"
            var userrole = "guess"

            if (result['role'] == 2) {
                userrole = 'user'
                username = result['username']
            }
            else if (result['role'] == 3) {
                userrole = 'admin'
                username = result['username']
            }

            var postsHTML =
                `<div class='post comments comment_${id}'>` +
                "<div class='comment_new row'>" +
                `<div class='post_name ${userrole} col-sm'>${username}</div>`
            if (userrole == 'guess')
                postsHTML += "<div class='textarea_cmt col-sm'><textarea disabled placeholder='Vui lòng đăng nhập để bình luận'></textarea></div> </div>"
            else
                postsHTML +=
                    `<div class='textarea_cmt col-sm'><textarea class='cmt_content_-1'></textarea></div>` +
                    `<div class='span_sendbtn col-sm'><button class='send_btn' id='send_-1'>Thảo luận mới</button></div>`
            postsHTML += "</div>" +
                "</div>"
            for (var id in posts) {
                var roleClass = (posts[id].userrole === 3 ? 'admin' : 'user')

                var row =
                    "<div class='post'>" +
                    "<div class='article row'>" +
                    `<div class='post_name col-sm ${roleClass}'>${posts[id].username}</div>` +
                    `<div class='post_content col-sm post_content_${id}'>${posts[id].content}</div>` +
                    "</div>" +
                    "<div class='post_button '>" +
                    `<button class='make_cmt' id='cmt_btn_${id}'>Bình luận</button>`
                if (posts[id].userid === result['userID']) {
                    row += `<button class='edit_post' id='edit_btn_${id}'>Sửa</button>` +
                        `<button class='delete_post' id='delete_btn_${id}'>Xóa</button>`
                }
                else if (+result['role'] === 3) {
                    row +=
                        `<button class='delete_post' id='delete_btn_${id}'>Xóa</button>`
                }

                row += "</div>" +
                    `<div class='comments comment_${id}'>` +
                    "<div class='comment_new row'>" +
                    `<div class='post_name col-sm ${userrole}'>${username}</div>`
                if (userrole == 'guess')
                    row += "<div class='textarea_cmt col-sm'><textarea disabled placeholder='Vui lòng đăng nhập để bình luận'></textarea></div> </div>"
                else
                    row +=
                        `<div class='textarea_cmt col-sm'><textarea class='cmt_content_${id}'></textarea></div>` +
                        `<div class='col-sm'><button class='send_btn' id='send_${id}'>Gửi</button></div>` +
                        "</div>"
                for (var comment of posts[id].comments) {
                    var roleClass = (comment.userrole === 3 ? 'admin' : 'user')
                    row +=
                        `<div class='comment row'>` +
                        `<div class='post_name col-sm ${roleClass}'>${comment.username}</div>` +
                        `<div class='post_content col-sm'>${comment.content}</div>`
                    if (+result['role'] === 3 || comment.userid === result['userID']) {
                        row += `<div class='delete_cmt col-sm'><button class='delete_cmt_btn' id='btn_${comment.id}' >Xóa</button></div>`
                    }
                    row += "</div>"
                }
                row +=
                    "</div >" +
                    "</div>" +
                    "</div>"
                postsHTML += row
            }
            $("#forum-content").append(postsHTML);
        },
    })
})
$(document).on('click', '.make_cmt', function () {
    var id = $(this).attr("id").substring(8)
    var cmtClass = ".comment_" + id
    $(cmtClass).css('display', 'initial')
})
$(document).on('click', '.send_btn', function () {
    var postID = $(this).attr("id").substring(5)
    var cookie = document.cookie
    cookie = cookie.split('; ');
    var result = {};
    for (var i = 0; i < cookie.length; i++) {
        var cur = cookie[i].split('=');
        result[cur[0]] = cur[1];
    }
    var content = '.cmt_content_' + postID
    if (!('userID' in result) || $(content).val() === "") return
    if ($(content).val() === "") {
        return
    }
    $.ajax({
        type: 'POST',
        url: '/service/post.php',
        dataType: 'json',
        data: {
            postID: postID,
            userid: result['userID'],
            content: $(content).val(),
            order: Math.round(new Date().getTime() / 1000)
        },
        success: function (data) {
            window.location.href = 'contact.php'
        }
    })
})
$(document).on('click', '.delete_post', function () {
    var id = $(this).attr("id").substring(11)
    var result = confirm("Bạn có muốn xóa nội dung này?");
    if (result) {
        $.ajax({
            type: 'DELETE',
            url: './service/post.php/' + id,
            success: function (response) {
                alert(response)
                window.location.href = 'contact.php';
            }
        })
    }
})
$(document).on('click', '.edit_post', function () {
    var id = $(this).attr("id").substring(9)
    var buttonDiv = 'edit_btn_' + id
    document.getElementById(buttonDiv).disabled = true;
    var contentDiv = ".post_content_" + id
    var content = $(contentDiv).html()
    var editDiv =
        `<span class='post_content post_content_${id} textarea_cmt'>` +
        `<textarea class='post_content_textarea_${id}'>${content}</textarea>` +
        "</span>" +
        "<span>" +
        `<button class='save' id='save_${id}'>Lưu</button>` +
        "</span>"
    $(contentDiv).replaceWith(editDiv)

})
$(document).on('click', '.save', function () {
    var id = $(this).attr("id").substring(5)
    var contentDiv = ".post_content_textarea_" + id
    var content = $(contentDiv).val()
    if (content === '') return
    $.ajax({
        type: 'PUT',
        url: '/service/post.php',
        dataType: 'json',
        data: {
            id: id,
            content: content,
        },
        success: function (response) {
            alert(response)
            window.location.href = 'contact.php'
        }
    })
})
$(document).on('click', '.delete_cmt_btn', function () {
    var id = $(this).attr("id").substring(4)
    var result_confirm = confirm("Bạn có muốn xóa nội dung này?");
    var cookie = document.cookie
    cookie = cookie.split('; ');
    var result = {};
    for (var i = 0; i < cookie.length; i++) {
        var cur = cookie[i].split('=');
        result[cur[0]] = cur[1];
    }
    if (result_confirm) {
        $.ajax({
            type: 'DELETE',
            url: './service/post.php/' + id,
            success: function (response) {
                alert(response)
                window.location.href = 'contact.php';
            }
        })
    }
})
$(document).on('click', '.del', function () {
    var fieldname = $(this).attr('id').substring(4)
    $.ajax({
        type: 'DELETE',
        url: './service/contact.php/' + fieldname,
        success: function (response) {
            alert(response)
            window.location.href = 'contact.php';
        }
    })
})
$(document).on('click', '.edit', function () {
    var fieldname = $(this).attr('id').substring(5)
    if (fieldname === 'article') {
        var oldContent = $('#article_content').html()
        $('#article').replaceWith(
            `<th scope="row" colspan="2" style="font-size: 30px" id="article">
            <textarea id="article_content"> ${oldContent} </textarea>
            <br/>
            <button class='btn saveContact X_btn' id='save_article'>Lưu</button>
            </th>`
        )
    }
    else if (fieldname === 'content') {
        var oldContent = $('#content_content').html()
        $(`#${fieldname}`).replaceWith(
            `<td id='content'>
            <div><textarea class='X_content' id="${fieldname}_content"> ${oldContent} </textarea></div>
            <br/>
            <button class='btn saveContact X_btn' id='save_${fieldname}'>Lưu</button>
            </td>`
        )
    }
    else if (fieldname === 'companyname') {
        var oldContent = $('#companyname_content').html()
        $(`#${fieldname}`).replaceWith(
            `<p id='companyname'>
            <div><textarea class='X_content' id="${fieldname}_content"> ${oldContent} </textarea></div>
            <br/>
            <button class='btn saveContact X_btn' id='save_${fieldname}'>Lưu</button>
            </p>`
        )
    }
    else if (fieldname === 'taxnumber') {
        var oldContent = $('#taxnumber_content').html()
        $(`#${fieldname}`).replaceWith(
            `<p id='taxnumber'>
            Mã số thuế: <div><textarea class='X_content' id="${fieldname}_content"> ${oldContent} </textarea></div>
            <br/>
            <button class='btn saveContact X_btn' id='save_${fieldname}'>Lưu</button>
            </p>`
        )
    }
    else if (fieldname === 'companyaddr') {
        var oldContent = $('#companyaddr_content').html()
        $(`#${fieldname}`).replaceWith(
            `<p id='companyaddr'>
                <i class="fas fa-map-marker-alt"></i> 
                <div><textarea class='X_content' id="${fieldname}_content"> ${oldContent} </textarea></div>
                <br/>
                <button class='btn saveContact X_btn' id='save_${fieldname}'>Lưu</button>
            </p>`
        )
    }
    else if (fieldname === 'phone') {
        var oldContent = $('#phone_content').html()
        $(`#${fieldname}`).replaceWith(
            `<li class="phone" id='phone'>
            <p><i class="fa fa-phone"></i> 
            <div><textarea class='X_content' id="${fieldname}_content"> ${oldContent} </textarea></div>
            <br/>
            <button class='btn saveContact X_btn' id='save_${fieldname}'>Lưu</button>
            </p>
            </li>`
        )
    }
    else if (fieldname === 'mail') {
        var oldContent = $('#mail_content').html()
        $(`#${fieldname}`).replaceWith(
            `<li class="mail" id='email'>
                <p><i class="fa fa-envelope"></i>
                <div><textarea class='X_content' id="${fieldname}_content"> ${oldContent} </textarea></div>
                <br/>
                <button class='btn saveContact X_btn' id='save_${fieldname}'>Lưu</button>
                </p>
            </li>`
        )
    }
    else if (fieldname === 'web') {
        var oldContent = $('#web_content').html()
        $(`#${fieldname}`).replaceWith(
            `<li class="website" id='web'>
                <p><i class="fa fa-globe"></i>
                <div><textarea class='X_content' id="${fieldname}_content"> ${oldContent} </textarea></div>
                <br/>
                <button class='btn saveContact X_btn' id='save_${fieldname}'>Lưu</button>
                </p>
            </li>`
        )
    }
    else {
        var oldContent = $(`[id='${fieldname}_content']`).html()
        $(`[id='${fieldname}']`).replaceWith(
            `<li  id='${fieldname}'>
                ${fieldname}:
                <div><textarea class='X_content' id="${fieldname}_content"> ${oldContent} </textarea></div>
                <br/>
                <button class='btn saveContact X_btn' id='save_${fieldname}'>Lưu</button>
                </p>
            </li>`
        )
    }


})
$(document).on('click', '.saveContact', function () {
    var fieldname = $(this).attr('id').substring(5)
    var newContent = $(`[id='${fieldname}_content']`).val()
    $.ajax({
        type: 'PUT',
        url: './service/contact.php',
        data: {
            fieldname: fieldname,
            content: newContent
        },
        success: function (res) {
            alert(res)
            window.location.href = "./contact.php"
        }
    })
})
$(document).on('click', '#editmode', function () {
    $('.X_btn').css('display', 'none')
    $('#new_fieldname_content').css('display', 'none')
    document.cookie = "editmode=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
})
$(document).on('click', '#newInfor', function () {
    $.ajax({
        type: 'PUT',
        url: './service/contact.php',
        data: {
            fieldname: $('#new_fieldname').val(),
            content: $('#new_content').val()
        },
        success: function (res) {
            alert(res)
            window.location.href = "./contact.php"
        }
    })
})