<?php

namespace Controllers;

use Models\Member;
use Models\MemberManager;
use Services\Form;

class ConnexionController extends Controller
{
    
    public function __construct()
    {
        parent::__construct();
        if(!empty($_POST))
        {
            $this->connectUser();
        }
    }
    //methode qui affiche la page d'accueil
    public function display()
    {
        //Aller chercher les données dont elle a besoin
        
        //Instance du formulaire pour le login (connexion)
        $form = new Form();
        
        $formRender = $form->createForm("","POST");

        $formRender .= $form->createLabel("email", "Email");
        $formRender .= $form->createInput("email", "email", "email", "exemple@gmail.com");
        
        $formRender .= $form->createLabel("password", "Mot de passe");
        $formRender .= $form->createInput("password", "password", "password");

        
        $formRender .= $form->createButton("submit", "Envoyer"); 
        
        
        
        // les envoyer a la vue
        $template = "connexion.phtml";
        
        include "views/layout.phtml";
    }
    
    public function connectUser()
    {
        
        
        $userCheck = new MemberManager();
        
        //Verification des champs du formulaire s'ils sont vide
        if(Form::validate($_POST, ['email', 'password']))
        {
            $this->message = "C'est ok pour validate";
            //On vérifie le MDP hashé et écrit sont identiques
            if ($userCheck->findOneByEmail($_POST['email']))
            {
                $user = $userCheck->findOneByEmail($_POST['email']);
                $this->message = "mail ok";
                if(password_verify($_POST['password'], $user->getPassword()))
                {
                    $this->message = "C'est ok pour password";
                    $_SESSION['member'] = $user->getId();
                    header('location:index.php');
                }
                else
                {
                    $this->message = "MDP incorrect";
                }

                
            }
            else 
            {
                $this->message = "Mail incorrect";
            }
                
            
        }
        else
        {
            $this->message =  "Veuillez remplir les champs ";
        }
    }
    
    
}