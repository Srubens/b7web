<?php get_header() ?>

<div class="box_posts">
	<div class="container">
		<div class="row">

			<div class="col-md-12">

				<?php if(have_posts()){ ?>
   					<?php while(have_posts()){ ?>
						
						<article id="<?php the_ID(); post_class('single_article'); ?>" >

							<div class="single_item">
								<!-- PARA COLOCAR MINIATURA -->
		   						<?php if( has_post_thumbnail() ){ ?>
				           	 		<?php the_post_thumbnail('large'); ?>
				           	 	<?php } ?>
			           	 	</div>
							
							<?php the_post(); ?>

			           	 	<div class="single_data">
			           	 		<p> <?= get_the_date(); ?> </p>
			           	 	</div>

			           	 	<div class="single_title">
			           	 		<h1> <?php the_title(); ?> </h1>
			           	 	</div>

							<div class="single_content">
				           	 	<p>
				           	 		<!-- CONTEUDO DO TEXTO -->
				           	 		<?php the_content(); ?>
				           	 	</p>
							</div>

	   					</article>
		   			<?php } ?>
	   			<?php } ?>

		
				<div class="single_comments">
					<p>
	           	 		<!-- COMMENTARIOS 
	           	 			0 comentarios um comentario ou % comentarios -->
	           	 		<?php comments_number(''); ?>
	           	 	</p>
				</div>


				<?php 
                       
                   /* IMPORTANTE */
       	 	 	   wp_reset_postdata();
       	 	 	   
                   // COLOCANDO A FUNÇÃO COMENTARIOS 					   
					if( comments_open() ){
				   	  comments_template();
				    }
                  
   				 ?>

   				<div class="row">
   					<div class="col-md-12">
   						<header>Outros Posts:</header>
   					</div>
					<?php 
                       
                       $categories = get_the_category();
                       $rs_query = new WP_Query(array(
                       	'posts_per_page' => 4,
                       	'post__not_in' => array( $post->ID ),
                       	'cat' => $categories[0]->term_id
                       ));

                       if( $rs_query->have_posts() ){
                       	  while( $rs_query->have_posts() ){
                       	  	   $rs_query->the_post();
                       	  	   get_template_part('template_parts/related_post');
                       	  }
                       }

                       wp_reset_postdata();

					?>
				</div>

			</div>
		
		</div>
	</div>
</div>

<?php get_footer(); ?>