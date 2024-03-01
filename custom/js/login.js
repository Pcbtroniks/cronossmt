$(document).ready(function () {
  $(document).on('submit', 'form', function (e) {
    $.ajax({
      type: 'post',
      cache: false,
      url: BASE_URL + 'login/ajax_attempt_login',
      data: {
        'login_string': $('[name="login_string"]').val(),
        'login_pass': $('[name="login_pass"]').val(),
        'loginToken': $('[name="token"]').val()
      },
      dataType: 'json',
      success: function (response) {
        $('[name="token"]').val(response.token);
        console.log(response);
        if (response.status == 1) {
          window.location.href = BASE_URL;
        } else if (response.status == 0 && response.on_hold) {
          $('form').hide();
          $('#on-hold-message').show();

          $.alert({
            title: 'Error',
            content: 'Ha excedido el número máximo de intentos de inicio de sesión.',
            type: 'red',
            typeAnimated: true,
            buttons: {
              aceptar: function () {
              }
            }
          })

          // alert('Ha excedido el número máximo de intentos de inicio de sesión.');
        } else if (response.status == 0 && response.count) {

          $.alert({
            title: 'Error',
            content: 'Intento de inicio de sesión fallido ' + response.count + ' de ' + $('#max_allowed_attempts').val(),
            type: 'red',
            typeAnimated: true,
            buttons: {
              aceptar: function () {
              }
            }
          });

          //alert('Intento de inicio de sesión fallido ' + response.count + ' de ' + $('#max_allowed_attempts').val());
        }
      }
    });
    return false;
  });
});


