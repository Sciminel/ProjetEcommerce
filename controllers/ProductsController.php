<?php 

namespace Controllers;

use Models\ProductManager;

class ProductsController extends Controller
{
        //methode qui affiche la page d'accueil
    public function display()
    {
        //Aller chercher les données dont elle a besoin
        
        $manager = new ProductManager();
        
        $selections = $manager->findAll();
        
        
        
        // les envoyer a la vue
        $template = "products.phtml";
        
        include "views/layout.phtml";
    }
    
}