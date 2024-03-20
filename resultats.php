<?php
require_once ('templates/header.php');
//require_once ('index.php')
?>

<div class="image-container">
    <img src="assets/images/photo10.jpg" alt="Semi Marathon La Rochelle" width="100%" height="auto">
    <div class="overlayRubrique">
        <h1 class="d-flex align-items-center">Résultats</h1>
        <img class="slide-bottom" src="assets/icones/down-arrow.svg" alt="">
    </div>
</div>
<div class="row mt-5">
    <div class="d-flex"></div>
        <div class="col-md-6 justify-content-center text-center">
            <h3>Classement 2023</h3>
            <a href="https://bases.athle.fr/asp.net/liste.aspx?frmbase=resultats&frmmode=1&frmespace=0&frmcompetition=266488"><img src="assets/icones/podium.png" alt="résultats"></a>
            <p class="italic">Cliquez sur l'icône pour découvrir le classement</p>
            <h3 class="mt-3">Classement 2024</h3>
            <a href="http://bases.athle.fr/asp.net/liste.aspx?frmbase=resultats&amp;frmmode=1&amp;frmespace=0&amp;frmcompetition=280919&amp;frmepreuve=5+Km+Route+TCX"><img src="assets/icones/podium.png" alt="résultats"></a>
            <p class="italic">Cliquez sur l'icône pour découvrir le classement</p>
        </div>
        <div class="col-md-6 justify-content-center text-center">
            <h3>Palmarès masculin</h3>
            <a href="http://aunisathletismelarochelleaytre.athle.com/asp.net/espaces.html/html.aspx?id=40029"><img src="assets/icones/badge.png" alt="palmares"></a>
            <p class="italic">Cliquez sur l'icône pour découvrir le palmarès</p>
            <h3 class="mt-3">Palmarès féminin</h3>
            <a href="http://aunisathletismelarochelleaytre.athle.com/asp.net/espaces.html/html.aspx?id=42603"><img src="assets/icones/badge.png" alt="palmares"></a>
            <p class="italic">Cliquez sur l'icône pour découvrir le palmarès</p>
        </div>
    </div>
</div>

<?php 
require_once ('templates/footer.php')
?>