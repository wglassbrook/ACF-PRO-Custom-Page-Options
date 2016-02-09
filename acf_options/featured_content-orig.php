<?php
	$title = get_sub_field('title');
	$uniqueID = get_sub_field('unique_id');
	$imageID = get_sub_field('image');
	$cols = '';
	if($imageID){
		$cols=8;
	}else{
		$cols=12;
	};
	$image = wp_get_attachment_image_src( $imageID, 'medium' );
	$imageLoc = get_sub_field('image_location');
	$push = '';
	$pull = '';
	if($imageLoc === 'right'){
		$push = 'col-sm-push-8';
		$pull = 'col-sm-pull-4';
	};
	$content = get_sub_field('content');
	$readmoreBol = get_sub_field('read_more');
	$readmoreURL = get_sub_field('read_more_url');
	$readmoreText = get_sub_field('read_more_text');
	$backgroundType = get_sub_field('background_type');
	$backgroundImageID = get_sub_field('background_image');
	if($backgroundImageID){
		$backgroundImage = wp_get_attachment_image_src($backgroundImageID, 'large');
	};
	$backgroundColor = get_sub_field('background_color');
	$text_color = get_sub_field('text_color');

	if($backgroundType === 'image'){
?>

<style>
	#<?php echo $uniqueID; ?>{
		background:transparent url('<?php echo $backgroundImage[0]; ?>') no-repeat center center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $backgroundImage[0]; ?>', sizingMethod='scale');
		-ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $backgroundImage[0]; ?>', sizingMethod='scale')";
		color: <?php echo $text_color; ?>;
	}
	.featured-inner{
		background-color:rgba(0,0,0,.65);
	}
</style>

<?php }; ?>

<?php if($backgroundType === 'color'){?>
	<style>
		#<?php echo $uniqueID; ?>{
			background-color:<?php echo $backgroundColor; ?>;
			color: <?php echo $text_color; ?>;
		};
	</style>
<?php };?>

<section class="p-element featured-content clearfix" id="<?php echo $uniqueID; ?>">

	<div class="col-md-12 featured-inner">

		<div class="container">
			<div class="row">
				<?php if($imageID) { ?>
					<div class="col-sm-4 <?php echo $push; ?> col-xs-12 f-image">
						<img src="<?php echo $image[0]; ?>" />
					</div>
				<?php }; ?>
				<div class="col-sm-<?php echo $cols; ?> <?php echo $pull; ?>">
					<h3><?php echo $title; ?></h3>
					<?php echo $content; ?>
					<?php if($readmoreBol){?>
					<div class="readmore">
						<a class="btn btn-default btn-sm" href="<?php echo $readmoreURL; ?>"><?php echo $readmoreText; ?>&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
					<?php } ?>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</section>
