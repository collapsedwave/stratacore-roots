<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle hidden-xs" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="<?php echo site_url(); ?>/wp-content/themes/stratacore-roots/assets/img/logo.png"></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
      <ul class="pull-right strata-social">
        <li><a href="http://www.linkedin.com/company/3717089" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
        <li><a href="http://www.facebook.com/StrataCoreNYC" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
        <li><a href="http://twitter.com/stratacorenyc" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
      </ul>
    </nav>
  </div>
</header>
