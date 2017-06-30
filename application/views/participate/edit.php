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
        <h1 class="title">Editar Participante</h1>
        <form class="col-sm-10" action="<?php echo base_url() ?>participate/update" method="post" enctype="multipart/form-data">
          <div class="form-group clear">
          </div>
          <div class="guidance_space">
            <label>Tipo: </label>
            <label class="radio-inline">
              <input type="radio" name="tipo" value="1" <?php if($participate->tipo == 1) echo "checked"; ?> /> Colaborador
            </label>
            <label class="radio-inline">
              <input type="radio" name="tipo" value="2" <?php if($participate->tipo == 2) echo "checked"; ?> /> Coordenador
            </label>
            <label class="radio-inline">
              <input type="radio" name="tipo" value="3" <?php if($participate->tipo == 3) echo "checked"; ?> /> Coorientador
            </label>
            <label class="radio-inline">
              <input type="radio" name="tipo" value="4" <?php if($participate->tipo == 4) echo "checked"; ?> /> Bolsista
            </label>
          </div>
          <div class="guidance_space">
            <label>Projeto (vincular)</label>
            <select class="form-control js-example-basic-single" name="projeto_idProjeto">
            <option value=""></option>
              <?php
                foreach ($projects as $project) {
                  $selected = $project->idProjeto == $participate->projeto_idProjeto ? "selected" : "";
                  echo '<option value="'.$project->idProjeto.'" '.$selected.'>'.$project->titulo.'</option>';
                }
              ?>
            </select>
          </div>
          <div class="guidance_space">
            <label>Participante</label>
            <select class="form-control js-example-basic-single" name="usuario_idUsuario">
            <option value=""></option>
              <?php
                foreach ($users as $user) {
                  $selected = $user->idUsuario == $participate->usuario_idUsuario ? "selected" : "";
                  echo '<option value="'.$user->idUsuario.'" '.$selected.'>'.$user->nome.'</option>';
                }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="statuss">
              <?php
                foreach (status() as $key => $value) {
                  $selected = $project->statuss == $key ? "selected" : "";
                  echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                }
              ?>
            </select>
          </div>
          <div class="form-group clear">
            <label>Data Início: </label>
            <input class="date-inicio" type="date" name="dataInicio" value="<?= $participate->dataInicio ?>">
          </div>
          <div class="form-group clear">
            <label>Data Fim: </label>
            <input class="date-fim" type="date" name="dataFim" value="<?= $participate->dataInicio ?>">
          </div>
          <input type="hidden" name="idParticipa" value="<?= $participate->idParticipa ?>">
          <button type="submit" class="btn btn-success" onclick="return confirm_update()">Salvar</button>
          <a href="/participate/index" class="btn btn-primary">Voltar</a>
          </form>
          </div>
        </div>
      </div>
    </div>
  </body>
<?php $this->load->view('footer') ?>
</html>
