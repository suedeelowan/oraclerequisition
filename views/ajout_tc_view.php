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
    <script>
    function showConfirmation() {
   // Afficher un message de confirmation
   alert("Votre formulaire a été enregistré avec succès !");
}
</script>

</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
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
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content" style="width:1050px; margin-left:250px;">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        
                    </div>
                </div>
            
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- valifation types -->
                              <?php if(isset($_GET['search']))  { foreach ($info_tc as $index => $tc_trouve): 
                              
                              $tc_trouve['num_declaration'];
                              $numero_declaration=$tc_trouve['num_declaration'];
                              endforeach;
                            }?>
                        
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header sidebar-dark" style="text-align: center; color:blue;">Formulaire d'enregistrement de  la tc</h5>
                                <div class="card-body">
                                   <form id="validationform" method="post" data-parsley-validate="" novalidate="">
                                       <div class="card">
                                            <h5 class="card-header"><span style="color:green; font-size:14px;">Informtaion de la TC</span></h5>
                                               <div class="card-body">
                                            
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left" >Numero de Tc</label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                <input type="hidden"  class="form-control" name="id_Tc" value='<?php echo $one['id_Tc']; ?>'>
                                                                <input type="text"  class="form-control" required name="num_tc" id="myInput" value='<?php if($_GET['search']){ echo $tc_trouve['num_tc']; }?>' onblur="recherchetc(this)">
                                                                     <!-- <input type="text"  class="form-control" required name="num_tc" id="myInput" value='<?php echo $uni['agent_visiteur']; ?>'onblur="myFunction()"> -->
                                                               </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left">N° de Declaration</label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                    <!-- <input type="text"  class="form-control" name="num_declara" required minlength="10" size="10"> -->
                                                                    <input type="text"  class="form-control" name="num_declara" value='<?php if($_GET['search']){ echo $numero_declaration; }?>' required minlength="10" size="10">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left">Code Importateur</label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                     <input type="text"  class="form-control" required name="code_imp" value='<?php if($_GET['search']){ echo $tc_trouve['code_imp']; }?>'>
                                                            </div>
                                                        </div>
                                                           
                                                            <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"> Code Declarant</label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                    <input type="text"  class="form-control" required name="code_declara" value='<?php if($_GET['search']){ echo $tc_trouve['code_declara']; }?>'>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="col-4">
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left">Date de Tc</label>
                                                                    <div class="col-12 col-sm-8 col-lg-6" >
                                                                        <input type="date"  class="form-control" required name="date_tc" value='<?php if($_GET['search']){ echo $tc_trouve['date_tc']; }?>'>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left">Date de Declaration</label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="date"  class="form-control" required name="date_delara">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left">Nom Importateur</label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="text"  class="form-control" required name="nom_imp" value='<?php if($_GET['search']){ echo $tc_trouve['nom_imp']; }?>'>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left">Nom Declarant</label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="text"  class="form-control" required name="nom_declara" value='<?php if($_GET['search']){ echo $tc_trouve['nom_declara']; }?>'>
                                                                    </div>
                                                                </div>
                                                                
                                                        </div>
                                       
                                                        <div class="col-4">   
                                                                    <div class="form-group row">
                                                                            <label class="col-12 col-sm-6 col-form-label text-sm-left">Moyen de transport</label>
                                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                                    <select  name="moyen_transport" class="form-control" value='<?php if($_GET['search']){ echo $tc_trouve['moyen_transport']; }?>'>
                                                                                      <option value=''><?php if($_GET['search']){ echo $tc_trouve['moyen_tranp']; }?></option>
                                                                                        
                                                                                    </select>
                                                                                </div>
                                                                    </div>  
                                                                    
                                                                    <div class="form-group row">
                                                                            <label class="col-12 col-sm-6 col-form-label text-sm-left">Desc Marchandises</label>
                                                                            <div class="col-12 col-sm-8 col-lg-6" >
                                                                                <textarea id="story" rows="3" cols="100" class="form-control" name="marchandise" ><?php if($_GET['search']){ echo $tc_trouve['marchandise']; }?></textarea>
                                                                            </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Date de requisition</label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="date"  class="form-control" name="date_requi"  required value='<?php if($_GET['search']){ echo $tc_trouve['SDGR_Date']; }?>'>
                                                                        </div>
                                                                    </div>

                                                        </div>
                                                    </div>   
                                             
                                </div>
                                <div class="card" style=" height:20px;">
                                <h5 class="card-header"><span style="color:green; font-size:14px;">Information de l'Inspection</span></h5>
                                </div>
                                <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                            <!-- <form id="validationform" data-parsley-validate="" novalidate=""> -->
                                       
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-6 col-form-label text-sm-left">Date  rapport visite</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="date"  class="form-control" required name="date_rapport">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-6 col-form-label text-sm-left">Resultat de Visite</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select  name="conformite" class="form-control" required style="width:125px; height: 30px;" >
                                                   <option value="">--Selectionnez--</option>
                                                    <option value="conforme">Conforme</option>
                                                    <option value="Non conforme">Non conforme</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-6 col-form-label text-sm-left">Type de visite</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                               <select  name="type_visite" class="form-control" required >
                                                    <option value="">--Selectionnez--</option>
                                                    <option value="VAD">VAD</option>
                                                    <option value="VAQ">VAQ</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-6 col-form-label text-sm-left">Date fin visite</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="date"  class="form-control" name="date_Fvisite"  required>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="col-4">
                                      <!-- <form id="validationform" data-parsley-validate="" novalidate=""> -->
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-6 col-form-label text-sm-left">Date de visite</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="date"  class="form-control" name="date_visite"  required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-6 col-form-label text-sm-left">Lieu de visite</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text"  class="form-control" name="lieu_visite" required >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-6 col-form-label text-sm-left">VAV</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select  name="vav" class="form-control" >
                                                    <option value="">--Selectionnez--</option>
                                                    <option value="oui">Oui</option>
                                                    <option value="non">Non</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-6 col-form-label text-sm-left">Nom Operateur visite</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select  name="nom_op_visite" class="form-control" >
                                                <option value="">--Selectionnez--</option>
                                                    <option value="SORO">SORO</option>
                                                    <option value="TRAHIER">TRAHIER</option>
                                                    <option value="DIABAGATE">DIABAGATE</option>
                                                    <option value="BLAIMAN">BLAIMAN</option>
                                                    <option value="KOUAME">KOUAME</option>
                                                    <option value="TOURET">TOURET</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                      <!-- <form id="validationform" data-parsley-validate="" novalidate=""> -->
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-6 col-form-label text-sm-left">Agent visiteur</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select  name="agent_visiteur" class="form-control" required >
                                                    <option value="">--Selectionnez--</option>
                                                    <option value="SORO">SORO</option>
                                                    <option value="TRAHIER">TRAHIER</option>
                                                    <option value="DIABAGATE">DIABAGATE</option>
                                                    <option value="BLAIMAN">BLAIMAN</option>
                                                    <option value="KOUAME">KOUAME</option>
                                                    <option value="TOURET">TOURET</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-6 col-form-label text-sm-left">Date cotation</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="date"  name="Date_cotation" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-6 col-form-label text-sm-left">Date debut visite</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="date"  name="date_Dvisite" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-6 col-form-label text-sm-left">Nom Officier visite</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select  name="nom_off_visiteur" class="form-control" required >
                                                    <option value="">--Selectionnez--</option>
                                                    <option value="SORO">SORO</option>
                                                    <option value="TRAHIER">TRAHIER</option>
                                                    <option value="DIABAGATE">DIABAGATE</option>
                                                    <option value="BLAIMAN">BLAIMAN</option>
                                                    <option value="KOUAME">KOUAME</option>
                                                    <option value="TOURET">TOURET</option>
                                                </select>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    
                                    
                                </div>
 
                                </div>
                                
                            </div>
                                       <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row text-right">
                                                        <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                            <button type="submit" class="btn btn-space btn-primary" value = "Click me" onclick = "fun();" style="width:120px; height: 35px;" name="envoyer">Enregistrer</button>
                                                            <button type="reset" class="btn btn-space btn-secondary" style="width:120px; height: 35px;"value="reset">Reinitialiser</button>
                                                        </div>
                                                </div>
                                            </div>
                            
                                        </div>
                                        
                            </div>
                            
                
                            </form> 

                          
                            </div>
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
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
    <script>

        function recherchetc(val) {
                    var ledata = val.value;
                    window.location.href = "ajout_tc?search="+ledata;

                        }
    </script>
    

    
</body>
 
</html>