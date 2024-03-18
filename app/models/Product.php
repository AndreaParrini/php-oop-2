<?php
require_once __DIR__ . '/Animal.php';
require_once __DIR__ . '/InfoOfProduct.php';
class Product
{
    public $name;
    public $price;
    public $stock;
    public $image;
    public $description;
    public $brand;
    public $animal;
    public $type;



    public function __construct(string $name, float $price, int $stock, string $image, string $description, string $brand, Animal $animal, InfoOfProduct $type)
    {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
        $this->image = $image;
        $this->description = $description;
        $this->brand = $brand;
        $this->animal = $animal;
        $this->type = $type;
    }
}
