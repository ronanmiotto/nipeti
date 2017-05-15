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
        <h1 class="title">Consultar relatório</h1>
        <form class="col-sm-10" action="<?php echo base_url() ?>project/create" method="post" enctype="multipart/form-data">
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
