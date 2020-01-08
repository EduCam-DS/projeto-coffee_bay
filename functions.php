<?php

require_once('classes/CadastrarMembro.php');
require_once('classes/SessionMembro.php');

// Validação Cadastro Membro
if (isset($_POST['NomeMembro'])){
    new Membro($_POST['NomeMembro'],$_POST['EmailMembro'],$_POST['senha'], $_POST['validaSenha']);

}

// Session login
if (isset($_POST['emailLogin'])){
    new Session($_POST['emailLogin'],$_POST['senhaLogin']);

    if(isset($logado)){
            header('location: membro.php');
    }
    
}

?>