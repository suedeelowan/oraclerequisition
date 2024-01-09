<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <!-- <div class="card-body"> -->
                            <form id="validationform" method="post" data-parsley-validate="" novalidate="">
                                <div class="card">
                                         <h5 class="card-header">Informtaion sur la réévaluation TC: <?php echo $one['num_tc']?></h5>
                                    <div class="card-body">
                                        <div class="row">
                                                <div class="col-4">
                                                        
                                                    <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-right">Date prise en charge </label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                <input type="hidden"  class="form-control" name="id_Tc" value='<?php echo $one['id_Tc']; ?>'>
                                                                 <input type="date"  class="form-control" name="date_envoi_reev" value='<?php echo $one['date_envoi_reev']; ?>'>
                                                                   
                                                                </div>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                        <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-right">Date de réévaluation</label>
                                                                <div class="col-12 col-sm-8 col-lg-6" >
                                                                    <input type="date"  class="form-control" name="date_reev" value='<?php echo $one['date_reev']; ?>'>
                                                                </div>
                                                        </div>
                                                        
                                                </div>

                                                <div class="col-4">
                                                        <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-right">Date validation</label>
                                                                <div class="col-12 col-sm-8 col-lg-6" >
                                                                    <input type="date"  class="form-control" name="datevalid" value='<?php echo $one['date_validation']; ?>'>
                                                                </div>
                                                        </div>
                                                        
                                                </div>

                                
                                                
                                        </div>   
                                    </div>
                                    
                                        <div class="row">

                                                <div class="col-4">
                                                        <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-right">Valeur Fob réévaluée</label>
                                                                <div class="col-12 col-sm-8 col-lg-6" >
                                                                    <input type="text"  class="form-control" name="fob_reeva" value='<?php echo number_format($one['fob_reeva'],2,',',''); ?>'>
                                                                </div>
                                                        </div>
                                                        
                                                </div>

                                                <div class="col-4">
                                                        <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-right">Montant DC Prev</label>
                                                                <div class="col-12 col-sm-8 col-lg-6" >
                                                                    <input type="text"  class="form-control" name="dc_prevision" value='<?php echo number_format($one['montant_DC_prevision']); ?>'>
                                                                </div>
                                                        </div>
                                                        
                                                </div>

                                                <div class="col-4">
                                                        <!-- <form id="validationform" data-parsley-validate="" novalidate=""> -->
                                                    <div class="form-group row">
                                                                <label class="col-12 col-sm-6 col-form-label text-sm-right">date envoi PL</label>
                                                                <div class="col-12 col-sm-8 col-lg-6">
                                                                 <input type="date"  class="form-control" name="date_envoi_pl_reev" value='<?php echo $one['date_envoi_pl_reev']; ?>' required>
                                                                   
                                                                </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="row"> 
                                                <div class="col-6">
                                                        <div class="form-group row">
                                                                <label class="col-4 col-form-label text-sm-right">Agent Reeval</label>
                                                                <div class="col-8" >
                                                            
                                                                    <select  name="agent_reeva" class="form-control" required style="height: 40px;" style="height: 40px;" >
                                                                           
                                                                            <?php foreach(agt_service(REEVAL) as $index => $nomreeval) : ?>
                                                                            <option value="<?php echo $nomreeval['NOM_AG']; ?>" <?php if($one['agent_reeva']==$nomreeval['NOM_AG']) echo 'selected="selected"';?>><?php echo $nomreeval['NOM_AG']; ?></option>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                </div>
                                                        </div>
                                                        
                                                </div>
                                                <div class="col-6">
                                                        <div class="form-group row">
                                                                <label class="col-4 col-form-label text-sm-right">Agent audit</label>
                                                                <div class="col-8" >
                                                                        <select  name="agent_audit" class="form-control" required >
                                                                            <option value="">Selectionner ...</option>
                                                                            <?php foreach(agt_service(AUDI) as $index => $nomaudit) : ?>
                                                                            <option value="<?php echo $nomaudit['NOM_AG']; ?>" <?php if($one['agent_audit']==$nomaudit['NOM_AG']) echo 'selected="selected"';?>><?php echo $nomaudit['NOM_AG']; ?></option>
                                                                            <?php endforeach; ?>
                                                                        
                                                                        </select>
                                                            
                                                                    
                                                                </div>
                                                        </div>
                                                        
                                                </div>
                                        
                                        </div>

                                        <div class="row">
    
                        
                                                <div class="col-4">
                                                        
                                                    <div class="form-group row">
                                                                <label class="col-2 col-sm-6 col-form-label text-sm-right">date de validation</label>
                                                                <div class="col-10 col-sm-8 col-lg-6">
                                                                 <input type="date"  class="form-control" name="date_valid_reeva" value='<?php echo $one['date_valid_reeva']; ?>' required>
                                                                   
                                                                </div>
                                                    </div>
                                                </div>

                                                <div class="col-8">
                                                        <div class="form-group row">
                                                                <label class="col-2 col-sm-6 col-form-label text-sm-right">Observation</label>
                                                                <div class="col-10 col-sm-8 col-lg-6" >
                                                                    <textarea   class="form-control" rows="2" cols="40" name="observation_reeva" ><?php echo $one['observation_reeva']; ?></textarea>
                                                                </div>
                                                        </div>
                                                        
                                                </div>
                                        </div>
                                        <div class="row">       
                                        <div class="col-12" id="modifnonc">
                                                <div class="form-group row ">
                                                    <label class="col-2 col-form-label text-sm-left"><FONT size="2"color="#000000">Infraction </FONT></label>
                                                    <div class="col-10" >
                                                        <select id="mySelect1reev" multiple="multiple" style="width: 100%;" name="infraction[]">
                                                                <?php
                                                                $i=0;
                                                                $nbre=substr_count($one['infraction_reeva'], '|');
                                                                $linfraction=explode('|',$one['infraction_reeva']);
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
                                        
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row text-right">
                                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                    <button type="submit" class="btn btn-space btn-primary" name="modifier_reev">Modifier</button>
                                                    <button class="btn btn-space btn-secondary" data-dismiss="modal">Annuler</button>
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
$('#mySelect1reev').select2({
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