<?php

class GameModel {
    
    private $id;
    private $gameName;
    private $loginName;
    private $loginPassword;
    private $inGameName;
    private $notes;

    
    function getId() {
        return $this->id;
    }
    
    function getGameName() {
        return $this->gameName;
    }
    
    function getLoginName() {
        return $this->loginName;
    }

    function getLoginPassword() {
        return $this->loginPassword;
    }
    
    function getInGameName() {
        return $this->inGameName;
    }
    
    function getNotes() {
        return $this->notes;
    }
    
    function setId($id) {
        $this->id = $id;
    }
    
    function setGameName($gameName) {
        $this->gameName = $gameName;
    }
    
    function setLoginName($loginName) {
        $this->loginName = $loginName;
    }
    
    function setLoginPassword($loginPassword) {
        $this->loginPassword = $loginPassword;
    }
    
    function setInGameName($inGameName) {
        $this->inGameName = $inGameName;
    }
    
    function setNotes($notes) {
        $this->notes = $notes;
    }
    
    }