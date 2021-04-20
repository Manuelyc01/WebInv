<?php 
add_action( 'wp_enqueue_scripts', 'salient_child_enqueue_styles');
function salient_child_enqueue_styles() {
	$nectar_theme_version = nectar_get_theme_version();
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array('font-awesome'), $nectar_theme_version);
	if ( is_rtl() ) 
		wp_enqueue_style(  'salient-rtl',  get_template_directory_uri(). '/rtl.css', array(), '1', 'screen' );
}
// /** removiendo menus **/
function remove_menus(){
	// $current_user = wp_get_current_user();
	// if ($current_user->roles[0] == 'agencies') {
		//remove_menu_page( 'SalientChildTheme' );
		//remove_menu_page( 'vc-general' );
		//remove_menu_page( 'edit.php?post_type=home_slider' );
	// }
}
add_action( 'admin_init', 'remove_menus' );
// /** removiendo menus **/
// add_action( 'admin_init', 'wpse_136058_remove_menu_pages' );
// function wpse_136058_remove_menu_pages() {
//     remove_menu_page( 'SalientChildTheme' );
//     // remove_menu_page( 'wpcf7' );
// }
// add_action( 'admin_init', 'wpse_136058_debug_admin_menu' );
// function wpse_136058_debug_admin_menu() {
//     echo '<pre>' . print_r( $GLOBALS[ 'menu' ], TRUE) . '</pre>';
// }
// usar el nombre que sale en la opcion 2
//miniaturas
//
function staff_images(){
  // agregando tamaño de imagen personalizado:
	add_image_size( 'img_post', 365, 250, true );
}
add_action('after_setup_theme', 'staff_images');
//CREATE APIS

//CATEGORY
add_action( 'rest_api_init', 'custom_api_get_all_category' );   
function custom_api_get_all_category() {
	register_rest_route( 'wp/v2', '/category', array(
		'methods' => 'GET',
		'callback' => 'custom_api_get_all_category_callback'
	));
}
function custom_api_get_all_category_callback( $request ) {
	$posts_category = array();
	$taxonomy_='category';
	$args = array(
		'taxonomy' => $taxonomy_,
		'hide_empty' => false,
		'parent' => 0
	);
	$termsd = get_terms($args); 
	if($termsd){ 
		foreach ($termsd as $parent_product_cat){		
			
			
			$url_taxo=get_term_link( $parent_product_cat->slug, $parent_product_cat->taxonomy );
			$posts_category[] = array(
				'id' => $parent_product_cat->term_id,
				'name' => $parent_product_cat->name,
				'slug' => $parent_product_cat->slug,
				'url' =>  $url_taxo
			);
		}
	}
	
	return $posts_category;              
}

add_action( 'rest_api_init', 'custom_api_get_all_posts' );   
function custom_api_get_all_posts() {
	register_rest_route( 'wp/v2', '/posts', array(
		'methods' => 'GET',
		'callback' => 'custom_api_get_all_posts_callback'
	));
}
function custom_api_get_all_posts_callback( $request ) {

	if (isset($_GET["category_filter"])) {
		if(isset($_GET["category_filter"]) && $_GET["category_filter"]!=""){
			$posts_data = array();
			$posts_data_category = array();
			$cat_color = array();
			$paged = $request->get_param( 'page' );
			$paged = ( isset( $paged ) || ! ( empty( $paged ) ) ) ? $paged : 1; 
			$args = array(
				'paged' => $paged,
				'post_type' => 'post',
				'posts_per_page' => 6,
				'post_status' => 'publish',
				'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field' => 'slug',
						'terms' => $_GET["category_filter"],
					),
				)

			);
			$the_query = new WP_Query( $args );	
			if ($the_query->have_posts()) {
				while($the_query->have_posts()): $the_query->the_post();

					$get_id = get_the_id();
					$get_the_title = get_the_title();
					$get_permalink = get_the_permalink();
					$get_excerpt =get_the_excerpt();
					$get_content =get_the_content();
					$get_post_thumbnail_url = get_the_post_thumbnail_url();
					$thumbID = get_post_thumbnail_id($get_id);
					$thumbnail_img = wp_get_attachment_image_src($thumbID, 'thumbnail');
					$medium_img = wp_get_attachment_image_src($thumbID, 'medium');
					$medium_large_img = wp_get_attachment_image_src($thumbID, 'medium_large');
					$large_img = wp_get_attachment_image_src($thumbID, 'large');

					$terms_tipo_paquete = get_the_terms($get_id, 'category' );     

					$date= get_the_date('d')."-". get_the_date('m')."-".get_the_date('Y');

					foreach ( $terms_tipo_paquete as $terms ) {  
						$t_id =  $terms->term_id;

						$posts_data_category[]=$terms;

					} 
					$posts_data[] = array(
						'id' => $get_id,
						'title' => $get_the_title,
						'url' => $get_permalink,
						'date' => $date,
						'excerpt' => $get_excerpt,
						'content' => $get_content,
						'image' =>	array('thumbnail'=>$thumbnail_img[0], 'medium'=>$medium_img[0],'medium_large'=>$medium_large_img[0], 'large'=>$large_img[0],'default'=>$get_post_thumbnail_url),
						'category'=> $posts_data_category
					);	
					$posts_data_category = array();

				endwhile; 
				wp_reset_query();
				if($posts_data){
					return $posts_data;               

				}else{
					echo json_encode('Category no encontrado con parametro : '.$_GET['category_filter'])." ";
				}
			}else{
				echo json_encode('Category no encontrado con parametro : '.$_GET['category_filter'])." ";	
			}
		}else{			
			echo json_encode('Category no encontrado con parametro : '.$_GET['category_filter'])." ";	
		}
	} else {

		$posts_data = array();
		$posts_data_category = array();
		$cat_color = array();
		$paged = $request->get_param( 'page' );
		$paged = ( isset( $paged ) || ! ( empty( $paged ) ) ) ? $paged : 1; 
		$args = array(
			'paged' => $paged,
			'post_type' => 'post',
			'posts_per_page' => -1,
			'post_status' => 'publish'
		);
		$the_query = new WP_Query( $args );	
		if ($the_query->have_posts()) {
			while($the_query->have_posts()): $the_query->the_post();
				// $categories = get_the_category();
				$get_id = get_the_id();
				$get_the_title = get_the_title();
				$get_permalink = get_the_permalink();
				$get_excerpt =get_the_excerpt();
				$get_content =get_the_content();
				$get_post_thumbnail_url = get_the_post_thumbnail_url();
				$thumbID = get_post_thumbnail_id($get_id);
				$thumbnail_img = wp_get_attachment_image_src($thumbID, 'thumbnail');
				$medium_img = wp_get_attachment_image_src($thumbID, 'medium');
				$medium_large_img = wp_get_attachment_image_src($thumbID, 'medium_large');
				$large_img = wp_get_attachment_image_src($thumbID, 'large');

				$terms_tipo_paquete = get_the_terms($get_id, 'category' );     

				$date= get_the_date('d')."-". get_the_date('m')."-".get_the_date('Y');

				foreach ( $terms_tipo_paquete as $terms ) {  
					$t_id =  $terms->term_id;

					$posts_data_category[]=$terms;

				} 
				$posts_data[] = array(
					'id' => $get_id,
					'title' => $get_the_title,
					'url' => $get_permalink,
					'date' => $date,
					'excerpt' => $get_excerpt,
					'content' => $get_content,
					'image' =>	array('thumbnail'=>$thumbnail_img[0], 'medium'=>$medium_img[0],'medium_large'=>$medium_large_img[0], 'large'=>$large_img[0],'default'=>$get_post_thumbnail_url),
					'category'=> $posts_data_category
				);	
				$posts_data_category = array();
			endwhile; 
			wp_reset_query();
		}
		return $posts_data;       

	}   

}

?>