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
          </div>
          <div class="col-sm-4 div-btn-report">
            <a href="/report/report_publication_pub" class="btn btn-primary btn-report">Gerar Relatório de Publicações</a>
            <a href="/report/report_publication_eve" class="btn btn-primary btn-report">Gerar Relatório de Eventos</a>
            <a href="/report/report_publication_per" class="btn btn-primary btn-report">Gerar Relatório de Periódicos</a>
          </div>
    </div>
  </div>
  </body>
  <?php $this->load->view('footer') ?>
</html>
