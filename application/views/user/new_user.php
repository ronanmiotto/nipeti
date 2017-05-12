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
          <h1 class="title">Cadastrar Usuário</h1>
          <form class="col-sm-10" action="<?php echo base_url() ?>user/create" method="post" enctype="multipart/form-data">
            <div class="form-group clear">
            </div>
            <label>Tipo: </label>
            <label class="radio-inline">
              <input type="radio" name="tipo" value="1"> Servidor
            </label>
            <label class="radio-inline">
              <input type="radio" name="tipo" value="2"> Estudante
            </label>
            <div class="form-group">
              <label>Nome</label>
              <input type="text" class="form-control" name ="nome" placeholder="Nome completo" required="">
            </div>
            <div class="form-group">
              <label>RG</label>
              <input type="text" class="form-control" name ="rg" placeholder="RG" required="">
            </div>
            <div class="form-group">
              <label>CPF</label>
              <input type="text" class="form-control" name ="cpf" placeholder="CPF" required="">
            </div>

            <label>Sexo: </label>
            <label class="radio-inline">
              <input type="radio" name="sexo" value="M"> Masculino
            </label>
            <label class="radio-inline">
              <input type="radio" name="sexo" value="F"> Feminino
            </label>
            <div class="form-group clear">
              <label>Data de Nascimento: </label>
              <input type="date" name="dataNasc" required="">
            </div>
            <div class="form-group">
              <label>Endereço</label>
              <input type="text" class="form-control date-fim date-clear" name ="endereco" placeholder="Ex. Rua, Av" required="">
            </div>
            <div class="form-group">
              <label>Número</label>
              <input type="text" class="form-control" name ="numero"  placeholder="Número" required="">
            </div>
            <div class="form-group">
              <label>Bairro</label>
              <input type="text" class="form-control" name ="bairro"  placeholder="Bairro" required="">
            </div>
            <div class="form-group">
              <label>Cidade</label>
              <input type="text" class="form-control" name ="cidade"  placeholder="Cidade" required="">
            </div>
            <div class="form-group">
              <label>CEP</label>
              <input type="text" class="form-control" name ="cep"  placeholder="CEP" required="">
            </div>
            <div class="form-group">
              <label>UF </label>
              <select class="form-control" name="uf">
                <?php
                  foreach (states() as $key => $value) {
                    $selected = $user->states == $key ? "selected" : "";
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label>Fone</label>
              <input type="text" class="form-control" name ="fone" placeholder="Telefone / Celular" required="">
            </div>
            <div class="form-group">
              <label>E-mail</label>
              <input type="email" class="form-control" name ="email" placeholder="E-mail" required="">
            </div>
            <div class="form-group">
              <label>Senha</label>
              <input type="password" class="form-control" name ="senha"  placeholder="Senha" required="" >
            </div>
            <div class="form-group">
              <label>Confirma Senha</label>
              <input type="password" class="form-control" name ="confirma_senha" placeholder="Confirme a Senha" required="" >
            </div>
            <div class="form-group">
            <fieldset class="scheduler-border">
              <legend class="scheduler-border">Estudante</legend>
              <label>Curso</label>
              <select class="form-control" name="curso">
                <?php
                  foreach (courses() as $key => $value) {
                    $selected = $user->courses == $key ? "selected" : "";
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  }
                ?>
              </select>
            <label>Período</label>
            <select class="form-control" name="periodo">
              <?php
                foreach (periods() as $key => $value) {
                  $selected = $user->periods == $key ? "selected" : "";
                  echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                }
              ?>
            </select>
            <label>Turno</label>
            <select class="form-control" name="turno">
              <?php
                foreach (turns() as $key => $value) {
                  $selected = $user->turns == $key ? "selected" : "";
                  echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                }
              ?>
            </select>
            </fieldset>
            <fieldset class="scheduler-border">
              <legend class="scheduler-border">Servidor</legend>
              <div class="form-group">
                <label>Principal Formação</label>
                <input type="text" class="form-control" name ="formacao"  placeholder="Formação Acadêmica">
              </div>
              <label class="clear">Demais Formações</label>
              <textarea class="form-control clear" name="demaisFormacao"  rows="6" placeholder="Outros cursos e formações"></textarea>
              <div class="form-group">
                <label>Lattes</label>
                <input type="text" class="form-control" name ="lattes" placeholder="Link Lattes">
              </div>
            </fieldset>
            <fieldset>
              <legend></legend>
            </fieldset>
            <label class="clear">Observações</label>
            <textarea class="form-control clear" name="observacoes" rows="4"></textarea>
            <fieldset>
              <legend></legend>
            </fieldset>
            <div class="form-group clear">
              <label>Data de Ingresso na Instituição: </label>
              <input type="date" name="dataInicio" value="dataInicio" required="">
            </div>
            <div class="form-group">
              <label>Selecione a imagem</label>
                <input type="file" name="imagem">
                  <p class="help-block">Imagem do usuário a ser cadastrado</p>
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
