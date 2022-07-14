<?php

class Product
{
    public $nome;
    public $prezzo;

    function __construct($_nome, $_prezzo)
  {
    $this->setNome($_nome);
    $this->setPrezzo($_prezzo);
  }

  public function getNome()
  {
    return $this->nome;
  }

  public function setNome($nome)
  {
    $this->nome = $nome;

    return $this;
  }

  public function getPrezzo()
  {
    return $this->prezzo;
  }

  public function setPrezzo($prezzo)
  {
    $this->prezzo = $prezzo;

    return $this;
  }
}
