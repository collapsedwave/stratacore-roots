<?php
/*
Template Name: Home Template
*/
?>

<div class="container-full clearfix home-hero">
	<div class="container col-sm-12 row">
		<div class="col-sm-8 col-sm-offset-2 clearfix home-hero-content">
			<?php if( get_field('hero_title') ): ?>
				<h1><?php the_field('hero_title'); ?></h1>
			<?php endif; ?>
			<p><?php the_field('hero_copy'); ?></p>
			<a href="#home-contact" class="btn btn-primary">Contact Us</a>
		</div>
	</div>
</div>

<div class="container-full clearfix home-services">
	<div class="container">
		<div class="col-sm-4">
			<h3><i class="fa fa-ticket"></i>&nbsp;&nbsp;<?php the_field('service_title_1'); ?></h3>
			<p><?php the_field('service_copy_1'); ?></p>
		</div>
		<div class="col-sm-4">
			<h3><i class="fa fa-bar-chart-o"></i>&nbsp;&nbsp;<?php the_field('service_title_2'); ?></h3>
			<p><?php the_field('service_copy_2'); ?></p>
		</div>
		<div class="col-sm-4">
			<h3><i class="fa fa-cogs"></i>&nbsp;&nbsp;<?php the_field('service_title_3'); ?></h3>
			<p><?php the_field('service_copy_3'); ?></p>
		</div>
	</div>
</div>

<div class="container-full clearfix text-center home-usp">
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2">
			<h2><?php the_field('proposition_title'); ?></h2>
			<p><?php the_field('proposition_copy'); ?></p>
		</div>
	</div>
</div>

<div class="container-full clearfix home-team">
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2">
			<h3><i class="fa fa-users"></i>&nbsp;&nbsp;<?php the_field('team_title'); ?></h3>
			<p><?php the_field('team_copy_1'); ?></p>
			<p><?php the_field('team_copy_2'); ?></p>
		</div>
	</div>
</div>

<div class="container-full clearfix home-contact" id="home-contact">
	<div class="container">
		<div class="col-sm-4 col-sm-offset-2 google-maps">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.5593166574818!2d-74.01405810000001!3d40.70570220000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a1167d8d4d1%3A0x3a8130af7b937587!2s25+Broadway!5e0!3m2!1sen!2sus!4v1395933883013" width="600" height="450" frameborder="0" style="border:0"></iframe>
		</div>
		<div class="col-sm-6 contact-info">
			<h2><i class="fa fa-envelope"></i>&nbsp;&nbsp;Contact Us</h2>
			(212) 243-1008<br>
			<a href="mailto:contact@stratacore.net">contact@stratacore.net</a><br>
			<p>
				25 Broadway<br>
				5th Floor<br>
				New York, NY, 10025
			</p>
		</div>
	</div>
</div>