<?php
require __DIR__ . "/classes/product.php";
require __DIR__ . "/classes/user.php";
require __DIR__ . "/classes/creditcard.php";
require __DIR__ . "/classes/laptop.php";
require __DIR__ . "/classes/premium.php";
# Test CreditCard class
$lenovoThinkpad = new Laptop ("Lenovo", "ThinkPad E15", "NOTEBOOK: Lorem ipsum.", 10, 769.90, "i5-1135G7", "8GB", "SSD 256GB");
// var_dump($lenovoThinkpad);

$user1 = new User ("Sandro","Borghi","Sandro.Borghi@gmail.com","Via Mario Draghi 11");
// var_dump($user1);

$mastercard = new CreditCard("1111-2222-3333-4444", 567, "07/25");
// var_dump($mastercard);

$user1->addCreditCard($mastercard);
// var_dump($user1);

$prUser = new PremiumUser("Andrei", "Burbulia", "And.Burb@gmail.com","Via Donnarumma","Andulia","abcd");
// $prUser->setDiscount();
// var_dump($prUser);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP2</title>
</head>
<body>
<?php
        # Print laptop
        echo "
        <div>Name: {$lenovoThinkpad->name}</div>
        <div>Brand: {$lenovoThinkpad->brand}</div>
        <div>Description: {$lenovoThinkpad->description}</div>
        <div>Price: {$lenovoThinkpad->getPrice()}</div>
        <br>
        ";  
    ?>
</body>
</html>