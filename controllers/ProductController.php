<?php 

namespace Controllers;

use Models\ProductManager;

class ProductController extends Controller
{
        //methode qui affiche la page d'accueil
    public function display()
    {
        //Aller chercher les données dont elle a besoin
        
        $manager = new ProductManager();
        
        $selectOne = $manager->findSelect(array($_GET['id']));
        
        
        // les envoyer a la vue
        $template = "product.phtml";
        
        include "views/layout.phtml";
    }
    
}