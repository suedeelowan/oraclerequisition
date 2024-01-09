
                    
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <!-- <div class="card-body"> -->
                            <form id="validationform" method="post" data-parsley-validate="" novalidate="">
                                <div class="card">
                                         <h5 class="card-header">Indiquez les criteres de recherche: <?php echo $one['num_decla']?></h5>
                                    <div class="card-body">
                                        <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Date debut </label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                            <input type="date"  name="date_debut"  class="form-control" value='<?php echo ''; ?>'  >
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-4">
                                                 
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Date de fin </label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                            <input type="date"  class="form-control" name="date_fin"  value='<?php echo ''; ?>'>
                                                        </div>
                                                    </div>
                                         
                                                </div>
                                                
                                                <div class="col-4">
                                     
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-right" for="select">statut</label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                           
                                                                    <select id="select" class="form-control" name="statut">
                                                                    <option value="" selected>----</option>
                                                                    <option value="0">Enregistré</option>
                                                                    <option value="1">visiter</option>
                                                                    <option value="2">argumenté</option>
                                                                    <option value="3">cav</option>
                                                                    <option value="4">liquidé</option>
                                                                    </select>

                                                        </div>
                                                    </div>
                                                    
                                                  
                                                    <!-- </form> -->
                                                </div>
                                        </div>  

                                        <div class="row">
                                        <div class="col-4">
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Date debut decla </label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                            <input type="date"  name="date_debut_dec"  class="form-control" value='<?php echo ''; ?>'  >
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Date fin decla </label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                            <input type="date"  name="date_fin_dec"  class="form-control" value='<?php echo ''; ?>'  >
                                                        </div>
                                                    </div>

                                                </div>
                                        </div>  
                                        
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row text-right">
                                                    <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                        <button type="submit" class="btn btn-space btn-primary" name="recherche">Rechercher</button>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
          
                            </form>
                        </div>
                        
           
        