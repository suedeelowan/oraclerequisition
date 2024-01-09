
                             
    <?php //foreach ($info_tc as $index => $one):     endforeach;     ?>
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
.lataille{
    font-size: 14px;
    color:#000000;
}

    </style>
        <div class="row">
            <form id="validationform11" method="post" enctype="multipart/form-data" >
                <!-- ============================================================== -->
                <!-- valifation types -->
                    <?php //if(isset($_GET['search']))  { foreach ($info_tc as $index => $one): 
                    
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
                                            <?php  if(verifretour($one['num_tc'])>0){ ?>
                                                <div class="card " style="background-color: #dcdcdc; border-radius: 5px;">
                                                <b>Commentaire </b> 
                                                <div class="row col-12"><p style="color:red; font-weight:bold;"><?php echo commentaire_de_retour($one['num_tc']); ?>  </p></div>
                                            </div>
                                                <?php
                                            }

                                            ?>
                                        <div class="card">
                                                <h5 class="card-header" style="padding: 0px; line-height:15px;"><span style="color:green; font-size:14px;">Information Generales de la TC : <?php echo $one['num_tc']; ?></span></h5>
                                                <div class="card-body" id="ario">
                                                
                                                        <div class="row" style="font-size: 10px;">
                                                            <div class="col-6">
                                                                <div class="form-group row" style="padding: 12px 0px 0px 0px;">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left" ><FONT size="2"color="#000000">Numero de Tc</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                    <input type="hidden"  class="form-control" name="id_Tc" value='<?php echo $one['id_Tc']; ?>'>
                                                                    <input type="hidden"  class="form-control" name="agent_reeva" value='<?php echo $one['agent_reeva']; ?>'>
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
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: left;  white-space: nowrap;  ">
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
                                                    <?php echo round($tc_trouve['FOB_TROUVE_CFA']/$tc_trouve['QTE_TROUVE'],2); ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center;">
                                                    <?php echo $tc_trouve['FOB_TROUVE_CFA']; ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center; <?php if($tc_trouve['SH_TROUVE']!=$tc_trouve['ADD_CODE_SH']) { echo 'color:#FF6961; "'; }?>">
                                                    <?php echo $tc_trouve['ADD_CODE_SH']; ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center; <?php if($tc_trouve['ORIGINE']!=$tc_trouve['ADD_ORIGINE']) { echo 'color:#FF6961; "'; }?>">
                                                    <?php echo $tc_trouve['ADD_ORIGINE']; ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center; <?php if($tc_trouve['QTE_TROUVE']!=$tc_trouve['ADD_QUANTITE']) { echo 'color:#FF6961; "'; }?>">
                                                    <?php echo $tc_trouve['ADD_QUANTITE']; ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center; <?php if($tc_trouve['UNITE_TROUVE']!=$tc_trouve['ADD_UNITE']) { echo 'color:#FF6961; "'; }?>">
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
                                                    <?php echo round($one['FOB_TROUVE_CFA']/$one['QTE_TROUVE'],2); ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center;">
                                                    <?php echo $tc_nontrouve['FOB_TROUVE_CFA']; ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center; <?php if($tc_nontrouve['SH_TROUVE']!=$tc_nontrouve['ADD_CODE_SH']) { echo 'color:#FF6961; "'; }?>">
                                                    <?php echo $tc_nontrouve['ADD_CODE_SH']; ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center; <?php if($tc_nontrouve['ORIGINE']!=$tc_nontrouve['ADD_ORIGINE']) { echo 'color:#FF6961; "'; }?>">
                                                    <?php echo $tc_nontrouve['ADD_ORIGINE']; ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center; <?php if($tc_nontrouve['QTE_TROUVE']!=$tc_nontrouve['ADD_QUANTITE']) { echo 'color:#FF6961; "'; }?>">
                                                    <?php echo $tc_nontrouve['ADD_QUANTITE']; ?>
                                                    </div>
                                                    <div class="col-1 pourinfo" style="border-color: #000; text-align: center; <?php if($tc_nontrouve['UNITE_TROUVE']!=$tc_nontrouve['ADD_UNITE']) { echo 'color:#FF6961; "'; }?>">
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

                            <div class="row center"  style="border: #eff1f4 solid 1px; background-color: #eff1f4; border-radius: 6px; text-align: center;">
                                                <div class="col-12">
                                                <!-- <input type="submit" class=" " style="border-radius: 6px; background-color:#b7d1f9 ;" name="retourne" value="Enregistrer le retour" /> -->
                                                            <div id="togg1"class=" btn btn-space btn-primary" style="margin: 2px; padding: 4px;line-height: 1;"   >Retourner</div>&nbsp;&nbsp;&nbsp;
                                                            <div id="togg2" class="conforme btn btn-space btn-success" style="margin: 2px; padding: 4px;line-height: 1;"   >Conforme</div>&nbsp;&nbsp;&nbsp;
                                                            <div id="togg3" class="nonconforme btn btn-space btn-danger"style="margin: 2px; padding: 4px;line-height: 1;"   >Non conforme</div>
                                                            
                                                            
                                                </div>
                                                      
                            </div> 
                            <!-- Bloc pour retour -->
                            <div class="row" id="retourner" style="display: none; border: #eff1f4 solid 1px; background-color: #e9f3ff;">
                                                <div class="col-12">   
                                                    <div class="form-group row">
                                                        <div class="col-8">
                                                            <label class="col-4 col-form-label text-sm-left"><b>Commentaire Motivé</b></label>
                                                        
                                                        
                                                            <textarea style="width: 100%;" name="comment"> </textarea> 

                                                        </div>
                                                        <div class="col-4" style="vertical-align: bottom; text-align: center;">   
                                                            <br/><br/>
                                                            <button type="submit" class="retour btn " style="border-radius: 6px; background-color:#b7d1f9 ;" name="retourne">Enregistrer le retour</button>
                                                          
                                                           
                                                       
                                                </div>
                                                    </div>
                                                </div> 
                                                
                            </div> 

                            <!-- Bloc si conforme -->
                            <div class="row " id="conforme" style="display: none; border: #eff1f4 solid 1px; background-color: #f4fcf4;">
                                    <div class="col-12">   
                                        <div class="form-group row">
                                       
                                            <div class="col-8">
                                             <label class="col-4 col-form-label text-sm-left"><b>Observation</b></label>
                                                <textarea style="width: 100%;" name="marchandise"> </textarea> 

                                            </div>
                                            <div class="col-4">   
                                            <!-- <div class="form-group row"> -->
                                                <!-- <label class="col-12 col-sm-6 col-form-label text-sm-left">Date fin visite</label> --><br/><br/>
                                                <button type="submit" class="retour btn btn-space btn-success" style="border-radius: 6px; background-color:#b8ecb8 ; color:#000;"  name="conforme">Sauvegarder</button>
                                                
                                                <!-- </div> -->
                                            <!-- </div> -->
                                            
                                    </div>
                                        </div>
                                    </div> 
                                    
                            </div> 

                            <!-- Bloc si nonconforme -->
                            <div class="row" id="nonconforme" style="display: none; border: #eff1f4 solid 1px; background-color: #ffeae9;">

                                    <div class="card-body">
                                            <div class="row">
                                                <div class="col-4">
                                                        <div class="form-group row">
                                                            <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date de visite</FONT></label>
                                                            <div class="col-12 col-sm-8 col-lg-6">
                                                                <input type="date"  required="required" class="form-control" name="date_visite"  value='<?php echo $one['date_visite']; ?>'  style="height: 40px;">
                                                            </div>
                                                        </div>  
                                                </div>
                                                <div class="col-8">
                                                        <div class="form-group row">
                                                            <label class="col-2 col-form-label text-sm-left"><FONT size="2"color="#000000">Lieu de visite</FONT></label>
                                                            <div class="col-10 ">
                                                                <textarea required="required" class="form-control" name="lieu_visite"  style="height: 50px; width: 100%;"><?php echo $one['lieu_visite']; ?></textarea>
                                                                
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                        <div class="form-group row">
                                                            <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date cotation</FONT></label>
                                                            <div class="col-12 col-sm-8 col-lg-6">
                                                                <input type="date"  required="required" name="Date_cotation" value="<?php echo $one['date_cotation']; ?>"  class="form-control"style="height: 40px;">
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-8">
                                                        <div class="form-group row">
                                                            <label class="col-2  col-form-label text-sm-left"><FONT size="2"color="#000000">Agent visiteur</FONT></label>
                                                            <div class="col-10 ">
                                                                <select  name="agent_visiteur" class="form-control" required="required" readonly >
                                                                    
                                                                    <option value="<?php echo $one['agent_visit'];; ?>"><?php echo $one['agent_visit'];?></option>
                                                                    <?php foreach(agt_service(INS) as $index => $agtinspec) : ?>                                                                                    
                                                                    <option value="<?php echo $agtinspec['NOM_AG']; ?>"><?php echo $agtinspec['NOM_AG']; ?></option>
                                                                    <?php endforeach; ?>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                        <div class="form-group row">
                                                            <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Type de visite</FONT></label>
                                                            <div class="col-12 col-sm-8 col-lg-6">
                                                                <select  required="required" name="type_visite" class="form-control"  style="height: 40px;" readonly>
                                                                    <option value="<?php echo $one['type_visite']; ?>"><?php echo $one['type_visite']; ?></option>
                                                                    <option value="VAD">VAD</option>
                                                                    <option value="VAQ">VAQ</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                        <div class="form-group row">
                                                            <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date debut visite</FONT></label>
                                                            <div class="col-12 col-sm-8 col-lg-6">
                                                                <input type="date" required="required" name="date_Dvisite" value='<?php echo $one['date_Dvisite']; ?>' class="form-control"style="height: 40px;">
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                        <div class="form-group row">
                                                            <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date fin visite</FONT></label>
                                                            <div class="col-12 col-sm-8 col-lg-6">
                                                                <input type="date"  required="required" class="form-control" value='<?php echo $one['date_Fvisite']; ?>' name="date_Fvisite"  style="height: 40px;">
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                        <div class="form-group row">
                                                            <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date  rapport visite</FONT></label>
                                                            <div class="col-12 col-sm-8 col-lg-6">
                                                                <input type="date"  class="form-control" value='<?php echo $one['date_depot_visit']; ?>' required name="date_rapport" >
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group row">
                                                            <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Resultat Visite</FONT></label>
                                                            <div class="col-12 col-sm-8 col-lg-6">
                                                                <select  name="conformite" class="form-control" required="required" style="height: 35px;" readonly id="resultvisit" onchange="afficherBloc()" >
                                                                        
                                                                    <!-- <option value="conforme">Conforme</option> -->
                                                                    <option value="Non conforme" selected>Non conforme</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-4 row" id="blocConformite" >
                                                            <div class="form-group row" >
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date envoie en rééval</FONT></label>
                                                                <div class="col-12 col-sm-8 col-lg-6" >
                                                                    <input type="date"  required="required" class="form-control"  name="dateEnvReev" value='<?php echo date('Y-m-d',time()); ?>'>
                                                                </div>
                                                            </div>

                                                
                                                </div>
                                            </div>
                                            <div class="row col-12" >
                                                <div class="col-4" id="blocConformite1">
                                                        <div class="form-group row">
                                                            <label class="col-6 col-form-label text-sm-left"><FONT size="2"color="#000000">VAV</FONT></label>
                                                            <div class="col-6 ">
                                                                <select   name="vav" class="form-control" style="height: 35px;" id="resultvav" onchange="cacherBloc()"  >
                                                                    <option value="">Selectionner ...</option>
                                                                    <option value="oui">Oui</option>
                                                                    <option value="non">Non</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                </div>
                                
                                                <div class="col-8" id="cacherVAV" align="center">
                                                        <div class="form-group row" >
                                                            <label class="col-3 col-form-label text-sm-left"><FONT size="2"color="#000000">Nom Operateur visite</FONT></label>
                                                            <div class="col-9">
                                                                <select  name="nom_op_visite" class="form-control"  >
                                                                    <option value="">Selectionner ...</option>
                                                                        <!-- define("OPEVISIT", "OPERATEUR VISITE"); -->
                                                                    <?php foreach(agt_service(OPEVISIT) as $index => $opevisit) : ?>
                                                                        <option value="<?php echo $opevisit['NOM_AG']; ?>"><?php echo $opevisit['NOM_AG']; ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                </div>
                                            
                                            </div>
                                            <div class="row" id="cacherVAV1">

                                                <div class="col-12">
                                                        <div class="form-group row">
                                                            <label class="col-2 col-form-label text-sm-left"><FONT size="2"color="#000000">Nom Officier visite</FONT></label>
                                                            <div class="col-10 ">
                                                                <select  name="nom_off_visiteur" class="form-control"  >
                                                                    <option value="">Selectionner ...</option>
                                                                    <?php foreach(agt_service(OFFVISIT) as $index => $nominspection) : ?>
                                                                    <option value="<?php echo $nominspection['NOM_AG']; ?>"><?php echo $nominspection['NOM_AG']; ?></option>
                                                                    <?php endforeach; ?>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row" >
                                                <div class="col-12">
                                                        <div class="form-group row">
                                                            <label class="col-2 col-form-label text-sm-left"><FONT size="2"color="#000000">Marchandises</FONT></label>
                                                            <div class="col-10 ">
                                                                <input type="text"   name="marchandise_add" value="" class="form-control"/> 
                                                            </div>
                                                        </div>
                                
                                                </div>
                                                <div class="col-12" id="nonc">
                                                            <div class="form-group row ">
                                                                    <label class="col-2 col-form-label text-sm-left"><FONT size="2"color="#000000">Infractions</FONT></label>
                                                                    <div class="col-10" required style="white-space: no-wrap;">
                                                                        <!-- <div class="form-group row" > -->
                                                                                                                        
                                                                                <select id="mySelect" class="form-control" multiple="multiple" style="width: 100%;"  name="infraction[]">
                                                                                    <?php foreach($allinf as $index => $moninfraction ) : ?>
                                                                                    <option value="<?php echo $moninfraction['id_inf'] ;?>">&nbsp;&nbsp;&nbsp;<?php echo $moninfraction['libelle_inf'] ;?></option>
                                                                                    <?php endforeach ; ?>
                                                                                    
                                                                                </select>

                                                                        <!-- </div> -->
                                                                    </div>
                                                            </div>
                                                
                                                </div>

                                                <div class="col-12" id="nonc">
                                                            <div class="form-group row ">
                                                                    <label class="col-2 col-form-label text-sm-left"><FONT size="2"color="#000000">Incident</FONT></label>
                                                                    <div class="col-10" required style="white-space: no-wrap;">
                                                                    
                                                                       
                                                                        <!-- <label><input type="checkbox" name="ok[]" value="OUI">OUI  &nbsp;&nbsp;&nbsp;</label> 
                                                                        <label><input type="checkbox"  name="ok[]" value="NON">NON </label> -->
                                                                                                                        
                                                                        <em>Joindre le fichier</em>  <input class=" text-sm-left" type="file" accept=".pdf" style="width: 50%;" placeholder="Selectionner le fichier" name="file">
                               
                                                                    </div>
                                                            </div>
                                                
                                                </div>
                                            </div>
                                            
                                            

                                            <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group row text-right">
                                                                    <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                                        <button type="submit" class="btn btn-space btn-primary" style="width:120px; height: 35px;" name="nonconforme">Enregistrer</button>
                                                                        <!-- <button type="reset" class="btn btn-space btn-secondary" style="width:120px; height: 35px;"value="reset">Reinitialiser</button> -->
                                                                    </div>
                                                            </div>
                                                        </div>
                                        
                                            </div>
                                    </div>




                                <!-- ajouter ci haut -->
                                  
                            </div> 



                        </div>
                        
                    </div>

                    
                                
                </div>
    
            </form> 

                
        </div>
            
    <?php      ?>
    
    <script type="text/javascript">
        // function ok(){
        //     alert('<form name="form3" ><input name="prompt3" type="text" value="Votre réponse?"><input name="prompt4" type="text" value="Peut-être..."><input type="button"  value="Envoyer" onclick="alert(prompt(document.form3.prompt3.value, document.form3.prompt4.value)"></form> ');
        // }

        // $('.button').click(function(){
        //     alert('test');
        //     Swal.fire({
        //         title: 'Fill in your name',
        //         text: 'So we can stay in touch',
        //         html:'<input type="text" name="name" class="swal2-input">',
        //     })
            
            
        //     });


            // $('.retour').click(function(){

            //     Swal.fire({
            //             title: 'Renseigner le motif du retour',
            //             input: 'text',
                       
            //             inputAttributes: {
            //                 autocapitalize: 'off'
            //             },
            //             showCancelButton: true,
            //             confirmButtonText: 'Look up',
            //             showLoaderOnConfirm: true,
            //             preConfirm: (login) => {
            //                 return fetch(`//api.github.com/users/${login}`)
            //                 .then(response => {
            //                     if (!response.ok) {
            //                     throw new Error(response.statusText)
            //                     }
            //                     return response.json()
            //                 })
            //                 .catch(error => {
            //                     Swal.showValidationMessage(
            //                     `Request failed: ${error}`
            //                     )
            //                 })
            //             },
            //             allowOutsideClick: () => !Swal.isLoading()
            //             }).then((result) => {
            //             if (result.isConfirmed) {
            //                 Swal.fire({
            //                 title: `${result.value.login}'s avatar`,
            //                 imageUrl: result.value.avatar_url
            //                 })
            //             }
            //     })
            // });

            function ok(){
                Swal.fire({
                        title: 'Renseigner le motif du retour',
                        input: 'text',
                        inputAttributes: {
                            autocapitalize: 'on'
                        },
                        showCancelButton: true,
                        confirmButtonText: 'Valider',
                        showLoaderOnConfirm: true,
                        preConfirm: (login) => {
                            return fetch(`//api.github.com/users/${login}`)
                            .then(response => {
                                if (!response.ok) {
                                throw new Error(response.statusText)
                                }
                                return response.json()
                            })
                            .catch(error => {
                                Swal.showValidationMessage(
                                `Request failed: ${error}`
                                )
                            })
                        },
                        allowOutsideClick: () => !Swal.isLoading()
                        }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire({
                            title: `${result.value.login}'s avatar`,
                            imageUrl: result.value.avatar_url
                            })
                        }
                })
            }
                
           
                </script>


        <script>
                // function retourner(){
                //     alert('ok');
                // var select = document.getElementById("retourner");
                // alert (select);
                // vav.select.display = "block";
                // }

                

            let togg1 = document.getElementById("togg1");
            let togg2 = document.getElementById("togg2");
            let togg3 = document.getElementById("togg3");
            let d1 = document.getElementById("retourner");
            let d2 = document.getElementById("conforme");
            let d3 = document.getElementById("nonconforme");
            togg1.addEventListener("click", () => {
            if(getComputedStyle(d1).display != "none"){
                d1.style.display = "none";
            }
            else {
                d1.style.display = "block";
                d2.style.display = "none";
                d3.style.display = "none";
            }
            })


            togg2.addEventListener("click", () => {
            if(getComputedStyle(d2).display != "none"){
                d2.style.display = "none";
            }
            else {
                d2.style.display = "block";
                d3.style.display = "none";
                d1.style.display = "none";
            }
            })

            togg3.addEventListener("click", () => {
            if(getComputedStyle(d3).display != "none"){
                d3.style.display = "none";
            }
            else {
                d3.style.display = "block";
                d2.style.display = "none";
                d1.style.display = "none";
            }
            })


            // function togg(){
            // if(getComputedStyle(d2).display != "none"){
            //     d2.style.display = "none";
            // } else {
            //     d2.style.display = "block";
            //     d1.style.display = "none";
            //     d3.style.display = "none";
            // }
            // };


            //togg2.onclick = togg;

            // function toggdb(){
            // if(getComputedStyle(d3).display != "none"){
            //     d3.style.display = "none";
            // } else {
            //     d3.style.display = "block";
            //     d1.style.display = "none";
            //     d2.style.display = "none";
            // }
            // };
           // togg3.onclick = togg;




        </script>

                
               