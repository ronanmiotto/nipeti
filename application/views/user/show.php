<!DOCTYPE html>
<html>
<?php $this->load->view('head') ?>
<body>
  <?php $this->load->view('nav') ?>
  <div class="container main">
    <div class="row row-offcanvas row-offcanvas-right">
      <div class="col-sm-3" id="sidebar">
        <?php $this->load->view('menu') ?>
      </div>
      <div class="col-sm-9">
        <h1 class="title">Visualizar dados</h1>
        <table class="table table-hover">
          <tbody>
              <img src="<?= base_url()?>images/users/<?= $user->imagem ?>" alt="Imagem do Usuário" class="img-rounded">
            <tr>
              <th scope="row">Código</th>
              <td><?= $user->idUsuario ?></td>
            </tr>
            <tr>
              <th scope="row">Nome</th>
              <td><?= $user->nome ?></td>
            </tr>
            <tr>
              <th scope="row">RG</th>
              <td><?= $user->rg ?></td>
            </tr>
            <tr>
              <th scope="row">CPF</th>
              <td><?= $user->cpf ?></td>
            </tr>
            <tr>
              <th scope="row">Sexo</th>
              <td><?= $user->sexo ?></td>
            </tr>
            <tr>
              <th scope="row">Data de Nascimento</th>
              <td><?= $user->dataNasc ?></td>
            </tr>
            <tr>
              <th scope="row">Endereço</th>
              <td><?= $user->endereco ?></td>
            </tr>
            <tr>
              <th scope="row">Número</th>
              <td><?= $user->numero ?></td>
            </tr>
            <tr>
              <th scope="row">Bairro</th>
              <td><?= $user->bairro ?></td>
            </tr>
            <tr>
              <th scope="row">Cidade</th>
              <td><?= $user->cidade ?></td>
            </tr>
            <tr>
              <th scope="row">CEP</th>
              <td><?= $user->cep ?></td>
            </tr>
            <tr>
              <th scope="row">UF</th>
              <td><?= $user->uf ?></td>
            </tr>
            <tr>
              <th scope="row">E-mail</th>
              <td><?= $user->email ?></td>
            </tr>
            <tr>
              <th scope="row">Telefone/Celular</th>
              <td><?= $user->fone ?></td>
            </tr>
            <tr>
              <th scope="row">Curso</th>
              <td><?= courses()[$user->curso] ?></td>
            </tr>
            <tr>
              <th scope="row">Período</th>
              <td><?= periods()[$user->periodo]  ?></td>
            </tr>
            <tr>
              <th scope="row">Turno</th>
              <td><?= turns()[$user->turno] ?></td>
            </tr>
            <tr>
              <th scope="row">Principal Formação</th>
              <td><?= $user->formacao ?></td>
            </tr>
            <tr>
              <th scope="row">Demais Formações</th>
              <td><?= $user->demaisFormacao ?></td>
            </tr>
            <tr>
              <th scope="row">Lattes</th>
              <td><a href="<?= $user->lattes ?>"><?= $user->lattes ?></a></td>
            </tr>
            <tr>
              <th scope="row">Observações</th>
              <td><?= $user->observacoes ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
<?php $this->load->view('footer') ?>
</html>
