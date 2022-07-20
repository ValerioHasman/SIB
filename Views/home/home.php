<div class="container limitelateral">
  <div class="row">
    <div class="form-control completar">
      <form class="mx-1 mt-5 mx-sm-5" method="POST">
        <div class="text-center">
          <img class="imagem" src="midias/logo_sib.png" />
        </div>
        <div class="mt-5 mb-3">
          <label for="login" >Login</label>
          <input type="text" name="login" class="form-control" id="login" />
        </div>
        <div class="mb-3">
          <label for="senha" >Senha</label>
          <input type="password" name="senha" class="form-control" id="senha">
        </div>
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary">Entrar</button>
        </div>
        <div class="mt-4 text-center">
          <a class="esqueceusenha" href="#">ESQUECEU SUA SENHA? CLIQUE AQUI.</a>
        </div>
        <?php

        if(isset($GLOBALS["ERRO_CADASTRO"]) & !empty($GLOBALS["ERRO_CADASTRO"])){
          echo $GLOBALS["ERRO_CADASTRO"];
          $GLOBALS["ERRO_CADASTRO"] = '';
        }
          
        ?>
      </form>
    </div>
  </div>
</div>