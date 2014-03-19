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
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.5701116415366!2d-74.0129174!3d40.705464500000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a115f2a0e6f%3A0x6fb8057c3d47b7e7!2s26+Broadway!5e0!3m2!1sen!2sus!4v1395199923672" width="600" height="450" frameborder="0" style="border:0"></iframe>
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