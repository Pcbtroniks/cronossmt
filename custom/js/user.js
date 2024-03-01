$(function () {

	/*==================================
	=            DataTables            =
	==================================*/

	usersTable = $('#usersTable').DataTable({
		'ajax': BASE_URL + 'users/list-users',
		'responsive': true,
		'orders': []
	});

});

function setUserProfile(id = null) {
	$.ajax({
		url: BASE_URL + 'users/get-user/' + id,
		type: 'POST',
		dataType: 'json',
		success: function (response) {

			if (response) {
				$(".input-email").val(response.email);
				$(".input-auth-level").val(response.auth_level);
				$(".input-banned").val(response.banned);
			}
			else {
				alert('El registro seleccionado no es válido.');
			}

		}
	});
}

function setUserACL(id = null) {
	$.ajax({
		url: BASE_URL + 'users/get-user-acl/' + id,
		type: 'POST',
		dataType: 'json',
		success: function (response) {

			if (response instanceof Object) {
				$.each(response, function (index, value) {
					$('.' + value).prop('checked', true);
				});
			}
			else {
				alert('No se pudieron encontrar los permisos ACL.');
			}

		}
	});
}

function addUserModel() {
	$("#createForm")[0].reset();

	// Remover text-danger
	$(".text-danger").remove();

	// Remover form-group
	$(".form-group").removeClass('has-error').removeClass('has-success');

	$("#createForm").unbind('submit').bind('submit', function () {
		var form = $(this);

		// Remover el text-danger
		$(".text-danger").remove();

		$.ajax({
			url: form.attr('action'),
			type: form.attr('method'),
			data: form.serialize(), // Convertir los datos de formulario en array y enviarlos al servidor
			dataType: 'json',
			success: function (response) {
				if (response.success === true) {
					$(".messages").html(
						'<div class="alert alert-success alert-dismissable" role="alert">' +
						'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
						'<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>' + response.messages +
						'</div>');

					// Cerrar el modal
					$("#addUserModal").modal('hide');

					// update the manageMemberTable
					usersTable.ajax.reload(null, false);
				} else {
					if (response.messages instanceof Object) {
						$.each(response.messages, function (index, value) {
							var id = $("#" + index);

							id
								.closest('.form-group')
								.removeClass('has-error')
								.removeClass('has-success')
								.addClass(value.length > 0 ? 'has-error' : 'has-success')
								.after(value);

						});
					} else {
						$(".messages").html(
							'<div class="alert alert-warning alert-dismissable" role="alert">' +
							'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
							'<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>' + response.messages +
							'</div>');
					}
				}
			}
		});

		return false;
	});
}

function editUserModel(id = null) {
	$('#editUserModal').modal({ show: true });
	$("#editForm")[0].reset(); // Limpiar los inputs.

	if (id) {

		$("#editForm")[0].reset();
		$('.form-group').removeClass('has-error').removeClass('has-success');
		$('.text-danger').remove();

		setUserACL(id);
		setUserProfile(id);

		$("#editForm").unbind('submit').bind('submit', function () {
			var form = $(this);

			$.ajax({
				url: form.attr('action') + '/' + id,
				type: 'post',
				data: form.serialize(),
				dataType: 'json',

				success: function (response) {

					if (response.success === true) {
						$(".messages").html(
							'<div class="alert alert-success alert-dismissable" role="alert">' +
							'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
							'<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>' + response.messages +
							'</div>');

						// Cerrar el modal
						$("#editUserModal").modal('hide');

						// update the manageMemberTable
						usersTable.ajax.reload(null, false);
					} else {
						$('.text-danger').remove();
						if (response.messages instanceof Object) {
							$.each(response.messages, function (index, value) {
								var id = $('input[name="' + index + '"]');

								id
									.closest('.form-group')
									.removeClass('has-error')
									.removeClass('has-success')
									.addClass(value.length > 0 ? 'has-error' : 'has-success')
									.after(value);

							});
						} else {
							$(".messages").html(
								'<div class="alert alert-warning alert-dismissable" role="alert">' +
								'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
								'<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>' + response.messages +
								'</div>');
						}
					}

				}
			});

			return false;
		})
	}
	else {
		alert('Error'); // En caso de que no se haya recibido el ID del miembro.
	}
}

function updPasswordModel(id = null) {
	$('#updPasswordModal').modal({ show: true });
	$("#updPasswordForm")[0].reset(); // Limpiar los inputs.

	if (id) {

		$("#updPasswordForm")[0].reset();
		$('.form-group').removeClass('has-error').removeClass('has-success');
		$('.text-danger').remove();

		$.ajax({
			url: BASE_URL + 'users/get-user/' + id,
			type: 'POST',
			dataType: 'json',
			success: function (response) {

				if (response) {
					$("#show_email").val(response.email);

					$("#updPasswordForm").unbind('submit').bind('submit', function () {
						var form = $(this);

						$.ajax({
							url: form.attr('action') + '/' + id,
							type: 'post',
							data: form.serialize(),
							dataType: 'json',

							success: function (response) {

								if (response.success === true) {
									$(".messages").html(
										'<div class="alert alert-success alert-dismissable" role="alert">' +
										'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
										'<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>' + response.messages +
										'</div>');

									// Cerrar el modal
									$("#updPasswordModal").modal('hide');

									// update the manageMemberTable
									usersTable.ajax.reload(null, false);
								} else {
									$('.text-danger').remove();
									if (response.messages instanceof Object) {
										$.each(response.messages, function (index, value) {
											var id = $("#" + index);

											id
												.closest('.form-group')
												.removeClass('has-error')
												.removeClass('has-success')
												.addClass(value.length > 0 ? 'has-error' : 'has-success')
												.after(value);

										});
									} else {
										$(".messages").html(
											'<div class="alert alert-warning alert-dismissable" role="alert">' +
											'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
											'<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>' + response.messages +
											'</div>');
									}
								}

							}
						});

						return false;
					})
				}
				else {
					alert('El registro seleccionado no es válido.'); // En caso de que el ID seleccionado no exista en la base de datos.
				}

			}
		});
	}
	else {
		alert('Error'); // En caso de que no se haya recibido el ID del miembro.
	}
}
