<?php
require_once('../includes/init.php');
require_once('../component/molecules/header.php');
require_once('../component/organisms/navabar.php');
?>
<table class="table table-striped table-dark table-hover text-center">
    <thead>
        <th>Nom</th>
        <th>Buts</th>
    </thead>
    <tbody>
        <tr class="table-active">
            <td>Antoine</td>
            <td>4</td>
        </tr>
        <tr>
            <td>Julien</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Fabien</td>
            <td>1</td>
        </tr>
    </tbody>
</table>

<div class="fixed-bottom">
    <?php
    require_once('../component/molecules/footer.php')
    ?>
</div>