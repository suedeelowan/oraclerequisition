<?php

// --------------------------- //
//       ERRORS DISPLAY        //
// --------------------------- //

//!\\ A enlever lors du déploiement
 error_reporting(E_ERROR | E_PARSE);
 ini_set('display_errors', true);


// --------------------------- //
//          SESSIONS           //
// --------------------------- //

ini_set('session.cookie_lifetime', false);
session_start();


// --------------------------- //
//         CONSTANTS           //
// --------------------------- //

// Paths
define("PATH_REQUIRE", substr($_SERVER['SCRIPT_FILENAME'], 0, -9)); // Pour fonctions d'inclusion php
define("PATH", substr($_SERVER['PHP_SELF'], 0, -9)); // Pour images, fichiers etc (html)

// Website informations
define("WEBSITE_TITLE", "Mon site");
define("WEBSITE_NAME", "Mon site");
define("WEBSITE_URL", "https://monsite.com");
define("WEBSITE_DESCRIPTION", "Description du site");
define("WEBSITE_KEYWORDS", "");
define("WEBSITE_LANGUAGE", "");
define("WEBSITE_AUTHOR", "");
define("WEBSITE_AUTHOR_MAIL", "");

// Facebook Open Graph tags
define("WEBSITE_FACEBOOK_NAME", "");
define("WEBSITE_FACEBOOK_DESCRIPTION", "");
define("WEBSITE_FACEBOOK_URL", "");
define("WEBSITE_FACEBOOK_IMAGE", "");


// DataBase informations
define("DATABASE_HOST", "localhost");
define("DATABASE_NAME", "requisition");
define("DATABASE_USER", "root");
define("DATABASE_PASSWORD", "");

// Données pour  les services
define("REEVAL", "REEVALUATION");
define("CONTS", "AGENT CONTESTATION");
define("AUDI", "AUDITEUR");
define("INS", "INSPECTION");
define("OFFVISIT", "OFFICIER VISITE");
define("OPEVISIT", "OPERATEUR VISITE");
define("AGCOURRIER", "AGENT COURRIER");
define("LOGO_APPLI", '<img src="assets/img/logo.png" width="60" height="70" style ="object-position: 90% 9%;margin-left:50px;"/><p style="font-family: sans-serif;font-size: 25px; margin-left:50px"> <img src="assets/img/logo_cruc.png" width="25%;" /><FONT size="4" color="#ffffff">SUIVI DES REQUISITIONS DARRV</FONT></p>');



//Background color

define("BGCOLOR", "background-color:#e3f0fe ;");

//Données pour historique
define("POURCB", "Transmis pour auditeur  ".$_SESSION['NOM_USER']." ".$_SESSION['PRENOM_USER']."");
define("POURAUDIT", "Transmis pour auditeur  ".$_SESSION['NOM_USER']." ".$_SESSION['PRENOM_USER']."");
define("VISIT", "Enregistrement de visite par  ".$_SESSION['NOM_USER']." ".$_SESSION['PRENOM_USER']."");
define("MODIFVISIT", "Modification d' un enregistrement de visite par ".$_SESSION['NOM_USER']." ".$_SESSION['PRENOM_USER']." ");
define("REVAL", "Enregistrement de reevaluation par ".$_SESSION['NOM_USER']." ".$_SESSION['PRENOM_USER']."");
define("MODIFREEVAL", "Modification d'un enregistrement de reevaluation par ".$_SESSION['NOM_USER']." ".$_SESSION['PRENOM_USER']."");
define("COURRIER", "Enregistrement de courrier par ".$_SESSION['NOM_USER']." ".$_SESSION['PRENOM_USER']."");
define("MODIFCOURRIER", "Modification d'enregistrement de courrier par ".$_SESSION['NOM_USER']." ".$_SESSION['PRENOM_USER']."");
define("CONTEST", "Enregistrement de contestation par ".$_SESSION['NOM_USER']." ".$_SESSION['PRENOM_USER']."");
define("MODIFCONTEST", "Modification de contestation par ".$_SESSION['NOM_USER']." ".$_SESSION['PRENOM_USER']."");

//Langues
define("DEFAULT_LANGUAGE", "fr");

