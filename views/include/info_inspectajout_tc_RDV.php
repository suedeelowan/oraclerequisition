


                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- valifation types -->
                              <?php if(isset($_GET['search']))  { foreach ($info_tc as $index => $tc_trouve): 
                              
                              $tc_trouve['num_declaration'];
                              $numero_declaration=$tc_trouve['num_declaration'];
                              endforeach;
                            }?>
                        <?php if($_GET['search']){ echo $tc_trouve['date_tc']; }?>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="width:1000px; margin-left:-20px; height:1000px;margin-top:-20px;">
                              
                                <div class="card-body">
                                   <form id="validationform" method="post" data-parsley-validate="" novalidate="">
                                           <fieldset>
                                                <legend>
                                                    <div class="card" style=" width:1040px;height: 35px; position: relative ; margin-top:-20px;" >
                                                    <h5 class="card-header"><span style="color:green; font-size: 15px;">Information de la TC: <?php echo $one['num_tc']?>!</span></h5>
                                                    </div>
                                                </legend>
                                           
                                                <div class="card-body" style="position: relative ; margin-top:-20px;">                              
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left" style="height: 30px;font-size:14px;" ><FONT size="2"color="#000000">Numero de Tc</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="hidden"  class="form-control" name="id_Tc" id="idtc" value='<?php echo $one['id_Tc']; ?>'>
                                                                        <input type="text"  class="form-control" required="required" name="num_tc" id="myInput" value='<?php echo $one['num_tc']; ?>'style="height: 30px;font-size:14px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                    <div class="form-group row">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date de Tc</FONT></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6" >
                                                                            <input type="date"  class="form-control" required="required" name="date_tc" value='<?php echo $one['date_tc']; ?>'style="height: 30px;font-size:14px;">
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col-4">
                                                                    <div class="form-group row">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date de requisition</FONT></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="date"  class="form-control" name="date_requi"  required="required" value='<?php echo $one['SDGR_Date']; ?>' >
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Code Importateur</FONT></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="text"  class="form-control" required="required" name="code_imp" value='<?php echo $one['code_imp']; ?>'style="height: 30px;font-size:14px;">
                                                                        </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-8">
                                                                    <div class="form-group row">
                                                                        <label class="col-3 col-form-label text-sm-left"><FONT size="2"color="#000000">Nom Importateur</FONT></label>
                                                                        <div class="col-9 ">
                                                                            <input type="text"  class="form-control" required name="nom_imp" value='<?php echo $one['nom_imp']; ?>'style="height: 30px;font-size:14px;">
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Code Declarant</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="text"  class="form-control" required name="code_declara" value='<?php echo $one['code_declara']; ?>'style="height: 30px;font-size:14px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-8">
                                                                    <div class="form-group row">
                                                                        <label class="col-3 col-form-label text-sm-left"><FONT size="2"color="#000000">Nom Declarant</FONT></label>
                                                                        <div class="col-9 ">
                                                                            <input type="text"  class="form-control" required name="nom_declara" value='<?php echo $one['nom_declara']; ?>'style="height: 30px;font-size:14px;">
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">N° de Declaration</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6 picto-item" aria-label="<?php echo $one['num_declaration']; ?>">
                                                                        <!-- <input type="text"  class="form-control" name="num_declara" required minlength="10" size="10"> -->
                                                                        <input type="text"  class="form-control" name="num_declara" value='<?php echo $one['num_declaration']; ?>'style="height: 30px;font-size:14px;">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="col-4">
                                                                    <div class="form-group row">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date de Declaration</FONT></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="date"  class="form-control" required name="date_delara" value='<?php echo $one['date_declara']; ?>'style="height: 30px;font-size:14px;">
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col-4">
                                                                        <div class="form-group row">
                                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Moyen de transport</FONT></label>
                                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                                        <select  name="moyen_transport" class="form-control" >
                                                                                        <option value=''><?php echo $one['moyen_tranp']; ?></option>
                                                                                            
                                                                                        </select>
                                                                                    </div>
                                                                        </div>
                                                            </div>
                                                        
                                                            <div class="col-12">
                                                                        <div class="form-group row">
                                                                                <label class="col-2 col-form-label text-sm-left"><FONT size="2"color="#000000">Desc Marchandises</FONT></label>
                                                                                <div class="col-10 " >
                                                                                    <textarea id="story" rows="1"  class="form-control" name="marchandise"><?php echo $one['marchandise']; ?></textarea>
                                                                                </div>
                                                                        </div>
                                                            </div>

                                                        </div>   
                                                </div>
                                           </fieldset>
                                           <fieldset>
                                                <legend>
                                                    <div class="card" style="width:1040px; height:35px;">
                                                    <h5 class="card-header"><span style="color:green; font-size:14px;">Information du RDV</span></h5>
                                                    </div>
                                                </legend>
                                            
                                                <div class="card-body" style="position: relative ; margin-top:-20px;">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                    <div class="form-group row">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date de visite</FONT></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="date"  required class="form-control" name="date_visite"  value='<?php echo $one['date_visite']; ?>'  style="height: 30px;font-size:14px;">
                                                                        </div>
                                                                    </div>  
                                                            </div>
                                                            <div class="col-8">
                                                                    <div class="form-group row">
                                                                        <label class="col-2 col-form-label text-sm-left"><FONT size="2"color="#000000">Lieu de visite</FONT></label>
                                                                        <div class="col-10 ">
                                                                            <textarea name="lieu_visite" style="height:50px;font-size:14px; width: 100%;"> </textarea>
                                                                            <!-- <input type="text" required="required" class="form-control" name="lieu_visite"  style="height: 30px;font-size:14px;"> -->
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col-4">
                                                                    <div class="form-group row">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date cotation</FONT></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="text"  required name="Date_cotation" value="<?php echo date('Y-m-d',time()); ?>" readonly="readonly"  class="form-control" style="height: 30px;font-size:14px;">
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col-8">
                                                                    <div class="form-group row">
                                                                        <label class="col-2  col-form-label text-sm-left"><FONT size="2"color="#000000">Agent visiteur</FONT><br/><br/><span style="font-size: 11px; color:red; font-style:italic; font-weight: bold;">Cotation Auto</span></label>
                                                                        <div class="col-10 ">
                                                                            <select  name="agent_visiteur" class="form-control" required >
                                                                                <!-- <option value="">Selectionner ...</option> -->
                                                                                <?php foreach(agt_cotation(INS) as $index => $agtinspec) : ?>                                                                                    
                                                                                <option value="<?php echo $agtinspec['MATRICULE_AG'].'-'.$agtinspec['NOM_AG']; ?>"><?php echo $agtinspec['MATRICULE_AG'].'-'.$agtinspec['NOM_AG']; ?></option>
                                                                                <?php endforeach; ?>
                                                                                <?php foreach(agt_service(INS) as $index => $agtinspec2) : ?>                                                                                    
                                                                                    <option value="<?php echo $agtinspec2['MATRICULE_AG'].'-'.$agtinspec2['NOM_AG']; ?>"><?php echo $agtinspec2['MATRICULE_AG'].'-'.$agtinspec2['NOM_AG']; ?></option>
                                                                                <?php endforeach; ?>
                                                                                
                                                                            </select><br/>
                                                                            <input type="text" value="<?php echo $agtinspec['MATRICULE_AG'].'-'.$agtinspec['NOM_AG']; ?>"  name="cotation_agent" class="form-control" readonly style="height: 30px;font-size:14px;" />
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col-4">
                                                                    <div class="form-group row">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Type de visite</FONT></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                        <select  required="required" name="type_visite" class="form-control"  style="height: 30px;font-size:14px;">
                                                                                <option value="<?php echo $one['type_visite']; ?>"><?php echo $one['type_visite']; ?></option>
                                                                                <option value="VAD">VAD</option>
                                                                                <option value="VAQ">VAQ</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col-4">
                                                                    <div class="form-group row">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date debut visite</FONT></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="date" required="required" name="date_Dvisite" value='<?php echo $one['date_Dvisite']; ?>' class="form-control"style="height: 30px;font-size:14px;">
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col-4">
                                                                    <div class="form-group row">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date fin visite</FONT></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="date"  required="required" class="form-control" value='<?php echo $one['date_Fvisite']; ?>' name="date_Fvisite"  style="height: 30px;font-size:14px;">
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            
                                                        </div>
                                                    
                                                        <div class="row" id="cacherVAV1">

                                                            <div class="col-12">
                                                                    <div class="form-group row">
                                                                        <label class="col-2 col-form-label text-sm-left"><FONT size="2"color="#000000">Nom agent PL</FONT></label>
                                                                        <div class="col-10 ">
                                                                            <input class="form-control" required="required" style="height: 30px;font-size:14px; width: 100%;" name="nom_agent_PL" />
                                                                            
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        <div class="row" >

                                                            <div class="col-12">
                                                                    <div class="form-group row">
                                                                        <label class="col-2 col-form-label text-sm-left"><FONT size="2"color="#000000">Instruction du chef</FONT></label>
                                                                        <div class="col-10 ">
                                                                            <textarea class="form-control" required="required" style="height: 50px;font-size:14px; width: 100%;" name="instru_chef"></textarea>
                                                                            
                                                                            
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group row text-right">
                                                                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                                                    <button type="submit" class="btn btn-space btn-primary" style="width:120px; height: 35px;" name="envoyerRDV">Enregistrer</button>
                                                                                    <button type="reset" class="btn btn-space btn-secondary" style="width:120px; height: 35px;"value="reset">Reinitialiser</button>
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                    
                                                        </div>
                                                </div>
                                            </fieldset>     
                                    </form> 
                                </div>
                            </div>
                        
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
    <script>
         function afficherBloc() {
                var select = document.getElementById("resultvisit");
                var selectedValue = select.value;
                var Conformite = document.getElementById("blocConformite");
                var vav = document.getElementById("blocConformite1");
                var off = document.getElementById("cacherVAV1");
                var vav1 = document.getElementById("cacherVAV");
                var nonc = document.getElementById("nonc");
                
                if (selectedValue === "conforme")
     {
        Conformite.style.display = "none";
        vav.style.display = "none";
        vav1.style.display = "none";
        off.style.display = "none";
        nonc.style.display = "none";
        // Conformitevav1.style.display = "none";
        // doubleconfort.style.display = "none";
    }
    
    else if (selectedValue === "Non conforme" ) {
        Conformite.style.display = "block";
        vav.style.display = "block";
        vav1.style.display = "block";
        off.style.display = "block";
        nonc.style.display = "block";
        // Conformitevav1.style.display = "block";
        
    } 
    

         }

         function cacherBloc() {

                var select = document.getElementById("resultvav");
            
            var selectedValue = select.value;
            
                var levav = document.getElementById("cacherVAV");
                var levav1 = document.getElementById("cacherVAV1");
                
                if (selectedValue === "non") {
                    levav.style.display = "none";
                    levav1.style.display = "none";
                    doubleconfort.style.display = "none";
                } 
                else {
                
                    levav.style.display = "block";
                    levav1.style.display = "block";
                }

        } 
    </script>


