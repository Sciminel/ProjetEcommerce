<?php

namespace Controllers;

class ConnexionController extends Controller
{
    //methode qui affiche la page d'accueil
    public function display()
    {
        //Aller chercher les données dont elle a besoin
        
        
        
        // les envoyer a la vue
        $template = "connexion.phtml";
        
        include "views/layout.phtml";
    }
    
    
}