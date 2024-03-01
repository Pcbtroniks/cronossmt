$(function () {
  $(document).ready(function(){
    categoriesTable = $('#categoriesTable').DataTable({
    });
	});
})

function createCategoryModal()
{
  $("#createForm")[0].reset();

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
					$("#createCategoryModal").modal('hide');

					// update the manageMemberTable
					categoriesTable.ajax.reload(null, false);
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