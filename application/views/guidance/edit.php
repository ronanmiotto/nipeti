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
        <h1 class="title">Editar Orientação</h1>
        <form class="col-sm-10" action="<?php echo base_url() ?>guidance/update" method="post" enctype="multipart/form-data">
          <div class="form-group clear">
          </div>
          <div class="guidance_space">
            <label>Tipo: </label>
            <label class="radio-inline">
              <input type="radio" name="tipoOrientacao" value="1" <?php if($guidance->tipo == 1) echo "checked"; ?> /> TCC
            </label>
            <label class="radio-inline">
              <input type="radio" name="tipoOrientacao" value="2" <?php if($guidance->tipo == 2) echo "checked"; ?> /> PIBIC
            </label>
            <label class="radio-inline">
              <input type="radio" name="tipoOrientacao" value="3" <?php if($guidance->tipo == 3) echo "checked"; ?> /> Extensão
            </label>
          </div>
          <div class="guidance_space">
            <label>Professor</label>
            <select class="form-control js-example-basic-single" name="servidor">
            <option value=""></option>
              <?php
                foreach ($teachers as $teacher) {
                  $selected = "";
                  echo '<option value="'.$teacher->id.'" '.$selected.'>'.$teacher->nome.'</option>';
                }
              ?>
            </select>
          </div>
          <div class="guidance_space">
            <label>Estudante</label>
            <select class="form-control js-example-basic-single" name="estudante">
            <option value=""></option>
              <?php
                foreach ($students as $student) {
                  $selected = "";
                  echo '<option value="'.$student->id.'" '.$selected.'>'.$student->nome.'</option>';
                }
              ?>
            </select>
          </div>
          <div class="guidance_space">
            <label>Projeto</label>
            <select class="form-control js-example-basic-single" name="projeto">
            <option value=""></option>
              <?php
                foreach ($projects as $project) {
                  $selected = "";
                  echo '<option value="'.$project->id.'" '.$selected.'>'.$project->titulo.'</option>';
                }
              ?>
            </select>
          </div>
          <div class="form-group clear">
            <label>Data Início: </label>
            <input class="date-inicio" type="date" name="dataInicio" value="<?= $guidance->dataInicio ?>" required="">
          </div>
          <div class="form-group clear">
            <label>Data Fim: </label>
            <input class="date-fim" type="date" name="dataFim" value="<?= $guidance->dataFim ?>" required="">
          </div>
          <button type="submit" class="btn btn-success">Salvar</button>
          <button type="reset" class="btn btn-danger">Limpar</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </body>
<?php $this->load->view('footer') ?>
</html>
