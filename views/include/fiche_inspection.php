 
 <?php 

foreach(afficheDonne($one['id_Tc']) as $index => $uni):
   
?>

    <div class="modal fade" id="<?php echo $one['id_Tc']; ?>fiche" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color:#cfeeda ;">
        <div class="modal-dialog"  role="document22">
            <div class="modal-content" style="width:1200px; margin-left:-315px; height:1480px;">
                <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </a>
                </div>
                <div class="modal-body" style="background-color:#cfeeda ; margin-left: -31px; margin-top:-15px;" >     
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">        

                        <div class="simple-card." style="width:1200px; height:1480px; margin-left:0px;">
                            
                                <!-- <ul class="nav nav-tabs" id="myTab5" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($_SESSION['PROFIL']==1 ) { echo "active";} ?>  border-left-0" id="<?php echo $one['id_Tc']; ?>modmod1home-tab-simple" data-toggle="tab" href="#<?php echo $one['id_Tc']; ?>modmod1home-simple" role="tab" aria-controls="<?php echo $one['id_Tc']; ?>modmod1home" aria-selected="false">Inspection--</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($_SESSION['PROFIL']==2 ) { echo "active";} ?>" id="<?php echo $one['id_Tc']; ?>modmod1profile-tab-simple" data-toggle="tab" href="#<?php echo $one['id_Tc']; ?>modmod1profile-simple" role="tab" aria-controls="<?php echo $one['id_Tc']; ?>modmod1profile" aria-selected="true">Réévaluation </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($_SESSION['PROFIL']==3 ) { echo "active";} ?>" id="<?php echo $one['id_Tc']; ?>modmod1argu-tab-simple" data-toggle="tab" href="#<?php echo $one['id_Tc']; ?>modmod1argu-simple" role="tab" aria-controls="<?php echo $one['id_Tc']; ?>modmod1argu" aria-selected="false">Courrier</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link <?php if($_SESSION['PROFIL']==4  ) { echo "active";} ?>" id="<?php echo $one['id_Tc']; ?>modmod1contest-tab-simple" data-toggle="tab" href="#<?php echo $one['id_Tc']; ?>modmod1contest-simple" role="tab" aria-controls="<?php echo $one['id_Tc']; ?>modmod1contest" aria-selected="false">Contestation</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link <?php if($_SESSION['PROFIL']==6  ) { echo "active";} ?>" id="<?php echo $one['id_Tc']; ?>modmod1retour-tab-simple" data-toggle="tab" href="#<?php echo $one['id_Tc']; ?>modmod1retour-simple" role="tab" aria-controls="<?php echo $one['id_Tc']; ?>modmod1retour" aria-selected="false">Retour PL</a>
                                    </li>

                                </ul> -->
                                <div class="tab-content" id="myTabContent5">
                                        <div class="tab-pane fade <?php if($_SESSION['PROFIL']==1 || $_SESSION['PROFIL_USER']==10 || $_SESSION['PROFIL_USER']==5 ) { echo  "show active";} ?>  " id="<?php echo $one['id_Tc']; ?>modmodRDV1home-simple" role="tabpanel" aria-labelledby="<?php echo $one['id_Tc']; ?>modmodRDV1home-tab-simple">
                                            <?php 
                                              if( $one['onglet']==9 ) {include('fiche_info.php');}
                                              if( $one['onglet']==2 ) {include('fiche_info_sd.php');}
                                                
                                            ?>  

                                    
                                        </div>

                                        
                                        
                                       
                                </div>
                        </div>

                        
                    </div>
                </div>
                    
            </div>
                                                    
        </div>
        
    </div>
    
<?php  endforeach; ?>  

<script>
            // Swal.fire({
            // title: 'Submit your Github username@@',
            // input: 'text',
            // inputAttributes: {
            //     autocapitalize: 'off'
            // },
            // showCancelButton: true,
            // confirmButtonText: 'Look up',
            // showLoaderOnConfirm: true,
            // preConfirm: (login) => {
            //     return fetch(`//api.github.com/users/${login}`)
            //     .then(response => {
            //         if (!response.ok) {
            //         throw new Error(response.statusText)
            //         }
            //         return response.json()
            //     })
            //     .catch(error => {
            //         Swal.showValidationMessage(
            //         `Request failed: ${error}`
            //         )
            //     })
            // },
            // allowOutsideClick: () => !Swal.isLoading()
            // }).then((result) => {
            // if (result.isConfirmed) {
            //     Swal.fire({
            //     title: `${result.value.login}'s avatar`,
            //     imageUrl: result.value.avatar_url
            //     })
            // }
            // })
        </script>
<script src="assets/sweet/sweetalert2.all.min.js"></script>
<script src="assets/sweet/sweetalert2.min.js"></script>
