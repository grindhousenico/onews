<?php
// on précise en créant une variable $page que c'est la page contact
// dans le template si $page existe et vaut contact l'image sera differente
// on peut aussi aussi definir le titre et dans le template si le titre existe il sera affiché
$cssMofifier = 'left--contact';
$pageTitle = "Contactez nous";
include 'inc/left.tpl.php';
?>

  <h2 class="right__title">Nous contacter</h2>
  <div class="posts">
    <div class="post post--solo">
      <p class="single">

        <?php
        // si y'a des elements dan sle tableau $_POST c'est que le formulaire a été soumi
        // donc on peut afficher un message
        if(!empty($_POST)) {

          // attention ce n'est pas parce que le tableau contient des choses que les elements y sont tous si la clé firstname existe dans $_POST
          // on pourrait verifier que la clé prenom existe dans le tableau avant de l'afficher
          if (isset($_POST['firstname'])) {
            echo "merci d'avoir envoyé un message ".$_POST['firstname'];
          }
          else {
            echo "Veuillez remplir le prénom !!";
          }
        }
        ?>

        <form action="" method="post" class="contact__form">

          <div class="form__section">
            <div class="form__row">
              <span class="form__label">Je suis</span>
              <div class="form__radio">
                  <input type="radio" id="private" name="identity" value="private" title="Cochez nc. si vous ne souhaitez pas fournir cette information.">
                  <label for="private" title="Cochez nc. si vous ne souhaitez pas fournir cette information.">nc.</label>
                  /
                  <input type="radio" id="female" name="identity" value="female">
                  <label for="female">une femme</label>
                  /
                  <input type="radio" id="male" name="identity" value="male">
                  <label for="male">un homme</label>
              </div>
            </div>
            <div class="form__row">
              <label class="form__label" for="firstname">Mon prénom est</label>
              <input type="text" class="form__input" name="firstname" id="firstname" placeholder="Prénom">
            </div>
            <div class="form__row">
                <label class="form__label" for="lastname">Et mon nom</label>
                <input type="text" class="form__input" name="lastname" id="lastname" placeholder="Nom">
            </div>
            <div class="form__row">
              <label class="form__label" for="source">J'ai connu ce site par</label>
              <select name="source" id="source" class="form__input">
                  <option value="" selected>choisir</option>
                  <option value="facebook">Facebook</option>
                  <option value="twitter">Twitter</option>
                  <option value="google">Google</option>
                  <option value="friend">Bouche à oreilles</option>
                  <option value="news">JT de 13h de Jean-Pierre Pernault</option>
                  <option value="other">Autre</option>
              </select>
            </div>
          </div>

          <div class="form__section">
            <h3 class="form__section__title">Message</h3>
            <div class="form__row">
              <label class="form__label" for="email">Répondez-moi via</label>
              <input type="email" class="form__input" name="email" id="email" placeholder="Adresse email" required>
            </div>
            <div class="form__row">
              <label class="form__label" for="message">Je voulais vous dire que</label>
              <textarea name="message" class="form__input" id="message" rows="5" cols="37" placeholder="Votre message" required></textarea>
            </div>
            <div class="form__row">
              <label class="form__label" for="file">Et vous montrer ça aussi</label>
              <input type="file" class="form__input--file" name="file" id="file">
            </div>
          </div>

          <div class="form__section">
            <div class="form__row--checkbox">
                <input type="checkbox" name="check[]" value="certif" id="check">
                <label for="check">Je certifie la véracité de ces informations.</label>
            </div>
            <div class="form__row--checkbox">
                <input type="checkbox" name="check[]" value="rgpd" id="rgpd">
                <label for="rgpd">J'accepte qu'Oclock Student News traite les données recueillies via ce formulaire pour pouvoir répondre à mon message. Pour en savoir plus sur la gestion de vos données personnelles et pour exercer vos droits, reportez-vous à la section RGPD de nos <a href="./mentions_legales.php">mentions légales</a>.</label>
            </div>
          </div>

          <button class="form__submit">valider</button>
        </form>
      </p>
      <a href="./index.php" class="post__link">back to home</a>
    </div>
  </div>

<?php
include 'inc/footer.tpl.php';
?>
