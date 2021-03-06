<!doctype html>
<html class="no-js" lang="pt-br">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Relatório de Publicações</title>

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

      .info_user {
        margin: 20px 0;
        line-height: 1.5;
      }

      .footer {

        margin: 40px 0 40px 0;
        text-align: center;
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

      .space {

        margin-bottom: : 40px;
      }

      .img-print {

        margin: 10px 0 10px 300px;
      }
      img {

        width: 150px;
        height: 125px;
        border-radius: 4px;
        box-shadow: 5px 5px 5px #888888;
      }

      .row {

        width: 200px;
      }

      .dados {

        width: 500px;
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
          <h2><b>RELATÓRIO DE PUBLICAÇÕES</b></h2><br>
      </div>
    </header>
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
          <?php } ?>
        <div class="space">

        </div>
    </table>
    <div class="footer">
        <p><b>IFMS Nova Andradina - MS - 2017</b></p>
    </div>
  </body>
</html>
