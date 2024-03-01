$(function () {
  $(document).ready(function(){

		/*===============================
		=            SELECT2            =
		===============================*/

		//Initialize Select2 Elements
		$.fn.select2.defaults.set('language', 'es');
		$('.select2').select2()
		$('#customer_id').val(null).trigger('change');

		customer_select('#customer_id', '#addEquipmentModal'); // select2 for customer.

		/*==================================
		=            DataTables            =
		==================================*/

    equipmentTable = $('#equipmentTable').DataTable({
			'ajax': BASE_URL+'inventory/printer/list-equipment',
			'responsive': true,
			'orders': []
    })
	});
});

function customer_select(id_select = null, id_modal = null)
{
	if(typeof id_select !== null && typeof id_modal !== null)
	{
		$(id_select).select2({
			dropdownParent: $(id_modal),
			minimumInputLength: 2,
			placeholder: 'SELECCIONAR CLIENTE',
			allowClear: true,

		  ajax: {
		  	url: BASE_URL+"inventory/computo/select2-customers/",
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

function addEquipmentModel()
{
  $("#createForm")[0].reset();
	$('#customer_id').val("").trigger('change'); // Limpiar select2

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
					$("#addEquipmentModal").modal('hide');

					// update the manageMemberTable
					equipmentTable.ajax.reload(null, false);
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
	$('#editEquipmentModal').modal({show:true});
	$("#editForm")[0].reset(); // Limpiar los inputs.
	$('#upd_customer_id').val("").trigger('change'); // Limpiar select2

	if(id){

		$("#editForm")[0].reset();
		$('.form-group').removeClass('has-error').removeClass('has-success');
		$('.text-danger').remove();

		$.ajax({
			url: BASE_URL+'inventory/printer/get-equipment/'+id,
			type: 'POST',
			dataType: 'json',
			success: function(response)
			{

				if(response)
				{
					/*=====  CLIENTE  ======*/
					// Remover todas las opciones del select.
					$('#upd_customer_id').empty().trigger("change");

					// Añadir el cliente actual a la lista.
					$('#upd_customer_id').select2({data: [{id: response.customer_id, text: response.customer}]});

					// Cambiar la opción seleccionada y actualizar la lista.
					$('#upd_customer_id').val(response.customer_id).trigger('change.select2');

					// select2 for customer.
					customer_select('#upd_customer_id', '#editEquipmentModal');

					$("#upd_serial_number").val(response.serial_number);
					$("#upd_area").val(response.area);
					$("#upd_brand").val(response.brand);
					$("#upd_status").val(response.status);
					$("#upd_type").val(response.type);
					$("#upd_multifuncional_type").val(response.multifuncional_type);
					$("#upd_connection_type").val(response.connection_type);
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
									$("#editEquipmentModal").modal('hide');

									// update the manageMemberTable
									equipmentTable.ajax.reload(null, false);
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

function viewEquipmentModel(id = null)
{
	$('#viewEquipmentModal').modal({show:true});
	$("#viewForm")[0].reset(); // Limpiar los inputs.

	if(id){

		$("#viewForm")[0].reset();
		$('.form-group').removeClass('has-error').removeClass('has-success');
		$('.text-danger').remove();

		$.ajax({
			url: BASE_URL+'inventory/printer/get-equipment/'+id,
			type: 'POST',
			dataType: 'json',
			success: function(response)
			{

				if(response)
				{
					$("#view_customer_id").val(response.customer_id);
					$("#view_serial_number").val(response.serial_number);
					$("#view_area").val(response.area);
					$("#view_brand").val(response.brand);
					$("#view_status").val(response.status);
					$("#view_type").val(response.type);
					$("#view_multifuncional_type").val(response.multifuncional_type);
					$("#view_connection_type").val(response.connection_type);
					$("#view_observations").val(response.observations);
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