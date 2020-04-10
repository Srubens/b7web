<div class="jtop topo btn btn-btnblue" href="#" title="voltar ao topo"><i class="fa fa-chevron-up"></i></div>

<div class="cursos_footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<header class="header_footer">
					<h3>Nossos Cursos:</h3>
				</header>
			</div>
			<div class="col-md-4">
				<div class="box_curso">
					<a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/images/cursos/curso-js.jpg" alt="curso"></a>
					<h5><a href="#">Curso de Javascript</a></h5>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box_curso">
					<a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/images/cursos/curso-node.jpg" alt="curso"></a>
					<h5><a href="#">Curso de Node</a></h5>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box_curso">
					<a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/images/cursos/curso-php.jpg" alt="curso"></a>
					<h5><a href="#">Curso de Php</a></h5>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <img src="<?php bloginfo('template_url'); ?>/assets/images/cursos/curso-js.jpg" alt="curso"> -->

<div class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6"><p>&copy; Todos os direitos reservados <?php echo date('Y') ?> - 2020 </p></div>
			<div class="col-md-6"><div class="d-flex justify-content-end"><p>Feito por Rubens Filipe</p></div></div>
		</div>
	</div>
</div>

<script>
	var ajaxUrl = "<?php echo admin_url('admin-ajax.php'); ?>";
</script>
<?php wp_footer(); ?>
</body>
</html>