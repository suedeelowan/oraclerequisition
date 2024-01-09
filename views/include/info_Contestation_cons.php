<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <!-- <div class="card-body"> -->
                            <form id="validationform" method="post" data-parsley-validate="" novalidate="">
                                <div class="card">
                                         <h5 class="card-header">Informtaion sur la Contestation: <?php echo $one['num_tc']?></h5>
                                    <div class="card-body">
                                        <div class="row">
                                                <div class="col-4">
                                                        <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Date Prise en charge</FONT></label>
                                                                <div class="col-12 col-sm-8 col-lg-6" >
                                                                    <input type="Date"  class="form-control" name="date_recep_recours" value='<?php echo $one['date_recep_recours']; ?>' disabled style="height: 30px;font-size:14px;" required>
                                                                </div>
                                                        </div>
                                                        
                                                </div>
                                                <div class="col-4">
                                                        <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Date traitement contest</FONT></label>
                                                                <div class="col-12 col-sm-8 col-lg-6" >
                                                                    <input type="date"  class="form-control" name="date_traite_contest" value='<?php echo $one['date_traite_contest']; ?>' disabled style="height: 30px;font-size:14px;" required>
                                                                </div>
                                                        </div>
                                                        
                                                </div>
                                                <div class="col-4">
                                                       
                                                    <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Decision du service</FONT></label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                       <input type="text" name="decision"  class="form-control" value='<?php echo $one['decision']; ?>' disabled style="height: 30px;font-size:14px;" required>
                                                                   
                                                                </div>
                                                    </div>
                                                </div> 

                                                
                                                
                                                

                                                
                                               
                                        </div>   
                                        <div class="row">

                                                <div class="col-4">
                                                        <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Val Fob après contest</FONT></label>
                                                                <div class="col-12 col-sm-8 col-lg-6" >
                                                                    <input type="text"  class="form-control" name="fob_apres_contest" value='<?php echo number_format($one['fob_apres_contest']); ?>' disabled style="height: 30px;font-size:14px;" required>
                                                                </div>
                                                        </div>
                                                        
                                                </div>

                                                <div class="col-4">
                                                        <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2.4"color="#000000">DC Prévisionnel</FONT></label>
                                                                <div class="col-12 col-sm-8 col-lg-6" >
                                                                    <input type="text"  class="form-control" name="" value='<?php echo number_format($one['DC_previsionnel']); ?>' disabled style="height: 30px;font-size:14px;" required>
                                                                </div>
                                                        </div>
                                                        
                                                </div>

                                                <div class="col-4">
                                                    <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Date envoi PL</FONT></label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                    <input type="date"  class="form-control" name="date_envoi_pl_contes" value='<?php echo $one['date_envoi_pl_contes']; ?>' disabled style="height: 30px;font-size:14px;" required>
                                                                   
                                                                </div>
                                                    </div>
                                                </div>
                                               

                                        </div> 
                                        <div class="row">
                                                
                                                <div class="col-4">
                                                        
                                                    <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Date arrivee courriers</FONT></label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                    <input type="hidden"  class="form-control" name="id_Tc" value='<?php echo $one['id_Tc']; ?>'>
                                                                    <input type="date"  class="form-control colorconsul" name="date_recep_courier" value='<?php echo $one['date_recep_courier']; ?>' disabled style="height: 30px;font-size:14px;" required>
                                                                   
                                                                </div>
                                                    </div>
                                                </div>
                                                
                                                
                                        </div>
                                        <div class="row">
                                                <div class="col-12">
                                                        <div class="form-group row">
                                                                <label class="col-2 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Motif de la réévaluation</FONT></label>
                                                                <div class="col-10" >
                                                                   <input type="text" class="form-control" name="Motif_contest" value='<?php echo $one['Motif_contest']; ?>' disabled style="height: 30px;font-size:14px;" required></textarea>
                                                                </div>
                                                        </div>
                                                        
                                                </div>
                                        </div>
                                        <div class="row">
                                                <div class="col-12">
                                                        <div class="form-group row">
                                                                <label class="col-2 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Agent Contestation</FONT></label>
                                                                <div class="col-10" >
                                                                    <input type="text"  class="form-control" name="agent_contest" value='<?php echo $one['MATRICULE_AG'].'-'.$one['agent_contest']; ?>' disabled style="height: 30px;font-size:14px;" required>
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
                                                                    <input type="date"  class="form-control" name="date_valid_contest" value='<?php echo $one['date_envoi_pl_contes']; ?>' disabled style="height: 30px;font-size:14px;" required="required">
                                                                   
                                                                </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                        <div class="form-group row">
                                                                <label class="col-4 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Observation</FONT></label>
                                                                <div class="col-8" >
                                                                    <textarea   class="form-control" rows="1" cols="50" name="Observation_contest" disabled style="height: 30px;font-size:14px;"><?php echo $one['observation_contest']; ?> </textarea>
                                                                </div>
                                                        </div>
                                                        
                                                </div>

                                        </div> 
                                    </div>
                                   
                                </div>
                                 
                            </form>
                        </div>