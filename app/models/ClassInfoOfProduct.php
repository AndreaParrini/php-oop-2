<?php
class InfoOfProduct
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
