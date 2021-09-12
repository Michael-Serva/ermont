<?php
require_once('../includes/init.php');
require_once('../component/molecules/header.php');
require_once('../component/organisms/navabar.php');
?>
<table class="table table-striped table-dark table-hover">
    <thead>
        <th>Nom</th>
        <th>Passes</th>
    </thead>
    <tbody>
        <tr class="table-active">
            <td>Steeve</td>
            <td>2</td>
        </tr>
        <tr>
            <td>Fabien</td>
            <td>2</td>
        </tr>
        <tr>
            <td>Jeff</td>
            <td>2</td>
        </tr>
    </tbody>
</table>

<div class="fixed-bottom">
    <?php
    require_once('../component/molecules/footer.php')
    ?>
</div>