<?php

namespace Models;

use Config\Database;

class Member
{
    private $adress;
    private $email;
    private $firstname;
    private $lastname;
    private $id;
    private $isAdmin;
    private $password;
    private $postalCode;
    private $tel;
    private $town;
    

    
    
    //getter id 
    public function getId():int
    {
        return $this->id;
    }
    
    //Getter setter firstname
    public function getFirstname():string
    {
        return $this->firstname;
    }
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
    }
    
    
        //Getter setter $lastname
    public function getLastname():string
    {
        return $this->lastname;
    }
    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;
    }
    
        //Getter setter $email
    public function getEmail():string
    {
        return $this->email;
    }
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    
        //Getter setter password
    public function getPassword():string
    {
        return $this->password;
    }
    public function setPassword(string $password)
    {
        $this->password = $password;
    }
    
}