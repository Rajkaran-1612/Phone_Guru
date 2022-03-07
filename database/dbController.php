<?php

class dbController {
    //databse connection properties
    protected $host = 'localhost';
    protected $username = 'root';
    protected $password = '';
    protected $dbname = 'phone_guru';


    //connection property
    public $con = null;


    //call constructor
    public function __construct() {
        $this->con = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);
        if($this->con->connect_error) {
            echo "Connection failed" . $this->con->connect_error;
        }
    }


    //call destructor
    public function __destruct() {
        $this->closeConnection();
    }


    //method for closing mysql connection
    protected function closeConnection() {
        if($this->con != null) {
            $this->con->close();
            $this->con = null;
        }
    }

}

