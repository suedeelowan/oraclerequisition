<?php
session_start();
if(isset($_POST['Deconnexion']))
{
    session_destroy();
    $_SESSION['USERNAME']="";
    header("Location:login");
}

if(isset($_POST['envoyer_reev']))
{
    $id_Tc               =  str_secur($_POST['id_Tc']);
    $date_envoi_reev     = str_secur($_POST['date_envoi_reev']);
    $date_reev           = str_secur($_POST['date_reev']);
    $fob_reeva           = str_secur($_POST['fob_reeva']);
    $onglet              = 2;
    $date_envoi_pl_reev  = str_secur($_POST['date_envoi_pl_reev']);
    $date_envoi_cbar     = str_secur($_POST['date_envoi_cbar']);
    $agent_reeva         = str_secur($_POST['agent_reeva']);
    $date_validation         = str_secur($_POST['datevalid']);
    $DC_prevision         = str_secur($_POST['dc_prevision']);
    $agent_audit         = str_secur($_POST['agent_audit']);
    

    Req_Contest::addNewReevalu($id_Tc,$date_envoi_reev,$date_reev,$fob_reeva,$onglet,$date_envoi_pl_reev,$date_envoi_cbar,$agent_reeva,$date_validation,$DC_prevision,$agent_audit);
    //gestion de l'historique
    $action=REVAL;
    Histo($action,$id_Tc);

    $_SESSION['ajout']='ok';
}

if(isset($_POST['modifier_reev']))
{
    $id_Tc               =  str_secur($_POST['id_Tc']);
    $date_envoi_reev     = str_secur($_POST['date_envoi_reev']);
    $date_reev           = str_secur($_POST['date_reev']);
    $fob_reeva           = str_secur($_POST['fob_reeva']);
    $date_envoi_pl_reev  = str_secur($_POST['date_envoi_pl_reev']);
    $date_envoi_cbar     = str_secur($_POST['date_envoi_cbar']);
    $agent_reeva         = str_secur($_POST['agent_reeva']);
    $date_validation         = str_secur($_POST['datevalid']);
    $DC_prevision         = str_secur($_POST['dc_prevision']);
    $agent_audit         = str_secur($_POST['agent_audit']);

    Req_Contest::addNewReevalumodif($id_Tc,$date_envoi_reev,$date_reev,$fob_reeva,$date_envoi_pl_reev,$date_envoi_cbar,$agent_reeva,$date_validation,$DC_prevision,$agent_audit);
    //gestion de l'historique
    $action=MODIFREEVAL;
    Histo($action,$id_Tc);
    $_SESSION['ajout']='ok';
}

if(isset($_POST['envoyer_courier']))
{
    $id_Tc             =  str_secur($_POST['id_Tc']);
    $date_recep_courier          = str_secur($_POST['date_recep_courier']);
    $num_courier          = str_secur($_POST['num_courier']);
    $agent_recption_courier            = str_secur($_POST['agent_recption_courier']);
    $onglet              = 3;
    req_contest::addNewCourier($id_Tc, $date_recep_courier, $num_courier, $agent_recption_courier,$onglet);
    $_SESSION['ajout']='ok';
    //gestion de l'historique
    $action=COURRIER;
    Histo($action,$id_Tc);
}

if(isset($_POST['modifier_courier']))
{
    $id_Tc             =  str_secur($_POST['id_Tc']);
    $date_recep_courier          = str_secur($_POST['date_recep_courier']);
    $num_courier          = str_secur($_POST['num_courier']);
    $agent_recption_courier            = str_secur($_POST['agent_recption_courier']);
    $dc_prevision            = str_secur($_POST['dc_prevision']);
    req_contest::addNewCouriermodif($id_Tc, $date_recep_courier, $num_courier, $agent_recption_courier);
    $_SESSION['ajout']='ok';
    //gestion de l'historique
    $action=MODIFCOURRIER;
    Histo($action,$id_Tc);
}


if(isset($_POST['envoyer_contest']))
{
    $id_Tc             =  str_secur($_POST['id_Tc']);
    $date_traite_contest          = str_secur($_POST['date_traite_contest']);
    $fob_apres_contest            = str_secur($_POST['fob_apres_contest']);
    $decision          = str_secur($_POST['decision']);
    $Motif_contest            = str_secur($_POST['Motif_contest']);
    $onglet              = 4;
    $date_envoi_pl_contes          = str_secur($_POST['date_envoi_pl_contes']);
    $agent_contest            = str_secur($_POST['agent_contest']);
    $date_recep_recours            = str_secur($_POST['date_recep_recours']);
    $dc_prevision            = str_secur($_POST['dc_prevision']);
    
    Req_contest::addNewContest($id_Tc, $date_traite_contest, $fob_apres_contest, $decision, $Motif_contest, $onglet, $date_envoi_pl_contes, $agent_contest,$date_recep_recours,$dc_prevision);
    $_SESSION['ajout']='ok';
    //gestion de l'historique
    $action=CONTEST;
    Histo($action,$id_Tc);

}

if(isset($_POST['modifier_contest']))
{
    $id_Tc             =  str_secur($_POST['id_Tc']);
    $date_traite_contest          = str_secur($_POST['date_traite_contest']);
    $fob_apres_contest            = str_secur($_POST['fob_apres_contest']);
    $decision          = str_secur($_POST['decision']);
    $Motif_contest            = str_secur($_POST['Motif_contest']);
    $date_envoi_pl_contes          = str_secur($_POST['date_envoi_pl_contes']);
    $agent_contest            = str_secur($_POST['agent_contest']);
    $date_recep_recours            = str_secur($_POST['date_recep_recours']);
    $dc_prevision            = str_secur($_POST['dc_prevision']);
    Req_contest::addNewContestmodif($id_Tc, $date_traite_contest, $fob_apres_contest, $decision, $Motif_contest, $date_envoi_pl_contes, $agent_contest,$date_recep_recours,$dc_prevision);
    $_SESSION['ajout']='ok';
    //gestion de l'historique
    $action=MODIFCONTEST;
    Histo($action,$id_Tc);


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
      
      $all = req_contest::getAllrecherche($attribut);
} 
    
//   else{      $all = req_contest::getAllTc();  }

  if(isset($_POST['envoyer'])){

    $id_Tc              = str_secur($_POST['id_Tc']);
    $num_tc              = str_secur($_POST['num_tc']);
    $code_declara       = str_secur($_POST['code_declara']);
    $code_imp           = str_secur($_POST['code_imp']);
    $num_declaration    = str_secur($_POST['num_declara']);
    $date_declara       = str_secur($_POST['date_delara']);
    $date_depot_visit   = str_secur($_POST['date_rapport']);
    $dateEnvReev   = str_secur($_POST['dateEnvReev']);
    $marchandise   = str_secur($_POST['marchandise']);
     $date_visite       = str_secur($_POST['date_visite']);
    $lieu_visite        = str_secur($_POST['lieu_visite']);
    $type_visite        = str_secur($_POST['type_visite']);
    $agent_visit        = str_secur($_POST['agent_visiteur']);
    $Date_cotation      = str_secur($_POST['Date_cotation']);
    $conformite         = str_secur($_POST['conformite']);
    $vav                = str_secur($_POST['vav']);
    $onglet             = 1;
    $nom_off_visiteur   = str_secur($_POST['nom_off_visiteur']);
    $date_Dvisite       = str_secur($_POST['date_Dvisite']);
    $nom_op_visite      = str_secur($_POST['nom_op_visite']);
    $date_Fvisite      = str_secur($_POST['date_Fvisite']);
    $infraction      = str_secur($_POST['infraction']);
    $marchandise_add      = str_secur($_POST['marchandise_add']);

    foreach ($_POST['infraction']  as $valeur ): $infraction.=$valeur.'|'; endforeach;
   // echo $infraction; echo '@@.'.$infraction1 ; 
   // exit();

        $respons = Req_Contest::addNewInspection($num_tc,$num_declaration, $code_declara, $code_imp,$date_visite,
        $agent_visit, $conformite, $date_depot_visit,$dateEnvReev,$marchandise, $onglet, $date_declara, $lieu_visite, $type_visite, $vav,
        $Date_cotation, $date_Fvisite, $nom_op_visite, $date_Dvisite, $nom_off_visiteur,$infraction,$marchandise_add);


         //gestion de l'historique
            $action=VISIT.$_SESSION['NOM_USER'].' '.$_SESSION['PRENOM_USER'];
            Histo($action,$id_Tc);

        //  var_dump($repons); exit();
        $_SESSION['ajout']='ok';

        if ($respons == 1){
            //gestion de l'historique
            $action=VISIT.$_SESSION['NOM_USER'].' '.$_SESSION['PRENOM_USER'];
            Histo($action,$num_tc);
            $message = "Ajouter avec succes";
            echo  $message;
        }else
        {
            $message = "Erreur enregistrement";
            echo  $message;
        }
}

if(isset($_POST['modifier'])){

    $id_Tc              = str_secur($_POST['id_Tc']);
    $num_tc              = str_secur($_POST['num_tc']);
    $code_declara       = str_secur($_POST['code_declara']);
    $code_imp           = str_secur($_POST['code_imp']);
    $num_declaration    = str_secur($_POST['num_declara']);
    $date_declara       = str_secur($_POST['date_delara']);
    $date_depot_visit   = str_secur($_POST['date_rapport']);
    $dateEnvReev        = str_secur($_POST['dateEnvReev']);
    $marchandise        = str_secur($_POST['marchandise']);
     $date_visite       = str_secur($_POST['date_visite']);
    $lieu_visite        = str_secur($_POST['lieu_visite']);
    $type_visite        = str_secur($_POST['type_visite']);
    $agent_visit        = str_secur($_POST['agent_visiteur']);
    $Date_cotation      = str_secur($_POST['Date_cotation']);
    $conformite         = str_secur($_POST['conformite']);
    $vav                = str_secur($_POST['vav']);
    $nom_off_visiteur   = str_secur($_POST['nom_off_visiteur']);
    $date_Dvisite       = str_secur($_POST['date_Dvisite']);
    $nom_op_visite      = str_secur($_POST['nom_op_visite']);
    $date_Fvisite      = str_secur($_POST['date_Fvisite']);
    $infraction      = str_secur($_POST['infraction']);
    $marchandise_add      = str_secur($_POST['marchandise_add']);

    //recuperer les infractions
    foreach ($_POST['infraction']  as $valeur ): $infraction.=$valeur.'|'; endforeach;
   // echo $infraction; echo '@@.'.$infraction1 ; 
   // exit();

 $respons = Req_Contest::addNewInspectionmodif($num_tc,$num_declaration, $code_declara, $code_imp,$date_visite,
 $agent_visit, $conformite, $date_depot_visit,$dateEnvReev,$marchandise, $date_declara, $lieu_visite, $type_visite , $nom_off_visiteur, $vav,
 $Date_cotation, $date_Fvisite, $nom_op_visite, $date_Dvisite,$infraction,$marchandise_add);

    // var_dump($repons); exit();
    $_SESSION['ajout']='ok';
    //gestion de l'historique
    $action=MODIFVISIT;
    //echo $action; exit();
    Histo($action,$id_Tc);

    if ($respons == true){
         
        $message = "Ajouter avec succes";
        echo  $message;
    }else
    {
        $message = "Erreur enregistrement";
        echo  $message;
    }
}
$allinf =infraction::getAllinf();

//$allinspection=agt_service(OPEVISIT);
//$allinspection=agt_service(OFFVISIT);
?>