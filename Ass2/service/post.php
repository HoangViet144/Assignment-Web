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
        echo json_encode("Bai viet khogn co noi dung");
        return;
    }
    $order = $_POST['order'];
    $query = "INSERT INTO posts (userid,content,postid,`order`) VALUES ($userid,'$content',$postID,$order);";
    $result = mysqli_query($con, $query);
    if ($result === TRUE) {
        echo json_encode("Them thanh cong");
        mysqli_close($con);
    } else {
        echo json_encode("Loi: " . $con->error);
        mysqli_close($con);
    }
}
