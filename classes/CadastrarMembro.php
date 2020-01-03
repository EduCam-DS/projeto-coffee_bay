<?php

require_once('header.php');

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
        // global $erroMembro;
        // global $teste;

        // if(isset($_POST['NomeMembro'])){

            if (strlen($_POST['NomeMembro']) == 0 || strlen($_POST['NomeMembro']) > 20) {
                $erroMembro = "Utilizar até 20 caracteres para o nome!";
                return $erroMembro;
                header("location: index.php");
                // echo "<div class='alert alert-warning'> Utilizar até 10 caracteres para o nome!<br> </div>";
            }else if (filter_var($_POST['EmailMembro'], FILTER_VALIDATE_EMAIL) == FALSE) {
                $erroMembro = "Utilizar um formato de email valido!";
                return $erroMembro;
                header("location: index.php");
                // echo "<div class='alert alert-warning'> Utilizar um email valido!<br> </div>";
            }else if ($_POST['senha'] != $_POST['ValidaSenha']){
                $erroMembro = "As senhas digitadas não estão iguais!";
                return $erroMembro;
                header("location: index.php");
                // echo "<div class='alert alert-warning'> As senhas digitadas não estão iguais!<br></div>";
            } else{
                // $teste = new Membro($_POST['NomeMembro'],$_POST['EmailMembro'],$_POST['senha']);
                $erroMembro = 'Parabéns '.$_POST['NomeMembro'].'! Agora você é um membro Coffee Bay!';
                // header("location: index.php");
                // echo "<div class='alert alert-warning'> Parabens! Agora você é um membro Coffee Bay!<br> </div>";
                
            }
        // }
    }

    // public function dados()
    // {   
        // header("location: index.php");
        // return var_dump ($this->nome, $this->email, $this->senha);
        // return $teste3 = "<div class='alert alert-warning'> Parabens! Agora você é um membro Coffee Bay!<br> </div>";
    // }
}


?>