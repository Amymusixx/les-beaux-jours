<?php get_header(); 
global $wp_query;
?>
<body class='home-page'>

<main>

<!-- section hero header avec un carousel slider de 5-6 projets à la une -->
<section class='carousel__slider'>
  <div class="swiper header-carousel-swiper">
    <div class="swiper-wrapper">
      <?php $loop = new WP_Query( array( 'post_type' => 'projet') ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="swiper-slide">
        <img class='carousel__image' src="<?php the_field('image');?>">
        <div class='slide__content'>
        <div class='carousel__header__logo'>
          <img id='logo__carousel' src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logos/logo_white.svg'?>">
          <h2 class='baseline'>Pour des lendemains qui changent</h2>
        </div>
        <div class='content__carousel'>
          <h3><?php the_title() ?></h3>
          <a id='carousel__button' href='<?php echo get_permalink()?>'><button class='orange__button'>Découvrir le projet</button></a>
        </div>
      </div>
    </div>
  <?php endwhile; wp_reset_query(); ?>
  </div>
   <div class="swiper-pagination"></div>
  </div>
</section>

<!-- section de présentation -->
<section class='presentation'>
  <h2>Nous croyons en une société dans laquelle chacun se sent légitime de participer et d’agir.</h2>
  <p>Que cela touche à des projets du quotidien, des services ou des politiques publiques : chacun doit pouvoir faire valoir sa voix.
Au travers de solutions innovantes, l’agence Les Beaux Jours souhaite contribuer à améliorer le quotidien et la vie des personnes
impliquées dans leurs démarches.</p>
<img class='home__presentation__soleil' src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/soleil.svg"?>'/>
</section>


<!-- section présentant les méthodologies de travail ainsi qu'une boucle affichant 3 projets en aléatoire -->
<section class='methodologie'>
  <h3>Pour bâtir ensemble des solutions nouvelles, nous proposons :</h3>
  <article class='offre__container'>
    <?php include ('templates/methodologie.php');?>
  </article>
</section>

<section class='projet__une'>
  <h3 id='une__titre'>Quelques exemples de projets concrets</h3>
   <div class='projet__box__container'>
      <?php $loop = new WP_Query( array( 
        'post_type' => 'projet', 
        'posts_per_page' => 3,
        'orderby' => 'rand',
        ) ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <?php include ('templates/projet-template.php');?>
      <?php endwhile; wp_reset_query(); ?>
    </div>
    <a id='home__button' href="<?php bloginfo('url'); ?>/projets"><button class='orange__button'>Découvrir plus de projets</button></a>
</section>


<!-- section avec un slider présentant différents témoignages affichés grâce à une boucle sur la taxonomie -->
<section class='temoignages__loop'>
  <h3>Nous innovons ensemble</h3>
    <?php
	    $query = new WP_Term_Query([
		    'taxonomy' => 'temoignage',
		    'hide_empty' => false,
	    ]);
    ?>

    <div class='swiper temoignage__slider__container'>
      <div class='swiper-wrapper'>
      <?php foreach ($query->terms as $term) {?>
        <div class='swiper-slide temoignage__container'>
          <div class='temoignage__img__box'>
	          <img src="<?php echo $term->$image = get_field('photo', $term); ?>">
          </div>
        <div class='temoignage__content__box'>
	        <h6>"<?php echo $term->$citation = get_field('citation', $term ); ?>"</h6>
          <p><span><?php echo $term->$nom = get_field('nom_prenom', $term ); ?>, </span><?php echo $term->$role = get_field('role', $term ); ?></p>
        </div>
      </div>
    <?php } ?>
    </div>

  <div class="swiper-button-prev" id='temoignage__arrow__left'></div>
  <div class="swiper-button-next" id='temoignage__arrow__right'></div>
  
  </div> 
</section>

<!-- section pour des lendemains qui changent -->
 <section class='lendemains__section'>
  <img class='lendemains__soleil' src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/soleil.svg"?>'/>
  <div class='lendemains__container'>
        <div class='lendemains__content'>
          <h3>Pour des lendemains qui changent</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim.</p>
          <a id='lendemains__button' href='<?php echo get_permalink('254'); ?>'><button class='orange__button'>En savoir plus</button></a>
        </div>
        <div class='lendemains__video__box'>
          <div class='video__player'>
          <iframe src="https://www.youtube.com/embed/-d2ZkwasghA" title="RED CLOUD • Black Sunlight [OFFICIAL VIDEO]" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
          </div>
  </div>
</section>

<!-- section de formumaire de contact -->
<section class='contact__form'>
  <div class='form__container'>
    <?php echo do_shortcode('[contact-form-7 id="6d905b8" title="Formulaire de contact"]');?>
  </div>
</section>



<button class="back-to-top" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z"/></svg></button>

</main>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.6.1/dist/simpleParallax.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    once: true,
  });
</script>

</html>

</body>
<?php get_footer(); 
global $wp_query;
?>