<!DOCTYPE html>
<html>
  <?php $this->load->view('head') ?>
  <body>
    <?php $this->load->view('nav') ?>
    <div class="container main">
      <?php echo flash_message(); ?>
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-sm-3" id="sidebar">
          <?php $this->load->view('menu') ?>
        </div>

        <div class="col-sm-9">
          <?php if ($type != 4 || $type != 2){?>
          <a href="/publication/new_publication" class="btn btn-success btn-lg">Nova Publicação</a>
          <hr>
          <?php } ?>
          <div class="col-sm-9">
            <h1 class="title">Lista de publicações</h1>
          </div>
          <table id="employee_data" class="table table-bordered table-hover table-color">
            <thead>
              <tr>
                <th>Código</th>
                <th>Tipo</th>
                <th>Título</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($publications as $value) { ?>
              <tr>
                <td><?php echo $value->idPublicacao ?></td>
                <td><?php echo types_publications()[$value->tipo] ?></td>
                <td class="width_index_publication"><?php echo mb_strimwidth($value->titulo, 0 , 55, "...") ?></td>
                <td>
                  <a href="/publication/show?idPublicacao=<?= $value->idPublicacao ?>" class="btn btn-primary">Visualizar</a>
                  <?php if ($type == 1 || $type == 3){?>
                  <a href="/publication/edit?idPublicacao=<?= $value->idPublicacao ?>" class="btn btn-primary">Editar</a>
                  <a href="/publication/destroy?idPublicacao=<?= $value->idPublicacao ?>" class="btn btn-danger" onclick="return confirm_destroy()">Deletar</a>
                  <?php } ?>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
  <?php $this->load->view('footer') ?>
</html>
