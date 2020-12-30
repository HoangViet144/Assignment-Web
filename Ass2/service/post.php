<?php
session_start();

if (isset($_GET['getall'])) {
    include "../config.php";
    $query = "SELECT * FROM `posts`";
    $resultiter = mysqli_query($con, $query);
    $result = array();
    while ($row = mysqli_fetch_assoc($resultiter)) {
        array_push($result, $row);
    }
    for ($i = 0; $i < count($result); $i++) {
        $userid = $result[$i]['userid'];
        $query = "SELECT `name`,`role` FROM `users` WHERE `id` = $userid";
        $query_ans = mysqli_query($con, $query);
        $row = mysqli_fetch_array($query_ans);
        $result[$i]['username'] = $row[0];
        $result[$i]['userrole'] = (int)$row[1];
    }
    mysqli_close($con);
    echo json_encode($result);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include "../config.php";
    $postID = $_POST['postID'];
    $userid = $_POST['userid'];
    $content = $_POST['content'];
    if ($content == '') {
        echo json_encode("Bai viet khong co noi dung");
        return;
    }
    $order = $_POST['order'];
    $query = "INSERT INTO posts (userid,content,postid,`order`) VALUES ($userid,'$content',$postID,$order);";
    $result = mysqli_query($con, $query);
    if ($result === TRUE) {
        mysqli_close($con);
        echo json_encode("Them thanh cong");
    } else {
        echo json_encode("Loi: " . $con->error);
        mysqli_close($con);
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    include "../config.php";
    $params = explode('/', trim($_SERVER['PATH_INFO'], '/'));

    if (!isset($params[0])) {
        mysqli_close($con);
        echo json_encode("Loi");
        return;
    }

    $result = mysqli_query($con, "DELETE FROM posts WHERE id = {$params[0]} OR postID = {$params[0]}");


    if ($result === TRUE) {
        mysqli_close($con);
        echo json_encode('Xoa thanh cong');
    } else {
        echo json_encode("Loi: " . $con->error);
        mysqli_close($con);
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    parse_str(file_get_contents('php://input'), $_PUT);
    $id = $_PUT['id'];
    $content = $_PUT['content'];

    if ($content == '') {
        echo json_encode('Noi dung cap nhat rong');
        return;
    }
    include "../config.php";
    $result = mysqli_query($con, "UPDATE posts SET content='$content' WHERE id='$id'");

    if ($result === TRUE) {
        echo json_encode("Cap nhat thanh cong");
        mysqli_close($con);
    } else {
        echo json_encode("Loi: " . $con->error);
        mysqli_close($con);
    }
}
