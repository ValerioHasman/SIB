<div class="fora"><a href="sistema/sair" class="btn btn-outline-danger btn-sm"><i class="bi bi-x-lg"></i></a></div>
<div>
  <div class="col-12">
    <div class="card mx-4 my-4 px-3 cartao rounded-5">
      <h2 class="titulo form-control my-3 py-3 rounded-4">Cadastro de Usuários</h2>
      <form class="row cinza py-3 mx-0">
        <div class="col-4">
          <label for="nome">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome" />
        </div>
        <div class="col-4">
          <label for="email">E-mail</label>
          <input type="email" class="form-control" id="email" name="email" />
        </div>
        <div class="col-4">
          <label for="senha">Senha</label>
          <input type="password" class="form-control" id="senha" name="senha" />
        </div>
        <div class="col-4">
          <label for="perfil">Perfil</label>
          <select class="form-select" id="perfil" name="perfil">
            <option selected></option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="col-4">
          <div class="mt-4 d-grid gap-2">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
