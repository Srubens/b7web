<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viweport" content="width=device-width,initial-scale=1,user-scalable=no" />
	<meta charset="<?php bloginfo('description'); ?>" >
	<title><?php bloginfo("name") ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

	<div class="line_top">
		<div class="line"></div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-light navbar_header">
		<div class="main_logo">
			<?php 

	         //LOGO CUSTOMIZADA
	         if( has_custom_logo() ){
	            the_custom_logo();
	         } 

		    ?>
		</div>

		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
	     </button>

	     <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
	     	<li class="nav-item">
		        <a class="nav-link" href="<?php bloginfo('url'); ?>" >Home</a>
	        </li>
	     	<?php 
                 
	            if( has_nav_menu('topo') ){
		            wp_nav_menu([
		              'theme_location' => 'topo',
		              'fallback_cb' => false,
		              'container_id' => 'navbarResponsive',
		              'menu_class' => 'navbar-nav',
		              'walker' => new WP_Bootstrap_Navwalker(),
		              'depth' => 2
		            ]);
		        }

			?>

			<div class="icons_social">
		      <?php 
				   if(get_theme_mod('rs_facebook')){
				?>
					<a href="<?php echo get_theme_mod('rs_facebook'); ?>" target="_blank" ><span><i class="fa fa-facebook-square" title="twitter" ></i></span></a>

			  <?php   		
			     }
			   ?>
				
			  <?php 
				   if(get_theme_mod('rs_youtube')){
			   ?>
					<a href="<?php echo get_theme_mod('rs_youtube'); ?>" target="_blank" ><span><i class="fa fa-youtube" title="twitter" ></i></span></a>

			  <?php   		
			     }
			   ?>

			   <?php 
				   if(get_theme_mod('rs_github')){
			   ?>
					<a href="<?php echo get_theme_mod('rs_github'); ?>" target="_blank" ><span><i class="fa fa-github-square" title="twitter" ></i></span></a>
			  <?php   		
			     }
			   ?>
	      </div>
	     </div>
    </nav>
	
	<!-- AQUI VEM O BANNER PRINCIPAL -->
	<?php
	   if(is_home()){ 
		   get_template_part('template_parts/banner_header');
	   }else{
	   	   get_template_part('template_parts/banner-optional');
	   }
	?>
    