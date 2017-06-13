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
          <h1 class="title">Editar Usuário</h1>
          <form id="form_user" class="col-sm-10" action="<?php echo base_url() ?>user/update" method="post" enctype="multipart/form-data">
            <div class="form-group clear">
            </div>
            <div class="form-group">
              <label>Nome</label>
              <input type="text" class="form-control" name ="nome" value="<?= $user->nome ?>" placeholder="Nome completo" required="">
            </div>
            <div class="form-group">
              <label>RG</label>
              <input type="text" class="form-control" name ="rg" value="<?= $user->rg ?>" placeholder="RG" required="">
            </div>
            <div class="form-group">
              <label>CPF</label>
              <input type="text" class="form-control" name ="cpf" value="<?= $user->cpf ?>" placeholder="CPF" required="">
            </div>
            <label>Sexo: </label>
            <label class="radio-inline">
              <input type="radio" name="sexo" value="M" <?php if($user->sexo == "M") echo "checked"; ?> /> Masculino
            </label>
            <label class="radio-inline">
              <input type="radio" name="sexo"  value="F" <?php if($user->sexo == "F") echo "checked"; ?> /> Feminino
            </label>
            <div class="form-group clear">
              <label>Data de Nascimento: </label>
              <input class="date-clear date-fim" type="date" name="dataNasc" value="<?= $user->dataNasc ?>" required="">
            </div>
            <div class="form-group">
              <label>Endereço</label>
              <input type="text" class="form-control" name ="endereco" value="<?= $user->endereco ?>" placeholder="Ex. Rua, Av" required="">
            </div>
            <div class="form-group">
              <label>Número</label>
              <input type="text" class="form-control" name ="numero" value="<?= $user->numero ?>" placeholder="Número" required="">
            </div>
            <div class="form-group">
              <label>Bairro</label>
              <input type="text" class="form-control" name ="bairro" value="<?= $user->bairro ?>" placeholder="Bairro" required="">
            </div>
            <div class="form-group">
              <label>Cidade</label>
              <input type="text" class="form-control" name ="cidade" value="<?= $user->cidade ?>" placeholder="Cidade" required="">
            </div>
            <div class="form-group">
              <label>CEP</label>
              <input type="text" class="form-control" name ="cep" value="<?= $user->cep ?>" placeholder="CEP" required="">
            </div>
            <div class="form-group">
              <label>UF </label>
              <select class="form-control" name="uf">
                <option selected=""></option>
                <?php
                foreach (states() as $key => $value) {
                  $selected = $user->uf == $key ? "selected" : "";
                  echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label>Fone</label>
              <input type="text" class="form-control" name ="fone" value="<?= $user->fone ?>" placeholder="Telefone / Celular" required="">
            </div>
            <div class="form-group">
              <label>E-mail</label>
              <input type="email" class="form-control" name ="email" value="<?= $user->email ?>" placeholder="E-mail" required="">
            </div>
            <div class="form-group">
              <label>Senha</label>
              <input type="password" class="form-control" name ="senha">
            </div>
            <label>Tipo: </label>
            <label class="radio-inline">
              <input type="radio" name="tipo" value="1" <?php if($user->tipo == 1) echo "checked"; ?> /> Servidor
            </label>
            <label class="radio-inline">
              <input type="radio" name="tipo" value="2" <?php if($user->tipo == 2) echo "checked"; ?> /> Estudante
            </label>
            <div class="form-group">
            <div id="student_inputs">
              <fieldset class="scheduler-border">
                <legend class="scheduler-border">Estudante</legend>
                <label>Curso</label>
                <select class="form-control" name="curso">
                  <option selected=""></option>
                  <?php
                  foreach (courses() as $key => $value) {
                    $selected = $user->curso == $key ? "selected" : "";
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  }
                  ?>
                </select>
                <label>Período</label>
                <select class="form-control" name="periodo">
                  <option selected=""></option>
                  <?php
                  foreach (periods() as $key => $value) {
                    $selected = $user->periodo == $key ? "selected" : "";
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  }
                  ?>
                </select>
                <label>Turno</label>
                <select class="form-control" name="turno">
                  <option selected=""></option>
                  <?php
                  foreach (turns() as $key => $value) {
                    $selected = $user->turno == $key ? "selected" : "";
                    echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
                  }
                  ?>
                </select>
              </fieldset>
              </div>
              <div id="server_inputs">
              <fieldset class="scheduler-border">
                <legend class="scheduler-border">Servidor</legend>
                <div class="form-group">
                  <label>Principal Formação</label>
                  <input type="text" class="form-control" name ="formacao" value="<?= $user->formacao ?>"  placeholder="Formação Acadêmica">
                </div>
                <label class="clear">Demais Formações</label>
                <textarea class="form-control clear" name="demaisFormacao" rows="6" placeholder="Outros cursos e formações"><?= $user->demaisFormacao ?></textarea>
                <div class="form-group">
                  <label>Lattes</label>
                  <input type="text" class="form-control" name ="lattes" value="<?= $user->lattes ?>" placeholder="Link Lattes">
                </div>
              </fieldset>
              <fieldset>
                <legend></legend>
              </fieldset>
                </div>
              <label class="clear">Observações</label>
              <textarea class="form-control clear" name="observacoes" rows="4"><?= $user->observacoes ?></textarea>
              <fieldset>
                <legend></legend>
              </fieldset>
              <div class="form-group clear">
                <label>Data de Ingresso na Instituição: </label>
                <input type="date" name="dataInicio" value="<?= $user->dataInicio ?>" required="">
              </div>
              <div class="form-group">
                <label>Selecione a imagem</label>
                <input type="file" name="imagem">
                <p class="help-block">Imagem do usuário a ser cadastrado</p>
              </div>
              <input type="hidden" name="idUsuario" value="<?= $user->idUsuario ?>">
              <button type="submit" class="btn btn-success" onclick="return confirm_update()">Salvar</button>
              <a href="/user/index" class="btn btn-primary">Voltar</a>
            </form>
          </div>
        </div>
      </div>
    </div>
    </body>
    <?php $this->load->view('footer') ?>
    </html>
