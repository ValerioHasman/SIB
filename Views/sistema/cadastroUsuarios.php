<div class="fora" title="Fechar"><a href="sistema/sair" class="btn btn-outline-danger btn-sm"><i class="bi bi-x-lg"></i></a></div>
<div>
  <div class="col-12">
    <div class="card mx-4 my-4 px-3 cartao rounded-5">
      <h2 class="titulo form-control my-3 py-3 rounded-4">Cadastro de Usuários</h2>
      <form method="POST" class="row cinza py-3 mx-0">
        <input hidden name="id" id="id" />
        <input hidden value="cadastrar" name="tipo" id="atua" />

        <div class="col-4">
          <label for="nome">Nome</label>
          <input required type="text" class="form-control" id="nome" name="nome" />
        </div>
        <div class="col-4">
          <label for="email">E-mail</label>
          <input required type="email" class="form-control" id="email" name="email" />
        </div>
        <div class="col-4">
          <label for="senha">Senha</label>
          <input required type="password" class="form-control" id="senha" name="senha" />
        </div>
        <div class="col-4">
          <label for="perfil">Perfil</label>
          <select required class="form-select" id="perfil" name="perfil">
            <option selected></option>
            <?= listaDePerfil($dadosModel['Perfil']) ?>
          </select>
        </div>
        <div class="col-4">
          <div id="grupo1" class="mt-4 d-grid gap-2">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </div>
          <div id="grupo2" class="row d-none">
            <div class="col-6">
              <div class="mt-4 d-grid gap-2">
                <button type="submit" class="btn btn-primary">Atualizar</button>
              </div>
            </div>
            <div class="col-6">
              <div class="mt-4 d-grid gap-2">
                <button type="button" class="btn btn-secondary" id="cancelar">Cancelar</button>
              </div>
            </div>
          </div>

        </div>
      </form>

      <!--<div class="row justify-content-between mt-3">
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
          <label>Buscar:</label>
          <div class="buscar">
            <div class="input-group input-group-sm mb-3 col-12">
              <input type="text" class="form-control" name="buscar" id="buscar">
            </div>
          </div>
        </div>
      </div> fim da busca -->

      <div class="tamanhoLimeteTabela mt-2">
        <table id="tabelaDeDados" class="table table-bordered">
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
            <?= cadastros($dadosModel['CadastroUsuarios']) ?>
          </tbody>
        </table>
      </div>

      <!-- fim da tabela -->
<!-- 
      <div class="row justify-content-between">
        <div class="col-auto">
          Mostrando de 1 até 8 de 8 registros
        </div>
        <nav class="col-auto">
          <ul class="pagination pagination-sm">
            <li class="page-item disabled">
              <a class="page-link">Anterior</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Seguinte</a>
            </li>
          </ul>
        </nav>
      </div> -->
    </div>
  </div>
</div>

<!-- Modal de deletar -->
<div class="modal fade" id="certezaDeletar" tabindex="-1" aria-labelledby="certezaDeletarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bolder" id="certezaDeletarLabel">Excluir Usuário</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post">

        <div class="modal-body">
          <p>Tem carteza que deseja excluir este usuário? Está ação não poderá ser revertida!</p>
          <input hidden name="id" value="" />
          <input hidden name="tipo" value="apagar" />
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-danger">Sim</button>
        </div>

      </form>
    </div>
  </div>
</div>

<?php

function listaDePerfil($dadosModel)
{
  $listaDePerfil = '';

  foreach ($dadosModel as $array) {
    $listaDePerfil .= '<option value="' . $array['PER_ID'] . '">' . $array['PER_NOME'] . '</option>';
  }

  return $listaDePerfil;
}


function cadastros($dadosModel)
{
  $linhasTabela = '';

  foreach ($dadosModel as $array) {
    $linhasTabela .= '<tr>
    <th hidden scope="row">' . $array['CAD_ID'] . '</th>
    <td>' . $array['CAD_NOME'] . '</td>
    <td>' . $array['CAD_EMAIL'] . '</td>
    <td>' . $array['PER_NOME'] . '</td>
    <td class="py-1">
      <div class="row justify-content-center">
        <button onClick="editar(\'atualiza' . $array['CAD_ID'] . $array['PER_ID'] . '\')" id="atualiza' . $array['CAD_ID'] . $array['PER_ID'] . '"
          class="btn btn-warning px-0 py-0 col-auto mx-1">
          <div style="display: none;">
            <div>' . $array['CAD_ID'] . '</div>
            <div>' . $array['CAD_NOME'] . '</div>
            <div>' . $array['CAD_EMAIL'] . '</div>
            <div>' . $array['CAD_SENHA'] . '</div>
            <div>' . $array['PER_ID'] . '</div>
          </div>
          <img class="imagem" src="midias/icon_edit.png" />
        </button>
        <button
          type="button"
          class="btn btn-danger px-0 py-0 col-auto mx-1"
          data-bs-toggle="modal"
          data-bs-target="#certezaDeletar"
          data-bs-whatever="' . $array['CAD_ID'] . '">
          <img class="imagem" src="midias/icon_delete.png" />
        </button>
      </div>
    </td>
  </tr>';
  }

  return $linhasTabela;
}

echo $this->modalOnLoad['deletado'] ?? '';
echo $this->modalOnLoad['atualizado'] ?? '';
