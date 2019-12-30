<?php

class Membro
{
    private $nome;
    private $email;
    private $senha;

    public function __construct( $xNome, $xEmail, $xSenha)
    {
        $this->nome = $xNome;
        $this->email = $xEmail;
        $this->senha = $xSenha;
    }

    public function dados()
    {
        return var_dump ($this->nome, $this->email, $this->senha);
    }
}


?>