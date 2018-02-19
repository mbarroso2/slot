<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PetDto
 *
 * @author barro
 */
class PetDto {
    //put your code here
    public $id;
    public $name;
    public $idSpecie;
    public $nameSpecie;
    public $sex;
    public $observation;
    public $birthDate;
    public $age;
    public $deadhDate;
    public $creationDate;
    
    public function __construct() {
        
    }
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getIdSpecie() {
        return $this->idSpecie;
    }

    public function getNameSpecie() {
        return $this->nameSpecie;
    }

    public function getSex() {
        return $this->sex;
    }
    
    public function getSexName() {
        return ($this->sex==="f")?"hembra":"macho";
    }

    public function getObservation() {
        return $this->observation;
    }

    public function getBirthDate() {
        return $this->birthDate;
    }

    public function getAge() {
        return $this->age;
    }

    public function getDeadhDate() {
        return $this->deadhDate;
    }

    public function getCreationDate() {
        return $this->creationDate;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setIdSpecie($idSpecie) {
        $this->idSpecie = $idSpecie;
    }

    public function setNameSpecie($nameSpecie) {
        $this->nameSpecie = $nameSpecie;
    }

    public function setSex($sex) {
        $this->sex = $sex;
    }

    public function setObservation($observation) {
        $this->observation = $observation;
    }

    public function setBirthDate($birthDate) {
        $this->birthDate = $birthDate;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setDeadhDate($deadhBirth) {
        $this->deadhDate = $deadhBirth;
    }

    public function setCreationDate($creationDate) {
        $this->creationDate = $creationDate;
    }


}
