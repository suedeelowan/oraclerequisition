<?php

use Spipu\Html2Pdf\Debug\Debug;

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
    //$date_envoi_cbar     = str_secur($_POST['date_envoi_cbar']);
    $agent_reeva         = str_secur($_POST['agent_reeva']);
    $date_validation     = str_secur($_POST['datevalid']);
    $DC_prevision        = str_secur($_POST['dc_prevision']);
    $agent_audit         = str_secur($_POST['agent_audit']);
    $infraction    = str_secur($_POST['infraction']);
    $observation_reeva   = str_secur($_POST['observation_reeva']);
    $date_valid_reeva    = str_secur($_POST['date_valid_reeva']);
    

    $date_inf=date('Y-m-d H:i:s');

    foreach ($_POST['infraction']  as $valeur ): $infraction.=$valeur.'|';

        $ajoutinfraction=infractiontc::insert_infraction($valeur,$id_Tc,$date_inf,$_SESSION['IDUSER']);
    endforeach;

    Req_Contest::addNewReevalu($id_Tc,$date_envoi_reev,$date_reev,$fob_reeva,$onglet,$date_envoi_pl_reev,$agent_reeva,$date_validation,$DC_prevision,$agent_audit,$infraction,$observation_reeva,$date_valid_reeva);
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
    //$date_envoi_cbar     = str_secur($_POST['date_envoi_cbar']);
    $agent_reeva         = str_secur($_POST['agent_reeva']);
    $date_validation     = str_secur($_POST['datevalid']);
    $DC_prevision        = str_secur($_POST['dc_prevision']);
    $agent_audit         = str_secur($_POST['agent_audit']);
    $infraction    = str_secur($_POST['infraction']);
    $observation_reeva   = str_secur($_POST['observation_reeva']);
    $date_valid_reeva    = str_secur($_POST['date_valid_reeva']);
    

    $date_inf=date('Y-m-d H:i:s');

    foreach ($_POST['infraction']  as $valeur ): $infraction.=$valeur.'|';

        $ajoutinfraction=infractiontc::insert_infraction($valeur,$id_Tc,$date_inf,$_SESSION['IDUSER']);
    endforeach;

    Req_Contest::addNewReevalumodif($id_Tc,$date_envoi_reev,$date_reev,$fob_reeva,$date_envoi_pl_reev,$agent_reeva,
    $date_validation,$DC_prevision,$agent_audit,$infraction,$observation_reeva,$date_valid_reeva );
    //gestion de l'historique
    $action=MODIFREEVAL;
    Histo($action,$id_Tc);
    $_SESSION['ajout']='ok';
}

if(isset($_POST['envoyer_RPL']))
{
    $id_Tc               =  str_secur($_POST['id_Tc']);
    $montant_dc     = str_secur($_POST['montant_dc']);
    $date_dc           = str_secur($_POST['date_dc']);
    $date_dpod           = str_secur($_POST['date_dpod']);
    $onglet              = 5;
    $infraction    = str_secur($_POST['infraction']);
    //$observation_reeva   = str_secur($_POST['observation_reeva']);
    $date_inf=date('Y-m-d H:i:s');

    foreach ($_POST['infraction']  as $valeur ): $infraction.=$valeur.'|';

        $ajoutinfraction=infractiontc::insert_infraction($valeur,$id_Tc,$date_inf,$_SESSION['IDUSER']);
    endforeach;

    Req_Contest::addNewRPL($id_Tc,$montant_dc,$date_dc,$onglet,$infraction,$date_dpod);
    //gestion de l'historique
    $action=REVAL;
    Histo($action,$id_Tc);

    $_SESSION['ajout']='ok';
}

if(isset($_POST['modifier_RPL']))
{
    $id_Tc               =  str_secur($_POST['id_Tc']);
    $montant_dc     = str_secur($_POST['montant_dc']);
    $date_dc           = str_secur($_POST['date_dc']);
    $infraction    = str_secur($_POST['infraction']);
    //$observation_reeva   = str_secur($_POST['observation_reeva']);
   
    

    $date_inf=date('Y-m-d H:i:s');

    foreach ($_POST['infraction']  as $valeur ): $infraction.=$valeur.'|';

        $ajoutinfraction=infractiontc::insert_infraction($valeur,$id_Tc,$date_inf,$_SESSION['IDUSER']);
    endforeach;

    Req_Contest::addNewRPL_modif($id_Tc,$montant_dc,$date_dc,$onglet,$infraction,$date_dpod);
    //gestion de l'historique
    $action=REVAL;
    Histo($action,$id_Tc);

    $_SESSION['ajout']='ok';
}

if(isset($_POST['envoyer_courier']))
{
    $id_Tc             =  str_secur($_POST['id_Tc']);

     $num_tc             = str_secur($_POST['num_tc']);
   // echo "jhjh"; exit();
    $date_recep_courier          = str_secur($_POST['date_recep_courier']);
    $num_courier          = str_secur($_POST['num_courier']);
    $agent_recption_courier            = str_secur($_POST['agent_recption_courier']);
    $onglet              = 3;
    req_contest::addNewCourier($id_Tc, $date_recep_courier, $num_courier, $agent_recption_courier,$onglet);

    $lepath='./assets/courriers_scannes/';
            // Constantes
          define('TARGET',$lepath);    // Repertoire cible
          // Tableaux de donnees
          $tabExt = array('jpg','gif','png','jpeg','tif','pdf');    // Extensions autorisees
          $infosImg = array('jpg','gif','png','jpeg','tif','pdf');
          
          // Variables
          $extension = '';
          $message = '';
          $nomImage = '';
          // On verifie si le champ est rempli
          if(!empty($_FILES['file']['name']) )
          {           
              // Recuperation de l'extension du fichier
              $extension  = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

              // On verifie l'extension du fichier
              if(in_array(strtolower($extension),$tabExt))
              {
                        
                // Parcours du tableau d'erreurs
                if(isset($_FILES['file']['error']) && UPLOAD_ERR_OK === $_FILES['file']['error'])
                {
                  // On renomme le fichier
                  $nomImage = $num_tc.'_'.md5(uniqid()) .'.'. $extension;

                  // Si c'est OK, on teste l'upload
                  if(move_uploaded_file($_FILES['file']['tmp_name'], TARGET.$nomImage))
                  {
                    $message = 'Upload réussi !';
                  }
                  else
                  {
                    // Sinon on affiche une erreur systeme
                    $message = 'Problème lors de l\'upload !';
                  }
                }
                else
                {
                  $message = 'Une erreur interne a empêché l\'uplaod de l\'image';
                }
              
              
              }
           
              else
              {
              // Sinon on affiche une erreur pour l'extension
              $message = 'L\'extension du fichier est incorrecte !';
              }

              $moncourrier=$nomImage;
            
          }
          $typefichier="COURRIER DE CONTESTATION";
          $fichiercourrier=dossier_requisition::enreg_doc($num_tc,$moncourrier,$typefichier);
        

    $_SESSION['ajout']='ok';
    //gestion de l'historique
    $action=COURRIER;
    Histo($action,$id_Tc);
}

if(isset($_POST['modifier_courier']))
{
    $id_Tc             =  str_secur($_POST['id_Tc']);
    $num_tc             =  str_secur($_POST['num_tc']);
    $date_recep_courier          = str_secur($_POST['date_recep_courier']);
    $num_courier          = str_secur($_POST['num_courier']);
    $agent_recption_courier            = str_secur($_POST['agent_recption_courier']);
   // $dc_prevision            = str_secur($_POST['dc_prevision']);
    req_contest::addNewCouriermodif($id_Tc, $date_recep_courier, $num_courier, $agent_recption_courier);
    $_SESSION['ajout']='ok';
    //gestion de l'historique
    $action=MODIFCOURRIER;
    Histo($action,$id_Tc);

    $lepath='./assets/courriers_scannes/';
    // Constantes
  define('TARGET',$lepath);    // Repertoire cible
  // Tableaux de donnees
  $tabExt = array('jpg','gif','png','jpeg','tif','pdf');    // Extensions autorisees
  $infosImg = array('jpg','gif','png','jpeg','tif','pdf');
  
  // Variables
  $extension = '';
  $message = '';
  $nomImage = '';
  // On verifie si le champ est rempli
  if(!empty($_FILES['file']['name']) )
  {           
      // Recuperation de l'extension du fichier
      $extension  = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

      // On verifie l'extension du fichier
      if(in_array(strtolower($extension),$tabExt))
      {
                
        // Parcours du tableau d'erreurs
        if(isset($_FILES['file']['error']) && UPLOAD_ERR_OK === $_FILES['file']['error'])
        {
          // On renomme le fichier
          $nomImage = $num_tc.'_'.md5(uniqid()) .'.'. $extension;

          // Si c'est OK, on teste l'upload
          if(move_uploaded_file($_FILES['file']['tmp_name'], TARGET.$nomImage))
          {
            $message = 'Upload réussi !';
          }
          else
          {
            // Sinon on affiche une erreur systeme
            $message = 'Problème lors de l\'upload !';
          }
        }
        else
        {
          $message = 'Une erreur interne a empêché l\'uplaod de l\'image';
        }
      
      
      }
   
      else
      {
      // Sinon on affiche une erreur pour l'extension
      $message = 'L\'extension du fichier est incorrecte !';
      }

      $moncourrier=$nomImage;
    
  }
  $typefichier="COURRIER DE CONTESTATION";
  $fichiercourrier=dossier_requisition::enreg_doc($num_tc,$moncourrier,$typefichier);
}


if(isset($_POST['envoyer_contest']))
{
    $id_Tc                        =  str_secur($_POST['id_Tc']); 
    $date_traite_contest          = str_secur($_POST['date_traite_contest']);
    $fob_apres_contest            = str_secur($_POST['fob_apres_contest']);
    $decision                     = str_secur($_POST['decision']);
    $Motif_contest                = str_secur($_POST['Motif_contest']);
    $onglet                       = 4;
    $date_envoi_pl_contes         = str_secur($_POST['date_envoi_pl_contes']);
    $agent_contest                = str_secur($_POST['agent_contest']);
    $adresse_mail                 = str_secur($_POST['adresse_mail']);
    $date_recep_recours           = str_secur($_POST['date_recep_recours']);
    $dc_prevision                 = str_secur($_POST['dc_prevision']);
    $Observation_contest          = str_secur($_POST['Observation_contest']);
    $date_valid_contest          = str_secur($_POST['date_valid_contest']);
    
    // recuperation des variable pdf

    $pdf_nom_imp           =str_secur($_POST['pdf_nom_imp']);
    $pdf_rfcv              =str_secur($_POST['pdf_rfcv']);
    $pdf_rfcv_date         =str_secur($_POST['pdf_rfcv_date']);
    $pdf_fdi               =str_secur($_POST['pdf_fdi']);
    $pdf_date_fdi          =str_secur($_POST['pdf_date_fdi']);

    //intialisation de la dtae courrier
   // setlocale(LC_TIME, 'fr_FR', "French"); 
   // date_default_timezone_set('Africa/Abidjan');
    $pdf_courrier= utf8_encode(strftime('%A %d %B %Y, %H:%M',time()));
    echo $id_Tc, $date_traite_contest, $fob_apres_contest, $decision, $Motif_contest, $onglet, $date_envoi_pl_contes, $agent_contest,$adresse_mail,$date_recep_recours,$dc_prevision,$date_valid_contest,$Observation_contest;
   
    $req=Req_contest::addNewContest($id_Tc, $date_traite_contest, $fob_apres_contest, $decision, $Motif_contest, $onglet, $date_envoi_pl_contes, $agent_contest,$adresse_mail,$date_recep_recours,$dc_prevision,$date_valid_contest,$Observation_contest);
    // var_dump($req); debug_zval_dump($req);
    //exit();
    $_SESSION['ajout']='ok';
    //gestion de l'historique
    $action=CONTEST;
    Histo($action,$id_Tc);

   if($decision =='Accord total'){$contenupdf= accordtotal($pdf_nom_imp,$pdf_rfcv,$pdf_courrier);}
   elseif($decision =='RVS'){ $contenupdf=accordpartiel($pdf_nom_imp,$pdf_rfcv,$pdf_courrier);}
   elseif($decision =='Refus Total'){ $contenupdf=rejet($pdf_nom_imp,$pdf_rfcv,$pdf_courrier,$pdf_fdi,$pdf_fdi_date); }
   else{ $contenupdf="";}
 
    require_once("_functions/email.php");
    require_once 'assets/vendor/autoload.php';

    // use Spipu\Html2Pdf\Html2Pdf;
    
    $html2pdf = new Spipu\Html2Pdf\Html2Pdf();

    $refpdf = $pdf_rfcv.'_'.time();
    // $html2pdf -> Html2Pdf('P', 'A4', 'fr');
   // $rejet=file_get_contents('controllers/pdf_accordtotal.php');
    // echo $rejet; exit();
    

    $html = '
        <page>
            <page_header>
                '.file_get_contents('views/pdf/entetepdf.php').'
            </page_header>
            <br />
            '.$contenupdf.'

            <page_footer>'.
            file_get_contents('views/pdf/footerpdf.php').'
            </page_footer>
        </page>

            ';

    $html2pdf->writeHTML($html);
    $nom=$refpdf.'.pdf';
    $lefichier='C:/Program Files (x86)/EasyPHP-DevServer-14.1VC9/data/localweb/requisition_reeval/assets/courriers/'.$nom;
    $html2pdf->output($lefichier,'F');
    
    send_mail_soumission($adresse_mail,$lefichier);

    header("Location:liste_tc");
  
   

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
else{      $all = req_contest::getAllTcinspection();  }

  if(isset($_POST['envoyerINSP'])){

    $id_Tc                    = str_secur($_POST['id_Tc']);
    $num_tc                    = str_secur($_POST['num_tc']);
    $date_depot_visit         = str_secur($_POST['date_rapport']);
    $dateEnvReev              = str_secur($_POST['dateEnvReev']);
    $conformite               = str_secur($_POST['conformite']);
    $vav                      = str_secur($_POST['vav']);
    $onglet                   = 1;
    $nom_off_visiteur         = str_secur($_POST['nom_off_visiteur']);
      $nom_op_visite            = str_secur($_POST['nom_op_visite']);
     $infraction               = str_secur($_POST['infraction']);
   $marchandise_add          = str_secur($_POST['marchandise_add']);

    $date_inf=date('Y-m-d H:i:s'); 
    
    foreach ($_POST['infraction']  as $valeur ): $infraction.=$valeur.'|';
    
        $ajoutinfraction=infractiontc::insert_infraction($valeur,$id_Tc,$date_inf,$_SESSION['IDUSER']);
    endforeach;
    //echo $infraction; echo '@@.'.$infraction1 ; 
    //exit();
   
        $respons = Req_Contest::addNewInspection($num_tc,$conformite, $date_depot_visit,$dateEnvReev, $onglet,$vav,$nom_op_visite, $nom_off_visiteur,$infraction,$marchandise_add);


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

if(isset($_POST['envoyerRDV'])){

    $id_Tc              = str_secur($_POST['id_Tc']);
    $num_tc             = str_secur($_POST['num_tc']);
    $date_tc            = str_secur($_POST['date_tc']);
    $date_requi         = str_secur($_POST['date_requi']);
    $code_declara       = str_secur($_POST['code_declara']);
    $code_imp           = str_secur($_POST['code_imp']);
    $num_declaration    = str_secur($_POST['num_declara']);
    $date_declara       = str_secur($_POST['date_delara']);
    $marchandise        = str_secur($_POST['marchandise']);
    $date_visite       = str_secur($_POST['date_visite']);
    $lieu_visite        = str_secur($_POST['lieu_visite']);
    $Date_cotation      = str_secur($_POST['Date_cotation']);
    $agent_visit        = str_secur($_POST['agent_visiteur']);
    $date_Dvisite       = str_secur($_POST['date_Dvisite']);
    $date_Fvisite      = str_secur($_POST['date_Fvisite']);
    $type_visite        = str_secur($_POST['type_visite']);
    $onglet             = 9;
    $nom_agent_PL   = str_secur($_POST['nom_agent_PL']);
    $instruction   = str_secur($_POST['instru_chef']);

        $respons = Req_Contest::addNewInspectionRDV($num_tc,$date_tc,$date_requi,$num_declaration, $code_declara, $code_imp,$date_visite,
        $agent_visit,$marchandise, $onglet, $lieu_visite, $type_visite,$Date_cotation, $date_Fvisite, $nom_agent_PL, $date_Dvisite,$instruction);
       
       //Pour historiser la cotation
       $commetaire="";
       $cota_auto=str_secur($_POST['cotation_agent']);
       $cota_cs=$agent_visit ;
        $cotation=historique_cotation::ajouthisto($num_tc,$cota_auto,$cota_cs,$commentaire);

       

        //MISE A JOUR COTATION AGENT
        
        $cotation=agent::getActifCotation(substr($agent_visit,0,7));
      
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

if(isset($_POST['ModifierRDV'])){

    $id_Tc              = str_secur($_POST['id_Tc']);
    $num_tc              = str_secur($_POST['num_tc']);
    $date_tc              = str_secur($_POST['date_tc']);
    $date_requi          = str_secur($_POST['date_requi']);
    $code_declara       = str_secur($_POST['code_declara']);
    $code_imp           = str_secur($_POST['code_imp']);
    $num_declaration    = str_secur($_POST['num_declara']);
    $date_declara       = str_secur($_POST['date_delara']);
    $marchandise         = str_secur($_POST['marchandise']);
     $date_visite       = str_secur($_POST['date_visite']);
    $lieu_visite        = str_secur($_POST['lieu_visite']);
    $Date_cotation      = str_secur($_POST['Date_cotation']);
    $agent_visit        = str_secur($_POST['agent_visiteur']);
    $date_Dvisite       = str_secur($_POST['date_Dvisite']);
    $date_Fvisite      = str_secur($_POST['date_Fvisite']);
    $type_visite        = str_secur($_POST['type_visite']);
    $nom_agent_PL   = str_secur($_POST['nom_agent_PL']);
    $instruction   = str_secur($_POST['instru_chef']);

    

        $respons = Req_Contest::addNewInspectionRDV_Modif($num_tc,$date_tc,$date_requi,$num_declaration, $code_declara, $code_imp,$date_visite,
        $agent_visit,$marchandise, $lieu_visite, $type_visite,$Date_cotation, $date_Fvisite, $nom_agent_PL, $date_Dvisite,$instruction);

        $commentaire="Modification RDV";
        $cota_auto=str_secur($_POST['cotation_agent']);
        $cota_cs=$agent_visit ;
         $cotation=historique_cotation::ajouthisto($num_tc,$cota_auto,$cota_cs,$commentaire);
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
    $date_tc              = str_secur($_POST['date_tc']);
    $date_requi              = str_secur($_POST['date_requi']);
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
    $date_inf=date('Y-m-d H:i:s');

    //suppression de l'existant
    $suppr=infractiontc::delete_inf($id_Tc);

    //recuperer les infractions
    foreach ($_POST['infraction']  as $valeur ): $infraction.=$valeur.'|'; 

    $ajoutinfraction=infractiontc::insert_infraction($valeur,$id_Tc,$date_inf,$_SESSION['IDUSER']);    
    endforeach;
   // echo $infraction; echo '@@.'.$infraction1 ; 
   // exit();

 $respons = Req_Contest::addNewInspectionmodif($num_tc,$date_tc,$date_requi,$num_declaration, $code_declara, $code_imp,$date_visite,
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


if(isset($_POST['retourne'])){


    
    $id_Tc = str_secur($_POST['id_Tc']);
   echo $num_tc = str_secur($_POST['num_tc']);
   echo $commentaire = str_secur($_POST['comment']);
    $statut=2;
  //  exit();
    $traitement=transmission::traiterinspect($num_tc,$statut,$commentaire);
    //historique a ajouter


}

if(isset($_POST['conforme'])){
    $id_Tc = str_secur($_POST['id_Tc']);
    $num_tc = str_secur($_POST['num_tc']);
    $commentaire = str_secur($_POST['comment']);
    $marchandise = str_secur($_POST['marchandise']);
    $conformite="Conforme";
    $statut=3;
    $traitement=transmission::traiterinspect($num_tc,$statut,$commentaire);

    $conformite=Req_Contest::addConformite($num_tc,$conformite,$marchandise);
     //decrementer la charger de travail
     $champ="agent_visit";
     $decret=agent::getdecrementeCotation(matriculeagent($champ,$num_tc));
    // echo $num_tc;
    // statut de l'action
    $_SESSION['ajout']='ok';

}

if(isset($_POST['nonconforme'])){
  
   

    $id_Tc                    = str_secur($_POST['id_Tc']);
    $num_tc                   = str_secur($_POST['num_tc']);
    $date_depot_visit         = str_secur($_POST['date_rapport']);
    $dateEnvReev              = str_secur($_POST['dateEnvReev']);
    $conformite               = str_secur($_POST['conformite']);
    $vav                      = str_secur($_POST['vav']);
    $onglet                   = 1;
    $nom_off_visiteur         = str_secur($_POST['nom_off_visiteur']);
    $nom_op_visite            = str_secur($_POST['nom_op_visite']);
    $infraction               = str_secur($_POST['infraction']);
   $marchandise_add           = str_secur($_POST['marchandise_add']);

    $date_inf=date('Y-m-d H:i:s'); 
    
    foreach ($_POST['infraction']  as $valeur ): $infraction.=$valeur.'|';
         $ajoutinfraction=infractiontc::insert_infraction($valeur,$id_Tc,$date_inf,$_SESSION['IDUSER']);
    endforeach;
    
   
        $respons = Req_Contest::addNewInspection($num_tc,$conformite, $date_depot_visit,$dateEnvReev, $onglet,$vav,$nom_op_visite, $nom_off_visiteur,$infraction,$marchandise_add);


    $statut=3;
    $commentaire = "transmis pour reevaluer";
    $traitement=transmission::traiterinspect($num_tc,$statut,$commentaire);

        // Cotation reevaluation
        //MISE A JOUR COTATION AGENT
  
        //@@ getCotation($service)
        foreach (agt_cotation(REEVAL) as $index => $lagent) :
             $lagent['MATRICULE_AG'];  $lagent['NOM_AG'];
        endforeach;    

        $reeval=$lagent['MATRICULE_AG'].' '. $lagent['NOM_AG'];
   

        $respons = Req_Contest::cotationreeval($num_tc,$reeval);

        // incrementer la charge de travail
        $decret=agent::getActifCotation($lagent['MATRICULE_AG']);

        //decrementer la charger de travail
       $champ="agent_visit";
        $decret=agent::getdecrementeCotation(matriculeagent($champ,$num_tc));
       // echo $num_tc;

        //   exit();
        $statut=1;
        // $commentaire="Soumis pour reevaluation";


    $latransmission=transmission::traiterreeval_AG($num_tc,$statut,$commentaire);


        $lepath='./assets/courriers_scannes/';
        // Constantes
    define('TARGET',$lepath);    // Repertoire cible
    // Tableaux de donnees
    $tabExt = array('jpg','gif','png','jpeg','tif','pdf');    // Extensions autorisees
    $infosImg = array('jpg','gif','png','jpeg','tif','pdf');
    
    // Variables
    $extension = '';
    $message = '';
    $nomImage = '';
    // On verifie si le champ est rempli
    if(!empty($_FILES['file']['name']) )
    {           
        // Recuperation de l'extension du fichier
        $extension  = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

        // On verifie l'extension du fichier
        if(in_array(strtolower($extension),$tabExt))
        {
                    
            // Parcours du tableau d'erreurs
            if(isset($_FILES['file']['error']) && UPLOAD_ERR_OK === $_FILES['file']['error'])
            {
            // On renomme le fichier
            $nomImage = $num_tc.'_'.md5(uniqid()) .'.'. $extension;

            // Si c'est OK, on teste l'upload
            if(move_uploaded_file($_FILES['file']['tmp_name'], TARGET.$nomImage))
            {
                $message = 'Upload réussi !';
            }
            else
            {
                // Sinon on affiche une erreur systeme
                $message = 'Problème lors de l\'upload !';
            }
            }
            else
            {
            $message = 'Une erreur interne a empêché l\'uplaod de l\'image';
            }
        
        
        }
    
        else
        {
        // Sinon on affiche une erreur pour l'extension
        $message = 'L\'extension du fichier est incorrecte !';
        }

        $moncourrier=$nomImage;
        
    }
    $typefichier="FICHIER INCIDENT ";
    $fichiercourrier=dossier_requisition::enreg_doc($num_tc,$moncourrier,$typefichier);

  //afficher le staut de l'action
    $_SESSION['ajout']='ok';

}

if(isset($_POST['retourne_sd'])){


    
    $id_Tc = str_secur($_POST['id_Tc']);
    $num_tc = str_secur($_POST['num_tc']);
    $commentaire = str_secur($_POST['comment']);
    $statut=1;
    $etat=1;
  //  exit();
    $traitement=transmission::traiterinspectretourSD($num_tc,$statut,$commentaire,$etat);
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

    $conformite=Req_Contest::addConformite($num_tc,$conformite,$marchandise);
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

?>