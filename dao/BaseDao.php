<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseDao
 *
 * @author barro
 */
class BaseDao {
    //put your code here
    private $connectionDB;
    
    protected function openConnection(){
        $this->connectionDB = mysqli_connect('p:localhost', 'root', '', 'slot');
        if (!$this->connectionDB) {
            die('Could not connect to MySQL: ' . mysqli_connect_error());
        }
        mysqli_query($this->connectionDB, 'SET NAMES \'utf8\'');
        return $this->connectionDB;
    }
    
    protected function closeConnection(){
        if ($this->connectionDB) {
            mysqli_close($this->connectionDB);
        }
    }


}

