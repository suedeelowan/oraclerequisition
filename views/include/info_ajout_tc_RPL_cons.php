<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <!-- <div class="card-body"> -->
                            <form id="validationform" method="post" data-parsley-validate="" novalidate="">
                                <div class="card">
                                         <h5 class="card-header">Informtaion sur le retour de la Requisition</h5>
                                    <div class="card-body">
                                        <div class="row">
                                                <div class="col-4">
                                                    
                                            
                                                    <div class="form-group row">
                                                                <label class="col-4 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Date de DPOD</FONT> </label>
                                                                <div class="col-8">
                                                                <input type="hidden"  class="form-control" name="id_Tc" value='<?php echo $one['id_Tc']; ?>'>
                                                                    <input type="date"  class="form-control" name="date_dpod" value='<?php echo $one['date_dpod']; ?>' disabled style="height: 30px;font-size:14px;">
                                                                    
                                                                </div>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                        <div class="form-group row">
                                                                <label class="col-4 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Date de DC</FONT></label>
                                                                <div class="col-8 " >
                                                                    <input type="date"  class="form-control" name="date_dc" value='<?php echo $one['date_dc']; ?>' disabled style="height: 30px;font-size:14px;">
                                                                </div>
                                                        </div>
                                                        
                                                </div>
                                                <div class="col-4">
                                                        <div class="form-group row">
                                                                <label class="col-4 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Montant DC</FONT></label>
                                                                <div class="col-8" >
                                                                    <input type="text"  class="form-control" name="montant_dc" value='<?php echo $one['montant_dc']; ?>'disabled style="height: 30px;font-size:14px;">
                                                                </div>
                                                        </div>
                                                        
                                                </div>
                                        </div>
                                        <div class="row">       
                                            <div class="col-12" id="modifnonc">
                                                <div class="form-group row ">
                                                    <label class="col-2 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Infraction</FONT></label>
                                                    <div class="col-10" >
                                                        <select id="mySelectRPLCONS" multiple="multiple" style="width: 100%;" name="infraction[]" disabled style="height: 30px;font-size:14px;">
                                                                <?php
                                                                $i=0;
                                                                $nbre=substr_count($one['infraction_retour'], '|');
                                                                $linfraction=explode('|',$one['infraction_retour']);
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
$('#mySelectRPLCONS').select2({
placeholder: 'choisir ... ',
});
});
</script>  
<script type="text/javascript">
function afficherBloc() {
// Récupérer l'élément de sélection par son id
var select = document.getElementById("resultvisit");
// Masquer tous les blocs
var selectedValue = select.value;
// blocConformite.style.display = "none";
// Récupérer le bloc par son id
var Conformite = document.getElementById("blocConformite");
var Conformite1 = document.getElementById("blocConformite1");
var Conformitevav = document.getElementById("cacherVAV1");
var Conformitevav1 = document.getElementById("cacherVAV");
var modifnonc = document.getElementById("modifnonc");



// Afficher ou cacher le bloc en fonction de la valeur sélectionnée
if (selectedValue === "conforme") {
Conformite.style.display = "none";
Conformite1.style.display = "none";
Conformitevav.style.display = "none";
Conformitevav1.style.display = "none";
modifnonc.style.display = "none";

} 
else {
Conformite.style.display = "block";
Conformite1.style.display = "block";
Conformitevav.style.display = "block";
Conformitevav1.style.display = "block";
modifnonc.style.display = "block";

}

}

function cacherBloc() {
// Récupérer l'élément de sélection par son id
var select = document.getElementById("resultvav");
// Masquer tous les blocs
var selectedValue = select.value;
// blocConformite.style.display = "none";
// Récupérer le bloc par son id
var levav = document.getElementById("cacherVAV");
var levav1 = document.getElementById("cacherVAV1");

// Afficher ou cacher le bloc en fonction de la valeur sélectionnée
if (selectedValue === "non") {
levav.style.display = "none";
levav1.style.display = "none";
} 
else {
levav.style.display = "block";
levav1.style.display = "block";
}

}


</script>