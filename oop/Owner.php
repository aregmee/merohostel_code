<?php
/**
 * Created by PhpStorm.
 * User: asimsangram
 * Date: 8/30/15
 * Time: 8:22 AM
 */

class Owner {

    private $id;
    private $hostel;
    private $name;
    private $contact;

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
    public function getHostel()
    {
        return $this->hostel;
    }

    /**
     * @param mixed $hostel
     */
    public function setHostel($hostel)
    {
        $this->hostel = $hostel;
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
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param mixed $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }
}

$owner = new Owner();