<?php require_once('classes/CadastrarMembro.php');
?>

<div class="modal fade" id="Modal-membro" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row col-auto justify-content-center align-items-center">
                    <a href="index.php"><img class="col-auto modal-logo pl-1 pr-1" src="img/logo/coffee-logo.png"
                            alt="logo"></a>
                    <h5 class="col-auto modal-title">Seja um membro Coffe Bay!</h5>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <section class="container row justify-content-center p-0 m-0">
                    <form class="col-12 col-sm-10" action="functions.php" method="post">
                        <div class="form-group">
                            <label class="col-12 modal-text-form px-0 mb-0" for="exampleInputEmail1">Nome</label>
                            <input type="text" name="NomeMembro" class="form-control col-12" placeholder="Digite seu Nome">
                        </div>
                        <div class="form-group">
                            <label class="col-12 modal-text-form px-0 mb-0" for="exampleInputEmail1">Email</label>
                            <input type="email" name="EmailMembro" class="form-control col-12" placeholder="Digite o Email">
                        </div>
                        <div class="form-group">
                            <label class="col-12 modal-text-form px-0 mb-0" for="exampleInputPassword1">Senha</label>
                            <input type="password" name="senha" class="form-control col-12" placeholder="Digite a Senha">
                        </div>
                        <div class="form-group">
                            <label class="col-12 modal-text-form px-0 mb-0" for="exampleInputPassword1">Confirme a
                                Senha</label>
                            <input type="password" name="ValidaSenha" class="form-control col-12" placeholder="Digite Novamente">
                        </div>
                        <button type="submit" name="button" class="btn btn-success col-12">INGRESSAR</button>
                    </form>
                                        
            </div>
            <hr class="col-12">
            <br>
            </section>
        </div>
    </div>
</div>
</div>