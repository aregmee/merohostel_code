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

$sql = "SELECT DISTINCT(h.id), h.name, h.address, h.gender, h.fee_structure_id from hostel h where address like '%$location%'";
$result = $conn -> query($sql);

$response_string = "[";
$count = 0;
while($row = $result->fetch_assoc()) {

    $fee_sql = "SELECT * FROM fee_structure WHERE id = " . $row["fee_structure_id"];
    $fee_result = $conn->query($fee_sql);

    $fee_array = array();
    if($fee_row = $fee_result->fetch_assoc()){

        $fee_array = array(
                'id' => $fee_row["id"],
                'admission' => $fee_row["admission"],
                'security_deposit' => $fee_row["security_deposit"],
                '1_bed' => $fee_row["1_bed"],
                '2_bed' => $fee_row["2_bed"],
                '3_bed' => $fee_row["3_bed"],
                '4_bed' => $fee_row["4_bed"]
        );
    }
    $hostel_facility_sql = "SELECT * FROM hostel_facility WHERE hostel_id = " . $row["id"];
    $hostel_facility_result = $conn->query($hostel_facility_sql);

    $hostel_facility_string = "[";
    while($hostel_facility_row = $hostel_facility_result->fetch_assoc()){

        $hostel_facility_string .= json_encode(

            array(
                'id' => $hostel_facility_row["id"],
                'hid' => $row["id"],
                'fid' => $hostel_facility_row["facility_id"]
            )
        ). ",";
    }

    if(strlen($hostel_facility_string) > 1)
        $hostel_facility_string = substr($hostel_facility_string, 0, strlen($hostel_facility_string) - 1);
    $hostel_facility_string .= "]";

    $hostel_photo_sql = "SELECT * from hostel_photo where hostel_id = " . $row["id"];
    $hostel_photo_result = $conn->query($hostel_photo_sql);

    $photos_string = "[";

    $main_photo_sql = "SELECT photo_id FROM main_photo where hostel_id = " . $row["id"];
    $main_photo_result = $conn->query($main_photo_sql);

    $main_photo_id = 0;

    if($main_photo_row = $main_photo_result->fetch_assoc()){

        $main_photo_id = $main_photo_row["photo_id"];
        //echo "Main Photo : " . $main_photo_id . "<br>";

        $photo_sql = "SELECT * from photo where id = " . $main_photo_id;
        $photo_result = $conn->query($photo_sql);

        if($photo_row = $photo_result->fetch_assoc()) {

            $photos_string .= json_encode(
                    array(
                        'id' => $main_photo_id,
                        'hid' => $row["id"],
                        'url' => $photo_row["url"],
                        'main' => true)
                ) . ",";
        }

        $count++;
    }

    while($hostel_photo_row = $hostel_photo_result->fetch_assoc()){

        $photo_sql = "SELECT * from photo where id = " . $hostel_photo_row["photo_id"];
        $photo_result = $conn->query($photo_sql);

        if($photo_row = $photo_result->fetch_assoc()){

            $photos_string .= json_encode(
                    array(
                        'id' => $photo_row["id"],
                        'hid' => $hostel_photo_row["hostel_id"],
                        'url' => $photo_row["url"],
                        'main' => false)
                ) . ",";
            //echo "Photo : " . $photo_row["id"] . "<br><br>";
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
                'photos' => $photos_string,
                'facilities' => $hostel_facility_string,
                'fee_structure' => array(
                    'id' => $fee_row["id"],
                    'admission' => $fee_row["admission"],
                    'security_deposit' => $fee_row["security_deposit"],
                    '1_bed' => $fee_row["1_bed"],
                    '2_bed' => $fee_row["2_bed"],
                    '3_bed' => $fee_row["3_bed"],
                    '4_bed' => $fee_row["4_bed"]
                )
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
//echo $count;