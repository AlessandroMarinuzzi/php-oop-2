<?php
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
?>