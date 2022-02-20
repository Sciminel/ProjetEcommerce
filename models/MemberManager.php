<?php

namespace Models;

use Config\Database;

class MemberManager
{
    //Rechercher si le mail existe deja en bdd
    public function findOneByEmail(string $email)
    {
        // REcherche a partir de l'adress mail
        $db = new Database();
        $pdo = $db->db_connect();
        
        $query = $pdo->prepare("SELECT * FROM member WHERE email = ? ");
        $query->execute([$email]);
        
        $query->setFetchMode(\PDO::FETCH_CLASS, 'Models\Member');
        $result = $query->fetch();
        return $result;
        
    
    }
    
    //Insert un new user
    public function insertUser($user){
        
        // Insertion d'un nouvel utilisateur
        $db = new Database();
        $pdo = $db->db_connect();
        try{
            $query = $pdo->prepare("INSERT INTO member (`email`, `firstname`, `lastname`, `adress`, `postalCode`, `town`, `tel`, `isAdmin`, `password`) VALUES (?, ?, ?, ' ', ' ', ' ', ' ', 0, ?)");
            $query->execute(array($user->getEmail(), $user->getFirstname(), $user->getLastname(),$user->getPassword()));
            
        }
        catch(PDOException $e){
            echo 'Erreur : '.$e->getMessage();
        }
        

    }
}