<?php
require_once ('templates/header.php');
?>

<div class="image-container">
    <img src="assets/images/jeune femme seule.jpg" alt="Semi Marathon La Rochelle" width="100%" height="auto">
    <div class="overlayRubrique">
        <h1 class="d-flex align-items-center">Médias</h1>
        <img class="slide-bottom" src="assets/icones/down-arrow.svg" alt="">
    </div>
</div>
<div class="d-flex flex-column justify-content-center text-center mt-3">
    <h3>Annonceur officiel</h3>
    <div>
        <video src="/assets/video/Europe2.mp4" type="video/mp4" class="video-responsive mt-3" style="width: 80%; height: auto" autoplay muted></video>
    </div>
</div>
<div class="d-flex flex-column justify-content-center text-center mt-4">
    <div class="row">
        <div class="col-md-4">
            <h3>Album photos 2023</h3>
            <a href="https://www.flickr.com/photos/197926503@N07/albums/72177720306852180/"><img src="assets/icones/album-photos-50.png" title="photos edition 2023" alt="photos edition 2023"></a>
            <p class="italic">Cliquez sur l'icône pour accéder aux photos</p>
        </div>
        <div class="col-md-4">
            <h3>Album photos 2024</h3>
            <a href="http://www.flickr.com/photos/197926503@N07/albums"><img src="assets/icones/album-photos-50.png" title="photos edition 2023" alt="photos edition 2023"></a>
            <p class="italic">Cliquez sur l'icône pour accéder aux photos</p>
        </div>
        <div class="col-md-4">
            <h3>Album photos 2025</h3>
            <a href="https://www.flickr.com/photos/197926503@N07/albums/72177720324637443/"><img src="assets/icones/album-photos-50.png" title="photos edition 2023" alt="photos edition 2023"></a>
            <p class="italic">Cliquez sur l'icône pour accéder aux photos</p>
        </div>
    </div>
</div>

<?php 
require_once ('templates/footer.php')
?>