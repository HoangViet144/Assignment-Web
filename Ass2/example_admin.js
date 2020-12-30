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
$(document).on('click', '.edit', function () {
    console.log('clic')
    var id = $(this).attr("id").substring(5)
    $('#section2').css('display', 'inherit')
    $('#edit_id').val(id)
    console.log($('#name_' + id).text())
    $('#edit_name').val($('#name_' + id).text())
    $('#edit_href').val($('#href_' + id).text())
    $('#edit_title').val($('#title_' + id).text())
})
$(document).ready(function () {
    $('#section2').css('display', 'none')
    $('#edit_id').css('display', 'none')
    $('#edit_id_label').css('display', 'none')
})