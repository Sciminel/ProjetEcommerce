<?php 
namespace Models;

class Products
{
    private $id;
    private $name;
    private $price;
    private $description;
    private $img;
    private $stock;
    private $promute;
    private $date;
    
    
    //getter id 
    public function getId():int
    {
        return $this->id;
    }
    
    //Getter setter name
    public function getName():string
    {
        return $this->name;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }
    
    //Getter setter price
    public function getPrice():float
    {
        return $this->price;
    }
    
    public function setPrice(float $price)
    {
        $this->price = $price;
    }
    
    //Getter et setter description
    public function getDescription():string
    {
        return $this->description;
    }
    
    public function setDescription(string $desc)
    {
        $this->description = $desc;
    }
    
    //Getter et setter img
    
    public function getImg():string
    {
        return $this->img;
    }
    
    public function setImg(string $img)
    {
        $this->img = $img;
    }

    //getter et setter stock
    
    public function getStock():int
    {
        return $this->stock;
    }
    
    public function setStock(int $stock)
    {
        $this->stock = $stock;
    }
    
    // getter et setter promute
        
    public function getPromute():int
    {
        return $this->promute;
    }
    
    public function setPromute(int $promu)
    {
        $this->promute = $promu;
    }
    
    //getter et setter date
    public function getDate():date
    {
        return $this->date('d/m/Y');
    }
    
    public function setDate(date $date)
    {
        $this->date = $date;
    }
}