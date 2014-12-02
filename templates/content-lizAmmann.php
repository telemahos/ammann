<?php the_content(); ?>
<?php

if(get_field('portrait'))
{
	echo '<img src="' . get_field('portrait') . '" >';
}

?>

<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>