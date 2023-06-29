<?php
function get_formulaire_main(){

    $nomMain = null;
    $prenomMain = null;
    $emailMain = null;
    $telephoneMain = null;
    $publiciteMain = null;
    $erreursMain = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if ($_POST["btn"] == "main" ) {
            if (empty(trim($_POST["nomMain"]))) {
                $erreursMain["nomMain"] = "Le nom est obligatoire";
            } else {
                $nomMain = trim($_POST["nomMain"]);
            }

            if (empty(trim($_POST["prenomMain"]))) {
                $erreursMain["prenomMain"] = "Le prenom est obligatoire";
            } else {
                $prenomMain = trim($_POST["prenomMain"]);
            }

            if (empty(trim($_POST["emailMain"]))) {
                $erreursMain["emailMain"] = "L'email est obligatoire";
            } elseif (!filter_var(trim($_POST["emailMain"]), FILTER_VALIDATE_EMAIL)) {
                $erreursMain["emailMain"] = "L'email n'est pas valide";
            } else {
                $emailMain = trim($_POST["emailMain"]);
            }

            if (empty(trim($_POST["telephoneMain"]))) {
                $erreursMain["telephoneMain"] = "Le telephone est obligatoire";
            } else {
                $telephoneMain = trim($_POST["telephoneMain"]);
            }

            if (!array_key_exists("publiciteMain",$_POST)) {
                $erreursMain["publiciteMain"] = "Cette case est obligatoire";
            } else {
                $publiciteMain = "checked";
            }

            if (empty($erreursMain)) {
                header("Location: index.php");
            }
        }
    }
    ?>

    <div class="formulaire-de-contact">
        <form action="" method="post" id="test">
            <label for="nomMain">Nom</label>
            <input type="text" name="nomMain" id="nomMain" value="<?= $nomMain ?>">
            <?php
            if (isset($erreursMain["nomMain"])) { ?>
                <p class="erreur-validation"><?= $erreursMain["nomMain"] ?></p>
            <?php } ?>


            <label for="prenomMain">Prénom</label>
            <input type="text" name="prenomMain" id="prenomMain" value="<?= $prenomMain ?>">
            <?php
            if (isset($erreursMain["prenomMain"])) { ?>
                <p class="erreur-validation"><?= $erreursMain["prenomMain"] ?></p>
            <?php } ?>

            <label for="emailMain">Email</label>
            <input type="text" name="emailMain" id="emailMain" value="<?= $emailMain ?>">
            <?php
            if (isset($erreursMain["emailMain"])) { ?>
                <p class="erreur-validation"><?= $erreursMain["emailMain"] ?></p>
            <?php } ?>

            <label for="telephoneMain">Téléphone</label>
            <input type="text" name="telephoneMain" id="telephoneMain" value="<?= $telephoneMain ?>">
            <?php
            if (isset($erreursMain["telephoneMain"])) { ?>
                <p class="erreur-validation"><?= $erreursMain["telephoneMain"] ?></p>
            <?php } ?>

            <div class="checkbox">
                <input type="checkbox" name="publiciteMain" id="publiciteMain" <?= $publiciteMain?>>
                <label for="publiciteMain">J’accepte de recevoir par email des informations de la part de Signature Promotion et de ses partenaires.</label>
            </div>
            <?php
            if (isset($erreursMain["publiciteMain"])) { ?>
                <p class="erreur-validation"><?= $erreursMain["publiciteMain"] ?></p>
            <?php } ?>


            <div class="container_btn">
                <button class="btn" name="btn" value="main">Envoyer</button>
            </div>
        </form>
    </div>

<?php } ?>