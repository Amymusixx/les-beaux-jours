<?php get_header(); 
global $wp_query;
?>

<body>
<main>

<section class='notre__agence'>
  <article class='agence__description'>
    <h1>Notre agence</h1>
    <div class='agence__description__container'>
      <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/photos/image.png"?>'/>
      <div class="agence__textes">
      <p>Les Beaux Jours est une agence spécialisée en innovation sociale, co-fondée en 2017 par <span>Julien Bottriaux</span>, professionnel de l’économie sociale et solidaire et <span>Rémi Bottriaux</span>, designer de service. En 2024, <span>Claire Zambaux</span>, chargée de mission, les a rejoints.</p>
      <p>Au travers de solutions innovantes, l’agence Les Beaux Jours souhaite contribuer à améliorer le quotidien et la vie des personnes impliquées dans leurs démarches.</p>
      </div>
    </div>
  </article>

  <article class='agence__box'>
    <div class='agence__box__container'>
      <div class='agence__box__item'>
        <h3>Notre idéal</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
        <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/photos/image.png"?>'/>
      </div>
      <div class='agence__box__item'>
        <h3>Nos valeurs </h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
        <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/photos/image.png"?>'/>
      </div>
      <div class='agence__box__item'>
        <h3>Notre engagement</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
        <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/photos/image.png"?>'/>
      </div>
    </div>
</article>
</section>

<section class='equipe'>
  <h2>L'équipe</h2>
  <article class='equipe__container'>

  <div id="modal-container-julien">
    <div class="modal">
        <div class='modale__content'>
        <div class='modale__left'>
        <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/photos/Julien.png"?>'/>
        <div class='card__name'>
          <h3>Julien Bottriaux</h3>
          <h5>Consultant en innovation sociale</h5>
        </div>
        <div class='card__socials'>
          <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/linked-in-noir.svg"?>'/>
          <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/instagram-noir.svg"?>'/>
          <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/twitter-noir.svg"?>'/>
        </div>
      </div>
      <div class='modale__right'>
        <p>Le parcours professionnel singulier de Fanny mêle sciences humaines, innovation sociale et participation citoyenne. Une fois son master en sociologie en poche, elle a très vite eu envie d’être actrice de changement(s). De ses débuts dans l’accompagnement de personnes en grande précarité au sein de l’association Soliha (Solidaires pour l’habitat), à son expérience en insertion professionnelle, en passant par une aventure entrepreneuriale autour de la réhabilitation et de l’habiter, Fanny a toujours mis l'humain au centre de ses projets.</p>
        <p class='card__citation'><em>« Chacun doit pouvoir trouver une place dans notre société. Chaque parcours, chaque histoire de vie méritent d’être racontés, entendus, valorisés. »</em></p>
        <p>Curieuse, enthousiaste, animée par une quête de sens, Fanny a aussi contribué, en qualité de cheffe de service innovation sociale – inclusion – égalité, à la transition inclusive de la Ville d’Arras sur des thématiques fortes : le bien-vieillir, l’égalité femmes-hommes, la prévention en santé,…Parmi ses missions à la Ville d’Arras, Fanny a été particulièrement marquée par son travail aux côtés d’Eléonore Laloux, conseillère municipale, déléguée à la transition inclusive et au bonheur, ayant une trisomie 21.</p>
        <p class='card__citation'><em>« Eléonore est inspirante. J’ai été honorée et chanceuse de travailler à ses côtés. »</em></p>
        <p>Portée par de fortes valeurs d’inclusion, celle-ci est également au cœur des réflexions de Fanny.</p>
        <p class='card__citation'><em>« Comment faire pour vivre ensemble dans notre diversité ? »</em></p>
        <p>Fanny porte d’ailleurs, depuis longtemps, la conviction de la richesse des valeurs de diversité et d’altérité.</p>
        <p class='card__citation'><em>« Enfant, j’adorais jouer dehors avec les enfants du quartier. Le fait d’être avec les autres a toujours été important pour moi. »</em></p>
        <p>Cette appétence pour le collectif, elle la cultive aussi en dehors du travail : Fanny est présidente d’une association de flamenco à Roubaix, proposant à la fois cours et spectacles. Attirée depuis toujours par cet art exigeant et complexe, ancré dans les traditions populaires, Fanny trouve également dans le flamenco une façon de se lier aux autres. Fanny rejoint Les Beaux Jours avec une envie forte d’accompagner des projets porteurs de sens et de changement où chacun a sa place, d’agir contre les inégalités et de continuer à explorer l'habiter (habiter sa ville, habiter son logement), vecteur d'émancipation et de lien.</p>     
      </div>
      </div>
       <a class='closeModale-julien'><button id="four" class="button equipe__button">Fermer</button></a>
    </div>
</div>

    <div class='equipe__card'>
      <div class='equipe__card__left'>
        <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/photos/Julien.png"?>'/>
        <div class='card__person'>
          <div class='card__name'>
            <h3>Julien Bottriaux</h3>
            <h5>Consultant en innovation sociale</h5>
          </div>
        <div class='card__socials'>
          <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/linked-in-noir.svg"?>'/>
          <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/instagram-noir.svg"?>'/>
          <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/twitter-noir.svg"?>'/>
        </div>
      </div>
      </div>

      <div class='equipe__card__right'>
        <p>Spécialiste des dynamiques d’innovation sociale et des dispositifs d’écoute, d’inclusion et de co-construction avec des publics précaires, et fort d’une expérience de 20 ans dans l’ESS, Julien aime accompagner des projets qui allient récits individuels et histoires territoriales.</p>
        <p class='card__citation'><em>“Le sens de notre action : développer l’empathie, fédérer autour de l’intérêt général, imaginer des futurs souhaitables !”</em></p>
        <button id="four" class="button-julien equipe__button">Lire plus</button>
      </div>
    </div>


      <div id="modal-container-remi">
    <div class="modal">
        <div class='modale__content'>
        <div class='modale__left'>
        <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/photos/Rémi.png"?>'/>
        <div class='card__name'>
          <h3>Rémi Bottriaux</h3>
          <h5>Designer</h5>
        </div>
        <div class='card__socials'>
          <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/linked-in-noir.svg"?>'/>
          <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/instagram-noir.svg"?>'/>
          <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/twitter-noir.svg"?>'/>
        </div>
      </div>
      <div class='modale__right'>
        <p>Le parcours professionnel singulier de Fanny mêle sciences humaines, innovation sociale et participation citoyenne. Une fois son master en sociologie en poche, elle a très vite eu envie d’être actrice de changement(s). De ses débuts dans l’accompagnement de personnes en grande précarité au sein de l’association Soliha (Solidaires pour l’habitat), à son expérience en insertion professionnelle, en passant par une aventure entrepreneuriale autour de la réhabilitation et de l’habiter, Fanny a toujours mis l'humain au centre de ses projets.</p>
        <p class='card__citation'><em>« Chacun doit pouvoir trouver une place dans notre société. Chaque parcours, chaque histoire de vie méritent d’être racontés, entendus, valorisés. »</em></p>
        <p>Curieuse, enthousiaste, animée par une quête de sens, Fanny a aussi contribué, en qualité de cheffe de service innovation sociale – inclusion – égalité, à la transition inclusive de la Ville d’Arras sur des thématiques fortes : le bien-vieillir, l’égalité femmes-hommes, la prévention en santé,…Parmi ses missions à la Ville d’Arras, Fanny a été particulièrement marquée par son travail aux côtés d’Eléonore Laloux, conseillère municipale, déléguée à la transition inclusive et au bonheur, ayant une trisomie 21.</p>
        <p class='card__citation'><em>« Eléonore est inspirante. J’ai été honorée et chanceuse de travailler à ses côtés. »</em></p>
        <p>Portée par de fortes valeurs d’inclusion, celle-ci est également au cœur des réflexions de Fanny.</p>
        <p class='card__citation'><em>« Comment faire pour vivre ensemble dans notre diversité ? »</em></p>
        <p>Fanny porte d’ailleurs, depuis longtemps, la conviction de la richesse des valeurs de diversité et d’altérité.</p>
        <p class='card__citation'><em>« Enfant, j’adorais jouer dehors avec les enfants du quartier. Le fait d’être avec les autres a toujours été important pour moi. »</em></p>
        <p>Cette appétence pour le collectif, elle la cultive aussi en dehors du travail : Fanny est présidente d’une association de flamenco à Roubaix, proposant à la fois cours et spectacles. Attirée depuis toujours par cet art exigeant et complexe, ancré dans les traditions populaires, Fanny trouve également dans le flamenco une façon de se lier aux autres. Fanny rejoint Les Beaux Jours avec une envie forte d’accompagner des projets porteurs de sens et de changement où chacun a sa place, d’agir contre les inégalités et de continuer à explorer l'habiter (habiter sa ville, habiter son logement), vecteur d'émancipation et de lien.</p>     
      </div>
      </div>
       <a class='closeModale-remi'><button id="four" class="button equipe__button">Fermer</button></a>
    </div>
</div>
    
    <div class='equipe__card'>
      <div class='equipe__card__left'>
        <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/photos/Rémi.png"?>'/>
          <div class='card__person'>
          <div class='card__name'>
            <h3>Rémi Bottriaux</h3>
            <h5>Designer</h5>
          </div>
        <div class='card__socials'>
          <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/linked-in-noir.svg"?>'/>
          <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/instagram-noir.svg"?>'/>
          <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/twitter-noir.svg"?>'/>
        </div>
      </div>

      </div>
      <div class='equipe__card__right'>
        <p>Avec son regard aiguisé de designer, Rémi transforme et matérialise des intuitions et des opportunités d’innovation en solutions à tester. Pour cela, il fait appel à sa créativité, son empathie, sa capacité de synthèse, d’analyse et d’écoute.</p>
        <p class='card__citation'><em>“Le design, ça sert avant tout à améliorer concrètement la vie des gens.”</em></p>
        <button id='four' class='button-remi equipe__button'>Lire plus</button>
      </div>
    </div>

          <div id="modal-container-claire">
    <div class="modal">
        <div class='modale__content'>
        <div class='modale__left'>
        <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/photos/Claire.png"?>'/>
        <div class='card__name'>
          <h3>Claire Zambaux</h3>
          <h5>Chargée de mission</h5>
        </div>
        <div class='card__socials'>
          <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/linked-in-noir.svg"?>'/>
          <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/instagram-noir.svg"?>'/>
          <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/twitter-noir.svg"?>'/>
        </div>
      </div>
      <div class='modale__right'>
        <p>Le parcours professionnel singulier de Fanny mêle sciences humaines, innovation sociale et participation citoyenne. Une fois son master en sociologie en poche, elle a très vite eu envie d’être actrice de changement(s). De ses débuts dans l’accompagnement de personnes en grande précarité au sein de l’association Soliha (Solidaires pour l’habitat), à son expérience en insertion professionnelle, en passant par une aventure entrepreneuriale autour de la réhabilitation et de l’habiter, Fanny a toujours mis l'humain au centre de ses projets.</p>
        <p class='card__citation'><em>« Chacun doit pouvoir trouver une place dans notre société. Chaque parcours, chaque histoire de vie méritent d’être racontés, entendus, valorisés. »</em></p>
        <p>Curieuse, enthousiaste, animée par une quête de sens, Fanny a aussi contribué, en qualité de cheffe de service innovation sociale – inclusion – égalité, à la transition inclusive de la Ville d’Arras sur des thématiques fortes : le bien-vieillir, l’égalité femmes-hommes, la prévention en santé,…Parmi ses missions à la Ville d’Arras, Fanny a été particulièrement marquée par son travail aux côtés d’Eléonore Laloux, conseillère municipale, déléguée à la transition inclusive et au bonheur, ayant une trisomie 21.</p>
        <p class='card__citation'><em>« Eléonore est inspirante. J’ai été honorée et chanceuse de travailler à ses côtés. »</em></p>
        <p>Portée par de fortes valeurs d’inclusion, celle-ci est également au cœur des réflexions de Fanny.</p>
        <p class='card__citation'><em>« Comment faire pour vivre ensemble dans notre diversité ? »</em></p>
        <p>Fanny porte d’ailleurs, depuis longtemps, la conviction de la richesse des valeurs de diversité et d’altérité.</p>
        <p class='card__citation'><em>« Enfant, j’adorais jouer dehors avec les enfants du quartier. Le fait d’être avec les autres a toujours été important pour moi. »</em></p>
        <p>Cette appétence pour le collectif, elle la cultive aussi en dehors du travail : Fanny est présidente d’une association de flamenco à Roubaix, proposant à la fois cours et spectacles. Attirée depuis toujours par cet art exigeant et complexe, ancré dans les traditions populaires, Fanny trouve également dans le flamenco une façon de se lier aux autres. Fanny rejoint Les Beaux Jours avec une envie forte d’accompagner des projets porteurs de sens et de changement où chacun a sa place, d’agir contre les inégalités et de continuer à explorer l'habiter (habiter sa ville, habiter son logement), vecteur d'émancipation et de lien.</p>     
      </div>
      </div>
       <a class='closeModale-claire'><button id="four" class="button equipe__button">Fermer</button></a>
    </div>
</div>

    <div class='equipe__card'>
      <div class='equipe__card__left'>
        <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/photos/Claire.png"?>'/>
        <div class='card__person'>
          <div class='card__name'>
            <h3>Claire Zambaux</h3>
            <h5>Chargée de mission</h5>
          </div>
        <div class='card__socials'>
          <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/linked-in-noir.svg"?>'/>
          <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/instagram-noir.svg"?>'/>
          <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/twitter-noir.svg"?>'/>
        </div>
      </div>

      </div>
      <div class='equipe__card__right'>
        <p>Sensible au changement de regard et à l’accompagnement des publics marginalisés, Claire valorise, s’appuyant sur ses compétences en communication et son expérience en EHPAD, la parole des usagers bénéficiaires des démarches, au travers des récits individuels et collectifs.</p>
        <p class='card__citation'><em>“Que les personnes invisibilisées puissent faire entendre leur voix !”</em></p>
        <button id='four' class='button-claire equipe__button'>Lire plus</button>
      </div>
    </div>

    <div id="modal-container-fanny">
    <div class="modal">
        <div class='modale__content'>
        <div class='modale__left'>
        <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/photos/Fanny.png"?>'/>
        <div class='card__name'>
          <h3>Fanny Pereira</h3>
          <h5>Lorem Ipsum</h5>
        </div>
        <div class='card__socials'>
          <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/linked-in-noir.svg"?>'/>
          <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/instagram-noir.svg"?>'/>
          <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/twitter-noir.svg"?>'/>
        </div>
      </div>
      <div class='modale__right'>
        <p>Le parcours professionnel singulier de Fanny mêle sciences humaines, innovation sociale et participation citoyenne. Une fois son master en sociologie en poche, elle a très vite eu envie d’être actrice de changement(s). De ses débuts dans l’accompagnement de personnes en grande précarité au sein de l’association Soliha (Solidaires pour l’habitat), à son expérience en insertion professionnelle, en passant par une aventure entrepreneuriale autour de la réhabilitation et de l’habiter, Fanny a toujours mis l'humain au centre de ses projets.</p>
        <p class='card__citation'><em>« Chacun doit pouvoir trouver une place dans notre société. Chaque parcours, chaque histoire de vie méritent d’être racontés, entendus, valorisés. »</em></p>
        <p>Curieuse, enthousiaste, animée par une quête de sens, Fanny a aussi contribué, en qualité de cheffe de service innovation sociale – inclusion – égalité, à la transition inclusive de la Ville d’Arras sur des thématiques fortes : le bien-vieillir, l’égalité femmes-hommes, la prévention en santé,…Parmi ses missions à la Ville d’Arras, Fanny a été particulièrement marquée par son travail aux côtés d’Eléonore Laloux, conseillère municipale, déléguée à la transition inclusive et au bonheur, ayant une trisomie 21.</p>
        <p class='card__citation'><em>« Eléonore est inspirante. J’ai été honorée et chanceuse de travailler à ses côtés. »</em></p>
        <p>Portée par de fortes valeurs d’inclusion, celle-ci est également au cœur des réflexions de Fanny.</p>
        <p class='card__citation'><em>« Comment faire pour vivre ensemble dans notre diversité ? »</em></p>
        <p>Fanny porte d’ailleurs, depuis longtemps, la conviction de la richesse des valeurs de diversité et d’altérité.</p>
        <p class='card__citation'><em>« Enfant, j’adorais jouer dehors avec les enfants du quartier. Le fait d’être avec les autres a toujours été important pour moi. »</em></p>
        <p>Cette appétence pour le collectif, elle la cultive aussi en dehors du travail : Fanny est présidente d’une association de flamenco à Roubaix, proposant à la fois cours et spectacles. Attirée depuis toujours par cet art exigeant et complexe, ancré dans les traditions populaires, Fanny trouve également dans le flamenco une façon de se lier aux autres. Fanny rejoint Les Beaux Jours avec une envie forte d’accompagner des projets porteurs de sens et de changement où chacun a sa place, d’agir contre les inégalités et de continuer à explorer l'habiter (habiter sa ville, habiter son logement), vecteur d'émancipation et de lien.</p>     
      </div>
      </div>
       <a class='closeModale-fanny'><button id="four" class="button equipe__button">Fermer</button></a>
    </div>
</div>

    <div class='equipe__card'>
      <div class='equipe__card__left'>
        <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/photos/Fanny.png"?>'/>
        <div class='card__person'>
          <div class='card__name'>
            <h3>Fanny Pereira</h3>
            <h5>Lorem Ipsum</h5>
          </div>
        <div class='card__socials'>
          <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/linked-in-noir.svg"?>'/>
          <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/instagram-noir.svg"?>'/>
          <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/twitter-noir.svg"?>'/>
        </div>
      </div>

      </div>
      <div class='equipe__card__right'>
        <p>Avec son regard aiguisé de designer, Rémi transforme et matérialise des intuitions et des opportunités d’innovation en solutions à tester. Pour cela, il fait appel à sa créativité, son empathie, sa capacité de synthèse, d’analyse et d’écoute.</p>
        <p class='card__citation'><em>“Le design, ça sert avant tout à améliorer concrètement la vie des gens.”</em></p>
        <button id='four' class='button-fanny equipe__button'>Lire plus</button>
      </div>
    </div>

  </article>
</section>


<section class='famille__elargie'>
  <article class='famille__elargie__container'>
    <h2>Notre famille élargie</h2>
    <p>Nous travaillons régulièrement avec une équipe d’experts pour mutualiser des compétences et des expériences : sociologie, design d’espace, facilitation graphique, évaluation, etc.</p>

<div class="famille__swiper">
    <div class="swiper-slide-famille">
      <h3>Itinéraire Bis</h3>
      <h5>Lorem ipsum dolor sit</h5>
    </div>
    <div class="swiper-slide-famille">
      <h3>Itinéraire Bis</h3>
      <h5>Lorem ipsum dolor sit</h5>
    </div>
    <div class="swiper-slide-famille">
      <h3>Itinéraire Bis</h3>
      <h5>Lorem ipsum dolor sit</h5>
    </div>
    <div class="swiper-slide-famille">
      <h3>Itinéraire Bis</h3>
      <h5>Lorem ipsum dolor sit</h5>
    </div>
    <div class="swiper-slide-famille">
      <h3>Itinéraire Bis</h3>
      <h5>Lorem ipsum dolor sit</h5>
    </div>
</div>
  
  </article>
</section>


<section class='notre__modele'>
  <article class='modele__container'>
    <div class='modele__content'>
      <h2>Notre modèle</h2>
      <p>Acteurs de l’économie sociale et solidaire, Les Beaux Jours sont hébergés chez CLARA, coopérative d’activités et d’emploi spécialisée dans la culture, l’ingénierie créative et les métiers artistiques. Cette coopérative permet à près de 150 entrepreneurs de développer leurs activités en collectif et de collaborer sur des projets économiques novateurs.<br><br>
        Faire le choix de coopérer avec les Beaux Jours c’est opter pour un projet d’innovation sociale mis en œuvre par des entrepreneurs engagés, inscrits dans des écosystèmes d’acteurs travaillant autour des questions de participation citoyenne, d’impact social et de transformation des organisations.</p>
    </div>
  <div class='modele__img'>
    <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/Fichier 37.svg"?>'/>
  </div>
  </article>
</section>


<section class='nos__publications'>
  <article class='publications__container'>
  <h2>Nos publications</h2>

  <div class="swiper post-swiper">
    <div class="swiper-wrapper">
      <?php $args = array('post_type' => 'post');
      $post_query = new WP_Query($args);
      if($post_query->have_posts() ) {
      while($post_query->have_posts() ) {
      $post_query->the_post();
      ?>
    
    <div class="swiper-slide post__container">
      <div class='post__slide__img'>
        <img src="<?php the_field('image_article');?>">
      </div>
      <div class='post__slide__content'>
      <div class='post__title'>
      <h2><?php the_title(); ?></h2>
      <h5><?php the_field('sous-titre');?></h5>
      <p><em><?php the_date();?></em></p>
      </div>
      <p><?php the_excerpt();?></p>
      <a href="<?php the_field('lien-externe');?>"><button id="post__slider__button" class='download__file__button'>En savoir plus</button></a>
      </div>
    </div>
    <?php
            }
        }
?>
  </div>
  <div class="swiper-pagination"></div>

  <div class="swiper-button-prev" id='post__arrow__left'></div>
  <div class="swiper-button-next" id='post__arrow__right'></div>

</div>



  </article>
</section>

<section class='nous__rencontrer'>
  <article class='rencontrer__container'>
    <h2>Où nous rencontrer ?</h2>
    <p>L’agence Les Beaux Jours est installée à Paris et à Lille</p>
    <div class='rencontrer__content'>
    <div class='img__box__rencontrer'>
      <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/photos/paris.jpg"?>'/>
      <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/photos/lille.jpg"?>'/>
    </div>
    <div class='rencontrer__adress__box'>
      <p><span>Paris :</span><br>Oasis 21, 2 rue de la Clôture - 75019 Paris</p>
      <p><span>Lille :</span><br>Bazaar St So, 292 rue Camille Guérin – 59000 Lille</p>
    </div>
    </div>
</article>
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