<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Tables</title>
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
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">Suivi des requisitions</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
  
                        <li class="nav-item dropdown nav-user">
                        <form id="" method="POST" class="dropdown-item">
                                        <!-- <a href="login.php" class="list-group-item"></a> -->
                            <button type="submit"  name="Deconnexion">
                            <i class="demo-pli-unlock icon-lg icon-fw"></i> D&eacute;connexion</boutton>
                            
                        </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- ============================================================== -->
        <div class="dashboard-wrapper" >
        <div class="dashboard-wrapper" >
            <div class="container-fluid  dashboard-content" style="width:1100px; margin-left:275px;padding:30px 30px 0px 30px">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row"><?php include('include/recherche_date_tc.php');?></div>
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
                                <h5 class="mb-0">Liste des Tc </h5>
                                <form method="post" >

                              <input type="submit" value="Exporter vers Excel" name="excel" /></form>
                            </div>
                            <div class="card-body" style="width:100%">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%" data-show-columns="true"   data-cookie-id-table="saveId"  cellspacing="0" data-toggle="table" data-pagination="true" data-search="true" data-show-pagination-switch="false" data-show-refresh="false" data-key-events="true" data-show-toggle="true" data-resizable="false" data-cookie="true"    data-show-export="true" data-click-to-select="false" data-toolbar="#toolbar">
                                        <thead>
                                        <tr>
                                                <th><FONT size="2" color="#000000">N° ordre</FONT></th>
                                                <th><FONT size="2" color="#000000">Tc id</FONT></th>
                                                <th><FONT size="2" color="#000000">Date de Tc</FONT></th>
                                                <th><FONT size="2" color="#000000">N° Declaration</FONT></th>
                                                <th><FONT size="2" color="#000000">Date Declaration</FONT></th>
                                                <th><FONT size="2" color="#000000">Code Importateur</FONT></th>
                                                <th><FONT size="2" color="#000000">Nom Importateur</FONT></th>
                                                <th><FONT size="2" color="#000000">Date de visite</FONT></th>
                                                <th><FONT size="2" color="#000000">Type de visite</FONT></th>
                                                <th><FONT size="2" color="#000000">VAV</FONT></th>
                                                <th><FONT size="2" color="#000000">Fob Declaré</FONT></th>
                                                <th><FONT size="2" color="#000000">Fob réévalué</FONT></th>
                                                <th><FONT size="2" color="#000000">Fob après contest</FONT></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                       <?php foreach ($all as $index => $one): ?>
                                        <tr style="line-height: 12px ;">
                                                <td style="height: 10px;"><FONT size="1" color="#000000"><?php echo $one['id_Tc']; ?></FONT></td>
                                                <td style="height: 10px;"><FONT size="1" color="#000000"><?php echo $one['num_tc']; ?></FONT></td>
                                                <td style="height: 10px;"><FONT size="1" color="#000000"><?php echo dateTransform($one['date_tc']); ?></FONT></td>
                                                <td style="height: 10px;"><FONT size="1" color="#000000"><?php echo $one['num_declaration']; ?></FONT></td>
                                                <td style="height: 10px;"><FONT size="1" color="#000000"><?php echo dateTransform($one['date_declara']); ?></FONT></td> 
                                                <td style="height: 10px;"><FONT size="1" color="#000000"><?php echo $one['code_imp']; ?></FONT></td>
                                                <td style="height: 10px;"><FONT size="1"color="#000000"><?php echo $one['nom_imp']; ?></FONT></td>
                                                <td style="height: 10px;"><FONT size="1"color="#000000"><?php echo dateTransform($one['date_visite']); ?></FONT></td>
                                                <td style="height: 10px;"><FONT size="1" color="#000000"><?php echo $one['type_visite']; ?></FONT></td>
                                                <td style="height: 10px;"><FONT size="1" color="#000000"><?php echo $one['vav']; ?></FONT></td>
                                                <td style="height: 10px;"><FONT size="1"color="#000000"><?php echo $one['fob_declare']; ?></FONT></td>
                                                <td style="height: 10px;"><FONT size="1" color="#000000"><?php echo $one['fob_reeva']; ?></FONT></td>
                                                <td style="height: 10px;"><FONT size="1" color="#000000"><?php echo $one['fob_apres_contest']; ?></FONT></td>
                                            </tr>
                                            
                                            <?php endforeach; ?> 
                                       </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
  
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer" style=" z-index:-9999; position: absolute;">
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
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
           
        </div>
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