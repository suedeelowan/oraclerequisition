<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <!-- <div class="card-body"> -->
                            <form id="validationform" method="post" data-parsley-validate="" novalidate="">
                                <div class="card">
                                         <h5 class="card-header">Informtaion sur le retour de la Requisition</h5>
                                    <div class="card-body">
                                        <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group row">
                                                                <label class="col-6 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Date de DPOD</FONT></label>
                                                                <div class="col-6">
                                                                    <input type="hidden"  class="form-control" name="id_Tc" value='<?php echo $one['id_Tc']; ?>' >
                                                                    <input type="date"  class="form-control" name="date_dpod" required style="height: 30px;font-size:14px;">
                                                                    
                                                                </div>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                        <div class="form-group row">
                                                                <label class="col-6 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Date de DC</FONT></label>
                                                                <div class="col-6" >
                                                                    <input type="date"  class="form-control" name="date_dc" required style="height: 30px;font-size:14px;">
                                                                </div>
                                                        </div>
                                                        
                                                </div>
                                                <div class="col-4">
                                                        <div class="form-group row">
                                                                <label class="col-6 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Montant DC</FONT></label>
                                                                <div class="col-6" >
                                                                    <input type="text"  class="form-control" name="montant_dc" required style="height: 30px;font-size:14px;">
                                                                </div>
                                                        </div>
                                                        
                                                </div>
                                        </div>

                                                <div class="col-12" id="nonc1">
                                                                    <div class="form-group row ">
                                                                            <label class="col-2 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Infractions</FONT></label>
                                                                            <div class="col-10" required style="white-space: no-wrap;">
                                                                                <!-- <div class="form-group row" > -->
                                                                                                                             
                                                                                        <select id="mySelect1RPL" class="form-control" multiple="multiple" name="infraction[]" required style="height: 30px;width: 100%;font-size:14px;">
                                                                                          <?php foreach($allinf as $index => $moninfraction ) : ?>
                                                                                            <option value="<?php echo $moninfraction['id_inf'] ;?>">&nbsp;&nbsp;&nbsp;<?php echo $moninfraction['libelle_inf'] ;?></option>
                                                                                          <?php endforeach ; ?>
                                                                                            
                                                                                        </select>

                                                                                <!-- </div> -->
                                                                            </div>
                                                                    </div>
                                                        
                                                </div>       
    
                                    </div>
                                    
                                       
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row text-right">
                                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                    <button type="submit" class="btn btn-space btn-primary" name="envoyer_RPL">Enregistrer</button>
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
            $('#mySelect1RPL').select2({
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


