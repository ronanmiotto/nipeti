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
              <h1 class="title">Relatórios</h1>
              <hr>
            </div>
            <div class="col-sm-5">
              <a href="/report/new_report_user" class="btn btn-primary btn-lg  btn-report">Gerar Relatório de Usuários</a>
              <a href="/report/new_report_project" class="btn btn-primary btn-lg btn-report">Gerar Relatório de Projetos</a>
              <a href="/report/new_report_guidance" class="btn btn-primary btn-lg btn-report">Gerar Relatório de Orientações</a>
              <a href="/report/new_report_publication" class="btn btn-primary btn-lg btn-report">Gerar Relatório de Publicações</a>
            </div>
      </div>
    </div>
    </body>
    <?php $this->load->view('footer') ?>
  </html>
