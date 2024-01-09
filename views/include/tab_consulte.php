 
 <?php 

foreach(afficheDonne($one['id_Tc']) as $index => $uni):
   
?>

    <div class="modal fade" id="<?php echo $one['id_Tc']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color:#cfeeda ;">
        <div class="modal-dialog"  role="document">
            <div class="modal-content" style="width:1200px; margin-left:-300px; height:1350px;">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </a>
                                </div>
                                <div class="modal-body" style="background-color:#cfeeda ;">     
                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">        
            
                                            <div class="simple-card" style="width:1150px; height:1200px; margin-left:0px;">
                                                <ul class="nav nav-tabs" id="myTab5" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active border-left-0" id="<?php echo $one['id_Tc']; ?>modmodhome1-tab-simple" data-toggle="tab" href="#<?php echo $one['id_Tc']; ?>modmodhome1-simple" role="tab" aria-controls="<?php echo $one['id_Tc']; ?>modmodhome1" aria-selected="true">Inspection</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="<?php echo $one['id_Tc']; ?>modmodprofile1-tab-simple" data-toggle="tab" href="#<?php echo $one['id_Tc']; ?>modmodprofile1-simple" role="tab" aria-controls="<?php echo $one['id_Tc']; ?>modmodprofile1" aria-selected="false">Réévaluation </a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" id="<?php echo $one['id_Tc']; ?>modmodcourrier-tab-simple" data-toggle="tab" href="#<?php echo $one['id_Tc']; ?>modmodcourrier-simple" role="tab" aria-controls="<?php echo $one['id_Tc']; ?>modmodcourrier" aria-selected="false">Courrier </a>
                                                    </li>


                                                    <li class="nav-item">
                                                        <a class="nav-link" id="<?php echo $one['id_Tc']; ?>modmodargu1-tab-simple" data-toggle="tab" href="#<?php echo $one['id_Tc']; ?>modmodargu1-simple" role="tab" aria-controls="<?php echo $one['id_Tc']; ?>modmodargu1" aria-selected="false">Contestation</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" id="<?php echo $one['id_Tc']; ?>modmodretour-tab-simple" data-toggle="tab" href="#<?php echo $one['id_Tc']; ?>modmodretour-simple" role="tab" aria-controls="<?php echo $one['id_Tc']; ?>modmodretour" aria-selected="false">Retour PL</a>
                                                    </li>

                                                </ul>
                                                        <div class="tab-content" id="myTabContent5">
                                                                <div class="tab-pane fade  show active " id="<?php echo $one['id_Tc']; ?>modmodhome1-simple" role="tabpanel" aria-labelledby="<?php echo $one['id_Tc']; ?>modmodhome1-tab-simple">
                                                                        <?php include('info_inspectajout_tc_INSP_Consult.php'); ?>
                                                                </div>
                                                                <div class="tab-pane fade " id="<?php echo $one['id_Tc']; ?>modmodprofile1-simple" role="tabpanel" aria-labelledby="<?php echo $one['id_Tc']; ?>modmodprofile1-tab-simple">      
                                                                    
                                                                        <?php if($one['onglet']=='NULL' ){include('info_reevaluation_cons.php');}
                                                                        elseif(($one['onglet']=='1')) { include('info_reevaluationConsult.php');  }
                                                                        elseif(($one['onglet']>'1')) { include('info_reevaluation_cons.php');  }

                                                                        ?>

                                                                </div>

                                                                <div class="tab-pane fade " id="<?php echo $one['id_Tc']; ?>modmodcourrier-simple" role="tabpanel" aria-labelledby="<?php echo $one['id_Tc']; ?>modmodcourrier-tab-simple">      
                                                                
                                                                    <?php if($one['onglet']=='2' ){include('info_Courrier_Contestation_cons.php');}
                                                                    elseif(($one['onglet']=='2')) { include('info_Courrier_ContestationConsult.php');  }
                                                                    elseif(($one['onglet']>'2')) { include('info_Courrier_Contestation_cons.php');  }

                                                                    ?>

                                                                </div>


                                                                <div class="tab-pane fade " id="<?php echo $one['id_Tc']; ?>modmodargu1-simple" role="tabpanel" aria-labelledby="<?php echo $one['id_Tc']; ?>modmodargu1-tab-simple">   
                                                                    <?php if($one['onglet']=='3'){include('info_ContestationConsult.php');}
                                                                    elseif(($one['onglet']>'3')) { include('info_Contestation_cons.php'); }
                                                                    ?>
                                                                </div>

                                                                <div class="tab-pane fade " id="<?php echo $one['id_Tc']; ?>modmodretour-simple" role="tabpanel" aria-labelledby="<?php echo $one['id_Tc']; ?>modmodretour-tab-simple">   
                                                                    <?php if($one['onglet']!='5'){include('');}
                                                                    elseif(($one['onglet']=='5')) { include('info_ajout_tc_RPL_cons.php'); }
                                                                    
                                                                    ?>
                                                                </div>
                                                        
                                                        </div>
                                            </div>
                                    </div>
                                </div>
            </div>
                                                    
        </div>
    </div>
    
<?php  endforeach; ?>                            