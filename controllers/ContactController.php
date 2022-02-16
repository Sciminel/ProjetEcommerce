<?php

namespace Controllers;

class ContactController extends Controller
{
    //methode qui affiche la page d'accueil
    public function display()
    {
        //Aller chercher les données dont elle a besoin
        
        
        
        // les envoyer a la vue
        $template = "contact.phtml";
        
        include "views/layout.phtml";
    }
    
    
}