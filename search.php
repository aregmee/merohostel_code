<?php
include 'DBConnection.php';
if($_POST)
{
    $p=$_POST['gender'];
    $query="Select DISTINCT(address) from hostel where gender='$p'";
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