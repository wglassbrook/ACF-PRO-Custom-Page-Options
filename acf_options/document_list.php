<?php /*

	ACF Document List Element Template

*/ ?>

<?php
	$eClass= get_sub_field('element_class');
	$uniqueID = 'eID-'.get_sub_field('unique_id');
?>

<section class="p-element doclist-element <?php echo $eClass; ?>" id="<?php echo $uniqueID; ?>">

	<div class="container">

		<?php if (have_rows('documents')):?>

			<div class="row">
				<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
					<?php while (have_rows('documents')): the_row();?>
						<?php
							$doc_id = get_sub_field('document_file');
							$doc_url = wp_get_attachment_url( $doc_id );
						?>
						<div class="document-row well">
							<a href="<?php echo $doc_url; ?>" title="<?php the_sub_field('document_title');?>">
								<h3 class="document_title"><?php the_sub_field('document_title');?></h3>
							</a>
							<div class="clearfix"></div>
							<?php if(get_sub_field('document_description')){?>
								<div class="document_description"><?php the_sub_field('document_description');?></div>
							<?php }; ?>
						</div>
					<?php endwhile; ?>
				</div>
			</div>

		<?php endif; ?>

		<div class="clearfix"></div>

	</div>

</section>