<?php

class Product
{
  private string $nome;
  private float $prezzo;
  private string $id;

  function __construct($_nome, $_prezzo)
  {
    $this->setNome($_nome);
    $this->setPrezzo($_prezzo);
    $this->id = uniqid();
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

  public function getId()
  {
    return $this->id;
  }
}
