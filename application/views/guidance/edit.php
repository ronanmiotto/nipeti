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
              <input type="radio" name="tipoOrientacao" value="1" <?php if($guidance->tipoOrientacao == 1) echo "checked"; ?> /> TCC
            </label>
            <label class="radio-inline">
              <input type="radio" name="tipoOrientacao" value="2" <?php if($guidance->tipoOrientacao == 2) echo "checked"; ?> /> PIBIC
            </label>
            <label class="radio-inline">
              <input type="radio" name="tipoOrientacao" value="3" <?php if($guidance->tipoOrientacao == 3) echo "checked"; ?> /> Extensão
            </label>
          </div>
          <div class="guidance_space">
            <label>Projeto (vincular)</label>
            <select class="form-control js-example-basic-single" name="projeto_idProjeto">
            <option value=""></option>
              <?php
                foreach ($projects as $project) {
                  $selected = $project->idProjeto == $guidance->projeto_idProjeto ? "selected" : "";
                  echo '<option value="'.$project->idProjeto.'" '.$selected.'>'.$project->titulo.'</option>';
                }
              ?>
            </select>
          </div>
          <div class="guidance_space">
            <label>Professor</label>
            <select class="form-control js-example-basic-single" name="usuario_idServidor">
            <option value=""></option>
              <?php
                foreach ($teachers as $teacher) {
                  $selected = $teacher->idUsuario == $guidance->usuario_idServidor ? "selected" : "";
                  echo '<option value="'.$teacher->idUsuario.'" '.$selected.'>'.$teacher->nome.'</option>';
                }
              ?>
            </select>
          </div>
          <div class="guidance_space">
            <label>Estudante</label>
            <select class="form-control js-example-basic-single" name="usuario_idEstudante">
            <option value=""></option>
              <?php
                foreach ($students as $student) {
                  $selected = $student->idUsuario == $guidance->usuario_idEstudante ? "selected" : "";
                  echo '<option value="'.$student->idUsuario.'" '.$selected.'>'.$student->nome.'</option>';
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
          <input type="hidden" name="idOrientacao" value="<?= $guidance->idOrientacao ?>">
          <button type="submit" class="btn btn-success">Salvar</button>
          <a href="/guidance/index" class="btn btn-primary">Voltar</a>
          </form>
          </div>
        </div>
      </div>
    </div>
  </body>
<?php $this->load->view('footer') ?>
</html>
