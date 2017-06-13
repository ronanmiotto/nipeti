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
          <a href="/participate/new_participate" class="btn btn-success btn-lg">Adicionar participante</a>
          <hr>
          <div class="col-sm-9">
            <h1 class="title">Lista de Participantes</h1>
          </div>
          <table id="employee_data" class="table table-bordered table-hover table-color">
            <thead>
              <tr>
                <th>Código</th>
                <th>Projeto</th>
                <th>Participante</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($participates as $value) { ?>
              <tr>
                <td><?php echo $value->idParticipa ?></td>
                <td><?php echo $this->project->find($value->projeto_idProjeto)->titulo ?></td>
                <td><?php echo $this->user->find($value->usuario_idUsuario)->nome ?></td>
                <td>
                  <a href="/participate/show?idParticipa=<?= $value->idParticipa ?>" class="btn btn-primary">Visualizar</a>
                  <a href="/participate/edit?idParticipa=<?= $value->idParticipa ?>" class="btn btn-primary">Editar</a>
                  <a href="/participate/destroy?idParticipa=<?= $value->idParticipa ?>" class="btn btn-danger" onclick="return confirm_destroy()">Deletar</a>
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
