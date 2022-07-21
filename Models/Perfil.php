<?php

namespace Models;

use PDO;

class Perfil {

  private ?int $id;
  private int $id_login;
  private string $nome;

  public function __conctruct(){}

  public function __get($atributo)
  {
      return $this->$atributo;
  }
  
  public static function buscaDoBanco(): array
  {
    $sql = Conexao::getConexao()->prepare("SELECT `PER_ID`, `PER_NOME` FROM `PERFIL` WHERE `USU_ID` = :id");
    $sql->bindValue(":id", $_SESSION['USU_ID']);
    $sql->execute();
    if ($sql->rowCount() > 0) {
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    return array();
  }
}