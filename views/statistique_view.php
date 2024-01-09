<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Alerte sur le delai de traitement</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/fixedHeader.bootstrap4.css">

</head>

<body>
   
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header" style ="height:60;">
            <nav class="navbar navbar-expand-lg fixed-top" style="background-color:#a9c2b2;">
            <?php echo LOGO_APPLI ; ?>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
  
                        <li class="nav-item dropdown nav-user">
                        <form id="" method="POST" class="dropdown-item">
                                        <!-- <a href="login.php" class="list-group-item"></a> -->
                             <span><FONT size="2" color="#000000">&nbsp;<?php echo  $_SESSION['NOM_USER'].' '.$_SESSION['PRENOM_USER'] ?>&nbsp;&nbsp;&nbsp;</FONT></span> 
                            <button type="submit"  name="Deconnexion">
                            <i class="demo-pli-unlock icon-lg icon-fw"></i><FONT size="2" color="#000000"> D&eacute;connexion</FONT></boutton>
                            
                        </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- ============================================================== -->
        
        <div class="dashboard-wrapper" >
            <div class="container-fluid  dashboard-content" style="width:1100px; margin-left:275px;padding:30px 30px 0px 30px">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
              
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    </div>
                </div>
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-4" >
                        <div class="card" style="text-align: center;">
                                <div class="card-header" style="width:100%; background-color:#cfeeda ;">
                                    <h5 class="mb-0"> Tc Visitées Non transmis en reevaluation</h5>
                                </div>
                            
                            <div class="card-body" >
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered " style="width:100%" data-show-columns="true">
                                        <thead>
                                        <tr>
                                                <th><FONT size="2.5" color="#000000">Periode</FONT></th>
                                                <th><FONT size="2.5" color="#000000">Nbre de TC</FONT></th>
                                                 
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
        
                                            <tr style="line-height: 12px ;">
                                                <td style="height: 10px;"><FONT size="2" color="#000000">3 jours</FONT></td>
                                                <td style="height: 10px;"><FONT size="2" color="#000000"><a href="#" data-toggle="modal" data-target="#exampleModalTcVNTRTroisJours"><?php $TCVNTrtroisjour=TCVNTrtroisjour();if($TCVNTrtroisjour!=0){?><span style="color: #f00;"><?php echo $TCVNTrtroisjour;?></span><?php } elseif($TCVNTrtroisjour==0){?><span style="color: blue;"><?php echo $TCVNTrtroisjour;?></span><?php }?></a></FONT></td>
                                            </tr>

                                            <tr style="line-height: 12px ;">
                                                <td style="height: 10px;"><FONT size="2" color="#000000">1 semaine</FONT></td>
                                                <td style="height: 10px;"><FONT size="2" color="#000000"><a href="#" data-toggle="modal" data-target="#exampleModalTcVNTRSeptJours"><?php $TCVNTRseptjour=TCVNTRseptjour();if($TCVNTRseptjour!=0){?><span style="color: #f00;"><?php echo $TCVNTRseptjour;?></span><?php } elseif($TCVNTRseptjour==0){?><span style="color: blue;"><?php echo $TCVNTRseptjour;?></span><?php }?></a></FONT></td>
                                            </tr>

                                            <tr style="line-height: 12px ;">
                                                <td style="height: 10px;"><FONT size="2" color="#000000">+ 1 semaine</FONT></td>
                                                <td style="height: 10px;"><FONT size="2" color="#000000"><a href="#" data-toggle="modal" data-target="#exampleModalTcVNTRSupSeptJours"><?php $TCVNTRSupseptjour=TCVNTRSupseptjour();if($TCVNTRSupseptjour!=0){?><span style="color: #f00;"><?php echo $TCVNTRSupseptjour;?></span><?php } elseif($TCVNTRSupseptjour==0){?><span style="color: blue;"><?php echo $TCVNTRSupseptjour;?></span><?php }?></a></FONT></td>
                                            </tr>
                                       </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="text-align: center;">
                                <div class="card-header" style="width:100%;background-color:#cfeeda ;">
                                    <h5 class="mb-0"> Tc apurées sans RDV </h5>
                                </div>
                            
                            <div class="card-body" style="width:100%">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered " style="width:100%" data-show-columns="true">
                                        <thead>
                                        <tr>
                                                <th><FONT size="2.5" color="#000000">Periode</FONT></th>
                                                <th><FONT size="2.5" color="#000000">Nbre de TC</FONT></th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
        
                                            <tr style="line-height: 12px ;">
                                                <td style="height: 10px;"><FONT size="2" color="#000000">3 jours</FONT></td>
                                                <td style="height: 10px;"><FONT size="2" color="#000000"><a href="#" data-toggle="modal" data-target="#exampleModalAPSRDVTroisjours"><?php $TCAPtroisjour=TCAPtroisjour();if($TCAPtroisjour!=0){?><span style="color: #f00;"><?php echo $TCAPtroisjour;?></span><?php } elseif($TCAPtroisjour==0){?><span style="color: blue;"><?php echo $TCAPtroisjour;?></span><?php } ?></a></FONT></td>
   
                                            </tr>

                                            <tr style="line-height: 12px ;">
                                                <td style="height: 10px;"><FONT size="2" color="#000000">1 semaine</FONT></td>
                                                <td style="height: 10px;"><FONT size="2" color="#000000"><a href="#" data-toggle="modal" data-target="#exampleModalAPSRDVSeptJours"><?php $TCAPseptjour=TCAPseptjour();if($TCAPseptjour!=0){?><span style="color: #f00;"><?php echo $TCAPseptjour;?></span><?php } elseif($TCAPseptjour==0){?><span style="color: blue;"><?php echo $TCAPtroisjour;?></span><?php } ?></a></FONT></td>
                                            </tr>

                                            <tr style="line-height: 12px ;">
                                                <td style="height: 10px;"><FONT size="2" color="#000000">+ 1 semaine</FONT></td>
                                                <td style="height: 10px;"><FONT size="2" color="#000000"><a href="#" data-toggle="modal" data-target="#exampleModalAPSRDVSupSeptJours"><?php $TCAPupseptjour=TCAPupseptjour();if($TCAPupseptjour!=0){?><span style="color: #f00;"><?php echo $TCAPupseptjour;?></span><?php } elseif($TCAPupseptjour==0){?><span style="color: blue;"><?php echo $TCAPupseptjour;?></span><?php } ?></a></FONT></td>
                                                
                                            </tr>
                                       </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="text-align: center;">
                                <div class="card-header" style="width:100% ; background-color:#cfeeda ;">
                                    <h5 class="mb-0"> Tc RDV sans visite </h5>
                                </div>
                            
                            <div class="card-body" style="width:100%">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered " style="width:100%" data-show-columns="true">
                                        <thead>
                                        <tr>
                                                <th><FONT size="2.5" color="#000000">Periode</FONT></th>
                                                <th><FONT size="2.5" color="#000000">Nbre de TC</FONT></th>
                                            </tr>
                                        </thead>
                                        <tbody>
        
                                            <tr style="line-height: 12px ;">
                                                <td style="height: 10px;"><FONT size="2" color="#000000"> 3 jours</FONT></td>
                                                <td style="height: 10px;"><FONT size="2" color="#000000"><a href="#" data-toggle="modal" data-target="#exampleModalTcRDVSVTroisJours"><?php $TCSRDVtroisjour=TCSRDVtroisjour();if($TCSRDVtroisjour!=0){?><span style="color: #f00;"><?php echo $TCSRDVtroisjour;?></span><?php } elseif($TCSRDVtroisjour==0){?><span style="color: blue;"><?php echo $TCSRDVtroisjour;?></span><?php } ?></a></FONT></td>
                                            </tr>

                                            <tr style="line-height: 12px ;">
                                                <td style="height: 10px;"><FONT size="2" color="#000000">1 semaine</FONT></td>
                                                <td style="height: 10px;"><FONT size="2" color="#000000"><a href="#" data-toggle="modal" data-target="#exampleModalTcRDVSVSeptJours"><?php $TCSRDVseptjour=TCSRDVseptjour();if($TCSRDVseptjour!=0){?><span style="color: #f00;"><?php echo $TCSRDVseptjour;?></span><?php } elseif($TCSRDVseptjour==0){?><span style="color: blue;"><?php echo $TCSRDVseptjour;?></span><?php } ?></a></FONT></td>
                                            </tr>

                                            <tr style="line-height: 12px ;">
                                                <td style="height: 10px;"><FONT size="1" color="#000000">+ 1 semaine</FONT></td>
                                                <td style="height: 10px;"><FONT size="2" color="#000000"><a href="#" data-toggle="modal" data-target="#exampleModalRDVSVSupSeptJours"><?php $TCSRDVSupseptjour=TCSRDVSupseptjour();if($TCSRDVSupseptjour!=0){?><span style="color: #f00;"><?php echo $TCSRDVSupseptjour;?></span><?php } elseif($TCSRDVSupseptjour==0){?><span style="color: blue;"><?php echo $TCSRDVSupseptjour;?></span><?php } ?></a></FONT></td>
                                            </tr>
                                       </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
  
                </div>

                <div class="row">
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-4">
                        <div class="card">
                                <div class="card-header" style="width:100% ;background-color:#cfeeda ;">
                                    <h5 class="mb-0"> Tc non apurées</h5>
                                </div>
                            
                            <div class="card-body" style="text-align: center;" >
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered " style="width:100%" data-show-columns="true">
                                        <thead>
                                        <tr>
                                                <th><FONT size="2.5" color="#000000">Periode</FONT></th>      
                                                <th><FONT size="2.5" color="#000000">Nbre de TC</FONT></th>
                                                 
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                        
                                            <tr style="line-height: 12px ;">
                                                <td style="height: 10px;"><FONT size="2" color="#000000">3 jours</FONT></td>
                                                <td style="height: 10px;"><FONT size="2" color="#000000"><a href="#" data-toggle="modal" data-target="#exampleModal"><?php $egalatroisjour=egalatroisjour();if($egalatroisjour!=0){?><span style="color: #f00;"><?php echo $egalatroisjour;?></span><?php } elseif($egalatroisjour==0){?><span style="color: blue;"><?php echo $egalatroisjour;?></span><?php } ?></a></FONT></td>
                                                
                                            </tr>

                                            <tr style="line-height: 12px ;">
                                                <td style="height: 10px;"><FONT size="2" color="#000000"> 1 semaine</FONT></td>
                                                <td style="height: 10px;"><FONT size="2" color="#000000"><a href="#" data-toggle="modal" data-target="#exampleModalseptjour"><?php $egaleseptjour=egaleseptjour();if($egaleseptjour!=0){?><span style="color: #f00;"><?php echo $egaleseptjour;?></span><?php } elseif($egaleseptjour==0){?><span style="color: blue;"><?php echo $egaleseptjour;?></span><?php } ?></a></FONT></td>
                                                
                                            </tr>

                                            <tr style="line-height: 12px ;">
                                                <td style="height: 10px;"><FONT size="2" color="#000000">+ 1 semaine</FONT></td>
                                                <td style="height: 10px;"><FONT size="2" color="#000000"><a href="#" data-toggle="modal" data-target="#exampleModalplusseptjour"><?php $egalesupseptjour=egalesupseptjour();if($egalesupseptjour!=0){?><span style="color: #f00;"><?php echo $egalesupseptjour;?></span><?php } elseif($egalesupseptjour==0){?><span style="color: blue;"><?php echo $egalesupseptjour;?></span><?php } ?></a></FONT></td>
                                                
                                            </tr>
                                            
                                        
                                       </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="text-align: center;">
                                <div class="card-header" style="width:100%; background-color:#cfeeda ;">
                                    <h5 class="mb-0">Tc visitées sans évaluation </h5>
                                </div>
                            
                            <div class="card-body" style="width:100%">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered " style="width:100%" data-show-columns="true">
                                        <thead>
                                        <tr>
                                                <th><FONT size="2.5" color="#000000">Periode</FONT></th>
                                                <th><FONT size="2.5" color="#000000">Nbre de TC</FONT></th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
        
                                                <tr style="line-height: 12px ;">
                                                    <td style="height: 10px;"><FONT size="2" color="#000000">3 jours</FONT></td>
                                                    <td style="height: 10px;"><FONT size="2" color="#000000"><a href="#" data-toggle="modal" data-target="#exampleModalTcVSETroisJours"><?php $TCVSEtroisjour=TCVSEtroisjour();if($TCVSEtroisjour!=0){?><span style="color: #f00;"><?php echo $TCVSEtroisjour;?></span><?php } elseif($TCVSEtroisjour==0){?><span style="color: blue;"><?php echo $TCVSEtroisjour;?></span><?php } ?></a></FONT></td>
                                                </tr>

                                                <tr style="line-height: 12px ;">
                                                    <td style="height: 10px;"><FONT size="2" color="#000000">1 semaine</FONT></td>
                                                    <td style="height: 10px;"><FONT size="2" color="#000000"><a href="#" data-toggle="modal" data-target="#exampleModalTcVSESeptJours"><?php $TCVSEseptjour=TCVSEseptjour();if($TCVSEseptjour!=0){?><span style="color: #f00;"><?php echo $TCVSEseptjour;?></span><?php } elseif($TCVSEseptjour==0){?><span style="color: blue;"><?php echo $TCVSEseptjour;?></span><?php } ?></a></FONT></td>
                                                </tr>

                                                <tr style="line-height: 12px ;">
                                                    <td style="height: 10px;"><FONT size="2" color="#000000">+ 1 semaine</FONT></td>
                                                    <td style="height: 10px;"><FONT size="2" color="#000000"><a href="#" data-toggle="modal" data-target="#exampleModalTcVSESupSeptJours"><?php $TCVSESupseptjour=TCVSESupseptjour();if($TCVSESupseptjour!=0){?><span style="color: #f00;"><?php echo $TCVSESupseptjour;?></span><?php } elseif($TCVSESupseptjour==0){?><span style="color: blue;"><?php echo $TCVSESupseptjour;?></span><?php } ?></a></FONT></td>
                                                </tr>
                                                
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="text-align: center;">
                                <div class="card-header" style="width:100%; background-color:#cfeeda ;">
                                    <h5 class="mb-0"> Tc en contestation non transmis en PL </h5>
                                </div>
                            
                            <div class="card-body" style="width:100%">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered " style="width:100%" data-show-columns="true">
                                        <thead>
                                        <tr>
                                                <th><FONT size="2.5" color="#000000">Periode</FONT></th>
                                                <th><FONT size="2.5" color="#000000">Nbre de TC</FONT></th> 
                                            </tr>
                                        </thead>
                                        <tbody>
        
                                            <tr style="line-height: 12px ;">
                                                <td style="height: 10px;"><FONT size="2" color="#000000"> 3 jours</FONT></td>
                                                <td style="height: 10px;"><FONT size="2" color="#000000"><a href="#" data-toggle="modal" data-target="#exampleModalTcCNTTroisJours"><?php $TCCNTtroisjour=TCCNTtroisjour();if($TCCNTtroisjour!=0){?><span style="color: #f00;"><?php echo $TCCNTtroisjour;?></span><?php } elseif($TCCNTtroisjour==0){?><span style="color: blue;"><?php echo $TCCNTtroisjour;?></span><?php } ?></a></FONT></td> 
                                            </tr>

                                            <tr style="line-height: 12px ;">
                                                <td style="height: 10px;"><FONT size="2" color="#000000"> 1 semaine</FONT></td>
                                                <td style="height: 10px;"><FONT size="2" color="#000000"><a href="#" data-toggle="modal" data-target="#exampleModalTcCNTSeptJours"><?php $TCCNTseptjour=TCCNTseptjour();if($TCVSESupseptjour!=0){?><span style="color: #f00;"><?php echo $TCCNTseptjour;?></span><?php } elseif($TCCNTseptjour==0){?><span style="color: blue;"><?php echo $TCCNTseptjour;?></span><?php } ?></a></FONT></td>
                                            </tr>

                                            <tr style="line-height: 12px ;">
                                                <td style="height: 10px;"><FONT size="2" color="#000000">+ 1 semaine</FONT></td>
                                                <td style="height: 10px;"><FONT size="2" color="#000000"><a href="#" data-toggle="modal" data-target="#exampleModalTcCNTSupSeptJours"><?php $TCCNTSupseptjour=TCCNTSupseptjour();if($TCCNTSupseptjour!=0){?><span style="color: #f00;"><?php echo $TCCNTSupseptjour;?></span><?php } elseif($TCCNTSupseptjour==0){?><span style="color: blue;"><?php echo $TCCNTSupseptjour;?></span><?php }?></a></FONT></td>
                                            </tr>
                                            
                                            
                                       </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
  
                </div>
            </div>

        </div>
           
        </div>
        <?php include('include/tab_liste.php');?>
        <?php include('include/tab_liste_sept_jour.php');?>
        <?php include('include/tab_liste_plus_sept_jour.php');?>
        <?php include('include/tab_liste_APSRDVTroisJours.php');?>
        <?php include('include/tab_liste_APSRDVSupSeptJours.php');?>
        <?php include('include/tab_liste_APSRDVSeptJours.php');?>
        <?php include('include/tab_liste_TcRDVSVTroisJours.php');?>
        <?php include('include/tab_liste_TcRDVSVSeptJours.php');?>
        <?php include('include/tab_liste_TcRDVSVSupSeptJours.php');?>
        <?php include('include/tab_liste_TcVSETroisJours.php');?>
        <?php include('include/tab_liste_TcVSESeptJours.php');?>
        <?php include('include/tab_liste_TcVSESupSeptJours.php');?>
        <?php include('include/tab_liste_TcCNTTroisJours.php');?>
        <?php include('include/tab_liste_TcCNTSeptJours.php');?>
        <?php include('include/tab_liste_TcCNTSupSeptJours.php');?>
        <?php include('include/tab_liste_TcVNTRTroisJours.php');?>
        <?php include('include/tab_liste_TcVNTRSeptJours.php');?>
        <?php include('include/tab_liste_TcVNTRSeptJours.php');?>
        <?php include('include/tab_liste_TcVNTRSupSeptJours.php');?>

        
        
        
        <?php include('include/menu.php');?>
    </div>
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>

</body>
 
</html>