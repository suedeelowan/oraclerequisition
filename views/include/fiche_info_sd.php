
                             
    <?php //foreach ($info_tc as $index => $tc_trouve):     endforeach;     ?>
    <style>
.pourinfo{
    line-height: 12px;
    /* white-space: nowrap; */
    margin: 10px 0px 10px 0px;
    padding: 0px 0px 0px 0px;
    /* border-right: solid 1px #dcdcdc; */
}
.cote{

    border-right: solid 1px #000;
    vertical-align: middle;
}

    </style>
        <div class="row">
            <form id="validationform11" method="post" enctype="multipart/form-data" >
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
                                                <h5 class="card-header" style="padding: 0px; line-height:15px;"><span style="color:green; font-size:14px;">Information Generales de la TC : <?php echo $one['num_tc']; ?></span></h5>
                                                <div class="card-body" id="ario">
                                                
                                                        <div class="row" style="font-size: 10px;">
                                                            <div class="col-6">
                                                                <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left" ><FONT size="2"color="#000000">Numero de Tc</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                    <input type="hidden"  class="form-control" name="id_Tc" value='<?php echo $one['id_Tc']; ?>'>
                                                                    <input type="text"  class="form-control" style="height: 30px;font-size:14px;" required name="num_tc" id="myInput" value='<?php echo $one['num_tc']; ?>'>
                                                                        <!-- <input type="text"  class="form-control" required name="num_tc" id="myInput" value='<?php echo $uni['agent_visiteur']; ?>'onblur="myFunction()"> -->
                                                                </div>
                                                                </div>
                                                                <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">N° de Declaration</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <!-- <input type="text"  class="form-control" name="num_declara" required minlength="10" size="10"> -->
                                                                        <input type="text"  class="form-control" name="num_declara" value="<?php  echo $one['num_declaration']; ?>" required minlength="10" size="10" style="height: 30px;font-size:14px;">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left "><span class="lataille">Importateur</span> </label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="text"  class="form-control" required name="code_imp" value='<?php echo $one['code_imp']; ?>'>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Code Declarant</span></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="text"  class="form-control" required name="code_declara" value='<?php echo $one['code_declara']; ?>'>
                                                                    </div>
                                                                </div>
                                                                

                                                            </div>

                                                            <div class="col-6">
                                                                    <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Date de Tc</span></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6" >
                                                                            <input type="date"  class="form-control" required name="date_tc" value='<?php echo $one['date_tc']; ?>'>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Date de Declaration</span></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="date"  class="form-control" required name="date_declara" value='<?php  echo $one['date_declara']; ?>'>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Nom Importateur</span></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="text"  class="form-control" required name="nom_imp" value='<?php  echo $one['nom_imp']; ?>'>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Nom Declarant</span></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="text"  class="form-control" required name="nom_declara" value='<?php echo $one['nom_declara']; ?>'>
                                                                        </div>
                                                                    </div>
                                                                   
                                                                    
                                                            </div>
                                        
                                                            
                                                        </div> 
                                                           
                                                        <div class="row" style="border: e0f7e0 solid 1px; background-color: #f4fcf4; border-radius: 6px;">
                                                            <div class="col-6">   
                                                                <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Date cotation</span></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="date"  class="form-control"  name="Date_cotation" required value="<?php echo $one['date_cotation'] ;?>" readonly="readonly">
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <div class="col-6">   
                                                                    <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Date de visite (rdv)</span></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="date"  class="form-control"  name="date_visite" value="<?php echo $one['date_visite'] ;?>" required>
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
                                                                        <input type="date"  class="form-control"  name="date_Dvisite" value="<?php echo $one['date_Dvisite'] ;?>"   required>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <div class="col-6">   
                                                                    <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Date fin visite</span></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="date"  class="form-control" name="date_Fvisite" value="<?php echo $one['date_Fvisite'] ;?>"  required>
                                                                        </div>
                                                                    </div>
                                                            </div>

                                                            <div class="col-6">   
                                                                    <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><span class="lataille">Type de visite</span></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <select  required="required" name="type_visite" class="form-control"  style="height: 30px;">
                                                                                <option value="<?php echo $one['type_visite']; ?>"><?php echo $one['type_visite']; ?></option>
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
                                                                        <textarea type="text"  class="form-control"  name="lieu_visite" style="height:50px;font-size:14px; width: 100%;" ><?php echo $one['lieu_visite']; ?></textarea>
                                                                        
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
                                                                            <option value="<?php echo $one['agent_visit']; ?>"><?php echo $one['agent_visit']; ?></option>
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
                                                                        <input name="agent_pl" class="form-control"  value="<?php echo $one['nom_agent_PL']; ?>" />

                                                                    </div>
                                                                </div>
                                                            </div> 




                                                            











                                                        </div>  
                                                
                        </div> 
                        <div class="card" style=" text-align: center;">
                            <!-- <h5 class="card-header"> -->
                            <h5 class="card-header"><span style="color:green; font-size:14px;">Informations Spécifiques de la TC : <?php echo $one['num_tc']; ?></span></h5>
                                <!-- <span style="color:green; font-size:14px;"></span> -->
                            <!-- </h5> -->
                        </div>
                        
                               
                        <div class="card-body" style="padding: 0px; margin:0px;">
                                        <span><h6> DECLARE SUR LA FACTURE ET  TROUVE</h6></span>
                                        <div class="card  "  style="background-color:#dcdcdc; border: solid 2px #000;">
                                            <div class=" row col-12 ">
                                                            <div class=" col-8" style="border-color: #000; text-align: center;">
                                                                DECLARE
                                                            </div>
                                                            <div class=" col-4" style="color: #fff; font-weight: bold; text-align: center; background-color:green;">
                                                                RECONNU
                                                            </div>
                                            </div>
                                        </div>
                                        <div class="card" style="padding-left:15px;  border:solid 1px #000; background-color:#e2eae5;">
                                            <div class="row col-12 "  style="font-size :12px;  background-color:#e2eae5; vertical-align: middle; font-weight: bold;  border: solid 0px #000;  border-right:solid 0px;">
                                                        <div class="col-2 cote" style="border-color: #000; text-align: left;">
                                                        Article
                                                        </div>
                                                        <div class="col-1 cote" style="border-color: #000; text-align: center;  white-space: nowrap; ">
                                                        Code SH
                                                        </div>
                                                        <div class="col-1 cote" style="border-color: #000; text-align: center;">
                                                        Origine
                                                        </div>
                                                        <div class="col-1 cote" style="border-color: #000; text-align: center;">
                                                        Quantite
                                                        </div>
                                                        <div class="col-1 cote" style="border-color: #000; text-align: center;">
                                                        Unite
                                                        </div>
                                                        <div class="col-1 cote" style="border-color: #000; text-align: center;">
                                                        Fob/Unit
                                                        </div>
                                                        <div class="col-1 cote" style="border-color: #000; text-align: center;">
                                                        Total FOB
                                                        </div>
                                                        <div class="col-1 cote" style="border-color: #000; text-align: center;">
                                                        Code SH
                                                        </div>
                                                        <div class="col-1 cote" style="border-color: #000; text-align: center;">
                                                        Origine
                                                        </div>
                                                        <div class="col-1 cote" style="border-color: #000; text-align: center;">
                                                        Quantite
                                                        </div>
                                                        <div class="col-1 cote" style="border-color: #000; text-align: center; border-right:solid 0px;">
                                                        Unite
                                                        </div>
                                                       
                                            </div>
                                        </div>
                                <?php $yz=0; foreach (afficheArticletrouve($one['num_tc']) as $index => $tc_trouve):   $yz++; ?>
                                <div class="row pourinfo" style="font-size :12px; border-color: #ff0; line-height: 19px; <?php if($yz % 2 === 0) echo 'background-color: #dcdcdc;'; ?> margin: 0px; padding: 0px; ">
                                                    <div class="col-2 pourinfo" style="border-color: #000; text-align: left; ">
                                                    <?php echo $yz.'- ' ; echo $tc_trouve['LIBELLE_COM']; ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: left;  white-space: nowrap; ">
                                                    <?php echo $tc_trouve['SH_TROUVE']; ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center;">
                                                    <?php echo $tc_trouve['ORIGINE']; ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center;">
                                                    <?php echo $tc_trouve['QTE_TROUVE']; ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center;">
                                                    <?php echo $tc_trouve['UNITE_TROUVE']; ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center;">
                                                    XXX
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center;">
                                                    <?php echo $tc_trouve['FOB_TROUVE_CFA']; ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center;">
                                                    <?php echo $tc_trouve['ADD_CODE_SH']; ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center;">
                                                    <?php echo $tc_trouve['ADD_ORIGINE']; ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center;">
                                                    <?php echo $tc_trouve['ADD_QUANTITE']; ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center;">
                                                    <?php echo $tc_trouve['ADD_UNITE']; ?>
                                                    </div>

                                </div>
                                <hr style="margin-top: 2px; margin-bottom: 2px; color:#000;">
                                <?php endforeach; ?>
                           
                            
                            
                            <div>
                                
                                <span><h6>DECLARE SUR LA FACTURE ET NON TROUVE</h6></span>
                            </div>
                            

                            
                            <div class="card" style="padding-left:15px;  border:solid 1px #000; background-color:#e2eae5;">
                                <div class="row col-12"  style="font-size :12px; background-color:#e2eae5;  vertical-align: middle; font-weight: bold;  border: solid 0px #000;">
                                                        <div class="col-2 cote" style="border-color: #000; text-align: center;">
                                                        Article
                                                        </div>
                                                        <div class="col-1 cote" style="border-color: #000; text-align: center;">
                                                        Code SH
                                                        </div>
                                                        <div class="col-1 cote" style="border-color: #000; text-align: center;">
                                                        Origine
                                                        </div>
                                                        <div class="col-1 cote" style="border-color: #000; text-align: center;">
                                                        Quantite
                                                        </div>
                                                        <div class="col-1 cote" style="border-color: #000; text-align: center;">
                                                        Unite
                                                        </div>
                                                        <div class="col-1 cote" style="border-color: #000; text-align: center;">
                                                        Fob/Unit
                                                        </div>
                                                        <div class="col-1 cote" style="border-color: #000; text-align: center;">
                                                        Total FOB
                                                        </div>
                                                        <div class="col-1 cote" style="border-color: #000; text-align: center;">
                                                        Code SH
                                                        </div>
                                                        <div class="col-1 cote" style="border-color: #000; text-align: center;">
                                                        Origine
                                                        </div>
                                                        <div class="col-1 cote" style="border-color: #000; text-align: center;">
                                                        Quantite
                                                        </div>
                                                        <div class="col-1 cote" style="border-color: #000; text-align: center; border-right:solid 0px;">
                                                        Unite
                                                        </div>
                                                    
                                </div>
                            </div>
                            <?php $yz=0; foreach (afficheArticleNONtrouve($one['num_tc']) as $index => $tc_nontrouve):   $yz++; ?>
                           
                            <div class="row "  style="font-size :12px; border-color: #ff0; margin: 0px; padding: 0px;<?php if($yz % 2 === 0) echo 'background-color: #dcdcdc;'; ?>">
                                                    <div class="col-2 pourinfo" style="border-color: #000; text-align: left; ">
                                                    <?php echo $yz.'- ' ;  echo $tc_nontrouve['LIBELLE_COM']; ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: left;  white-space: nowrap; ">
                                                    <?php echo $tc_nontrouve['SH_TROUVE']; ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center;">
                                                    <?php echo $tc_nontrouve['ORIGINE']; ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center;">
                                                    <?php echo $tc_nontrouve['QTE_TROUVE']; ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center;">
                                                    <?php echo $tc_nontrouve['UNITE_TROUVE']; ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center;">
                                                    XXX
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center;">
                                                    <?php echo $tc_nontrouve['FOB_TROUVE_CFA']; ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center;">
                                                    <?php echo $tc_nontrouve['ADD_CODE_SH']; ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center;">
                                                    <?php echo $tc_nontrouve['ADD_ORIGINE']; ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center;">
                                                    <?php echo $tc_nontrouve['ADD_QUANTITE']; ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center;">
                                                    <?php echo $tc_nontrouve['ADD_UNIT']; ?>
                                                    </div>
                                                    <!-- <td>Fob/Unit</td>
                                            <td>Total FOB</td> 
                                            <td>MRD</td> -->
                            </div>
                           
                            <hr style="margin-top: 2px; margin-bottom: 2px;">
                            <?php endforeach; ?>
                            
                            <span><h6><br/>NON DECLARE SUR LA FACTURE ET  TROUVE</h6></span>
                        
                            <div class="card" style="padding-left:15px;  border:solid 1px #000; background-color:#e2eae5;">      
                                <div class="row"  style="font-size :12px; background-color:#e2eae5;  vertical-align: middle; font-weight: bold;  border: solid 0px #000;" >
                                                        <div class="col-3 cote" style="border-color: #000; text-align: center;">
                                                        Article
                                                        </div>
                                                        <div class="col-2 cote" style="border-color: #000; text-align: center;">
                                                        Code SH
                                                        </div>
                                                        <div class="col-2 cote" style="border-color: #000; text-align: center;">
                                                        Origine
                                                        </div>
                                                        <div class="col-2 cote" style="border-color: #000; text-align: center;">
                                                        Quantite
                                                        </div>
                                                        <div class="col-1 cote" style="border-color: #000; text-align: center; border-right:solid 1px #000;">
                                                        Unite
                                                        </div>
                                                       
                                </div>
                            </div>

                            <?php $yz=0; foreach (afficheArticleNouveau($one['num_tc']) as $index => $tc_nouveau):  $yz++;?>
                            <div class="row "  style="font-size :12px; border-color: #ff0; margin: 0px; padding: 0px;<?php if($yz % 2 === 0) echo 'background-color: #dcdcdc;'; ?>">
                              
                                    <div class="col-3 pourinfo" style="border-color: #000; text-align: center; ">
                                    <?php echo $yz.'- ' ;  echo $tc_nouveau['TR_ARTICLE']; ?>
                                    </div>
                                    <div class="col-2 pourinfo" style="border-color: #000; text-align: center;">
                                    <?php echo $tc_nouveau['TR_CODE_SH']; ?>
                                    </div>
                                    <div class="col-2 pourinfo" style="border-color: #000; text-align: center;">
                                    <?php echo $tc_nouveau['TR_ORIGINE']; ?>
                                    </div>
                                    <div class="col-2 pourinfo" style="border-color: #000; text-align: center;">
                                    <?php echo $tc_nouveau['TR_QUANTITE']; ?>
                                    </div>
                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center;">
                                    <?php echo $tc_nouveau['TR_UNITE']; ?>
                                    </div>
                            </div>
                            <hr style="margin-top: 2px; margin-bottom: 2px;">

                            <?php endforeach; ?>
                                <br/>
                            <div class="row col-12">
                                <div class="col-5" style="border: #eff1f4 solid 1px; background-color: #e9f3ff; border-radius: 6px; ">
                               
                                                  
                                    <div class="form-group " style="vertical-align: bottom; text-align: center;">
                                     
                                            <label class="col-form-label t"><b>Observation</b></label>
                                        
                                        
                                            <textarea style="width: 100%;" name="comment"> </textarea> <br/><br/>
                                            <button type="submit" class="retour btn " style="border-radius: 6px; background-color:#b7d1f9 ;" name="retourne_sd">Rejeter la conformité</button> 
    
                                        
                                
                                    </div>
                                
                                </div>

                                <div class="col-2">
                                </div>

                                <div class="col-5"  style=" border: #eff1f4 solid 1px; background-color: #f4fcf4;  border-radius: 6px; ">
                                    <div class="form-group " style="vertical-align: bottom; text-align: center;">
                                        <label class=" col-form-label "><b>Observation</b></label>
                                           <textarea style="width: 100%;" name="marchandise"> </textarea><br/><br/>
                                       <button type="submit" class="retour btn btn-space btn-success" style="border-radius: 6px; background-color:#b8ecb8 ; color:#000;"  name="conforme_sd">Valider la conformité </button>
                                        
                                    </div>
                                </div>


                            </div>


                            
                           

                        </div>
                        
                    </div>

                    
                                
                </div>
    
            </form> 

                
        </div>
            
    <?php      ?>
    
   


        <script>
                
                

            let togg<?php echo $yz;?>a = document.getElementById("togg<?php echo $yz;?>a");
            let togg<?php echo $yz;?>b = document.getElementById("togg<?php echo $yz;?>b");
            let togg<?php echo $yz;?>c = document.getElementById("togg<?php echo $yz;?>c");
            let d1<?php echo $yz;?> = document.getElementById("retourner<?php echo $yz;?>");
            let d2<?php echo $yz;?> = document.getElementById("conforme<?php echo $yz;?>");
            let d3<?php echo $yz;?> = document.getElementById("nonconforme<?php echo $yz;?>");

            togg<?php echo $yz;?>a.addEventListener("click", () => {
            if(getComputedStyle(d1<?php echo $yz;?>).display != "none"){
                d1<?php echo $yz;?>.style.display = "none";
            }
            else {
                d1<?php echo $yz;?>.style.display = "block";
                d2<?php echo $yz;?>.style.display = "none";
                d3<?php echo $yz;?>.style.display = "none";
            }
            })


            togg<?php echo $yz;?>b.addEventListener("click", () => {
            if(getComputedStyle(d2<?php echo $yz;?>).display != "none"){
                d2<?php echo $yz;?>.style.display = "none";
            }
            else {
                d2<?php echo $yz;?>.style.display = "block";
                d3<?php echo $yz;?>.style.display = "none";
                d1<?php echo $yz;?>.style.display = "none";
            }
            })

            togg<?php echo $yz;?>c.addEventListener("click", () => {
            if(getComputedStyle(d3<?php echo $yz;?>).display != "none"){
                d3<?php echo $yz;?>.style.display = "none";
            }
            else {
                d3<?php echo $yz;?>.style.display = "block";
                d2<?php echo $yz;?>.style.display = "none";
                d1<?php echo $yz;?>.style.display = "none";
            }
            })


           

        </script>

                
               