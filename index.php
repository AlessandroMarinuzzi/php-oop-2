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

