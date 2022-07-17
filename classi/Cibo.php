<?php
require_once __DIR__ . "/Product.php";

class Cibo extends Product
{
    private $scadenza;
    private $gusto;

    function __construct($_nome, $_prezzo, $_scadenza, $_gusto)
    {
        parent::__construct($_nome, $_prezzo);
        $this->setScadenza($_scadenza);
        $this->setGusto($_gusto);
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
