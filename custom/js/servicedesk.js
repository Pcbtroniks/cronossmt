let btnSend = document.querySelector(".btn-send-ticket");
let activityMessages = $(".activityMessages");
const buttonAdd = document.querySelector('#buttonAdd');

$(function () {
  /*=================================
  =            Moment.js            =
  =================================*/

  moment.locale("es");

  /*===============================
	=            SELECT2            =
	===============================*/

  //Initialize Select2 Elements
  $.fn.select2.defaults.set("language", "es");
  $(".select2").select2();

  customer_select("#customer_id", "#addTicketModal"); // select2 for customer.
});

function customer_select(id_select = null, id_modal = null) {
  if (typeof id_select !== null && typeof id_modal !== null) {
    $(id_select).select2({
      //dropdownParent: $(id_modal),
      minimumInputLength: 2,
      placeholder: "SELECCIONAR CLIENTE",
      allowClear: true,

      ajax: {
        url: BASE_URL + "inventory/computo/select2-customers/",
        type: "post",
        dataType: "json",
        delay: 1000,
        data: function (params) {
          return {
            searchTerm: params.term, // search term
          };
        },
        processResults: function (response) {
          return {
            results: response,
          };
        },

        cache: true,
      }, // end call ajax
    }); // end select2 for customer
  }
}

function cleanForms() {
  // Limpiar los campos de los formularios.
  let formularios = document.getElementsByTagName("form");

  for (i = 0; i < formularios.length; i++) {
    formularios[i].reset();
  }

  // Limpiar select2
  $("#customer_id").val("").trigger("change");

  // Eliminar text-danger
  $(".text-danger").remove();

  // Remover coloreado de los campos
  $(".form-control").removeClass("is-invalid").removeClass("is-valid");

  buttonAdd.classList.add('disabled');
  grecaptcha.reset();
}

function recaptchaCallback()
{
  buttonAdd.classList.remove('disabled');
}

buttonAdd.addEventListener('click', buttonAdd);

function detener(e)
{
  $(".text-danger").remove(); // Remover text-danger
  $(".form-control").removeClass("is-invalid").removeClass("is-valid"); // Remover coloreado de los campos

  var form = $("#addTicketForm");

  $.ajax({
    url: form.attr("action"),
    type: form.attr("method"),
    data: form.serialize(), // Convertir los datos de formulario en array y enviarlos al servidor
    dataType: "json",
    beforeSend: function () {
      buttonAdd.setAttribute("disabled", "");
      buttonAdd.innerHTML = "Procesando...";
    },
    success: function (response) {
      buttonAdd.removeAttribute("disabled");
      buttonAdd.innerHTML = "Añadir ticket";

      if (response.success === true) {
        $(".messages").html(
          '<div class="alert alert-success alert-dismissable" role="alert">' +
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
            '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>' +
            response.messages +
            "</div>"
        );

        cleanForms();

      } else {
        if (response.messages instanceof Object) {
          $.each(response.messages, function (index, value) {
            var id = $(".input-" + index);

            id.removeClass("is-invalid")
              .removeClass("is-valid")
              .addClass(value.length > 0 ? "is-invalid" : "is-valid")
              .after(value);
          });

          buttonAdd.classList.add('disabled');
          grecaptcha.reset();

        } else {
          $(".messages").html(
            '<div class="alert alert-warning alert-dismissable" role="alert">' +
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
              '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>' +
              response.messages +
              "</div>"
          );

          buttonAdd.classList.add('disabled');
          grecaptcha.reset();
        }
      }

    },
  });

  return false;
}