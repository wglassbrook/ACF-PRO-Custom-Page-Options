<?php /*

	ACF Blocks Element Template

*/ ?>

<?php
	$eClass = get_sub_field('element_class');
	$uniqueID = 'eID-'.get_sub_field('unique_id');
	$cWidth = get_sub_field('content_width');
	$block_cols = get_sub_field('block_columns');
	$blocks_link = get_sub_field('blocks_link');
	$b_link_txt = get_sub_field('blocks_link_text');
	$b_link_url = get_sub_field('block_link_url');
?>

<section class="p-element blocks-element clearfix <?php echo $eClass; ?>" id="<?php echo $uniqueID; ?>">

	<div class="container">

		<?php if(have_rows('block_items')): ?>

			<div class="row">

				<?php while(have_rows('block_items')): the_row();?>
					<?php
						$block_title = get_sub_field('block_title');
						$block_image_id = get_sub_field('block_image');
						$block_image_url = wp_get_attachment_image_src( $block_image_id, 'block_thumb' );
						$block_description = get_sub_field('block_description');
						$block_link = get_sub_field('block_link');
						if (get_sub_field('block_link_text')){
							$block_link_text = get_sub_field('block_link_text');
						}else{
							$block_link_text = 'Read More';
						};
						$block_link_ext = get_sub_field('external_link');
					?>

					<div class="blocks <?php echo $block_cols; ?>">

						<?php if(get_sub_field("image_as_background")){?>

							<?php if($block_link){ ?>
								<a href="<?php echo $block_link; ?>" title="<?php echo $block_link_text; ?>" <?php echo ($block_link_ext ? "target='_blank'" : "");?>>
							<?php }; ?>

							<div class="image_block" <?php if(get_sub_field("image_as_background")){?>style="background: transparent url('<?php echo $block_image_url[0]; ?>') no-repeat center center; background-size:cover; min-height:160px;" <?php }; ?>>
								<div class="fader"></div>
								<div class="block_content">
									<h3><?php echo $block_title; ?></h3>

									<?php echo $block_description; ?>
								</div>
								<?php if($block_link){ ?><div class="block_link_box"><a href="<?php echo $block_link; ?>" title="<?php echo $block_link_text; ?>" <?php echo ($block_link_ext ? "target='_blank'" : "");?>><?php if($block_link_text){echo $block_link_text;}else{echo 'Read More';}; ?>&nbsp;<i class="fa fa-chevron-right"></i></a></div><?php }; ?>
							</div>

							<?php if($block_link){ ?>
								</a>
							<?php }; ?>

						<?php }else{?>

							<div class="description_block">

								<div class="block_image">
									<?php if(!get_sub_field("image_as_background")){?>
										<?php if($block_link){?><a href="<?php echo $block_link; ?>" title="<?php echo $block_title; ?>" <?php echo ($block_link_ext ? "target='_blank'" : "");?>><?php }; ?>
											<img class="center-block img-responsive" src='<?php echo $block_image_url[0]; ?>' />
										<?php if($block_link){?></a><?php }; ?>
									<?php }; ?>
								</div>
								<?php if($block_link){?><a href="<?php echo $block_link; ?>" title="<?php echo $block_title; ?>" <?php echo ($block_link_ext ? "target='_blank'" : "");?>><?php }; ?>
									<h3><?php echo $block_title; ?></h3>
								<?php if($block_link){?></a><?php }; ?>
								<div class="block_desc">
									<?php echo $block_description; ?>
								</div>

								<?php if($block_link && $block_link_text){?>
								<a class="block_link" href="<?php echo $block_link; ?>" title="<?php echo $block_title; ?>" <?php echo ($block_link_ext ? "target='_blank'" : "");?>>
									<?php echo $block_link_text; ?>
								</a>
								<?php }; ?>

							</div>

						<?php }; ?>

					</div>

				<?php endwhile; ?>

				<div class="clearfix "></div>
			</div>

		<?php endif; ?>

		<?php if($blocks_link){ ?>

			<div class="row">
				<div class="col-xs-12 col-sm-4 col-sm-offset-4">
					<a class="btn btn-default btn-lg btn-block" href="<?php echo $b_link_url; ?>"><?php echo $b_link_txt; ?></a>
				</div>
			</div>

		<?php }; ?>

	</div>

</section>