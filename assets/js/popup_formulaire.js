
function AfficherMasquer()
{
    divInfo = document.getElementById('divacacher');

    if (divInfo.style.display == 'none') {
        divInfo.style.display = 'block';
        document.querySelector('#divacacher').classList.add('open');
        /* ferme le menu burger quands on ouvre le form */
        closeMenuMobile();
    } else {
        divInfo.style.display = 'none';
        document.querySelector('#divacacher').classList.remove('open');
    }
}

function AfficherIfPost() {
    divInfo = document.getElementById('divacacher');
    divInfo.style.display = 'block';
    document.querySelector('#divacacher').classList.add('open');
}

