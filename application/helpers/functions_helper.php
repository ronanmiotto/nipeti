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
