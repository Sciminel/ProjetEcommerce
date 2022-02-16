<?php 

use Config\Database;
use Models\Products;
use Models\ProductManager;
use Controllers\AccueilController;
use Controllers\ProductController;
use Controllers\ProductsController;
use Controllers\ContactController;
use Controllers\ConnexionController;


spl_autoload_register(function ($class) {
    include lcfirst(str_replace('\\','/',$class)).".php";
});



if(isset($_GET['page']))
{
    switch($_GET['page'])
    {
        case 'contact':
            $controller = new ContactController();
            $controller -> display();
            break;
        case 'connexion':
            $controller = new ConnexionController();
            $controller -> display();
            break;
        case 'products':
            $controller = new ProductsController();
            $controller -> display();
            break;
        case 'product':
            $controller = new ProductController();
            $controller -> display();
            break;
    }
}
else
{
    $controller = new AccueilController();
    $controller -> display();
}
