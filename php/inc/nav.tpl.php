<nav>
  <ul class="left__nav">
    <?php
    foreach($linksData as $linkLabel => $fileName) {
      // version php
      // echo '<li class="left__nav-item"><a href="./'.$fileName.'" class="left__nav-link">'.$linkLabel.'</a></li>';

      // version html (on sort du php (on ferme la balise php))
      ?>
      <li class="left__nav-item"><a href="./<?= $fileName ?>" class="left__nav-link"><?= $linkLabel ?></a></li>
      <!-- on re rentre dans php pour fermer l'accolade du foreach -->
      <?php
    }
    ?>
  </ul>
</nav>