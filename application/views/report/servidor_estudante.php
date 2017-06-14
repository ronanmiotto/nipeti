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
        <h1 class="title">Relatório / Usuários</h1>
        <hr>
        <form class="col-sm-10" action="<?php echo base_url() ?>report/new_report_user" method="post" enctype="multipart/form-data">
          <div class="form-group clear">
            <div class="guidance_space">
              <label>Servidor</label>
              <select class="form-control js-example-basic-single" name="name_teacher">
              <option value=""></option>
                <?php
                  foreach ($teachers as $teacher) {
                    //$selected = $teacher->idUsuario ? "selected" : "";
                    echo '<option value="'.$teacher->idUsuario.'">'.$teacher->nome.'</option>';
                  }
                ?>
              </select>
            </div>
            <div class="guidance_space">
              <label>Estudante</label>
              <select class="form-control js-example-basic-single" name="name_student">
              <option value=""></option>
                <?php
                  foreach ($students as $student) {
                    //$selected = $student->idUsuario ? "selected" : "";
                    echo '<option value="'.$student->idUsuario.'">'.$student->nome.'</option>';
                  }
                ?>
              </select>
            </div>
            <div class="form-group clear">
              <label>Período: </label>
              <input class="input-ano-report" type="date" name="dataInicio" required="">
              <label>a </label>
              <input class="input-ano-report" type="date" name="dataFim" required="">
            </div>
          <button type="submit" class="btn btn-success">Gerar</button>
          <a href="/report/index" class="btn btn-primary">Voltar</a>
          </form>
          </div>
        </div>
      </div>
    </div>
  </body>
<?php $this->load->view('footer') ?>
</html>
