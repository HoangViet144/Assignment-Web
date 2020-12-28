$(document).ready(function () {
    console.log("ahihi")
    $.ajax({
        type: 'GET',
        url: '/service/post.php',
        dataType: 'json',
        data: {
            getall: true,
        },
        success: function (data) {
            console.log(data)
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
            console.log(posts)
            var cookie = document.cookie
            cookie = cookie.split('; ');
            var result = {};
            for (var i = 0; i < cookie.length; i++) {
                var cur = cookie[i].split('=');
                result[cur[0]] = cur[1];
            }
            console.log(result)
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
                "<div class='comment_new'>" +
                `<span class='post_name ${userrole}'>${username}</span>`
            if (userrole == 'guess')
                postsHTML += "<span class='textarea_cmt'><textarea disabled placeholder='Vui lòng đăng nhập để bình luận'></textarea></span> </div>"
            else
                postsHTML +=
                    `<span class='textarea_cmt'><textarea class='cmt_content_-1'></textarea></span>` +
                    `<span><button class='send_btn' id='send_-1'>Thảo luận mới</button></span>`
            postsHTML += "</div>" +
                "</div>"
            for (var id in posts) {
                var roleClass = (posts[id].userrole == 1 ? 'admin' : 'user')

                var row =
                    "<div class='post'>" +
                    "<div class='article'>" +
                    `<span class='post_name ${roleClass}'>${posts[id].username}</span>` +
                    `<span class='post_content'>${posts[id].content}</span>` +
                    "</div>" +
                    "<div class='post_button'>" +
                    `<button class='make_cmt' id='cmt_btn_${id}'>Bình luận</button>` +
                    "</div>" +
                    `<div class='comments comment_${id}'>` +
                    "<div class='comment_new'>" +
                    `<span class='post_name ${userrole}'>${username}</span>`
                if (userrole == 'guess')
                    row += "<span class='textarea_cmt'><textarea disabled placeholder='Vui lòng đăng nhập để bình luận'></textarea></span> </div>"
                else
                    row +=
                        `<span class='textarea_cmt'><textarea class='cmt_content_${id}'></textarea></span>` +
                        `<span><button class='send_btn' id='send_${id}'>Gửi</button></span>` +
                        "</div>"
                for (var comment of posts[id].comments) {
                    var roleClass = (comment.userrole == 3 ? 'admin' : 'user')
                    row +=
                        `<div class='comment'>` +
                        `<span class='post_name ${roleClass}'>${comment.username}</span>` +
                        `<span class='post_content'>${comment.content}</span>` +
                        "</div>"
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
    console.log(cmtClass)
    $(cmtClass).css('display', 'initial')
})
$(document).on('click', '.send_btn', function () {
    var postID = $(this).attr("id").substring(5)
    console.log(postID)
    var cookie = document.cookie
    cookie = cookie.split('; ');
    var result = {};
    for (var i = 0; i < cookie.length; i++) {
        var cur = cookie[i].split('=');
        result[cur[0]] = cur[1];
    }
    var content = '.cmt_content_' + postID
    if (!('userID' in result) || $(content).val() === "") return

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