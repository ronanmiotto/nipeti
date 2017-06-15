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
          <h1 class="title">Relatório / Publicações</h1>
          <hr>
          <form class="col-sm-10" action="<?php echo base_url() ?>report/report_publication_pub" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Autor (descrição): </label>
              <input type="text" class="form-control" name ="descricao" placeholder="Nome do autor ou descrição da publicação" required="">
            </div>
            <div class="form-group clear">
              <label>Período (ano): </label>
              <input class="input-ano-report input-ano" type="number" name="ano" required="">
              <label>a </label>
              <input class="input-ano-report input-ano" type="number" name="ano" required="">
            </div>
            <button type="submit" class="btn btn-success">Gerar</button>
            <a href="/report/index_report_publication" class="btn btn-primary">Voltar</a>
            </form>
            </div>
          </div>
        </div>
      </div>
    </body>
  <?php $this->load->view('footer') ?>
  </html>
