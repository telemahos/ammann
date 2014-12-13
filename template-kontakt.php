<?php
/*
Template Name: Kontakt Page Template
*/
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <section id="kontakt_page">
  	<?php get_template_part('templates/content', 'kontakt'); ?>
  </section>
  
<?php endwhile; ?>
