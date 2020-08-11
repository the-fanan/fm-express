<!DOCTYPE Html>
<html>
	<head>
		<title>FM Express <?php wp_title( '|', true, 'right' ); ?></title>
		<?php wp_head(); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" />
		<!-- Google Raleway Font -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,800,700,900' rel='stylesheet' type='text/css'>

		<!-- Main Styles -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/responsive.css" type="text/css">

		<!-- Scripts -->
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
	</head>

	<body>
		<div class="headliner">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-12 col-md-5 d-flex justify-content-start">
						<img class="site-logo responsive" src="<?php echo get_template_directory_uri(); ?>/images/logo.png"/>
					</div>
					<div class="col-12 col-md-5 d-flex justify-content-end">
						<ul class="social-links">
							<li><a href="#"><i class="fab fa-facebook-square fa-2x"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter-square fa-2x"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin fa-2x"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram fa-2x"></i></a></li>
							<li><a href="#"><i class="fas fa-envelope fa-2x"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<?php
		wp_nav_menu( array( 
			'theme_location' => 'fmx-custom-menu', 
			'container_class' => 'main-nav-menu d-flex justify-content-center' ) ); 
		?>
		<div class="container-fluid">