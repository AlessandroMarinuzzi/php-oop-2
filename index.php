<?php

class Product{
    protected $brand;
    protected $name;
    protected $description;
    protected $quantity;
    protected $price;

    function __construct(string $brand, string $name, string $description, int $quantity, float $price)
    {
        $this->brand=$brand;
        $this->name=$name;
        $this->description=$description;
        $this->quantity=$quantity;
        $this->price=$price;
    }
}

class Laptop extends Product{
    protected $intel;
    protected $ram;
    protected $ssd;

    function __construct(string $brand, string $name, string $description, int $quantity, float $price, string $intel, string $ram, string $ssd)
    {
        parent::__construct($brand, $name, $description, $quantity, $price);
        $this->intel= $intel;
        $this->ram= $ram;
        $this->ssd=$ssd;
    }
}

$lenovoThinkpad = new Laptop ("Lenovo", "ThinkPad E15", "NOTEBOOK: Lorem ipsum.", 10, 769.90, "i5-1135G7", "8GB", "SSD 256GB");
var_dump($lenovoThinkpad);