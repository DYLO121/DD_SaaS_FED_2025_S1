<?php

if(isset($_POST['submit'])){

    $id = $_POST['id'];  // Assuming a hidden input or database user ID
    $username = $_POST["username"];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $reset_password = $_POST['reset_password'];

}

include "../classes/sighup.php";
include "../classes/sighup.controller.php";
$sighnup= new SighnupController($username,$pasword,$repeatpassword,$email););





