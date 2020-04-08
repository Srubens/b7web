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
		 <a class="navbar-brand main_logo" href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/b7_logo.png" alt="logo"></a>

		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
	     </button>

		  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
			    <ul class="navbar-nav">
				      <li class="nav-item active">
				        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Comece Aqui</a>
				      </li> 
				      <li class="nav-item">
				        <a class="nav-link" href="#">Sobre</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Depoimentos</a>
				      </li>
				      <div class="icons_social">
					      <li class="nav-item">
					        <a class="nav-link" href="<?php echo get_theme_mod('rm_facebook'); ?>" target="_blank" ><span><i class="fa fa-facebook-square" title="facebook" ></i></span></a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="<?php echo get_theme_mod('rm_facebook'); ?>" target="_blank" ><span><i class="fa fa-youtube" title="youtube" ></i></span></a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="<?php echo get_theme_mod('rm_facebook'); ?>" target="_blank" ><span><i class="fa fa-instagram" title="instagram" ></i></span></a>
					      </li>
				      </div>
			    </ul>
		 </div>
    </nav>


    <div class="main_header">
    	<div class="container">
    		<div class="row">
				<div class="col-md-5">

					<div class="box_image">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/heroimage.png" alt="hero">
					</div>
				
				</div>
				<div class="col-md-7">
					<div class="header">
						<div class="header_text">
							<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
							<p>Id repellendus quae, fuga ad, beatae odit magnam aut rerum iste, error minima quaerat praesentium explicabo excepturi consequatur impedit.</p>
						</div>
						<div class="header_form">
							<form class="form_cadastro" action="">
								<input type="email" class="form-control col-md-7" placeholder="Digiete seu melhor e-mail aqui!" required>
								<button type="button" class="btn btn-btnblue">Cadastrar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>