<?php
session_start();


if (isset($_POST['login'])) {
    include "../config.php";
    $result = "";
    if (!isset($_POST['username']) || !isset($_POST['password'])) {
        $result = "Wrong password, username.";
        echo json_encode($result);
        return;
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT `role`,`id`,`email`,`fullname`,`DOB`,`sex` FROM `users` WHERE `name` = '$username' and `pass` = '$password' ";
    $result = mysqli_query($con, $query);
    $result = mysqli_fetch_row($result);
    mysqli_close($con);
    if ($result) {
        $_SESSION['role'] = (int)$result[0];
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['email'] = $result[2];
        $_SESSION['fullname'] = $result[3];
        $_SESSION['DOB'] = $result[4];
        $_SESSION['sex'] = $result[5];

        setcookie('username', $_SESSION['username'], time() + (86400), "/");
        setcookie('role', $_SESSION['role'], time() + (86400), "/");
        setcookie('userID', $result[1], time() + (86400), "/");
        echo json_encode("");
    } else {
        echo json_encode("Wrong password, username");
    }
}
if (isset($_POST['register'])) {
    include "../config.php";
    $result = "";
    if (!isset($_POST['username']) || !isset($_POST['password'])) {
        $result = "Wrong password, username.";
        echo json_encode($result);
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $check_space = FALSE;

    for ($x = 0; $x < strlen($username); $x++) {
        if ($username[$x] == ' ') {
            echo json_encode("No space in username!");
            $check_space = TRUE;
        }
    }
    for ($x = 0; $x < strlen($password); $x++) {
        if ($password[$x] == ' ') {
            echo json_encode("No space in password!");
            $check_space = TRUE;
        }
    }
    for ($x = 0; $x < strlen($email); $x++) {
        if ($email[$x] == ' ') {
            echo json_encode("No space in email!");
            $check_space = TRUE;
        }
    }

    if ($check_space == FALSE) {
        $query = "SELECT `role`,`id` FROM `users` WHERE `name` = '$username'";
        $result = mysqli_query($con, $query);
        $result = mysqli_fetch_row($result);
        $query1 = "SELECT `role`,`id` FROM `users` WHERE `email` = '$email'";
        $result1 = mysqli_query($con, $query1);
        $result1 = mysqli_fetch_row($result1);
        if ($result) {
            echo json_encode("Username exist");
        } else if ($result1) {
            echo json_encode("Email exist");
        } else {
            $query = "INSERT into users(name, pass, email, role) values('$username','$password','$email','2')";
            $result = mysqli_query($con, $query);
            if ($result) {
                $_SESSION['role'] = 2;
                echo json_encode("");
                session_destroy();
            } else {
                echo json_encode("Wrong password, username");
            }
        }
    }
    mysqli_close($con);
}

if (isset($_POST['adjust'])) {
    include "../config.php";
    $result = "";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $dob = strtotime($_POST['dob']);
    $sex = $_POST['sex'];
    $check_space = FALSE;
    $DOB = date('Y-m-d', $dob);

    for ($x = 0; $x < strlen($password); $x++) {
        if ($password[$x] == ' ') {
            echo json_encode("No space in password!");
            $check_space = TRUE;
        }
    }
    for ($x = 0; $x < strlen($email); $x++) {
        if ($email[$x] == ' ') {
            echo json_encode("No space in email!");
            $check_space = TRUE;
        }
    }
    if ($check_space == FALSE) {
        $query = "SELECT `role`,`id` FROM `users` WHERE `email` = '$email' and `name` <> '$username' ";
        $result = mysqli_query($con, $query);
        $result = mysqli_fetch_row($result);
        if ($result) {
            echo json_encode("Email exist");
        } else {
            $query = "UPDATE users SET `email` = '$email', `pass` = '$password',`fullname` = '$fullname',`DOB` = '$DOB',`sex` = '$sex' WHERE `name` = '$username';";
            $result = mysqli_query($con, $query);
            if ($result) {
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['email'] = $email;
                $_SESSION['fullname'] = $fullname;
                $_SESSION['DOB'] = $DOB;
                $_SESSION['sex'] = $sex;
                echo json_encode("");
            } else {
                echo json_encode("Wrong");
            }
        }
    }
    mysqli_close($con);
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

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (!isset($_SESSION['userID'])) {
        header("location:../login.php");
        return;
    }
    include "../config.php";


    $result = mysqli_query($con, "SELECT * FROM users WHERE id = {$_SESSION['userID']} ");
    $result = mysqli_fetch_assoc($result);
    mysqli_close($con);
    echo json_encode($result);
}
