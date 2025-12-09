<?php
require_once ('templates/header.php');
//require_once ('index.php')
?>
<div class="image-container">
    <img src="/assets/images/photo5.jpg" alt="Semi Marathon La Rochelle" width="100%" height="auto" loading="lazy">
    <div class="overlayRubrique">
        <h1 class="d-flex align-items-center">Courses</h1>
        <img class="slide-bottom" src="/assets/icones/down-arrow.svg" alt="">
    </div>
</div>
<h2 class="courses text-center mt-3">Parcours 5 km</h2>
<div class="container ">
    <div class="row mt-5">
        <div class="col-md-6 mx-auto text-center mt-5">
             <div class="card mx-auto" style="width: 36rem;">
                <img src="/assets/parcours/parcours_5km.png" class="card-img-top" alt="parcours 5km">
                <div class="card-body">
                    <p class="italic card-text">
                        Parcours visible sur Openrunner. 
                        La distance indiquée l'est à titre indicatif.
                        Chaque course à label est mesurée par un officiel FFA.
                    </p>
                    <a href="https://www.openrunner.com/route-details/20491054" class="btn btn-danger">Accéder aux détails de la course</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-center d-flex flex-column align-items-center justify-content-center">
            <div class="justify-content-center mt-3">
                <img src="assets/icones/navette.png" class="map">
            </div>
            <div class="text-justify">
                <h5 class="mt-3">Dimanche 29 mars 2026</h5>
                <p>Départ : 8h15<br></p>
                <p>
                Arrivée sur le stade Armand Bouffénie entre 8h30 et 9h10
                </p>
            </div>
        </div>
    </div>
</div>
<div class="text-center">
    <h2 class="courses mt-5">Parcours Semi-Marathon et relais à 2</h2>
    <p >Pour le parcours Relais à 2, le 1er concurrent réalise 10 km, le second 11 km.</p>
</div>
<div class="container ">
    <div class="row mt-5">
        <div class="col-md-6 mx-auto text-center mt-5">

             <div class="card mx-auto" style="width: 36rem;">
                <img src="assets/parcours/parcours_semi.png" class="card-img-top" alt="Parcours semi et duo">
                <div class="card-body">
                    <p class="italic card-text">
                        Parcours visible sur Openrunner. 
                        La distance indiquée l'est à titre indicatif.
                        Chaque course à label est mesurée par un officiel FFA.
                    </p>
                    <a href=" https://www.openrunner.com/route-details/20742754" class="btn btn-danger">Accéder aux détails de la course</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-center d-flex flex-column align-items-center justify-content-center">
            <div class="justify-content-center mt-3">
                <img src="assets/icones/navette.png" class="map">
            </div>
            <h5 class="mt-3">Dimanche 29 mars 2026</h5>
            <p>Départ : 8h30</p>
            <p>Arrivée sur le stade Armand Bouffénie </p>
        </div>
    </div>
</div>
    <h2 class="courses text-center mt-5">Plan d'entrainement</h2>
    <div class="text-center mt-3">
        <a href="assets/informations/plan d'entrainement.pdf"><img src="assets/icones/chaussures-de-course.gif" title="programme entrainement" alt="plan d'entrainement"></a>
        <p class=" mt-2">Pour vous aider à réaliser votre objectif. <br>
        Télécharger le plan d'entrainement pour débutant préparé par notre coach.</p>
        <p class="italic">(Cliquez sur l'icône)</p>
    </div>
<!--     <h2 class="courses text-center mt-5"> Informations de courses</h2>
    <div class="ravito text-center">
        <img src="assets/informations/plan ravito.png" class="img-fluid" alt="plan ravito secours">
    </div>
 -->

<?php 
require_once ('templates/footer.php')
?>

