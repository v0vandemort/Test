<?php
class user extends people
{
    public $login;
    public $password;
    public $parentsPhone;


    public function setLogin($newLogin): void
    {
        $this->login = $newLogin;
    }

    public function getLogin()
    {
        return $this->login;
    }


    public function setPassword($newPassword): void
    {
        $this->password = $newPassword;
    }

    public function getpassword()
    {
        return $this->password;
    }


}


