<?php
/**
 * Created by IntelliJ IDEA.
 * User: sachin
 * Date: 8/30/15
 * Time: 12:46 PM
 */


function getAddressPriority($location){

    include 'DBConnection.php';

    $locationResult=$conn->query("SELECT DISTINCT address FROM hostel");

    $databaseAddressList=array();

    $probability=array();

    $i=0;

    while($locationRow=mysqli_fetch_assoc($locationResult)){

        $databaseAddressList[$i]=$locationRow["address"];

        $i++;
    }

    for($j=0;$j<sizeof($databaseAddressList);$j++){

        similar_text($location . " ",$databaseAddressList[$j],$percentage);

        $probability[$j]=$percentage;
    }

    $matchFound=0;

    $matchedAddress=array();

    $matchedCount=0;

    for($k=0;$k<sizeof($probability);$k++){

        if($probability[$k] >=65){

            $location=strtoupper($location);

            $databaseAddressListUpper[$k]=strtoupper($databaseAddressList[$k]);

            if($databaseAddressListUpper[$k][0]==$location[0])

                $matchedAddress[$matchedCount]=$databaseAddressList[$k];

                $matchFound++;

                $matchedCount++;
        }

    }
    for($k=0;$k<sizeof($probability);$k++) {

        if ($probability[$k] >= 65) {

            $matchFound++;

            $matchedCount++;
        }
    }

    if($matchFound==0)
    {
        for($k=0;$k<sizeof($probability);$k++){

            if($probability[$k] >=50){

                $matchedAddress[$matchedCount]=$databaseAddressList[$k];

                $matchFound++;

                $matchedCount++;

            }

        }
    }

    if($matchFound==0){

        for($k=0;$k<sizeof($probability);$k++){

            $location=strtoupper($location);

            $databaseAddressListUpper[$k]=strtoupper($databaseAddressList[$k]);

            if($databaseAddressListUpper[$k][0]==$location[0]){

                $matchedAddress[$matchedCount]=$databaseAddressList[$k];

                $matchedCount++;

                $matchFound++;
            }

        }

    }

    if($matchFound==0){

        for($k=0;$k<sizeof($probability);$k++){

            if($probability[$k] >=20){

                $matchedAddress[$matchedCount]=$databaseAddressList[$k];

                $matchedCount++;

                $matchFound++;

            }

        }

    }

    if(sizeof($matchedAddress)>0){

        echo "<br>Did you mean<br>";

        if(sizeof($matchedAddress)>=8){
            $loop=8;
        }else{
            $loop=sizeof($matchedAddress);
        }

        for($k=0;$k<$loop;$k++){

            echo "<a href='hostelList.php?location=" . ($matchedAddress[$k]) . "' class='icon item'>$matchedAddress[$k]</a><br>";

        }

    }else{

        echo "<i>Sorry! No hostels match your criteria.</i>";

    }

}


?>