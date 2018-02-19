<?php
require_once 'dao/petDao.php';
require_once 'dao/specieDao.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PetModel
 *
 * @author barro
 */
class PetModel {
    //put your code here
    public function __construct() {
        
    }
    
    private function calculateAge($birthDate){
        $dateBd= explode('-', $birthDate);   
        $dBd = $dateBd|[2];  
        $mBd = $dateBd[1]; 
        $yBd = $dateBd[0];  

        $dCur =date("d"); 
        $mCur =date("m"); 
        $yCur =date("Y"); 

        $result =  $yCur-$yBd; 
        if($mCur < $mBd && $dCur < $dBd || $mCur < $mBd || $dCur < $dBd){ 
             $result--; 
        }  
        return $result;
    }
    public function listPets() {
        $petDao = new PetDao();
        $result = $petDao->getAllPets();
        foreach ($result as $pet) {
            $age = $this->calculateAge($pet->getBirthDate());
            $pet->setAge($age);
        }
        return $result;
    }
    
    public function listSpecies(){
        $specieDao = new SpecieDao();
        return $specieDao->getAllSpecies();
    }
    
    public function createPet($pet) {
        $petDao = new PetDao();
        $petDao->createPet($pet);
    }
    
    public function gePetById($id) {
        $petDao = new PetDao();
        $result = $petDao->getPetById($id);
        return $result;
    }
    
    public function updatePet($pet) {
        $petDao = new PetDao();
        $petDao->updatePet($pet);
    }
}
