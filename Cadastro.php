<?php

namespace Jumpfy\Perfil\Login;

use Jumpfy\Perfil\Login\Usuario;
use Jumpfy\Perfil\Login\SenhaInvalidaException;

class Cadastro
{

    public function cadastrar(Usuario $usuario, string $nome, string $username, string $senha)
    {
        try {
            $usuario->setNome($nome);
            $usuario->setUsername($username);
            $usuario->setSenha($senha);
            $mensagem = "Seu cadastro foi efetuado com sucesso. :)" . PHP_EOL;
         } catch (SenhaInvalidaException $exception) {
             $mensagem = $exception->getMessage() . "Erro de cadastro." . PHP_EOL;
         } finally {
             echo $mensagem;
         }
     
    }
    
}
