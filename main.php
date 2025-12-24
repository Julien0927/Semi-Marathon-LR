<?php
require_once ('index.php');
require_once ('templates/header.php');
?>

<body>
<main>
  <p></p>
  <div class="image-container">
    <img src="assets/images/photo14.jpg" alt="Semi Marathon La Rochelle" width="100%" height="auto" loading="lazy">
    <div class="d-flex flex-column justify-content-center col-md-12 mt-5">
      <div class="image-logo text-center mt-5 mb-5">
        <img src="assets/icones/logo-semi-couleur.png" class="logo" alt="logo semi">
      </div>
      <div class="image-text pb-2">
        <h1>SEMI-MARATHON <br>DE<br> LA ROCHELLE<br>AVEC<br></h1>
        <img src="assets/partenaires/hyundai2025.png" class="img-fluid hyundai mt-3" style="border-radius: 20px; width: 80%" alt="logo Hyundai">
      </div>

      <div class="image-club">
        <a href="http://aunisathletismelarochelleaytre.athle.com/"><img src="assets/icones/logo Aunis vectorise.jpg" class="img-fluid" style="border-radius: 10px;" alt="Aunis Athlétisme"></a>
      </div>
    </div>


  </div>

  <?php 
 /*  require_once ('templates/modalcomplet.php'); */
  require_once ('templates/items.php'); 
  require_once ('templates/textes.php');
  require_once ('templates/bandeau.php');
  ?>
</main>

<?php
require_once ('templates/footer.php')
?>
