  
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script> -->



                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- valifation types -->
                              <?php if(isset($_GET['search']))  { foreach ($info_tc as $index => $tc_trouve): 
                              
                              $tc_trouve['num_declaration'];
                              $numero_declaration=$tc_trouve['num_declaration'];
                              endforeach;
                            }?>
                        <?php if($_GET['search']){ echo $tc_trouve['date_tc']; }?>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="width:1000px; margin-left:-20px; height:5px;margin-top:-20px;">
                              
                                <div class="card-body">
                                   <form id="validationform" method="post" data-parsley-validate="" novalidate="">
                                           <div class="card">
                                            <h5 class="card-header"><span style="color:green; font: size 15px;">Informtaion de la TC:<?php echo $one['num_tc']?>!</span></h5>
                                            </div>
                                            <div class="card-body">                              
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left" style="height: 30px;" ><FONT size="2"color="#000000">Numero de Tc</FONT></label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                <input type="hidden"  class="form-control" name="id_Tc" id="idtc" value='<?php echo $one['id_Tc']; ?>'>
                                                                <input type="text"  class="form-control" required name="num_tc" id="myInput" value='<?php echo $one['num_tc']; ?>'style="height: 30px;">
                                                                     <!-- <input type="text"  class="form-control" required name="num_tc" id="myInput" value='<?php echo $uni['agent_visiteur']; ?>'onblur="myFunction()"> -->
                                                               </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date de Tc</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6" >
                                                                        <input type="date"  class="form-control" required name="date_tc" value='<?php echo $one['date_tc']; ?>'style="height: 30px;">
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-4">
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date de requisition</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="date"  class="form-control" name="date_requi"  required value='<?php echo $one['SDGR_Date']; ?>' >
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Code Importateur</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="text"  class="form-control" required name="code_imp" value='<?php echo $one['code_imp']; ?>'style="height: 30px;">
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-8">
                                                                <div class="form-group row">
                                                                    <label class="col-3 col-form-label text-sm-left"><FONT size="2"color="#000000">Nom Importateur</FONT></label>
                                                                    <div class="col-9 ">
                                                                        <input type="text"  class="form-control" required name="nom_imp" value='<?php echo $one['nom_imp']; ?>'style="height: 30px;">
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Code Declarant</FONT></label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                    <input type="text"  class="form-control" required name="code_declara" value='<?php echo $one['code_declara']; ?>'style="height: 30px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-8">
                                                                <div class="form-group row">
                                                                    <label class="col-3 col-form-label text-sm-left"><FONT size="2"color="#000000">Nom Declarant</FONT></label>
                                                                    <div class="col-9 ">
                                                                        <input type="text"  class="form-control" required name="nom_declara" value='<?php echo $one['nom_declara']; ?>'style="height: 30px;">
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">N° de Declaration</FONT></label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                    <!-- <input type="text"  class="form-control" name="num_declara" required minlength="10" size="10"> -->
                                                                    <input type="text"  class="form-control" name="num_declara" value='<?php echo $one['num_declaration']; ?>'style="height: 30px;">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-4">
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date de Declaration</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="date"  class="form-control" required name="date_delara" value='<?php echo $one['date_declara']; ?>'style="height: 30px;">
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
                                            <div class="card">
                                            <h5 class="card-header"><span style="color:green; font-size:15px;">Information de l'Inspection</span></h5>
                                            </div>
                                            <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-4">
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date de visite</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="date"  class="form-control" name="date_visite"  value='<?php echo $one['date_visite']; ?>' required style="height: 30px;">
                                                                    </div>
                                                                </div>  
                                                        </div>
                                                        <div class="col-8">
                                                                <div class="form-group row">
                                                                    <label class="col-2 col-form-label text-sm-left"><FONT size="2"color="#000000">Lieu de visite</FONT></label>
                                                                    <div class="col-10 ">
                                                                        <input type="text"  class="form-control" name="lieu_visite" value='<?php echo $one['lieu_visite']; ?>' required style="height: 30px;">
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-4">
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date cotation</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="date"  name="Date_cotation" value='<?php echo $one['date_cotation']; ?>'required class="form-control"style="height: 30px;">
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-8">
                                                                <div class="form-group row">
                                                                    <label class="col-2  col-form-label text-sm-left"><FONT size="2"color="#000000">Agent visiteur</FONT></label>
                                                                    <div class="col-10 ">
                                                                        <select  name="agent_visiteur" class="form-control" required >
                                                                            <option value="">Selectionner ...</option>
define("OPEVISIT", "OPERATEUR VISITE");
                                                                            <?php foreach(agt_service(CONTS) as $index => $agtinspec) : ?>                                                                                    
                                                                            <option value="<?php echo $agtinspec['NOM_AG']; ?>"><?php echo $agtinspec['NOM_AG']; ?></option>
                                                                            <?php endforeach; ?>
                                                                            
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-4">
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Type de visite</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                    <select  name="type_visite" class="form-control" required >
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
                                                                        <input type="date"  name="date_Dvisite" value='<?php echo $one['date_Dvisite']; ?>'required class="form-control">
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-4">
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date fin visite</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="date"  class="form-control" value='<?php echo $one['date_Fvisite']; ?>' name="date_Fvisite"  required style="height: 30px;">
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-4">
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date  rapport visite</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="date"  class="form-control" value='<?php echo $one['date_depot_visit']; ?>' required name="date_rapport" >
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Resultat Visite</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <select  name="conformite" class="form-control" required style="height: 30px;" >
                                                                        <option value="<?php echo $one['conformite']; ?>"><?php echo $one['conformite']; ?></option>
                                                                            <option value="conforme">Conforme</option>
                                                                            <option value="Non conforme">Non conforme</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-4">
                                                                    <div class="form-group row">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date envoie en rééval</FONT></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6" >
                                                                            <input type="date"  class="form-control" required name="dateEnvReev" value='<?php echo $one['date_envoi_reev']; ?>'>
                                                                        </div>
                                                                    </div>

                                                        
                                                        </div>
                                                        <div class="col-4">
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">VAV</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <select  name="vav" class="form-control"  >
                                                                            <option value="<?php echo $one['vav']; ?>"><?php echo $one['vav']; ?></option>
                                                                            <option value="oui">Oui</option>
                                                                            <option value="non">Non</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-8">
                                                                <div class="form-group row">
                                                                    <label class="col-3 col-form-label text-sm-left"><FONT size="2"color="#000000">Nom Operateur visite</FONT></label>
                                                                    <div class="col-9">
                                                                        <select  name="nom_op_visite" class="form-control" >
                                                                            <option value="">Selectionner ...</option>
define("OPEVISIT", "OPERATEUR VISITE");
                                                                            <?php foreach(agt_service(OPEVISIT) as $index => $opevisit) : ?>
                                                                                <option value="<?php echo $opevisit['NOM_AG']; ?>"><?php echo $opevisit['NOM_AG']; ?></option>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                        </div>

                                                        <div class="col-12">
                                                                <div class="form-group row">
                                                                    <label class="col-2 col-form-label text-sm-left"><FONT size="2"color="#000000">Nom Officier visite</FONT></label>
                                                                    <div class="col-10 ">
                                                                        <select  name="nom_off_visiteur" class="form-control" required >
                                                                            <option value="">Selectionner ...</option>
                                                                            <?php foreach(agt_service(OFFVISIT) as $index => $nominspection) : ?>
                                                                            <option value="<?php echo $nominspection['NOM_AG']; ?>"><?php echo $nominspection['NOM_AG']; ?></option>
                                                                            <?php endforeach; ?>
                                                                           
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-12">
                                                                <div class="form-group row">
                                                                    <label class="col-2 col-form-label text-sm-left"><FONT size="2"color="#000000">Marchandises</FONT></label>
                                                                    <div class="col-10 ">
                                                                        <input type="text"  name="marchandise_add" value="" class="form-control"/> 
                                                                    </div>
                                                                </div>
                                        
                                                        </div>
                                                        <div class="col-12">
                                                                    <div class="form-group row ">
                                                                            <label class="col-2 col-form-label text-sm-left"><FONT size="2"color="#000000">Infractions</FONT></label>
                                                                            <div class="col-10" >
                                                                                <div class="row" id="t_rapporti++"style="white-space: no-wrap;">
                                       
                                                                                    <!-- &nbsp;&nbsp;<input type="checkbox" id="checkbox" name="infraction[]"  value="Minoration de la valeur Fob">&nbsp; Minoration de la valeur Fob  &nbsp;
                                                                                    &nbsp;&nbsp;<input type="checkbox" id="checkbox" name="infraction[]"  value="Minoration de quantité">&nbsp; Minoration de quantité &nbsp;
                                                                                    &nbsp;&nbsp;<input type="checkbox" id="checkbox" name="infraction[]"  value="Glissement tarifaire">&nbsp; Glissement tarifaire &nbsp;
                                                                                    &nbsp;&nbsp;<input type="checkbox" id="checkbox" name="infraction[]"  value="Minoration de la valeur Fob">&nbsp; Minoration de la valeur Fret &nbsp; -->
                                                                                       
                                                                                        <select id="mySelect" multiple="multiple" style="width: 100%;" name="infraction[]">
                                                                                          <?php foreach($allinf as $index => $moninfraction ) : ?>
                                                                                            <option value="<?php echo $moninfraction['id_inf'] ;?>">&nbsp;&nbsp;&nbsp;<?php echo $moninfraction['libelle_inf'] ;?></option>
                                                                                          <?php endforeach ; ?>
                                                                                            
                                                                                        </select>

                                                                                </div>
                                                                            </div>
                                                                    </div>
                                                        
                                                        </div>

                                     
                                                    </div>
                                                   
                                                    <!-- <div class="row col-12"> -->
                                                            
                                                                    
                                                            
                                                            
                                                    <!-- </div> -->
                                                   

                                                    <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group row text-right">
                                                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                                                <button type="submit" class="btn btn-space btn-primary" style="width:120px; height: 35px;" name="envoyer">Enregistrer</button>
                                                                                <button type="reset" class="btn btn-space btn-secondary" style="width:120px; height: 35px;"value="reset">Reinitialiser</button>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                
                                                    </div>
                                        </div>
                                                    
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


