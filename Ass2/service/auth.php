<?php
session_start();


if (isset($_POST['login'])) {
    include "../config.php";
    $result = "";
    if (!isset($_POST['username']) || !isset($_POST['password'])) {
        $result = "Wrong password, username.";
        echo json_encode($result);
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT `role`,`id` FROM `users` WHERE `name` = '$username' and `pass` = '$password' ";
    $result = mysqli_query($con, $query);
    $result = mysqli_fetch_row($result);
    mysqli_close($con);
    if ($result) {
        $_SESSION['role'] = (int)$result[0];
        $_SESSION['username'] = $username;

        setcookie('username', $_SESSION['username'], time() + (86400), "/");
        setcookie('role', $_SESSION['role'], time() + (86400), "/");
        setcookie('userID', $result[1], time() + (86400), "/");
        echo json_encode("");
    } else {
        echo json_encode("Wrong password, username");
    }
}
if (isset($_GET['logout'])) {
    session_destroy();
    if (isset($_COOKIE['username'])) {
        unset($_COOKIE['username']);
        setcookie('username', null, -1, '/');
    }
    if (isset($_COOKIE['role'])) {
        unset($_COOKIE['role']);
        setcookie('role', null, -1, '/');
    }
    if (isset($_COOKIE['userID'])) {
        unset($_COOKIE['userID']);
        setcookie('userID', null, -1, '/');
    }
    header("location:../login.php");
}
