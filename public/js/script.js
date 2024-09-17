$(function() {
	$('#insert-button').on('click', function () {
		$('#formModalLabel').html('Insert Student Data');
		$('#submit-button').html('INSERT');
		$('#modal-form').attr('action', 'http://localhost/project/php-mvc-wpu/public/student/insert')
		$('#id').val('');
		$('#name').val('');
		$('#nrp').val('');
		$('#email').val('');
		$('#major').val('');
	})

	$('.update-button').on('click', function () {
		$('#formModalLabel').html('Update Student Data');
		$('#submit-button').html('UPDATE');
		$('#modal-form').attr('action', 'http://localhost/project/php-mvc-wpu/public/student/update')
		const id = $(this).data('id');
		$.ajax({
			url: 'http://localhost/project/php-mvc-wpu/public/student/updateget',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success: function (data) {
				$('#id').val(data.id);
				$('#name').val(data.name);
				$('#nrp').val(data.nrp);
				$('#email').val(data.email);
				$('#major').val(data.major);
			}
		});
	})
})