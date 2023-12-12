<?php
require_once ('templates/nav.php');
require_once ('index.php')
?>

<div class="image-container">
    <img src="assets/images/photo5.jpg" alt="Semi Marathon La Rochelle" width="100%" height="auto">
    <div class="overlayRubrique">
        <h1 class="">Médias</h1>
        <img class="slide-bottom" src="assets/icones/down-arrow.svg" alt="">
    </div>
</div>
<div class="d-flex flex-column justify-content-center text-center mt-3">
    <h3>Annonceur officiel</h3>
    <div>
        <img src="assets/partenaires/Europe2.png" style="width: 20%; height: auto" >
    </div>
</div>
<div class="d-flex flex-column justify-content-center text-center mt-3">
    <div class="row">
    <div class="col-md-6">
        <h3>Album photos 2023</h3>
        <a href="https://www.flickr.com/photos/197926503@N07/albums/72177720306852180/"><img src="assets/icones/album-photos-50.png" title="photos edition 2023" alt="photos edition 2023"></a>
        <p class="italic">Cliquez sur l'icône pour accéder aux photos</p>
    </div>
    <div class="col-md-6">
        <h3>Album photos 2024</h3>
        <a href=""><img src="assets/icones/album-photos-50.png" title="photos edition 2023" alt="photos edition 2023"></a>
        <p class="italic">Photos à venir</p>
    </div>
    </div>
</div>

<?php 
require_once ('templates/footer.php')
?>