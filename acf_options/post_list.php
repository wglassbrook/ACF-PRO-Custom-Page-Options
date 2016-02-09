<?php 
	$pTitle = get_sub_field('title');
	$post_type = get_sub_field('post_type');
	$post_category = get_sub_field('post_category');
	$post_cat_slug = sanitize_title($post_category);
	$posts_per_page = get_sub_field('posts_per_page');
	$post_order = get_sub_field('post_order');
	$post_orderby = get_sub_field('order_by');
	$post_thumbnail_size = get_sub_field('post_thumbnail');
	$post_meta = get_sub_field('post_meta');
	$post_list_args = array(
		'post_type' => $post_type,
		'category_name' => $post_category,
		'posts_per_page' => $posts_per_page,
		'order' => $post_order,
		'orderby' => $post_orderby
	);
	//print_r($post_list_args);
?>

<?php $post_list_query = new WP_Query( $post_list_args ); ?>

<?php if ( $post_list_query->have_posts() ) : ?>
	<div class="p-element post-list clearfix">
		<?php if( $pTitle ) { ?><h2 class="plist-title"><?php echo $pTitle; ?></h2><?php }; ?>
		<?php while ( $post_list_query->have_posts() ) : $post_list_query->the_post(); ?>
			<article class="post-<?php the_slug(); ?> hentry">
				<?php if ($post_thumbnail_size != 'none'){ ?>
					<?php if ( has_post_thumbnail() ) {?>
						<?php the_post_thumbnail($post_thumbnail_size, array('class' => $post_thumbnail_size . '-post-thumb')); ?>
					<?php }; ?>
				<?php }; ?>
				<header>
					<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
					<?php if($post_meta){ get_template_part('templates/entry-meta'); }; ?>
				</header>
				<?php if (get_sub_field('post_excerpt') == 'excerpt'){
					the_excerpt();
				}else{
					the_content();?>

					<?php if(have_rows('p_elements')):?>

					  	<?php include locate_template('/lib/page-elements.php');?>
	 	
					<?php endif;
				}; ?>
				<div class="clearfix"></div>
			</article>
		<?php endwhile; ?>
		<?php if(get_sub_field('post_archive')){?>
			<?php if(get_post_type_archive_link( $post_type )){ ?>
				<a class="btn btn-success btn-sm"href="<?php echo get_post_type_archive_link( $post_type ); ?>">View Full Archive</a>
			<?php }; ?>
		<?php }; ?>
	</div>
<?php endif; ?>
	 
<?php wp_reset_postdata(); ?>