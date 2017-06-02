<nav class="navbar navbar-fixed-top navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">NIPETI</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="/">Início</a></li>
        <li><a href="/user/about">Sobre</a></li>
        <li><a href="/user/contact">Contato</a></li>
        <li></li>
      </ul>
      <div class="nav-name-user">
        <a href="#"><strong>Usuário: <?= $this->session->userdata('nome') ?></strong></a>
      </div>
    </div>
  </div>
</nav>
