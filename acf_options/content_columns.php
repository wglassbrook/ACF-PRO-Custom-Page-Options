<?php /*

	ACF Columns Element Template

*/ ?>

<?php
	$eClass = get_sub_field('element_class');
	$uniqueID = 'eID-'.get_sub_field('unique_id');
	$cols = get_sub_field('columns');
	$color_bol = get_sub_field('bol_bg_color');
	$col_bgcolor = get_sub_field('background_color');
	$col_textcolor = get_sub_field('text_color');

	if(get_sub_field('bol_bg_color')){
		$div_ats = 'class="col_content colored-bg" style="background-color:' . $col_bgcolor . '; color:' . $col_textcolor . '!important;"' ;
	}else{
		$div_ats = 'class="col_content clear-bg row"';
	};
?>

<section class="p-element columns-element clearfix <?php echo $eClass; ?>" id="<?php echo $uniqueID; ?>">

	<div class="container">

		<?php if(have_rows('columns_content')):?>

			<div <?php echo $div_ats; ?>>

				<?php while(have_rows('columns_content')): the_row();?>

					<div class="column <?php echo $cols; ?>">

						<?php
							$title = get_sub_field('column_title');
							$content = get_sub_field('column_content');
							$location = get_sub_field('column_map');
							$mapheight = get_sub_field('map_height');;
							$mapID = get_sub_field('unique_id');
						?>

						<?php if($title){ ?>
							<h3 class="p-title col_title"><?php echo $title; ?></h3>
						<?php };?>
						<?php if($content){?>
							<div class="p-content">
								<?php echo $content; ?>
							</div>
						<?php }; ?>

						<?php if(get_sub_field('column_map')){ ?>
							<?php require_once locate_template('/lib/acf_options/gmap.php'); ?>

							<div class="map-element">

								<style>
								.map-element .acf-map#<?php echo $mapID; ?>{
									height:<?php echo $mapheight;?>px;
								}
								</style>

								<div class="column-map acf-map" id="<?php echo $mapID; ?>">
									<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
								</div>
								<div class="clearfix"></div>

							</div>
						<?php }; ?>

					</div>

				<?php endwhile; ?>

				<div class="clearfix"></div>

			</div>

		<?php endif; ?>

	</div>

</section>