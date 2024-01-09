<?php

class article
{
    public $ID;
    public $NUM_TT;
    public $DATE_TC;
    public $NUM_DECLARATION;
    public $DATE_DECLARATION;
    public $CODE_IMPORTATEUR;
    public $CODE_DECLARANT;
    public $FDI;
    public $DATE_FDI;
    public $MAN_CRMS;
    public $NUMERO_ARTICLE;
    public $SH_TROUVE;
    public $LIBELLE_COM;
    public $ORIGINE;
    public $UNITE_TROUVE;
    public $QTE_TROUVE;
    public $FOB_TROUVE_CFA;
    public $ADD_CODE_SH;
    public $ADD_ORIGINE;
    public $ADD_QUANTITE;
    public $ADD_UNITE;
    public $ADD_FOB_UNI;
    public $ADD_FOB_TOTAL;
    public $ADD_PRD_MRD;
    public $STATUT;
    public $DATE_EDIT;
    public $AGENT;
    public $DC_PREVISIONNEL;
    

    function __construct($id) {

            global $db;

            $id = str_secur($id);

            $reqSelPays = $db->fetch('SELECT * FROM article WHERE ID = ?', [$id], false);
            $datareqSelPays = $reqSelPays;

                $this->ID = $id;
                $this->NUM_TT= $id['NUM_TT'];
                $this->DATE_TC= $datareqSelPays['DATE_TC'];
                $this->NUM_DECLARATION= $datareqSelPays['NUM_DECLARATION'];
                $this->DATE_DECLARATION= $datareqSelPays['DATE_DECLARATION'];
                $this->CODE_IMPORTATEUR= $datareqSelPays['CODE_IMPORTATEUR'];
                $this->CODE_DECLARANT= $datareqSelPays['CODE_DECLARANT'];
                $this->FDI= $datareqSelPays['FDI'];
                $this->DATE_FDI= $datareqSelPays['DATE_FDI'];
                $this->MAN_CRMS= $datareqSelPays['MAN_CRMS'];
                $this->NUMERO_ARTICLE= $datareqSelPays['NUMERO_ARTICLE'];
                $this->SH_TROUVE= $datareqSelPays['SH_TROUVE'];
                $this->LIBELLE_COM= $datareqSelPays['LIBELLE_COM'];
                $this->ORIGINE= $datareqSelPays['ORIGINE'];
                $this->UNITE_TROUVE= $datareqSelPays['UNITE_TROUVE'];
                $this->QTE_TROUVE= $datareqSelPays['QTE_TROUVE'];
                $this->FOB_TROUVE_CFA= $datareqSelPays['FOB_TROUVE_CFA'];
                $this->ADD_CODE_SH= $datareqSelPays['ADD_CODE_SH'];
                $this->ADD_ORIGINE= $datareqSelPays['ADD_ORIGINE'];
                $this->ADD_QUANTITE= $datareqSelPays['ADD_QUANTITE'];
                $this->ADD_UNITE= $datareqSelPays['ADD_UNITE'];
                $this->ADD_FOB_UNI= $datareqSelPays['ADD_FOB_UNI'];
                $this->ADD_FOB_TOTAL= $datareqSelPays['ADD_FOB_TOTAL'];
                $this->ADD_PRD_MRD= $datareqSelPays['ADD_PRD_MRD'];
                $this->STATUT= $datareqSelPays['STATUT'];
                $this->DATE_EDIT= $datareqSelPays['DATE_EDIT'];
                $this->AGENT= $datareqSelPays['AGENT'];
                $this->DC_PREVISIONNEL= $datareqSelPays['DC_PREVISIONNEL'];


    }


//Liste de tous les users
static function getAllService($service) {

    global $db;

    $requtilisateur = $db->fetch('SELECT * FROM  agent WHERE SERVICE_AG=? ORDER BY NOM_AG ASC ', [$service], true);
    return $requtilisateur;

}


//Liste de tous les users
static function getUnique_tc($tc) {

    global $db;

    $requtilisateur = $db->fetch('SELECT distinct * FROM  article WHERE NUM_TT=? ORDER BY NUM_TT ASC ', [$tc], true);
    return $requtilisateur;

}

static function update_tc_trouve($tc) {

  global $db;

  $requtilisateur = $db->fetch('SELECT distinct * FROM  article WHERE NUM_TT=? AND STATUT=? ORDER BY NUM_TT ASC ', [$tc,1], true);
  return $requtilisateur;

}

static function update_tc_nontrouve($tc) {

  global $db;

  $requtilisateur = $db->fetch('SELECT distinct * FROM  article WHERE NUM_TT=? AND STATUT=? ORDER BY NUM_TT ASC ', [$tc,0], true);
  return $requtilisateur;

}


    static function addInspection($sh,$origine,$quantite,$unite,$valeur,$statut)
     {
  
          global $db;
          if($statut>0){ $statut=1;} else{$statut=0;}
  
          $req_add_inspect= $db->fetch('UPDATE article SET ADD_CODE_SH=?, ADD_ORIGINE=?, ADD_QUANTITE = ?, ADD_UNITE = ?, STATUT = ? 
            WHERE ID_ART = ?', [$sh,$origine,$quantite,$unite,$statut,$valeur], true);
          return $req_add_inspect;
     }

     static function addInspectionUpdate($sh,$origine,$quantite,$unite,$valeur,$statut)
     {
  //echo $sh,$origine,$quantite,$unite,$valeur; exit();
          global $db;
          if($statut>0){ $statut=1;} else{$statut=0;}
  
          $req_add_inspect= $db->fetch('UPDATE article SET ADD_CODE_SH=?, ADD_ORIGINE=?, ADD_QUANTITE = ?, ADD_UNITE = ?, STATUT = ? 
            WHERE ID_ART = ?', [$sh,$origine,$quantite,$unite,$statut,$valeur], true);
          return $req_add_inspect;
     }

     static function addAgReeval($fobunit,$fobtotal,$mrd,$dc,$valeur,$evidence)
     {
  
          global $db;
          if($mrd==''){ $mrd="PRD"; }
  
          $req_add_inspect= $db->fetch('UPDATE article SET ADD_FOB_UNI=?, ADD_FOB_TOTAL=?, ADD_PRD_MRD = ?, DC_PREVISIONNEL=?,EVIDENCE=? WHERE ID_ART = ?', [$fobunit,$fobtotal,$mrd,$dc,$evidence,$valeur], true);
          return $req_add_inspect;
     }





      static function ficheUniTc($Tc) {

        global $db;
        $ok=1;
  
         $reqDetc= $db->fetch('SELECT distinct * FROM article WHERE NUM_TT = ? AND STATUT=?', [$Tc,$ok], true);
      return $reqDetc;
  
    }

    static function ficheUniTcNON($Tc) {

        global $db;
        $ok=0;
  
         $reqDetc= $db->fetch('SELECT distinct * FROM article WHERE NUM_TT = ? AND STATUT=?', [$Tc,$ok], true);
      return $reqDetc;
  
    }
  


}