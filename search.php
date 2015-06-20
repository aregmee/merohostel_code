<?php
include 'DBConnection.php';
if($_POST)
{
    $q=$_POST['search'];
    $p=$_POST['gender'];
    $query="Select DISTINCT(location) from hostel where location like '$q%' AND gender='$p'";
    $result = $conn->query($query);
    while($row = $result->fetch_assoc()) {
        $location = $row['location'];
        $hostelName=$row['name'];
        ?>
        <?php
        if ($location != 'NULL') {

            ?>
            <option value="<?php echo $location; ?>">
                <?php echo $location; ?>
            </option>
        <?php
        }
    }
}
?>