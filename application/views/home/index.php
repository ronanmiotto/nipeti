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
          <div class="col-sm-9 text-center">
            <h1>Sistema WEB para Gerencimento de Projetos de Pesquisa do NIPETI</h1>
            <h4>NIPETI - NÚCLEO INTERDISCIPLINAR DE PESQUISA, ESTUDO E DESENVOLVIMENTO EM TECNOLOGIA DA INFORMAÇÃO - IFMS</h4>
            <img class="image-nipeti" src="assets/image/nipeti.jpg" alt="Nipeti">
          </div>
      </div>
    </div>
  </body>
  <?php $this->load->view('footer') ?>
</html>
