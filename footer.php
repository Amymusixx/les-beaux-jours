 <?php wp_footer() ?>
<footer>


<div class='footer'>
    <div class='footer__logo'>
        <img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/logo-baseline.svg"?>'/>
    </div>

    <div class='footer__menu'>
    <ul>
    <li><a href='<?php echo get_permalink('234'); ?>'>Ce que nous faisons</a></li>
    <li><a href="<?php bloginfo('url'); ?>/projets">Nos projets</a></li>
    <li><a href='<?php echo get_permalink('252'); ?>'>Notre agence</a></li>
    <li><a href='<?php echo get_permalink('254'); ?>'>Pour des lendemains qui changent</a></li>
    <li><a href='<?php echo get_permalink('256'); ?>'>Nos ressources</a></li>
    <li><a href='<?php echo get_permalink('258'); ?>'>Nous contacter</a></li>
    <li><a href='#'>Conditions générales d’utilisation</a></li>
    <li><a href='#'>Protection de vos données personnelles</a></li>
    </ul>
    </div>

    <div class='footer__socials'>
    <h4>Retrouvez-nous sur nos réseaux</h4>
    <div class='socials__icons'>
        <a target='blank' href='#'><img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/linked-in-logo.svg"?>'/></a>
        <a target='blank' href='#'><img src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/youtube-logo.svg"?>'/></a>
    </div>
    </div>
</div>

<img class='footer__soleil' src='<?php echo get_stylesheet_directory_uri() . "/assets/images/logos/soleil.svg"?>'/>


</body>
</footer>
</html>