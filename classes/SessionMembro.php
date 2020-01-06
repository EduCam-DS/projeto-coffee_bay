<?php

class Session
{
    private $email;
    private $senha;

    public function __construct($xEmail, $xSenha){
        $this->email = $xEmail;
        $this->senha = $xSenha;

        $this->sessionLogin();
    }

    public function sessionLogin(){

        global $erroMembro;
        $retorno1 = false;
        $retorno2 = false;

        $json = file_get_contents('membros.json');
        $jsonMembros = json_decode($json, true);

        foreach ($jsonMembros as $value) {
            if ($this->email == $value['email']){
                $retorno1 = true;
            }
        }

        foreach ($jsonMembros as $value) {
            if ($this->senha == $value['senha']){
                $retorno2 = true;
            }
        }

        if ($retorno1 == true && $retorno2 == true) {
            unset($retorno1);
            unset($retorno2);
            unset($jsonMembros);
            echo "logado";
            return header('location: teste.php');
        }else{
            $erroMembro = "Email ou senha inválido! Tente novamente...";
            unset($retorno1);
            unset($retorno2);
            unset($jsonMembros);
        }

    }

}