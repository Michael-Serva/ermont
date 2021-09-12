<?php
require_once('templates/includes/init.php');
require_once('templates/component/molecules/header.php');
require_once('templates/component/organisms/navabar.php');
?>
<h1 class="text-center fs-5 mt-3 mb-3">Notre prochain match officiel</h1>

<div class="text-center">
    <img src="<?= LOGO_IMG ?>" alt="logo du club">
    <span class="d-block">A.F.C Ermont</span>
</div>
<div class="text-center fw-bold fs-5 mb-3 mt-3 text-danger">V.S</div>

<div class="text-center">
    <img src="public/images/garges.jpg" alt="logo du club adverse">
    <span class="d-block">Garges F.C.M</span>
</div>
<div class="card mt-2">
    <div class="text-center border-2">26 septembre 9h45</div>
    <div class="text-center">
        STADE RAOUL DAUTRY
        105 RUE SAINT GRATIEN - 95120 ERMONT
    </div>
</div>

<div class="fixed-bottom">
    <?php
    require_once('templates/component/molecules/footer.php')
    ?>
</div>