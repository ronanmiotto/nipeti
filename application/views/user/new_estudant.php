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
        <h1 class="title">Cadastro de Estudantes</h1>
        <form class="col-sm-10" action="index.html" method="post">
          <div class="form-group clear">
            <label>Tipo de Estudante: </label>
            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" name="type_estudant" value="option1"> Bolsista
            </label>
            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" name="type_estudant" value="option2"> Técnico
            </label>
            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" name="type_estudant" value="option3"> Estudante
            </label>
          </div>

          <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name ="name_user" placeholder="Nome completo" required="">
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
            <input type="radio" name="inlineRadioOptions" name="sexo" value="option1"> Masculino
          </label>
          <label class="radio-inline">
            <input type="radio" name="inlineRadioOptions" name="sexo" value="option2"> Feminino
          </label>
          <div class="form-group clear">
            <label>Data de Nascimento: </label>
            <input type="date" name="date_nasc" value="Data de Nascimento" required="">
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
            <select class="form-control">
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
          <div class="form-group">
            <label class="clear">Curso</label>
            <input type="radio" name="curso" value="Técnico em Agropecuária" required> Técnico em Agropecuária<br/>
            <input type="radio" name="curso" value="Técnico em Informática" required> Técnico em Informática<br/>
            <input type="radio" name="curso" value="Técnicoem Zootecnia" required> Técnico em Zootecnia<br/>
            <input type="radio" name="curso" value="Bacharelado em Agronomia" required> Bacharelado em Agronomia<br/>
            <input type="radio" name="curso" value="Superior de Tecnologia em Análise de Sistemas" required> Superior de Tecnologia em Análise e Desenvolvimento de Sistemas<br/>
            <input type="radio" name="curso" value="Superior de Tecnologia em Produção de Grãos" required> Superior de Tecnologia em Produção de Grãos<br/>
          </div>
          <div class="form-group">
            <label>Período</label>
            <select class="form-control">
              <option selected=""></option>
              <option value="1">1º Semestre</option>
              <option value="2">2º Semestre</option>
              <option value="3">3º Semestre</option>
              <option value="4">4º Semestre</option>
              <option value="5">5º Semestre</option>
              <option value="6">6º Semestre</option>
              <option value="7">7º Semestre</option>
              <option value="8">8º Semestre</option>
              <option value="9">9º Semestre</option>
              <option value="10">10º Semestre</option>
              <option value="outros">Outros</option>
            </select>
          </div>
          <div class="form-group clear">
            <label>Turno: </label>
            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" name="type_estudant" value="option1"> Matutino
            </label>
            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" name="type_estudant" value="option2"> Vespertino
            </label>
            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" name="type_estudant" value="option3"> Noturno
            </label>
            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" name="type_estudant" value="option3"> Diurno
            </label>
          </div>
          <label>Imagem</label>
          <label class="btn btn-default btn-file clear">
            <input type="file">
          </label>
          <label class="clear">Observações</label>
          <textarea class="form-control clear" rows="4"></textarea>
          <div class="form-group clear">
            <label>Data de Ingresso na Instituição: </label>
            <input type="date" name="date_inst" value="Data de início" required="">
          </div>
          <button type="button" class="btn btn-success">Salvar</button>
          <button type="button" class="btn btn-danger">Cancelar</button>
          </form>
          </div>
        </div>
        </div>
      </body>
      <?php $this->load->view('footer') ?>
      </html>
