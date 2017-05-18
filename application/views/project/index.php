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
          <a href="/project/new_project" class="btn btn-primary btn-lg">Novo Projeto</a>
          <hr>
          <div class="col-sm-9">
            <h1 class="title">Lista de projetos</h1>
          </div>
          <table id="employee_data" class="table table-striped">
            <thead>
              <tr>
                <th>Código</th>
                <th>Projeto</th>
                <th>Fomento</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($projects as $value) { ?>
              <tr>
                <td><?php echo $value->idProjeto ?></td>
                <td><?php echo $value->titulo ?></td>
                <td><?php echo $value->fomento ?></td>
                <td>
                  <a href="/project/show?idUsuario=<?= $value->idProjeto ?>" class="btn btn-primary">Visualizar</a>
                  <a href="/project/edit?idUsuario=<?= $value->idProjeto ?>" class="btn btn-primary">Editar</a>
                  <a href="/project/destroy?idUsuario=<?= $value->idProjeto ?>" class="btn btn-danger" onclick="return confirm_destroy()">Deletar</a>
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
