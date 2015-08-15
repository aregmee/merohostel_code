<html>
<head>
<style>
    td{
        border:1px solid black;
    }
</style>
</head>

<body>
<a href="index.php">HomePage</a>

<table style="border: 1px solid black">

<thead>

    <td>Id</td>

    <td>Name</td>

    <td>Email Address</td>

    <td>Contact Number</td>

    <td>Location</td>

    <td>Gender</td>

    <td>Course of Study</td>

    <td>Duration</td>

    <td>Room Type</td>

    <td>Received Date</td>

</thead>

<?php
/**
 * Created by IntelliJ IDEA.
 * User: sachin
 * Date: 8/15/15
 * Time: 4:01 PM
 */

include 'DBConnection.php';

$recommendationListQuery= "SELECT *from recommendation ORDER BY receivedDate ASC";

$row = $conn->query($recommendationListQuery);

$count=1;

while($result = $row->fetch_assoc()){

        echo'<tr>

            <td>'.$count.'</td>

            <td>'.$result["Name"].'</td>

            <td>'.$result["emailAddress"].'</td>

            <td>'.$result["contactNumber"].'</td>

            <td>'.$result["Location"].'</td>

            <td>'.$result["Gender"].'</td>

            <td>'.$result["Course"].'</td>

            <td>'.$result["Duration"].'</td>

            <td>'.$result["roomType"].'</td>

            <td>'.$result["receivedDate"].'</td>

</tr>';

    $count++;

}

?>

</table>

</body>

</html>
