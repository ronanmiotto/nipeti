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
        <h1 class="title">Participante / Visualizar dados</h1>
        <table class="table table-hover">
          <tbody>
            <tr>
              <th scope="row"><h3>Tipo</h3></th>
              <td><h3 class="color-types"><?= projects_participate()[$participate->tipo] ?></h3></td>
            </tr>
            <tr>
              <th scope="row">Código</th>
              <td><?= $participate->idParticipa ?></td>
            </tr>
            <tr>
              <th scope="row">Projeto</th>
              <td><?php echo $this->project->find($participate->projeto_idProjeto)->titulo ?></td>
            </tr>
            <tr>
              <th scope="row">Participante</th>
              <td><?php echo $this->user->find($participate->usuario_idUsuario)->nome ?></td>
            </tr>
            <tr>
            <th scope="row">Data Início</th>
              <td><?= $participate->dataInicio ?></td>
            </tr>
            <tr>
              <th scope="row">Data Fim</th>
            <td><?= $participate->dataFim ?></td>
          </tr>
          </tbody>
        </table>
        <a href="/participate/index" class="btn btn-primary">Voltar</a>
      </div>
    </div>
  </div>
</body>
<?php $this->load->view('footer') ?>
</html>
