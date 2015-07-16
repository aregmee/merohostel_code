<?php
include 'DBConnection.php';
if($_POST)
{
    $p=$_POST['gender'];

    if(!empty($p))
        $query = "SELECT DISTINCT(address) from hostel where gender='$p'";
    else
        $query = "SELECT DISTINCT(address) from hostel";
    $result = $conn->query($query);
    $response = array();
    while($row = $result->fetch_assoc()) {
        $location = $row['address'];
        ?>
        <?php
        if ($location != 'NULL') {

            array_push($response, $location);
        }
    }
    echo json_encode($response);
}