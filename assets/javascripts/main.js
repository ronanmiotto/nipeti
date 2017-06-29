function confirm_destroy() {
  if (confirm("Deseja realmente excluir?")){
    return true;
  } else {
    return false;
  }
}

function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)

  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
}

function confirm_update() {
  if (confirm("Deseja realmente alterar?")){
    return true;
  } else {
    return false;
  }
}

$(document).ready(function(){
  $('#employee_data').DataTable({
    "language": {
        "url":"//cdn.datatables.net/plug-ins/1.10.13/i18n/Portuguese-Brasil.json"
      }
  });

  $(".js-example-basic-single").select2();

  $('#student_inputs').css('display', 'none');
  $('#server_inputs').css('display', 'none');
  $('#newspaper_inputs').css('display', 'none');

// Função dos inputs da tela new_user
  $('#form_user input[name=tipo]').on('change', function() {
    if ($('input[name=tipo]:checked', '#form_user').val() == 1){
      $('#student_inputs').css('display', 'none');
      $('#server_inputs').css('display', 'block');
    }

    if ($('input[name=tipo]:checked', '#form_user').val() == 2){
      $('#student_inputs').css('display', 'block');
      $('#server_inputs').css('display', 'none');
    }

    if ($('input[name=tipo]:checked', '#form_user').val() == 3){
      $('#student_inputs').css('display', 'block');
      $('#server_inputs').css('display', 'none');
    }
  });
// Função dos inputs da tela new_publication
  $('#form_publication input[name=tipo]').on('change', function() {
    if ($('input[name=tipo]:checked', '#form_publication').val() == 1){
      $('#newspaper_inputs').css('display', 'none');

    }

    if ($('input[name=tipo]:checked', '#form_publication').val() == 2){
      $('#newspaper_inputs').css('display', 'block');

    }

    if ($('input[name=tipo]:checked', '#form_publication').val() == 3){
      $('#newspaper_inputs').css('display', 'none');

    }
  });
});
