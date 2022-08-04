<?php

class createDB
{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $con;

    //constructor 
    public function __construct(
        $dbname = 'Newdb',
        $tablename = 'gest',
        $servername = 'localhost',
        $username = 'root',
        $password = ''
    ) {
        $this->dbname = $dbname;

        $this->tablename = $tablename;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;

        //create connection

        $this->con = mysqli_connect($servername, $username, $password);

        //check connection
        if (!$this->con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        //query

        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        //execute query
        if (mysqli_query($this->con, $sql)) {

            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            //sql to create new tables
            $sql = "CREATE TABLE IF NOT EXISTS $tablename
                (id_gest int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                gest_name VARCHAR(25) NOT NULL,
                gest_email VARCHAR(25) NOT NULL,
                gest_pass VARCHAR(25) NOT NULL
                );";

            if (!mysqli_query($this->con, $sql)) {
                echo "Error creating tables : " . mysqli_error($this->con);
            }
        } else {
            return false;
        }
    }

    // get product from the database
    public function getData()
    {
        $sql = "SELECT * FROM categories";
        $result = mysqli_query($this->con, $sql);
        if (mysqli_num_rows($result) > 0) {
            return $result;
        }
    }

    public function getProduct()
    {
        $sql = "SELECT * FROM products";
        $result = mysqli_query($this->con, $sql);
        if (mysqli_num_rows($result) > 0) {
            return $result;
        }
    }
}
