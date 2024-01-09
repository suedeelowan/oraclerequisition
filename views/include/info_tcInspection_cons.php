
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <form id="validationform" method="post" data-parsley-validate="" novalidate="">
                                
                                                <div class="card" style=" height:20px; margin: top 25px;">
                                                    <h5 class="card-header"><span style="color:green; font-size:14px;">Informtaion de la TC</span></h5>
                                                </div>  
                                                <div class="card-body">
                                            
                                                    <div class="row">
                                                            <div class="col-4">
                                                                    <div class="form-group row">
                                                                                <label class="col-12 col-sm-6 col-form-label text-sm-right" >Numero de Tc</label>
                                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                                    <input type="text"  class="form-control" name="num_tc" id="myInput" disabled value='<?php echo $one['num_tc']; ?>'onblur="myFunction()">
                                                                                </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-right">Date de Tc</label>
                                                                                    <div class="col-12 col-sm-8 col-lg-6" >
                                                                                            <input type="date"  class="form-control" name="date_tc" disabled value='<?php echo $one['date_tc']; ?>'>
                                                                                    </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-right"> Code Declarant</label>
                                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                                        <input type="text"  class="form-control" name="code_declara" disabled value='<?php echo $one['code_declara']; ?>'>
                                                                                    </div>
                                                                    </div>

                                                            </div>

                                                            <div class="col-4">
                                                                    <div class="form-group row">
                                                                                <label class="col-12 col-sm-6 col-form-label text-sm-right">Moyen de transport</label>
                                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                                    <input type="text" class="form-control"  name="moyen_transport"  disabled value='<?php echo $one['moyen_tranp']; ?>'>
                                                                                        
                                                                                </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-right">Marchandises</label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="text"  class="form-control" name="marchandise" disabled value='<?php echo $one['marchandise']; ?>'>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-right">Nom Declarant</label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="text"  class="form-control" name="nom_declara" disabled value='<?php echo $one['nom_declara']; ?>'>
                                                                        </div>
                                                                    </div>
                                                        
                                                            </div>
                                       
                                                            <div class="col-4">                         
                                                                    <div class="form-group row">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-right">Code Importateur</label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="text"  class="form-control" name="code_imp" disabled value='<?php echo $one['code_imp']; ?>'>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-right">Nom Importateur</label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="text"  class="form-control" name="nom_imp" disabled value='<?php echo $one['nom_imp']; ?>'>
                                                                        </div>
                                                                    </div>
                                                
                                                            </div>
                                                    </div>   
                                                </div>
                                             
                                
                                            <div class="card" style=" height:20px; margin: top 25px;">
                                                <h5 class="card-header"><span style="color:green; font-size:14px;">Information de l'Inspection</span></h5>
                                            </div>
                                            <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-4">
                                                                <!-- <form id="validationform" data-parsley-validate="" novalidate=""> -->
                                                            <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-right">N° de Declaration</label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                    <input type="text"  class="form-control" name="num_declara" disabled value='<?php echo $one['num_declaration']; ?>'>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-right">Date de Declaration</label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                    <input type="date"  class="form-control" name="date_delara" disabled value='<?php echo $one['date_declara']; ?>'>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-right">Date  rapport visite</label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                    <input type="date"  class="form-control" name="date_rapport" disabled value='<?php echo $one['date_depot_visit']; ?>'>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col text-sm-right">Conformité</label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                    <input type="text"  name="conformite" class="form-control" disabled value='<?php echo $one['conformite']; ?>'>
                                                                    
                                                                </div>
                                                            </div>
                                                            
                                                        </div>

                                                        <div class="col-4">
                                                        <!-- <form id="validationform" data-parsley-validate="" novalidate=""> -->
                                                            <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-right">Date de visite</label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                    <input type="date"  class="form-control" name="date_visite" disabled value='<?php echo $one['date_visite']; ?>'>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-right">Lieu de visite</label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                    <input type="text"  class="form-control" name="lieu_visite" disabled value='<?php echo $one['lieu_visite']; ?>'>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-right">Type de visite</label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                <input type="text" name="type_visite"  class="form-control" disabled value='<?php echo $one['type_visite']; ?>'>
                                                                        
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left">Nom Operateur visite</label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="text"  name="nom_op_visite" class="form-control" value="<?php echo $one['type_visite']; ?>" disabled  >
                                                                        <option value="<?php echo $one['nom_op_visite']; ?>"></option>
                                                                </div>
                                                            </div>
                                                            
                                            
                                                        </div>

                                                        <div class="col-4">
                                                        <!-- <form id="validationform" data-parsley-validate="" novalidate=""> -->
                                                            <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-right">Agent visiteur</label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                    <input type="text" class="form-control" name="agent_visiteur"  value='<?php echo $one['agent_visit']; ?>'>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-right">Date cotation</label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                    <input type="date"  class="form-control" name="Date_cotation" disabled value='<?php echo $one['date_cotation']; ?>'>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col text-sm-center">VAV</label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                    <input type="text"  name="vav" class="form-control" disabled value='<?php echo $one['vav']; ?>' >
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left">Nom Officier visite</label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <select  name="nom_off_visiteur" class="form-control" disabled >
                                                                            <option value="<?php echo $one['nom_off_visiteur']; ?>"></option>
                                                                            
                                                                        </select>
                                                                    </div>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row">
                                                            <div class="col-4">
                                                                    <div class="form-group row ">
                                                                            <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Infraction</FONT></label>
                                                                            <div class="col-12 col-sm-8 col-lg-6" >
                                                                                <textarea id="story" rows="" cols="100" class="form-control" name="infraction" style="height: 30px;" disabled>123<?php echo str_replace('|',$one['infraction'],'<br/>'); ?></textarea>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                
                                                    </div>

                    
                                            </div>
                                
                                </form>
                             
                            </div>
                       
                   
                        
           
        