<!-- avant d'inclure ce template quelquepart il faut bien definir un tableau $articleToDisplay -->
<?php
include __DIR__."/../utils/utilsDate.php";
?>

<h2 class="right__title"><?php echo $articleToDisplay["title"] ?></h2>
<div class="posts">
  <div class="post post--solo">
    <a href="" class="post__category post__category--color-<?= $articleToDisplay['category'] ?>"><?= $articleToDisplay['category'] ?></a>
    <div class="post__meta">
      <img class="post__author-icon" src="../images/<?= $articleToDisplay['image'] ?>" alt="">
      <strong class="post__author"><?php echo $articleToDisplay["author"] ?></strong>
      <time datetime="<?= $articleToDisplay['dateMachine'] ?>">
        <?= getFormattedDate($articleToDisplay['dateMachine'], 'l j M') ?>
      </time>
    </div>
    <?php echo $articleToDisplay['text'] ?>
  <div>
    <a href="./index.php" class="post__link">back to home</a>
  </div>
  </div>

</div>
