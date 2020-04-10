<?php get_header(); ?>

    <div class="box_depositions">
    	<div class="container">
	    	<div class="row">
	    		<?php 
                   $d1 = rand(1, 4);
                   $txt = get_theme_mod('rs_depo' . $d1 . '_txt');
                   $url = get_theme_mod('rs_depo' . $d1 . '_url');
                   $autor = get_theme_mod('rs_depo' . $d1 . '_autor');
                   $url = wp_get_attachment_image_src($url);

	    		?>
	    		<div class="col-md-6">

	    			<div class="depositions_article">
	    				<div class="depositions_image">
	    					<img src="<?= $url[0]; ?>" alt="hero">
	    				</div>
	    				<div class="depositions_text">
	    					<p><i><?php echo $txt; ?></i></p>
	    					<p><b><?php echo $autor; ?></b></p>
	    				</div>
	    			</div>

	    		</div>

		    	<?php 
		    	   $d2 = rand(1, 4);
		    	   if($d2 == $d1){
		    	   		$d2 = rand(1, 4);
		    	   }
		    	   $txt = get_theme_mod('rs_depo' . $d2 . '_txt');
                   $url = get_theme_mod('rs_depo' . $d2 . '_url');
                   $autor = get_theme_mod('rs_depo' . $d2 . '_autor');
                   $url = wp_get_attachment_image_src($url);
		    	?>
		    	<div class="col-md-6">

	    			<div class="depositions_article">
	    				<div class="depositions_image">
	    					<img src="<?= $url[0]; ?>" alt="hero">
	    				</div>
	    				<div class="depositions_text">
	    					<p><i><?php echo $txt; ?></i></p>
	    					<p><b><?php echo $autor; ?></b></p>
	    				</div>
	    			</div>

	    		</div>
		    	
	    	</div>
    	</div>
    </div>

    <div class="box_posts">
    	<div class="container">
    		<div class="row">

    			<div class="col-md-12">
					
					<div class="article_box">
	    				<?php if(have_posts()){ ?>
		   					<?php while(have_posts()){ ?>

		   						<?php the_post(); ?>

		   						<?php get_template_part('template_parts/post') ?>
			   				
			   				<?php } ?>
		   				<?php } ?>
	   				</div>

    			</div>

    			<div class="loadmore jload btn btn-btnblue">Carregar Mais</div>
    		
    		</div>
    	</div>
    </div>

<?php get_footer(); ?>