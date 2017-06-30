<div class="list-group">
  <a href="/" class="list-group-item <?php if(parse_url($_SERVER['REQUEST_URI'])['path'] == '/'){ echo "active"; } ?>">Início</a>
  <a href="/project" class="list-group-item <?php if(parse_url($_SERVER['REQUEST_URI'])['path'] == '/project'){ echo "active"; } ?>">Projetos</a>
  <a href="/publication" class="list-group-item <?php if(parse_url($_SERVER['REQUEST_URI'])['path'] == '/publication'){ echo "active"; } ?>">Publicação</a>
  <?php if ($this->session->userdata('type') == 1 || $this->session->userdata('type') == 3) { ?>
    <a href="/user" class="list-group-item <?php if(parse_url($_SERVER['REQUEST_URI'])['path'] == '/user'){ echo "active"; } ?>">Usuários</a>
    <a href="/guidance" class="list-group-item <?php if(parse_url($_SERVER['REQUEST_URI'])['path'] == '/guidance'){ echo "active"; } ?>">Orientação</a>
    <a href="/participate" class="list-group-item <?php if(parse_url($_SERVER['REQUEST_URI'])['path'] == '/participate'){ echo "active"; } ?>">Participantes</a>
    <a href="/report" class="list-group-item <?php if(parse_url($_SERVER['REQUEST_URI'])['path'] == '/report'){ echo "active"; } ?>">Relatórios</a>
  <?php } ?>
  <a href="/user/logoff" class="list-group-item">Sair</a>
</div>
