<?php get_header(); 

	$templates = [
		'intro',
		'services',
		'about',
		'stock',
		'order',
	];
	foreach ($templates as $template) {
		get_template_part('includes/template-parts/' . $template);
	}
	
get_footer();
