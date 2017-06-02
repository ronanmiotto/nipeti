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
        <h1 class="title">Publicação / Visualizar dados</h1>
        <table class="table table-hover">
          <tbody>
            <tr>
              <th scope="row"><h3>Tipo</h3></th>
              <td><h3 class="color-types"><?= types_publications()[$publication->tipo] ?></h3></td>
            </tr>
            <tr>
              <th scope="row">Código</th>
              <td><?= $publication->idPublicacao ?></td>
            </tr>
            <tr>
              <th scope="row">Título</th>
              <td><strong><?= $publication->titulo ?></strong></td>
            </tr>
            <tr>
              <th scope="row">Descrição</th>
              <td><?= $publication->descricao ?></td>
            </tr>
            <tr>
              <th scope="row">Localidade</th>
              <td><?= $publication->localidade ?></td>
            </tr>
            <tr>
              <th scope="row">Área</th>
              <td><?= $publication->area ?></td>
            </tr>
            <tr>
              <th scope="row">Data</th>
              <td><?= $publication->data ?></td>
            </tr>
            <tr>
              <th scope="row">Cooautores</th>
              <td><?= $publication->cooautores ?></td>
            </tr>
            <tr>
              <th scope="row">Volume</th>
              <td><?= $publication->volume ?></td>
            </tr>
            <tr>
              <th scope="row">Páginas</th>
              <td><?= $publication->paginas ?></td>
            </tr>
            <tr>
              <th scope="row">Link</th>
              <td><a href="<?= $publication->link ?> " target="_blank"><?= $publication->link ?></a></td>
            </tr>
            <tr>
              <th scope="row">Visualizar arquivo</th>
              <td><a href="/projects/<?= $project->arquivo ?>" target="_blank">Arquivo.pdf</a></td>
            </tr>
          </tbody>
        </table>
        <a href="/publication/index" class="btn btn-primary">Voltar</a>
      </div>
    </div>
  </div>
</body>
<?php $this->load->view('footer') ?>
</html>
