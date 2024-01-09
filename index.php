<?php

session_start();
include_once '_config/config.php';
include_once '_functions/functions.php';
include_once '_classes/Autoloader.php';
Autoloader::register();
include_once '_config/db.php';
//Pour les envoi de mail et pdf

// require_once('_functions/email.php');
// require_once('assets/vendor/autoload.php');




// AFFICHAGE DE LA PAGE D'ACCUEIL
// condition pour affichage la page par defaut
if(isset($_GET['page']) AND !empty($_GET['page'])) {

    $pages  = trim(strtolower($_GET['page']));

} else {
    $pages = 'login';
}
// liste tous les fichiers du dossiers controllers
$allPages = scandir('controllers/');

// parcours la liste des controllers pour retrouver le controller de la page demandée.
if (in_array($pages.'_controller.php', $allPages)) {

   // include_once 'models/'.$pages.'_model.php';
    include_once 'controllers/'.$pages.'_controller.php';
    include_once 'views/'.$pages.'_view.php';

} else {
      include_once 'views/404-page_view.php';
}