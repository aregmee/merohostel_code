<?php
/**
 * Created by PhpStorm.
 * User: asimsangram
 * Date: 8/30/15
 * Time: 7:42 AM
 */
include_once 'Hostel.php';
class HostelAction{

    private $conn;
    public function __construct($connection){

        $this->conn = $connection;
    }

    public function getHostelDetail($hostelId){

        $hostel = new Hostel();

        $hostel_row = $this->conn-> query("SELECT * from hostel where id='$hostelId'");
        list($id, $name, $gender, $location, $estd_year, $fee_structure_id, $capacity) = $hostel_row->fetch_row();
        $hostel->setId($id);
        $hostel->setName($name);
        $hostel->setGender($gender);
        $hostel->setAddress($location);
        $hostel->setEstdYear($estd_year);
        $hostel->setCapacity($capacity);

        $facilities_array = $this->conn->query("SELECT DISTINCT (f.name) as facility_name from facility f
                                                                        JOIN hostel_facility hf on hf.facility_id = f.id
                                                                        JOIN hostel h on h.id = $id where hf.hostel_id=$id");

        $facilities_row = $facilities_array -> fetch_assoc();

        $facilities = array();
        while($facilities_row != null){

            $facilities[] = $facilities_row["facility_name"];
        }

        $fee_structure_row = $this->conn-> query("SELECT * FROM fee_structure where id=" . $fee_structure_id);
        $fee_structure_array = $fee_structure_row -> fetch_assoc();

        $fee_structure = new FeeStructure();

        $fee_structure->setAdmissionFee($fee_structure_array["admission"]);
        $fee_structure->setSecurityDeposit($fee_structure_array["security_deposit"]);
        $fee_structure->setBed1($fee_structure_array["1_bed"]);
        $fee_structure->setBed2($fee_structure_array["2_bed"]);
        $fee_structure->setBed3($fee_structure_array["3_bed"]);
        $fee_structure->setBed4($fee_structure_array["4_bed"]);

        $hostel->setFeeStructure($fee_structure);

        return $hostel;
    }
}
$hostelAction = new HostelAction($connection->connect());