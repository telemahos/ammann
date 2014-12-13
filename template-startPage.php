<?php
/*
Template Name: Start Page Template
*/
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <section id="start_page">
  	<?php get_template_part('templates/content', 'startPage'); ?>
  </section>
  
<?php endwhile; ?>
