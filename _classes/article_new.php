<?php

class article_new
{
    public $ID;
    public $ID_ART_TR;
    public $NUM_TT;
    public $TR_ARTICLE ;
    public $TR_CODE_SH;
    public $TR_ORIGINE;
    public $TR_QUANTITE;
    public $TR_UNITE;
    public $TR_FOB_UNI;
    public $TR_FOB_TOTAL;
    public $TR_PRD_MRD;
    public $STATUT;
    public $DATE_EDIT;
    public $DC_PREVISIONNEL;
    

    function __construct($id) {

            global $db;

            $id = str_secur($id);

            $reqSelPays = $db->fetch('SELECT * FROM article_new WHERE ID = ?', [$id], false);
            $datareqSelPays = $reqSelPays;

                $this->ID = $id;
                $this->ID_ART_TR = $id['ID_ART_TR'];
                $this->NUM_TT= $id['NUM_TT'];
                $this->TR_ARTICLE= $datareqSelPays['TR_ARTICLE'];
                $this->TR_CODE_SH= $datareqSelPays['TR_CODE_SH'];
                $this->TR_ORIGINE= $datareqSelPays['TR_ORIGINE'];
                $this->TR_QUANTITE= $datareqSelPays['TR_QUANTITE'];
                $this->TR_UNITE= $datareqSelPays['TR_UNITE'];
                $this->TR_FOB_UNI= $datareqSelPays['TR_FOB_UNI'];
                $this->TR_FOB_TOTAL= $datareqSelPays['TR_FOB_TOTAL'];
                $this->TR_PRD_MRD= $datareqSelPays['TR_PRD_MRD'];
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

    $requtilisateur = $db->fetch('SELECT * FROM  article_new WHERE NUM_TT=? ORDER BY NUM_TT ASC ', [$tc], true);
    return $requtilisateur;

}


static function addInspection($sh,$origine,$quantite,$unite,$valeur)
     {
  
          global $db;
  
          $req_add_inspect= $db->fetch('UPDATE article SET ADD_CODE_SH=?, ADD_ORIGINE=?, ADD_QUANTITE = ?, ADD_UNITE = ?, STATUT = ?, 
            WHERE ID_ART = ?', [$sh,$origine,$quantite,$unite,$valeur], true);
          return $req_add_inspect;
     }

     static function addArticle($num_tt,$article,$sh,$origine,$quantite,$unite)
     {
  
          global $db;
  
          $req_add_inspect= $db->fetch('INSERT INTO article_new (NUM_TT,TR_ARTICLE,TR_CODE_SH, TR_ORIGINE, TR_QUANTITE,TR_UNITE) VALUES (?,?,?,?,?,?)', [$num_tt,$article,$sh,$origine,$quantite,$unite], true);
          return $req_add_inspect;
     }
     static function addArticleReeval($num_tt,$article,$sh,$origine,$quantite,$unite,$fobunit,$fobtotal,$mrd,$dc,$evidence)
     {
  
          global $db;
  
          $req_add_inspect= $db->fetch('INSERT INTO article_new (NUM_TT,TR_ARTICLE,TR_CODE_SH, TR_ORIGINE, TR_QUANTITE,TR_UNITE,TR_FOB_UNI ,TR_FOB_TOTAL ,TR_PRD_MRD ,DC_PREVISIONNEL ,EVIDENCE ) VALUES (?,?,?,?,?,?,?,?,?,?,?)', [$num_tt,$article,$sh,$origine,$quantite,$unite,$fobunit,$fobtotal,$mrd,$dc,$evidence], true);
          return $req_add_inspect;
     }
     static function addAgReeval($fobunit,$fobtotal,$mrd,$dc,$valeur,$evidence)
     {
  
          global $db;
          if($mrd==''){ $mrd="PRD"; }
  
          $req_add_inspect= $db->fetch('UPDATE article_new SET TR_FOB_UNI=?, TR_FOB_TOTAL=?, TR_PRD_MRD = ?, DC_PREVISIONNEL=?, EVIDENCE=? WHERE ID_ART_TR = ?', [$fobunit,$fobtotal,$mrd,$dc,$evidence,$valeur], true);
          return $req_add_inspect;
     }

     static function articletrouve($Tc) {

          global $db;
      
          $reqDetc= $db->fetch('SELECT * FROM article_new WHERE NUM_TT = ?', [$Tc], true);
        return $reqDetc;
      
        }

        static function del_article($Tc) {

          global $db;
      
          $reqDetc= $db->fetch('DELETE FROM article_new WHERE NUM_TT = ?', [$Tc], true);
        return $reqDetc;
      
        }


}