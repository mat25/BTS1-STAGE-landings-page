<?php
function get_formulaire(){

    $nom = null;
    $prenom = null;
    $email = null;
    $telephone = null;
    $publicite = null;
    $erreurs = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["btn"] == "popup") {
            ?>
            <script>
                AfficherIfPost();
            </script>
            <?php

            if (empty(trim($_POST["nom"]))) {
                $erreurs["nom"] = "Le nom est obligatoire";
            } else {
                $nom = trim($_POST["nom"]);
            }

            if (empty(trim($_POST["prenom"]))) {
                $erreurs["prenom"] = "Le prenom est obligatoire";
            } else {
                $prenom = trim($_POST["prenom"]);
            }

            if (empty(trim($_POST["email"]))) {
                $erreurs["email"] = "L'email est obligatoire";
            } elseif (!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
                $erreurs["email"] = "L'email n'est pas valide";
            } else {
                $email = trim($_POST["email"]);
            }

            if (empty(trim($_POST["telephone"]))) {
                $erreurs["telephone"] = "Le telephone est obligatoire";
            } else {
                $telephone = trim($_POST["telephone"]);
            }

            if (!array_key_exists("publicite",$_POST)) {
                $erreurs["publicite"] = "Cette case est obligatoire";
            } else {
                $publicite = "checked";
            }

            if (empty($erreurs)) {
                header("Location: index.php");
            }
        }
    }
    ?>

    <div class="formulaire-de-contact">
        <form action="" method="post" id="test">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" value="<?= $nom ?>">
            <?php
            if (isset($erreurs["nom"])) { ?>
                <p class="erreur-validation"><?= $erreurs["nom"] ?></p>
            <?php } ?>


            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" value="<?= $prenom ?>">
            <?php
            if (isset($erreurs["prenom"])) { ?>
                <p class="erreur-validation"><?= $erreurs["prenom"] ?></p>
            <?php } ?>

            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?= $email ?>">
            <?php
            if (isset($erreurs["email"])) { ?>
                <p class="erreur-validation"><?= $erreurs["email"] ?></p>
            <?php } ?>

            <label for="telephone">Téléphone</label>
            <input type="text" name="telephone" id="telephone" value="<?= $telephone ?>">
            <?php
            if (isset($erreurs["telephone"])) { ?>
                <p class="erreur-validation"><?= $erreurs["telephone"] ?></p>
            <?php } ?>

            <div class="checkbox">
                <input type="checkbox" name="publicite" id="publicite" <?= $publicite?>>
                <label for="publicite">J’accepte de recevoir par email des informations de la part de Signature Promotion et de ses partenaires.</label>
            </div>
            <?php
            if (isset($erreurs["publicite"])) { ?>
                <p class="erreur-validation"><?= $erreurs["publicite"] ?></p>
            <?php } ?>


            <div class="container_btn">
                <button class="btn" name="btn" value="popup" >Envoyer</button>
            </div>
        </form>
    </div>

<?php } ?>