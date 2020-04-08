<?php get_header(); ?>

    <div class="box_depositions">
    	<div class="container">
	    	<div class="row">
	    		<?php 
                   $a = 1;
                   for($a = 1; $a <= 2; $a++){
                   	  $a;
	    		?>
	    		<div class="col-md-6">

	    			<div class="depositions_article">
	    				<div class="depositions_image">
	    					<img src="<?php bloginfo('template_directory'); ?>/assets/images/heroimage.png" alt="hero">
	    				</div>
	    				<div class="depositions_text">
	    					<p><i>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui cum sint blanditiis"</i></p>
	    					<p><b>João</b></p>
	    				</div>
	    			</div>

	    		</div>
		    	<?php } ?>
	    	</div>
    	</div>
    </div>

<?php get_footer(); ?>