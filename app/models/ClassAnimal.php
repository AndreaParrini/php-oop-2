<?php
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
