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
          <a href="/user/new_user" class="btn btn-primary btn-lg">Novo Usuário</a>
          <hr>
          <div class="col-sm-9">
            <h1 class="title">Lista de usuários</h1>
          </div>
          <table id="employee_data" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($users as $value) { ?>
              <tr>
                <td><?php echo $value->idUsuario ?></td>
                <td><?php echo $value->nome ?></td>
                <td><?php echo $value->cpf ?></td>
                <td>
                  <a href="/user/show?idUsuario=<?= $value->idUsuario ?>" class="btn btn-primary">Visualizar</a>
                  <a href="/user/edit?idUsuario=<?= $value->idUsuario ?>" class="btn btn-primary">Editar</a>
                  <a href="/user/destroy?idUsuario=<?= $value->idUsuario ?>" class="btn btn-danger" onclick="return confirm_destroy()">Deletar</a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>

          <?php echo $paginate ?>
        </div>
      </div>
    </div>
  </body>
  <?php $this->load->view('footer') ?>
</html>

<script type="text/javascript">
  $(document).ready(function(){
      $('#employee_data').DataTable({
        "language": {
            "url":"//cdn.datatables.net/plug-ins/1.10.13/i18n/Portuguese-Brasil.json"
}
});
  });
</script>
