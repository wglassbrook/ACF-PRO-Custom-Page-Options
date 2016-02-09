<?php /*

	ACF FAQ Element Template

*/ ?>

<?php
	$eClass= get_sub_field('element_class');
	$uniqueID = 'eID-'.get_sub_field('unique_id');
?>

<section class="p-element faq-list <?php echo $eClass; ?>" id="<?php echo $uniqueID; ?>">

	<div class="container">

		<?php if(have_rows('questions')): ?>

			<div class="row">
				<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">

					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

						<?php $x = 0; while(have_rows('questions')): the_row();
							$question = get_sub_field('question');
							$answer = get_sub_field('answer');
							$x++;
							$itemID = $uniqueID . $x;
						?>

							<div class="panel panel-default faq_item">
							    <div class="panel-heading" role="tab" id="headingOne">
							      <h4 class="panel-title faq_q">
							        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $itemID; ?>" aria-expanded="true" aria-controls="collapseOne">
							          <?php echo $question; ?>
							        </a>
							      </h4>
							    </div>
							    <div id="<?php echo $itemID; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							      <div class="panel-body faq_a">
									<?php echo $answer; ?>
							      </div>
							    </div>
							</div>

						<?php endwhile; ?>

					</div>

				</div>
			</div>

		<?php endif; ?>

	</div>

</section>
