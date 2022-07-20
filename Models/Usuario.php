<?php

namespace Models;

class Usuario {

  private ?int $id;
  private string $login;
  private string $senha;

  public function __construct(){}

  public function __set($atributo, $value): void
  {
      if ($atributo == 'login'){
          $this->$atributo = filter_var(trim($value), FILTER_SANITIZE_SPECIAL_CHARS);
      }
      if ($atributo == 'senha'){
          $this->$atributo = (trim($value));
      }
  }

  public function __get($atributo)
  {
      return $this->$atributo;
  }
  
  public function logar(): void
    {
        $sql = Conexao::getConexao()->prepare("SELECT `USU_ID` FROM `USUARIO` WHERE `USU_LOGIN` = :login AND `USU_SENHA` = :senha");
        $sql->bindValue(":login",$this->login);
        $sql->bindValue(":senha",$this->senha);
        $sql->execute();
        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
            $_SESSION['USU_ID'] = $dado['USU_ID'];
            header('Location: ' . $GLOBALS["base"] .'sistema');
            exit;
        } else {
            $GLOBALS["ERRO_CADASTRO"] = "<br /><div style='text-align: center;' class='form-control alert-warning'>Erro ao entrar com seu cadastro,<br />verifique os dados e tente novemente</div>";
        }
    }

}