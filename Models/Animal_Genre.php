<?php
require_once __DIR__ . '/../data/data.php';

class AnimalGenre
{
    public $name;


    public function __construct($genres)
    {
        $this->name = $genres;
    }
    public function getTypes()
    {
        return $this->name;
    }
}
