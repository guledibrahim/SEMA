<?php
class usesr
{
    private $username; 
    private $email; 
    private $password;  

    public function __construct(){
        $this->$username ="";
        $this->$email="";
        $this->$password=""; 
    }

    public function setUsername(){
        $this->$username=$username; 
    }

    public function getUsername(){
        return $this->$username;
    }

    public function setEmailAddress(){
        $this->$email=$email;
    }

    public function getEmailAddress(){
        return $this->$email;
    }

    public function setPassword(){
        $this->$password=password_hash($password,PASSWORD_DEFAULT);
    }

    public function getPassword(){
        return $this->$password;
    }

}
