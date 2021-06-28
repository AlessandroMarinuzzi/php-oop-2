<?php
#Product classes instances
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

#User classes instance
class User{
    protected $name;
    protected $surname;
    protected $email;
    protected $address;
    
    function __construct(string $name, string $surname, string $email, string $address){
        $this-> name = $name;
        $this-> surname = $surname;
        $this-> email = $email;
        $this-> address = $address;

    }
    public function addCreditCard($creditCard)
    {
        $this->creditCard = $creditCard;
    }

}
class PremiumUser extends User {
    protected $username;
    protected $password;
    protected $discount;

    function __construct(string $name, string $surname, string $email, string $address, string $username, string $password, int $discount){
        parent::__construct($name, $surname, $email, $address);
        $this->username=$username;
        $this->password=$password;
        $this->discount=$discount;
    }
}