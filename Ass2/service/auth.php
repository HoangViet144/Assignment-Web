<?php
session_start();

include "../config.php";
if (isset($_POST['login'])) {
    $result = "";
    if (!isset($_POST['username']) || !isset($_POST['password'])) {
        $result = "Wrong password, username.";
        echo json_encode($result);
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT role FROM `users` WHERE `name` = '$username' and `pass` = '$password' ";
    $result = mysqli_query($con, $query);
    $result = mysqli_fetch_row($result);
    if ($result) {
        $_SESSION['role'] = (int)$result[0];
        $_SESSION['username'] = $username;
        echo json_encode("");
    } else {
        echo json_encode("Wrong password, username");
    }
}
if (isset($_GET['logout'])) {
    session_destroy();
    echo "he";
    header("location:../login.php");
}
