<?php
	$pTitle = get_sub_field('title');
	$uniqueID = get_sub_field('unique_id');
	$panoID = get_sub_field('pano_id');
	if($panoID){
		$pano_img_src = wp_get_attachment_image_src($panoID, 'full');
	};
?>

<div class="p-element panorama">
	<div class="row clearfix">
		<?php if( $pTitle ) { ?>
			<h2 class="p-title documents-title"><?php echo $pTitle; ?></h2>
		<?php }; ?>
		<div class="p-content small-12 columns">
			<div id="<?php echo $uniqueID; ?>" class="pano">
				<div class="controls">
					<a href="javascript:void(0)" class="left">&laquo;</a>
					<a href="javascript:void(0)" class="right">&raquo;</a>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>

	</div>
	<div class="clearfix"></div>

</div>

<script>
	jQuery(document).ready(function($){
		$("#<?php echo $uniqueID; ?>").pano({
			img: "<?php echo $pano_img_src[0]; ?>"
		});
	});
</script>