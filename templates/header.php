<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a> -->
      <a id="brand" class="navbar-brand text-right" href="<?php echo esc_url(home_url('/')); ?>">
        <span class="brand-liz">LIZ AMMANN</span><br/><span class="brand-grafik">GRAFIK</span><br /><span class="brand-interaction">INTERACTION</span><br /><span class="brand-design">DESIGN</span></a>
    </div>

    <nav class="collapse navbar-collapse pull-right" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>
