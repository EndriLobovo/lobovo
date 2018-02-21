jQuery('form .message').on('keyup', function() {
	var message = jQuery(".message").val();
        $.ajax({
        	type: 'POST',
        	url: admin_ajax,
        	data: {
				action: 'keyword_ajax_density',
				'message': message,
			}, 
          success: function(data){
          		jQuery('.keywords-density').html(data);
          }
        });

});
