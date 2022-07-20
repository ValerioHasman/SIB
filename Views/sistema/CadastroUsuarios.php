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

      <!-- fim do form -->

      <div class="row justify-content-between mt-3">
        <div class="col-auto">
          <label for="registros">Mostrar</label>
          <div class="registros">
            <div class="input-group input-group-sm mb-3 col-12">
              <select class="form-select" id="registros" name="registros">
                <option selected></option>
                <option value="8">8</option>
                <option value="25">25</option>
                <option value="50">50</option>
              </select>
            </div>
          </div>
          <label for="registros">registros</label>
        </div>
        <div class="col-auto">
          <label>Buscar</label>
          <div class="buscar">
            <div class="input-group input-group-sm mb-3 col-12">
              <input type="text" class="form-control" name="buscar" id="buscar">
            </div>
          </div>
        </div>
      </div>

      <!-- fim da busca -->

      <div>
        <table class="table table-bordered">
          <thead class="bg-info text-light">
            <tr>
              <th hidden scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">E-mail</th>
              <th scope="col">Perfil</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th hidden scope="row">1</th>
              <td>Marcos</td>
              <td>marcos@gmail.com</td>
              <td>Administrador</td>
              <td class="py-1">
                <div class="row justify-content-center">
                  <button class="btn btn-warning px-0 py-0 col-auto mx-1">
                    <img class="imagem" src="midias/icon_edit.png" />
                  </button>
                  <button class="btn btn-danger px-0 py-0 col-auto mx-1">
                    <img class="imagem" src="midias/icon_delete.png" />
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <th hidden scope="row">1</th>
              <td>Marcos</td>
              <td>marcos@gmail.com</td>
              <td>Administrador</td>
              <td class="py-1">
                <div class="row justify-content-center">
                  <button class="btn btn-warning px-0 py-0 col-auto mx-1">
                    <img class="imagem" src="midias/icon_edit.png" />
                  </button>
                  <button class="btn btn-danger px-0 py-0 col-auto mx-1">
                    <img class="imagem" src="midias/icon_delete.png" />
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <th hidden scope="row">1</th>
              <td>Marcos</td>
              <td>marcos@gmail.com</td>
              <td>Administrador</td>
              <td class="py-1">
                <div class="row justify-content-center">
                  <button class="btn btn-warning px-0 py-0 col-auto mx-1">
                    <img class="imagem" src="midias/icon_edit.png" />
                  </button>
                  <button class="btn btn-danger px-0 py-0 col-auto mx-1">
                    <img class="imagem" src="midias/icon_delete.png" />
                  </button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- fim da tabela -->

    </div>
  </div>
</div>

<?php
