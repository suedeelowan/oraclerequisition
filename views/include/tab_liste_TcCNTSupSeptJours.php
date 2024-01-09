

<div class="modal fade" id="exampleModalTcCNTSupSeptJours" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color:#e2eae5;">
  
  <div class="modal-dialog" role="document">

    <div class="modal-content" style="width:1200px; margin-left:-300px; height:900px;">
      
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Liste des TC en contestation non transmises en PL de plus d'une semaine</h5>
        
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>

      </div>

      <div class="card-body" style="width:100%">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered second" style="width:100%" data-show-columns="true"   data-cookie-id-table="saveId"  cellspacing="0" data-toggle="table" data-pagination="true" data-search="true" data-show-pagination-switch="false" data-show-refresh="false" data-key-events="true" data-show-toggle="true" data-resizable="false" data-cookie="true"    data-show-export="false" data-click-to-select="false" data-toolbar="#toolbar">
                   <thead style="background-color:#99ca8c ;">
                        <tr>
                        <th style=" width:10px;"><FONT size="2" color="#000000">Tc id</FONT></th>
                            <th style=" width:10px;"><FONT size="2" color="#000000">Date de Tc</FONT></th>
                            <th style=" width:10px;"><FONT size="2" color="#000000">Date recep courier</FONT></th>
                            <th style=" width:10px;"><FONT size="2" color="#000000">CC</FONT></th>
                            <th style=" width:10px;"><FONT size="2" color="#000000">Nom Importateur</FONT></th>
                            <th style=" width:10px;"><FONT size="2" color="#000000">Code delarant</FONT></th>
                            <th style=" width:10px;"><FONT size="2" color="#000000">nom declarant</FONT></th>
                            <th style=" width:10px;"><FONT size="2" color="#000000">Nbre de jours</FONT></th>
                            
                        </tr> 
                    </thead>
                    <tbody>

                      <?php  $i=0; foreach ($allTroisJours as $index => $one): $i++; ?>  
                        
                        <tr>
                        <td style="height: 7px; width:10px;"><FONT size="1" color="#000000"><?php echo $one['num_tc']; ?></FONT></td>
                            <td style="height: 7px;"><FONT size="1" color="#000000"><?php echo $one['date_tc']; ?></FONT></td>
                            <td style="height: 7px;"><FONT size="1" color="#000000"><?php echo $one['agent_visit']; ?></FONT></td>
                            <td style="height: 7px;"><FONT size="1" color="#000000"><?php echo $one['date_recep_recours']; ?></FONT></td>
                            <td style="height: 7px;"><FONT size="1" color="#000000"><?php echo $one['code_imp']; ?> </FONT></td>
                            <td style="height: 7px;"><FONT size="1" color="#000000"><?php echo $one['nom_imp']; ?></FONT></td>
                            <td style="height: 7px;"><FONT size="1" color="#000000"><?php echo $one['code_declara']; ?></FONT></td>
                            <td style="height: 7px;"><FONT size="1" color="#000000"><?php echo $one['nom_declara']; ?></FONT></td>
                            <td style="height: 7px;"><FONT size="1" color="#000000"><?php echo $one['code_declara']; ?></FONT></td>
                        </tr>

                      <?php  endforeach; ?>
                    
                    </tbody>
                </table>
            </div>
      </div>

    </div>

  </div>

</div> 


