$(document).ready(function () {
    // $("#myview").click(function() {

    $.ajax({
        url: 'viewPrice.php',
        type: 'get',
        dataType: 'JSON',
        success: function (response) {
            var len = response.length;
            var len_element = response[0].length;
            var row = 0;
            for (var key in response[0]) {
                var tr_str = "<tr>" + "<td>" + key + "</td>";
                if (key != 'name') {

                    // 	if (row==0)
                    // 		tr_str = tr_str +"<td>Chi phí mỗi tháng</td>";
                    for (var i = 0; i < len; i++) {

                        var t = +response[i][key];

                        if (t === 1)
                            tr_str = tr_str +
                                "<td><span class=\"my-ok-icon\">&#10003;</span></td>";
                        else if (t === 0)
                            tr_str = tr_str +
                                "<td>-</td>";
                        else {

                            if (key == 'monthlyPrice')
                                tr_str = tr_str +
                                    "<td><span class=\"strong-text\">" + t + "</span><span class=\"sub-align\">/1thang</span></td>";
                            else
                                tr_str = tr_str + "<td>" + t + "</td>";

                        }

                    }
                    tr_str = tr_str + "</tr>"
                    row = row + 1;
                    $("#my-table-respondsive tbody").append(tr_str);
                    // console.log(response[0]);
                }
            }
        }
    });
    $(document).ready(function () {
        // $("#myview").click(function() {

        $.ajax({
            url: 'viewPrice.php',
            type: 'get',
            dataType: 'JSON',
            success: function (response) {
                var len = response.length;
                var len_element = response[0].length;
                var row = 0;
                for (var key in response[0]) {
                    var tr_str = "<tr>" + "<td>" + key + "</td>";
                    if (key != 'name') {

                        // 	if (row==0)
                        // 		tr_str = tr_str +"<td>Chi phí mỗi tháng</td>";
                        for (var i = 0; i < len; i++) {

                            var t = +response[i][key];

                            if (t === 1)
                                tr_str = tr_str +
                                    "<td><span class=\"my-ok-icon\">&#10003;</span></td>";
                            else if (t === 0)
                                tr_str = tr_str +
                                    "<td>-</td>";
                            else {

                                if (key == 'monthlyPrice')
                                    tr_str = tr_str +
                                        "<td><span class=\"strong-text\">" + t + "</span><span class=\"sub-align\">/1thang</span></td>";
                                else
                                    tr_str = tr_str + "<td>" + t + "</td>";

                            }

                        }
                        tr_str = tr_str + "</tr>"
                        row = row + 1;
                        $("#my-table-respondsive tbody").append(tr_str);
                    }
                }
            }
        });
    });

})
