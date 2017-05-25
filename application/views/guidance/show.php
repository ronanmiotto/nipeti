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
        <h1 class="title">Orientação / Visualizar dados</h1>
        <table class="table table-hover">
          <tbody>
            <tr>
              <th scope="row"><h3>Tipo</h3></th>
              <td><h3 class="color-types"><?= projects_guidance()[$guidance->tipoOrientacao] ?></h3></td>
            </tr>
            <tr>
              <th scope="row">Código</th>
              <td><?= $guidance->idOrientacao ?></td>
            </tr>
            <tr>
              <th scope="row">Servidor</th>
              <td><?php echo $this->user->find($value->usuario_idServidor)->nome ?></td>
            </tr>
            <tr>
              <th scope="row">Estudante</th>
              <td><?php echo $this->user->find($value->usuario_idEstudante)->nome ?></td>
            </tr>
            <tr>
            <th scope="row">Data Início</th>
              <td><?= $guidance->dataInicio ?></td>
            </tr>
            <tr>
              <th scope="row">Data Fim</th>
            <td><?= $guidance->dataFim ?></td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
<?php $this->load->view('footer') ?>
</html>
