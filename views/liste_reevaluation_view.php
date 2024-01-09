<!doctype html>
<html lang="fr">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Recherche de Tc</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
    <!-- insertion sweet alert -->
    <link rel="stylesheet" href="assets/sweet/sweetalert2.min.css">
    <style>
                input[type="text"]:disabled { background-color:#e3f0fe; }
                .colorconsul { background-color:#e3f0fe; }

                .picto-item {
            position: relative;  /*les .picto-item deviennent référents*/
            cursor: help;
            border-radius: 50%;
            }

            /* on génère un élément :after lors du survol et du focus :*/

            .picto-item:hover:after,
            .picto-item:focus:after {
            content: attr(aria-label);  /* on affiche aria-label */
            position: absolute;
            top: -2.4em;
            left: 50%;
                transform: translateX(-50%); /* on centre horizontalement  */
            z-index: 1; /* pour s'afficher au dessus des éléments en position relative */
            white-space: nowrap;  /* on interdit le retour à la ligne*/
            padding: 5px 14px;
            background: #413219;
            color: #fff;
            border-radius: 4px;
            font-size: 1.2rem;
            }

            /* on génère un second élément en :before pour la flèche */

            [aria-label]:hover:before,
            [aria-label]:focus:before {
            content: "▼";
            position: absolute;
            top: -1em;
                left: 50%;
                transform: translateX(-50%); /* on centre horizontalement  */
            font-size: 20px;
            color: #413219;
            }

            /* pas de contour durant le :focus */
            [aria-label]:focus {
            outline: none;
            }



            /* déco */ 

            body {
            max-width: 900px;
            margin: 0 auto;
            padding: 2rem;
            background: #F1EFE2;
            font-size: 1.4em;
            line-height: 1.4;
            font-family: georgia, sans-serif;
            }
            h1 {
            margin-top: 20px;
            margin-bottom: 40px;
            color: #789;
            text-align: center;
            text-shadow: 1px 1px #fff;
            }
            p, .pictos {
            text-align: center;
            }


    </style>
   
     <!-- pour le select2   -->
            <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
        <!-- select2 -->
        
       
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
         
        <!-- select2-bootstrap4-theme -->
        <!-- <link href="https://raw.githack.com/ttskch/select2-bootstrap4-theme/master/dist/select2-bootstrap4.css" rel="stylesheet"> for live demo page -->
        <!-- <link href="select2-bootstrap4.css" rel="stylesheet">  -->
        <!-- for local development env -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>  

 
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
            <?php echo LOGO_APPLI ; ?>
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
        <div class="dashboard-wrapper" >
            <div class="container-fluid  dashboard-content" style="width:1100px; margin-left:275px;padding:30px 30px 0px 30px;">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row"><?php include('include/recherche_tc_desc.php');?></div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    </div>
                </div>
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header" style="width:100%">
                                <h5 class="mb-0">Liste des requisitions en attente de réevaluation </h5>
                        
                            </div>
                            <div class="card-body" style="width:100%">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%" data-show-columns="true"   data-cookie-id-table="saveId"  cellspacing="0" data-toggle="table" data-pagination="true" data-search="true" data-show-pagination-switch="false" data-show-refresh="false" data-key-events="true" data-show-toggle="true" data-resizable="false" data-cookie="true"    data-show-export="true" data-click-to-select="false" data-toolbar="#toolbar">
                                        <thead style="height:20px;">
                                            <tr style="background-color:#e2eae5; height:10px;">
                                                <!-- <th><FONT size="2" color="#000000">N° ordre</FONT></th> -->
                                                <th><FONT size="1" color="#000000">Tc id</FONT></th>
                                                <th><FONT size="1" color="#000000">Date Tc</FONT></th>
                                                <th><FONT size="1" color="#000000">N° Declaration</FONT></th>
                                                <th><FONT size="1" color="#000000">Date Declaration</FONT></th>
                                                <th><FONT size="1" color="#000000">Code Importateur</FONT></th>
                                                <th><FONT size="1" color="#000000">Nom Importateur</FONT></th>
                                                <th><FONT size="1" color="#000000">Agent coté</FONT></th>
                                                <th><FONT size="1" color="#000000">Type visite</FONT></th>
                                                <th><FONT size="1" color="#000000">Durée</FONT></th>
                                                <!-- <th><FONT size="1" color="#000000">Statut</FONT></th> -->
                                                <th><FONT size="1" color="#000000">Action</FONT></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       <?php foreach ($all as $index => $one): ?>
                                            <tr style="line-height: 12px ;">
                                                <!-- <td style="height: 10px;">
                                                    
                                                    
                                                        <?php echo $one['id_Tc'];  ?>
                                                    </a>
                                                </td> -->
                                                
                                                <td style="height: 10px;"><FONT size="1" color="#000000">
                                                    <a href="#" data-toggle="modal" data-target="#<?php echo $one['id_Tc']; ?>">    
                                                        <?php echo $one['num_tc']; ?>
                                                    </a></FONT>
                                                </td>
                                                <td style="height: 10px;"><FONT size="1" color="#000000"><?php echo dateTransform($one['date_tc']);  ?></FONT></td>
                                                <td style="height: 10px;"><FONT size="1" color="#000000"><?php echo $one['num_declaration']; ?></FONT></td>
                                                <td style="height: 10px;"><FONT size="1" color="#000000"><?php echo dateTransform($one['date_declara']); ?></FONT></td> 
                                                <td style="height: 10px;"><FONT size="1" color="#000000"><?php echo $one['code_imp']; ?></FONT></td>
                                                <td style="height: 10px;"><FONT size="1"color="#000000"><?php echo $one['nom_imp']; ?></FONT></td>
                                                <td style="height: 10px;"><FONT size="1"color="#000000"><?php echo $one['agent_reeva']; ?></FONT></td>
                                                <td style="height: 10px;"><FONT size="1" color="#000000"><?php echo $one['type_visite']; ?></FONT></td>
                                                <td style="height: 10px;"><FONT size="1" color="#000000">
                                                                                <?php  $interval = date_diff(date_create($one['date_envoi_reev']), date_create(date('Y-m-d',time())));
                                                                                          echo "$interval->m mois,  $interval->d jour";
                                                                                        //   echo "$interval->y years, $interval->m months, $interval->d jour";
                                                                                           ?>
                                                                        </FONT>
                                                </td>
                                                
                                                <td style="height: 10px;">
                                                      
                                                    <span style="font-size:13px; white-space:nowrap;">

                                                        <?php if( $one['onglet']=="1" &&  verifsoumiaudit($one['num_tc'])!="1"  && ($_SESSION['PROFIL_USER']==5 || $_SESSION['PROFIL_USER']==8 || $_SESSION['PROFIL']==2) && verifretour($one['num_tc'])==0 ) { ?>
                                                         <a href="rap_reeval?code=<?php echo md5(time()); ?>&ident=<?php echo $one['num_tc']; ?>&code=<?php echo sha1($one['num_tc']); ?>#" class="label label-success " title="Réevaluer après la visite"   style="background:green;  border-radius:5px;"><i class="fa fa-list" ></i></a>
                                                         <?php } 
                                                         
                                                         elseif($one['agent_audit']!="") {
                                                            ?>
                                                            <a href="#" class="label label-success " title="Dossier a l'Audit"   style="background:#b8ecb8;  border-radius:5px;"><i class="fa fa-lock" ></i></a>

                                                        <?php }
                                                        else{
                                                            ?>
                                                            <a href="#" class="label label-success " title="Dossier a la reevaluation"   style="background:#7fff00;  border-radius:5px;"><i class="fa fa-edit" ></i></a>
                                                        <?php

                                                        }
                                                         if($_SESSION['PROFIL_USER']==5 || $_SESSION['PROFIL']==2){
                                                            ?>
                                                             <a href="#" class="label label-success " title="Recotation du dossier"   data-toggle="modal" data-target="#<?php echo $one['id_Tc']; ?>fiche" style=" color:#000; background:#cdcdcd;  border-radius:5px;"><i class="fa fa-user" ></i></a>
                                                             <?php
                                                         }
                                                         
                                                         ?>
                                                       
                                                    </span>
                                                </td>
                                            </tr>
<div class="modal fade" id="<?php echo $one['id_Tc']; ?>fiche" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color:#cfeeda ;">
        <div class="modal-dialog"  role="document22">
            <div class="modal-content" style="width:1200px; margin-left:-300px; height:500px;">
                <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </a>
                </div>
                <div class="modal-body" style="background-color:#cfeeda ;" >     
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">        

                        <div class="simple-card" style="width:1150px; height:1320px; margin-left:0px;">
                            <?php include('include/recotation_reval.php') ; ?>
                            
                        </div>

                        
                    </div>
                </div>
                    
            </div>
                                                    
        </div>
        
</div>                                    
                                            
                                            <?php endforeach; ?> 
                                       </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
  
                </div>
            </div>

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

    <!-- <script src="assets/vendor/select2/js/select2.min.js"></script>
    <script src="assets/js/select2/select2.activ.js"></script>
    <script src="assets/js/select2/select2.full.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


    <!-- insertion pour sweet alert -->
    <script src="assets/sweet/sweetalert2.all.min.js"></script>
        <script src="assets/sweet/sweetalert2.min.js"></script>
   <?php if($_SESSION['ajout']=='ok'){ ?>
        <script > 

        const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
        })

        Toast.fire({
        icon: 'success',
        title: 'Enregistrement reussi'
        })  
    <?php } $_SESSION['ajout']='no'; ?>

    

    
    
        </script>
      

      
</body>
 
</html>