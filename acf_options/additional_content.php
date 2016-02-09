<?php /*

	ACF Additional Content Element Template

*/ ?>

<?php
	$eClass = get_sub_field('element_class');
	$uniqueID = 'eID-'.get_sub_field('unique_id');
	$cWidth = get_sub_field('content_width');
	$wrap = get_sub_field('content_wrapper');
	$pTitle = get_sub_field('title');
?>

<section class="p-element additional-content clearfix <?php echo $eClass; ?>" id="<?php echo $uniqueID; ?>">

	<div class="container">

		<div class="row">

			<?php if( $pTitle && $wrap == 'nowrap' ) { ?>
				<div class="col-xs-12">
					<h2 class="p-title content-title"><?php echo $pTitle; ?></h2>
				</div>
			<?php }; ?>

			<div class="<?php echo $cWidth; ?>">

				<?php if( $wrap != 'nowrap' ){?>
					<div class="<?php echo $wrap; ?>">
						<div class="panel-heading">
							<?php if( $pTitle ) { ?><h2 class="panel-title"><?php echo $pTitle; ?></h2><?php }; ?>
						</div>
						<div class="panel-body">
							<?php the_sub_field('additional_content') ?>
						</div>
					</div>
				<?php } else { ?>
					<div class="p-content">
						<?php the_sub_field('additional_content') ?>
					</div>
				<?php }; ?>

			</div>

		</div>

	</div>
	<div class="clearfix"></div>

</section>