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

							<div class="single_comments">
								<p>
				           	 		<!-- COMMENTARIOS 
				           	 			0 comentarios um comentario ou % comentarios -->
				           	 		<?php comments_number(''); ?>
				           	 	</p>
							</div>

	   					</article>
		   			<?php } ?>
	   			<?php } ?>


			</div>
		
		</div>
	</div>
</div>

<?php get_footer(); ?>