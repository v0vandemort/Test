<?php
class user extends people
{
    public $email;
    public $password;
    public $phone;


    public function setLogin($newEmail): void
    {
        $this->email = $newEmail;
    }

    public function getEmail()
    {
        return $this->email;
    }


    public function setPassword($newPassword): void
    {
        $this->password = $newPassword;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setPhone($newPhone): void
    {
        $this->phone=$newPhone;
    }

    public function getPhone()
    {
        return $this->phone;
    }

}


