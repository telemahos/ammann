<?php the_content(); ?>


<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="kontakt_message">
			<?php
				if(get_field('kontakt_message'))
				{
					echo '<p>' . get_field('kontakt_message') . '</p>';
				}
			?>	
		</div>

		<!-- START GEO MAP -->
      <?php //the_field('map'); ?>

      <?php
      $location = get_field('map');
      if( ! empty($location) ){
      ?>
      <div id="map" style="width: 100%; height: 250px;"></div>
      <script src='http://maps.googleapis.com/maps/api/js?sensor=false' type='text/javascript'></script>

      <script type="text/javascript">
        //<![CDATA[
        function load() {
        var lat = <?php echo $location['lat']; ?>;
        var lng = <?php echo $location['lng']; ?>;
      // coordinates to latLng
        var latlng = new google.maps.LatLng(lat, lng);
      // map Options
        var myOptions = {
        zoom: 16,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false 
         };
      //draw a map
        var map = new google.maps.Map(document.getElementById("map"), myOptions);
        var marker = new google.maps.Marker({
        position: map.getCenter(),
        map: map
         });
      }
      // call the function
         load();
      //]]>
      </script>
      <?php
      }
      else { }//echo "map not found"; }
      ?> 

      <!-- END GEO MAP -->

	</div>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="instructions">
			<?php
				if(get_field('instructions'))
				{
					echo '<p>' . get_field('instructions') . '</p>';
				}
			?>	
		</div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="address">
			<?php
				if(get_field('address'))
				{
					echo '<p>' . get_field('address') . '</p>';
				}
			?>	
		</div>
	</div>
</div>




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