<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Beaux Jours</title>
    <meta name="description" content="société de design et d'innovations sociales Les Beaux Jours"> 
    
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<?php wp_head() ?>
</head>


<header>
<div class='header'>
<a href="<?php bloginfo('url'); ?>"><img class='header__logo' src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logos/logo.svg'?>"></a>
<nav class="dropdownmenu">
  <ul>
    <li><a id='underline' href='<?php echo get_permalink('234'); ?>'>Ce que nous faisons <svg class='chevron' fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M17 10.5L12.5 15L8 10.5" stroke="#121923" stroke-width="1.2"/>
    </svg></a>
    
      <ul id="submenu">
        <a href='<?php echo get_permalink('236'); ?>'><li>Démarches d’innovation sociale par le design</li></a>
        <a href='<?php echo get_permalink('238'); ?>'><li>Animation d’ateliers d’intelligence collective</li></a>
        <a href='<?php echo get_permalink('240'); ?>'><li>Formation</li></a>
      </ul>
    </li>
    <li><a href="http://localhost:8888/les-beaux-jours/projets/">Nos projets</a></li>
    <li><a href='<?php echo get_permalink('252'); ?>'>Notre agence</a></li>
    <li><a href='<?php echo get_permalink('254'); ?>'>Pour des lendemains qui changent</a></li>
    <li><a href='<?php echo get_permalink('256'); ?>'>Nos ressources</a></li>
    <li><a href='<?php echo get_permalink('258'); ?>'>Nous contacter</a></li>
  </ul>
</nav>

      <div class="menu-button__wrapper">
        <div class="menu-button">
          <span class="menu-button__bar"></span>
          <span class="menu-button__bar"></span>
          <span class="menu-button__bar"></span>
        </div>
      </div>

</div>

<div class="menu-overlay">
        <nav class="dropdownmenu__mobile">
<ul>
    <li><a id="underline-burger" href='<?php echo get_permalink('234'); ?>'>Ce que nous faisons</a>
      <ul class='sub-menu__mobile'>
        <a href='<?php echo get_permalink('236'); ?>'><li>Démarches d’innovation sociale par le design</li></a>
        <a href='<?php echo get_permalink('238'); ?>'><li>Animation d’ateliers d’intelligence collective</li></a>
        <a href='<?php echo get_permalink('240'); ?>'><li>Formation</li></a>
      </ul>
    </li>
    <li><a href="http://localhost:8888/les-beaux-jours/projets/">Nos projets</a></li>
    <li><a href='<?php echo get_permalink('252'); ?>'>Notre agence</a></li>
    <li><a href='<?php echo get_permalink('254'); ?>'>Pour des lendemains qui changent</a></li>
    <li><a href='<?php echo get_permalink('256'); ?>'>Nos ressources</a></li>
    <li><a href='<?php echo get_permalink('258'); ?>'>Nous contacter</a></li>

  </ul>

    <script>
for (var i = 0; i < document.links.length; i++) {
    if (document.links[i].href == document.URL) {
        document.links[i].className = 'menu-active';
    } else {document.links[0].className = 'menu-active';}
}
</script>

        </nav>
      </div>

</header>
    





