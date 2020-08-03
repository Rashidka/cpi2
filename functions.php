<?php
register_nav_menus(
	array(
		'head_menu' => 'Шапка сайта',
		'footer_menu' => 'Подвал'
	)
);

function cpi2_get_top_term( $taxonomy, $post_id = 0 ) {
	if( isset($post_id->ID) ) $post_id = $post_id->ID;
	if( ! $post_id )          $post_id = get_the_ID();

	$terms = get_the_terms( $post_id, $taxonomy );

	if( ! $terms || is_wp_error($terms) ) return $terms;

	// только первый
	$term = array_shift( $terms );

	// найдем ТОП
	$parent_id = $term->parent;
	while( $parent_id ){
		$term = get_term_by( 'id', $parent_id, $term->taxonomy );
		$parent_id = $term->parent;
	}

	return $term;
}

function cpi2_true_custom_background_support(){
	add_theme_support( 'custom-background' );
}
 
add_action('after_setup_theme', 'cpi2_true_custom_background_support');

function cpi2_css() {
 	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/css/style.css' );
    wp_enqueue_style( '960_16_col', get_stylesheet_directory_uri() . '/css/960_16_col.css' );
    wp_enqueue_style( 'graphic', get_stylesheet_directory_uri() . '/css/graphic.css' );
    wp_enqueue_style( 'new', get_stylesheet_directory_uri() . '/css/new.css');
}
 
add_action( 'wp_enqueue_scripts', 'cpi2_css' );

function cpi2_setup()
{
    load_theme_textdomain('cpi2');
	add_theme_support('custom-logo',array('height' => 80, 'width' => 480, 'flex-height' => true));
    add_theme_support('title-tag');
    add_theme_support( 'post-formats', array( 'quote', 'gallery' ) );
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme','cpi2_setup');


add_image_size( 'cpi2_category', 120, 90, true );
add_image_size('cpi2_grand', 220, 165, true);
add_image_size('cpi2_single', 400, 300, true);



add_filter('excerpt_more', function($more) {
	return '...';
});

add_action('admin_bar_init', function(){
	remove_action('wp_head', '_admin_bar_bump_cb'); // html margin bumps
});

function wp_corenavi() {
  global $wp_query;
  $total = isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1;
  $a['total'] = $total;
  $a['mid_size'] = 3; // сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 1; // сколько ссылок показывать в начале и в конце
  $a['prev_text'] = '&laquo;'; // текст ссылки "Предыдущая страница"
  $a['next_text'] = '&raquo;'; // текст ссылки "Следующая страница"

  if ( $total > 1 ) echo '<div class="pagination">';
  echo paginate_links( $a );
  if ( $total > 1 ) echo '</div>';
}


?>