function confirm_destroy() {
  if (confirm("Deseja realmente excluir?")){
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

  $('#form_user input[name=tipo]').on('change', function() {
    if ($('input[name=tipo]:checked', '#form_user').val() == 1){
      $('#student_inputs').css('display', 'none');
      $('#server_inputs').css('display', 'block');
    }

    if ($('input[name=tipo]:checked', '#form_user').val() == 2){
      $('#student_inputs').css('display', 'block');
      $('#server_inputs').css('display', 'none');
    }
  });
});
