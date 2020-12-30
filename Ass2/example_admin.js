$(document).on('click', '.product_img', function () {
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
    var id = $(this).attr("id").substring(5)
    $('#section2').css('display', 'inherit')
    $('#edit_id').val(id)
    $('#edit_name').val($('#name_' + id).text())
    $('#edit_href').val($('#href_' + id).text())
    $('#edit_title').val($('#title_' + id).text())
})
$(document).ready(function () {
    $('#section2').css('display', 'none')
    $('#edit_id').css('display', 'none')
    $('#edit_id_label').css('display', 'none')
})
$(document).ready(function () {
    $("#searchall").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $(".product").filter(function () {
            var id = $(this).attr("id")
            $(this).toggle(
                $('#name_' + id).text().toLowerCase().indexOf(value) > -1 ||
                $('#href_' + id).text().toLowerCase().indexOf(value) > -1 ||
                $('#title_' + id).text().toLowerCase().indexOf(value) > -1
            )
        });
    });
});

