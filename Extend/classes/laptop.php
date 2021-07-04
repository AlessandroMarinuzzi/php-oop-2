<?php
#Laptop/single Product
class Laptop extends Product{
    protected $intel;
    protected $ram;
    protected $ssd;

    public function __construct(string $brand, string $name, string $description, int $quantity, float $price, string $intel, string $ram, string $ssd)
    {
        parent::__construct($brand, $name, $description, $quantity, $price);
        $this->intel= $intel;
        $this->ram= $ram;
        $this->ssd=$ssd;
    }

    public function setIntel($intel){
        $this->intel=$intel;
    }
    public function setRam($ram){
        $this->ram=$ram;
    }
    public function setSsd($ssd){
        $this->ssd=$ssd;
    }
}
?>