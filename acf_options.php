<?php if ( ! post_password_required() ) { ?>
	<?php if(have_rows('p_elements')){ ?>
		<?php $elementID = 0; ?>
		<?php while (have_rows('p_elements')): the_row();?>
			<?php
				$elementID++;
				$layout = get_row_layout();
				switch ($layout) {
					case "document_list":
						echo "<a id='page_section_" . $elementID . "'></a>";
						get_template_part("/lib/acf_options/document_list");
						break;
					case "post_list":
						echo "<a id='page_section_" . $elementID . "'></a>";
						get_template_part("/lib/acf_options/post_list");
						break;
					case "additional_content":
						echo "<a id='page_section_" . $elementID . "'></a>";
						get_template_part("/lib/acf_options/additional_content");
						break;
					case "columned_content":
						echo "<a id='page_section_" . $elementID . "'></a>";
						get_template_part("/lib/acf_options/content_columns");
						break;
					case "custom_content":
						echo "<a id='page_section_" . $elementID . "'></a>";
						get_template_part("/lib/acf_options/custom_content");
						break;
					case "map":
						echo "<a id='page_section_" . $elementID . "'></a>";
						get_template_part("/lib/acf_options/map");
						break;
					case "faq_list":
						echo "<a id='page_section_" . $elementID . "'></a>";
						get_template_part("/lib/acf_options/faq_list");
						break;
					case "gallery":
						echo "<a id='page_section_" . $elementID . "'></a>";
						get_template_part("/lib/acf_options/gallery");
						break;
					case "blocks":
						echo "<a id='page_section_" . $elementID . "'></a>";
						get_template_part("/lib/acf_options/blocks");
						break;
					case "buttons":
						echo "<a id='page_section_" . $elementID . "'></a>";
						get_template_part("/lib/acf_options/buttons");
						break;
					case "featured_content":
						echo "<a id='page_section_" . $elementID . "'></a>";
						get_template_part("/lib/acf_options/featured_content");
						break;
					case "slider":
						echo "<a id='page_section_" . $elementID . "'></a>";
						get_template_part("/lib/acf_options/slider");
						break;
					case "title_element":
						echo "<a id='page_section_" . $elementID . "'></a>";
						get_template_part("/lib/acf_options/title_element");
						break;
					case "elements_wrapper":
						echo "<a id='page_section_" . $elementID . "'></a>";
						get_template_part("/lib/acf_options/elements_wrapper");
						break;
					case "close_wrapper":
						echo "<a id='page_section_" . $elementID . "'></a>";
						get_template_part("/lib/acf_options/close_wrapper");
						break;
				};
			?>
		<?php endwhile; ?>

	<?php }; ?>
<?php }; ?>