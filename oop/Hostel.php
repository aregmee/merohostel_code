<?php
/**
 * Created by PhpStorm.
 * User: asimsangram
 * Date: 8/30/15
 * Time: 7:53 AM
 */
include_once 'FeeStructure.php';
class Hostel{

    private $id;
    private $name;
    private $gender;
    private $address;
    private $estd_year;
    private $fee_structure;
    private $capacity;
    private $facilities;

    public function __construct(){

        $this->fee_structure = new FeeStructure();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getEstdYear()
    {
        return $this->estd_year;
    }

    /**
     * @param mixed $estd_year
     */
    public function setEstdYear($estd_year)
    {
        $this->estd_year = $estd_year;
    }

    /**
     * @return mixed
     */
    public function getFeeStructure()
    {
        return $this->fee_structure;
    }

    /**
     * @param mixed $fee_structure
     */
    public function setFeeStructure($fee_structure)
    {
        $this->fee_structure = $fee_structure;
    }

    /**
     * @return mixed
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * @param mixed $capacity
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    /**
     * @return mixed
     */
    public function getFacilities()
    {
        return $this->facilities;
    }

    /**
     * @param mixed $facilities
     */
    public function setFacilities($facilities)
    {
        $this->facilities = $facilities;
    }
}

$hostel = new Hostel();