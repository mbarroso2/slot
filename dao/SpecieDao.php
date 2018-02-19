<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SpecieDao
 *
 * @author barro
 */
class SpecieDao extends BaseDao {
    //put your code here
    public function __construct() {
        
    }
    public function getAllSpecies() {
        $result=[];
        $con = $this->openConnection();
        $sql = "SELECT * FROM species";
        if (!$resultSql = $con->query($sql)) {
             die("fallo Query: " . $sql ." - ". mysqli_error());
        }
        while ($row = $resultSql->fetch_assoc()){
            $result[$row["id_specie"]]=$row["name"];
        }
        $this->closeConnection();
        return $result; 
    }
}
