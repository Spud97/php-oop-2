<?php
require_once __DIR__ . "/Product.php";
class Cucce extends Product
{
    private $dimensioni;
    private $materiale;

    function __construct($_nome, $_prezzo, $_dimensioni, $_materiale)
    {
        parent::__construct($_nome, $_prezzo);
        $this->setDimensioni($_dimensioni);
        $this->setMateriale($_materiale);
    }

    public function getDimensioni()
    {
        return $this->dimensioni;
    }

    public function setDimensioni($dimensioni)
    {
        $this->dimensioni = $dimensioni;

        return $this;
    }

    public function getMateriale()
    {
        return $this->materiale;
    }

    public function setMateriale($materiale)
    {
        $this->materiale = $materiale;

        return $this;
    }
}
