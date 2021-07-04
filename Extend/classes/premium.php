<?php
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
?>