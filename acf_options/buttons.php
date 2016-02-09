<?php /*

	ACF Buttons Element Template

*/ ?>

<?php
	$eClass = get_sub_field('element_class');
	$uniqueID = 'eID-'.get_sub_field('unique_id');
	$button_style = get_sub_field('button_style');
	$button_size = get_sub_field('button_size');
	$cols = get_sub_field('button_columns');
	switch ($cols){
		case 1:
			$cols_outer = "col-md-4 col-md-offset-4";
			$cols_inner = "";
			break;
		case 2:
			$cols_outer = "col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3";
			$cols_inner = "col-sm-6 col-md-6";
			break;
		case 3:
			$cols_outer = "";
			$cols_inner = "col-sm-4 col-md-4";
			break;
		case 4:
			$cols_outer = "";
			$cols_inner = "col-xs-12 col-sm-6 col-md-3";
			break;
		default:
			$cols_outer = "col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3";
			$cols_inner = "col-sm-6 col-md-6";
			break;
	};
?>

<section class="p-element buttons-element clearfix <?php echo $eClass; ?>" id="<?php echo $uniqueID; ?>">
	<div class="container">

		<div class="row">

			<div class="button-wrapper <?php echo $cols_outer; ?>">
				<?php while(have_rows('buttons')): the_row(); ?>
					<div class="button <?php echo $cols_inner; ?>">
						<?php
							$button_text = get_sub_field('button_text');
							$button_url = get_sub_field('button_url');
						?>
						<a href="<?php echo $button_url; ?>"><button class="btn btn-block <?php echo $button_size; ?> <?php echo $button_style; ?>"><?php echo $button_text; ?></button></a>
					</div>
				<?php endwhile; ?>
			</div>

		</div>
		<div class="clearfix"></div>
	</div>
</section>