
<html>
  <head>
    <title>Recette de cuisine PHP</title>
  </head>
  <body><div>
 <h3><?php echo $title; ?></h3>
<div>Temps de préparation : <?php echo $preparationTime ; ?> minutes</div>
<div>
  Difficulté : <?php 
    for ($starNumber = 0 ; $starNumber < $difficulty; $starNumber++){
      echo '*' ;
    }
   ?>
</div>
</div>
<!--
    Dans cet exercice , nous allons réaliser un site permettant d'afficher des recettes de cuisines .Pour cela , nous allons successivement voir le site sous tois angles 
    différents : celui du développeur front-end, celui du back-end, et celui de l'integrateur. Puis nous allons découper notre code de manière à ce que les trois puissent travailler ensemble.
-->   
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>