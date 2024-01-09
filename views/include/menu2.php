  <div class="nav-left-sidebar sidebar-dark">
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
                                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Transaction commerciale</a>
                                        <div id="submenu-2" class="collapse submenu" >
                                            <ul class="nav flex-column">
                                                <?php if($_SESSION['PROFIL']==1 || $_SESSION['PROFIL']==5  ){ ?> 
                                                <li class="nav-item">
                                                    <a class="nav-link" href="ajout_tc">Enregistrer Tc <span class="badge badge-secondary">New</span></a>
                                                </li>
                                                <?php } ?>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="liste_tc">Rechercher  Tc</a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Rapport sur la requisition</a>
                                        <div id="submenu-3" class="collapse submenu" >
                                            <ul class="nav flex-column">
                                            <?php if($_SESSION['PROFIL']==1 || $_SESSION['PROFIL']==5){ ?> 
                                                <li class="nav-item">
                                                    <a class="nav-link" href="liste_tc_date">Etat complet des requisitions</a>
                                                </li>
                                            <?php } ?>
                                            <?php if($_SESSION['PROFIL']==2 || $_SESSION['PROFIL']==5){ ?> 
                                                <li class="nav-item">
                                                    <a class="nav-link" href="liste_tc_ev"> Réevaluation Enregistrés</a>
                                                </li>
                                            <?php } ?>
                                                <?php if($_SESSION['PROFIL']==3 || $_SESSION['PROFIL']==5){ ?> 
                                                <li class="nav-item">
                                                    <a class="nav-link" href="liste_sv"> Contestation Enregistrés</a>
                                                </li>  
                                            <?php } ?>      
                                            </ul>
                                        </div>
                                    </li>        
                      </ul>
                    </div>
                </nav>
            </div>
    </div>
   