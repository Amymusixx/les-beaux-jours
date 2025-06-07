<?php get_header(); ?>

<body>
<main>

<section class='archive__header'>

<h1>Nos projets</h1>

    <div class='filter__container'>
	    <form action="#" method="POST" id="formation_filters">
   
            <div class=''>
            <p class='filter__title'><em>Filtrer par thématique :</em></p>
            <div class='filter__wrapper'>
			<p class='filters__items'><a href="" id="clear"><input type="hidden" id="all_categ" class="avis_filter" name="category_avis_filters"><label for="all_categ">Tous les projets</label></a></p>		
				<?php if( $terms = get_terms( array( 'taxonomy' => 'thematique' ) ) ) :
						foreach( $terms as $term ) :
							echo '<p class="filters__items"><input type="radio" id="' . $term->term_id . '" value="' . $term->term_id . '" name="category_avis_filters" class="avis_filters"/><label class="filter__label" for="' . $term->term_id. '">' . $term->name . '</label></p>';
						endforeach;
					endif;
					?>
            </div>
            </div>
					<input type="hidden" name="action" value="ccformationfilter" />
		</form>

        <form action="#" method="POST" id="acc_filters">
                     <div class=''>
            <p class='filter__title'><em>Filtrer par accompagnement :</em></p>
            <div class='filter__wrapper'>
			<p class='filters__items'><a href="" id=""><input type="hidden" id="all_niveau" class="avis_filter" name="niveau_avis_filters"><label for="all_niveau">Tous les projets</label></a></p>		
				<?php if( $terms = get_terms( array( 'taxonomy' => 'accompagnement' ) ) ) :
						foreach( $terms as $term ) :
							echo '<p class="filters__items"><input type="radio" id="' . $term->term_id . '" value="' . $term->term_id . '" name="niveau_avis_filters" class="avis_filters"/><label class="filter__label" for="' . $term->term_id. '">' . $term->name . '</label></p>';
						endforeach;
					endif;
					?>
            <div>
            </div>
            	<input type="hidden" name="action" value="ccaccfilter" />
                </form>
    </div>
    

</section>

<section class='archives__content'>

		   <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args=array(
			'post_type' =>'projet');
			$query = new WP_Query( $args );  ?>
			<?php if ( $query->have_posts() ) : ?>

		    <div id="cc_formation_wrap" class='projet__box__container'>
			    <?php while ( $query->have_posts() ) : $query->the_post(); 
                    $taxonomies = array('thematique','accompagnement');
					$termsArray = wp_get_object_terms($post->ID, $taxonomies, array( 'orderby' => 'term_order' ) );  					$termsString = ""; 
					foreach ( $termsArray as $term ) { 
					$termsString .= $term->slug.' '; 
					}
					?> 
					<div class="<?php echo $termsString;?> box__width">
					<article id="post-<?php the_ID(); ?>" <?php post_class('related-formation-post');?>>
                    <?php include ('templates/projet-template.php');?>
					</article>
				 </div>

		    	<?php endwhile;  
		    	?>
		    </div> <!-- end isotope-list -->
		
			<?php	
			else :
			include('templates/projet-template.php');
			endif;	
			?>

<?php  // les variables qui vont servir l'ajax ?>

</section>
</main>


<script>




	var posts_myajax = '<?php echo serialize( $query->query_vars ) ?>',
    current_page_myajax = 1,
    max_page_myajax = <?php echo $query->max_num_pages ?>
    
</script>
<script src="<?php bloginfo('template_url')?>/assets/js/filtres.js"></script>

</body>

<?php get_footer();?>