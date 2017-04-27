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
        <h1 class="title">Cadastrar Usuário</h1>
        <form class="col-sm-10" action="<?php echo base_url() ?>user/create" method="post">
          <div class="form-group clear">
          </div>

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
            <input type="radio" name="sexo" value="option1"> Masculino
          </label>
          <label class="radio-inline">
            <input type="radio" name="sexo" value="option2"> Feminino
          </label>
          <div class="form-group clear">
            <label>Data de Nascimento: </label>
            <input type="date" name="dataNasc" value="dataNasc" required="">
          </div>
          <div class="form-group">
            <label>Endereço</label>
            <input type="text" class="form-control" name ="endereco" placeholder="Ex. Rua, Av" required="">
          </div>
          <div class="form-group">
            <label>Número</label>
            <input type="text" class="form-control" name ="numero" placeholder="Número" required="">
          </div>
          <div class="form-group">
            <label>Bairro</label>
            <input type="text" class="form-control" name ="bairro" placeholder="Bairro" required="">
          </div>
          <div class="form-group">
            <label>Cidade</label>
            <input type="text" class="form-control" name ="cidade" placeholder="Cidade" required="">
          </div>
          <div class="form-group">
            <label>CEP</label>
            <input type="text" class="form-control" name ="cep" placeholder="CEP" required="">
          </div>
          <div class="form-group">
            <label>UF </label>
            <select class="form-control" name="uf">
              <option selected=""></option>
              <option value="AC">Acre</option>
              <option value="AL">Alagoas</option>
              <option value="AP">Amapá</option>
              <option value="AM">Amazonas</option>
              <option value="BA">Bahia</option>
              <option value="CE">Ceará</option>
              <option value="DF">Distrito Federal</option>
              <option value="ES">Espírito Santo</option>
              <option value="GO">Goiás</option>
              <option value="MA">Maranhão</option>
              <option value="MT">Mato Grosso</option>
              <option value="MS">Mato Grosso do Sul</option>
              <option value="MG">Minas Gerais</option>
              <option value="PA">Pará</option>
              <option value="PB">Paraíba</option>
              <option value="PR">Paraná</option>
              <option value="PE">Pernambuco</option>
              <option value="PI">Piauí</option>
              <option value="RJ">Rio de Janeiro</option>
              <option value="RN">Rio Grande do Norte</option>
              <option value="RS">Rio Grande do Sul</option>
              <option value="RO">Rondônia</option>
              <option value="RR">Roraima</option>
              <option value="SC">Santa Catarina</option>
              <option value="SP">São Paulo</option>
              <option value="SE">Sergipe</option>
              <option value="TO">Tocantins</option>
            </select>
          </div>
          <div class="form-group">
            <label>E-mail</label>
            <input type="email" class="form-control" name ="email" placeholder="E-mail" required="">
          </div>
          <div class="form-group">
            <label>Fone</label>
            <input type="text" class="form-control" name ="fone" placeholder="Telefone / Celular" required="">
          </div>
          <button type="submit" class="btn btn-success">Salvar</button>
          <button type="reset" class="btn btn-danger">Limpar</button>
          </form>
          </div>
        </div>
        </div>
      </body>
      <?php $this->load->view('footer') ?>
      </html>
