<?php
include 'DBConnection.php';
if (isset($_POST['recommend']) && isset($_POST['user_type']) && isset($_POST['comments']) && isset($_POST['rate'])) {
    $recommend = $_POST['recommend'];
    $user_type = $_POST["user_type"];
    $comments = $_POST["comments"];
    $comments = preg_replace('/[^A-Za-z0-9.@!,?\-]/', '', $comments);
    $rate = $_POST["rate"];
    $date_array = getdate();
    $date = $date_array["year"] . "-" . $date_array["mon"] . "-" . $date_array["mday"] . " "
        . $date_array["hours"] . ":" . $date_array["minutes"] . ":" . $date_array["seconds"];
    $date=date_create($date);
    $date = date_format($date,"Y/m/d H:i:s");
    $query = "insert into feedback VALUES($rate, '$user_type', '$comments', '$recommend', null, '$date')";

    if (mysqli_query($conn, $query)) {
        $submitted = "true";
    } else {
        $submitted = "false";
    }
    echo $submitted;
}
