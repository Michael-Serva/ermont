<?php

// Fuseau horaire
date_default_timezone_set('Europe/Paris');
// Définir la langue locale
setlocale(LC_ALL, 'fr_FR.utf8', 'fra.utf8');


// Nom et ouverture de session
session_name('AFCL'); // defaut : PHPSESSID
session_start();



// Constantes du site
define('URL', '/ermont/');
define('INDEX', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME']);
define('LOGO_IMG', URL . 'public/images/logo-afcl.jpg');
define('SITETITLE', 'A.F.C Ermont');
//titre du site / On laisse la possibilité à l'admin de le changer en toute autonomie

