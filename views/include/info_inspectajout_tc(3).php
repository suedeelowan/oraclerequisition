  
  
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
                                           <div class="card">
                                            <h5 class="card-header"><span style="color:green; font: size 15px;">Informtaion de la TC:<?php echo $one['num_tc']?>!</span></h5>
                                            </div>
                                            <div class="card-body">                              
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left" style="height: 30px;   " ><FONT size="2"color="#000000">Numero de Tc</FONT></label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                    <input type="hidden"  class="form-control" name="id_Tc" id="idtc" value='<?php echo $one['id_Tc']; ?>'>
                                                                    <input type="text"  class="form-control" required name="num_tc" disabled id="myInput" value='<?php echo $one['num_tc']; ?>'style="height: 30px;  background-color:#e3f0fe ; ">
                                                                     <!-- <input type="text"  class="form-control" required name="num_tc" id="myInput" value='<?php echo $uni['agent_visiteur']; ?>'onblur="myFunction()"> -->
                                                               </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">  
                                                            <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date de Tc</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6" >
                                                                        <input type="date"  class="form-control" required name="date_tc" disabled  value='<?php echo $one['date_tc']; ?>'style="height: 30px;  background-color:#e3f0fe ; ">
                                                                    </div>
                                                            </div> 
                                                            
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group row">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date de requisition</FONT></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="date"  class="form-control" name="date_requi" disabled  required value='<?php echo $one['SDGR_Date']; ?>' style="height: 30px;  background-color:#e3f0fe ; ">
                                                                        </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-4">

                                                            <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Code Importateur</FONT></label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                     <input type="text"  class="form-control" required name="code_imp" disabled  value='<?php echo $one['code_imp']; ?>'style="height: 30px;  background-color:#e3f0fe ; ">
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="col-8">
                                                            <div class="form-group row">
                                                                <label class="col-3 col-form-label text-sm-left"><FONT size="2"color="#000000">Nom Importateur</FONT></label>
                                                                <div class="col-9 ">
                                                                    <input type="text"  class="form-control" required name="nom_imp" disabled  value='<?php echo $one['nom_imp']; ?>'style="height: 30px;  background-color:#e3f0fe ; ">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        

                                                        <div class="col-4">
                                                                
                                                                <div class="form-group row">
                                                                        <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Code Declarant</FONT></label>
                                                                        <div class="col-12 col-sm-8 col-lg-6">
                                                                            <input type="text"  class="form-control" required name="code_declara" disabled value='<?php echo $one['code_declara']; ?>'style="height: 30px;  background-color:#e3f0fe ; ">
                                                                        </div>
                                                                </div>
                                                              

                                                        </div>
                                                        <div class="col-8">        

                                                                <div class="form-group row">
                                                                    <label class="col-3 col-form-label text-sm-left"><FONT size="2"color="#000000">Nom Declarant</FONT></label>
                                                                    <div class="col-9">
                                                                        <input type="text"  class="form-control" required name="nom_declara" disabled value='<?php echo $one['nom_declara']; ?>'style="height: 30px;  background-color:#e3f0fe ; ">
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">


                                                        <div class="col-4">
                                                            <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">N° de Declaration</FONT></label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                    <!-- <input type="text"  class="form-control" name="num_declara" required minlength="10" size="10"> -->
                                                                    <input type="text"  class="form-control" name="num_declara" disabled value='<?php echo $one['num_declaration']; ?>'style="height: 30px;  background-color:#e3f0fe ; ">
                                                                </div>
                                                            </div>
    
                                                        </div>
                                                        <div class="col-4">

                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date de Declaration</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="date"  class="form-control" required name="date_delara" disabled value='<?php echo $one['date_declara']; ?>'style="height: 30px; background-color:#e3f0fe ;">
                                                                    </div>
                                                                </div>
                                                                
                                                        </div>
                                       
                                                        <div class="col-4">
                                                                      
                                                                    <div class="form-group row">
                                                                            <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Moyen de transport</FONT></label>
                                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                                    <select  name="moyen_transport" disabled class="form-control" style="height: 30px; background-color:#e3f0fe ;">
                                                                                      <option value=''><?php echo $one['moyen_tranp']; ?></option>
                                                                                        
                                                                                    </select>
                                                                                </div>
                                                                    </div>  
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                                    
                                                                    <div class="form-group row">
                                                                            <label class="col-2 col-form-label text-sm-left"><FONT size="2"color="#000000">Desc Marchandises</FONT></label>
                                                                            <div class="col-10" >
                                                                                <textarea id="story" rows="" cols="100" class="form-control colorconsul" name="marchandise"   style="height: 60px; background-color:#e3f0fe ;"><?php echo $one['marchandise']; ?></textarea>
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
                                                                        <input type="date"  class="form-control" name="date_visite" disabled  value='<?php echo $one['date_visite']; ?>' required style="height: 30px;  background-color:#e3f0fe ; ">
                                                                    </div>
                                                                </div>

                                                        </div>
                                                        <div class="col-8">
                                                            <div class="form-group row">
                                                                    <label class="col-3 col-form-label text-sm-left"><FONT size="2"color="#000000">Lieu de visite</FONT></label>
                                                                    <div class="col-9">
                                                                        <input type="text"  class="form-control" name="lieu_visite" disabled  value='<?php echo $one['lieu_visite']; ?>' required style="height: 30px;  background-color:#e3f0fe ; ">
                                                                    </div>
                                                                </div>
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date cotation</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="date"  name="Date_cotation" disabled value='<?php echo $one['date_cotation']; ?>'required class="form-control"style="height: 30px;  background-color:#e3f0fe ; ">
                                                                    </div>
                                                                </div>

                                                        </div>
                                                        <div class="col-8">
                                                                <div class="form-group row">
                                                                    <label class="col-3 col-form-label text-sm-left"><FONT size="2"color="#000000">Agent visiteur</FONT></label>
                                                                    <div class="col-9">
                                                                        <select  name="agent_visiteur" disabled class="form-control" required style="height: 30px;  background-color:#e3f0fe ; ">
                                                                            <option value="<?php echo $one['agent_visit']; ?>"><?php echo $one['agent_visit']; ?></option>
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
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Type de visite</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                    <select  name="type_visite" disabled class="form-control" required style="height: 30px;  background-color:#e3f0fe ; ">
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
                                                                        <input type="date"  name="date_Dvisite" disabled  value='<?php echo $one['date_Dvisite']; ?>'required class="form-control"style="height: 30px;  background-color:#e3f0fe ; ">
                                                                    </div>
                                                                </div>
                                                        
                                                        </div>
                                                        <div class="col-4">
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date fin visite</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="date"  disabled class="form-control" value='<?php echo $one['date_Fvisite']; ?>' name="date_Fvisite"  required style="height: 30px;  background-color:#e3f0fe ; ">
                                                                    </div>
                                                                </div>
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date  rapport visite</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <input type="date"  class="form-control" value='<?php echo $one['date_depot_visit']; ?>' required disabled name="date_rapport" style="height: 30px;  background-color:#e3f0fe ; ">
                                                                    </div>
                                                                </div>

                                                        </div>
                                                        <div class="col-4">
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Resultat de Visite</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <select  name="conformite" disabled class="form-control" required style="height: 30px;  background-color:#e3f0fe ; " >
                                                                        <option value="<?php echo $one['conformite']; ?>"><?php echo $one['conformite']; ?></option>
                                                                            <option value="conforme">Conforme</option>
                                                                            <option value="Non conforme">Non conforme</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                        
                                                        </div>
                                                        <div class="col-4" <?php if($one['conformite']=='conforme') echo ' style="display: none;"'; ?>>
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">Date envoie en rééval</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6" >
                                                                        <input type="date"  class="form-control" required disabled name="dateEnvReev" value='<?php echo $one['date_envoi_reev']; ?>'style="height: 30px;  background-color:#e3f0fe ; ">
                                                                    </div>
                                                                </div>
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="row" <?php if($one['conformite']=='conforme') echo ' style="display: none;"'; ?>>
                                                        <div class="col-4">
                                                                <div class="form-group row">
                                                                    <label class="col-12 col-sm-6 col-form-label text-sm-left"><FONT size="2"color="#000000">VAV</FONT></label>
                                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                                        <select  name="vav" disabled class="form-control" style="height: 30px;  background-color:#e3f0fe ; " >
                                                                            <option value="<?php echo $one['vav']; ?>"><?php echo $one['vav']; ?></option>
                                                                            <option value="oui">Oui</option>
                                                                            <option value="non">Non</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                        </div>
                                                        <div class="col-8" <?php if($one['vav']=='oui') echo ' style="display: none;"'; ?>>
                                                                <div class="form-group row">
                                                                    <label class="col-3 col-form-label text-sm-left"><FONT size="2"color="#000000">Nom Operateur visite</FONT></label>
                                                                    <div class="col-9">
                                                                        <select  name="nom_op_visite" disabled class="form-control" style="height: 30px;  background-color:#e3f0fe ; ">
                                                                            <option value="<?php echo $one['nom_op_visite']; ?>"><?php echo $one['nom_op_visite']; ?></option>
                                                                           
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                        
                                                        </div>
                                                       
                                                    </div>
                                                    <div class="row" <?php if($one['conformite']=='conforme'  OR $one['vav']=='oui' ) echo ' style="display: none;"'; ?>>    
                                                         <div class="col-12">
                                                                <div class="form-group row">
                                                                    <label class="col-2 col-form-label text-sm-left"><FONT size="2"color="#000000">Nom Officier visite</FONT></label>
                                                                    <div class="col-10">
                                                                        <select  name="nom_off_visiteur"  class="form-control" required style="height: 30px;  background-color:#e3f0fe ; "  disabled >
                                                                            <option value="<?php echo $one['nom_off_visiteur']; ?>"><?php echo $one['nom_off_visiteur']; ?></option>
                                                                           
                                                                        </select>
                                                                    </div>
                                                                </div>
                                       
                                                         </div>
                                     
                                                    </div>

                                                    <div class="row" >
                                                        <div class="col-12">
                                                                <div class="form-group row">
                                                                    <label class="col-2 col-form-label text-sm-left"><FONT size="2"color="#000000">Marchandises</FONT></label>
                                                                    <div class="col-10 ">
                                                                        <select  name="nom_off_visiteur" class="form-control" required style="height: 30px;  background-color:#e3f0fe ; "  disabled >
                                                                            <option value="<?php echo $one['nom_off_visiteur']; ?>"><?php echo $one['nom_off_visiteur']; ?></option>
                                                                            
                                                                        </select>
                                                                    </div>
                                                                </div>
                                        
                                                        </div>
                                                    </div>

                                                    
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group row ">
                                                                <label class="col-2 col-form-label text-sm-left"><FONT size="2"color="#000000">Infraction</FONT></label>
                                                                <div class="col-10" >
                                                                    <div class="row" id="t_rapporti++"style="white-space: no-wrap;">
                                                                                <select id="mySelect23" multiple="multiple" style="width: 100%;" name="infraction[]" disabled>
                                                                                        <?php
                                                                                        $i=0;
                                                                                        $nbre=substr_count($one['infraction'], '|');
                                                                                        $linfraction=explode('|',$one['infraction']);
                                                                                        foreach($allinf as $index => $moninfraction ) : 
                                                                                        
                                                                                         if($linfraction[$i]==$moninfraction['id_inf']) {
                                                                                         
                                                                                            ?>
                                                                                            <option value="<?php echo $moninfraction['id_inf'] ;?>" <?php if($linfraction[$i]==$moninfraction['id_inf'])echo "selected='selected'";?>>&nbsp;&nbsp;&nbsp;<?php echo $moninfraction['libelle_inf'] ;?></option>
                                                                                            <?php
                                                                                            $i++;
                                                                                         }else{ ?>
                                                                                            <option value="<?php echo $moninfraction['id_inf'] ;?>" >&nbsp;&nbsp;&nbsp;<?php echo $moninfraction['libelle_inf'];?></option>
                                                                                        <?php
                                                                                        }
                                                                                        endforeach ;
                                                                                        ?>    
                                                                                </select>


                            
                                                                      
                                                                                
                                                                    </div>
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
    // $('#form').parsley();
    </script>
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
            $('#mySelect23').select2({
            placeholder: 'choisir ... ',
            });
        });
</script>  
