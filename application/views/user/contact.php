<!DOCTYPE html>
<html>
  <?php $this->load->view('head') ?>
  <body>
    <?php $this->load->view('nav') ?>
    <div class="container main">
    <h1><strong>Contatos</strong></h1>
    <h3>Coordenação do NIPETI: <a href="mailto:nipeti@ifms.edu.br">nipeti@ifms.edu.br</a></h3>
    <h3>GENTE: <a href="mailto:gente.nipeti@ifms.edu.br">gente.nipeti@ifms.edu.br</a></h3>
    <h3>GEG: <a href="mailto:geg.nipeti@ifms.edu.br">geg.nipeti@ifms.edu.br</a></h3>
    <h3>GESI: <a href="mailto:gesi.nipeti@ifms.edu.br">gesi.nipeti@ifms.edu.br</a></h3>
    <h3>Twitter: <a href="https://twitter.com/nipeti_ifms" class="twitter-follow-button"data-show-count="false" data-lang="pt" data-size="large">Seguir @nipeti_ifms</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></br></h3>
    <h3>Facebook: <div class="fb-like" data-href="http://www.facebook.com/pages/NIPETI-IFMS/276876375687143" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div></h3>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


    </div>
  </body>
  <?php $this->load->view('footer') ?>
</html>
