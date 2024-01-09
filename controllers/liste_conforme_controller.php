<?php

use Spipu\Html2Pdf\Debug\Debug;

session_start();
if(isset($_POST['Deconnexion']))
{
    session_destroy();
    $_SESSION['USERNAME']="";
    header("Location:login");
}



if(isset($_POST['retourne_sd'])){


    
    $id_Tc = str_secur($_POST['id_Tc']);
    $num_tc = str_secur($_POST['num_tc']);
    $commentaire = str_secur($_POST['comment']);
    $statut=10;
    $etat=1;
    $conformite="Conformite rejetee";
    // exit();
    $traitement=transmission::traiterinspectretourSD($num_tc,$statut,$commentaire,$etat);
    $conformite=Req_Contest::addNonConformite_sd($num_tc,$conformite,$commentaire);
    //historique a ajouter


}

if(isset($_POST['conforme_sd'])){
    $id_Tc = str_secur($_POST['id_Tc']);
    $num_tc = str_secur($_POST['num_tc']);
    $commentaire = str_secur($_POST['comment']);
    $marchandise = str_secur($_POST['marchandise']);
    $conformite="Conforme";
    $statut=10;
    // $traitement=transmission::traiterinspect($num_tc,$statut,$commentaire);

    $conformite=Req_Contest::addConformite_ok_sd($num_tc,$conformite,$marchandise);
     //decrementer la charger de travail
    //  $champ="agent_visit";
    //  $decret=agent::getdecrementeCotation(matriculeagent($champ,$num_tc));
    // echo $num_tc;
    // statut de l'action
    $_SESSION['ajout']='ok';

}

$allinf =infraction::getAllinf();

//$allinspection=agt_service(OPEVISIT);
//$allinspection=agt_service(OFFVISIT);
if(isset($_POST['recherche'])){
 
    $num_tc                  = str_secur($_POST['num_tc']);
    $date_tc                 = str_secur($_POST['date_tc']);
    $code_declara            = str_secur($_POST['code_declara']);
    $nom_declara             = str_secur($_POST['nom_declara']);
    $nom_imp                 = str_secur($_POST['nom_imp']);
    $code_imp                = str_secur($_POST['code_imp']);
    $date_visite             = str_secur($_POST['date_visite']);
    $agent_visiteur          = str_secur($_POST['agent_visiteur']);
    $type_visite             = str_secur($_POST['type_visite']);
    $vav                     = str_secur($_POST['vav']);
    $statut                  = str_secur($_POST['statut']);
    $num_declaration         = str_secur($_POST['num_declaration']);

    
    $attribut = "id_Tc<>0";
       if(!empty($num_tc)){ $attribut.= " and num_tc='".$num_tc."'"; }
        if(!empty($date_tc)){  $attribut.= " and date_tc='".$date_tc."'"; }
        if(!empty($code_declara)){$attribut.= " and code_declara='".$code_declara."'";  }
        if(!empty($nom_declara)){ $attribut.= " and nom_declara='".$nom_declara."'";  }
        if(!empty($nom_imp)){ $attribut.= " and nom_imp='".$nom_imp."'"; }
        if(!empty($date_visite)){ $attribut.= " and date_visite='".$date_visite."'"; }
        if(!empty($code_imp)){ $attribut.= " and code_imp='".$code_imp."'"; }
        if(!empty($agent_visiteur)){ $attribut.= " and agent_visit='".$agent_visiteur."'"; }
        if(!empty($type_visite)){ $attribut.= " and type_visite='".$type_visite."'";  }
        if(!empty($vav)){ $attribut.= " and vav='".$vav."'";  }
        if(!empty($statut)){ $attribut.= " and onglet='".$statut."'";}
        if(!empty($num_declaration)){ $attribut.= " and num_declaration='".$num_declaration."'";}

        if($attribut != "id_Tc<>0"){
            $all = req_contest::getAllrecherche($attribut);   
        }
        if ($attribut = "id_Tc<>0"){
           // echo "Veuillez Saisir un Champ de recherche";   
        }
      
} 
   

   else{
            $attribut = "conformite='Conforme' ";
            $all = req_contest::Allrecherche($attribut);   
    }
        

?>