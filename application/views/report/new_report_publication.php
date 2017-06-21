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
              <h1 class="title">Publicações/Eventos/Periódicos</h1>
              <hr>
              <form class="col-sm-10" action="<?php echo base_url() ?>report/print_publication" method="post" enctype="multipart/form-data">
                <fieldset class="scheduler-border">
                <legend class="scheduler-border">Filtros</legend>
                <div class="form-group clear">
                  <div class="form-group">
                    <label>Tipo</label>
                    <select class="form-control" name="tipo">
                      <?php
                        foreach (types_publications_report() as $key => $value) {
                          $selected = $publication->publication == $key ? "selected" : "";
                          echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                        }
                      ?>
                    </select>
                  </div>
                  <div class="guidance_space">
                    <label>Projeto</label>
                    <select class="form-control js-example-basic-single" name="projeto_idProjeto" disabled="">
                    <option value=""></option>
                      <?php
                        foreach ($projects as $project) {
                          $selected = "";
                          echo '<option value="'.$project->idProjeto.'" '.$selected.'>'.$project->titulo.'</option>';
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
                  </fieldset>
                <button type="submit" class="btn btn-success">Gerar</button>
                <a href="/report/index" class="btn btn-primary">Voltar</a>
              </div>
              </form>
            </div>
          </div>
      </body>
    <?php $this->load->view('footer') ?>
  </html>
