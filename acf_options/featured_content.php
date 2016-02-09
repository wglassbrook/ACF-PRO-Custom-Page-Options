<?php /*

	ACF Featured Content Element Template

*/ ?>

<?php
	$eClass = get_sub_field('element_class');
	$pTitle = get_sub_field('title');
	$subTitle = get_sub_field('sub_title');
	$cWidth = get_sub_field('condense_width');
	$uniqueID = 'eID-'.get_sub_field('unique_id');
	$imageID = get_sub_field('image');
	$imageSize = get_sub_field('image_size');
	$cols = '';
	if($imageID){
		$cols=9;
	}else{
		$cols=12;
	};
	$image = wp_get_attachment_image_src( $imageID, $imageSize );
	$imageLoc = get_sub_field('image_location');
	$push = '';
	$pull = '';
	if($imageLoc === 'right'){
		$push = 'col-sm-push-9';
		$pull = 'col-sm-pull-3';
	};
	$content = get_sub_field('content');
	$readmoreBol = get_sub_field('read_more');
	$readmoreURL = get_sub_field('read_more_url');
	$readmoreText = get_sub_field('read_more_text');
?>

<section class="p-element featured-content clearfix <?php echo $eClass; ?>" id="<?php echo $uniqueID; ?>">
	<div class="container">
		<div class="row">
			<?php if($cWidth){?>
				<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
					<div class="row">
			<?php }; ?>

					<?php if($imageID) { ?>
						<div class="col-sm-3 <?php echo $push; ?> col-xs-12 f-image">
							<img src="<?php echo $image[0]; ?>" />
						</div>
					<?php }; ?>
					<div class="col-sm-<?php echo $cols; ?> <?php echo $pull; ?>">
						<?php if ($pTitle){?>
							<h3 class="p-title"><?php echo $pTitle; ?></h3>
						<?php }; ?>
						<?php if($subTitle){?>
							<h4 class="sub-title"><?php echo $subTitle; ?></h4>
						<?php }; ?>
						<?php echo $content; ?>
						<?php if($readmoreBol){?>
							<div class="readmore">
								<a class="btn btn-default btn-sm" href="<?php echo $readmoreURL; ?>"><?php echo $readmoreText; ?>&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>
							</div>
						<?php } ?>

			<?php if($cWidth){?>
					</div>
				</div>
			<?php }; ?>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</section>
