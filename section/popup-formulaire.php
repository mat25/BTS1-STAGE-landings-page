<?php

function get_popup_formulaire(){ ?>
    <div id="divacacher" style="display:none;">
        <div class="close_button_divacacher">
            <input type="button" value="Fermer" onClick="AfficherMasquer()" />
        </div>
        <?= get_formulaire() ?>
    </div>
<?php } ?>