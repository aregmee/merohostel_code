<?php
    include 'DBConnection.php';
    if($_POST) {
        $q = $_POST['search'];
        $location = $_POST['location'];
        $p = $_POST['gender'];

        if (empty($p) || empty($location)) {


        } else {

            $query = "Select DISTINCT (location) from hostel where location like '$q%' AND gender='$p'";
            $result = $conn->query($query);
            while ($row = $result->fetch_assoc()) {
                $location = $row['location'];
                ?>
                <?php
                if ($location != 'NULL') {

                    ?>
                    <option><?php
                        echo $location;
                        ?></option>
                <?php
                }
            }
        }
    }
?>