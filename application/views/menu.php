<div class="list-group">
  <a href="/" class="list-group-item active">Início</a>
  <a href="/project" class="list-group-item">Projetos</a>
  <?php if ($this->session->userdata('type') == 1) { ?>
    <a href="/user" class="list-group-item">Usuários</a>
    <a href="/publication" class="list-group-item">Publicação</a>
    <a href="/guidance" class="list-group-item">Orientação</a>
    <a href="/participate" class="list-group-item">Participante(s)</a>
    <a href="/report" class="list-group-item">Relatórios</a>
  <?php } ?>
  <a href="/user/logoff" class="list-group-item">Sair</a>
</div>
