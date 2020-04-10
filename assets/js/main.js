jQuery(function(){

	jQuery('.jload').on('click', function(e){

		e.preventDefault();
		
		jQuery('.jload').hide();
	
		var offset = jQuery('.box_item').length;
		jQuery.ajax({
			type:'POST',
			url: ajaxUrl,
			data: { action:'LoadMorePosts', offset: offset },
			success: function(html){
				
				jQuery('.jload').show()
				
				if( html != '' ){
					jQuery('.article_box').append(html);
				}else{
					jQuery('.jload').hide()
				}

				window.morePostLoading = false;
			}
		});

	});

	jQuery('.jtop').on('click', function(){
		jQuery('html, body').animate({scrollTop:0}, 1000);
	});

});