<?php

class Req_Contest
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
    public $fob_reeva;
    public $date_recep_courier;
    public $num_courier;
    public $agent_recption_courier;
    public $date_traite_contest;
    public $fob_apres_contest;
    public $decision;
    public $Motif_contest;
    public $date_envoi_pl_contes;
    public $adresse_mail;                          
    public $agent_contest;
    public $date_envoi_pl_reev;
    public $date_envoi_cbar;
    public $agent_reeva;
    public $date_requi;
    public $nom_off_visiteur;
    public $date_Dvisite;
    public $nom_op_visite;
    public $date_Fvisite;
    public $date_recep_recours;
    public $infraction;
    public $date_validation;
    public $nom_agent_PL;
    public $infraction_reeva;
    public $observation_reeva;
    public $date_valid_reeva;
    public $date_valid_contest;
    public $Observation_contest;
    public $date_dpod;
    public $date_dc;
    public $montant_dc;
    public $infraction_retour;
    public $instruction_chef;

    
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
            $this->num_courier= $datareq_reev_contest['num_courier'];
            $this->agent_recption_courier= $datareq_reev_contest['agent_recption_courier'];
            $this->fob_apres_contest= $datareq_reev_contest['fob_apres_contest'];
            $this->decision= $datareq_reev_contest['decision'];
            $this->Motif_contest= $datareq_reev_contest['Motif_contest'];
            $this->date_envoi_pl_contes= $datareq_reev_contest['date_envoi_pl_contes'];
            $this->agent_contest= $datareq_reev_contest['agent_contest']; 
            $this->adresse_mail= $datareq_reev_contest['adresse_mail'];
            $this->date_envoi_pl_reev= $datareq_reev_contest['date_envoi_pl_reev'];
            $this->date_envoi_cbar= $datareq_reev_contest['date_envoi_cbar'];
            $this->agent_reeva= $datareq_reev_contest['agent_reeva'];
            $this->date_requi= $datareq_reev_contest['	date_requi'];	
            $this->nom_off_visiteur= $datareq_reev_contest['nom_off_visiteur'];
            $this->date_Dvisite= $datareq_reev_contest['date_Dvisite'];
            $this->nom_op_visite= $datareq_reev_contest['nom_op_visite'];
            $this->date_Fvisite= $datareq_reev_contest['date_Fvisite'];
            $this->date_recep_recours= $datareq_reev_contest['date_recep_recours'];
            $this->infraction= $datareq_reev_contest['infraction'];
            $this->date_validation= $datareq_reev_contest['date_validation'];
            $this->nom_agent_PL= $datareq_reev_contest['nom_agent_PL'];
            $this->infraction_reeva= $datareq_reev_contest['infraction_reeva'];
            $this->observation_reeva= $datareq_reev_contest['observation_reeva'];
            $this->date_valid_reeva= $datareq_reev_contest['date_valid_reeva'];
            $this->date_valid_contest= $datareq_reev_contest['date_valid_contest'];
            $this->date_valid_reeva= $datareq_reev_contest['date_valid_reeva'];
            $this->date_dpod= $datareq_reev_contest['date_dpod'];
            $this->date_dc= $datareq_reev_contest['date_dc'];
            $this->montant_dc= $datareq_reev_contest['montant_dc'];
            $this->infraction_retour= $datareq_reev_contest['infraction_retour'];
            $this->instruction_chef= $datareq_reev_contest['INSTRUCTION_CHEF'];

            
             
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

          
    static function addNewInspection($num_tc,$conformite, $date_depot_visit,$dateEnvReev, $onglet,$vav,$nom_op_visite, $nom_off_visiteur,$infraction,$marchandise_add)
    {
        //  global $db;
        //  echo 'UPDATE req_reev_contest SET conformite = '.$conformite.', date_depot_visit = '.$date_depot_visit.', date_envoi_reev='.$dateEnvReev.', onglet = '.$onglet.', vav = '.$vav.', nom_op_visite = '.$nom_op_visite.', nom_off_visiteur = '.$nom_off_visiteur.', infraction = '.$infraction.', marchandise_add= '.$marchandise_add.' WHERE num_tc = '.$num_tc.'';
        //  //exit();
        //  $req_add_inspect= $db->fetch("UPDATE req_reev_contest SET conformite = '?', date_depot_visit = '?', date_envoi_reev=?, onglet = '?', vav = '?', nom_op_visite = '?', nom_off_visiteur = '?', infraction = '?', marchandise_add= '?' WHERE num_tc = ?",
        //   [$conformite, $date_depot_visit,$dateEnvReev, $onglet,$vav,$nom_op_visite, $nom_off_visiteur,$infraction,$marchandise_add,$num_tc], false);
        //  return $req_add_inspect;

         global $db1;
         $attribut="UPDATE req_reev_contest SET conformite = '".$conformite."', date_depot_visit = '".$date_depot_visit."', date_envoi_reev='".$dateEnvReev."', onglet ='".$onglet."', vav ='".$vav."', nom_op_visite ='".$nom_op_visite."', nom_off_visiteur ='".$nom_off_visiteur."', infraction ='".$infraction."', marchandise_add='".$marchandise_add."' WHERE num_tc ='".$num_tc."' ";
        // $querysql = "select * from  req_reev_contest WHERE  $attribut ";
        $querysql =  $attribut ;
       // echo $querysql;
       
        // Prepare and execute query
        $query = $db1->prepare($querysql);
        $query->execute();
        
        // Fetching direct query result
        //$reqTc = $query->fetchAll();
        
        return $query;
    } 

     static function addNewInspectionRDV($num_tc,$date_tc,$date_requi,$num_declaration, $code_declara, $code_imp,$date_visite,
     $agent_visit,$marchandise, $onglet, $lieu_visite, $type_visite,$Date_cotation, $date_Fvisite, $nom_agent_PL, $date_Dvisite,$instruction)
     {
  
          global $db;
                 
  
          $req_add_inspect= $db->fetch('UPDATE req_reev_contest SET date_tc=?, SDGR_Date=?,num_declaration= ?, code_declara = ?, code_imp = ?, date_visite = ?, 
          agent_visit = ?,marchandise=?, onglet = ?,lieu_visite = ?,type_visite = ?,
          Date_cotation = ?,date_Fvisite = ?,nom_agent_PL = ?,date_Dvisite = ?, INSTRUCTION_CHEF=? WHERE num_tc = ?', [$date_tc,$date_requi,$num_declaration, $code_declara, $code_imp,$date_visite,
          $agent_visit,$marchandise, $onglet, $lieu_visite, $type_visite,$Date_cotation, $date_Fvisite, $nom_agent_PL, $date_Dvisite,$instruction, $num_tc], true);
          return $req_add_inspect;
  
      } 

      static function addNewInspectionRDV_Modif($num_tc,$date_tc,$date_requi,$num_declaration, $code_declara, $code_imp,$date_visite,$agent_visit,$marchandise, $lieu_visite, $type_visite,$Date_cotation, $date_Fvisite, $nom_agent_PL, $date_Dvisite,$instruction)
      {
   
           global $db;
          
           $req_add_inspect= $db->fetch('UPDATE req_reev_contest SET date_tc=?, SDGR_Date=?,num_declaration= ?, code_declara = ?, code_imp = ?, date_visite = ?,agent_visit = ?,marchandise=?,lieu_visite = ?,type_visite = ?, Date_cotation = ?,date_Fvisite = ?,nom_agent_PL = ?,date_Dvisite = ?, INSTRUCTION_CHEF=? WHERE num_tc = ?', [$date_tc,$date_requi,$num_declaration, $code_declara, $code_imp,$date_visite,$agent_visit,$marchandise, $lieu_visite, $type_visite,$Date_cotation, $date_Fvisite, $nom_agent_PL, $date_Dvisite,$instruction, $num_tc], true);
           return $req_add_inspect;
   
       } 

     static function addNewInspectionmodif($num_tc,$date_tc,$date_requi,$num_declaration, $code_declara, $code_imp,$date_visite,
    $agent_visit, $conformite, $date_depot_visit,$dateEnvReev,$marchandise, $date_declara, $lieu_visite, $type_visite , $nom_off_visiteur, $vav,
    $Date_cotation, $date_Fvisite, $nom_op_visite, $date_Dvisite,$infraction,$marchandise_add)
    {
 
         global $db;
        
         
         $req_add_inspect= $db->fetch('UPDATE req_reev_contest SET date_tc=?, SDGR_Date=?,num_declaration= ?, code_declara = ?, code_imp = ?, date_visite = ?, 
         agent_visit = ?, conformite = ?, date_depot_visit = ?, date_envoi_reev = ?,marchandise=?, date_declara = ?, lieu_visite = ?, type_visite = ?, nom_off_visiteur = ?, vav = ?,
         Date_cotation = ?, date_Fvisite = ?, nom_op_visite = ?, date_Dvisite = ?, infraction=?, marchandise_add=? WHERE num_tc = ?', [$date_tc,$date_requi,$num_declaration, $code_declara, $code_imp, $date_visite,
        $agent_visit, $conformite, $date_depot_visit,$dateEnvReev,$marchandise, $date_declara, $lieu_visite, $type_visite,$nom_off_visiteur, $vav,
        $Date_cotation, $date_Fvisite, $nom_op_visite, $date_Dvisite, $infraction, $marchandise_add, $num_tc], true);
         return $req_add_inspect;
 
    } 
         static function getNumTc($num_tc) {

            global $db;
    
             $reqTc = $db->fetch('
              SELECT *
              FROM req_reev_contest WHERE num_tc=?
              ', [$num_tc], true);
          return $reqTc;
    
    }

             static function getAllTc() {

              global $db;

               $reqTc = $db->fetch('
                SELECT *
                FROM req_reev_contest 
                ', [], true);
            return $reqTc;

    }

    // Liste des tc a traite
    static function getAllTcinspection() {

      global $db;
      $vide="NULL";

       $reqTc = $db->fetch(' SELECT * FROM req_reev_contest WHERE onglet is NULL LIMIT 20', [], true);
    return $reqTc;

}

    
// Tc non apurés
    static function getnbreTcNAPTroisJours() {
      global $db;
       $jour = date ('Y-m-d');
       $ecartinf= date('Y-m-d',strtotime($jour.'-3 days'));
       $reqTc = $db->fetch("
       SELECT *
        FROM req_reev_contest WHERE SDGR_Date = ?  and (num_declaration ='' or num_declaration is null) and date_declara = '0000-00-00' ",[$ecartinf], true);
        return $reqTc;
    }

    static function getnbreTcNAPSeptJours() {
      global $db;
       $jour = date ('Y-m-d');
       $ecartinf= date('Y-m-d',strtotime($jour.'-7 days'));
       $reqTc = $db->fetch("
       SELECT *
        FROM req_reev_contest WHERE SDGR_Date = ?  and (num_declaration ='' or num_declaration is null) and date_declara = '0000-00-00' ",[$ecartinf], true);
        return $reqTc;
    }

    static function getnbreTcNAPSupSeptJours() {
      global $db;
       $jour = date ('Y-m-d');
       $ecartinf= date('Y-m-d',strtotime($jour.'-7 days'));
       $reqTc = $db->fetch("
       SELECT *
        FROM req_reev_contest WHERE SDGR_Date < ?  and (num_declaration ='' or num_declaration is null) and date_declara = '0000-00-00' ",[$ecartinf], true);
        return $reqTc;
    }

    // tc apurés sans RDV

    static function getnbreTcAPSRDVTroisJours() {
      global $db;
       $jour = date ('Y-m-d');
       $ecartinf= date('Y-m-d',strtotime($jour.'-3 days'));
       $reqTc = $db->fetch("
       SELECT *
        FROM req_reev_contest WHERE date_declara = ? and date_visite = '0000-00-00'",[$ecartinf], true);
        return $reqTc;
    }

    static function getnbreTcAPSRDVSeptJours() {
      global $db;
       $jour = date ('Y-m-d');
       $ecartinf= date('Y-m-d',strtotime($jour.'-7 days'));
       $reqTc = $db->fetch("
       SELECT *
        FROM req_reev_contest WHERE date_declara = ?  and 	date_visite = '0000-00-00' ",[$ecartinf], true);
        return $reqTc;
    }

    static function getnbreTcAPSRDVSupSeptJours() {
      global $db;
       $jour = date ('Y-m-d');
       $ecartinf= date('Y-m-d',strtotime($jour.'-7 days'));
       $reqTc = $db->fetch("
       SELECT *
        FROM req_reev_contest WHERE date_declara < ?  and date_visite = '0000-00-00' ",[$ecartinf], true);
        return $reqTc;
    }
// RDV SANS VISITE
    static function getnbreTcRDVSVTroisJours() {
      global $db;
       $jour = date ('Y-m-d');
       $ecartinf= date('Y-m-d',strtotime($jour.'-3 days'));
       $reqTc = $db->fetch("
       SELECT *
        FROM req_reev_contest WHERE date_visite = ? and date_Dvisite = '0000-00-00' and date_Fvisite = '0000-00-00'",[$ecartinf], true);
        return $reqTc;
    }

    static function getnbreTcRDVSVSeptJours() {
      global $db;
       $jour = date ('Y-m-d');
       $ecartinf= date('Y-m-d',strtotime($jour.'-7 days'));
       $reqTc = $db->fetch("
       SELECT *
        FROM req_reev_contest WHERE date_visite = ?  and 	date_Dvisite = '0000-00-00' and date_Fvisite = '0000-00-00' ",[$ecartinf], true);
        return $reqTc;
    }

    static function getnbreTcRDVSVSupSeptJours() {
      global $db;
       $jour = date ('Y-m-d');
       $ecartinf= date('Y-m-d',strtotime($jour.'-7 days'));
       $reqTc = $db->fetch("
       SELECT *
        FROM req_reev_contest WHERE date_visite < ?  and date_Dvisite = '0000-00-00' and date_Fvisite = '0000-00-00' ",[$ecartinf], true);
        return $reqTc;
    }

     ///Tc visitées sans évaluation
     static function getnbreTcVSETroisJours() {
      global $db;
       $jour = date ('Y-m-d');
       $ecartinf= date('Y-m-d',strtotime($jour.'-3 days'));
       $reqTc = $db->fetch("
       SELECT *
        FROM req_reev_contest WHERE date_envoi_reev = ? and date_reev = '0000-00-00' and fob_reeva = ''",[$ecartinf], true);
        return $reqTc;
    }

    static function getnbreTcVSESeptJours() {
      global $db;
       $jour = date ('Y-m-d');
       $ecartinf= date('Y-m-d',strtotime($jour.'-7 days'));
       $reqTc = $db->fetch("
       SELECT *
       FROM req_reev_contest WHERE date_envoi_reev = ? and date_reev = '0000-00-00' and fob_reeva = ''",[$ecartinf], true);
        return $reqTc;
    }

    static function getnbreTcVSESupSeptJours() {
      global $db;
       $jour = date ('Y-m-d');
       $ecartinf= date('Y-m-d',strtotime($jour.'-7 days'));
       $reqTc = $db->fetch("
       SELECT *
       FROM req_reev_contest WHERE date_envoi_reev < ? and date_reev = '0000-00-00' and fob_reeva = ''",[$ecartinf], true);
        return $reqTc;
    }
 ///Tc en contestation non transmis en PL

 static function getnbreTcCNTTroisJours() {
  global $db;
   $jour = date ('Y-m-d');
   $ecartinf= date('Y-m-d',strtotime($jour.'-3 days'));
   $reqTc = $db->fetch("
   SELECT *
    FROM req_reev_contest WHERE date_recep_courier = ? and date_envoi_pl_contes = '0000-00-00' and decision = ''",[$ecartinf], true);
    return $reqTc;
}

static function getnbreTcCNTSeptJours() {
  global $db;
   $jour = date ('Y-m-d');
   $ecartinf= date('Y-m-d',strtotime($jour.'-7 days'));
   $reqTc = $db->fetch("
   SELECT *
   FROM req_reev_contest WHERE date_recep_courier = ? and date_envoi_pl_contes = '0000-00-00' and decision = ''",[$ecartinf], true);
    return $reqTc;
}

static function getnbreTcCNTSupSeptJours() {
  global $db;
   $jour = date ('Y-m-d');
   $ecartinf= date('Y-m-d',strtotime($jour.'-7 days'));
   $reqTc = $db->fetch("
   SELECT *
   FROM req_reev_contest WHERE date_recep_courier < ? and date_envoi_pl_contes = '0000-00-00' and decision = ''",[$ecartinf], true);
    return $reqTc;
}

///Tc Visitées Non transmis en reevaluation
static function getnbreTcVNTRTroisJours() {
  global $db;
  $conformite = "non conforme";
   $jour = date ('Y-m-d');
   $ecartinf= date('Y-m-d',strtotime($jour.'-3 days'));
   $reqTc = $db->fetch("
   SELECT *
    FROM req_reev_contest WHERE date_Fvisite = ? and date_envoi_reev = '0000-00-00' and conformite =? ",[$ecartinf,$conformite], true);
    return $reqTc;
}

static function getnbreTcVNTRSeptJours() {
  global $db;
  $conformite = "non conforme";
   $jour = date ('Y-m-d');
   $ecartinf= date('Y-m-d',strtotime($jour.'-7 days'));
   $reqTc = $db->fetch("
   SELECT *
   FROM req_reev_contest WHERE date_Fvisite = ? and date_envoi_reev = '0000-00-00' and conformite =?",[$ecartinf,$conformite], true);
    return $reqTc;
}

static function getnbreTcVNTRSupSeptJours() {
  global $db;
  $conformite = "non conforme";
   $jour = date ('Y-m-d');
   $ecartinf= date('Y-m-d',strtotime($jour.'-7 days'));
   $reqTc = $db->fetch("
   SELECT *
   FROM req_reev_contest WHERE date_Fvisite < ? and date_envoi_reev = '0000-00-00' and conformite =?",[$ecartinf,$conformite], true);
    return $reqTc;
}

    static function getAllrecherche($attribut) {
      
         //echo $donnees; exit();
        global $db1;
        $querysql = "select COUNT(id_Tc) nbre , req_reev_contest.* from  req_reev_contest WHERE  $attribut ";
        // echo $querysql;
        // exit();
        // Prepare and execute query
        $query = $db1->prepare($querysql);
        $query->execute();
        // Fetching direct query result
        $reqTc = $query->fetchAll();
        
        return $reqTc;

    }
    
    static function Allrecherche($attribut) {
      
      //echo $donnees; exit();
     global $db1;
     $querysql = "select  req_reev_contest.* from  req_reev_contest WHERE  $attribut ";
    //  echo $querysql;
    //  exit();
     // Prepare and execute query
     $query = $db1->prepare($querysql);
     $query->execute();
     // Fetching direct query result
     $reqTc = $query->fetchAll();
     
     return $reqTc;

 }

    static function getrecotationreval($num_tc,$agentnew,$daterevalnew) {
          
      
        global $db1;
        $querysql = "UPDATE  req_reev_contest SET agent_reeva='$agentnew', date_envoi_reev='$daterevalnew' WHERE  num_tc='$num_tc' ";
        // echo $querysql;
        // exit();
        // Prepare and execute query
        $query = $db1->prepare($querysql);
        $query->execute();
        // Fetching direct query result
        $reqTc = $query->fetchAll();
        
        return $reqTc;

    }

    static function getrecotationaudit($num_tc,$agentnew,$daterevalnew) {
          
      
      global $db1;
      $querysql = "UPDATE  req_reev_contest SET agent_audit='$agentnew', date_reev='$daterevalnew' WHERE  num_tc='$num_tc' ";
      // echo $querysql;
      // exit();
      // Prepare and execute query
      $query = $db1->prepare($querysql);
      $query->execute();
      // Fetching direct query result
      $reqTc = $query->fetchAll();
      
      return $reqTc;

  }
    
    static function dossiervisite($attribut) {
      
      //echo $donnees; exit();
     global $db1;
     $querysql = "SELECT * FROM req_reev_contest WHERE  $attribut ";
    //  echo $querysql;
    //  exit();
     // Prepare and execute query
     $query = $db1->prepare($querysql);
     $query->execute();
     // Fetching direct query result
     $reqTc = $query->fetchAll();
     
     return $reqTc;

 }

 static function EnvoiPL($attribut) {
      
  //echo $donnees; exit();
 global $db1;
 $querysql = "SELECT * FROM req_reev_contest r , transmission t WHERE r.num_tc=t.NUM_TC AND t.AUDIT='2' $attribut ";
//  echo $querysql;
//  exit();
 // Prepare and execute query
 $query = $db1->prepare($querysql);
 $query->execute();
 // Fetching direct query result
 $reqTc = $query->fetchAll();
 
 return $reqTc;

}

 static function listedossier($table,$attribut) {
      
  //echo $donnees; exit();
 global $db1;
 $querysql = "SELECT * FROM  $table WHERE  $attribut ORDER BY id_Tc DESC LIMIT 50 ";
//  echo $querysql;
//  exit();
 // Prepare and execute query
 $query = $db1->prepare($querysql);
 $query->execute();
 // Fetching direct query result
 $reqTc = $query->fetchAll();
 
 return $reqTc;

}

static function nbredossier($table,$attribut) {
      
  //echo $donnees; exit();
 global $db1;
 $querysql = "SELECT * FROM  $table WHERE  $attribut ";
//  echo $querysql;
//  exit();
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

    
    static function addNewReevalu($id_Tc,$date_envoi_reev,$date_reev,$fob_reeva,$onglet,$date_envoi_pl_reev,$agent_reeva,$date_validation,$DC_prevision,$agent_audit,$infraction,$observation_reeva,$date_valid_reeva )
   {

        global $db;
       

        $req_add_reevalu= $db->fetch('UPDATE req_reev_contest SET date_envoi_reev= ?, date_reev = ?, fob_reeva = ?, onglet = ?, date_envoi_pl_reev = ?,
          agent_reeva = ?, date_validation= ?, montant_DC_prevision=?, agent_audit=? , infraction_reeva=? , observation_reeva=? , date_valid_reeva=? WHERE id_Tc = ?', [$date_envoi_reev, $date_reev, $fob_reeva, $onglet, $date_envoi_pl_reev,
           $agent_reeva,$date_validation,$DC_prevision,$agent_audit,$infraction,$observation_reeva,$date_valid_reeva, $id_Tc], true);
        return $req_add_reevalu;

    } 

    static function addNewRPL($id_Tc,$montant_dc,$date_dc,$onglet,$infraction,$date_dpod )
    {
 
         global $db;
         $id_Tc              = str_secur($id_Tc);
         $montant_dc         = str_secur($montant_dc);
         $date_dc            = str_secur($date_dc);
         $onglet             = str_secur($onglet);
         $date_dpod          = str_secur($date_dpod);
         $infraction         = str_secur($infraction);

         $req_add_reevalu= $db->fetch('UPDATE req_reev_contest SET montant_dc= ?, date_dc = ?, onglet = ? , date_dpod=?,infraction_retour = ? WHERE id_Tc = ?', [$montant_dc,$date_dc,$onglet,$date_dpod,$infraction,$id_Tc], true);
         return $req_add_reevalu;
 
    } 

     static function addNewRPL_modif($id_Tc,$montant_dc,$date_dc,$infraction,$date_dpod )
    {
 
         global $db;
         $id_Tc              = str_secur($id_Tc);
         $montant_dc         = str_secur($montant_dc);
         $date_dc            = str_secur($date_dc);
         $date_dpod          = str_secur($date_dpod);
         $infraction         = str_secur($infraction);

         $req_add_reevalu= $db->fetch('UPDATE req_reev_contest SET montant_dc= ?, date_dc = ?, date_dpod=?,infraction_retour = ? WHERE id_Tc = ?', [$montant_dc,$date_dc,$date_dpod,$infraction,$id_Tc], true);
         return $req_add_reevalu;
 
    } 

    static function addNewReevalumodif($id_Tc,$date_envoi_reev,$date_reev,$fob_reeva,$date_envoi_pl_reev,$agent_reeva,$date_validation,$DC_prevision,$agent_audit,$infraction,$observation_reeva,$date_valid_reeva )
    {
         global $db;
         $id_Tc              = str_secur($id_Tc);
         $date_envoi_reev    = str_secur($date_envoi_reev);
         $date_reev          = str_secur($date_reev);
         $fob_reeva          = str_secur($fob_reeva);
         $date_envoi_pl_reev = str_secur($date_envoi_pl_reev);
         $agent_reeva        = str_secur($agent_reeva);
         $date_validation    = str_secur($date_validation);
         $DC_prevision    = str_secur($DC_prevision);
         $agent_audit        = str_secur($agent_audit);
         $infraction        = str_secur($infraction);
        $observation_reeva        = str_secur($observation_reeva);
        $date_valid_reeva        = str_secur($date_valid_reeva);
         $req_add_reevalumodif= $db->fetch('UPDATE req_reev_contest SET date_envoi_reev= ?, date_reev = ?, fob_reeva = ?, date_envoi_pl_reev = ?,
           agent_reeva = ?, date_validation= ?, montant_DC_prevision=?, agent_audit=?, infraction_reeva=? , observation_reeva=? , date_valid_reeva=? WHERE id_Tc = ?', [$date_envoi_reev, $date_reev, $fob_reeva, $date_envoi_pl_reev,
            $agent_reeva, $date_validation,$DC_prevision,$agent_audit,$infraction,$observation_reeva,$date_valid_reeva, $id_Tc], true);
         return $req_add_reevalumodif;
 
    } 

    
    static function addNewCourier($id_Tc, $date_recep_courier, $num_courier, $agent_recption_courier, $onglet)
    {
    
            global $db;
            $id_Tc = str_secur($id_Tc);
            $date_recep_courier  = str_secur($date_recep_courier);
            $num_courier  = str_secur($num_courier);
            $agent_recption_courier = str_secur($agent_recption_courier);
           
    
            $req_add_reevalu= $db->fetch('UPDATE req_reev_contest SET date_recep_courier = ?, num_courier = ?, agent_recption_courier = ?,onglet = ?
              WHERE id_Tc = ?', [$date_recep_courier, $num_courier,$agent_recption_courier,3, $id_Tc], true);
            return $req_add_reevalu;
    
    } 

    static function addNewCouriermodif($id_Tc, $date_recep_courier, $num_courier, $agent_recption_courier)
    {
    
            global $db;
            $id_Tc = str_secur($id_Tc);
            $date_recep_courier  = str_secur($date_recep_courier);
            $num_courier  = str_secur($num_courier);
            $agent_recption_courier = str_secur($agent_recption_courier); 
            $req_add_reevalu= $db->fetch('UPDATE req_reev_contest SET date_recep_courier = ?, num_courier = ?, agent_recption_courier = ? WHERE id_Tc = ?', 
            [$date_recep_courier, $num_courier,$agent_recption_courier,$id_Tc], true);
            return $req_add_reevalu;
    
    } 

    static function addNewContest($id_Tc,  $date_traite_contest, $fob_apres_contest, $decision, $Motif_contest, $onglet, $date_envoi_pl_contes, 
    $agent_contest,$adresse_mail,$date_recep_recours,$dc_prevision,$date_valid_contest,$Observation_contest)
    {
    
            global $db;
            $id_Tc = str_secur($id_Tc); 
            $date_traite_contest  = str_secur($date_traite_contest);
            $fob_apres_contest = str_secur($fob_apres_contest);
            $decision  = str_secur($decision);
            $Motif_contest = str_secur($Motif_contest);
            $onglet = 4;
            $date_envoi_pl_contes = str_secur($date_envoi_pl_contes);
            $agent_contest = str_secur($agent_contest);
            $adresse_mail = str_secur($adresse_mail);
            $date_recep_recours = str_secur($date_recep_recours);
            $date_valid_contest = str_secur($date_valid_contest);
            $Observation_contest = str_secur($Observation_contest);
 
            $req_add_contest= $db->fetch("UPDATE  req_reev_contest SET  date_traite_contest= ?,fob_apres_contest=?,decision = ?, Motif_contest = ?,
            onglet = ?, date_envoi_pl_contes = ? ,agent_contest = ?, adresse_mail = ?, date_recep_recours = ?, DC_previsionnel=?,date_valid_contest = ?,observation_contest=? WHERE id_Tc = ?", 
            [ $date_traite_contest, $fob_apres_contest, $decision, $Motif_contest,$onglet,$date_envoi_pl_contes,$agent_contest,$adresse_mail,$date_recep_recours,$dc_prevision,$date_valid_contest,$Observation_contest, $id_Tc], true);
            return $req_add_contest;

            // $req_add_contest= $db->fetch("UPDATE  req_reev_contest SET date_traite_contest= ?, fob_apres_contest = ?, decision = ?,
            // Motif_contest = ?, onglet = ?, date_envoi_pl_contes = ?,agent_contest = ?, adresse_mail = ?, date_recep_recours = ?, DC_previsionnel=?, date_valid_contest = ?, observation_contest=?
            //   WHERE id_Tc = ?", [ $date_traite_contest, $fob_apres_contest,$decision, $Motif_contest,$onglet,$date_envoi_pl_contes,$agent_contest,$adresse_mail,$date_recep_recours,$dc_prevision,$date_valid_contest,$Observation_contest, $id_Tc], true);
            // return $req_add_contest;
            
    } 

    static function addNewContestmodif($id_Tc,  $date_traite_contest, $fob_apres_contest, $decision, $Motif_contest, $date_envoi_pl_contes, $agent_contest,$date_recep_recours,$dc_prevision)
    {
    
            global $db;
            $id_Tc = str_secur($id_Tc); 
            $date_traite_contest  = str_secur($date_traite_contest);
            $fob_apres_contest = str_secur($fob_apres_contest);
            $decision  = str_secur($decision);
            $Motif_contest = str_secur($Motif_contest);
            
            $date_envoi_pl_contes = str_secur($date_envoi_pl_contes);
            $agent_contest = str_secur($agent_contest);
            $date_recep_recours = str_secur($date_recep_recours);

           // echo $id_Tc .'//'.$date_traite_contest.'//'.$fob_apres_contest.'//'.$decision.'//'.$Motif_contest.'//'.$date_envoi_pl_contes.'//'.$agent_contest.'//'.$date_recep_recours;
            //exit();
 
            $req_add_contest= $db->fetch('UPDATE  req_reev_contest SET date_traite_contest= ?,fob_apres_contest = ?,
             decision = ?,Motif_contest = ?,date_envoi_pl_contes = ?,agent_contest = ?,date_recep_recours = ? , DC_previsionnel=?
              WHERE id_Tc = ?', [ $date_traite_contest, $fob_apres_contest,$decision, $Motif_contest,$date_envoi_pl_contes,$agent_contest,$date_recep_recours,$dc_prevision, $id_Tc], true);
            return $req_add_contest;
            
    } 

        static function getnumerotc($id_Tc) 
    {

        global $db;

         $reqDetc= $db->fetch('SELECT * FROM req_reev_contest WHERE num_tc = ?', [$id_Tc], true);
        return $reqDetc;
    }

    static function getAlltcDate($date_debut,$date_fin) {

        global $db;
        $date_debut  = str_secur($date_debut);
        $date_fin  = str_secur($date_fin);
      
         $reqtc = $db->fetch('SELECT *
          FROM req_reev_contest WHERE date_tc between ? and ?', [$date_debut, $date_fin], true);
      return $reqtc;
      //echo $reqtc;
      //echo $date_debut;
      //exit();

    }
   

    static function addFicheInspection($num_tc,$date_declara,$date_visite,$agent_visit,$date_depot_visit,$onglet,$lieu_visite,$type_visite,$Date_cotation,$date_Dvisite,$date_Fvisite,$agent_pl )
    {
 
         global $db;
        
         
         $req_add_inspect= $db->fetch('UPDATE req_reev_contest SET date_declara=?, date_visite=?,agent_visit= ?, date_depot_visit = ?, onglet = ?, lieu_visite = ?, type_visite = ?, date_cotation = ?, date_Dvisite = ?,date_Fvisite=?, nom_agent_PL=? WHERE num_tc = ?', [$date_declara,$date_visite,$agent_visit,$date_depot_visit,$onglet,$lieu_visite,$type_visite,$Date_cotation,$date_Dvisite,$date_Fvisite,$agent_pl,$num_tc], true);
         return $req_add_inspect;
 
     } 

     static function addConformite($num_tc,$conformite,$marchandise)
     {
  
          global $db;
          $onglet=2;
         
          
          $req_add_inspect= $db->fetch('UPDATE req_reev_contest SET conformite=?, onglet=?,marchandise_add= ? WHERE num_tc = ?', [$conformite,$onglet,$marchandise,$num_tc], true);
          return $req_add_inspect;
  
      } 
      static function addretour($num_tc,$onglet)
      {
   
           global $db;
                     
           $req_add_inspect= $db->fetch('UPDATE req_reev_contest SET  onglet=? WHERE num_tc = ?', [$onglet,$num_tc], true);
           return $req_add_inspect;
   
       } 
      static function addConformite_sd($num_tc,$conformite,$marchandise)
     {
  
          global $db;
          $onglet=100;
         
          
          $req_add_inspect= $db->fetch('UPDATE req_reev_contest SET conformite=?, onglet=?,marchandise_add= ? WHERE num_tc = ?', [$conformite,$onglet,$marchandise,$num_tc], true);
          return $req_add_inspect;
  
      }

      static function addNonConformite_sd($num_tc,$conformite,$marchandise)
      {
   
           global $db;
           $onglet=9;
          
           
           $req_add_inspect= $db->fetch('UPDATE req_reev_contest SET conformite=?, onglet=?,marchandise_add= ? WHERE num_tc = ?', [$conformite,$onglet,$marchandise,$num_tc], true);
           return $req_add_inspect;
   
       }

       static function addNonConformite_ok_sd($num_tc,$conformite,$marchandise)
       {
    
            global $db;
            $onglet=100;
           
            
            $req_add_inspect= $db->fetch('UPDATE req_reev_contest SET conformite=?, onglet=?,marchandise_add= ? WHERE num_tc = ?', [$conformite,$onglet,$marchandise,$num_tc], true);
            return $req_add_inspect;
    
        }

      

      static function cotationreeval($num_tc,$reeval)
     {
  
          global $db;
          
          $req_add_inspect= $db->fetch('UPDATE req_reev_contest SET	agent_reeva =?  WHERE num_tc = ?', [$reeval,$num_tc], true);
          return $req_add_inspect;
  
      } 
   
      static function cotationreevalaudit($num_tc,$reeval)
      {
   
           global $db;
           
           $req_add_inspect= $db->fetch('UPDATE req_reev_contest SET	agent_audit =?  WHERE num_tc = ?', [$reeval,$num_tc], true);
           return $req_add_inspect;
   
       } 
    

      static function lematricule($champ,$tc)
      {
   

           global $db1;
         $querysql="SELECT $champ FROM req_reev_contest  WHERE num_tc ='".$tc."' ";
         //echo $querysql;
         // exit();
         $query = $db1->prepare($querysql);
         $query->execute();
         // Fetching direct query result
         $reqTc = $query->fetchAll();
         
         return $reqTc;
   
       } 









}
?>