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
.lataille{
    font-size: 14px;
    color:#000000;
}
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
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content" style="width:82%; margin-left:250px;">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row"><?php include('include/recherche_tc_desc.php');?></div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        
                    </div>
                </div>
                        <?php foreach ($response as $index => $tc_trouve): 
                            if($tc_trouve['nbre']==0){  ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Desolé ! ( N&deg TC <?php echo $_POST["num_tc"]; ?> ) </strong> &nbsp;&nbsp;Introuvable - Referer vous avotre superieur pour plus d'information
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                        <?php

                            }
                            elseif($tc_trouve['onglet']==''){ ?>
                            
                           
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Dossier non Coter !!! ( N&deg TC <?php echo $tc_trouve["num_tc"]; ?> ) </strong> &nbsp;&nbsp;Referer vous avotre superieur pour plus d'information
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                            <?php }
                             elseif($tc_trouve['onglet']!=9 && $tc_trouve['onglet']!=''){   ?>
                            
                           
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Dossier Verrouiller ! ( N&deg TC <?php echo $tc_trouve["num_tc"]; ?> ) </strong> &nbsp;&nbsp; Ref&eacute;rer vous à votre sup&eacute;rieur hi&eacute;rachique pour plus d'information
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                            <?php }
                            elseif($tc_trouve['onglet']==9 && substr($tc_trouve['agent_visit'],0,7)!=$_SESSION['IDUSER']){ ?>
                                 <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                        <strong>Dossier ( N&deg TC <?php echo $tc_trouve["num_tc"]; echo '@'.substr($tc_trouve["agent_visit"],0,9).'--'.$tc_trouve["agent_visit"]; ?> ) </strong> &nbsp;&nbsp; Ne figure pas dans votre listing de visite
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>

                            <?php
                            }
                            elseif( $tc_trouve['onglet']==9 && $tc_trouve['nbre']==1 && substr($tc_trouve['agent_visit'],0,7)==$_SESSION['IDUSER']){ 
                               
                                if(veriftransmission($tc_trouve['num_tc'])==1 || verifsoumis($tc_trouve['num_tc'])==1){
                                ?>
                                
                                <script> document.location="rap_inspection_update?serach=<?php echo $tc_trouve['num_tc']; ?>";</script>
                                <?php } ?>
                    <div class="row">
                        <form id="validationform11" method="post" >
                            <!-- ============================================================== -->
                            <!-- valifation types -->
                                <?php //if(isset($_GET['search']))  { foreach ($info_tc as $index => $tc_trouve): 
                                
                                $tc_trouve['num_declaration'];
                                $numero_declaration=$tc_trouve['num_declaration'];
                                // endforeach;
                                //}?>
                            
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header sidebar-dark" style="text-align: center; color:blue;">FICHE DE DESCRIPTION PRODUITS APRES VISITE</h5>
                                    <div class="card-body">
                                            <div class="card " style="background-color: #dcdcdc; border-radius: 5px;">
                                                <b> INSTRUCTION DU CHEF AVANT VISITE </b> 
                                                <div class="row col-12"><p style="color:red; font-weight:bold;"><?php echo $one['INSTRUCTION_CHEF']; ?> </p></div>
                                            </div>
                                        <div class="card">
                                                <h5 class="card-header" style="padding: 0px; line-height:15px;"><span style="color:green; font-size:14px;">Information Generales de la TC : <?php echo $tc_trouve['num_tc']; ?></span></h5>
                                                <div class="card-body" id="ario">
                                                
                                                        <div class="row" style="font-size: 10px;">
                                                            <div class="col-6">
                                                                <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left" ><FONT size="2"color="#000000">Numero de Tc</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                    <input type="hidden"  class="form-control" name="id_Tc" value='<?php echo $tc_trouve['id_Tc']; ?>'>
                                                                    <input type="text"  class="form-control" style="height: 30px;font-size:14px;" required name="num_tc" id="myInput" value='<?php echo $tc_trouve['num_tc']; ?>'>
                                                                        <!-- <input type="text"  class="form-control" required name="num_tc" id="myInput" value='<?php echo $uni['agent_visiteur']; ?>'onblur="myFunction()"> -->
                                                                </div>
                                                                </div>
                                                                <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">N° de Declaration</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <!-- <input type="text"  class="form-control" name="num_declara" required minlength="10" size="10"> -->
                                                                        <input type="text"  class="form-control" name="num_declara" value="<?php  echo $tc_trouve['num_declaration']; ?>" required minlength="10" size="10" style="height: 30px;font-size:14px;">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left "><span class="lataille">Importateur</span> </label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="text"  class="form-control" required name="code_imp" value='<?php echo $tc_trouve['code_imp']; ?>'>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Code Declarant</span></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="text"  class="form-control" required name="code_declara" value='<?php echo $tc_trouve['code_declara']; ?>'>
                                                                    </div>
                                                                </div>
                                                                

                                                            </div>

                                                            <div class="col-6">
                                                                    <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Date de Tc</span></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6" >
                                                                            <input type="date"  class="form-control" required name="date_tc" value='<?php echo $tc_trouve['date_tc']; ?>'>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Date de Declaration</span></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="date"  class="form-control" required name="date_declara" value='<?php  echo $tc_trouve['date_declara']; ?>'>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Nom Importateur</span></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="text"  class="form-control" required name="nom_imp" value='<?php  echo $tc_trouve['nom_imp']; ?>'>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Nom Declarant</span></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="text"  class="form-control" required name="nom_declara" value='<?php echo $tc_trouve['nom_declara']; ?>'>
                                                                        </div>
                                                                    </div>
                                                                   
                                                                    
                                                            </div>
                                        
                                                            
                                                        </div> 
                                                           
                                                        <div class="row" style="border: e0f7e0 solid 1px; background-color: #f4fcf4; border-radius: 6px;">
                                                            <div class="col-6">   
                                                                <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Date cotation</span></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="date"  class="form-control"  name="Date_cotation" required value="<?php echo $tc_trouve['date_cotation'] ;?>" readonly="readonly">
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <div class="col-6">   
                                                                    <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Date de visite (rdv)</span></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="date"  class="form-control"  name="date_visite" value="<?php echo $tc_trouve['date_visite'] ;?>" required>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                         <br/>
                                                        <div class="row" style="border: green solid 1px; background-color: #e2eae5; border-radius: 6px;">
                                                            <div class="col-6">   
                                                                <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Date debut visite</span></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="date"  class="form-control"  name="date_Dvisite" value="<?php echo $tc_trouve['date_Dvisite'] ;?>"   required>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <div class="col-6">   
                                                                    <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Date fin visite</span></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="date"  class="form-control" name="date_Fvisite" value="<?php echo $tc_trouve['date_Fvisite'] ;?>"  required>
                                                                        </div>
                                                                    </div>
                                                            </div>

                                                            <div class="col-6">   
                                                                    <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Type de visite</span></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <select  required="required" name="type_visite" class="form-control"  style="height: 30px;">
                                                                                <option value="<?php echo $tc_trouve['type_visite']; ?>"><?php echo $tc_trouve['type_visite']; ?></option>
                                                                                <option value="VAD">VAD</option>
                                                                                <option value="VAQ">VAQ</option>
                                                                             </select>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col-6">   
                                                                <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Lieu visite</span></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <textarea type="text"  class="form-control"  name="lieu_visite" style="height:50px;font-size:14px; width: 100%;" ><?php echo $tc_trouve['lieu_visite']; ?></textarea>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <div class="col-6">   
                                                                    <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Date rapport visite</span></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="date"  class="form-control" name="date_rapport" readonly value="<?php echo date('Y-m-d',time());?>"  required>
                                                                        </div>
                                                                    </div>
                                                            </div>


                                                            <div class="col-6">   
                                                                <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Agent</span></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                    
                                                                        <select  name="agent_visiteur" class="form-control" required="required" readonly="readonly" >
                                                                            <option value="<?php echo $tc_trouve['agent_visit']; ?>"><?php echo $tc_trouve['agent_visit']; ?></option>
                                                                            <?php //foreach(agt_service(CONTS) as $index => $agtinspec) : ?>                                                                                    
                                                                            <!-- <option value="<?php echo $agtinspec['NOM_AG']; ?>"><?php echo $agtinspec['NOM_AG']; ?></option> -->
                                                                            <?php //endforeach; ?>
                                                                            
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div> 

                                                            <div class="col-8">   
                                                                <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                    <label class="col-12 col-sm-4 col-form-label text-sm-left"><span class="lataille">Agent Premiere ligne</span></label>
                                                                    <div class="col-12 col-sm-8 col-lg-8" >
                                                                        <input name="agent_pl" class="form-control"  value="<?php echo $tc_trouve['nom_agent_PL']; ?>" />

                                                                    </div>
                                                                </div>
                                                            </div> 




                                                            











                                                        </div>  
                                                
                                    </div>
                                    <div class="card">
                                    <h5 class="card-header" style="padding: 0px; line-height:15px;"><span style="color:green; font-size:14px;">Informations Spécifiques de la TC : <?php echo $tc_trouve['num_tc']; ?></span></h5>
                                        <!-- <h5 class="card-header"><span style="color:green; font-size:14px;"></span></h5> -->
                                    </div>
                                    <span><h6>DECLARE SUR LA FACTURE ET  TROUVE</h6></span>
                                    <div class="card-body">
                                        <div class="row">
                                            <table class="table table-striped table-bordered second" style="width:100%; line-height: 0.5;">
                                                <thead style="height:20px; height:10px;">
                                                    <tr style="background-color:#e2eae5; border-color: #ff0; ">
                                                        <td colspan="6" style="border-color: #000; text-align: center;">DECLARE</td>
                                                        <td colspan="7" style="border-color: #000; text-align: center;">RECONNU</td>

                                                    </tr>
                                                </thead>
                                            </table>
                                            <table id="table1"  class="table table-striped table-bordered second" style="width:100%; font-size:10px;" data-show-columns="true"   data-cookie-id-table="saveId"  cellspacing="0" data-toggle="table" data-pagination="true" data-search="true" data-show-pagination-switch="false" data-show-refresh="false" data-key-events="true" data-show-toggle="true" data-resizable="false" data-cookie="true"    data-show-export="true" data-click-to-select="false" data-toolbar="#toolbar">
                                                <thead style="height:20px; height:10px;">
                                                    
                                                    <tr style="background-color:#cdcdcd; font-size: 12px;; padding: 2px; margin: 1px; line-height: 1;">
                                                        <td>Article</td>
                                                        <td>Code SH</td>
                                                        <td>Origine</td>
                                                        <td>Quantite</td>
                                                        <td>Unite</td>
                                                        <td>Fob/Unit</td>
                                                        <td>Total FOB</td>

                                                        <!-- <td>Article</td> -->
                                                        <td>Code SH</td>
                                                        <td>Origine</td>
                                                        <td>Quantite</td>
                                                        <td>Unite</td>
                                                        <!-- <td>Fob/Unit</td>
                                                        <td>Total FOB</td> 
                                                        <td>MRD</td> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                
                                                    <?php $i=0; foreach ($infotc as $index => $tcinfo): $i++; ?>
                                                    <tr style="background-color:#fff; font-size:10px;">
                                                        <td><?php echo $i.' - &nbsp;';  echo $tcinfo['LIBELLE_COM'] ; ?></td>
                                                        <td><?php echo $tcinfo['SH_TROUVE'] ; ?></td>
                                                        <td><?php echo $tcinfo['ORIGINE'] ; ?></td>
                                                        <td><?php echo $tcinfo['QTE_TROUVE'] ; ?></td>
                                                        <td><?php echo $tcinfo['UNITE_TROUVE'] ; ?></td>
                                                        <td></td>
                                                        <td style="white-space: nowrap;"><?php echo number_format($tcinfo['FOB_TROUVE_CFA'],0,'',' ')  ; ?></td>
                                                        
                                                        
                                                        <td>
                                                            <input type="hidden" name="ok[]" value="<?php echo $tcinfo['ID_ART'];?>"/>
                                                            <input type="text" name="sh<?php echo $tcinfo['ID_ART'];?>" value="<?php echo $tcinfo['SH_TROUVE'] ; ?>" style="width: 75px;" />
                                                            <input type="hidden" name="numtc<?php echo $tcinfo['ID_ART'];?>" value="<?php echo $tc_trouve['num_tc']; ?>" style="width: 65px;" />
                                                        </td>
                                                        <td><input type="text" name="origine<?php echo $tcinfo['ID_ART'];?>" value="<?php echo $tcinfo['ORIGINE']; ?>" style="width: 65px;" title="<?php echo $tcinfo['ORIGINE']; ?>" /></td>
                                                        <td><input type="text" name="quantite<?php echo $tcinfo['ID_ART'];?>" value="<?php echo $tcinfo['QTE_TROUVE']; ?>" style="width: 45px;" title="<?php echo $tcinfo['QTE_TROUVE']; ?>"/></td>
                                                        <td><input type="text" name="unite<?php echo $tcinfo['ID_ART'];?>" value="<?php echo $tcinfo['UNITE_TROUVE']; ?>" style="width: 45px;" title="<?php echo $tcinfo['UNITE_TROUVE']; ?>"/></td>
                                                        
                                                        <!-- <td>Article</td>
                                                        <td>Article</td> -->
                                                        <td><input type="checkbox"  name="check-tab1"></td>
                                                        <td style="width: 2px;"> <input type='hidden' value='<?php echo  $tcinfo['ID_ART'];?>' name='ario<?php echo $tcinfo['ID_ART'];?>' />  </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                    
                                                </tbody>



                                            </table>
                                        </div>
                                        <div class="tab tab-btn" align="center">
                                            <br/>
                                            <span onclick="tab1_To_tab2();" style="border-radius: 4px; background-color: #FBAA99; padding: 3px 0px 2px 0px; cursor: pointer; " >&nbsp; &#x2193; &nbsp; </span>
                                            &nbsp;
                                            <span onclick="tab2_To_tab1();" style="border-radius: 4px; background-color: #a9c2b2;   padding: 3px 0px 2px 0px; cursor: pointer;"> &nbsp; &#x2191; &nbsp; </span>
                                           
                                        </div>
                                        <hr>
                                        <span><h6>DECLARE SUR LA FACTURE ET NON TROUVE</h6></span>
                                        <div class="row">
                                            <table id="table2" class="table table-striped table-bordered second" style="width:100%; font-size:10px;" data-show-columns="true"   data-cookie-id-table="saveId"  cellspacing="0" data-toggle="table" data-pagination="true" data-search="true" data-show-pagination-switch="false" data-show-refresh="false" data-key-events="true" data-show-toggle="true" data-resizable="false" data-cookie="true"    data-show-export="true" data-click-to-select="false" data-toolbar="#toolbar">
                                                <thead style="height:20px; height:10px;">
                                                    <!-- <tr style="background-color:#e2eae5; border-color: #ff0; ">
                                                    <td colspan="7" style="border-color: #000; text-align: center;">DECLARE</td>
                                                    <td colspan="7" style="border-color: #000; text-align: center;">RECONNU</td>

                                                    </tr> -->
                                                    <tr style="background-color:#cdcdcd; ">
                                                        <td>Article</td>
                                                        <td>Code SH</td>
                                                        <td>Origine</td>
                                                        <td>Quantite</td>
                                                        <td>Unite</td>
                                                        <td>Fob/Unit</td>
                                                        <td>Total FOB</td>

                                                        <!-- <td>Article</td> -->
                                                        <td>Code SH</td>
                                                        <td>Origine</td>
                                                        <td>Quantite</td>
                                                        <td>Unite</td>
                                                        <!-- <td>Fob/Unit</td>
                                                        <td>Total FOB</td> -->
                                                    </tr>
                                                </thead>
                                            



                                            </table>
                                        </div>

                                        <span><h6><br/>NON DECLARE SUR LA FACTURE ET  TROUVE</h6></span>
                                    
                                        <div style="font-size: 13px;">
                                
                                            <!-- <input type="text" id="monid"  name="eqpart[]" value="<?php echo time(); ?>"> -->
                                            
                                            <input type="text" id="art" name="article" placeholder="Article">
                                            <input type="text" id="sh" placeholder="Code SH">
                                            <input type="text" id="orgn" placeholder="Origine">
                                        
                                            <input type="text" style="width: 65px;" id="qte" placeholder="Quantite">
                                            <input type="text" style="width: 50px;" id="unit" placeholder="Unité">
                                            
                                            <input type="button" class="add" style="border-radius: 4px; background-color:#b8ecb8 ; color:#000; ;" value="Ajouter une ligne">
                                        </div>
                                        <br/>
                                        <div>
                                            <table  class="test table table-striped table-bordered second" style="width:100%; font-size: 10px;" data-show-columns="true"   data-cookie-id-table="saveId"  cellspacing="0" data-toggle="table" data-pagination="true" data-search="true" data-show-pagination-switch="false" data-show-refresh="false" data-key-events="true" data-show-toggle="true" data-resizable="false" data-cookie="true"    data-show-export="true" data-click-to-select="false" data-toolbar="#toolbar">
                                                    <thead style="height:20px; height:10px;">
                                                        
                                                        <tr style="background-color:#cdcdcd;">
                                                            <td>#</td>
                                                            <td>Article</td>
                                                            <td>Code SH</td>
                                                            <td>Origine</td>
                                                            <td>Quantite</td>
                                                            <td>Unite</td>
                                                            <!-- <td>Fob/Unit</td>
                                                            <td>total/Fob</td>
                                                            <td>PRD/MRD</td>   -->
                                                        </tr>
                                                    </thead>
                                                    <tbody></tbody>
                                            </table>
                                            <br/>
                                            <button type="button" class="delete" style="border-radius: 4px; background-color:#FBAA99 ; color:#000; ;">Supprimer une ligne</button>
                                        </div>

                                    
    
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row text-right">
                                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                    <button type="submit" class="btn btn-space btn-primary" value = "Click me"  style="width:120px; height: 35px;" name="envoyer">Enregistrer</button>
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
                
                        <?php }
                        endforeach ?>
           
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

            function tab1_To_tab2()
            {
                var table1 = document.getElementById("table1"),
                    table2 = document.getElementById("table2"),
                    checkboxes = document.getElementsByName("check-tab1");
                console.log("Val1 = " + checkboxes.length);
                 for(var i = 0; i < checkboxes.length; i++)
                     if(checkboxes[i].checked)
                        {
                            // create new row and cells
                            var newRow = table2.insertRow(table2.length),
                                cell1 = newRow.insertCell(0),
                                cell2 = newRow.insertCell(1),
                                cell3 = newRow.insertCell(2),
                                cell4 = newRow.insertCell(3);
                                cell5 = newRow.insertCell(4);
                                cell6 = newRow.insertCell(5);
                                cell7 = newRow.insertCell(6);
                                cell8 = newRow.insertCell(7);
                                cell9 = newRow.insertCell(8);
                                cell10 = newRow.insertCell(9);
                                cell11 = newRow.insertCell(10);
                                cell12 = newRow.insertCell(11);
                                // cell13 = newRow.insertCell(12);
                               
                            // add values to the cells
                            cell1.innerHTML = table1.rows[i+1].cells[0].innerHTML;
                            cell2.innerHTML = table1.rows[i+1].cells[1].innerHTML;
                            cell3.innerHTML = table1.rows[i+1].cells[2].innerHTML;
                            cell4.innerHTML = table1.rows[i+1].cells[3].innerHTML;
                            cell5.innerHTML = table1.rows[i+1].cells[4].innerHTML;
                            cell6.innerHTML = table1.rows[i+1].cells[5].innerHTML;
                            cell7.innerHTML = table1.rows[i+1].cells[6].innerHTML;
                            cell8.innerHTML = table1.rows[i+1].cells[7].innerHTML;
                            cell9.innerHTML = table1.rows[i+1].cells[8].innerHTML;
                            cell10.innerHTML = table1.rows[i+1].cells[9].innerHTML;
                            cell11.innerHTML = table1.rows[i+1].cells[10].innerHTML;
                            // cell12.innerHTML = table1.rows[i+1].cells[11].innerHTML;
                            cell12.innerHTML = "<input type='checkbox' name='check-tab2'> ";
                           
                            // remove the transfered rows from the first table [table1]
                            var index = table1.rows[i+1].rowIndex;
                            table1.deleteRow(index);
                            // we have deleted some rows so the checkboxes.length have changed
                            // so we have to decrement the value of i
                            i--;
                           console.log(checkboxes.length);
                        }
            }


            function tab2_To_tab1()
            {
                var table1 = document.getElementById("table1"),
                    table2 = document.getElementById("table2"),
                    checkboxes = document.getElementsByName("check-tab2");
                console.log("Val1 = " + checkboxes.length);
                 for(var i = 0; i < checkboxes.length; i++)
                     if(checkboxes[i].checked)
                        {
                            // create new row and cells
                            var newRow = table1.insertRow(table1.length),
                                cell1 = newRow.insertCell(0),
                                cell2 = newRow.insertCell(1),
                                cell3 = newRow.insertCell(2),
                                cell4 = newRow.insertCell(3);
                                cell5 = newRow.insertCell(4);
                                cell6 = newRow.insertCell(5);
                                cell7 = newRow.insertCell(6);
                                cell8 = newRow.insertCell(7);
                                cell9 = newRow.insertCell(8);
                                cell10 = newRow.insertCell(9);
                                cell11 = newRow.insertCell(10);
                                cell12 = newRow.insertCell(11);
                            // add values to the cells
                            cell1.innerHTML = table2.rows[i+1].cells[0].innerHTML;
                            cell2.innerHTML = table2.rows[i+1].cells[1].innerHTML;
                            cell3.innerHTML = table2.rows[i+1].cells[2].innerHTML;
                            cell4.innerHTML = table2.rows[i+1].cells[3].innerHTML;
                            cell5.innerHTML = table2.rows[i+1].cells[4].innerHTML;
                            cell6.innerHTML = table2.rows[i+1].cells[5].innerHTML;
                            cell7.innerHTML = table2.rows[i+1].cells[6].innerHTML;
                            cell8.innerHTML = table2.rows[i+1].cells[7].innerHTML;
                            cell9.innerHTML = table2.rows[i+1].cells[8].innerHTML;
                            cell10.innerHTML = table2.rows[i+1].cells[9].innerHTML;
                            cell11.innerHTML = table2.rows[i+1].cells[10].innerHTML;
                            cell12.innerHTML = "<input type='checkbox' name='check-tab1'>";
                           
                            // remove the transfered rows from the second table [table2]
                            var index = table2.rows[i+1].rowIndex;
                            table2.deleteRow(index);
                            // we have deleted some rows so the checkboxes.length have changed
                            // so we have to decrement the value of i
                            i--;
                           console.log(checkboxes.length);
                        }
            }
    </script>
    
    <script type="text/javascript">
        // Mettez le code javascript ici.
            $(document).ready(function() {
                const id=1;
            $(".add").click(function() {
                                
                //var monid = $("#monid").val();
                var now = new Date().getTime();
                //alert(now);
                
                var monid= $("#monid").val();
                var art = $("#art").val();
                var sh = $("#sh").val();
                var qte = $("#qte").val();
                var orgn = $("#orgn").val();
                var unit = $("#unit").val();
                
                // var nom = $("#nom").val();
                // var email = $("#email").val();
                var ligne = "<tr><td><input type='checkbox' name='select'><input type='hidden' name='addarticle[]' value='"+now+"'></td><td> <input type='hidden' name='aj_article"+now+"' value='"+art+"' />" + art + "</td><td> <input type='hidden' name='aj_sh"+now+"' value='"+sh+"' />" + sh + "</td><td> <input type='hidden' name='aj_origine"+now+"' value='"+orgn+"' />" + orgn + "</td><td> <input type='hidden' name='aj_quantite"+now+"' value='"+qte+"' />" + qte + "</td><td> <input type='hidden' name='aj_unite"+now+"' value='"+unit+"' />" + unit + "</td></tr>";
                $("table.test").append(ligne);
                
            });
            $(".delete").click(function() {
                $("table.test").find('input[name="select"]').each(function() {
                    if ($(this).is(":checked")) {
                        $(this).parents("table.test tr").remove();
                    }
                });
            });
        });  
    </script>
    
</body>
 
</html>