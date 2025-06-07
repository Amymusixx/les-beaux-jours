<?php get_header(); ?>
<body class='single-projet'>
<main>

<!-- sous header de la page single projet -->
<section class='header__projet'>
  <div class='header__projet__content'>
    <h2>Nos projets</h2>
    <a href="<?php bloginfo('url'); ?>/projets">< Retour aux projets</a>
</div>
</section>

<!-- section qui charge les différentes parties du projet en dynamique via le CPT -->
<section class='content__projet'>
  <!-- section de description du projet -->
  <div class='description__projet__container'>
    <div class='featured__image'>
    <img src="<?php the_field('image');?>">
  </div>
    <div class='description__projet__content'>
      <div class='description__projet__content__box'>
        <p id='nom__client'><?php the_field('nom')?></p>
        <h1><?php the_title()?></h1>
        <div class='txt__box'>
          <p class='subtitle'>Où ?</p>
          <p><?php the_field('ou')?></p>
        </div>
        <div class='txt__box'>
          <p class='subtitle'>Quand ?</p>
          <p><?php the_field('quand')?></p>
        </div>
        <div class='txt__box'>
          <p class='subtitle'>Pourquoi ?</p>
          <p><?php the_field('pourquoi')?></p>
        </div>
        <div class='txt__box'>
          <p class='subtitle'>Avec qui ?</p>
          <p><?php the_field('avec_qui')?></p>
        </div>
      </div>
      <div class='term__box'>
         <p><?php echo strip_tags(get_the_term_list($post->ID, 'thematique')); ?></p>
      </div>
    </div>
</div>

<!-- section des actions du projet (3 boxes) -->
<article class='action__projet'>
    <h2>Ce que nous avons fait</h2>
    <div class='action__box__container'>
    <div class='action__box'>
      <?php if ( have_rows( 'action_1' ) ) : ?>
	    <?php while ( have_rows( 'action_1' ) ) : the_row(); ?>
		  <?php if ( get_sub_field( 'image_1' ) ) : ?>
			  <img src="<?php the_sub_field( 'image_1' ); ?>" />
		  <?php endif ?>
		    <h3><?php the_sub_field( 'titre_1' ); ?></h3>
		    <p><?php the_sub_field( 'description_1' ); ?></p>
	    <?php endwhile; ?>
      <?php endif; ?>
    </div>
        <div class='action__box'>
      <?php if ( have_rows( 'action_2' ) ) : ?>
	    <?php while ( have_rows( 'action_2' ) ) : the_row(); ?>
		  <?php if ( get_sub_field( 'image_2' ) ) : ?>
			  <img src="<?php the_sub_field( 'image_2' ); ?>" />
		  <?php endif ?>
		    <h3><?php the_sub_field( 'titre_2' ); ?></h3>
		    <p><?php the_sub_field( 'description_2' ); ?></p>
	    <?php endwhile; ?>
      <?php endif; ?>
    </div>
        <div class='action__box'>
      <?php if ( have_rows( 'action_3' ) ) : ?>
	    <?php while ( have_rows( 'action_3' ) ) : the_row(); ?>
		  <?php if ( get_sub_field( 'image_3' ) ) : ?>
			  <img src="<?php the_sub_field( 'image_3' ); ?>" />
		  <?php endif ?>
		    <h3><?php the_sub_field( 'titre_3' ); ?></h3>
		    <p><?php the_sub_field( 'description_3' ); ?></p>
	    <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

    <?php $tout_au_long = get_field('tout_au_long', get_the_ID() );
    if( !empty($tout_au_long) || !empty($tout_au_long) || !empty($tout_au_long) ): ?>

            <div class='tout__au__long'>
              <h4>Et tout au long</h4>
              <p><?php the_field('tout_au_long'); ?></p>
            </div>
          <?php else: ?>
 <?php endif; ?>
</article>

<!-- section des résultats du projet -->
<article class='section__resultat'>
  <div class='resultat__container'>
    <div class='resultat__container__list'>
      <h2 class='title__arrow'>Ce que ça a produit</h2>
      <?php the_field('resultats');?>
    </div>
    <?php if ( get_field( 'download_file' ) ) : ?>
      <a id='button__download__file' target='blank' href="<?php the_field('download_file');?>"><button class='download__file__button'>Télécharger le rapport</button></a>
    <?php endif; ?>
  </div>

  <div class='carousel__container'>
  <!-- Slider main container -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
    <?php $galleries = get_field('carousel_projet');
    foreach($galleries as $gallery){?>
    <div class='swiper-slide'>
      <img src="<?php echo $gallery['metadata']['full']['file_url'];?>"/>
    </div>
  <?php }?>
  </div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev swiper-button-disabled"></div>
  <div class="swiper-button-next"></div>

</div>

  <p class='caption'><?php the_field('legende');?></p>
  </div>
</article>


<!-- section du témoignage du projet -->
<article class='section__temoignage'>
<?php include ('templates/temoignage-template.php');?>
</article>

</section>
<!-- fin de la section chargeant le contenu dynamique -->


<button class="back-to-top" type="button-single"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z"/></svg></button>
</main>

<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.6.1/dist/simpleParallax.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    once: true,
  });
</script>
</body>
<?php get_footer(); ?>