
                    
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <!-- <div class="card-body"> -->
                            <form id="validationform" method="post" data-parsley-validate="" novalidate="">
                                <div class="card">
                                         <h5 class="card-header">Indiquez les criteres de recherche: <?php echo $one['num_decla']?></h5>
                                    <div class="card-body">
                                        <div class="row">
                                                <div class="col-4">
                                                 <!-- <form id="validationform" data-parsley-validate="" novalidate=""> -->
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Num decl</label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                            <input type="text"  class="form-control" name="num_declara"  value='<?php echo $uni['num_decla']; ?>'>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Date debut decla </label>
                                                        <div class="col-12 col-sm-8 col-lg-6"  >
                                                            <input type="date"  name="date_debut_dec"  class="form-control" value='<?php echo $uni['date_decla']; ?>'  >
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Date debut visite</label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                            <input type="date"  name="date_debut_v"  class="form-control" value='<?php echo $uni['date_decla']; ?>'  >
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Code Decla Imp</label>
                                                        <div class="col-12 col-sm-8 col-lg-6" style="width:50px;">
                                                            <input type="text"  class="form-control" name="code_declara"  value='<?php echo $uni['nom_imp']; ?>'>
                                                        </div>
                                                    </div>
                                 
                                                </div>

                                                <div class="col-4">
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Numero RFCV</label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                            <input type="text"  class="form-control" name="num_rfcv"  value=''>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Date de fin decla</label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                            <input type="date"  class="form-control" name="date_fin_dec"  value='<?php echo $uni['date_rfcv']; ?>'>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Date de fin visite</label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                            <input type="date"  class="form-control" name="date_fin_v"  value='<?php echo $uni['date_rfcv']; ?>'>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-right" for="select">conformite</label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                           
                                                                    <select id="select" class="form-control" name="conformite">
                                                                    <option value="" selected>----</option>
                                                                    <option value="Conforme">Conforme</option>
                                                                    <option value="Non Conforme">Non Conforme</option>
                                                                    </select>

                                                        </div>
                                                    </div>
                                                    
                                                   
                                                </div>
                                                
                                                <div class="col-4">
                                                    <!-- <form id="validationform" data-parsley-validate="" novalidate=""> -->
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Cod Imp</label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                            <input type="text"  class="form-control" name="code_imp"  value='<?php echo $uni['code_imp']; ?>'>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Nom Imp</label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                            <input type="text"  class="form-control" name="nom_imp" value='<?php echo $uni['nom_imp']; ?>'>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Nom Decla</label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                            <input type="text"  class="form-control" name="nom_declara"  value='<?php echo $uni['nom_imp']; ?>'>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-right" for="select">statut</label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                           
                                                                    <select id="select" class="form-control" name="statut">
                                                                    <option value="" selected>----</option>
                                                                    <option value="null">Enregistré</option>
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
                        
           
        