    <!doctype html>
    <html class="no-js" lang="pt-br">
      <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title class="center">Relatório Completo</title>

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
            margin-top: 50px;
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

          .title-report {

            margin-top: 50px;
            margin-bottom: 50px;
          }

          .title-nipeti {

            margin-top: 20px;
          }

          .img-print {

            margin: 20px 0 20px 320px;
          }

          .row {

            width: 50px;
            margin-bottom: -10px;
          }

          img {

            width: 500px;
            height: 500px;
            border-radius: 4px;
            box-shadow: 5px 5px 5px #888888;
            margin-top: 20px;
          }

          .body-margin {

            margin: 0 10px 0 10px;
          }

          .participates_name {

            width: 200px;
          }

          .participates_ {

            width: 100px;
          }
        </style>

      </head>

      <body>
        <header>
          <div>
            <h1 class="title-nipeti"><b>NÚCLEO INTERDISCIPLINAR DE PESQUISA, ESTUDO E DESENVOLVIMENTO EM TECNOLOGIA DA INFORMAÇÃO – IFMS</b></h1><br>
          </div>
          <div class="img-print">
            <img src="/assets/image/nipeti.jpg" alt="Nipeti">
          </div>
          <h1 class="title-report"><b>RELATÓRIO COMPLETO</b></h1><br>
        </header>
        <div class="body-margin">
          <h2><p>Participantes</p></h2>
          <?php foreach ($users as $value) { ?>
            <table class="table table-bordered">
              <thead>
                <tbody>
                <tr>
                    <th class="row">Nome</th>
                    <td><?php echo $value->nome ?></td>
                </tr>
                <tbody>
              </thead>
            </table>
          <?php }?>
          <p>-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
          </div>

          <div class="body-margin">
            <h2><p>Projetos</p></h2>
            <?php foreach ($projects as $project) { ?>
            <div class="info_user">
              <p><b>Projeto: </b><?php echo $project->titulo ?></p>
              <p><b>Descrição: </b><?php echo $project->descricao ?></p>
              <p class="float"><b>Início: </b><?php echo date('d/m/Y', strtotime($project->dataInicio)); ?></p>
              <p class="float_tipo"><b>Fim: </b><?php echo date('d/m/Y', strtotime($project->dataFim)); ?></p>
              <p class="float_tipo"><b>Tipo:  </b><?php echo projects()[$project->tipo ] ?></p>
              <p class="float_tipo"><b>Status: </b><?php echo status()[$project->statuss] ?></p><br>
              <h5><b>Participantes</b></h5>
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
                    <td class="participates_name"><?php echo $value->nome ?></td>
                    <td class="participates_"><?php echo projects_participate()[$value->ptipo] ?></td>
                    <td class="participates_"><?php echo scholarships()[$value->fomento] ?></td>
                    <td class="participates_"><?php echo status()[$value->statuss] ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
            </table>
            </div>
          <?php } ?>
          <p>-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>

          <div class="body-margin">
            <h2><p>Orientações</p></h2>
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
                  <?php foreach ($this->user->guidances_by_user() as $value) { ?>
                  <tr>
                    <td><?php echo $value->nome ?></td>
                    <td><?php echo $value->titulo ?></td>
                    <td><?php echo projects_guidance()[$value->tipoOrientacao] ?></td>
                    <td><?php echo $this->user->find($value->usuario_idEstudante)->nome ?></td>
                    <td><?php echo scholarships()[$value->fomento] ?></td>
                    <td><?php echo date('d/m/Y', strtotime($value->dataInicio)); ?></td>
                    <td><?php echo date('d/m/Y', strtotime($value->dataFim)); ?></td>
                    <td><?php echo status()[$value->status_orientacao] ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
            </table>
            <p>---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
            </div>
            <h2><p>Publicações</p></h2>
            <?php foreach ($publications as $value) { ?>
            <table class="table table-bordered">
              <p><b>Ano: </b><?php echo $value->ano ?></p>
              <thead>
                <tbody>
                <tr>
                    <td><?php echo $value->descricao ?></td>
                </tr>
              </thead>
              </tbody>
            </table>
                <?php } ?>
        <div class="footer">
            <p><b>IFMS Nova Andradina - MS - 2017</b></p>
        </div>
      </body>
    </html>
