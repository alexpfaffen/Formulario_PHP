<?php
class User{
    // Atributos
    private $ID;  // obrigatório
    private $Name;  // obrigatório
    private $Surname;
    private $Bday;
    private $Email;

    // Métodos

    // Métodos construtor
    function __construct(){
    }

    // Método GET
    function getId(){
        return $this->ID;
    }
    function getName(){
        return $this->Name;
    }
    function getSurname(){
        return $this->Surname;
    }
    function getBday(){
        return $this->Bday;
    }
    function getEmail(){
        return $this->Email;
    }

    // Métodos SET

    function setID($ID){
        $this->ID = $ID;
    }
    function setName($Name){
        $this->Name = $Name;
    }
    function setSurname($Surname){
        $this->Surname = $Surname;
    }
    function setBday($Bday){
        $this->Bday = $Bday;
    }
    function setEmail($Email){
        $this->Email = $Email;
    }
    
}