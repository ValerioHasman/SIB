<?php

namespace Controller;

use Core\Controller;
use Models\CadastroUsuarios;
use Models\Perfil;

class SistemaController extends Controller
{

    public function index(): void
    {
        $this->cadastroUsuarios();
    }
    
    public function cadastroUsuarios(): void
    {
        $this->sessaoDesligada();

        switch (isset($_POST['tipo']) ? $_POST['tipo'] : '' ){
            case 'atualizar':
                $this->modalOnLoad['atualizado'] = $this->atualizar($_POST);
                break;
            case 'cadastrar':
                $this->cadastrar($_POST);
                break;
            case 'apagar':
                $this->modalOnLoad['deletado'] = $this->apagar($_POST);
                break;
            default:
                break;
        }
        //$this->cadastrar($_POST);

        $this->carregarTemplateDoSistema('sistema/cadastroUsuarios',
            array(
                'CadastroUsuarios' => CadastroUsuarios::buscaDoBanco(),
                'Perfil' => Perfil::buscaDoBanco()
            )
        );
    }

    public function sair(): void
    {
        $this->sessaoDesligada();
        $this->carregarTemplateDoSistema('sistema/sair', array());
    }
}