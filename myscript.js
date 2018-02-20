jQuery('form .custom-button-class').on('click', function(e) {
	e.preventDefault();
	var message = jQuery(".message").val();
	  	$.ajax({
	      	type: 'POST',
			url: admin_ajax,
	        data: {
				action: 'lobo_keywords_tools',
				'message': message,
			}, 
	      	success: function(data){
	          	jQuery('.form-message').html(data);
	         }
	        });
});
