<?php
include 'database.php';
if (count($_POST) > 0) {
    if ($_POST['type'] == 1) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $year = $_POST['year'];
        $sql = "INSERT INTO `cars`( `id`,`name`, `year`) 
		VALUES ('$id','$name','$year')";
        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("statusCode" => 200));
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
if (count($_POST) > 0) {
    if ($_POST['type'] == 2) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $year = $_POST['year'];
        $sql = "UPDATE `cars` SET `id`='$id',`name`='$name',`year`='$year' WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("statusCode" => 200));
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
if (count($_POST) > 0) {
    if ($_POST['type'] == 3) {
        $id = $_POST['id'];
        $sql = "DELETE FROM `cars` WHERE id=$id ";
        if (mysqli_query($conn, $sql)) {
            echo $id;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
if (count($_POST) > 0) {
    if ($_POST['type'] == 4) {
        $id = $_POST['id'];
        $sql = "DELETE FROM cars WHERE id in ($id)";
        if (mysqli_query($conn, $sql)) {
            echo $id;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
