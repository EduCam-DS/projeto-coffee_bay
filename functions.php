<?php
require_once('classes/CadastrarMembro.php');
require_once('header.php');
require_once('modal-membro.php');


ValidarMembro();

function ValidarMembro()
{       
    if(isset($_POST['NomeMembro'])){

            if (strlen($_POST['NomeMembro']) == 0 || strlen($_POST['NomeMembro']) > 10) {
                echo "<div class='alert alert-warning'> Utilizar até 10 caracteres para o nome!<br> </div>";
            }else if (filter_var($_POST['EmailMembro'], FILTER_VALIDATE_EMAIL) == FALSE) {
                echo "<div class='alert alert-warning'> Utilizar um email valido!<br> </div>";
            }else if ($_POST['senha'] != $_POST['ValidaSenha']){
                echo "<div class='alert alert-warning'> As senhas digitadas não estão iguais!<br></div>";
            } else{
            $teste = new Membro($_POST['NomeMembro'],$_POST['EmailMembro'],$_POST['senha']);
                echo "<div class='alert alert-warning'> Parabens! Agora você é um membro Coffee Bay!<br> </div>";
                $teste->dados();
        }
    }
}

require_once('footer.php');

?>