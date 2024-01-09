

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
  <div class="modal-dialog" role="document">

    <div class="modal-content" style="width:1200px; margin-left:-300px; height:900px;" >
      
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Liste de TC non apurées</h5>
        
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>

      </div>

      <div class="card-body" style="width:100%">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered second" style="width:100%" data-show-columns="true"   data-cookie-id-table="saveId"  cellspacing="0" data-toggle="table" data-pagination="true" data-search="true" data-show-pagination-switch="false" data-show-refresh="false" data-key-events="true" data-show-toggle="true" data-resizable="false" data-cookie="true"    data-show-export="false" data-click-to-select="false" data-toolbar="#toolbar">
                    <thead>
                        <tr>
                            <th style=" width:10px;"><FONT size="2" color="#000000">Tc id</FONT></th>
                            <th style=" width:10px;"><FONT size="2" color="#000000">Date de Tc</FONT></th>
                            <th style=" width:10px;"><FONT size="2" color="#000000">No déclaration</FONT></th>
                            <th style=" width:10px;"><FONT size="2" color="#000000">Date déclaration</FONT></th>
                            <th style=" width:10px;"><FONT size="2" color="#000000">CC</FONT></th>
                            <th style=" width:10px;"><FONT size="2" color="#000000">Nom Importateur</FONT></th>
                            <th style=" width:10px;"><FONT size="2" color="#000000">Code delarant</FONT></th>
                            <th style=" width:10px;"><FONT size="2" color="#000000">nom declarant</FONT></th>
                            <th style=" width:10px;"><FONT size="2" color="#000000">nbre de jours</FONT></th>
                            
                        </tr> 
                    </thead>
                    <tbody>

                      <?php  $i=0; foreach ($allTroisJours as $index => $one): $i++; ?>  
                        
                        <tr>
                            <td style="height: 7px; width:10px;"><FONT size="1" color="#000000"><?php echo $one['num_tc']; ?></FONT></td>
                            <td style="height: 7px;"><FONT size="1" color="#000000"><?php echo $one['date_tc']; ?></FONT></td>
                            <td style="height: 7px;"><FONT size="1" color="#000000"><?php echo $one['num_declaration']; ?></FONT></td>
                            <td style="height: 7px;"><FONT size="1" color="#000000"><?php echo $one['date_declara']; ?></FONT></td>
                            <td style="height: 7px;"><FONT size="1" color="#000000"><?php echo $one['code_imp']; ?> </FONT></td>
                            <td style="height: 7px;"><FONT size="1" color="#000000"><?php echo $one['nom_imp']; ?></FONT></td>
                            <td style="height: 7px;"><FONT size="1" color="#000000"><?php echo $one['code_declara']; ?></td>
                            <td style="height: 7px;"><FONT size="1" color="#000000"><?php echo $one['nom_declara']; ?></FONT></td>
                            <td style="height: 10px;"><FONT size="1" color="#000000"><?php echo ageTC($one['date_tc']); ?></FONT></td>
                        </tr>

                      <?php  endforeach; ?>
                    
                    </tbody>
                </table>
            </div>
      </div>

    </div>

  </div>

</div> 


