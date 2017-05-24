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
          <a href="/report/new_report" class="btn btn-primary btn-lg">Gerar Relatório</a>
          <hr>
          <div class="col-sm-9">
            <h1 class="title">Relatórios</h1>
          </div>
        </div>
      </div>
    </div>
  </body>
  <?php $this->load->view('footer') ?>
</html>
