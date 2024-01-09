ario
<?php
//ob_start();
//$num_tc
foreach (premeirelignepdf('890492') as $index => $monpdf): echo "le message de la recuperation"; endforeach;

echo "test@@";
?>

    
   
<style type="text/css">
#ario input { height: 30px; vertical-align: middle; }
#ario select { height: 30px; vertical-align: middle; }
#monpdf table tr td {font-size: 5px;}
</style>



 
   
<style>

/* .monpdf{
     margin: 10px 30px 0px -10px; 
    font-size: 11px;
    zoom: normal;
    overflow-x: auto;
} */


table.monpdf
    {
        border:        dashed 1px #444444;
    }
    
    table.morpion td
    {
        font-size:    15pt;
        font-weight:  bold;
        border:       solid 1px #000000;
        padding:      1px;
        text-align:   center;
        width:        25px;
    }
    
    table.morpion td.j1 { color: #0A0; }
    table.morpion td.j2 { color: #A00; }
</style>

                    <table style="width: 100%;" class="monpdf" > 
                            <thead>
                            <tr>
                                <th colspan="4" style="width: 165mm; background-color: rebeccapurple;" > FICHE DE DESCRIPTION ET DE REEVALUATION PRODUITS </th>
                                
                            </tr>
                            </thead>
                            
                            <tr style="width: 15mm;" >
                                <td colspan="2" style="width: 45mm;"  >AGENTS VISITEURS : <?php echo $monpdf['agent_visit']; ?></td>
                                <td colspan="2" style="width: 45mm;"  >CONFORMITE / NON CONFORMITE: <br/>
                                    <?php echo $monpdf['observation_reeva']; ?>
                                    <span class="pointille" style="border-bottom: 1px dashed #000; display: inline-block;">ligne en pointillés ..</span>
                                    <br/>
                                        ………………………………………………………………………………………
                                </td>
                                
                                
                            </tr>
                            <tr >
                                <td colspan="4" style=" vertical-align: middle; text-align: center;"> INFORMATIONS GENERALES</td>
                            
                            </tr>
                            <tr>
                                <td colspan="2">DATE : 
                                    <?php if($monpdf['date_Dvisite']==$monpdf['date_Fvisite']) { echo $monpdf['date_visite'];}
                                        else {echo "Du ".$monpdf['date_Dvisite']." au ".$monpdf['date_Fvisite'];
                                        } ?>
                                </td>
                            
                                <td>Heure début : 10H00</td>
                                <td>Heure Fin : 12H30</td>
                            </tr>
                            <tr>
                                <td colspan="2">N° TT : <?php echo $monpdf['num_tc']; ?></td>
                                <!-- <td>Ligne 4, Colonne 2</td> -->
                                <td rowspan="2">Société :</td>
                                <td>DECLARANT : <?php echo $monpdf['nom_declara']; ?></td>
                            </tr>
                            <tr>
                                <td>N° DECLARATION : <?php echo $monpdf['num_declaration']; ?></td>
                                <td>BUREAU : <?php echo $monpdf['Bureau_charge']; ?></td>
                                <td >IMPORTATEUR: <?php echo $monpdf['nom_imp']; ?></td>
                                <!-- <td>Ligne 5, Colonne 4</td> -->
                            </tr>
                            <tr>
                                <td>CONTENEURS</td>
                                <td>LPLOMBS</td>
                                <td>CONTENEURS</td>
                                <td>PLOMBS</td>
                            </tr>
                            <tr>
                                <td>TGBU 724381/5</td>
                                <td>42 00 24 56 09</td>
                                <td>ZCSU 706 729/0</td>
                                <td>42 00 24 86 10</td>
                            </tr>
                            <tr>
                                <td>.</td>
                                <td>.</td>
                                <td>.</td>
                                <td>.</td>
                            </tr>
                            
                            <tr>
                                <td>.</td>
                                <td>.</td>
                                <td>.</td>
                                <td>.</td>
                            </tr>
                            
                            
                    </table>


                    <table border="1">
                        <thead>
                        <tr>
                            <th colspan="19" style="text-align: center;">INFORMATIONS SPECIFIQUES</th>
                            
                        </tr>
                        <tr>
                            <th colspan="15">DEVISE : USD (taux de la devise)*</th>
                            
                        </tr>
                        <tr>
                            <th rowspan="2">Article</th>
                            <th rowspan="2" colspan="4">Decsription</th>
                            <th colspan="6">DECLARE</th>
                            
                            <th colspan="7">RECONNU</th>
                            
                        </tr>
                        <tr style="font-size: 9px;;">
                            <th>CODE SH</th>
                            <th>ORIGINE</th>
                            <th>QUANTITE </th>
                            <th>UNITE </th>
                            <th>FOB/UNIT</th>
                            <th>TOTAL FOB</th>
                            <th>CODE SH</th>
                            <th>ORIGINE </th>
                            <th>QUANITE </th>
                            <th>UNITE </th>
                            <th>FOB/UNIT</th>
                            <th>TOTAL FOB</th>
                            <th>PRD/MRD</th>
                           
                        </tr>
                        <tr>
                            <th colspan="19"  style="text-align: center;">DECLARE SUR LA FACTURE ET TROUVE</th>
                            
                        </tr>
                        </thead>
                        
                                         <?php $i=0; $leFobTotal=0;  foreach ($infotc as $index => $tcinfo): $i++; ?>
                        <tr style="font-size: 12px;">
                            <td><?php echo $i; ?></td>
                            <td colspan="4"><?php echo $tcinfo['LIBELLE_COM']; ?></td>
                            <td>&nbsp; <?php echo $tcinfo['SH_TROUVE']; ?> &nbsp; </td>
                            <td><?php echo $tcinfo['ORIGINE']; ?></td>
                            <td><?php echo $tcinfo['QTE_TROUVE']; ?></td>
                            <td><?php echo $tcinfo['UNITE_TROUVE']; ?> </td>
                            <td><?php echo intval($tcinfo['FOB_TROUVE_CFA']/$tcinfo['QTE_TROUVE']) ; ?></td>
                            <td><?php echo $tcinfo['FOB_TROUVE_CFA']; ?></td>
                            <td><?php echo $tcinfo['ADD_CODE_SH']; ?></td>
                            <td><?php echo $tcinfo['ADD_ORIGINE']; ?></td>
                            <td><?php echo $tcinfo['ADD_QUANTITE']; ?></td>
                            <td><?php echo $tcinfo['ADD_UNITE']; ?> </td>
                            <td><?php echo $tcinfo['ADD_FOB_UNI']; ?></td>
                            <td><?php echo $tcinfo['ADD_FOB_TOTAL']; ?></td>
                            <td><?php echo $tcinfo['ADD_PRD_MRD']; ?></td>
                            
                        </tr>
                                        <?php  $leFobTotal+=$tcinfo['ADD_FOB_TOTAL']; $FobTotal+=$tcinfo['FOB_TROUVE_CFA'];    endforeach; ?>
                    
                        <tr>
                            <th colspan="19" style="text-align: center; height: 35px;;">DECLARE SUR LA FACTURE ET NON TROUVE</th>
                            
                        </tr>
                                <?php $i=0;  foreach ($info_non_tc as $index => $tcinfo): $i++; ?>
                        <tr style="font-size: 12px;">
                        <td><?php echo $i; ?></td>
                            <td colspan="4"><?php echo $tcinfo['LIBELLE_COM']; ?></td>
                            <td> &nbsp;&nbsp;<?php echo $tcinfo['SH_TROUVE']; ?> &nbsp;</td>
                            <td><?php echo $tcinfo['ORIGINE']; ?></td>
                            <td><?php echo $tcinfo['QTE_TROUVE']; ?></td>
                            <td><?php echo $tcinfo['UNITE_TROUVE']; ?> </td>
                            <td><?php echo intval($tcinfo['FOB_TROUVE_CFA']/$tcinfo['QTE_TROUVE']) ; ?></td>
                            <td><?php echo $tcinfo['FOB_TROUVE_CFA']; ?></td>
                            <td><?php echo $tcinfo['ADD_CODE_SH']; ?></td>
                            <td><?php echo $tcinfo['ADD_ORIGINE']; ?></td>
                            <td><?php echo $tcinfo['ADD_QUANTITE']; ?></td>
                            <td><?php echo $tcinfo['ADD_UNITE']; ?> </td>
                            <td><?php echo $tcinfo['ADD_FOB_UNI']; ?></td>
                            <td><?php echo $tcinfo['ADD_FOB_TOTAL']; ?></td>
                            <td><?php echo $tcinfo['ADD_PRD_MRD']; ?></td>
                        </tr>
                                  <?php  endforeach; ?>
                        <tr>
                       
                            <th colspan="19" style="text-align: center;">DECLARE SUR LA FACTURE ET TROUVE</th>
                            
                        </tr>
                                 <?php $i=0;  foreach($article_new as $index=> $larticle): $i++; ?>
                        <tr style="font-size: 12px;">
                            <td><?php echo $i; ?></td>
                            <td colspan="4"><?php echo $larticle['TR_ARTICLE']; ?></td>
                            <td><?php echo $larticle['TR_CODE_SH']; ?></td>
                            <td><?php echo $larticle['TR_ORIGINE']; ?></td>
                            <td><?php echo $larticle['ADD_CODE_SH']; ?></td>
                            <td><?php echo $larticle['ADD_ORIGINE']; ?></td>
                            <td><?php echo $larticle['ADD_QUANTITE']; ?></td>
                            <td><?php echo $larticle['ADD_UNITE']; ?> </td>
                            <td><?php echo $larticle['ADD_FOB_UNI']; ?></td>
                            <td><?php echo $larticle['ADD_FOB_TOTAL']; ?></td>
                            <td><?php echo $larticle['TR_QUANTITE']; ?></td>
                            <td><?php echo $larticle['TR_UNITE']; ?> </td>
                            <td><?php echo $larticle['TR_FOB_UNI'] ; ?></td>
                            <td><?php echo $larticle['TR_FOB_TOTAL']; ?></td>
                            
                            <td><?php echo $larticle['TR_PRD_MRD']; ?></td>
                        </tr>
                                <?php $leFobTotal+=$larticle['TR_FOB_TOTAL'];  endforeach; ?>
                        <tr>
                            
                            <td colspan="6" rowspan="4">--</td>
                            <td colspan="4">TOTAL FOB</td>
                            <td><?php echo $FobTotal; ?></td>
                            <td colspan="5">@@</td>
                            <td><?php echo $leFobTotal ;?></td>
                            <td> </td>
                            
                        </tr>
                        <tr>
                        
                            <td colspan="4">FRET</td>
                            <td>0,00</td>
                            <td colspan="5">@@</td>
                            <td>0,00</td>
                            <td> </td>
                            
                        </tr>
                        <tr>
                        
                            <td colspan="4">ASSURANCE</td>
                            <td>0,00</td>
                            <td colspan="5">--</td>
                            <td>0,00</td>
                            <td> </td>
                            
                        </tr>
                        <tr>
                            
                            <td colspan="4">VALEUR TOTALE</td>
                            <td>0,00</td>
                            <td colspan="5">--</td>
                            <td>0,00</td>
                            <td> </td>
                            
                        </tr>
                        
                    </table>



                 <?php  // ob_get_clean(); ?>

