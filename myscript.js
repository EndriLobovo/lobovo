jQuery('form .message').on('keypress', function(e) {
	var message = jQuery(".message").val();
        $.ajax({
        type: 'POST',
	url: admin_ajax,
        data: {
		action: 'keywordajax_submission',
		'message': message,
	}, 
        success: function(data){
          	jQuery('.form-message').html(data);
            
          }
        });
});
