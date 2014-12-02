<?php
/*
Template Name: Liz Ammann Page Template
*/
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <section id="lizAmmann_page">
  	<?php get_template_part('templates/content', 'lizAmmann'); ?>
  </section>
  
<?php endwhile; ?>
