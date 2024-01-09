<?php

require_once '_classes/DB.php';

$db = new DB(DATABASE_HOST,DATABASE_NAME,DATABASE_USER, DATABASE_PASSWORD);

$db->setFetchMode(PDO::FETCH_ASSOC);

$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
//error_reporting(0);
$db1 = new PDO('mysql:host=localhost;dbname=requisition', 'root','');

$conn = oci_connect( 'BDREQUISITION', 'DARRV2023' ,  'localhost/xe');
if (!$conn) {
  // echo  'vous n\'etes pas connect�';
  $ok=  'vous n\'etes pas connect�';
   $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);    
}
else{ $ok='test echec';
 }

 echo $ok.'ario';
 exit();

//  // Informations de connexion à la base de données Oracle
// $dsn = 'oci:dbname=//localhost:1521/BDREQUISITION';
// $username = 'BDREQUISITION';
// $password = 'DARRV2023';

// try {
//     // Création de l'objet PDO pour la connexion
//     $conn = new PDO($dsn, $username, $password);

//     // Configurer PDO pour générer des exceptions en cas d'erreur
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     echo "Connexion réussie à la base de données Oracle";

//     // Vous pouvez maintenant exécuter des requêtes SQL ici

//     // Fermer la connexion
//     $conn = null;
// } catch (PDOException $e) {
//     echo "Erreur de connexion : " . $e->getMessage();
//}


