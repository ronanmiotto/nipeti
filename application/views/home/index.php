<!DOCTYPE html>
<html>
  <?php $this->load->view('head') ?>
  <body>
    <?php $this->load->view('nav') ?>
    <div class="container main">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-sm-3" id="sidebar">
          <?php $this->load->view('menu') ?>
        </div>
        <div class="col-sm-9">
          <h1>SISTEMA WEB PARA GERENCIAMENTO DE PROJETOS DE PESQUISA DO NIPETI</h1>
          <h2>NIPETI - NÚCLEO INTERDISCIPLINAR DE PESQUISA, ESTUDO E DESENVOLVIMENTO EM TECNOLOGIA DA INFORMAÇÃO</h2>
        </div>
      </div>
    </div>
  </body>
  <?php $this->load->view('footer') ?>
</html>
