<?php
/**
 * Created by PhpStorm.
 * User: asimsangram
 * Date: 2/4/16
 * Time: 2:14 PM
 */
include_once '../DBConnection.php';
if (isset($_GET["location"])) {
    $location = $_GET["location"];
} else {
    $location = "";
}

$sql = "SELECT DISTINCT(h.id), h.name, h.address, h.gender from hostel h where address like '%$location%'";
$result = $conn -> query($sql);

$response_string = "[";
while($row = $result->fetch_assoc()) {

    $hostel_photo_sql = "SELECT * from hostel_photo where hostel_id = " . $row["id"];
    $hostel_photo_result = $conn->query($hostel_photo_sql);

    $photos_string = "[";

    while($hostel_photo_row = $hostel_photo_result->fetch_assoc()){

        $photo_sql = "SELECT url from photo where id = " . $hostel_photo_row["photo_id"];
        $photo_result = $conn->query($photo_sql);


        if($photo_row = $photo_result->fetch_assoc()){

            $photos_string .= json_encode(
                    array(
                        'id' => $hostel_photo_row["id"],
                        'hid' => $hostel_photo_row["hostel_id"],
                        'url' => $photo_row["url"],
                        'main' => true)//TODO: add main photo
                ) . ",";
        }
    }

    if(strlen($photos_string) > 1)
        $photos_string = substr($photos_string, 0, strlen($photos_string) - 1);
    $photos_string .= "]";
    $name = $row["name"];
    $search = array(chr(145),
        chr(146),
        chr(147),
        chr(148),
        chr(151),
        chr(39));

    $replace = array("",
        "",
        '',
        '',
        '',
        '');
    $name = str_replace($search, $replace, $name);

    $response_string .= json_encode(
            array(
                'id' => $row["id"],
                'address'=> $row["address"],
                'name' => $name,
                'gender' => $row["gender"],
                'photos' => $photos_string
            )
        ) . ",";
}
$response_string = str_replace("\\", "", $response_string);
$response_string = str_replace("\"[", "[", $response_string);
$response_string = str_replace("]\"", "]", $response_string);
$response_string = str_replace(",,", ",", $response_string);
$response_string = substr($response_string, 0, strlen($response_string) - 1);
$response_string .= "]";
echo $response_string;