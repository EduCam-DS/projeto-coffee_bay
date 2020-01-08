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

        global $retorno;
        global $logado;

        $validaEmail = false;
        $validaSenha = false;

        $json = file_get_contents('membros.json');
        $jsonMembros = json_decode($json, true);

        foreach ($jsonMembros as $value) {
            if ($this->email == $value['email']){
                $validaEmail = true;
            }
        }

        foreach ($jsonMembros as $value) {
            if ($this->senha == $value['senha']){
                $validaSenha = true;
            }
        }

        if ($validaEmail == true && $validaSenha == true) {
            $logado = true;
            unset($validaEmail);
            unset($validaSenha);
            unset($jsonMembros);
            // echo "logado";
            // header('location: teste.php');
        }else{
            $retorno = "Email ou senha inválido! Tente novamente...";
            unset($retorno);
            unset($validaEmail);
            unset($validaSenha);
            unset($jsonMembros);
        }

    }

}