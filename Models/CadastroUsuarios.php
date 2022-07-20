<?php

namespace Models;

class CadastroUsuarios
{

  private ?int $id;
  private int $id_login;
  private string $nome;
  private string $email;
  private string $senha;
  private int $perfil;

  public function __conctruct()
  {
  }

  public function __set($atributo, $value): void
  {
    if ($atributo == 'nome') {
      $this->$atributo = filter_var(trim($value), FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if ($atributo == 'email') {
      $this->$atributo = filter_var(trim($value), FILTER_SANITIZE_EMAIL);
    }
    if ($atributo == 'senha') {
      $this->$atributo = md5(trim($value));
    }
    if ($atributo == 'perfil') {
      $this->$atributo = new Perfil();
    }
  }

  public function __get($atributo)
  {
    return $this->$atributo;
  }

  public function CadastraUsuarios() {
    
  }

}
