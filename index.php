<?php
require_once './controller/PetController.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$controller = new PetController();
if (!isset($_GET["action"])){
    $controller->listPets();
} elseif ($_GET["action"]=="add"){
    $controller->addPet();
} elseif ($_GET["action"]=="create" && $_POST){
    $controller->createPet();
} elseif ($_GET["action"]=="edit"){
    $controller->editPet();
} elseif ($_GET["action"]=="update" && $_POST){
    $controller->updatePet();
}
