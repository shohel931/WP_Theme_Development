<?php 
// Theme title
add_theme_support('title-tag'); 

 // Theme Thumbnail Image area
add_theme_support( 'post-thumbnails', array('page', 'post', 'service', 'slider') );
 add_image_size('slider', 1920, 600, true);
 add_image_size('post-thumbnails', 970, 350, true);


 // Exarpt to 40 words
 function sohel_excerpt_more($more){
    	return '<br> <br> <a class="readmore" href="'.get_the_permalink().'"> Read More</a>';
 }
add_filter('excerpt_more', 'sohel_excerpt_more');

function sohel_excerpt_length($length){
	return 40;
}
add_filter('excerpt_length', 'sohel_excerpt_length', 999);


// Pagenave Function
function sohel_pagenave(){
	global $wp_query, $wp_rewrite;
	$pages = '';
	$max = $wp_query->max_num_pages;
	if(!$current = get_query_var('paged')) $current = 1;
	$args['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
	$args['total'] = $max;
	$args['current'] = $current;
	$total = 1;
	$args['prev_text'] = 'Prev';
	$args['next_text'] = 'Next';
	if ($max > 1) echo '</pre>
	<div class="wp_pagenave">';
		if($total == 1 && $max >1 ) $pages .= '<p class="pages">Page ' .$current . '<span> of </span>' . $max . '</p>';
        echo $pages . paginate_links( $args );
				if($max > 1)echo '</div><pre>';
	

}