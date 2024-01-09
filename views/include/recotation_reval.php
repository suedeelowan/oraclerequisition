<form id="validationform" method="post" enctype="multipart/form-data" >
                <!-- ============================================================== -->
              
                
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header sidebar-dark" style="text-align: center; color:blue;">RECOTATION DUDOSIER POUR REEVALUATION</h5>
                        <div class="card-body">
                                        
                        
                            <div class="card" style="font-size: 12px; ">
                                    <h5 class="card-header"><span style="color:green; font-size:14px;">Dossier Numero de transaction : <?php echo $one['num_tc']; ?></span></h5>
                                    <div class="card-body">
                                    
                                            <div class="row">
                                            
                                                <div class="col-8">
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-2 col-form-label text-sm-left" >Agent Réevaluation</label>
                                                        <div class="col-12 col-sm-10 col-lg-8">
                                                            <input type="text"  class="form-control" name="agent" value='<?php echo $one['agent_reeva']; ?>' readonly >
                                                            <input type="hidden"  class="form-control" required name="num_tc" id="myInput" value='<?php echo $one['num_tc']; ?>'>
                                                            <!-- <input type="text"  class="form-control" required name="num_tc" id="myInput" value='<?php echo $uni['agent_visiteur']; ?>'onblur="myFunction()"> -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                        <div class="form-group row">
                                                            <label class="col-12 col-sm-6 col-form-label text-sm-left">Date cotation Agent</label>
                                                            <div class="col-12 col-sm-8 col-lg-6" >
                                                                <input type="date"  class="form-control" required name="dateanc" value='<?php echo $one['date_envoi_reev']; ?>' readonly>
                                                            </div>
                                                        </div>
                                                      
                                                </div>
                            
                                                
                                            </div> 
                                            <div class="row" style="border: green solid 1px; background-color: #e2eae5;">
                                                <div class="col-8">   
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-2 col-form-label text-sm-left">Recotation Agent </label>
                                                        <div class="col-12 col-sm-10 col-lg-8">
                                                                <select  name="agent_reeva" class="form-control" required style="height: 40px;" style="height: 40px;" >
                                                                <option value="" >Selectionner l'agent ...</option>
                                                                           <?php foreach(agt_service(REEVAL) as $index => $nomreeval) : ?>
                                                                           <option value="<?php echo $nomreeval['MATRICULE'].''.$nomreeval['NOM_AG']; ?>" <?php if($one['agent_reeva']==$nomreeval['NOM_AG']) echo 'selected="selected"';?>><?php echo $nomreeval['NOM_AG']; ?></option>
                                                                           <?php endforeach; ?>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-4">   
                                                        <div class="form-group row">
                                                            <label class="col-12 col-sm-6 col-form-label text-sm-left">Nouvelle Date cotation</label>
                                                            <div class="col-12 col-sm-8 col-lg-6">
                                                                <input type="date"  class="form-control" name="date_reev"  value='<?php  echo date('Y-m-d',time()) ?>'>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div> 
                                            <?php if(verifsoumiaudit($one['num_tc'])<=0){ ?>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group row text-right">
                                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                                <button type="submit" class="btn btn-space btn-success" value = ""  style="border-radius: 6px; background-color:#b8ecb8 ; color:#000;  width:120px; height: 35px;" name="recotation">Enregistrer</button>
                                                                <!-- <button type="reset" class="btn btn-space btn-secondary" style="width:120px; height: 35px;"value="reset">Reinitialiser</button> -->
                                                            </div>
                                                    </div>
                                                </div>
                                
                                            </div> 
                                            <?php } ?>

                                            </form>
                                    
                        </div>
                       
                        
                    </div>

                    
                                
                </div>
    
            </form> 