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
            <h1 class="title">Relatório / Orientações</h1>
            <hr>
            <form class="col-sm-10" action="<?php echo base_url() ?>report/print_guidance" target="_blank" method="get" enctype="multipart/form-data">
              <fieldset class="scheduler-border">
              <legend class="scheduler-border">Filtros</legend>
              <div class="form-group clear">
                <div class="form-group">
                  <label>Tipo de orientação</label>
                  <select class="form-control" name="tipoOrientacao">
                    <?php
                      foreach (projects_guidance() as $key => $value) {
                        $selected = $guidance->guidance == $key ? "selected" : "";
                        echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                      }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="statuss">
                    <?php
                      foreach (status() as $key => $value) {
                        $selected = $guidance->guidance == $key ? "selected" : "";
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
                <label>*Imprimir em modo Paisagem</label>
              </div>
            </div>
            </form>
          </div>
        </div>
    </body>
  <?php $this->load->view('footer') ?>
</html>
