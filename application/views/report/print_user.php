<!doctype html>
<html class="no-js" lang="pt-br">
  <head>
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
          <h2>RELATÓRIO DE USUÁRIOS</h2><br>
      </div>
    </header>
    <p><b>PERÍODO: </b></p><br>
    <?php for ($i = 0; $i <= 5; $i++){ ?>
    <div class="info_user">
      <p><b>DATA DE INGRESSO NA INSTITUIÇÃO:  </b></p>
      <p><b>NOME: </b></p>
      <p><b>CPF: </b></p>
      <p><b><?php echo title_report_user(1); ?></b></p>
    </div><br>
    <?php } ?>
    <fieldset>
      <legend></legend>
    </fieldset><br><br>

    <div class="footer">
      <div>
        <p><b>IFMS Nova Andradina - MS - 2017</b></p>
    </div>
  </body>
</html>
