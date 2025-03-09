<?php
require_once ('templates/header.php');
?>

<!-- Modal -->
<!-- <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: #100242;">
      <div class="modal-header mx-auto">
        <h1 class="modal-title text-focus-in" id="exampleModalLabel">
          Découvrez les parcours de cette nouvelle édition...<br>
          
        </h1>
      </div>
      <div class="modal-body">
      Nouvelle page Facebook<br>
      <a href="https://www.facebook.com/profile.php?id=61567550131081" title="facebook semi-marathon"><img src="/assets/icones/icons8-facebook.png" class="mt-2 mb-2"></a>
      <p style="color: #D8DC1B; font-weight:bold">Nouvelles informations à venir...</p>
    </div>
    <div class="text-center mb-3">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fermer</button>
    </div>
    </div>
  </div>
</div>
 -->
<!-- Modal blanche-->
<!-- Modal blanche-->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <!--Countdown-->
        <div class="countdown-container">
          <div class="eventTitle text-center">Départ de la course : </div>
            <div class="countdown">
                <div class="time-block">
                    <div id="days" class="number">00</div>
                    <div class="label">Jours</div>
                </div>
                <div class="time-block">
                    <div id="hours" class="number">00</div>
                    <div class="label">Heures</div>
                </div>
                <div class="time-block">
                    <div id="minutes" class="number">00</div>
                    <div class="label">Minutes</div>
                </div>
                <div class="time-block">
                    <div id="seconds" class="number">00</div>
                    <div class="label">Secondes</div>
                </div>
            </div>
            <div id="message" class="message"></div>
            <img src="/assets/partenaires/HyundaiTitre.png" alt="logo Hyundai" loading="lazy" width="70%" height="auto">
        </div>
        <!--End Countdown-->
    </div>
  </div>
</div>
