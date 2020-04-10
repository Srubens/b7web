<div class="box_article_post">
	<div class="box_item">
        <div class="col-md-6">
    		<div class="box_img">
                <?php if( has_post_thumbnail() ){ ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large',array('class' => 'post_thumb') ); ?></a>
                <?php } ?>
    		</div>
        </div>
        <div class="col-md-6">
    		<div class="box_content">
    			<header>
    				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    			</header>
    			<p><a href="<?php the_permalink(); ?>"> <?php the_excerpt(); ?></a></p>
    			<a class="btn-more btn btn-btnblue" href="<?php the_permalink(); ?>">Continuar lendo</a>
    		</div>
        </div>
	</div>
</div>