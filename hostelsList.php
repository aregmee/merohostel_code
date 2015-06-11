<?php

    $gender = $_GET["gender"];
    $location = $_GET["location"];
/*    $offset = $_GET["offset"];
    $max = $_GET["max"];*/
    $conn=mysqli_connect('localhost','root','iam@@$#!M','merohost_el');
    $sql="SELECT * FROM hostel WHERE location LIKE '%$location%' and gender = '$gender' ORDER BY location";
    $result =$conn->query($sql);
    while($row = $result->fetch_assoc()) {
        $name = $row["name"];
        $location=$row["location"];
        $contact_no = $row["contact_no"];
        $email = $row["email"];
        $website = $row["website"];
        if($location==NULL){
            break;
        }
        else{
            echo "$name<br>";
            echo "$location<br>";
            echo "$contact_no<br>";
            echo "$email<br>";
            echo "$website<br>";
        }
    }
    mysqli_close($conn);
?>