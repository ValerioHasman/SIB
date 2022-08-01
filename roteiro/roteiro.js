function editar(id) {
  console.log(id)
  $("#" + id + " div").each(function (index, element) {
    console.log(index + ' : ' + element.innerHTML);

    if (index == 1) {
      $("#id").val(element.innerHTML);
    }
    if (index == 2) {
      $("#nome").val(element.innerHTML);
    }
    if (index == 3) {
      $("#email").val(element.innerHTML);
    }
    if (index == 4) {
      $("#senha").val(element.innerHTML);
    }
    if (index == 5) {
      $("#perfil").val(element.innerHTML);
    }
  });

  $("#atua").val('atualizar');

  $("#grupo1").addClass('d-none');
  $("#grupo2").removeClass('d-none');

}

$("#cancelar").click(function () {
  $("#atua").val('cadastrar');
  $("#grupo1").removeClass('d-none');
  $("#grupo2").addClass('d-none');
  $("#id").val('');
  $("#nome").val('');
  $("#email").val('');
  $("#senha").val('');
  $("#perfil").val('');
});


// Modal de certeza de exclusão
var exampleModal = document.getElementById('certezaDeletar');
exampleModal.addEventListener('show.bs.modal', function (event) {
  var button = event.relatedTarget;
  var recipient = button.getAttribute('data-bs-whatever');
  var modalBodyInput = exampleModal.querySelector('.modal-body input');
  modalBodyInput.value = recipient;
})


// Tabela de dados
$(document).ready(function () {
  $('#tabelaDeDados').DataTable();
});