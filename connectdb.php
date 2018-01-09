<?php

class ConnectDatabase
{
    //class instance variables
    protected $db_name = "";
    protected $db_user = "";
    protected $db_pass = "";
    protected $db_host = "";

    //function to establish a connection to the database.
    public function connectdb()
    {
        $db = mysqli_connect($this->$db_host, $this->$db_user, $this->$db_pass, $this->$db_name);
        if($db==true){
            return $db;
        }
    }
}
