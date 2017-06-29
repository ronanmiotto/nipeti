<div class="list-group">
  <a href="/" class="list-group-item">Início</a>
  <a href="/project" class="list-group-item">Projetos</a>
  <a href="/publication" class="list-group-item">Publicação</a>
  <?php if ($this->session->userdata('type') == 1 || $this->session->userdata('type') == 3) { ?>
    <a href="/user" class="list-group-item">Usuários</a>
    <a href="/guidance" class="list-group-item">Orientação</a>
    <a href="/participate" class="list-group-item">Participantes</a>
    <a href="/report" class="list-group-item">Relatórios</a>
  <?php } ?>
  <a href="/user/logoff" class="list-group-item">Sair</a>
</div>

<?
  if(parse_url($_SERVER['REQUEST_URI'])['path'] == '/project'){ echo "actived";}
?>
