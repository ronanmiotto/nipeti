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
        <form class="col-sm-10" action="<?php echo base_url() ?>report/print_user" target="_blank" method="get" enctype="multipart/form-data">
          <fieldset class="scheduler-border">
          <legend class="scheduler-border">Filtros</legend>
          <div class="form-group clear">
            <div class="form-group">
              <label>Tipo</label>
              <select class="form-control" name="tipo">
                <?php
                  foreach (types_users_report() as $key => $value) {
                    $selected = $user->user == $key ? "selected" : "";
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  }
                ?>
              </select>
            </div>
            <div class="form-group clear">
              <label>Período: </label>
              <input class="input-ano-report" type="date" name="dataInicio">
              <label>a </label>
              <input class="input-ano-report" type="date" name="dataFim">
            </div>
            </fieldset>
          <button type="submit" class="btn btn-success">Gerar</button>
          <a href="/report/index" class="btn btn-primary">Voltar</a>
          <div class="form-group clear alert">
            <label>*Imprimir em modo Retrato</label>
          </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </body>
<?php $this->load->view('footer') ?>
</html>
