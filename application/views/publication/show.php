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
        <h1 class="title">Publicações / Visualizar dados</h1>
        <table class="table table-hover">
          <tbody>
            <tr>
              <th scope="row"><h3>Tipo</h3></th>
              <td><h3 class="color-types"><?= types_projects()[$publication->tipo] ?></h3></td>
            </tr>
            <tr>
              <th scope="row">Código</th>
              <td><?= $guidance->idOrientacao ?></td>
            </tr>
            <tr>
              <th scope="row">Título</th>
              <td><strong><?= $guidance->titulo ?></strong></td>
            </tr>
            <tr>
              <th scope="row">Descrição</th>
              <td><?= $guidance->descricao ?></td>
            </tr>
            <tr>
              <th scope="row">Localidade</th>
              <td><?= $guidance->localidade ?></td>
            </tr>
            <tr>
              <th scope="row">Área</th>
              <td><?= $guidance->area ?></td>
            </tr>
            <tr>
              <th scope="row">Data</th>
              <td><?= $guidance->data ?></td>
            </tr>
            <tr>
              <th scope="row">Cooautores</th>
              <td><?= $guidance->cooautores ?></td>
            </tr>
            <tr>
              <th scope="row">Volume</th>
              <td><?= $guidance->volume ?></td>
            </tr>
            <tr>
              <th scope="row">Páginas</th>
              <td><?= $guidance->paginas ?></td>
            </tr>
              <th scope="row">Link</th>
              <td><?= $project->link ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
<?php $this->load->view('footer') ?>
</html>
