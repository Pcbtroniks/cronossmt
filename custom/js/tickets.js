let btnSend = document.querySelector(".btn-send-ticket");
let activityMessages = $(".activityMessages");

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
  $("#user_id").val(null).trigger("change");

  customer_select("#customer_id", "#addTicketModal"); // select2 for customer.
  customer_select("#customer_id2", "#downloadReportModal"); // select2 for customer.

  /*===============================
	=        DATERANGEPICKER        =
	===============================*/

  $(".updated_at_datepicker").daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    locale: {
      format: "YYYY-MM",
      separator: "-",
    },
  });

  /*==================================
  =            DataTables            =
  ==================================*/

  ticketsTable = $("#ticketsTable").DataTable({
    ajax: BASE_URL + "tickets/list",
    responsive: true,
    autoWidth: false,
    orders: [],
  });
});

function customer_select(id_select = null, id_modal = null) {
  if (typeof id_select !== null && typeof id_modal !== null) {
    $(id_select).select2({
      dropdownParent: $(id_modal),
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

function downloadReportModel() {}

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
}

function addTicketModel() {
  cleanForms();

  $("#addTicketForm")
    .unbind("submit")
    .bind("submit", function () {
      var form = $(this);

      $(".text-danger").remove(); // Remover text-danger
      $(".form-control").removeClass("is-invalid").removeClass("is-valid"); // Remover coloreado de los campos

      $.ajax({
        url: form.attr("action"),
        type: form.attr("method"),
        data: form.serialize(), // Convertir los datos de formulario en array y enviarlos al servidor
        dataType: "json",
        beforeSend: function () {
          btnSend.setAttribute("disabled", "");
          btnSend.innerHTML = "Procesando...";
        },
        success: function (response) {
          btnSend.removeAttribute("disabled");
          btnSend.innerHTML = "Añadir ticket";

          if (response.success === true) {
            $(".messages").html(
              '<div class="alert alert-success alert-dismissable" role="alert">' +
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>' +
                response.messages +
                "</div>"
            );

            // Cerrar el modal
            $("#addTicketModal").modal("hide");

            // update the manageMemberTable
            ticketsTable.ajax.reload(null, false);
          } else {
            if (response.messages instanceof Object) {
              $.each(response.messages, function (index, value) {
                var id = $(".input-" + index);

                id.removeClass("is-invalid")
                  .removeClass("is-valid")
                  .addClass(value.length > 0 ? "is-invalid" : "is-valid")
                  .after(value);
              });
            } else {
              $(".messages").html(
                '<div class="alert alert-warning alert-dismissable" role="alert">' +
                  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                  '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>' +
                  response.messages +
                  "</div>"
              );
            }
          }
        },
      });

      return false;
    });
}

function editTicketModel(id = null) {
  cleanForms();
  activityMessages.innerHTML = "";
  $("#editTicketModal").modal({ show: true });

  if (id) {
    $.ajax({
      url: BASE_URL + "tickets/get-ticket/" + id,
      type: "POST",
      dataType: "json",
      success: function (response) {
        if (response) {
          $(".input-category_id").val(response.category_id);
          $(".input-subcategory_id").val(response.subcategory_id);
          $(".input-request_of").val(response.request_of);
          $(".input-end_user").val(response.end_user);
          $(".input-status").val(response.status);
          $(".input-msj_customer").val(response.msj_customer);
          $(".input-msj_technician").val(response.msj_technician);

          // Activity
          let firstMessageDate = moment(
            response.created_at,
            "YYYY-MM-DD HH:mm:ss"
          ).format("LLLL");

          $(".activity-customer").html(response.customer);
          $(".activity-created_at").html(firstMessageDate);
          $(".activity-msj_customer").html(response.msj_customer);

          let activity = "";

          for (let i = 0; i < response.activity.length; i++) {
            let resActivity = response.activity[i];
            let messageDate = moment(
              resActivity.created_at,
              "YYYY-MM-DD HH:mm:ss"
            ).format("LLLL");

            activity += `
              <div class="post">
                <div class="user-block">
                  <img class="img-circle img-bordered-sm" src="${BASE_URL}custom/img/user_tech.png" alt="user image">
                  <span class="username">${resActivity.full_name}</span>
                  <span class="description">${messageDate}</span>
                </div>
                <!-- /.user-block -->
                <p>${resActivity.message}</p>
              </div>
            `;
          }

          activityMessages.html(activity);

          $("#editTicketForm")
            .unbind("submit")
            .bind("submit", function () {
              var form = $(this);

              $(".text-danger").remove(); // Remover text-danger
              $(".form-control")
                .removeClass("is-invalid")
                .removeClass("is-valid"); // Remover coloreado de los campos

              $.ajax({
                url: form.attr("action") + "/" + id,
                type: "post",
                data: form.serialize(),
                dataType: "json",

                success: function (response) {
                  if (response.success === true) {
                    $(".messages").html(
                      '<div class="alert alert-success alert-dismissable" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                        '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>' +
                        response.messages +
                        "</div>"
                    );

                    // Cerrar el modal
                    $("#editTicketModal").modal("hide");

                    // update the manageMemberTable
                    ticketsTable.ajax.reload(null, false);
                  } else {
                    $(".text-danger").remove();
                    if (response.messages instanceof Object) {
                      $.each(response.messages, function (index, value) {
                        var id = $(".input-" + index);

                        id.removeClass("is-invalid")
                          .removeClass("is-valid")
                          .addClass(
                            value.length > 0 ? "is-invalid" : "is-valid"
                          )
                          .after(value);
                      });
                    } else {
                      $(".messages").html(
                        '<div class="alert alert-warning alert-dismissable" role="alert">' +
                          '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                          '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>' +
                          response.messages +
                          "</div>"
                      );
                    }
                  }
                },
              });

              return false;
            });
        } else {
          alert("El registro seleccionado no es válido."); // En caso de que el ID seleccionado no exista en la base de datos.
        }
      },
    });
  } else {
    alert("Error"); // En caso de que no se haya recibido el ID del miembro.
  }
}

function viewTicketModel(id = null) {
  cleanForms();
  $("#viewTicketModal").modal({ show: true });
  activityMessages.innerHTML = "";

  if (id) {
    $.ajax({
      url: BASE_URL + "tickets/get-ticket/" + id,
      type: "POST",
      dataType: "json",
      success: function (response) {
        if (response) {
          $(".input-category_id").val(response.category_id);
          $(".input-subcategory_id").val(response.subcategory_id);
          $(".input-customer").val(response.customer);
          $(".input-request_of").val(response.request_of);
          $(".input-end_user").val(response.end_user);
          $(".input-created_at").val(response.created_at);
          $(".input-updated_at").val(response.updated_at);
          $(".input-status").val(response.status);
          $(".input-msj_technician").val(response.msj_technician);

          // Activity
          let firstMessageDate = moment(
            response.created_at,
            "YYYY-MM-DD HH:mm:ss"
          ).format("LLLL");

          $(".activity-customer").html(response.customer);
          $(".activity-created_at").html(firstMessageDate);
          $(".activity-msj_customer").html(response.msj_customer);

          let activity = "";

          for (let i = 0; i < response.activity.length; i++) {
            let resActivity = response.activity[i];
            let messageDate = moment(
              resActivity.created_at,
              "YYYY-MM-DD HH:mm:ss"
            ).format("LLLL");

            activity += `
              <div class="post">
                <div class="user-block">
                  <img class="img-circle img-bordered-sm" src="${BASE_URL}custom/img/user_tech.png" alt="user image">
                  <span class="username">${resActivity.full_name}</span>
                  <span class="description">${messageDate}</span>
                </div>
                <!-- /.user-block -->
                <p>${resActivity.message}</p>
              </div>
            `;
          }

          activityMessages.html(activity);
        } else {
          alert("El registro seleccionado no es válido."); // En caso de que el ID seleccionado no exista en la base de datos.
        }
      },
    });
  } else {
    alert("Error"); // En caso de que no se haya recibido el ID del miembro.
  }
}

function shareTicketModel(id = null) {
  let url = "https://api.whatsapp.com/send?text=";
  let message = "";

  $.ajax({
    url: BASE_URL + "tickets/get-ticket/" + id,
    type: "POST",
    dataType: "json",
    success: function (response) {
      if (response) {
        message = `
			🚩 Nuevo Ticket %23${response.ticket_id} %0A%0A*Cliente:* ${response.customer}%0A%0A*Fecha:* ${response.created_at}%0A%0A*Estado:* ${response.status}%0A%0A*Mensaje:*%0A%0A${response.msj_customer}
			`;

        window.open(url + message, "Compartir en WhatsApp");
      } else {
        alert("El registro seleccionado no es válido."); // En caso de que el ID seleccionado no exista en la base de datos.
      }
    },
  });
}
