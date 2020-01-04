<?php

require_once('header.php');

// Validação Cadastro Membro

if (isset($_POST['NomeMembro'])){
    $validacaoMembro = new Membro($_POST['NomeMembro'],$_POST['EmailMembro'],$_POST['senha'], $_POST['validaSenha']);
    
}


?>