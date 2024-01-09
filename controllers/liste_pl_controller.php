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

        if($attribut != "id_Tc<>0 AND SUBSTRING(agent_audit, 1, 7)='".$_SESSION['USERNAME']."'"){
            $all = req_contest::EnvoiPL($attribut);   
        }
        if ($attribut = "id_Tc<>0"){
            echo "Veuillez Saisir un Champ de recherche";   
        }
      
}

elseif($_SESSION['PROFIL']=='5' || $_SESSION['PROFIL']=='2'){
    $attribut=" AND t.num_tc<>''";
    $all =Req_Contest::EnvoiPL($attribut); 

} 
    


$allinf =infraction::getAllinf();

?>