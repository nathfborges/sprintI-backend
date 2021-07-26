<?php

namespace Jumpfy\Perfil\Login;

class SenhaInvalidaException extends \DomainException
{
    public function __construct()
    {
        $mensagem = "A senha deve ter 8 caracteres." . PHP_EOL;
        parent::__construct($mensagem);
    }

}