<?php
/**
 * Created by PhpStorm.
 * User: asimsangram
 * Date: 8/30/15
 * Time: 7:53 AM
 */
class FeeStructure{

    private $id;
    private $admissionFee;
    private $security_deposit;
    private $bed_1;
    private $bed_2;
    private $bed_3;
    private $bed_4;

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
    public function getAdmissionFee()
    {
        return $this->admissionFee;
    }

    /**
     * @param mixed $admissionFee
     */
    public function setAdmissionFee($admissionFee)
    {
        $this->admissionFee = $admissionFee;
    }

    /**
     * @return mixed
     */
    public function getSecurityDeposit()
    {
        return $this->security_deposit;
    }

    /**
     * @param mixed $security_deposit
     */
    public function setSecurityDeposit($security_deposit)
    {
        $this->security_deposit = $security_deposit;
    }

    /**
     * @return mixed
     */
    public function getBed1()
    {
        return $this->bed_1;
    }

    /**
     * @param mixed $bed_1
     */
    public function setBed1($bed_1)
    {
        $this->bed_1 = $bed_1;
    }

    /**
     * @return mixed
     */
    public function getBed2()
    {
        return $this->bed_2;
    }

    /**
     * @param mixed $bed_2
     */
    public function setBed2($bed_2)
    {
        $this->bed_2 = $bed_2;
    }

    /**
     * @return mixed
     */
    public function getBed3()
    {
        return $this->bed_3;
    }

    /**
     * @param mixed $bed_3
     */
    public function setBed3($bed_3)
    {
        $this->bed_3 = $bed_3;
    }

    /**
     * @return mixed
     */
    public function getBed4()
    {
        return $this->bed_4;
    }

    /**
     * @param mixed $bed_4
     */
    public function setBed4($bed_4)
    {
        $this->bed_4 = $bed_4;
    }
}

$feeStructure = new FeeStructure();