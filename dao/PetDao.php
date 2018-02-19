<?php

require_once 'dao/BaseDao.php';
require_once 'dao/SpecieDao.php';
require_once 'dto/PetDto.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PetDao
 *
 * @author barro
 */
class PetDao extends BaseDao {
    //put your code here
    public function __construct() {
        
    }
    
    public function getAllPets() {
        $result=[];
        $speciesDao = new SpecieDao();
        $species = $speciesDao->getAllSpecies();
        $con = $this->openConnection();
        $sql = "SELECT * FROM pets";
        if (!$resultSql = $con->query($sql)) {
             die("fallo Query: " . $sql ." - ". mysqli_error());
        }
        while ($row = $resultSql->fetch_assoc()){
            $pet = new PetDto();
            $pet->setId($row["id_pet"]);
            $pet->setName($row["name"]);
            $pet->setIdSpecie($row["id_specie"]);
            $pet->setNameSpecie($species[$row["id_specie"]]);
            $pet->setSex($row["sex"]);
            $pet->setObservation($row["observation"]);
            $pet->setBirthDate($row["birth_date"]);
            $pet->setDeadhDate($row["death_date"]);
            $pet->setCreationDate($row["creation_date"]);
            $result[]=$pet;
        }
        $this->closeConnection();
        return $result; 
    }
    
    public function getPetById($id) {
        $result;
        $speciesDao = new SpecieDao();
        $species = $speciesDao->getAllSpecies();
        $con = $this->openConnection();
        $sql = "SELECT * FROM pets where id_pet='$id'";
        if (!$resultSql = $con->query($sql)) {
             die("fallo Query: " . $sql ." - ". mysqli_error());
        }
        if ($row = $resultSql->fetch_assoc()){
            $pet = new PetDto();
            $pet->setId($row["id_pet"]);
            $pet->setName($row["name"]);
            $pet->setIdSpecie($row["id_specie"]);
            $pet->setNameSpecie($species[$row["id_specie"]]);
            $pet->setSex($row["sex"]);
            $pet->setObservation($row["observation"]);
            $pet->setBirthDate($row["birth_date"]);
            $pet->setDeadhDate($row["death_date"]);
            $pet->setCreationDate($row["creation_date"]);
            $result=$pet;
        }
        $this->closeConnection();
        return $result; 
    }
    
    public function createPet($pet) {
        $con = $this->openConnection();
        $sql = "INSERT INTO pets(name, id_specie, sex,birth_date,"
                . "death_date,observation,creation_date) "
                . "VALUES (?,?,?,?,?,?,?)";
        
        $stmt = $con->prepare($sql);
        $deadhDate = ($pet->deadhDate!= '') ? $pet->deadhDate : NULL;
        $stmt->bind_param("sisssss",
                $pet->name,
                $pet->idSpecie,
                $pet->sex,
                $pet->birthDate,
                $deadhDate,
                $pet->observation,
                $pet->creationDate);
        if (!$stmt->execute()) {
             die("fallo Query: $pet->deadhDate " . $sql ." - ". $stmt->error);
        }
        $stmt->close();
        $this->closeConnection();
    }
    
    public function updatePet($pet) {
        $con = $this->openConnection();
        $sql = "update  pets "
                . "set name=?, "
                    . "id_specie=?, "
                    . "sex=?,"
                    . "birth_date=?,"
                    . "death_date=?,"
                    . "observation=? "
                . "where id_pet=?";
        
        $stmt = $con->prepare($sql);
        $deadhDate = ($pet->deadhDate!= '') ? $pet->deadhDate : NULL;
        $stmt->bind_param("sissssi",
                $pet->name,
                $pet->idSpecie,
                $pet->sex,
                $pet->birthDate,
                $deadhDate,
                $pet->observation,
                $pet->id);
        if (!$stmt->execute()) {
             die("fallo Query: $pet->deadhDate " . $sql ." - ". $stmt->error);
        }
        $stmt->close();
        $this->closeConnection();
    }
}
