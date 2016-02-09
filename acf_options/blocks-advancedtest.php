<?php

/*

	ACF Blocks Element Template

*/

$eClass = get_sub_field('element_class');
$uniqueID = 'eID-'.get_sub_field('unique_id');
$cWidth = get_sub_field('content_width');
$block_cols = get_sub_field('block_columns');
$blocks_link = get_sub_field('blocks_link');
$b_link_txt = get_sub_field('blocks_link_text');
$b_link_url = get_sub_field('block_link_url');

$content .= "<section class='p-element blocks-element clearfix" . $eClass . "' id='" . $uniqueID . "'>";

	$content .= "<div class='container'>";

		if(have_rows('block_items')):

			$content .= "<div class='row'>";

			$content .= "<div class='" . $cWidth . "'>";

				while(have_rows('block_items')): the_row();
					$block_title = get_sub_field('block_title');
					$block_image_id = get_sub_field('block_image');
					$block_image_url = wp_get_attachment_image_src( $block_image_id, 'service-thumb' );
					$block_description = get_sub_field('block_description');
					$block_link = get_sub_field('block_link');
					$block_link_text = get_sub_field('block_link_text');
					$block_link_ext = get_sub_field('external_link');
					if($block_link_ext){
						$block_link_ext = "_blank";
					}else{
						$block_link_ext = "";
					};

					$content .= "<div class='blocks " . $block_cols . "'>";

						if(get_sub_field("image_as_background")){

							if($block_link){
								$content .= "<a href='" . $block_link . "' title='" . $block_link_text . "' " . $block_link_ext . ">";
							};

							if(get_sub_field('image_as_background')){
								$img_style = "style='background: transparent url('" . $block_image_url[0] . "') no-repeat center center; background-size:cover; min-height:160px;";
							};

							$content .= "<div class='image_block'" . $img_style . " >";
								$content .= "<div class='fader'></div>";
								$content .= "<div class='block_content'>";
									$content .= "<h3>" . $block_title . "</h3>";

									$content .= $block_description;
								$content .= "</div>";

								if($block_link){
									$content .= "<div class='block_link_box'><a href='" . $block_link . "' title='" . $block_link_text . "' target='" . $block_link_ext . "' >" . $block_link_text . " <i class='fa fa-chevron-right'></i></a></div>";
								};
							$content .= "</div>";

							if($block_link){
								$content .= "</a>";
							};

						}else{

							$content .= "<div class='description_block'>";

								if($block_link){
									$content .= "<a href='" . $block_link . "' title='" . $block_title . "' " . $block_link_ext ? 'target=\"_blank\"' : '' . ">";
								};
									$content .= "<h3>" . $block_title . "</h3>";
								if($block_link){
									$content .= "</a>";
								};

								$content .= "<div class='block_image'>";
									if(!get_sub_field("image_as_background")){
										if($block_link){
											$content .= "<a href='" . $block_link . "' title='" . $block_title ."' " .  $block_link_ext ? 'target=\"_blank\"' : '' . ">";
										};
											$content .= "<img class='center-block img-responsive' src='" . $block_image_url[0] . "' />";
										if($block_link){
											$content .= "</a>";
										};
									};
								$content .= "</div>";

								$content .= "<div class='block_desc'>";
									$content .= $block_description;
								$content .= "</div>";

								if($block_link && $block_link_text){
									$content .= "<a href='" . $block_link . "' title='" . $block_title . " " . $block_link_ext ? 'target=\"_blank\"' : '' . ">";
									$content .= "<button class='btn btn-sm btn-primary btn-block'>";
									if($block_link_text){
										$content .= $block_link_text;
									}else{
										$content .= "Read More";
									};
									$content .= "&nbsp;<i class='fa fa-chevron-right'></i></button>";
									$content .= "</a>";
								};

							$content .= "</div>";

						};

					$content .= "</div>";

				endwhile;

				$content .= "<div class='clearfix'></div>";
			$content .= "</div>";

			$content .= "</div>";

		endif;

		if($blocks_link){

			$content .= "<div class='row'>";
				$content .= "<div class='col-xs-12 col-sm-4 col-sm-offset-4'>";
					$content .= "<a class='btn btn-default btn-lg btn-block' href='" . $b_link_url . "'>" . $b_link_txt . "</a>";
				$content .= "</div>";
			$content .= "</div>";

		};

	$content .= "</div>";

$content .= "</section>";

echo $content;