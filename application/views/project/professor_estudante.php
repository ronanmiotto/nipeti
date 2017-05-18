<label>Professor</label>
<select class="form-control js-example-basic-single" name="servidor">
<option value=""></option>
  <?php
    foreach ($teachers as $teacher) {
      $selected = "";
      echo '<option value="'.$teacher->id.'" '.$selected.'>'.$teacher->nome.'</option>';
    }
  ?>
</select>
<label>Estudante</label>
<select class="form-control js-example-basic-single" name="estudante">
<option value=""></option>
  <?php
    foreach ($students as $student) {
      $selected = "";
      echo '<option value="'.$student->id.'" '.$selected.'>'.$student->nome.'</option>';
    }
  ?>
</select>
<label>Selecione a arquivo</label>
  <input type="file" name="arquivo">
    <p class="help-block">Arquivo a ser cadastrado</p>
</div>
