<?php include ('connexion.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>black-white-grey-dark-modern-minimal-modeling-portfolio-website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<?php include ('header.php'); ?>


<!-- Après le contenu du header et avant le footer -->

<div class="game-details">
  <div class="left-column">
    <h2>Les Yeux du Chat</h2>
    <p><strong>Genre:</strong> aventure/puzzle/contemplatif</p>
    <p><strong>Gameplay:</strong> troisième personne (type TPS)</p>
    <p><strong>Univers:</strong> bande dessinée (Moebius + jodo)</p>
    <p><strong>Public cible:</strong> 18/45 ans</p>
    <p><strong>Plateforme:</strong> PC + consoles</p>
    <p><strong>Durée de jeu:</strong> 3h</p>
    <p><strong>Localisation:</strong> 5 langues (FR, ES, DE, UK, IT)</p>
    <p><strong>Outils:</strong> Unreal Engine 5 (moteur de <br> développement)</p>
    <img src="images\monster.png" alt="">
  </div>
  <div class="right-column">
  <h2 class="about-title">Vidéo de gameplay</h2>
  <!-- <a class="video-link" href="images\uk_yeux_M.mp4">Lien Vidéo</a> -->
  <div class="video-embed">
    <video controls>
      <source src="images\uk_yeux_M.mp4" type="video/mp4">
    </video>
  </div>
  <!-- <h3></h3> -->
</div>

</div>




<!-- le centre su body -->

<div class="concept">
<div class="newsletter">
    <h3 class="newsletter-title">S'abonner a la newsletters</h3>

    <form method="post" action="transfert.php">
        <div class="email-input">
            <input type="email" id="email" name="email" placeholder="@">
            <div class="email-addon">@</div>
            <button class="subscribe-button" type="submit">
                <div class="arrow-icon"></div>
            </button>
        </div>
        <div class="accept-newsletters">
            <input type="checkbox" id="accept-checkbox" name="accept">
            <label for="accept-checkbox">J'accepte de recevoir des newsletters</label>
        </div>
    </form>
</div>
  <hr class="trait">
  <h2 class="concept-title">Concept</h2>
  
</div>






<div class="text-image-container">
  <div class="text-column">
    <h2>THE EYES CAT 1</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed accusamus illum harum recusandae odio ipsum necessitatibus vero aperiam quam.
         Vel inventore nihil dolorum beatae at facilis nam odio provident ex voluptas, harum, ducimus possimus voluptate. 
         Veritatis eum, harum repellendus maxime voluptate, quo blanditiis dignissimos impedit voluptatum ea enim magnam rem accusantium nam,
          dolores soluta. Iusto suscipit officiis dicta aliquid, in facilis veritatis eum unde quo optio quidem adipisci consequuntur quae quibusdam. </p>
  </div>
  <div class="image-column">
    <img src="images\ima2.jpg" alt="Image 1">
  </div>
</div>

<div class="text-image-container reversed">
  <div class="image-column">
    <img src="images\ima1.jpg" alt="Image 2">
  </div>
  <div class="text-column">
    <h2>CAT EYES 2</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis dolores dolorem veritatis modi assumenda, enim necessitatibus cupiditate nemo! 
        Voluptatum quae ipsum voluptatibus soluta saepe nderit necessitatibus dignissimos sit aperiam. Nulla cumque recusandae maiores vitae animi rem sequi?
         Voluptatum velit nam accusantium ratione fugit laudantium exercitationem error nostrum ipsa. Iste minima rerum qui quas quod, nemo, doloribus illum,
          adipisci harum hic eos quaerat sunt itaque repellendus. Facilis incidunt magni aperiam et consequuntur? Accusantium corrupti necessitatibus, ducimus cum 
          laudantium assumenda, temporibus illo dolore sunt voluptatum consequatur sequi distinctio molestias architecto tempore culpa? Expedita necessitatibus</p>
  </div>
</div>







<!-- new section -->








<!-- Après la div 'Concept' -->

<div class="subscribe-section">
    <h3 class="subscribe-title">S'abonner à la Newsletter</h3>
    <form method="post" action="transfert.php">
        <div class="email-input-large">
            <input type="email" id="email-subscribe" name="email" placeholder="votre.email@example.com">
            <div class="email-addon">@</div>
        </div>
        <div class="accept-newsletters">
            <input type="checkbox" id="accept-checkbox" name="accept">
            <label for="accept-checkbox">J'accepte de recevoir des newsletters</label>
        </div>
        <button type="submit">S'abonner</button>
    </form>
</div>











<!-- Bouton pour retourner en haut de la page -->
<button id="scrollTopButton" class="scroll-top-button">Haut de page</button>



<?php include ('footer.php'); ?>
<script src="script.js"></script>
</body>
</html>