<?php

class Req_Contest_insert
{
    public $ID;
    public $id_Tc;
    public $num_tc;
    public $date_tc;
    public $num_declaration;
    public $code_declara;
    public $nom_declara;
    public $code_imp;
    public $nom_imp;
    public $date_visite;
    public $agent_visit;
    public $conformite;
    public $date_depot_visit;
    public $onglet;
    public $moyen_tranp;
    public $marchandise;
    public $date_declara;
    public $lieu_visite;
    public $type_visite;
    public $vav;
    public $date_cotation;
    public $date_envoi_reev;
    public $date_reev;
    public $Fob_reeva;
    public $date_recep_courier;
    public $date_traite_contest;
    public $fob_apres_contest;
    public $decision;
    public $Motif_contest;
    public $date_envoi_pl_contes;
    public $agent_contest;
    public $date_envoi_pl_reev;
    public $date_envoi_cbar;
    public $agent_reeva;
    public $date_requi;
    public $nom_off_visiteur;
    public $date_Dvisite;
    public $nom_op_visite;
    public $date_Fvisite;
    
    

    function __construct($id) {

            global $db;

            $id = str_secur($id);

            $reqSelreq_reev_contest = $db->fetch('SELECT * FROM req_reev_contest WHERE ID = ?', [$id], false);
            $datareq_reev_contest = $reqSelreq_reev_contest;

            $this->ID = $id;
            $this->id_Tc= $id['id_Tc'];
            $this->num_tc= $datareq_reev_contest['num_tc'];
            $this->date_tc= $datareq_reev_contest['date_tc'];
            $this->num_declaration= $datareq_reev_contest['num_declaration'];
            $this->code_declara= $datareq_reev_contest['code_declara'];
            $this->nom_declara= $datareq_reev_contest['nom_declara'];
            $this->code_imp= $datareq_reev_contest['code_imp'];
            $this->nom_imp= $datareq_reev_contest['nom_imp'];
            $this->date_visite= $datareq_reev_contest['date_visite'];
            $this->agent_visit= $datareq_reev_contest['agent_visit'];
            $this->conformite= $datareq_reev_contest['conformite'];
            $this->date_depot_visit= $datareq_reev_contest['date_depot_visit'];
            $this->onglet= $datareq_reev_contest['onglet'];
            $this->moyen_tranp= $datareq_reev_contest['moyen_tranp'];
            $this->marchandise= $datareq_reev_contest['marchandise'];
            $this->date_declara= $datareq_reev_contest['date_declara'];
            $this->lieu_visite= $datareq_reev_contest['lieu_visite'];
            $this->type_visite= $datareq_reev_contest['type_visite'];
            $this->vav= $datareq_reev_contest['vav'];
            $this->date_cotation= $datareq_reev_contest['Date_cotation'];
            $this->date_envoi_reev= $datareq_reev_contest['date_envoi_reev'];
            $this->date_reev= $datareq_reev_contest['date_reev'];
            $this->fob_reeva= $datareq_reev_contest['fob_reeva'];
            $this->date_recep_courier= $datareq_reev_contest['date_recep_courier'];
            $this->date_traite_contest= $datareq_reev_contest['date_traite_contest'];
            $this->fob_apres_contest= $datareq_reev_contest['fob_apres_contest'];
            $this->decision= $datareq_reev_contest['decision'];
            $this->Motif_contest= $datareq_reev_contest['Motif_contest'];
            $this->date_envoi_pl_contes= $datareq_reev_contest['date_envoi_pl_contes'];
            $this->agent_contest= $datareq_reev_contest['agent_contest'];
            $this->date_envoi_pl_reev= $datareq_reev_contest['date_envoi_pl_reev'];
            $this->date_envoi_cbar= $datareq_reev_contest['date_envoi_cbar'];
            $this->agent_reeva= $datareq_reev_contest['agent_reeva'];
            $this->date_requi= $datareq_reev_contest['	date_requi'];	
            $this->nom_off_visiteur= $datareq_reev_contest['nom_off_visiteur'];
            $this->date_Dvisite= $datareq_reev_contest['date_Dvisite'];
            $this->nom_op_visite= $datareq_reev_contest['nom_op_visite'];
            $this->date_Fvisite= $datareq_reev_contest['date_Fvisite'];
           
    }

          // enregistrement d'une declaration.
          static function insert_tc($num_tc,$date_tc, $num_declaration, $code_declara, $nom_declara, $code_imp,$nom_imp,$date_visite,
          $agent_visit,$conformite,$date_depot_visit, $onglet, $moyen_tranp, $marchandise, $date_declara, $lieu_visite, $type_visite, $vav,
          $Date_cotation,$date_requi,$date_Fvisite,$nom_op_visite,$date_Dvisite,$nom_off_visiteur )

          {
            global $db;    
            $num_tc             = str_secur($num_tc);
            $date_tc            = str_secur($date_tc);
            $code_declara       = str_secur($code_declara);
            $nom_declara        = str_secur($nom_declara).str_secur($code_declara);
            $moyen_tranp        = str_secur($moyen_tranp);
            $marchandise        = str_secur($marchandise);
            $code_imp           = str_secur($code_imp);
            $nom_imp            = str_secur($nom_imp);
            $num_declaration    = str_secur($num_declaration);
            $date_declara       = str_secur($date_declara);
            $date_depot_visit   = str_secur($date_depot_visit);
             $date_visite       = str_secur($date_visite);
            $lieu_visite        = str_secur($lieu_visite);
            $type_visite        = str_secur($type_visite);
            $agent_visit        = str_secur($agent_visit);
            $Date_cotation      = str_secur($Date_cotation);
            $conformite         = str_secur($conformite);
            $vav                = str_secur($vav);
            $date_requi         = str_secur($date_requi);
            $onglet             = 1;
            $nom_off_visiteur   = str_secur($nom_off_visiteur);
            $date_Dvisite       = str_secur($date_Dvisite);
            $nom_op_visite      = str_secur($nom_op_visite);
            $date_Fvisite       = str_secur($date_Fvisite);
            $req_add_tcreq = $db->fetch('insert into req_reev_contest (num_tc, date_tc, num_declaration, code_declara, nom_declara, code_imp,
            nom_imp, date_visite, agent_visit, conformite, date_depot_visit, onglet, moyen_tranp, marchandise, date_declara,
            lieu_visite, type_visite, vav, date_cotation, date_requi, date_Fvisite, nom_op_visite, date_Dvisite, nom_off_visiteur)values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ',  
            [ $num_tc, $date_tc, $num_declaration, $code_declara, $nom_declara, $code_imp, $nom_imp,$date_visite,
            $agent_visit, $conformite, $date_depot_visit, $onglet, $moyen_tranp, $marchandise, $date_declara, $lieu_visite, $type_visite, $vav,
            $Date_cotation, $date_requi, $date_Fvisite, $nom_op_visite, $date_Dvisite, $nom_off_visiteur], false);

            return $req_add_tcreq;

          }


         static function getNumTc() {

            global $db;
    
             $reqDeclara = $db->fetch('
              SELECT *
              FROM req_reev_contest WHERE num_tc=?
              ', [10101289], true);
          return $reqDeclara;
    
    }

 
             static function getAllTc() {

              global $db;

               $reqTc = $db->fetch('
                SELECT *
                FROM req_reev_contest 
                ', [], true);
            return $reqTc;

    }

    static function getAllrecherche($attribut) {
      
         //echo $donnees; exit();
        global $db1;
        $querysql = "select * from  req_reev_contest WHERE  $attribut ";
        //echo $querysql;
        //exit();
        // Prepare and execute query
        $query = $db1->prepare($querysql);
        $query->execute();
        // Fetching direct query result
        $reqTc = $query->fetchAll();
        
        return $reqTc;

}
    



    static function getUniTc($id_Tc) {

        global $db;

         $reqDetc= $db->fetch('SELECT * FROM req_reev_contest WHERE id_Tc = ?', [$id_Tc], true);
      return $reqDetc;

}

    
    static function addNewReevalu($id_Tc,$date_envoi_reev,$date_reev,$fob_reeva,$onglet,$date_envoi_pl_reev,$date_envoi_cbar,$agent_reeva)
   {

        global $db;
        $id_Tc              = str_secur($id_Tc);
        $date_envoi_reev    = str_secur($date_envoi_reev);
        $date_reev          = str_secur($date_reev);
        $fob_reeva          = str_secur($fob_reeva);
        $onglet             = str_secur($onglet);
        $date_envoi_pl_reev = str_secur($date_envoi_pl_reev);
        $date_envoi_cbar    = str_secur($date_envoi_cbar);
        $agent_reeva        = str_secur($agent_reeva);

        $req_add_reevalu= $db->fetch('UPDATE req_reev_contest SET date_envoi_reev= ?, date_reev = ?, fob_reeva = ?, onglet = ?, date_envoi_pl_reev = ?,
         date_envoi_cbar = ?, agent_reeva = ? WHERE id_Tc = ?', [$date_envoi_reev, $date_reev, $fob_reeva, 2, $date_envoi_pl_reev, $date_envoi_cbar, $agent_reeva, $id_Tc], true);
        return $req_add_reevalu;

    } 


    static function addNewContest($id_Tc, $date_recep_courier, $date_traite_contest, $fob_apres_contest, $decision, $Motif_contest, $onglet, $date_envoi_pl_contes, $agent_contest)
    {
    
            global $db;
            $id_Tc = str_secur($id_Tc);
            $date_recep_courier  = str_secur($date_recep_courier);
            $date_traite_contest  = str_secur($date_traite_contest);
            $fob_apres_contest = str_secur($fob_apres_contest);
            $decision  = str_secur($decision);
            $Motif_contest = str_secur($Motif_contest);
            $onglet = str_secur($onglet);
            $date_envoi_pl_contes = str_secur($date_envoi_pl_contes);
            $agent_contest = str_secur($agent_contest);
    
            $req_add_reevalu= $db->fetch('UPDATE req_reev_contest SET date_recep_courier = ?, date_traite_contest = ?, fob_apres_contest = ?,
             decision = ?, Motif_contest = ?, onglet = ?, date_envoi_pl_contes = ?, agent_contest = ?
              WHERE id_Tc = ?', [$date_recep_courier, $date_traite_contest, $fob_apres_contest,$decision, $Motif_contest,3,$date_envoi_pl_contes,$agent_contest, $id_Tc], true);
            return $req_add_reevalu;
    
    } 
        static function getnumerotc($id_Tc) 
    {

        global $db;

         $reqDetc= $db->fetch('SELECT * FROM req_reev_contest_insert WHERE num_tc = ?', [$id_Tc], true);
        return $reqDetc;
    }

    static function count($id_Tc) 
    {

        global $db;

         $reqDetc= $db->fetch('SELECT count(num_tc) FROM req_reev_contest_insert WHERE num_tc = ?', [$id_Tc], true);
        return $reqDetc;
    }


        
   

}
?>