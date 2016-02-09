<?php
	$pTitle = get_sub_field('title');
	if(have_rows('holes')):
?>

	<div class="p-element holes <?php if($elementClass){echo $elementClass;};?>">
		<?php if( $pTitle ) { ?><div class="small-12 columns"><h2 class="p-title holes-title"><?php echo $pTitle; ?></h2></div><?php }; ?>
		<div class="row clearfix">
			<div class="p-content small-12 columns">
				<?php
					$x = 0; 
					while(have_rows('holes')): the_row();
					$hole_title = get_sub_field('hole_title');
					$yt_code = get_sub_field('yt_code');
					$hole_description = get_sub_field('hole_description');
					$green_depth = get_sub_field('green_depth');
					$handicap = get_sub_field('handicap');
					$x++;
				?>
				<div class="hole row">
					<div class="small-12 columns"><h3 class="p-title hole-title"><?php echo $hole_title;?></h3></div>
					<div class="medium-6 columns">
						<div class="flex-video hole-video">
							<iframe src="http://www.youtube.com/embed/<?php echo $yt_code;?>?rel=0&wmode=transparent" frameborder="0"></iframe>
						</div>
					</div>
					<div class="medium-6 columns hole-description">
						<?php echo $hole_description;?>
					</div>
					<?php if($green_depth || $handicap){?>
						<div class="small-12 columns text-center clearfix hole-data">
							<strong>
							<?php if($green_depth){?>Green Depth:<?php echo $green_depth;?><?php }; ?>
								<?php if($green_depth && $handicap){?>&nbsp;-&nbsp;<?php }; ?>
							<?php if($handicap){?>Handicap:<?php echo $handicap;?><?php }; ?>
							</strong>
						</div>
					<?php }; ?>
					<div class="clearfix"></div>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>

<?php endif; ?>