<?php

namespace Services;

class Form 
{
    
    private $action;
    private $method;
    private $forLabel;
    private $id;
    private $name;
    private $type;
    private $value;
    private $placeHolder;
    
    //Verification des champs si vide ou non
    public static function validate(array $form, array $fields){
    // On parcourt chaque champ
    foreach($fields as $field){
        // Si le champ est absent ou vide dans le tableau
        if(!isset($form[$field]) || empty($form[$field])){
            // On sort en retournant false
            return false;
        }
    }
     // Ici le formulaire est "valide"
     return true;
    }
    
    
    public function createForm(string $m, string $a)
    {
        
        return "<form action = ' $m' method = '$a' >";
    }
    
    public function createInput(string $t, string $i, string $n, string $ph = "")
    {
        
        return "<input type = '$t' id = '$i' name= '$n' placeholder = '$ph' />";
        
    }
    
    public function createLabel(string $fl, string $v)
    {
        
        return "<label for = '$fl' > $v </label>";
    }
    
    public function createTextArea(string $i, string $n, string $ph)
    {
        
        return "<textarea id = '$i' name = '$n'  placeholder = '$ph'> </textarea>";
    }
    
    public function createButton(string $t, string $v)
    {
        
        return "<button type = '$t' > $v </button>";
    }
    

    
}