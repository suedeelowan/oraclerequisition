 
 <?php 
if($_SESSION['PROFIL']==1) {$activation="active"; $vueactive="show active";}
if($_SESSION['PROFIL']==2) {$activation="active"; $vueactive="show active";}
if($_SESSION['PROFIL']==3) {$activation="active"; $vueactive="show active";}
if($_SESSION['PROFIL']==4) {$activation="active"; $vueactive="show active";}
foreach(afficheDonne($one['id_Tc']) as $index => $uni):
   
?>

    <div class="modal fade" id="<?php echo $one['id_Tc']; ?>mod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color:#cfeeda ;">
        <div class="modal-dialog"  role="document">
                <div class="modal-content" style="width:1200px; margin-left:-300px; height:1320px;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                            </a>
                        </div>
                        <div class="modal-body" style="background-color:#cfeeda ;" >     
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">        
        
                                <div class="simple-card" style="width:1150px; height:1320px; margin-left:0px;">
                                        <ul class="nav nav-tabs" id="myTab5" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link <?php if($_SESSION['PROFIL']==1 ) { echo "active";} ?>  border-left-0" id="<?php echo $one['id_Tc']; ?>modmodhome-tab-simple" data-toggle="tab" href="#<?php echo $one['id_Tc']; ?>modmodhome-simple" role="tab" aria-controls="<?php echo $one['id_Tc']; ?>modmodhome" aria-selected="false">Inspection</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link <?php if($_SESSION['PROFIL']==2) { echo "active";} ?>" id="<?php echo $one['id_Tc']; ?>modmodprofile-tab-simple" data-toggle="tab" href="#<?php echo $one['id_Tc']; ?>modmodprofile-simple" role="tab" aria-controls="<?php echo $one['id_Tc']; ?>modmodprofile" aria-selected="true">Réévaluation </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link <?php if($_SESSION['PROFIL']==3) { echo "active";} ?>" id="<?php echo $one['id_Tc']; ?>modmodcourier-tab-simple" data-toggle="tab" href="#<?php echo $one['id_Tc']; ?>modmodcourier-simple" role="tab" aria-controls="<?php echo $one['id_Tc']; ?>modmodcourier" aria-selected="false">Couriers de Contestation</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link <?php if($_SESSION['PROFIL']==4) { echo "active";} ?>" id="<?php echo $one['id_Tc']; ?>modmodargu-tab-simple" data-toggle="tab" href="#<?php echo $one['id_Tc']; ?>modmodargu-simple" role="tab" aria-controls="<?php echo $one['id_Tc']; ?>modmodargu" aria-selected="false">Contestation</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link <?php if($_SESSION['PROFIL']==6) { echo "active";} ?>" id="<?php echo $one['id_Tc']; ?>modmodretour-tab-simple" data-toggle="tab" href="#<?php echo $one['id_Tc']; ?>modmodretour-simple" role="tab" aria-controls="<?php echo $one['id_Tc']; ?>modmodretour" aria-selected="false">Retour PL</a>
                                            </li>

                                        </ul>
                                        <div class="tab-content" id="myTabContent5">

                                            <div class="tab-pane fade <?php if($_SESSION['PROFIL']==1) { echo  "show active";} ?>  " id="<?php echo $one['id_Tc']; ?>modmodhome-simple" role="tabpanel" aria-labelledby="<?php echo $one['id_Tc']; ?>modmodhome-tab-simple">
                                                <?php if($one['onglet']==null ){include('info_inspectajout_tc_RDV.php');}
                                                      if($one['onglet']=='9' ){include('info_inspectajout_tc_INSP.php');}
                                                     elseif(($one['onglet']!=null) and ($one['onglet']!=9) ) { include('info_inspectajout_tc_INSP_Consult_tabmodif.php'); }?>
                                            </div>
                                                    
                                            <div class="tab-pane fade <?php if($_SESSION['PROFIL']==2 ) { echo  "show active";} ?>" id="<?php echo $one['id_Tc']; ?>modmodprofile-simple" role="tabpanel" aria-labelledby="<?php echo $one['id_Tc']; ?>modmodprofile-tab-simple">      
                                                <?php if($one['onglet']>'1' ){include('info_reevaluation_cons_tabmodif.php');}
                                                elseif(($one['onglet']=='1')) { include('info_reevaluation.php'); } ?>
                                                
                                            </div>

                                            <div class="tab-pane fade <?php if($_SESSION['PROFIL']==3 ) { echo  "show active";} ?> " id="<?php echo $one['id_Tc']; ?>modmodcourier-simple" role="tabpanel" aria-labelledby="<?php echo $one['id_Tc']; ?>modmodcourier-tab-simple">   
                                                <?php if(($one['onglet']=='2')) { include('info_Courrier_Contestation.php'); }
                                                elseif($one['onglet']>'2'){include('info_Courrier_Contestation_cons.php');}?>
                                                
                                            </div>

                                            <div class="tab-pane fade <?php if($_SESSION['PROFIL']==4 ) { echo  "show active";} ?> " id="<?php echo $one['id_Tc']; ?>modmodargu-simple" role="tabpanel" aria-labelledby="<?php echo $one['id_Tc']; ?>modmodargu-tab-simple">   
                                                <?php if($one['onglet']>'3'){include('info_Contestation_cons.php');}
                                                elseif(($one['onglet']=='3')) { include('info_Contestation.php'); }?>
                                                
                                            </div>

                                            <div class="tab-pane fade <?php if($_SESSION['PROFIL']==6 ) { echo  "show active";} ?> " id="<?php echo $one['id_Tc']; ?>modmodretour-simple" role="tabpanel" aria-labelledby="<?php echo $one['id_Tc']; ?>modmodretour-tab-simple">   
                                                <?php if($one['onglet']=='2' && $one['onglet']!='9'){include('info_ajout_tc_RPL.php');}
                                                elseif(($one['onglet']>'2'|| $one['onglet']>'3' && $one['onglet']!='9' )) { include('info_ajout_tc_RPL.php'); }?>
                                                
                                            </div>
                                        
                                        </div>
                                </div>
                            </div>
                        </div>
                </div>
        </div>
                                                    
    </div>
    
<?php  endforeach; ?>                            