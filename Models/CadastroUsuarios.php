<?php

namespace Models;

use PDO;

class CadastroUsuarios
{

  private ?int $id;
  private string $nome;
  private string $email;
  private string $senha;
  private int $perfil;

  public function __conctruct()
  {
  }

  public function __set($atributo, $value): void
  {
    if ($atributo == 'id') {
      $this->$atributo = (int) filter_var(trim($value), FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if ($atributo == 'nome') {
      $this->$atributo = filter_var(trim($value), FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if ($atributo == 'email') {
      $this->$atributo = filter_var(trim($value), FILTER_SANITIZE_EMAIL);
    }
    if ($atributo == 'senha') {
      $this->$atributo = filter_var(trim($value), FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if ($atributo == 'perfil') {
      $this->$atributo = (int) $value;
    }
  }

  public function __get($atributo)
  {
    return $this->$atributo;
  }

  public static function buscaDoBanco(): array
  {
    $sql = Conexao::getConexao()->prepare("SELECT `C`.`CAD_ID`, `C`.`USU_ID`, `C`.`PER_ID`, `P`.`PER_NOME`, `C`.`CAD_NOME`, `C`.`CAD_EMAIL`, `C`.`CAD_SENHA` FROM `USUARIOS_CADASTRADOS` `C`
    JOIN `PERFIL` `P` ON(`C`.`PER_ID` = `P`.`PER_ID`)
    WHERE `C`.`USU_ID` = :id");
    $sql->bindValue(":id", $_SESSION['USU_ID']);
    $sql->execute();
    if ($sql->rowCount() > 0) {
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    return array();
  }

  public function inserirNoBanco(): void
  {

    $sql = Conexao::getConexao()->prepare("INSERT INTO `USUARIOS_CADASTRADOS` VALUES
      (NULL, :usuario, :perfil, :nome, :email, :senha)");
    $sql->bindValue(":nome", $this->nome);
    $sql->bindValue(":email", $this->email);
    $sql->bindValue(":senha", $this->senha);
    $sql->bindValue(":perfil", $this->perfil);
    $sql->bindValue(":usuario", $_SESSION["USU_ID"]);
    $sql->execute();
  }

  public function atualizaNoBanco(): void
  {

    $sql = Conexao::getConexao()->prepare("UPDATE `USUARIOS_CADASTRADOS` SET
      `CAD_NOME` = :nome,
      `CAD_EMAIL` = :email,
      `CAD_SENHA` = :senha,
      `PER_ID` = :perfil
      WHERE `USUARIOS_CADASTRADOS`.`CAD_ID` = :id AND `USUARIOS_CADASTRADOS`.`USU_ID` = :usuario");
    $sql->bindValue(":id", $this->id);
    $sql->bindValue(":nome", $this->nome);
    $sql->bindValue(":email", $this->email);
    $sql->bindValue(":senha", $this->senha);
    $sql->bindValue(":perfil", $this->perfil);
    $sql->bindValue(":usuario", $_SESSION["USU_ID"]);
    $sql->execute();
  }

  public function apagaNoBanco(): void
  {

    $sql = Conexao::getConexao()->prepare("DELETE FROM `USUARIOS_CADASTRADOS` WHERE `USUARIOS_CADASTRADOS`.`CAD_ID` = :id AND `USUARIOS_CADASTRADOS`.`USU_ID` = :usuario");
    $sql->bindValue(":id", $this->id);
    $sql->bindValue(":usuario", $_SESSION["USU_ID"]);
    $sql->execute();
  }
}
