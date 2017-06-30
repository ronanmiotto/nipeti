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
          <a href="/guidance/new_guidance" class="btn btn-success btn-lg">Nova Orientação</a>
          <hr>
          <div class="col-sm-9">
            <h1 class="title">Lista de orientações</h1>
          </div>
          <table id="employee_data" class="table table-bordered table-hover table-color">
            <thead>
              <tr>
                <th>Cód</th>
                <th>Servidor</th>
                <th>Estudante</th>
                <th>Projeto</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($guidances as $value) { ?>
              <tr>
                <td><?php echo $value->idOrientacao ?></td>
                <td class="width_user"><?php echo $this->user->find($value->usuario_idServidor)->nome ?></td>
                <td class="width_user"><?php echo $this->user->find($value->usuario_idEstudante)->nome ?></td>
                <td class="width_guidance"><?php echo mb_strimwidth($this->project->find($value->projeto_idProjeto)->titulo, 0, 45, "...") ?></td>
                <td>
                  <a href="/guidance/show?idOrientacao=<?= $value->idOrientacao ?>" class="btn btn-primary">Visualizar</a>
                  <a href="/guidance/edit?idOrientacao=<?= $value->idOrientacao ?>" class="btn btn-primary">Editar</a>
                  <a href="/guidance/destroy?idOrientacao=<?= $value->idOrientacao ?>" class="btn btn-danger" onclick="return confirm_destroy()">Deletar</a>
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
