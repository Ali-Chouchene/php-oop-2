<?php
include_once __DIR__ . '/Animal_Genre.php';
include_once __DIR__ . '/Product_Type.php';
class Product
{
    public $title;
    public $price;
    public $rate;
    public $img;
    public $animal_type;
    public $product_type;



    public function __construct($_title, $_price, $_rate, $_img)
    {
        $this->title = $_title;
        $this->price = $_price;
        $this->rate = $_rate;
        $this->img = $_img;
        // $this->animal_type = $_genre;
        // $this->product_type = $product_type;
    }
}
// var_dump($product_type);
// var_dump($animal_type);
// , AnimalGenre $_genre,  ProductType $product_type