
                    
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <!-- <div class="card-body"> -->
                            <form id="validationform" method="post" data-parsley-validate="" novalidate="">
                                <div class="card">
                                         <h5 class="card-header">Indiquez les criteres de recherche: <?php echo $one['num_tc']?></h5>
                                    <div class="card-body">
                                        <div class="row">
                                                <div class="col-4">
                                                 <!-- <form id="validationform" data-parsley-validate="" novalidate=""> -->
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Num Tc</label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                            <input type="text"  class="form-control" name="num_tc"  value='<?php echo $uni['num_tc']; ?>'>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Date de Tc </label>
                                                        <div class="col-12 col-sm-8 col-lg-6"  >
                                                            <input type="date"  name="date_tc"  class="form-control" value='<?php echo $uni['date_tc']; ?>' >
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Code Declarant</label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                            <input type="text"  name="code_declara"  class="form-control" value='<?php echo $uni['code_declara']; ?>'  >
                                                        </div>
                                                    </div>
   
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Nom Declarant</label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                            <input type="text"  class="form-control" name="nom_declara"  value='<?php echo $uni['nom_declara']; ?>'>
                                                        </div>
                                                    </div>
                                 
                                                </div>

                                                <div class="col-4">
                                                <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Nom Importateur</label>
                                                        <div class="col-12 col-sm-8 col-lg-6" style="width:50px;">
                                                            <input type="text"  class="form-control" name="nom_imp"  value='<?php echo $uni['nom_imp']; ?>'>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Code Importateur</label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                            <input type="text"  class="form-control" name="code_imp"  value='<?php echo $uni['code_imp']; ?>'>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Date de visite</label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                            <input type="date"  class="form-control" name="date_visite"  value='<?php echo $uni['date_visite']; ?>'>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Agent visiteur</label>
                                                        <div class="col-12 col-sm-8 col-lg-6">

                                                            <select  name="agent_visiteur" class="form-control" >
                                                                <option value="">--Selectionnez--</option>
                                                                <option value="SORO">SORO</option>
                                                                <option value="TRAHIER">TRAHIER</option>
                                                                <option value="DIABAGATE">DIABAGATE</option>
                                                                <option value="BLAIMAN">BLAIMAN</option>
                                                                <option value="KOUAME">KOUAME</option>
                                                                <option value="TOURET">TOURET</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                   
                                                </div>
                                                
                                                <div class="col-4">
                                                    <!-- <form id="validationform" data-parsley-validate="" novalidate=""> -->
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Type de visite</label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                        <select  name="type_visite" class="form-control" required >
                                                                <option value="">--Selectionnez--</option>
                                                                <option value="VAD">VAD</option>
                                                                <option value="VAQ">VAQ</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left" for="select">Vav</label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                    <select id="select" class="form-control" name="vav">
                                                                    <option value="" selected>--Slectionnez--</option>
                                                                    <option value="Oui">Oui</option>
                                                                    <option value="Non">Non</option>
                                                                    </select>
                                                        </div>
                                                    </div>                                                    
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left" for="select">statut</label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                           
                                                                    <select id="select" class="form-control" name="statut">
                                                                    <option value="" selected>--Slectionnez--</option>
                                                                    <option value="NULL">Non Visite</option>
                                                                    <option value="1">Visite</option>
                                                                    <option value="2">Courrier</option>
                                                                    <option value="3">Evalue</option>
                                                                    <option value="4">Conteste</option>
                                                                    
                                                                    </select>

                                                        </div>
                                                    </div>
                                                    
                                                  
                                                    <!-- </form> -->
                                                </div>
                                        </div>  
                                        <div class="row">
                                        <div class="col-4">
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Date debut Tc </label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                            <input type="date"  name="date_debut_tc"  class="form-control" value='<?php echo ''; ?>'  >
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group row">
                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left">Date fin Tc </label>
                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                            <input type="date"  name="date_fin_tc"  class="form-control" value='<?php echo ''; ?>'  >
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
                        
           
        