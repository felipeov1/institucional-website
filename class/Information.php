<?php 

class Information {

    private $informationTable;
    private $conn;

    public function __construct($db){
        $this->conn = $db;
        $this->informationTable = 'siteconfig';
    }

    public function getInfos(){
        $stmt = $this->conn->prepare("SELECT * FROM " . $this->informationTable . " LIMIT 1");

        $stmt->execute();

        $result = $stmt->get_result();

        $informations = $result->fetch_assoc();

        $stmt->close();

        return $informations;
    }

}