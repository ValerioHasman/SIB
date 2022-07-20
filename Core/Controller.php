<?php

namespace Core;

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
        if( !empty($_SESSION['USU_ID']) ){
            header('Location: ' . $GLOBALS["base"] . 'sistema/index');
            exit;
        }
    }
    protected function sessaoDesligada(): void
    {
        if( empty($_SESSION['USU_ID']) ){
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
    
}
