<?php
/*
Template Name: Home Template
*/
?>

<div class="container-full clearfix home-hero">
	<div class="container col-sm-12 row">
		<div class="col-sm-8 col-sm-offset-2">
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
			<h3><?php the_field('service_title_1'); ?></h3>
			<p><?php the_field('service_copy_1'); ?></p>
		</div>
		<div class="col-sm-4">
			<h3><?php the_field('service_title_2'); ?></h3>
			<p><?php the_field('service_copy_2'); ?></p>
		</div>
		<div class="col-sm-4">
			<h3><?php the_field('service_title_3'); ?></h3>
			<p><?php the_field('service_copy_3'); ?></p>
		</div>
	</div>
</div>

<div class="container-full clearfix home-usp">
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2">
			<h2><?php the_field('proposition_title'); ?></h2>
			<p><?php the_field('proposition_copy'); ?></p>
		</div>
	</div>
</div>

<div class="container-full clearfix home-team">
	<div class="container">
		<h3><?php the_field('team_title'); ?></h3>
		<div class="row col-sm-12">
			<div class="col-sm-6">
				<p><?php the_field('team_copy_1'); ?></p>
			</div>
			<div class="col-sm-6">
				<p><?php the_field('team_copy_2'); ?></p>
			</div>
		</div>
	</div>
</div>

<div class="container-full clearfix home-contact" id="home-contact">
	<div class="container">
		<div class="col-sm-3 contact-address">
		<p>
			25 Broadway<br>
			5th Floor<br>
			New York, NY, 10025
		</p>
		</div>
		<div class="col-sm-3 contact-direct">
			(212) 243-1008<br>
			<a href="mailto:contact@stratacore.net">contact@stratacore.net</a>
		</div>
	</div>
</div>