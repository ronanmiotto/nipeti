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
        <h1 class="title">Cadastro de Usuários</h1>
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
