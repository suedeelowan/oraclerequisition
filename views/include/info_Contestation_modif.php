<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <!-- <div class="card-body"> -->
                            <form id="validationform" method="post" data-parsley-validate="" novalidate="">
                                <div class="card">
                                         <h5 class="card-header">Informtaion sur la Contestation:<?php echo $one['num_Tc']?></h5>
                                    <div class="card-body">
                                        <div class="row">
                                                
                                                
                                                <div class="col-4">
                                                        <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left">Date Prise en charge</label>
                                                                <div class="col-12 col-sm-8 col-lg-6" >
                                                                    <input type="hidden"  class="form-control" name="id_Tc" value='<?php echo $one['id_Tc']; ?>'>
                                                                    <input type="Date"  class="form-control" name="date_recep_recours" value='<?php echo $one['date_recep_recours']; ?>'required>
                                                                </div>
                                                        </div>
                                                        
                                                </div>

                                                <div class="col-4">
                                                        <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left">Date traitement contest</label>
                                                                <div class="col-12 col-sm-8 col-lg-6" >
                                                                    <input type="date"  class="form-control" name="date_traite_contest" value='<?php echo $one['date_traite_contest']; ?>'required>
                                                                </div>
                                                        </div>
                                                        
                                                </div>
                                                <div class="col-4">
                                                       
                                                    <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left">Decision du service</label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                       <select  name="decision"  class="form-control" required>
                                                                       <option value="<?php echo $one['decision']; ?>"><?php echo $one['decision']; ?></option>
                                                                        <option value="Accord total">Accord total</option>
                                                                        <option value="RVS">RVS</option>
                                                                        <option value="Refus Total">Refus Total</option>
                                                                            
                                                                        </select>
                                                                   
                                                                </div>
                                                    </div>
                                                </div> 

                                               
                                                
                                               
                                        </div>   
                                        <div class="row">
                                                
                                                <div class="col-4">
                                                        <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left">ValFob après contest</label>
                                                                <div class="col-12 col-sm-8 col-lg-6" >
                                                                    <input type="text"  class="form-control" name="fob_apres_contest" value='<?php echo number_format($one['fob_apres_contest']); ?>' required>
                                                                </div>
                                                        </div>
                                                        
                                                </div>
                                                <div class="col-4">
                                                        
                                                    <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left">DC Prévisionnel<sup>*</sup></label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                    <input type="text"  class="form-control" name="dc_prevision" value='<?php echo number_format($one['DC_previsionnel']); ?>'required>
                                                                   
                                                                </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                        
                                                    <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left">Date envoi PL</label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                    <input type="date"  class="form-control" name="date_envoi_pl_contes" value='<?php echo $one['date_envoi_pl_contes']; ?>'required>
                                                                   
                                                                </div>
                                                    </div>
                                                </div>

                                                

                                        </div> 
                                        <div class="row">

                                                <div class="col-12">
                                                        <div class="form-group row">
                                                                <label class="col-2 col-form-label text-sm-left">Motif de la réévaluation</label>
                                                                <div class="col-10" >
                                                                    <textarea id="story" rows="1" cols="100" class="form-control" name="Motif_contest" required><?php echo $one['Motif_contest']; ?></textarea>
                                                                </div>
                                                        </div>
                                                        
                                                </div>

                                        </div>
                                        <div class="row">       
                                                
                                                <div class="col-12">
                                                        <div class="form-group row">
                                                                <label class="col-2 col-form-label text-sm-left">Agent Contestation</label>
                                                                <div class="col-10" >
                                                                        <select  name="agent_contest" class="form-control" required >
                                                                            <option value="">Selectionner ...</option>
                                                                            <?php foreach(agt_service(CONTS) as $index => $nomconst) : ?>
                                                                            <option value="<?php echo $nomconst['MATRICULE_AG'].'-'.$nomconst['NOM_AG']; ?>" <?php if($one['agent_contest']==$nomconst['NOM_AG']) echo "selected='selected'"; ?>><?php echo $nomconst['MATRICULE_AG'].'-'.$nomconst['NOM_AG']; ?></option>
                                                                            <?php endforeach; ?>
                                                                        
                                                                        </select>
                                                                        
                                                                </div>
                                                        </div>
                                                        
                                                </div>

                                        </div> 
                                        <div class="row">

                                                
                                                <div class="col-4">
                                                        <!-- <form id="validationform" data-parsley-validate="" novalidate=""> -->
                                                    <div class="form-group row">
                                                                <label class="col-6 col-form-label text-sm-left">Date envoi en PL</label>
                                                                <div class="col-6">
                                                                    <input type="date"  class="form-control" name="date_valid_contest" value='<?php echo $one['date_envoi_pl_contes']; ?>' required="required">
                                                                   
                                                                </div>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                        <div class="form-group row">
                                                                <label class="col-4 col-form-label text-sm-left">Observation</label>
                                                                <div class="col-8" >
                                                                    <textarea   class="form-control" rows="1" cols="50" name="Observation_contest"><?php echo $one['observation_contest']; ?> </textarea>
                                                                </div>
                                                        </div>
                                                        
                                                </div>

                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row text-right">
                                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                    <button type="submit" class="btn btn-space btn-primary" name="modifier_contest">Modifier</button>
                                                    <button class="btn btn-space btn-secondary" data-dismiss="modal">Annuler</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                                 
                            </form>
                        </div>