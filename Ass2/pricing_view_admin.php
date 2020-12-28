<?php

include "config.php";
$return_arr = array();

$query = "SELECT * FROM cars";

$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $name = $row['name'];
    $year = $row['year'];

    $return_arr[] = array(
        "id" => $id,
        "name" => $name,
        "year" => $year
    );
}

// Encoding array in JSON format
echo json_encode($return_arr);
