<?php
class people{
    public $firstName;
    public $lastName;
    public $birthDay;
    public $phone;


    public function setName($newFirstName): void
    {
        $this->firstName=$newFirstName;
    }

    public function getName()
    {
        return $this->firstName;
    }

    public function setLastName($newLastName): void
    {
        $this->lastName=$newLastName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }


    public function setBirthday($newBirthday): void
    {
        $this->birthDay=$newBirthday;
    }

    public function getBirthday()
    {
        return $this->birthDay;
    }




    public function setPhone($newPhone): void
    {
        $this->phone=$newPhone;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function saveToDb(){

    }

}
