<?php

namespace Models;

class Perfil {

  private ?int $id;
  private int $id_login;
  private string $nome;

  public function __conctruct(){}

  public function __get($atributo)
  {
      return $this->$atributo;
  }

  

}