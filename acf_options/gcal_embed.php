<?php

	/*
	 * This file has not been updated for use with Bootstrap 3.x
	 */

	$wrap = get_sub_field('content_wrapper');
	$width = get_sub_field('content_width');
	$pTitle = get_sub_field('title');
	$calSource = get_sub_field('gcal_embed');
	$template_location = '/lib'; // Location within your template folder. Change for your own use. In this example this would equate to http://www.example.com/wp-content/themes/[theme-name]/lib
?>
<div class="p-element additional_content <?php if($elementClass){echo $elementClass;};?>">
	<div class="clearfix">

		<?php if( $wrap != 'nowrap' ){ // Paneled content?>

			<div class="p-content <?php echo $wrap;?> <?php echo $width;?> columns">
				<?php if( $pTitle ) { ?>
					<div class="panel-heading">
						<h2 class="p-title panel-title"><?php echo $pTitle; ?></h2>
					</div>
				<?php }; ?>
				<div class="panel-body">
					<iframe src="<?php echo get_template_directory_uri() . $template_location; ?>/acf_options/g_cal.php?bgcolor=%23f2f2f2&amp;src=<?php echo $calSource; ?>" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
				</div>
			</div>

		<?php } else { // Content sans panel ?>

			<div class="p-content <?php echo $wrap;?> <?php echo $width; ?> columns">
				<?php if( $pTitle ) { ?><h2 class="p-title content-title"><?php echo $pTitle; ?></h2><?php }; ?>
				<div class="p-content">
					<iframe src="<?php echo get_template_directory_uri() . $template_location; ?>/acf_options/g_cal.php?bgcolor=%23f2f2f2&amp;src=<?php echo $calSource; ?>" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
					<div class="clearfix"></div>
				</div>
			</div>

		<?php }; ?>

	</div>
	<div class="clearfix"></div>
</div>
