$(function () {
  customersTable = $("#customersTable").DataTable({
    ajax: BASE_URL + "customers/list-customers",
    responsive: true,
    autoWidth: false,
    orders: [],
  });
});

function createCustomerModel() {
  $("#createForm")[0].reset();

  // Remover text-danger
  $(".text-danger").remove();

  // Remover form-group
  $(".form-group").removeClass("has-error").removeClass("has-success");

  $("#createForm")
    .unbind("submit")
    .bind("submit", function () {
      var form = $(this);

      // Remover el text-danger
      $(".text-danger").remove();

      $.ajax({
        url: form.attr("action"),
        type: form.attr("method"),
        data: form.serialize(), // Convertir los datos de formulario en array y enviarlos al servidor
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
            $("#createCustomerModal").modal("hide");

            // update the manageMemberTable
            customersTable.ajax.reload(null, false);
          } else {
            if (response.messages instanceof Object) {
              $.each(response.messages, function (index, value) {
                var id = $("#" + index);

                id.closest(".form-group")
                  .removeClass("has-error")
                  .removeClass("has-success")
                  .addClass(value.length > 0 ? "has-error" : "has-success")
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

function editCustomerModal(id = null) {
  $("#editCustomerModal").modal({ show: true });
  $("#editForm")[0].reset(); // Limpiar los inputs.

  if (id) {
    $("#editForm")[0].reset();
    $(".form-group").removeClass("has-error").removeClass("has-success");
    $(".text-danger").remove();

    $.ajax({
      url: BASE_URL + "customers/get-customer/" + id,
      type: "POST",
      dataType: "json",
      success: function (response) {
        if (response) {
          $("#upd_customer").val(response.customer);
		  $("#upd_trade_name").val(response.trade_name);
		  $("#upd_rfc").val(response.rfc);
		  $("#upd_email").val(response.email);
		  $("#upd_phone").val(response.phone);
          $("#upd_status").val(response.status);

          $("#editForm")
            .unbind("submit")
            .bind("submit", function () {
              var form = $(this);

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
                    $("#editCustomerModal").modal("hide");

                    // update the manageMemberTable
                    customersTable.ajax.reload(null, false);
                  } else {
                    $(".text-danger").remove();
                    if (response.messages instanceof Object) {
                      $.each(response.messages, function (index, value) {
                        var id = $("#upd_" + index);

                        id.closest(".form-group")
                          .removeClass("has-error")
                          .removeClass("has-success")
                          .addClass(
                            value.length > 0 ? "has-error" : "has-success"
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
