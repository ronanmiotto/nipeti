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
          <form id="form_publication" class="col-sm-10" action="<?php echo base_url() ?>publication/create" method="post" enctype="multipart/form-data">
            <div class="form-group clear">
            </div>
            <div class="form-group">
              <label>Título</label>
              <input type="text" class="form-control" name ="titulo" placeholder="Título do evento ou periódico" required="">
            </div>
            <div class="guidance_space">
              <label>Projeto (vincular)</label>
              <select class="form-control js-example-basic-single" name="projeto_idProjeto">
              <option value=""></option>
                <?php
                  foreach ($projects as $project) {
                    $selected = "";
                    echo '<option value="'.$project->idProjeto.'" '.$selected.'>'.$project->titulo.'</option>';
                  }
                ?>
              </select>
            </div>
            <label class="clear">Descrição</label>
            <textarea class="form-control clear" name="descricao"  rows="6" placeholder="Descrição do evento ou periódico"></textarea>
            <div class="form-group clear date-clear">
              <div class="form-group">
                <label>Localidade</label>
                <input type="text" class="form-control" name ="localidade" placeholder="Instituição / Cidade" required="">
              </div>
              <div class="form-group">
                <label>Área</label>
                <input type="text" class="form-control" name ="area" placeholder="Área de atuação relacionada" required="">
              </div>
              <label>Data: </label>
              <input type="date" name="data" required="">
            </div>
            <label class="label-clear">Tipo: </label>
            <label class="radio-inline">
              <input type="radio" name="tipo" value="1"> Evento
            </label>
            <label class="radio-inline">
              <input type="radio" name="tipo" value="2"> Periódico
            </label>
              <div class="form-group clear">
                <div id="newspaper_inputs">
                <fieldset class="scheduler-border">
                  <legend class="scheduler-border">Periódico</legend>
                  <div class="form-group">
                    <label>Cooautores</label>
                    <input type="text" class="form-control" name ="cooautores"  placeholder="Cooautor(es) do periódico">
                  </div>
                  <div class="form-group">
                    <label>Volume</label>
                    <input type="text" class="form-control" name ="volume"  placeholder="Volume do periódico">
                  </div>
                  <div class="form-group">
                    <label>Páginas</label>
                    <input type="text" class="form-control" name ="paginas"  placeholder="Total de páginas do periódico">
                  </div>
                  <div class="form-group">
                    <label>Link</label>
                    <input type="text" class="form-control" name ="link"  placeholder="Link para download">
                  </div>
                </fieldset>
              </div>
            <fieldset>
              <legend></legend>
            </fieldset>
            <button type="submit" class="btn btn-success">Salvar</button>
            <button type="reset" class="btn btn-danger">Limpar</button>
            <a href="/publication/index" class="btn btn-primary">Voltar</a>
            </form>
            </div>
          </div>
        </div>
      </div>
    </body>
  <?php $this->load->view('footer') ?>
  </html>
