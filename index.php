<?php
require_once "classi/Product.php";
require_once "classi/Cibo.php";
require_once "classi/Giochi.php";
require_once "classi/Cucce.php";
require_once "classi/Customer.php";

$customer = new Customer();

$cibo1 = new Cibo ("Patè Cesar", "0.99€", 2025, "Manzo");
$cibo2 = new Cibo ("Monge Simba", "2.49€", 2026, "Pollo");

$gioco1 = new Giochi ("Anatra Kolding", "12.00€", "grigio", "peluche");
$gioco2 = new Giochi ("Dog Brick", "21.52€", "blu&rosa", "rompicapo");

$cuccia1 = new Cucce ("Letto Cozy Kingdom", "14.99€", "45x45x20", "tessuto");
$cuccia2 = new Cucce ("Cuccia Bolster", "59.99€", "50x50x30", "MemoryFoam");