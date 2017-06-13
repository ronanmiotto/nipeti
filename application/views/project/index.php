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
          <?php if ($type != 4 ){?>
          <a href="/project/new_project" class="btn btn-success btn-lg">Novo Projeto</a>
          <hr>
          <?php } ?>
          <div class="col-sm-9">
            <h1 class="title">Lista de projetos</h1>
          </div>
          <table id="employee_data" class="table table-bordered table-hover table-color">
            <thead>
              <tr>
                <th>Código</th>
                <th>Título</th>
                <th>Status</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($projects as $value) { ?>
              <tr>
                <td><?php echo $value->idProjeto ?></td>
                <td><?php echo $value->titulo ?></td>
                <td><?php echo status()[$value->statuss] ?></td>
                <td>
                  <a href="/project/show?idProjeto=<?= $value->idProjeto ?>" class="btn btn-primary">Visualizar</a>
                  <?php if ($type == 1 || $type == 3 || $this->project->get_by_student($value->idProjeto, $this->session->userdata('id')) != NULL){?>
                  <a href="/project/edit?idProjeto=<?= $value->idProjeto ?>" class="btn btn-primary">Editar</a>
                  <a href="/project/destroy?idProjeto=<?= $value->idProjeto ?>" class="btn btn-danger">Deletar</a>
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
