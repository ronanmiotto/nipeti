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
          <h1 class="title">Cadastrar Novo Projeto</h1>
          <form class="col-sm-10" action="<?php echo base_url() ?>user/create" method="post">
            <div class="form-group clear">
            </div>

            <div class="form-group">
              <label>Nome</label>
              <input type="text" class="form-control" name ="nome" placeholder="Nome completo" required="">
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
