<?php
class SighnupController{
    private $username;
    private $pasword;
    private $repeatpassword;

    private  $email

    Public function __construct($username,$pasword,$repeatpassword,$email){
        $this -> username = $username;
        $this -> pasword = $pasword;
        $this -> repeatpassword = $repeatpassword;
        $this -> email = $email;

        $result;

        if (empty($this->username) || empty($this->pasword) || empty($this->repeatpassword) || empty($this->email)){

        }
    }

}