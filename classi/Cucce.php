<?php

class Cucce extends Product
{
    public $dimensioni;
    public $materiale;

    function __construct($_dimensioni, $_materiale)
    {
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
