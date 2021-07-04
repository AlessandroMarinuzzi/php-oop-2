<?php
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
?>