<?php
require_once __DIR__ . '/../data/data.php';

class ProductType
{
    public $types = [];


    public function __construct($_genres)
    {
        $this->types = $_genres;
    }
}

foreach ($prod_types as $type) {
    $a[] = $type;
    $types = new ProductType($a);
}
