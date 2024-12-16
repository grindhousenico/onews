<?php
// cette page ne s'affiche pas correctement si il n'y a pas de numéro d'article valide dans l'URL !!

// --- PARTIE RECUP DATA ---
include 'data/postsData.php';


// --- PARTIE INTELLIGENCE / FORMATTAGE DONNEES ---
// on décide d'ajouter le numéro d'artcile dans un paramètre de l'URL qu'on apelle "article"
// on recupere un numéro d'article dans l'URL donc dans $_GET
// si l'url est comme ça : article.php?article=2
// $numArticle vaudra 2

// avec ?? (opérateur de coalescence null) on specifie que si $_GET['article'] n'existe pas on met 1 par defaut
// si jamais l'url est comme ça : article.php sans le paramètre
$numArticle = $_GET['article'] ?? 1;

// dans le tableau qui contient TOUS les posts on va chercher le post qui correspond au numéro récupéré dans l'URL
// on va verifier avec array_key_exists que le numéro existe bien, si jamais le numéro n'existe pas dans le tableau par exemple si on demande article 55 avec l'url article.php?article=55 on affichera une erreurs
if (array_key_exists($numArticle, $allPosts)) {
  $articleToDisplay = $allPosts[$numArticle];
  
  include 'inc/left.tpl.php';
  include 'inc/article.tpl.php';
  include 'inc/footer.tpl.php';
}
else {
  include 'inc/left.tpl.php';
  include 'inc/404.tpl.php';
  include 'inc/footer.tpl.php';
}

?>