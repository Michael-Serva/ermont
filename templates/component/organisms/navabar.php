<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= URL ?>">
            <img class="w-25" src="<?= LOGO_IMG ?>" alt="logo du club">
            <span class="d-block">A.F.C Ermont</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo URL ?>templates/dashboard/butteur.php">Classement des meilleurs buteurs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL ?>templates/dashboard/passeur.php">Classement des meilleurs passeurs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>