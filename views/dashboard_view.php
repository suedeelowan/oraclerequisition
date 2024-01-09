<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tableau de Bord</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
    <style type="text/css">
        .highcharts-figure, .highcharts-data-table table {
            min-width: 320px; 
            max-width: 660px;
            margin: 1em auto;
        }

        .highcharts-data-table table {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #EBEBEB;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }
        .highcharts-data-table caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }
        .highcharts-data-table th {
            font-weight: 600;
            padding: 0.5em;
        }
        .highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
            padding: 0.5em;
        }
        .highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
            background: #f8f8f8;
        }
        .highcharts-data-table tr:hover {
            background: #f1f7ff;
        }

	</style>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="assets/code/highcharts.js"></script>
<script src="assets/code/modules/exporting.js"></script>
<script src="assets/code/modules/export-data.js"></script>
<script src="assets/code/modules/accessibility.js"></script>
<script src="assets/code/highcharts-3d.js"></script>

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
                    <div class="col-3" >
                        <div class="card" style="text-align: center;">
                                <div class="card-header" style="width:100%; background-color:#cfeeda ;">
                                    <h5 class="mb-0"> Visite à effectuer</h5>
                                </div>
                            
                            <div class="card-body" >
                                <div class="table-responsive">
                                    <span class="badge badge-warning">15 dossiers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card" style="text-align: center;">
                                <div class="card-header" style="width:100%;background-color:#cfeeda ;">
                                    <h5 class="mb-0"> Rapport Soumis </h5>
                                </div>
                            
                            <div class="card-body" style="width:100%">
                                <div class="table-responsive">
                                    <span class="badge badge-success">20 dossiers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card" style="text-align: center;">
                                <div class="card-header" style="width:100% ; background-color:#cfeeda ;">
                                    <h5 class="mb-0"> Rapport Incomplet </h5>
                                </div>
                            
                            <div class="card-body" style="width:100%">
                                <div class="table-responsive">
                                <span class="badge badge-danger">02 retour</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3" >
                        <div class="card" style="text-align: center;">
                                <div class="card-header" style="width:100% ; background-color:#cfeeda ;">
                                    <h5 class="mb-0"> Dossiers Traités </h5>
                                </div>
                            
                            <div class="card-body" style="width:100%; background-color:#cfeeda ;" >
                                <div class="table-responsive">
                                <span class="badge badge-success">02 retour</span>
                                </div>
                            </div>
                        </div>
                    </div>
  
                </div>
                <div class="m-b-60" id="container">
                    


                </div>
               
            </div>

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

    <script>
                    Highcharts.chart('container', {
                chart: {
                    type: 'pie',
                    options3d: {
                        enabled: true,
                        alpha: 45,
                        beta: 0
                    }
                },
                title: {
                    text: 'Etat des statuts de dossiers soumis à l\'inspection',
                    align: 'left'
                },
                subtitle: {
                    text: 'Source: ' +
                        '<a href="@@"' +'target="_blank">SDARRV</a>',
                    align: 'left'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        depth: 35,
                        dataLabels: {
                            enabled: true,
                            format: '{point.name}'
                        }
                    }
                },
                series: [{
                    type: 'pie',
                    name: 'Pourcentage',
                    data: [
                        ['Visite à effectuer', 23],
                        ['Rapport Soumis ', 18],
                        // {
                        //     name: 'Rapport Soumis ',
                        //     y: 12,
                        //     sliced: true,
                        //     selected: true
                        // },
                        ['Rapport Incomplet ', 9]
                        // ,
                        // ['Vivo', 8],
                        // ['Others', 30]
                    ]
                }]
            });




    </script>

</body>
 
</html>