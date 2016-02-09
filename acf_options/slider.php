<?php
	$eClass = get_sub_field('element_class');
	$uniqueID = 'eID-'.get_sub_field('unique_id');
	$sliderWidth = get_sub_field('slider_width');
	$sliderTheme = get_sub_field('slider_theme');
	$sliderEffect = get_sub_field('slider_effect');
	$animationSpeed = get_sub_field('animation_speed');
	$pauseDuration = get_sub_field('pause_duration');
	$showThumbnails = get_sub_field('show_thumbnails');
	$showControl = get_sub_field('show_control_navigation');
?>

<section class="slider-wrapper clearfix theme-<?php echo $sliderTheme; ?> <?php echo $eClass; ?>" id="<?php echo $uniqueID; ?>">

<?php if (!$sliderWidth){?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
<?php }; ?>

				<div class="nivoSlider" id="slides<?php echo $uniqueID; ?>">

				<?php while(have_rows('slides')): the_row();
					$slide_title = get_sub_field('slide_title');
					$slide_title_slug = sanitize_title( $slide_title );
					$slide_imageID = get_sub_field('slide_image');
					$slide_link = get_sub_field('slide_link');
					$slide_url = get_sub_field('slide_url');
					$slide_link_text = get_sub_field('slide_link_text');
					if($slide_imageID){
						$slide_image_src = wp_get_attachment_image_src($slide_imageID, 'page_banner');
						$slide_thumb_src = wp_get_attachment_image_src($slide_imageID, 'slide_thumb');
					}; ?>
					<?php if($slide_link){?><a href="<?php echo $slide_url; ?>"><?php }; ?>
					<img src="<?php echo $slide_image_src[0]; ?>" data-thumb="<?php echo $slide_thumb_src[0]; ?>" data-title="<?php echo $slide_title; ?>" title="#<?php echo $slide_title_slug; ?>" >
					<?php if($slide_link){?></a><?php }; ?>

				<?php endwhile; ?>

				</div>

<?php if (!$sliderWidth){?>
			</div>
		</div>
	</div>
<?php }; ?>
	<div class="clearfix"></div>

</section>

<?php while(have_rows('slides')): the_row();
	$slide_title = get_sub_field('slide_title');
	$slide_title_slug = sanitize_title( $slide_title );
	$slide_content = get_sub_field('slide_content');
	$slide_link = get_sub_field('slide_link');
	$slide_url = get_sub_field('slide_url');
	$slide_link_text = get_sub_field('slide_link_text');
?>
	<div id="<?php echo $slide_title_slug; ?>" class="nivo-html-caption">
		<?php if($slide_title){ ?><h3 class="slide-title"><?php echo $slide_title; ?></h3><?php }; ?>
		<?php echo $slide_content; ?>
		<?php if($slide_link){?><a class="slide_link" href="<?php echo $slide_url; ?>"><?php echo $slide_link_text; ?></a><?php }; ?>
	</div>
<?php endwhile; ?>

<script type="text/javascript">
	$(window).load(function() {
	    $('#slides<?php echo $uniqueID; ?>').nivoSlider({
			effect: '<?php echo $sliderEffect; ?>', // Available Options: 'sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft, fold, fade, random, slideInRight, slideInLeft, boxRandom, boxRain, boxRainReverse, boxRainGrow, boxRainGrowReverse. 
			slices: 15, // For slice animations
			boxCols: 8, // For box animations
			boxRows: 4, // For box animations
			animSpeed: <?php echo $animationSpeed; ?>, // Slide transition speed
			pauseTime: <?php echo $pauseDuration; ?>, // How long each slide will show
			startSlide: 0, // Set starting Slide (0 index)
			directionNav: true, // Next & Prev navigation
			controlNav: <?php echo $showControl; ?>, // 1,2,3... navigation
			controlNavThumbs: <?php echo $showThumbnails; ?>, // Use thumbnails for Control Nav
			pauseOnHover: true, // Stop animation while hovering
			manualAdvance: false, // Force manual transitions
			prevText: 'Prev', // Prev directionNav text
			nextText: 'Next', // Next directionNav text
			randomStart: false, // Start on a random slide
			beforeChange: function(){}, // Triggers before a slide transition
			afterChange: function(){}, // Triggers after a slide transition
			slideshowEnd: function(){}, // Triggers after all slides have been shown
			lastSlide: function(){}, // Triggers when last slide is shown
			afterLoad: function(){} // Triggers when slider has loaded
	    });
	});
</script>