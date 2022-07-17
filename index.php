<?php
require_once "classi/Product.php";
require_once "classi/Cibo.php";
require_once "classi/Giochi.php";
require_once "classi/Cucce.php";
require_once "classi/Customer.php";
require_once "classi/CreditCard.php";

$metodoPagamento = key_exists("metodo", $_GET) ? (int) $_GET["metodo"] : null;

$customer = new Customer();
$customer->register("Luca", "Dercole");

$products = [
    new Cibo("Patè Cesar", 0.99, 2025, "Manzo"),
    new Cibo("Monge Simba", 2.49, 2026, "Pollo"),
    new Giochi("Anatra Kolding", 12.00, "grigio", "peluche"),
    new Giochi("Dog Brick", 21.52, "blu&rosa", "rompicapo"),
    new Cucce("Letto Cozy Kingdom", 14.99, "45x45x20", "tessuto"),
    new Cucce("Cuccia Bolster", 59.99, "50x50x30", "MemoryFoam"),
];

$customer->cart->add($products[3], $products[5]);

if (!isset($metodoPagamento)) {
    echo "Imposta un metodo di pagamento nell'url";
  } else {
    $customer->checkout($metodoPagamento);
  }

var_dump($customer);