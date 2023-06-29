<?php

function get_bandeau_image_et_texte($image,$contenu){
    if ($image == IMAGE_EN_PREMIER) { ?>
        <div class="image-et-texte">
            <div class="img-container">
                <img src="./assets/images/<?= $contenu["nom_image"]?>" alt="visuel 1"">
            </div>

            <div class="texte">
                <h1><?= $contenu["titre"]?></h1>
                <p><?= $contenu["contenu"]?></p>
                <input type="button" class="btn" value="<?= $contenu["bouton"]?>" onClick="AfficherMasquer()" />
            </div>
        </div>

    <?php } else { ?>

        <div class="image-et-texte">
            <div class="texte">
                <h1><?= $contenu["titre"]?></h1>
                <p><?= $contenu["contenu"]?></p>
                <input type="button" class="btn" value="<?= $contenu["bouton"]?>" onClick="AfficherMasquer()" />
            </div>

            <div class="img-container-texte-en-premier">
                <img src="./assets/images/<?= $contenu["nom_image"]?>" alt="visuel 1"">
            </div>
        </div>
    <?php } ?>

<?php } ?>