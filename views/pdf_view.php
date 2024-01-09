<!doctype html>
<html lang="en">

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form Validation</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap/js/sweetalert2.min.css">
    <!-- insertion sweet alert -->
    <link rel="stylesheet" href="assets/sweet/sweetalert2.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
    function showConfirmation() {
   // Afficher un message de confirmation
   alert("Votre formulaire a été enregistré avec succès !");
}
</script>
<style type="text/css">
#ario input { height: 30px; vertical-align: middle; }
#ario select { height: 30px; vertical-align: middle; }
#monpdf table tr td {font-size: 5px;}
</style>

</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->

        <div class="dashboard-header" >
            <nav class="navbar navbar-expand-lg fixed-top" style="background-color:#a9c2b2;">
                <img src="assets/img/logo.png" width="60" height="70" style ="object-position: 90% 9%;margin-left:50px;"/>
                <p style="font-family: sans-serif;font-size: 25px; margin-left:50px"><FONT size="4" color="#ffffff">SUIVI DES REQUISITIONS DARRV</FONT></p>
                <div class=" ml-auto navbar-right-top">
                        <form id="" method="POST" class="dropdown-item">
                                        <!-- <a href="login.php" class="list-group-item"></a> -->
                             <span><FONT size="2" color="#000000">
                             &nbsp;<?php echo  $_SESSION['NOM_USER'].' '.$_SESSION['PRENOM_USER'] ?>&nbsp;&nbsp;&nbsp;
                             </FONT></span> 
                            <button type="submit"  name="Deconnexion"><FONT size="2" color="#000000"> D&eacute;connexion</FONT></boutton>
                            
                        </form>
                </div>
                      
            </nav>
        </div>
        
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content" style="width:1050px; margin-left:250px;">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
               
                
                <div class="row">
                <?php //pour le pdf
                     foreach ($response as $index => $monpdf): endforeach; 
                 ?>

                    <table border="1" id="monpdf" style=" vertical-align:middle ; width: 80%;" align="center";> <!-- Utilisez l'attribut "border" pour ajouter des bordures au tableau -->
                            <thead>
                            <tr>
                                <th colspan="4">FICHE DE DESCRIPTION ET DE REEVALUATION PRODUITS</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                            <tr style="width: 100%;">
                                <td colspan="2" style="width: 70%;">AGENTS VISITEURS : <?php echo $monpdf['agent_visit']; ?></td>
                                <td colspan="2" style="width:30%">CONFORMITE / NON CONFORMITE:<br/>
                                <?php echo $monpdf['observation_reeva']; ?><span class="pointille" style="border-bottom: 1px dashed #000; display: inline-block;">ligne en pointillés</span>
                                    ………………………………………………………………………………………<br/>
                                    
                                </td>
                                
                                
                            </tr>
                            <tr>
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
                            <tr>
                                <td>.</td>
                                <td>.</td>
                                <td>.</td>
                                <td>.</td>
                            </tr>
                            
                            </tbody>
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
                            <!-- <th>Colonne 14</th> -->
                            <!-- <th>Colonne 15</th> -->
                        </tr>
                        <tr>
                            <th colspan="19"  style="text-align: center;">DECLARE SUR LA FACTURE ET TROUVE</th>
                            
                        </tr>
                        </thead>
                        <tbody>
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
                        </tbody>
                    </table>

                </div>













                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        
                    </div>
                </div>
                     
           
    </div>
            
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- ============================================================== -->
            <!-- end footer -->
            
            <!-- ============================================================== -->
        </div>
        <?php include('include/menu.php');?>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
   
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/parsley/parsley.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="assets/vendor/bootstrap/js/sweetalert2.min.js"></script>
    <!-- insertion pour sweet alert -->
    <script src="assets/sweet/sweetalert2.all.min.js"></script>
    <script src="assets/sweet/sweetalert2.min.js"></script>

    <script>
    // $('#form').parsley();
    </script>
    
   
</body>
 
</html>