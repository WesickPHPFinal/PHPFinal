<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmailTypeDAO
 *
 * @author 001288282
 */
namespace App\models\services;

use App\models\interfaces\IDAO;
use App\models\interfaces\IModel;
use App\models\interfaces\ILogging;
use \PDO;

class EmailTypeDAO extends BaseDAO implements IDAO{
    
    //private $DB = null;
    
    public function __construct(PDO $db, IModel $model, ILogging $log){
        $this->setDB($db);
        $this->setModel($model);
        $this->setLog($log);
    }
    /*
    function getDB() {
        return $this->DB;
    }

    function setDB($DB) {
        $this->DB = $DB;
    }
    */
     public function idExisit($id) {
        
        $db = $this->getDB();
        $stmt = $db->prepare("SELECT * FROM emailtype WHERE emailtypeid = :emailtypeid");
         
        if ( $stmt->execute(array(':emailtypeid' => $id)) && $stmt->rowCount() > 0 ) {
            return true;
        }
         return false;
    }
    /*
    public function getById($id) {
        $model = new EmailTypeModel();
        $db = $this->getDB();
        
        $stmt = $db->prepare("SELECT * FROM emailtype WHERE emailtypeid = :emailtypeid");
        
        if ( $stmt->execute(array(':emailtypeid' => $id)) && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetch(PDO::FETCH_ASSOC);
             $model->map($results);            
         }
         return $model;
    }
    
    public function save(IModel $model) {
        $db = $this->getDB();
        
        $values = array(":emailtype" => $model->getEmailtype(),
                        ":active" => $model->getActive());
        
        if($this->idExisit($model->getEmailtypeid())){
            $values[":emailtypeid"] = $model->getEmailtypeid();
            $stmt = $db->prepare("UPDATE emailtype SET emailtype = :emailtype, active = :active WHERE emailtypeid = :emailtypeid");
        }
        else{
            $stmt = $db->prepare("INSERT INTO emailtype SET emailtype = :emailtype, active = :active");
        }
        if ( $stmt->execute($values) && $stmt->rowCount() > 0 ) {
            return true;
         }
         
         return false;
    }
    */
    public function read($id) {
         
         $model = clone $this->getModel();
         
         $db = $this->getDB();
         
         $stmt = $db->prepare("SELECT * FROM emailtype WHERE emailtypeid = :emailtypeid");
         
         if ( $stmt->execute(array(':emailtypeid' => $id)) && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetch(PDO::FETCH_ASSOC);
             $model->reset()->map($results);
         }
         return $model;
    }
    public function create(IModel $model) {
                 
         $db = $this->getDB();
         
         $binds = array( ":emailtype" => $model->getEmailtype(),
                          ":active" => $model->getActive()
                    );
                         
         if ( !$this->idExisit($model->getEmailtypeid()) ) {
             
             $stmt = $db->prepare("INSERT INTO emailtype SET emailtype = :emailtype, active = :active");
             
             if ( $stmt->execute($binds) && $stmt->rowCount() > 0 ) {
                return true;
             }
         }
                  
         
         return false;
    }
    public function update(IModel $model) {
                 
         $db = $this->getDB();
         
         $binds = array( ":emailtype" => $model->getEmailtype(),
                          ":active" => $model->getActive(),
                          ":emailtypeid" => $model->getEmailtypeid()
                    );
         
                
         if ( $this->idExisit($model->getEmailtypeid()) ) {
            
             $stmt = $db->prepare("UPDATE emailtype SET emailtype = :emailtype, active = :active WHERE emailtypeid = :emailtypeid");
         
             if ( $stmt->execute($binds) && $stmt->rowCount() > 0 ) {
                return true;
             } else {
                 $error = implode(",", $db->errorInfo());
                 $this->getLog()->logError($error);
             }
             
         } 
         
         return false;
    }
    public function delete($id){
        $db = $this->getDb();
        $stmt = $db->prepare("DELETE FROM emailtype WHERE emailtypeid = :emailtypeid");
        
        if ( $stmt->execute(array(':emailtypeid' => $id)) && $stmt->rowCount() > 0 ) {
             return true;
         }else {
             $error = implode(",", $db->errorInfo());
             $this->getLog()->logError($error);
         }
         
         return false;
    }
    
    public function getAllRows() {
       
        $values = array();         
        $db = $this->getDB();
        $stmt = $db->prepare("SELECT * FROM emailtype");
        
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($results as $value) {
               $model = clone $this->getModel();
               $model->reset()->map($value);
               $values[] = $model;
            }
        }
        else{    
        }     
        $stmt->closeCursor();         
        return $values;
    }
}
