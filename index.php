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




#User
class User{
    protected $name;
    protected $surname;
    protected $email;
    protected $address;
    protected $creditCard;
    
    public function __construct(string $name, string $surname, string $email, string $address){
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

#Premium User
class PremiumUser extends User {
    protected $username;
    protected $password;
    protected $discount;

    public function __construct(string $name, string $surname, string $email, string $address, string $username, string $password){
        parent::__construct($name, $surname, $email, $address);
        $this->username=$username;
        $this->password=$password;
    }

    public function setUsername()
    {
       $this->username;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setDiscount()
    {
        if($this->username != null && $this->password != null){
            $this->discount = 20;
        }
    }
}


#Credit card
class CreditCard {
    protected $cardNumber;
    protected $cvv;
    protected $expDate;
    
    public function __construct(string $cardNumber, int $cvv, string $expDate) {
        $this->cardNumber = $cardNumber;
        $this->cvv = $cvv;
        $this->expDate = $expDate;
    }
}

# Test CreditCard class
$lenovoThinkpad = new Laptop ("Lenovo", "ThinkPad E15", "NOTEBOOK: Lorem ipsum.", 10, 769.90, "i5-1135G7", "8GB", "SSD 256GB");
var_dump($lenovoThinkpad);
$lenovoThinkpad -> setRam("16GB");
var_dump($lenovoThinkpad);
var_dump($lenovoThinkpad -> getPrice());

$user1 = new User ("Sandro","Borghi","Sandro.Borghi@gmail.com","Via Mario Draghi 11");
var_dump($user1);

$mastercard = new CreditCard("1111-2222-3333-4444", 567, "07/25");
var_dump($mastercard);

$user1->addCreditCard($mastercard);
var_dump($user1);

$prUser = new PremiumUser("Andrei", "Burbulia", "And.Burb@gmail.com","Via Donnarumma","Andulia","abcd");
$prUser->setDiscount();
var_dump($prUser);


?>