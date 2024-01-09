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
                                                <h5 class="card-header"><span style="color:green; font-size:14px;">Informtaion Generales de la TC : <?php echo $one['num_tc']; ?></span></h5>
                                                <div class="card-body" id="ario">
                                                
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left" >Numero de Tc</label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                    <input type="hidden"  class="form-control" name="id_Tc" value='<?php echo $tc_trouve['id_Tc']; ?>' >
                                                                    <input type="text"  class="form-control" required name="num_tc" id="myInput" value='<?php echo $one['num_tc']; ?>' readonly>
                                                                        <!-- <input type="text"  class="form-control" required name="num_tc" id="myInput" value='<?php echo $uni['agent_visiteur']; ?>'onblur="myFunction()"> -->
                                                                </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left">N° de Declaration</label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <!-- <input type="text"  class="form-control" name="num_declara" required minlength="10" size="10"> -->
                                                                        <input type="text"  class="form-control" name="num_declara" value="<?php  echo $one['num_declaration']; ?>" readonly required  size="10">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left">Code Importateur</label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="text"  class="form-control" required name="code_imp" value='<?php echo $one['code_imp']; ?>' readonly>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"> Code Declarant</label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="text"  class="form-control" required name="code_declara" value='<?php echo $one['code_declara']; ?>' readonly>
                                                                    </div>
                                                                </div>
                                                                

                                                            </div>

                                                            <div class="col-6">
                                                                    <div class="form-group row">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Date de Tc</label>
                                                                        <div class="col-12 col-sm-8 col-lg-6" >
                                                                            <input type="date"  class="form-control" required name="date_tc" value='<?php echo $one['date_tc']; ?>' readonly>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="form-group row">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Date de Declaration</label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="date"  class="form-control" required name="date_declara" value='<?php  echo $one['date_declara']; ?>' readonly>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Nom Importateur</label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="text"  class="form-control" required name="nom_imp" value='<?php  echo $one['nom_imp']; ?>' readonly>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Nom Declarant</label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="text"  class="form-control" required name="nom_declara" value='<?php echo $one['nom_declara']; ?>' readonly>
                                                                        </div>
                                                                    </div>
                                                                   
                                                                    
                                                            </div>
                                        
                                                            
                                                        </div> 
                                                           
                                                        <div class="row" style="border: e0f7e0 solid 1px; background-color: #f4fcf4; border-radius: 6px;">
                                                            <div class="col-6">   
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left">Date cotation</label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="date"  class="form-control"  name="Date_cotation" required value="<?php echo $one['date_cotation'] ;?>" readonly="readonly">
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <div class="col-6">   
                                                                    <div class="form-group row">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Date de visite (rdv)</label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="date"  class="form-control"  name="date_visite" value="<?php echo $one['date_visite'] ;?>" readonly required>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                         <br/>
                                                        <div class="row" style="border: green solid 1px; background-color: #e2eae5; border-radius: 6px;">
                                                            <div class="col-6">   
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left">Date debut visite</label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="date"  class="form-control"  name="date_Dvisite" value="<?php echo $one['date_Dvisite'] ;?>" readonly required>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <div class="col-6">   
                                                                    <div class="form-group row">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Date fin visite</label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="date"  class="form-control" name="date_Fvisite" value="<?php echo $one['date_Fvisite'] ;?>" readonly required>
                                                                        </div>
                                                                    </div>
                                                            </div>

                                                            <div class="col-6">   
                                                                    <div class="form-group row">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Type de visite</label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <select  required="required" readonly name="type_visite" class="form-control"  style="height: 30px;">
                                                                                <option value="<?php echo $one['type_visite']; ?>" ><?php echo $one['type_visite']; ?></option>
                                                                                <option value="VAD">VAD</option>
                                                                                <option value="VAQ">VAQ</option>
                                                                             </select>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col-6">   
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left">Lieu visite</label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="text"  class="form-control"  name="lieu_visite" value="<?php echo $one['lieu_visite']; ?>" readonly required>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <div class="col-6">   
                                                                    <div class="form-group row">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Date rapport visite</label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="date"  class="form-control" name="date_rapport" value="<?php echo $one['date_cotation'] ;?>" readonly  required>
                                                                        </div>
                                                                    </div>
                                                            </div>


                                                            <div class="col-6">   
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left">Agent</label>
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



                                                        </div>  
                                                
                                    </div>
                                    <div class="card" style=" height:20px; text-align: center;">
                                        <h5 class="card-header"><span style="color:green; font-size:14px;">Informations Articles</span></h5>
                                    </div>
                                    <div class="card-body">
                                   
                                        <div class="row"  style="background-color:#e2eae5; border-color: #ff0;">
                                                        <div class="col-7" style="border-color: #000; text-align: center;">
                                                            DECLARE
                                                        </div>
                                                        <div class="col-4" style="border-color: #000; font-weight: bold; text-align: center; background-color: #ff0;">
                                                            RECONNU
                                                        </div>
                                        </div>
                                        <div class="row"  style="font-size :10px; border-color: #ff0; background-color:#e2eae5;">
                                                <div class="row col-7">
                                                            <div class="col-2" style="border-color: #000; text-align: center;">
                                                            Article
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                            Code SH
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                            Origine
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                            Quantite
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                            Unite
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                            Fob/Unit
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                            Total FOB
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                            Code SH
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                            Origine
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                            Quantite
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                            Unite
                                                            </div>

                                                </div>
                                                <div class="row col-5">
                                                            <div class="col-3" style="border-color: #000; text-align: center;">
                                                            Fob/unit
                                                            </div>
                                                            <div class="col-4" style="border-color: #000; text-align: center;">
                                                            Total FOB
                                                            </div>
                                                            <div class="col-4" style="border-color: #000; text-align: center;">
                                                            DC Prévisionnel
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                            MRD
                                                            </div>

                                                </div>
                                                            
                                                            
                                                           
                                        </div>

                                        <div class="row">
                                            
                                            <div   class="row" style="width:100%" >
                                                  
                                               
                                                
                                                    <?php  foreach (afficheArticletrouve($one['num_tc']) as $index => $tcinfo): $i++; ?>
                                                    <?php //$i=8; while ($i<11) : $i++; ?>
                                                   
                                                    <div class="row col-7" style="background-color:#fff;">
                                                            <div class="col-2" style="border-color: #000; text-align: center; white-space: nowrap;">
                                                            <?php echo $tcinfo['LIBELLE_COM'] ; ?>
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                            <?php echo $tcinfo['SH_TROUVE'] ; ?>
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                            <?php echo $tcinfo['ORIGINE'] ; ?>
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                            <?php echo $tcinfo['QTE_TROUVE'] ; ?>
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                            <?php echo $tcinfo['UNITE_TROUVE'] ; ?>
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                            <?php echo $tcinfo['FOB_TROUVE_CFA'] ; ?>
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                            
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                           <?php echo $tcinfo['ADD_CODE_SH'] ; ?>
                                                            <input type="hidden" name="ok[]" value="<?php echo $tcinfo['ID_ART'];?>"/>
                                                            
                                                            <input type="hidden" name="numtc<?php echo $tcinfo['ID_ART'];?>" value="<?php echo $tc_trouve['num_tc']; ?>" style="width: 55px;" readonly />
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                            <?php echo $tcinfo['ADD_ORIGINE'] ; ?>
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                            <?php echo $tcinfo['ADD_QUANTITE'] ; ?>
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                            <?php echo $tcinfo['ADD_UNITE'] ; ?>
                                                            </div>

                                                </div>
                                                        
                                                        
                                                      
                                                <div class="row col-5">
                                                    <div class="col-3" style="border-color: #000; background-color: #a9c2b2; text-align: center;">
                                                    <input type="text" name="fobunit<?php echo $tcinfo['ID_ART'];?>" value="<?php echo $tcinfo['ADD_FOB_UNI'] ; ?>" style="width: 100px;;" />
                                                    </div>
                                                    <div class="col-4" style="border-color: #000; background-color: #a9c2b2; text-align: center;">
                                                    <input type="text" name="fobtotal<?php echo $tcinfo['ID_ART'];?>" value="<?php echo $tcinfo['ADD_FOB_TOTAL'] ; ?>" style="width: 105px;;" />
                                                    </div>
                                                    <div class="col-4" style="border-color: #000; background-color: #a9c2b2; text-align: center;">
                                                    <input type="text" name="dc<?php echo $tcinfo['ID_ART'];?>" value="<?php echo $tcinfo['DC_PREVISIONNEL'] ; ?>" style="width: 105px;;" />
                                                    </div>
                                                    <div class="col-1" style="border-color: #000; background-color: #a9c2b2; text-align: center;">
                                                    <input type="checkbox" name="mrd<?php echo $tcinfo['ID_ART'];?>"  <?php if($tcinfo['ADD_PRD_MRD']=="MRD"){ echo "checked" ;} ?> value="MRD"   />
                                                    </div>

                                                </div>
                                                       
                                                    <?php endforeach; ?>
                                                    
                                               



                                            </div>
                                        </div>
                                       

                                        <span><h4><br/>NON DECLARE SUR LA FACTURE ET  TROUVE</h4></span>
                                    
                                        
                                        
                                            <div  class="row " style="width:100%" >
                                                 
                                                        
                                                        <div class="row">
                                                            <div class="col-2" style="border-color: #000; text-align: center;">
                                                            Article
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                            Code SH
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                            Origine
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                            Quantite
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                            Unite
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                            Fob/Unit
                                                            </div>
                                                            <div class="col-2" style="border-color: #000; text-align: center;">
                                                            total/Fob
                                                            </div>
                                                            <div class="col-2" style="border-color: #000; text-align: center;">
                                                            DC Previsionnel
                                                            </div>
                                                            <div class="col-1" style="border-color: #000; text-align: center;">
                                                            PRD/MRD
                                                            </div>
                                                        
                                                            
                                                            <!-- <td>Article</td>
                                                            <td>Code SH</td>
                                                            <td>Origine</td>
                                                            <td>Quantite</td>
                                                            <td>Unite</td>
                                                            <td>Fob/Unit</td>
                                                            <td>total/Fob</td>
                                                            <td>DC Previsionnel</td>
                                                            <td>PRD/MRD</td>   -->
                                                        </div>
                                                    
                                                    
                                                        <?php $i=1; foreach(afficheArticleNouveau($one['num_tc'])as $index=> $larticle): ?>
                                                            <div class="row" style="width: 100%;">
                                                                    <div class="col-2" style="border-color: #000; text-align: center; ">
                                                                    <input type='hidden' name='updatearticle[]' value='<?php echo $larticle['ID_ART_TR'];?>' > <?php echo $larticle['TR_ARTICLE'];?>
                                                                    </div>
                                                                    <div class="col-1" style="border-color: #000; text-align: center;">
                                                                    <?php echo $larticle['TR_CODE_SH'];?>
                                                                    </div>
                                                                    <div class="col-1" style="border-color: #000; text-align: center;">
                                                                    <?php echo $larticle['TR_ORIGINE'];?>
                                                                    </div>
                                                                    <div class="col-1" style="border-color: #000; text-align: center;">
                                                                    <?php echo $larticle['TR_QUANTITE'];?>
                                                                    </div>
                                                                    <div class="col-1" style="border-color: #000; text-align: center;">
                                                                    <?php echo $larticle['TR_UNITE'];?>
                                                                    </div>
                                                                    <div class="col-1" style="border-color: #000; text-align: center;">
                                                                    <input type='text' name='aj_fobunit<?php echo $larticle['ID_ART_TR'];?>' value='<?php echo $larticle['TR_FOB_UNI'];?>' /> &nbsp;
                                                                    </div>
                                                                    <div class="col-2" style="border-color: #000; text-align: center;">
                                                                    <input type='text' name='aj_fobtotal<?php echo $larticle['ID_ART_TR'];?>' value='<?php echo $larticle['TR_FOB_TOTAL'];?>' />&nbsp;
                                                                    </div>
                                                                    <div class="col-2" style="border-color: #000; text-align: center;">
                                                                    <input type='text' name='aj_dc<?php echo $larticle['ID_ART_TR'];?>' value='<?php echo $larticle['DC_PREVISIONNEL'];?>' />&nbsp;
                                                                    </div>
                                                                    <div class="col-1" style="border-color: #000; text-align: right;">
                                                                    <input type='checkbox' name='aj_mdr<?php echo $larticle['ID_ART_TR'];?>' <?php if($larticle['TR_PRD_MRD']=="MRD"){ echo 'checked' ;} ?> value='MRD' />
                                                                    </div>
                                                            </div> 
                                                            <hr>
                                                       
                                                        <?php endforeach; ?>
                                                    
                                            </div>

                                            <!-- <button type="button" class="delete">Supprimer une ligne</button> -->
                                       

    
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row text-right">
                                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                    <button type="submit" class="btn btn-space btn-success" value = ""  style="width:120px; height: 35px;  border-radius: 6px; background-color:#b8ecb8 ; color:#000;" name="envoyer">Enregistrer@</button>
                                                    <!-- <button type="reset" class="btn btn-space btn-secondary" style="width:120px; height: 35px;"value="reset">Reinitialiser</button> -->
                                                </div>
                                        </div>
                                    </div>
                    
                                </div>
                                            
                            </div>
                            
                
                        </form> 

                          
                    </div>
                                            <td></td>