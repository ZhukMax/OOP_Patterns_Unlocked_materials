<?php

class User
{
    private $username;
    private $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setPassword($password)
    {
        if (strlen($password) >= 8) {
            $this->password = $password;
        }
    }

    public function getPassword()
    {
        return $this->password;
    }
}
