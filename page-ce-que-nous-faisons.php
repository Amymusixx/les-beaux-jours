<?php get_header(); 
global $wp_query;
?>

<body>
<main>

<section class='methodologies__header'>
  <h1>Ce que nous faisons</h1>
  <h2>Pour bâtir ensemble des solutions nouvelles, nous proposons :</h2>

</section>

<section class='methodologies__content'>

  <article class='offre__container'>
    <?php include ('templates/methodologie.php');?>
  </article>

  <article class='nos__outils'>
    <div class='nos__outils__title'>
      <h2>Nos outils</h2>
      <p>Nous nous appuyons sur une méthode inspirée des sciences humaines et sociales et du design de service qui permet de faire émerger des innovations en mettant l’usager, ses besoins et ses aspirations au cœur de la démarche.</p>
    </div>
    <div class="outils__box">
      <div class='background__box'></div>
      <div class='content__box'>
        <h3>Le design</h3>
        <p> Le design est une approche globale mobilisant des méthodes créatives pour concevoir des solutions adaptées aux besoins et aux usages des utilisateurs qu’ils soient citoyens, habitants, agents de la fonction publique, salariés, etc.</p>
      </div>
    </div>
    <div id='reverse' class="outils__box">
      <div class='background__box'></div>
      <div class='content__box'>
        <h3>Les sciences sociales</h3>
        <p>Les outils qualitatifs issus des sciences sociales (entretien, groupe de discussion, immersion, etc.) permettent de comprendre finement les besoins et les usages d’une population.</p>
      </div>
    </div>
    <div class="outils__box">
      <div class='background__box'></div>
      <div class='content__box'>
        <h3>L’intelligence collective </h3>
        <p> L’ensemble des outils de l’intelligence collective (brainstorming, ateliers créatifs, facilitation graphique, etc.) permettent de libérer le potentiel créatif et constructif de chacun dans le but d’élaborer des solutions collectives.</p>
      </div>
    </div>
  </article>
</section>

  <article class='focus'>
  <img class='line' src='<?php echo get_stylesheet_directory_uri() . "/assets/images/icons/line.svg"?>'/>
    <h2>Focus sur la démarche de design</h2>
    <p>Pour co-construire des services inclusifs et des solutions de territoire, nous animons une démarche inspirée du “design thinking” qui s’appuie sur quatre étapes :</p>
    <div class='focus__container'>
      <div class='focus__item'>
        <h4>L'immersion</h4>
        <div class='circle'></div>
        <p>Observer les besoins et usages des parties prenantes, recueillir les envies et s’imprégner de l’histoire du territoire ou de l’organisation et identifier les dynamiques de coopération existantes.</p>
      </div>
            <div class='focus__item'>
        <h4>La co-création</h4>
        <div class='circle'></div>
        <p>Penser et générer des idées de solutions avec les parties prenantes du projet.</p>
      </div>
            <div class='focus__item'>
        <h4>Le prototypage</h4>
        <div class='circle'></div>
        <p>Rendre concrets les concepts imaginés lors de la co-création.</p>
      </div>
            <div class='focus__item'>
        <h4>Le test</h4>
        <div class='circle'></div>
        <p>Tester avec les parties prenantes les solutions imaginées pour vérifier leur pertinence et les ajuster pour les rendre opérationnelles.</p>
      </div>
    </div>
  </article>




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