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
        <h1 class="title">Editar projeto</h1>
        <form class="col-sm-10" action="<?php echo base_url() ?>project/update" method="post" enctype="multipart/form-data">
          <div class="form-group clear">
          </div>
          <div class="form-group">
            <label>Título</label>
            <input type="text" class="form-control" name ="titulo" value="<?= $project->titulo ?>" placeholder="Título do projeto" required="">
          </div>
          <label class="clear">Descrição</label>
          <textarea class="form-control clear" name="descricao"  rows="6" placeholder="Descrição do projeto"><?= $project->descricao ?></textarea>
          <div class="guidance_space">
            <label>Autor(a)</label>
            <select class="form-control js-example-basic-single" name="projeto_idUsuario">
            <option value=""></option>
              <?php
                foreach ($users as $user) {
                  $selected = $user->idUsuario == $project->usuario_idUsuario ? "selected" : "";
                  echo '<option value="'.$user->idUsuario.'" '.$selected.'>'.$user->nome.'</option>';
                }
              ?>
            </select>
          </div>
          <div class="form-group clear date-clear">
            <label>Data Início: </label>
            <input type="date" name="dataInicio" value="<?= $project->dataInicio ?>" required="">
          </div>
          <div class="form-group clear">
            <label>Data Fim: </label>
            <input class="date-fim" type="date" name="dataFim" value="<?= $project->dataFim ?>" required="">
          </div>
          <div class="form-group">
            <label>Área</label>
            <input type="text" class="form-control" name ="area" value="<?= $project->area ?>" placeholder="Área de atuação" required="">
          </div>
          <div class="form-group">
            <label>Tipo</label>
            <select class="form-control" name="tipo">
              <?php
                foreach (projects() as $key => $value) {
                  $selected = $project->tipo == $key ? "selected" : "";
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
                  $selected = $project->statuss == $key ? "selected" : "";
                  echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label>Fomento</label>
            <select class="form-control" name="fomento">
              <?php
                foreach (scholarships() as $key => $value) {
                  $selected = $project->fomento == $key ? "selected" : "";
                  echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                }
              ?>
            </select>
          <fieldset>
            <legend></legend>
          </fieldset>
          <label class="clear">Observações</label>
          <textarea class="form-control clear" name="observacoes" rows="4"><?= $project->observacoes ?></textarea>
          <fieldset>
            <legend></legend>
          </fieldset>
          <label>Selecione a arquivo</label>
            <input type="file" name="arquivo">
              <p class="help-block">Arquivo a ser cadastrado</p>
          <input type="hidden" name="idProjeto" value="<?= $project->idProjeto ?>">
          <button type="submit" class="btn btn-success">Salvar</button>
          <a href="/project/index" class="btn btn-primary">Voltar</a>
          </form>
          </div>
        </div>
      </div>
    </div>
  </body>
<?php $this->load->view('footer') ?>
</html>
