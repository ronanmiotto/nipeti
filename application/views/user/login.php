<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/assets/stylesheets/bootstrap.css">
    <link rel="stylesheet" href="/assets/stylesheets/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/assets/javascripts/bootstrap.js" charset="utf-8"></script>
    <script src="/assets/javascripts/main.js"></script>
    <title></title>
  </head>
  <body>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
        <div class="row">
            <form class="" action="/user/check_login" method="post">
                <div class="col-md-offset-5 col-md-3">
                    <?php echo flash_message(); ?>
                    <div class="form-login">
                    <h4>Login de Usuário</h4>
                    <input type="email" name="email" class="form-control input-sm chat-input" placeholder="E-mail" />
                    </br>
                    <input type="password" name="senha" class="form-control input-sm chat-input" placeholder="Senha" />
                    </br>
                    <div class="wrapper">
                    <span class="group-btn">
                      <input type="submit" value="Entrar" class="btn btn-primary btn-md" class="fa fa-sign-in">
                    </span>
                    </div>
                    </div>
                </div>
              </form>
              </div>
        </div>
    </div>
  </body>
</html>
