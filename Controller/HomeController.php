<?php

namespace Controller;

use Core\Controller;
use Models\Usuario;

class HomeController extends Controller
{

    public function index(): void
    {
        if(isset($_POST) & !empty($_POST)){
            $this->logar($_POST);
        }


        $this->sessaoLigada();

        $this->carregarTemplate('home/home', array());
    }
}
