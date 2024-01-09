<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <!-- <div class="card-body"> -->
                            <form id="validationform" method="post" data-parsley-validate="" novalidate="">
                                <div class="card">
                                         <h5 class="card-header">Informtaion sur la Contestation: <?php echo $one['num_Tc']?></h5>
                                    <div class="card-body">
                                        <div class="row">
                                                 
                                                <div class="col-4">
                                                        <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Date Prise en charge</FONT></label>
                                                                <div class="col-12 col-sm-8 col-lg-6" >
                                                                    <input type="hidden"  class="form-control" name="id_Tc" value='<?php echo $one['id_Tc']; ?>'>
                                                                    <input type="hidden"  class="form-control" name="num_Tc" value='<?php echo $one['num_Tc']; ?>'>
                                                                    
                                                                    <input type="Date"  required style="height: 30px;font-size:14px;"  class="form-control" name="date_recep_recours" >

                                                                    <input type="hidden"  class="form-control" name="pdf_nom_imp" value='<?php echo $one['nom_imp']; ?>'>
                                                                    <input type="hidden"  class="form-control" name="pdf_rfcv" value='<?php echo $one['rfcv']; ?>'>
                                                                    <input type="hidden"  class="form-control" name="pdf_rfcv_date" value='<?php echo $one['rfcv_date']; ?>'>
                                                                    <input type="hidden"  class="form-control" name="pdf_fdi" value='<?php echo $one['fdi']; ?>'>
                                                                    <input type="hidden"  class="form-control" name="pdf_date_fdi" value='<?php echo $one['date_fdi']; ?>'>
                                                                </div>
                                                        </div>
                                                        
                                                </div>

                                                <div class="col-4">
                                                        <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Date traitement contest</FONT></label>
                                                                <div class="col-12 col-sm-8 col-lg-6" >
                                                                    <input type="date" required style="height: 30px;font-size:14px;"  class="form-control" name="date_traite_contest" >
                                                                </div>
                                                        </div>
                                                        
                                                </div> 
                                                   
                                                     <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Decision du service</FONT></label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                       <select  name="decision"  class="form-control" required style="height: 30px;font-size:14px;" >
                                                                       <option value="">---Selectionnez---</option>
                                                                            <option value="Accord total">Accord total</option>
                                                                            <option value="RVS">RVS</option>
                                                                            <option value="Refus Total">Refus Total</option>
                                                                            
                                                                        </select>
                                                                   
                                                                </div>
                                                    </div>
                                               
                                        </div>   
                                        <div class="row">
                                                
                                                <div class="col-4">
                                                        <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Val Fob après contest</FONT></label>
                                                                <div class="col-12 col-sm-8 col-lg-6" >
                                                                    <input type="text"  class="form-control" name="fob_apres_contest" required style="height: 30px;font-size:14px;" >
                                                                </div>
                                                        </div>
                                                        
                                                </div>

                                                <div class="col-4">
                                                        <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2.4"color="#000000">DC Prévisionnel</FONT><sup>*</sup></label>
                                                                <div class="col-12 col-sm-8 col-lg-6" >
                                                                    <input type="text"  class="form-control" name="dc_prevision" required style="height: 30px;font-size:14px;" >
                                                                </div>
                                                        </div>
                                                        
                                                </div>

                                                <div class="col-4">
                                                        <!-- <form id="validationform" data-parsley-validate="" novalidate=""> -->
                                                    <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Date envoi en PL</FONT></label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                    <input type="date"  class="form-control" name="date_envoi_pl_contes" required style="height: 30px;font-size:14px;" >
                                                                   
                                                                </div>
                                                    </div>
                                                </div>
                                        </div> 
                                        <div class="row">
                                                <div class="col-12">
                                                        <div class="form-group row">
                                                                <label class="col-2 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Motif de la décision</FONT></label>
                                                                <div class="col-10" >
                                                                    <textarea id="story" rows="1" cols="100" class="form-control" name="Motif_contest" required style="height: 30px;font-size:14px;" ></textarea>
                                                                </div>
                                                        </div>
                                                        
                                                </div> 
                                                
                                               
                                        </div>
                                        <div class="row">

                                                <div class="col-6">
                                                        <div class="form-group row">
                                                                <label class="col-4 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Agent Contestation</FONT></label>
                                                                <div class="col-8 " >
                                                                        <select  name="agent_contest" class="form-control" required style="height: 30px;font-size:14px;"  >
                                                                            <option value="">Selectionner ...</option>
                                                                            <?php foreach(agt_service(CONTS) as $index => $nomconst) : ?>
                                                                            <option value="<?php echo $nomconst['MATRICULE_AG'].'-'.$nomconst['NOM_AG']; ?>"><?php echo $nomconst['MATRICULE_AG'].'-'.$nomconst['NOM_AG']; ?></option>
                                                                            <?php endforeach; ?>
                                                                        
                                                                        </select>
                                                                </div>
                                                        </div>
                                                        
                                                </div>
                                                <div class="col-6">
                                                        <!-- <form id="validationform" data-parsley-validate="" novalidate=""> -->
                                                    <div class="form-group row">
                                                                <label class="col-4 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Adresse mail Operateur</FONT></label>
                                                                <div class="col-8">
                                                                    <input type="email"  class="form-control" name="adresse_mail" required style="height: 30px;font-size:14px;" >
                                                                   
                                                                </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="row">

                                                
                                                <div class="col-6">
                                                        <!-- <form id="validationform" data-parsley-validate="" novalidate=""> -->
                                                    <div class="form-group row">
                                                                <label class="col-4 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Date envoi en PL</FONT></label>
                                                                <div class="col-8">
                                                                    <input type="date"  class="form-control" name="date_valid_contest" required style="height: 30px;font-size:14px;" >
                                                                   
                                                                </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                        <div class="form-group row">
                                                                <label class="col-4 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Observation</FONT></label>
                                                                <div class="col-8" >
                                                                    <textarea   class="form-control" rows="2" cols="50" name="Observation_contest" required style="height: 30px;font-size:14px;" > </textarea>
                                                                </div>
                                                        </div>
                                                        
                                                </div>

                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row text-right">
                                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                    <button type="submit" class="btn btn-space btn-primary" name="envoyer_contest">Enregistrer</button>
                                                    <button class="btn btn-space btn-secondary" data-dismiss="modal">Annuler</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                                 
                            </form>
                        </div>