$(function(){
	var form = $("#contactForm");
	var submit = form.find('button[type=submit]');

	form.submit(function(e) {
		submit.prop('disabled', true);
		var mod = $('#modal-msg');
		var origSubmitHtml = submit.html();
		submit.html('Please wait...');

		$.ajax({
			type: "POST",
			url: form.attr('action'),
			data: form.serialize(), // serializes the form's elements.
			success: function(data) {
				console.log(typeof data);
				if (!data.success) {
					mod.find('h4.modal-title').html('Error');
					mod.find('div.modal-body > p').removeClass().addClass('text-danger').html(data.error);
					mod.modal();
					return;
				}

				mod.find('h4.modal-title').html('Success');
				mod.find('div.modal-body > p').removeClass().html(data.message);
				mod.modal();
			},
			error: function() {
				mod.find('h4.modal-title').html('Error');
				mod.find('div.modal-body > p').removeClass().addClass('text-danger').html("Failed to contact the server");
				mod.modal();
			},
			complete: function() {
				submit.html(origSubmitHtml);
				submit.prop('disabled', false);
			}
		});

		e.preventDefault(); // avoid to execute the actual submit of the form.
	});
});