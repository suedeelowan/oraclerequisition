<?php
session_start();
if(isset($_POST['Deconnexion']))
{
    session_destroy();
    $_SESSION['USERNAME']="";
    header("Location:login");
}

if(isset($_POST['recherche'])){

$date_debut = str_secur($_POST['date_debut_tc']);
    if(empty($date_debut)){$date_debut==" ";}else { $date_debut= str_secur($_POST['date_debut_tc']);}

$date_fin = str_secur($_POST['date_fin_tc']);
  if(empty($date_fin)){$date_fin==" ";}else {$date_fin= str_secur($_POST['date_fin_tc']); }

} 
  
 $all = Req_Contest::getAlltcDate($date_debut,$date_fin);

// référence à la bibliothèque de fonctions

require_once 'include/PHPExcel/classes/PHPExcel.php';

require_once 'include/PHPExcel/classes/PHPExcel/IOFactory.php';


if(isset($_POST['excel'])) {

    // création des objets de base et initialisation des informations d'entête

    $classeur = new PHPExcel;

    $classeur->getProperties()->setCreator("Annie Gagnon");

    $classeur->setActiveSheetIndex(0);

    $feuille=$classeur->getActiveSheet();

 

    // ajout des données dans la feuille de calcul

    $feuille->setTitle('Nom affiché dans l\'onglet');

    $feuille->setCellValueByColumnAndRow(0, 1, 'Les colonnes débutent à 0 et les lignes débutent à 1');

    $feuille->SetCellValue('A2', 'Il est aussi possible d\'utiliser la notation LettreChiffre (ex : A2)');

 

    // envoi du fichier au navigateur

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); 

    header('Content-Disposition: attachment;filename="nomfichier.xlsx"'); 

    header('Cache-Control: max-age=0'); 

    $writer = PHPExcel_IOFactory::createWriter($classeur, 'Excel2007'); 

    $writer->save('php://output');

}

?>

