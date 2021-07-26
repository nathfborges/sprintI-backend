<?php

namespace Jumpfy\Perfil\Login;

use Jumpfy\Perfil\Login\SenhaInvalidaException;

class Usuario
{
    private string $nome;
    private string $username;
    private string $senha;

    private function validarSenha($senha)
    {
        if (strlen($senha) < 8) {
            throw new SenhaInvalidaException();
        }
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername(string $username)
    {
        $this->username = $username;

        return $this;
    }
 
    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha(string $senha)
    {
        $this->validarSenha($senha);
        $this->senha = $senha;
    }
}