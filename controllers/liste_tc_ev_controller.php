<?php
session_start();
if(isset($_POST['Deconnexion']))
{
    session_destroy();
    $_SESSION['USERNAME']="";
    header("Location:login");
}


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
    $date_debut_tc                     = str_secur($_POST['date_debut_tc']);
    $date_fin_tc                  = str_secur($_POST['date_fin_tc']);

    $attribut = "id_Tc<>0";
    
        if(!empty($num_tc)){ $attribut.= " and num_tc='".$num_tc."'"; }
        if(!empty($date_tc)){  $attribut.= " and date_tc='".$date_tc."'"; }
        if(!empty($code_declara)){$attribut.= " and code_declara='".$code_declara."'";  }
        if(!empty($nom_declara)){ $attribut.= " and nom_declara='".$nom_declara."'";  }
        if(!empty($nom_imp)){ $attribut.= " and nom_imp ='".$nom_imp."'"; }
        if(!empty($date_visite)){ $attribut.= " and date_visite='".$date_visite."'"; }
        if(!empty($code_imp)){ $attribut.= " and code_imp='".$code_imp."'"; }
        if(!empty($agent_visiteur)){ $attribut.= " and agent_visiteur='".$agent_visiteur."'"; }
        if(!empty($type_visite)){ $attribut.= " and type_visite='".$type_visite."'";  }
        if(!empty($vav)){ $attribut.= " and vav='".$vav."'";  }
        if(!empty($statut)){ $attribut.= " and onglet='".$statut."'";}  
        if($date_debut_tc!='' && $date_fin_tc!=''){ $attribut.=" and date_tc between '$date_debut_tc' and '$date_fin_tc'"; }
        
      $all = req_contest::getAllrecherche($attribut);
    
} 
    
  else{$all = req_contest::getAllTc();  }
 
?>