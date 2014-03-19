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
			<a href="#home-contact" class="btn btn-primary pull-right">Contact Us</a>
		</div>
	</div>
</div>

<div class="container-full clearfix home-services">
	<div class="container">
		<div class="col-sm-4">
			<h3>&#xf145;<?php the_field('service_title_1'); ?></h3>
			<p><?php the_field('service_copy_1'); ?></p>
		</div>
		<div class="col-sm-4">
			<h3>&#xf080;<?php the_field('service_title_2'); ?></h3>
			<p><?php the_field('service_copy_2'); ?></p>
		</div>
		<div class="col-sm-4">
			<h3>&#xf085;<?php the_field('service_title_3'); ?></h3>
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
		<div class="col-sm-12">
			<h3><?php the_field('team_title'); ?></h3>
			<p><?php the_field('team_copy_1'); ?></p>
			<p><?php the_field('team_copy_2'); ?></p>
		</div>
	</div>
</div>

<div class="container-full clearfix home-contact" id="home-contact">
	<div class="container">
		<div class="col-sm-6 map">
			<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="width:300px;"><div style="overflow:hidden;height:300px;width:300px;"><div id="gmap_canvas" style="height:300px; width:300px;"></div><style>.gmap{position:relative;line-height:1.12;overflow:hidden;color:#000;white-space:nowrap;display:block;margin-bottom:2px;font-weight:500;}</style><iframe src="http://www.embed-google-map.com/mapembed.php"><a href="http://www.staubers.de" class="map-data">http://www.staubers.de</a></iframe></div><script type="text/javascript">function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(40.7057022,-74.0140581),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.7057022, -74.0140581)});infowindow = new google.maps.InfoWindow({content:"<span class='gmap'><b>STRATACORE</b></span><span class='gmap'>25 Broadway</span><span class='gmap'> New York</span>" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, "load", init_map);</script>
		</div>
		<div class="col-sm-6 text-center">
			<h2>&#xf0e0;Contact Us</h2>
			(212) 243-1008<br>
			<a href="mailto:contact@stratacore.net">contact@stratacore.net</a>
			<p>
				25 Broadway<br>
				5th Floor<br>
				New York, NY, 10025
			</p>
		</div>
	</div>
</div>