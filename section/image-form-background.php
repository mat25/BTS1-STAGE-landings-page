<?php
function get_image_form_background(){ ?>

    <div class="image-form-background" id="image-form-background">
        <div class="image">
            <img src="./assets/images/SWELL_LACANAU-carré.jpg" alt="image qui présente Swell">
        </div>
        <div class="form">
            <p class="titre-image-form-background">Besoin de renseignements ? <br>
                Indiquez vos coordonnées <br>
                ici, on vous rappelle !</p>
            <?= get_formulaire_main() ?>
        </div>
    </div>

<?php } ?>