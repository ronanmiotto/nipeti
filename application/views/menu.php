<div class="list-group">
  <a href="/" class="list-group-item active">Início</a>
  <?php if ($this->session->userdata('type') == 1) { ?>
    <a href="/user" class="list-group-item">Usuários</a>
  <?php } ?>
  <a href="/project" class="list-group-item">Projetos</a>
  <a href="/publication" class="list-group-item">Publicação</a>
  <a href="/guidance" class="list-group-item">Orientação</a>
  <a href="/report" class="list-group-item">Relatórios</a>
  <a href="/user/logoff" class="list-group-item">Sair</a>
</div>
