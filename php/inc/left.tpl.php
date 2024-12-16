<?php
// attention : si on fait un include depuis un template il faut partir non pas de là ou est le template
// mais de là ou est le fichier qui inclu le template
// on part du dossier php et non pas du dossier inc
include 'data/linksData.php';

// ici on veut savoir sur quelle page on est ! ce template est inclu sur toutes les pages mais on veut afficher une petites différences si c'est la page contact
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle ?? 'oNews' ?></title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="wrapper">
      <!-- emmet: header>h1+p+nav>ul>li*3>a -->
      <header class="left <?php echo $cssMofifier ?? '' ?>">
        <h1 class="left__title"><a href="index.php"> O'Clock Students News </a></h1>
        <div class="left__paragraph">
          <h2 class="left__subtitle"><strong class="left__subtitle-strong">
            <?php
            // on affiche le titre si il existe sinon un titre par defaut
            echo $pageTitle ?? 'Latest news'
            ?>
            </strong> from our students
          </h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
          </p>
        </div>
        <!-- on inclu la nav qui est dans le meme dossier inc que ce template -->
        <?php
        // attention quand on include un fichier depuis un template lui meme inclu dans une page
        // il faut partir pour notre chemin relatif depuis là ou se trouve la page de base
        // c'est la misère si jamais ce template est inclu dans différentes pages qui ne sont pas au meme endroit
        // include "inc/nav.tpl.php";

        // il existe un moyen plus simple pour pouvoir partir de la racine du serveur
        // include "/Promos/Jelly/S02-E04-atelier-oNews-multipages-SoleneOclock/php/inc/nav.tpl.php";

        // il existe un autre moyen pour pouvoir partir du dossier courrant pour nos include
        // var_dump(__DIR__);
        // ici __DIR__ contient : /var/www/html/Promos/Jelly/S02-E04-atelier-oNews-multipages-SoleneOclock/php/inc
        // on apelle ça une constante magique : 
        // https://www.php.net/manual/fr/language.constants.magic.php
        
        include __DIR__."/nav.tpl.php";
        ?>
      </header>
      <main class="right">