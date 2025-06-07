<?php 

add_action('wp_ajax_ccformationfilter', 'cc_formation_filter_function'); 
add_action('wp_ajax_nopriv_ccformationfilter', 'cc_formation_filter_function');
 


function cc_formation_filter_function(){

	if( isset( $_POST['all_categ'] ) )
    	$terms = get_terms( array( 'taxonomy' => 'thematique' ) );
            $args['tax_query'] = array(
                array(
                    
                    'taxonomy' => 'thematique',
                    'field' => 'term_id',
                    'terms' => $terms,
                )
            );


	$args["post_type"] = 'projet';
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'thematique',
				'field' => 'term_id',
				'terms' => $_POST['category_avis_filters'],
			)
		);
 
	$query = new WP_Query($args);
	if( $query->have_posts() ) :
 		ob_start(); 
 		while( $query->have_posts() ): $query->the_post();
 	
			$termsArray = get_the_terms($post->ID, "thematique");  
			 $termsString =""; 
			 foreach ( $termsArray as $term ) { 
			 $termsString .= $term->slug;  
			 }
			 ?>
 			<div class="<?php echo $termsString;?> box__width">
				<article  id="post-<?php the_ID(); ?>" <?php post_class('related-formation-post');?>>
					<?php include ('templates/projet-template.php');?>
				</article>
			 </div> <!-- end item -->
			<?php
		endwhile;
 		$posts_html = ob_get_contents(); 
   		ob_end_clean(); 
	else:
	endif;
 	echo json_encode( array(
		'posts' => json_encode( $query->query_vars ),
		'max_page' => $query->max_num_pages,
		'found_posts' => $query->found_posts,
		'content' => $posts_html
	) );
	die();
    
}

add_action('wp_ajax_ccaccfilter', 'cc_acc_filter_function'); 
add_action('wp_ajax_nopriv_ccaccfilter', 'cc_acc_filter_function');

function cc_acc_filter_function(){

	if( isset( $_POST['all_niveau'] ) )
    	$terms = get_terms( array( 'taxonomy' => 'accompagnement' ) );
            $args['tax_query'] = array(
                array(
                    
                    'taxonomy' => 'accompagnement',
                    'field' => 'term_id',
                    'terms' => $terms,
                )
            );


	$args["post_type"] = 'projet';
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'accompagnement',
				'field' => 'term_id',
				'terms' => $_POST['niveau_avis_filters'],
			)
		);
 
	$query = new WP_Query($args);
	if( $query->have_posts() ) :
 		ob_start(); 
 		while( $query->have_posts() ): $query->the_post();
 	
			$termsArray = get_the_terms($post->ID, "accompagnement");  
			 $termsString =""; 
			 foreach ( $termsArray as $term ) { 
			 $termsString .= $term->slug;  
			 }
			 ?>
 			<div class="<?php echo $termsString;?> box__width">
				<article  id="post-<?php the_ID(); ?>" <?php post_class('related-formation-post');?>>
					<?php include ('templates/projet-template.php');?>
				</article>
			 </div> <!-- end item -->
			<?php
		endwhile;
 		$posts_html = ob_get_contents(); 
   		ob_end_clean(); 
	else:
	endif;
 	echo json_encode( array(
		'posts' => json_encode( $query->query_vars ),
		'max_page' => $query->max_num_pages,
		'found_posts' => $query->found_posts,
		'content' => $posts_html
	) );
	die();
    
}