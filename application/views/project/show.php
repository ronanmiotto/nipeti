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
        <h1 class="title">Projeto / Visualizar dados</h1>
        <table class="table table-hover">
          <tbody>
            <tr>
              <th scope="row">Código</th>
              <td><?= $project->idProjeto ?></td>
            </tr>
            <tr>
              <th scope="row">Título</th>
              <td><strong><?= $project->titulo ?></strong></td>
            </tr>
            <tr>
              <th scope="row">Descrição</th>
              <td><?= $project->descricao ?></td>
            </tr>
            <tr>
              <th scope="row">Data Início</th>
              <td><?= $project->dataInicio ?></td>
            </tr>
            <tr>
              <th scope="row">Data Fim</th>
              <td><?= $project->dataFim ?></td>
            </tr>
            <tr>
              <th scope="row">Área</th>
              <td><?= $project->area ?></td>
            </tr>
            <tr>
              <th scope="row">Tipo de projeto</th>
              <td><?= projects()[$project->tipo] ?></td>
            </tr>
            <tr>
              <th scope="row">Status</th>
              <td><?= status()[$project->statuss] ?></td>
            </tr>
            <tr>
              <th scope="row">Fomento</th>
              <td><?= scholarships()[$project->fomento] ?></td>
            </tr>
            <tr>
              <th scope="row">Observações</th>
              <td><?= $project->observacoes ?></td>
            </tr>
            <tr>
              <th scope="row">Visualizar arquivo</th>
              <td><a href="/projects/<?= $project->arquivo ?>" target="_blank">Arquivo.pdf</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
<?php $this->load->view('footer') ?>
</html>
