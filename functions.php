<?php

require_once('classes/CadastrarMembro.php');
require_once('classes/SessionMembro.php');

// Validação Cadastro Membro
if (isset($_POST['NomeMembro'])){
    new Membro($_POST['NomeMembro'],$_POST['EmailMembro'],$_POST['senha'], $_POST['validaSenha']);

}

// Session login
if (isset($_POST['emailLogin'])){
    new Session($_POST['NomeMembro'],$_POST['emailLogin'],$_POST['senhaLogin']);    
}

if(isset($login)){
    if($login == true){
       echo ($logado= 'BEM VINDO' .$_POST['NomeMembro']);
        // header('location: membro.php');

    }else {$logado = "ACESSE OU CRIE SUA CONTA";}
    }else {$logado = "ACESSE OU CRIE SUA CONTA";} ?>

?>