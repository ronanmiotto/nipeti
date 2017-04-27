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
        <h1 class="title">Visualizar dados</h1>
          <label>Nome: </label>
          <?= $user->nome ?><br>
          <label>RG: </label>
          <?= $user->rg ?><br>
          <label>CPF: </label>
          <?= $user->cpf ?><br>
          <label>Data de Nascimento: </label>
          <?= $user->dataNasc ?><br>
          <label>Cidade: </label>
          <?= $user->cidade ?><br>
          <label>UF: </label>
          <?= $user->uf ?><br>
      </div>
    </div>
  </div>
</body>
<?php $this->load->view('footer') ?>
</html>
