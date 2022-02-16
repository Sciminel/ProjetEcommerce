<?php

namespace Models;

use Config\Database;


class ProductManager
{
    public function findSelect()
    {
        $db = new Database();
        $pdo = $db->db_connect();
        
        $query = $pdo->prepare("SELECT * FROM products WHERE id = ? ");
        $query->execute(array($_GET['id']));
        
        $result = $query->setFetchMode(\PDO::FETCH_CLASS, 'Models\Products');
        
        return $result;
    }
    
    
    
    public function findPromute()
    {
        $db = new Database();
        $pdo = $db->db_connect();
        
        $query = $pdo->prepare("SELECT * FROM products WHERE promute = 0 LIMIT 3");

        
        $query->execute();
        
        $result = $query->fetchAll(\PDO::FETCH_CLASS, 'Models\Products');
        
        return $result;
        
    }
    
    
    public function findAll()
    {
        $db = new Database();
        $pdo = $db->db_connect();
        
        $query = $pdo->prepare("SELECT * FROM products");
        
        $query->execute();
        
        $result = $query->fetchAll(\PDO::FETCH_CLASS, 'Models\Products');
        
        return $result;
    }
    
    
}