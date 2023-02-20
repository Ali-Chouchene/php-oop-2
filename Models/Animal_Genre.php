<?php
require_once __DIR__ . '/../data/data.php';

class AnimalGenre
{
    public $types = [];


    public function __construct($_genres)
    {
        $this->types = $_genres;
    }
    public function getTypes()
    {
        return $this->types;
    }
}

foreach ($animals as $pet) {
    $b[] = $pet;
    $types = new AnimalGenre($b);
}
