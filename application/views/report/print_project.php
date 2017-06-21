  <!doctype html>
  <html class="no-js" lang="pt-br">
    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Relatório</title>

      <style type="text/css">
        body {
          font-family: Arial;
          margin: 0 auto;
          width: 770px;
        }

        header h1, header h2 {
          text-align: center;
          margin: 0;
          padding: 0;
          font-size: 1.5em;
        }

        p, th, td {
          padding: 0;
          margin: 0;
        }

        .info_student {
          margin: 20px 0;
          line-height: 1.5;
        }

        .footer div {
          display: inline-block;
          text-align: center;
          width: 48%;
        }

        .date {
          margin-top: 40px;
          margin-left: -20px;
          text-align: center;
        }

        .description {
          margin-bottom: 40px;
          text-align: justify;
          line-height: 1.5;
        }

        .description p {
          margin: 10px 0;
          text-align: justify;
        }

        .float_project {

          float: left;
          display: inline-block;

        }

        .image {
          /*float: left;*/
          margin: 4px 10px 0 0;
        }
      </style>

    </head>

    <body>
      <header>
        <div>
          <img src="/assets/image/nipeti.jpg" alt="Nipeti">
        </div>
        <div>
          <h1>NÚCLEO INTERDISCIPLINAR DE PESQUISA, ESTUDO E DESENVOLVIMENTO EM TECNOLOGIA DA INFORMAÇÃO – IFMS</h1><br>
            <h2>RELATÓRIO DE PROJETOS</h2><br>
        </div>
      </header>
      <p class="float_project"><b>PERÍODO: </b><?php echo $_GET['dataInicio']?></p><br>
      <p class="float_project"><b>A: </b><?php echo $_GET['dataFim']?></p><br>
      <?php foreach ($projects as $project) { ?>
      <div class="info_user">
        <p><b>Projeto: </b><?php echo $project->titulo ?></p>
        <p><b>Tipo:  </b><?php echo $project->tipo ?></p>
        <p><b>Descrição: </b><?php echo $project->descricao ?></p>
        <p class="float_project"><b>Início: </b><?php echo $project->dataInicio ?></p>
        <p class="float_project"><b>Fim: </b><?php echo $project->dataFim ?></p>
        <p><b>Status: </b><?php echo $project->statuss ?></p>
        <p><b>Participantes </b></p>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Tipo</th>
              <th>Bolsa</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($this->user->projects($project->idProjeto) as $value) { ?>
            <tr>
              <td><?php echo $value->nome ?></td>
              <td><?php echo projects_participate()[$value->ptipo] ?></td>
              <td><?php echo scholarships()[$value->fomento] ?></td>
              <td><?php echo status()[$value->statuss] ?></td>
            </tr>
            <?php } ?>
          </tbody>
      </table>
      </div>
      <?php } ?>
      <div class="footer">
        <div>
          <p><b>IFMS Nova Andradina - MS - 2017</b></p>
      </div>
    </body>
  </html>
