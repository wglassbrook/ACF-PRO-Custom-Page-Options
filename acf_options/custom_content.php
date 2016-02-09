<?php /*

	ACF Additional Content Element Template
	
*/ ?>

<?php
	$eClass = get_sub_field('element_class');
	$uniqueID = 'eID-'.get_sub_field('unique_id');
?>

<section class="p-element custom_content clearfix <?php echo $eClass; ?>" id="<?php echo $uniqueID; ?>">

	<div class="container">

		<div class="row">

			<div class="items-col news-col col-sm-6">
				<h3 class="custom_title">Public Forums</h3>

				<?php
					$news_args = array(
						'category_name' => 'news',
						'post_status' => 'publish',
						'posts_per_page' => 2,
						'order' => 'DESC',
					);
				?>

				<?php
					$oldest = date('U', strtotime('-30 days'));
					//echo $newest . '- ';
					//echo $oldest;
					$forum_args = array(
						'post_type' => array( 'event' ),
						'tax_query' => array(                     //(array) - use taxonomy parameters (available with Version 3.1).
						  array(
						    'taxonomy' => 'event-type',                //(string) - Taxonomy.
						    'field' => 'slug',                    //(string) - Select taxonomy term by ('id' or 'slug')
						    'terms' => array( 'public-forum' ),    //(int/string/array) - Taxonomy term(s).
						    //'include_children' => true,           //(bool) - Whether or not to include children for hierarchical taxonomies. Defaults to true.
						    'operator' => 'IN'                    //(string) - Operator to test. Possible values are 'IN', 'NOT IN', 'AND'.
						  )
						),
						'post_status' => 'publish',
						'posts_per_page' => 2,

						'meta_key' => 'end_time',
						'meta_compare' =>'>=',
						'meta_value'=>$oldest,

						'orderby' => 'meta_value_num',
						'order' => 'DESC',
					);
				?>

				<?php $forums_query = new WP_Query ($forum_args);
					$x = 0; while ( $forums_query->have_posts()) : $forums_query->the_post();
						$s = array(' am', ' AM', ' pm', ' PM');
						$r = array(' a.m.', ' A.M.', ' p.m.', ' P.M.');
						$startTime = get_field('start_time');
						$startDate = gmdate("F j, Y, g:i a", $startTime);
						$startMonth = gmdate("F", $startTime);
						$startDay = gmdate("j", $startTime);
						$startYear = gmdate("Y", $startTime);
						$startClock = gmdate("g:i a", $startTime);
						//$startTime = str_replace($s, $r, $startTime);
						$endTime = get_field('end_time');
						$endDate = gmdate("F j, Y, g:i a", $endTime);
						if ( has_post_thumbnail() ) {
							$col_class = 'col-xs-8';
							$excerpt_length = 25;
						}else{
							$col_class='col-xs-12';
							$excerpt_length = 55;
						};
						$x++;
						//if ($x == $events_num) { $event_last = ' end'; } else { $event_last = ''; };
						//$endTime = str_replace($s, $r, $endTime);
				?>
						<div class="custom_item row">
							<?php if ( has_post_thumbnail() ) {?>
								<div class="custom_item_image col-xs-4">
									<a href="<?php the_permalink();?>">
										<?php the_post_thumbnail('block_thumb'); ?>
									</a>
								</div>
							<?php }; ?>

							<div class="custom_item_content <?php echo $col_class; ?>">
								<time class="custom_item_time">
									<?php echo $startMonth; ?> <?php echo $startDay; ?>, <?php echo $startYear; ?> <?php echo $startClock;?>
								</time>

								<a href="<?php the_permalink(); ?>">
									<h3 class="custom_item_title"><?php the_title(); ?></h3>
								</a>
								
								<p><?php Roots\Sage\Utils\excerpt($excerpt_length);?></p>
							</div>
						</div>
					<?php
					endwhile;
					wp_reset_query();
					?>

				<a class="custom_more" href="/event-type/public-forum/">ALL PUBLIC FORUMS <span class="glyphicon glyphicon-menu-right"></span></a>
			</div>

			<div class="items-col events-col col-sm-6">
				<h3 class="custom_title">Conferences</h3>

				<?php
					$conf_args = array(
						'post_type' => array( 'event' ),
						'tax_query' => array(                     //(array) - use taxonomy parameters (available with Version 3.1).
						  array(
						    'taxonomy' => 'event-type',                //(string) - Taxonomy.
						    'field' => 'slug',                    //(string) - Select taxonomy term by ('id' or 'slug')
						    'terms' => array( 'conference' ),    //(int/string/array) - Taxonomy term(s).
						    //'include_children' => true,           //(bool) - Whether or not to include children for hierarchical taxonomies. Defaults to true.
						    'operator' => 'IN'                    //(string) - Operator to test. Possible values are 'IN', 'NOT IN', 'AND'.
						  )
						),
						'post_status' => 'publish',
						'posts_per_page' => 2,
						'meta_key' => 'start_time',
						'meta_compare' =>'<=',
						'meta_value'=>date('U'),
						'meta_key' => 'end_time',
						'meta_compare' =>'>=',
						'meta_value'=>date('U'),
						'orderby' => 'meta_value_num',
						'order' => 'ASC',
					);

				?>

				<?php $conf_query = new WP_Query ($conf_args);
					$x = 0; while ( $conf_query->have_posts()) : $conf_query->the_post();
						$s = array(' am', ' AM', ' pm', ' PM');
						$r = array(' a.m.', ' A.M.', ' p.m.', ' P.M.');
						$startTime = get_field('start_time');
						$startDate = gmdate("F j, Y, g:i a", $startTime);
						$startMonth = gmdate("F", $startTime);
						$startDay = gmdate("j", $startTime);
						$startYear = gmdate("Y", $startTime);
						$startClock = gmdate("g:i a", $startTime);
						//$startTime = str_replace($s, $r, $startTime);
						$endTime = get_field('end_time');
						$endDate = gmdate("F j, Y, g:i a", $endTime);
						if ( has_post_thumbnail() ) {
							$col_class = 'col-xs-8';
							$excerpt_length = 25;
						}else{
							$col_class='col-xs-12';
							$excerpt_length = 55;
						};
						$x++;
						//if ($x == $events_num) { $event_last = ' end'; } else { $event_last = ''; };
						//$endTime = str_replace($s, $r, $endTime);
				?>

					<div class="custom_item row">

						<?php if ( has_post_thumbnail() ) {?>
							<div class="custom_item_image col-xs-4">
								<a href="<?php the_permalink();?>">
									<?php the_post_thumbnail('block_thumb'); ?>
								</a>
							</div>
						<?php }; ?>

						<div class="custom_item_content <?php echo $col_class; ?>">
							<time class="custom_item_time">
								<?php echo $startMonth; ?> <?php echo $startDay; ?>, <?php echo $startYear; ?> <?php echo $startClock;?>
							</time>
							<a href="<?php the_permalink(); ?>">
								<h3 class="custom_item_title"><?php the_title(); ?></h3>
							</a>
							<p><?php Roots\Sage\Utils\excerpt($excerpt_length);?></p>
						</div>
					</div>

				<?php
					endwhile;
					wp_reset_query();
				?>

				<a class="custom_more" href="/event-type/conference/">ALL CONFERENCES <span class="glyphicon glyphicon-menu-right"></span></a>
			</div>

		</div>

	</div>
	<div class="clearfix"></div>

</section>