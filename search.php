<?php
include 'DBConnection.php';
if($_POST) {
    $q = $_POST['search'];
    $p = $_POST['gender'];
    $query = "Select DISTINCT (location) from hostel where location like '$q%' AND gender='$p'";
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
        $location = $row['location'];
        ?>
        <?php
        if ($location != 'NULL') {


        ?>
        <div class="item">
            <?php echo $location; ?>
        </div>
        <?php
        }
    }
}
        ?>