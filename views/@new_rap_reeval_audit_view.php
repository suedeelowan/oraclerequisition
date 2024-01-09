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

    /* Pour la pagination    */
  
    div.pager {
          text-align: right;
          margin: 1em 0;
      }
  
      div.pager span {
          display: inline-block;
          width: 1.8em;
          height: 1.8em;
          line-height: 1.8;
          text-align: center;
          cursor: pointer;
          background: #666;
          color: #fff;
          margin-right: 0.5em;
          border-radius:15px;
      }
      div.pager span:hover {background:orange;}
      div.pager span.active {
          background: #7BA05B;
          
      }	
      /* fin pagination*/

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
            <div class="container-fluid  dashboard-content" style="width:1050px; margin-left:250px;">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row"><?php //include('include/recherche_tc_desc.php');?></div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        
                    </div>
                </div>
                        <?php foreach ($response as $index => $tc_trouve): 
                     

                            if(  $tc_trouve['nbre']==1 ){ 
                               
                              
                             
                                ?>
                                
                                <!-- <script> document.location="rap_inspection_update?serach=<?php echo $tc_trouve['num_tc']; ?>";</script> -->
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
                                                <h5 class="card-header sidebar-dark" style="text-align: center; color:blue;">REEVALUATION DE LA FICHE DE DESCRIPTION PRODUITS APRES VISITE</h5>
                                                <div class="card-body">
                                                
                                                    <div class="card">
                                                            <h5 class="card-header" style="padding: 0px; line-height: 15px;"><span style="color:green; font-size:14px;">Informtaion Generales de la TC : <?php echo $tc_trouve['num_tc']; ?></span></h5>
                                                            <div class="card-body" id="ario">
                                                            
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Numero de Tc</span></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="hidden"  class="form-control" name="letc_id" value='<?php echo $tc_trouve['id_Tc']; ?>' >
                                                                        <input type="text"  class="form-control" required name="num_tc" id="myInput" value='<?php echo $tc_trouve['num_tc']; ?>' readonly>
                                                                        <!-- <input type="text"  class="form-control" required name="num_tc" id="myInput" value='<?php echo $uni['agent_visiteur']; ?>'onblur="myFunction()"> -->
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-4">
                                                                    <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Date de Tc</span></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6" >
                                                                            <input type="date"  class="form-control" required name="date_tc" value='<?php echo $tc_trouve['date_tc']; ?>' readonly>
                                                                        </div>
                                                                    </div>
                                                            </div>

                                                            <div class="col-4">
                                                                <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">N° de Declaration</span></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <!-- <input type="text"  class="form-control" name="num_declara" required minlength="10" size="10"> -->
                                                                        <input type="text"  class="form-control" name="num_declara" value="<?php  echo $tc_trouve['num_declaration']; ?>" readonly required  size="10">
                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </div>

                                                        <div class="row">
                                                            

                                                            <div class="col-4">
                                                                     <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Date de Declaration</span></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="date"  class="form-control" required name="date_declara" value='<?php  echo $tc_trouve['date_declara']; ?>' readonly>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Code Importateur</span></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="text"  class="form-control" required name="code_imp" value='<?php echo $tc_trouve['code_imp']; ?>' readonly>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-4">
                                                                    <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Nom Importateur</span></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="text"  class="form-control" required name="nom_imp" value='<?php  echo $tc_trouve['nom_imp']; ?>' readonly>
                                                                        </div>
                                                                    </div>
                                                            </div>



                                                        </div>
                                                
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille"> Code Declarant</span></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="text"  class="form-control" required name="code_declara" value='<?php echo $tc_trouve['code_declara']; ?>' readonly>
                                                                    </div>
                                                                </div>
                                                                

                                                            </div>

                                                            <div class="col-4">

                                                                    <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Nom Declarant</span></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="text"  class="form-control" required name="nom_declara" value='<?php echo $tc_trouve['nom_declara']; ?>' readonly>
                                                                        </div>
                                                                    </div>
                                                                   
                                                                    
                                                            </div>
                                                            <div class="col-4">   
                                                                <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Date cotation</span></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="date"  class="form-control"  name="Date_cotation" required value="<?php echo $tc_trouve['date_cotation'] ;?>" readonly="readonly">
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <div class="col-4">   
                                                                    <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Date de visite (rdv)</span></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="date"  class="form-control"  name="date_visite" value="<?php echo $tc_trouve['date_visite'] ;?>" readonly required>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                        
                                                            
                                                        </div> 
                                                           
                                                        <!-- <div class="row" style="border: e0f7e0 solid 1px; background-color: #f4fcf4; border-radius: 6px;">
                                                           
                                                        </div> -->
                                                         <br/>
                                                        <div class="row" style="border: green solid 1px; background-color: #e2eae5; border-radius: 6px;">
                                                            <div class="col-4">   
                                                                <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Date debut visite</span></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="date"  class="form-control"  name="date_Dvisite" value="<?php echo $tc_trouve['date_Dvisite'] ;?>" readonly required>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <div class="col-4">   
                                                                    <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Date fin visite</span></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="date"  class="form-control" name="date_Fvisite" value="<?php echo $tc_trouve['date_Fvisite'] ;?>" readonly required>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col-4">   
                                                                    <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Date rapport visite</span></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="date"  class="form-control" name="date_rapport" value="<?php echo $tc_trouve['date_cotation'] ;?>" readonly  required>
                                                                        </div>
                                                                    </div>
                                                            </div>

                                                            <div class="col-4">   
                                                                    <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Type de visite</span></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <select  required="required" readonly name="type_visite" class="form-control"  style="height: 30px;">
                                                                                <option value="<?php echo $tc_trouve['type_visite']; ?>" ><?php echo $tc_trouve['type_visite']; ?></option>
                                                                                <option value="VAD">VAD</option>
                                                                                <option value="VAQ">VAQ</option>
                                                                             </select>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col-4">   
                                                                <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Lieu visite</span></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="text"  class="form-control"  name="lieu_visite" value="<?php echo $tc_trouve['lieu_visite']; ?>" readonly required>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                           


                                                            <div class="col-4">   
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



                                                        </div>  
                                                            
                                                </div>
                                               
                                                <div class="card-body" style="padding:1.25 rem 0px 0px 0px;">
                                                        <div class="card" >
                                                            <h5 class="card-header" style="padding: 0px; line-height: 5px;"><span style="color:green; font-size:14px;">Informations Articles</span></h5>
                                                        </div>
                                                    
                                                        <table id="latable"  class="table table-striped table-bordered second paginated" style="width:100%;  font-size: 10px;" data-show-columns="true"   data-cookie-id-table="saveId"  cellspacing="0" data-toggle="table" data-pagination="true" data-search="true" data-show-pagination-switch="false" data-show-refresh="false" data-key-events="true" data-show-toggle="true" data-resizable="false" data-cookie="true"    data-show-export="true" data-click-to-select="false" data-toolbar="#toolbar">
                                                            <thead style="height:20px; height:10px;">
                                                                <tr style="background-color:#cdcdcd; font-size: 12px;; padding: 2px; margin: 1px; line-height: 1;">
                                                                    <td colspan="7" style="border-color: #000; text-align: center;">DECLARE</td>
                                                                    <td colspan="4" style="border-color: #000; text-align: center; background-color: #e2eae5; ">RECONNU</td></td> 
                                                                    <td colspan="3" style="border-color: #000; text-align: center; background-color: #a9c2b2; ">A REEVALUER</td></td> 
                                                                    
                                                                </tr>
                                                                
                                                                <tr style="background-color:#cdcdcd; font-size: 12px;; padding: 2px; margin: 1px; line-height: 1;">
                                                                    <td>Article</td>
                                                                    <td>Code SH</td>
                                                                    <td>Origine</td>
                                                                    <td>Quantite</td>
                                                                    <td>Unite</td>
                                                                    <td>Fob/Unit</td>
                                                                    <td>Total FOB</td>
                                                                    <td>Code SH</td>
                                                                    <td>Origine</td>
                                                                    <td>Quantite</td>
                                                                    <td>Unite</td>
                                                                    <td>Fob/Unit</td>
                                                                    <td >Total FOB</td> 
                                                                    <td>DC Previsionnel</td> 
                                                                    <td>MRD</td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            
                                                                <?php $i=0; foreach ($infotc as $index => $tcinfo): $i++; ?>
                                                                <tr style="background-color:#fff;">
                                                                    <td  style="width: 100%;"><?php echo $tcinfo['LIBELLE_COM'] ; ?></td>
                                                                    <td><?php echo $tcinfo['SH_TROUVE'] ; ?></td>
                                                                    <td><?php echo $tcinfo['ORIGINE'] ; ?></td>
                                                                    <td><?php echo $tcinfo['QTE_TROUVE'] ; ?></td>
                                                                    <td><?php echo $tcinfo['UNITE_TROUVE'] ; ?></td>
                                                                    <td></td>
                                                                    <td style="white-space: nowrap;"><?php echo $tcinfo['FOB_TROUVE_CFA'] ; ?></td>
                                                                    
                                                                    
                                                                    <td style="background-color: #e2eae5; "><?php echo $tcinfo['ADD_CODE_SH'] ; ?>
                                                                        <input type="hidden" name="ok[]" value="<?php echo $tcinfo['ID_ART'];?>"/>
                                                                        
                                                                        <input type="hidden" name="numtc<?php echo $tcinfo['ID_ART'];?>" value="<?php echo $tc_trouve['num_tc']; ?>" style="width: 55px;" readonly />
                                                                    </td>
                                                                    <td style="background-color: #e2eae5; "><?php echo $tcinfo['ADD_ORIGINE'] ; ?></td>
                                                                    <td style="background-color: #e2eae5; "><?php echo $tcinfo['ADD_QUANTITE'] ; ?><input type="hidden" id="qte<?php echo $i;?>"  value="<?php echo $tcinfo['ADD_QUANTITE'] ; ?>" oninput="calculer()" /></td>
                                                                    
                                                                    <td style="background-color: #e2eae5; "><?php echo $tcinfo['ADD_UNITE'] ; ?></td>
                                                                    <td style="background-color: #a9c2b2;"><input type="text" name="fobunit<?php echo $tcinfo['ID_ART'];?>" value="<?php echo $tcinfo['ADD_FOB_UNI'] ; ?>" style="width: 85px;" id="fob<?php echo $i;?>" oninput="calculer('qte<?php echo $i;?>','fob<?php echo $i;?>','resultat<?php echo $i;?>')"/></td>
                                                                    <td style="background-color: #a9c2b2;"><input type="text" name="fobtotal<?php echo $tcinfo['ID_ART'];?>" value="<?php echo $tcinfo['ADD_FOB_TOTAL'] ; ?>" style="width: 85px;" id="resultat<?php echo $i;?>" readonly /></td>
                                                                    <td style="background-color: #a9c2b2;"><input type="text" name="dc<?php echo $tcinfo['ID_ART'];?>" value="<?php echo $tcinfo['DC_PREVISIONNEL'] ; ?>" style="width: 85px;;" /></td>
                                                                    <td style="background-color: #a9c2b2; vertical-align: middle; text-align: center;"><input type="checkbox" name="mrd<?php echo $tcinfo['ID_ART'];?>"  <?php if($tcinfo['ADD_PRD_MRD']=="MRD"){ echo "checked" ;} ?> value="MRD"   /></td>
                                                                    
                                                                    <!-- <td>Article</td>
                                                                    <td>Article</td> -->
                                                                    <!-- <td><input type="checkbox"  name="check-tab1"></td> -->
                                                                </tr>
                                                                <?php endforeach; ?>
                                                                
                                                            </tbody>



                                                        </table>
                                                    </div>
                                                

                                                    <span><h4>NON DECLARE SUR LA FACTURE ET  TROUVE</h4></span>
                                                
                                                    
                                                    <div>
                                                        <table id="table1"  class="test table table-striped table-bordered second paginated1" style="width:100%;  font-size: 10px;" data-show-columns="true"   data-cookie-id-table="saveId"  cellspacing="0" data-toggle="table" data-pagination="true" data-search="true" data-show-pagination-switch="false" data-show-refresh="false" data-key-events="true" data-show-toggle="true" data-resizable="false" data-cookie="true"    data-show-export="true" data-click-to-select="false" data-toolbar="#toolbar">
                                                                <thead style="height:20px; height:10px;">
                                                                    
                                                                    <tr style="background-color:#cdcdcd;">
                                                                        <td>#</td>
                                                                        <td>Article</td>
                                                                        <td>Code SH</td>
                                                                        <td>Origine</td>
                                                                        <td>Quantite</td>
                                                                        <td>Unite</td>
                                                                        <td>Fob/Unit</td>
                                                                        <td>total/Fob</td>
                                                                        <td>DC Previsionnel</td>
                                                                        <td>PRD/MRD</td>  
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $i=1; foreach($article_new as $index=> $larticle): ?>
                                                                    <tr>
                                                                        
                                                                        <td>
                                                                            <!-- <input type='checkbox' name='select'> --><?php echo $i++; ?>
                                                                            <input type='hidden' name='updatearticle[]' value='<?php echo $larticle['ID_ART_TR'];?>' ></td>
                                                                        <td> <?php echo $larticle['TR_ARTICLE'];?><br/>
                                                                            <!-- <input type='text' name='aj_article<?php echo $larticle['ID_ART_TR'];?>' value='<?php echo $larticle['TR_ARTICLE'];?>' /> -->
                                                                        </td>
                                                                        <td> <?php echo $larticle['TR_CODE_SH'];?>
                                                                            
                                                                        </td>
                                                                        <td><?php echo $larticle['TR_ORIGINE'];?>
                                                                            
                                                                        </td>
                                                                        <td> <?php echo $larticle['TR_QUANTITE'];?> <input type="hidden" id="newqte<?php echo $i;?>"  value="<?php echo $larticle['TR_QUANTITE'] ; ?>" oninput="calculerarticle_new()"  />
                                                                        
                                                                        </td>
                                                                        <td> <?php echo $larticle['TR_UNITE'];?>
                                                                        
                                                                        </td>
                                                                        <td style="background-color: #a9c2b2;"> 
                                                                            <input type='text' name='aj_fobunit<?php echo $larticle['ID_ART_TR'];?>' value='<?php echo $larticle['TR_FOB_UNI'];?>' id="newfob<?php echo $i ;?>" oninput="calculerarticle_new('newqte<?php echo $i;?>','newfob<?php echo $i;?>','newresultat<?php echo $i;?>')" />
                                                                        </td>
                                                                        <td style="background-color: #a9c2b2;"> 
                                                                            <input type='text' name='aj_fobtotal<?php echo $larticle['ID_ART_TR'];?>' value='<?php echo $larticle['TR_FOB_TOTAL'];?>' id="newresultat<?php echo $i ; ?>"  readonly />
                                                                        </td>
                                                                        <td style="background-color: #a9c2b2;"> 
                                                                            <input type='text' name='aj_dc<?php echo $larticle['ID_ART_TR'];?>' value='<?php echo $larticle['DC_PREVISIONNEL'];?>' />
                                                                        </td>
                                                                        <td style="background-color: #a9c2b2;"> 
                                                                            <input type='checkbox' name='aj_mdr<?php echo $larticle['ID_ART_TR'];?>' <?php if($larticle['TR_PRD_MRD']=="MRD"){ echo 'checked' ;} ?> value='MRD' />
                                                                        </td>
                                                                    </tr>
                                                                    <?php endforeach; ?>
                                                                </tbody>
                                                        </table>

                                                        <!-- <button type="button" class="delete">Supprimer une ligne</button> -->
                                                    </div>

                                                
                
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group row text-right">
                                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                                <button type="submit" class="btn btn-space btn-success" value = ""  style="border-radius: 6px; background-color:#b8ecb8 ; color:#000;  width:120px; height: 35px;" name="envoyer">Enregistrer</button>
                                                                <!-- <button type="reset" class="btn btn-space btn-secondary" style="width:120px; height: 35px;"value="reset">Reinitialiser</button> -->
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
            	                $(document).ready(function() {
				$('#latable').DataTable();
				} );
				
				
				$('table.paginated').each(function() {
				    var currentPage = 0;
				    var numPerPage = 7;
				    var $table = $(this);
				    $table.bind('repaginate', function() {
				        $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
				    });
				    $table.trigger('repaginate');
				    var numRows = $table.find('tbody tr').length;
				    var numPages = Math.ceil(numRows / numPerPage);
				    var $pager = $('<div class="pager"></div>');
				    for (var page = 0; page < numPages; page++) {
				        $('<span class="page-number"></span>').text(page + 1).bind('click', {
				            newPage: page
				        }, function(event) {
				            currentPage = event.data['newPage'];
				            $table.trigger('repaginate');
				            $(this).addClass('active').siblings().removeClass('active');
				        }).appendTo($pager).addClass('clickable');
				    }
				    $pager.insertAfter($table).find('span.page-number:first').addClass('active');
				});

            
            $(document).ready(function() {
				$('#table1').DataTable();
				} );
				
                $('table.paginated1').each(function() {
				    var currentPage = 0;
				    var numPerPage = 7;
				    var $table = $(this);
				    $table.bind('repaginate', function() {
				        $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
				    });
				    $table.trigger('repaginate');
				    var numRows = $table.find('tbody tr').length;
				    var numPages = Math.ceil(numRows / numPerPage);
				    var $pager = $('<div class="pager"></div>');
				    for (var page = 0; page < numPages; page++) {
				        $('<span class="page-number"></span>').text(page + 1).bind('click', {
				            newPage: page
				        }, function(event) {
				            currentPage = event.data['newPage'];
				            $table.trigger('repaginate');
				            $(this).addClass('active').siblings().removeClass('active');
				        }).appendTo($pager).addClass('clickable');
				    }
				    $pager.insertAfter($table).find('span.page-number:first').addClass('active');
				});
    </script>

<script>
        function calculer(qte,fob,resultattotal) {
       
            
            var valeurChamp1 = parseFloat(document.getElementById(qte).value) || 0;
            var valeurChamp2 = parseFloat(document.getElementById(fob).value) || 0;
         
            var resultat = valeurChamp1 * valeurChamp2;
            //   var monresultat="resultat2";
            //   alert(resultat);
            // Mettre à jour le champ de résultat
            document.getElementById(resultattotal).value = resultat;
        }

        function calculerarticle_new(newqte,newfob,newresultattotal) {
           
       

       var Champ1 = parseFloat(document.getElementById(newqte).value) || 0;
       var Champ2 = parseFloat(document.getElementById(newfob).value) || 0;

    //    alert(Champ1);
    
       
       var newresultat = Champ1 * Champ2;
         var monresultat="resultat2";
        //  alert(resultat);
       // Mettre à jour le champ de résultat
       document.getElementById(newresultattotal).value = newresultat;
   }

     </script>
    
     
</body>
 
</html>