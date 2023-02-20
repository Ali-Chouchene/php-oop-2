<?php
require_once __DIR__ . '/../data/data.php';

class ProductType
{
    public $name;


    public function __construct($types)
    {
        $this->name = $types;
    }
}
