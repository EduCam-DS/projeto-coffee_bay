<?php
// require_once('functions.php');

class Session
{
    private $nome;
    private $email;
    private $senha;

    public function __construct($xNome, $xEmail, $xSenha){
        $this->nome = $xNome;
        $this->email = $xEmail;
        $this->senha = $xSenha;

        $this->sessionLogin();
    }

    public function sessionLogin()
    {

        global $retorno;
        global $logado;
        global $login;

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

        if ($validaEmail === true && $validaSenha === true) {
            unset($validaEmail);
            unset($validaSenha);
            unset($jsonMembros);
            $login = true;
            // echo "logado";
            

        }else{
            $login = false;
            $retorno = "Email ou senha inválido! Tente novamente...";
            // unset($retorno);
            unset($validaEmail);
            unset($validaSenha);
            unset($jsonMembros);
            
        }

    }

}

?>