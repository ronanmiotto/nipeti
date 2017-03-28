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
          <a href="/user/new_user" class="btn btn-primary btn-lg">Estudantes</a>
          <a href="/user/new_user2" class="btn btn-primary btn-lg">Servidores</a>
          <hr>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Curso</th>
              </tr>
            </thead>
            <tbody>
              <?php for($i = 0; $i < 10; $i++) { ?>
              <tr>
                <td><?php echo $i ?></td>
                <td>Pedro</td>
                <td>18</td>
                <td>Análise e Desenvolvimento de Sistemas</td>
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
