<?php

include 'connectdb.php'; //calling the connectdb.php file in order to access the ConnectDatabase class 
include 'user.php'; 

class UserRegistration
{
    public function registerUser(){
        $db = new ConnectDatabase; 
        if($db->connectdb()==true){
            
        }
    }
}
