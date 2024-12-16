<?php
include 'inc/left.tpl.php';
// on inclu le tableau allPosts
include 'data/postsData.php';
// on inclu les fonctions utils pour notre calcul de date
include 'utils/utilsDate.php';
?>
  <!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
  <h2 class="right__title">Latest News</h2>
  <div class="posts">
    <?php
    // on boucle sur le tableau des posts $allPosts
    // avec foreach
    // pour chaque ligne du tableau on affiche un bloc <article>
    // foreach($nomDuTableau as $variableQuiVaContenirLaclé => $variableQuiVaContenirLaValue)

    foreach($allPosts as $postNumber => $postData) {
      ?>
      <article class="post">
        <a href="" class="post__category post__category--color-<?= $postData['category'] ?>">
          <?= $postData['category'] ?>
        </a>
        <h3><?= $postData['title'] ?></h3>
        <div class="post__meta">
          <img class="post__author-icon" src="../images/<?= $postData['image'] ?>" alt="">
          <strong class="post__author"><?= $postData['author'] ?></strong>
          <time datetime="<?= $postData['dateMachine'] ?>">
            <?php
            // on veut utiliser notre fonction getFormattedDate
            // il faudrait que cette fonction puisse formatter n'importe quelle date au format machine 
            echo getFormattedDate($postData['dateMachine']);
            ?>
          </time>
        </div>
        <p><?php
        $shortText = substr($postData['text'], 0, 75);
        echo $shortText;
        ?>... </p>
        <!-- on change l'URL , on ajoute un paramètre "article" qui stocke le numéro de l'artcile -->
        <!-- la page article.php va recuperer ce paramètre article et l'utiliser pour savoir quel article afficher -->
        <a href="article.php?article=<?= $postNumber ?>" class="post__link">Continue reading</a>
      </article>
      <?php
    }
    ?>
  </div>

<?php
include 'inc/footer.tpl.php';
?>
