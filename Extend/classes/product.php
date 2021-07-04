<?php
#Product class instance.
class Product{
    public $brand;
    public $name;
    public $description;
    protected $quantity;
    protected $price;

    public function __construct(string $brand, string $name, string $description, int $quantity, float $price)
    {
        $this->brand=$brand;
        $this->name=$name;
        $this->description=$description;
        $this->quantity=$quantity;
        $this->price=$price;
    }

    public function setPrice($price){
        $this->price=$price;
    }

    public function getPrice(){
        return $this->price;
    }
    public function setQuantity($quantity){
        $this->quantity=$quantity;
    }
}
?>