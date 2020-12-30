$(document).on('click', '.product_img', function () {
    console.log('hihi')
    var imageCode = $(this).attr("id")
    var image = new Image();
    image.src = "data:image/jpg;base64," + imageCode
    var w = window.open("");
    w.document.write(image.outerHTML)
})
$(document).on('click', '.del', function () {
    var result = confirm("Ban co chac chan muon xoa?")
    if (result) {
        var id = $(this).attr("id").substring(4)
        $.ajax({
            type: 'DELETE',
            url: './service/example.php/' + id,
            success: function (response) {
                alert(response)
                window.location.href = "./example_admin.php"
            }
        })
    }

})