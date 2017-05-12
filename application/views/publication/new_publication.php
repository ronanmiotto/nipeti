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
        <h1 class="title">Cadastrar publicação</h1>
        <form class="col-sm-10" action="<?php echo base_url() ?>publication/create" method="post" enctype="multipart/form-data">
          <div class="form-group clear">
          </div>
          <div class="form-group">
            <label>Título</label>
            <input type="text" class="form-control" name ="titulo" placeholder="Título do projeto" required="">
          </div>
          <label class="clear">Descrição</label>
          <textarea class="form-control clear" name="descricao"  rows="6" placeholder="Descrição do projeto"></textarea>
          <div class="form-group clear date-clear">
            <label>Data Início: </label>
            <input type="date" name="dataInicio" required="">
          </div>
          <div class="form-group clear">
            <label>Data Fim: </label>
            <input class="date-fim"type="date" name="dataFim" required="">
          </div>
          <div class="form-group">
            <label>Área</label>
            <input type="text" class="form-control" name ="area" placeholder="Área de atuação" required="">
          </div>
          <div class="form-group">
            <label>Tipo</label>
            <select class="form-control" name="tipo">
              <?php
                foreach (projects() as $key => $value) {
                  $selected = $user->projects == $key ? "selected" : "";
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
                  $selected = $user->status == $key ? "selected" : "";
                  echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label>Fomento</label>
            <select class="form-control" name="fomento">
              <?php
                foreach (development() as $key => $value) {
                  $selected = $user->development == $key ? "selected" : "";
                  echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                }
              ?>
            </select>
          </div>
          <label>Professor</label>
          <select class="form-control" name="fomento">
          </select>
          <label>Estudante</label>
          <select class="form-control" name="fomento">
            <?php
              foreach ($students as $student) {
                echo '<option value="'.$student->idUsuario.'">'.$student->nome.'</option>';
              }
            ?>
          </select>
          <fieldset>
            <legend></legend>
          </fieldset>
          <label class="clear">Observações</label>
          <textarea class="form-control clear" name="observacoes" rows="4"></textarea>
          <fieldset>
            <legend></legend>
          </fieldset>
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
