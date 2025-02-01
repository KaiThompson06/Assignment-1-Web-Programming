<?php

class database
{
    private $host = "localhost";
    private $username = "root";
    private $password = "mysql";
    private $database = "assignment1";
    protected $connection;

    function __construct()
    {
        return $this->connect();
    }
    public function connect()
    {
        $this->connection = mysqli_connect($this->host,  $this->username, $this->password, $this->database);
        if (mysqli_connect_error())
        {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $this->connection;
    }




}