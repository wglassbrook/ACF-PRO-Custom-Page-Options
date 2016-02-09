<?php
	$cols = get_field('columns','options');
	$columns_rows = get_sub_field('footer_columns','options');
	$columns_end = count($columns_rows)+1;

	$field = get_sub_field_object('columns','options');
	$value = get_sub_field('columns','options');
	$label = $field['choices'][ $value ];
	$label = sanitize_title($label);
?>

<?php if(have_rows('footer_columns','options')):?>
	<div class="p-element footer_content clearfix clear-bg <?php echo $label; ?>" >
		<?php $x = 0; while(have_rows('footer_columns','options')): the_row();?>
			<?php
				$title = get_sub_field('column_title','options');
				$content = get_sub_field('column_content','options');
				
				if ($x == $columns_end) {
					$columns_last = ' end';
				} else {
					$columns_last = '';
				};
				$x++;
			?>
			<div class="<?php echo $cols; ?> <?php echo $columns_last;?>">

				<?php if($title){
					echo '<h4>' . $title . '</h4>';
				};?>
				<?php if($content){
					echo $content;
				}; ?>

			</div>
		<?php endwhile; ?>
	</div>
<?php endif; ?>