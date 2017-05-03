<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('clean')){
  function clean($stringin){
    $stringout = preg_replace('/[^0-9]/', '', $stringin);
    $stringout = str_pad($stringout, '0', '0', STR_PAD_LEFT);
    return $stringout;
  }
}

if (!function_exists('total_url')){
  function total_url(){
    $server = base_url();
    $endereco = $_SERVER ['REQUEST_URI'];
    return $server . $endereco;
  }
}

if (!function_exists('states')){
  function states(){
    return array(
      '' => '',
      'AC' => 'Acre',
      'AL' => 'Alagoas',
      'AP' => 'Amapá',
      'AM' => 'Amazonas',
      'BA' => 'Bahia',
      'CE' => 'Ceará',
      'DF' => 'Distrito Federal',
      'ES' => 'Espírito Santo',
      'GO' => 'Goiás',
      'MA' => 'Maranhão',
      'MT' => 'Mato Grosso',
      'MS' => 'Mato Grosso do Sul',
      'MG' => 'Minas Gerias',
      'PA' => 'Pará',
      'PB' => 'Paraíba',
      'PR' => 'Parańa',
      'PE' => 'Pernambuco',
      'PI' => 'Piauí',
      'RJ' => 'Rio de Janeiro',
      'RN' => 'Rio Grande do Norte',
      'RS' => 'Rio Grande do Sul',
      'RO' => 'Rondônia',
      'RR' => 'Roraima',
      'SC' => 'Santa Catarina',
      'SP' => 'São Paulo',
      'SE' => 'Sergipe',
      'TO' => 'Tocantins',
    );
  }
}
if (!function_exists('flash_message')){
  function flash_message(){
    if (isset($_SESSION['message'])){
      return
        '<div class="alert alert-info" role="alert">' . $_SESSION['message'] .
        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
    }
  }
}
