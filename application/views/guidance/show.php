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
        <h1 class="title">Orientações / Visualizar dados</h1>
        <table class="table table-hover">
          <tbody>
            <tr>
              <th scope="row"><h3>Tipo</h3></th>
              <td><h3 class="color-types"><?= projects()[$project->tipo] ?></h3></td>
            </tr>
            <tr>
              <th scope="row">Código</th>
              <td><?= $guidance->idOrientacao ?></td>
            </tr>
            <div class="guidance_space">
              <label>Professor</label>
              <select class="form-control" name="servidor">
              <option value=""></option>
                <?php
                  foreach ($teachers as $teacher) {
                    $selected = "";
                    echo '<option value="'.$teacher->id.'" '.$selected.'>'.$teacher->nome.'</option>';
                  }
                ?>
              </select>
              <div class="guidance_space">
                <label>Estudante</label>
                <select class="form-control" name="estudante">
                <option value=""></option>
                  <?php
                    foreach ($students as $student) {
                      $selected = "";
                      echo '<option value="'.$student->id.'" '.$selected.'>'.$student->nome.'</option>';
                    }
                  ?>
                </select>
                <div class="guidance_space">
                  <label>Projeto</label>
                  <select class="form-control" name="projeto">
                  <option value=""></option>
                    <?php
                      foreach ($projects as $project) {
                        $selected = "";
                        echo '<option value="'.$project->id.'" '.$selected.'>'.$project->titulo.'</option>';
                      }
                    ?>
                  </select>
                </div>
                <tr>
                  <th scope="row">Data Início</th>
                  <td><?= $guidance->dataInicio ?></td>
                </tr>
                <tr>
                  <th scope="row">Data Fim</th>
                  <td><?= $guidance->dataFim ?></td>
                </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
<?php $this->load->view('footer') ?>
</html>
