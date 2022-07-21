<?php

namespace Core;

use Models\CadastroUsuarios;
use Models\Usuario;

abstract class Controller
{

    protected array $dados;

    protected function carregarTemplate(string $nomeView, array $dadosModel): void
    {
        require_once 'Views/template/template.php';
    }

    protected function carregarTemplateDoSistema(string $nomeView, array $dadosModel): void
    {
        require_once 'Views/template/templateDoSistema.php';
    }

    protected function carregarViewNoTemplate(string $nomeView, array $dadosModel): void
    {
        extract($dadosModel);
        require_once 'Views/' . $nomeView . '.php';
    }

    protected function sessaoLigada(): void
    {
        if (!empty($_SESSION['USU_ID'])) {
            header('Location: ' . $GLOBALS["base"] . 'sistema/index');
            exit;
        }
    }
    protected function sessaoDesligada(): void
    {
        if (empty($_SESSION['USU_ID'])) {
            header('Location: ' . $GLOBALS["base"] . 'home/index');
            exit;
        }
    }

    protected function logar(array $post)
    {
        $usuario = new Usuario();
        $usuario->login = $post['login'];
        $usuario->senha = $post['senha'];
        $usuario->logar();
    }

    protected function cadastrar($post)
    {
        if(
            isset($post)
            & !empty($post['nome'])
            & !empty($post['email'])
            & !empty($post['senha'])
            & !empty($post['perfil'])
            ){
            $cadastrar = new CadastroUsuarios();
            $cadastrar->nome = $post['nome'];
            $cadastrar->email = $post['email'];
            $cadastrar->senha = $post['senha'];
            $cadastrar->perfil = $post['perfil'];
            $cadastrar->inserirNoBanco();    
        }
    }
}
