<?php

require_once 'Usuario.php';
require_once 'Cadastro.php';
require_once 'SenhaInvalidaException.php';


use Jumpfy\Perfil\Login\{Usuario, Cadastro};

$conta = new Usuario();
$cadastro = new Cadastro();
$cadastro->cadastrar($conta, 'Natzinha', 'nathfborges', 'janta');
