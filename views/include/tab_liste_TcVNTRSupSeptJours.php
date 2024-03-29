

<div class="modal fade" id="exampleModalTcVNTRSupSeptJours" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelTcRDVSVTroisJours" aria-hidden="true" style="background-color:#e2eae5;">
  
  <div class="modal-dialog" role="document">

    <div class="modal-content" style="width:1200px; margin-left:-300px; height:900px;">
      
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Liste des TC visitées non transmises en réévaluation de plus d'une semaine</h5>
        
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>

      </div>

      <div class="card-body" style="width:100%">
            <div class="table-responsive">
                <table id="exampleTcRDVSVTroisJours" class="table table-striped table-bordered second" style="width:100%" data-show-columns="true"   data-cookie-id-table="saveId"  cellspacing="0" data-toggle="table" data-pagination="true" data-search="true" data-show-pagination-switch="false" data-show-refresh="false" data-key-events="true" data-show-toggle="true" data-resizable="false" data-cookie="true"    data-show-export="false" data-click-to-select="false" data-toolbar="#toolbar">
                    <thead style="background-color:#99ca8c ;">
                        <tr>
                            <th style=" width:10px;"><FONT size="2" color="#000000">Tc id</FONT></th>
                            <th style=" width:10px;"><FONT size="2" color="#000000">Tc de Tc</FONT></th>
                            <th style=" width:10px;"><FONT size="2" color="#000000">Date de fin visite</FONT></th>
                            <th style=" width:10px;"><FONT size="2" color="#000000">Date de rapport de visite</FONT></th>
                            <th style=" width:10px;"><FONT size="2" color="#000000">Date cotation</FONT></th>
                            <th style=" width:10px;"><FONT size="2" color="#000000">CC</FONT></th>
                            <th style=" width:10px;"><FONT size="2" color="#000000">Nom Importateur</FONT></th>
                            <th style=" width:10px;"><FONT size="2" color="#000000">Code delarant</FONT></th>
                            <th style=" width:10px;"><FONT size="2" color="#000000">nom declarant</FONT></th>
                            <th style=" width:10px;"><FONT size="2" color="#000000">nbre de jours</FONT></th>
                            
                        </tr> 
                    </thead>
                    <tbody>

                      <?php  $i=0; foreach ($allTcVNTRTroisJours as $index => $one): $i++; ?>  
                        
                        <tr>
                        <td style="height: 7px; width:10px;"><FONT size="1" color="#000000"><?php echo $one['num_tc']; ?></FONT></td>
                            <td style="height: 7px;"><FONT size="1" color="#000000"><?php echo $one['date_tc']; ?></FONT></td>
                            <td style="height: 7px;"><FONT size="1" color="#000000"><?php echo $one['date_Fvisite']; ?></FONT></td>
                            <td style="height: 7px;"><FONT size="1" color="#000000"><?php echo $one['date_depot_visit']; ?></FONT></td>
                            <td style="height: 7px;"><FONT size="1" color="#000000"><?php echo $one['date_cotation']; ?></FONT></td>
                            <td style="height: 7px;"><FONT size="1" color="#000000"><?php echo $one['code_imp']; ?> </FONT></td>
                            <td style="height: 7px;"><FONT size="1" color="#000000"><?php echo $one['nom_imp']; ?></FONT></td>
                            <td style="height: 7px;"><FONT size="1" color="#000000"><?php echo $one['code_declara']; ?></FONT></td>
                            <td style="height: 7px;"><FONT size="1" color="#000000"><?php echo $one['nom_declara']; ?></FONT></td>
                            <td style="height: 7px;"><FONT size="1" color="#000000"><?php echo ageTC($one['date_Fvisite']); ?></FONT></td>
                        </tr>

                      <?php  endforeach; ?>
                    
                    </tbody>
                </table>
            </div>
      </div>

    </div>

  </div>

</div> 


