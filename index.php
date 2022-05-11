<?php
include_once  __DIR__ . '/classes/Food.php';
include_once  __DIR__ . '/classes/Customer.php';

$croccantini = new Food('croccantini', 10.0, "Croccantini per cani", "carne, miele, riso");
$bocconcini = new Food('bocconcini', 30.0, "Bocconcini di carne", "carne");

$card = new CreditCard(502502003002225, 2045, 50.00);
$customer = new User("Luigi", "Micco", 53, $card, true);
echo $customer->buyProduct($croccantini);

$card->setBalance(200);
echo $customer->buyProduct($bocconcini);
echo "<br>";
echo "Disponibilità: " . $customer->getBalance();
