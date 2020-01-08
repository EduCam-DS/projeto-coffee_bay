<?php 
require_once('modal-acesso.php');
require_once('modal-membro.php'); 
// require_once('functions.php');
?>

<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title col-11">Acesse o Coffee Bay</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <section class="container row justify-content-center p-0 m-0">
          <form class="col-12 col-sm-10" action="" method="post">
            <div class="form-group">
              <label class="col-12 modal-text-form px-0 mb-0" for="exampleInputEmail1">Email</label>
              <input type="email" name="emailLogin" class="form-control col-12" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Seu email">
            </div>
            <div class="form-group">
              <label class="col-12 modal-text-form px-0 mb-0" for="exampleInputPassword1">Senha</label>
              <input type="password" name="senhaLogin" class="form-control col-12" id="exampleInputPassword1" placeholder="Senha">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
            </div>
            <button type="submit" nome="button" class="btn btn-warning col-12">ACESSAR</button>
          </form>
      </div>
      <div class="row justify-content-center">
        <h6 class="col-auto modal-text pb-3"><a href="" data-dismiss="modal" class="modal-text" data-target="#Modal-acesso"
            data-toggle="modal">Esqueçeu o email ou a senha?</a></h6>
      </div>
      <hr class="col-12 my-0 py-0">
      <div class="row justify-content-center align-items-center">
        <a href="index.php"><img class="col-auto modal-logo pl-1 pr-1" src="img/logo/coffee-logo.png" alt="logo"></a>
        <h6 class="col-12 col-sm-auto modal-text1 text-center text-sm-left pr-sm-2">Ainda não é membro Coffee Bay?</h6>
        <h6 class="modal-text col-12 col-sm-auto text-center pl-sm-0"><a href="#" class="modal-text text-center"
            data-dismiss="modal" data-target="#Modal-membro" data-toggle="modal">Clique aqui!</a></h6>
      </div>
      </section>
    </div>
  </div>
</div>
</div>