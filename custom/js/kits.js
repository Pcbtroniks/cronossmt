 $(function () {
  $(document).ready(function(){

		/*===============================
		=            SELECT2            =
		===============================*/

		//Initialize Select2 Elements
		$.fn.select2.defaults.set('language', 'es');
		$('.select2').select2()
		$('#user_id').val(null).trigger('change');

		user_select('#user_id', '#addKitsModal'); // select2 for customer.

		/*==================================
		=            DataTables            =
		==================================*/

    kitsTable = $('#kitsTable').DataTable({
			'ajax': BASE_URL+'kits/list-kits',
			'responsive': true,
			'orders': []
    })
	});
});

function user_select(id_select = null, id_modal = null)
{
	if(typeof id_select !== null && typeof id_modal !== null)
	{
		$(id_select).select2({
			dropdownParent: $(id_modal),
			minimumInputLength: 2,
			placeholder: 'SELECCIONAR USUARIO',
			allowClear: true,

		  ajax: {
		  	url: BASE_URL+"kits/select2-users/",
		  	type: "post",
		  	dataType: 'json',
		  	delay: 1000,
		    data: function (params)
		    {
		    	return {
		    		searchTerm: params.term // search term
		    	};
		    },
		    processResults: function (response){
		    	return {
		    		results: response
		    	};
		    },

		    cache: true
		  } // end call ajax
		}); // end select2 for customer
	}
}

function addKitsModel()
{
  $("#createForm")[0].reset();
	$('#user_id').val("").trigger('change'); // Limpiar select2	

  // Remover text-danger
  $(".text-danger").remove();

  // Remover form-group
  $(".form-group").removeClass('has-error').removeClass('has-success');

	$("#createForm").unbind('submit').bind('submit', function(){
		var form = $(this);

		// Remover el text-danger
		$(".text-danger").remove();

		$.ajax({
			url: form.attr('action'),
			type: form.attr('method'),
			data: form.serialize(), // Convertir los datos de formulario en array y enviarlos al servidor
			dataType: 'json',
			success:function(response){
				if(response.success === true){
					$(".messages").html(
						'<div class="alert alert-success alert-dismissable" role="alert">'+
							'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
							'<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
						'</div>');

					// Cerrar el modal
					$("#addKitsModal").modal('hide');

					// update the manageMemberTable
					kitsTable.ajax.reload(null, false);
				}else{
					if(response.messages instanceof Object){
						$.each(response.messages, function(index, value){
							var id = $("#"+index);

							id
							.closest('.form-group')
							.removeClass('has-error')
							.removeClass('has-success')
							.addClass(value.length > 0 ? 'has-error' : 'has-success')
							.after(value);

						});
					}else{
						$(".messages").html(
							'<div class="alert alert-warning alert-dismissable" role="alert">'+
								'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
								'<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
							'</div>');
					}
				}
			}
		});

		return false;
	});
}

function editEquipmentModel(id = null)
{
	$('#editKitsModal').modal({show:true});
	$("#editForm")[0].reset(); // Limpiar los inputs.
	$('#upd_user_id').val("").trigger('change'); // Limpiar select2	

	if(id){

		$("#editForm")[0].reset();
		$('.form-group').removeClass('has-error').removeClass('has-success');
		$('.text-danger').remove();

		$.ajax({
			url: BASE_URL+'kits/get-equipment/'+id,
			type: 'POST',
			dataType: 'json',
			success: function(response)
			{

				if(response)
				{

					/*=====  CLIENTE  ======*/
					// Remover todas las opciones del select.
					$('#upd_user_id').empty().trigger("change");

					// Añadir el cliente actual a la lista.
					$('#upd_user_id').select2({data: [{id: response.customer_id, text: response.customer}]});

					// Cambiar la opción seleccionada y actualizar la lista.
					$('#upd_user_id').val(response.customer_id).trigger('change.select2');

					// select2 for customer.
					user_select('#upd_user_id', '#editKitsModal');

					$("#upd_kit_name").val(response.kit_name);
					$("#upd_status").val(response.status);
					$("#upd_observations").val(response.observations);

					$("#editForm").unbind('submit').bind('submit', function(){
						var form = $(this);

						$.ajax({
							url: form.attr('action') + '/' + id,
							type: 'post',
							data: form.serialize(),
							dataType: 'json',

							success: function(response)
							{

								if(response.success === true){
									$(".messages").html(
										'<div class="alert alert-success alert-dismissable" role="alert">'+
											'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
											'<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
										'</div>');

									// Cerrar el modal
									$("#editKitsModal").modal('hide');

									// update the manageMemberTable
									kitsTable.ajax.reload(null, false);
								}else{
									$('.text-danger').remove();
									if(response.messages instanceof Object){
										$.each(response.messages, function(index, value){
											var id = $("#upd_"+index);

											id
											.closest('.form-group')
											.removeClass('has-error')
											.removeClass('has-success')
											.addClass(value.length > 0 ? 'has-error' : 'has-success')
											.after(value);

										});
									}else{
										$(".messages").html(
											'<div class="alert alert-warning alert-dismissable" role="alert">'+
												'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
												'<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
											'</div>');
									}
								}

							}
						});

						return false;
					})	
				}
				else
				{
					alert('El registro seleccionado no es válido.'); // En caso de que el ID seleccionado no exista en la base de datos.
				}

			}
		});
	}
	else{
		alert('Error'); // En caso de que no se haya recibido el ID del miembro.
	}
}