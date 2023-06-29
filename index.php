<?php
require_once "./header.php";
require_once "./footer.php";
require_once "./formulaire.php";
require_once "./formulaire_main.php";
require_once "./section/image-form-background.php";
require_once "./section/bandeau-inscription.php";
require_once "./section/bandeau-visite-virtuel.php";
require_once "./section/image-et-texte.php";
require_once "./section/bandeau-qualite.php";
require_once "./section/avis-client.php";
require_once "./section/popup-formulaire.php";

const IMAGE_EN_PREMIER = 1;
const TEXTE_EN_PREMIER = 2;

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Lien vers les CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/formulaire.css">
    <link rel="stylesheet" href="assets/css/image-et-texte.css">
    <link rel="stylesheet" href="assets/css/avis-client.css">
    <!-- Lien vers les JS -->
    <script src="assets/js/menu-burger.js"></script>
    <script src="assets/js/popup_formulaire.js"></script>

    <title>Swell</title>
</head>
<body>
    <!-- Appel du Header  -->
    <?= get_header()?>



    <div class="main-container">
        <!-- div cacher qui contient le formulaire  -->
        <?= get_popup_formulaire()?>

        <!-- Appel du bandeau visite virtuel -->
        <?= get_bandeau_visite_virtuel() ?>

        <!-- Appel du bandeau avec image et formulaire  -->
        <?= get_image_form_background() ?>

        <!-- Appel du bandeau d'inscription -->
        <?= get_bandeau_inscription()?>

        <!-- Appel des bandeaux de image-et-texte -->
        <?php $tableau_image1 = [
                "titre" => "LACANAU OCÉAN",
                "contenu" => "• A 50km à l’Ouest de Bordeaux <br>
                            • Célèbre pour ses magnifiques plages, bordées par les dunes et l'océan <br>
                            • Très appréciée des surfeurs, elle offre une variété d'activités balnéaires ou tout 
                            simplement d’un cadre naturel ressourçant <br>
                            • Dans une atmosphère conviviale et dynamique grâce à de nombreux commerces <br>
                            • Que vous soyez un passionné de surf, un amateur d'activités balnéaires ou
                            simplement en quête d'un endroit paisible en pleine nature pour vous détendre,
                               Lacanau-Océan vous comblera",
                "bouton" => "En savoir plus",
                "nom_image" => "Plage_SWELL-Lacanau-Ocean.jpg"
            ];
                ?>
        <div id="quartier"></div>
        <?= get_bandeau_image_et_texte(IMAGE_EN_PREMIER,$tableau_image1) ?>


        <?php $tableau_image2 = [
            "titre" => "Du 2 au 5 pièces",
            "contenu" => "• Jardins privatifs jusqu’à 120 m2 ou grandes terrasses type tropézienne <br>
                        • Lumière naturelle abondante grâce à la double orientation   <br>
                        • Des intérieurs généreux, polyvalents selon les usages <br>
                        • Des matériaux de construction garantissant des économies d’énergie <br>
                        • Vue panoramique depuis les toits-terrasses des derniers étages ",
            "bouton" => "Je me renseigne",
            "nom_image" => "Surfers-coucher-soleil_SWELL-Lacanau-Ocean.jpg"
        ];
        ?>
        <div id="appartement"></div>
        <?= get_bandeau_image_et_texte(TEXTE_EN_PREMIER,$tableau_image2) ?>

        <?php $tableau_image3 = [
            "titre" => "Une résidence pour tous",
            "contenu" => "• Pour tous les âges par sa proximité de transports, commerces, infrastructures scolaires, culturelles et sportives <br>
                        • Au sein d’un parc paysager pour se détendre, faire du sport ou jouer <br>
                        • Plus de 200m2 de terrasse partagée <br>
                        • Un grand local à vélos <br>
                        • Des intérieurs adaptables à toutes les tribus : minies ou grandes, façonnez vos pièces selon votre mode de vie",
            "bouton" => "Je veux vivre ici",
            "nom_image" => "visuel-3.jpg"
        ];
        ?>
        <div id="residence"></div>
        <?= get_bandeau_image_et_texte(IMAGE_EN_PREMIER,$tableau_image3) ?>

        <!-- Appel du bandeau qualite  -->
        <?= get_bandeau_qualite() ?>


        <div id="avis"></div>
        <!-- Appel des avis clients  -->
        <?= get_avis_client() ?>



    </div>
    <!-- Appel du Footer  -->
    <?= get_footer() ?>

</body>
</html>

