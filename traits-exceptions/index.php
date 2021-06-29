<?php

/*
Descrizione:
-Inventate due classi a piacere una che estende l'altra.
-Ciascuna classe avrá un constuctor e un paio di metodi a piacere.
-Create un paio di traits da usare nella classe figlia.
-in una funzione gestite eventuali errori usando un exception
-create una struttura dati (array di oggetti) e usate un ciclo foreach per mostrare i dati a schermo (con html, non var_dump)
-invocate il metodo nel quale avete usato l'exception passado al metodo dei valori sbagliati
-usate il try/catch per gestire il la richiesta e mostrare all'utente un messaggio di errore.
*/
trait verifyValues{
    public function setPrice($price){
        if(!is_float($price)){
            throw new Exception("The value that's been given is not valid!");
        }
        $this->price=$price;
    }
} 


class Product {
    protected $brand;
    protected $name;
    protected $description;
    protected $price;
    use verifyValues;

    public function __construct(string $brand, string $name, string $description, float $price)
    {
        $this->brand=$brand;
        $this->name=$name;
        $this->description=$description;
        $this->price=$price;
    }

    # Below Functions to get Product properties from outside.

    # BRAND
    public function setBrand($brand){
        $this->brand=$brand;
    }
    public function getBrand(){
        return $this->brand;
    }
    # /BRAND

    # NAME
    public function setName($name){
        $this->name=$name;
    }
    public function getName(){
        return $this->name;
    }
    # /NAME

    # DESCRIPTION
    public function setDescription($description){
        $this->description=$description;
    }
    public function getDescription(){
        return $this->description;
    }
    # /DESCRIPTION

    # PRICE
    // public function setPrice($price){
    //     $this->price=$price;
    // }
    public function getPrice(){
        return $this->price;
    }
    # /PRICE
}

class Laptop extends Product{
    protected $intel;
    protected $ram;
    protected $ssd;

    public function __construct(string $brand, string $name, string $description, float $price, string $intel, string $ram, string $ssd)
    {
        parent::__construct($brand, $name, $description, $price);
        $this->intel= $intel;
        $this->ram= $ram;
        $this->ssd=$ssd;
    }

    # Below Functions to get Product properties from outside.

    # INTEL
    public function setIntel($intel){
        $this->intel=$intel;
    }
    public function getIntel(){
        return $this->intel;
    }
    # /INTEL

    # RAM
    public function setRam($ram){
        $this->ram=$ram;
    }
    public function getRam(){
        return $this->ram;
    }
    # /RAM

    # SSD
    public function setSsd($ssd){
        $this->ssd=$ssd;
    }
    public function getSsd(){
        return $this->ssd;
    }
    # /SSD
}

$lenovoThinkpad = new Laptop ("Lenovo", "ThinkPad E15", "NOTEBOOK: Lorem ipsum.", 769.90, "i5-1135G7", "RAM 8GB", "SSD 256GB");
$hp = new Laptop("HP", "PC 15s-fq2003sl Notebook", "NOTEBOOK: Lorem ipsum.", 849.99, "i7-1165G7", "RAM 8GB", "SSD 512GB");
$huawei = new Laptop("HUAWEI", "MateBook 14 Laptop", "Ultrabook DisplayFullView 2K.", 746.83, "Intel i5-10210U", "RAM 8GB", "SSD 512GB");
$lincplus = new Laptop("LincPlus", "P1", "PC Portatile Full HD da 13,3 pollici.", 299.00, "Celeron N4000", "RAM 4GB", "SSD 512GB");

$laptops = [
    $lenovoThinkpad,
    $hp,
    $huawei,
    $lincplus
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php foreach($laptops as $laptop){?>
            <div class="product_card">
                <div class="main_info">
                    <h2><?=  $laptop->getBrand(); ?></h2>
                    <h3><?=  $laptop->getName(); ?></h3>
                    <p><?=  $laptop->getDescription(); ?></p>
                    <span><?=  number_format((float)$laptop->getPrice(), 2, '.', ''); ?> €</span>
                </div>
                <div class="details">
                    <span><?=  $laptop->getIntel(); ?></span>
                    <span><?=  $laptop->getRam(); ?></span>
                    <span><?=  $laptop->getSsd(); ?></span>
                </div>
            </div>
        <?php } ?>

        <?php  try {
                $laptops[3]->setPrice("ciao!");
            } catch (Exception $e) {
                echo "Exception: " . $e->getMessage();
            } ?>
    </div>
</body>
</html>