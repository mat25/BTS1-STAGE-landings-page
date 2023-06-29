<?php
function get_header(){ ?>
        <header class="header">
            <div class="main_container_header">
                <div class="header__logo">
                    <a href="#header">
                    <img src="assets/images/Logo-SWELL_LACANAU-Complet-Blanc.png" alt="Logo swell_lacanau" />
                    </a>
                </div>
                <nav class="header__nav">
                    <div class="header__nav__close" onclick="closeMenuMobile()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                    <div class="header__nav__menu">
                        <div class="header__nav__menu__link">
                            <a href="#quartier">Le quartier</a>
                        </div>
                        <div class="header__nav__menu__link">
                            <a href="#appartement">Les appartements</a>
                        </div>
                        <div class="header__nav__menu__link">
                            <a href="#residence">La résidence</a>
                        </div>
                        <div class="header__nav__menu__link">
                            <a href="#avis">Les avis</a>
                        </div>

                    </div>
                </nav>
                <div class="header__burger" onclick="openMenuMobile()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </div>
            </div>
        </header>
<?php } ?>