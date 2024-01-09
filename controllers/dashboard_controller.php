<?php
session_start();
if(isset($_POST['Deconnexion']))
{
    session_destroy();
    $_SESSION['USERNAME']="";
    header("Location:login");
}



  $all=Req_Contest::getAlltc();
  $allTroisJours=Req_Contest::getnbreTcNAPTroisJours();
  $allSeptJours=Req_Contest::getnbreTcNAPSeptJours();
  $allplusSeptJours=Req_Contest::getnbreTcNAPSupSeptJours();

  ///AFFICHER LA LISTE DES Tc apurées sans RDV
  $allAPSRDVTroisJours=Req_Contest::getnbreTcAPSRDVTroisJours();
  $allAPSRDVSeptJours=Req_Contest::getnbreTcAPSRDVSeptJours();
  $allAPSRDVplusSeptJours=Req_Contest::getnbreTcAPSRDVSupSeptJours();

  /// TC RDV SANS VISITE

  $allTcRDVSVTroisJours=Req_Contest::getnbreTcRDVSVTroisJours();
  $allTcRDVSVSeptJours=Req_Contest::getnbreTcRDVSVSeptJours();
  $allTcRDVSVplusSeptJours=Req_Contest::getnbreTcRDVSVSupSeptJours();

  // TC VISITE SANS EVALUATION
  $allTcVSETroisJours=Req_Contest::getnbreTcVSETroisJours();
  $allTcVSESeptJours=Req_Contest::getnbreTcVSESeptJours();
  $allTcVSEplusSeptJours=Req_Contest::getnbreTcVSESupSeptJours();

 ///Tc en contestation non transmis en PL

 $allTcCNTTroisJours=Req_Contest::getnbreTcCNTTroisJours();
 $allTcCNTSeptJours=Req_Contest::getnbreTcCNTSeptJours();
 $allTcCNTplusSeptJours=Req_Contest::getnbreTcCNTSupSeptJours();

///Tc Visitées Non transmis en reevaluation
 $allTcVNTRTroisJours=Req_Contest::getnbreTcVNTRTroisJours();
 $allTcVNTRSeptJours=Req_Contest::getnbreTcVNTRSeptJours();
 $allTcVNTRSupSeptJours=Req_Contest::getnbreTcVNTRSupSeptJours();


 /// Dossier a efectuer
$table="req_reev_contest";
$attribut=" onglet='9' AND onglet='9'  AND SUBSTRING(agent_visit, 1, 7)='".$_SESSION['USERNAME']."'";

// Dossier effectuer

$table="req_reev_contest R, transmission T ";
$attribut=" onglet='9' AND onglet='9'  AND SUBSTRING(agent_visit, 1, 7)='".$_SESSION['USERNAME']."' AND R.num_tc=T.NUM_TC";


//Dossier retour

$table="req_reev_contest R, transmission T ";
$attribut=" onglet='9' AND onglet='9'  AND SUBSTRING(agent_visit, 1, 7)='".$_SESSION['USERNAME']."' AND R.num_tc=T.NUM_TC AND INSPECTION='2'";


//$doc_a_traiter=Req_Contest::nbredossier($table,$attribut);


?>