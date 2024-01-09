<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Login page | SUIVI DES REQUISITIONS - DARRV -  </title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!--=================================================-->



    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="plugins/pace/pace.min.css" rel="stylesheet">
    <script src="plugins/pace/pace.min.js"></script>


        
    <!--Demo [ DEMONSTRATION ]-->
    <link href="css/demo/nifty-demo.min.css" rel="stylesheet">

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
    <link href="assets/css/auth.css" rel="stylesheet">
         
</head>
<style type="text/css">
	body 
	{ 
	  background:url(img/bg-banner-tb2.png) no-repeat;
	  background-color:#FDFEFE; 

	}
	</style>  
<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body >
    <div id="container" class="cls-container" style="background-color: transparent;">
        
		<!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		<!-- <div id="bg-overlay"></div> -->
		
		
		<!-- LOGIN FORM -->
		<!--===================================================-->
		<div class="wrapper" >
		    <div class="auth-content" >
		        <div class="card" style="width:400px;  ">
                
                        <div class=" card-body text-center" >
                                        <div class="mb-4" >
                                            <img class="brand" src="assets/img/logo.png"  alt="bootstraper logo" style="width: 12%;">
                                            <img class="brand" src="assets/img/logo_cruc.png" alt="bootstraper logo" style="width: 40%;">
                                        </div>
                                        <div class="mb-4">
                                            <!-- <img class="brand" src="assets/img/logo_cruc.png" alt="bootstraper logo" style="width: 40%;"> -->
                                        </div>
                                            <!-- <div class="mar-ver pad-btm"> -->
                                                <!-- <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/> -->
                                                    <?php echo $message.''.$no_cnx; ?>
                                                <!-- <br/><br/> -->
                                                <?php
                                                        //echo dateFrancais(); 
                                                       // echo $date->format('l d F Y H:i:s');

                                                    //    $laconnect = oci_connect( 'BDREQUISITION', 'DARRV2023' ,  'localhost/xe');
                                                    //    $req_select_admin = "select * from BDREQUISITION.UTILISATEUR where LOGIN_USER='admin' ";
                                                    //    $resultat_rech_admin = oci_parse($laconnect, $req_select_admin);
                                                    //    oci_execute($resultat_rech_admin);
                                                    //    while($info_table_admin= oci_fetch_assoc($resultat_rech_admin)) { echo $info_table_admin['LOGIN_USER'].'ario'; }
                                                                                                      
                                                ?>

                                                <h3 class="mb-4 text-dark ">Authentification</h3>
                                                <!-- <p>Sign In to your account</p> -->
                                            <!-- </div> -->
                                    <form action="" method="post">
                                        <div class="form-group mb-3 text-start" >
                                            <input type="text" class="form-control" name="matricule" placeholder="Matricule" autofocus>
                                        </div>
                                        <div class="form-group" >
                                            <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                                        </div>
                                        <div class="checkbox pad-btm text-left">
                                            <input id="demo-form-checkbox" class="magic-checkbox hidden" type="hidden">
                                            </br>
                                            <button class="retour btn btn-space btn-success" style="border-radius: 6px; background-color:#b8ecb8 ; color:#000; font-size: 20px;"  name="login" type="submit" >Connexion</button>
                                        </div>
                                        
                                    </form>
                                    <div class="pad-all">
                                         <a href="mailto:marcelkongoza1@yahoo.fr?subject=Mot%20de%20passe%20oubie" class="btn-link mar-rgt text-dark">Mot de passe oubli&eacute; ? Contactez l'administrateur</a>

                                    </div>
		                </div>
                        
                       
                    </div>
		    </div>
		</div>
		<!--===================================================-->
		
		
		
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->

    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src="js/jquery.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="js/bootstrap.min.js"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="js/nifty.min.js"></script>




    <!--=================================================-->
    
    <!--Background Image [ DEMONSTRATION ]-->
    <script src="js/demo/bg-images.js"></script>

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
