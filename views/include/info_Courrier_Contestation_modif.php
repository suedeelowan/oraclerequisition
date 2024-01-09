<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <!-- <div class="card-body"> -->
                            <form id="validationform" method="post" data-parsley-validate="" novalidate="">
                                <div class="card">
                                         <h5 class="card-header">Informtaion sur la Contestation: <?php echo $one['num_tc']?></h5>
                                    <div class="card-body">
                                        <div class="row">
                                                <div class="col-4">
                                                        <!-- <form id="validationform" data-parsley-validate="" novalidate=""> -->
                                                    <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left">Date saisine</label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                    <input type="hidden"  class="form-control" name="id_Tc" value='<?php echo $one['id_Tc']; ?>'>
                                                                    <input type="hidden"  class="form-control" name="num_tc" value='<?php echo $one['num_tc']?>'>
                                                                    <input type="date"  class="form-control" name="date_recep_courier" value='<?php echo $one['date_recep_courier']; ?>' required>
                                                                   
                                                                </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-8">
                                                        <div class="form-group row">
                                                                <label class="col-4 col-form-label text-sm-left">Reference courrier</label>
                                                                <div class="col-6" >
                                                                    <input type="text"  class="form-control" name="num_courier" value='<?php echo $one['num_courier']; ?>' required>
                                                                </div>
                                                        </div>
                                                        
                                                </div>
                                        </div>
                                      
                                        <div class="row">
                                                <div class="col-4">
                                                        <div class="form-group row">
                                                                <label class="col-6 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Fichier courrier</FONT></label>
                                                                <div class="col-6" >
                                                                    <input type="file" class="form-control@" name="file" accept="pdf" style="height: 30px; font-size:14px;"  /> <br/><br/>
                                                                    &nbsp;&nbsp;
                                                                    <a href="assets/courriers_scannes/<?php echo fichiercourrier($num_tc);?>" target="_blank"><i class="fa fa-2x fa-file-pdf" style="color: red;"></i><span style="font-size: 12px;">&nbsp;le fichier existant</span> </a>
                                                                       
                                                                </div>
                                                        </div>
                                                        
                                                </div> 
                                                <div class="col-8">
                                                        <div class="form-group row">
                                                                <label class="col-4 col-form-label text-sm-right"><FONT size="2.4"color="#000000">Agent reception</FONT></label>
                                                                <div class="col-8" >
                                                                         <select  name="agent_recption_courier" class="form-control" required style="height: 40px;" style="height: 40px;" >
                                                                           <option value="">Selectionner ...</option>
                                                                           <?php foreach(agt_service(CONTS) as $index => $agcourrier) : ?>
                                                                           <option value="<?php echo $agcourrier['NOM_AG']; ?>" <?php if($one['agent_recption_courier']==$agcourrier['NOM_AG']) echo 'selected="selected"';?> ><?php echo $agcourrier['NOM_AG']; ?></option>
                                                                           <?php endforeach; ?>
                                                                        </select>
                                                                    <!-- <input type="text"  class="form-control" name="" required> -->
                                                                </div>
                                                        </div>
                                                        
                                                </div> 
                                        </div>    
 
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row text-right">
                                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                    <button type="submit" class="btn btn-space btn-primary" name="modifier_courier">Modifier</button>
                                                    <button class="btn btn-space btn-secondary" data-dismiss="modal">Annuler</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                                 
                            </form>
                        </div>