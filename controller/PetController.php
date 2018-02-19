<?php
require_once 'model/PetModel.php';
require_once 'dto/PetDto.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PetController
 *
 * @author barro
 */
class PetController {
    //put your code here
    private $model;
    
    public function __construct() {
        $this->model = new PetModel();
    }
    
    public function listPets(){
        $pets = $this->model->listPets();
        require_once 'views/listPetsView.php';
    }
    
    public function addPet(){
        $species = $this->model->listSpecies();
        $pet = new PetDto();
        require_once 'views/addPetView.php';
    }
    
    public function createPet(){
        $pet = new PetDto();
        $pet->setName($_POST["name"]);
        $pet->setIdSpecie($_POST["specie"]);
        $pet->setSex($_POST["sex"]);
        $pet->setBirthDate($_POST["birth_date"]);
        $pet->setDeadhDate($_POST["deadh_date"]);
        $pet->setObservation($_POST["observation"]);
        $pet->setCreationDate(gmdate("Y-m-d H:i:s"));
        $this->model->createPet($pet);
        header('Location: /slot/index.php ');
    }
    
    public function editPet(){
        $species = $this->model->listSpecies();
        $pet = $this->model->gePetById($_GET["id_pet"]);
        require_once 'views/editPetView.php';
    }
    
    public function updatePet(){
        $pet = new PetDto();
        $pet->setName($_POST["name"]);
        $pet->setIdSpecie($_POST["specie"]);
        $pet->setSex($_POST["sex"]);
        $pet->setBirthDate($_POST["birth_date"]);
        $pet->setDeadhDate($_POST["deadh_date"]);
        $pet->setObservation($_POST["observation"]);
        $pet->setId($_POST["id_pet"]);
        $this->model->updatePet($pet);
        header('Location: /slot/index.php ');
    }
}
