<?php

namespace Controllers;

class Controller
{
    protected $date;
    
    public function __construct(){
        $this->date = date("d/m/Y");
    }
}