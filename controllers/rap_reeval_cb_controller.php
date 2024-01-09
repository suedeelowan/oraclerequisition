
<?php   
session_start(); 



if(isset($_POST['Deconnexion']))
{
    session_destroy();
    $_SESSION['USERNAME']="";
    header("Location:login");
}

if(isset($_POST['envoyer_reev'])){
   
     $id_Tc               =  str_secur($_POST['letc_id']);
    $num_tc             =  str_secur($_POST['num_tc']);
    // exit();
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
    $infraction          = str_secur($_POST['infraction']);
    $observation_reeva   = str_secur($_POST['observation_reeva']);
    $date_valid_reeva    = str_secur($_POST['date_valid_reeva']);
    

    $date_inf=date('Y-m-d H:i:s');

    foreach ($_POST['infraction']  as $valeur ): $infraction.=$valeur.'|';

        $ajoutinfraction=infractiontc::insert_infraction($valeur,$id_Tc,$date_inf,$_SESSION['IDUSER']);
    endforeach;

    //@@ Req_Contest::addNewReevalu($id_Tc,$date_envoi_reev,$date_reev,$fob_reeva,$onglet,$date_envoi_pl_reev,$agent_reeva,$date_validation,$DC_prevision,$agent_audit,$infraction,$observation_reeva,$date_valid_reeva);
    //gestion de l'historique
    $action=REVAL;
    Histo($action,$id_Tc);
    
    //$respons = Req_Contest::addFicheInspection($num_tc,$date_declara,$date_visite,$agent_visit,$date_depot_visit,$onglet,$lieu_visite,$type_visite,$Date_cotation,$date_Dvisite,$date_Fvisite);


   //TRAITEMENT POUR LA TABLE ARTICLE  
    $numeroletc=$_POST['num_tc'];
    $la_tc=$_POST['num_tc'];
    $latche=$_POST['ok'];
   
    foreach ($latche as $valeur) {
		  $sh=$_POST['sh'.$valeur];
		  $origine=$_POST['origine'.$valeur];
		  $quantite=$_POST['quantite'.$valeur];
		  $unite=$_POST['unite'.$valeur];
		  $article=$_POST['nd'];
		  $la_tc=$_POST['numtc'.$valeur];
		  $fobunit=$_POST['fobunit'.$valeur];
		  $fobtotal=$_POST['fobtotal'.$valeur];
		  $dc=$_POST['dc'.$valeur];
		  $mrd=$_POST['mrd'.$valeur];

          $evidence=$_POST['evidence'.$valeur];

          $statut=$_POST['ario'.$valeur];
          
          
          
          $audit=article:: addInspectionUpdate($sh,$origine,$quantite,$unite,$valeur,$statut);
          $req=article:: addAgReeval($fobunit,$fobtotal,$mrd,$dc,$valeur,$evidence);

    }
   

    $num_tt=$la_tc;

  // Variable pour recuperer les donnees pour de nouveau article 
    // $newarticle=$_POST['updatearticle'];

    // foreach ($newarticle as $valeur) {


    //     $fobunit=$_POST['aj_fobunit'.$valeur];
    //     $fobtotal=$_POST['aj_fobtotal'.$valeur];
    //     $dc=$_POST['aj_dc'.$valeur];
    //     $mrd=$_POST['aj_mdr'.$valeur];
      
    //     $new_article=article_new::addAgReeval($fobunit,$fobtotal,$mrd,$dc,$valeur);
       
    // }

        //gestiion des nouveaux articles existant

            // supprimer l'existant des article dans la table 
            $del_article=article_new::del_article($num_tt);

            $newarticle=$_POST['updatearticle'];

            foreach ($newarticle as $valeur) {

                $article_add=$_POST['aj_article'.$valeur];
                $sh_add=$_POST['aj_sh'.$valeur];
                $origine_add=$_POST['aj_origine'.$valeur];
                $aquantite_add=$_POST['aj_quantite'.$valeur];
                $unite_add=$_POST['aj_unite'.$valeur];
                $fobunit_add=$_POST['aj_fobunit'.$valeur];
                $fobtotal_add=$_POST['aj_fobtt'.$valeur];
                $mrd_add=$_POST['aj_mrd'.$valeur];
                $dc_add=$_POST['aj_dc'.$valeur];
                $evidence_add=$_POST['aj_evidence'.$valeur];
              


                $new_article=article_new::addArticleReeval($num_tt,$article_add,$sh_add,$origine_add,$aquantite_add,$unite_add,$fobunit_add,$fobtotal_add,$mrd_add,$dc_add,$evidence_add);
                // $new_article=article_new::addArticle($num_tt,$article_add,$sh_add,$origine_add,$aquantite_add,$unite_add);
                        // addArticleReeval($num_tt,$article_add,$sh_add,$origine_add,$aquantite_add,$unite_add,$fobunit_add,$fobtotal_add,$mrd_add,$dc_add,$evidence_add);
            
            }

            //gestion des articles nouveau
            $newarticle=$_POST['addarticle'];

            foreach ($newarticle as $valeur) {

                $article_add=$_POST['aj_article'.$valeur];
                $sh_add=$_POST['aj_sh'.$valeur];
                $origine_add=$_POST['aj_origine'.$valeur];
                $aquantite_add=$_POST['aj_quantite'.$valeur];
                $unite_add=$_POST['aj_unite'.$valeur];
                $fobunit_add=$_POST['aj_fobunit'.$valeur];
                $fobtotal_add=$_POST['aj_fobtt'.$valeur];
                $mrd_add=$_POST['aj_mrd'.$valeur];
                $dc_add=$_POST['aj_dc'.$valeur];
                $evidence_add=$_POST['aj_evidence'.$valeur];
               
                

                $new_article=article_new::addArticleReeval($num_tt,$article_add,$sh_add,$origine_add,$aquantite_add,$unite_add,$fobunit_add,$fobtotal_add,$mrd_add,$dc_add,$evidence_add);
            
            }
   

   
        // requete pour les article declarer et trouve pour le pdf
        $infotc=article::update_tc_trouve($num_tc);
        //requete pour les article non trouve mais declarer pour le pdf
        $info_non_tc=article::update_tc_nontrouve($num_tc);

        //requete pour les article non trouve mais declarer pour le pdf
        $article_new=article_new::getUnique_tc($num_tc);

            // Recuperer les informations pour 
         foreach (premeirelignepdf($num_tc) as $index => $monpdf):  endforeach;


   //Pour le PDF

   $req_cont=ctn_table::pdf_conteneur($num_tc);

  //echo $req_cont['NUM_TT'];
 //  foreach($req_cont as $index => $conteneur) : echo '@@'.$conteneur['NBRE'].'--'.$conteneur['NUM_TT']; endforeach;
   //exit();
    ob_start();
    //include('../_functions/functions_pdf.php');
    ?>
   

    <style type="text/css">
        .tdform td
        {

            font-size:    12px;  
            vertical-align: middle;
            margin: 5px;
        }
        .majform td {

        border-bottom: solid 1px #000000;
            border-right: solid 1px #000000;
        }
        .table.tableau1 td
        {

            font-size:    20pt;  
        }
        .table.tableau1  td
        {
            border-spacing: 0px;
            
        }   
            table.morpion
        {
            border:    dashed 1px #444444;
        }
        
        table.morpion td
        {
            font-size:    12pt;
            font-weight:  bold;
            border:       solid 1px #000000;
            padding:      1px;
            text-align:   center;
            width:        25px;
        }
        
        table.morpion td.j1 { color: #0A0; }
        table.morpion td.j2 { color: #A00; }
    
   
    </style>

    <page style="font-size: 10pt " backtop="2mm" backbottom="5mm" backleft="5mm" backright="5mm" >
        <page_footer>
            <table style="width: 275mm; border: solid 1px black;">
                <tr>
                    <td style="text-align: left;    width: 50mm"><b>TT</b> : <?php echo $num_tc; ?></td>
                    <td style="text-align: center;    width: 100mm">G&eacute;neré le <?php echo date('d-m-Y H:i',time());?></td>
                    <td style="text-align: right;    width: 120mm"> page [[page_cu]]/[[page_nb]] </td>
                </tr>
            </table>
        </page_footer>
        <!-- <page_header> -->
           <?php echo file_get_contents('views/pdf/entetepremiereligne.php'); $black=''; ?>
        <!-- </page_header> -->
        <?php //echo file_get_contents('views/pdf/fichierpermierligne.php'); ?>
        <!-- <br/><br/><br/><br/><br/><br/><br/><br/><br/> -->

        <table style=" border: 2px solid #000000; " class="tableau1" cellspacing="0">
            <tr>
                <td colspan="4" style="width: 275mm; border-bottom: solid 1px #000000; font-size: 20px; color: #000; font-weight: bold; text-align: center; background-color: #DCDCDC;">FICHE DE DESCRIPTION ET DE REEVALUATION PRODUITS</td>
               
            </tr>
            <tr class="tdform">
                <td colspan="2" style="border-bottom: solid 1px #000000; border-right: solid 1px #000000; text-align: left;  vertical-align: top; height:15mm; width:90 mm;">
            
                <b>AGENTS VISITEURS :</b> <?php echo $monpdf['agent_visit']; ?>
                </td>
                <td colspan="2" style="border-bottom: solid 1px #000000; text-align: left;   vertical-align: top; width:87 mm; ">
            
                <b>CONFORMITE / NON CONFORMITE:</b> <br/>
                <?php echo $monpdf['observation_reeva']; ?>  <br/>
                
                                  
                                      
                </td>
                
            </tr>
            <tr>
                <td colspan="4" style="width: 275mm; border: solid 1px #000000;  background-color: #cdcdcd; color: #000; font-weight: bold; text-align:center; font-size: 20px;">INFORMATIONS GENERALES</td>
               
            </tr>
            <tr class="tdform" >
                <td colspan="2" cellspacing='0'  style="border-bottom: solid 1px #000000; border-right: solid 1px #000000; text-align: left;  height: 5mm;" ><b>DATE :</b> 
                    <?php if($monpdf['date_Dvisite']==$monpdf['date_Fvisite']) { echo $monpdf['date_visite'];}
                        else {echo "Du ".$monpdf['date_Dvisite']." au ".$monpdf['date_Fvisite'];
                        } ?>
                        
                </td>
            
                <td style="border-bottom: solid 1px #000000; border-right: solid 1px #000000; text-align: left;  vertical-align: top;" ><b>Heure début :</b> 10H00</td>
                <td style="border-bottom: solid 1px #000000; border-right: solid 1px #000000; text-align: left; vertical-align: top; " ><b>Heure Fin :</b> 12H30  </td>
            </tr>
            <tr cellspacing='0' class="tdform">
                <td colspan="2" style="border-bottom: solid 1px #000000; border-right: solid 1px #000000; text-align: left; width: 45mm; vertical-align: top; " ><b>N&deg; TT :</b> <?php echo $monpdf['num_tc']; ?></td>
                <!-- <td>Ligne 4, Colonne 2</td> -->
                <td rowspan="2" style="border-bottom: solid 1px #000000; border-right: solid 1px #000000; vertical-align: top; width: 25mm;"><b>Type de visite :</b> <?php echo $monpdf['type_visite']; if($monpdf['vav']=='oui'){ echo ' - VAV';} ?></td>
                <td style="border-bottom: solid 1px #000000; border-right: solid 1px #000000; width: 45mm;"><b>DECLARANT :</b> <?php echo $monpdf['nom_declara']; ?></td>
            </tr>
            <tr class="tdform">
                <td style="border-bottom: solid 1px #000000; border-right: solid 1px #000000; width: 40mm;  vertical-align: top;" ><b>N° DECLARATION :</b> <?php echo $monpdf['num_declaration']; ?></td>
                <td style="border-bottom: solid 1px #000000; border-right: solid 1px #000000; width: 30mm; vertical-align: top;"><b>BUREAU : </b><p><?php echo $monpdf['Bureau_charge']; ?></p></td>
                <td style="border-bottom: solid 1px #000000; border-right: solid 1px #000000; width: 45mm;  vertical-align: top;"  ><b>IMPORTATEUR:</b> <?php echo $monpdf['nom_imp']; ?></td>
                <!-- <td>Ligne 5, Colonne 4</td> -->
            </tr>
            <tr class="tdform">
                <td style="border-bottom: solid 1px #000000; border-right: solid 1px #000000;"><b>CONTENEURS</b></td>
                <td style="border-bottom: solid 1px #000000; border-right: solid 1px #000000;;"><b>LPLOMBS</b></td>
                <td style="border-bottom: solid 1px #000000; border-right: solid 1px #000000;;"><b>CONTENEURS</b></td>
                <td style="border-bottom: solid 1px #000000; border-right: solid 1px #000000;"><b>PLOMBS</b></td>
            </tr>
            
            <?php 
                $yz=1; $baf=1; $letr=1;
                $trvar='<tr class="tdform" >';
                foreach ($req_cont as $columnName => $conteneur) :

                     if($letr ==1) {  echo $trvar; }
                
                if($baf ==1){
               ?>
                
                <td style="border-bottom: solid 1px #000000; border-right: solid 1px #000000;"><?php echo $conteneur['NUM_CTN'] ;?></td>
                <td style="border-bottom: solid 1px #000000; border-right: solid 1px #000000;"><?php echo $conteneur['NUM_PLOMB'] ;?></td>
              
            <?php }else{
                ?>
                <td style="border-bottom: solid 1px #000000; border-right: solid 1px #000000;"><?php echo $conteneur['NUM_CTN'] ;?></td>
                <td style="border-bottom: solid 1px #000000; border-right: solid 1px #000000;"><?php echo $conteneur['NUM_PLOMB'] ;?></td>
                <?php
                $baf=0; }
            
            if($yz>=2){ echo '</tr><tr class="tdform">'; $yz=0;
                            }?>
                
                
            <?php  $yz++; $baf++; $letr++; endforeach;  ?></tr>
           
            
            
        </table>
     </page>
    <page pageset="old">
        <table border="1" cellspacing="0" >
                        
                        <tr>
                            <td colspan="19"  style="text-align: center; height: 8mm; background-color: #a9c2b2; width: 275mm; font-weight: bold; ">INFORMATIONS SPECIFIQUES</td>
                            
                        </tr>
                        <tr>
                            <td colspan="19" style="text-align: center; height: 8mm; font-weight: bold; background-color: #dcdcdc; width: 275mm;">DEVISE : <?php echo $monpdf['DEVISE'].' ('.$monpdf['TAUX_DEVISE'].')'; ?>*</td>
                            
                        </tr>
                        <tr>
                            <td colspan="1"  style="width: 10mm;" >Article</td>
                            <td  colspan="5" style="width: 45mm;" align="center" >Decsription</td>
                            <td colspan="4" style="width: 45mm; font-weight: bold;" align="center" >DECLARE</td>
                            
                            <td colspan="9"style="width: 55mm; font-weight: bold;" align="center"  >RECONNU</td>
                            
                        </tr>
                        <tr style="font-size: 11px; padding: 0px;" >
                            <td >Arti</td>
                            <td colspan="3">desc </td>
                            <td>CODE SH</td>
                            <td>ORIGINE</td>
                            <td>QUANTITE </td>
                            <td>UNITE </td>
                            <td >FOB/<br/>UNIT</td>
                            <td>TOTAL FOB</td>
                            <td>CODE SH</td>
                            <td>ORIGINE </td>
                            <td>QUANITE </td>
                            <td>UNITE </td>
                            <td>FOB/UNIT</td>
                            <td>TOTAL FOB</td>
                            <td>PRD/MRD</td>
                           
                        </tr>
                        <tr>
                            <td colspan="19"  style="text-align: center; height: 8mm; background-color: #a9c2b2; font-weight: bold;">DECLARE SUR LA FACTURE ET TROUVE</td>
                            
                        </tr>
                        
                        
                                         <?php $i=0; $leFobTotal=0;  foreach ($infotc as $index => $tcinfo): $i++; ?>
                        <tr style="font-size: 10px;  padding: 1px; margin:1px;">
                            <td align="center" style="width: 3mm;"><?php echo $i; ?></td>
                            <td colspan="3" style="width: 35mm; padding: 2mm 1mm 2mm 1mm;"><?php echo $tcinfo['LIBELLE_COM']; ?></td>
                            <td> <?php echo $tcinfo['SH_TROUVE']; ?>  </td>
                            <td align="center"><?php echo $tcinfo['ORIGINE']; ?></td>
                            <td><?php echo $tcinfo['QTE_TROUVE']; ?></td>
                            <td align="center"><?php echo $tcinfo['UNITE_TROUVE']; ?> </td>
                            <td><?php echo intval($tcinfo['FOB_TROUVE_CFA']/$tcinfo['QTE_TROUVE']) ; ?></td>
                            <td><?php echo $tcinfo['FOB_TROUVE_CFA']; ?></td>
                            <td><?php echo $tcinfo['ADD_CODE_SH']; ?></td>
                            <td><?php echo $tcinfo['ADD_ORIGINE']; ?></td>
                            <td><?php echo $tcinfo['ADD_QUANTITE']; ?></td>
                            <td align="center"><?php echo $tcinfo['ADD_UNITE']; ?> </td>
                            <td><?php echo $tcinfo['ADD_FOB_UNI']; ?></td>
                            <td><?php echo $tcinfo['ADD_FOB_TOTAL']; ?></td>
                            <td align="center"><?php echo $tcinfo['ADD_PRD_MRD']; ?></td>
                            
                        </tr>
                                        <?php  $leFobTotal+=$tcinfo['ADD_FOB_TOTAL']; $FobTotal+=$tcinfo['FOB_TROUVE_CFA'];    endforeach; ?>
                    
                                       
                        <tr>
                            <td colspan="19" style="text-align: center; height: 8mm; background-color: #a9c2b2; font-weight: bold;">DECLARE SUR LA FACTURE ET NON TROUVE</td>
                            
                        </tr>
                                <?php /* $i=0; */  foreach ($info_non_tc as $index => $tcinfo): $i++; ?>
                        <tr style="font-size: 12px;">
                            <td align="center"><?php echo $i; ?></td>
                            <td colspan="5"   style="width: 45mm; padding: 2mm 1mm 2mm 1mm;"><?php echo $tcinfo['LIBELLE_COM']; ?></td>
                            <td> <?php echo $tcinfo['SH_TROUVE']; ?> </td>
                            <td align="center"><?php echo $tcinfo['ORIGINE']; ?></td>
                            <td><?php echo $tcinfo['QTE_TROUVE']; ?></td>
                            <td align="center"><?php echo $tcinfo['UNITE_TROUVE']; ?> </td>
                            <td><?php echo intval($tcinfo['FOB_TROUVE_CFA']/$tcinfo['QTE_TROUVE']) ; ?></td>
                            <td><?php echo $tcinfo['FOB_TROUVE_CFA']; ?></td>
                            <td><?php echo $tcinfo['ADD_CODE_SH']; ?></td>
                            <td><?php echo $tcinfo['ADD_ORIGINE']; ?></td>
                            <td><?php echo $tcinfo['ADD_QUANTITE']; ?></td>
                            <td><?php echo $tcinfo['ADD_UNITE']; ?> </td>
                            <td><?php echo $tcinfo['ADD_FOB_UNI']; ?></td>
                            <td><?php echo $tcinfo['ADD_FOB_TOTAL']; ?></td>
                            <td align="center"><?php echo $tcinfo['ADD_PRD_MRD']; ?></td>
                        </tr>
                                  <?php  endforeach; ?>
                         
                        <tr>
                       
                            <td colspan="19"  style="text-align: center; height: 8mm; background-color: #b8ecb8 ; font-weight: bold;">NON DECLARE SUR LA FACTURE ET TROUVE</td>
                            
                        </tr>
                                 <?php /* $i=0; */ foreach($article_new as $index=> $larticle): $i++; ?>
                        <tr style="font-size: 12px; padding: 5px;">
                            <td align="center"><?php echo $i; ?></td>
                            <td colspan="5" style="width: 45mm; padding: 2mm 1mm 2mm 1mm;"><?php echo $larticle['TR_ARTICLE']; ?></td>
                            <td><?php echo $larticle['TR_CODE_SH']; ?></td>
                            <td><?php echo $larticle['TR_ORIGINE']; ?></td>
                            <td><?php echo $larticle['ADD_CODE_SH']; ?></td>
                            <td align="center"><?php echo $larticle['ADD_ORIGINE']; ?></td>
                            <td><?php echo $larticle['ADD_QUANTITE']; ?></td>
                            <td><?php echo $larticle['ADD_UNITE']; ?> </td>
                            <td><?php echo $larticle['ADD_FOB_UNI']; ?></td>
                            <td><?php echo $larticle['ADD_FOB_TOTAL']; ?></td>
                            <td><?php echo $larticle['TR_QUANTITE']; ?></td>
                            <td align="center"><?php echo $larticle['TR_UNITE']; ?> </td>
                            <td><?php echo $larticle['TR_FOB_UNI'] ; ?></td>
                            <td><?php echo $larticle['TR_FOB_TOTAL']; ?></td>
                            
                            <td align="center"><?php echo $larticle['TR_PRD_MRD']; ?></td>
                        </tr>
                                <?php $leFobTotal+=$larticle['TR_FOB_TOTAL'];  endforeach; ?>
                        <tr style="font-weight: bold;">
                            
                            <td colspan="6" rowspan="4">--</td>
                            <td colspan="4">TOTAL FOB</td>
                            <td><?php echo $FobTotal; ?></td>
                            <td colspan="5"> </td>
                            <td><?php echo $leFobTotal ;?></td>
                            <td> </td>
                            
                        </tr>
                        <tr  style="font-weight: bold;">
                        
                            <td colspan="4">FRET</td>
                            <td><?php echo $monpdf['FRET'];?></td>
                            <td colspan="5">  </td>
                            <td><?php echo $monpdf['FRET'];?></td>
                            <td> </td>
                            
                        </tr>
                        <tr  style="font-weight: bold;">
                        
                            <td colspan="4">ASSURANCE</td>
                            <td><?php echo $monpdf['ASSURANCE'];?></td>
                            <td colspan="5"></td>
                            <td><?php echo $monpdf['ASSURANCE'];?></td>
                            <td> </td>
                            
                        </tr>
                        <tr  style="font-weight: bold;">
                            
                            <td colspan="4">VALEUR TOTALE</td>
                            <td><?php echo $FobTotal+$monpdf['FRET']+$monpdf['ASSURANCE']; ?> </td>
                            <td colspan="5"></td>
                            <td><?php echo $leFobTotal+$monpdf['FRET']+$monpdf['ASSURANCE']; ?></td>
                            <td> </td>
                            
                        </tr>
                    
                        
        </table>
        <div align="rigth">LE DIRECTEUR &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>

    </page>

    <?php 
        $content = ob_get_clean();
        require_once('assets/html2pdf/vendor/autoload.php');
         require_once('assets/html2pdf/html2pdf.class.php');
     
            $refpdf = $num_tc.'_'.time();
            $nom=$refpdf.'.pdf';
            // C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\darrv\suivi_requisition\assets\reeval
            $lefichier='C:/Program Files (x86)/EasyPHP-DevServer-14.1VC9/data/localweb/darrv/requisition_reeval/assets/reeval/'.$nom;
        try
        {
            $html2pdf = new HTML2PDF("L", "A4", "fr");
        //	$html2pdf->pdf->SetDisplayMode('fullpage');
            $html2pdf->setDefaultFont("Arial");
            $html2pdf->writeHTML($content);
            
            // $html2pdf->Output("C:/Program Files (x86)/EasyPHP-DevServer-14.1VC9/data/localweb/suivi_requisition/assets/reeval/mon_pdf.pdf", 'F');
            // $html2pdf->Output("test.pdf", 'S');
            // $ook='test.pdf';
            
            // $html2pdf->writeHTML($html);
            $html2pdf->pdf->SetDisplayMode('fullpage');
            
            $html2pdf->output($lefichier, 'F');
            
        }
        catch(HTML2PDF_exception $e) {
            echo $e;
            exit;
        }
    
  
  
   
                // gestion du pdf et envoi du mail a la premiere ligne
            // require_once("_functions/email.php");
            // require_once 'assets/vendor/autoload.php';

 
    // send_mail_soumission($adresse_mail,$lefichier);


    //Insertion dans la table transmissionion
    $statut=2;
    $commentaire="Transmis a la premiere ligne";
    

    $latransmission=transmission::traiterreeval_Audit($numeroletc,$statut,$commentaire);

            //exit();

    //gestion de l'historique

        $action=POURCB.$_SESSION['NOM_USER'].' '.$_SESSION['PRENOM_USER'];
        Histo($action,$id_Tc);


      //   window.open(cheminVersPDF, '_blank');

       // exit();

      // redirect('liste_tc');
   echo '<script>';
   echo 'window.open("./assets/reeval/'.$nom.'", "_blank");';
   echo '</script>';

      
 
} 


if(isset($_GET['ident'])){
    // echo "test"; exit();
    $num_tc= str_secur($_GET['ident']);
    $attribut="num_tc='$num_tc' ";
    $response = Req_Contest::getAllrecherche($attribut);
   
    
    // requete pour les article declarer et trouve 
    $infotc=article::update_tc_trouve($num_tc);
    //requete pour les article non trouve mais declarer
    $info_non_tc=article::update_tc_nontrouve($num_tc);

    //requete pour les article non trouve mais declarer
     $article_new=article_new::getUnique_tc($num_tc);

     $allinf =infraction::getAllinf();    
     
}
$allinf =infraction::getAllinf();


?>