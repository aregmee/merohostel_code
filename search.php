<?php
    include 'DBConnection.php';
    if($_POST) {
        $q = $_POST['search'];
        $p = $_POST['gender'];

        if (empty($p) || empty($q)) {


        } else {

            $query = "Select DISTINCT (location) from hostel where location like '$q%' AND gender='$p'";
            $result = $conn->query($query);
            while ($row = $result->fetch_assoc()) {
                $location = $row['location'];
                $hostelName = $row['name'];
                ?>
                <div class="show" align="left">
                <?php
                if ($location != 'NULL') {

                    ?>
                    <span class="name"><?php
                        echo $location . '<br>';
                        ?></span>
                    </div>
                <?php
                }
            }
        }
    }
?>