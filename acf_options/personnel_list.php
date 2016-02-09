<?php $pTitle = get_sub_field('title'); ?>

<?php if(have_rows('personnel')):?>
	<div class="p-element row personnel-list clearfix">
		<?php if( $pTitle ) { ?><h2 class="p-title personnel-title"><?php echo $pTitle; ?></h2><?php }; ?>
		<?php while(have_rows('personnel')): the_row();
			$name = get_sub_field('name');
			$bio = get_sub_field('bio');
			$email = get_sub_field('email_address');
			$e_txt = get_sub_field('email_text');
			$imgID = get_sub_field('photo');
			$img = wp_get_attachment_image_src( $imgID, 'featured_thumb', FALSE );
			?>
			<div class="bio">
				<h3><?php echo $name; ?></h3>
				<?php if($img[0]){?>
				<div class="bio-image pull-left">
					<img src="<?php echo $img[0]; ?>" alt="<?php echo $name; ?>"/>
				</div>
				<?php }; ?>
				<?php echo $bio; ?>
				<?php if($email){?>
				<a class="email-link" href="<?php echo $email; ?>" ><?php echo $e_txt; ?> <span class="glyphicon glyphicon-chevron-right"></span></a>
				<?php }; ?>
				<div class="clearfix"></div>
			</div>
		<?php endwhile; ?>
	</div>
<?php endif; ?>