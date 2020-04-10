<div class="col-md-3">
	<div class="related_post">
		<?php if(has_post_thumbnail()){ ?>
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('medium') ?>
			</a>
		<?php } ?>
		<div><a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a></div>
	</div>
</div>