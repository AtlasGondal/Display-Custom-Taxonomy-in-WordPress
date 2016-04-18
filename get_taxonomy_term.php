
// can be placed in themes functions.php
function display_taxonomy_terms($post_type, $display = false) {
	global $post;
	$term_list = wp_get_post_terms($post->ID, $post_type, array('fields' => 'names'));

	if($display == false) {
		echo $term_list[0];
	}elseif($display == 'return') {
		return  $term_list[0];
	}
}

// will echo the term name
display_taxonomy_terms('TAXONOMY_SLUG');

// returns the term name
display_taxonomy_terms('TAXONOMY_SLUG', 'return');
