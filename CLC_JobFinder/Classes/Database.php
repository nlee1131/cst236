<?php

/**
 * Created by PhpStorm.
 * User: natelee
 * Date: 9/10/17
 * Time: 5:27 PM
 */
class Database
{

    //fields for database
    private $dbservername;
    private $dbusername;
    private $dbpassword;
    private $dbname;
    private $conn;

    public function __construct()
    {
        $this->dbservername = "204.152.255.27";
        $this->dbusername = "nleebhos_400IM";
        $this->dbpassword = "legoman27";
        $this->dbname = "nleebhos_JobFinder";
        //create new connection to database
        $this->conn = new mysqli($this->dbservername, $this->dbusername, $this->dbpassword, $this->dbname);
        if($this->conn->connect_error)
        {
            die("Connection failed: " .$this->conn->connect_error);
        }
        else return $this->conn;
    }



    public function createUser($firstName, $lastName, $email, $password)
    {
        $sql = "INSERT INTO USERS (FIRSTNAME, LASTNAME, EMAIL, PASSWORD)
                VALUES ('" . $firstName . "' , '" . $lastName . "' , '" . $email . "' , '" . $password . "')";
        if ($this->conn->query($sql) == TRUE) {
            //echo "You are now registered.";
            return true;
        } else {
            echo "Error entering user info";
            return false;
        }
    }

    public function checkCredentials($email, $password)
    {

        $sql = "SELECT ID, EMAIL, PASSWORD
                FROM users WHERE " . " BINARY EMAIL='" . $email . "' AND " . " BINARY PASSWORD='" . $password . "'";
        $result = $this->conn->query($sql);
        if ($this->conn->error) {
            //echo "Connection failed";
            return false;
        } elseif ($result->num_rows == 1) {
            //echo "Login Successful";
            return true;
        } elseif ($result->num_rows == 0) {
            //echo "User does not exist";
            return false;
        } elseif ($result->num_rows > 1) {
            //echo "More than one user registered";
            return false;
        } else {
            //echo "Login failed";
            return false;
        }
    }

    public function getJobs(){
        $sql = "SELECT * FROM JOBS";
        $result = $this->conn->query($sql);
        $jobs = array();
        $index = 0;
        while($row = $result->fetch_assoc()){
            $id = $row["JOB_ID"];
            $name = $row["JOB_NAME"];
            $description = $row["JOB_DESCRIPTION"];
            $image = $row["JOB_IMAGE"];
            $job = new Job($id, $name, $description, $image);
            $jobs[$index] = $job;
            $index++;
        }
        $this->conn->close();
        return $jobs;
    }

    public function createJob($jobName, $jobDescription, $jobImage){
        $sql = "INSERT INTO JOBS (JOB_NAME, JOB_DESC, JOB_IMAGE)
                VALUES ('" . $jobName . "' , '" . $jobDescription . "' , '" . $jobImage . "')";
        if ($this->conn->query($sql) == TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function enterCreditCard($ccNumber, $cHName, $csv, $exMonth, $exYear){
        $sql = "INSERT INTO CREDIT_CARD (CARD_NUM, CARD_HOLDER_NAME, CSV, EXPIRATION_MONTH, EXPIRATION_YEAR)
                VALUES ('" . $ccNumber . "' , '" . $cHName . "' , '" . $csv . "' , '" . $exMonth . "' , '" . $exYear . "')";
        if ($this->conn->query($sql) == TRUE) {
            //echo "You are now registered.";
            return true;
        } else {
            //echo "Error entering cc info";
            return false;
        }
    }

    public function getJobById($id){
        $sql = "SELECT * FROM JOBS WHERE JOB_ID=" . $id ;
        $result = $this->conn->query($sql);
        if($result->num_rows==1){
            $row = $result->fetch_assoc();
            $job = new Job($row["JOB_ID"], $row["JOB_NAME"], $row["JOB_DESCRIPTION"], $row["JOB_IMAGE"]);
            $this->conn->close();
            return $job;
        }
        $this->conn->close();
        return null;
    }

}