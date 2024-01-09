<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <!-- <div class="card-body"> -->
                            <form id="validationform" method="post" data-parsley-validate="" novalidate="">
                                <div class="card">
                                         <h5 class="card-header">Informtaion sur la Contestation TC: <?php echo $one['num_tc']?></h5>
                                    <div class="card-body">
                                        <div class="row">
                                                <div class="col-4">
                                                        <!-- <form id="validationform" data-parsley-validate="" novalidate=""> -->
                                                    <div class="form-group row">
                                                                <label class="col-6 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Date saisine</FONT></label>
                                                                <div class="col-6 ">
                                                                    <input type="hidden"  class="form-control" name="id_Tc" value='<?php echo $one['id_Tc']; ?>'>
                                                                    <input type="date"  class="form-control colorconsul" name="date_recep_courier" value='<?php echo $one['date_recep_courier']; ?>' disabled style="height: 30px;font-size:14px;" >
                                                                   
                                                                </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-8">
                                                        <div class="form-group row">
                                                                <label class="col-4 col-form-label text-sm-right"><FONT size="2.4"color="#000000">Reference courrier</FONT></label>
                                                                <div class="col-8">
                                                                    <input type="text"  class="form-control colorconsul" name="num_courier" value='<?php echo $one['num_courier']; ?>' disabled style="height: 30px;font-size:14px;">
                                                                </div>
                                                        </div>
                                                        
                                                </div>
                                        </div>
                                        <div class="row">

                                                <div class="col-12">
                                                        <div class="form-group row">
                                                                <label class="col-2 col-form-label text-sm-left"><FONT size="2.4"color="#000000">Agent reception</FONT></label>
                                                                <div class="col-10 " >
                                                                    <input type="text"  class="form-control colorconsul" name="agent_recption_courier" value='<?php echo $one['MATRICULE_AG'].'-'.$one['agent_recption_courier']; ?>' disabled style="height: 30px;font-size:14px;" required>
                                                                </div>
                                                        </div>
                                                        
                                                </div> 
                                               
                                        </div>   
                                    </div>
                                   
                                </div>
                                 
                            </form>
                        </div>