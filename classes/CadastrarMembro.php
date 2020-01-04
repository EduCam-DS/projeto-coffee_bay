<?php

require_once('header.php');

class Membro
{
    private $nome;
    private $email;
    private $senha;
    private $validaSenha;

    public function __construct($xNome, $xEmail, $xSenha, $xValidaSenha, $xAdmin = FALSE)
    {
        $this->nome = $xNome;
        $this->email = $xEmail;
        $this->senha = $xSenha;
        $this->validaSenha = $xValidaSenha;
        $this->admin = $xAdmin;


        $this->validarDados();
        // $this->consultaMembro();
    }

    public function validarDados()
    {
        global $erroMembro;

            if (strlen($this->nome) == 0) {
                $erroMembro = "Você tem que ter um nome!";

            }elseif (strlen($this->nome) > 20) {
                $erroMembro = "Esse nome ai ficou muito grande!";

            }elseif ($this->consultaMembro() == 1){
                $erroMembro = "Esse membro já existe! Favor utilizar outro nome.";

            }elseif (filter_var($this->email, FILTER_VALIDATE_EMAIL) == FALSE) {
                $erroMembro = "Utilizar um formato de email valido!";

            }elseif ($this->consultaMembro() == 2){
                $erroMembro = "Esse email já foi utilizado! Favor utilizar outro email ou recuperar sua senha.";
            
            }elseif ($this->senha != $this->validaSenha){
                $erroMembro = "As senhas digitadas não estão iguais!";

            } else{
                $this->cadastrarMembro();
                $erroMembro = 'Bem vindo '.$this->nome.', agora você é um membro Coffee Bay! Faça seu login';
            }
    }

    public function cadastrarMembro()
    {
        $json = file_get_contents('membros.json');
        $jsonMembros = json_decode($json, true);
        $jsonMembros[] = ['nome' => $this->nome, 'email' => $this->email, 'senha' => $this->senha, 'admin' => $this->admin];
        $json = json_encode($jsonMembros);
        file_put_contents('membros.json', $json);
    }

    public function consultaMembro()
    {
        $json = file_get_contents('membros.json');
        $jsonMembros = json_decode($json, true);
           
        if (isset($jsonMembros[0]['nome'])){
            foreach ($jsonMembros as $value){
                if($this->nome == $value["nome"]){
                    return 1;
                }
            }
        }

        if (isset($jsonMembros[0]['email'])){            
            foreach ($jsonMembros as $value){
                if($this->email == $value["email"]){
                    return 2;
                }
            }
        }
    }
}

    


?>