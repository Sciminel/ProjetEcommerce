<?php

namespace Controllers;

use Models\ProductManager;

class AccueilController extends Controller
{
    //methode qui affiche la page d'accueil
    public function display()
    {
        //Aller chercher les données dont elle a besoin
        
        $manager = new ProductManager();
        $promut = $manager->findPromute();
        
        
        // les envoyer a la vue
        $template = "accueil.phtml";
        
        include "views/layout.phtml";
    }
    
    
}