<?php
include 'config.php';

if (count($_POST) > 0) {
    if ($_POST['type'] == 2) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $role = $_POST['role'];
        $sql = "UPDATE `users` SET `name`='$name',`email`='email',`role`='$role' WHERE id='$id'";


        // $sql = "UPDATE `users` SET `name`='$name',`email`='$email',`role=$role` WHERE id='$id'";
        if (mysqli_query($con, $sql)) {
            echo json_encode(array("statusCode" => 200));
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
        mysqli_close($con);
    }
}
if (count($_POST) > 0) {
    if ($_POST['type'] == 3) {
        $id = $_POST['id'];
        $sql = "DELETE FROM `posts` WHERE userid='$id' ";
        mysqli_query($con, $sql);
        $sql = "DELETE FROM `users` WHERE id='$id' ";
        if (mysqli_query($con, $sql)) {
            echo $id;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
        mysqli_close($con);
    }
}
if (count($_POST) > 0) {
    if ($_POST['type'] == 4) {
        $id = $_POST['id'];
        $sql = "DELETE FROM users WHERE id in ($id) and role !='3'";
        if (mysqli_query($con, $sql)) {
            echo $id;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
        mysqli_close($con);
    }
}
