<?php
class Product
{
    public $name;
    public $price;
    public $stock;
    public $image;
    public $animal;
    public $type;


    public function __construct($name, $price, $stock, $image, Animal $animal, TypeOfProduct $type)
    {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
        $this->image = $image;
        $this->animal = $animal;
        $this->type = $type;
    }
}

class Animal
{
    public $category;
    public $size;

    public function __construct($category, $size)
    {
        $this->category = $category;
        $this->size = $size;
    }
}

class TypeOfProduct
{
    public $type;
    public $dimensions;
    public $weight;

    public function __construct($type, $dimensions, $weight)
    {
        $this->type = $type;
        $this->dimensions = $dimensions;
        $this->weight = $weight;
    }
}

$product = new Product('Shampo per cani', 13.99, 80, '', new Animal('cats', 'M'), new TypeOfProduct('prodotto', '250ml', 140));

var_dump($product);
