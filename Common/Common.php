<?php
/**
 * Created by IntelliJ IDEA.
 * User: sachin
 * Date: 5/29/2016
 * Time: 8:40 AM
 */
function getLatLong($conn,$hostel_id){
    $query = "select *from hostel_position where hostel_id=$hostel_id";
    $result = $conn->query($query);
    $data = array();
    if($result->num_rows>0){
        $row = mysqli_fetch_assoc($result);
        $data["latitude"] = $row["latitude"];
        $data["lognitude"] = $row["lognitude"];
    }
    else{
        $data["latitude"] = 27.7172;
        $data["lognitude"] = 85.3240;
    }
    return $data;

}