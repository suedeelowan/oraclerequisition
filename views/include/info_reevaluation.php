<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <!-- <div class="card-body"> -->
                            <form id="validationform" method="post" data-parsley-validate="" novalidate="">
                                <div class="card">
                                         <h5 class="card-header">Informtaion sur la réévaluation TC: <?php echo $one['num_tc']?></h5>
                                    <div class="card-body">
                                        <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Date prise en charge</FONT></label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                <input type="hidden"  class="form-control" name="id_Tc" value='<?php echo $one['id_Tc']; ?>'>
                                                                    <input type="date"  class="form-control" name="date_envoi_reev" style="height: 30px;font-size:14px;" >
                                                                    
                                                                </div>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                        <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Date de réévaluation</FONT></label>
                                                                <div class="col-12 col-sm-8 col-lg-6" >
                                                                    <input type="date"  class="form-control" name="date_reev" style="height: 30px;font-size:14px;" >
                                                                </div>
                                                        </div>
                                                        
                                                </div>
                                                <div class="col-4">
                                                        <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Date validation</FONT></label>
                                                                <div class="col-12 col-sm-8 col-lg-6" >
                                                                    <input type="date"  class="form-control" name="datevalid" style="height: 30px;font-size:14px;" >
                                                                </div>
                                                        </div>
                                                        
                                                </div>
                                        </div>
                                        <div class="row">
    
                                                <div class="col-4">
                                                        <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Val Fob réévaluée</FONT></label>
                                                                <div class="col-12 col-sm-8 col-lg-6" >
                                                                    <input type="text"  class="form-control" name="fob_reeva" style="height: 30px;font-size:14px;" >
                                                                </div>
                                                        </div>
                                                        
                                                </div>
                                                <div class="col-4">
                                                        <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Montant DC Prev</FONT></label>
                                                                <div class="col-12 col-sm-8 col-lg-6" >
                                                                    <input type="text"  class="form-control" name="dc_prevision" style="height: 30px;font-size:14px;" >
                                                                </div>
                                                        </div>
                                                        
                                                </div>
                                                <div class="col-4">
                                                        
                                                    <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2.4"color="#000000">date envoi PL</FONT></label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                 <input type="date"  class="form-control" name="date_envoi_pl_reev" required style="height: 30px;font-size:14px;" >
                                                                   
                                                                </div>
                                                    </div>
                                                </div>
                                                

                                                
                                        </div> 
                                        <div class="row">
                                                

                                
                                                <!-- <div class="col-4">
                                                        <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left">Date envoi au CBAR</label>
                                                                <div class="col-12 col-sm-8 col-lg-6" >
                                                                    <input type="date"  class="form-control" name="date_envoi_cbar" required>
                                                                </div>
                                                        </div>
                                                        
                                                </div> -->

                                                <div class="col-6">
                                                        <div class="form-group row">
                                                                <label class="col-4 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Agent Reeval</FONT></label>
                                                                <div class="col-8" >
                                                                    <select  name="agent_reeva" class="form-control" required style="height: 30px;font-size:14px;"  >
                                                                            <option value="">Selectionner ...</option>
                                                                            <?php foreach(agt_service(REEVAL) as $index => $nomreeval) : ?>
                                                                            <option value="<?php echo $nomreeval['MATRICULE_AG'].'-'.$nomreeval['NOM_AG']; ?>"><?php echo $nomreeval['MATRICULE_AG'].'-'.$nomreeval['NOM_AG']; ?></option>
                                                                            <?php endforeach; ?>
                                                                        
                                                                    </select>
                                                                </div>
                                                        </div>
                                                        
                                                </div>

                                                <div class="col-6">
                                                        <div class="form-group row">
                                                                <label class="col-4 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Agent audit</FONT></label>
                                                                <div class="col-8" >
                                                                    <select  name="agent_audit" class="form-control" required style="height: 30px;font-size:14px;"  >
                                                                            <option value="">Selectionner ...</option>
                                                                            <?php foreach(agt_service(AUDI) as $index => $nomaudit) : ?>
                                                                            <option value="<?php echo $nomaudit['MATRICULE_AG'].'-'.$nomaudit['NOM_AG']; ?>"><?php echo $nomaudit['MATRICULE_AG'].'-'.$nomaudit['NOM_AG']; ?></option>
                                                                            <?php endforeach; ?>
                                                                        
                                                                    </select>
                                                                </div>
                                                        </div>
                                                        
                                                </div>
                                        
                                        </div>

                                        <div class="row">
    
                        
                                                <div class="col-4">
                                                        
                                                    <div class="form-group row">
                                                                <label class="col-2 col-sm-6 col-form-label text-sm-left"><FONT size="2.4"color="#000000">date de validation</FONT></label>
                                                                <div class="col-10 col-sm-8 col-lg-6">
                                                                 <input type="date"  class="form-control" name="date_valid_reeva" required style="height: 30px;font-size:14px;" >
                                                                   
                                                                </div>
                                                    </div>
                                                </div>

                                                <div class="col-8">
                                                        <div class="form-group row">
                                                                <label class="col-2 col-sm-6 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Observation</FONT></label>
                                                                <div class="col-10 col-sm-8 col-lg-6" >
                                                                    <textarea   class="form-control" rows="2" cols="40" name="observation_reeva" style="height: 30px;font-size:14px;" > </textarea>
                                                                </div>
                                                        </div>
                                                        
                                                </div>

                                                <div class="col-12" id="nonc">
                                                                    <div class="form-group row ">
                                                                            <label class="col-2 col-form-label text-sm-left"><FONT size="2"color="#000000">Infractions</FONT></label>
                                                                            <div class="col-10" required style="white-space: no-wrap; height: 30px;font-size:14px;">
                                                                                <!-- <div class="form-group row" > -->
                                                                                                                             
                                                                                        <select id="mySelect" class="form-control" multiple="multiple" style="width: 100%;" required="required" name="infraction[]">
                                                                                          <?php foreach($allinf as $index => $moninfraction ) : ?>
                                                                                            <option value="<?php echo $moninfraction['id_inf'] ;?>">&nbsp;&nbsp;&nbsp;<?php echo $moninfraction['libelle_inf'] ;?></option>
                                                                                          <?php endforeach ; ?>
                                                                                            
                                                                                        </select>

                                                                                <!-- </div> -->
                                                                            </div>
                                                                    </div>
                                                        
                                                </div>
           
                                        </div>
                                               
                                    </div>
   
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row text-right">
                                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                    <button type="submit" class="btn btn-space btn-primary" name="envoyer_reev">Enregistrer</button>
                                                    <button class="btn btn-space btn-secondary" data-dismiss="modal">Annuler</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                                 
                            </form>
                        </div>

                        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
    </script>
    <script>

        function recherchetc(val) {
                    var ledata = val.value;
                   
                    window.location.href = "liste_tc?search="+ledata+"&tcid="+datatc;

                        }
    </script>

  
    <script>
        $(document).ready(function() {
            $('#mySelect').select2({
            placeholder: 'Choisir ..',
            });
        });

        
    </script>