<?php if ( ( ! post_password_required() ) && ( have_rows( 'p_elements' ) ) ){
	$elementID = 0;
	$template_location = '/lib'; // Location within your template folder. Change for your own use. In this example this would equate to http://www.example.com/wp-content/themes/[theme-name]/lib
	while (have_rows('p_elements')): the_row();
		$elementID++;
		$layout = get_row_layout();
		switch ($layout) {
			case "additional_content":
				echo "<a id='page_section_" . $elementID . "'></a>";
				get_template_part($template_location . "/acf_options/additional_content");
				break;
			case "blocks":
				echo "<a id='page_section_" . $elementID . "'></a>";
				get_template_part($template_location . "/acf_options/blocks");
				break;
			case "buttons":
				echo "<a id='page_section_" . $elementID . "'></a>";
				get_template_part($template_location . "/acf_options/buttons");
				break;
			case "columned_content":
				echo "<a id='page_section_" . $elementID . "'></a>";
				get_template_part($template_location . "/acf_options/content_columns");
				break;
			case "custom_content":
				echo "<a id='page_section_" . $elementID . "'></a>";
				get_template_part($template_location . "/acf_options/custom_content");
				break;
			case "document_list":
				echo "<a id='page_section_" . $elementID . "'></a>";
				get_template_part($template_location . "/acf_options/document_list");
				break;
			case "faq_list":
				echo "<a id='page_section_" . $elementID . "'></a>";
				get_template_part($template_location . "/acf_options/faq_list");
				break;
			case "featured_content":
				echo "<a id='page_section_" . $elementID . "'></a>";
				get_template_part($template_location . "/acf_options/featured_content");
				break;
			case "gallery":
				echo "<a id='page_section_" . $elementID . "'></a>";
				get_template_part($template_location . "/acf_options/gallery");
				break;
			case "map":
				echo "<a id='page_section_" . $elementID . "'></a>";
				get_template_part($template_location . "/acf_options/map");
				break;
			case "post_list":
				echo "<a id='page_section_" . $elementID . "'></a>";
				get_template_part($template_location . "/acf_options/post_list");
				break;
			case "slider":
				echo "<a id='page_section_" . $elementID . "'></a>";
				get_template_part($template_location . "/acf_options/slider");
				break;
			case "title_element":
				echo "<a id='page_section_" . $elementID . "'></a>";
				get_template_part($template_location . "/acf_options/title_element");
				break;
			case "elements_wrapper":
				echo "<a id='page_section_" . $elementID . "'></a>";
				get_template_part($template_location . "/acf_options/elements_wrapper");
				break;
			case "close_wrapper": // "Hey! You're out of order" Yeah, I made a judgement call.
				echo "<a id='page_section_" . $elementID . "'></a>";
				get_template_part($template_location . "/acf_options/close_wrapper");
				break;
		};
	endwhile;
}; ?>