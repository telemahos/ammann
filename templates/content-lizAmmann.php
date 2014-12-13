<?php the_content(); ?>

<div class="row">
	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		<div>
			<?php
				if(get_field('portrait'))
				{
					echo '<img src="' . get_field('portrait') . '" >';
				}
			?>	
		</div>
	</div>
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		<div class="cv">
			<?php
				if(get_field('cv'))
				{
					echo '<p>' . get_field('cv') . '</p>';
				}
			?>	
		</div>
	</div>
</div>

<br><br>

<div class="row">
	<!-- Right Column -->
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<div>
				<?php
					$kundenImage1 = get_field('kundenfoto1');
					if( !empty($kundenImage1) )
					{
						echo '<img src="' . $kundenImage1['url'] . '" >';
					}
				?>	
			</div>
		</div>
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			<div class="kundenStatement">
				<?php
					if(get_field('kundenstatement1'))
					{
						echo '<p>' . get_field('kundenstatement1') . '</p>';
					}
				?>	
			</div>
		</div>
	</div>
	<!-- Left Column -->
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<div>
				<?php
					$kundenImage2 = get_field('kundenfoto2');
					if( !empty($kundenImage2) )
					{
						echo '<img src="' . $kundenImage2['url'] . '" >';
					}
				?>	
			</div>
		</div>
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			<div class="kundenStatement">
				<?php
					if(get_field('kundenstatement2'))
					{
						echo '<p>' . get_field('kundenstatement2') . '</p>';
					}
				?>	
			</div>
		</div>
	</div>
</div>





<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>