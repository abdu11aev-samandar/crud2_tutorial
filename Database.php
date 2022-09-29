<?php

class Database
{
    private $db_host = "localhost";
    private $db_user = "ata";
    private $db_pass = "123456";
    private $db_name = "testing";

    private $mysqli = "";
    private $result = [];
    private $conn = false;

    public function __construct()
    {
        if (!$this->conn) {
            $this->mysqli = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

            if ($this->mysqli->connect_error) {
                array_push($this->result, $this->mysqli->connect_error);
                return false;
            }
        } else {
            return true;
        }
    }

    // Insert Function
    public function insert()
    {

    }

    // Update Function
    public function update()
    {

    }

    // Delete Function
    public function delete()
    {

    }

    // Select Function
    public function select()
    {

    }

    //close connection
    public function __destruct()
    {
        if ($this->conn) {
            if ($this->mysqli->close()) {
                $this->conn = false;
                return true;
            }
        } else {
            return false;
        }
    }
}