<?php

class Product {

    private $id;
    private $name;
    private $description;
    private $price;
    private $category;
    private $image;

    public function __construct($id = null, $name = null, $description = null, $price = null, $category = null, $image = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->category = $category;
        $this->image = $image;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getCategory(){
        return $this->category;
    }

    public function getImage(){
        return $this->image;
    }

}