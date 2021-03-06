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

if (!function_exists('periods')){
  function periods(){
    return array(
      '' => '',
      '1' => '1º Semestre',
      '2' => '2º Semestre',
      '3' => '3º Semestre',
      '4' => '4º Semestre',
      '5' => '5º Semestre',
      '5' => '6º Semestre',
      '7' => '7º Semestre',
      '8' => '8º Semestre',
      '9' => '9º Semestre',
      '10' => '10º Semestre',
      'outros' => 'Outros',
    );
  }
}

if (!function_exists('courses')){
  function courses(){
    return array(
      '' => '',
      'tagro' => 'Técnico em Agropecuária',
      'tinfo' => 'Técnico em Informática',
      'tzoo' => 'Técnico em Zootecnia',
      'agro' => 'Bacharelado em Agronomia',
      'tads' => 'Superior de Tecnologia em Análise e Desenvolvimento de Sistemas',
      'tpg' => 'Superior de Tecnologia de Produção em Grãos',
    );
  }
}

if (!function_exists('turns')){
  function turns(){
    return array(
      '' => '',
      'matutino' => 'Matutino',
      'vespertino' => 'Vespertino',
      'noturno' => 'Noturno',
      'diurno' => 'Diurno',
    );
  }
}

if (!function_exists('with_student')){
  function with_student(){
    return array(
      '' => '',
      '1' => 'Sim',
      '2' => 'Não',
    );
  }
}

if (!function_exists('projects')){
  function projects(){
    return array(
      '' => '',
      'pibic' => 'PIBIC',
      'tcc' => 'TCC',
      'extensao' => 'Extensão',
    );
  }
}

if (!function_exists('projects_guidance')){
  function projects_guidance(){
    return array(
      '' => '',
      '1' => 'TCC',
      '2' => 'PIBIC',
      '3' => 'Extensão'
    );
  }
}

if (!function_exists('projects_participate')){
  function projects_participate(){
    return array(
      '' => '',
      '1' => 'Colaborador',
      '2' => 'Coordenador',
      '3' => 'Coorientador',
      '4' => 'Bolsista',
    );
  }
}

if (!function_exists('status')){
  function status(){
    return array(
      '' => '',
      'andamento' => 'Em andamento',
      'finalizado' => 'Finalizado',
      'suspenso' => 'Suspenso'
    );
  }
}

if (!function_exists('status_guidance')){
  function status_guidance(){
    return array(
      '' => '',
      '1' => 'Em andamento',
      '2' => 'Finalizado',
      '3' => 'Suspenso',
    );
  }
}

if (!function_exists('scholarships')){
  function scholarships(){
    return array(
      '' => '',
      'fundect' => 'Fundect',
      'cnpq' => 'CNPq',
      'outra' => 'Outra',
      'n/a' => 'N/A',
    );
  }
}

if (!function_exists('types_users')){
  function types_users(){
    return array(
      '' => '',
      '1' => 'Servidor',
      '2' => 'Estudante',
      '3' => 'Coordenador',
    );
  }
}

if (!function_exists('types_users_report')){
  function types_users_report(){
    return array(
      '' => '',
      '1' => 'Servidor',
      '2' => 'Estudante'
    );
  }
}


if (!function_exists('sex')){
  function sex(){
    return array(
      '' => '',
      'M' => 'Masculino',
      'F' => 'Feminino',
    );
  }
}

if (!function_exists('types_publications')){
  function types_publications(){
    return array(
      '' => '',
      '1' => 'Evento',
      '2' => 'Periódico',
    );
  }
}

if (!function_exists('types_publications_report')){
  function types_publications_report(){
    return array(
      '' => '',
      '1' => 'Evento',
      '2' => 'Periódico',
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

if (!function_exists('title_report_user')){
  function title_report_user($type){
    if ($type == 2 || $type == 3){
      return "FORMAÇÃO ACADÊMICA: ";
    } else {
      return "CURSO: ";
    }
  }
}

function mask($mask,$str){
  $str = str_replace(" ","",$str);
  for($i=0;$i<strlen($str);$i++){
      $mask[strpos($mask,"#")] = $str[$i];
  }
  return $mask;
}
