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
});

$(document).ready(function() {
  $(".js-example-basic-single").select2();
});
