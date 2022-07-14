<?php

class Giochi extends Product
{
    public $colore;
    public $genere;

    function __construct($_colore, $_genere)
    {
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
