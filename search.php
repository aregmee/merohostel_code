<?php
include 'DBConnection.php';
if($_POST) {
    $loc = $_POST['location'];
    $gen = $_POST['gender'];
    $query = "Select DISTINCT (location) from hostel where";
    if(!empty($loc))
        $query .= " location like '$loc%' and";
    $query .=  " gender='$gen' ORDER BY location";
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
        $location = $row['location'];
        ?>
        <?php
        if ($location != 'NULL') {


        ?>
        <option value="<?php echo $location ?>">
            <?php echo $location; ?>
        </option>
        <?php
        }
    }
}
        ?>