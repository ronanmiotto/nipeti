<!doctype html>
<html class="no-js" lang="pt-br">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Relatório de Orientações</title>

    <style type="text/css">
      body {
        font-family: Arial;
        margin: 0 auto;
        width: 1120px;

      }

      header h1, header h2 {
        text-align: center;
        margin: 0;
        padding: 0;
        font-size: 1.3em;
      }

      p, th, td {
        padding: 0;
        margin: 0;
      }

      .info_user {
        margin: 20px 0;
        line-height: 1.5;
      }

      .footer {

        margin: 40px 0 40px 0;
        text-align: center;
      }

      .float_tipo {

        float: left;
        margin-left: 100px;

      }

      .float {

        float: left;

      }

      p {

        margin-top: 10px;

      }

      h5 {

        margin-top: 20px;
      }

      .img-print {

        margin: 20px 0 20px 450px;
      }
      img {

        width: 150px;
        height: 125px;
        border-radius: 4px;
        box-shadow: 5px 5px 5px #888888;
      }
      .body-margin {

        margin: 0 10px 0 10px;
      }
    </style>

  </head>

  <body>
    <header>
      <div class="img-print">
        <img src="/assets/image/nipeti.jpg" alt="Nipeti">
      </div>
      <div>
        <h1><b>NÚCLEO INTERDISCIPLINAR DE PESQUISA, ESTUDO E DESENVOLVIMENTO EM TECNOLOGIA DA INFORMAÇÃO – IFMS</b></h1><br>
          <h2><b>RELATÓRIO DE ORIENTAÇÕES</b></h2><br>
      </div>
    </header>
    <div class="body-margin">
      <!-- <p><b>PERÍODO: <?php echo $_GET['dataInicio']?></b></p><br> -->
      <!-- <p class="float_project"><b>A: <?php echo $_GET['dataFim']?></b></p><br> -->
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Professor</th>
              <th>Projeto</th>
              <th>Tipo</th>
              <th>Estudante</th>
              <th>Bolsa</th>
              <th>Inicio</th>
              <th>Fim</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($guidances as $value) { ?>
            <tr>
              <td><?php echo $value->nome ?></td>
              <td><?php echo $value->titulo ?></td>
              <td><?php echo projects_guidance()[$value->tipoOrientacao] ?></td>
              <td><?php echo $this->user->find($value->usuario_idEstudante)->nome ?></td>
              <td><?php echo scholarships()[$value->fomento] ?></td>
              <td><?php echo date('d/m/Y', strtotime($value->dataInicio)); ?></td>
              <td><?php echo date('d/m/Y', strtotime($value->dataFim)); ?></td>
              <td><?php echo status()[$value->statuss] ?></td>
            </tr>
            <?php } ?>
          </tbody>
      </table>
      <p>-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
      </div>
    <div class="footer">
        <p><b>IFMS Nova Andradina - MS - 2017</b></p>
    </div>
  </body>
</html>
