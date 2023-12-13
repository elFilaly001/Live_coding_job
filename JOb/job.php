<?php
class Job
{
    private $con;


    public function __construct($conn)
    {
        $this->con = $conn;
    }
    public function getAllJob()
    {
        $stmt = "SELECT * FROM job";
        $result = $this->con->query($stmt);
        $allJob = [];
        while ($row = $result->fetch_assoc()) {
            $allJob[] = $row;
        }
        return $allJob;
    }
    public function search($alph)
    {
        $stmt = "SELECT * FROM job where title like '%$alph%'";
        $result = $this->con->query($stmt);
        $getalph = [];
        while ($row = $result->fetch_assoc()) {
            $getalph[] = $row;
        }
        return $getalph;
    }

    public function getJobId($id)
    {
        $stmt = "SELECT * FROM job where id=$id";
        $result = $this->con->query($stmt);
        $getalph = [];
        while ($row = $result->fetch_assoc()) {
            $getalph[] = $row;
        }
        return $getalph;
    }
}
