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
          <a href="/user/new_user" class="btn btn-success btn-lg">Novo Usuário</a>
          <hr>
          <div class="col-sm-9">
            <h1 class="title">Lista de usuários</h1>
          </div>
          <table id="employee_data" class="table table-bordered table-hover table-color">
            <thead>
              <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($users as $value) { ?>
              <tr>
                <td><?php echo $value->idUsuario ?></td>
                <td class="width_index_user"><?php echo mb_strimwidth($value->nome, 0, 50, "...") ?></td>
                <td><?php echo types_users()[$value->tipo] ?></td>
                <td>
                  <a href="/user/show?idUsuario=<?= $value->idUsuario ?>" class="btn btn-primary">Visualizar</a>
                  <a href="/user/edit?idUsuario=<?= $value->idUsuario ?>" class="btn btn-primary">Editar</a>
                  <?php $disabled = $value->tipo != 3 ? "" : "disabled" ?>
                  <a href="/user/destroy?idUsuario=<?= $value->idUsuario ?>" class="btn btn-danger" <?php echo $disabled; ?> onclick="return confirm_destroy()">Deletar</a>
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
