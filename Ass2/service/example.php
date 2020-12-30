<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['img_id'])) {
        include "../config.php";
        if (!($_FILES['image']['tmp_name'])) {
            header('location:../example_admin.php');
            return;
        }
        $image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //SQL Injection defence!
        $image_name = $_POST['image_name'];
        $link = $_POST['image_link'];
        $title = $_POST['title'];
        if ($link == "" || $title == "" || $image_name == "") return;
        $sql = "INSERT INTO `examples` (`img`, `img_name`,`href`,`title`) VALUES ( '{$image}', '{$image_name}','{$link}', '{$title}')";
        if (!mysqli_query($con, $sql)) { // Error handling
            echo $con->error;
            mysqli_close($con);
        }
        mysqli_close($con);
        header('location:../example_admin.php');
    } else {
        include "../config.php";
        $newImg = true;
        if (!($_FILES['image']['tmp_name'])) {
            $newImg = false;
        }

        $id = $_POST['img_id'];
        $image_name = $_POST['image_name'];
        $link = $_POST['image_link'];
        $title = $_POST['title'];
        if ($link == "" || $title == "" || $image_name == "") return;
        if ($newImg) {
            $image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //SQL Injection defence!
            $sql = "UPDATE examples SET img_name='$image_name', img= '$image', href='$link', title='$title' WHERE id='$id'";
        } else {
            $sql = "UPDATE examples SET img_name='$image_name', href='$link', title='$title' WHERE id='$id'";
        }
        if (!mysqli_query($con, $sql)) { // Error handling
            echo $con->error;
            mysqli_close($con);
        }
        mysqli_close($con);
        header('location:../example_admin.php');
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include "../config.php";
    $resultiter = mysqli_query($con, "SELECT * FROM examples");
    $img = array();
    while ($row = mysqli_fetch_assoc($resultiter)) {
        array_push($img, $row);
    }
    mysqli_close($con);
    echo json_encode($img);
}
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    include "../config.php";
    $params = explode('/', trim($_SERVER['PATH_INFO'], '/'));
    if (!isset($params[0])) {
        mysqli_close($con);
        echo json_encode("Loi, vui long thu lai");
        return;
    }

    $result = mysqli_query($con, "DELETE FROM examples WHERE `id` = '$params[0]'");

    if ($result === TRUE) {
        mysqli_close($con);
        echo json_encode('Xoa thanh cong');
    } else {
        echo json_encode("Loi: " . $con->error);
        mysqli_close($con);
    }
}
