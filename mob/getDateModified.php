<?php
/**
 * Created by PhpStorm.
 * User: asimsangram
 * Date: 2/6/16
 * Time: 2:42 PM
 */
include '../DBConnection.php';

$sql = "SELECT DateModified FROM meta";

$result = $conn->query($sql);

if($row = $result->fetch_assoc()){

    $dateModified = $row["DateModified"];
    echo $dateModified;
}