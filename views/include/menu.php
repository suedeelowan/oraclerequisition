<?php 
if($_SESSION['PROFIL_USER']==7  ){   
    ?>

        <div class="nav-left-sidebar sidebar-dark" style="background-color:#e2eae5;margin-left:0px;">
                <div class="menu-list">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav flex-column">
                                        <li class="nav-divider">
                                            Menu
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard#"><i class="fa fa-fw fa-chart-pie"></i><FONT size="2" color="#000000">Tableau de bord </FONT>  </a>
                                            
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="rap_inspection" ><i class="fa fa-fw fa-edit"></i><FONT size="2" color="#000000">Créer fiche description</FONT></a>
                                           
                                        </li>
                                        
                                        <li class="nav-item">
                                                    <a class="nav-link" href="liste_inspection_cotation"><i class="fas fa-fw fa-list"></i><FONT size="2" color="#000000"> Inspections en cours </FONT></a>
                                        </li>

                                        <li class="nav-item">
                                                    <a class="nav-link" href="liste_inspection_retour"><i class="fas fa-fw fa-folder"></i><FONT size="2" color="#000000"> Dossiers retournés<span class="btn btn-danger"style="margin:1px 2px 2px 2px; padding:1px 2px 2px 2px; border-radius:8px;" title="Dossiers retournés par le chef"><?php echo dossier_retour_agt(); ?></span></FONT></a>
                                        </li>
                                       
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="liste_inspection"><i class="fas fa-fw fa-bell"></i><FONT size="2" color="#000000">Mes inspections</FONT>  <span class="badge badge-success"> 00 </span> </a>
                                            
                                        </li>      
                                        
                        </ul>
                        </div>
                    </nav>
                </div>
        </div>
   


<?php }
  elseif($_SESSION['PROFIL_USER']==8  ){ ?>

        <div class="nav-left-sidebar sidebar-dark" style="background-color:#e2eae5;margin-left:0px;">
                <div class="menu-list">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav flex-column">
                                        <li class="nav-divider">
                                            Menu
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard"><i class="fa fa-fw fa-chart-pie"></i><FONT size="2" color="#000000">Tableau de bord </FONT>  </a>
                                            
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="rap_reeval"><i class="fa fa-fw fa-list"></i><FONT size="2" color="#000000">Réavaluer</FONT></a>
                                           
                                        </li>
                                       
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="liste_reevaluation"><i class="fas fa-fw fa-bell"></i><FONT size="2" color="#000000">Mes réevaluations</FONT>  <span class="badge badge-success"> 00 </span> </a>
                                            
                                        </li>      
                                        
                        </ul>
                        </div>
                    </nav>
                </div>
        </div>

 <?php } 
  elseif($_SESSION['PROFIL_USER']==9  ) { ?>
 
        <div class="nav-left-sidebar sidebar-dark" style="background-color:#e2eae5;margin-left:0px;">
                <div class="menu-list">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav flex-column">
                                        <li class="nav-divider">
                                            Menu
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard"><i class="fa fa-fw fa-chart-pie"></i><FONT size="2" color="#000000">Tableau de bord </FONT>  </a>
                                            
                                        </li>
                                       
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="liste_audit"><i class="fas fa-fw fa-bell"></i><FONT size="2" color="#000000">Mes audits</FONT>  <span class="badge badge-success"> 00 </span> </a>
                                            
                                        </li>      
                                        
                        </ul>
                        </div>
                    </nav>
                </div>
        </div>
 
 
<?php } 


elseif($_SESSION['PROFIL_USER']==10  ) { ?>

        <div class="nav-left-sidebar sidebar-dark" style="background-color:#e2eae5;margin-left:0px;">
              <div class="menu-list">
                  <nav class="navbar navbar-expand-lg navbar-light">
                      <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="navbar-nav flex-column">
                                      <li class="nav-divider">
                                          Menu
                                      </li>
                                      <!-- <li class="nav-item">
                                          <a class="nav-link" href="dashboard"><i class="fa fa-fw fa-chart-pie"></i><FONT size="2" color="#000000">Tableau de bord </FONT>  </a>
                                          
                                      </li>
                                      -->
                                      <li class="nav-item">
                                          <a class="nav-link" href="liste_tc"><i class="fa fa-fw fa-list"></i><FONT size="2" color="#000000">TC Requisitions</FONT></a>
                                         
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link" href="liste_conforme"><i class="fas fa-fw fa-bell"></i><FONT size="2" color="#000000">TC conformes</FONT>  <span class="badge badge-success"> 00 </span> </a>
                                          
                                      </li>      
                                      
                      </ul>
                      </div>
                  </nav>
              </div>
        </div>

<?php }
 elseif($_SESSION['PROFIL_USER']==9  ) { ?>

    <div class="nav-left-sidebar sidebar-dark" style="background-color:#e2eae5;margin-left:0px;">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                                    <li class="nav-divider">
                                        Menu 
                                    </li>
                                   
                                    
                                                <li class="nav-item">
                                                    <a class="nav-link" href="liste_tc"><i class="fas fa-fw fa-search"></i><FONT size="2" color="#000000"> Rechercher  Tc</FONT></a>
                                                </li>
                                   
                                    <li class="nav-item">
                                        <a class="nav-link" href="liste_inspection"><i class="fas fa-fw fa-bell"></i><FONT size="2" color="#000000">Liste inspection</FONT></a>
                                        
                                    </li>      
                                    <li class="nav-item">
                                        <a class="nav-link" href="liste_reevaluation"><i class="fas fa-fw fa-bell"></i><FONT size="2" color="#000000">Liste reevaluation </FONT></a>
                                        
                                    </li> 
                                    <li class="nav-item">
                                        <a class="nav-link" href="liste_audit"><i class="fas fa-fw fa-bell"></i><FONT size="2" color="#000000">Liste Audit reevaluation  </FONT></a>
                                        
                                    </li> 
                                      
                                    <li class="nav-item">
                                        <a class="nav-link" href="statistique"><i class="fas fa-fw fa-bell"></i><FONT size="2" color="#000000">Alerte Délai</FONT></a>
                                        
                                    </li>  
                      </ul>
                    </div>
                </nav>
            </div>
    </div>

 <?php }
else { ?>
  
  
  
    <div class="nav-left-sidebar sidebar-dark" style="background-color:#e2eae5;margin-left:0px;">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                                    <li class="nav-divider">
                                        Menu 
                                    </li>
                                    <?php if($_SESSION['PROFIL_USER']==5 ) {   ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-list"></i><FONT size="2" color="#000000">Description & Réeval</FONT></a>
                                        <div id="submenu-1" class="collapse submenu" >
                                            <ul class="nav flex-column">
                                                <?php if($_SESSION['PROFIL']==1 || $_SESSION['PROFIL']==5  ){  } ?> 
                                                <li class="nav-item">
                                                    <a class="nav-link" href="rap_inspection">Fiche description<span class="badge badge-secondary">New</span></a>
                                                </li>
                                                <?php ?>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="rap_reeval">Fiche réeval</a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </li>
                                    <?php } ?>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-search"></i><FONT size="2" color="#000000">Transaction commerciale</FONT></a>
                                        <div id="submenu-2" class="collapse submenu" >
                                            <ul class="nav flex-column"></ul>
                                        </div>
                                    </li> -->
                                                <?php if($_SESSION['PROFIL']==1 || $_SESSION['PROFIL']==5  ){ ?> 
                                                <!-- <li class="nav-item">
                                                    <a class="nav-link" href="ajout_tc">Enregistrer Tc <span class="badge badge-secondary">New</span></a>
                                                </li> -->

                                                <?php } ?>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="liste_tc"><i class="fas fa-fw fa-search"></i><FONT size="2" color="#000000"> Rechercher  Tc</FONT></a>
                                                </li>
                                                
                                            
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i><FONT size="2" color="#000000">Rapport sur la requisition</FONT></a>
                                        <div id="submenu-3" class="collapse submenu" >
                                            <ul class="nav flex-column">
                                            <?php if($_SESSION['PROFIL']==1 || $_SESSION['PROFIL']==5){ ?> 
                                                <li class="nav-item">
                                                    <a class="nav-link" href="liste_tc_date">Etat complet des requisitions</a>
                                                </li>
                                                
                                            <?php } ?>
                                            <?php if($_SESSION['PROFIL']==2 || $_SESSION['PROFIL']==5){ ?> 
                                                <li class="nav-item">
                                                    <a class="nav-link" href="liste_tc_ev">Réevaluation Enregistrés</a>
                                                </li>
                                            <?php } ?>
                                                <?php if($_SESSION['PROFIL']==3 || $_SESSION['PROFIL']==5){ ?> 
                                                <li class="nav-item">
                                                    <a class="nav-link" href="liste_sv">Contestation Enregistrés</a>
                                                </li>  
                                            <?php } ?>      
                                            </ul>
                                        </div>
                                    </li>       -->
                                   
                                    <?php if($_SESSION['PROFIL']==1 || $_SESSION['PROFIL_USER']==1 || $_SESSION['PROFIL_USER']==5 ){ ?> 

                                    <li class="nav-item">
                                                <a class="nav-link" href="liste_inspection_retour"><i class="fas fa-fw fa-folder"></i><FONT size="2" color="#000000"> Dossiers retournés<span class="btn btn-danger"style="margin:1px 2px 2px 2px; padding:1px 2px 2px 2px; border-radius:8px;" title="Dossiers retournés par le chef"><?php echo nbr_dossier_retour(); ?></span></FONT></a>
                                    </li>
                                    <li class="nav-item">
                                                    <a class="nav-link" href="liste_inspection_cotation"><i class="fas fa-fw fa-list"></i><FONT size="2" color="#000000"> Inspection en cours</FONT></a>
                                    </li>
                                    <li class="nav-item">
                                                    <a class="nav-link" href="liste_inspection"><i class="fas fa-fw fa-list"></i><FONT size="2" color="#000000">Inspection effectuée</FONT></a>
                                    </li>
                                    <?php } ?>
                                    <?php if($_SESSION['PROFIL_USER']==5 || $_SESSION['PROFIL']==2  ){   ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="liste_inspection"><i class="fas fa-fw fa-bell"></i><FONT size="2" color="#000000">Liste inspection</FONT></a>
                                        
                                    </li>      
                                    <li class="nav-item">
                                        <a class="nav-link" href="liste_reevaluation"><i class="fas fa-fw fa-bell"></i><FONT size="2" color="#000000">Liste reevaluation </FONT></a>
                                        
                                    </li> 
                                    <li class="nav-item">
                                        <a class="nav-link" href="liste_audit"><i class="fas fa-fw fa-bell"></i><FONT size="2" color="#000000">Liste Audit reevaluation  </FONT></a>
                                        
                                    </li> 
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="liste_pl"><i class="fas fa-fw fa-bell"></i><FONT size="2" color="#000000">Validation Réeavaluation  <span class="btn btn-danger"style="margin:1px 2px 2px 2px; padding:1px 2px 2px 2px; border-radius:8px;" title="Dossiers retournés par le chef"><?php echo dossier_pour_pl(); ?></span></FONT></a>
                                        
                                    </li> 
                                    
                                    <?php }   ?>    
                                    <li class="nav-item">
                                        <a class="nav-link" href="statistique"><i class="fas fa-fw fa-bell"></i><FONT size="2" color="#000000">Alerte Délai</FONT></a>
                                        
                                    </li>  
                      </ul>
                    </div>
                </nav>
            </div>
    </div>
   
<?php } ?>