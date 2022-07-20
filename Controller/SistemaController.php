<?php

namespace Controller;

use Core\Controller;

class SistemaController extends Controller
{

    public function index(): void
    {
        $this->CadastroUsuarioss();
    }
    
    public function CadastroUsuarioss(): void
    {
        $this->sessaoDesligada();

        $this->carregarTemplateDoSistema('sistema/CadastroUsuarios', array());
    }

    public function sair(): void
    {
        $this->sessaoDesligada();
        $this->carregarTemplateDoSistema('sistema/sair', array());
    }
}