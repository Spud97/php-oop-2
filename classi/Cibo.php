<?php

class Cibo extends Product
{
    public $scadenza;
    public $gusto;

    function __construct($_scadenza, $_gusto)
    {
        $this->setScadenza($_scadenza);
        $this->setgusto($_gusto);
    }

    public function getScadenza()
    {
        return $this->scadenza;
    }

    public function setScadenza($scadenza)
    {
        $this->scadenza = $scadenza;

        return $this;
    }

    public function getGusto()
    {
        return $this->gusto;
    }

    public function setGusto($gusto)
    {
        $this->gusto = $gusto;

        return $this;
    }
}
