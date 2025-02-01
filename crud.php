<?php

require_once 'database.php';
class crud extends database
{

    public function __construct()
    {
        parent::__construct();
    }

    public function create($query)
    {

        $result = $this->connection->query($query);
        if (!$result) {
            return false;
        }
        return true;
    }

    public function sanatize($string)
    {
        return $this->connection->real_escape_string($string);
    }
}