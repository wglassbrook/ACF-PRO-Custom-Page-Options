<?php /*

	ACF Map Element Template

*/ ?>

<?php if(get_sub_field('map')){ ?>

	<?php
		require_once locate_template('/lib/acf_options/gmap.php');
		$eClass = get_sub_field('element_class');
		$height = get_sub_field('map_height');
		$uniqueID = 'eID-'.get_sub_field('unique_id');
		$cWidth = get_sub_field('condense_width');
	?>

	<style>
		#<?php echo $uniqueID; ?> .post-map{
			height:<?php echo $height; ?>px!important;
		}
	</style>

	<section class="p-element map-element <?php echo $eClass; ?> clearfix" id="<?php echo $uniqueID; ?>">

			<?php if($cWidth){ ?>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
			<?php }; ?>

			<div class="post-map acf-map">

				<?php if(get_sub_field('locations')){?>

					<?php while ( have_rows('locations') ) : the_row();
						$location = get_sub_field('map_point');?>
						<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
							<strong><?php the_sub_field('title'); ?></strong>
							<p><?php the_sub_field('description'); ?></p>
						</div>
					<?php endwhile; ?>

				<?php }else{ ?>

					<?php $location = get_sub_field('map'); if (!empty($location)){	?>

						<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
							<strong>Address:</strong>
							<p><?php echo $location['address']; ?></p>
						</div>

					<?php }; ?>

				<?php }; ?>

			</div>

		<?php if($cWidth){ ?>
					</div>
				</div>
			</div>
		<?php }; ?>

		<?php if (get_sub_field('get_directions')):?>

			<?php
				$addr = $location['address'];
				$addr = str_replace(" ", "+", $addr);
			?>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<a class="get-directions pull-right" href="http://maps.google.com/maps?f=d&hl=en&geocode=&daddr=<?php echo $addr; ?>" target="_blank">Click here for directions from Google Maps&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
				</div>
			</div>
		<?php endif; ?>

	</section>

<?php }; ?>
