<?php /*

	ACF Title Element Template

*/ ?>

<?php
	$eClass = get_sub_field('element_class');
	$uniqueID = 'eID-'.get_sub_field('unique_id');
	$pTitle = get_sub_field('title');
?>

<section class="p-element title_element clearfix <?php echo $eClass; ?>" id="<?php echo $uniqueID; ?>">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
			
				<?php if( $pTitle ) { ?><h2 class="p-title content-title"><?php echo $pTitle; ?></h2><?php }; ?>

			</div>
		</div>
	</div>
</section>