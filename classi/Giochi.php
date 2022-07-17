<?php
require_once __DIR__ . "/Product.php";
class Giochi extends Product
{
    private $colore;
    private $genere;

    function __construct($_nome, $_prezzo, $_colore, $_genere)
    {
        parent::__construct($_nome, $_prezzo);
        $this->setColore($_colore);
        $this->setGenere($_genere);
    }

    public function getColore()
    {
        return $this->colore;
    }

    public function setColore($colore)
    {
        $this->colore = $colore;

        return $this;
    }

    public function getGenere()
    {
        return $this->genere;
    }

    public function setGenere($genere)
    {
        $this->genere = $genere;

        return $this;
    }
}
